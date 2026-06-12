<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminProductController;

/*
|--------------------------------------------------------------------------
| Web Routes - Starberriee Project
|--------------------------------------------------------------------------
*/

// Rute Halaman Utama / Landing Page
Route::get('/', function () {
    return view('welcome'); 
});

// Rute Halaman Shop Public
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// RUTE ADMIN PANEL (CRUD PRODUK)
// Mengelompokkan semua rute admin/products agar otomatis terbaca oleh form
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});
// Rute Sementara untuk Migrasi Database di Server Cloud
Route::get('/gas-migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate', ['--force' => true]);
    return 'Mantap, database berhasil dimigrasi, bro!';
});