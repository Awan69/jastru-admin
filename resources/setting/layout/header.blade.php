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

            .mobile-container {
                width: 100%;
                max-width: 480px;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                border-radius: 16px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                min-height: 100vh;
            }

            .header {
                display: flex;
                align-items: center;
                padding: 30px 20px;
                background-color: #fff;
                border-bottom: 1px solid #EDEDED;
            }

            .header h2 {
                flex: 1;
                text-align: center;
                font-size: 16px;
                font-weight: 600;
                margin-right: 30px;
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

            .info-divider {
                height: 1px;
                background-color: #ddd;
                margin: 10px 0;
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

            .card {
                padding: 20px;
            }

            .form-group {
                margin-bottom: -10px;
                margin-top: 20px;
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
                padding: 20px;
                font-size: 16px;
                color: #333;
                border-radius: 8px;
                box-sizing: border-box;
                margin-top: 13px;
                margin-left: 5px;
                margin-right: 5px;
                border: 0px solid #ddd;
                background-color: #f5f5f5;
                height: 100px;
            }

            .address-checkbox-container {
                display: flex;
                align-items: flex-start;
                gap: 10px;
                padding: 10px;
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
                margin-bottom: 15px;
            }

            .form-group-two textarea {
                width: calc(104% - 30px);
                padding: 20px;
                font-size: 16px;
                color: #333;
                border-radius: 8px;
                margin-top: 13px;
                margin-left: 5px;
                margin-right: 5px;
                background-color: #f5f5f5;
                height: 100px;
                resize: none;
                overflow: auto;
                border: 2px solid #fff;
                /* Menambahkan border putih */
                box-shadow: inset 0px 0px 5px rgba(0, 0, 0, 0.1);
                /* Opsional, untuk efek fokus */
            }

            .input-container {
                position: relative;
                width: 100%;
            }

            #city-input {
                width: 100%;
                padding-right: 30px;
                box-sizing: border-box;
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
                margin-top: 300px;
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
                background-color: #f8f9fa;
                border-radius: 8px;
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
                margin-top: 40px;
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
                font-weight: 600;
                margin: 0;
            }

            /* Mengatur paragraf pada item favorit */
            .favorite-item p {
                font-size: 14px;
                color: #10ABCF;
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
                font-size: 14px;
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

            .company {
                display: flex;
                flex-direction: row;
                margin-top: 5px;
            }

            .company .company-name {
                font-size: 14px;
                margin: 0;
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
                color: #0FBE20;
            }

            .salary .per-month {
                font-size: 14px;
                /* Ukuran font lebih kecil untuk per-month */
                color: #979797;
                /* Warna abu-abu untuk per-month */
            }

            /* Mengatur tiket */
            .tiket {
                display: flex;
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
                padding-top: 30px;
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
                padding: 20px 20px;
                background-color: #fff;
                border-bottom: 15px solid #f5f5f5;
                margin-bottom: 20px;
            }

            .info-myshop .avatar-myshop {
                width: 60px;
                height: 60px;
                border-radius: 50%;
                margin-right: 10px;
            }

            .info-myshop .info-text-myshop {
                display: flex;
                flex-direction: column;
                margin-right: 30px;
            }

            .info-myshop .name-myshop {
                font-size: 16px;
                font-weight: 600;
                margin-bottom: 5px;
            }

            .info-myshop .saldo-myshop {
                display: flex;
                /* Use flexbox for alignment */
                align-items: center;
                /* Center items vertically */
                font-size: 12px;
                color: #979797;
            }

            .info-myshop .saldo-myshop img {
                margin-right: 5px;
                /* Add spacing between icon and text */
            }

            .daftar-produk-myshop {
                padding: 20px;
                padding-top: 5px;
                background-color: #fff;
                border-bottom: 2px solid #f5f5f5;
                margin-bottom: 20px;
                position: relative;
                /* Tambahkan position: relative */
            }

            .daftar-produk-myshop h3 {
                font-size: 14px;
                font-weight: 600;
                margin-bottom: 10px;
            }

            .daftar-produk-myshop .produk-count-myshop {
                font-size: 15px;
                color: #979797;
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
                padding: 10px 15px;
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

            .daftar-produk-myshop .arrow-right {
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
                font-size: 20px;
                cursor: pointer;
                color: #979797;
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
                height: 105px;
                background-color: white;
                display: flex;
                align-items: center;
                padding: 74px 16px 15px 16px;
                z-index: 10;
            }

            .voucher-header img {
                width: 16px;
                height: 16px;
                margin-right: 10px;
            }

            .voucher-header h1 {
                font-size: 15px;
                font-weight: 500;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
            }

            .voucher-filter-buttons {
                display: flex;
                justify-content: space-around;
                margin-top: 105px;
                height: 48px;
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

            .voucher-card {
                display: flex;
                flex-direction: column;
                padding: 15px;
                margin: 10px;
                background-color: #fff;
                border-radius: 10px;
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
                margin-right: 15px;
            }

            .voucher-info {
                flex-grow: 1;
                margin-left: 15px;
            }

            .voucher-info h2 {
                font-size: 16px;
                margin: 0;
                color: #333;
            }

            .voucher-info p {
                font-size: 12px;
                color: #888;
                margin: 5px 0;
            }

            .voucher-tag {
                display: flex;
                align-items: center;
                justify-content: center;
                padding: 5px 10px;
                border-radius: 10px;
                font-size: 12px;
                color: white;
                height: 24px;
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
                margin-top: 10px;
                width: 100%;
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
                flex: 0 0 48%; /* Mengatur tombol menjadi 48% dari lebar kontainer */
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

            .voucher-content {
                margin-bottom: 100px;
                padding-bottom: 0px;
            }

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

            .back-button {
                border: none;
                padding: 8px;
                cursor: pointer;
                bottom: -10px;
                margin-right: 10px;
                margin-left: -10px;
                background: none;
            }

            .voucher-header {
                position: fixed;
                top: 0;
                width: 100%;
                max-width: 480px;
                height: 105px;
                background-color: white;
                display: flex;
                align-items: center;
                padding: 74px 16px 15px 16px;
                z-index: 10;
                border-bottom: 1px solid #E0E0E0;
                /* Garis tipis pada bagian bawah */
            }

            .voucher-header img {
                width: 6px;
                height: 13px;
                margin-right: 20px;
            }

            .voucher-header h1 {
                font-size: 15px;
                font-weight: 600;
                line-height: 19.5px;
                margin: 0;
                color: #2D2D2D;
            }

            .voucher-content {
                flex-grow: 1;
                padding-top: 105px;
                margin-bottom: 100px;
                overflow-y: scroll;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            /* Hides scrollbar in WebKit browsers (Chrome, Safari) */
            .voucher-content::-webkit-scrollbar {
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
                /* Atur line-height agar tidak ada ruang ekstra */
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
                top: 50%; /* Pindahkan ke tengah vertikal */
                left: 50%; /* Pindahkan ke tengah horizontal */
                width: 100%; /* Lebar penuh untuk overlay */
                max-width: 480px; /* Lebar maksimum 480px untuk konten */
                height: 100vh; /* Tinggi penuh untuk overlay */
                background-color: rgba(0, 0, 0, 0.5); /* Warna gelap dengan transparansi */
                display: flex;
                justify-content: center;
                align-items: center;
                z-index: 1000; /* Memastikan modal berada di atas elemen lain */
                transform: translate(-50%, -50%); /* Menyelaraskan modal ke tengah */
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
                padding: 10px 0;
                width: 100%;
                border: 1px solid #EDEDED;
                background-color: white;
                cursor: pointer;
                border-radius: 6px;
                margin-bottom: 10px;
                text-align: left;
                text-decoration: none;
                border: none;
            }

            .transaction-list-income {
                display: flex;
                flex-direction: column;
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
                padding: 10px 0;
                display: block;
                text-align: center;
                color: #10ABCF;
                margin-top: -10px;
                border-bottom: 72px solid #f0f0f0;
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
                /* Cursor changes to pointer/hand icon when hovering over button */
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
                margin-bottom: 20px;
            }

            .products-services-card {
                background-color: #fff;
                width: 100%;
                margin-bottom: 20px;
                display: flex;
                padding: 15px;
                border-bottom: 15px solid #D5D5D5;
            }

            .products-services-button {
                flex: 1;
                margin: 0 5px;
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
                font-size: 15px;
                font-weight: 400;
                color: #000000;
                margin-bottom: 5px;
            }

            .products-services-price {
                color: #37A6BB;
                font-weight: bold;
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
                font-size: 14px;
                color: #999;
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
                padding: 10px 75px;
                cursor: pointer;
                font-size: 14px;
                margin-left: -125px;
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

            .footer {
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 15px;
                background-color: #fff;
                width: 100%;
                max-width: 480px;
                position: fixed;
                bottom: 0;
                z-index: 1000;
                border-top: 1px solid #e0e0e0;
            }

            .button-group {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                width: 100%;
            }

            .button-group a,
            .button-group button {
                width: calc(100% - 30px);
                /* Adjust button width to match layout */
                margin-bottom: 10px;
                padding: 12px 0;
                font-size: 16px;
                font-weight: 500;
                border-radius: 10px;
                text-align: center;
                cursor: pointer;
                border: none;
            }

            /* "Tambah Jasa" Button */
            .pin-button {
                background-color: #fff;
                color: #10ABCF;
                border: 1px solid #10ABCF;
            }

            .pin-button:hover {
                background-color: #f0f0f0;
            }

            /* "Tambah Produk" Button */
            .confirm-button {
                background-color: #10ABCF;
                color: #fff;
            }

            .confirm-button:hover {
                background-color: #0c98b2;
            }

            /* Mobile Adjustments */
            @media (max-width: 768px) {
                .footer {
                    padding: 10px;
                    max-width: 100%;
                }

                .button-group {
                    width: 100%;
                }

                .button-group a,
                .button-group button {
                    width: calc(100% - 30px);
                    /* Ensure buttons span full width */
                }
            }
        </style>
        <style>
            /*======================================================================================*/
            /*                                        REKENING                                      */
            /*======================================================================================*/
            html,
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
                height: 105px;
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 74px 16px 15px 16px;
                z-index: 10;
                border-bottom: 1px solid #E0E0E0;
            }

            .rekening-header img {
                position: absolute;
                left: 16px;
                top: 74px;
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
                margin-top: 105px;
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
                background: linear-gradient(45deg, #004c8f, #0066b2);
                /* Warna khas BRI */
            }

            .mandiri-gradient {
                background: linear-gradient(45deg, #ffc20e, #ffdd00);
                /* Warna khas Bank Mandiri */
            }

            .bca-gradient {
                background: linear-gradient(45deg, #1a459f, #2f74c0);
                /* Warna khas BCA */
            }

            .cimb-gradient {
                background: linear-gradient(45deg, #d41f26, #f54749);
                /* Warna khas CIMB Niaga */
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
                left: 50%; /* Posisikan pop-up di tengah secara horizontal */
                transform: translateX(-50%); /* Menggeser pop-up agar benar-benar berada di tengah */
                width: 100%;
                max-width: 480px;
                background-color: white;
                box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 10px 10px 0 0;
                z-index: 100;
                padding: 20px 10px;
                display: none; /* Default disembunyikan */
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
                    transform: translate(-50%, 100%); /* Mulai dari bawah layar */
                }
                to {
                    transform: translate(-50%, 0); /* Naik ke posisi tengah */
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
            html, body {
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
            }

            .mobile-container {
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

            .mobile-container * {
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
                height: 105px;
                background-color: white;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 74px 16px 15px 16px;
                z-index: 10;
                border-bottom: 1px solid #E0E0E0;
            }

            .rekening-header img {
                position: absolute;
                left: 16px;
                top: 74px;
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
                text-align: right;  /* Placeholder berada di sebelah kanan */
                direction: rtl;     /* Teks keluar dari kanan ke kiri */
            }

            /* Mengatur nomor rekening agar input hanya angka */
            .number-only {
                direction: ltr;   /* Mengatur input nomor agar tetap dari kiri ke kanan */
                text-align: right; /* Placeholder tetap di kanan */
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
                display: none; /* Default disembunyikan */
                justify-content: center;
                align-items: flex-end;
            }

            .overlay.active {
                display: flex; /* Muncul ketika class active ditambahkan */
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
                transform: translateY(100%); /* Awal di luar layar */
                transition: transform 0.3s ease-in-out;
                -ms-overflow-style: none;
                scrollbar-width: none;
            }

            .popup::-webkit-scrollbar {
                display: none;
            }

            .popup.active {
                transform: translateY(0); /* Tampil saat class active ditambahkan */
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

            /* Header */
            .rekening-header {
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

            .rekening-header img {
                position: absolute;
                left: 16px;
                top: 74px;
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

            .seller-level {
                margin-top: 105px;
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
                left: 10%; /* Adjust to place the line between steps */
                right: 10%; /* Adjust to place the line between steps */
                height: 2px;
                background-color: #E0E0E0;
                z-index: 1;
            }

            .level-roadmap img:not(:last-child)::after {
                content: '';
                position: absolute;
                width: 100px; /* Adjust the width as needed */
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
                background-color: rgba(0, 0, 0, 0.5); /* Warna gelap dengan transparansi */
                opacity: 0;
                transition: opacity 0.3s ease-in-out;
                z-index: 9998; /* Di bawah pop-up */
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
                transform: translateY(100%); /* Mulai dari bawah */
                opacity: 0;
                z-index: 9999; /* Pastikan di atas elemen lain */
            }

            .roadmap-popup.visible {
                transform: translateY(0); /* Muncul ke atas layar */
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
                opacity: 0.5; /* Membuat yang nonaktif lebih pudar */
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
                text-align: left; /* Aligns "Performa Seller" to the left */
                padding-bottom: 100px;
            }

            .performance-title-main {
                text-align: left; /* Align the main title to the left */
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

            .performance-title h2, span {
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
                width: 90%; /* This width should dynamically represent the rating */
                height: 100%;
                background-color: #10ABCF;
                border-radius: 5px;
                position: relative;
            }

            .rating-bar-indicator-white {
                position: absolute;
                top: -5px;
                left: calc(90% - 10%); /* Adjust the position based on rating percentage */
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
                left: calc(90% - 10%); /* Align the middle rating exactly with the indicator */
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
                width: 16px; /* Adjust size as needed */
                height: 16px;
                margin-right: 8px; /* Space between icon and text */
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


            /* Footer */
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
