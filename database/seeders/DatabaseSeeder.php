<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // 1. Buat Akun Admin
        User::create([
            'name' => 'Admin Starberriee',
            'email' => 'admin@gmail.com', // Silakan ganti pakai email lu
            'password' => Hash::make('admin123'), // WAJIB dibungkus Hash::make biar gak eror Bcrypt
            'role' => 'admin',
        ]);

        // 2. Buat Akun User Biasa (Opsional, untuk testing checkout)
        User::create([
            'name' => 'Pembeli Starberriee',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'), // WAJIB dibungkus Hash::make
            'role' => 'user',
        ]);
    }
}