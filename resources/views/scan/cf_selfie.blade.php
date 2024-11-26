@extends('scan.layout.scan')

@section('title', 'Konfirmasi selfie')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="scan2">
                    <img src="{{ asset('asset/images/scan/backarrow.svg') }}" alt="Back Arrow" class="back-arrow-icon">
                </a>
                <p class="title">Konfirmasi Foto E-KTP</p>
            </div>

            <div class="cf_ktp-image">
                @if (isset($sellerVerification) && $sellerVerification->selfie_image)
                    <img src="{{ Storage::url('selfie_images/' . $sellerVerification->selfie_image) }}"
                        alt="selfie_image Image">
                @endif
            </div>

            <div class="info-box">
                <i class="bi bi-info-circle-fill"></i>
                <p>Pastikan kamu berada di ruangan yang memiliki cahaya yang bisa membuat kamu terlihat dengan jelas.</p>
            </div>

            <div class="bottom-scan2">
                <a href="/selfie_cam">
                    <button class="btn-secondary">Foto ulang</button>
                </a>
                <button class="btn-primary" id="confirmButton">Konfirmasi</button>
            </div>

            <div class="confirm-popup" style="display: none;" id="confirmPopup">
                <div class="popup-content">
                    <div class="popup-title">Selesaikan Verifikasi</div>
                    <div class="popup-text">
                        Kamu tidak dapat memasang voucher kembali ke produk yang sama setelah membatalkannya.
                    </div>
                    <div class="button-container">
                        <button class="popup-button-cancel" onclick="closePopup()">Cek dulu</button>
                        <button class="popup-button" id="confirmVerification">Ya, selesaikan</button>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>
@endsection
