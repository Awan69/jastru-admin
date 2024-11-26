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
        body {
            font-family: "Inter", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Align items at the top */
            min-height: 100vh;
        }

        .mobile-container {
            width: 100%;
            max-width: 480px;
            min-height: 140vh;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

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
            margin: 0 16px;
            overflow-x: auto;
            scrollbar-width: none;
            padding: 5px 0 15px 0;
            position: relative;
            gap: 10px;
            border-bottom: 2px solid rgba(237, 237, 237, 1);
        }

        .filter-buttons::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .filter-buttons button {
            padding: 10px 15px;
            height: 37px;
            background-color: #f5f6f6;
            border: 1px solid #ccc;
            border-radius: 27px;
            font-size: 11px;
            font-weight: 400;
            cursor: pointer;
            /* flex-shrink: 0; */
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
            /* padding: 5px 16px 0 5px; */
            position: relative;
        }

        .mission-buttons button {
            position: relative;
            width: 50%;
            background: none;
            border: none;
            font-size: 12px;
            font-weight: 400;
            color: #000000;
            cursor: pointer;
            padding: 10px 10px 15px 10px;
            border-bottom: 2px solid transparent;
            transition: color 0.3s, border-bottom 0.3s;
        }

        .mission-button.active {
            color: #10ABCF;
            border-bottom: 2px solid #10ABCF;
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
            overflow-y: auto;
            /* Mengizinkan scroll vertikal */
            overflow-x: hidden;
            /* Mencegah scroll horizontal */
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
            margin: 10px 14px;
            display: flex;
            align-items: flex-start;
            position: relative;
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
            transform: scale(1.04);
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
            justify-content: space-between;
            position: relative;
            align-items: center;
            margin-left: -75px;
            margin-top: 20px;
            gap: 20px;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .card .details::-webkit-scrollbar {
            display: none;
        }

        .card .details .detail {
            background-color: #F5F5F5;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 400;
            font-size: 13px;
            color: #424242;
            margin-right: 5px;
            overflow-x: auto;
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
            stroke: #10ABCF;
            fill: #10ABCF;
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

        .custom-popup .swal2-error {
            background-color: #87adbd !important;
            color: #FFFFFF !important;
            font-weight: bold;
            border-radius: 20px;
            padding: 15px 120px;
        }

        .custom-popup .swal2-warning {
            background-color: #cf1010 !important;
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
            border-radius: 15px 15px 0 0;
            padding: 30px 16px 40px 16px;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            max-height: 85vh;
            height: 80vh;
            overflow-y: auto;
            box-sizing: border-box;
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
            border: 1px solid rgba(241, 241, 241, 1);
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

        body.no-scroll {
            overflow: hidden;
        }

        .info-item,
        .info-item-diambil {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 30%;
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
            padding: 8px;
            background-color: #F7F7F7;
            border-radius: 10px;
            margin-bottom: -10px;
            margin-top: 40px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .popup-resources h3,
        .popup-resources-diambil h3 {
            font-size: 14px;
            font-weight: 500;
            color: #3C3C3C;
            margin-bottom: 5px;
        }

        .popup-resources p,
        .popup-resources-diambil p {
            color: #3C3C3C;
            font-size: 13px;
            font-weight: 400;
        }

        .steps-title,
        .steps-title-diambil {
            font-size: 14px;
            font-weight: 500;
            color: #3C3C3C;
            margin-bottom: 15px;
        }

        #popup-persyaratan ol,
        #popup-persyaratan-diambil ol {
            padding-left: 16px;
            margin: 0;
        }

        .popup-persyaratan li,
        .popup-persyaratan-diambil li {
            font-size: 13px;
            font-weight: 400;
            color: #3C3C3C;
            margin-bottom: 5px;
            text-align: left;
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

        #popup-processing-time,
        #popup-ticket,
        #popup-remaining-days,
        #popup-processing-time-diambil,
        #popup-ticket-diambil,
        #popup-remaining-days-diambil {
            font-size: 13px;
            font-weight: 500;
            color: #191919;
        }


        .info-item span:last-child,
        .info-item-diambil span:last-child {
            font-size: 12px;
            color: #979797;
            font-weight: 400;
        }


        .button-container {
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            gap: 20px;
            margin-top: 40px;
            /* margin-right: -10px; */
        }

        .button-container a {
            text-decoration: none;
        }

        .main-button {
            background-color: #13AFCB;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 10px;
            font-size: 16px;
            cursor: pointer;
            height: 40px;
            min-width: 400px;
            width: 100%;
            margin-top: 0;
            margin-left: -10px;
        }

        .share-button {
            background-color: white;
            border: 1px solid rgba(230, 230, 230, 1);
            padding: 10px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            /* margin-top: 40px;
            /* margin-right: 20px; */
        }

        .share-button img {
            width: 17px;
            height: 20px;
        }

        .button-container-diambil {
            display: flex;
            align-items: center;
            width: 100%;
            height: 40px;
            margin-top: 40px;
            /* margin-right: -10px; */
        }

        .button-container-diambil a {
            text-decoration: none;
        }

        .main-button-diambil {
            background-color: rgba(16, 171, 207, 1);
            color: white;
            border: none;
            padding: 10px;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 500;
            cursor: pointer;
            height: 20px;
            width: 100%;
            max-width: 440px;
            text-align: center;
            margin: 5px auto;
            margin-bottom: 10px;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <a class="back-button" href="{{ route('pekerjaan') }}">
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
                <span style="font-size: 12px; font-weight: 600;">Misi Untuk Kamu</span>
                <p style="font-size: 11px; font-weight: 400;">kerjakan misi dan dapatkan uang dengan mudah</p>
            </div>
            <div class="filter-buttons">
                <span class="filter-icon"><img src="asset/images/icon/filter.png" alt="Filter"></span>
                <button class="filter-button active" data-type="Semua">Semua</button>
                <button class="filter-button" data-type="Registrasi">Registrasi</button>
                <button class="filter-button" data-type="Review">Review</button>
                <button class="filter-button" data-type="Survei">Survei</button>
                <button class="filter-button" data-type="Belanja">Belanja</button>
                <button class="filter-button" data-type="Game">Game</button>
                <button class="filter-button" data-type="Follow">Follow</button>
                <button class="filter-button" data-type="Like">Like</button>
                <button class="filter-button" data-type="View">View</button>
                <button class="filter-button" data-type="Vote">Vote</button>
                <button class="filter-button" data-type="Subscribe">Subscribe</button>
            </div>
            <section>
                <div>
                    @include('navbar.layout.nav_bar')
                </div>
            </section>
            <div class="card-container">
                @foreach ($missions as $mission)
                    @php
                        // Pisahkan persyaratan berdasarkan baris baru
                        $requirementsArray = explode("\n", trim($mission->mission_requirements));
                        $stepsArray = explode("\n", trim($mission->steps));

                        // Format persyaratan menjadi daftar HTML
                        $formattedRequirements =
                            "<div class='persyaratan-title-diambil'>Persyaratan & Langkah</div><ol>";
                        foreach ($requirementsArray as $requirement) {
                            $formattedRequirements .= '<li>' . trim(e($requirement)) . '</li>';
                        }
                        $formattedRequirements .= '</ol>';

                        // Format langkah menjadi daftar HTML
                        $formattedSteps = "<div class='steps-title-diambil'>Persyaratan & Langkah</div><ol>";
                        foreach ($stepsArray as $step) {
                            $formattedSteps .= '<li>' . trim(e($step)) . '</li>';
                        }
                        $formattedSteps .= '</ol>';
                    @endphp
                    <a href="#" class="card-link"
                        data-image="{{ $mission->partner && $mission->partner->logo ? (Str::startsWith($mission->partner->logo, 'http') ? $mission->partner->logo : asset('images/partners/' . $mission->partner->logo)) : asset('images/default-logo.png') }}"
                        data-title="{{ $mission->name_mission }}" data-mission-type="{{ $mission->mission_type }}"
                        data-price="Rp{{ number_format($mission->amount_reward, 0, ',', '.') }}"
                        data-details="{{ $mission->mission_requirements }}, {{ $mission->processing_time }}pengerjaan, Rp{{ number_format($mission->amount_reward, 0, ',', '.') }}"
                        data-ticket="{{ $mission->amount_ticket }} Tiket" data-persyaratan="{{ $formattedSteps }}"
                        data-processing-time="{{ $mission->processing_time }}"
                        data-remaining-days="{{ $mission->remaining_days }}"
                        data-ended-date="{{ $mission->formatted_ended_date }}"
                        data-id-exciting-mission="{{ $mission->id }}" onclick="showDetailsTersedia(this)">
                        <div class="card">
                            <div class="image">
                                <img src="{{ $mission->partner && $mission->partner->logo ? asset('images/partners/' . $mission->partner->logo) : asset('images/default-logo.png') }}"
                                    alt="{{ $mission->partner ? $mission->partner->partner_name : 'No Partner' }}">
                            </div>
                            <div class="content">
                                <div class="title">{{ $mission->name_mission }}</div>
                                <div class="price">Rp{{ number_format($mission->amount_reward, 0, ',', '.') }}</div>
                                <div class="details">
                                    <div class="detail">{{ $mission->mission_requirements }}</div>
                                    <div class="detail">{{ $mission->processing_time }} Menit pengerjaan</div>
                                    <div class="detail">Rp{{ number_format($mission->amount_reward, 0, ',', '.') }}
                                    </div>
                                </div>
                                <div class="ticket">{{ $mission->amount_ticket }} Tiket</div>
                                <div class="post">Posting
                                    {{ \Carbon\Carbon::parse($mission->created_at)->locale('id')->diffForHumans() }}
                                </div>
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
                    <div id="popup-overlay" class="popup-overlay"
                        style="{{ session('missionFollowed') ? 'display: block;' : 'display: none;' }}">
                        <div class="popup-content">
                            <span id="popup-close" class="popup-close">×</span>
                            <div class="popup-header">
                                <img class="popup-mission-image">
                                <div class="popup-header-info">
                                    <h2 id="popup-title"></h2>
                                    <div class="price-section">
                                        <p id="popup-price" class="popup-price"></p>
                                    </div>
                                    <div class="popup-program-info-card">
                                        <div class="popup-program-info-icon-text">
                                            <img src="{{ asset('asset/images/icon/vector.png') }}" alt="Periode Icon"
                                                class="periode-icon">
                                            <p class="popup-program-info">
                                                Program selesai pada <strong id="popup-ended-date"></strong>, hasil
                                                diperiksa pada hari kerja dan dikirim maks <strong>7 hari
                                                    berikutnya</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <button class="action-button">{{ $mission->mission_type }}</button>
                            </div>
                            <div class="popup-body">
                                <div class="popup-info">
                                    <div class="info-item">
                                        <img src="{{ asset('asset/images/icon/timer.png') }}" alt="Icon 1"
                                            class="info-icon">
                                        <span id="popup-processing-time"></span>
                                        <span>Pengerjaan</span>
                                    </div>
                                    <div class="info-item">
                                        <img src="{{ asset('asset/images/icon/tiket.png') }}" alt="Icon 2"
                                            class="info-icon">
                                        <span id="popup-ticket"></span>
                                        <span>Sisa tiket</span>
                                    </div>
                                    <div class="info-item">
                                        <img src="{{ asset('asset/images/icon/jam_pasir.png') }}" alt="Icon 3"
                                            class="info-icon">
                                        <span id="popup-remaining-days"></span>
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
                                    <img src="{{ asset('asset/images/icon/share.png') }}" alt="Share Icon">
                                </button>
                                <form action="{{ route('follow.mission') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                                    <input type="hidden" name="exciting_mission_id" value="{{ $mission->id }}">
                                    <button type="submit" class="main-button">Ikuti Misi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
        <section id="misi-diambil" class="missions-section">
            <div class="title-section">
                <span style="font-size: 12px; font-weight: 600;">Misi yang Telah Kamu Ambil</span>
                <p style="font-size: 11px; font-weight: 400;">ayo kerjakan sebelum kehabisan waktu</p>
            </div>
            <div class="filter-buttons">
                <span class="filter-icon"><img src="asset/images/icon/filter.png" alt="Filter"></span>
                <button class="filter-button active" data-type="Semua">Semua</button>
                <button class="filter-button" data-type="Registrasi">Registrasi</button>
                <button class="filter-button" data-type="Review">Review</button>
                <button class="filter-button" data-type="Survei">Survei</button>
                <button class="filter-button" data-type="Belanja">Belanja</button>
                <button class="filter-button" data-type="Game">Game</button>
                <button class="filter-button" data-type="Follow">Follow</button>
                <button class="filter-button" data-type="Like">Like</button>
                <button class="filter-button" data-type="View">View</button>
                <button class="filter-button" data-type="Vote">Vote</button>
                <button class="filter-button" data-type="Subscribe">Subscribe</button>
            </div>
            <div class="card-container">
                @foreach ($takenMissions as $takenMission)
                    @php
                        // Pisahkan persyaratan berdasarkan baris baru
                        $requirementsArray = explode("\n", trim($takenMission->excitingMission->mission_requirements));
                        $stepsArray = explode("\n", trim($takenMission->excitingMission->steps)); // Tambahkan ini untuk langkah-langkah

                        // Format persyaratan menjadi daftar HTML
                        $formattedRequirements =
                            "<div class='persyaratan-title-diambil'>Persyaratan & Langkah</div><ol>";
                        foreach ($requirementsArray as $requirement) {
                            $formattedRequirements .= '<li>' . trim(e($requirement)) . '</li>';
                        }
                        $formattedRequirements .= '</ol>';

                        // Format langkah menjadi daftar HTML
                        $formattedSteps = "<div class='steps-title-diambil'>Langkah-Langkah</div><ol>";
                        foreach ($stepsArray as $step) {
                            $formattedSteps .= '<li>' . trim(e($step)) . '</li>';
                        }
                        $formattedSteps .= '</ol>';
                    @endphp
                    <a href="#" class="card-link"
                        data-image="{{ $takenMission->partner && $takenMission->partner->logo ? (Str::startsWith($takenMission->partner->logo, 'http') ? $takenMission->partner->logo : asset('images/partners/' . $takenMission->partner->logo)) : asset('images/default-logo.png') }}"
                        data-title-diambil="{{ $takenMission->excitingMission->name_mission }}"
                        data-mission-type-diambil="{{ $takenMission->mission_type }}"
                        data-price-diambil="Rp{{ number_format($takenMission->excitingMission->amount_reward, 0, ',', '.') }}"
                        data-details-diambil="{{ $takenMission->excitingMission->mission_type }}, {{ $takenMission->excitingMission->processing_time }} Menit pengerjaan, Rp{{ number_format($takenMission->excitingMission->amount_reward, 0, ',', '.') }}"
                        data-ticket-diambil="{{ $takenMission->excitingMission->amount_ticket }} Tiket"
                        data-persyaratan-diambil="{{ $formattedSteps }}"
                        data-processing-time-diambil="{{ $takenMission->excitingMission->processing_time }}"
                        data-remaining-days-diambil="{{ $takenMission->remaining_days }}"
                        data-ended-date-diambil="{{ $takenMission->formatted_ended_date }}"
                        data-id-exciting-mission-diambil="{{ $takenMission->excitingMission->id }}"
                        onclick="showDetailsDiambil(this)">
                        <div class="card">
                            <div class="image">
                                <img src="{{ $mission->partner && $mission->partner->logo ? asset('images/partners/' . $mission->partner->logo) : asset('images/default-logo.png') }}"
                                    alt="{{ $mission->partner ? $mission->partner->partner_name : 'No Partner' }}">
                            </div>
                            <div class="content">
                                <div class="title">{{ $takenMission->excitingMission->name_mission }}</div>
                                <div class="price">
                                    Rp{{ number_format($takenMission->excitingMission->amount_reward, 0, ',', '.') }}
                                </div>
                                <div class="details">
                                    <div class="detail">{{ $takenMission->excitingMission->name_mission }}</div>
                                    <div class="detail">{{ $takenMission->excitingMission->processing_time }} Menit
                                        pengerjaan</div>
                                    <div class="detail">
                                        Rp{{ number_format($takenMission->excitingMission->amount_reward, 0, ',', '.') }}
                                    </div>
                                </div>
                                <div class="ticket">{{ $takenMission->excitingMission->amount_ticket }} Tiket</div>
                                <div class="post">Posting
                                    {{ \Carbon\Carbon::parse($takenMission->excitingMission->created_at)->locale('id')->diffForHumans() }}
                                </div>
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
                    <section>
                        <div>
                            @include('navbar.layout.nav_bar')
                        </div>
                    </section>
                    <!-- Pop Up Misi-->
                    <div id="popup-overlay-diambil" class="popup-overlay-diambil"
                        style="{{ session('missionFollowed') ? 'display: block;' : 'display: none;' }}">
                        <div class="popup-content-diambil">
                            <span id="popup-close-diambil" class="popup-close-diambil">×</span>
                            <div class="popup-header-diambil">
                                <img src="{{ $takenMission->excitingMission->partner && $takenMission->excitingMission->partner->logo ? (Str::startsWith($takenMission->excitingMission->partner->logo, 'http') ? $takenMission->excitingMission->partner->logo : asset('images/partners/' . $takenMission->excitingMission->partner->logo)) : asset('images/default-logo.png') }}"
                                    alt="{{ $takenMission->excitingMission->partner ? $takenMission->excitingMission->partner->partner_name : 'No Partner' }}"
                                    class="popup-mission-image-diambil">
                                <div class="popup-header-info-diambil">
                                    <h2 id="popup-title-diambil"></h2>
                                    <div class="price-section-diambil">
                                        <p id="popup-price-diambil" class="popup-price-diambil"></p>
                                    </div>
                                    <div class="popup-program-info-card-diambil">
                                        <div class="popup-program-info-icon-text">
                                            <img src="asset/images/icon/vector.png" alt="Periode Icon"
                                                class="periode-icon">
                                            <p class="popup-program-info-diambil">
                                                Program selesai pada <strong id="popup-ended-date-diambil"></strong>,
                                                hasil
                                                diperiksa pada hari
                                                kerja dan dikirim maks <strong>7 hari berikutnya</strong>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <button class="action-button-diambil">{{ $takenMission->mission_type }}</button>
                            </div>
                            <div class="popup-body-diambil">
                                <div class="popup-info-diambil">
                                    <div class="info-item">
                                        <img src="asset/images/icon/timer.png" alt="Icon 1" class="info-icon">
                                        <span id="popup-processing-time-diambil"></span>
                                        <span>Pengerjaan</span>
                                    </div>
                                    <div class="info-item">
                                        <img src="asset/images/icon/tiket.png" alt="Icon 2" class="info-icon">
                                        <span id="popup-ticket-diambil"></span>
                                        <span>Sisa tiket</span>
                                    </div>
                                    <div class="info-item">
                                        <img src="asset/images/icon/jam_pasir.png" alt="Icon 3" class="info-icon">
                                        <span id="popup-remaining-days-diambil"></span>
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
                            <div class="button-container-diambil">
                                <a id="upload-link" class="main-button-diambil" href="#">Unggah bukti
                                    pekerjaan</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </section>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const ikutiMisiButton = document.querySelector('.main-button');
            if (ikutiMisiButton) {
                ikutiMisiButton.addEventListener('click', function(event) {
                    event.preventDefault();

                    // Get data from hidden inputs in the form
                    const userId = document.querySelector('input[name="user_id"]').value;
                    const missionId = document.querySelector('input[name="exciting_mission_id"]').value;

                    // Send AJAX request to check and follow the mission
                    fetch('/follow-mission', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify({
                                user_id: userId,
                                exciting_mission_id: missionId
                            })
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.already_followed) {
                                // User already follows this mission
                                Swal.fire({
                                    icon: 'warning',
                                    title: 'Peringatan',
                                    text: 'Anda telah mengikuti misi ini, silakan cari misi lain.',
                                    confirmButtonText: 'Konfirmasi',
                                    customClass: {
                                        popup: 'custom-popup',
                                        container: 'custom-swal-container',
                                        confirmButton: 'swal2-warning',
                                    }
                                });
                            } else if (data.success) {
                                // Mission successfully followed
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
                                        // Redirect to 'misi_seru' page after the SweetAlert is confirmed
                                        window.location.href = '{{ route('misi_seru') }}';
                                    }
                                });
                            }
                        });
                });
            }
        });

        // TAB
        //button Misi tersedia & Misi sudah diambil
        let activeMissionType = 'tersedia'; // Default tab aktif

        function showMissions(mission) {
            activeMissionType = mission;
            // Menonaktifkan semua tombol misi
            document.querySelectorAll('.mission-button').forEach(function(button) {
                button.classList.remove('active');
            });

            // Aktifkan tombol yang dipilih jika ditemukan
            const activeButton = document.querySelector(`button[onclick="showMissions('${mission}')"]`);
            if (activeButton) {
                activeButton.classList.add('active');
            }

            // Sembunyikan semua section misi
            document.querySelectorAll('.missions-section').forEach(function(section) {
                section.classList.remove('active');
            });

            // Tampilkan section misi yang dipilih
            const missionSection = document.getElementById(`misi-${mission}`);
            if (missionSection) {
                missionSection.classList.add('active');
            }

            // Sembunyikan semua popups saat berpindah tab
            document.getElementById('popup-overlay').style.display = 'none';
            document.getElementById('popup-overlay-diambil').style.display = 'none';
        }
        // function showMissions(mission) {
        //     document.querySelectorAll('.mission-button').forEach(function(button) {
        //         button.classList.remove('active');
        //     });
        //     document.querySelector(`button[onclick="showMissions('${mission}')"]`).classList.add('active');
        //     document.querySelectorAll('.missions-section').forEach(function(section) {
        //         section.classList.remove('active');
        //     });
        //     document.getElementById(`misi-${mission}`).classList.add('active');
        // }

        function showDetails(cardLink) {
            if (activeMissionType === 'tersedia') {
                showDetailsTersedia(cardLink);
            } else {
                showDetailsDiambil(cardLink);
            }
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
            const missionType = cardLink.getAttribute('data-details').split(',')[
                0]; // Mengambil mission_type dari data-details

            const title = cardLink.getAttribute('data-title');
            const price = cardLink.getAttribute('data-price');
            const details = cardLink.getAttribute('data-details');
            const ticket = cardLink.getAttribute('data-ticket');
            const post = cardLink.getAttribute('data-post');
            const steps = cardLink.getAttribute('data-steps');
            const persyaratan = cardLink.getAttribute('data-persyaratan');
            const imageSrc = cardLink.getAttribute('data-image'); // Get image URL
            const processingTime = cardLink.getAttribute('data-processing-time'); // Ambil waktu pemrosesan
            const remainingDays = cardLink.getAttribute('data-remaining-days'); // Ambil sisa waktu
            const endedDate = cardLink.getAttribute('data-ended-date');
            const idExcitingMission = cardLink.getAttribute('data-id-exciting-mission'); // Mengambil ID misi

            const popupTitleElement = document.getElementById('popup-title');
            const popupPriceElement = document.getElementById('popup-price');
            const popupDetailsElement = document.getElementById('popup-details');
            const popupTicketElement = document.getElementById('popup-ticket');
            const popupPostElement = document.getElementById('popup-post');
            const popupStepsElement = document.getElementById('popup-steps');
            const popupPersyaratanElement = document.getElementById('popup-persyaratan');
            const popupImageElement = document.querySelector('.popup-mission-image'); // Select the image element
            const popupProcessingTimeElement = document.getElementById(
                'popup-processing-time'); // Elemen untuk waktu pemrosesan
            const popupRemainingDaysElement = document.getElementById('popup-remaining-days'); // Elemen untuk sisa waktu
            const popupEndedDateElement = document.getElementById('popup-ended-date');
            const popupActionButton = document.querySelector('.action-button');


            // Set teks pada elemen popup
            if (popupTitleElement) popupTitleElement.textContent = title;
            if (popupPriceElement) popupPriceElement.textContent = price;
            if (popupDetailsElement) popupDetailsElement.textContent = details;
            if (popupTicketElement) popupTicketElement.textContent = ticket;
            if (popupPostElement) popupPostElement.textContent = post;
            if (popupStepsElement) popupStepsElement.textContent = steps;
            if (popupPersyaratanElement) popupPersyaratanElement.innerHTML = persyaratan;
            if (popupImageElement) popupImageElement.src = imageSrc; // Set the image source

            // Set waktu pemrosesan dan sisa waktu
            if (popupProcessingTimeElement) popupProcessingTimeElement.textContent = processingTime; // Set waktu pemrosesan
            if (popupRemainingDaysElement) popupRemainingDaysElement.textContent = `${remainingDays}`; // Set sisa waktu
            if (popupEndedDateElement) popupEndedDateElement.textContent = endedDate;
            popupActionButton.textContent = missionType;

            // Update tombol action button
            // const popupActionButton = document.querySelector('.action-button');
            // popupActionButton.textContent = missionType; // Set the action button text

            // Update hidden input pada form dengan id_exciting_mission yang sesuai
            const missionForm = document.querySelector('form input[name="exciting_mission_id"]');
            if (missionForm) {
                missionForm.value = idExcitingMission;
            }

            document.getElementById('popup-overlay').style.display = 'flex';
            document.getElementById('popup-overlay-diambil').style.display = 'none';
        }

        function showDetailsDiambil(cardLink) {
            const missionType = cardLink.getAttribute('data-details-diambil').split(',')[
                0]; // Mengambil mission_type dari data-details

            const title = cardLink.getAttribute('data-title-diambil');
            const price = cardLink.getAttribute('data-price-diambil');
            const details = cardLink.getAttribute('data-details-diambil');
            const ticket = cardLink.getAttribute('data-ticket-diambil');
            const post = cardLink.getAttribute('data-post-diambil');
            const steps = cardLink.getAttribute('data-steps-diambil');
            const persyaratan = cardLink.getAttribute('data-persyaratan-diambil');
            const imageSrc = cardLink.getAttribute('data-image-diambil');
            const processingTime = cardLink.getAttribute('data-processing-time-diambil');
            const remainingDays = cardLink.getAttribute('data-remaining-days-diambil'); // Ambil sisa waktu
            const endedDate = cardLink.getAttribute('data-ended-date-diambil');
            const idExcitingMission = cardLink.getAttribute('data-id-exciting-mission-diambil'); // Mengambil ID misi

            const popupTitleElement = document.getElementById('popup-title-diambil');
            const popupPriceElement = document.getElementById('popup-price-diambil');
            const popupDetailsElement = document.getElementById('popup-details-diambil');
            const popupTicketElement = document.getElementById('popup-ticket-diambil');
            const popupPostElement = document.getElementById('popup-post-diambil');
            const popupStepsElement = document.getElementById('popup-steps-diambil');
            const popupPersyaratanElement = document.getElementById('popup-persyaratan-diambil');
            const popupImageElement = document.querySelector('.popup-mission-image-diambil');
            const popupProcessingTimeElement = document.getElementById(
                'popup-processing-time-diambil'); // Elemen untuk waktu pemrosesan
            const popupRemainingDaysElement = document.getElementById(
                'popup-remaining-days-diambil'); // Elemen untuk sisa waktu
            const popupEndedDateElement = document.getElementById('popup-ended-date-diambil');
            const popupActionButton = document.querySelector('.action-button-diambil');

            // Set teks pada elemen popup
            if (popupTitleElement) popupTitleElement.textContent = title;
            if (popupPriceElement) popupPriceElement.textContent = price;
            if (popupDetailsElement) popupDetailsElement.textContent = details;
            if (popupTicketElement) popupTicketElement.textContent = ticket;
            if (popupPostElement) popupPostElement.textContent = post;
            if (popupStepsElement) popupStepsElement.textContent = steps;
            if (popupPersyaratanElement) popupPersyaratanElement.innerHTML = persyaratan;
            if (popupImageElement && imageSrc) {
                popupImageElement.src = imageSrc;
            }

            // Set waktu pemrosesan dan sisa waktu
            if (popupProcessingTimeElement) popupProcessingTimeElement.textContent = processingTime; // Set waktu pemrosesan
            if (popupRemainingDaysElement) popupRemainingDaysElement.textContent = `${remainingDays}`; // Set sisa waktu
            if (popupEndedDateElement) popupEndedDateElement.textContent = endedDate;
            popupActionButton.textContent = missionType;

            // console.log('Persyaratan:', persyaratan);

            // Update tombol action button
            // const popupActionButton = document.querySelector('.action-button-diambil');
            // popupActionButton.textContent = missionType; // Set the action button text
            // Update link untuk unggah bukti pekerjaan
            const uploadLink = document.querySelector('#upload-link'); // Pastikan ID ini sesuai dengan elemen di HTML
            if (uploadLink) {
                uploadLink.href = `/bukti_pekerjaan/${idExcitingMission}`; // Set the correct link with exciting mission ID
            }

            // const inputMissionId = document.querySelector('input[name="id_exciting_mission"]'); // Ambil input hidden untuk id_exciting_mission
            // if (inputMissionId) {
            //     inputMissionId.value = idExcitingMission; // Set nilai input hidden
            // }

            document.getElementById('popup-overlay-diambil').style.display = 'flex';
            document.getElementById('popup-overlay').style.display = 'none';
        }

        document.addEventListener('DOMContentLoaded', () => {
            const cardLinksTersedia = document.querySelectorAll('#misi-tersedia .card-link');
            const cardLinksDiambil = document.querySelectorAll('#misi-diambil .card-link');

            cardLinksTersedia.forEach(cardLink => {
                cardLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    showDetailsTersedia(cardLink);
                });
            });

            cardLinksDiambil.forEach(cardLink => {
                cardLink.addEventListener('click', (e) => {
                    e.preventDefault();
                    showDetailsDiambil(cardLink);
                });
            });
        });

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

        // Filter

        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-button');
            const cards = document.querySelectorAll('.card-link');

            // Fungsi untuk menampilkan semua misi saat halaman dibuka
            function showAllMissions() {
                cards.forEach(card => {
                    card.style.display = 'block'; // Menampilkan semua misi
                });
            }

            // Event listener untuk setiap tombol filter
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const type = this.getAttribute('data-type');

                    // Mengatur semua tombol filter ke non-aktif
                    filterButtons.forEach(btn => {
                        btn.classList.remove('active');
                    });

                    // Mengatur tombol yang diklik ke aktif
                    this.classList.add('active');

                    // Menampilkan misi berdasarkan jenis filter
                    cards.forEach(card => {
                        const missionType = card.getAttribute('data-mission-type');
                        const missionTypeDiambil = card.getAttribute(
                            'data-mission-type-diambil');

                        // Cek apakah tipe filter adalah "Semua"
                        if (type === 'Semua') {
                            card.style.display = 'block'; // Menampilkan semua misi
                        } else if (missionType === type || missionTypeDiambil === type) {
                            card.style.display = 'block'; // Menampilkan misi yang cocok
                        } else {
                            card.style.display =
                                'none'; // Menyembunyikan misi yang tidak cocok
                        }
                    });
                });
            });

            // Menampilkan semua misi saat halaman dimuat
            showAllMissions();
        });


        // Filter

        // function showDetailsDiambil(cardLink) {
        //     const title = cardLink.getAttribute('data-title');
        //     const price = cardLink.getAttribute('data-price');
        //     const details = cardLink.getAttribute('data-details');
        //     const ticket = cardLink.getAttribute('data-ticket');
        //     const post = cardLink.getAttribute('data-post');
        //     const persyaratan = cardLink.getAttribute('data-persyaratan');

        //     const popupTitleElement = document.getElementById('popup-title-diambil');
        //     const popupPriceElement = document.getElementById('popup-price-diambil');
        //     const popupDetailsElement = document.getElementById('popup-details-diambil');
        //     const popupTicketElement = document.getElementById('popup-ticket-diambil');
        //     const popupPostElement = document.getElementById('popup-post-diambil');
        //     const popupPersyaratanElement = document.getElementById('popup-persyaratan-diambil');

        //     if (popupTitleElement) popupTitleElement.textContent = title;
        //     if (popupPriceElement) popupPriceElement.textContent = price;
        //     if (popupDetailsElement) popupDetailsElement.textContent = details;
        //     if (popupTicketElement) popupTicketElement.textContent = ticket;
        //     if (popupPostElement) popupPostElement.textContent = post;
        //     if (popupPersyaratanElement) popupPersyaratanElement.innerHTML = persyaratan;

        //     document.getElementById('popup-overlay-diambil').style.display = 'flex';
        //     document.getElementById('popup-overlay').style.display = 'none';
        // }


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
