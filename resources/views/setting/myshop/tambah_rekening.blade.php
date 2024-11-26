<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tambah Rekening</title>
        <!-- cdn leaflet -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
        <script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
            rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
            integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        <style>
            body {
                height: 100%;
                width: 100%;
                font-family: "Inter", sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                background-color: #f5f5f5;
                display: flex;
                justify-content: center;
                align-items: flex-start;
                min-height: 100vh;
                overflow-x: hidden;
            }
            .mobile-container-rekening {
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                min-height: 100vh;
            }

            .mobile-container-rekening * {
                box-sizing: border-box;
            }

            @media (max-width: 480px) {
                .mobile-container {
                    width: 100vw;
                    max-width: 100vw;
                }
            }

            @media (min-width: 481px) {
                .mobile-container {
                    width: 480px;
                }
            }

            /* Bagian Header */
            .rekening-header {
                position: fixed;
                top: 0;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                height: 60px;
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 25px 16px 15px 16px;
                z-index: 10;
                border-bottom: 1px solid #E0E0E0;
            }

            .rekening-header img {
                position: absolute;
                left: 16px;
                top: 25px;
                width: 6px;
                height: 13px;
                margin-right: 10px;
            }

            .rekening-header h1 {
                font-size: 15px;
                font-weight: 500;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
            }

            /* Bagian Footer */
            .voucher-footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                height: 100px;
                background-color: white;
                padding: 20px 16px 40px 16px;
                box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
                z-index: 10;
            }

            .voucher-footer button {
                width: 100%;
                height: 40px;
                padding: 15px;
                background-color: #10ABCF;
                color: white;
                border: none;
                border-radius: 5px;
                font-size: 14px;
                font-weight: 500;
                cursor: pointer;
            }

            /* Info Box */
            .info-box {
                display: flex;
                align-items: center;
                background-color: #DCF2FF;
                border: 1px solid #B2E3FF;
                color: #257AAA;
                padding: 10px;
                margin-bottom: 20px;
                border-radius: 5px;
                font-size: 12px;
                font-weight: 400;
                line-height: 16.5px;
                height: 54px;
            }

            .info-box .info-icon {
                margin-right: 10px;
                font-size: 16px;
                margin-top: 2px;
            }

            .info-box a {
                text-decoration: underline;
                color: #1976d2;
            }

            /* Select Bank */
            .select-bank-btn {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 14px;
                font-weight: 500;
                color: #000000;
                border: none;
                background-color: transparent;
                width: 100%;
                cursor: pointer;
                height: 38px;
                padding-top: 10px;
                margin-bottom: 20px;
                margin-left: -3px;
            }

            .select-bank-btn span {
                font-size: 12px;
                font-weight: 400;
                color: #979797;
                line-height: 1;
            }

            .select-button h2 {
                color: #000000;
                font-size: 14px;
                font-weight: 500;
            }

            /* Inputan */
            .input-container {
                margin-bottom: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .input-label {
                color: #000000;
                font-size: 14px;
                font-weight: 500;
            }

            /* Input field */
            .input-field {
                width: 50%;
                height: 50px;
                padding: 10px;
                font-size: 14px;
                color: #2D2D2D;
                border: 1px solid #E0E0E0;
                border-radius: 5px;
                background-color: #F5F5F5;
                text-align: right;
                /* Placeholder berada di sebelah kanan */
                direction: rtl;
                /* Teks keluar dari kanan ke kiri */
            }

            /* Mengatur nomor rekening agar input hanya angka */
            .number-only {
                direction: ltr;
                /* Mengatur input nomor agar tetap dari kiri ke kanan */
                text-align: right;
                /* Placeholder tetap di kanan */
            }

            /* Bagian Popup */
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 12;
                display: none;
                /* Default disembunyikan */
                justify-content: center;
                align-items: flex-end;
            }

            .overlay.active {
                display: flex;
                /* Muncul ketika class active ditambahkan */
            }

            .popup-bank {
                position: relative;
                width: 100%;
                max-width: 480px;
                background-color: white;
                padding: 20px 16px;
                padding-top: 0px;
                border-radius: 10px 10px 0 0;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 100;
                height: 400px;
                overflow-y: auto;
                transform: translateY(100%);
                /* Awal di luar layar */
                transition: transform 0.3s ease-in-out;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .popup-bank::-webkit-scrollbar {
                display: none;
            }

            .popup-bank.active {
                transform: translateY(0);
                /* Tampil saat class active ditambahkan */
            }

            /* Header Popup */
            .header-popup-bank {
                position: sticky;
                top: 0;
                background-color: white;
                z-index: 101;
                padding-top: 30px;
            }

            /* Judul popup */
            .popup-bank-title {
                text-align: center;
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            /* Divider di bawah header */
            .divider-bank {
                border-bottom: 1px solid #e0e0e0;
                margin-bottom: 15px;
            }

            /* Search box */
            .search-box-bank {
                display: flex;
                align-items: center;
                border: 1px solid #E0E0E0;
                border-radius: 5px;
                margin-bottom: 15px;
                padding-left: 10px;
                background-color: white;
            }

            .search-box-bank img {
                width: 16px;
                height: 16px;
                margin-right: 5px;
            }

            .search-box-bank {
                width: 100%;
                padding: 8px;
                border: none;
                outline: none;
            }

            /* Daftar Nama Bank */
            .popup-content-bank {
                margin-top: 15px;
                padding-top: 10px;
            }

            .product-bank {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                cursor: pointer;
                transition: background-color 0.2s ease;
            }

            .product-bank:hover {
                background-color: #f0f0f0;
            }


            #checkIconTemplate {
                display: none;
            }
        </style>
</head>
<body>
    <div class="mobile-container-rekening">
        <!-- Header -->
        <div class="rekening-header">
            <img src="{{ asset('gambar/Kembali.png') }}" alt="Back" onclick="history.back()">
            <h1>Tambah Rekening</h1>
        </div>

        <!-- Konten Halaman -->
        <div style="padding: 85px 16px 0 16px;">
            <!-- Info Box -->
            <div class="info-box">
                <div class="info-icon">
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                </div>
                <div>Pastikan kamu memasukkan data yang valid. Proses cek akan berlangsung 1x24 jam.</div>
            </div>

            <!-- Tombol Pilih Bank -->
            <button id="selectBankButton" class="select-bank-btn">
                Pilih Bank <span>Pilih ></span>
            </button>

            <!-- Overlay dan Popup -->
            <div id="overlay" class="overlay"> <!-- Tanpa class active -->
                <div id="bankPopup" class="popup-bank"> <!-- Tanpa class active -->
                    <!-- Header Popup -->
                    <div class="header-popup-bank">
                        <h2 class="popup-title-bank">Pilih Bank</h2>
                        <div class="divider-bank"></div>
                        <div class="search-box-bank">
                            <img src="search-icon.png" alt="Search">
                            <input type="text" class="search-box-bank" placeholder="Cari Bank">
                        </div>
                    </div>

                    <!-- Daftar Nama Bank -->
                    <div class="popup-content-bank">
                        <div class="product-bank">BRI</div>
                        <div class="product-bank">Hana Bank</div>
                        <div class="product-bank">Nobu Bank</div>
                        <div class="product-bank">SeaBank</div>
                        <div class="product-bank">BTPN</div>
                        <div class="product-bank">Bank Jatim</div>
                        <div class="product-bank">BCA Syariah</div>
                        <div class="product-bank">BJB</div>
                        <div class="product-bank">Danamon</div>
                        <div class="product-bank">Chimbniaga</div>
                        <div class="product-bank">Bank DKI</div>
                        <div class="product-bank">Allo Bank</div>
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
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Referensi elemen
            const selectButton = document.getElementById('selectBankButton');
            const popup = document.getElementById('bankPopup');
            const overlay = document.getElementById('overlay');
            const searchBox = document.querySelector('.search-box-bank input'); // Input pencarian
            const footer = document.querySelector('.voucher-footer'); // Referensi footer
            const bankItems = document.querySelectorAll('.product-bank'); // Seleksi item bank
            const checkIconTemplate = document.getElementById('checkIconTemplate').content; // Template check icon

            let selectedBank = ''; // Variabel untuk menyimpan bank yang dipilih

            // Fungsi untuk membuka popup
            selectButton.addEventListener('click', function() {
                overlay.style.display = 'flex'; // Tampilkan overlay
                if (footer) {
                    footer.style.zIndex = '0'; // Turunkan z-index footer jika ada
                }
                setTimeout(() => {
                    popup.classList.add('active'); // Aktifkan animasi slide-up setelah overlay muncul
                }, 10); // Sedikit delay untuk memastikan animasi terlihat halus
            });

            // Fungsi untuk menutup popup ketika klik di luar area popup
            overlay.addEventListener('click', function(event) {
                if (event.target === overlay) {
                    popup.classList.remove('active'); // Sembunyikan popup dengan slide-down
                    setTimeout(() => {
                        overlay.style.display = 'none'; // Sembunyikan overlay setelah animasi selesai
                        searchBox.value = ''; // Kosongkan search box saat popup ditutup
                        if (footer) {
                            footer.style.zIndex = '10'; // Kembalikan z-index footer setelah popup ditutup
                        }
                    }, 300); // Sesuaikan delay dengan durasi animasi
                }
            });

            // Fungsi untuk memilih bank dan menampilkan checkmark
            bankItems.forEach(item => {
                item.addEventListener('click', function() {
                    // Hapus checkmark dari semua item sebelumnya
                    bankItems.forEach(bank => {
                        const checkIcon = bank.querySelector('img');
                        if (checkIcon) {
                            checkIcon.remove(); // Hapus icon jika ada
                        }
                    });

                    // Simpan bank yang dipilih
                    selectedBank = this.textContent.trim();

                    // Tampilkan checkmark pada bank yang dipilih
                    let checkIcon = this.querySelector('img');
                    if (!checkIcon) {
                        checkIcon = checkIconTemplate.cloneNode(true); // Clone checkmark dari template
                        this.appendChild(checkIcon); // Append checkmark
                    }

                    // Ubah teks di tombol "Pilih Bank"
                    selectButton.querySelector('span').textContent = selectedBank + ' >';

                    // Tutup popup
                    popup.classList.remove('active');
                    setTimeout(() => {
                        overlay.style.display = 'none';
                    }, 300);
                });
            });

            // Fungsi pencarian bank berdasarkan input pengguna
            searchBox.addEventListener('input', function() {
                const searchText = searchBox.value.toLowerCase(); // Ambil teks input dan ubah ke lowercase
                bankItems.forEach(item => {
                    const bankName = item.textContent.toLowerCase(); // Nama bank dalam lowercase
                    if (bankName.includes(searchText)) {
                        item.style.display = ''; // Tampilkan jika cocok dengan pencarian
                    } else {
                        item.style.display = 'none'; // Sembunyikan jika tidak cocok
                    }
                });
            });
        });
    </script>
</body>
</html>
