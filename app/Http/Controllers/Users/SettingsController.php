<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Rules\MatchOldPassword;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class SettingsController extends Controller
{
    public function profile()
    {
        return view('users.settings.profile');
    }

    public function profileUpdate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'name' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // validasi file gambar
        ]);

        $user = Auth::user();

        if ($request->hasFile('image')) {
            $filename = time() . '.' . $request->image->extension();

            if ($user->image && Storage::disk('public')->exists('users/' . $user->image)) {
                if ($user->image !== 'default.jpg') {
                    Storage::disk('public')->delete('users/' . $user->image);
                }
            }

            $request->image->storeAs('users', $filename, 'public');
        } else {
            $filename = $user->image;
        }

        $user->update([
            'username' => Str::slug($request->username),
            'name' => $request->name,
            'image' => $filename
        ]);

        return redirect('users/profile')->with('toast_success', 'Profile Berhasil Diubah');
    }

    public function password()
    {
        return view('users.settings.password');
    }

    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required', new MatchOldPassword],
            'new_password' => 'required',
            'password_confirmation' => ['required', 'same:new_password'],
        ]);

        Auth::user()->update([
            'password' => Hash::make($request->new_password)
        ]);

        return redirect('/users/password')->with('toast_success', 'Password Berhasil Diubah');
    }
}
