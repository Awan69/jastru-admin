@extends('setting.layout.setting')

@section('title', 'Favorit')

@section('konten')
    <div class="mobile-container">
        <div class="header">
            <a href="{{ route('setting') }}">
                <button class="back-button">
                    <img src="{{ asset('asset/images/icon/backarrow.png') }}" alt="Back">
                </button>
            </a>
            <h2>Favorit</h2>
        </div>

        <div class="tabs">
            <button class="tab-button active" data-tab="1">Produk & Jasa</button>
            <button class="tab-button" data-tab="2">Misi</button>
            <button class="tab-button" data-tab="3">Pekerjaan</button>
        </div>

        <div class="content-container">
            <!-- Tab 1: Produk & Jasa -->
            <div class="tab-content active" id="tab-1">
                <div class="favorite-item">
                    <img src="asset/images/dashboard/jasaanimasiwebsite.png" alt="Produk">
                    <div class="favorite-item-content">
                        <h3>Jasa animasi website interaktif javascript auto keren..</h3>
                        <p>Rp. 500.000</p>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
                <div class="favorite-item">
                    <img src="asset/images/dashboard/jasapembuatansistemecomerce.png" alt="Produk">
                    <div class="favorite-item-content">
                        <h3>Jasa pembuatan website e-commerce murah cepat..</h3>
                        <p>Rp. 500.000</p>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
                <div class="favorite-item">
                    <img src="asset/images/dashboard/keyboard_gaming.png" alt="Produk">
                    <div class="favorite-item-content">
                        <h3>Mekanik Keyboard Gaming dengan RGB Light Murah..</h3>
                        <p>Rp. 500.000</p>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
            </div>

            <!-- Tab 2: Misi -->
            <div class="tab-content" id="tab-2">
                <div class="mission-item">
                    <img src="asset/images/perusahaan/kredivo.png" alt="Misi">
                    <div class="favorite-mission">
                        <h4>Registrasi kredivo dan dapatkan</h4>
                        <div class="reward">
                            <p>Rp. 30.000</p>
                        </div>
                        <div class="tiket">
                            <p class="avabile">132</p>
                            <p class="kuota">/200 Tiket</p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
                <div class="mission-item">
                    <img src="asset/images/perusahaan/flip.png" alt="Misi">
                    <div class="favorite-mission">
                        <h4>Berikan FLIP ulasan & dapatkan</h4>
                        <div class="reward">
                            <p>Rp. 10.000</p>
                        </div>
                        <div class="tiket">
                            <p class="avabile">132</p>
                            <p class="kuota">/200 Tiket</p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
                <div class="mission-item">
                    <img src="asset/images/perusahaan/bankmega.png" alt="Misi">
                    <div class="favorite-mission">
                        <h4>Isi survey bank MEGA dan dapatkan</h4>
                        <div class="reward">
                            <p>Rp. 50.000</p>
                        </div>
                        <div class="tiket">
                            <p class="avabile">132</p>
                            <p class="kuota">/200 Tiket</p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
                <div class="mission-item">
                    <img src="asset/images/perusahaan/tokopedia.png" alt="Misi">
                    <div class="favorite-mission">
                        <h4>Belanja minimal 50k dan dapatkan</h4>
                        <div class="reward">
                            <p>Rp. 25.000</p>
                        </div>
                        <div class="tiket">
                            <p class="avabile">132</p>
                            <p class="kuota">/200 Tiket</p>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
            </div>

            <!-- Tab 3: Pekerjaan -->
            <div class="tab-content" id="tab-3">
                <div class="job-item">
                    <img src="asset/images/perusahaan/dicoding.png" alt="Pekerjaan">
                    <div class="favorite-jobs">
                        <div class="job-info">
                            <h4>Android Developer</h4>
                            <div class="company">
                                <h5 class="company-name"><i class="fa fa-check-circle verified-icon"></i>Dicoding</h5>
                                <p class="address"> - Bandung, Jawa Barat</p>
                            </div>
                            <div class="salary">
                                <p class="salary">5-6 Juta</p>
                                <p class="per-month">/Bulan</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
                <div class="job-item">
                    <img src="asset/images/perusahaan/grab.png" alt="Pekerjaan">
                    <div class="favorite-jobs">
                        <div class="job-info">
                            <h4>Data Scientist </h4>
                            <div class="company">
                                <h5 class="company-name"><i class="fa fa-check-circle verified-icon"></i>Grab</h5>
                                <p class="address"> - Bandung, Jawa Barat</p>
                            </div>
                            <div class="salary">
                                <p class="salary">5-6 Juta</p>
                                <p class="per-month">/Bulan</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
                <div class="job-item">
                    <img src="asset/images/perusahaan/sanber_code.png" alt="Pekerjaan">
                    <div class="favorite-jobs">
                        <div class="job-info">
                            <h4>Cyber Security</h4>
                            <div class="company">
                                <h5 class="company-name"><i class="fa fa-check-circle verified-icon"></i>Sanbercode </h5>
                                <p class="address"> - Bandung, Jawa Barat</p>
                            </div>
                            <div class="salary">
                                <p class="salary">5-6 Juta</p>
                                <p class="per-month">/Bulan</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <i class="bi bi-bookmark-fill bookmark-btn"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
