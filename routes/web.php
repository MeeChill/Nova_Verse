<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;    
use App\Http\Controllers\HomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/login', function () {
    return view('login'); // Pastikan view login sesuai dengan nama file Blade Anda
})->name('login');

Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);

// Rute untuk menampilkan halaman registrasi
Route::get('/register', function () {
    return view('register');  // ganti 'register' dengan nama view yang benar
})->name('register');

// Rute untuk memproses form registrasi
Route::post('/register', [AuthController::class, 'register']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');