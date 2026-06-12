<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Starberriee Project
|--------------------------------------------------------------------------
|
| Di sini adalah tempat untuk mendaftarkan rute web aplikasi lu.
| Semua rute ini akan dimuat oleh RouteServiceProvider dalam grup yang
| berisi grup middleware "web".
|
*/

// Rute Halaman Utama / Landing Page
Route::get('/', function () {
    return view('welcome'); 
});

// Rute Halaman Shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');