@extends('scan.layout.scan')

@section('title', 'Scan E-KTP')

@section('konten')
    <div class="mobile-container">
        <div class="camera-background">
            <a href="scan1" class="back-arrow-open">
                <img src="{{ asset('asset/images/scan/backarrow.svg') }}" alt="Back Arrow" />
            </a>

            <!-- Camera Feed -->
            <video id="cameraStream" autoplay playsinline></video>

            <!-- Instruction Text -->
            <p class="camera-instructions">
                Posisikan E-KTP di dalam kotak dan pastikan hasil terlihat jelas tanpa ada pantulan cahaya.
            </p>

            <!-- KTP Align Box -->
            <div class="ktp-align-box"></div>
        </div>

        <!-- Capture Button and Powered By Text -->
        <div class="capture-button-container">
            <button class="capture-button" id="captureKtp">
                <x-icon-capture />
            </button>
            <p class="powered-by">Powered by <strong>Jastru</strong></p>
        </div>
    </div>
@endsection
