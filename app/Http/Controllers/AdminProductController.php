<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminProductController extends Controller
{
    // Ini fungsi yang dicari sistem (index)
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    // Ini fungsi untuk menyimpan produk baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        // Cek apakah ada file yang di-upload
        if ($request->hasFile('image')) {
            // Upload ke Cloudinary dan ambil path-nya
            $uploadedFileUrl = $request->file('image')->storeOnCloudinary('products')->getSecurePath();
            $data['image'] = $uploadedFileUrl;
        }

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambah!');
    }
}