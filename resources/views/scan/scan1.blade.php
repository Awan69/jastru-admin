@extends('scan.layout.scan')

@section('title', 'Scan E-KTP')

@section('konten')

    <body>
        <div class="mobile-container">
            <!-- Header -->
            <div class="header d-flex align-items-center">
                <a href="/scan" style="font-size: 24px; padding: 16px; color: #10ABCF;">
                    <img src="/asset/images/scan/caret.svg" alt="Back">
                </a>
            </div>

            <!-- Content -->
            <div class="content text-center px-4">
                <p class="step-count text-muted">1 dari 2</p>
                <h3 class="font-weight-bold">Ambil <span class="highlight-text">E-KTP Kamu</span>!</h3>
                <p class="info-text text-muted">Data kamu hanya untuk proses verifikasi. Data akan tersimpan dan dilindungi
                    dengan aman.</p>
            </div>

            <!-- Info Box -->
            <div class="info-box text-left p-3">
                <i class="bi bi-info-circle-fill info-icon" style="color: #10ABCF;"></i>
                <p class="info-message m-0" style="color: #10ABCF;">Pastikan NIK dari E-KTP kamu belum pernah didaftarkan
                    dengan akun JASTRU sebelumnya.</p>
            </div>

            <!-- Image -->
            <div class="ktp-scan-image text-center">
                <img src="/asset/images/scan/scan_ktp.svg" alt="scan1 Illustration" class="scan1-image">
            </div>

            <!-- Open Camera Button -->
            <div class="bottom-scan1">
                <button class="confirm-open-cam">Buka Kamera</button>
            </div>

            <div class="confirm-cam" style="display: none;">
                <div class="popup-content">
                    <p class="popup-title">Izinkan Kamera</p>
                    <p class="popup-text">Kamu tidak dapat memasang voucher kembali ke produk yang sama setelah
                        membatalkannya.</p>
                    <button class="popup-button">Ya, izinkan</button>
                    <span class="close-popup">&times;</span>
                </div>
            </div>
        </div>
    </body>
@endsection
