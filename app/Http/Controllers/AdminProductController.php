<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        return view('admin.products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            // Menggunakan Cloudinary Facade langsung agar lebih stabil
            $uploadedFile = $request->file('image');
            $result = Cloudinary::upload($uploadedFile->getRealPath(), [
                'folder' => 'products'
            ]);
            
            // Menyimpan URL hasil upload ke dalam database
            $data['image'] = $result->getSecurePath();
        }

        Product::create($data);

        return redirect()->route('admin.products.index')->with('success', 'Produk berhasil ditambah!');
    }
}