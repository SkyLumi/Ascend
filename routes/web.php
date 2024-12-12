<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AdminDailyTaskController;
use App\Http\Controllers\AdminChallengeController;

Route::middleware('admin')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::resource('user', AdminUserController::class);
    Route::resource('daily-task', AdminDailyTaskController::class);
    Route::resource('challenge', AdminChallengeController::class);
});

Route::middleware('user')->group(function () {
    Route::get('/homepage', [UserController::class, 'index'])->name('user.homepage');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


// Route::get('/login', function () {
//     return view('login');
// });

// Route::get('/register', function () {
//     return view('register');
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
