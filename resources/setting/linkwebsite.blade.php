@extends('setting.layout.setting')

@section('title', 'Link Website')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('informasi_akun') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Website & Sosial Media</h2>
            </div>

            <div class="link-list">
                <div class="link-item">
                    <span class="link-name">Instagram</span>
                    <span class="link-url"><a href="instagram.com/@jenilutfi18"
                            target="_blank">instagram.com/@jenilutfi18</a></span>
                </div>
                <div class="divider"></div>
                <div class="link-item">
                    <span class="link-name">Twitter</span>
                    <span class="link-url"><a href="x.com/@jenlutstore" target="_blank">x.com/@jenlutstore</a></span>
                </div>
                <div class="divider"></div>
                <div class="link-item">
                    <span class="link-name">Tiktok</span>
                    <span class="link-url"><a href="https://www.tiktok.com/yourprofile"
                            target="_blank">https://www.tiktok.com/yourprofile</a></span>
                </div>
                <div class="divider"></div>
                <div class="link-item">
                    <span class="link-name">Linkedin</span>
                    <span class="link-url"><a href="linkedin.com/jenilutfifauzi"
                            target="_blank">linkedin.com/jenilutfifauzi</a></span>
                </div>
                <div class="divider"></div>
                <div class="link-item">
                    <span class="link-name">Tiktok</span>
                    <span class="link-url"><a href="https://jenilutfi.com" target="_blank">https://jenilutfi.com</a></span>
                </div>
                <div class="divider"></div>
            </div>
        </div>
    </body>

@endsection
