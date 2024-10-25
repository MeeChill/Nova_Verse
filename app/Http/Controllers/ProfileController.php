<?php
// App\Http\Controllers\ProfileController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = auth()->user();
        return view('profile', compact('user'));
    }

    public function edit()
    {
        $user = auth()->user();
        return view('profile-edit', compact('user'));
    }

    public function update(Request $request)
    {
        $user = User::find(Auth::id());
    $user->name = $request->input('name');
    $user->email = $request->input('email');
    $user->save();
        return redirect('/profile');
    }
}
