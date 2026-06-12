@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px;">
                <h4 class="fw-bold mb-4" style="color: #561C24;">Edit Data Produk</h4>

                <form action="{{ route('admin.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nama Produk</label>
                        <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Harga (Rupiah)</label>
                        <input type="number" name="price" class="form-control" value="{{ $product->price }}" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Deskripsi Produk</label>
                        <textarea name="description" rows="3" class="form-control" required>{{ $product->description }}</textarea>
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-semibold">Ubah Foto Produk (Kosongkan jika tidak diganti)</label>
                        <input type="file" name="image" class="form-control" accept="image/*">
                        <div class="mt-2 small text-muted">Foto saat ini:</div>
                        <img src="{{ asset('storage/' . $product->image) }}" class="rounded mt-1 shadow-sm" style="width: 70px; height: 70px; object-fit: cover;">
                    </div>
                    
                    <div class="d-flex gap-2">
                        <button type="submit" class="btn text-white px-4 w-100" style="background-color: #561C24; border-radius: 8px; font-weight: 600;">
                            Perbarui Data 🔄
                        </button>
                        <a href="{{ route('admin.products.index') }}" class="btn btn-outline-secondary px-4 w-50" style="border-radius: 8px;">Batal</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection