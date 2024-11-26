<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @push('styles')
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
                border-bottom: 1px solid #EDEDED;
            }

            .search-bar {
                width: 100%;
            }

            .search-wrapper {
                position: relative;
                width: 100%;
            }

            .search-wrapper input {
                font-family: "Inter", system-ui;
                font-size: 14px;
                color: #A0A0A0;
                font-weight: 400;
                height: 40px;
                width: 100%;
                padding: 8px 0px 8px 40px;
                border: 1px solid #E2E2E2;
                border-radius: 12px;
                box-sizing: border-box;
                outline: none;
            }

            .search-wrapper .search-icon {
                position: absolute;
                left: 10px;
                top: 50%;
                transform: translateY(-50%);
                width: 16px;
                height: 16px;
            }

            .icons {
                display: flex;
                align-items: center;
                transform: translateX(6px);
            }

            .icons div {
                margin-left: 15px;
                position: relative;
                margin-right: 10px;
            }

            .icons div img {
                width: 20px;
                height: 20px;
                display: block;
                background-color: white;
            }

            .icons div .badge {
                position: absolute;
                top: -5px;
                right: -10px;
                background-color: red;
                color: white;
                border-radius: 50%;
                padding: 2px 4px;
                font-size: 10px;
                font-weight: bold;
                box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.2);
            }

            .carousel-item img {
                margin-top: 10px;
                margin-bottom: 9px;
            }

            .header-container {
                margin-top: 50px;
            }

            .balance {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin: 5px 15px;
                padding: 8px;
                background: #ffffff;
                border: 1px solid #EDEDED;
                border-radius: 5px;
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
                font-weight: 600;
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
                font-size: 13px;
                font-weight: 400;
                display: block;
                color: #5C5C5C;
            }

            .tabs {
                font-family: "Inter", system-ui;
                font-optical-sizing: auto;
                font-weight: 400;
                font-style: normal;
                display: flex;
                justify-content: space-between;
                margin: 15px 15px;
                padding: 2px;
                background: #f1f1f1;
                border-radius: 30px;
                box-sizing: border-box;
                margin-bottom: 5px;
                margin-top: 5px;
            }

            .tabs div {
                display: flex;
                flex-direction: column;
                align-items: center;
                font-size: 14px;
                margin: 5px;
            }

            .tabs img {
                width: 10px;
                height: 10px;
                margin-bottom: 5px;
            }

            .tabs button {
                background-color: #F2F2F2;
                color: #979797;
                border: none;
                padding: 10px 20px;
                border-radius: 30px;
                cursor: pointer;
                flex: 1;
                margin: 5px;
                font-size: 14px;
                font-weight: 500;
            }

            .tabs button.active {
                background-color: #10ABCF;
                color: #ffffff
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

            .discount {
                margin: 10px 15px;
                padding: 15px;
                display: flex;
                align-items: center;
                justify-content: space-between;
                background-color: #fff;
            }

            .discount img {
                width: 100%;
                height: auto;
                object-fit: cover;
                border-radius: 8px;
                margin-right: 10px;
            }

            /* Services Grid Section */
            .services-grid {
                display: grid;
                grid-template-columns: repeat(4, 1fr);
                gap: 20px;
                padding: 20px;
                margin: 10px 15px;
            }

            .services-grid a {
                text-decoration: none;
                color: inherit;
            }

            .service-item {
                text-align: center;
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .service-item .image-container {
                background-color: #ecf0f1;
                width: 100px;
                height: 100px;
                border-radius: 50%;
                box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
                display: flex;
                justify-content: center;
                align-items: center;
                margin: 0 auto;
            }

            .service-item img {
                width: 45px;
                height: 45px;
                border-radius: 50%;
                object-fit: cover;
            }

            .service-name {
                font-size: 12px;
                font-weight: 400;
                margin-top: 10px;
                color: #5C5C5C;
            }

            /* Overlay styles */
            .overlay {
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

            .overlay-content {
                width: 100%;
                background-color: #ffff;
                padding: 20px;
                border-radius: 20px 20px 0 0;
                box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
                max-height: 75vh;
                overflow-y: auto;
            }

            .overlay-content::-webkit-scrollbar {
                display: none;
            }

            .overlay-content h2 {
                margin-bottom: 20px;
                font-size: 18px;
                font-weight: bold;
                color: #333;
            }

            .category-section {
                margin-bottom: 20px;
            }

            .category-section h2 {
                font-size: 16px;
                margin-bottom: 10px;
                color: #333;
                font-weight: 700;
            }

            .category-items {
                display: flex;
                flex-wrap: wrap;
                gap: 15px;
            }

            .category-item {
                width: 25%;
                text-align: center;
            }

            .category-item img {
                width: 50px;
                height: 50px;
                margin-bottom: 5px;
            }

            .category-item p {
                font-size: 14px;
                color: #666;
            }

            /* Close button style */
            .close-btn {
                position: absolute;
                top: 10px;
                right: 20px;
                font-size: 24px;
                cursor: pointer;
            }

            .discount {
                display: flex;
                justify-content: space-between;
                gap: 10px;
                margin-bottom: 20px;
            }

            .discount-banner {
                flex: 1;
            }

            .discount-banner img {
                width: 100%;
                height: auto;
                max-width: 70%;
                /* Mengurangi lebar maksimum menjadi 70% dari container */
                border-radius: 10px;
                margin: 5px 0;
            }

            .flash-deal {
                display: flex;
                background-color: #10ABCF;
                color: white;
                padding: 10px;
                overflow: hidden;
                position: relative;
                margin-bottom: 20px;
            }

            .flash-deal-banner {
                flex: 0 0 25%;
                padding: 10px;
                text-align: left;
                /* Align text to the left */
            }

            .flashdeal img {
                width: 100%;
                /* Reduce the size of the flash deal image */
                margin-bottom: 10px;
            }

            .flash-deal-banner p {
                font-size: 12px;
                margin: 4px 0;
                white-space: nowrap;
            }

            .flash-deal-banner h3 {
                font-size: 24px;
                margin: 8px 0;
                white-space: nowrap;
                font-weight: bold;
            }

            .promo-button {
                background-color: #ffffff;
                color: #10ABCF;
                border: none;
                padding: 8px 15px;
                font-weight: 700;
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
                left: 20px;
            }

            .flash-deal-container {
                display: flex;
                overflow-x: auto;
                gap: 15px;
                padding: 10px;
                flex: 1;
                scrollbar-width: none;
                /* Firefox */
            }

            .flash-deal-container::-webkit-scrollbar {
                display: none;
                /* Chrome, Safari, and Opera */
            }

            .flash-deal-item {
                flex: 0 0 120px;
                /* Smaller width for square appearance */
            }

            .flash-deal-item-image {
                width: 150px;
                height: 150px;
            }

            .flash-deal-item img {
                width: 100%;
                height: 100%;
                margin-bottom: 10px;
                /* Add some rounding for a polished look */
            }

            .flash-deal-item .title {
                font-size: 14px;
                margin-bottom: 5px;
                text-align: left;
                /* Align text to the left */
            }

            .flash-deal-item .discount-price {
                font-size: 14px;
                color: #ffffff;
                margin: 5px 0;
                text-align: left;
                /* Align text to the left */
            }

            .flash-deal-item .original-price {
                font-size: 12px;
                color: #ffffff;
                opacity: 60%;
                text-decoration: line-through;
                text-align: left;
            }

            .promo-button {
                background-color: white;
                color: #136a8c;
                padding: 8px 16px;
                /* Kurangi padding untuk memperkecil tombol */
                border: none;
                border-radius: 16px;
                /* Sesuaikan radius agar tombol tetap proporsional */
                font-size: 12px;
                /* Sesuaikan ukuran font */
                cursor: pointer;
                margin-top: 8px;
                white-space: nowrap;
                /* Memastikan teks tetap dalam satu baris */
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
                padding: 0 20px;
                margin-bottom: 20px;
            }

            .title-section h3 {
                font-size: 15px;
                margin: 5px 0;
                font-weight: 500;
                color: #000000;
            }

            .title-section p {
                font-size: 14px;
                font-weight: 400;
                color: #979797;
                margin: 0;
            }

            .card-container {
                display: grid;
                grid-template-columns: 1fr 1fr;
                gap: 10px;
                padding: 0 10px;
                margin-bottom: 25px;
                padding-bottom: 60px;
            }

            .card {
                background-color: #fff;
                padding: 0;
                text-align: left;
                border: 0;
                font-size: 0.9em;
                margin-bottom: 10px;
            }

            .card a {
                color: inherit;
                text-decoration: none;
                display: block;
            }

            .card .image {
                width: 97.5%;
                height: 200px;
                overflow: hidden;
                margin-left: 3px;
            }

            .card img {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }

            .card .title {
                font-size: 14px;
                font-weight: 500;
                color: #333;
                margin-top: 10px;
                margin-bottom: 3px;
                margin-left: 2px;
                text-align: left;
            }

            .price-container {
                display: inline-flex;
                align-items: baseline;
                gap: 8px;
            }

            .card .price {
                font-size: 14px;
                font-weight: 600;
                text-align: left;
                margin-left: 3px;
                margin-bottom: 3px;
                color: #464646;
            }

            .card .discount-price {
                font-size: 12px;
                font-weight: 400;
                text-align: left;
                color: #979797;
                text-decoration: line-through;
                opacity: 50;
            }

            .card .rating {
                display: flex;
                align-items: center;
                margin-left: 3px;
                margin-bottom: 3px;
                font-size: 12px;
                margin-top: 0;
            }

            .card .location {
                font-size: 12px;
                font-weight: 400;
                margin-left: 3px;
                text-align: left;
                color: #979797;
            }

            .card .rating .star {
                width: 13px;
                height: 13px;
                margin-top: -2px;
                display: inline-block;
                object-fit: contain;
            }

            .card .rating .reviews {
                margin-left: 5px;
                font-size: 12px;
                margin-left: 5px;
                color: #979797;
            }

            .header-image img {
                width: 100%;
                height: 100%;
                object-fit: cover;
                border-radius: 8px;
            }
        </style>

        <style>
            .notif-header {
                position: fixed;
                top: 0;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                height: 70px;
                background-color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
                padding: 25px 10px;
                z-index: 11;
                border-bottom: 1px solid #E0E0E0;
            }

            .notif-header h1 {
                margin: 0;
                font-size: 15px;
                font-weight: 400;
                flex-grow: 1;
            }

            .notif-header img {
                height: 18px;
                width: 10px;
                margin-right: 10px;
                cursor: pointer;
            }

            .btn-tlh-dibaca {
                background-color: #00A5C9;
                /* Warna background biru sesuai gambar */
                color: white;
                /* Warna teks */
                width: 141px;
                height: 35px;
                border: none;
                /* Hapus border */
                border-radius: 50px;
                /* Membuat tombol melingkar */
                font-size: 12px;
                /* Ukuran teks */
                font-weight: 400;
                cursor: pointer;
                /* Ubah kursor saat di-hover */
                outline: none;
                /* Hapus outline saat di-klik */
                display: inline-block;
            }

            .btn-tlh-dibaca:hover {
                background-color: #008fb3;
                /* Warna sedikit lebih gelap saat di-hover */
            }

            .notif-filter-bar {
                display: flex;
                flex-direction: row;
                position: fixed;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                align-items: left;
                padding: 15px 16px;
                margin-top: 60px;
                align-items: center;
                gap: 15px;
                /* height: 70px; */
                border-bottom: 1px solid rgba(245, 245, 245, 1);
                box-shadow: 0px 4px 10px 0px rgba(232, 232, 232, 0.25);
                background-color: #ffffff;
                z-index: 10;
                margin-top: 70px;
                overflow-x: hidden;
            }

            .notif-filter-button {
                /* margin-left: 14px;
                                                                                margin-right: 14px; */
                font-size: 12px;
                font-weight: 400;
                text-transform: capitalize;
                padding: 8px 20px;
                border-radius: 27px;
                background-color: #FFFFFF;
                border: 1px solid #E5E5E5;
            }

            .notif-filter-bar i {
                margin-right: 14px;
                text-transform: capitalize;
                /* padding-top: 8px;
                                                                                padding-left: 10px; */
                padding: 9px 10px;
                border-radius: 20px;
                background: #F6F6F6;
                border-radius: 8px;
                width: 40px;
                height: 40px;
            }

            .notif-filter-button.active {
                background-color: #20B1D31A;
                color: #10ABCF;
                border: none;
            }

            .notif-item {
                padding: 15px 16px;
                background-color: #fff;
                display: flex;
                align-items: flex-start;
                height: auto;
                margin-bottom: 10px;
            }

            .notif-item img {
                width: 20px;
                height: 20px;
                margin-right: 10px;
            }

            .notif-item .notif-content {
                flex-grow: 1;
            }

            .notif-item .notif-label {
                display: inline-block;
                font-size: 0.75rem;
                border-radius: 20px;
                padding: 2px 10px;
                margin-bottom: 5px;
            }

            .notif-item .notif-title {
                font-size: 14px;
                font-weight: 500;
                margin: 0;
            }

            .notif-item .notif-text {
                font-size: 12px;
                font-weight: 400;
                color: #9A9A9A;
                margin: 5px 0 0;
            }

            .notif-item.promo .notif-label {
                background-color: #07AAC91A;
                color: #10ABCF;
            }

            .notif-item.transaksi .notif-label {
                background-color: #C907071A;
                color: #C9071E;
            }

            .notif-item.pengajuan .notif-label {
                background-color: #13B2791A;
                color: #13B279;
            }

            .notif-list {
                padding: 26px 0 0 0;
                background: white;
            }

            .notif-list h1 {
                margin-left: 10px;
                font-size: 13px;
                font-weight: 500;
            }

            .notif-list-2 {
                padding: 26px 0 0 0;
                background: white;
            }

            .notif-list-2 h1 {
                margin-left: 10px;
                font-size: 13px;
                font-weight: 500;
            }

            .separator {
                width: 100%;
                /* Full width */
                min-height: 10px;
                /* Minimum height to make sure it shows */
                background-color: #f5f5f5;
                /* Light gray color */
            }
        </style>

        <style>
            /* Styles yang telah Anda berikan sebelumnya tetap di sini */
            .cart-header {
                position: fixed;
                top: 0;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                height: 70px;
                background-color: white;
                display: flex;
                justify-content: space-between;
                align-items: center;
                text-align: left;
                padding: 25px 10px;
                z-index: 11;
                border-bottom: 1px solid #E0E0E0;
            }

            .cart-header h1 {
                font-size: 16px;
                font-weight: 600;
            }

            .back-button {
                cursor: pointer;
                height: 21px;
            }

            .container-cart {
                flex: 1;
                /* Membuat konten utama fleksibel sehingga footer bisa berada di bawah */
                width: 100%;
                background-color: #FFFFFF;
                margin-bottom: 102px;
            }

            .heart-button {
                font-size: 24px;
                text-decoration: none;
                color: #000;
            }

            .cart-filters {
                display: flex;
                position: fixed;
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                align-items: left;
                padding: 15px 16px 15px 16px;
                margin-top: 60px;
                align-items: center;
                height: 70px;
                padding: 10px;
                border-bottom: 1px solid #ddd;
                background-color: #ffffff;
                z-index: 10;
            }

            .cart-filters i {
                margin-right: 14px;
                text-transform: capitalize;
                padding-top: 8px;
                padding-left: 10px;
                /* padding: 10px 10px; */
                border-radius: 20px;
                background: #F6F6F6;
                border-radius: 8px;
                width: 40px;
                height: 40px;
            }

            .filter-button {
                /* margin-left: 14px;
                                                                    margin-right: 14px; */
                font-size: 12px;
                font-weight: 400;
                text-transform: capitalize;
                padding: 10px 15px;
                border-radius: 27px;
                background-color: #FFFFFF;
                border: 1px solid #E5E5E5;
            }

            .filter-button.active {
                background-color: #20B1D31A;
                color: #10ABCF;
                border: none;
            }

            .filter-button:hover {
                background-color: #20B1D31A;
                color: #10ABCF;
            }

            .store-group {
                padding: 10px;
            }

            .store-header {
                display: flex;
                align-items: center;
                background-color: #ffffff;
            }

            .store-header input {
                margin-right: 10px;
                width: 16px;
                height: 16px;
            }

            tr {
                padding: 0;
            }

            td {
                margin: 0;
                padding: 0;
            }

            td input {
                width: 16px;
                height: 16px;
            }

            /* .table-hover tbody tr:hover {
                                                                    background-color: #ffffff;
                                                                } */

            .product-img {
                width: 78px;
                height: 78px;
                object-fit: cover;
                border-radius: 5px;
                margin-right: 10px;
            }

            .product-info {
                flex: 1;
            }

            .product-name {
                margin-bottom: 5px;
                font-size: 14px;
                font-weight: 400;
                color: rgba(151, 151, 151, 1);
            }

            .product-price {
                font-size: 13px;
                font-weight: 600;
            }

            .product-actions {
                display: flex;
                justify-content: flex-start;
                align-items: center;
                gap: 8px;
            }

            .btn-ic {
                margin-right: 2px;
                /* Optional: Additional spacing */
                padding: 2px;
                /* Optional: Reduce padding if needed */
                border: none;
                background: #FFFFFF;
            }

            .heart-button img {
                filter: grayscale(100%);
                transition: filter 0.3s;
            }

            .heart-button.active img {
                filter: grayscale(0%);
            }

            /* Memastikan container quantity berada dalam satu baris */
            .product-quantity {
                display: flex;
                align-items: center;
                justify-content: flex-end;
                /* Memindahkan quantity ke kanan */
                gap: 0;
                /* Menghapus jarak default antara elemen */
                border: 1px solid #ddd;
                /* Tambahkan border untuk kotak */
                border-radius: 5px;
                /* Rounded corners untuk kotak */
                padding: 2px;
                /* Padding di dalam kotak */
                margin-left: auto;
                /* Memastikan elemen quantity berada di paling kanan */
            }

            /* Styling tombol quantity */
            .btn-quantity {
                width: 30px;
                height: 30px;
                padding: 0;
                border: none;
                border-radius: 5px;
                /* Rounded corners untuk tombol */
                font-size: 18px;
                /* Ukuran font yang lebih besar untuk tombol */
                background-color: #ffffff;
                /* Warna latar belakang tombol */
                display: flex;
                justify-content: center;
                align-items: center;
            }

            /* Styling input quantity */
            .product-quantity input.form-control {
                width: 50px;
                /* Lebar input */
                padding: 2px;
                font-size: 16px;
                /* Ukuran font di dalam input */
                border: none;
                /* Menghapus border default */
                text-align: center;
                /* Menyelaraskan teks ke tengah */
            }


            .subtotal {
                margin-top: 5px;
                font-weight: bold;
            }

            .cart-footer {
                display: flex;
                justify-content: space-between;
                position: fixed;
                align-items: center;
                padding: 20px 16px 40px 16px;
                background-color: #f8f9fa;
                border-top: 1px solid #ddd;
                bottom: 0;
                /* left: 0;
                                                                    right: 0; */
                width: 100%;
                min-width: 370px;
                max-width: 480px;
                height: 102px;
                /* Mengisi lebar layar */
                z-index: 11;
                /* Agar tetap berada di atas konten lainnya */
                box-shadow: 0 -2px 5px rgba(0, 0, 0, 0.1);
                /* Menambahkan bayangan untuk tampilan lebih baik */
            }

            .footer-left {
                display: flex;
                align-items: center;
            }

            .footer-right {
                display: flex;
                align-items: center;
            }

            .footer-right .total-container {
                display: flex;
                flex-direction: column;
                margin-right: 20px;
                /* Jarak antara total harga dan tombol Beli */
            }

            .footer-right .total-container h5 {
                margin: 0;
                font-size: 14px;
                /* Ukuran font lebih kecil untuk "Total" */
                color: #6c757d;
                /* Warna abu tipis */
            }

            .footer-right .total-container #total-price {
                font-size: 18px;
                /* Ukuran font untuk nilai total */
                color: #000;
                /* Warna hitam untuk nilai total */
            }

            .cart-footer .btn-primary {
                background-color: #10ABCF;
                border-color: #10ABCF;
                width: 149px;
                max-width: 149px;
                height: 40;
                padding: 10px;
                /* Memanjangkan tombol "Beli" */
                font-size: 16px;
                /* Menyesuaikan ukuran font pada tombol */
            }

            .product-actions .btn {
                margin-right: 5px;
            }
        </style>
    @endpush

    <!-- cdn leaflet -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
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
