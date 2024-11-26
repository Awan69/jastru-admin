@extends('setting.layout.setting')

@section('title', 'Pusat Seller')

@section('konten')

    <body>
        <div class="mobile-container-rekening">
            <!-- Header -->
            <div class="header-pusat-seller">
                <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                <h1>Pusat Seller Jastru</h1>
            </div>
            <div class="bawah-header-pusat-seller">
                <div class="header-content-pusat-seller">
                    <div class="left-content-pusat-seller">
                        <img src="{{ asset('gambar/ulasan/jastru-logo.png') }}" class="logo-jastru-pusat-seller" alt="Jastru Logo">
                        <span class="edukasi-seller-text-pusat-seller">Pusat Edukasi Seller</span>
                    </div>
                    <img src="{{ asset('gambar/ulasan/pp3.jpg') }}" class="profile-pic-pusat-seller" alt="Profile">
                </div>
                <!-- Search Box moved into header -->
                <div class="search-box-pusat-seller">
                    <img src="{{ asset('gambar/Search.png') }}" class="search-icon-pusat-seller" alt="Search Icon">
                    <input type="text" placeholder="Cari sesuatu di sini" class="search-input-pusat-seller">
                </div>
            </div>
            <!-- Main Content Slider -->
            <div class="main-content-pusat-seller">
                <!-- Slide 1 -->
                <div class="feature-slide-pusat-seller active-slide-pusat-seller" style="background: linear-gradient(180deg, #FFFFFF 27.12%, #10ABCF 170.68%);">
                    <h2 class="feature-title-pusat-seller">Baru! Cek Fitur <span class="highlight-negosiasi-pusat-seller">Negosiasi</span> di Kolom Pesan</h2>
                    <p class="feature-description-pusat-seller">Coba fitur baru negosiasi untuk kamu melakukan deal harga dengan customer & dapatkan pelanggan baru dengan mudah.</p>
                    <button class="cta-button-pusat-seller">Pelajari Selengkapnya</button>
                    <div class="curve-background-pusat-seller" style="background-color: rgba(30, 183, 219, 1)"></div>
                    <img src="{{ asset('gambar/ulasan/gambar-slide2.png') }}" class="feature-image-pusat-seller" style="margin-left: 40px;" alt="Feature Image">
                </div>
                <!-- Slide 2 -->
                <div class="feature-slide-pusat-seller" style="background: linear-gradient(180deg, #FFFFFF 27.12%, #1B868E 170.68%)">
                    <h2 class="feature-title-pusat-seller"><span class="highlight-negosiasi-pusat-seller" style="color: rgba(24, 159, 38, 1)">Dapatkan penghasilan</span> double digit jadi “<span class="highlight-negosiasi-pusat-seller">Seller Jastru</span>” </h2>
                    <p class="feature-description-pusat-seller">Coba fitur baru negosiasi untuk kamu melakukan deal harga dengan customer & dapatkan pelanggan baru dengan mudah.</p>
                    <button class="cta-button-pusat-seller">Pelajari Selengkapnya</button>
                    <div class="curve-background-pusat-seller" style="background-color: rgba(27, 134, 142, 1)"></div>
                    <img src="{{ asset('gambar/ulasan/gambar-slide1.png') }}" class="feature-image-pusat-seller" alt="Feature Image">
                </div>
                <!-- Slide 3 -->
                <div class="feature-slide-pusat-seller" style="background: linear-gradient(180deg, #FFFFFF 27.12%, #3A50A1 170.68%)">
                    <h2 class="feature-title-pusat-seller">Gabung <span class="highlight-negosiasi-pusat-seller" style="color: rgba(24, 159, 38, 1)">Komunitas Seller</span> Terbesar di Indonesia</h2>
                    <p class="feature-description-pusat-seller">Coba fitur baru negosiasi untuk kamu melakukan deal harga dengan customer & dapatkan pelanggan baru dengan mudah.</p>
                    <button class="cta-button-pusat-seller">Pelajari Selengkapnya</button>
                    <div class="curve-background-pusat-seller" style="background: rgba(58, 80, 161, 1)"></div>
                    <img src="{{ asset('gambar/ulasan/gambar-slide3.png') }}" class="feature-image-pusat-seller" alt="Feature Image">
                </div>
            </div>
            <div class="container-pusat-seller">
                <h2>Kembangkan Toko</h2>
                <div class="kembangkan-toko-pusat-seller">
                    <div class="kembangkan-toko-item">
                        <img src="{{ asset('gambar/news/mdsos.jpg') }}" alt="Thumbnail 1">
                        <div class="kembangkan-toko-desc">
                            <p>Pahami Pentingnya Media Promosi Online di Era Digital</p>
                            <span>Promosi Toko • Diperbarui 23 Sep</span>
                        </div>
                    </div>
                    <div class="kembangkan-toko-item">
                        <img src="{{ asset('gambar/news/Reseller.jpg') }}" alt="Thumbnail 2">
                        <div class="kembangkan-toko-desc">
                            <p>10 Cara Jadi Reseller Sukses, Bisa Untung Sampai Jutaan!</p>
                            <span>Promosi Toko • Diperbarui 23 Sep</span>
                        </div>
                    </div>
                    <div class="kembangkan-toko-item">
                        <img src="{{ asset('gambar/news/sll.png') }}" alt="Thumbnail 3">
                        <div class="kembangkan-toko-desc">
                            <p>Serba-serbi Menjadi Reseller Sukses, 5 Hal Ini Perlu..</p>
                            <span>Promosi Toko • Diperbarui 23 Sep</span>
                        </div>
                    </div>
                </div>

                <h2>Yuk, tonton video tips & trik jadi Seller terbaik!</h2>
                <div class="video-tips-pusat-seller">
                    <div class="video-container">
                        <iframe class="video-frame"
                            {{-- src="https://storages.sokuja.id/video2/_MOVIE_/violet_evergarden/sokuja_violet_evergarden_gaiden--720p.mp4" --}}
                            {{-- src="https://www.youtube.com/embed/M1YI40N2e3A" --}}
                            src="https://storages.sokuja.id/2024-summer/spy.mov/SOKUJA.ID-SPXF.CD-1080p.mp4"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                    </div>
                    <div class="video-info">
                        <p>Go seller: Cara ampuh jualan laris konsisten tiap bulan</p>
                        <span>1:42 • Promosi Toko • Diperbarui 23 Sep</span>
                        <p class="video-info-desc">Ini dia! tips ampuh yang bisa kamu coba untuk bisa mendapatkan transaksi konsisten tiap bulan. Dapatkan insight lainnya dengan tonton tips ini.</p>
                    </div>
                </div>

                <div class="video-tips2-pusat-seller">
                    <div class="video-tips2-item">
                        <div class="video-thumbnail">
                            <img src="https://img.youtube.com/vi/M1YI40N2e3A/hqdefault.jpg" alt="Thumbnail" />
                        </div>
                        <iframe class="video-frame2"
                            src="https://www.youtube.com/embed/M1YI40N2e3A?autoplay=1&mute=1"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <div class="video-tips2-desc">
                            <p>Pahami Pentingnya Media Promosi Online di Era Digital</p>
                            <span>Promosi Toko</span>
                        </div>
                    </div>

                    <div class="video-tips2-item">
                        <div class="video-thumbnail">
                            <img src="https://img.youtube.com/vi/M1YI40N2e3A/hqdefault.jpg" alt="Thumbnail" />
                        </div>
                        <iframe class="video-frame2"
                            src="https://www.youtube.com/embed/M1YI40N2e3A?autoplay=1&mute=1"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <div class="video-tips2-desc">
                            <p>10 Cara Jadi Reseller Sukses..</p>
                            <span>Promosi Toko</span>
                        </div>
                    </div>
                    <div class="video-tips2-item">
                        <div class="video-thumbnail">
                            <img src="https://img.youtube.com/vi/M1YI40N2e3A/hqdefault.jpg" alt="Thumbnail" />
                        </div>
                        <iframe class="video-frame2"
                            src="https://www.youtube.com/embed/M1YI40N2e3A?autoplay=1&mute=1"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <div class="video-tips2-desc">
                            <p>Serba-serbi Menjadi Reseller Sukses</p>
                            <span>Promosi Toko</span>
                        </div>
                    </div>
                    <div class="video-tips2-item">
                        <div class="video-thumbnail">
                            <img src="https://img.youtube.com/vi/M1YI40N2e3A/hqdefault.jpg" alt="Thumbnail" />
                        </div>
                        <iframe class="video-frame2"
                            src="https://www.youtube.com/embed/M1YI40N2e3A?autoplay=1&mute=1"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <div class="video-tips2-desc">
                            <p>Serba-serbi Menjadi Reseller Sukses..</p>
                            <span>Promosi Toko</span>
                        </div>
                    </div>
                    <div class="video-tips2-item">
                        <div class="video-thumbnail">
                            <img src="https://img.youtube.com/vi/M1YI40N2e3A/hqdefault.jpg" alt="Thumbnail" />
                        </div>
                        <iframe class="video-frame2"
                            src="https://www.youtube.com/embed/M1YI40N2e3A?autoplay=1&mute=1"
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                            allowfullscreen>
                        </iframe>
                        <div class="video-tips2-desc">
                            <p>Serba-serbi Menjadi Reseller Sukses..</p>
                            <span>Promosi Toko</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </body>
@endsection
