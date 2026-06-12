@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm border-0" style="border-radius: 15px; background-color: #FFF8F3;">
                <div class="card-body p-5">
                    <h2 class="text-center mb-3" style="color: #561C24; font-weight: bold;">Custom Order Request 🌸</h2>
                    <p class="text-center text-muted mb-5">Rancang sendiri perhiasan manik-manik impianmu! Isi formulir di bawah ini.</p>
                    
                    <form onsubmit="kirimCustomKeWA(event)">
                        <div class="mb-4">
                            <label class="form-label fw-bold" style="color: #561C24;">Jenis Aksesoris</label>
                            <select class="form-select" id="jenis_aksesoris" style="border-radius: 8px;" required>
                                <option value="Gelang (Bracelet)">Gelang (Bracelet)</option>
                                <option value="Kalung (Necklace)">Kalung (Necklace)</option>
                                <option value="Cincin (Ring)">Cincin (Ring)</option>
                                <option value="Strap HP">Strap HP</option>
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold" style="color: #561C24;">Ukuran (cm) / Keterangan</label>
                            <input type="text" class="form-control" id="ukuran" placeholder="Contoh: Diameter gelang 16cm atau Cincin ukuran standar" style="border-radius: 8px;" required>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-bold" style="color: #561C24;">Kombinasi Warna & Tema Desain</label>
                            <textarea class="form-control" id="detail_desain" rows="4" placeholder="Contoh: Mau dominan warna pastel pink dan putih, lalu di bagian tengah ada manik berbentuk bunga daisy." style="border-radius: 8px;" required></textarea>
                        </div>

                        <button type="submit" class="btn w-100 text-white py-2" style="background-color: #561C24; border-radius: 8px; font-weight: bold;">
                            Kirim Desain Custom ke WhatsApp ✨
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function kirimCustomKeWA(event) {
        event.preventDefault();
        
        // Ambil data dari input form
        const jenis = document.getElementById('jenis_aksesoris').value;
        const ukuran = document.getElementById('ukuran').value;
        const detail = document.getElementById('detail_desain').value;
        
        // GANTI DENGAN NOMOR WHATSAPP BISNIS LU (Gunakan kode negara 62 di depan)
        const nomorWA = "6281234567890"; 
        
        // Susun teks kiriman
        const teksPesan = `Halo Starberriee! Oit, saya mau custom order dong:\n\n` +
                          `- *Jenis Aksesoris:* ${jenis}\n` +
                          `- *Ukuran/Keterangan:* ${ukuran}\n` +
                          `- *Detail Desain:* ${detail}\n\n` +
                          `Tolong dicek ya, terima kasih!`;
        
        // Buka link WhatsApp otomatis di tab baru
        window.open(`https://wa.me/${nomorWA}?text=${encodeURIComponent(teksPesan)}`, '_blank');
    }
</script>
@endsection