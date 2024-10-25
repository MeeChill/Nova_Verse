<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use App\Models\User;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if (Auth::attempt(['name' => $request->name, 'password' => $request->password])) {
            $request->session()->regenerate();

            $initialName = strtoupper(substr(Auth::user()->name, 0, 1));
            session(['initial_name' => $initialName]);

            if (Auth::user()->is_admin) {
                return redirect()->intended('/admin/dashboard');
            } else {
                return redirect()->intended('/home');
            }
        }

        throw ValidationException::withMessages([
            'name' => ['The provided credentials do not match our records.'],
        ]);
    }

    public function register(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => false, // Set default value to false for new users
        ]);

        return redirect('/login')->with('success', 'Registration successful. Please login.');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'You have been logged out.');
    }
}
