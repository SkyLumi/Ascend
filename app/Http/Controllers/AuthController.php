<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Menampilkan halaman login
    public function showLoginForm()
    {
        return view('login'); // Pastikan file login Anda disimpan di resources/views/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();

            if ($user->is_admin) {
                // Redirect ke dashboard admin
                return redirect()->route('admin.dashboard');
            } else {
                // Redirect ke homepage user biasa
                return redirect()->route('user.homepage');
            }
        }

        // Login gagal
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->withInput();
    }
}

