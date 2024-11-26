<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @push('styles')
        <!-- CSS untuk add alamat, edit nama, edit username, dan edit bio -->
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
                overflow-x: hidden;
                /* Prevent horizontal scroll */
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
                overflow: hidden;
            }

            .header {
                position: sticky;
                top: 0;
                z-index: 1;
                display: flex;
                align-items: center;
                padding-top: 20px;
                padding-left: 15px;
                background-color: #fff;
                border-bottom: 1px solid #ddd;
            }

            .header h2 {
                flex: 1;
                text-align: center;
                font-size: 16px;
                font-weight: 600;
                margin-left: -40px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .header-two {
                position: sticky;
                top: 0;
                z-index: 1;
                display: flex;
                align-items: center;
                padding-top: 20px;
                padding-left: 15px;
                background-color: #fff;
            }

            .header-two h2 {
                flex: 1;
                text-align: center;
                font-size: 16px;
                font-weight: 600;
                margin-left: -40px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .back-button {
                border: none;
                padding: 8px;
                cursor: pointer;
                bottom: -10px;
                margin-right: 10px;
                background: none;
            }

            .header {
                position: sticky;
                top: 0;
                z-index: 1;
                display: flex;
                align-items: center;
                padding-top: 20px;
                padding-left: 15px;
                background-color: #fff;
                border-bottom: 1px solid #ddd;
            }

            .header h2 {
                flex: 1;
                text-align: center;
                font-size: 16px;
                font-weight: 600;
                margin-left: -40px;
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .back-button {
                border: none;
                padding: 8px;
                cursor: pointer;
                bottom: -10px;
                margin-right: 10px;
                margin-left: -10px;
                background: none;
            }


            .warning-card {
                padding: 10px;
                background-color: #DCF2FF;
                border: 1px solid #B2E3FF;
                border-radius: 8px;
                color: #257AAA;
                font-size: 14px;
                display: flex;
                align-items: flex-start;
                margin-top: 20px;
                margin-bottom: 20px;
                width: calc(100% - 20px);
                margin-left: auto;
                margin-right: auto;
            }

            .warning-card p {
                margin: 0;
            }

            .warning-icon2 {
                width: 44px;
                height: 44px;
                margin-right: 10px;
                margin-top: 4px;
            }

            .warning-icon {
                width: 24px;
                height: 24px;
                margin-right: 10px;
                margin-top: 23px;
            }

            .warning-icon-number {
                width: 26px;
                height: 26px;
                margin-right: 10px;
                margin-top: 9px;
                display: flex;
                align-items: center;
            }

            .warning-icon-img {
                width: 90%;
                height: 90%;
                object-fit: contain;
            }

            .warning-icon2-img {
                width: 90%;
                height: 90%;
                object-fit: contain;
            }

            .card {
                padding: 20px;
            }

            .form-group {
                margin-bottom: -10px;
                margin-top: 20px;
                padding: 0 10px;
            }

            .form-group-two {
                margin-bottom: -10px;
                margin-top: 2px;
                padding: 0 10px;
            }

            .form-group label {
                font-size: 15px;
                font-weight: 400;
                color: #888;
                margin-bottom: 5px;
                margin-left: 5px;
                display: block;
            }

            .form-group p {
                font-size: 16px;
                font-weight: 500;
                margin-left: 5px;
                margin-bottom: 15px;
            }

            .form-group input {
                width: calc(104% - 30px);
                padding: 15px;
                font-size: 16px;
                color: #333;
                border-radius: 8px;
                box-sizing: border-box;
                margin-top: 13px;
                margin-left: 5px;
                margin-right: 5px;
                border: 0px solid #ddd;
                background-color: #f5f5f5;
            }

            .form-group-two input {
                width: calc(104% - 30px);
                padding: 15px;
                font-size: 16px;
                color: #333;
                border-radius: 8px;
                box-sizing: border-box;
                margin-top: 13px;
                margin-left: 5px;
                margin-right: 5px;
                border: 0px solid #ddd;
                background-color: #f5f5f5;
            }

            .address-checkbox-container {
                display: flex;
                align-items: flex-start;
                gap: 10px;
                padding: 10px;
                margin-top: -10px;
                margin-bottom: 10px;
                font-size: 14px;
                line-height: 1.5;
            }

            .address-checkbox-container input[type="checkbox"] {
                width: 26px;
                height: 26px;
                margin-top: 6px;
                margin-left: 10px;
                color: #10ABCF;
            }

            .address-checkbox-container a {
                color: #10ABCF;
                text-decoration: none;
            }

            .address-checkbox-container a:hover {
                text-decoration: underline;
            }

            .form-group .address-input {
                width: 100%;
                padding: 15px 0;
                font-size: 16px;
                color: #333;
                background-color: transparent;
                border: none;
                border-bottom: 1px solid #ddd;
                box-sizing: border-box;
                margin-top: -10px;
                margin-bottom: 10px;
            }

            .form-group-two textarea {
                width: calc(104% - 30px);
                padding: 20px;
                font-size: 16px;
                font-weight: 400;
                color: #424242;
                border-radius: 8px;
                margin-top: 6px;
                margin-left: 5px;
                margin-right: 5px;
                background-color: #f5f5f5;
                height: 100px;
                resize: none;
                overflow: auto;
                border: 2px solid #ffff;
                box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
            }

            .input-container {
                position: relative;
                width: 100%;
            }

            .pinpoint-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #f9f9f9;
                border-radius: 10px;
                padding: 10px;
                border: 1px solid #e0e0e0;
                margin-bottom: 40px;
            }

            .pinpoint-left {
                display: flex;
                align-items: center;
            }

            .pinpoint-left span {
                color: #424242;
                font-size: 14px;
                font-weight: 400;
            }

            .pin-icon {
                color: #0FB4DA;
                font-size: 20px;
                margin-left: 2px;
                margin-right: 15px;
            }

            .change-button {
                color: #0FB4DA;
                text-decoration: none;
                font-size: 14px;
                margin-right: 5px;
                font-weight: 500;
            }

            .change-button:hover {
                text-decoration: underline;
            }

            #city-input {
                width: 100%;
                padding-right: 30px;
                font-size: 16px;
                color: #000;
            }

            .input-container::after {
                content: '›';
                /* Menggunakan simbol panah lebih ramping */
                position: absolute;
                right: 0px;
                top: 50%;
                transform: translateY(-50%);
                font-size: 24px;
                /* Ubah ukuran tanda panah */
                color: #979797;
            }

            .ubah-button {
                width: calc(98% - 20px);
                padding: 12px;
                background-color: #10ABCF;
                color: #fff;
                font-weight: 600;
                border-radius: 10px;
                border: none;
                cursor: pointer;
                margin-top: 40px;
                margin-left: 16px;
            }

            .terms-label {
                color: #979797;
            }

            .ubah-button:hover {
                background-color: #0c98b2;
            }

            .button-group .pin-button,
            .button-group .confirm-button {
                width: 100%;
                padding: 0px;
                font-size: 16px;
                border-radius: 10px;
                border: 10ABCF;
                cursor: pointer;
            }

            .pin-button,
            .confirm-button {
                width: 100%;
                height: 40px;
                font-size: 16px;
                top: 5px;
                font-weight: 500;
                border-radius: 10px;
                margin-bottom: 10px;
                border: none;
            }

            .pin-button {
                background-color: #fff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
                margin-top: 100px;
            }

            .pin-button:hover {
                background-color: #ffffff;
            }

            .confirm-button {
                background-color: #10ABCF;
                color: #fff;
            }

            .confirm-button:hover {
                background-color: #0c98b2;
            }
        </style>

        {{-- Css setting --}}
        <style>
            .setting-header {
                text-align: center;
                margin: 20px 0;
                position: sticky;
                top: 0;
                background-color: white;
                z-index: 999;
            }

            .setting-header h2 {
                font-size: 16px;
                color: #191919;
                font-weight: 500;
                margin: 0;
                padding: 10px 0;
            }

            .setting-profile {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 10px 20px;
                width: 100%;
                border-bottom: 10px solid #f5f5f5;
                background-color: white;
            }

            .setting-profile img {
                width: 48px;
                height: 48px;
                border-radius: 50%;
            }

            .setting-info-wrapper {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .setting-info {
                display: flex;
                flex-direction: column;
                align-items: center;
                gap: 5px;
            }

            .setting-info h4 {
                margin-left: -15px;
                font-size: 15px;
                font-weight: 500;
                color: #191919;
            }

            .setting-medal-icon {
                width: 10px;
                height: 10px;
                margin-right: 5px;
                vertical-align: middle;
            }

            /* .setting-info h4 {
                                                                                                    margin: 0;
                                                                                                    font-size: 16px;
                                                                                                    font-weight: 700;
                                                                                                } */

            .setting-info span {
                font-size: 12px;
                font-weight: 500;
                color: #979797;
            }

            .setting-balance {
                color: #10ABCF !important;
                font-weight: 500;
            }

            .setting-profile .setting-info .setting-balance {
                color: #10ABCF;
                font-weight: 500;
            }

            .setting-actions {
                display: flex;
                align-items: center;
            }

            .setting-action-button {
                padding: 8px 50px;
                background-color: #10ABCF;
                color: white;
                border: none;
                border-radius: 8px;
                font-size: 14px;
                cursor: pointer;
            }

            .setting-actions-seller {
                display: flex;
                align-items: center;
            }

            .setting-seller {
                display: flex;
                align-items: center;
                justify-content: space-between;
                /* Aligns the content in a row */
                padding: 15px 20px;
                background-color: #ffffff;
                /* Set background color to white */
                border: 1px solid #EDEDED;
                /* Light border */
                border-radius: 8px;
                /* Rounded corners */
                font-size: 16px;
                cursor: pointer;
                width: 100%;
                /* Makes the button take full width of the container */
            }

            .button-icon {
                margin-right: 10px;
                /* Space between the icon and text */
            }

            .button-text {
                flex-grow: 1;
                /* Allows the text to grow and take available space */
                text-align: center;
                /* Centers the text */
            }

            .button-arrow {
                color: #20C2E7;
                /* Blue color for the arrow */
                font-weight: bold;
                /* Makes the arrow stand out */
            }

            .setting-scrollable-section {
                padding: 15px;
                overflow-y: auto;
                flex: 1;
                scrollbar-width: none;
                -ms-overflow-style: none;
                max-height: 160vh;
                display: flex;
                flex-direction: column;
                /* Memastikan semua elemen di dalamnya teratur */
                box-sizing: border-box;
                position: relative;
            }

            .setting-scrollable-section::-webkit-scrollbar {
                display: none;
            }

            .setting-section {
                margin-top: -10px;
                padding-left: 15px;
            }

            .setting-section h3 {
                font-size: 16px;
                font-weight: bold;
                margin-bottom: 10px;
                font-family: "Inter", sans-serif;
                font-weight: 600;
            }

            .setting-section ul {
                padding: 0;
                list-style: none;
                margin: 0;
            }

            .setting-section ul li {
                display: flex;
                align-items: center;
                padding: 10px 0;
            }

            .setting-section ul li img {
                width: 24px;
                height: 24px;
                margin-right: 10px;
            }

            .setting-section ul li a span {
                font-size: 15px;
                font-family: "Inter", sans-serif;
                font-weight: 300;
            }

            .setting-section ul li a {
                text-decoration: none;
                color: #000;
                display: flex;
                align-items: center;
                width: 100%;
                padding: 10px 0;
            }

            .setting-section ul li a:hover {
                color: #f5f5f5;
            }

            .setting-section ul li a img {
                width: 24px;
                height: 24px;
                margin-right: 13px;
            }


            .setting-section ul li {
                position: relative;
            }

            .setting-section ul li::after {
                content: "";
                position: absolute;
                bottom: 0;
                left: 0;
                width: calc(100% - 15px);
                height: 1px;
                background-color: #e0e0e0;
            }

            .icon-container {
                position: relative;
                display: inline-block;
            }

            .notification-dot {
                position: absolute;
                top: -5px;
                left: -5px;
                width: 10px;
                height: 10px;
                background-color: red;
                border-radius: 50%;
                border: 2px solid white;
                z-index: 2;
            }

            /* .setting-border-thick {
                                                    gap: 20px;
                                                    padding-bottom: 20px;
                                                    width: 100%;
                                                    box-sizing: border-box;
                                                    flex-shrink: 0;
                                                } */

            .setting-border-thick {
                border-bottom: 10px solid #f5f5f5;
                width: calc(120% - 10px);
                margin-left: -20px;
                gap: 20px;
                margin-bottom: 20px;
            }

            .setting-border-thick:last-child {
                margin-bottom: 30px;
            }


            .setting-border-thick-two {
                border-bottom: 100px solid #ffffff;
                margin-left: -20px;
                position: sticky;
                margin-right: -20px;
                margin-bottom: 20px;
            }

            .logout-section {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .logout-button {
                padding: 10px 35%;
                background-color: #10ABCF;
                color: #fff;
                border: none;
                border-radius: 10px;
                cursor: pointer;
                font-size: 16px;
                font-weight: 500;
                margin-top: 10px;
            }
        </style>

        {{-- Wadah untuk pop-up slider address --}}
        <style>
            .slider-overlay {
                position: fixed;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 480px;
                background-color: rgb(255, 255, 255);
                display: none;
                justify-content: center;
                z-index: 1000;
                box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
            }

            .slider-overlay.active {
                display: block;
                bottom: 0;
            }

            .slider-content {
                width: 100%;
                max-width: 480px;
                background-color: #fff;
                padding: 20px;
                /* Increased padding for better spacing */
                border-radius: 20px 20px 0 0;
                box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
                max-height: 85vh;
                height: 60vh;
                overflow-y: auto;
            }

            /* Header untuk slider */
            .address-slider-header {
                font-size: 18px;
                color: #191919;
                text-align: center;
                border-bottom: 1px solid #e0e0e0;
                padding-bottom: 10px;
                margin-bottom: 20px;
            }

            /* Layout kotak pencarian */
            .search-card {
                display: flex;
                align-items: center;
                padding: 10px;
                /* Atur padding sesuai kebutuhan */
                background-color: transparent;
                border: none;
                box-shadow: none;
                padding: 10px 15px;
                cursor: pointer;
                margin-bottom: 10px;
                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }

            /* Ikon pencarian */
            .search-card img {
                width: 20px;
                height: 20px;
                margin-right: 10px;
            }

            .search-card-text {
                font-size: 16px;
                color: #000000;
                background: transparent;
                border: none;
                outline: none;
                width: 100%;
            }

            /* Tombol pilihan kota */
            .city-option {
                display: block;
                background: none;
                border: none;
                margin-left: -10px;
                padding: 10px 15px;
                font-size: 16px;
                color: #191919;
                text-align: left;
                cursor: pointer;
                width: 100%;
                transition: background-color 0.2s ease;
            }

            .city-option:hover {
                background-color: #f0f0f0;
            }

            .city-option:last-child {
                border-bottom: none;
                /* Menghilangkan border bawah pada item terakhir */
            }
        </style>


        {{-- style pinpoint map --}}
        <style>
            .map-container {
                height: 700px;
                width: 100%;
            }

            .address-info-container {
                display: flex;
                align-items: center;
                padding: 10px;
                margin-bottom: -10px;
                margin-top: 20px;
                font-size: 14px;
            }

            .pinpoint-icon {
                width: 22px;
                height: 22px;
                margin-left: 10px;
                margin-right: 10px;
                position: relative;
                top: -12px;
            }

            .address-description {
                color: #333;
                font-size: 16px;
                margin-top: -20px;
                line-height: 1.5;
            }
        </style>


        {{-- style link website --}}
        <style>
            .link-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 0;
                margin-bottom: 10px;
            }

            .link-list {
                margin-top: 20px;
                padding: 0 20px;
                /* Menambahkan jarak di pinggir kiri dan kanan */
            }

            .link-name {
                font-size: 16px;
                color: #000000;
                margin-left: 7px;
            }

            .link-url {
                flex-grow: 1;
                text-align: right;
            }

            .link-url a {
                font-size: 16px;
                color: #979797;
                /* Mengubah warna teks link menjadi #979797 */
                text-decoration: none;
            }

            .link-url a:hover {
                text-decoration: underline;
            }

            .link-item::after {
                content: '>';
                font-size: 16px;
                color: #979797;
                margin-left: 10px;
            }

            /* Kelas baru untuk garis pembatas */
            .divider {
                height: 1px;
                /* Tebal garis */
                background-color: #ddd;
                /* Warna garis */
                margin: 0 -30px;
                margin-bottom: 10px;
            }
        </style>


        {{-- style setting --}}
        <style>
            /* Mengatur tampilan tabs */
            .tabs {
                display: flex;
                justify-content: space-around;
                background-color: #fff;
                border-bottom: 1px solid #ddd;
            }

            .tabs button {
                flex: 1;
                padding: 13px 0;
                font-size: 16px;
                border: none;
                background-color: transparent;
                cursor: pointer;
            }

            .tabs button.active {
                border-bottom: 3px solid #10ABCF;
                color: #10ABCF;
            }

            /* Mengatur kontainer konten */
            .content-container {
                display: flex;
                width: 100%;
            }

            /* Mengatur tab-content agar bisa di-scroll tanpa scrollbar */
            .tab-content {
                flex: 1;
                min-height: 83vh;
                background-color: #f5f5f5;
                display: none;
                overflow-y: auto;
                scrollbar-width: none;
                /* Untuk Firefox */
                -ms-overflow-style: none;
                /* Untuk Internet Explorer dan Edge */
            }

            .tab-content::-webkit-scrollbar {
                display: none;
                /* Untuk Chrome, Safari, dan Opera */
            }

            .tab-content.active {
                display: block;
                /* Tampilkan tab aktif */
            }

            /* Mengatur tampilan item favorit */
            .favorite-item,
            .mission-item,
            .job-item {
                display: flex;
                align-items: center;
                padding: 15px;
                background-color: #ffffff;
                margin-bottom: 15px;
                border-radius: 8px;
                /* Menambahkan sudut melengkung */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                /* Menambahkan bayangan halus */
            }

            /* Mengatur gambar pada item */
            .favorite-item img,
            .mission-item img,
            .job-item img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                margin-right: 15px;
            }

            /* Mengatur teks judul */
            .favorite-item h3,
            .mission-item h4,
            .job-item h4 {
                font-size: 16px;
                font-weight: 400;
                margin-top: 10px;
                color: #000000;
            }

            /* Mengatur paragraf pada item favorit */
            .favorite-item p {
                font-size: 16px;
                color: #37A6BB;
                margin-top: -5px;
                font-weight: 700;
            }

            /* Mengatur konten misi */
            .mission-item .favorite-mission {
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                margin-right: 15px;
                /* Menambahkan jarak antara konten dan tombol bookmark */
            }

            .mission-item .reward p,
            .job-item .salary .salary {
                font-size: 16px;
                font-weight: 500;
                color: #0FBE20;
            }

            /* Mengatur tombol bookmark */
            .bookmark-btn {
                cursor: pointer;
                font-size: 24px;
                color: #10ABCF;
            }

            /* Mengatur item pekerjaan */
            .favorite-jobs {
                display: flex;
                flex-direction: column;
                flex-grow: 1;
            }

            .verified-icon {
                color: #06b7db;
                font-size: 14px;
                margin-left: 6px;
                vertical-align: middle;
            }

            .company {
                display: flex;
                flex-direction: row;
                margin-top: 5px;
            }

            .company .company-name {
                font-size: 14px;
                margin: 0;
                margin-top: 2px;
                margin-right: 4px;
            }

            .company .address {
                font-size: 14px;
                color: #979797;
                margin: 0;
            }

            .salary {
                display: flex;
                flex-direction: row;
                font-size: 14px;
            }

            .salary .salary {
                font-size: 14px;
                font-weight: 500;
                color: #09A748;
            }

            .salary .per-month {
                font-size: 14px;
                font-weight: 500;
                margin-top: -1px;
                color: #979797;
            }

            /* Mengatur tiket */
            .tiket {
                display: flex;
                margin-top: -10px;
                align-items: center;
            }

            .tiket .avabile {
                font-size: 14px;
                font-weight: bold;
            }

            .tiket .kuota {
                font-size: 14px;
                color: #979797;
            }
        </style>

        <style>
            .header-myshop {
                position: sticky;
                top: 0;
                z-index: 1;
                display: flex;
                align-items: center;
                padding-top: 20px;
                padding-left: 15px;
                background-color: #fff;
                border-bottom: 1px solid #ddd;
            }

            .header-myshop h2 {
                flex: 1;
                text-align: left;
                font-size: 16px;
                font-weight: 600;
            }

            .myshop-scroll {
                position: fixed;
                height: 100vh;
                width: 100%;
                max-width: 480px;
                overflow-y: auto;
                scrollbar-width: none;
                /* Untuk Firefox */
                -ms-overflow-style: none;
                /* Untuk Internet Explorer dan Edge */
                margin-bottom: 0;
                padding-bottom: 25px;
                margin-top: 60px;
            }

            .myshop-scroll::-webkit-scrollbar {
                display: none;
                /* Untuk Chrome, Safari, dan Opera */
            }

            .info-myshop {
                display: flex;
                align-items: center;
                padding: 15px 20px;
                background-color: #fff;
                border-bottom: 15px solid #f5f5f5;
                margin-top: 15px;
                margin-bottom: 20px;
            }

            .info-myshop .avatar-myshop {
                width: 50px;
                height: 50px;
                border-radius: 50%;
                margin-right: 10px;
            }

            .info-myshop .info-text-myshop {
                display: flex;
                flex-direction: column;
                margin-right: 30px;
            }

            .name-seller-myshop {
                display: flex;
                align-items: center;
                margin-bottom: 5px;
            }

            .seller-level-icon-myshop {
                width: 18px;
                height: 18px;
                margin-right: 5px;
            }

            .info-myshop .name-myshop {
                font-size: 14px;
                font-weight: 600;
                margin: 0;
            }

            .info-myshop .saldo-myshop {
                display: flex;
                align-items: center;
                font-size: 12px;
                color: #979797;
            }

            .info-myshop .saldo-myshop img {
                margin-right: 5px;
                width: 16px;
                height: 16px;
            }

            .info-myshop .saldo-myshop p {
                margin: 0;
                line-height: 1;
            }

            .daftar-produk-myshop {
                padding: 20px;
                padding-top: 5px;
                background-color: #fff;
                border-bottom: 2px solid #f5f5f5;
                margin-bottom: 20px;
                display: flex;
                /* Gunakan flexbox untuk mengatur tata letak */
                justify-content: space-between;
                /* Buat jarak antara teks dan panah */
                align-items: center;
                /* Vertikal sejajar */
                position: relative;
            }

            .produk-jasa-text {
                display: flex;
                flex-direction: column;
            }

            .daftar-produk-myshop h3 {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 5px;
            }

            .daftar-produk-myshop .produk-count-myshop {
                font-size: 13px;
                margin-bottom: 10px;
                color: #979797;
                margin: 0;
            }

            .daftar-produk-myshop .arrow-right {
                width: 16px;
                /* Sesuaikan ukuran ikon panah */
                height: 16px;
            }


            .status-order-myshop {
                padding: 20px;
                background-color: #fff;
                border-bottom: 15px solid #f5f5f5;
                margin-bottom: 20px;
                justify-content: space-between;
                align-items: center;
            }

            .status-order-myshop h3 {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            .status-item-myshop {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: calc(25% - 10px);
                /* Mengatur lebar status menjadi 25% */
                background-color: #f5f5f5;
                border-radius: 8px;
                margin-bottom: 10px;
                padding: 5px;
                width: 100px;
                height: 90px;
            }

            .status-order-item-myshop {
                align-content: center;
                display: flex;
                flex-direction: row;
                gap: 10px;
                width: 100%
            }

            .status-count-myshop {
                margin-top: 5px;
                font-size: 16px;
                font-weight: 500;
            }

            .status-name-myshop {
                font-size: 11px;
                font-weight: 400;
                line-height: 15px;
            }

            .pengumuman-seller-myshop {
                padding: 20px;
                background-color: #fff;
                border-bottom: 15px solid #f5f5f5;
                margin-bottom: 20px;
            }

            .pengumuman-seller-myshop h3 {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            .pengumuman-seller-myshop .pengumuman-content-myshop {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .pengumuman-seller-myshop .pengumuman-item-myshop {
                display: flex;
                align-items: center;
                padding: 15px;
                background-color: #ffffff;
                margin-bottom: 15px;
                border-radius: 8px;
                /* Menambahkan sudut melengkung */
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                /* Menambahkan bayangan halus */
            }

            .pengumuman-seller-myshop .pengumuman-item-myshop img {
                width: 100px;
                height: 100px;
                object-fit: cover;
                margin-right: 15px;
            }

            .pengumuman-seller-myshop .pengumuman-item-myshop .pengumuman-text-myshop {
                display: flex;
                flex-direction: column;
                flex-grow: 1;
                margin-right: 15px;
                /* Menambahkan jarak antara konten dan tombol bookmark */
            }

            .pengumuman-seller-myshop .pengumuman-item-myshop .pengumuman-text-myshop h4 {
                font-size: 16px;
                font-weight: 600;
                margin: 0;
            }

            .pengumuman-seller-myshop .pengumuman-item-myshop .pengumuman-text-myshop p {
                font-size: 14px;
                color: #979797;
            }

            .menu-toko-myshop {
                padding: 10px 20px;
                /* Adjust padding for better alignment */
                background-color: #fff;
                border-bottom: 1px solid #ddd;
                margin-bottom: 20px;
            }

            .menu-toko-myshop h3 {
                font-size: 15px;
                font-weight: 400;
                color: #979797;
                /* Adjust color for 'Menu toko' */
                margin-bottom: 20px;
            }

            .menu-item-myshop {
                display: flex;
                align-items: center;
                padding: 12px 0;
                text-decoration: none;
                color: #000;
                /* Black text color */
                border-bottom: 1px solid #ddd;
                transition: background-color 0.3s;
            }

            .menu-item-myshop:hover {
                background-color: #f5f5f5;
                /* Hover effect */
            }

            .menu-item-myshop img {
                width: 20px;
                height: 20px;
                margin-right: 15px;
                /* Increased space between image and text */
            }

            .menu-item-myshop p {
                font-size: 14px;
                margin: 0;
            }

            .button-myshop {
                padding: 7px 15px;
                font-size: 14px;
                border-radius: 8px;
                border: none;
                cursor: pointer;
            }

            .button-myshop.primary {
                background-color: #ffffff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
            }

            .link-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 0;
                margin-bottom: 10px;
            }

            .link-list {
                margin-top: 20px;
                padding: 0 20px;
                /* Menambahkan jarak di pinggir kiri dan kanan */
            }

            .link-name {
                font-size: 16px;
                color: #000000;
                margin-left: 7px;
            }

            .link-url {
                flex-grow: 1;
                text-align: right;
                /* Menjadikan teks link rata kanan */
            }

            .link-url a {
                font-size: 16px;
                color: #979797;
                /* Mengubah warna teks link menjadi #979797 */
                text-decoration: none;
            }

            .link-url a:hover {
                text-decoration: underline;
            }

            .link-item::after {
                content: '>';
                font-size: 16px;
                color: #979797;
                margin-left: 10px;
            }

            /* Kelas baru untuk garis pembatas */
            .divider {
                height: 1px;
                /* Tebal garis */
                background-color: #ddd;
                /* Warna garis */
                margin: 0 -30px;
                margin-bottom: 10px;
            }

            .carousel-myshop {
                position: relative;
                width: 100%;
                margin-bottom: 10px;
            }

            .carousel {
                max-height: 300px;
                /* Sesuaikan tinggi banner */
                overflow: hidden;
            }

            .carousel-item img {
                object-fit: cover;
                /* Menutupi seluruh area gambar */
                height: 100%;
                /* Menyesuaikan tinggi slider */
            }

            .carousel-inner {
                background-color: transparent;
                /* Menghapus background putih */
            }

            .carousel-myshop .carousel-item.active {
                opacity: 1;
            }

            .carousel-myshop .carousel-item.prev,
            .carousel-myshop .carousel-item.next {
                opacity: 0.5;
            }

            .carousel-myshop .carousel-control-prev,
            .carousel-myshop .carousel-control-next {
                position: absolute;
                top: 50%;
                transform: translateY(-50%);
                z-index: 1;
                background-color: rgba(0, 0, 0, 0.3);
                border-radius: 50%;
                width: 30px;
                height: 30px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
                display: none;
                /* Sembunyikan kontrol carousel */
            }

            .carousel-myshop .carousel-control-prev {
                left: 10px;
            }

            .carousel-myshop .carousel-control-next {
                right: 10px;
            }

            .carousel-myshop .carousel-control-prev i,
            .carousel-myshop .carousel-control-next i {
                color: #fff;
                font-size: 18px;
            }
        </style>




        <!--Css Voucher--->
        <style>
            /*======================================================================================*/
            /*                                        VOUCHER                                      */
            /*======================================================================================*/
            .voucher-header {
                position: fixed;
                top: 0;
                width: 100%;
                max-width: 480px;
                height: 60px;
                background-color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                /* Memastikan konten di tengah */
                padding: 25px 16px 15px 16px;
                z-index: 10;
            }

            .voucher-header img {
                width: 6px;
                height: 13px;
            }

            .voucher-header h1 {
                font-size: 15px;
                font-weight: 600;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
                flex-grow: 1;
                /* Allow the h1 to take the available space */
                text-align: center;
                /* Center the text within its available space */
            }

            .voucher-filter-buttons {
                display: flex;
                position: fixed;
                justify-content: space-around;
                background: white;
                margin-top: 60px;
                width: 100%;
                max-width: 480px;
                height: 48px;
                border-bottom: 1.5px solid #EDEDED
            }

            .voucher-filter-buttons button {
                padding: 15px 10px;
                background: none;
                border: none;
                font-size: 14px;
                font-weight: 400;
                color: #424242;
                cursor: pointer;
                position: relative;
                width: 50%;
            }

            .voucher-filter-buttons button.active {
                color: #10ABCF;
                font-weight: bold;
            }

            .voucher-filter-buttons button.active::after {
                content: '';
                width: 100%;
                height: 2px;
                background-color: #10ABCF;
                position: absolute;
                bottom: 0;
                left: 0;
            }

            .voucher-content {
                flex-grow: 1;
                padding-top: 108px;
                margin-bottom: 100px;
                overflow-y: scroll;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .voucher-card {
                display: flex;
                flex-direction: column;
                height: 150px;
                padding: 15px 16px;
                background-color: #fff;
            }

            .voucher-card>div {
                display: flex;
                justify-content: space-between;
            }

            .voucher-image {
                width: 70px;
                height: 70px;
                border-radius: 10px;
                object-fit: cover;
                margin-right: 5px;
            }

            .voucher-atribut {
                flex-grow: 1;
                margin-left: 5px;
                line-height: 15px;
            }

            .voucher-atribut h2 {
                font-size: 12px;
                font-weight: 400;
                margin: 0;
                color: #000000;
            }

            .voucher-atribut p {
                font-size: 10px;
                font-weight: 400px;
                color: #979797;
                margin: 0;
            }

            .voucher-atribut-details {
                display: flex;
                flex-direction: row;
                justify-content: left;
                text-align: left;
            }

            .voucher-atribut-details p {
                width: 100px;
            }

            .voucher-tag {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 5px 10px;
                border-radius: 10px;
                font-size: 9px;
                font-weight: 400;
                color: white;
                height: 18px;
            }

            .voucher-tag-active {
                background-color: green;
            }

            .voucher-tag-finished {
                background-color: #F5F5F5;
                color: #979797;
            }

            .voucher-actions {
                display: flex;
                gap: 10px;
                width: 100%;
                margin-top: 10px;
                /* Menghapus justify-content untuk kontrol manual */
            }

            .voucher-actions button {
                padding: 10px;
                font-size: 12px;
                border-radius: 10px;
                border: 1px solid #ddd;
                cursor: pointer;
                background: none;
            }

            /* Tombol dengan lebar setengah */
            .voucher-actions .half-width {
                flex: 0 0 48%;
                /* Mengatur tombol menjadi 48% dari lebar kontainer */
            }

            /* Tombol dengan lebar penuh */
            .voucher-actions .full-width {
                width: 100%;
            }

            .voucher-actions .btn-primary {
                color: #10ABCF;
                border-color: #10ABCF;
            }

            .voucher-actions .btn-secondary {
                color: #999;
                border-color: #ddd;
            }


            .voucher-footer {
                position: fixed;
                bottom: 0;
                width: 100%;
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
                display: flex;
                justify-content: center;
                align-items: center;
                text-align: center;
            }

            /* Menghilangkan garis bawah pada teks di dalam link */
            .voucher-footer a {
                text-decoration: none;
            }

            /* Popup Styles */
            .voucher-confirmation-popup {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                background-color: #fff;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0px 8px 16px rgba(0, 0, 0, 0.2);
                z-index: 1000;
                width: 90%;
                max-width: 400px;
                text-align: center;
                animation: fadeIn 0.3s ease;
            }

            .hidden {
                display: none;
            }

            .popup-content h2 {
                font-size: 18px;
                margin-bottom: 10px;
                font-weight: bold;
                color: #333;
            }

            .popup-content p {
                font-size: 14px;
                margin-bottom: 20px;
                color: #666;
            }

            .popup-buttons {
                display: flex;
                justify-content: space-between;
                width: 100%;
            }

            .btn-secondary,
            .btn-danger {
                padding: 10px 20px;
                border: none;
                border-radius: 8px;
                font-size: 14px;
                cursor: pointer;
            }

            .btn-secondary {
                background-color: #00bcd4;
                color: white;
            }

            .btn-danger {
                background-color: #e74c3c;
                color: white;
            }

            @keyframes fadeIn {
                from {
                    opacity: 0;
                    transform: translate(-50%, -60%);
                }

                to {
                    opacity: 1;
                    transform: translate(-50%, -50%);
                }
            }

            /* Disable body scroll when popup is open */
            .no-scroll {
                overflow: hidden;
            }

            /* Sembunyikan popup */
            .hidden {
                display: none;
            }
        </style>
        <style>
            /* html,
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            body {
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                height: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                width: 100%;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                margin: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                padding: 0;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                font-family: "Inter", sans-serif;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                background-color: #f5f5f5;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                display: flex;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                justify-content: center;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                align-items: flex-start;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                min-height: 100vh;
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            } */

            .mobile-container-rekening {
                width: 100%;
                max-width: 480px;
                background-color: #F5F5F5;
                display: flex;
                flex-direction: column;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                min-height: 100vh;
                scrollbar-width: none;
                /* Firefox */
                -ms-overflow-style: none;
                /* IE and Edge */
            }

            .mobile-container-rekening::-webkit-scrollbar {
                display: none;
                /* Chrome, Safari, and Opera */
            }

            .mobile-container-rekening * {
                box-sizing: border-box;
            }

            @media (max-width: 480px) {
                .mobile-container-rekening {
                    width: 100vw;
                    max-width: 100vw;
                }
            }

            @media (min-width: 481px) {
                .mobile-container-rekening {
                    width: 480px;
                }
            }

            .back-button-voucher {
                border: none;
                padding: 8px;
                cursor: pointer;
                bottom: -10px;
                margin-right: 10px;
                margin-left: -10px;
                background: none;
            }

            .voucher-header-tambah {
                position: fixed;
                top: 0;
                width: 100%;
                max-width: 480px;
                height: 60px;
                background-color: white;
                display: flex;
                align-items: center;
                padding: 25px 16px 15px 16px;
                z-index: 10;
                border-bottom: 1px solid #E0E0E0;
                /* Garis tipis pada bagian bawah */
            }

            .voucher-header-tambah img {
                width: 6px;
                height: 13px;
                margin-right: 20px;
            }

            .voucher-header-tambah h1 {
                font-size: 15px;
                font-weight: 600;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
            }

            .voucher-content-tambah {
                flex-grow: 1;
                padding-top: 60px;
                margin-bottom: 100px;
                overflow-y: scroll;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            /* Hides scrollbar in WebKit browsers (Chrome, Safari) */
            .voucher-content-tambah::-webkit-scrollbar {
                display: none;
            }

            .voucher-section {
                /* margin-bottom: 24px; */
                padding: 15px 16px;
            }

            .voucher-section .voucher-name {
                display: flex;
                justify-content: space-between;
                align-items: center;
                /* Garis tipis pada bagian bawah */
            }

            .voucher-section .voucher-name h2 {
                font-size: 13px;
                font-weight: 500;
                color: #000000;
            }

            .voucher-section .voucher-label {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid #E0E0E0;
                /* Garis tipis pada bagian bawah */
            }

            .voucher-section .voucher-label h2 {
                font-size: 13px;
                font-weight: 500;
                color: #000000;
                margin-bottom: 10px;
            }

            .voucher-section .char-counter {
                font-size: 12px;
                color: #707070;
            }

            .voucher-section .voucher-input {
                margin-top: 4px;
            }

            .voucher-section .voucher-input input {
                flex-grow: 1;
                font-size: 14px;
                width: 100%;
                color: #333;
                border: none;
                outline: none;
            }

            .voucher-section .voucher-input input::placeholder {
                color: #B0B0B0;
            }

            /* Border bawah pada Pengaturan Voucher */
            .voucher-section-border {
                border-bottom: 1px solid #E0E0E0;
                padding-bottom: 16px;
            }

            .select-button {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 11px;
                color: #979797;
                border: none;
                background-color: transparent;
                width: 100%;
                margin: 0;
                cursor: pointer;
                height: 38px;
                padding-top: 10px;
                /* padding-bottom: 0; */
            }

            .select-button h2,
            .select-button span {
                line-height: 1;
            }

            .select-button h2 {
                color: #000000;
                font-size: 14px;
                font-weight: 500;
            }

            /* Gaya untuk pop-up */
            .popup-tambah-voucher {
                display: none;
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                justify-content: center;
                align-items: center;
                z-index: 11;
            }

            .popup-tambah-voucher-content {
                background-color: white;
                padding: 20px;
                width: 300px;
                border-radius: 10px;
            }

            #searchBox {
                width: 100%;
                padding: 10px;
                margin-bottom: 10px;
                border: 1px solid #ccc;
                border-radius: 5px;
            }

            #productList {
                list-style: none;
                padding: 0;
            }

            .product-item {
                padding: 10px;
                border-bottom: 1px solid #ddd;
                cursor: pointer;
            }

            .product-item:hover {
                background-color: #f0f0f0;
            }


            .input-inline {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-top: 8px;
                margin-bottom: 24px;
                /* Tambahkan jarak antar elemen */
            }

            .input-inline:last-child {
                margin-bottom: 0;
                /* Hilangkan jarak pada elemen terakhir */
            }


            .input-inline span {
                font-size: 14px;
                color: #333;
            }

            .input-box {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 122px;
                height: 35px;
                padding: 10px;
                font-size: 11px;
                font-weight: 400;
                color: #EDEDED;
                border: 1px solid #EDEDED;
                border-radius: 5px;
            }

            .input-box input {
                border: none;
                outline: none;
                font-size: 11px;
                font-weight: 400;
                width: 80px;
                text-align: right;
            }

            .input-small {
                height: 35px;
                width: 62px;
                padding: 10px;
                border: 1px solid #EDEDED;
                border-radius: 8px;
                font-size: 11px;
                font-weight: 400;
                color: #333;
                text-align: center;

            }

            /* Menghilangkan spinner pada input type number untuk Webkit browser (Chrome, Safari, dll.) */
            input[type=number]::-webkit-inner-spin-button,
            input[type=number]::-webkit-outer-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            /* Menghilangkan spinner pada input type number untuk Firefox */
            input[type=number] {
                -moz-appearance: textfield;
            }

            .time-picker {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                padding: 12px 0;
                font-size: 14px;
                color: #333;
                cursor: pointer;
                /* position: relative; */
            }

            .time-picker label {
                flex-grow: 1;
            }

            .time-picker span {
                color: #A0A0A0;
                font-size: 12px;
                text-align: right;
                /* Menjaga agar teks tetap di sebelah kiri */
            }

            /* Pastikan overlay menutupi seluruh halaman */
            .modal {
                position: fixed;
                top: 50%;
                /* Pindahkan ke tengah vertikal */
                left: 50%;
                /* Pindahkan ke tengah horizontal */
                width: 100%;
                /* Lebar penuh untuk overlay */
                max-width: 480px;
                /* Lebar maksimum 480px untuk konten */
                height: 100vh;
                /* Tinggi penuh untuk overlay */
                background-color: rgba(0, 0, 0, 0.5);
                /* Warna gelap dengan transparansi */
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000;
                /* Memastikan modal berada di atas elemen lain */
                transform: translate(-50%, -50%);
                /* Menyelaraskan modal ke tengah */
            }


            /* Pastikan elemen konten modal tetap terlihat */
            .modal-content {
                background-color: white;
                padding: 20px;
                border-radius: 8px;
                text-align: center;
                z-index: 1001;
                /* Modal konten berada di atas overlay */
            }

            #date-picker,
            #time-picker {
                width: 100%;
                padding: 10px;
                margin: 10px 0;
                font-size: 16px;
            }

            #save-time {
                padding: 10px 20px;
                font-size: 16px;
                background-color: #4CAF50;
                color: white;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .separator {
                width: 100%;
                /* Full width */
                height: 10px;
                /* Adjust the height as needed */
                background-color: #f5f5f5;
                /* Light gray color */
            }
        </style>


        <!--css income-->
        <style>
            .balance-info-income {
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #f5f5f5;
                border-radius: 10px;
                padding: 10px;
            }

            .balance-name-income {
                font-size: 15px;
                font-weight: 400;
                color: #666;
                margin-bottom: 7px;
            }

            .balance-number-income {
                font-size: 15px;
                font-weight: 400;
                color: #666;
                margin-bottom: 7px;
            }

            .bank-info-income {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 15px;
                margin-top: -15px;
                margin-bottom: 15px;
                border-bottom: 12px solid #f0f0f0;
            }

            .bank-icon-income {
                width: 16px;
                height: 16px;
                margin-left: 01px;
            }

            .bank-text-income {
                flex: 1;
                margin: 0;
                color: #424242;
                font-size: 12px;
                font-weight: 400;
                margin-left: 12px;
            }

            .bank-arrow-income {
                content: " >";
                font-weight: 300;
                font-size: 18px;
                color: #ccc;
                margin-right: -2px;
                margin-top: 0px;
            }

            .transaction-header-income {
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid #EDEDED;

            }

            .transaction-header-income p {
                font-size: 14px;
                color: #979797;
                margin-left: 16px;
                font-weight: 400;
            }

            .transaction-item-income {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px 15px;
                width: 100%;
                border: 1px solid #EDEDED;
                background-color: white;
                cursor: pointer;
                border-radius: 6px;
                margin: 0;
                text-align: left;
                text-decoration: none;
                border: none;
            }

            .transaction-list-income {
                display: flex;
                flex-direction: column;
                padding: 0;
            }

            .transaction-item-income {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 12px 0;
                border-bottom: 1px solid #f0f0f0;
            }

            .transaction-item-income:last-child {
                border-bottom: none;
            }

            .transaction-icon-income {
                width: 18px;
                height: 18px;
                margin-top: -38px;
                margin-right: 10px;
                margin-left: 15px;
            }

            .transaction-detail-income {
                flex: 1;
            }

            .payment-description-income {
                font-size: 13px;
                font-weight: 400;
                color: #424242;
                margin: 0;
            }

            .payment-date-income {
                font-size: 12px;
                font-weight: 400;
                color: #979797;
                margin-top: 4px;
            }

            .transaction-amount-income {
                font-size: 15px;
                font-weight: normal;
                color: #0FBE20;
                display: flex;
                align-items: center;
                margin-right: 10px;
            }

            .transaction-amount-income-two {
                font-size: 15px;
                font-weight: normal;
                color: #D51313;
                display: flex;
                align-items: center;
                margin-right: 10px;
            }

            .transaction-amount-income:after {
                content: " >";
                font-weight: 300;
                font-size: 18px;
                color: #ccc;
                margin-left: 8px;
                margin-top: -4px;
            }

            .transaction-amount-income-two:after {
                content: " >";
                font-weight: 300;
                font-size: 18px;
                color: #ccc;
                margin-left: 8px;
                margin-top: -4px;
            }

            .saldo-section-income {
                background: none;
                padding: 20px;
            }

            .saldo-header-income {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .saldo-title-income {
                font-size: 15px;
                color: #666;
            }

            .saldo-amount-income {
                font-size: 18px;
                font-weight: 600;
                color: #10ABCF;
                margin: 8px 0;
            }

            .withdraw-button-income {
                padding: 8px 16px;
                background-color: #10ABCF;
                color: #FFFFFF;
                border: none;
                border-radius: 6px;
                cursor: pointer;
                font-size: 13px;
                font-weight: 400;
            }

            .see-more-link-income {
                font-size: 13px;
                font-weight: 400;
                text-decoration: none;
                padding: 20px;
                display: block;
                text-align: center;
                color: #10ABCF;
                margin-top: -10px;
                border-top: 1px solid #f0f0f0;
                border-bottom: 72px solid #f0f0f0;
                width: 100%;
            }

            .see-more-link-income:hover {
                text-decoration: underline;
            }

            .see-more-link-income:after {
                content: " >";
                font-weight: 300;
                font-size: 18px;
                color: #ccc;
                margin-left: 8px;
                margin-top: -4px;
            }
        </style>

        <style>
            /* Styling for the card */
            .filter-card {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #ffffff;
                padding: 10px 20px;
                border-bottom: 1px solid #EDEDED;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            /* Styling for the buttons */
            .filter-button {
                background-color: #F5F5F5;
                /* Light grey background */
                border: 1px solid #ffffff;
                /* White border */
                border-radius: 4px;
                /* Rounded corners */
                padding: 10px 70px;
                font-size: 14px;
                /* Font size of 14 pixels */
                font-weight: 400;
                /* Normal font weight */
                color: #424242;
                /* Dark grey text color */
                cursor: pointer;
                display: flex;
                align-items: center;
            }

            .filter-dropdown {
                display: none;
                position: fixed;
                background-color: #fff;
                border: 1px solid #dddddd;
                border-radius: 4px;
                width: 208px;
                margin-top: 5px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                z-index: 1000;
            }

            .dropdown-item {
                padding: 10px;
                cursor: pointer;
                color: #424242;
                font-size: 14px;
            }

            .dropdown-item:hover {
                background-color: #f5f5f5;
            }

            .filter-button+.filter-button {
                margin-left: 10px;
            }

            .arrow-down {
                font-size: 18px;
                font-weight: 100;
                color: #ccc;
                /* Light grey color for the arrow symbol */
                margin-left: 8px;
            }

            .filter-button:hover {
                background-color: #e0e0e0;
                /* Slightly darker grey background on hover */
                border-color: #cccccc;
                /* Slightly darker grey border on hover */
            }
        </style>

        <!--CSS Products and services-->
        <style>
            .products-services-button-container {
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid #ddd;
                margin-bottom: 20px;
            }

            .products-services-card-container {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                width: 100%;
                padding: 0 15px;
                max-height: calc(100vh - 250px);
                overflow-y: auto;
                scrollbar-width: none;
                margin-bottom: 20px;
                padding-bottom: 80px;
            }

            .products-services-card-container::-webkit-scrollbar {
                display: none;
            }

            .products-services-card {
                background-color: #fff;
                margin-bottom: 15px;
                display: flex;
                padding: 15px;
                box-sizing: border-box;
                min-height: 200px;
            }

            .products-services-card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
                margin-left: 10px;
            }

            .dividing-line {
                width: calc(100% + 15px);
                height: 20px;
                background-color: #EDEDED;
                margin-left: -7.5px;
            }

            .products-services-button {
                flex: 1;
                margin: 0;
                border: none;
                background-color: transparent;
                padding: 10px;
                border-bottom: 3px solid transparent;
                cursor: pointer;
            }

            .products-services-button.active {
                border-bottom: 3px solid #10ABCF;
            }

            .products-services-card img {
                width: 128px;
                height: 113px;
                margin-right: 10px;
            }

            .products-services-card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .products-services-card-title {
                font-size: 14px;
                font-weight: 400;
                color: #000000;
                margin-bottom: 5px;
            }

            .products-services-price {
                color: #37A6BB;
                font-size: 16px;
                font-weight: 700;
                margin-bottom: 10px;
            }

            .products-services-card-stats {
                display: flex;
                justify-content: flex-start;
            }

            .stat-group {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: space-between;
            }

            .stat-group div {
                display: flex;
                align-items: center;
                margin-top: -10px;
            }

            .stat-group div img {
                width: 16px;
                height: 16px;
            }

            .stat-group div span {
                font-size: 12px;
                color: #979797;
                font-weight: 400;
            }

            .stat-group-service {
                display: flex;
                flex-direction: column;
                gap: 10px;
                align-items: flex-start;
            }

            .stat-group-service div {
                display: flex;
                align-items: center;
                margin-top: 0;
            }

            .stat-group-service div img {
                width: 16px;
                height: 16px;
                margin-right: 8px;
            }

            .stat-group-service div span {
                font-size: 12px;
                color: #979797;
                font-weight: 400;
            }

            .form-group-foto {
                display: flex;
                flex-direction: column;
                border-bottom: 20px solid #F5F5F5;
                margin-bottom: 20px;
                background-color: #FFFFFF;
            }

            .label-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                margin-bottom: 15px;
                margin-left: 13px;
            }

            .form-group-foto label {
                font-size: 14px;
                font-weight: 400;
            }

            .aspect-ratio {
                font-size: 12px;
                color: #888;
                margin-right: 26px;
            }

            .upload-container {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .upload-products-services {
                border: 1px solid #EBEBEB;
                padding: 10px;
                text-align: center;
                border-radius: 8px;
                background-color: #F5F5F5;
                cursor: pointer;
                width: 80px;
                height: 80px;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                margin-left: 13px;
                margin-bottom: 20px;
                overflow: hidden;
                /* Menghindari gambar melampaui kotak */
            }

            .upload-products-services img.uploaded-image {
                width: 100%;
                height: 100%;
                object-fit: contain;
                /* Pastikan gambar tidak terpotong dan tetap di dalam kotak */
                border-radius: 8px;
            }

            .upload-products-services .upload-icon {
                width: 30px;
                height: 30px;
                opacity: 0.6;
            }

            .upload-products-services input[type="file"] {
                opacity: 0;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }

            /* Additional styles for form fields */
            .add-products-services-form-group {
                margin-bottom: 20px;
            }

            .char-count {
                font-size: 12px;
                color: #888;
                float: right;
            }

            /* Styling for fixed footer */
            .fixed-footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #fff;
                padding: 10px;
                box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            }

            .button-group-products-services {
                text-align: center;
            }

            .footer-button-primary {
                background-color: #28a745;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .products-services-card-button {
                display: flex;
                align-items: center;
                gap: 10px;
                margin-top: 10px;
                margin-left: 0;
                /* Reset margin */
                padding-left: 0;
                /* Ensure no padding is pushing it to the right */
            }

            .btn-primary {
                background-color: #fff;
                color: #191919;
                border: 1px solid #D5D5D5;
                border-radius: 5px;
                font-weight: 400;
                padding: 10px 40px;
                cursor: pointer;
                font-size: 14px;
            }

            .btn-secondary {
                background-color: #fff;
                color: #191919;
                border: 1px solid #D5D5D5;
                border-radius: 5px;
                font-weight: 400;
                padding: 10px 28px;
                font-size: 14px;
                flex-shrink: 0;
            }

            .btn-options {
                background-color: #fff;
                border: 1px solid #D5D5D5;
                border-radius: 5px;
                padding: 8px;
                width: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }

            .fixed-footer {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding: 20px;
                /* Menambah tinggi footer */
                border-top: 1px solid #EDEDED;
                z-index: 1000;
                max-width: 480px;
                margin: 0 auto;
            }

            .button-group-products-services {
                display: flex;
                flex-direction: column;
                width: 100%;
                gap: 10px;
            }

            .button-group-products-services a {
                text-decoration: none;
            }

            .footer-button-primary,
            .footer-button-secondary {
                width: 100%;
                padding: 10px;
                font-weight: 500;
                font-size: 14px;
                background-color: #ffffff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
                cursor: pointer;
                text-align: center;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                /* Memberikan jarak antara ikon dan teks */
            }

            .footer-button-primary:hover,
            .footer-button-secondary:hover {
                background-color: #1BA8D1;
                color: #FFFFFF;
            }

            .footer-button-primary2,
            .footer-button-secondary2 {
                width: 100%;
                padding: 10px;
                font-weight: 500;
                font-size: 14px;
                background-color: #10ABCF;
                color: #ffff;
                border: 1px solid #10ABCF;
                cursor: pointer;
                text-align: center;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }

            .footer-button-primary2:hover,
            .footer-button-secondary2:hover {
                background-color: #ffff;
                color: #1BA8D1;
            }

            .footer-button-primary img,
            .footer-button-secondary img {
                width: 20px;
                height: 20px;
            }

            @media (min-width: 481px) {
                .fixed-footer {
                    flex-direction: column;
                }

                .footer-button-primary,
                .footer-button-secondary {
                    width: 100%;
                }
            }

            .bold-text {
                font-weight: bold;
            }

            .voucher-sweetalert {
                background-color: white;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                border-radius: 10px;
                padding: 30px;
                max-width: 450px;
            }

            .voucher-sweetalert .swal2-title {
                font-size: 18px !important;
                font-weight: 600;
                text-align: center;
                color: #000;
            }

            .voucher-sweetalert .swal2-html-container {
                font-size: 14px;
                color: #888888;
                text-align: center;
                /* Center text content */
            }

            .swal2-cancel,
            .swal2-confirm {
                border-radius: 10px;
                font-size: 13px;
                /* Reduce button font size */
                padding: 5px 15px;
                /* Adjust button padding for compactness */
                display: inline-block;
            }

            .swal2-cancel {
                background-color: #00bcd4 !important;
                color: white;
            }

            .swal2-confirm {
                background-color: #d73838 !important;
                color: white;
            }

            /* Voucher Pop-up overlay styling */
            .popup-overlay-voucher {
                display: none;
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1000;
            }

            .popup-content-voucher {
                position: fixed;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 480px;
                height: 55%;
                background-color: white;
                border-radius: 20px 20px 0 0;
                padding: 20px;
                box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1);
                animation: slide-up 1.4s ease;
                overflow-y: auto;
                /* Masih bisa di-scroll vertikal */
                scrollbar-width: none;
                /* Firefox - sembunyikan scrollbar */
                -ms-overflow-style: none;
            }

            .popup-content::-webkit-scrollbar {
                display: none;
            }


            /* Voucher Pop-up header styling */
            .popup-header-voucher {
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }

            .popup-header-voucher h3 {
                margin: 0;
                font-size: 16px;
                text-align: center;
            }

            /* Voucher option styling */
            .voucher-option-voucher {
                display: flex;
                flex-direction: column;
                padding: 15px;
                border-bottom: 1px solid #ddd;
                background-color: white;
                margin-bottom: 10px;
                border-radius: 10px;
                position: relative;
                justify-content: space-between;
                height: auto;
            }

            .voucher-info .voucher-title {
                font-weight: 400;
                margin-top: -70px;
                margin-bottom: -5px;
                font-size: 16px;
                color: #000000;
            }

            .voucher-image {
                width: 65px;
                height: 65px;
                background-color: #e0f7fa;
                border-radius: 10px;
                display: flex;
                margin-right: 10px;
                align-items: center;
                justify-content: center;
            }

            .voucher-image img {
                max-width: 100%;
                max-height: 100%;
                border-radius: 10px;
            }

            .voucher-info {
                display: flex;
                flex-direction: column;
                margin-left: 80px;
                flex-grow: 1;
                margin-bottom: 10px;
            }

            .voucher-info p {
                margin: 5px 0;
                font-weight: 400;
                font-size: 14px;
            }

            .voucher-status {
                font-weight: 400;
                padding: 5px 10px;
                border-radius: 20px;
                color: #ffffff;
                font-size: 12px;
                text-align: center;
                background-color: #0AA41A;
                position: absolute;
                right: 15px;
                top: 20px;
                transform: translateY(0);
            }

            .voucher-status.selesai {
                background-color: #F5F5F5;
                color: #979797;
            }

            .btn-pasang {
                background-color: transparent;
                color: #10ABCF;
                border: 1px solid #10ABCF;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                text-align: center;
                margin-top: auto;
                margin-bottom: 0;
                position: relative;
            }

            .btn-pasang:hover {
                background-color: #10ABCF;
                color: white;
            }

            .btn-berakhir {
                background-color: #F5F5F5;
                color: #979797;
                border: 1px solid #ffffff;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
                width: 100%;
                text-align: center;
            }

            .btn-berakhir:hover {
                background-color: #979797;
                color: #f5f5f5;
            }

            @media (max-width: 600px) {
                .voucher-option-voucher {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .voucher-status {
                    position: relative;
                    right: auto;
                    top: auto;
                    transform: none;
                    margin-top: 10px;
                }

                .btn-pasang,
                .btn-berakhir {
                    width: 100%;
                    margin-top: 10px;
                }
            }


            .search-card-products-services {
                display: flex;
                align-items: center;
                background-color: #f5f5f5;
                padding: 10px;
                border-radius: 8px;
                border: none;
            }

            .search-card-products-services img {
                width: 20px;
                height: 20px;
                margin-right: 10px;
            }

            .search-card-products-services input {
                border: none;
                outline: none;
                background: transparent;
                font-size: 14px;
                color: #333;
                width: 100%;
            }

            .search-card-products-services input:focus {
                border-color: transparent;
            }

            .scrollable-form-products-services {
                max-height: calc(100vh - 150px);
                overflow-y: auto;
                padding-bottom: 20px;
            }


            .scrollable-form-products-services::-webkit-scrollbar {
                display: none;
            }


            .add-products-services-form-group {
                position: relative;
                margin-bottom: 20px;
                border-bottom: 20px solid #F5F5F5;
            }

            .add-products-services-form-group label {
                display: block;
                width: 100%;
                margin-left: 15px;
                font-size: 14px;
                font-weight: 400;
                position: relative;
            }

            .add-products-services-form-group .char-count {
                font-size: 12px;
                color: #888;
                position: absolute;
                top: 0;
                right: 0;
                margin-right: 10px;
            }


            .add-products-services-form-group input,
            .add-products-services-form-group textarea {
                width: 100%;
                padding: 12px 15px;
                border: 1px solid #ffffff;
                box-sizing: border-box;
                font-size: 14px;
                margin-bottom: 5px;
                background-color: #ffffff;
            }

            .add-stok-price-form-group {
                position: relative;
                margin-bottom: 20px;
                border-bottom: 20px solid #F5F5F5;
            }

            .stok-price-container {
                display: flex;
                justify-content: space-between;
                gap: -46px;
            }

            .stok-group,
            .price-group {
                flex: 1;
            }

            .stok-group label,
            .price-group label {
                display: block;
                font-size: 14px;
                font-weight: 500;
                margin-bottom: 10px;
                margin-left: 23px;
            }

            .stok-group input,
            .price-group input {
                width: 88%;
                padding: 10px;
                border: 1px solid #f9f9f9;
                border-radius: 10px;
                box-sizing: border-box;
                margin-bottom: 20px;
                margin-left: 15px;
                background-color: #F5F5F5;
                font-size: 14px;
            }

            .products-services-info {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 15px;
                margin-top: -15px;
                margin-bottom: -5px;
            }

            .products-services-info-text {
                margin: 0;
                color: #000000;
                font-size: 14px;
                font-weight: 500;
                margin-left: 12px;
                flex: 1;
                padding-right: 10px;
            }

            .products-services-info-text-day {
                margin: 0;
                color: #000000;
                font-size: 14px;
                font-weight: 500;
                margin-left: 12px;
                margin-top: 8px;
                flex: 1;
                padding-right: 10px;
            }

            .input-po-days {
                padding: 8px;
                font-size: 14px;
                border-radius: 4px;
                border: 1px solid #ffffff;
                background-color: #f5f5f5;
                width: 200px;
                margin-top: -30px;
                margin-left: 260px;
                transition: border-color 0.3s;
                flex-shrink: 0;
            }

            .input-po-days:hover {
                border-color: #888;
            }

            input::placeholder {
                color: #a8a8a8;
            }

            .products-services-info-arrow {
                content: " >";
                font-weight: 400;
                font-size: 18px;
                color: #5C5C5C;
                margin-right: -2px;
                margin-top: 0px;
            }

            .switch-label {
                font-size: 16px;
                color: #333;
                margin-right: auto;
            }

            /* Switch styling */
            .switch {
                position: relative;
                display: inline-block;
                width: 44px;
                height: 24px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                transition: 0.4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 18px;
                width: 18px;
                left: 3px;
                bottom: 3px;
                background-color: white;
                transition: 0.4s;
            }

            input:checked+.slider {
                background-color: #007AFF;
                /* Blue color when checked */
            }

            input:checked+.slider:before {
                transform: translateX(20px);
            }

            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }

            /*popup products and services*/
            ..products-services-button-container {
                display: flex;
                justify-content: space-between;
                margin-bottom: 20px;
            }

            .products-services-card-container {
                display: flex;
                flex-direction: column;
                align-items: stretch;
                width: 100%;
                padding: 0 15px;
                max-height: calc(100vh - 250px);
                overflow-y: auto;
                padding-bottom: 20px;
                scrollbar-width: none;
                margin-bottom: 20px;
                padding-bottom: 80px;
            }

            .products-services-card-container::-webkit-scrollbar {
                display: none;
            }

            .products-services-card {
                background-color: #fff;
                margin-bottom: 15px;
                display: flex;
                padding: 15px;
                box-sizing: border-box;
                min-height: 200px;
            }

            .dividing-line {
                width: calc(100% + 15px);
                height: 20px;
                background-color: #EDEDED;
                margin-left: -7.5px;
            }

            .products-services-button {
                flex: 1;
                margin: 0;
                border: none;
                background-color: transparent;
                padding: 10px;
                border-bottom: 3px solid transparent;
                cursor: pointer;
            }

            .products-services-button.active {
                border-bottom: 3px solid #10ABCF;
            }

            .products-services-card img {
                width: 128px;
                height: 113px;
                margin-right: 10px;
            }

            .products-services-card-body {
                display: flex;
                flex-direction: column;
                justify-content: space-between;
            }

            .products-services-card-title {
                font-size: 14px;
                font-weight: 400;
                color: #000000;
                margin-bottom: 5px;
            }

            .products-services-price {
                color: #37A6BB;
                font-size: 16px;
                font-weight: 700;
                margin-bottom: 10px;
            }

            .products-services-card-stats {
                display: flex;
                justify-content: space-between;
                margin-bottom: 10px;
                gap: 20px;
            }

            .stat-group {
                display: flex;
                flex-wrap: wrap;
                gap: 20px;
                justify-content: space-between;
            }

            .stat-group div {
                display: flex;
                align-items: center;
                margin-top: -10px;
            }

            .stat-group div img {
                width: 16px;
                height: 16px;
            }

            .stat-group div span {
                font-size: 12px;
                color: #979797;
                font-weight: 400;
            }

            .form-group-foto {
                display: flex;
                flex-direction: column;
                border-bottom: 20px solid #F5F5F5;
                margin-bottom: 20px;
                background-color: #FFFFFF;
            }

            .label-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                width: 100%;
                margin-bottom: 15px;
                margin-left: 13px;
            }

            .form-group-foto label {
                font-size: 14px;
                font-weight: 400;
            }

            .aspect-ratio {
                font-size: 12px;
                color: #888;
                margin-right: 26px;
            }

            .upload-container {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
            }

            .upload-products-services {
                border: 1px solid #EBEBEB;
                padding: 10px;
                text-align: center;
                border-radius: 8px;
                background-color: #F5F5F5;
                cursor: pointer;
                width: 80px;
                height: 80px;
                display: flex;
                justify-content: center;
                align-items: center;
                position: relative;
                margin-left: 13px;
                margin-bottom: 20px;
                overflow: hidden;
                /* Menghindari gambar melampaui kotak */
            }

            .upload-products-services img.uploaded-image {
                width: 100%;
                height: 100%;
                object-fit: contain;
                /* Pastikan gambar tidak terpotong dan tetap di dalam kotak */
                border-radius: 8px;
            }

            .upload-products-services .upload-icon {
                width: 30px;
                height: 30px;
                opacity: 0.6;
            }

            .upload-products-services input[type="file"] {
                opacity: 0;
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }

            /* Additional styles for form fields */
            .add-products-services-form-group {
                margin-bottom: 20px;
            }

            .char-count {
                font-size: 12px;
                color: #888;
                float: right;
            }

            /* Styling for fixed footer */
            .fixed-footer {
                position: fixed;
                bottom: 0;
                width: 100%;
                background-color: #fff;
                padding: 10px;
                box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.1);
            }

            .button-group-products-services {
                text-align: center;
            }

            .footer-button-primary {
                background-color: #28a745;
                color: #fff;
                padding: 10px 20px;
                border: none;
                border-radius: 5px;
                cursor: pointer;
            }

            .products-services-card-button {
                display: flex;
                justify-content: flex-start;
                align-items: center;
                gap: 10px;
                margin-top: 10px;
            }

            .btn-primary {
                background-color: #fff;
                color: #191919;
                border: 1px solid #D5D5D5;
                border-radius: 5px;
                font-weight: 400;
                padding: 10px 60px;
                cursor: pointer;
                font-size: 14px;
                margin-left: -150px;
            }

            .btn-secondary {
                background-color: #fff;
                color: #191919;
                border: 1px solid #D5D5D5;
                border-radius: 5px;
                font-weight: 400;
                padding: 10px 50px;
                font-size: 14px;
                flex-shrink: 0;
            }

            .btn-secondary-off {
                background-color: #fff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
                border-radius: 5px;
                font-weight: 400;
                padding: 10px 50px;
                font-size: 14px;
                flex-shrink: 0;
            }

            .btn-options {
                background-color: #fff;
                border: 1px solid #D5D5D5;
                border-radius: 5px;
                padding: 8px;
                width: 40px;
                display: flex;
                justify-content: center;
                align-items: center;
                cursor: pointer;
            }

            .fixed-footer {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                justify-content: center;
                padding: 20px;
                /* Menambah tinggi footer */
                border-top: 1px solid #EDEDED;
                z-index: 1000;
                max-width: 480px;
                margin: 0 auto;
            }

            .button-group-products-services {
                display: flex;
                flex-direction: column;
                width: 100%;
                gap: 10px;
            }

            .button-group-products-services a {
                text-decoration: none;
            }

            .footer-button-primary,
            .footer-button-secondary {
                width: 100%;
                padding: 10px;
                font-weight: 500;
                font-size: 14px;
                background-color: #ffffff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
                cursor: pointer;
                text-align: center;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
                /* Memberikan jarak antara ikon dan teks */
            }

            .footer-button-primary:hover,
            .footer-button-secondary:hover {
                background-color: #1BA8D1;
                color: #FFFFFF;
            }

            .footer-button-primary2,
            .footer-button-secondary2 {
                width: 100%;
                padding: 10px;
                font-weight: 500;
                font-size: 14px;
                background-color: #10ABCF;
                color: #ffff;
                border: 1px solid #10ABCF;
                cursor: pointer;
                text-align: center;
                border-radius: 10px;
                display: flex;
                align-items: center;
                justify-content: center;
                gap: 10px;
            }

            .footer-button-primary2:hover,
            .footer-button-secondary2:hover {
                background-color: #ffff;
                color: #1BA8D1;
            }

            .footer-button-primary img,
            .footer-button-secondary img {
                width: 20px;
                height: 20px;
            }

            @media (min-width: 481px) {
                .fixed-footer {
                    flex-direction: column;
                }

                .footer-button-primary,
                .footer-button-secondary {
                    width: 100%;
                }
            }

            .bold-text {
                font-weight: bold;
            }

            .voucher-sweetalert {
                background-color: white;
                box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.3);
                border-radius: 10px;
                padding: 30px;
                max-width: 450px;
            }

            .voucher-sweetalert .swal2-title {
                font-size: 18px !important;
                font-weight: 600;
                text-align: center;
                color: #000;
            }

            .voucher-sweetalert .swal2-html-container {
                font-size: 14px;
                color: #888888;
                text-align: center;
                /* Center text content */
            }

            .swal2-cancel,
            .swal2-confirm {
                border-radius: 10px;
                font-size: 13px;
                /* Reduce button font size */
                padding: 5px 15px;
                /* Adjust button padding for compactness */
                display: inline-block;
            }

            .swal2-cancel {
                background-color: #00bcd4 !important;
                color: white;
            }

            .swal2-confirm {
                background-color: #d73838 !important;
                color: white;
            }

            /* Voucher Pop-up overlay styling */
            .popup-overlay-voucher {
                display: none;
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1000;
            }

            .popup-content-voucher {
                position: fixed;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 480px;
                height: 55%;
                background-color: white;
                border-radius: 20px 20px 0 0;
                padding: 20px;
                box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1);
                animation: slide-up 1.4s ease;
                overflow-y: auto;
                /* Masih bisa di-scroll vertikal */
                scrollbar-width: none;
                /* Firefox - sembunyikan scrollbar */
                -ms-overflow-style: none;
            }

            .popup-content::-webkit-scrollbar {
                display: none;
            }


            /* Voucher Pop-up header styling */
            .popup-header-voucher {
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }

            .popup-header-voucher h3 {
                margin: 0;
                font-size: 16px;
                text-align: center;
            }

            /* Voucher option styling */
            .voucher-option-voucher {
                display: flex;
                flex-direction: column;
                padding: 15px;
                border-bottom: 1px solid #ddd;
                background-color: white;
                margin-bottom: 10px;
                border-radius: 10px;
                position: relative;
                justify-content: space-between;
                height: auto;
            }

            .voucher-info .voucher-title {
                font-weight: 400;
                margin-top: -70px;
                margin-bottom: -5px;
                font-size: 16px;
                color: #000000;
            }

            .voucher-image {
                width: 65px;
                height: 65px;
                background-color: #e0f7fa;
                border-radius: 10px;
                display: flex;
                margin-right: 10px;
                align-items: center;
                justify-content: center;
            }

            .voucher-image img {
                max-width: 100%;
                max-height: 100%;
                border-radius: 10px;
            }

            .voucher-info {
                display: flex;
                flex-direction: column;
                margin-left: 80px;
                flex-grow: 1;
                margin-bottom: 10px;
            }

            .voucher-info p {
                margin: 5px 0;
                font-weight: 400;
                font-size: 14px;
            }

            .voucher-status {
                font-weight: 400;
                padding: 5px 10px;
                border-radius: 20px;
                color: #ffffff;
                font-size: 12px;
                text-align: center;
                background-color: #0AA41A;
                position: absolute;
                right: 15px;
                top: 20px;
                transform: translateY(0);
            }

            .voucher-status.selesai {
                background-color: #F5F5F5;
                color: #979797;
            }

            .btn-pasang {
                background-color: transparent;
                color: #10ABCF;
                border: 1px solid #10ABCF;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                width: 100%;
                text-align: center;
                margin-top: auto;
                margin-bottom: 0;
                position: relative;
            }

            .btn-pasang:hover {
                background-color: #10ABCF;
                color: white;
            }

            .btn-berakhir {
                background-color: #F5F5F5;
                color: #979797;
                border: 1px solid #ffffff;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 10px;
                width: 100%;
                text-align: center;
            }

            .btn-berakhir:hover {
                background-color: #979797;
                color: #f5f5f5;
            }

            @media (max-width: 600px) {
                .voucher-option-voucher {
                    flex-direction: column;
                    align-items: flex-start;
                }

                .voucher-status {
                    position: relative;
                    right: auto;
                    top: auto;
                    transform: none;
                    margin-top: 10px;
                }

                .btn-pasang,
                .btn-berakhir {
                    width: 100%;
                    margin-top: 10px;
                }
            }


            .search-card-products-services {
                display: flex;
                align-items: center;
                background-color: #f5f5f5;
                padding: 10px;
                border-radius: 8px;
                border: none;
            }

            .search-card-products-services img {
                width: 20px;
                height: 20px;
                margin-right: 10px;
            }

            .search-card-products-services input {
                border: none;
                outline: none;
                background: transparent;
                font-size: 14px;
                color: #333;
                width: 100%;
            }

            .search-card-products-services input:focus {
                border-color: transparent;
            }

            .scrollable-form-products-services {
                max-height: calc(100vh - 150px);
                overflow-y: auto;
                padding-bottom: 20px;
            }


            .scrollable-form-products-services::-webkit-scrollbar {
                display: none;
            }


            .add-products-services-form-group {
                position: relative;
                margin-bottom: 20px;
                border-bottom: 20px solid #F5F5F5;
            }

            .add-products-services-form-group label {
                display: block;
                width: 100%;
                margin-left: 15px;
                font-size: 14px;
                font-weight: 400;
                position: relative;
            }

            .add-products-services-form-group .char-count {
                font-size: 12px;
                color: #888;
                position: absolute;
                top: 0;
                right: 0;
                margin-right: 10px;
            }


            .add-products-services-form-group input,
            .add-products-services-form-group textarea {
                width: 100%;
                padding: 12px 15px;
                border: 1px solid #ffffff;
                box-sizing: border-box;
                font-size: 14px;
                margin-bottom: 5px;
                background-color: #ffffff;
            }

            .add-stok-price-form-group {
                position: relative;
                margin-bottom: 20px;
                border-bottom: 20px solid #F5F5F5;
            }

            .stok-price-container {
                display: flex;
                justify-content: space-between;
                gap: -46px;
            }

            .stok-group,
            .price-group {
                flex: 1;
            }

            .stok-group label,
            .price-group label {
                display: block;
                font-size: 14px;
                font-weight: 500;
                margin-bottom: 10px;
                margin-left: 23px;
            }

            .stok-group input,
            .price-group input {
                width: 88%;
                padding: 10px;
                border: 1px solid #f9f9f9;
                border-radius: 10px;
                box-sizing: border-box;
                margin-bottom: 20px;
                margin-left: 15px;
                background-color: #F5F5F5;
                font-size: 14px;
            }

            .products-services-info {
                display: flex;
                align-items: center;
                justify-content: space-between;
                padding: 15px;
                margin-top: -15px;
                margin-bottom: -5px;
            }

            .products-services-info-text {
                margin: 0;
                color: #000000;
                font-size: 14px;
                font-weight: 500;
                margin-left: 12px;
                flex: 1;
                padding-right: 10px;
            }

            .products-services-info-text-day {
                margin: 0;
                color: #000000;
                font-size: 14px;
                font-weight: 500;
                margin-left: 12px;
                margin-top: 8px;
                flex: 1;
                padding-right: 10px;
            }

            .input-po-days {
                padding: 8px;
                font-size: 14px;
                border-radius: 4px;
                border: 1px solid #ffffff;
                background-color: #f5f5f5;
                width: 200px;
                margin-top: -30px;
                margin-left: 260px;
                transition: border-color 0.3s;
                flex-shrink: 0;
            }

            .input-po-days:hover {
                border-color: #888;
            }

            input::placeholder {
                color: #a8a8a8;
            }

            .products-services-info-arrow {
                content: " >";
                font-weight: 400;
                font-size: 18px;
                color: #5C5C5C;
                margin-right: -2px;
                margin-top: 0px;
            }

            .switch-label {
                font-size: 16px;
                color: #333;
                margin-right: auto;
            }

            /* Switch styling */
            .switch {
                position: relative;
                display: inline-block;
                width: 44px;
                height: 24px;
            }

            .switch input {
                opacity: 0;
                width: 0;
                height: 0;
            }

            .slider {
                position: absolute;
                cursor: pointer;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background-color: #ccc;
                transition: 0.4s;
            }

            .slider:before {
                position: absolute;
                content: "";
                height: 18px;
                width: 18px;
                left: 3px;
                bottom: 3px;
                background-color: white;
                transition: 0.4s;
            }

            input:checked+.slider {
                background-color: #007AFF;
                /* Blue color when checked */
            }

            input:checked+.slider:before {
                transform: translateX(20px);
            }

            .slider.round {
                border-radius: 34px;
            }

            .slider.round:before {
                border-radius: 50%;
            }

            /*popup products and services*/
            .info-keterangan-pro-popup {
                display: none;
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1000;
            }

            .info-keterangan-pro-popup-content {
                position: fixed;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 480px;
                height: 52%;
                background-color: white;
                border-radius: 20px 20px 0 0;
                padding: 20px;
                box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1);
                animation: slide-up 1.4s ease;
                max-height: calc(100vh - 150px);
                overflow-y: auto;
                padding-bottom: 20px;
            }

            .info-keterangan-pro-opsi-popup-content {
                position: fixed;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 480px;
                height: 22%;
                background-color: white;
                border-radius: 20px 20px 0 0;
                padding: 20px;
                box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1);
                animation: slide-up 1.4s ease;
                max-height: calc(100vh - 150px);
                overflow-y: auto;
                padding-bottom: 20px;
            }


            .info-keterangan-pro-popup-content::-webkit-scrollbar {
                display: none;
            }

            .popup-header-info-keterangan-pro {
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
            }

            .popup-header-info-keterangan-pro h3 {
                margin: 0;
                font-size: 16px;
                text-align: center;
            }

            .info-keterangan-pro-list {
                list-style: none;
                padding: 0;
            }

            .info-keterangan-pro-list li {
                position: relative;
                padding: 10px 40px 10px 0;
                /* Tambahkan ruang untuk ceklis */
                border-bottom: 1px solid #eee;
                font-size: 16px;
                cursor: pointer;
            }

            .info-keterangan-pro-list li.selected::after {
                content: "✔ ";
                font-size: 18px;
                color: #10ABCF;
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
            }

            .info-keterangan-pro-list li:last-child {
                border-bottom: none;
            }

            .info-keterangan-pro-list li:hover {
                background-color: #f0f0f0;
            }

            input[type="checkbox"] {
                margin-right: 10px;
            }

            .info-keterangan-pro-list li {
                list-style: none;
            }

            .info-keterangan-pro-list li label {
                cursor: pointer;
                display: flex;
                align-items: center;
            }
        </style>



        <style>
            /*======================================================================================*/
            /*                                        REKENING                                      */
            /*======================================================================================*/
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

            /* Bagian Card Rekening */
            .card-rekening-list {
                margin-top: 60px;
                padding: 16px;
                padding-bottom: 100px;
            }

            .card-rekening {
                width: 100%;
                height: 150px;
                margin-bottom: 15px;
                border-radius: 10px;
                background: #f5f5f5;
                display: flex;
                flex-direction: column;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            /* Bagian Atas Card */
            .card-rekening-upper {
                background: linear-gradient(93.78deg, #10ABCF 0%, #085769 223.1%);
                border-radius: 10px 10px 0 0;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: flex-start;
                color: white;
                height: 50%;
            }

            /* Gradient Upper Card untuk Setiap Bank */
            .bri-gradient {
                background: linear-gradient(93.78deg, #10ABCF 0%, #085769 223.1%);
                /* Warna khas BRI */
            }

            .mandiri-gradient {
                background: linear-gradient(93.78deg, #ffe259 0%, #ffa751 223.1%);
                /* Kuning cerah khas Mandiri di kiri, dengan nuansa emas tua di kanan */
            }

            .bca-gradient {
                background: linear-gradient(93.78deg, #6FB1FC 0%, #4364F7 100%, #0052D4 223.1%);
                /* Biru cerah di kiri dan biru tua khas BCA di kanan untuk tampilan elegan */
            }

            .cimb-gradient {
                background: radial-gradient(circle 986.6px at 10% 20%, rgba(251, 6, 6, 0.94) 0%, rgba(3, 31, 213, 1) 82.8%, rgba(248, 101, 248, 1) 87.9%);
                /* Merah terang khas CIMB di kiri dan merah gelap di kanan untuk kesan berani dan elegan */
            }

            .btn-gradient {
                background: linear-gradient(93.78deg, #ACBB78 0%, #799F0C 223.1%);
                /* Hijau cerah khas BTN di kiri dengan hijau tua di kanan untuk kesan eksklusif */
            }

            .card-info {
                display: flex;
                flex-direction: column;
            }

            .bank-name {
                font-size: 35px;
                font-weight: 500;
                /* line-height: 52.5px; */
            }

            .account-number {
                font-size: 14px;
                margin-top: -10px;
            }

            .tag-utama {
                background-color: #10ABCF;
                color: #fff;
                padding: 2px 10px;
                border-radius: 15px;
                font-size: 12px;
                font-weight: bold;
                top: 10px;
            }

            /* Bagian Bawah Card */
            .card-rekening-lower {
                display: flex;
                justify-content: space-between;
                padding: 10px;
                gap: 10px;
                background-color: white;
                height: 50%;
                border-top: 1px solid #E0E0E0;
            }

            .lihat-detail,
            .hapus-rekening {
                width: 100%;
                height: 35px;
                border-radius: 5px;
                padding: 10px 20px;
                font-size: 14px;
                cursor: pointer;
            }

            .lihat-detail {
                border: 1px solid #D5D5D5;
                background-color: white;
                color: #2D2D2D;
            }

            .rekening-popup {
                position: fixed;
                bottom: 0;
                left: 50%;
                /* Posisikan pop-up di tengah secara horizontal */
                transform: translateX(-50%);
                /* Menggeser pop-up agar benar-benar berada di tengah */
                width: 100%;
                max-width: 480px;
                background-color: white;
                box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px 10px 0 0;
                z-index: 100;
                padding: 20px 10px;
                display: none;
                /* Default disembunyikan */
                animation: rekening-slideUp 0.3s ease-out;
            }


            .rekening-popup-content {
                text-align: center;
                width: 100%;
                /* Pastikan ini diatur ke 100% */
            }

            .rekening-popup h2 {
                font-size: 16px;
                font-weight: 500;
                margin-bottom: 15px;
                color: #2D2D2D;
            }

            .rekening-detail-info p {
                display: flex;
                justify-content: space-between;
                align-items: center;
                font-size: 14px;
                color: #2D2D2D;
                margin-bottom: 20px;
                text-align: left;
            }

            .rekening-detail-info p span {
                float: right;
            }

            .rekening-btn-tutup {
                width: 100%;
                background-color: #10ABCF;
                color: white;
                border: none;
                padding: 10px;
                border-radius: 5px;
                cursor: pointer;
                font-size: 14px;
            }

            @keyframes rekening-slideUp {
                from {
                    transform: translate(-50%, 100%);
                    /* Mulai dari bawah layar */
                }

                to {
                    transform: translate(-50%, 0);
                    /* Naik ke posisi tengah */
                }
            }

            .hapus-rekening {
                border: 1px solid #D61717;
                background-color: white;
                color: #D61717;
            }

            /* Bagian Footer */
            .rekening-footer {
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

            .rekening-footer button {
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
        </style>
        <style>
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

            .popup {
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

            .popup::-webkit-scrollbar {
                display: none;
            }

            .popup.active {
                transform: translateY(0);
                /* Tampil saat class active ditambahkan */
            }

            /* Header Popup */
            .header-popup {
                position: sticky;
                top: 0;
                background-color: white;
                z-index: 101;
                padding-top: 30px;
            }

            /* Judul popup */
            .popup-title {
                text-align: center;
                font-size: 18px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            /* Divider di bawah header */
            .divider {
                border-bottom: 1px solid #e0e0e0;
                margin-bottom: 15px;
            }

            /* Search box */
            .search-box-container {
                display: flex;
                align-items: center;
                border: 1px solid #E0E0E0;
                border-radius: 5px;
                margin-bottom: 15px;
                padding-left: 10px;
                background-color: white;
            }

            .search-box-container img {
                width: 16px;
                height: 16px;
                margin-right: 5px;
            }

            .search-box {
                width: 100%;
                padding: 8px;
                border: none;
                outline: none;
            }

            /* Daftar Nama Bank */
            .popup-content {
                margin-top: 15px;
                padding-top: 10px;
            }

            .product-item {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                cursor: pointer;
                transition: background-color 0.2s ease;
            }

            .product-item:hover {
                background-color: #f0f0f0;
            }


            #checkIconTemplate {
                display: none;
            }
        </style>
        <style>
            /*==================================================================================================*/
            /*                                             SELLER LEVEL                                         */
            /*==================================================================================================*/

            .seller-level {
                margin-top: 60px;
                padding: 10px 0;
                width: 100%;
                height: auto;
                border-bottom: 1px solid #EDEDED;
                background: #FFFFFF;
                text-align: center;
            }

            .level-title {
                /* width: 78px; */
                margin: 0 auto;
                /* padding-top: 30px; */
                width: 78px;
                height: 78px;
            }

            .level-text {
                margin-top: 10px;
                margin-bottom: 20px;
                font-size: 13px;
                font-weight: 500;
            }

            .level-roadmap {
                width: 100%;
                padding: 10px 40px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                position: relative;
            }

            .level-roadmap img {
                width: 36px;
                height: 40px;
                z-index: 2;
            }

            .roadmap-line {
                position: absolute;
                top: 50%;
                left: 10%;
                /* Adjust to place the line between steps */
                right: 10%;
                /* Adjust to place the line between steps */
                height: 2px;
                background-color: #E0E0E0;
                z-index: 1;
            }

            .level-roadmap img:not(:last-child)::after {
                content: '';
                position: absolute;
                width: 100px;
                /* Adjust the width as needed */
                height: 2px;
                background-color: #E0E0E0;
                top: 50%;
                left: 100%;
                z-index: 1;
            }

            .level-roadmap img:hover {
                cursor: pointer;
            }

            /* Overlay untuk menutupi latar belakang saat pop-up muncul */
            .overlay {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Warna gelap dengan transparansi */
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
                z-index: 9998;
                /* Di bawah pop-up */
            }

            .overlay.visible {
                opacity: 1;
            }


            /* Style untuk roadmap-popup agar sesuai dengan mobile-container */
            .roadmap-popup {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                margin: 0 auto;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                background-color: #FFFFFF;
                padding: 20px 16px 40px 16px;
                border-radius: 15px 15px 0 0;
                box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1);
                transition: transform 0.3s ease-in-out, opacity 0.3s ease-in-out;
                transform: translateY(100%);
                /* Mulai dari bawah */
                opacity: 0;
                z-index: 9999;
                /* Pastikan di atas elemen lain */
            }

            .roadmap-popup.visible {
                transform: translateY(0);
                /* Muncul ke atas layar */
                opacity: 1;
            }

            .roadmap-popup-header {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .roadmap-popup-header img {
                width: 55px;
                height: 55px;
            }

            /* Mengatur roadmap-step yang aktif */
            .roadmap-step.active {
                cursor: pointer;
            }

            .roadmap-step.inactive {
                cursor: default;
                opacity: 0.5;
                /* Membuat yang nonaktif lebih pudar */
            }

            .roadmap-popup-header p:first-child {
                font-family: Inter;
                font-size: 10px;
                font-weight: 400;
                color: #979797;
            }

            .roadmap-popup-header p:last-child {
                font-family: Inter;
                font-size: 13px;
                font-weight: 500;
                color: #424242;
            }

            .roadmap-popup-body p {
                font-family: Inter;
                font-size: 12px;
                font-weight: 600;
                color: #424242;
                margin-bottom: 10px;
            }

            .roadmap-performance-item {
                display: flex;
                justify-content: space-between;
                padding: 10px;
            }

            .roadmap-performance-item p:first-child {
                font-family: Inter;
                font-size: 12px;
                font-weight: 500;
                color: #979797;
            }

            .roadmap-performance-item p:last-child {
                font-family: Inter;
                font-size: 13px;
                font-weight: 500;
                color: #424242;
            }

            .roadmap-performance-item:nth-child(even) {
                background-color: #F5F5F5;
            }

            .roadmap-performance-item:nth-child(odd) {
                background-color: #FFFFFF;
            }

            .hidden {
                display: none;
            }

            .seller-performance {
                padding: 16px;
                background-color: #f5f5f5;
                text-align: left;
                /* Aligns "Performa Seller" to the left */
                padding-bottom: 100px;
            }

            .performance-title-main {
                text-align: left;
                /* Align the main title to the left */
                font-size: 12px;
                font-weight: 500;
                margin-bottom: 15px;
            }

            .performance-card {
                width: 100%;
                margin: 0 auto 20px auto;
                padding: 15px 16px;
                background: #FFFFFF;
                border-radius: 8px;
            }

            .performance-title {
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .performance-title h2,
            span {
                font-size: 12px;
                font-weight: 500;
            }


            .rating-container {
                position: relative;
                width: 100%;
            }

            .rating-bar {
                margin-top: 10px;
                width: 100%;
                height: 10px;
                background-color: #EDEDED;
                border-radius: 5px;
                position: relative;
            }

            .rating-bar-fill {
                width: 90%;
                /* This width should dynamically represent the rating */
                height: 100%;
                background-color: #10ABCF;
                border-radius: 5px;
                position: relative;
            }

            .rating-bar-indicator-white {
                position: absolute;
                top: -5px;
                left: calc(90% - 10%);
                /* Adjust the position based on rating percentage */
                width: 8px;
                height: 20px;
                background: white;
                border-radius: 2px;
            }

            .rating-bar-indicator {
                width: 2px;
                height: 20px;
                background-color: #10ABCF;
                position: absolute;
                top: 0;
                left: 50%;
                transform: translateX(-50%);
                border-radius: 2px;
            }

            .rating-numbers {
                display: flex;
                justify-content: space-between;
                position: relative;
                margin-top: 10px;
                font-size: 11px;
                font-weight: 400;
                color: #979797;
            }

            .middle-rating {
                position: absolute;
                left: calc(90% - 10%);
                /* Align the middle rating exactly with the indicator */
                transform: translateX(-50%);
            }


            .level-requirement {
                margin-top: 20px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-left: 1.5px solid #10ABCF;
                padding-left: 10px;
                font-size: 11px;
                font-weight: 400;
                color: #979797;
            }

            .level-requirement-value {
                color: #424242;
                font-weight: 500;
            }

            .requirement-check {
                margin-top: 10px;
                padding: 8px 10px;
                background: #EAFBFF;
                border-radius: 8px;
                display: flex;
                align-items: center;
                font-family: 'Inter', sans-serif;
                font-size: 11px;
                font-weight: 500;
                color: #10ABCF;
            }

            .checkmark-icon {
                width: 16px;
                /* Adjust size as needed */
                height: 16px;
                margin-right: 8px;
                /* Space between icon and text */
            }

            /* Card Container */
            .order-card {
                width: 100%;
                height: 239px;
                padding: 15px 16px;
                border-radius: 8px;
                background-color: #FFFFFF;
                opacity: 1;
                display: flex;
                flex-direction: column;
                /* justify-content: space-between; */
            }

            /* Header Section */
            .order-header {
                display: flex;
                justify-content: space-between;
                border-bottom: 1px solid #EDEDED;
                padding-bottom: 10px;
            }

            .order-title {
                font-size: 13px;
                font-weight: 500;
                line-height: 15.73px;
                color: #424242;
                border-bottom: 1px solid #EDEDED;
            }

            .order-count {
                font-size: 13px;
                font-weight: 500;
                line-height: 15.73px;
                color: #5C5C5C;
            }

            /* Level Targets Section */
            .level-targets {
                display: flex;
                flex-direction: column;
                gap: 5px;
            }

            .level-target {
                display: flex;
                justify-content: space-between;
                padding-left: 10px;
            }

            .target-title {
                font-size: 11px;
                font-weight: 400;
                line-height: 16.5px;
                color: #979797;
            }

            .target-value {
                font-size: 11px;
                font-weight: 500;
                line-height: 16.5px;
                color: #424242;
            }
        </style>

        <style>
            /* ========================================================================================== */
            /*                          DETAIL ORDER PRODUK
                                                                                                                                                                                                                                                                                            /* ========================================================================================== */


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


            /* detail-order-produk-header */
            .detail-order-produk-header {
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

            .detail-order-produk-header img {
                position: absolute;
                left: 16px;
                top: 25px;
                width: 6px;
                height: 13px;
                margin-right: 10px;
            }

            .detail-order-produk-header h1 {
                font-size: 15px;
                font-weight: 500;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
            }

            /* Informasi Pesanan */
            .detail-order-produk-info-order {
                display: flex;
                flex-direction: row;
                margin-top: 60px;
                height: 124px;
                padding: 16px;
                background-color: #10ABCF;
                color: white;
                margin-bottom: 10px;
            }

            .detail-order-produk-info-order-deskripsi {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .detail-order-produk-info-order img {
                width: 14px;
                height: 16px;
                margin-right: 10px;
            }

            .detail-order-produk-info-order-deskripsi h2 {
                font-size: 12px;
                font-weight: 500;
                margin-bottom: 10px;
            }

            .detail-order-produk-info-order-deskripsi p {
                font-size: 11px;
                font-weight: 400;
                line-height: 1.4;
            }

            .detail-order-produk-info-order-deskripsi .time {
                font-size: 10px;
                font-weight: 400;
                opacity: 75%;
                margin-top: -10px;
            }

            /* Alamat Pembeli */
            .detail-order-produk-address {
                display: flex;
                flex-direction: row;
                padding: 16px;
                height: 119px;
                background-color: white;
                border-bottom: 1px solid #EDEDED;
            }

            .detail-order-produk-address-detail {
                display: flex;
                flex-direction: column;
            }

            .detail-order-produk-address img {
                width: 14px;
                height: 16px;
                margin-right: 10px;
            }

            .detail-order-produk-address-detail h3 {
                font-size: 12px;
                font-weight: 500;
                color: #424242;
                margin-bottom: 10px;
            }

            .detail-order-produk-address-detail p {
                font-size: 11px;
                font-weight: 400;
                color: #424242;
                margin-bottom: 5px;
            }

            .detail-order-produk-address-detail p span {
                color: #979797;
            }

            /* Status Pengiriman */
            .detail-order-produk-delivery {
                display: flex;
                flex-direction: row;
                padding: 16px;
                margin-bottom: 10px;
                height: 93px;
                ;
                background-color: white;
                border-bottom: 1px solid #EDEDED;
            }

            .detail-order-produk-delivery-detail {
                display: flex;
                flex-direction: column;
            }

            .detail-order-produk-delivery img {
                width: 17px;
                height: 14px;
                margin-right: 7px;
            }

            .detail-order-produk-delivery-detail h3 {
                font-size: 12px;
                font-weight: 500;
                color: #424242;
                margin-bottom: 10px;
            }

            .detail-order-produk-delivery-detail p {
                font-size: 12px;
                font-weight: 400;
                color: #424242;
            }

            .detail-order-produk-delivery-detail .p-gray {
                font-size: 12px;
                font-weight: 400;
                color: #979797;
                margin-top: -20px;
            }

            .detail-order-produk-delivery-detail p span {
                color: #979797;
            }

            /* Informasi Pembayaran */
            .detail-order-produk-payment {
                display: flex;
                flex-direction: row;
                height: 142px;
                padding: 15px 16px;
                background-color: white;
                border-bottom: 1px solid #EDEDED;
            }

            .detail-order-produk-payment img {
                width: 14px;
                height: 14px;
                margin-right: 10px;
            }

            .detail-order-produk-payment-info {
                display: flex;
                flex-direction: column;
                width: 100%;
            }

            .detail-order-produk-payment-info h3 {
                font-size: 12px;
                font-weight: 500;
                color: #424242;
                margin-bottom: 10px;
            }

            /* Informasi Pembayaran */
            .detail-order-produk-payment-info div {
                display: flex;
                justify-content: space-between;
                font-size: 11px;
                margin-bottom: 5px;
                color: #b0b0b0;
                /* Warna abu-abu tipis */
            }

            .detail-order-produk-payment-info div span:first-child {
                flex: 1;
                /* Membuat item pertama (judul) memenuhi sisa ruang */
                text-align: left;
                /* Memastikan teks tetap di kiri */
            }

            .detail-order-produk-payment-info div span:last-child {
                text-align: right;
                /* Memastikan nominal harga tetap di kanan */
            }

            .detail-order-produk-payment-info .total {
                font-weight: 400;
                color: #5C5C5C;
                /* Warna hitam untuk teks "Total Harus Dibayar" */
            }

            .detail-order-produk-payment-info .total span:last-child {
                color: #10ABCF;
                /* Warna biru untuk nominal "Total Harus Dibayar" */
                margin-bottom: 0px;
            }

            /* Income */
            .detail-order-produk-income {
                display: flex;
                flex-direction: row;
                padding: 16px;
                background-color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .detail-order-produk-method {
                display: flex;
                flex-direction: row;
                padding: 16px;
                background-color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
                border-bottom: 1px solid #EDEDED;
            }

            .detail-order-produk-method div {
                font-size: 12px;
                font-weight: 500;
                color: #5C5C5C;
            }

            .detail-order-produk-income div {
                font-size: 12px;
                font-weight: 500;
                color: #5C5C5C;
            }

            .detail-order-produk-income div.price {
                color: #10ABCF;
                font-size: 12px;
                font-weight: 500;
            }

            .detail-order-produk-method div.price {
                color: #10ABCF;
                font-size: 12px;
                font-weight: 500;
            }

            /* Card Section */
            .detail-order-produk-card {
                background-color: #fff;
                padding: 16px;
                margin-bottom: 10px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                width: 100%;
                margin-bottom: 100px;
                margin-top: 10px;
            }

            .detail-order-produk-profile-section {
                display: flex;
                align-items: center;
                margin-bottom: 12px;
            }

            .detail-order-produk-profile-info {
                display: flex;
                align-items: center;
            }

            .detail-order-produk-profile-info img {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                margin-right: 10px;
            }

            .detail-order-produk-profile-info .name {
                font-size: 12px;
                font-weight: 400;
                color: #424242;
            }

            .detail-order-produk-product-section {
                display: flex;
                align-items: center;
                width: 100%;
                justify-content: space-between;
                flex: 1;
                margin-bottom: 12px;
            }

            .detail-order-produk-product-image {
                width: 30%;
            }

            .detail-order-produk-product-image img {
                width: 90px;
                height: 80px;
                border-radius: 5px;
            }

            .detail-order-produk-product-info {
                width: 70%;
                max-width: 243px;
                text-align: right;
            }

            .detail-order-produk-product-info .detail-order-produk-product-name {
                font-size: 13px;
                font-weight: 400;
                color: #000;
                margin-bottom: 5px;
                word-wrap: break-word;
                white-space: normal;
            }

            .detail-order-produk-product-info .details {
                display: flex;
                justify-content: right;
                font-size: 12px;
                margin-top: 15px;
                color: #979797;
            }

            .detail-order-produk-product-info .quantity {
                font-weight: 500;
                margin-right: 5px;
            }

            .detail-order-produk-product-info .price {
                color: #37A6BB;
                font-size: 13px;
                font-weight: 500;
            }

            .detail-order-produk-number {
                display: flex;
                justify-content: space-between;
                font-size: 11px;
                font-weight: 500;
                color: #424242;
                margin-bottom: 12px;
            }

            .detail-order-produk-date-checkout {
                display: flex;
                justify-content: space-between;
                font-size: 11px;
                font-weight: 500;
                color: #979797;
                margin-bottom: 12px;
            }

            .detail-order-produk-number span {
                display: block;
                margin-bottom: 2px;
            }

            .detail-order-produk-actions {
                display: flex;
                justify-content: center;
            }

            .detail-order-produk-note-button {
                background-color: #fff;
                border: 1px solid #E0E0E0;
                color: #000;
                padding: 10px;
                font-size: 12px;
                font-weight: 500;
                border-radius: 8px;
                cursor: pointer;
                width: 100%;
                text-align: center;
            }

            /* Styling untuk note input section */
            /* Note input section styling */
            .note-input-section {
                background-color: white;
                padding: 12px;
                border-radius: 8px;
            }

            .note-input-section textarea {
                width: 100%;
                height: 80px;
                border: 1px solid #E0E0E0;
                border-radius: 8px;
                padding: 8px;
                font-size: 12px;
                resize: none;
                outline: none;
                margin-bottom: 10px;
            }

            .note-buttons {
                display: flex;
                justify-content: space-between;
            }

            .cancel-button,
            .save-button {
                width: 48%;
                padding: 10px;
                font-size: 14px;
                border: 1px solid #E0E0E0;
                border-radius: 8px;
                background-color: #fff;
                cursor: pointer;
            }

            .cancel-button {
                color: #000;
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

            .note-detail-order-produk-header {
                display: flex;
                justify-content: space-between;
                font-size: 14px;
                font-weight: bold;
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



            /* detail-order-produk-footer */
            .detail-order-produk-footer {
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

            .detail-order-produk-footer button {
                display: flex;
                align-items: center;
                /* Align image and text vertically */
                justify-content: center;
                /* Center content horizontally */
                width: 100%;
                height: 40px;
                padding: 10px;
                /* Adjusted padding to fit content better */
                background: radial-gradient(268.65% 1212.56% at 50% 51.43%, #20C2E7 0%, #11839E 100%);
                color: white;
                border: none;
                border-radius: 10px;
                font-size: 14px;
                font-weight: 500;
                cursor: pointer;
            }

            .detail-order-produk-footer button img {
                width: 16px;
                /* Slightly increased the image size */
                height: 16px;
                margin-right: 8px;
                /* Space between the image and the text */
            }
        </style>
        <style>
            /* ========================================================================================== */
            /*                          DETAIL ORDER JASA
                                                                                                                                                                                                                                                                                                                                                                                                                                                        /* ========================================================================================== */

            html,
            body {
                height: 100%;
                width: 100%;
                margin: 0;
                padding: 0;
                font-family: "Inter", sans-serif;
                background-color: #ffffff;
                display: flex;
                justify-content: center;
                align-items: flex-start;
                min-height: 100vh;
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
                height: 105px;
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 74px 16px 15px 16px;
                z-index: 10;
                border-bottom: 1px solid #E0E0E0;
            }

            .detail-order-jasa-header img {
                position: absolute;
                left: 16px;
                top: 74px;
                width: 6px;
                height: 13px;
                margin-right: 10px;
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
                margin-top: 105px;
                height: 124px;
                padding: 16px;
                background-color: #10ABCF;
                color: white;
                margin-bottom: 10px;
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
            .detail-order-jasa-2-delivery-detail .image-upload-box {
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

            .detail-order-jasa-2-delivery-detail .image-upload-box input {
                width: 100%;
                height: 100%;
                opacity: 0;
                position: absolute;
                top: 0;
                left: 0;
                cursor: pointer;
                /* Pastikan input masih bisa diklik */
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
                width: 100%;
            }

            .cancel-button,
            .save-button {
                padding: 10px;
                font-size: 14px;
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
        </style>
        <style>
            /* ================================================================================================================== */
            /*                               INFORMASI AKUN
                                                                                                                                                                                                                                                    /* ================================================================================================================== */

            .profile-picture-informasi-akun {
                display: flex;
                justify-content: center;
                align-items: center;
                margin-top: 10px;
                margin-bottom: 20px;
            }

            .profile-picture-container {
                position: relative;
                display: inline-block;
            }

            .profile-picture-container img:first-child {
                width: 100px;
                height: 100px;
                border-radius: 50%;
                object-fit: cover;
            }

            .camera-icon {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 40px;
                height: 30px;
                z-index: 2;
                opacity: 3;
                image-rendering: crisp-edges;

            }

            /* h2 {
                                                                                                                                                                                                                                                        text-align: left;
                                                                                                                                                                                                                                                        margin-top: 20px;
                                                                                                                                                                                                                                                        font-size: 18px;
                                                                                                                                                                                                                                                        margin-bottom: 10px;
                                                                                                                                                                                                                                                        margin-left: 10px;
                                                                                                                                                                                                                                                        font-weight: 500;
                                                                                                                                                                                                                                                        color: #191919;
                                                                                                                                                                                                                                                        display: flex;
                                                                                                                                                                                                                                                        align-items: center;
                                                                                                                                                                                                                                                        padding-bottom: 10px;
                                                                                                                                                                                                                                                    } */


            .back-button-informasi-akun {
                border-bottom: 1px solid #eee;
                background-color: #fff;
                border: none;
                padding: 8px;
                cursor: pointer;
                margin-right: 5px;
                margin-left: 5px;
            }

            .form-group-informasi-akun {
                display: flex;
                align-items: center;
                justify-content: space-between;
                margin-bottom: 2px;
                padding: 10px 0;
                border-bottom: 1px solid #eee;
            }

            .label-informasi-akun {
                flex: 1;
                font-weight: 400;
                font-size: 14px;
                color: #424242;
                margin-left: 10px;
            }

            .label-informasi-akun-two {
                flex: 1;
                font-weight: 400;
                font-size: 14px;
                color: #000000;
                margin-left: 10px;
            }

            .form-control-informasi-akun {
                flex: 2;
                text-align: right;
                font-size: 16px;
            }

            .form-control-informasi-akun-arrow {
                flex: 0;
                color: #ccc;
                padding-left: 10px;
                font-size: 14px;
                margin-right: 10px;
            }

            .form-control-informasi-akun textarea#link {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
                resize: none;
                height: auto;
                line-height: 1.5em;
                padding-top: 0;
                padding-bottom: 0;
                border: none;
                font-size: 14px;
            }

            body.swal2-shown {
                overflow: hidden;
            }

            /* SweetAlert custom */
            .swal2-custom-informasi-akun-popup {
                width: 80vw;
                max-width: 400px;
                padding: 15px;
                border-radius: 8px;
                border: 1px solid #ccc;
            }

            .swal2-custom-informasi-akun-title {
                font-size: 16px;
                margin-bottom: 8px;
                font-weight: bold;
            }

            .swal2-custom-informasi-akun-content {
                font-size: 11px;
                color: #555;
            }

            div.swal2-html-container {
                font-size: 14px;
            }

            .swal2-custom-informasi-akun-confirm,
            .swal2-custom-informasi-akun-cancel {
                padding: 8px 20px;
                font-size: 12px;
                border-radius: 6px;
                width: 110px;
            }

            .swal2-custom-informasi-akun-confirm {
                background-color: #007bff;
                color: white;
            }

            .swal2-custom-informasi-akun-cancel {
                background-color: #d33;
                color: white;
            }

            /* Menyesuaikan tata letak tombol */
            .swal2-custom-actions-informasi-akun {
                justify-content: space-between !important;
            }

            button.menu-button-informasi-akun {
                width: 100%;
                background: none;
                border: none;
                text-align: left;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                cursor: pointer;
            }

            button.menu-button-informasi-akun:hover {
                background-color: #f0f0f0;
            }

            .slider-overlay-informasi-akun {
                display: none;
                position: fixed;
                left: 0;
                top: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                z-index: 1000;
            }

            .slider-content-informasi-akun {
                position: fixed;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                width: 100%;
                max-width: 480px;
                background-color: white;
                border-radius: 20px 20px 0 0;
                padding: 20px;
                box-shadow: 0px -4px 10px rgba(0, 0, 0, 0.1);
                animation: slide-up 1.4s ease;
                max-height: calc(100vh - 150px);
                overflow-y: auto;
                padding-bottom: 20px;
            }

            .slider-content-informasi-akun::-webkit-scrollbar {
                display: none;
            }

            .silder-header-informasi-akun {
                border-bottom: 1px solid #ddd;
                padding-bottom: 10px;
                margin-bottom: 10px;
                text-align: center;
                font-size: 16px;
                font-weight: bold;
            }

            .info-keterangan-pro-list {
                list-style: none;
                padding: 0;
            }

            .info-keterangan-pro-list li {
                position: relative;
                padding: 10px 40px 10px 0;
                border-bottom: 1px solid #eee;
                font-size: 14px;
                font-weight: 400;
                color: #191919;
                cursor: pointer;
            }

            .info-keterangan-pro-list li.selected::after {
                content: "✔";
                font-size: 18px;
                color: #10ABCF;
                position: absolute;
                right: 10px;
                top: 50%;
                transform: translateY(-50%);
            }

            .info-keterangan-pro-list li:last-child {
                border-bottom: none;
            }

            .info-keterangan-pro-list li:hover {
                background-color: #f0f0f0;
            }

            .search-card-products-services {
                display: flex;
                align-items: center;
                margin-bottom: 15px;
            }

            .search-card-products-services img {
                width: 20px;
                margin-right: 10px;
            }

            .search-card-products-services input {
                width: 100%;
                padding: 8px;
                border-radius: 10px;
            }

            a.menu-button-informasi-akun {
                width: 100%;
                background: none;
                border: none;
                text-align: left;
                padding: 10px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                cursor: pointer;
                text-decoration: none;
                color: inherit;
            }

            a.menu-button-informasi-akun:hover {
                background-color: #f0f0f0;
            }

            .highlighted {
                color: #000;
            }

            .regular {
                color: #aaa;
            }

            /* Hide the file input completely */
            .fileInput-informasi-akun {
                display: none;
            }

            /* Style the upload icon */
            .upload-icon-informasi-akun {
                cursor: pointer;
                /* Add cursor pointer to indicate it's clickable */
                margin-right: 10px;
                font-size: 20px;
            }

            button[type="submit"] {
                background-color: #007bff;
                color: #fff;
                border: none;
                padding: 10px 20px;
                border-radius: 4px;
                cursor: pointer;
                font-size: 16px;
                transition: background-color 0.3s;
                width: 100%;
                margin-top: 20px;
            }

            button[type="submit"]:hover {
                background-color: #0056b3;
            }

            .section-divider-informasi-akun {
                background-color: #f5f5f5;
                height: 20px;
                width: calc(100% + 40px);
                margin: 20px -20px;
                position: relative;
            }

            .gray-section-informasi-akun {
                background-color: #f5f5f5;
                padding: 20px 0;
                /* Add padding to create spacing */
            }

            .section-divider2-informasi-akun {
                background-color: #f5f5f5;
                height: 10px;
                width: 100%;
                position: relative;
            }
        </style>
        <style>
            /* ================================================================================================================== */
            /*                               INFORMASI ALAMAT
                                                                                                                                                                                                                                                            /* ================================================================================================================== */

            .info-divider-informasi-alamat {
                height: 2px;
                background-color: #ddd;
                margin: 10px 0;
                width: 100%;
            }

            .address-scrollable-section {
                padding: 15px;
                overflow-y: auto;
                flex: 1;
                scrollbar-width: none;
                -ms-overflow-style: none;
                max-height: 70vh;
            }

            .address-scrollable-section::-webkit-scrollbar {
                display: none;
            }

            .back-button-informasi-alamat {
                background-color: #fff;
                border: none;
                padding: 8px;
                cursor: pointer;
                margin-right: 10px;
            }

            .card-informasi-alamat {
                margin: 10px;
                padding: 20px;
                border-radius: 12px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                background-color: #fff;
                text-align: left;
            }

            .card-informasi-alamat p {
                margin: 0;
                font-size: 16px;
                line-height: 1.5;
                color: #333;
            }

            .card-informasi-alamat-buttons {
                margin-top: 20px;
            }

            .card-informasi-alamat-buttons button {
                color: #fff;
                padding: 10px 140px;
                width: 100%;
                border: none;
                border-radius: 5px;
                cursor: pointer;
                margin-top: 5px;
                font-size: 16px;
            }

            .card-informasi-alamat-buttons .ubah-button-informasi-alamat {
                background-color: #fff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
            }

            .card-informasi-alamat-buttons button:hover {
                opacity: 0.9;
            }

            .card-informasi-alamat-buttons .ubah-button-informasi-alamat:hover {
                background-color: #f0f0f0;
            }

            .not-pinpoint-button-informasi-alamat {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #f5f5f5;
                color: #979797;
                border: none;
                padding: 8px 5px;
                border-radius: 60px;
                margin-top: 10px;
                width: 140px;
            }

            .pinpoint-button-informasi-alamat {
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #c4e9f1;
                color: #0FB4DA;
                border: none;
                padding: 8px 5px;
                border-radius: 60px;
                margin-top: 10px;
                width: 140px;
            }

            .pinpoint-button-informasi-alamat i {
                margin-right: 5px;
            }

            .ubah-button-informasi-alamat {
                background-color: #fff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
                padding: 8px 12px;
                border-radius: 5px;
                margin-top: 10px;
            }
        </style>
        <style>
            /* ================================================================================================================== */
            /*                               STATUS ORDER
                                                                                                                                                                                                                                                                                            /* ================================================================================================================== */

            .mobile-container-rekening {
                width: 100%;
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

            /* Status Order Header */
            .status-order-header {
                position: fixed;
                top: 0;
                width: 100%;
                max-width: 480px;
                height: 60px;
                background-color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 25px 16px 15px 16px;
                z-index: 10;
            }

            .status-order-header .back-button,
            .status-order-header .message-button {
                width: 26px;
                height: 26px;
                background-color: transparent;
                border: none;
            }

            .status-order-unread-indicator {
                position: absolute;
                top: 68px;
                /* Adjust to position above the icon */
                right: 8px;
                /* Adjust to position to the right of the icon */
                background-color: red;
                /* Background color for the indicator */
                color: white;
                /* Text color */
                border-radius: 50%;
                /* Make it circular */
                width: 11px;
                /* Width of the indicator */
                height: 11px;
                /* Height of the indicator */
                display: flex;
                justify-content: center;
                align-items: center;
                font-size: 8px;
                /* Font size */
                font-weight: bold;
                /* Font weight */
            }

            .status-order-header .title {
                font-size: 13px;
                font-weight: 500;
                line-height: 19.5px;
                color: #191919;
                text-align: center;
            }

            /* Filter Tabs */
            .filter-tab-status-order {
                position: fixed;
                display: flex;
                overflow-x: auto;
                /* Enable horizontal scrolling */
                justify-content: space-around;
                background-color: #fff;
                top: 60px;
                width: 100%;
                max-width: 480px;
                padding: 5px 0;
                padding-bottom: 0;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
                white-space: nowrap;
                /* Prevent tabs from wrapping */
                z-index: 10;
                scrollbar-width: none;
                /* For Firefox */
            }

            .filter-tab-status-order::-webkit-scrollbar {
                display: none;
                /* For Chrome, Safari, and Opera */
            }

            .filter-tab-status-order .filter-tab {
                flex: 0 0 auto;
                /* Prevent flex items from shrinking */
                width: 100px;
                height: 42px;
                padding: 10px;
                font-size: 11px;
                font-weight: 500;
                color: #424242;
                border-bottom: 1.5px solid transparent;
                text-align: center;
                cursor: pointer;
            }

            .filter-tab-status-order .filter-tab.active {
                border-bottom: 2px solid #10ABCF;
                color: #10ABCF;
            }

            /* Order List */
            .order-status-list {
                /* padding: 20px 16px 20px 16px; */
                margin-top: 110px;
                background-color: #f5f5f5;
                min-height: 80vh;
                height: 100%;
                position: relative;
                /* Added for positioning the message */
                /* gap: 5px; */
            }

            .no-order-message {
                display: none;
                /* Default hidden */
                text-align: center;
                padding: 20px;
                color: #000;
                position: absolute;
                /* Position it absolutely within the parent */
                top: 50%;
                /* Center vertically */
                left: 50%;
                /* Center horizontally */
                transform: translate(-50%, -50%);
                /* Adjust positioning */
            }

            .order-status-card {
                background-color: #fff;
                width: 100%;
                height: 289px;
                padding: 20px;
                margin-bottom: 10px;
                box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);
            }

            .order-status-profile-section {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
            }

            .order-status-profile-info {
                display: flex;
                align-items: center;
            }

            .order-status-profile-info img {
                width: 20px;
                height: 20px;
                border-radius: 50%;
                margin-right: 10px;
            }

            .order-status-profile-info .name {
                font-size: 11px;
                color: #424242;
                font-weight: 400;
            }

            .order-status-profile-section .status {
                font-size: 12px;
                color: #10ABCF;
                font-weight: 500;
            }

            .order-status-product-section {
                display: flex;
                align-items: center;
                width: 100%;
                justify-content: space-between;
                flex: 1;
                margin-bottom: 20px;
            }

            .order-status-product-image {
                width: 30%;
            }

            .order-status-product-image img {
                width: 90px;
                height: 81px;
                border-radius: 5px;
            }

            .order-status-product-info {
                width: 70%;
                max-width: 243px;
                text-align: right;
            }

            .order-status-product-info .order-status-product-name {
                font-size: 13px;
                font-weight: 400;
                color: #000;
                margin-bottom: 5px;
                word-wrap: break-word;
                white-space: normal;
            }

            .order-status-product-info .details {
                display: flex;
                justify-content: right;
                font-size: 12px;
                margin-top: 15px;
                color: #979797;
            }

            .order-status-product-info .quantity {
                font-weight: 500;
                margin-right: 5px;
            }

            .order-status-product-info .price {
                color: #37A6BB;
                font-size: 13px;
                font-weight: 500;
            }

            .order-status-order-summary {
                display: flex;
                justify-content: space-between;
                font-size: 11px;
                color: #979797;
                margin-bottom: 10px;
                align-items: center;
            }

            .order-status-order-summary .product-quantity {
                color: #37A6BB;
                /* Warna biru untuk angka */
                font-size: 11px;
                font-weight: 500;
                /* Menebalkan angka */
            }

            .order-status-order-summary .product-text {
                color: #424242;
                /* Warna hitam untuk tulisan Produk */
                font-size: 11px;
                font-weight: 500;
            }

            .order-status-order-summary .total-label {
                color: #979797;
                /* Warna abu tipis untuk label Total pesanan */
                margin-right: 5px;
                /* Memberi sedikit jarak antara label dan harga */
                font-weight: 400;
            }

            .order-status-order-summary .total {
                font-size: 14px;
                font-weight: 700;
                color: #37A6BB;
                /* Warna biru untuk harga */
            }

            .order-status-order-actions {
                display: flex;
                height: 55px;
                border-top: 1px solid #E0E0E0;
                border-bottom: 1px solid #E0E0E0;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px
            }

            .order-status-order-actions .payment-deadline {
                display: flex;
                flex-direction: column;
            }

            .payment-deadlin span {
                font-size: 10px;
                font-weight: 400;
                color: gold;
            }

            .order-status-order-actions .detail-button {
                background-color: #10ABCF;
                color: #fff;
                padding: 10px 20px;
                font-size: 11px;
                font-weight: 400;
                border-radius: 5px;
                border: none;
                cursor: pointer;
                width: 132px;
                height: 35px;
            }

            .order-status-order-number {
                display: flex;
                justify-content: space-between;
                font-size: 11px;
                color: #424242;
                font-weight: 500;
                margin-top: 5px;
            }
        </style>

        <style>
            /* ============================== STYLE KEAMANAN & PRIVASI ====================================== */
            /* .mobile-container {
                                                                                                                                                                                                                                                        width: 100%;
                                                                                                                                                                                                                                                        max-width: 480px;
                                                                                                                                                                                                                                                        max-height: 490vh;
                                                                                                                                                                                                                                                        height: 100%;
                                                                                                                                                                                                                                                        background-color: #f5f5f5;
                                                                                                                                                                                                                                                        display: flex;
                                                                                                                                                                                                                                                        flex-direction: column;
                                                                                                                                                                                                                                                        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                                                                                                                                                                                                                                                    } */

            .form-group-keamanan-privasi {
                width: 100%;
                height: 38px;
                padding: 10px 16px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                cursor: pointer;
                /* Agar seluruh div bisa diklik */
            }

            .form-group-keamanan-privasi p {
                margin: 0;
                font-size: 12px;
                font-weight: 500;
                color: rgba(66, 66, 66, 1);
            }

            .right-content-keamanan-privasi {
                display: flex;
                align-items: center;
            }

            .right-content-keamanan-privasi span {
                font-size: 12px;
                font-weight: 500;
                color: rgba(66, 66, 66, 1);
                margin-right: 8px;
                /* Memberi jarak antara email dan panah */
            }


            .info-text-keamanan-privasi {
                font-size: 11px;
                font-weight: 400;
                color: rgba(151, 151, 151, 1);
                text-align: left;
                word-wrap: break-word;
                line-height: 16.5px;
            }

            .switch-container-keamanan-privasi {
                display: flex;
                justify-content: space-between;
                align-items: center;
                width: 100%;
                height: 72px;
                padding: 10px 16px;
            }

            .switch-container-keamanan-privasi p {
                font-size: 12px;
                font-weight: 500;
                line-height: 16.5px;
            }

            /* Default non-aktif */
            .switch-keamanan-privasi {
                position: relative;
                width: 35px;
                height: 19px;
                background-color: rgba(245, 245, 245, 1);
                /* Non-aktif: Background abu-abu muda */
                border-radius: 18px;
                cursor: pointer;
                transition: background-color 0.3s ease;
                /* Transisi background */
            }

            .switch-circle-keamanan-privasi {
                position: absolute;
                top: 1px;
                left: 1px;
                width: 17px;
                height: 17px;
                border-radius: 50%;
                background-color: rgba(217, 217, 217, 1);
                /* Non-aktif: Lingkaran abu-abu */
                overflow: hidden;
                /* Untuk efek terbelah */
                transition: left 0.3s ease;
                /* Transisi gerakan lingkaran */
            }

            /* Elemen pseudo untuk dua warna dalam lingkaran */
            .switch-circle-keamanan-privasi::before,
            .switch-circle-keamanan-privasi::after {
                content: "";
                position: absolute;
                width: 50%;
                height: 100%;
                top: 0;
                transition: background-color 0.3s ease, transform 0.3s ease;
            }

            /* Bagian kiri lingkaran (abu-abu) */
            .switch-circle-keamanan-privasi::before {
                left: 0;
                background-color: rgba(217, 217, 217, 1);
                /* Warna abu-abu */
            }

            /* Bagian kanan lingkaran (biru saat aktif) */
            .switch-circle-keamanan-privasi::after {
                right: 0;
                background-color: rgba(16, 171, 207, 1);
                /* Warna biru aktif */
                transform: scaleX(0);
                /* Mulai dengan sisi biru tersembunyi */
                transform-origin: right;
            }

            /* State aktif */
            .switch-keamanan-privasi.active {
                background-color: rgba(220, 242, 255, 1)
                    /* Aktif: Background biru */
            }

            /* Gerakan lingkaran ke kanan */
            .switch-keamanan-privasi.active .switch-circle-keamanan-privasi {
                left: 17px;
                /* Posisi lingkaran saat aktif */
                background-color: rgba(16, 171, 207, 1);
                /* Lingkaran biru saat aktif */
            }

            /* Warna biru di sisi kanan muncul, dan abu menyusut */
            .switch-keamanan-privasi.active .switch-circle-keamanan-privasi::before {
                background-color: rgba(217, 217, 217, 1);
                /* Warna abu tetap */
                transform: scaleX(0);
                /* Warna abu menyusut */
                transform-origin: left;
            }

            .switch-keamanan-privasi.active .switch-circle-keamanan-privasi::after {
                transform: scaleX(1);
                /* Warna biru muncul */
            }

            .form-link-keamanan-privasi {
                font-size: 12px;
                font-weight: 500;
                width: 100%;
                height: 55px;
                padding: 10px 16px;
                display: flex;
                justify-content: space-between;
                align-items: center;
                cursor: pointer;
                /* Agar div ini dapat diklik */
            }

            .left-content-keamanan-privasi {
                display: flex;
                flex-direction: column;
                /* Agar dua paragraf di dalamnya tersusun vertikal */
            }

            .form-link-keamanan-privasi p {
                line-height: 16.5px;
                margin: 0;
            }

            .right-content-keamanan-privasi {
                display: flex;
                align-items: center;
                /* Untuk menyelaraskan icon vertikal */
            }

            .right-content-keamanan-privasi svg {
                color: rgba(151, 151, 151, 1);
                /* Warna panah */
            }
        </style>
        <style>
            /* ============== Progress Lamaran & Misi ================= */

            /* Header */
            .header-lamaran-misi {
                position: fixed;
                top: 0;
                width: 100%;
                max-width: 480px;
                height: 60px;
                background-color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                /* Tetap memastikan konten utama di tengah */
                padding: 25px 16px 15px 16px;
                box-sizing: border-box;
                /* Untuk memastikan padding dihitung dengan benar */
            }

            .header-lamaran-misi img {
                position: absolute;
                left: 16px;
                /* Membuat gambar di sebelah kiri */
                height: 16px;
                /* Sesuaikan ukuran gambar sesuai kebutuhan */
            }

            .header-lamaran-misi h1 {
                font-size: 15px;
                font-weight: 500;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
                text-align: center;
                /* Menjaga agar teks tetap di tengah */
            }

            .header-lamaran-misi button {
                position: absolute;
                left: 50px;
                /* Menempatkan tombol lebih ke kanan dari gambar */
                width: 8px;
                height: 16px;
                margin-right: 10px;
            }

            /* Tabs */
            .tabs-buttons-lamaran-misi {
                display: flex;
                position: fixed;
                justify-content: space-around;
                background: white;
                margin-top: 60px;
                width: 100%;
                max-width: 480px;
                height: 48px;
                border-bottom: 1.5px solid #EDEDED;
            }

            .tabs-buttons-lamaran-misi button {
                padding: 15px 10px;
                background: none;
                border: none;
                font-size: 14px;
                font-weight: 400;
                color: #424242;
                cursor: pointer;
                position: relative;
                width: 50%;
            }

            .tabs-buttons-lamaran-misi button.active {
                color: #10ABCF;
                font-weight: bold;
            }

            .tabs-buttons-lamaran-misi button.active::after {
                content: '';
                width: 100%;
                height: 2px;
                background-color: #10ABCF;
                position: absolute;
                bottom: 0;
                left: 0;
            }

            /* Filter Buttons */
            .filter-buttons-lamaran-misi {
                display: flex;
                justify-content: left;
                margin-top: 108px;
                gap: 10px;
                padding: 10px 16px;
                background-color: white;
            }

            .filter-buttons-lamaran-misi button {
                padding: 10px 15px;
                border-radius: 27px;
                font-size: 14px;
                border: none;
                cursor: pointer;
            }

            .filter-buttons-lamaran-misi button.active {
                background: rgba(32, 177, 211, 0.1);
                color: rgba(16, 171, 207, 1);
            }

            .filter-buttons-lamaran-misi button {
                background: rgba(245, 245, 245, 1);
                color: rgba(73, 73, 73, 1);
            }

            /* Progress Text */
            .progress-text-lamaran-misi {
                font-size: 12px;
                font-weight: 500;
                line-height: 18px;
                text-align: left;
                color: rgba(73, 73, 73, 1);
                margin: 10px 16px;
            }

            /* Job/Mission Cards */
            .card-lamaran-misi {
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 10px;
                margin: 20px 16px;
                background-color: white;
                border-radius: 10px;
                border: 1px solid rgba(237, 237, 237, 1);
            }

            .image-lamaran-misi {
                width: 43px;
                height: 43px;
                border-radius: 5px;
                border: 1px solid rgba(241, 241, 241, 1)
            }

            .content-lamaran-misi {
                flex: 1;
                padding-left: 10px;
            }

            .title-lamaran-misi {
                font-size: 12px;
                font-weight: 400;
                line-height: 18px;
                margin: 0;
                color: black;
            }

            .status-label {
                font-size: 11px;
                font-weight: 400;
                margin: 0;
                color: rgba(73, 73, 73, 1);
                display: inline-block;
                /* Beri jarak antara "Status:" dan elemen berwarna */
            }

            .status-lamaran-misi {
                padding: 3px 10px;
                border-radius: 23px;
                /* Membuat bentuk oval */
                font-size: 11px;
                font-weight: 400;
                line-height: 16.5px;
                margin: 0;
                text-align: center;
                display: inline-block;
                /* Agar ukurannya pas dengan konten */
                color: white;
                /* Warna default teks putih */
            }

            /* Warna untuk status Berhasil */
            .status-lamaran-misi[data-status="Berhasil"] {
                background-color: #28a745;
                /* Hijau */
            }

            /* Warna untuk status Kadaluarsa */
            .status-lamaran-misi[data-status="Kadaluarsa"] {
                background-color: #dc3545;
                /* Merah */
            }

            /* Warna untuk status Progress */
            .status-lamaran-misi[data-status="Progress"] {
                background-color: #ffc107;
                /* Kuning */
                color: black;
                /* Warna teks hitam agar terlihat di latar kuning */
            }

            /* Warna untuk status Pending */
            .status-lamaran-misi[data-status="Pending"] {
                background-color: #6f42c1;
                /* Ungu */
                color: white;
                /* Teks putih untuk kontras */
            }

            .tag-lamaran-misi {
                padding: 3px 10px;
                border-radius: 23px;
                font-size: 10px;
                font-weight: 400;
                margin-top: -20px;
                color: white;
                text-align: center;
                background-color: rgba(16, 171, 207, 1);
                /* Misi */
            }

            .tag-lamaran-misi.lamaran {
                background-color: rgba(245, 109, 33, 1);
                /* Lamaran */
            }

            .popup-lamaran-misi {
                position: fixed;
                bottom: 0;
                /* Tempatkan popup di bagian bawah */
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.5);
                /* Overlay effect */
                display: flex;
                justify-content: center;
                align-items: flex-end;
                /* Sesuaikan item di flex-end */
                transition: all 0.3s ease;
                /* Tambahkan transisi untuk animasi */
            }

            .popup-content-lamaran-misi {
                width: 100%;
                /* Memastikan popup menggunakan lebar penuh */
                max-width: 480px;
                /* Maksimal lebar popup sesuai dengan kontainer */
                background-color: #fff;
                border-radius: 15px 15px 0 0;
                padding: 30px 16px 40px 16px;
                box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
                height: 85vh;
                /* Biarkan tinggi menyesuaikan dengan konten */
                overflow-y: auto;
                /* Tambahkan scroll jika konten terlalu banyak */
                box-sizing: border-box;
            }

            .skeleton-section {
                width: 100%;
                /* Memastikan popup menggunakan lebar penuh */
                max-width: 480px;
                /* Maksimal lebar popup sesuai dengan kontainer */
                background-color: #fff;
                border-radius: 15px 15px 0 0;
                padding: 30px 16px 40px 16px;
                box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
                height: 85vh;
                overflow-y: auto;
                /* Tambahkan scroll jika konten terlalu banyak */
                box-sizing: border-box;
                transform: translateY(100%);
                /* Awalnya, popup berada di bawah */
                animation: slide-up 0.3s forwards;
                /* Animasi saat muncul */
            }

            /* Skeleton Loader Base */
            .skeleton {
                background-color: #e0e0e0;
                border-radius: 4px;
                animation: skeleton-loading 1.5s infinite ease-in-out;
            }

            /* Animasi Skeleton */
            @keyframes skeleton-loading {
                0% {
                    background-color: #e0e0e0;
                }

                50% {
                    background-color: #f5f5f5;
                }

                100% {
                    background-color: #e0e0e0;
                }
            }

            /* Skeleton Gaya Sesuai Struktur Popup */
            .skeleton-container {
                display: flex;
                align-items: center;
                gap: 10px;
            }

            .skeleton-image {
                width: 60px;
                height: 60px;
                border-radius: 10px;
            }

            .skeleton-title {
                width: 120px;
                height: 16px;
                margin-bottom: 5px;
            }

            .skeleton-price {
                width: 80px;
                height: 14px;
                margin-top: 5px;
            }

            .skeleton-button {
                width: 60px;
                height: 25px;
                border-radius: 15px;
                border: none;
                margin-left: auto;
            }

            .skeleton-icon {
                width: 20px;
                height: 20px;
            }

            .skeleton-info-text {
                width: 100%;
                height: 16px;
            }

            .skeleton-link {
                width: 120px;
                height: 14px;
            }

            .popup-program-info-card-lamaran-misi.skeleton-container {
                border-radius: 5px;
                /* Sudut kanan bawah tidak membulat */
                width: 100%;
                /* Ukuran lebar persis */
                height: 54px;
                margin-bottom: 20px;
            }

            /* Skeleton Persyaratan dan Resources */
            .popup-persyaratan-lamaran-misi.skeleton,
            .popup-resources-lamaran-misi .skeleton-text {
                height: 40px;
                margin-bottom: 10px;
            }


            #popup-overlay-lamaran-misi {
                position: fixed;
                /* Mengatur posisi overlay */
                top: 0;
                left: 0;
                width: 100%;
                /* Mengisi lebar layar */
                height: 100%;
                /* Mengisi tinggi layar */
                background-color: rgba(0, 0, 0, 0.5);
                /* Warna overlay dengan transparansi */
                z-index: 1000;
                /* Pastikan di atas header tetapi di bawah konten popup */
                display: none;
                /* Sembunyikan overlay secara default */
            }

            @keyframes slide-up {
                from {
                    transform: translate(-50%, 100%);
                }

                to {
                    transform: translate(-50%, 0);
                }
            }

            /* Tambahkan kelas animasi slide-down ketika popup ditutup */
            .popup-lamaran-misi.closing .popup-content-lamaran-misi {
                animation: slide-down 0.3s forwards;
            }

            /* Tambahan: Menyembunyikan scrollbar pada popup jika diperlukan */
            .popup-content-lamaran-misi::-webkit-scrollbar {
                display: none;
                /* Sembunyikan scrollbar di Chrome, Safari, dan Opera */
            }

            .popup-mission-image-lamaran-misi {
                width: 60px;
                height: 60px;
                border-radius: 10px;
                margin-right: 15px;
                border: 1px solid rgba(241, 241, 241, 1);
            }

            .mission-header-lamaran-misi {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
                margin-top: 0;
            }

            .popup-header-lamaran-misi {
                display: flex;
                align-items: center;
                margin-bottom: 10px;
                margin-top: 0;
            }

            .popup-program-info-icon-text-lamaran-misi {
                display: flex;
                align-items: center;
                /* Menyelaraskan ikon dan teks secara vertikal */
                justify-content: center;
                /* Menyelaraskan konten secara horizontal */
                background-color: rgba(220, 242, 255, 1);
                /* Background warna biru muda */
                border: 1px solid rgba(37, 122, 170, 1);
                /* Border biru */
                border-radius: 5px;
                /* Sudut kanan bawah tidak membulat */
                padding: 10px;
                /* Padding atas dan samping */
                width: 100%;
                /* Ukuran lebar persis */
                height: 54px;
                margin-bottom: 20px;
                text-align: center;
                /* Menyelaraskan teks di tengah kotak */
                border: none;
            }

            .periode-icon-lamaran-misi {
                width: 16px;
                /* Ukuran ikon */
                height: 16px;
                margin-right: 10px;
                /* Jarak dengan teks */
            }

            .popup-program-info-lamaran-misi {
                font-size: 11px;
                /* Ukuran font */
                margin-top: 17px;
                font-weight: 400;
                /* Berat font */
                line-height: 16.5px;
                /* Tinggi garis */
                color: rgba(37, 122, 170, 1);
                /* Warna teks */
                text-align: left;
                /* Tetap rata kiri untuk menjaga format teks */
            }


            .popup-mission-name {
                font-size: 13px;
                font-weight: 500;
                color: #000;
            }

            .price-section-lamaran-misi {
                font-size: 14px;
                color: #0FBE20;
                font-weight: bold;
                margin-top: 5px;
            }

            /* #popup-price-lamaran-misi {
                                                                                                                                                                                                    font-size: 14px;
                                                                                                                                                                                                    color: #0FBE20;
                                                                                                                                                                                                    font-weight: bold;
                                                                                                                                                                                                    margin-top: -10px;
                                                                                                                                                                                                    margin-right: 5px;
                                                                                                                                                                                                } */

            .ewallet-text-lamaran-misi {
                font-size: 15px;
                font-weight: bold;
                color: #0a0a0a;
                margin-top: -10px;
            }

            .action-button-lamaran-misi {
                background-color: #10ABCF;
                color: white;
                padding: 5px 10px;
                border-radius: 15px;
                font-size: 12px;
                margin-left: auto;
                border: none;
                margin-top: -50px;
            }

            .popup-content-lamaran-misi .card {
                padding: 10px;
                background-color: #E7F3FF;
                border-radius: 10px;
                margin-bottom: 10px;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            }

            .popup-body-lamaran-misi {
                margin-bottom: 10px;
            }

            .popup-info-lamaran-misi {
                display: flex;
                justify-content: space-between;
                align-items: center;
                background-color: #fff;
                padding: 15px;
                border-radius: 12px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                width: 100%;
                margin-bottom: 20px;
                gap: 15px;
            }

            .info-item-lamaran-misi {
                display: flex;
                flex-direction: column;
                align-items: center;
                font-size: 12px;
                color: #191919;
            }

            .info-value-lamaran-misi {
                font-size: 14px;
                font-weight: 600;
                color: #191919;
                margin-bottom: 5px;
            }

            .info-label-lamaran-misi {
                font-size: 12px;
                color: #979797;
            }

            .info-item-lamaran-misi img {
                width: 20px;
                height: 20px;
                margin-bottom: 5px;
            }

            .info-divider {
                width: 1px;
                height: 60px;
                background-color: #E0E0E0;
            }

            .popup-persyaratan-lamaran-misi,
            .popup-resources-lamaran-misi {
                background-color: #F7F7F7;
                padding: 15px;
                border-radius: 10px;
                margin-bottom: 10px;
            }

            .popup-resources-lamaran-misi h2 {
                font-size: 12px;
                font-weight: 500;
                color: rgba(60, 60, 60, 1);
            }

            .popup-resources-lamaran-misi p {
                font-size: 11px;
                font-weight: 400;
                color: rgba(60, 60, 60, 1);
            }

            .popup-resources-lamaran-misi a {
                color: #10ABCF;
                text-decoration: underline;
            }

            .evidence-container-lamaran-misi {
                background-color: #F7F7F7;
                padding: 15px;
                border-radius: 10px;
                margin-bottom: 10px;
            }

            .evidence-container-lamaran-misi h2 {
                font-size: 12px;
                font-weight: 500;
                color: rgba(60, 60, 60, 1);
            }

            .upload-button-lamaran-misi {
                display: inline-block;
                padding: 10px;
                background-color: rgba(16, 171, 207, 1);
                /* Warna hijau sesuai contoh */
                color: #ffffff;
                /* Warna teks putih */
                font-size: 12px;
                font-weight: 500;
                border-radius: 10px;
                text-align: center;
                text-decoration: none;
                width: 100%;
                height: 40px;
            }

            /* Styling untuk container gambar bukti */
            .evidence-image-wrapper {
                width: 100%;
                height: 200px;
                overflow: hidden;
                display: flex;
                align-items: center;
                justify-content: center;
                border-radius: 10px;
                margin-bottom: 20px;
            }

            .evidence-thumbnail {
                width: 100%;
                height: 100%;
                object-fit: cover;
                cursor: pointer;
            }

            /* Styling untuk pop-up gambar full-screen */
            .full-image-popup {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                background-color: rgba(0, 0, 0, 0.8);
                display: flex;
                align-items: center;
                justify-content: center;
                z-index: 9999;
            }

            .popup-image-container {
                position: relative;
                max-width: 90%;
                max-height: 90%;
            }

            .popup-full-image {
                width: 100%;
                height: auto;
                border-radius: 8px;
            }

            .close-button-lamaran-misi {
                position: absolute;
                top: 10px;
                right: 10px;
                font-size: 24px;
                color: #fff;
                cursor: pointer;
                background: rgba(0, 0, 0, 0.5);
                padding: 5px 15px;
                border-radius: 50%;
            }
        </style>
        <style>
            /* ======================== pusat seller ============================ */

            /* Header */
            .header-pusat-seller {
                position: fixed;
                top: 0;
                margin: 0;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                height: 60px;
                background-color: white;
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 25px 16px 10px 16px;
                z-index: 10;
            }

            .header-pusat-seller img {
                position: absolute;
                left: 16px;
                width: 8px;
                height: 16px;
                /* margin-right: 10px; */
            }

            .header-pusat-seller h1 {
                font-size: 15px;
                font-weight: 500;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
            }

            .bawah-header-pusat-seller {
                position: fixed;
                top: 60px;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                height: 100px;
                background-color: white;
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
                padding: 0 16px 15px 16px;
                z-index: 10;
                border-bottom: 1px solid rgba(237, 237, 237, 1);
                box-shadow: 0px 4px 10px 0px rgba(232, 232, 232, 0.25);
            }

            .left-content-pusat-seller {
                display: flex;
                align-items: center;
            }

            .header-content-pusat-seller {
                width: 100%;
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 10px;
            }

            .logo-jastru-pusat-seller {
                width: 89px;
                height: auto;
            }

            .edukasi-seller-text-pusat-seller {
                font-size: 12px;
                font-weight: 400;
                margin-left: 8px;
                color: rgba(151, 151, 151, 1);
            }

            .profile-pic-pusat-seller {
                width: 24px;
                height: 24px;
                border-radius: 50%;
            }

            .search-box-pusat-seller-pusat-seller {
                display: flex;
                justify-content: center;
            }

            .search-box-pusat-seller {
                width: 100%;
                height: 40px;
                background-color: rgba(245, 245, 245, 1);
                border-radius: 10px;
                display: flex;
                align-items: center;
                padding: 0 16px;
            }

            .search-icon-pusat-seller {
                width: 14.5px;
                height: 14.5px;
            }

            .search-input-pusat-seller {
                width: 100%;
                border: none;
                outline: none;
                font-size: 12px;
                color: rgba(151, 151, 151, 1);
                margin-left: 10px;
                background-color: rgba(245, 245, 245, 1);
            }

            /* Main Content */
            .main-content-pusat-seller {
                margin-top: 160px;
                height: 471px;
                padding: 30px 16px;
                text-align: center;
                position: relative;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                overflow: hidden;
                /* Hide the sliding div overflow */
            }

            .feature-slide-pusat-seller {
                position: absolute;
                top: 0;
                left: 100%;
                width: 100%;
                height: 471px;
                padding-top: 45px;
                display: flex;
                flex-direction: column;
                justify-content: flex-start;
                align-items: center;
                text-align: center;
                opacity: 0;
                transition: left 0.5s ease-in-out, opacity 0.5s ease-in-out;
            }

            .active-slide-pusat-seller {
                left: 0;
                opacity: 1;
            }

            .inactive-slide-pusat-seller {
                left: -100%;
                /* Move the previous slide off-screen to the left */
                opacity: 0;
            }

            .feature-title-pusat-seller {
                font-size: 20px;
                font-weight: 600;
                color: #000000;
                margin-top: 20px;
                width: 100%;
                max-width: 300px;
                text-align: center;
            }

            .highlight-negosiasi-pusat-seller {
                font-size: 20px;
                font-weight: 600;
                color: #10ABCF;
            }

            .feature-description-pusat-seller {
                font-size: 12px;
                font-weight: 400;
                color: rgba(92, 92, 92, 1);
                margin: 10px 0 20px;
                width: 100%;
                max-width: 300px;
                text-align: center;
            }

            .cta-button-pusat-seller {
                width: 166px;
                height: 40px;
                background: radial-gradient(268.65% 1212.56% at 50% 51.43%, #20C2E7 0%, #11839E 100%);
                border: none;
                border-radius: 10px;
                color: white;
                font-size: 14px;
                cursor: pointer;
                margin-bottom: 20px;
            }

            .curve-background-pusat-seller {
                width: 285px;
                height: 175px;
                border-radius: 100px 100px 0 0;
                position: absolute;
                bottom: 0;
                left: 50%;
                transform: translateX(-50%);
                z-index: 1;
            }

            .feature-image-pusat-seller {
                position: absolute;
                bottom: 0px;
                left: 50%;
                transform: translateX(-50%);
                width: auto;
                height: auto;
                z-index: 2;
            }

            .container-pusat-seller {
                margin-top: 10px;
                padding: 10px 16px;
            }

            .container-pusat-seller h2 {
                font-size: 13px;
                margin-bottom: 10px;
                font-weight: 500;
            }

            .kembangkan-toko-pusat-seller {
                display: flex;
                overflow-x: auto;
                scroll-behavior: smooth;
                gap: 10px;
                padding-bottom: 20px;
                /* Hide scrollbar for modern browsers */
                scrollbar-width: none;
                /* Firefox */
                -ms-overflow-style: none;
                /* IE and Edge */
            }

            .kembangkan-toko-pusat-seller::-webkit-scrollbar {
                display: none;
                /* Chrome, Safari, and Opera */
            }

            .kembangkan-toko-item {
                width: 241px;
                min-width: 241px;
                /* Fixed width to maintain the structure when scrolling */
                height: auto;
                background-color: #ffffff;
                border-radius: 8px;
                text-align: left;
                /* box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1); */
            }

            .kembangkan-toko-item img {
                width: 100%;
                height: 119px;
                border-radius: 8px;
                background-color: #f5f5f5;
            }

            .kembangkan-toko-desc {
                margin-top: 10px;
                padding: 0 10px;
            }

            .kembangkan-toko-desc p {
                font-size: 13px;
                font-weight: 500;
                margin-bottom: 5px;
            }

            .kembangkan-toko-desc span {
                font-size: 10px;
                font-weight: 500;
                color: rgba(151, 151, 151, 1);
            }

            .video-tips-pusat-seller {
                display: flex;
                flex-direction: column;
                width: 100%;
                height: auto;
                margin-top: 10px;
                margin-bottom: 25px;
            }

            .video-container {
                position: relative;
                padding-top: 56.25%;
                background-color: #eaeaea;
                border-radius: 8px;
                overflow: hidden;
            }

            .video-frame {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                /* object-fit: cover; */
                border-radius: 8px;
            }

            .video-info {
                flex-grow: 1;
                text-align: left;
            }

            .video-info p {
                font-size: 13px;
                font-weight: 500;
                margin: 5px 0;
            }

            .video-info span {
                font-size: 10px;
                font-weight: 500;
                color: rgba(66, 66, 66, 1);
                display: block;
                margin-bottom: 10px;
            }

            .video-info-desc {
                font-size: 12px;
                font-weight: 400;
                color: rgba(92, 92, 92, 1);
            }

            .video-tips2-pusat-seller {
                display: flex;
                height: 147px;
                overflow-x: auto;
                scroll-behavior: smooth;
                gap: 10px;
                /* Hide scrollbar for modern browsers */
                scrollbar-width: none;
                /* Firefox */
                -ms-overflow-style: none;
                /* IE and Edge */
            }

            .video-tips2-pusat-seller::-webkit-scrollbar {
                display: none;
                /* Chrome, Safari, and Opera */
            }

            .video-tips2-item {
                width: 134px;
                height: 147px;
                background-color: #ffffff;
                border-radius: 8px;
                text-align: left;
                /* position: relative; */
            }

            .video-thumbnail img {
                width: 100%;
                height: 77px;
                border-radius: 8px;
                display: block;
                object-fit: cover;
            }

            .video-frame2 {
                width: 100%;
                height: 77px;
                /* position: absolute; */
                top: 0;
                left: 0;
                display: none;
                border-radius: 8px;
            }

            .video-tips2-desc {
                padding: 0 10px;
            }

            .video-tips2-desc p {
                font-size: 13px;
                font-weight: bold;
                margin-bottom: 5px;
                white-space: nowrap;
                /* Prevent text wrap */
                overflow: hidden;
                /* Hide overflow */
                text-overflow: ellipsis;
                /* Ellipsis for long text */
            }

            .video-tips2-desc span {
                font-size: 10px;
                font-weight: 500;
                color: rgba(151, 151, 151, 1);
            }

            /* Hover effect */
            .video-tips2-item:hover .video-thumbnail {
                display: none;
                /* Hide thumbnail on hover */
            }

            .video-tips2-item:hover .video-frame2 {
                display: block;
                /* Show video on hover */
            }
        </style>
        <style>
            /* Header styling */
            /* .header {
                                                                                                                                                                                                                                                        position: sticky;
                                                                                                                                                                                                                                                        top: 0;
                                                                                                                                                                                                                                                        z-index: 1;
                                                                                                                                                                                                                                                        display: flex;
                                                                                                                                                                                                                                                        align-items: center;
                                                                                                                                                                                                                                                        padding-top: 20px;
                                                                                                                                                                                                                                                        padding-left: 15px;
                                                                                                                                                                                                                                                        background-color: #fff;
                                                                                                                                                                                                                                                        border-bottom: 1px solid #ddd;
                                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                                    .header h2 {
                                                                                                                                                                                                                                                        flex: 1;
                                                                                                                                                                                                                                                        text-align: center;
                                                                                                                                                                                                                                                        font-size: 16px;
                                                                                                                                                                                                                                                        font-weight: 600;
                                                                                                                                                                                                                                                        margin-left: -40px;
                                                                                                                                                                                                                                                        display: flex;
                                                                                                                                                                                                                                                        justify-content: center;
                                                                                                                                                                                                                                                        align-items: center;
                                                                                                                                                                                                                                                    }

                                                                                                                                                                                                                                                    .back-button {
                                                                                                                                                                                                                                                        border: none;
                                                                                                                                                                                                                                                        padding: 8px;
                                                                                                                                                                                                                                                        cursor: pointer;
                                                                                                                                                                                                                                                        margin-right: 10px;
                                                                                                                                                                                                                                                        margin-left: -10px;
                                                                                                                                                                                                                                                        background: none;
                                                                                                                                                                                                                                                    } */

            /* Content section styling */
            .content-verifikasi-otp {
                width: 100%;
                padding: 35px 16px;
                display: flex;
                flex-direction: column;
                align-items: center;
                /* Centers content horizontally */
                /* gap: 30px; */
                text-align: center;
            }

            /* Title styling */
            .title-verifikasi-otp {
                font-size: 13px;
                font-weight: 600;
                /* line-height: 19.5px; */
                color: rgba(66, 66, 66, 1);
            }

            /* Subtitle styling */
            .subtitle-verifikasi-otp {
                width: 265px;
                font-size: 11px;
                font-weight: 400;
                /* line-height: 16.5px; */
                color: rgba(92, 92, 92, 1);
                text-align: center;
                margin-bottom: 26px;
            }

            /* OTP input styling */
            .otp-container-verifikasi-otp {
                display: flex;
                gap: 20px;
                margin-bottom: 30px;
                padding: 0 20px;
            }

            .otp-box-verifikasi-otp {
                width: 40px;
                /* Sedikit lebih besar */
                height: 56px;
                /* Sedikit lebih besar */
                padding: 16px 10px;
                font-size: 20px;
                /* Angka input lebih besar */
                font-weight: 500;
                /* Sedikit lebih tebal */
                text-align: center;
                background-color: rgba(245, 245, 245, 1);
                border-radius: 5px;
                border: 1px solid rgba(151, 151, 151, 0.5);
            }


            /* Confirmation button styling */
            .confirm-btn-verifikasi-otp {
                width: 100%;
                height: 40px;
                padding: 10px 20px;
                border-radius: 10px;
                background-color: rgba(16, 171, 207, 1);
                color: white;
                font-size: 12px;
                font-weight: 500;
                line-height: 18px;
                border: none;
                cursor: pointer;
                margin: 0 auto;
            }
        </style>
    @endpush

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
</head>
