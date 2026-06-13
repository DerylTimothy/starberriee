<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Menampilkan daftar semua produk untuk halaman Shop.
     */
    public function index()
    {
        // Mengambil seluruh data produk dari tabel 'products'
        $products = Product::all();

        // Mengirim data ke view 'shop.blade.php'
        return view('shop', compact('products'));
    }

    /**
     * Menampilkan detail satu produk (opsional, jika nanti kamu butuh halaman detail).
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop-detail', compact('product'));
    }
}