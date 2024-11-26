@extends('scan.layout.scan')

@section('title', 'Scan Facial')

@section('konten')
    <div class="mobile-container">
        <div class="camera-background">
            <a href="scan2" class="back-arrow-selfie">
                <img src="{{ asset('asset/images/icon/backarrow.svg') }}" alt="Back Arrow" />
            </a>

            <!-- Camera Feed -->
            <video id="cameraStream" autoplay playsinline></video>
        </div>

        <!-- Capture Button and Powered By Text -->
        <div class="capture-button-container">
            <button class="capture-button" id="captureSelfie">
                <x-icon-capture />
            </button>
            <p class="powered-by">Powered by <strong>HyperVerge</strong></p>
        </div>
    </div>
@endsection
