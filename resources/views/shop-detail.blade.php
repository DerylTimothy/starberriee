@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="mb-4">
        <a href="{{ route('shop') }}" class="text-decoration-none fw-semibold" style="color: #A26769;">
            ⬅️ Kembali ke Katalog Shop
        </a>
    </div>

    <div class="card border-0 shadow-sm p-4" style="border-radius: 20px; background-color: #FFF;">
        <div class="row g-5">
            <div class="col-md-6">
                <div class="rounded shadow-sm overflow-hidden" style="max-height: 500px;">
                    <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid w-100 h-100" style="object-fit: cover;" alt="{{ $product->name }}">
                </div>
            </div>

            <div class="col-md-6 d-flex flex-column justify-content-between">
                <div>
                    <span class="badge mb-2 px-3 py-2 text-white" style="background-color: #A26769; border-radius: 20px;">Handmade Beads</span>
                    <h1 class="fw-bold mb-2" style="color: #561C24;">{{ $product->name }}</h1>
                    <h3 class="fw-bold text-success mb-4">Rp {{ number_format($product->price, 0, ',', '.') }}</h3>
                    
                    <hr>
                    
                    <h5 class="fw-bold text-dark mb-2">Deskripsi Produk:</h5>
                    <p class="text-muted" style="line-height: 1.8; white-space: pre-line;">{{ $product->description }}</p>
                </div>

                <div class="mt-4">
                    <a href="{{ route('checkout.index', $product->id) }}" class="btn text-white btn-lg w-100 fw-bold py-3 shadow" style="background-color: #561C24; border-radius: 12px;">
                        🛍️ Checkout & Bayar Produk Ini
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection