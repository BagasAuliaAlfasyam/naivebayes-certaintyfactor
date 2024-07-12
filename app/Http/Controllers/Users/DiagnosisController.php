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
use Illuminate\Support\Facades\Log;

class DiagnosisController extends Controller
{
    public function index()
    {
        $symptoms = Symptom::all();
        return view('users.diagnosis.index', compact('symptoms'));
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

    private function getCFCombine($diseaseId, $temporaryFinals)
    {
        $cfCombine = 0;
        $uniqueSymptomIds = [];

        $filteredTemporaries = $temporaryFinals->where('disease_id', $diseaseId);

        foreach ($filteredTemporaries as $temp) {
            if (!in_array($temp['symptom_id'], $uniqueSymptomIds)) {
                $uniqueSymptomIds[] = $temp['symptom_id'];
                $cfCombine += $temp['cf_gejala'] * (1 - $cfCombine);
                Log::info("CF Combine untuk Disease ID $diseaseId: $cfCombine");
            } else {
                Log::warning('Duplikasi ditemukan untuk symptom_id ' . $temp['symptom_id'] . ' pada Disease ID ' . $diseaseId);
            }
        }

        // Simpan cfCombine ke tabel TemporaryFinal
        TemporaryFinal::where('disease_id', $diseaseId)->update(['cf_combine' => $cfCombine]);

        return $cfCombine;
    }


    public function process(Request $request)
    {
        Log::info('Memulai proses diagnosa');

        Temporary::truncate();
        TemporaryFinal::truncate();

        $request->validate([
            'symptoms' => 'required|array',
            'symptoms.*' => 'exists:symptoms,id',
            'cf_user' => 'required|array',
        ]);

        $symptoms = $request->symptoms; // Gejala yang dipilih
        $cfUserValues = $request->cf_user; // Nilai CF user yang dipilih

        Log::info('Gejala yang dipilih: ' . json_encode($symptoms));
        Log::info('Nilai CF User: ' . json_encode($cfUserValues));

        // Menyimpan gejala yang dipilih beserta cf_user ke tabel Temporary
        // Menyimpan gejala yang dipilih ke tabel Temporary bersama dengan cf_user
        // Process symptoms and cf_user
        foreach ($request->input('symptoms') as $symptomId) {
            $cfUser = $request->input('cf_user.' . $symptomId, 0); // Default to 0 if not found
            Temporary::create([
                'symptom_id' => $symptomId,
                'cf_user' => $cfUser,
            ]);
        }

        // Mengambil data dari tabel rules dengan join tabel temporaries
        // Mengambil data dari tabel rules dengan join tabel temporaries hanya untuk gejala yang dipilih
        $temporaryFinals = Rule::join('temporaries', function ($join) {
            $join->on('rules.symptom_id', '=', 'temporaries.symptom_id')->whereIn('temporaries.symptom_id', request()->input('symptoms'));
        })
            ->select('rules.disease_id', 'rules.symptom_id', 'rules.probability', 'rules.cf_pakar', 'temporaries.cf_user')
            ->orderBy('rules.symptom_id', 'asc')
            ->get()
            ->map(function ($qtf) {
                $cfGejala = $qtf->cf_pakar * $qtf->cf_user;

                Log::info('Menggabungkan CF untuk symptom_id ' . $qtf->symptom_id);
                Log::info('CF Pakar: ' . $qtf->cf_pakar . ', CF User: ' . $qtf->cf_user . ', CF Gejala: ' . $cfGejala);

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

        // Hitung probabilitas dan CF combine hanya untuk penyakit yang relevan
        foreach ($temporaryFinals->groupBy('disease_id') as $diseaseId => $filteredTemporaries) {
            $probabilities[$diseaseId] = $this->getProbDisease($diseaseId);
            Log::info("Menghitung CF Combine untuk Disease ID: $diseaseId");
            $cfCombines[$diseaseId] = $this->getCFCombine($diseaseId, $filteredTemporaries);
        }
        // dd($cfCombines);

        $totalProbability = array_sum($probabilities);

        // Normalisasi probabilitas
        foreach ($probabilities as $key => $value) {
            $probabilities[$key] = $value / $totalProbability;
            $this->resultProbDisease($key, $probabilities[$key]);
        }

        // Ambil diagnosis maksimum berdasarkan hasil TemporaryFinal
        $diagnosisMax = TemporaryFinal::join('diseases', 'temporary_finals.disease_id', '=', 'diseases.id')
        ->select([DB::raw('MAX(temporary_finals.id) as id'), DB::raw('MAX(results) as results'), 'diseases.*', DB::raw('MAX(cf_combine) as cf_percentage')])
        ->groupBy('diseases.id')
        ->orderByDesc('cf_percentage')
        ->first();

        // Simpan hasil diagnosa ke dalam konsultasi
        if ($diagnosisMax) {
            Consultation::create([
                'user_id' => Auth::user()->id,
                'disease' => $diagnosisMax->name,
                'score' => floor($diagnosisMax->results * 100),
                'information' => $diagnosisMax->information,
                'suggestion' => $diagnosisMax->suggestion,
                'cf_percentage' => floor($diagnosisMax->cf_percentage * 100),
            ]);
        }

        return redirect('/users/diagnosis/results')->with('toast_success', Auth::user()->name . ' Berhasil Mendiagnosa');
    }

    public function results()
    {
        // Ambil 10 diagnosis teratas
        $diagnosis = TemporaryFinal::join('diseases', 'temporary_finals.disease_id', '=', 'diseases.id')->select('temporary_finals.disease_id', 'temporary_finals.results', 'diseases.*', 'temporary_finals.cf_combine')->orderByDesc('temporary_finals.results')->limit(10)->get();
        // dd($diagnosis);
        // Ambil diagnosis maksimum untuk tampilan detail
        $diagnosisMax = Disease::with('imageDiseases')
            ->join('temporary_finals', 'diseases.id', '=', 'temporary_finals.disease_id')
            ->select(['diseases.id', 'diseases.name', 'diseases.information', 'diseases.suggestion', 'temporary_finals.created_at', DB::raw('MAX(temporary_finals.results) AS results'), DB::raw('MAX(temporary_finals.cf_combine) AS cf_combine')])
            ->groupBy(['diseases.id', 'diseases.name', 'diseases.information', 'diseases.suggestion', 'temporary_finals.created_at'])
            ->orderByDesc('results')
            ->first();

            // dd($diagnosisMax);
        return view('users.diagnosis.results', compact('diagnosis', 'diagnosisMax'));
    }
}
