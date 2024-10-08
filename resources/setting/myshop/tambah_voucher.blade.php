@extends('setting.layout.setting')

@section('title', 'Buat Voucher')

@section('konten')

    <body>
        <div class="mobile-container-rekening">
            <header class="voucher-header">
                <a href="/voucher">
                    <button class="back-button">
                        <img src="{{ asset('asset/images/icon/backarrow.png') }}" alt="Back">
                    </button>
                </a>
                <h1>Buat Voucher</h1>
            </header>

            <div class="voucher-content">
                <!-- Nama Voucher -->
                <div class="voucher-section">
                    <div class="voucher-name">
                        <h2>Nama Voucher</h2>
                        <div class="char-counter" id="char-count">0/255</div>
                    </div>
                    <div class="voucher-input">
                        <input type="text" id="voucher-name" placeholder="Masukkan Nama Produkmu.." maxlength="255"
                            oninput="updateCharCount()">
                    </div>
                </div>

                <div class="separator">

                    <!-- Pilih Jasa Atau Produk -->
                    <div class="voucher-section">
                        <button class="select-button" id="selectButton">
                            <h2 id="selectedText">Pilih Produk atau Jasa</h2>
                            <span id="selectedItem">Pilih &gt;</span>
                        </button>
                    </div>

                    <!-- Pop-up Container -->
                    <div id="popup" class="popup-tambah-voucher">
                        <div class="popup-tambah-voucher-content">
                            <input type="text" id="searchBox" placeholder="Cari Produk atau Jasa..." />
                            <ul id="productList">
                                <li class="product-item" data-name="Jasa Website Profesional Murah">Jasa Website Profesional
                                    Murah</li>
                                <li class="product-item" data-name="Desain Grafis">Desain Grafis</li>
                                <li class="product-item" data-name="Service Elektronik">Service Elektronik</li>
                                <li class="product-item" data-name="Video Animasi">Video Animasi</li>
                                <li class="product-item" data-name="Cleaning Service">Cleaning Service</li>
                                <!-- Tambahkan produk/jasa dummy lainnya -->
                            </ul>
                        </div>
                    </div>

                    <div class="separator">

                        <!-- Pengaturan Voucher -->
                        <div class="voucher-section">
                            <div class="voucher-label">
                                <h2>Pengaturan Voucher</h2>
                            </div>

                            <div class="input-inline">
                                <span>Nominal Potongan</span>
                                <div class="input-box">
                                    <span>Rp</span>
                                    <input type="number" placeholder="Nominal">
                                </div>
                            </div>

                            <div class="input-inline">
                                <span>Minimal Belanja</span>
                                <div class="input-box">
                                    <span>Rp</span>
                                    <input type="number" placeholder="Nominal">
                                </div>
                            </div>

                            <div class="input-inline">
                                <span>Kuota Pemakaian</span>
                                <input type="number" class="input-small" placeholder="0">
                            </div>

                            <div class="input-inline">
                                <span>Maks. per Pembeli</span>
                                <input type="number" class="input-small" placeholder="0">
                            </div>
                        </div>

                        <div class="separator">

                        <!-- Pengaturan Durasi Voucher -->
                        <div class="voucher-section">
                            <div class="voucher-label">
                                <h2>Durasi Voucher</h2>
                            </div>
                            <div class="time-picker clickable">
                                <label for="start-time">Waktu Mulai</label>
                                <span id="start-time">[Pilih Tanggal dan Jam]</span>
                                <span class="clickable-arrow">></span>
                            </div>
                            <div class="time-picker clickable">
                                <label for="end-time">Waktu Berakhir</label>
                                <span id="end-time">[Pilih Tanggal dan Jam]</span>
                                <span class="clickable-arrow">></span>
                            </div>
                        </div>

                        <!-- Modal untuk memilih tanggal dan jam -->
                        <div id="time-modal" class="modal" style="display:none;">
                            <div class="modal-content">
                                <h3>Pilih Tanggal</h3>
                                <input type="date" id="date-picker">
                                <h3>Pilih Jam</h3>
                                <input type="time" id="time-picker">
                                <button id="save-time">Simpan</button>
                            </div>
                        </div>

                    </div>

                    <footer class="voucher-footer">
                        <button>Buat Voucher</button>
                    </footer>
                </div>
            </div>
        </div>

    </body>

    </html>
@endsection
