@extends('setting.layout.setting')

@section('title', 'Detail Pesanan')

@section('konten')

    <body>
        <div class="mobile-container-rekening">

            <!-- detail-order-produk-header -->
            <div class="detail-order-produk-header">
                <button class="back-button" onclick="history.back()">
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                </button>
                <h1>Detail Pesanan</h1>
            </div>

            <!-- Informasi Pesanan -->
            <div class="detail-order-produk-info-order">
                <img src="{{ asset('gambar/info-order.png') }}" alt="Order Icon">
                <div class="detail-order-produk-info-order-deskripsi">
                    <h2>Belum bayar</h2>
                    <p>Order ini akan dibatalkan apabila pembayaran tidak diselesaikan sampai 3 Sep 2024 (24 jam). Tunggu sampai pembayaran dikonfirmasi Jastru.</p>
                    <p class="time">Waktu pemesanan: 2 Sep 2024 10:36</p>
                </div>
            </div>

            <!-- Alamat Pembeli -->
            <div class="detail-order-produk-address">
                <img src="{{ asset('gambar/waypoint.png') }}" alt="Addrsse Icon">
                <div class="detail-order-produk-address-detail">
                    <h3>Alamat Pembeli</h3>
                    <p>Dzakyy Fadhilurahman <span>087219472812</span></p>
                    <p>Jalan majsari rt 10 rw 03 desa kamarun, Kab SUBANG, PAGADEN, JAWA BARAT, Pos 41252.</p>
                </div>
            </div>

            <!-- Status Pengiriman -->
            <div class="detail-order-produk-delivery">
                <img src="{{ asset('gambar/delivery.png') }}" alt="Delivery Icon">
                <div class="detail-order-produk-delivery-detail">
                    <h3>Status Pengiriman</h3>
                    <p>Ambil di tempat</p>
                    <p class="p-gray">Pembeli akan datang pukul 14.30 WIB</p>
                </div>
            </div>

            <!-- Informasi Pembayaran -->
            <div class="detail-order-produk-payment">
                <img src="{{ asset('gambar/payment.png') }}" alt="Income Icon">
                <div class="detail-order-produk-payment-info">
                    <h3>Informasi Pembayaran</h3>
                    <div>
                        <span>Total Pesanan</span>
                        <span>Rp100.000</span>
                    </div>
                    <div>
                        <span>Ongkos Kirim</span>
                        <span>Rp0</span>
                    </div>
                    <div>
                        <span>Biaya Lainnya</span>
                        <span>Rp0</span>
                    </div>
                    <div class="total">
                        <span>Total Harus Dibayar</span>
                        <span>Rp100.000</span>
                    </div>
                </div>
            </div>

            <!-- detail-order-produk-income Anda -->
            <div class="detail-order-produk-income">
                <div>Penghasilan Anda</div>
                <div class="price">Rp100.000</div>
            </div>

            <div class="detail-order-produk-method">
                <div>Metode Pembayaran</div>
                <div class="price">COD</div>
            </div>

            <div class="detail-order-produk-card" data-status="Belum Dibayar">
                <div class="detail-order-produk-profile-section">
                    <div class="detail-order-produk-profile-info">
                        <img src="{{ asset('gambar/ulasan/pp1.png') }}" alt="Profile">
                        <span class="name">DzakyFadhlurrahman</span>
                    </div>
                </div>

                <div class="detail-order-produk-product-section">
                    <div class="detail-order-produk-product-image">
                        <img src="{{ asset('gambar/Post/Post-1.png') }}" alt="Product">
                    </div>
                    <div class="detail-order-produk-product-info">
                        <span class="detail-order-produk-product-name">Mouse gaming logitech profesional bergaransi</span>
                        <div class="details">
                            <span class="quantity">1x</span>
                            <span class="price">Rp. 500.000</span>
                        </div>
                    </div>
                </div>

                <div class="detail-order-produk-number">
                    <span>No. Pesanan </span>
                    <span>#28C965CSJIENC</span>
                </div>

                <div class="detail-order-produk-date-checkout">
                    <span>Waktu pemesanan</span>
                    <span>2 Sep 2024 10.36</span>
                </div>

                <!-- Tombol untuk menambahkan catatan -->
                <!-- Tombol untuk menambahkan catatan -->
                <div class="detail-order-produk-actions">
                    <button id="add-note-button" class="detail-order-produk-note-button" onclick="toggleNoteInput()">Tambahkan Catatan</button>
                </div>

                <!-- Input field untuk catatan, awalnya disembunyikan -->
                <div id="note-input-section" class="note-input-section" style="display: none;">
                    <textarea id="note-input" placeholder="Catatan tidak dapat dilihat oleh pembeli"></textarea>
                    <div class="note-buttons">
                        <button class="cancel-button" onclick="cancelNote()">Batalkan</button>
                        <button class="save-button" onclick="saveNote()">Simpan</button>
                    </div>
                </div>

                <!-- Catatan yang sudah tersimpan, awalnya disembunyikan -->
                <div id="saved-note-section" class="saved-note-section" style="display: none;">
                    <div class="note-detail-order-produk-header">
                        <span>Catatan</span>
                        <a href="#" class="edit-link" onclick="editNote()">Ubah</a>
                    </div>
                    <p id="saved-note-text"></p>
                </div>
            </div>

            <!-- detail-order-produk-footer -->
            <div class="detail-order-produk-footer">
                <button>
                    <img src="{{ asset('gambar/bubblechat-white.png') }}" alt="Bubble Chat Icon">
                    Hubungi Pembeli
                </button>
            </div>

        </div>

    </body>
@endsection
