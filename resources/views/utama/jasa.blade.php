<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jasa & Produk Terdekat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        /* Adjusted Container */
        .mobile-container {
            width: 100%;
            max-width: 480px;
            /* Disamakan dengan container di CSS lainnya */
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            overflow-x: hidden;
        }

        /* Header */
        .header {
            background-color: #fff;
            padding: 15px;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            /* Posisi saat sticky, tetap di atas */
            z-index: 1000;
            /* Pastikan header berada di atas elemen lainnya */
        }

        .header .back-button {
            background: none;
            border: none;
            cursor: pointer;
            padding: 0;
            margin-right: 10px;
        }

        .header .back-button img {
            width: 30px;
            height: 20px;
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

        .header .location-title .dropdown-arrow {
            display: inline-block;
            width: 10px;
            height: 10px;
            margin-right: 5px;
            border-right: 2px solid #333;
            border-bottom: 2px solid #333;
            transform: rotate(45deg);
            transition: transform 0.3s ease;
        }

        .header .location-title span {
            font-size: 14px;
            font-weight: bold;
            color: #020202;
        }

        .header .location p {
            font-size: 12px;
            color: #666;
            margin: 5px 0 0;
            font-weight: normal;
        }

        .header .location i {
            font-size: 15px;
            color: #10ABCF;
            margin: 5px 0 0;
            font-weight: normal;
        }

        /* Search Bar */
        .search-bar {
            display: flex;
            align-items: center;
            margin: 10px 20px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f5f6f6;
            position: sticky;
            top: 60px;
            /* Menyesuaikan posisi dengan tinggi header jika diperlukan */
            z-index: 999;
            /* Pastikan search bar berada di bawah header tetapi di atas elemen lainnya */
        }

        .search-bar input {
            flex-grow: 1;
            border: none;
            outline: none;
            font-size: 14px;
            padding-left: 35px;
            background-color: transparent;
        }

        .search-bar input::placeholder {
            color: #888;
        }

        .search-bar .search-icon {
            position: absolute;
            left: 10px;
            width: 16px;
            height: 16px;
        }

        /* Filter Buttons */
        .filter-buttons {
            display: flex;
            justify-content: space-around;
            margin-bottom: 10px;
        }

        .filter-buttons i {
            padding: 10px 15px;
            background-color: #f5f6f6;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 12px;
            cursor: pointer;
        }

        .filter-buttons button {
            padding: 10px 25px;
            background-color: #f5f6f6;
            border: 1px solid #ccc;
            border-radius: 30px;
            font-size: 12px;
            cursor: pointer;
        }

        .filter-buttons button.active {
            background-color: #8cc8e7;
            color: #fff;
            border: none;
            opacity: 90%;
        }

        /* Title and Subtitle */
        .title-section {
            text-align: left;
            padding: 0 20px;
            margin-bottom: 10px;
        }

        .title-section h3 {
            font-size: 16px;
            margin: 5px 0;
            color: #333;
        }

        .title-section p {
            font-size: 14px;
            color: #777;
            margin: 0;
        }

        /* Card Grid */
        .card-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 10px;
            padding: 0 10px;
        }

        .card {
            background-color: #fff;
            border-radius: 10px;
            padding: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: left;
        }

        .card .image {
            width: 100%;
            height: 120px;
            border-radius: 10px;
            overflow: hidden;
        }

        .card img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .card .title {
            font-size: 14px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
            text-align: left;
        }

        .card .price {
            font-size: 14px;
            color: #00aaff;
            margin-top: 5px;
            text-align: left;
        }

        .card .rating {
            display: flex;
            align-items: center;
            margin-top: 5px;
        }

        .card .rating .star {
            color: #ffc107;
            font-size: 12px;
        }

        .card .rating .reviews {
            margin-left: 5px;
            font-size: 10px;
            color: #666;
        }

        .card .location {
            font-size: 10px;
            color: #666;
            margin-top: 5px;
            text-align: left;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <button class="back-button" onclick="goToHomePage()">
                <img src="asset/images/icon/backarrow.png" alt="Back Arrow">
            </button>
            <div class="location">
                <div class="location-title">
                    <span>Lokasi Anda</span>
                    <i class="bi bi-chevron-down"></i>
                </div>
                <p>Blk. C No.94, Karanganyar, Kab Subang</p>
            </div>
        </div>

        <div class="search-bar">
            <input type="text" placeholder="Cari jasa, produk & seller">
            <img class="search-icon" src="asset/images/dashboard/search.png" alt="Search Icon">
        </div>

        <div class="filter-buttons">
            <i class="bi bi-sliders"></i>
            <button id="terdekat" class="active">Terdekat</button>
            <button id="produk">Produk</button>
            <button id="jasa">Jasa</button>
            <button id="harga">Harga</button>
        </div>


        <div class="title-section">
            <h3>Jelajahi lebih banyak jasa & produk</h3>
            <p>Dapatkan jasa & produk terbaik untukmu</p>
        </div>

        <div class="card-container">
            <div class="card">
                <div class="image">
                    <img src="asset/images//dashboard/jasaanimasiwebsite.png" alt="Website Image">
                </div>
                <div class="title">Jasa Animasi Website Interaktif Javascript</div>
                <div class="price">Rp1.000.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="asset/images/jasacyber.png" alt="Security Image">
                </div>
                <div class="title">Jasa Cyber Security Anti DDOS</div>
                <div class="price">Rp750.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="asset/images/jasapembuatanmobileapp.png" alt="Mobile App Image">
                </div>
                <div class="title">Jasa Pembuatan Mobile App Responsive</div>
                <div class="price">Rp1.000.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="asset/images/cpugamingmurah.png" alt="Computer Image">
                </div>
                <div class="title">CPU Gaming murah Jual Cepat Stok terbatas</div>
                <div class="price">Rp750.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="asset/images/jasapembuatansistemecomerce.png" alt="Computer Image">
                </div>
                <div class="title">Jasa Pembuatan Website Ecommerce</div>
                <div class="price">Rp15.000.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="asset/images/jasapembuatangame.png" alt="Computer Image">
                </div>
                <div class="title">Jasa Pembuatan Game Online</div>
                <div class="price">Rp100.000.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="asset/images/jasapembuatangame.png" alt="Computer Image">
                </div>
                <div class="title">Jasa Pembuatan Game Online</div>
                <div class="price">Rp100.000.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>

            <div class="card">
                <div class="image">
                    <img src="asset/images/jasapembuatangame.png" alt="Computer Image">
                </div>
                <div class="title">Jasa Pembuatan Game Online</div>
                <div class="price">Rp100.000.000</div>
                <div class="rating">
                    <span class="star">★</span><span class="star">★</span><span class="star">★</span><span
                        class="star">★</span><span class="star">★</span>
                    <span class="reviews">4.5 (120 ulasan)</span>
                </div>
                <div class="location">Subang, Jawa Barat (0-1km)</div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script>
        function goToHomePage() {
            window.location.href = '{{ route('beranda') }}';
        }
    </script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const filterButtons = document.querySelectorAll('.filter-buttons button');

            filterButtons.forEach(button => {
                button.addEventListener('click', () => {
                    // Remove 'active' class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));

                    // Add 'active' class to the clicked button
                    button.classList.add('active');
                });
            });
        });
    </script>

</body>

</html>
