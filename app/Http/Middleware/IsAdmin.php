<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Cek apakah user yang login adalah Arkam
        if (Auth::check() && Auth::user()->name === 'Arkam' && $request->user()->password === bcrypt('1313')) {
            return $next($request);
        }

        // Jika bukan Arkam, redirect ke halaman home atau login
        return redirect('/home')->with('error', 'Unauthorized access.');
    }
}
