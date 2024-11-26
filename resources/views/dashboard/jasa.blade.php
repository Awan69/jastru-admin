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

        .mobile-container {
            width: 100%;
            max-width: 480px;
            background-color: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow-y: auto;
            overflow-x: hidden;
        }

        .header {
            background-color: #fff;
            padding: 15px;
            border-top-left-radius: 16px;
            border-top-right-radius: 16px;
            display: flex;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 1000;
            margin-bottom: -10px;
        }

        .back-button {
            background: none;
            border: none;
            padding: 0;
            margin-right: 8px;
            display: flex;
            align-items: center;
        }

        .back-button img {
            width: 20px;
            height: 20px;
            margin-right: 4px;
            object-fit: contain;
            display: inline-block;
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
            width: 16px;
            height: 14px;
            margin-left: 5px;
            object-fit: contain;
            display: inline-block;
        }

        .header .location-title span {
            font-size: 14px;
            font-weight: bold;
            color: #020202;
        }

        .header .location p {
            font-size: 12px;
            color: #B6BDCA;
            margin: 0 0 0;
            font-weight: 400;
        }

        .location-title i {
            font-size: 15px;
            font-weight: 900;
            color: #10ABCF;
            text-shadow: 1px 0 #10ABCF, -1px 0 #10ABCF, 0 1px #10ABCF, 0 -1px #10ABCF;
            margin: 0 5px 0;
        }

        .search-bar {
            display: flex;
            align-items: center;
            margin: 10px 20px 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #ffffff;
            position: sticky;
            top: 60px;
            z-index: 999;
        }

        .search-bar input {
            flex-grow: 1;
            border: none;
            outline: none;
            font-size: 14px;
            padding-left: 35px;
            margin-left: -5px;
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

        .filter-buttons {
            display: flex;
            justify-content: flex-start;
            gap: 10px;
            overflow-x: auto;
            padding: 10px;
            margin-bottom: 5px;
            scrollbar-width: none;
        }

        .filter-buttons::-webkit-scrollbar {
            display: none;
        }

        .filter-buttons i {
            padding: 10px 15px;
            background-color: #f5f6f6;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 12px;
            font-weight: 600;
            cursor: pointer;
            flex-shrink: 0;
        }

        .filter-buttons button {
            padding: 10px 25px;
            background-color: #ffffff;
            border: 1px solid #EDEDED;
            border-radius: 30px;
            color: #494949;
            font-size: 12px;
            font-weight: 400;
            cursor: pointer;
            flex-shrink: 0;
        }

        .filter-buttons button.active {
            background-color: #20B1D31A;
            color: #10ABCF;
            border: none;
            opacity: 90%;
        }

        .title-section {
            border-top: 2px solid #EDEDED;
            text-align: left;
            padding: 10px 20px 0;
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
            margin-bottom: 20px;
            padding-bottom: 60px;
        }

        .card {
            background-color: #fff;
            padding: 0;
            text-align: left;
            border: 0;
            font-size: 0.9em;
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
            color: #ffc107;
            margin-top: -2px;
            font-size: 16px;
        }

        .card .rating .reviews {
            margin-left: 5px;
            font-size: 12px;
            margin-left: 5px;
            color: #979797;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <button class="back-button" onclick="goToHomePage()">
                <img src="asset/images/icon/backarrow.svg" alt="Back Arrow">
            </button>
            <div class="location">
                <div class="location-title">
                    <span>Lokasi Anda</span>
                    <img src="asset/images/icon/droparrow.svg" alt="Dropdown Arrow" class="dropdown-arrow">
                </div>
                <p>Blk. C No.94, Karanganyar, Kab Subang</p>
            </div>
        </div>

        <div class="search-bar">
            <input type="text" placeholder="Cari jasa, produk & seller">
            <img class="search-icon" src="asset/images/dashboard/search.svg" alt="Search Icon">
        </div>

        <div class="filter-buttons">
            <img src="asset/images/icon/filter.svg" alt="Filter Icon" class="filter-icon">
            <button id="terdekat" class="active">Terdekat</button>
            <button id="produk">Produk</button>
            <button id="jasa">Jasa</button>
            <button id="hargatermurah">Harga termurah</button>
            <button id="hargatinggi">Harga tertinggi</button>
        </div>

        <section>
            <div class="title-section">
                <h3>Jelajahi lebih banyak jasa & produk</h3>
                <p>Dapatkan jasa & produk terbaik untukmu</p>
            </div>
            <div class="card-container">
                <div class="card">
                    <div class="image"><img src="asset/images/dashboard/jasaanimasiwebsite.png" alt="Website Image">
                    </div>
                    <div class="title">Jasa animasi website interaktif javascript</div>
                    <div class="price">Rp750.000</div>
                    <div class="rating">
                        <span class="star">★</span>
                        <span class="reviews">4.5 (120 ulasan)</span>
                    </div>
                    <div class="location">Subang, Jawa Barat (0-1km)</div>
                </div>
                <div class="card">
                    <div class="image"><img src="asset/images/dashboard/jasacyber.png" alt="Security Image"></div>
                    <div class="title">Jasa Cyber Security Anti DDOS</div>
                    <div class="price-container">
                        <div class="price">Rp750.000</div>
                        <div class="discount-price">Rp 9.999.000</div>
                    </div>
                    <div class="rating"><span class="star">★</span><span class="reviews">4.5 (120 ulasan)</span>
                    </div>
                    <div class="location">Subang, Jawa Barat (0-1km)</div>
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
                    <div class="image"><img src="asset/images/dashboard/cpugamingmurah.png" alt="Computer Image">
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
                        <div class="image"><img src="asset/images/dashboard/keyboard_gaming.png" alt="Computer Image">
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
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous">
    </script>
    <script>
        function goToHomePage() {
            window.location.href = '{{ route('dashboard_user') }}';
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
