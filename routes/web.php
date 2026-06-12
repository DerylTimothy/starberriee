<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\ShopController; // Sesuaikan dengan nama controller shop lu jika ada

/*
|--------------------------------------------------------------------------
| Web Routes - Auto Migration System for Production
|--------------------------------------------------------------------------
*/

// Memaksa Laravel menjalankan migrasi database secara otomatis saat web diakses
try {
    Artisan::call('migrate', ['--force' => true]);
} catch (\Exception $e) {
    // Diamkan jika database sudah terlanjur bermigrasi atau tabel sudah ada
}

/*
|--------------------------------------------------------------------------
| Aplikasi Routes Starberriee
|--------------------------------------------------------------------------
*/

// Halaman Utama / Landing Page
Route::get('/', function () {
    return view('welcome'); // Sesuaikan dengan nama view halaman utama lu (misal: 'index' atau 'home')
});

// Halaman Shop (Tempat produk lu yang tadi eror)
// Jika lu pakai Controller, aktifkan baris di bawah ini dan sesuaikan namanya:
// Route::get('/shop', [ShopController::class, 'index'])->name('shop');

// Jika halaman shop lu murni hanya memanggil view langsung, gunakan ini:
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Silakan tambahkan route aplikasi lu yang lain di bawah sini (jika ada)...