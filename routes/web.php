<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

Route::middleware([\App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
});

Route::middleware([\App\Http\Middleware\UserMiddleware::class])->group(function () {
    Route::get('/homepage', [AdminController::class, 'index'])->name('user.homepage');
});

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


// Route::get('/', function () {
//     return view('welcome');
// });

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