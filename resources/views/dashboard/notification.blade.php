<body>
    @extends('dashboard.layout.dashboard')

    @section('title', 'Notifikasi')

    @section('konten')

        <body>
            <div class="mobile-container">
                <div class="notif-header">
                    <button style="border: none; background: #FFFFFF;" onclick="history.back()">
                        <img src="{{ asset('gambar/kembali.png') }}" alt="Back" height="24" width="24">
                    </button>
                    <h1>Notifikasi</h1>
                    <button class="btn-tlh-dibaca">Tandai telah dibaca</button>
                </div>

                <!-- Filter Bar -->
                <div class="notif-filter-bar">
                    <svg width="30" height="30" viewBox="0 0 40 40" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <rect width="39.4223" height="40" rx="8" fill="#F6F6F6" />
                        <path d="M20.0464 15.3525L27.4222 15.3525" stroke="#525867" stroke-width="1.5"
                            stroke-linecap="round" />
                        <path d="M12 15.3525L14.6821 15.3525" stroke="#525867" stroke-width="1.5" stroke-linecap="round" />
                        <circle cx="17.3639" cy="15.3526" r="2.60263" stroke="#525867" stroke-width="1.5" />
                        <path d="M12 25.0577L20.0463 25.0577" stroke="#525867" stroke-width="1.5" stroke-linecap="round" />
                        <path d="M25.4106 25.0577L27.4222 25.0577" stroke="#525867" stroke-width="1.5"
                            stroke-linecap="round" />
                        <circle cx="22.7286" cy="25.0579" r="2.60263" stroke="#525867" stroke-width="1.5" />
                    </svg>
                    <button class="notif-filter-button" id="filter-all" onclick="filterContent('all')">All</button>
                    <button class="notif-filter-button" id="filter-transaksi"
                        onclick="filterContent('transaksi')">Transaksi</button>
                    <button class="notif-filter-button" id="filter-promo" onclick="filterContent('promo')">Promo</button>
                    <button class="notif-filter-button" id="filter-pengajuan"
                        onclick="filterContent('pengajuan')">Pengajuan</button>
                </div>
                <div class="separator" style="margin-top: 141px;"></div>

                <div class="notif-list">
                    <h1> Terbaru Untuk Anda</h1>
                    <div class="notif-item promo" style="background-color: #F2F8FF;">
                        <img src="{{ asset('gambar/promo.png') }}" alt="Promo Icon">
                        <div class="notif-content">
                            <span class="notif-label">Promo</span>
                            <p class="notif-title">Kumpulkan +1000 stamp jastru</p>
                            <p class="notif-text">Lakukan transaksi layanan di jastru dan kumpulkan jastru stamp hingga min
                                1000 dan ...</p>
                        </div>
                    </div>

                    <div class="notif-item transaksi">
                        <img src="{{ asset('gambar/transaksi.png') }}" alt="Transaksi Icon">
                        <div class="notif-content">
                            <span class="notif-label">Transaksi</span>
                            <p class="notif-title">Anda baru saja menggunakan jasa vermak</p>
                            <p class="notif-text">Tetap terhubung dengan jastru untuk menjaga transaksi anda tetap aman.</p>
                        </div>
                    </div>
                </div>

                <div class="separator"></div>

                <div class="notif-list-2">
                    <h1> Aktivitas Lainnya</h1>
                    <div class="notif-item transaksi">
                        <img src="{{ asset('gambar/transaksi.png') }}" alt="Transaksi Icon">
                        <div class="notif-content">
                            <span class="notif-label">Transaksi</span>
                            <p class="notif-title">Anda baru saja menggunakan jasa vermak</p>
                            <p class="notif-text">Tetap terhubung dengan jastru untuk menjaga transaksi anda tetap aman.</p>
                        </div>
                    </div>

                    <div class="notif-item pengajuan">
                        <img src="{{ asset('gambar/transaksi.png') }}" alt="Pengajuan Icon">
                        <div class="notif-content">
                            <span class="notif-label">Pengajuan</span>
                            <p class="notif-title">Pengajuan lowongan kerja Graphic Design</p>
                            <p class="notif-text">Proses pengajuan sedang dilakukan, hubungi admin jika terdapat kendala.
                            </p>
                        </div>
                    </div>

                    <div class="notif-item promo">
                        <img src="{{ asset('gambar/promo.png') }}" alt="Promo Icon">
                        <div class="notif-content">
                            <span class="notif-label">Promo</span>
                            <p class="notif-title">Dapatkan extra point keuntungan sampai 100%</p>
                            <p class="notif-text">Tingkatkan transaksi kamu sebagai seller jastru untuk dapatkan extra point
                                yang bisa kamu tukar untuk voucher umroh!</p>
                        </div>
                    </div>
                </div>
            </div>
        </body>
    @endsection
</body>

</html>
