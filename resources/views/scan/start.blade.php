@extends('scan.layout.scan')

@section('title', 'Ambil Peluangmu!')

@section('konten')

    <body>
        <div class="mobile-container-start">
            <div class="header d-flex align-items-center">
                <a href="setting" style="font-size: 24px; padding: 16px; color: #10ABCF;"><img
                        src="/asset/images/scan/caret.svg" alt="Back"></a>
            </div>

            <div class="content text-center px-4">
                <h3 class="font-weight-bold">Ambil <span class="peluang">Peluangmu</span>!</h3>
                <p class="text-muted">Maksimalkan usaha kamu! Jadi seller di jastru dan dapatkan pembeli lebih banyak dengan
                    pengalaman mengelola usaha terbaik.</p>
            </div>

            <div class="action text-center my-3">
                <a href="/scan1">
                    <button class="btn btn-primary btn-lg px-5" style="font-size: 16px; border-radius: 8px; width: 90%;">
                        Daftar
                        seller
                        sekarang</button>
                </a>
            </div>

            <div class="learn-more
                    text-center mb-3">
                <small>Belum paham? <a href="#" class="text-link">Pelajari selengkapnya</a></small>
            </div>

            <div class="promo-image text-center">
                <img src="/asset/images/scan/shop.svg" alt="Shop Illustration" class="shop-image">
            </div>
        </div>
    </body>

@endsection
