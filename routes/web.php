<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminProductController; // Sesuaikan jika nama controller-mu berbeda
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// --- ROUTE ADMIN STARBERRIEE ---
Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    // Tambahkan baris di bawah ini agar error 'Route not defined' hilang
    Route::get('/products', [AdminProductController::class, 'index'])->name('admin.products.index');
    
    Route::get('/products/create', [AdminProductController::class, 'create'])->name('admin.products.create');
    Route::post('/products', [AdminProductController::class, 'store'])->name('admin.products.store');
});

require __DIR__.'/auth.php';