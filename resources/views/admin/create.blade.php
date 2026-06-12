@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px;">
                <h4 class="fw-bold mb-4" style="color: #561C24;">Tambah Koleksi Beads Baru</h4>

                <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nama Produk</label>
                        <input type="text" name="name" class="form-control" placeholder="Contoh: Strawberry Quartz Bracelet" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Harga (Rupiah)</label>
                        <input type="number" name="price" class="form-control" placeholder="Contoh: 35000" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Deskripsi Produk</label>
                        <textarea name="description" rows="3" class="form-control" placeholder="Tuliskan detail ukuran, bahan dasar, dll..." required></textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-semibold">Foto Produk (Format PNG/JPG/WebP)</label>
                        <input type="file" name="image" class="form-control" accept="image/*" required>
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn text-white px-4 w-100" style="background-color: #561C24; border-radius: 8px; font-weight: 600;">
                            Simpan Produk 🚀
                        </button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary px-4 w-50" style="border-radius: 8px;">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection