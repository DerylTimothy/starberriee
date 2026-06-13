@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Katalog Produk Starberriee</h2>
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    <img src="{{ $product->image ? asset('storage/' . $product->image) : 'https://via.placeholder.com/250' }}" 
                         class="card-img-top" style="height: 250px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="text-muted">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <a href="#" class="btn btn-dark w-100">Beli Sekarang</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Katalog produk masih kosong nih, bro.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection