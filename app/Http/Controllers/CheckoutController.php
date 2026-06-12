<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function index($id)
    {
        $product = Product::findOrFail($id);
        return view('checkout.index', compact('product'));
    }

    public function process(Request $request)
    {
        $request->validate([
            'payment_method' => 'required'
        ]);

        return view('checkout.success');
    }
}