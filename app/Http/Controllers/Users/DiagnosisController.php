<?php
namespace App\Http\Controllers\Users;

use App\Models\Consultation;
use App\Models\Disease;
use App\Http\Controllers\Controller;
use App\Models\Rule;
use App\Models\Symptom;
use App\Models\Temporary;
use App\Models\TemporaryFinal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DiagnosisController extends Controller
{
    public function index()
    {
        $symtoms = Symptom::all();
        return view('users.diagnosis.index', compact('symtoms'));
    }

    private function getProbDisease($diseaseId)
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', $diseaseId)->get() as $prob) {
            $total *= $prob->probability;
        }
        foreach (Disease::where('id', $diseaseId)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    private function resultProbDisease($diseaseId, $probability)
    {
        TemporaryFinal::where('disease_id', $diseaseId)->update(['results' => $probability]);
    }

    public function proccess(Request $request)
    {
        Temporary::query()->truncate();
        TemporaryFinal::query()->truncate();

        $symptoms = $request->symptoms; // Gejala yang dipilih
        $cfUserValues = $request->cf_user; // Nilai CF user yang dipilih

        // Menyimpan gejala yang dipilih ke tabel Temporary
        foreach ($symptoms as $symptomId) {
            Temporary::create(['symptom_id' => $symptomId]);
        }

        // Mengambil data dari tabel rules dengan join tabel temporaries
        $temporaryFinals = Rule::join('temporaries', 'rules.symptom_id', '=', 'temporaries.symptom_id')
            ->select('rules.disease_id', 'rules.symptom_id', 'rules.probability', 'rules.cf_pakar')
            ->orderBy('rules.symptom_id', 'asc')
            ->get()
            ->map(function ($qtf) use ($cfUserValues) {
                $cfUser = $cfUserValues[$qtf->symptom_id] ?? 0;
                $cfGejala = min($cfUser, $qtf->cf_pakar);

                return [
                    'disease_id' => $qtf->disease_id,
                    'symptom_id' => $qtf->symptom_id,
                    'probability' => $qtf->probability,
                    'cf_gejala' => $cfGejala,
                    'results' => 0,
                ];
            });

        TemporaryFinal::insert($temporaryFinals->toArray());

        $probabilities = [];
        $cfCombines = [];
        for ($i = 1; $i <= 10; $i++) {
            $probabilities[$i] = $this->getProbDisease($i);
            $cfCombines[$i] = $this->getCFCombine($i, $temporaryFinals);
        }

        $totalProbability = array_sum($probabilities);

        foreach ($probabilities as $key => $value) {
            $probabilities[$key] = $value / $totalProbability;
            $this->resultProbDisease($key, $probabilities[$key]);
        }

        $diagnosisMax = TemporaryFinal::join(
            'diseases',
            'temporary_finals.disease_id', '=', 'diseases.id')
            ->select([
                DB::raw('MAX(temporary_finals.id) as id'),
                DB::raw('MAX(results) as results'),
                'diseases.*',
                DB::raw('MAX(cf_gejala) as cf_percentage')])
            ->groupBy('diseases.id')
            ->orderByDesc('results')
            ->limit(1)
            ->get();

        foreach ($diagnosisMax as $diagnosis) {
            Consultation::create([
                'user_id' => Auth::user()->id,
                'disease' => $diagnosis->name,
                'score' => floor($diagnosis->results * 100),
                'information' => $diagnosis->information,
                'suggestion' => $diagnosis->suggestion,
                'cf_percentage' => floor($diagnosis->cf_percentage * 100),
            ]);
        }

        return redirect('/users/diagnosis/results')->with('toast_success', Auth::user()->name . ' Berhasil Mendiagnosa');
    }

    private function getCFCombine($diseaseId, $temporaryFinals)
    {
        $cfCombine = 0;
        $temporaryFinals->where('disease_id', $diseaseId)->each(function ($temp) use (&$cfCombine) {
            $cfCombine += $temp['cf_gejala'] * (1 - $cfCombine);
        });
        return $cfCombine;
    }

    public function results()
    {
        $diagnosis = DB::table('temporary_finals')
        ->join('diseases', 'temporary_finals.disease_id', '=', 'diseases.id')
        ->select('temporary_finals.disease_id', 'temporary_finals.results', 'diseases.*', 'temporary_finals.cf_gejala')
        ->orderByDesc('temporary_finals.results')
        ->limit(10)
        ->get();

        $diagnosisMax = Disease::with('imageDiseases')
    ->join('temporary_finals', 'diseases.id', '=', 'temporary_finals.disease_id')
    ->select([
        'diseases.id',
        'diseases.name',
        'diseases.information',
        'diseases.suggestion',
        'temporary_finals.created_at',
        DB::raw('MAX(temporary_finals.results) AS results'),
        DB::raw('MAX(temporary_finals.cf_gejala) AS cf_gejala')
    ])
    ->groupBy([
        'diseases.id',
        'diseases.name',
        'diseases.information',
        'diseases.suggestion',
        'temporary_finals.created_at'
    ])
    ->orderByDesc('results')
    ->first();

        return view('users.diagnosis.results', compact('diagnosis', 'diagnosisMax'));
    }
}
