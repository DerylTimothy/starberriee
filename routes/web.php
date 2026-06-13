<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\AdminProductController;

/*
|--------------------------------------------------------------------------
| Web Routes - Starberriee Project
|--------------------------------------------------------------------------
*/

// Halaman Utama
Route::get('/', function () {
    return view('welcome'); 
})->name('home');

// Halaman Shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');

// Halaman Custom Order
Route::get('/custom-order', function () {
    return view('custom-order');
})->name('custom-order');

// Halaman FAQs
Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

// Auth
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// RUTE ADMIN PANEL (CRUD PRODUK)
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('products', AdminProductController::class);
});

// Rute Utilitas Server
Route::get('/gas-migrate', function () {
    Artisan::call('migrate', ['--force' => true]);
    return 'Mantap, database berhasil dimigrasi, bro!';
});

Route::get('/gas-clear-cache', function () {
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('cache:clear');
    return 'Cache berhasil di-clear!';
});