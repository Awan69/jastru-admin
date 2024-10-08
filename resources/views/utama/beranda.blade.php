<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>

<style>
    /* body {
        font-family: "Inter", system-ui;
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
        min-height: 140vh;
        height: 100%;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    } */

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
        font-family: "Inter", system-ui;
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
        margin: 5px 15px;
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
        font-weight: 300;
        display: block;
        color: #000;
    }

    /* Tabs Section */
    .tabs {
        font-family: "Inter", system-ui;
        font-optical-sizing: auto;
        font-weight: 400;
        font-style: normal;
        display: flex;
        justify-content: space-between;
        margin: 15px 15px;
        padding: 5px;
        background: #f1f1f1;
        border-radius: 8px;
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
        color: rgb(38, 35, 35);
        border: none;
        padding: 10px 20px;
        border-radius: 4px;
        cursor: pointer;
        flex: 1;
        margin: 5px;
        font-size: 16px;
        font-weight: 400;
    }

    .tabs button.active {
        background-color: #10ABCF;
        color: #e0e0e0
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

    /* Discount Section */
    .discount {
        font-size: 14px;
        /* Slightly larger font for visibility */
        color: #ff0000;
        /* Red color for visibility */
        font-weight: bold;
        margin: 10px 15px;
        /* Adjust margin */
        padding: 15px;
        /* Add padding to create space around the image */
        display: flex;
        align-items: center;
        justify-content: space-between;
        /* Evenly distribute elements */
        background-color: #fff;
        /* Background color for discount section */
        border-radius: 8px;
        /* Slightly rounded corners */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Optional shadow */
        box-sizing: border-box;
        /* Ensure padding doesn't add to width */
    }

    .discount img {
        width: 100%;
        /* Increase width to fill the container */
        height: auto;
        /* Maintain aspect ratio */
        object-fit: cover;
        /* Ensure the image covers the entire area */
        border-radius: 8px;
        /* Slightly rounded corners, remove if you want sharp edges */
        margin-right: 10px;
        /* Add space between the image and text */
    }

    /* Services Grid Section */
    .services-grid {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        /* 4 columns */
        gap: 20px;
        padding: 20px;
        margin: 10px 15px;
        /* Consistent margin with other sections */
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
        /* Fixed size for background */
        height: 100px;
        /* Fixed size for background */
        border-radius: 50%;
        /* Make the background circular */
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        /* Optional shadow */
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 0 auto;
        /* Ensure the background is centered */
    }

    .service-item img {
        width: 50px;
        /* Image size inside the background */
        height: 50px;
        /* Image size inside the background */
        border-radius: 50%;
        /* Make the image circular */
        object-fit: cover;
    }

    .service-name {
        font-size: 12px;
        margin-top: 10px;
        color: #444040;
    }

    /* Overlay styles */
    .overlay {
        position: fixed;
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100%;
        max-width: 480px;
        background-color: rgba(0, 0, 0, 0.5);
        display: none;
        justify-content: flex-end;
        z-index: 1000;
    }

    .overlay-content {
        width: 100%;
        background-color: #fff;
        padding: 20px;
        border-radius: 20px 20px 0 0;
        box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
        max-height: 75vh;
        overflow-y: auto;
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

    .category-section h3 {
        font-size: 16px;
        margin-bottom: 10px;
        color: #333;
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

    .flash-deal-item img {
        width: 100%;
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
        color: #bbbbbb;
        text-decoration: line-through;
        text-align: left;
        /* Align text to the left */
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
        margin-bottom: 10px;
    }

    .title-section h3 {
        font-size: 18px;
        margin: 5px 0;
        color: #333;
    }

    .title-section p {
        font-size: 15px;
        color: #777;
        margin: 0;
    }

    /* Card Container */
    .card-container {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 10px;
        padding: 0 10px;
        margin-bottom: 20px;
        padding-bottom: 60px;
    }

    .card {
        background-color: #fff;
        padding: 10px;
        text-align: left;
        border: 0;
    }

    .card .image {
        width: 100%;
        height: 120px;
        overflow: hidden;
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
        text-align: left;
    }

    .card .price {
        font-size: 16px;
        font-weight: 600;
        margin-top: 5px;
        text-align: left;
    }

    .card .rating {
        display: flex;
        align-items: center;
        margin-top: 5px;
    }

    .card .location {
        font-size: 10px;
        font-weight: 400;
        margin-top: 5px;
        text-align: left;
        color: #666;
    }

    .card .rating .star {
        color: #ffc107;
        font-size: 20px;
    }

    .card .rating .reviews {
        margin-left: 5px;
        font-size: 10px;
        color: #666;
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
</style>

<body>
    <div class="mobile-container">
        <div class="top-bar d-flex gap-2">
            <div class="search-bar" onclick="window.location.href='{{ route('jasa') }}';">
                <div class="search-wrapper">
                    <img class="search-icon" src="asset/images/dashboard/search.png" alt="Search Icon">
                    <input type="text" placeholder="Cari jasa, produk & seller">
                </div>
            </div>
            <div class="icons">
                <div type="button"><a href="/cart"><img src="asset/images/icon/chart.png" alt="Chart"></a><span
                        class="badge">2</span>
                </div>
                <div><img src="asset/images/icon/notif.png" alt="Notifications"><span class="badge">3</span></div>
            </div>
        </div>
        <section class="promo-section">
            <div class="header-container">
                <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel"
                    data-bs-interval="3000">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="asset/images/dashboard/flashsale1.jpg" class="d-block w-100" alt="Flash Sale 1">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/dashboard/flashsale2.jpg" class="d-block w-100" alt="Flash Sale 2">
                        </div>
                        <div class="carousel-item">
                            <img src="asset/images/dashboard/flashsale3.jpg" class="d-block w-100" alt="Flash Sale 3">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="balance">
            <div class="amount"><img src="asset/images/icon/saldo.png" alt="Saldo">
                <div><span class="amount-value">Rp150.000;</span><span>Total Saldo</span></div>
            </div>
            <div class="action" type="button"><img src="asset/images/icon/plush.png" alt="Topup"><span>Topup</span>
            </div>
            <div class="action" type="button"><img src="asset/images/icon/tarik_tunai.png"
                    alt="Tarik Saldo"><span>Tarik
                    Saldo</span>
            </div>
            <div class="action" type="button"><img src="asset/images/icon/riwayat_transaksi.png"
                    alt="Riwayat"><span>Riwayat</span>
            </div>
        </div>
        </section>
        <section>
            <div class="tabs">
                <button id="jasa-tab" class="active">JASA</button>
                <button id="produk-tab">PRODUK</button>
            </div>
            <section class="services-section flex-grow-1">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="jasa">
                        <div class="services-grid">
                            <!-- Jasa Items -->
                            <div class="service-item" type="button"><img src="asset/images/jasa/desain_grafis.png"
                                    alt="Jasa Tukang">
                                <div class="service-name">Jasa tukang</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_tukang.png"
                                    alt="Jasa Tukang">
                                <div class="service-name">Jasa tukang</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/video_animasi.png"
                                    alt="Video & Animasi">
                                <div class="service-name">Video & animasi</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/jasa/service_elektronik.png" alt="Service Elektronik">
                                <div class="service-name">Service elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_cleaning.png"
                                    alt="Cleaning Service">
                                <div class="service-name">Cleaning service</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_reparasi.png"
                                    alt="Reparasi Kendaraan">
                                <div class="service-name">Reparasi kendaraan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_antar.png"
                                    alt="Jasa Antar">
                                <div class="service-name">Jasa Antar</div>
                            </div>
                            <div class="service-item jasa-lainnya" type="button">
                                <img src="asset/images/jasa/jasa_lainnya.png" alt="Jasa Lainnya">
                                <div class="service-name">Jasa lainnya</div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="produk">
                        <div class="services-grid">
                            <!-- Produk Items -->
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/makanan_minuman.png" alt="Makan dan Minum">
                                <div class="service-name">Makanan & Minuman</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/bahan_bangunan.png" alt="Makan Minum">
                                <div class="service-name">Bahan Bangunan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/elektronik.png"
                                    alt="Elektronik">
                                <div class="service-name">Elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/pertanian_peternakan.png" alt="Service Elektronik">
                                <div class="service-name">Pertanian & Peternakan</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/peralatan_rumah.png" alt="Cleaning Service">
                                <div class="service-name">Peralatan Rumah</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/tumbuhan.png"
                                    alt="Tumbuhan">
                                <div class="service-name">Tumbuhan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/pakaian.png"
                                    alt="Pakaian">
                                <div class="service-name">Pakaian</div>
                            </div>
                            <div class="service-item jasa-lainnya" type="button">
                                <img src="asset/images/jasa/jasa_lainnya.png" alt="Jasa Lainnya">
                                <div class="service-name">Jasa lainnya</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="discount">
                    <div class="discount-banner1">
                        <img src="asset/images/diskon_banner/diskon_banner1.png" alt="Discount Image">
                    </div>
                    <div class="discount-banner2">
                        <img src="asset/images/diskon_banner/diskon_banner2.png" alt="Discount Image 2">
                    </div>
                </div>
            </section>
            <section>
                <div class="flash-deal">
                    <div class="flash-deal-banner">
                        <div class="flashdeal">
                            <img src="asset/images/dashboard/flash_deal20.png" alt="Discount Image">
                        </div>
                        <p>Mulai dari</p>
                        <h3>Rp 100 rb*</h3><button class="promo-button">Cek Promo</button>
                        <p class="terms">S&K Berlaku</p>
                    </div>
                    <div class="flash-deal-container">
                        <div class="flash-deal-item">
                            <img src="asset/images/dashboard/cpugamingmurah.png" alt="CPU Gaming Spek Dewa Murah">
                            <div class="title">CPU Gaming Spek Dewa Murah</div>
                            <p class="discount-price">Rp 9.999.000</p>
                            <p class="original-price">Rp 11.000.000</p>
                        </div>
                        <div class="flash-deal-item">
                            <img src="asset/images/dashboard/jasaanimasiwebsite.png" alt="Website Interaktif">
                            <div class="title">Jasa animasi interaktif Murah</div>
                            <p class="discount-price">Rp 80.000</p>
                            <p class="original-price">Rp 100.000</p>
                        </div>
                        <div class="flash-deal-item">
                            <img src="asset/images/dashboard/mousemurah.png" alt="Mouse Murah">
                            <div class="title">Mouse Wireless Logitech........</div>
                            <p class="discount-price">Rp 80.000</p>
                            <p class="original-price">Rp 100.000</p>
                        </div>
                        <div class="flash-deal-item">
                            <img src="asset/images/dashboard/jasapembuatansistemecomerce.png" alt="Website Murah">
                            <div class="title">Jasa pembuatan website....</div>
                            <p class="discount-price">Rp 80.000</p>
                            <p class="original-price">Rp 100.000</p>
                        </div>
                    </div>
            </section>
            <section>
                <div class="title-section">
                    <h3>Jelajahi lebih banyak jasa & produk</h3>
                    <p>Dapatkan jasa & produk terbaik untukmu</p>
                </div>
                <div class="card-container">
                    <div class="card">
                        <div class="image"><img src="asset/images/dashboard/jasaanimasiwebsite.png"
                                alt="Website Image">
                        </div>
                        <div class="title">Jasa animasi website interaktif javascript</div>
                        <div class="price">Rp1.000.000</div>
                        <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120
                                ulasan)</span></div>
                        <div class="location">Subang,
                            Jawa Barat (0-1km)</div>
                    </div>
                    <div class="card">
                        <div class="image"><img src="asset/images/dashboard/jasacyber.png" alt="Security Image">
                        </div>
                        <div class="title">Jasa Cyber Security Anti DDOS</div>
                        <div class="price">Rp750.000</div>
                        <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120
                                ulasan)</span></div>
                        <div class="location">Subang,
                            Jawa Barat (0-1km)</div>
                    </div>
                    <div class="card">
                        <div class="image"><img src="asset/images//dashboard/jasapembuatanmobileapp.png"
                                alt="Mobile App Image">
                        </div>
                        <div class="title">Jasa pembuatan mobile app responsive</div>
                        <div class="price">Rp2.320.000</div>
                        <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120
                                ulasan)</span></div>
                        <div class="location">Subang,
                            Jawa Barat (0-1km)</div>
                    </div>
                    <div class="card">
                        <div class="image"><img src="asset/images/dashboard/cpugamingmurah.png"
                                alt="Computer Image">
                        </div>
                        <div class="title">CPU Gaming murah jual cepat stok terbatas</div>
                        <div class="price">Rp7.500.000</div>
                        <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120
                                ulasan)</span></div>
                        <div class="location">Subang,
                            Jawa Barat (0-1km)</div>
                    </div>
                    <div class="card" type="button">
                        <a href="/post">
                            <div class="image"><img src="asset/images/dashboard/keyboard_gaming.png"
                                    alt="Computer Image">
                            </div>
                            <div class="title">Mekanikal Keyboard Gaming dengan RGB Light</div>
                            <div class="price">Rp450.000</div>
                            <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120
                                    ulasan)</span></div>
                            <div class="location">Subang,
                                Jawa Barat (0-1km)</div>
                        </a>
                    </div>
                    <div class="card">
                        <div class="image"><img src="asset/images/dashboard/mousemurah.png" alt="Computer Image">
                        </div>
                        <div class="title">Mouse Wireless anti lemot Murah</div>
                        <div class="price">Rp250.000</div>
                        <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120
                                ulasan)</span></div>
                        <div class="location">Subang,
                            Jawa Barat (0-1km)</div>
                    </div>
                    <div class="card">
                        <div class="image"><img src="asset/images/dashboard/jasapembuatansistemecomerce.png"
                                alt="Computer Image">
                        </div>
                        <div class="title">Jasa pembuatan website e-commerce murah</div>
                        <div class="price">Rp1.250.000</div>
                        <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120
                                ulasan)</span></div>
                        <div class="location">Subang,
                            Jawa Barat (0-1km)</div>
                    </div>
                </div>
            </section>
            <section>
                <div class="footer">
                    <a href="{{ route('beranda') }}" class="footer-link">
                        <div>
                            <img src="asset/images/navigasi/beranda.png" alt="Beranda">
                            <span>Beranda</span>
                        </div>
                    </a>
                    <a href="{{ route('pesan') }}" class="footer-link">
                        <div>
                            <img src="asset/images/navigasi/chat_inbox.png" alt="Pesan">
                            <span>Pesan</span>
                        </div>
                    </a>
                    <div>
                        <img src="asset/images/navigasi/profil.png" alt="Profile" class="img-profil">
                        <span>Profile</span>
                    </div>
                    <a href="/pekerjaan2"><i class="bi bi-arrow-left"></i>
                        <div>
                            <img src="asset/images/navigasi/pekerjaan.png" alt="Pekerjaan">
                            <span>Pekerjaan</span>
                        </div>
                    </a>
                    <a href="{{ route('setting') }}" class="footer-link">
                        <div>
                            <img src="asset/images/navigasi/setting.png" alt="Setting">
                            <span>Setting</span>
                        </div>
                    </a>
                </div>
            </section>
            <!-- Overlay -->
            <div id="overlay" class="overlay">
                <div class="overlay-content">
                    <span id="close-overlay" class="close-btn">&times;</span>
                    <div class="category-section">
                        <h2>Kategori jasa</h2>
                        <div class="services-grid">
                            <!-- Jasa Items -->
                            <div class="service-item" type="button"><img src="asset/images/jasa/desain_grafis.png"
                                    alt="Jasa Tukang">
                                <div class="service-name">Jasa tukang</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_tukang.png"
                                    alt="Jasa Tukang">
                                <div class="service-name">Jasa tukang</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/video_animasi.png"
                                    alt="Video & Animasi">
                                <div class="service-name">Video & animasi</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/jasa/service_elektronik.png" alt="Service Elektronik">
                                <div class="service-name">Service elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_cleaning.png"
                                    alt="Cleaning Service">
                                <div class="service-name">Cleaning service</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_reparasi.png"
                                    alt="Reparasi Kendaraan">
                                <div class="service-name">Reparasi kendaraan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/jasa/jasa_antar.png"
                                    alt="Jasa Antar">
                                <div class="service-name">Jasa Antar</div>
                            </div>
                        </div>
                    </div>
                    <div class="category-section">
                        <h3>Kategori produk</h3>
                        <div class="services-grid">
                            <!-- Produk Items -->
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/makanan_minuman.png" alt="Makan dan Minum">
                                <div class="service-name">Makanan & Minuman</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/bahan_bangunan.png" alt="Makan Minum">
                                <div class="service-name">Bahan Bangunan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/elektronik.png"
                                    alt="Elektronik">
                                <div class="service-name">Elektronik</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/pertanian_peternakan.png" alt="Service Elektronik">
                                <div class="service-name">Pertanian & Peternakan</div>
                            </div>
                            <div class="service-item" type="button"><img
                                    src="asset/images/produk/peralatan_rumah.png" alt="Cleaning Service">
                                <div class="service-name">Peralatan Rumah</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/tumbuhan.png"
                                    alt="Tumbuhan">
                                <div class="service-name">Tumbuhan</div>
                            </div>
                            <div class="service-item" type="button"><img src="asset/images/produk/pakaian.png"
                                    alt="Pakaian">
                                <div class="service-name">Pakaian</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                document.querySelectorAll('.jasa-lainnya').forEach(item => {
                    item.addEventListener('click', openOverlay);
                });

                function openOverlay() {
                    const overlay = document.getElementById('overlay');
                    overlay.style.display = 'flex';
                }

                function closeOverlay() {
                    const overlay = document.getElementById('overlay');
                    overlay.style.display = 'none';
                }

                document.getElementById('close-overlay').addEventListener('click', closeOverlay);
            </script>
            <script>
                const jasaTab = document.getElementById('jasa-tab');
                const produkTab = document.getElementById('produk-tab');

                const kontenJasa = document.getElementById('jasa');
                const kontenProduk = document.getElementById('produk');

                jasaTab.addEventListener('click', () => {
                    kontenJasa.classList.add('show', 'active');
                    kontenProduk.classList.remove('show', 'active');
                    jasaTab.classList.add('active');
                    produkTab.classList.remove('active');
                });

                produkTab.addEventListener('click', () => {
                    kontenProduk.classList.add('show', 'active');
                    kontenJasa.classList.remove('show', 'active');
                    produkTab.classList.add('active');
                    jasaTab.classList.remove('active');
                });
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
