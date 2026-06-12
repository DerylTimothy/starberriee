@extends('layouts.main')

@section('content')
<!-- HERO SECTION -->
<div class="py-5" style="background-color: #FFF8F3; border-bottom: 2px dashed #E8D8CE;">
    <div class="container py-5">
        <div class="row align-items-center g-5">
            <div class="col-lg-6 text-center text-lg-start">
                <span class="badge px-3 py-2 mb-3 text-dark" style="background-color: #E8D8CE; font-weight: 600; letter-spacing: 1px;">WELCOME TO STARBERRIEE</span>
                <h1 class="display-4 fw-bold mb-4" style="color: #561C24; line-height: 1.2;">
                    Crafting Joy Into <br><span style="color: #A26769;">Beautiful Beads</span>
                </h1>
                <p class="lead text-muted mb-5" style="font-size: 1.1rem;">
                    Temukan koleksi aksesoris handmade manik-manik premium mulai dari gelang, kalung, hingga cincin yang dirancang khusus untuk mengekspresikan keunikan dirimu.
                </p>
                <div class="d-grid d-md-flex gap-3 justify-content-center justify-content-lg-start">
                    <a href="{{ url('/shop') }}" class="btn btn-lg px-4 text-white shadow-sm" style="background-color: #561C24; border-radius: 8px; font-weight: 600;">
                        Shop Collection 🛍️
                    </a>
                    <a href="{{ url('/custom-order') }}" class="btn btn-lg btn-outline-dark px-4" style="border-radius: 8px; font-weight: 500;">
                        Custom Request ✨
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center">
                <!-- Ornamen visual sementara pengganti gambar -->
                <div class="p-5 mx-auto shadow-sm d-flex flex-column justify-content-center align-items-center" 
                     style="width: 80%; height: 350px; background-color: #FFF; border: 3px double #A26769; border-radius: 30px;">
                    <span style="font-size: 4rem;">✨🌸📿</span>
                    <h3 class="mt-3 fw-bold" style="color: #561C24;">Starberriee Workshop</h3>
                    <p class="text-muted small px-4 text-center">Setiap butir manik dirangkai dengan penuh cinta dan ketelitian tinggi.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- KEUNGGULAN SECTION -->
<div class="container py-5 my-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold" style="color: #561C24;">Kenapa Harus Starberriee?</h2>
        <p class="text-muted">Kualitas dan kepuasan harimu adalah prioritas utama kami.</p>
    </div>
    
    <div class="row g-4 text-center">
        <!-- Keunggulan 1 -->
        <div class="col-md-4">
            <div class="p-4 h-100 border-0 card bg-transparent">
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background-color: #FFF8F3; border-radius: 50%; font-size: 1.8rem;">
                    💎
                </div>
                <h5 class="fw-bold" style="color: #561C24;">Bahan Premium</h5>
                <p class="text-muted small">Menggunakan manik-manik pilihan yang berkilau, kuat, dan tidak mudah luntur saat dipakai harian.</p>
            </div>
        </div>
        <!-- Keunggulan 2 -->
        <div class="col-md-4">
            <div class="p-4 h-100 border-0 card bg-transparent">
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background-color: #FFF8F3; border-radius: 50%; font-size: 1.8rem;">
                    🎨
                </div>
                <h5 class="fw-bold" style="color: #561C24;">Bisa Custom Desain</h5>
                <p class="text-muted small">Bebas request ukuran diameter, variasi warna, hingga kombinasi charm sesuai keinginanmu.</p>
            </div>
        </div>
        <!-- Keunggulan 3 -->
        <div class="col-md-4">
            <div class="p-4 h-100 border-0 card bg-transparent">
                <div class="mx-auto mb-3 d-flex align-items-center justify-content-center" style="width: 70px; height: 70px; background-color: #FFF8F3; border-radius: 50%; font-size: 1.8rem;">
                    🎁
                </div>
                <h5 class="fw-bold" style="color: #561C24;">Packaging Estetik</h5>
                <p class="text-muted small">Setiap pembelian dilengkapi kemasan pouch atau box gemas, sangat cocok dijadikan hadiah.</p>
            </div>
        </div>
    </div>
</div>
@endsection