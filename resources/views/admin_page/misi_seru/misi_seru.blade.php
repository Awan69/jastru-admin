<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misi Seru</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">

    <style>
        .content-wrapper-misi-seru {
            flex: 1;
            overflow-y: auto;
            padding-bottom: 60px;
        }

        /* Header */
        .header {
            background-color: #fff;
            padding: 15px;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ddd;
            margin-top: 8%;
        }

        .header .back-button {
            border: none;
            padding: 8px;
            cursor: pointer;
            bottom: -10px;
            margin-right: 10px;
            background: none;
        }

        .header .location {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .header .location-title {
            display: flex;
            align-items: center;
        }

        .header .location-title span {
            font-size: 15px;
            color: #191919;
            font-weight: 500;
        }

        .misi-section {
            overflow: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            height: calc(100vh - 120px);
            padding: 0 20px;
            overflow-x: hidden;
        }

        .misi-section::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .filter-buttons {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
            overflow-x: auto;
            scrollbar-width: none;
            padding: 0 20px;
            position: relative;
        }

        .filter-buttons::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .filter-buttons button {
            padding: 10px 15px;
            background-color: #f5f6f6;
            border: 1px solid #ccc;
            border-radius: 30px;
            font-size: 12px;
            cursor: pointer;
            margin: 0 10px;
            flex-shrink: 0;
        }

        .filter-buttons button.active {
            background-color: #bfe9f2;
            color: #10ABCF;
            border: none;
            opacity: 90%;
        }

        .filter-buttons::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            transition: background-color 0.3s;
        }

        .filter-buttons .filter-icon {
            font-size: 20px;
            color: #8cc8e7;
            margin-right: 10px;
        }

        .separator {
            height: 1px;
            background-color: #ccc;
            margin: 8px 25px;
        }

        .mission-buttons {
            display: flex;
            justify-content: center;
            margin: 10px 0;
            position: relative;
        }

        .mission-buttons button {
            position: relative;
            background: none;
            border: none;
            font-size: 16px;
            font-weight: 400;
            color: #000000;
            cursor: pointer;
            padding: 10px 30px;
            margin: 0 10px;
            border-bottom: 2px solid transparent;
            transition: color 0.3s, border-bottom 0.3s;
        }

        .mission-button.active {
            color: #10ABCF;
            border-bottom: 2px solid #10ABCF;
            padding: 9px 40px;
        }

        .mission-buttons::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 100%;
            height: 2px;
            background-color: #ddd;
            transition: background-color 0.3s;
        }

        .mission-section-wrapper {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .missions-section {
            display: none;
        }

        .missions-section.active {
            display: block;
        }

        .title-section {
            text-align: left;
            padding: 0 18px;
            margin-bottom: 20px;
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
            overflow-x: auto;
            scrollbar-width: none;
            -ms-overflow-style: none;
            padding-bottom: 60px;
        }

        .card-container::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .card {
            background-color: #ffffff;
            border-radius: 10px;
            border: 1px solid #EDEDED;
            padding: 15px;
            text-align: left;
            width: calc(100% - 60px);
            margin: 10px 15px;
            display: flex;
            align-items: flex-start;
            position: relative;
            overflow-x: auto;
            cursor: pointer;
            margin-top: 10px;
            margin-bottom: 25px;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .card::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .card:hover {
            background-color: #e0e0e0;
            transform: scale(1.02);
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
            display: block;
            color: inherit;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card .content {
            margin-left: 75px;
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .card .title {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            font-size: 15px;
            font-weight: 500;
            margin-bottom: 5px;
        }

        .card .price {
            font-size: 15px;
            color: #0FBE20;
            font-weight: 500;
            margin-bottom: 12px;
        }

        .card .details {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            margin-left: 0;
            margin-left: -75px;
            margin-top: 20px;
            gap: 20px;
        }

        .card .details .detail {
            background-color: #F5F5F5;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 400;
            font-size: 13px;
            color: #424242;
            margin-right: 5px;
            white-space: nowrap;
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
            fill: #7b852d;
        }

        .card .ticket {
            font-size: 12px;
            color: #666;
            margin-top: 15px;
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

        /* SweetAlert Custom Popup */
        .custom-popup {
            width: 100%;
            max-width: 400px;
            border-radius: 12px;
            margin: 0 auto;
        }

        .custom-popup .swal2-title {
            font-size: 18px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        .custom-popup .swal2-html-container {
            font-size: 14px;
            white-space: normal;
            line-height: 1.5;
        }

        .custom-popup .swal2-confirm {
            background-color: #10ABCF !important;
            color: #FFFFFF !important;
            font-weight: bold;
            border-radius: 20px;
            padding: 15px 120px;
        }

        .custom-popup .swal2-success .swal2-icon-content {
            color: #006400;
            font-weight: bold;
        }

        .custom-popup .swal2-popup {
            top: 10% !important;
        }

        .popup-content,
        .popup-content-diambil {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            max-height: 85vh;
            height: 80vh;
            overflow-y: auto;
        }

        .popup-content::-webkit-scrollbar,
        .popup-content-diambil::-webkit-scrollbar {
            display: none;
        }

        .popup-overlay,
        .popup-overlay-diambil {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            background-color: rgb(255, 255, 255);
            display: none;
            justify-content: flex-end;
            z-index: 1000;
        }

        #popup-close,
        #popup-close-diambil {
            position: absolute;
            top: 15px;
            right: 20px;
            font-size: 24px;
            font-weight: bold;
            color: #333;
            cursor: pointer;
            background: none;
            border: none;
            outline: none;
            z-index: 1001;
            margin-top: -15px;
            margin-right: -15px;
            transition: color 0.3s ease;
        }

        .popup-mission-image,
        .popup-mission-image-diambil {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            margin-right: 15px;
            margin-top: -30px;
        }

        .mission-header,
        .mission-header-diambil {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
            margin-top: 0;
        }

        .popup-header,
        .popup-header-diambil {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            margin-top: 0;
        }

        .popup-header-info,
        .popup-header-info-diambil {
            flex: 1;
            margin-bottom: -30px;
        }

        #popup-title,
        #popup-title-diambil {
            font-size: 16px;
            font-weight: bold;
            margin-right: 10px;
            margin-top: -2px;
        }

        .price-section,
        .price-section-diambil {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        #popup-price,
        #popup-price-diambil {
            font-size: 14px;
            color: #0FBE20;
            font-weight: bold;
            margin-top: -10px;
            margin-right: 5px;
        }

        .ewallet-text,
        .ewallet-text-diambil {
            font-size: 15px;
            font-weight: bold;
            color: #0a0a0a;
            margin-top: -10px;
        }

        .action-button,
        .action-button-diambil {
            background-color: #10ABCF;
            color: #fff;
            padding: 8px 15px;
            border: none;
            border-radius: 20px;
            cursor: pointer;
            margin-top: -8%;
        }

        .popup-content .card,
        .popup-content .card-diambil {
            padding: 10px;
            background-color: #E7F3FF;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .popup-body,
        .popup-body-diambil {
            margin-bottom: 10px;
        }

        .popup-info,
        .popup-info-diambil {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 90px;
            border: 1px solid #E7E7E7;
            border-radius: 10px;
            padding: 10px;
            background-color: #ffffff;
        }

        .info-item,
        .info-item-diambil {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 30%;
        }

        .info-item span:first-child {
            font-size: 10px;
            color: #979797;
        }

        .info-item span:last-child {
            font-size: 12px;
            color: #191919;
        }

        .info-item img,
        .info-item-img-diambil {
            width: 20px;
            height: 20px;
        }

        .popup-persyaratan,
        .popup-persyaratan-diambil,
        .popup-resources,
        .popup-resources-diambil {
            padding: 10px;
            background-color: #F7F7F7;
            border-radius: 10px;
            margin-bottom: -10px;
            margin-top: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .popup-persyaratan .persyaratan-title,
        .popup-persyaratan-diambil .persyaratan-title-diambil {
            font-weight: bold;
            margin-bottom: 10px;
        }

        .popup-persyaratan .persyaratan-item,
        .popup-persyaratan-diambil .persyaratan-item-diambil {
            margin-bottom: 5px;
        }

        .popup-program-info-icon-text {
            display: flex;
            align-items: center;
        }

        .periode-icon {
            width: 20px;
            height: 20px;
            margin-right: 8px;
        }

        .popup-program-info-card,
        .popup-program-info-card-diambil {
            background-color: #E7F3FF;
            padding: 10px;
            border-radius: 10px;
            font-size: 14px;
            color: #007bff;
            width: calc(100% - -150px);
            box-sizing: border-box;
            line-height: 1.5;
            text-align: left;
            display: flex;
            margin-top: 20px;
            margin-bottom: -30px;
            flex-direction: column;
            margin-left: -70px;
        }

        .popup-program-info-card p,
        .popup-program-info-card-diambil p {
            margin: 0;
            white-space: normal;
            word-wrap: break-word;
            overflow: hidden;
            text-overflow: ellipsis;
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
        }

        .info-item,
        .info-item-diambil {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 0 10px;
        }

        .info-item span:first-child {
            font-size: 16px;
            font-weight: bold;
        }

        .info-item span:last-child {
            font-size: 12px;
            color: #555;
        }

        .button-container {
            display: flex;
            align-items: center;
            justify-content: flex-start;
            margin-right: -10px;
        }

        .button-container a {
            text-decoration: none;
        }

        .main-button {
            background-color: #13AFCB;
            color: white;
            border: none;
            padding: 15px 130px;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 40px;
            margin-right: 10px;
            display: inline-block;
        }

        .share-button {
            background-color: white;
            border: 2px solid #E6E6E6;
            padding: 13px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            margin-top: 40px;
            margin-right: 20px;
        }

        .share-button img {
            width: 20px;
            height: 20px;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <a class="back-button" href="/pekerjaan2">
                <img src="asset/images/icon/backarrow.png" alt="Back Arrow">
            </a>
            <div class="location">
                <div class="location-title">
                    <span class="dropdown-arrow"></span>
                    <span>Ayo misi</span>
                </div>
            </div>
        </div>
        <div class="mission-buttons">
            <button class="mission-button active" onclick="showMissions('tersedia')">Misi tersedia</button>
            <button class="mission-button" onclick="showMissions('diambil')">Misi sudah diambil</button>
        </div>
        <section id="misi-tersedia" class="missions-section active">
            <div class="title-section">
                <span>Misi Untuk Kamu</span>
                <p>kerjakan misi dan dapatkan uang dengan mudah</p>
            </div>
            <div class="filter-buttons">
                <span class="filter-icon"><img src="asset/images/icon/filter.png" alt="Filter"></span>
                <button class="filter-button active">Semua</button>
                <button class="filter-button">Registrasi</button>
                <button class="filter-button">Review</button>
                <button class="filter-button">Survei</button>
                <button class="filter-button">Belanja</button>
                <button class="filter-button">Game</button>
                <button class="filter-button">Follow</button>
                <button class="filter-button">Like</button>
                <button class="filter-button">View</button>
                <button class="filter-button">Vote</button>
                <button class="filter-button">Subscribe</button>
            </div>
            <div class="footer"><a href="{{ route('beranda') }}" class="footer-link">
                    <div><img src="asset/images/navigasi/beranda.png" alt="Beranda"><span>Beranda</span>
                    </div>
                </a><a href="{{ route('pesan') }}" class="footer-link">
                    <div><img src="asset/images/navigasi/chat_inbox.png" alt="Pesan"><span>Pesan</span>
                    </div>
                </a>
                <div><img src="asset/images/navigasi/profil.png" alt="Profile" class="img-profil"><span>Profile</span>
                </div>
                <div><img src="asset/images/navigasi/pekerjaan.png" alt="Pekerjaan"><span>Pekerjaan</span>
                </div><a href="{{ route('setting') }}" class="footer-link">
                    <div><img src="asset/images/navigasi/setting.png" alt="Setting"><span>Setting</span>
                    </div>
                </a>
            </div>
            <div class="separator"></div>
            <div class="card-container">
                <a href="#" class="card-link" data-image="asset/images/misi_seru/kredivo.png"
                    data-title="Registrasi kredivo dan dapatkan" data-price="Rp30.000"
                    data-details="Registrasi, 5 Menit pengerjaan, Rp 30.000" data-ticket="132/200 Tiket"
                    data-post="Post 1 jam yang lalu"
                    data-persyaratan="<div class='persyaratan-title'>Persyaratan & Langkah</div>
                      <div class='persyaratan-item'>1. Download atau install App KREDIVO</div>
                      <div class='persyaratan-item'>2. Wajib masukkin Kode Referal: JASTRU01</div>
                      <div class='persyaratan-item'>3. Registrasi kredivo menggunakan nomor atau email kamu.</div>
                      <div class='persyaratan-item'>4. Isi data registrasi dengan benar & valid</div>
                      <div class='persyaratan-item'>5. Online kredivo selama minimal 15 menit sebelum unggah bukti</div>
                      <div class='persyaratan-item'>6. Unggah screenshoot hasil registrasi akun (Profile) kredivo kamu tanpa cut atau hasil edit apapun</div>
                      <div class='persyaratan-item'>7. Tunggu proses verifikasi maks 7 hari kerja</div>"
                    onclick="showDetailsTersedia(this)">
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
                    </div>
                </a>
                <a href="#" class="card-link" data-image="asset/images/misi_seru/flip.png"
                    data-title="Berikan FLIP ulasan & dapatkan" data-price="Rp10.000"
                    data-details="Registrasi, 5 Menit pengerjaan, Rp 10.000" data-ticket="132/200 Tiket"
                    data-post="Post 1 jam yang lalu"
                    data-persyaratan="<div class='persyaratan-title'>Persyaratan & Langkah</div>
                    <div class='persyaratan-item'>1. Download atau install App FLIP</div>
                    <div class='persyaratan-item'>2. Wajib masukkin Kode Referal: JASTRU01</div>
                    <div class='persyaratan-item'>3. Pastikan kamu sudah menginstall aplikasi flip</div>
                    <div class='persyaratan-item'>4. Masuk ke Google Playstore dan cari aplikasi flip</div>
                    <div class='persyaratan-item'>5. Pastikan kamu gunakan Playstore dengan email yang sesuai dengan yang kamu daftarkan pada aplikasi flip</div>
                    <div class='persyaratan-item'>6. Berikan ulasan bintang 5 dan kalimat positif</div>
                    <div class='persyaratan-item'>7. Unggah screenshoot tanpa cut, potong, atau jenis edit apapun</div>"
                    onclick="showDetailsTersedia(this)">
                    <div class="card">
                        <div class="image">
                            <img src="asset/images/misi_seru/flip.png" alt="Website Image">
                        </div>
                        <div class="content">
                            <div class="title">Berikan FLIP ulasan & dapatkan</div>
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
                    </div>
                </a>
                <a href="#" class="card-link" data-image="asset/images/misi_seru/bankmega.png"
                    data-title="Isi survey bank MEGA dan dapatkan" data-price="Rp50.000"
                    data-details="Registrasi, 10 Menit pengerjaan, Rp 50.000" data-ticket="235/250 Tiket"
                    data-post="Post 1 jam yang lalu"
                    data-persyaratan="
                    <div class='persyaratan-title'>Persyaratan & Langkah</div>
                    <div class='persyaratan-item'>Klik link survey di bawah</div>
                    <div class='persyaratan-item'>Isi survey berdasarkan preferensi anda pribadi</div>
                    <div class='persyaratan-item'>Selesaikan survey tanpa melewatkan 1 point pun.</div>
                    <div class='persyaratan-item'>Survey berdurasi kurang lebih 15 menit</div>
                    <div class='persyaratan-item'>Pastikan kamu memiliki waktu luang ketika ambil survey</div>
                    <div class='persyaratan-item'>Gunakan email yg kamu gunakan pada jastru</div>
                    <div class='persyaratan-item'>Unggah screenshoot tanpa cut, potong, atau jenis edit apapun</div>"
                    onclick="showDetailsTersedia(this)">
                    <div class="card">
                        <div class="image">
                            <img src="asset/images/misi_seru/bankmega.png" alt="Website Image">
                        </div>
                        <div class="content">
                            <div class="title">Isi survey bank MEGA dan dapatkan</div>
                            <div class="price">Rp30.000</div>
                            <div class="details">
                                <div class="detail">Survey</div>
                                <div class="detail">5 Menit pengerjaan</div>
                                <div class="detail">Rp 50.000</div>
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
                    </div>
                </a>
                <a href="#" class="card-link" data-image="asset/images/misi_seru/bankmega.png"
                    data-title="Isi survey bank MEGA dan dapatkan" data-price="Rp50.000"
                    data-details="Registrasi, 10 Menit pengerjaan, Rp 50.000" data-ticket="235/250 Tiket"
                    data-post="Post 1 jam yang lalu"
                    data-persyaratan="
                    <div class='persyaratan-title'>Persyaratan & Langkah</div>
                    <div class='persyaratan-item'>Klik link survey di bawah</div>
                    <div class='persyaratan-item'>Isi survey berdasarkan preferensi anda pribadi</div>
                    <div class='persyaratan-item'>Selesaikan survey tanpa melewatkan 1 point pun.</div>
                    <div class='persyaratan-item'>Survey berdurasi kurang lebih 15 menit</div>
                    <div class='persyaratan-item'>Pastikan kamu memiliki waktu luang ketika ambil survey</div>
                    <div class='persyaratan-item'>Gunakan email yg kamu gunakan pada jastru</div>
                    <div class='persyaratan-item'>Unggah screenshoot tanpa cut, potong, atau jenis edit apapun</div>"
                    onclick="showDetailsTersedia(this)">
                    <div class="card">
                        <div class="image">
                            <img src="asset/images/misi_seru/bankmega.png" alt="Website Image">
                        </div>
                        <div class="content">
                            <div class="title">Isi survey bank MEGA dan dapatkan</div>
                            <div class="price">Rp30.000</div>
                            <div class="details">
                                <div class="detail">Survey</div>
                                <div class="detail">5 Menit pengerjaan</div>
                                <div class="detail">Rp 50.000</div>
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
                    </div>
                </a>
                <a href="#" class="card-link" data-image="asset/images/misi_seru/tokopedia.png"
                    data-title="Belanja minimal 50k dan dapatkan" data-price="Rp25.000"
                    data-details="Registrasi, 5 Menit pengerjaan, Rp 25.000" data-ticket="132/200 Tiket"
                    data-post="Post 1 jam yang lalu"
                    data-persyaratan="<div class='persyaratan-title'>Persyaratan & Langkah</div>
                      <div class='persyaratan-item'>1. Download atau install App KREDIVO</div>
                      <div class='persyaratan-item'>2. Wajib masukkin Kode Referal: JASTRU01</div>
                      <div class='persyaratan-item'>3. Registrasi kredivo menggunakan nomor atau email kamu.</div>
                      <div class='persyaratan-item'>4. Isi data registrasi dengan benar & valid</div>
                      <div class='persyaratan-item'>5. Online kredivo selama minimal 15 menit sebelum unggah bukti</div>
                      <div class='persyaratan-item'>6. Unggah screenshoot hasil registrasi akun (Profile) kredivo kamu tanpa cut atau hasil edit apapun</div>
                      <div class='persyaratan-item'>7. Tunggu proses verifikasi maks 7 hari kerja</div>"
                    onclick="showDetailsTersedia(this)">
                    <div class="card">
                        <div class="image">
                            <img src="asset/images/misi_seru/tokopedia.png" alt="Website Image">
                        </div>
                        <div class="content">
                            <div class="title">Belanja minimal 50k dan dapatkan</div>
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
                    </div>
                </a>
            </div>
            <div id="popup-overlay" class="popup-overlay"
                style="{{ session('missionFollowed') ? 'display: block;' : 'display: none;' }}">
                <div class="popup-content">
                    <span id="popup-close" class="popup-close">×</span>
                    <div class="popup-header">
                        <img src="asset/images/misi_seru/flip.png" alt="Mission Image" class="popup-mission-image">
                        <div class="popup-header-info">
                            <h2 id="popup-title"></h2>
                            <div class="price-section">
                                <p id="popup-price" class="popup-price"></p>
                            </div>
                            <div class="popup-program-info-card">
                                <div class="popup-program-info-icon-text">
                                    <img src="asset/images/icon/vector.png" alt="Periode Icon" class="periode-icon">
                                    <p class="popup-program-info">
                                        Program selesai pada <strong>7 Agustus 2024</strong>, hasil diperiksa pada
                                        hari
                                        kerja dan dikirim maks <strong>7 hari berikutnya</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <button class="action-button">Registrasi</button>
                    </div>
                    <div class="popup-body">
                        <div class="popup-info">
                            <div class="info-item">
                                <img src="asset/images/icon/timer.png" alt="Icon 1" class="info-icon">
                                <span>15 menit</span>
                                <span>Pengerjaan</span>
                            </div>
                            <div class="info-item">
                                <img src="asset/images/icon/tiket.png" alt="Icon 2" class="info-icon">
                                <span>235/250</span>
                                <span>Sisa tiket</span>
                            </div>
                            <div class="info-item">
                                <img src="asset/images/icon/jam_pasir.png" alt="Icon 3" class="info-icon">
                                <span>4 hari lagi</span>
                                <span>Sisa waktu</span>
                            </div>
                        </div>
                        <div id="popup-persyaratan" class="popup-persyaratan"></div>
                        <div class="popup-resources">
                            <h3>Bahan atau resource</h3>
                            <p>1. Link download (<a href="#">Klik di sini</a>)</p>
                        </div>
                    </div>
                    <div class="button-container">
                        <button class="share-button">
                            <img src="asset/images/icon/share.png" alt="Share Icon">
                            <form action="{{ route('misi_seru') }}" method="POST">
                                @csrf
                                <button type="submit" class="main-button">Ikuti Misi</button>
                            </form>
                        </button>
                    </div>
                </div>
            </div>
        </section>
        <section id="misi-diambil" class="missions-section">
            <div class="title-section">
                <span>Misi yang Telah Kamu Ambil</span>
                <p>ayo kerjakan sebelum kehabisan waktu</p>
            </div>
            <div class="filter-buttons">
                <span class="filter-icon"><img src="asset/images//icon/filter.png" alt="Filter"></span>
                <button class="filter-button active">Semua</button>
                <button class="filter-button">Registrasi</button>
                <button class="filter-button">Review</button>
                <button class="filter-button">Survei</button>
                <button class="filter-button">Belanja</button>
                <button class="filter-button">Game</button>
                <button class="filter-button">Follow</button>
                <button class="filter-button">Like</button>
                <button class="filter-button">View</button>
                <button class="filter-button">Vote</button>
                <button class="filter-button">Subscribe</button>
            </div>
            <div class="separator"></div>
            <div class="card-container">
                <a href="#" class="card-link" data-title="Berikan FLIP ulasan & dapatkan"
                    data-price="Rp30.000" data-details="Registrasi, 5 Menit pengerjaan, Rp 30.000"
                    data-ticket="132/200 Tiket" data-post="Post 1 jam yang lalu"
                    data-persyaratan="<div class='persyaratan-title-diambil'>Persyaratan & Langkah</div>
                      <div class='persyaratan-item-diambil'>1. Download atau install App FLIP</div>
                      <div class='persyaratan-item-diambil'>2. Wajib masukkin Kode Referal: JASTRU01</div>
                      <div class='persyaratan-item-diambil'>3. Pastikan kamu sudah menginstall aplikasi flip.</div>
                      <div class='persyaratan-item-diambil'>4. Masuk ke google playstore dan cari apllikasi flip</div>
                      <div class='persyaratan-item-diambil'>5. Pastikan kamu gunakan playstore dengan email yang sesuai dengan yg kamu daftarkan pada aplikasi flip</div>
                      <div class='persyaratan-item-diambil'>6. Berikan ulasan bintang 5 dan kalimat positif</div>
                      <div class='persyaratan-item-diambil'>7. Unggah screenshoot tanpa cut, potong atau jenis edit apapun</div>"
                    onclick="showDetailsDiambil(this)">
                    <div class="card">
                        <div class="image">
                            <img src="asset/images/misi_seru/flip.png" alt="Website Image">
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
                    </div>
                </a>
                <div class="footer"><a href="{{ route('beranda') }}" class="footer-link">
                        <div><img src="asset/images/navigasi/beranda.png" alt="Beranda"><span>Beranda</span>
                        </div>
                    </a><a href="{{ route('pesan') }}" class="footer-link">
                        <div><img src="asset/images/navigasi/chat_inbox.png" alt="Pesan"><span>Pesan</span>
                        </div>
                    </a>
                    <div><img src="asset/images/navigasi/profil.png" alt="Profile"
                            class="img-profil"><span>Profile</span>
                    </div>
                    <div><img src="asset/images/navigasi/pekerjaan.png" alt="Pekerjaan"><span>Pekerjaan</span>
                    </div><a href="{{ route('setting') }}" class="footer-link">
                        <div><img src="asset/images/navigasi/setting.png" alt="Setting"><span>Setting</span>
                        </div>
                    </a>
                </div>
                <!-- Pop Up Misi-->
                <div id="popup-overlay-diambil" class="popup-overlay-diambil">
                    <div class="popup-content-diambil">
                        <span id="popup-close-diambil" class="popup-close-diambil">×</span>
                        <div class="popup-header-diambil">
                            <img src="asset/images/misi_seru/flip.png" alt="Mission Image"
                                class="popup-mission-image">
                            <div class="popup-header-info-diambil">
                                <h2 id="popup-title-diambil"></h2>
                                <div class="price-section-diambil">
                                    <p id="popup-price-diambil" class="popup-price-diambil"></p>
                                    <p class="ewallet-text-diambil">saldo ke e-walletmu</p>
                                </div>
                                <div class="popup-program-info-card-diambil">
                                    <div class="popup-program-info-icon-text">
                                        <img src="asset/images/icon/vector.png" alt="Periode Icon"
                                            class="periode-icon">
                                        <p class="popup-program-info-diambil">
                                            Program selesai pada <strong>7 Agustus 2024</strong>, hasil diperiksa pada
                                            hari
                                            kerja dan dikirim maks <strong>7 hari berikutnya</strong>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <button class="action-button-diambil">Registrasi</button>
                        </div>
                        <div class="popup-body-diambil">
                            <div class="popup-info-diambil">
                                <div class="info-item">
                                    <img src="asset/images/icon/timer.png" alt="Icon 1" class="info-icon">
                                    <span>15 menit</span>
                                    <span>Pengerjaan</span>
                                </div>
                                <div class="info-item">
                                    <img src="asset/images/icon/tiket.png" alt="Icon 2" class="info-icon">
                                    <span>235/250</span>
                                    <span>Sisa tiket</span>
                                </div>
                                <div class="info-item">
                                    <img src="asset/images/icon/jam_pasir.png" alt="Icon 3" class="info-icon">
                                    <span>4 hari lagi</span>
                                    <span>Sisa waktu</span>
                                </div>
                            </div>
                            <div id="popup-persyaratan-diambil" class="popup-persyaratan-diambil"></div>
                            <div class="popup-resources-diambil">
                                <h3>Bahan atau resource</h3>
                                <p>1. Link Playstore (<a href="#">Klik di sini</a>)</p>
                                <p>1. Link Appstore (<a href="#">Klik di sini</a>)</p>
                            </div>
                        </div>
                        <div class="button-container">
                            <a href="{{ route('bukti_pekerjaan') }}" button class="main-button">Unggah bukti
                                pekerjaan</button></a>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                const ikutiMisiButton = document.querySelector('.main-button');
                if (ikutiMisiButton) {
                    ikutiMisiButton.addEventListener('click', function(event) {
                        event.preventDefault();

                        Swal.fire({
                            icon: 'success',
                            title: 'Misi Berhasil Diambil',
                            text: 'Segera kerjakan misi, batas waktu pengerjaan 15 menit terhitung setelah mengambil misi.',
                            confirmButtonText: 'Lanjutkan',
                            customClass: {
                                popup: 'custom-popup',
                                container: 'custom-swal-container',
                                confirmButton: 'swal2-confirm',
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                const popupOverlay = document.getElementById('popup-overlay');
                                if (popupOverlay) {
                                    popupOverlay.style.display = 'none';
                                }

                                const form = document.querySelector(
                                    'form[action="{{ route('follow.mission') }}"]');
                                if (form) {
                                    form.submit();
                                }

                                window.location.href = "{{ route('misi_seru') }}";
                            }
                        });
                    });
                }

                // Fungsi untuk menutup pop-up overlay
                const popupCloseButton = document.getElementById('popup-close');
                if (popupCloseButton) {
                    popupCloseButton.addEventListener('click', function() {
                        const popupOverlay = document.getElementById('popup-overlay');
                        if (popupOverlay) {
                            popupOverlay.style.display = 'none';
                        }
                    });
                }
            });
        </script>
    </div>

    <!--button Misi tersedia & Misi sudah diambil-->
    <script>
        function showMissions(mission) {
            document.querySelectorAll('.mission-button').forEach(function(button) {
                button.classList.remove('active');
            });
            document.querySelector(`button[onclick="showMissions('${mission}')"]`).classList.add('active');
            document.querySelectorAll('.missions-section').forEach(function(section) {
                section.classList.remove('active');
            });
            document.getElementById(`misi-${mission}`).classList.add('active');

        }
        //bookmart
        document.addEventListener('DOMContentLoaded', function() {
            const bookmarks = document.querySelectorAll('.bookmark');

            bookmarks.forEach(function(bookmark) {
                bookmark.addEventListener('click', function() {
                    this.classList.toggle('active');
                });
            });
        });


        function showDetailsTersedia(cardLink) {
            const title = cardLink.getAttribute('data-title');
            const price = cardLink.getAttribute('data-price');
            const details = cardLink.getAttribute('data-details');
            const ticket = cardLink.getAttribute('data-ticket');
            const post = cardLink.getAttribute('data-post');
            const persyaratan = cardLink.getAttribute('data-persyaratan');
            const imageSrc = cardLink.getAttribute('data-image'); // Get image URL

            const popupTitleElement = document.getElementById('popup-title');
            const popupPriceElement = document.getElementById('popup-price');
            const popupDetailsElement = document.getElementById('popup-details');
            const popupTicketElement = document.getElementById('popup-ticket');
            const popupPostElement = document.getElementById('popup-post');
            const popupPersyaratanElement = document.getElementById('popup-persyaratan');
            const popupImageElement = document.querySelector('.popup-mission-image'); // Select the image element

            if (popupTitleElement) popupTitleElement.textContent = title;
            if (popupPriceElement) popupPriceElement.textContent = price;
            if (popupDetailsElement) popupDetailsElement.textContent = details;
            if (popupTicketElement) popupTicketElement.textContent = ticket;
            if (popupPostElement) popupPostElement.textContent = post;
            if (popupPersyaratanElement) popupPersyaratanElement.innerHTML = persyaratan;
            if (popupImageElement) popupImageElement.src = imageSrc; // Set the image source

            document.getElementById('popup-overlay').style.display = 'flex';
            document.getElementById('popup-overlay-diambil').style.display = 'none';
        }

        // Close popup by clicking outside
        document.querySelector('.popup-overlay').addEventListener('click', function(e) {
            if (e.target === this) {
                this.classList.remove('show');
            }
        });

        // Close popup on 'Esc' key press
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                document.querySelector('.popup-overlay').classList.remove('show');
            }
        });



        function showDetailsDiambil(cardLink) {
            const title = cardLink.getAttribute('data-title');
            const price = cardLink.getAttribute('data-price');
            const details = cardLink.getAttribute('data-details');
            const ticket = cardLink.getAttribute('data-ticket');
            const post = cardLink.getAttribute('data-post');
            const persyaratan = cardLink.getAttribute('data-persyaratan');

            const popupTitleElement = document.getElementById('popup-title-diambil');
            const popupPriceElement = document.getElementById('popup-price-diambil');
            const popupDetailsElement = document.getElementById('popup-details-diambil');
            const popupTicketElement = document.getElementById('popup-ticket-diambil');
            const popupPostElement = document.getElementById('popup-post-diambil');
            const popupPersyaratanElement = document.getElementById('popup-persyaratan-diambil');

            if (popupTitleElement) popupTitleElement.textContent = title;
            if (popupPriceElement) popupPriceElement.textContent = price;
            if (popupDetailsElement) popupDetailsElement.textContent = details;
            if (popupTicketElement) popupTicketElement.textContent = ticket;
            if (popupPostElement) popupPostElement.textContent = post;
            if (popupPersyaratanElement) popupPersyaratanElement.innerHTML = persyaratan;

            document.getElementById('popup-overlay-diambil').style.display = 'flex';
            document.getElementById('popup-overlay').style.display = 'none';
        }


        // Add event listeners for card links
        document.addEventListener('DOMContentLoaded', () => {
            const cardLinks = document.querySelectorAll('.card-link');
            const popupOverlay = document.getElementById('popup-overlay');
            const popupOverlayDiambil = document.getElementById('popup-overlay-diambil');
            const popupClose = document.querySelectorAll('.popup-close'); // Select all close buttons
            const popupCloseDiambil = document.getElementById(
                'popup-close-diambil'); // Close button for "Misi Sudah Diambil"

            cardLinks.forEach(cardLink => {
                cardLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    showDetails(cardLink);
                });
            });

            // Close popup "Misi Sudah Diambil" when clicking on close button
            if (popupCloseDiambil) {
                popupCloseDiambil.addEventListener('click', () => {
                    popupOverlayDiambil.style.display = 'none';
                });
            }

            // Close general popups when clicking on close buttons
            popupClose.forEach(closeBtn => {
                closeBtn.addEventListener('click', () => {
                    popupOverlay.style.display = 'none';
                    popupOverlayDiambil.style.display = 'none';
                });
            });

            // Close popups when clicking on overlay background
            if (popupOverlay) {
                popupOverlay.addEventListener('click', (e) => {
                    if (e.target === popupOverlay || e.target.classList.contains('popup-overlay')) {
                        popupOverlay.style.display = 'none';
                    }
                });
            }

            if (popupOverlayDiambil) {
                popupOverlayDiambil.addEventListener('click', (e) => {
                    if (e.target === popupOverlayDiambil || e.target.classList.contains(
                            'popup-overlay-diambil')) {
                        popupOverlayDiambil.style.display = 'none';
                    }
                });
            }
        });
    </script>
</body>

</html>
