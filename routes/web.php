<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});


Route::get('/homepage', function () {
    return view('homepage');
});


Route::get('/komunitas', function () {
    return view('komunitas');
});