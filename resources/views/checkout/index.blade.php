@extends('layouts.main')

@section('content')
<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <div class="card shadow-sm border-0 p-4">
                <h3 class="fw-bold mb-4" style="color: #561C24;">Formulir Pembayaran Starberriee ✨</h3>
                
                @if($product)
                    <div class="alert alert-light border mb-4 d-flex justify-content-between align-items-center">
                        <div>
                            <span class="text-muted d-block small">Produk yang dibeli:</span>
                            <strong>{{ $product->name }}</strong>
                        </div>
                        <span class="fw-bold text-success">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                    </div>
                @endif

                <form action="{{ route('checkout.process') }}" method="POST">
                    @csrf
                    
                    <h5 class="fw-semibold mb-3">Data Pengiriman</h5>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Nama Lengkap</label>
                        <input type="text" name="name" class="form-control" required placeholder="Masukkan nama lu...">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Nomor WhatsApp</label>
                        <input type="text" name="phone" class="form-control" required placeholder="08xxxxxxxxxx">
                    </div>
                    <div class="mb-3">
                        <label class="form-label text-muted small fw-bold">Alamat Lengkap</label>
                        <textarea name="address" class="form-control" rows="3" required placeholder="Alamat pengiriman barang..."></textarea>
                    </div>

                    <div class="mb-4">
                        <label class="form-label text-muted small fw-bold">Jasa Pengiriman (Ekspedisi)</label>
                        <select class="form-select" name="shipping_method" required>
                            <option value="" disabled selected>-- Pilih Jasa Ekspedisi --</option>
                            <option value="jne">JNE Regular (Reguler)</option>
                            <option value="jnt">J&T Express (Cepat)</option>
                            <option value="sicepat">SiCepat Untung (Hemat)</option>
                            <option value="gosend">GoSend Sameday (Khusus Jabodetabek)</option>
                        </select>
                    </div>

                    <hr>

                    <h5 class="fw-semibold my-3">Pilih Metode Pembayaran</h5>
                    <div class="card p-3 border mb-2">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="payment_method" id="payQris" value="qris" checked>
                            <label class="form-check-label ms-3 w-100" for="payQris">
                                <strong>QRIS (Dana, OVO, GoPay, LinkAja)</strong>
                                <span class="d-block text-muted small">Scan barcode otomatis langsung masuk sistem</span>
                            </label>
                        </div>
                    </div>

                    <div class="card p-3 border mb-4">
                        <div class="form-check d-flex align-items-center">
                            <input class="form-check-input" type="radio" name="payment_method" id="payBank" value="bank">
                            <label class="form-check-label ms-3 w-100" for="payBank">
                                <strong>Transfer Bank (BCA, Mandiri, BNI)</strong>
                                <span class="d-block text-muted small">Transfer manual lewat ATM / M-Banking</span>
                            </label>
                        </div>
                    </div>

                    <div class="d-grid gap-2">
                        <button type="submit" class="btn text-white fw-bold py-2.5" style="background-color: #561C24;">
                            Lanjut ke Pembayaran
                        </button>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection