<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProductController;
use App\Http\Controllers\ProductController; // Tambahkan ini
use Illuminate\Support\Facades\Route;

// Public Routes
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/shop', [ProductController::class, 'index'])->name('shop'); // Diarahkan ke ProductController
Route::get('/custom-order', function () { return view('custom-order'); })->name('custom-order');
Route::get('/faqs', function () { return view('faqs'); })->name('faqs');

// Auth & Dashboard
Route::get('/dashboard', function () { return view('dashboard'); })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Admin Routes
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('admin.products.store');
});

require __DIR__.'/auth.php';