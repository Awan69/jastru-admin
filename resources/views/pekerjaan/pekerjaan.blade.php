@extends('pekerjaan.layout.loker')

@section('title', 'Misi & Loker')

@section('konten')

    <body>

        <div class="mobile-container">
            <!-- Search Bar -->
            <div class="header-pekerjaan">
                {{-- <button class="back-button" onclick="history.back()">
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                </button> --}}
                <div class="search-container">
                    <input type="text" placeholder="Cari jasa, produk & seller">
                    <img src="{{ asset('asset/images/dashboard/search.svg') }}" alt="Search">
                </div>
                <div class="icons">
                    <a href="/notification">
                        <div>
                            <img id="notification-icon" src="{{ asset('gambar/Notifikasi.png') }}" alt="Notifications">
                            <div class="badge">9+</div>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Banner -->
            <div class="banner">
                <img src="{{ asset('gambar/banner jastru/misi/ayo misi maucash.jpg') }}" alt="Banner">
            </div>

            <!-- Content -->
            <div class="content">
                <!-- Ayo Misi Section -->
                <a href="/misi_seru" class="ayo-misi">
                    <div class="ayo-misi-left">
                        <div class="ayomisi-container">
                            <div class="text-container">
                                <img src="{{ asset('gambar/Kerja.png') }}" alt="Money Icon" class="money-icon">
                                <p class="ayo-misi-subtitle">Ayo Misi</p>
                            </div>
                            <p class="ayo-misi-title">Peluang Cuan</p>
                        </div>
                    </div>
                    <div class="ayo-misi-button">
                        <img src="{{ asset('gambar/Next.png') }}" alt="Arrow">
                    </div>
                </a>


                <!-- Misi Section -->
                <div class="misi-section">
                    <div class="misi-list">
                        <a href="/detail_pekerjaan" class="misi-card">
                            <div class="misi-card-header">
                                <img src="{{ asset('gambar/PT/Kredivo.png') }}" alt="Kredivo" class="misi-logo">
                                <div class="misi-card-title">
                                    <p>
                                        Registrasi Kredivo dan
                                        dapatkan <span class="misi-highlight">Rp30.000</span>
                                    </p>
                                </div>
                                <div class="favorite-icon" onclick="toggleFavorite(this)">
                                    <svg width="14" height="19" viewBox="0 0 14 19"
                                        xmlns="http://www.w3.org/2000/svg" class="bookmark-icon">
                                        <path
                                            d="M7.07106 11.7755L1.52295 16.6026V1.87673C1.52295 1.2753 2.03202 0.75 2.70478 0.75H12.0684C12.7411 0.75 13.2502 1.2753 13.2502 1.87673V16.5429L8.07049 11.7888C7.78926 11.5307 7.35904 11.525 7.07106 11.7755Z"
                                            class="bookmark-path" />
                                    </svg>
                                </div>
                            </div>
                            <div class="misi-card-info">
                                <span>Registrasi</span>
                                <span>5 Menit pengerjaan</span>
                                <span>Rp 30.000</span>
                            </div>
                            <div class="misi-card-footer">
                                <span><span style="font-size: 13px; color: rgba(66, 66, 66, 1);">132</span>/200 Tiket</span>
                                <span>Post 1 jam yang lalu</span>
                            </div>
                        </a>

                        <!-- Tambahkan beberapa misi lagi -->
                        <a href="/detail_pekerjaan2" class="misi-card">
                            <div class="misi-card-header">
                                <img src="{{ asset('gambar/PT/LinkAja.png') }}" alt="LinkAja" class="misi-logo">
                                <div class="misi-card-title">
                                    <p>
                                        Registrasi LinkAja dan
                                        dapatkan <span class="misi-highlight">Rp30.000</span>
                                    </p>
                                </div>
                                <div class="favorite-icon" onclick="toggleFavorite(this)">
                                    <svg width="14" height="19" viewBox="0 0 14 19"
                                        xmlns="http://www.w3.org/2000/svg" class="bookmark-icon">
                                        <path
                                            d="M7.07106 11.7755L1.52295 16.6026V1.87673C1.52295 1.2753 2.03202 0.75 2.70478 0.75H12.0684C12.7411 0.75 13.2502 1.2753 13.2502 1.87673V16.5429L8.07049 11.7888C7.78926 11.5307 7.35904 11.525 7.07106 11.7755Z"
                                            class="bookmark-path" />
                                    </svg>
                                </div>
                            </div>
                            <div class="misi-card-info">
                                <span>Registrasi</span>
                                <span>5 Menit pengerjaan</span>
                                <span>Rp 30.000</span>
                            </div>
                            <div class="misi-card-footer">
                                <span><span style="font-size: 13px; color: rgba(66, 66, 66, 1);">196</span>/200 Tiket</span>
                                <span>Post 1 jam yang lalu</span>
                            </div>
                        </a>

                        <a href="link-to-detail-misi-page-1" class="misi-card">
                            <div class="misi-card-header">
                                <img src="{{ asset('gambar/PT/Akulaku.png') }}" alt="Kredivo" class="misi-logo">
                                <div class="misi-card-title">
                                    <p>
                                        Registrasi Akulaku dan
                                        dapatkan <span class="misi-highlight">Rp30.000</span>
                                    </p>
                                </div>
                                <div class="favorite-icon" onclick="toggleFavorite(this)">
                                    <svg width="14" height="19" viewBox="0 0 14 19"
                                        xmlns="http://www.w3.org/2000/svg" class="bookmark-icon">
                                        <path
                                            d="M7.07106 11.7755L1.52295 16.6026V1.87673C1.52295 1.2753 2.03202 0.75 2.70478 0.75H12.0684C12.7411 0.75 13.2502 1.2753 13.2502 1.87673V16.5429L8.07049 11.7888C7.78926 11.5307 7.35904 11.525 7.07106 11.7755Z"
                                            class="bookmark-path" />
                                    </svg>
                                </div>
                            </div>
                            <div class="misi-card-info">
                                <span>Registrasi</span>
                                <span>5 Menit pengerjaan</span>
                                <span>Rp 30.000</span>
                            </div>
                            <div class="misi-card-footer">
                                <span><span style="font-size: 13px; color: rgba(66, 66, 66, 1);">132</span>/200 Tiket</span>
                                <span>Post 1 jam yang lalu</span>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="separator"></div>

                <!-- Lowongan Kerja Section -->
                <div class="lowongan-kerja-section">
                    <div class="ayo-kerja">
                        <div class="ayo-kerja-left">
                            <div class="ayokerja-container">
                                <div class="text-container">
                                    <img src="{{ asset('gambar/Misi.png') }}" alt="Money Icon" class="koper-icon">
                                    <p class="ayo-kerja-subtitle">Ayo Kerja</p>
                                </div>
                                <p class="ayo-kerja-title">Lowongan Pekerjaan</p>
                            </div>
                        </div>
                    </div>

                    <div class="lowongan-kerja-list">
                        <a href="/detail_pekerjaan" class="lowongan-card">
                            <div class="favorite-icon-lowongan-kerja" onclick="toggleFavorite(this)">
                                <svg width="14" height="19" viewBox="0 0 14 19"
                                    xmlns="http://www.w3.org/2000/svg" class="bookmark-icon">
                                    <path
                                        d="M7.07106 11.7755L1.52295 16.6026V1.87673C1.52295 1.2753 2.03202 0.75 2.70478 0.75H12.0684C12.7411 0.75 13.2502 1.2753 13.2502 1.87673V16.5429L8.07049 11.7888C7.78926 11.5307 7.35904 11.525 7.07106 11.7755Z"
                                        class="bookmark-path" />
                                </svg>
                            </div>
                            <div class="lowongan-card-content">
                                <div class="lowongan-card-header-container">
                                    <img src="{{ asset('gambar/PT/Dicoding.png') }}" alt="Company Logo"
                                        class="company-logo">
                                    <div class="lowongan-card-info-container">
                                        <div class="lowongan-card-info">
                                            <div class="lowongan-card-header">
                                                <p class="lowongan-card-title">Android Developer</p>
                                            </div>
                                        </div>
                                        <p class="lowongan-card-subtitle">
                                            <span class="company-name">
                                                <img src="{{ asset('gambar/Verified.png') }}" alt="Verified Icon"
                                                    class="verified-icon">Dicoding
                                            </span>
                                            - Bandung, Jawa Barat
                                        </p>
                                    </div>
                                </div>
                                <div class="lowongan-card-tags">
                                    <span>S1</span>
                                    <span>Flutter</span>
                                    <span>Senior</span>
                                    <div class="primary-tags">
                                        <span>Full-time</span>
                                        <span>Walk-in Interview</span>
                                        <span>1 Lowongan Tersisa</span>
                                    </div>
                                </div>
                                <div class="range-gaji-date">
                                    <span class="lowongan-date">2 Bulan yang lalu </span>
                                    <span class="lowongan-gaji">6-7 Juta<span class="gaji-bulan">/Bulan</span></span>
                                </div>
                            </div>
                        </a>

                        <a href="/detail_pekerjaan2" class="lowongan-card">
                            <div class="favorite-icon-lowongan-kerja" onclick="toggleFavorite(this)">
                                <svg width="14" height="19" viewBox="0 0 14 19"
                                    xmlns="http://www.w3.org/2000/svg" class="bookmark-icon">
                                    <path
                                        d="M7.07106 11.7755L1.52295 16.6026V1.87673C1.52295 1.2753 2.03202 0.75 2.70478 0.75H12.0684C12.7411 0.75 13.2502 1.2753 13.2502 1.87673V16.5429L8.07049 11.7888C7.78926 11.5307 7.35904 11.525 7.07106 11.7755Z"
                                        class="bookmark-path" />
                                </svg>
                            </div>
                            <div class="lowongan-card-content">
                                <div class="lowongan-card-header-container">
                                    <img src="{{ asset('gambar/PT/Ivo.png') }}" alt="Company Logo" class="company-logo">
                                    <div class="lowongan-card-info-container">
                                        <div class="lowongan-card-info">
                                            <div class="lowongan-card-header">
                                                <p class="lowongan-card-title">Fullstack Developer</p>
                                            </div>
                                        </div>
                                        <p class="lowongan-card-subtitle">
                                            <span class="company-name">
                                                <img src="{{ asset('gambar/Verified.png') }}" alt="Verified Icon"
                                                    class="verified-icon">Ivosight
                                            </span>
                                            - Jakarta Selatan, Jakarta
                                        </p>
                                    </div>
                                </div>
                                <div class="lowongan-card-tags">
                                    <span>S1</span>
                                    <span>ReactJS</span>
                                    <span>PHP</span>
                                    <span>Senior</span>
                                    <div class="primary-tags">
                                        <span>Full-time</span>
                                        <span>On-site</span>
                                        <span>2 Lowongan Tersisa</span>
                                    </div>
                                </div>
                                <div class="range-gaji-date">
                                    <span class="lowongan-date">2 Bulan yang lalu </span>
                                    <span class="lowongan-gaji">6-7 Juta<span class="gaji-bulan">/Bulan</span></span>
                                </div>
                            </div>
                        </a>

                        <a href="link-to-detail-lowongan-page-1" class="lowongan-card">
                            <div class="favorite-icon-lowongan-kerja" onclick="toggleFavorite(this)">
                                <svg width="14" height="19" viewBox="0 0 14 19"
                                    xmlns="http://www.w3.org/2000/svg" class="bookmark-icon">
                                    <path
                                        d="M7.07106 11.7755L1.52295 16.6026V1.87673C1.52295 1.2753 2.03202 0.75 2.70478 0.75H12.0684C12.7411 0.75 13.2502 1.2753 13.2502 1.87673V16.5429L8.07049 11.7888C7.78926 11.5307 7.35904 11.525 7.07106 11.7755Z"
                                        class="bookmark-path" />
                                </svg>
                            </div>
                            <div class="lowongan-card-content">
                                <div class="lowongan-card-header-container">
                                    <img src="{{ asset('gambar/PT/Len.png') }}" alt="Company Logo" class="company-logo">
                                    <div class="lowongan-card-info-container">
                                        <div class="lowongan-card-info">
                                            <div class="lowongan-card-header">
                                                <p class="lowongan-card-title">Data Analyst</p>
                                            </div>
                                        </div>
                                        <p class="lowongan-card-subtitle">
                                            <span class="company-name">
                                                <img src="{{ asset('gambar/Verified.png') }}" alt="Verified Icon"
                                                    class="verified-icon">PT LEN
                                            </span>
                                            - Bandung, Jawa Barat
                                        </p>
                                    </div>
                                </div>
                                <div class="lowongan-card-tags">
                                    <span>S1</span>
                                    <span>SQL</span>
                                    <span>Python</span>
                                    <span>Junior</span>
                                    <div class="primary-tags">
                                        <span>Full-time</span>
                                        <span>On-site</span>
                                        <span>1 Lowongan Tersisa</span>
                                    </div>
                                </div>
                                <div class="range-gaji-date">
                                    <span class="lowongan-date">2 Bulan yang lalu </span>
                                    <span class="lowongan-gaji">6-7 Juta<span class="gaji-bulan">/Bulan</span></span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="space">
            </div>
            <section>
                @include('navbar.layout.nav_bar')
            </section>
        </div>
    </body>
@endsection
