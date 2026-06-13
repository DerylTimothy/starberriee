@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h2 class="mb-4 text-center">Katalog Produk Starberriee</h2>
    
    <div class="row">
        @forelse ($products as $product)
            <div class="col-md-4 mb-4">
                <div class="card h-100 shadow-sm">
                    {{-- Menampilkan gambar produk --}}
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}" style="height: 250px; object-fit: cover;">
                    @else
                        <img src="https://via.placeholder.com/250" class="card-img-top" alt="No image">
                    @endif
                    
                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $product->name }}</h5>
                        <p class="card-text text-muted">Rp {{ number_format($product->price, 0, ',', '.') }}</p>
                        <div class="mt-auto">
                            <a href="#" class="btn btn-dark w-100">Beli Sekarang</a>
                        </div>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center mt-5">
                <p class="text-muted fs-4">Katalog produk masih kosong nih, bro.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection