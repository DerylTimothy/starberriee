@extends('layouts.main')

@section('content')
<div class="container py-5" style="background-color: #FFF8F3; min-height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="mb-3">
                <a href="{{ route('admin.products.index') }}" class="text-decoration-none text-muted small fw-semibold">⬅️ Kembali ke Meja Admin</a>
            </div>

            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px;">
                <h4 class="fw-bold mb-4" style="color: #561C24;">Form Pembuatan Produk Baru</h4>

                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="mb-3">
                        <label class="form-label small fw-bold">Nama Aksesoris</label>
                        <input type="text" name="name" class="form-control" required placeholder="Contoh: Cincin Beads Sakura">
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Deskripsi Produk</label>
                        <textarea name="description" class="form-control" rows="3" required placeholder="Tulis rincian ukuran atau kombinasi warna manik..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label class="form-label small fw-bold">Harga Satuan (Rupiah)</label>
                        <input type="number" name="price" class="form-control" required placeholder="Contoh: 15000">
                    </div>

                    <div class="mb-4">
                        <label class="form-label small fw-bold">Foto Produk Utama</label>
                        <input type="file" name="image" class="form-control" required>
                    </div>

                    <button type="submit" class="btn text-white fw-bold w-100 py-2 shadow-sm" style="background-color: #561C24; border-radius: 8px;">
                        Simpan Produk ke Toko ✨
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection