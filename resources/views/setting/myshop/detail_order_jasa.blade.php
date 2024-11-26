<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>JASA</title>
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
        /* ========================================================================================== */
        /*                          DETAIL ORDER JASA
        /* ========================================================================================== */
        /* Global Style */

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

        .detail-order-mobile-container {
            width: 100%;
            min-width: 370px;
            max-width: 480px;
            background-color: #f5f5f5;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 100vh;
        }

        .detail-order-mobile-container * {
            box-sizing: border-box;
        }

        @media (max-width: 480px) {
            .detail-order-mobile-container {
                width: 100vw;
                max-width: 100vw;
            }
        }

        @media (min-width: 481px) {
            .detail-order-mobile-container {
                width: 480px;
            }
        }

        /* detail-order-jasa-header */
        .detail-order-jasa-header {
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

        .detail-order-jasa-header img {
            position: absolute;
            left: 16px;
            top: 25px;
            width: 6px;
            height: 13px;
        }

        .detail-order-jasa-header h1 {
            font-size: 15px;
            font-weight: 500;
            line-height: 19.5px;
            margin: 0;
            color: #2D2D2D;
        }

        /* Informasi Pesanan */
        .detail-order-jasa-info-order {
            display: flex;
            flex-direction: row;
            margin-top: 60px;
            height: 124px;
            padding: 16px;
            background-color: #10ABCF;
            color: white;
            margin-bottom: 10px;
            line-height: 16.5px;
        }

        .detail-order-jasa-info-order-deskripsi {
            display: flex;
            flex-direction: column;
            height: 94px;
            width: 100%;
        }

        .detail-order-jasa-info-order img {
            width: 14px;
            height: 16px;
            margin-right: 10px;
        }

        .detail-order-jasa-info-order-deskripsi h2 {
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .detail-order-jasa-info-order-deskripsi p {
            font-size: 11px;
            font-weight: 400;
            line-height: 1.4;
            max-width: 90%;
        }

        .detail-order-jasa-info-order-deskripsi .time {
            font-size: 10px;
            font-weight: 400;
            opacity: 75%;
            margin-top: -10px;
        }

        /* Alamat Pembeli */
        .detail-order-jasa-address {
            display: flex;
            flex-direction: row;
            padding: 16px;
            height: 119px;
            background-color: white;
            border-bottom: 1px solid #EDEDED;
        }

        .detail-order-jasa-address-detail {
            display: flex;
            flex-direction: column;
        }

        .detail-order-jasa-address img {
            width: 14px;
            height: 16px;
            margin-right: 10px;
        }

        .detail-order-jasa-address-detail h3 {
            font-size: 12px;
            font-weight: 500;
            color: #424242;
            margin-bottom: 10px;
        }

        .detail-order-jasa-address-detail p {
            font-size: 11px;
            font-weight: 400;
            color: #424242;
            margin-bottom: 5px;
        }

        .detail-order-jasa-address-detail p span {
            color: #979797;
        }

        /* Detail order Delivery */
        .detail-order-jasa-2-delivery {
            display: flex;
            flex-direction: row;
            padding: 16px;
            margin-bottom: 10px;
            height: auto;
            background-color: white;
            border-bottom: 1px solid #EDEDED;
        }

        .detail-order-jasa-2-delivery-detail {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .detail-order-jasa-2-delivery img {
            width: 17px;
            height: 14px;
            margin-right: 7px;
        }

        /* Styling for the title */
        .detail-order-jasa-2-delivery-detail h3 {
            font-size: 12px;
            font-weight: 500;
            color: #424242;
        }

        /* Image Upload Box */
        .detail-order-jasa-2-delivery-detail .image-upload-box-jasa {
            width: 78px;
            height: 78px;
            background-color: #F5F5F5;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 4px;
            border: 1px dashed #E0E0E0;
            cursor: pointer;
            position: relative;
            /* Menjaga input di posisi yang benar */
            margin-bottom: 10px;
        }

        .detail-order-jasa-2-delivery-detail .image-upload-box-jasa input {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            opacity: 0;
            cursor: pointer;
        }

        .detail-order-jasa-2-delivery-detail .detail-order-jasa-note-info {
            width: 100%;
            /* Fill 100% */
            height: 25px;
            /* Hug content */
            padding: 5px 10px;
            background: #10ABCF1A;
            /* Warna background dari Figma */
            border-radius: 20px;
            /* Sudut membulat sesuai Figma */
            opacity: 1;
            /* Mengatur opacity agar terlihat */
            font-size: 10px;
            /* Sesuai dengan ukuran di Figma */
            font-weight: 400;
            text-align: left;
            color: #10ABCF;
            /* Warna teks, bisa disesuaikan jika berbeda */
        }

        /* Informasi Pembayaran */
        .detail-order-jasa-payment {
            display: flex;
            flex-direction: row;
            height: 142px;
            padding: 15px 16px;
            background-color: white;
            border-bottom: 1px solid #EDEDED;
        }

        .detail-order-jasa-payment img {
            width: 14px;
            height: 14px;
            margin-right: 10px;
        }

        .detail-order-jasa-payment-info {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .detail-order-jasa-payment-info h3 {
            font-size: 12px;
            font-weight: 500;
            color: #424242;
            margin-bottom: 10px;
        }

        /* Informasi Pembayaran */
        .detail-order-jasa-payment-info div {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            margin-bottom: 5px;
            color: #b0b0b0;
            /* Warna abu-abu tipis */
        }

        .detail-order-jasa-payment-info div span:first-child {
            flex: 1;
            /* Membuat item pertama (judul) memenuhi sisa ruang */
            text-align: left;
            /* Memastikan teks tetap di kiri */
        }

        .detail-order-jasa-payment-info div span:last-child {
            text-align: right;
            /* Memastikan nominal harga tetap di kanan */
        }

        .detail-order-jasa-payment-info .total {
            font-weight: 400;
            color: #5C5C5C;
            /* Warna hitam untuk teks "Total Harus Dibayar" */
        }

        .detail-order-jasa-payment-info .total span:last-child {
            color: #10ABCF;
            /* Warna biru untuk nominal "Total Harus Dibayar" */
            margin-bottom: 0px;
        }

        /* Income */
        .detail-order-jasa-income {
            display: flex;
            flex-direction: row;
            padding: 16px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .detail-order-jasa-method {
            display: flex;
            flex-direction: row;
            padding: 16px;
            background-color: white;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #EDEDED;
        }

        .detail-order-jasa-method div {
            font-size: 12px;
            font-weight: 500;
            color: #5C5C5C;
        }

        .detail-order-jasa-income div {
            font-size: 12px;
            font-weight: 500;
            color: #5C5C5C;
        }

        .detail-order-jasa-income div.price {
            color: #10ABCF;
            font-size: 12px;
            font-weight: 500;
        }

        .detail-order-jasa-method div.price {
            color: #10ABCF;
            font-size: 12px;
            font-weight: 500;
        }

        /* Card Section */
        .detail-order-jasa-card {
            background-color: #fff;
            padding: 16px;
            margin-bottom: 10px;
            box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            width: 100%;
            margin-top: 10px;
            margin-bottom: 150px;
        }

        .detail-order-jasa-profile-section {
            display: flex;
            align-items: center;
            margin-bottom: 12px;
        }

        .detail-order-jasa-profile-info {
            display: flex;
            align-items: center;
        }

        .detail-order-jasa-profile-info img {
            width: 20px;
            height: 20px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .detail-order-jasa-profile-info .name {
            font-size: 12px;
            font-weight: 400;
            color: #424242;
        }

        .detail-order-jasa-product-section {
            display: flex;
            align-items: center;
            width: 100%;
            justify-content: space-between;
            flex: 1;
            margin-bottom: 12px;
        }

        .detail-order-jasa-product-image {
            width: 30%;
        }

        .detail-order-jasa-product-image img {
            width: 90px;
            height: 80px;
            border-radius: 5px;
        }

        .detail-order-jasa-product-info {
            width: 70%;
            max-width: 243px;
            text-align: right;
        }

        .detail-order-jasa-product-info .detail-order-jasa-product-name {
            font-size: 13px;
            font-weight: 400;
            color: #000;
            margin-bottom: 5px;
            word-wrap: break-word;
            white-space: normal;
        }

        .detail-order-jasa-product-info .details {
            display: flex;
            justify-content: right;
            font-size: 12px;
            margin-top: 15px;
            color: #979797;
        }

        .detail-order-jasa-product-info .quantity {
            font-weight: 500;
            margin-right: 5px;
        }

        .detail-order-jasa-product-info .price {
            color: #37A6BB;
            font-size: 13px;
            font-weight: 500;
        }

        .detail-order-jasa-number {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            font-weight: 500;
            color: #424242;
            margin-bottom: 12px;
        }

        .detail-order-jasa-date-checkout {
            display: flex;
            justify-content: space-between;
            font-size: 11px;
            font-weight: 500;
            color: #979797;
            margin-bottom: 12px;
        }

        .detail-order-jasa-number span {
            display: block;
            margin-bottom: 2px;
        }

        .detail-order-jasa-actions {
            display: flex;
            justify-content: center;
        }

        .detail-order-jasa-note-button {
            background-color: #fff;
            border: 1px solid #E0E0E0;
            color: #424242;
            padding: 10px;
            font-size: 12px;
            font-weight: 500;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
            text-align: center;
        }

        /* Note input section styling */
        .note-input {
            background-color: white;
            padding: 12px;
            border-radius: 8px;
            width: 100%;
            height: 40px;
            border: 1px solid #E0E0E0;
            font-size: 12px;
            resize: none;
            outline: none;
            margin-bottom: 10px;
            overflow: hidden;
        }

        .note-buttons-jasa {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            gap: 10px;
            width: 100%;
        }

        .cancel-button,
        .save-button {
            padding: 10px;
            font-size: 14px;
            width: 100%;
            border: 1px solid #E0E0E0;
            border-radius: 8px;
            background-color: #fff;
            cursor: pointer;
        }

        .cancel-button {
            color: #424242;
        }

        .save-button {
            background-color: transparent;
            color: #10ABCF;
            border: 2px solid #10ABCF;
            /* Outline */
        }

        /* Saved note section */
        .saved-note-section {
            background-color: transparent;
            padding-top: 10px;
        }

        .saved-note-section p {
            font-size: 11px;
            font-weight: 400;
        }

        .note-detail-order-jasa-header {
            display: flex;
            justify-content: space-between;
            font-size: 12px;
            font-weight: 500;
            color: #000;
            margin-bottom: 8px;
        }

        .edit-link {
            font-size: 12px;
            color: #37A6BB;
            cursor: pointer;
            text-decoration: none;
        }

        .edit-link:hover {
            text-decoration: underline;
        }

        #saved-note-text {
            font-size: 12px;
            color: #424242;
            word-wrap: break-word;
            white-space: normal;
        }

        /* detail-order-jasa-footer */
        .detail-order-jasa-footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            min-width: 370px;
            max-width: 480px;
            height: 150px;
            padding: 20px 16px;
            background-color: white;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
            z-index: 10;
            display: flex;
            flex-direction: column;
            gap: 8px;
            /* Space between the two buttons */
        }

        /* Button for "Hubungi Pembeli" */
        .detail-order-jasa-footer .contact-buyer {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 40px;
            padding: 10px;
            background-color: transparent;
            color: #10ABCF;
            border: 2px solid #10ABCF;
            /* Outline */
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
        }

        /* Button for "Pekerjaan selesai" */
        .detail-order-jasa-footer .job-completed {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 100%;
            height: 40px;
            padding: 10px;
            background: radial-gradient(268.65% 1212.56% at 50% 51.43%, #20C2E7 0%, #11839E 100%);
            color: white;
            border: none;
            border-radius: 10px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
        }

        /* Icon inside "Hubungi Pembeli" button */
        .detail-order-jasa-footer .contact-buyer img {
            width: 16px;
            height: 16px;
            margin-right: 8px;
        }

        .no-underline-link {
            text-decoration: none;
        }

        /* Tambahan opsional: Anda bisa juga menyesuaikan warna atau gaya */
        .no-underline-link:hover {
            text-decoration: none;
        }
    </style>
</head>

<body>
    <div class="detail-order-mobile-container">

        <!-- detail-order-jasa-header -->
        <div class="detail-order-jasa-header">
            <img src="{{ asset('gambar/Kembali.png') }}" alt="Back" onclick="history.back()">
            <h1>Detail Pesanan</h1>
        </div>

        <!-- Informasi Pesanan -->
        <div class="detail-order-jasa-info-order">
            <img src="{{ asset('gambar/info-order.png') }}" alt="Order Icon">
            <div class="detail-order-jasa-info-order-deskripsi">
                <h2>Diproses</h2>
                <p>Periksa detail pesanan di bawah ini dan segera proses pesanan. Jangan lupa konfirmasi setiap detail
                    pesanan kepada pembeli.</p>
                <p class="time">Waktu pemesanan: 2 Sep 2024 10:36</p>
            </div>
        </div>

        <!-- Alamat Pembeli -->
        <div class="detail-order-jasa-address">
            <img src="{{ asset('gambar/waypoint.png') }}" alt="Address Icon">
            <div class="detail-order-jasa-address-detail">
                <h3>Alamat Pembeli</h3>
                <p>Dzakyy Fadhilurahman <span>087219472812</span></p>
                <p>Jalan majsari rt 10 rw 03 desa kamarun, Kab SUBANG, PAGADEN, JAWA BARAT, Pos 41252.</p>
            </div>
        </div>

        <!-- Status Pengiriman -->
        <div class="detail-order-jasa-2-delivery">
            <img src="{{ asset('gambar/delivery.png') }}" alt="Delivery Icon">
            <div class="detail-order-jasa-2-delivery-detail">
                <h3>Status Pengiriman</h3>
                <!-- Box for Image Upload -->
                <div class="image-upload-container">
                    <div class="image-upload-box-jasa" id="unique-image-upload-box">
                        <input type="file" id="unique-image-upload-jasa" accept="image/*">
                    </div>
                </div>

                <!-- Note Input Field -->
                <textarea id="note-input-jasa" class="note-input" placeholder="Catatan tidak dapat dilihat oleh pembeli"></textarea>

                <div class="note-buttons-jasa" style="display: none;">
                    <button class="cancel-button" onclick="cancelNoteJasa()">Batalkan</button>
                    <button class="save-button" onclick="saveNoteJasa()">Simpan</button>
                </div>

                <!-- Catatan yang sudah tersimpan, awalnya disembunyikan -->
                <div id="saved-note-section-jasa" class="saved-note-section" style="display: none;">
                    <div class="note-detail-order-jasa-header">
                        <span>Catatan</span>
                        <a href="#" class="edit-link" onclick="editNoteJasa()">Ubah</a>
                    </div>
                    <p id="saved-note-text-jasa"></p>
                </div>
                <div class="detail-order-jasa-note-info">
                    Unggah sesuatu untuk menyelesaikan pekerjaan kamu.
                </div>
            </div>
        </div>

        <!-- Informasi Pembayaran -->
        <div class="detail-order-jasa-payment">
            <img src="{{ asset('gambar/payment.png') }}" alt="Income Icon">
            <div class="detail-order-jasa-payment-info">
                <h3>Informasi Pembayaran</h3>
                <div><span>Total Pesanan</span><span>Rp100.000</span></div>
                <div><span>Ongkos Kirim</span><span>Rp0</span></div>
                <div><span>Biaya Lainnya</span><span>Rp0</span></div>
                <div class="total"><span>Total Harus Dibayar</span><span>Rp100.000</span></div>
            </div>
        </div>

        <div class="detail-order-jasa-income">
            <div>Penghasilan Anda</div>
            <div class="price">Rp100.000</div>
        </div>

        <div class="detail-order-jasa-method">
            <div>Metode Pembayaran</div>
            <div class="price">COD</div>
        </div>

        <div class="detail-order-jasa-card" data-status="Belum Dibayar">
            <div class="detail-order-jasa-profile-section">
                <div class="detail-order-jasa-profile-info">
                    <img src="{{ asset('gambar/ulasan/pp1.png') }}" alt="Profile">
                    <span class="name">DzakyFadhlurrahman</span>
                </div>
            </div>

            <div class="detail-order-jasa-product-section">
                <div class="detail-order-jasa-product-image">
                    <img src="{{ asset('gambar/Post/Post-1.png') }}" alt="Product">
                </div>
                <div class="detail-order-jasa-product-info">
                    <span class="detail-order-jasa-product-name">Mouse gaming logitech profesional bergaransi</span>
                    <div class="details">
                        <span class="quantity">1x</span>
                        <span class="price">Rp. 500.000</span>
                    </div>
                </div>
            </div>

            <div class="detail-order-jasa-number">
                <span>No. Pesanan </span>
                <span>#28C965CSJIENC</span>
            </div>

            <div class="detail-order-jasa-date-checkout">
                <span>Waktu pemesanan</span>
                <span>2 Sep 2024 10.36</span>
            </div>
        </div>

        <!-- detail-order-jasa-footer -->
        <div class="detail-order-jasa-footer">
            <a href="/chat" class="no-underline-link">
                <button class="contact-buyer">
                    <img src="{{ asset('asset/images/icon/bubblechat-blue.png') }}" alt="Bubble Chat Icon">
                    Hubungi Pembeli
                </button>
            </a>
            <button class="job-completed">Pekerjaan selesai</button>
        </div>
    </div>
    <script>
        // ==========================================================================================================================
        //                                       DETAIL PESANAN JASA
        // ==========================================================================================================================
        // Menggunakan Immediately Invoked Function Expression (IIFE) untuk mengisolasi kode
        (function() {
            // Pastikan semua elemen sudah ter-load
            document.addEventListener('DOMContentLoaded', function() {
                // Mengambil elemen input dan kotak upload gambar
                var imageInputUnique = document.getElementById('unique-image-upload-jasa');
                var imageUploadBoxUnique = document.getElementById('unique-image-upload-box');

                // Cek apakah elemen ada
                if (!imageInputUnique || !imageUploadBoxUnique) {
                    console.error('Element input atau image upload box tidak ditemukan.');
                    return;
                }

                // Menambahkan event listener untuk perubahan file pada input file
                imageInputUnique.addEventListener('change', function(event) {
                    var file = event.target.files[0]; // Ambil file yang dipilih
                    if (file) {
                        console.log('File selected:', file);

                        var readerUnique = new FileReader();

                        readerUnique.onload = function(e) {
                            // Kosongkan konten sebelumnya
                            imageUploadBoxUnique.innerHTML = '';

                            // Buat elemen gambar baru dan tambahkan
                            var imgUnique = document.createElement('img');
                            imgUnique.src = e.target.result;
                            imgUnique.style.width = '100%';
                            imgUnique.style.height = '100%';
                            imgUnique.style.objectFit = 'cover';
                            imageUploadBoxUnique.appendChild(imgUnique);
                        };

                        readerUnique.onerror = function() {
                            console.error('File could not be read.');
                        };

                        // Membaca file sebagai DataURL
                        readerUnique.readAsDataURL(file);
                    }
                });
            });
        })();

        function saveNoteJasa() {
            var noteInput = document.getElementById('note-input-jasa');
            var noteText = noteInput.value.trim();
            var savedNoteSection = document.getElementById('saved-note-section-jasa');
            var noteButtons = document.querySelector('.note-buttons-jasa');

            if (noteText !== '') {
                document.getElementById('saved-note-text-jasa').innerText = noteText;
                savedNoteSection.style.display = 'block';
                noteInput.style.display = 'none';
                noteButtons.style.display = 'none';
            }
        }

        function editNoteJasa() {
            var noteInput = document.getElementById('note-input-jasa');
            var noteText = document.getElementById('saved-note-text-jasa').innerText;
            var savedNoteSection = document.getElementById('saved-note-section-jasa');
            var noteButtons = document.querySelector('.note-buttons-jasa');

            noteInput.value = noteText;
            noteInput.style.display = 'block';
            noteButtons.style.display = 'flex';
            savedNoteSection.style.display = 'none';
        }

        function cancelNoteJasa() {
            var noteInput = document.getElementById('note-input-jasa');
            var noteButtons = document.querySelector('.note-buttons-jasa');
            noteInput.value = '';
            noteButtons.style.display = 'none';
            noteInput.style.display = 'block';
        }

        document.getElementById('note-input-jasa').addEventListener('focus', function() {
            document.querySelector('.note-buttons-jasa').style.display = 'flex';
        });

        document.getElementById('note-input-jasa').addEventListener('input', function() {
            var noteText = this.value.trim();
            if (noteText === '') {
                document.querySelector('.note-buttons-jasa').style.display = 'none';
            }
        });
    </script>
</body>

</html>
