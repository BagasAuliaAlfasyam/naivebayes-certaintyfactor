<?php

namespace App\Http\Controllers\Users;

use App\Models\Consultation;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function usersConsultations()
    {
        $consultations = Consultation::where('user_id', Auth::user()->id)->latest()->get();
        return view('users.consultations.index', compact('consultations'));
    }

    public function usersConsultationsDetail($id)
    {
        $consultation = Consultation::where('id', $id)->first();
        return view('users.consultations.detail', compact('consultation'));
    }
}
