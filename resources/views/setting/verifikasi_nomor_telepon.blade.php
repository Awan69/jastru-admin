@extends('setting.layout.setting')

@section('title', 'Pusat Seller')

@section('konten')

    <body>
        <div class="mobile-container-rekening">
            <!-- Header Section -->
            <div class="header">
                <button class="back-button">
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                </button>
                <h2>Verifikasi Nomor Telepon</h2>
            </div>

            <!-- Content Section -->
            <div class="content-verifikasi-otp">
                <h3 class="title-verifikasi-otp">MASUKAN OTP</h3>
                <p class="subtitle-verifikasi-otp">
                    Cek kode OTP melalui nomor whatsapp yang digunakan pada nomor terbaru
                </p>

                <!-- OTP Input Boxes -->
                <div class="otp-container-verifikasi-otp">
                    <input type="text" class="otp-box-verifikasi-otp" maxlength="1" id="otp1">
                    <input type="text" class="otp-box-verifikasi-otp" maxlength="1" id="otp2">
                    <input type="text" class="otp-box-verifikasi-otp" maxlength="1" id="otp3">
                    <input type="text" class="otp-box-verifikasi-otp" maxlength="1" id="otp4">
                </div>

                <!-- Confirmation Button -->
                <button class="confirm-btn-verifikasi-otp">Konfirmasi</button>
            </div>
        </div>
    </body>
@endsection
