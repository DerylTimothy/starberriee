<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan katalog produk utama beserta sistem pencariannya
    public function index(Request $request)
    {
        $query = Product::latest();

        // Logika pencarian berdasarkan nama atau deskripsi beads
        if ($request->has('search') && $request->search != '') {
            $query->where('name', 'like', '%' . $request->search . '%')
                  ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $products = $query->get();
        return view('shop', compact('products'));
    }

    // Menampilkan halaman detail satu produk beads secara spesifik
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('shop-detail', compact('product'));
    }
}