@extends('setting.layout.setting')

@section('title', 'Voucher')

@section('konten')

    <body>
        <div class="mobile-container-rekening">
            <header class="voucher-header">
                <a href="{{ route('myshop') }}">
                    <img src="{{ asset('asset/images/icon/backarrow.png') }}" alt="Back">
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
                        <img src="your-image-path-here" alt="Voucher Image" class="voucher-image">
                        <div class="voucher-atribut">
                            <h2>Voucher Spesial Belanja</h2>
                            <p>10 Sep 2024 - 12 Sep 2024</p>
                            <div class="voucher-atribut-details">
                                <p>Potongan: Rp 10k</p>
                                <p>Min Belanja: Rp 250k</p>
                            </div>
                            <div class="voucher-atribut-details">
                                <p>Digunakan: 0</p>
                                <p>Tersisa: 20</p>
                            </div>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width">Akhiri sekarang</button>
                    </div>
                </div>

                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="your-image-path-here" alt="Voucher Image" class="voucher-image">
                        <div class="voucher-atribut">
                            <h2>Voucher Seru Serunya Belanja</h2>
                            <p>10 Sep 2024 - 12 Sep 2024</p>
                            <div class="voucher-atribut-details">
                                <p>Potongan: Rp 10k</p>
                                <p>Min Belanja: Rp 250k</p>
                            </div>
                            <div class="voucher-atribut-details">
                                <p>Digunakan: 0</p>
                                <p>Tersisa: 20</p>
                            </div>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width">Akhiri sekarang</button>
                    </div>
                </div>

                <!-- Voucher Aktif 2 -->
                <div class="voucher-card" data-status="active">
                    <div>
                        <img src="your-image-path-here" alt="Voucher Image" class="voucher-image">
                        <div class="voucher-atribut">
                            <h2>Diskon Ceria Musim Panas</h2>
                            <p>15 Sep 2024 - 20 Sep 2024</p>
                            <div class="voucher-atribut-details">
                                <p>Potongan: Rp 20k</p>
                                <p>Min Belanja: Rp 300k</p>
                            </div>
                            <div class="voucher-atribut-details">
                                <p>Digunakan: 5</p>
                                <p>Tersisa: 15</p>
                            </div>
                        </div>
                        <div class="voucher-tag voucher-tag-active">Berjalan</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary half-width">Ubah</button>
                        <button class="btn-primary half-width">Akhiri sekarang</button>
                    </div>
                </div>

                <!-- Voucher Selesai -->
                <div class="voucher-card hidden" data-status="completed">
                    <div>
                        <img src="your-image-path-here" alt="Voucher Image" class="voucher-image">
                        <div class="voucher-atribut">
                            <h2>Voucher Bulan Ramadhan</h2>
                            <p style="margin-bottom: 5px;">5 Sep 2024 - 8 Sep 2024</p>
                            <div class="voucher-atribut-details">
                                <p>Potongan: Rp 10k</p>
                                <p>Min Belanja: Rp 250k</p>
                            </div>
                            <div class="voucher-atribut-details">
                                <p>Digunakan: 0</p>
                                <p>Tersisa: 20</p>
                            </div>
                        </div>
                        <div class="voucher-tag voucher-tag-finished">Selesai</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary full-width">Lihat</button>
                    </div>
                </div>
                <div class="voucher-card hidden" data-status="completed">
                    <div>
                        <img src="your-image-path-here" alt="Voucher Image" class="voucher-image">
                        <div class="voucher-atribut">
                            <h2>Voucher Ramadhan Penuh Berkah</h2>
                            <p style="margin-bottom: 5px;">5 Sep 2024 - 8 Sep 2024</p>
                            <div class="voucher-atribut-details">
                                <p>Potongan: Rp 10k</p>
                                <p>Min Belanja: Rp 250k</p>
                            </div>
                            <div class="voucher-atribut-details">
                                <p>Digunakan: 0</p>
                                <p>Tersisa: 20</p>
                            </div>
                        </div>
                        <div class="voucher-tag voucher-tag-finished">Selesai</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary full-width">Lihat</button>
                    </div>
                </div>

                <!-- Voucher Selesai 2 -->
                <div class="voucher-card hidden" data-status="completed">
                    <div>
                        <img src="your-image-path-here" alt="Voucher Image" class="voucher-image">
                        <div class="voucher-atribut">
                            <h2>Voucher Selamat Tahun Baru</h2>
                            <p style="margin-bottom: 5px;">1 Jan 2024 - 5 Jan 2024</p>
                            <div class="voucher-atribut-details">
                                <p>Potongan: Rp 50k</p>
                                <p>Min Belanja: Rp 500k</p>
                            </div>
                            <div class="voucher-atribut-details">
                                <p>Digunakan: 10</p>
                                <p>Tersisa: 5</p>
                            </div>
                        </div>
                        <div class="voucher-tag voucher-tag-finished">Selesai</div>
                    </div>
                    <div class="voucher-actions">
                        <button class="btn-secondary full-width">Lihat</button>
                    </div>
                </div>

                <!-- Voucher Selesai 3 -->
                <div class="voucher-card hidden" data-status="completed">
                    <div>
                        <img src="your-image-path-here" alt="Voucher Image" class="voucher-image">
                        <div class="voucher-atribut">
                            <h2>Voucher Kasih Sayang Cinta</h2>
                            <p style="margin-bottom: 5px;">14 Feb 2024 - 16 Feb 2024</p>
                            <div class="voucher-atribut-details">
                                <p>Potongan: Rp 30k</p>
                                <p>Min Belanja: Rp 150k</p>
                            </div>
                            <div class="voucher-atribut-details">
                                <p>Digunakan: 2</p>
                                <p>Tersisa: 18</p>
                            </div>
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

           <!-- Popup Konfirmasi -->
            <div class="voucher-confirmation-popup hidden" id="voucher-confirm-popup">
                <div class="popup-content">
                    <h2>Akiri Voucher?</h2>
                    <p>Produk yang aktif dalam voucher ini akan otomatis terhapus ketika voucher diakhiri.</p>
                    <div class="popup-buttons">
                        <button id="cancel-voucher-btn" class="btn-secondary" style="background-color: #00bcd4; ">Kembali</button>
                        <button id="confirm-voucher-btn" class="btn-danger">Ya, akhiri</button>
                    </div>
                </div>
            </div>

            <!-- Popup Sukses -->
            <div class="voucher-success-popup hidden" id="voucher-success-popup">
                <div class="popup-content success">
                    <img src="{{ asset('asset/images/success_icon.png') }}" alt="Success" class="success-icon">
                    <h2>Voucher Berhasil Diakhiri!</h2>
                    <button id="close-success-popup" class="btn-primary">Tutup</button>
                </div>
            </div>
        </div>
        <script>
            // Fungsi untuk switch tab antara "Aktif" dan "Selesai"
            const activeTab = document.getElementById('active-tab');
            const completedTab = document.getElementById('completed-tab');
            const voucherCards = document.querySelectorAll('.voucher-card');

            activeTab.addEventListener('click', () => {
                activeTab.classList.add('active');
                completedTab.classList.remove('active');
                voucherCards.forEach(card => {
                    if (card.dataset.status === 'active') {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });

            completedTab.addEventListener('click', () => {
                completedTab.classList.add('active');
                activeTab.classList.remove('active');
                voucherCards.forEach(card => {
                    if (card.dataset.status === 'completed') {
                        card.classList.remove('hidden');
                    } else {
                        card.classList.add('hidden');
                    }
                });
            });

            document.addEventListener('DOMContentLoaded', () => {
                const endNowButtons = document.querySelectorAll('.voucher-actions .half-width.btn-primary'); // Tombol "Akhiri sekarang"
                const confirmPopup = document.getElementById('voucher-confirm-popup');
                const successPopup = document.getElementById('voucher-success-popup');
                const confirmVoucherBtn = document.getElementById('confirm-voucher-btn');
                const cancelVoucherBtn = document.getElementById('cancel-voucher-btn');
                const closeSuccessPopup = document.getElementById('close-success-popup');
                const activeVoucherContainer = document.getElementById('voucher-active'); // Kontainer voucher aktif
                const completedVoucherContainer = document.getElementById('voucher-completed'); // Kontainer voucher selesai
                let activeVoucherCard;

                // Menampilkan popup konfirmasi saat tombol "Akhiri sekarang" diklik
                endNowButtons.forEach(button => {
                    button.addEventListener('click', (e) => {
                        activeVoucherCard = e.target.closest('.voucher-card'); // Ambil voucher yang dipilih
                        confirmPopup.classList.remove('hidden'); // Tampilkan popup konfirmasi
                        document.body.classList.add('no-scroll'); // Disable scroll pada background
                    });
                });

                // Membatalkan pengakhiran voucher
                cancelVoucherBtn.addEventListener('click', () => {
                    confirmPopup.classList.add('hidden'); // Sembunyikan popup konfirmasi
                    document.body.classList.remove('no-scroll'); // Aktifkan scroll
                });

                // Konfirmasi pengakhiran voucher
                confirmVoucherBtn.addEventListener('click', () => {
                    confirmPopup.classList.add('hidden'); // Sembunyikan popup konfirmasi
                    document.body.classList.remove('no-scroll'); // Aktifkan scroll

                    // Ubah atribut dan class voucher menjadi selesai
                    activeVoucherCard.dataset.status = 'completed'; // Mengubah status voucher
                    activeVoucherCard.querySelector('.voucher-tag').classList.add('voucher-tag-finished'); // Tambah class selesai

                    // Ganti tombol "Akhiri sekarang" menjadi "Lihat" dan sesuaikan lebar
                    const buttonContainer = activeVoucherCard.querySelector('.voucher-actions');
                    buttonContainer.innerHTML = `<button class="btn-secondary full-width">Lihat</button>`;

                    // Sembunyikan voucher dari tab Aktif tanpa perlu pindah tab
                    activeVoucherCard.classList.add('hidden'); // Sembunyikan dari tampilan Aktif

                    // Pindahkan voucher dari tab aktif ke tab selesai
                    activeVoucherContainer.removeChild(activeVoucherCard); // Hapus dari kontainer aktif
                    completedVoucherContainer.appendChild(activeVoucherCard); // Tambahkan ke kontainer selesai

                    // Tampilkan popup sukses
                    successPopup.classList.remove('hidden');
                });

                // Menutup popup sukses
                closeSuccessPopup.addEventListener('click', () => {
                    successPopup.classList.add('hidden'); // Sembunyikan popup sukses
                    document.body.classList.remove('no-scroll'); // Aktifkan scroll
                });
            });

        </script>
    </body>

    </html>
@endsection
