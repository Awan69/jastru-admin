@extends('setting.layout.setting')

@section('title', 'Voucher')

@section('konten')

    <body>
        <div class="mobile-container-rekening">
            <header class="voucher-header">
                <a href="{{ route('myshop') }}">
                    <button class="back-button">
                        <img src="{{ asset('asset/images/icon/backarrow.png') }}" alt="Back">
                    </button>
                </a>
                <h1>Voucher Saya</h1>
            </header>

            <div class="voucher-filter-buttons">
                <button id="active-tab" class="active">Aktif</button>
                <button id="completed-tab">Selesai</button>
            </div>

            <div class="voucher-content" id="voucher-container">
                <!-- Voucher Aktif -->
                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Tester</h2>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p class="details">Potongan: Rp 10k &nbsp;&nbsp; Min Belanja: Rp 250k</p>
                            <p class="details">Digunakan: 0 &nbsp;&nbsp; Sisa: 20</p>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width end-now-btn">Akhiri sekarang</button>
                    </div>
                </div>

                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Spesial Belanja</h2>
                            <p>10 Sep 2024 - 12 Sep 2024</p>
                            <p class="details">Potongan: Rp 15k &nbsp;&nbsp; Min Belanja: Rp 300k</p>
                            <p class="details">Digunakan: 1 &nbsp;&nbsp; Sisa: 10</p>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width end-now-btn">Akhiri sekarang</button>
                    </div>
                </div>

                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Hari Raya</h2>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p class="details">Potongan: Rp 10k &nbsp;&nbsp; Min Belanja: Rp 250k</p>
                            <p class="details">Digunakan: 0 &nbsp;&nbsp; Sisa: 20</p>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width end-now-btn">Akhiri sekarang</button>
                    </div>
                </div>

                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Spesial Belanja</h2>
                            <p>10 Sep 2024 - 12 Sep 2024</p>
                            <p class="details">Potongan: Rp 15k &nbsp;&nbsp; Min Belanja: Rp 300k</p>
                            <p class="details">Digunakan: 1 &nbsp;&nbsp; Sisa: 10</p>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width end-now-btn">Akhiri sekarang</button>
                    </div>
                </div>

                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Hari Raya</h2>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p class="details">Potongan: Rp 10k &nbsp;&nbsp; Min Belanja: Rp 250k</p>
                            <p class="details">Digunakan: 0 &nbsp;&nbsp; Sisa: 20</p>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width end-now-btn">Akhiri sekarang</button>
                    </div>
                </div>

                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Spesial Belanja</h2>
                            <p>10 Sep 2024 - 12 Sep 2024</p>
                            <p class="details">Potongan: Rp 15k &nbsp;&nbsp; Min Belanja: Rp 300k</p>
                            <p class="details">Digunakan: 1 &nbsp;&nbsp; Sisa: 10</p>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width end-now-btn">Akhiri sekarang</button>
                    </div>
                </div>

                <!-- Voucher Selesai -->
                <div class="voucher-card hidden" data-status="completed">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Bulan Ramadhan</h2>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p class="details">Potongan: Rp 10k &nbsp;&nbsp; Min Belanja: Rp 250k</p>
                            <p class="details">Digunakan: 20 &nbsp;&nbsp; Sisa: 0</p>
                        </div>
                        <div class="voucher-tag voucher-tag-finished">Selesai</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary full-width">Lihat</button>
                    </div>
                </div>

                <div class="voucher-card hidden" data-status="completed">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Bulan Ramadhan</h2>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p class="details">Potongan: Rp 10k &nbsp;&nbsp; Min Belanja: Rp 250k</p>
                            <p class="details">Digunakan: 20 &nbsp;&nbsp; Sisa: 0</p>
                        </div>
                        <div class="voucher-tag voucher-tag-finished">Selesai</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary full-width">Lihat</button>
                    </div>
                </div>

                <div class="voucher-card hidden" data-status="completed">
                    <div>
                        <img src="{{ asset('asset/images/myshop/voucher_kamu.png') }}" alt="Voucher Image"
                            class="voucher-image">
                        <div class="voucher-info">
                            <h2>Voucher Bulan Ramadhan</h2>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p class="details">Potongan: Rp 10k &nbsp;&nbsp; Min Belanja: Rp 250k</p>
                            <p class="details">Digunakan: 20 &nbsp;&nbsp; Sisa: 0</p>
                        </div>
                        <div class="voucher-tag voucher-tag-finished">Selesai</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary full-width">Lihat</button>
                    </div>
                </div>
            </div>

            <footer class="voucher-footer">
                <a href="/tambah_voucher" class="voucher-link">
                    <button>Tambah Voucher</button>
                </a>
            </footer>
        </div>
    </body>

    </html>
@endsection
