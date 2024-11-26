@extends('scan.layout.scan')

@section('title', 'Konfirmasi E-KTP')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="scan1">
                    <img src="{{ asset('asset/images/scan/backarrow.svg') }}" alt="Back Arrow" class="back-arrow-icon">
                </a>
                <p class="title">Konfirmasi Foto E-KTP</p>
            </div>

            <div class="cf_ktp-image">
                <img src="{{ Storage::url('ktp_images/' . $sellerVerification->ktp_image) }}" alt="ktp_image Image">
            </div>

            <div class="info-box">
                <i class="bi bi-info-circle-fill"></i>
                <p>Pastikan e-KTP kamu pas di dalam kotak dan tidak ada pantulan cahaya atau gangguan lainnya.</p>
            </div>

            <div class="bottom-scan2">
                <a href="/open_cam">
                    <button class="btn-secondary">Foto ulang</button>
                </a>
                <a href="/scan2">
                    <button class="btn-primary">Konfirmasi</button>
                </a>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
@endsection
