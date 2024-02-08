<?php

namespace App\Http\Controllers\Users;

use App\Models\Consultation;
use App\Models\Disease;
use App\Http\Controllers\Controller;
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

    public function getProbTauraSyndromeVirus()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 1)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 1)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbCovertMortalityNodavirus()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 2)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 2)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbYellowHeadVirus()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 3)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 3)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbWhiteFacesDisease()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 4)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 4)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbWhiteSpotSyndromeVirus()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 5)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 5)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbInvectiousMyonecrosisVirus()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 6)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 6)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbInvectiousHepatopancreaticandHaemotopoieticNecrosisVirus()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 7)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 7)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbSindromPenyakitSulfatAsam()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 8)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 8)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbChronicSoftshellSyndromeatauSoftshelling()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 9)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 9)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    public function getProbBodyCramp()
    {
        $total = 1;
        foreach (TemporaryFinal::where('disease_id', 10)->get() as $probKidney) {
            $total = $total * $probKidney->probability;
        }

        foreach (Disease::where('id', 10)->get() as $data) {
            $result = $total * $data->probability;
        }
        return $result;
    }

    // hasil perhitungan probabilitas
    public function resultProbTauraSyndromeVirus($tauraSyndromeVirus)
    {
        TemporaryFinal::where('disease_id', 1)->update(['results' => $tauraSyndromeVirus]);
    }

    public function resultProbCovertMortalityNodavirus($covertMortalityNodavirus)
    {
        TemporaryFinal::where('disease_id', 2)->update(['results' => $covertMortalityNodavirus]);
    }

    public function resultProbYellowHeadVirus($yellowHeadVirus)
    {
        TemporaryFinal::where('disease_id', 3)->update(['results' => $yellowHeadVirus]);
    }

    public function resultProbWhiteFacesDisease($whiteFacesDisease)
    {
        TemporaryFinal::where('disease_id', 4)->update(['results' => $whiteFacesDisease]);
    }

    public function resultProbWhiteSpotSyndromeVirus($whiteSpotSyndromeVirus)
    {
        TemporaryFinal::where('disease_id', 5)->update(['results' => $whiteSpotSyndromeVirus]);
    }

    public function resultProbInvectiousMyonecrosisVirus($invectiousMyonecrosisVirus)
    {
        TemporaryFinal::where('disease_id', 6)->update(['results' => $invectiousMyonecrosisVirus]);
    }

    public function resultProbInvectiousHepatopancreaticandHaemotopoieticNecrosisVirus($invectiousHepatopancreaticandHaemotopoieticNecrosisVirus)
    {
        TemporaryFinal::where('disease_id', 7)->update(['results' => $invectiousHepatopancreaticandHaemotopoieticNecrosisVirus]);
    }

    public function resultProbSindromPenyakitSulfatAsam($sindromPenyakitSulfatAsam)
    {
        TemporaryFinal::where('disease_id', 8)->update(['results' => $sindromPenyakitSulfatAsam]);
    }

    public function resultProbChronicSoftshellSyndromeatauSoftshelling($chronicSoftshellSyndromeatauSoftshelling)
    {
        TemporaryFinal::where('disease_id', 9)->update(['results' => $chronicSoftshellSyndromeatauSoftshelling]);
    }

    public function resultProbBodyCramp($bodyCramp)
    {
        TemporaryFinal::where('disease_id', 10)->update(['results' => $bodyCramp]);
    }
    // END:: hasil perhitungan probabilitas

    public function proccess(Request $request)
    {
        Temporary::query()->truncate();
        TemporaryFinal::query()->truncate();

        foreach ($request->symptom as $symptoms) {
            Temporary::create(['symptom_id' => $symptoms]);
        }

        $queryTemporaryFinal = DB::table('rules')
            ->join('temporaries', 'rules.symptom_id', '=', 'temporaries.symptom_id')
            ->select('rules.disease_id', 'rules.symptom_id', 'rules.probability')
            ->orderBy('rules.symptom_id', 'asc')
            ->get();

        foreach ($queryTemporaryFinal as $qtf) {
            DB::table('temporary_finals')->insert([
                'disease_id' => $qtf->disease_id,
                'symptom_id' => $qtf->symptom_id,
                'probability' => $qtf->probability,
                'results' => 0,
            ]);
        }

        $probTauraSyndromeVirus = $this->getProbTauraSyndromeVirus();
        $probCovertMortalityNodavirus = $this->getProbCovertMortalityNodavirus();
        $probYellowHeadVirus = $this->getProbYellowHeadVirus();
        $probWhiteFacesDisease = $this->getProbWhiteFacesDisease();
        $probWhiteSpotSyndromeVirus = $this->getProbWhiteSpotSyndromeVirus();
        $probInvectiousMyonecrosisVirus = $this->getProbInvectiousMyonecrosisVirus();
        $probInvectiousHepatopancreaticandHaemotopoieticNecrosisVirus = $this->getProbInvectiousHepatopancreaticandHaemotopoieticNecrosisVirus();
        $probSindromPenyakitSulfatAsam = $this->getProbSindromPenyakitSulfatAsam();
        $probChronicSoftshellSyndromeatauSoftshelling = $this->getProbChronicSoftshellSyndromeatauSoftshelling();
        $probBodyCramp = $this->getProbBodyCramp();

        $data = [
            'tauraSyndromeVirus' => $probTauraSyndromeVirus,
            'covertMortalityNodavirus' => $probCovertMortalityNodavirus,
            'yellowHeadVirus' => $probYellowHeadVirus,
            'whiteFacesDisease' => $probWhiteFacesDisease,
            'whiteSpotSyndromeVirus' => $probWhiteSpotSyndromeVirus,
            'invectiousMyonecrosisVirus' => $probInvectiousMyonecrosisVirus,
            'invectiousHepatopancreaticandHaemotopoieticNecrosisVirus' => $probInvectiousHepatopancreaticandHaemotopoieticNecrosisVirus,
            'sindromPenyakitSulfatAsam' => $probSindromPenyakitSulfatAsam,
            'chronicSoftshellSyndromeatauSoftshelling' => $probChronicSoftshellSyndromeatauSoftshelling,
            'bodyCramp' => $probBodyCramp,
        ];

        $totalProbability = array_sum($data);

        $tauraSyndromeVirus = $probTauraSyndromeVirus / $totalProbability;
        $covertMortalityNodavirus = $probCovertMortalityNodavirus / $totalProbability;
        $yellowHeadVirus = $probYellowHeadVirus / $totalProbability;
        $whiteFacesDisease = $probWhiteFacesDisease / $totalProbability;
        $whiteSpotSyndromeVirus = $probWhiteSpotSyndromeVirus / $totalProbability;
        $invectiousMyonecrosisVirus = $probInvectiousMyonecrosisVirus / $totalProbability;
        $invectiousHepatopancreaticandHaemotopoieticNecrosisVirus = $probInvectiousHepatopancreaticandHaemotopoieticNecrosisVirus / $totalProbability;
        $sindromPenyakitSulfatAsam = $probSindromPenyakitSulfatAsam / $totalProbability;
        $chronicSoftshellSyndromeatauSoftshelling = $probChronicSoftshellSyndromeatauSoftshelling / $totalProbability;
        $bodyCramp = $probBodyCramp / $totalProbability;

        $this->resultProbTauraSyndromeVirus($tauraSyndromeVirus);
        $this->resultProbCovertMortalityNodavirus($covertMortalityNodavirus);
        $this->resultProbYellowHeadVirus($yellowHeadVirus);
        $this->resultProbWhiteFacesDisease($whiteFacesDisease);
        $this->resultProbWhiteSpotSyndromeVirus($whiteSpotSyndromeVirus);
        $this->resultProbInvectiousMyonecrosisVirus($invectiousMyonecrosisVirus);
        $this->resultProbInvectiousHepatopancreaticandHaemotopoieticNecrosisVirus($invectiousHepatopancreaticandHaemotopoieticNecrosisVirus);
        $this->resultProbSindromPenyakitSulfatAsam($sindromPenyakitSulfatAsam);
        $this->resultProbChronicSoftshellSyndromeatauSoftshelling($chronicSoftshellSyndromeatauSoftshelling);
        $this->resultProbBodyCramp($bodyCramp);

        $diagnosisMax = DB::table('temporary_finals')
            ->join('diseases', 'temporary_finals.disease_id', '=', 'diseases.id')
            ->select([DB::raw('MAX(temporary_finals.id) as id'), DB::raw('MAX(results) as results'), 'diseases.*'])
            ->groupBy('diseases.id')
            ->orderByDesc('results')
            ->limit(1)
            ->get();

        foreach ($diagnosisMax as $diagnosaMax) {
            Consultation::create([
                'user_id' => Auth::user()->id,
                'disease' => $diagnosaMax->name,
                'score' => floor($diagnosaMax->results * 100),
                'information' => $diagnosaMax->information,
                'suggestion' => $diagnosaMax->suggestion,
            ]);
        }

        return redirect('/users/diagnosis/results')->with('toast_success', Auth::user()->name . ' Berhasil Mendiagnosa');
    }

    public function results()
    {
        $diagnosis = DB::table('temporary_finals')
            ->join('diseases', 'temporary_finals.disease_id', '=', 'diseases.id')
            ->select('temporary_finals.disease_id', 'temporary_finals.results', 'diseases.*')
            ->orderByDesc('temporary_finals.results')
            ->limit(4)
            ->get();

        $diagnosisMax = DB::table('temporary_finals')
            ->join('diseases', 'temporary_finals.disease_id', '=', 'diseases.id')
            ->select(['temporary_finals.id', DB::raw('MAX(temporary_finals.results) AS results'), 'diseases.*'])
            ->groupBy('diseases.id', 'temporary_finals.id')
            ->orderByDesc('results')
            ->limit(1)
            ->get();

        return view('users.diagnosis.results', compact('diagnosis', 'diagnosisMax'));
    }
}
