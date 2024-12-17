<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminDailyTaskController;
use App\Http\Controllers\AdminChallengeController;
use App\Http\Controllers\AdminArtikelController;
use App\Http\Controllers\UserDailyTaskController;
use App\Http\Controllers\UserForumController;
use App\Http\Controllers\UserArtikelController;
use App\Http\Controllers\UserChallengeController;

Route::middleware('auth', 'admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('user', AdminUserController::class);
    Route::resource('daily-task', AdminDailyTaskController::class);
    Route::resource('challenge', AdminChallengeController::class);
    Route::resource('artikel', AdminArtikelController::class);
});

Route::middleware('auth','user')->group(function () {
    Route::get('/homepage', [UserController::class, 'index'])->name('user.homepage');
    Route::resource('tugas-harian', UserDailyTaskController::class);
    Route::get('/tugas-harian/{id}/timer', [UserDailyTaskController::class, 'showTimer'])->name('tugas-harian.timer');
    Route::resource('tantangan', UserChallengeController::class);
    Route::resource('forum', UserForumController::class);
    Route::resource('article', UserArtikelController::class);


});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/');
})->name('logout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);


Route::get('/', function () {
    return view('welcome');
});

// Route::get('/artikel', function () {
//     return view('user.artikel');
// });


// Route::get('/homepage', function () {
//     return view('homepage');
// });


// Route::get('/komunitas', function () {
//     return view('komunitas');
// });

// Route::get('/artikeel', function () {
//     return view('artikel');
// });
