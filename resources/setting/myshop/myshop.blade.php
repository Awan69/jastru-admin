@extends('setting.layout.setting')

@section('title', 'Toko Saya')

@section('konten')
    <div class="mobile-container">
        <div class="header-myshop">
            <a href="/setting">
                <button class="back-button">
                    <img src="{{ asset('asset/images/icon/backarrow.png') }}" alt="Back">
                </button>
            </a>
            <h2>Toko saya</h2>
        </div>
        <div class="myshop-scroll">
            <div class="info-myshop">
                <img src="{{ asset('asset/images/setting/toko_saya/avatar.svg') }}" alt="Avatar" class="avatar-myshop">
                <div class="info-text-myshop">
                    <p class="name-myshop">Jeni lutfi fauzi</p>
                    <div class="saldo-myshop">
                        <img src="{{ asset('asset/images/setting/toko_saya/wallet.svg') }}" alt="Wallet"
                            class="wallet-icon">
                        <p>Rp 0</p>
                    </div>
                </div>
                <button class="button-myshop primary" type="button" style="margin-left: auto;">Kunjungi profil</button>
            </div>
            <div class="daftar-produk-myshop">
                <p class="produk-count-myshop">Produk & Jasa</p>
                <h3>Daftar produk & jasa saya</h3>
                <p class="produk-count-myshop">4 Jasa & 3 Produk</p>
                <a href="/products_services">
                    <img src="{{ asset('asset/images/icon/arrow.png') }}" alt="arrow"
                        class="bi bi-caret-right arrow-right">
                </a>
            </div>
            <div class="status-order-myshop">
                <h3>Status Order</h3>
                <div class="status-order-item-myshop">
                    <div class="status-item-myshop">
                        <p class="status-count-myshop">1</p>
                        <p class="status-name-myshop">Perlu dikirim</p>
                    </div>
                    <div class="status-item-myshop">
                        <p class="status-count-myshop">0</p>
                        <p class="status-name-myshop">Pembatalan</p>
                    </div>
                    <div class="status-item-myshop">
                        <p class="status-count-myshop">0</p>
                        <p class="status-name-myshop">Pengembalian</p>
                    </div>
                    <div class="status-item-myshop">
                        <p class="status-count-myshop">0</p>
                        <p class="status-name-myshop">Selesai</p>
                    </div>
                </div>
            </div>
            <div class="pengumuman-seller-myshop">
                <h3>Pengumuman seller</h3>
                <div class="carousel-myshop">
                    <div id="bannerCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('asset/images/myshop/banner1.jpg') }}" class="d-block w-100"
                                    alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('asset/images/myshop/banner2.jpg') }}" class="d-block w-100"
                                    alt="Second slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#bannerCarousel" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#bannerCarousel" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="menu-toko-myshop">
                <h3>Menu toko</h3>

                <a href="/voucher" class="menu-item-myshop">
                    <img src="{{ asset('asset/images/icon/voucher.png') }}" alt="Voucher">
                    <p>Voucher saya</p>
                </a>
                <a href="/rekening" class="menu-item-myshop">
                    <img src="{{ asset('asset/images/icon/rekening.png') }}" alt="Rekening">
                    <p>Rekening bank</p>
                </a>
                <a href="/seller-levels" class="menu-item-myshop">
                    <img src="{{ asset('asset/images/icon/seller_level.png') }}" alt="Seller Levels">
                    <p>Seller levels</p>
                </a>
                <a href="/pendapatan" class="menu-item-myshop">
                    <img src="{{ asset('asset/images/icon/pendapatan.png') }}" alt="Income">
                    <p>Pendapatan</p>
                </a>
                <a href="/edukasi-seller" class="menu-item-myshop">
                    <img src="{{ asset('asset/images/icon/wallet.svg') }}" alt="Pusat edukasi seller">
                    <p>Pusat edukasi seller</p>
                </a>
                <a href="/chat-bantuan" class="menu-item-myshop">
                    <img src="{{ asset('asset/images/icon/chat_bantuan.png') }}" alt="Bantuan">
                    <p>Chat Bantuan</p>
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    {{-- <script>
        $(document).ready(function() {
            $('.arrow-right').click(function() {
                // Redirect to the "Daftar Produk" page
                window.location.href = '/daftar-produk';
            });
        });
    </script> --}}
@endsection
