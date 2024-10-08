<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @push('styles')
        {{-- style buat Form Lamar Pekerjaan --}}
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
                height: 100vh;
                position: relative;
            }

            .header {
                position: relative;
                padding: 16px;
                text-align: center;
                border-bottom: 8px solid #eee;
            }

            .back-button {
                position: absolute;
                top: 16px;
                left: 16px;
                border: none;
                padding: 8px;
                cursor: pointer;
                margin-right: 10px;
                background: none;
                margin-top: 20px;
            }

            .title {
                font-size: 14px;
                margin: 0;
                color: #424242;
                margin-top: 30px;
                margin-bottom: 20px;
            }

            .info {
                background-color: #E7F3FF;
                padding: 10px 20px;
                border-radius: 10px;
                margin: 20px;
                font-size: 14px;
                color: #257AAA;
                text-align: left;
            }

            .info a {
                color: #257AAA;
                text-decoration: none;
            }

            .upload-container {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .upload-container {
                border: 1px solid #ccc;
                padding: 40px;
                border-radius: 10px;
                margin: 20px;
                cursor: pointer;
                display: flex;
                /* Use flexbox */
                flex-direction: column;
                /* Stack items vertically */
                justify-content: center;
                /* Center items vertically */
                align-items: center;
                /* Center items horizontally */
                text-align: center;
                position: relative;
                /* Ensure position for file input works */
                transform: translateY(-20px);
            }

            .upload-container .upload-icon {
                width: 26px;
                height: 26px;
                margin-bottom: 10px;
                /* Add spacing between icon and title */
            }

            .upload-title h2 {
                font-size: 14px;
                font-weight: 500;
                color: #000000;
                margin-left: 25px;
                margin-top: 20px;
            }

            .upload-text {
                font-size: 12px;
                font-weight: 400;
                color: #10ABCF;
            }

            .upload-container input[type="file"] {
                opacity: 0;
                position: absolute;
                top: 10px;
                left: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }

            .custom-swal-popup {
                width: 400px;
                padding: 20px;
                border-radius: 16px;
            }

            .custom-swal-title {
                font-size: 18px;
                font-weight: bold;
            }


            .swal2-html_container {
                font-size: 140px;
                color: #979797;
            }

            .custom-swal-confirm-button {
                background-color: #00bcd4;
                color: #fff;
                border-radius: 12px;
                padding: 10px 20px;
                font-size: 14px;
            }

            .custom-swal-cancel-button {
                background-color: #f44336;
                color: #fff;
                border-radius: 12px;
                padding: 10px 20px;
                font-size: 14px;
            }

            .custom-swal-confirm-button:hover {
                background-color: #0097a7;
            }

            .custom-swal-cancel-button:hover {
                background-color: #d32f2f;
            }

            .footer {
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: -5px 15px;
                border-top: 1px solid #e0e0e0;
                background-color: #fff;
                width: 100%;
                max-width: 480px;
                position: fixed;
                bottom: 0;
                z-index: 1000;
                box-sizing: border-box;
                height: 100px;
            }

            .footer-button {
                background-color: #10ABCF;
                color: white;
                padding: 14px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                width: calc(100% - 40px);
                font-size: 16px;
                text-align: center;
            }

            .footer-button:hover {
                background-color: #0b89b1;
            }
        </style>

        <style>
            .content-wrapper-misi-seru {
                flex: 1;
                overflow-y: auto;
                padding-bottom: 60px;
            }

            /* header-misi-seru */
            .header-misi-seru {
                background-color: #fff;
                padding: 15px;
                border-top-left-radius: 16px;
                border-top-right-radius: 16px;
                display: flex;
                align-items: center;
                border-bottom: 1px solid #ddd;
                margin-top: 8%;
            }

            .header-misi-seru .back-button-misi-seru {
                background: none;
                border: none;
                cursor: pointer;
                padding: 0;
                margin-right: 10px;
                margin-top: 5px;
            }

            .header-misi-seru .back-button-misi-seru img {
                width: 20px;
                height: 20px;
            }

            .header-misi-seru .location {
                display: flex;
                flex-direction: column;
                justify-content: center;
            }

            .header-misi-seru .location-title-misi-seru {
                display: flex;
                align-items: center;
            }

            .header-misi-seru .location-title-misi-seru span {
                font-size: 15px;
                color: #2D2D2D;
                font-weight: bold;
            }

            .misi-section-misi-seru {
                overflow: auto;
                scrollbar-width: none;
                -ms-overflow-style: none;
                height: calc(100vh - 120px);
                padding: 0 20px;
                overflow-x: hidden;
            }

            .misi-section-misi-seru::-webkit-scrollbar {
                width: 0;
                height: 0;
            }

            .filter-buttons-misi-seru {
                display: flex;
                justify-content: space-between;
                margin-bottom: 10px;
                overflow-x: auto;
                scrollbar-width: none;
                padding: 0 20px;
                position: relative;
            }

            .filter-buttons-misi-seru::-webkit-scrollbar {
                width: 0;
                height: 0;
            }

            .filter-buttons-misi-seru button {
                padding: 10px 15px;
                background-color: #f5f6f6;
                border: 1px solid #ccc;
                border-radius: 30px;
                font-size: 12px;
                cursor: pointer;
                margin: 0 10px;
                flex-shrink: 0;
            }

            .filter-buttons-misi-seru button.active {
                background-color: #bfe9f2;
                color: #10ABCF;
                border: none;
                opacity: 90%;
            }

            .filter-buttons-misi-seru::after {
                content: '';
                position: absolute;
                bottom: -2px;
                left: 0;
                width: 100%;
                height: 2px;
                background-color: #ddd;
                transition: background-color 0.3s;
            }

            .filter-buttons-misi-seru .filter-icon {
                font-size: 20px;
                color: #8cc8e7;
                margin-right: 10px;
            }

            .separator-misi-seru {
                height: 1px;
                background-color: #ccc;
                margin: 8px 25px;
            }

            .mission-buttons-misi-seru {
                display: flex;
                justify-content: center;
                margin: 10px 0;
                position: relative;
            }

            .mission-buttons-misi-seru button {
                position: relative;
                background: none;
                border: none;
                font-size: 16px;
                color: #333;
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

            .mission-buttons-misi-seru::after {
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

            .title-misi-seru-section {
                text-align: left;
                padding: 0 18px;
                margin-bottom: 10px;
                margin-top: 15px;
            }

            .title-misi-seru-section span {
                font-size: 14px;
                font-weight: bold;
                color: #2D2D2D;
            }

            .title-misi-seru-section p {
                font-size: 13px;
                color: #979797;
                margin: 0;
            }

            .card-misi-seru-container {
                overflow-x: auto;
                scrollbar-width: none;
                -ms-overflow-style: none;
                padding-bottom: 60px;
            }

            .card-misi-seru-container::-webkit-scrollbar {
                width: 0;
                height: 0;
            }

            .card-misi-seru {
                background-color: #f8f8f8;
                border-radius: 15px;
                padding: 15px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

            .card-misi-seru::-webkit-scrollbar {
                width: 0;
                height: 0;
            }

            .card-misi-seru:hover {
                background-color: #e0e0e0;
                transform: scale(1.02);
            }

            .card-misi-seru .image {
                width: 60px;
                height: 60px;
                border-radius: 10px;
                overflow: hidden;
                position: absolute;
                top: 15px;
                left: 15px;
            }

            .card-misi-seru-link {
                text-decoration: none;
                display: block;
                color: inherit;
            }

            .card-misi-seru img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .card-misi-seru .content {
                margin-left: 80px;
                display: flex;
                flex-direction: column;
                flex-grow: 1;
            }

            .card-misi-seru .title-misi-seru {
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
                font-size: 14px;
                font-weight: bold;
                margin-bottom: 5px;
            }

            .card-misi-seru .price {
                font-size: 16px;
                color: #0FBE20;
                font-weight: bold;
                margin-bottom: 12px;
            }

            .card-misi-seru .details {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 10px;
            }

            .card-misi-seru .details .detail {
                background-color: #f0f0f0;
                padding: 5px 10px;
                border-radius: 20px;
                font-size: 12px;
                color: #333;
                margin-right: 5px;
            }

            .card-misi-seru .bookmark {
                cursor: pointer;
                position: absolute;
                top: 15px;
                right: 15px;
            }

            .card-misi-seru .bookmark svg {
                transition: stroke 0.3s ease, fill 0.3s ease;
            }

            .card-misi-seru .bookmark.active svg #bookmark-path {
                stroke: #79862f;
                fill: #7b852d;
            }

            .card-misi-seru .ticket {
                font-size: 12px;
                color: #666;
                margin-top: 5px;
                margin-left: -80px;
            }

            .card-misi-seru .post {
                font-size: 12px;
                color: #666;
                position: absolute;
                bottom: 15px;
                right: 15px;
            }

            .card-misi-seru .bottom-left {
                position: absolute;
                bottom: 15px;
                left: 15px;
                font-size: 12px;
                color: #666;
            }

            .footer-misi-seru {
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

            .footer-misi-seru a {
                text-decoration: none;
                color: #000;
            }

            .footer-misi-seru div {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                text-align: center;
                cursor: pointer;
                font-size: 12px;
            }

            .footer-misi-seru div i {
                font-size: 24px;
                margin-bottom: 5px;
            }

            .img-profil-misi-seru {
                width: 32px;
                height: 32px;
                border-radius: 50%;
            }

            .footer-misi-seru img {
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

            .custom-popup .swal2-title-misi-seru {
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

            .mission-header-misi-seru,
            .mission-header-misi-seru-diambil {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
                margin-top: 0;
            }

            .popup-header-misi-seru,
            .popup-header-misi-seru-diambil {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                margin-top: 0;
            }

            .popup-header-misi-seru-info,
            .popup-header-misi-seru-info-diambil {
                flex: 1;
                margin-bottom: -30px;
            }

            #popup-title-misi-seru,
            #popup-title-misi-seru-diambil {
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

            .popup-content .card-misi-seru,
            .popup-content .card-misi-seru-diambil {
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

            .popup-persyaratan .persyaratan-title-misi-seru,
            .popup-persyaratan-diambil .persyaratan-title-misi-seru-diambil {
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

            .popup-program-info-card-misi-seru,
            .popup-program-info-card-misi-seru-diambil {
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

            .popup-program-info-card-misi-seru p,
            .popup-program-info-card-misi-seru-diambil p {
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
    @endpush

    <!-- cdn leaflet -->
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
</head>
