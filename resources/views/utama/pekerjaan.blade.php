<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beranda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
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

        .mobile-container {
            width: 100%;
            max-width: 480px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .top-bar {
            display: flex;
            justify-content: space-between;
            padding: 10px 15px;
            align-items: center;
            margin-bottom: 10px;
            position: fixed;
            top: 0;
            width: 100%;
            max-width: 480px;
            z-index: 1000;
            background-color: #fff;
            box-sizing: border-box;
        }

        .search-wrapper {
            position: relative;
            width: 100%;
        }

        .search-wrapper input {
            width: 100%;
            padding: 8px 160px 8px 40px;
            border: 1px solid #e0e0e0;
            box-sizing: border-box;
        }

        .search-wrapper .search-icon {
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            width: 16px;
            height: 16px;
        }

        .back-arrow {
            display: flex;
            align-items: center;
            margin-right: 10px;
        }

        .back-arrow i {
            font-size: 24px;
            color: #10ABCF;
        }

        .icons {
            display: flex;
            align-items: center;
        }

        .icons div {
            margin-left: 10px;
            position: relative;
        }

        .icons div img {
            width: 20px;
            height: 20px;
            margin-left: 5px;
        }

        .icons div .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 10px;
        }

        .carousel-item img {
            margin-bottom: 9px;
        }

        .header-container {
            margin-top: 50px;
        }

        .balance {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 10px 15px;
            padding: 10px;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            position: relative;
            top: -10px;
            box-sizing: border-box;
            margin-top: -40px;
        }

        .balance .amount {
            display: flex;
            flex-direction: row;
            align-items: center;
            text-align: left;
            flex: 2;
            padding: 0 10px;
        }

        .balance .amount img {
            width: 32px;
            height: 32px;
            margin-right: 10px;
        }

        .balance .amount-value {
            font-size: 17px;
            font-weight: bold;
            color: #434343;
        }

        .balance .amount span:last-child {
            font-size: 14px;
            display: block;
            color: #5C5C5C;
        }

        .balance .action {
            display: flex;
            flex-direction: column;
            align-items: center;
            flex: 1;
            padding: 5px;
            text-align: center;
        }

        .balance .action img {
            width: 32px;
            height: 32px;
            margin-bottom: 5px;
        }

        .balance .action span {
            font-size: 14px;
            display: block;
            color: #000;
        }

        .content {
            padding-top: 70px;
            padding-bottom: 160px;
            width: 100%;
            overflow-y: auto;
        }

        .category {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 10px 15px;
        }

        .category div {
            flex: 1 1 calc(33.333% - 10px);
            box-sizing: border-box;
            text-align: center;
            padding: 5px;
            margin: 5px;
        }

        .category img {
            width: 50px;
            height: 50px;
            margin-bottom: 5px;
        }

        .misi-seru-container {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }

        .promo-button:hover {
            background-color: #0e9bb5;
        }

        .misi-seru-items-container {
            display: flex;
            overflow-x: auto;
            gap: 15px;
            padding: 10px;
            scrollbar-width: none;
            /* Firefox */
        }

        .misi-seru-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 10px;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }

        .misi-seru-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .misi-seru-title {
            display: flex;
            align-items: center;
        }

        .misi-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }

        .misi-seru-arrow img {
            width: 16px;
            height: 16px;
        }

        .misi-seru-items-container {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-width: none;
        }

        .misi-seru-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 10px;
            margin: 20px 0;
            font-family: Arial, sans-serif;
        }

        .misi-seru-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .misi-seru-title {
            display: flex;
            align-items: center;
        }

        .misi-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }

        .misi-seru-arrow img {
            width: 16px;
            height: 16px;
        }

        .misi-seru-items-container {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-width: none;
        }

        .misi-seru-container {
            background-color: #ffffff;
            border-radius: 10px;
            padding: 10px;
            margin: 20px 0;
            font-family: Arial, sans-serif;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            /* Tambahkan bayangan untuk tampilan lebih mirip */
            position: relative;
        }

        .misi-seru-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .misi-seru-title {
            display: flex;
            align-items: center;
        }

        .misi-icon {
            width: 24px;
            height: 24px;
            margin-right: 8px;
        }

        .misi-seru-title h5 {
            font-size: 14px;
            color: #10ABCF;
            margin-right: 8px;
            font-weight: bold;
        }

        .misi-seru-title h4 {
            font-size: 18px;
            color: #333;
            font-weight: bold;
        }

        .back-arrow i {
            font-size: 20px;
            color: #10ABCF;
        }

        .misi-seru-items-container {
            display: flex;
            gap: 15px;
            overflow-x: auto;
            padding-bottom: 10px;
            scrollbar-width: none;
        }

        .misi-seru-items-container::-webkit-scrollbar {
            display: none;
        }

        .misi-seru-item {
            background-color: #F5F5F5;
            border-radius: 10px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            flex: 0 0 250px;
            padding: 15px;
            box-sizing: border-box;
            min-height: 130px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            transition: transform 0.2s ease-in-out;
        }

        .misi-seru-item:hover {
            transform: scale(1.02);
        }

        .item-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .item-image img {
            width: 50px;
            height: 50px;
            border-radius: 8px;
            margin-right: 10px;
        }

        .item-info {
            flex-grow: 1;
            max-width: 140px;
        }

        .item-title {
            font-size: 14px;
            color: #333;
            margin: 0;
            line-height: 1.2;
        }

        .item-price {
            font-size: 12px;
            color: #10ABCF;
            margin-top: 4px;
        }

        .highlight-price {
            color: #00C853;
            font-weight: bold;
        }

        .item-actions .bookmark-icon {
            font-size: 18px;
            color: #10ABCF;
            cursor: pointer;
        }

        .item-details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 8px;
            font-size: 12px;
            color: #555;
        }

        .item-footer {
            font-size: 12px;
            color: #888;
            display: flex;
            justify-content: space-between;
            margin-top: 8px;
        }

        /* Separator untuk latar belakang */
        .section-separator {
            background-color: #F0F0F0;
            height: 30px;
            width: 100%;
            margin-top: 20px;
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }

        .promo-button {
            background-color: #ffffff;
            color: #10ABCF;
            border: none;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            margin-top: 10px;
            cursor: pointer;
        }

        .terms {
            font-size: 10px;
            margin-top: 5px;
            position: absolute;
            bottom: 10px;
            left: 10px;
            /* Position the text in the bottom-left corner */
        }

        .deal-details {
            text-align: center;
            margin-top: 10px;
        }

        .jasa-produk-sekitar {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 20px 15px;
            /* Ensure adequate margins */
            padding: 10px;
            /* Add padding if necessary */
        }

        .jasa-produk-sekitar .service-item {
            width: calc(50% - 10px);
            /* Adjust width to ensure it fits well */
            text-align: center;
            margin-bottom: 20px;
            /* Add space below each item */
        }

        .jasa-produk-sekitar .service-item img {
            width: 100%;
            border-radius: 8px;
            margin-bottom: 5px;
        }


        .title-section {
            text-align: left;
            padding: 0 18px;
            margin-bottom: 10px;
            margin-top: 15px;
        }

        .title-section span {
            font-size: 14px;
            font-weight: bold;
            color: #2D2D2D;
        }

        .title-section p {
            font-size: 13px;
            color: #979797;
            margin: 0;
        }

        .card-container {
            display: grid;
            grid-template-columns: 1fr;
            overflow-x: auto;
            scrollbar-width: none;
            gap: 10px;
            padding: 0 10px;
            height: 700px;
            overflow-y: auto;
        }

        .card-container::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .card {
            background-color: #f8f8f8;
            border-radius: 15px;
            padding: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: left;
            width: calc(100% - 60px);
            /* Lebar kartu disesuaikan dengan container */
            margin: 10px 15px;
            display: flex;
            align-items: flex-start;
            position: relative;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card:hover {
            background-color: #e0e0e0;
            /* Change background color on hover */
            transform: scale(1.02);
            /* Slightly enlarge card on hover */
        }

        .card .image {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            overflow: hidden;
            position: absolute;
            top: 15px;
            left: 15px;
        }

        .card-link {
            text-decoration: none;
            /* Remove default link underline */
            display: block;
            /* Make the link occupy the full width of its parent */
            color: inherit;
            /* Inherit text color from the card */
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card .content {
            margin-left: 80px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card .title {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card .price {
            font-size: 16px;
            color: #00aaff;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .card .details {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 10px;
        }

        .card .details .detail {
            background-color: #f0f0f0;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 12px;
            color: #333;
            margin-right: 5px;
        }

        .card .bookmark {
            cursor: pointer;
            position: absolute;
            top: 15px;
            right: 15px;
        }

        .card .bookmark svg {
            transition: stroke 0.3s ease, fill 0.3s ease;
        }

        .card .bookmark.active svg #bookmark-path {
            stroke: #79862f;
            /* Change stroke color when active */
            fill: #7b852d;
            /* Change fill color when active */
        }

        .card .ticket {
            font-size: 12px;
            color: #666;
            margin-top: 5px;
            margin-left: -80px;
        }

        .card .post {
            font-size: 12px;
            color: #666;
            position: absolute;
            bottom: 15px;
            right: 15px;
        }

        .card .bottom-left {
            position: absolute;
            bottom: 15px;
            left: 15px;
            font-size: 12px;
            color: #666;
        }

        .footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 15px;
            border-top: 1px solid #e0e0e0;
            background-color: #fff;
            width: 100%;
            max-width: 480px;
            position: fixed;
            bottom: 0;
            z-index: 1000;
            box-sizing: border-box;
            height: 60px;
        }

        .footer a {
            text-decoration: none;
            color: #000;
        }

        .footer div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            font-size: 12px;
        }

        .footer div i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .img-profil {
            width: 32px;
            height: 32px;
            border-radius: 50%;
        }

        .footer img {
            width: 24px;
            height: 24px;
            margin-bottom: 5px;
        }

        .tabs button {
            padding: 10px 15px;
            border-radius: 8px;
        }


        .header-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: 8px;
            /*  Cover the whole width */
        }

        .tabs {
            margin-top: 30px;
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="mobile-container">
        <div class="top-bar d-flex gap-2">
            <div class="search-bar">
                <div class="search-wrapper">
                    <img class="search-icon" src="asset/images/dashboard/search.png" alt="Search Icon">
                    <input type="text" placeholder="Cari jasa, produk & seller">
                </div>
            </div>
            <div class="icons">
                <div><img src="asset/images/icon/notif.png" alt="Notifications"><span class="badge">3</span></div>
            </div>
        </div>
        <section class="promo-section">
            <div class="header-container">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset/images/pekerjaan/ayo_misi_seru.jpg" class="d-block w-100" alt="Misi Seru 1">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/pekerjaan/ayo_misi_webull.jpg" class="d-block w-100"
                                alt="Misi Seru 2">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/pekerjaan/loker_jastru.jpg" class="d-block w-100" alt="Misi Seru 3">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="misi-seru-container">
            <div class="misi-seru-header">
                <div class="misi-seru-title">
                    <img src="asset/images/pekerjaan/ayo_misi.png" alt="Ayo Misi" class="misi-icon">
                    <h5>Ayo Misi</h5>
                    <h4>Peluang cuan</h4>
                </div>
                <div class="back-arrow">
                    <a href="/misi_seru"><i class="bi bi-arrow-right-circle"></i></a>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="asset/images/misi_seru/flip.png" alt="Website Image">
                </div>
                <div class="content">
                    <div class="title">Berikan FLIP ulasan & dapatkan</div>
                    <div class="price">Rp10.000</div>
                    <div class="details">
                        <div class="detail">Ulasan</div>
                        <div class="detail">5 Menit pengerjaan</div>
                        <div class="detail">Rp 10.000</div>
                    </div>
                    <div class="ticket">100/200 Tiket</div>
                    <div class="post">Post 2 jam yang lalu</div>
                </div>
                <div class="bookmark" id="bookmark">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <path id="bookmark-path" d="M6 4V21L12 17L18 21V4C18 2.9 17.1 2 16 2H8C6.9 2 6 2.9 6 4Z"
                            stroke="#000" stroke-width="2" fill="#fff" />
                    </svg>
                </div>
            </div>
            <!-- Tambahkan background separator di sini -->
            <div class="section-separator"></div>
        </section>
        <section>
            <div class="title-section">
                <h3>Jelajahi lebih banyak jasa & produk</h3>
                <p>Dapatkan jasa & produk terbaik untukmu</p>
                <div class="card-container">
                    <a href="#" class="card-link" data-title="Registrasi kredivo dan dapatkan"
                        data-price="Rp30.000" data-details="Registrasi, 5 Menit pengerjaan, Rp 30.000"
                        data-ticket="132/200 Tiket" data-post="Post 1 jam yang lalu">
                        <div class="card">
                            <div class="image">
                                <img src="asset/images/misi_seru/kredivo.png" alt="Website Image">
                            </div>
                            <div class="content">
                                <div class="title">Registrasi kredivo dan dapatkan</div>
                                <div class="price">Rp30.000</div>
                                <div class="details">
                                    <div class="detail">Registrasi</div>
                                    <div class="detail">5 Menit pengerjaan</div>
                                    <div class="detail">Rp 30.000</div>
                                </div>
                                <div class="ticket">132/200 Tiket</div>
                                <div class="post">Post 1 jam yang lalu</div>
                            </div>
                            <div class="bookmark" id="bookmark">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="bookmark-path"
                                        d="M6 4V21L12 17L18 21V4C18 2.9 17.1 2 16 2H8C6.9 2 6 2.9 6 4Z" stroke="#000"
                                        stroke-width="2" fill="#fff" />
                                </svg>
                            </div>
                            <div class="persyaratan-container">
                                <div class="persyaratan-title">Persyaratan & Langkah</div>
                                <div class="persyaratan-item">1. Download atau install App KREDIVO</div>
                                <div class="persyaratan-item">2. Wajib masukkin Kode Referal: JASTRU01</div>
                                <div class="persyaratan-item">3. Registrasi kredivo menggunakan nomor atau email kamu.
                                </div>
                                <div class="persyaratan-item">4. Isi data registrasi dengan benar & valid</div>
                                <div class="persyaratan-item">5. Online kredivo selama minimal 15 menit sebelum unggah
                                    bukti</div>
                                <div class="persyaratan-item">6. Unggah screenshoot hasil registrasi akun (Profile)
                                    kredivo kamu tanpa cut atau hasil edit apapun</div>
                                <div class="persyaratan-item">7. Tunggu proses verifikasi maks 7 hari kerja</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card-link" data-title="Berikan FLIP ulasan & dapatkan"
                        data-price="Rp10.000" data-details="Ulasan, 5 Menit pengerjaan, Rp 10.000"
                        data-ticket="100/200 Tiket" data-post="Post 2 jam yang lalu">
                        <div class="card">
                            <div class="image">
                                <img src="asset/images/misi_seru/flip.png" alt="Website Image">
                            </div>
                            <div class="content">
                                <div class="title">Berikan FLIP ulasan & dapatkan</div>
                                <div class="price">Rp10.000</div>
                                <div class="details">
                                    <div class="detail">Ulasan</div>
                                    <div class="detail">5 Menit pengerjaan</div>
                                    <div class="detail">Rp 10.000</div>
                                </div>
                                <div class="ticket">100/200 Tiket</div>
                                <div class="post">Post 2 jam yang lalu</div>
                            </div>
                            <div class="bookmark" id="bookmark">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="bookmark-path"
                                        d="M6 4V21L12 17L18 21V4C18 2.9 17.1 2 16 2H8C6.9 2 6 2.9 6 4Z" stroke="#000"
                                        stroke-width="2" fill="#fff" />
                                </svg>
                            </div>
                            <div class="persyaratan-container">
                                <div class="persyaratan-title">Persyaratan & Langkah</div>
                                <div class="persyaratan-item">1. Download atau install App KREDIVO</div>
                                <div class="persyaratan-item">2. Wajib masukkin Kode Referal: JASTRU01</div>
                                <div class="persyaratan-item">3. Registrasi kredivo menggunakan nomor atau email kamu.
                                </div>
                                <div class="persyaratan-item">4. Isi data registrasi dengan benar & valid</div>
                                <div class="persyaratan-item">5. Online kredivo selama minimal 15 menit sebelum unggah
                                    bukti</div>
                                <div class="persyaratan-item">6. Unggah screenshoot hasil registrasi akun (Profile)
                                    kredivo kamu tanpa cut atau hasil edit apapun</div>
                                <div class="persyaratan-item">7. Tunggu proses verifikasi maks 7 hari kerja</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card-link" data-title="Berikan FLIP ulasan & dapatkan"
                        data-price="Rp10.000" data-details="Ulasan, 5 Menit pengerjaan, Rp 10.000"
                        data-ticket="100/200 Tiket" data-post="Post 2 jam yang lalu">
                        <div class="card">
                            <div class="image">
                                <img src="asset/images/misi_seru/flip.png" alt="Website Image">
                            </div>
                            <div class="content">
                                <div class="title">Berikan FLIP ulasan & dapatkan</div>
                                <div class="price">Rp10.000</div>
                                <div class="details">
                                    <div class="detail">Ulasan</div>
                                    <div class="detail">5 Menit pengerjaan</div>
                                    <div class="detail">Rp 10.000</div>
                                </div>
                                <div class="ticket">100/200 Tiket</div>
                                <div class="post">Post 2 jam yang lalu</div>
                            </div>
                            <div class="bookmark" id="bookmark">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="bookmark-path"
                                        d="M6 4V21L12 17L18 21V4C18 2.9 17.1 2 16 2H8C6.9 2 6 2.9 6 4Z" stroke="#000"
                                        stroke-width="2" fill="#fff" />
                                </svg>
                            </div>
                            <div class="persyaratan-container">
                                <div class="persyaratan-title">Persyaratan & Langkah</div>
                                <div class="persyaratan-item">1. Download atau install App KREDIVO</div>
                                <div class="persyaratan-item">2. Wajib masukkin Kode Referal: JASTRU01</div>
                                <div class="persyaratan-item">3. Registrasi kredivo menggunakan nomor atau email kamu.
                                </div>
                                <div class="persyaratan-item">4. Isi data registrasi dengan benar & valid</div>
                                <div class="persyaratan-item">5. Online kredivo selama minimal 15 menit sebelum unggah
                                    bukti</div>
                                <div class="persyaratan-item">6. Unggah screenshoot hasil registrasi akun (Profile)
                                    kredivo kamu tanpa cut atau hasil edit apapun</div>
                                <div class="persyaratan-item">7. Tunggu proses verifikasi maks 7 hari kerja</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card-link" data-title="Berikan FLIP ulasan & dapatkan"
                        data-price="Rp10.000" data-details="Ulasan, 5 Menit pengerjaan, Rp 10.000"
                        data-ticket="100/200 Tiket" data-post="Post 2 jam yang lalu">
                        <div class="card">
                            <div class="image">
                                <img src="asset/images/misi_seru/flip.png" alt="Website Image">
                            </div>
                            <div class="content">
                                <div class="title">Berikan FLIP ulasan & dapatkan</div>
                                <div class="price">Rp10.000</div>
                                <div class="details">
                                    <div class="detail">Ulasan</div>
                                    <div class="detail">5 Menit pengerjaan</div>
                                    <div class="detail">Rp 10.000</div>
                                </div>
                                <div class="ticket">100/200 Tiket</div>
                                <div class="post">Post 2 jam yang lalu</div>
                            </div>
                            <div class="bookmark" id="bookmark">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="bookmark-path"
                                        d="M6 4V21L12 17L18 21V4C18 2.9 17.1 2 16 2H8C6.9 2 6 2.9 6 4Z" stroke="#000"
                                        stroke-width="2" fill="#fff" />
                                </svg>
                            </div>
                            <div class="persyaratan-container">
                                <div class="persyaratan-title">Persyaratan & Langkah</div>
                                <div class="persyaratan-item">1. Download atau install App KREDIVO</div>
                                <div class="persyaratan-item">2. Wajib masukkin Kode Referal: JASTRU01</div>
                                <div class="persyaratan-item">3. Registrasi kredivo menggunakan nomor atau email kamu.
                                </div>
                                <div class="persyaratan-item">4. Isi data registrasi dengan benar & valid</div>
                                <div class="persyaratan-item">5. Online kredivo selama minimal 15 menit sebelum unggah
                                    bukti</div>
                                <div class="persyaratan-item">6. Unggah screenshoot hasil registrasi akun (Profile)
                                    kredivo kamu tanpa cut atau hasil edit apapun</div>
                                <div class="persyaratan-item">7. Tunggu proses verifikasi maks 7 hari kerja</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card-link" data-title="Berikan FLIP ulasan & dapatkan"
                        data-price="Rp10.000" data-details="Ulasan, 5 Menit pengerjaan, Rp 10.000"
                        data-ticket="100/200 Tiket" data-post="Post 2 jam yang lalu">
                        <div class="card">
                            <div class="image">
                                <img src="asset/images/misi_seru/flip.png" alt="Website Image">
                            </div>
                            <div class="content">
                                <div class="title">Berikan FLIP ulasan & dapatkan</div>
                                <div class="price">Rp10.000</div>
                                <div class="details">
                                    <div class="detail">Ulasan</div>
                                    <div class="detail">5 Menit pengerjaan</div>
                                    <div class="detail">Rp 10.000</div>
                                </div>
                                <div class="ticket">100/200 Tiket</div>
                                <div class="post">Post 2 jam yang lalu</div>
                            </div>
                            <div class="bookmark" id="bookmark">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="bookmark-path"
                                        d="M6 4V21L12 17L18 21V4C18 2.9 17.1 2 16 2H8C6.9 2 6 2.9 6 4Z" stroke="#000"
                                        stroke-width="2" fill="#fff" />
                                </svg>
                            </div>
                            <div class="persyaratan-container">
                                <div class="persyaratan-title">Persyaratan & Langkah</div>
                                <div class="persyaratan-item">1. Download atau install App KREDIVO</div>
                                <div class="persyaratan-item">2. Wajib masukkin Kode Referal: JASTRU01</div>
                                <div class="persyaratan-item">3. Registrasi kredivo menggunakan nomor atau email kamu.
                                </div>
                                <div class="persyaratan-item">4. Isi data registrasi dengan benar & valid</div>
                                <div class="persyaratan-item">5. Online kredivo selama minimal 15 menit sebelum unggah
                                    bukti</div>
                                <div class="persyaratan-item">6. Unggah screenshoot hasil registrasi akun (Profile)
                                    kredivo kamu tanpa cut atau hasil edit apapun</div>
                                <div class="persyaratan-item">7. Tunggu proses verifikasi maks 7 hari kerja</div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="card-link" data-title="Registrasi kredivo dan dapatkan"
                        data-price="Rp30.000" data-details="Registrasi, 5 Menit pengerjaan, Rp 30.000"
                        data-ticket="132/200 Tiket" data-post="Post 1 jam yang lalu">
                        <div class="card">
                            <div class="image">
                                <img src="asset/images/dashboard/jasaanimasiwebsite.png" alt="Website Image">
                            </div>
                            <div class="content">
                                <div class="title">Registrasi kredivo dan dapatkan</div>
                                <div class="price">Rp30.000</div>
                                <div class="details">
                                    <div class="detail">Registrasi</div>
                                    <div class="detail">5 Menit pengerjaan</div>
                                    <div class="detail">Rp 30.000</div>
                                </div>
                                <div class="ticket">132/200 Tiket</div>
                                <div class="post">Post 1 jam yang lalu</div>
                            </div>
                            <div class="bookmark" id="bookmark">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path id="bookmark-path"
                                        d="M6 4V21L12 17L18 21V4C18 2.9 17.1 2 16 2H8C6.9 2 6 2.9 6 4Z" stroke="#000"
                                        stroke-width="2" fill="#fff" />
                                </svg>
                            </div>
                            <div class="persyaratan-container">
                                <div class="persyaratan-title">Persyaratan & Langkah</div>
                                <div class="persyaratan-item">1. Download atau install App KREDIVO</div>
                                <div class="persyaratan-item">2. Wajib masukkin Kode Referal: JASTRU01</div>
                                <div class="persyaratan-item">3. Registrasi kredivo menggunakan nomor atau email kamu.
                                </div>
                                <div class="persyaratan-item">4. Isi data registrasi dengan benar & valid</div>
                                <div class="persyaratan-item">5. Online kredivo selama minimal 15 menit sebelum unggah
                                    bukti</div>
                                <div class="persyaratan-item">6. Unggah screenshoot hasil registrasi akun (Profile)
                                    kredivo kamu tanpa cut atau hasil edit apapun</div>
                                <div class="persyaratan-item">7. Tunggu proses verifikasi maks 7 hari kerja</div>
                            </div>
                        </div>
                    </a>
                    <div id="popup-overlay" class="popup-overlay">
                        <div class="popup-content">
                            <span id="popup-close" class="popup-close">&times;</span>
                            <h2 id="popup-title"></h2>
                            <p id="popup-price"></p>
                            <p id="popup-details"></p>
                            <p id="popup-ticket"></p>
                            <p id="popup-post"></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
