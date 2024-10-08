@extends('setting.layout.setting')

@section('title', 'Product & Services<') @section('konten') <body>
    <div class="mobile-container">
        <div class="header">
            <a href="/myshop">
                <button class="back-button">
                    <img src="asset/images/icon/backarrow.png" alt="Back">
                </button>
            </a>
            <h2>Produk & Jasa saya</h2>
        </div>
        <div class="products-services-button-container">
            <button class="products-services-button active"> Jasa</button>
            <button class="products-services-button"> Produk</button>
        </div>

        <div class="products-services-card">
            <img src="asset/images/dashboard/jasaanimasiwebsite.png" alt="Jasa Animasi">
            <div class="products-services-card-body">
                <h5 class="products-services-card-title">Jasa animasi website interaktif javascript auto keren..</h5>
                <span class="products-services-price">Rp. 500.000</span>
                <div class="products-services-card-stats">
                    <div class="stat-group">
                        <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                        <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                    </div>
                    <div class="stat-group">
                        <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                        <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                    </div>
                </div>
                <div class="products-services-card-button">
                    <button class="btn-primary">Ubah</button>
                    <button class="btn-secondary">Pasang voucher</button>
                    <div class="btn-options">...</div>
                </div>
            </div>
        </div>
        <div class="products-services-card">
            <img src="asset/images/dashboard/jasacyber.png" alt="Jasa Animasi">
            <div class="products-services-card-body">
                <h5 class="products-services-card-title">Jasa protect server dari hacker & DDOS full maintenance..
                </h5>
                <span class="products-services-price">Rp. 500.000</span>
                <div class="products-services-card-stats">
                    <div class="stat-group">
                        <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                        <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                    </div>
                    <div class="stat-group">
                        <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                        <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                    </div>
                </div>
                <div class="products-services-card-button">
                    <button class="btn-primary">Ubah</button>
                    <button class="btn-secondary">Pasang voucher</button>
                    <div class="btn-options">...</div>
                </div>
                <div class="products-services-card-button">
                    <button class="btn-primary">Ubah</button>
                    <button class="btn-secondary">Pasang voucher</button>
                    <div class="btn-options">...</div>
                </div>
            </div>
        </div>
        <div class="products-services-card">
            <img src="asset/images/dashboard/jasapembuatanmobileapp.png" alt="Jasa Animasi">
            <div class="products-services-card-body">
                <h5 class="products-services-card-title">Jasa pembuatan mobile app responsive profesional full..
                </h5>
                <span class="products-services-price">Rp. 500.000</span>
                <div class="products-services-card-stats">
                    <div class="stat-group">
                        <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                        <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                    </div>
                    <div class="stat-group">
                        <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                        <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                    </div>
                </div>
                <div class="products-services-card-button">
                    <button class="btn-primary">Ubah</button>
                    <button class="btn-secondary">Pasang voucher</button>
                    <div class="btn-options">...</div>
                </div>
                <div class="products-services-card-button">
                    <button class="btn-primary">Ubah</button>
                    <button class="btn-secondary">Pasang voucher</button>
                    <div class="btn-options">...</div>
                </div>
            </div>
        </div>
        <div class="products-services-card">
            <img src="asset/images/dashboard/jasapembuatansistemecomerce.png" alt="Jasa Animasi">
            <div class="products-services-card-body">
                <h5 class="products-services-card-title">Jasa pembuatan website e-commerce murah cepat..
                </h5>
                <span class="products-services-price">Rp. 500.000</span>
                <div class="products-services-card-stats">
                    <div class="stat-group">
                        <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                        <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                    </div>
                    <div class="stat-group">
                        <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                        <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                    </div>
                </div>
                <div class="products-services-card-button">
                    <button class="btn-primary">Ubah</button>
                    <button class="btn-secondary">Pasang voucher</button>
                    <div class="btn-options">...</div>
                </div>
                <div class="products-services-card-button">
                    <button class="btn-primary">Ubah</button>
                    <button class="btn-secondary">Pasang voucher</button>
                    <div class="btn-options">...</div>
                </div>
                <div class="footer">
                    <div class="button-group">
                        <a href="{{ route('pinpoint') }}">
                            <button class="pin-button">Tambah Jasa</button>
                        </a>
                        <button class="confirm-button">Tambah Produk</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

    </html>
