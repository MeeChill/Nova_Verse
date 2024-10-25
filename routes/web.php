<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\NovelController;
use App\Http\Controllers\ComicController;

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
    return view('login');
});

// Profile routes
Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');

Route::get('/edit', [ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/edit', [ProfileController::class, 'update'])->name('profile.update');

// Home route
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Login and Register routes
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', function () {
    return view('register');
})->name('register');

Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes with Middleware
Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {

    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    // Movie Routes
    Route::get('/movies', [MovieController::class, 'index'])->name('movies.index');
    Route::get('/movies/create', [MovieController::class, 'create'])->name('movies.create');
    Route::post('/movies', [MovieController::class, 'store'])->name('movies.store');
    Route::get('/movies/{movie}/edit', [MovieController::class, 'edit'])->name('movies.edit');
    Route::put('/movies/{movie}', [MovieController::class, 'update'])->name('movies.update');
    Route::delete('/movies/{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');

    // Comic Routes (Resourceful Routes)
    Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
    Route::get('/comics/create', [ComicController::class, 'create'])->name('comics.create');
    Route::post('/comics', [ComicController::class, 'store'])->name('comics.store');
    Route::get('/comics/{comic}/edit', [ComicController::class, 'edit'])->name('comics.edit');
    Route::put('/comics/{comic}', [ComicController::class, 'update'])->name('comics.update');
    Route::delete('/comics/{comic}', [ComicController::class, 'destroy'])->name('comics.destroy');

    // Novel Routes (Resourceful Routes)
    Route::get('/novels', [NovelController::class, 'index'])->name('novels.index');
    Route::get('/novels/create', [NovelController::class, 'create'])->name('novels.create');
    Route::post('/novels', [NovelController::class, 'store'])->name('novels.store');
    Route::get('/novels/{novel}/edit', [NovelController::class, 'edit'])->name('novels.edit');
    Route::put('/novels/{novel}', [NovelController::class, 'update'])->name('novels.update');
    Route::delete('/novels/{novel}', [NovelController::class, 'destroy'])->name('novels.destroy');
});
