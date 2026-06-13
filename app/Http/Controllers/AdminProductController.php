<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    /**
     * Menampilkan daftar semua produk di panel admin
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    /**
     * Menampilkan form tambah produk
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Menyimpan produk baru ke database
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        // Proses penyimpanan gambar
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('products', 'public');
            $data['image'] = $path;
        }

        // Simpan ke database
        Product::create($data);

        // Redirect dengan pesan sukses
        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambah!');
    }
}