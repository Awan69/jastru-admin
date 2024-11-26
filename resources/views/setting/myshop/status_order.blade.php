@extends('setting.layout.setting')

@section('title', 'Status Order')

@section('konten')

    <body>

        <div class="mobile-container-rekening">
            <!-- Header -->
            <div class="status-order-header">
                <button class="back-button" onclick="history.back()">
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                </button>
                <span class="title">Status Order</span>
                <button class="message-button">
                    <img src="{{ asset('gambar/Navigasi/Chat inbox.png') }}" alt="Message">
                    <span class="status-order-unread-indicator" id="unreadCount">3</span> <!-- Indikator pesan belum dibaca -->
                </button>
            </div>

            <!-- Filter Tabs -->
            <div class="filter-tab-status-order">
                <div class="filter-tab active" data-filter="Belum Dibayar">Belum Bayar</div>
                <div class="filter-tab" data-filter="Diproses">Diproses</div>
                <div class="filter-tab" data-filter="Selesai">Selesai</div>
                <div class="filter-tab" data-filter="Pembatalan">Pembatalan</div>
                <div class="filter-tab" data-filter="Pengembalian">Pengembalian</div> <!-- Added filter tab -->
            </div>


            <!-- Order List -->
            <div class="order-status-list">
                <!-- Pesan "Belum ada order" -->
                <div class="no-order-message">
                    Belum ada order
                </div>
                <!-- Order Card -->
                <div class="order-status-card" data-status="Belum Dibayar">
                    <div class="order-status-profile-section">
                        <div class="order-status-profile-info">
                            <img src="{{ asset('gambar/ulasan/pp1.png') }}" alt="Profile">
                            <span class="name">Dzikri MK</span>
                        </div>
                        <span class="status">Belum Dibayar</span>
                    </div>

                    <div class="order-status-product-section">
                        <div class="order-status-product-image">
                            <img src="{{ asset('gambar/Post/Post-1.png') }}" alt="Product">
                        </div>
                        <div class="order-status-product-info">
                            <span class="order-status-product-name">Mouse gaming logitech profesional bergaransi</span>
                            <div class="details">
                                <span class="quantity">1x</span>
                                <span class="price">Rp. 500.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-status-order-summary">
                        <div>
                            <span class="product-quantity">1</span>
                            <span class="product-text"> Produk</span>
                        </div>
                        <div>
                            <span class="total-label">Total pesanan :</span>
                            <span class="total">Rp. 500.000</span>
                        </div>
                    </div>

                    <div class="order-status-order-actions">
                        <div class="payment-deadline">
                            <span>Pembayaran online sebelum</span>
                            <span>29 Agustus 2024</span>
                        </div>
                        <a href="/detail_order_produk">
                            <a href="/detail_order_produk">
                            <button class="detail-button">Detail Pesanan</button>
                        </a>
                        </a>
                    </div>

                    <div class="order-status-order-number">
                        <span>No. Pesanan: </span>
                        <span>#28C965CSJIENC</span>
                    </div>
                </div>

                <div class="order-status-card" data-status="Belum Dibayar">
                    <div class="order-status-profile-section">
                        <div class="order-status-profile-info">
                            <img src="{{ asset('gambar/ulasan/pp1.png') }}" alt="Profile">
                            <span class="name">Dzikri MK</span>
                        </div>
                        <span class="status">Belum Dibayar</span>
                    </div>

                    <div class="order-status-product-section">
                        <div class="order-status-product-image">
                            <img src="{{ asset('gambar/Post/Post-1.png') }}" alt="Product">
                        </div>
                        <div class="order-status-product-info">
                            <span class="order-status-product-name">Mouse gaming logitech profesional bergaransi</span>
                            <div class="details">
                                <span class="quantity">1x</span>
                                <span class="price">Rp. 500.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-status-order-summary">
                        <div>
                            <span class="product-quantity">1</span>
                            <span class="product-text"> Produk</span>
                        </div>
                        <div>
                            <span class="total-label">Total pesanan :</span>
                            <span class="total">Rp. 500.000</span>
                        </div>
                    </div>

                    <div class="order-status-order-actions">
                        <div class="payment-deadline">
                            <span>Pembayaran online sebelum</span>
                            <span>29 Agustus 2024</span>
                        </div>
                        <a href="/detail_order_produk">
                            <button class="detail-button">Detail Pesanan</button>
                        </a>
                    </div>

                    <div class="order-status-order-number">
                        <span>No. Pesanan: </span>
                        <span>#28C965CSJIENC</span>
                    </div>
                </div>

                <div class="order-status-card" data-status="Diproses">
                    <div class="order-status-profile-section">
                        <div class="order-status-profile-info">
                            <img src="{{ asset('gambar/ulasan/pp1.png') }}" alt="Profile">
                            <span class="name">Dzikri MK</span>
                        </div>
                        <span class="status">Belum Dibayar</span>
                    </div>

                    <div class="order-status-product-section">
                        <div class="order-status-product-image">
                            <img src="{{ asset('gambar/Post/Post-1.png') }}" alt="Product">
                        </div>
                        <div class="order-status-product-info">
                            <span class="order-status-product-name">Mouse gaming logitech profesional bergaransi</span>
                            <div class="details">
                                <span class="quantity">1x</span>
                                <span class="price">Rp. 500.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-status-order-summary">
                        <div>
                            <span class="product-quantity">1</span>
                            <span class="product-text"> Produk</span>
                        </div>
                        <div>
                            <span class="total-label">Total pesanan :</span>
                            <span class="total">Rp. 500.000</span>
                        </div>
                    </div>

                    <div class="order-status-order-actions">
                        <div class="payment-deadline">
                            <span>Pembayaran online sebelum</span>
                            <span>29 Agustus 2024</span>
                        </div>
                        <a href="/detail_order_jasa">
                            <button class="detail-button">Detail Pesanan</button>
                        </a>
                    </div>

                    <div class="order-status-order-number">
                        <span>No. Pesanan: </span>
                        <span>#28C965CSJIENC</span>
                    </div>
                </div>

                <div class="order-status-card" data-status="Selesai">
                    <div class="order-status-profile-section">
                        <div class="order-status-profile-info">
                            <img src="{{ asset('gambar/ulasan/pp3.jpg') }}" alt="Profile">
                            <span class="name">Cielys</span>
                        </div>
                        <span class="status">Selesai</span>
                    </div>

                    <div class="order-status-product-section">
                        <div class="order-status-product-image">
                            <img src="{{ asset('gambar/Post/Post-1.png') }}" alt="Product">
                        </div>
                        <div class="order-status-product-info">
                            <span class="order-status-product-name">Mouse gaming logitech profesional bergaransi</span>
                            <div class="details">
                                <span class="quantity">1x</span>
                                <span class="price">Rp. 500.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-status-order-summary">
                        <div>
                            <span class="product-quantity">1</span>
                            <span class="product-text"> Produk</span>
                        </div>
                        <div>
                            <span class="total-label">Total pesanan :</span>
                            <span class="total">Rp. 500.000</span>
                        </div>
                    </div>

                    <div class="order-status-order-actions">
                        <div class="payment-deadline">
                            <span>Pembayaran online sebelum</span>
                            <span>29 Agustus 2024</span>
                        </div>
                        <a href="/detail_order_produk">
                            <button class="detail-button">Detail Pesanan</button>
                        </a>
                    </div>

                    <div class="order-status-order-number">
                        <span>No. Pesanan: </span>
                        <span>#28C965CSJIENC</span>
                    </div>
                </div>

                <div class="order-status-card" data-status="Pembatalan">
                    <div class="order-status-profile-section">
                        <div class="order-status-profile-info">
                            <img src="{{ asset('gambar/ulasan/pp3.jpeg') }}" alt="Profile">
                            <span class="name">King Rizz</span>
                        </div>
                        <span class="status">Pembatalan</span>
                    </div>

                    <div class="order-status-product-section">
                        <div class="order-status-product-image">
                            <img src="{{ asset('gambar/Post/Post-1.png') }}" alt="Product">
                        </div>
                        <div class="order-status-product-info">
                            <span class="order-status-product-name">Mouse gaming logitech profesional bergaransi</span>
                            <div class="details">
                                <span class="quantity">1x</span>
                                <span class="price">Rp. 500.000</span>
                            </div>
                        </div>
                    </div>

                    <div class="order-status-order-summary">
                        <div>
                            <span class="product-quantity">1</span>
                            <span class="product-text"> Produk</span>
                        </div>
                        <div>
                            <span class="total-label">Total pesanan :</span>
                            <span class="total">Rp. 500.000</span>
                        </div>
                    </div>

                    <div class="order-status-order-actions">
                        <div class="payment-deadline">
                            <span>Pembayaran online sebelum</span>
                            <span>29 Agustus 2024</span>
                        </div>
                        <a href="/detail_order_produk">
                            <button class="detail-button">Detail Pesanan</button>
                        </a>
                    </div>

                    <div class="order-status-order-number">
                        <span>No. Pesanan: </span>
                        <span>#28C965CSJIENC</span>
                    </div>
                </div>

                <!-- Repeat similar cards for other orders -->
            </div>
        </div>
    </body>
@endsection
