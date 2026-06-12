@extends('layouts.main')

@section('content')
<div class="container py-5" style="background-color: #FFF8F3; min-height: 100vh;">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="fw-bold" style="color: #561C24;">Dashboard Admin - Daftar Manik-manik</h3>
        <a href="{{ route('admin.products.create') }}" class="btn text-white fw-bold shadow-sm" style="background-color: #561C24; border-radius: 8px;">
            ➕ Tambah Item Baru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success py-2 small shadow-sm">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm p-4" style="border-radius: 15px;">
        <div class="table-responsive">
            <table class="table table-hover align-middle m-0">
                <thead class="table-light">
                    <tr>
                        <th>Pratinjau</th>
                        <th>Nama Aksesoris</th>
                        <th>Deskripsi Ringkas</th>
                        <th>Harga Jual</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                        <tr>
                            <td>
                                <img src="{{ asset('storage/' . $product->image) }}" class="rounded shadow-sm" style="width: 60px; height: 60px; object-fit: cover;">
                            </td>
                            <td class="fw-bold text-dark text-capitalize">{{ $product->name }}</td>
                            <td class="text-muted small">{{ $product->description }}</td>
                            <td class="text-success fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center text-muted py-4">Belum ada barang di katalog database, silakan klik tambah baru.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection