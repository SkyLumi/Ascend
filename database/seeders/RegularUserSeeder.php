<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegularUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cek apakah sudah ada user dengan email ini
        if (!User::where('email', 'user@gmail.com')->exists()) {
            User::create([
                'nama' => 'Regular User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('123'), // Ganti '123' dengan kata sandi yang kuat
                'is_admin' => false, // Pastikan ini false untuk user biasa
            ]);
        }
    }
}
