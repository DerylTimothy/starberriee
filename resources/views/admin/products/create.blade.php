@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <h2>Tambah Produk</h2>
    
    <!-- enctype multipart/form-data WAJIB ada agar gambar bisa terupload -->
    <form action="{{ route('admin.products.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
            <label>Nama Produk</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Harga</label>
            <input type="number" name="price" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Gambar</label>
            <input type="file" name="image" class="form-control">
        </div>
        
        <button type="submit" class="btn btn-primary">Simpan Produk</button>
    </form>
</div>
@endsection