@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow-sm p-4" style="border-radius: 15px; background-color: #FFF;">
                <h3 class="fw-bold text-center mb-4" style="color: #561C24;">Daftar Akun Baru</h3>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" placeholder="Contoh: Deryl" value="{{ old('name') }}" required>
                        @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Email Address</label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="pembeli@gmail.com" value="{{ old('email') }}" required>
                        @error('email') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label small fw-semibold">Password (Min. 6 Karakter)</label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="******" required>
                        @error('password') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    </div>
                    <div class="mb-4">
                        <label class="form-label small fw-semibold">Konfirmasi Password</label>
                        <input type="password" name="password_confirmation" class="form-control" placeholder="******" required>
                    </div>
                    <button type="submit" class="btn text-white w-100 py-2 mb-3" style="background-color: #561C24; border-radius: 8px; font-weight: 600;">
                        Registrasi Sekarang ✨
                    </button>
                    <p class="text-center small text-muted mb-0">
                        Sudah punya akun? <a href="{{ route('login') }}" style="color: #A26769; font-weight: 600; text-decoration: none;">Login di sini</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection