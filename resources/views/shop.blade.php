@extends('layouts.main')

@section('content')
<div class="container py-5" style="background-color: #FFF8F3; min-height: 100vh;">
    <!-- Header Toko -->
    <div class="text-center mb-5">
        <h1 class="fw-bold" style="color: #561C24;">Koleksi Manik-Manik Starberriee ✨</h1>
        <p class="text-muted">Temukan gelang dan cincin beads buatan tangan terbaik untuk melengkapi gayamu</p>
    </div>

    <!-- Kolom Pencarian -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-6">
            <form action="#" method="GET" class="input-group shadow-sm" style="border-radius: 10px; overflow: hidden;">
                <input type="text" name="search" class="form-control border-0 px-4 py-2" placeholder="Cari gelang, cincin, atau beads favoritmu...">
                <button class="btn text-white px-4" type="submit" style="background-color: #561C24;">
                    Cari 🔍
                </button>
            </form>
        </div>
    </div>

    <!-- Grid Produk Catalog -->
    <div class="row g-4">
        @forelse($products as $product)
            <div class="col-md-3">
                <div class="card border-0 shadow-sm h-100 p-3" style="border-radius: 15px; background-color: #ffffff;">
                    <!-- Foto Produk -->
                    <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top shadow-sm" alt="{{ $product->name }}" style="border-radius: 12px; height: 220px; object-fit: cover;">
                    
                    <!-- Detail Informasi -->
                    <div class="card-body px-1 py-3 d-flex flex-column justify-content-between">
                        <div>
                            <h5 class="fw-bold text-dark mb-1 text-capitalize">{{ $product->name }}</h5>
                            <p class="text-muted small mb-3 text-truncate">{{ $product->description }}</p>
                        </div>
                        
                        <div>
                            <h4 class="fw-bold text-success mb-3">Rp {{ number_format($product->price, 0, ',', '.') }}</h4>
                            
                            <!-- TOMBOL BARU: Mengarah langsung ke internal checkout -->
                            <a href="{{ route('checkout.index', $product->id) }}" class="btn text-white w-100 fw-bold py-2 shadow-sm" style="background-color: #561C24; border-radius: 8px; transition: 0.3s;">
                                🛍️ Beli Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center py-5">
                <div class="fs-2 mb-2">🎈</div>
                <h5 class="text-muted fw-bold">Katalog produk masih kosong nih, bro.</h5>
            </div>
        @endforelse
    </div>
</div>
@endsection