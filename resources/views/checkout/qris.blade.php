@extends('layouts.main')

@section('content')
<div class="container my-5 text-center">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card shadow-sm border-0 p-4">
                <h3 class="fw-bold mb-3" style="color: #561C24;">Scan QRIS Starberriee ✨</h3>
                <p class="text-muted small">Silakan scan kode QRIS resmi di bawah ini menggunakan aplikasi mobile banking atau dompet digital favorit lu.</p>
                
                <div class="my-4">
                    <img src="https://api.qrserver.com/v1/create-qr-code/?size=250x250&data=StarberrieePembayaranQRIS" 
                         alt="QRIS Code" class="img-fluid border p-2 rounded shadow-sm bg-white" style="max-width: 250px;">
                </div>

                <div class="alert alert-warning text-start" role="alert">
                    <small><strong>Penting:</strong> Harap lakukan transfer sesuai nominal tagihan lu. Jika sudah berhasil, segera tekan tombol konfirmasi di bawah.</small>
                </div>

                <div class="d-grid gap-2">
                    <a href="{{ route('checkout.success') }}" class="btn text-white fw-bold py-2.5" style="background-color: #561C24;">
                        Saya Sudah Bayar
                    </a>
                    <a href="{{ route('shop') }}" class="btn btn-light btn-sm text-muted">
                        Batalkan Transaksi
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection