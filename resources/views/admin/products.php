@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="fw-bold" style="color: #561C24;">Dashboard Manajemen Produk</h2>
        <a href="{{ route('admin.products.create') }}" class="btn text-white px-4" style="background-color: #561C24; border-radius: 8px;">
            + Tambah Produk Baru
        </a>
    </div>

    @if(session('success'))
        <div class="alert alert-success shadow-sm mb-4">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm" style="border-radius: 12px; overflow: hidden;">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead class="text-white text-center" style="background-color: #A26769;">
                    <tr>
                        <th width="8%">Foto</th>
                        <th>Nama Produk</th>
                        <th>Harga</th>
                        <th>Deskripsi</th>
                        <th width="18%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($products as $product)
                    <tr>
                        <td class="text-center">
                            <img src="{{ asset('storage/' . $product->image) }}" class="rounded shadow-sm" style="width: 60px; height: 60px; object-fit: cover;">
                        </td>
                        <td class="fw-semibold text-dark">{{ $product->name }}</td>
                        <td class="text-success fw-bold">Rp {{ number_format($product->price, 0, ',', '.') }}</td>
                        <td><small class="text-muted">{{ Str::limit($product->description, 60) }}</small></td>
                        <td class="text-center">
                            <a href="{{ route('admin.products.edit', $product->id) }}" class="btn btn-sm btn-outline-warning px-3 me-1" style="border-radius: 6px;">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus produk ini, bro?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger px-3" style="border-radius: 6px;">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted py-4">Belum ada produk beads yang terdaftar. Yuk isi dulu! ✨</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection