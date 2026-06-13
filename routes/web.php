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
})->name('home');

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
Route::get('/gas-clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return 'Cache berhasil di-clear!';
});
// Rute Halaman Utama / Landing Page
Route::get('/', function () {
    return view('welcome'); 
})->name('home');

// Rute Halaman Shop Public
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Tambahkan route yang belum ada
Route::get('/custom-order', function () {
    return view('custom-order'); // sesuaikan nama view-nya
})->name('custom-order');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');