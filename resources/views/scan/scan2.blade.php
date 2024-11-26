@extends('scan.layout.scan')

@section('title', 'Selfie')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header d-flex align-items-center">
                <a href="/cf_ktp" style="font-size: 24px; padding: 16px; color: #10ABCF;">
                    <img src="/asset/images/scan/caret.svg" alt="Back">
                </a>
            </div>

            <!-- Content -->
            <div class="content text-center px-4">
                <p class="text-muted">2 dari 2</p>
                <h3 class="font-weight-bold">Ambil <span class="peluang">E-KTP KamuSelfie Kamu</span>!</h3>
                <p class="text-muted">Ambil foto selfie kamu untuk verifikasi bahwa kamu sesuai dengan data pada KTP.</p>
            </div>

            <!-- Info Box -->
            <div class="info-box text-left p-3">
                <i class="bi bi-info-circle-fill" style="color: #10ABCF;"></i>
                <p class="m-0" style="color: #10ABCF;">Pastikan kamu berada di ruangan yang memiliki cahaya yang bisa
                    membuat kamu terlihat dengan jelas.</p>
            </div>

            <!-- Image -->
            <div class="ktp-scan-image text-center">
                <img src="/asset/images/scan/selfie.svg" alt="scan1 Illustration" class="scan1-image">
            </div>

            <!-- Open Camera Button -->
            <div class="bottom-scan1">
                <a href="/selfie_cam">
                    <button class="open-cam">Buka Kamera</button>
                </a>
            </div>
        </div>
    </body>

@endsection
