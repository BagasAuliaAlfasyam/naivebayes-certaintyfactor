<?php

namespace App\Http\Controllers\Users;

use App\Models\Consultation;
use App\Http\Controllers\Controller;
use App\Models\ImageDisease;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class ConsultationController extends Controller
{
    public function usersConsultations()
    {
        $consultations = Consultation::where('user_id', Auth::user()->id)
            ->latest()
            ->get();
        return view('users.consultations.index', compact('consultations'));
    }

    public function usersConsultationsDetail($id)
    {
        $consultation = Consultation::where('id', $id)->first();

        $disease = DB::table('diseases')
            ->where('name', $consultation->disease)
            ->first();

        $imageDiseases = $disease
            ? DB::table('image_diseases')
                ->where('disease_id', $disease->id)
                ->get()
            : collect();
        return view('users.consultations.detail', compact('consultation', 'imageDiseases', 'disease'));
    }
}
