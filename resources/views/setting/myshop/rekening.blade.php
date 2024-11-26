@extends('setting.layout.setting')

@section('title', 'Rekening')

@section('konten')

    <body>

        <div class="mobile-container-rekening">
            <!-- Bagian Header -->
            <header class="rekening-header">
                <img src="{{ asset('gambar/Kembali.png') }}" alt="Back" onclick="history.back()">
                <h1>Rekening Bank Saya</h1>
            </header>

            <!-- Daftar Rekening Bank -->
            <div class="card-rekening-list">
                <!-- Card BRI -->
                <div class="card-rekening">
                    <div class="card-rekening-upper bri-gradient">
                        <div class="card-info">
                            <span class="bank-name">BRI</span>
                            <span class="account-number">01928495829</span>
                        </div>
                        <span class="tag-utama">Utama</span>
                    </div>
                    <div class="card-rekening-lower">
                        <button class="lihat-detail" data-bank="BRI">Lihat detail</button>
                        <button class="hapus-rekening">Hapus rekening</button>
                    </div>
                </div>

                <!-- Card Mandiri -->
                <div class="card-rekening">
                    <div class="card-rekening-upper mandiri-gradient">
                        <div class="card-info">
                            <span class="bank-name">Mandiri</span>
                            <span class="account-number">1234567890</span>
                        </div>
                    </div>
                    <div class="card-rekening-lower">
                        <button class="lihat-detail" data-bank="Mandiri">Lihat detail</button>
                        <button class="hapus-rekening">Hapus rekening</button>
                    </div>
                </div>

                <!-- Card BCA -->
                <div class="card-rekening">
                    <div class="card-rekening-upper bca-gradient">
                        <div class="card-info">
                            <span class="bank-name">BCA</span>
                            <span class="account-number">9876543210</span>
                        </div>
                    </div>
                    <div class="card-rekening-lower">
                        <button class="lihat-detail" data-bank="BCA">Lihat detail</button>
                        <button class="hapus-rekening">Hapus rekening</button>
                    </div>
                </div>

                <!-- Card CIMB Niaga -->
                <div class="card-rekening">
                    <div class="card-rekening-upper cimb-gradient">
                        <div class="card-info">
                            <span class="bank-name">CIMB Niaga</span>
                            <span class="account-number">1122334455</span>
                        </div>
                    </div>
                    <div class="card-rekening-lower">
                        <button class="lihat-detail" data-bank="CIMB Niaga">Lihat detail</button>
                        <button class="hapus-rekening">Hapus rekening</button>
                    </div>
                </div>

                <div class="card-rekening">
                    <div class="card-rekening-upper btn-gradient">
                        <div class="card-info">
                            <span class="bank-name">BTN</span>
                            <span class="account-number">10293847667</span>
                        </div>
                    </div>
                    <div class="card-rekening-lower">
                        <button class="lihat-detail" data-bank="BTN">Lihat detail</button>
                        <button class="hapus-rekening">Hapus rekening</button>
                    </div>
                </div>
            </div>

            <!-- Pop-up Detail Rekening (Masih menggunakan pop-up BRI) -->
            <div id="rekening-popup" class="rekening-popup" style="display: none;">
                <div class="rekening-popup-content">
                    <h2>Detail Rekening</h2>
                    <div class="rekening-detail-info">
                        <p>Nama bank: <span id="bank-name">BRI</span></p>
                        <p>Nama pemilik: <span>J**i L***i F***i</span></p>
                        <p>Nomor rekening: <span id="account-number">01928495829</span></p>
                        <p>Cabang bank: <span>-</span></p>
                    </div>
                    <button id="rekening-close-popup" class="rekening-btn-tutup">Tutup</button>
                </div>
            </div>


            <!-- Bagian Footer -->
            <footer class="voucher-footer">
                <a href="/tambah_rekening">
                    <button>Tambah rekening bank</button>
                </a>
            </footer>
        </div>

    </body>
@endsection
