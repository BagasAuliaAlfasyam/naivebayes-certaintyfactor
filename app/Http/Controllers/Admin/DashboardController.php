<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Disease;
use App\Models\Post;
use App\Models\Rule;
use App\Models\Symptom;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $users = User::all();
        $symptoms = Symptom::all();
        $diseases = Disease::all();
        $rules = Rule::all();
        $posts = Post::all();
        return view('admin.dashboard.index', compact('users', 'symptoms', 'diseases', 'rules', 'posts'));
    }
}
