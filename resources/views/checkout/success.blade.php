@extends('layouts.main')

@section('content')
<div class="container py-5 text-center" style="background-color: #FFF8F3; min-height: 100vh; d-flex align-items: center;">
    <div class="w-100 py-5">
        <!-- Logo Icon Perayaan Sukses -->
        <div class="display-1 text-success mb-4 animate__animated animate__bounceIn">🎉</div>
        
        <h1 class="fw-bold mb-2" style="color: #561C24;">Pesanan Berhasil Diproses!</h1>
        <p class="text-muted mx-auto" style="max-width: 550px;">
            Terima kasih banyak sudah berbelanja kerajinan tangan gelang/cincin beads di **Starberriee**. Sistem pembayaran lu telah diverifikasi secara aman oleh sistem internal kami.
        </p>
        
        <div class="mt-4">
            <span class="badge bg-light text-dark border p-2 mb-4">Status Transaksi: <strong class="text-success">PAID (Lunas)</strong></span>
        </div>

        <br>
        
        <!-- Tombol Kembali Belanja -->
        <a href="{{ route('shop') }}" class="btn text-white px-5 py-3 fw-bold shadow-sm" style="background-color: #561C24; border-radius: 8px; font-size: 16px;">
            🛒 Kembali Berbelanja Katalog Baru
        </a>
    </div>
</div>
@endsection