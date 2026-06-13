@extends('layouts.main')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-dark text-white">
                    <h4 class="mb-0">Dashboard</h4>
                </div>
                <div class="card-body">
                    <h5>Halo, selamat datang!</h5>
                    <p>Kamu sudah berhasil login ke sistem Starberriee.</p>
                    <hr>
                    <div class="d-grid gap-2 d-md-block">
                        <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Kelola Produk</a>
                        <a href="{{ route('profile.edit') }}" class="btn btn-outline-secondary">Edit Profil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection