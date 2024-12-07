<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Cek apakah sudah ada user dengan email ini
        if (!User::where('email', 'admin@gmail.com')->exists()) {
            User::create([
                'nama' => 'Syahrial Rafky',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('123'), // Ganti 'password' dengan kata sandi yang kuat
                'is_admin' => true,
            ]);
        }
    }
}
