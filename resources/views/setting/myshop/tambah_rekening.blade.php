@extends('setting.layout.setting')

@section('title', 'Tambah Rekening')

@section('konten')

    <body>
        <div class="mobile-container">
            <!-- Header -->
            <div class="rekening-header">
                <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                <h1>Tambah Rekening</h1>
            </div>

            <!-- Konten Halaman -->
            <div style="padding: 130px 16px 0 16px;">
                <!-- Info Box -->
                <div class="info-box">
                    <div class="info-icon">ℹ️</div>
                    <div>Pastikan kamu memasukkan data yang valid. Proses cek akan berlangsung 1x24 jam.</div>
                </div>

                <!-- Tombol Pilih Bank -->
                <button id="selectBankButton" class="select-bank-btn">
                    Pilih Bank <span>Pilih ></span>
                </button>

                <!-- Overlay dan Popup -->
                <div id="overlay" class="overlay"> <!-- Tanpa class active -->
                    <div id="bankPopup" class="popup"> <!-- Tanpa class active -->
                        <!-- Header Popup -->
                        <div class="header-popup">
                            <h2 class="popup-title">Pilih Bank</h2>
                            <div class="divider"></div>
                            <div class="search-box-container">
                                <img src="search-icon.png" alt="Search">
                                <input type="text" class="search-box" placeholder="Cari Bank">
                            </div>
                        </div>

                        <!-- Daftar Nama Bank -->
                        <div class="popup-content">
                            <div class="product-item">BRI</div>
                            <div class="product-item">Hana Bank</div>
                            <div class="product-item">Nobu Bank</div>
                            <div class="product-item">SeaBank</div>
                            <div class="product-item">BTPN</div>
                            <div class="product-item">Bank Jatim</div>
                            <div class="product-item">BCA Syariah</div>
                            <div class="product-item">BJB</div>
                            <div class="product-item">Danamon</div>
                            <div class="product-item">Chimbniaga</div>
                            <div class="product-item">Bank DKI</div>
                            <div class="product-item">Allo Bank</div>
                        </div>
                    </div>
                </div>

                <template id="checkIconTemplate">
                    <img src="{{ asset('gambar/checklist.png') }}" alt="Check Icon">
                </template>

                <!-- Nama Pemilik Rekening -->
                <div class="input-container">
                    <span class="input-label">Pemilik Rekening</span>
                    <input type="text" class="input-field" placeholder="Atas Nama Rekening">
                </div>

                <!-- Nomor Rekening -->
                <div class="input-container">
                    <span class="input-label">Nomor Rekening</span>
                    <input type="text" class="input-field number-only" placeholder="Nomor Rekening">
                </div>
            </div>

            <!-- Footer -->
            <div class="voucher-footer">
                <button>Tambah Rekening</button>
            </div>
        </div>
@endsection
