@extends('layouts.main')

@section('content')
<div class="container py-5">
    <div class="text-center mb-5">
        <h1 style="color: #561C24; font-weight: bold;">Frequently Asked Questions (FAQs) 🤔</h1>
        <p class="text-muted">Punya pertanyaan seputar produk Starberriee? Temukan jawabannya di sini.</p>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-9">
            <div class="accordion" id="faqAccordion">
                
                <div class="accordion-item border-0 shadow-sm mb-3" style="border-radius: 10px; overflow: hidden;">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" style="background-color: #FFF8F3; color: #561C24;">
                            Apakah semua produk Starberriee ready stock?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white text-muted">
                            Sebagian besar produk kami berstatus <em>made by order</em> (dibuat setelah dipesan) untuk memastikan kualitas pengerjaan tangan (handmade) tetap terjaga dengan baik, namun kami juga menyediakan beberapa produk ready stock yang tertera di halaman Shop.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 shadow-sm mb-3" style="border-radius: 10px; overflow: hidden;">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" style="background-color: #FFF8F3; color: #561C24;">
                            Berapa lama proses pembuatan untuk Custom Order?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white text-muted">
                            Proses pengerjaan aksesoris custom memakan waktu sekitar 1 hingga 3 hari kerja, tergantung pada tingkat kerumitan desain dan antrean pesanan yang masuk.
                        </div>
                    </div>
                </div>

                <div class="accordion-item border-0 shadow-sm mb-3" style="border-radius: 10px; overflow: hidden;">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" style="background-color: #FFF8F3; color: #561C24;">
                            Bisa kirim ke seluruh kota di Indonesia?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                        <div class="accordion-body bg-white text-muted">
                            Bisa banget! Kami mendukung pengiriman ke seluruh wilayah Indonesia menggunakan layanan ekspedisi terpercaya seperti J&T, JNE, atau SiCepat langsung dari workshop kami.
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection