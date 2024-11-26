@extends('dashboard.layout.dashboard')

@section('title', 'Dashboard User')

@section('konten')

    <body>
        <div class="mobile-container">
            <section>
                <div class="top-bar d-flex gap-2">
                    <div class="search-bar" onclick="window.location.href='{{ route('jasa') }}';">
                        <div class="search-wrapper">
                            <img class="search-icon" src="asset/images/dashboard/search.svg" alt="Search Icon">
                            <input type="text" placeholder="Cari jasa, produk & seller">
                        </div>
                    </div>
                    <div class="icons">
                        <div type="button"><a href="/cart"><img src="asset/images/icon/chart.svg"
                                    alt="Chart"></a><span class="badge">2</span>
                        </div>
                        <div type="button"><a href="/notification"><img src="asset/images/icon/notif.svg"
                                    alt="Notifications"></a><span class="badge">3</span>
                        </div>
                    </div>
                </div>
            </section>
            <section class="promo-section">
                <div class="header-container">
                    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                        data-bs-interval="3000">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="asset/images/dashboard/flashsale1.jpg" class="d-block w-100" alt="Flash Sale 1">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/images/dashboard/flashsale2.jpg" class="d-block w-100" alt="Flash Sale 2">
                            </div>
                            <div class="carousel-item">
                                <img src="asset/images/dashboard/flashsale3.jpg" class="d-block w-100" alt="Flash Sale 3">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="balance">
                    <div class="amount">
                        <img src="asset/images/icon/saldo.png" alt="Saldo">
                        <div>
                            <span class="amount-value">
                                Rp{{ number_format($balance->balance_amount ?? 0, 0, ',', '.') }}
                            </span>
                            <span>Total Saldo</span>
                        </div>
                    </div>
                    <div class="action" type="button">
                        <img src="asset/images/icon/plush.png" alt="Topup">
                        <span>Topup</span>
                    </div>
                    <div class="action" type="button">
                        <img src="asset/images/icon/tarik_tunai.png" alt="Tarik Saldo">
                        <span>Tarik Saldo</span>
                    </div>
                    <div class="action" type="button">
                        <img src="asset/images/icon/riwayat.svg" alt="Riwayat">
                        <span>Riwayat</span>
                    </div>
                    @php
                        $balanceAmount = $balance ? $balance->balance_amount : 0;
                    @endphp
                </div>
            </section>
            <section>
                <div class="tabs">
                    <button id="jasa-tab" class="active">JASA</button>
                    <button id="produk-tab">PRODUK</button>
                </div>
            </section>
            <section class="services-section flex-grow-1">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="jasa">
                        <div class="services-grid">
                            <a href="/listing">
                                <div class="service-item" type="button"><img src="asset/images/jasa/desain_grafis.png"
                                        alt="Jasa Tukang">
                                    <div class="service-name">Jasa tukang</div>
                                </div>
                            </a>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_tukang.png"
                                    alt="Jasa Tukang">
                                <div class="service-name">Jasa tukang</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/video_animasi.png"
                                    alt="Video & Animasi">
                                <div class="service-name">Video & animasi</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/service_elektronik.png"
                                    alt="Service Elektronik">
                                <div class="service-name">Service elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_cleaning.png"
                                    alt="Cleaning Service">
                                <div class="service-name">Cleaning service</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_reparasi.png"
                                    alt="Reparasi Kendaraan">
                                <div class="service-name">Reparasi kendaraan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_antar.png"
                                    alt="Jasa Antar">
                                <div class="service-name">Jasa Antar</div>
                            </div>
                            <div class="service-item jasa-lainnya" type="button">
                                <img src="asset/images/jasa/jasa_lainnya.png" alt="Jasa Lainnya">
                                <div class="service-name">Jasa lainnya</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="produk">
                        <div class="services-grid">
                            <!-- Produk Items -->
                            <div class="service-item" type="button"><img src="asset/images/produk/makanan_minuman.png"
                                    alt="Makan dan Minum">
                                <div class="service-name">Makanan & Minuman</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/bahan_bangunan.png"
                                    alt="Makan Minum">
                                <div class="service-name">Bahan Bangunan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/elektronik.png"
                                    alt="Elektronik">
                                <div class="service-name">Elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/pertanian_peternakan.png" alt="Service Elektronik">
                                <div class="service-name">Pertanian & Peternakan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/peralatan_rumah.png"
                                    alt="Cleaning Service">
                                <div class="service-name">Peralatan Rumah</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/tumbuhan.png"
                                    alt="Tumbuhan">
                                <div class="service-name">Tumbuhan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/pakaian.png"
                                    alt="Pakaian">
                                <div class="service-name">Pakaian</div>
                            </div>
                            <div class="service-item jasa-lainnya" type="button">
                                <img src="asset/images/jasa/jasa_lainnya.png" alt="Jasa Lainnya">
                                <div class="service-name">Jasa lainnya</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="discount">
                    <div class="discount-banner1">
                        <img src="asset/images/diskon_banner/diskon_banner1.png" alt="Discount Image">
                    </div>
                    <div class="discount-banner2">
                        <img src="asset/images/diskon_banner/diskon_banner2.png" alt="Discount Image 2">
                    </div>
                </div>
            </section>
            <section>
                <div class="flash-deal">
                    <div class="flash-deal-banner">
                        <div class="flashdeal">
                            <img src="asset/images/dashboard/flash_deal20.png" alt="Discount Image">
                        </div>
                        <p>Mulai dari</p>
                        <h3>Rp 100 rb*</h3><button class="promo-button">Cek Promo</button>
                        <p class="terms">S&K Berlaku</p>
                    </div>
                    <div class="flash-deal-container">
                        @foreach ($allItems as $item)
                            <div class="flash-deal-item" style="text-decoration: none;">
                                <div class="flash-deal-item-image">
                                    <img src="{{ $item->image_to_show }}"
                                        alt="{{ $item->name_product ?? $item->service_name }}">
                                </div>
                                <div class="title">{{ $item->name_product ?? $item->service_name }}</div>
                                <p class="discount-price">
                                    Rp {{ isset($item->price) ? number_format($item->price * 4.9, 0, ',', '.') : '-' }}
                                </p>
                                <p class="original-price">
                                    <s>{{ isset($item->price) ? 'Rp' . number_format($item->price, 0, ',', '.') : '-' }}</s>
                                </p>
                            </div>
                        @endforeach
                        {{-- <div class="flash-deal-item">
                            <img src="asset/images/dashboard/jasaanimasiwebsite.png" alt="Website Interaktif">
                            <div class="title">Jasa animasi interaktif Murah</div>
                            <p class="discount-price">Rp 80.000</p>
                            <p class="original-price">Rp 100.000</p>
                        </div> --}}
                        {{-- <div class="flash-deal-item">
                            <img src="asset/images/dashboard/mousemurah.png" alt="Mouse Murah">
                            <div class="title">Mouse Wireless Logitech........</div>
                            <p class="discount-price">Rp 80.000</p>
                            <p class="original-price">Rp 100.000</p>
                        </div>
                        <div class="flash-deal-item">
                            <img src="asset/images/dashboard/jasapembuatansistemecomerce.png" alt="Website Murah">
                            <div class="title">Jasa pembuatan website....</div>
                            <p class="discount-price">Rp 80.000</p>
                            <p class="original-price">Rp 100.000</p>
                        </div> --}}
                    </div>
            </section>
            <section>
                <div class="title-section">
                    <h3>Jelajahi lebih banyak jasa & produk</h3>
                    <p>Dapatkan jasa & produk terbaik untukmu</p>
                </div>
                <div class="card-container">
                    @foreach ($allItems as $item)
                        <a href="{{ route('post.show', ['type' => $item instanceof App\Models\Product ? 'product' : 'service', 'id' => $item->id]) }}"
                            class="card" style="text-decoration: none;">
                            <div class="image">
                                <img src="{{ $item->image_to_show }}"
                                    alt="{{ $item->name_product ?? $item->service_name }}">
                            </div>
                            <div class="title">{{ $item->name_product ?? $item->service_name }}</div>
                            <div class="price-container">
                                <div class="price">
                                    {{ isset($item->price) ? 'Rp' . number_format($item->price, 0, ',', '.') : '-' }}
                                </div>
                                @if (isset($item->price))
                                    <div class="discount-price">
                                        Rp {{ number_format($item->price * 0.9, 0, ',', '.') }}
                                    </div>
                                @endif
                            </div>
                            <div class="rating">
                                <img src="{{ asset('asset/images/icon/star.svg') }}" alt="Star" class="star">
                                <span class="reviews">4.5 (120 ulasan)</span>
                            </div>
                            <div class="location">Subang, Jawa Barat (0-1km)</div>
                        </a>
                    @endforeach
                    <div class="card">
                        <div class="image"><img src="asset/images/dashboard/jasacyber.png" alt="Security Image"></div>
                        <div class="title">Jasa Cyber Security Anti DDOS</div>
                        <div class="price-container">
                            <div class="price">Rp750.000</div>
                            <div class="discount-price">Rp 9.999.000</div>
                        </div>
                        <div class="rating"><img src="{{ asset('asset/images/icon/star.svg') }}" alt="Star"
                                class="star">
                            <span class="reviews">4.5 (120 ulasan)</span>
                        </div>
                        <div class="location">Subang, Jawa Barat (0-1km)</div>
                    </div>
                    <div class="card">
                        <div class="image"><img src="asset/images//dashboard/jasapembuatanmobileapp.png"
                                alt="Mobile App Image">
                        </div>
                        <div class="title">Jasa pembuatan mobile app responsive</div>
                        <div class="price">Rp2.320.000</div>
                        <div class="rating"><img src="{{ asset('asset/images/icon/star.svg') }}" alt="Star"
                                class="star">
                            <span class="reviews">4.5 (120
                                ulasan)</span>
                        </div>
                        <div class="location">Subang,
                            Jawa Barat (0-1km)</div>
                    </div>
                </div>
            </section>
            <section>
                <div>
                    @include('navbar.layout.nav_bar')
                </div>
            </section>
            <!-- Overlay -->
            <div id="overlay" class="overlay">
                <div class="overlay-content">
                    <span id="close-overlay" class="close-btn">&times;</span>
                    <div class="category-section">
                        <h2>Kategori jasa</h2>
                        <div class="services-grid">
                            <!-- Jasa Items -->
                            <div class="service-item" type="button"><img src="asset/images/jasa/desain_grafis.png"
                                    alt="Jasa Tukang">
                                <div class="service-name">Desain Grafis</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_tukang.png"
                                    alt="Jasa Tukang">
                                <div class="service-name">Jasa tukang</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/video_animasi.png"
                                    alt="Video & Animasi">
                                <div class="service-name">Video & animasi</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/service_elektronik.png"
                                    alt="Service Elektronik">
                                <div class="service-name">Service elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_cleaning.png"
                                    alt="Cleaning Service">
                                <div class="service-name">Cleaning service</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_reparasi.png"
                                    alt="Reparasi Kendaraan">
                                <div class="service-name">Reparasi kendaraan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_antar.png"
                                    alt="Jasa Antar">
                                <div class="service-name">Jasa Antar</div>
                            </div>
                        </div>
                    </div>
                    <div class="category-section">
                        <h2>Kategori produk</h2>
                        <div class="services-grid">
                            <!-- Produk Items -->
                            <div class="service-item" type="button"><img src="asset/images/produk/makanan_minuman.png"
                                    alt="Makan dan Minum">
                                <div class="service-name">Makanan & Minuman</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/bahan_bangunan.png"
                                    alt="Makan Minum">
                                <div class="service-name">Bahan Bangunan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/elektronik.png"
                                    alt="Elektronik">
                                <div class="service-name">Elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/pertanian_peternakan.png" alt="Service Elektronik">
                                <div class="service-name">Pertanian & Peternakan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/peralatan_rumah.png"
                                    alt="Cleaning Service">
                                <div class="service-name">Peralatan Rumah</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/tumbuhan.png"
                                    alt="Tumbuhan">
                                <div class="service-name">Tumbuhan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/pakaian.png"
                                    alt="Pakaian">
                                <div class="service-name">Pakaian</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
