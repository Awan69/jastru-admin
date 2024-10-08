@extends('jasa.layout.jasa')

@section('tittle', 'Listing Produk')

@section('content')

    <body>
        <div class="mobile-container">
            <!-- Search Bar -->
            <div class="top-bar">
                <button>
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back" class="h-5 mr-2">
                </button>
                <div class="relative flex-1">
                    <input type="text" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-full focus:outline-none" placeholder="Cari jasa, produk & seller">
                    <img src="{{ asset('gambar/Search.png') }}" alt="Search" class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5">
                </div>
                <div class="icons">
                    <div>
                        <img src="{{ asset('gambar/Keranjang.png') }}" alt="Cart">
                        <div class="badge">3</div>
                    </div>
                    <div id="notification-icon">
                        <img src="{{ asset('gambar/Notifikasi.png') }}" alt="Notifications">
                        <div class="badge">9+</div>
                    </div>
                </div>

                <!-- Notification Pop-Up -->
                <div id="notification-popup" class="notification-popup hidden">
                    <div class="notification-header">
                        <h4>Notifikasi</h4>
                    </div>
                    <div class="notification-content">
                        <ul class="notification-list">
                            <li class="notif-item promo">
                                <img src="{{ asset('gambar/promo.png') }}" alt="Promo Icon">
                                <div class="notif-content">
                                    <span class="notif-label">Promo</span>
                                    <p class="notif-title">Kumpulkan +1000 stamp jastru...</p>
                                    <p class="notif-text">Lakukan transaksi layanan di jastru dan kumpulkan jastru stamp hingga min 1000 dan tukarkan dengan saldo hingga 1 Juta.</p>
                                </div>
                            </li>
                            <li class="notif-item transaksi">
                                <img src="{{ asset('gambar/transaksi.png') }}" alt="Transaksi Icon">
                                <div class="notif-content">
                                    <span class="notif-label">Transaksi</span>
                                    <p class="notif-title">Anda baru saja menggunakan jasa vermak...</p>
                                    <p class="notif-text">Tetap terhubung dengan jastru untuk menjaga transaksi anda tetap aman.</p>
                                </div>
                            </li>
                            <!-- Tambahkan notifikasi lainnya sesuai kebutuhan -->
                        </ul>
                        <a href="/notifikasi" class="view-all" style="
                            display: block;
                            text-align: center;
                            color: #10ABCF;
                            background-color: #e0f7fa;
                            padding: 10px 0;
                            font-weight: bold;
                            text-decoration: none;
                            border-radius: 0 0 8px 8px;">
                            Lihat Semua Notifikasi >
                        </a>
                    </div>
                </div>
            </div>

            <!-- Menambahkan margin-top untuk banner -->
            <div class="relative mt-24">
                <img src="{{ asset('gambar/banner jastru/jasa 2/Web Banner Jasa DG.jpg') }}" alt="Banner" class="w-full h-50 object-cover">
                <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 flex justify-center">
                </div>
            </div>

            <!-- Tabs -->
            <div class="tabs bg-white shadow-md flex">
                <a href="#" class="text-gray-600" data-category="untuk-kamu">Untuk kamu</a>
                <a href="#" class="text-gray-600" data-category="banner">Banner</a>
                <a href="#" class="text-gray-600" data-category="poster">Poster</a>
                <a href="#" class="text-gray-600" data-category="coverbook">Coverbook</a>
            </div>

            <!-- Products Section -->
            <div class="content p-4">
                <h2 class="text-lg font-bold mb-2">Jasa Desain Grafis untuk kamu 🔥</h2>

                <!-- Product Carousel -->
                <div class="horizontal-scroll product-container" id="carousel-products">
                    <!-- Produk carousel akan diisi oleh JavaScript -->
                </div>

                <!-- Special Offer Banner -->
                <div class="relative mb-5">
                    <img src="{{ asset('gambar/banner jastru/deal/Banner jastru panjang.jpg') }}" alt="Special Offer" class="w-full h-24 object-cover">
                </div>
                <h2 class="text-lg font-bold mb-2">Jasa Desain Grafis untuk kamu 🔥</h2>

                <!-- More Products -->
                <div class="grid grid-cols-2 gap-4" id="more-products">
                    <!-- Produk akan diisi oleh JavaScript -->
                </div>
            </div>
        </div>
    </body>
    </html>
@endsection
