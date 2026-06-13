<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProductController;
use Illuminate\Support\Facades\Route;

// --- PUBLIC ROUTES (Navbar Links) ---
Route::get('/', function () { return view('welcome'); })->name('home');
Route::get('/shop', function () { return view('shop'); })->name('shop');
Route::get('/custom-order', function () { return view('custom-order'); })->name('custom-order');
Route::get('/faqs', function () { return view('faqs'); })->name('faqs');

// --- DASHBOARD & AUTH ---
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- ADMIN ROUTES ---
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('admin.products.store');
});

require __DIR__.'/auth.php';