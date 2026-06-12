<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Web Routes - Starberriee Full Feature & Anti-Error Mapping
|--------------------------------------------------------------------------
*/

// =========================================================================
// 1. NAVIGASI UTAMA & NAVBAR
// =========================================================================
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/custom-order', function () {
    return view('custom-order');
})->name('custom-order');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');


// =========================================================================
// 2. KATALOG & DETAIL PRODUK
// =========================================================================
Route::get('/shop', function () {
    $products = Product::all(); 
    return view('shop', compact('products'));
})->name('shop');

Route::get('/shop/{id}', function ($id) {
    $product = Product::findOrFail($id);
    return view('shop-detail', compact('product'));
})->name('shop.detail');


// =========================================================================
// 3. ALUR CHECKOUT, EKSPEDISI & SCAN QRIS
// =========================================================================

// Menampilkan form data checkout
Route::get('/checkout/{id?}', function ($id = null) {
    $product = $id ? Product::find($id) : null;
    return view('checkout.index', compact('product'));
})->name('checkout.index');

// Memproses data formulir (Metode Bayar + Jasa Ekspedisi)
Route::post('/checkout/process', function (Request $request) {
    // Menangkap pilihan input pembayaran & ekspedisi dari form
    $paymentMethod = $request->input('payment_method');
    $shippingMethod = $request->input('shipping_method'); // Pilihan ekspedisi tertangkap di sini!

    // Jika user memilih QRIS, arahkan ke halaman scan QRIS
    if ($paymentMethod === 'qris') {
        return redirect()->route('checkout.qris');
    }

    // Jika memilih opsi lain (Transfer Bank), langsung ke halaman sukses
    return redirect()->route('checkout.success');
})->name('checkout.process');

// Halaman tampilan Scan QRIS
Route::get('/checkout/payment/qris', function () {
    return view('checkout.qris');
})->name('checkout.qris');

// Tampilan halaman sukses pembayaran
Route::get('/checkout-success', function () {
    return view('checkout.success');
})->name('checkout.success');


// =========================================================================
// 4. SISTEM AUTENTIKASI (Login, Register, Logout Closure)
// =========================================================================
Route::get('/login', function () {
    if (Auth::check()) {
        return redirect()->route('admin.products.index');
    }
    return view('auth.login');
})->name('login');

Route::post('/login', function (Request $request) {
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect()->intended('admin/products');
    }

    return back()->withErrors([
        'email' => 'Email atau password salah, bro.',
    ])->onlyInput('email');
});

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::any('/logout', function (Request $request) {
    Auth::logout();
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route('home');
})->name('logout');


// =========================================================================
// 5. HALAMAN BACKEND / CONTROL PANEL ADMIN
// =========================================================================
Route::get('admin/products', [\App\Http\Controllers\AdminProductController::class, 'index'])->name('admin.products.index');
Route::get('admin/products/create', [\App\Http\Controllers\AdminProductController::class, 'create'])->name('admin.products.create');