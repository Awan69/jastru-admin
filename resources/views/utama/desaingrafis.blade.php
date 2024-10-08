<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Listing</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
        .tabs a.active {
            color: #1d4ed8; /* Warna biru */
            border-bottom: 2px solid #1d4ed8; /* Garis bawah */
            font-weight: bold;
        }
        .product-container {
            display: flex;
            overflow-x: auto;
            gap: 1rem;
        }
        .product-box-carousel {
            width: 150px;
            min-width: 150px;
        }
        .product-box-more {
            width: 100%;
        }
        .product-image {
            width: 100%;
            padding-top: 100%; /* Rasio 1:1 */
            position: relative;
        }
        .product-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <!-- Search Bar -->
        <div class="top-bar">
            <button>
                <img src="{{ asset('gambar/Kembali.png') }}" alt="Back" class="h-5 mr-2">
            </button>
            <div class="relative flex-1">
                <input type="text" class="w-full py-2 pl-10 pr-4 border border-gray-300 rounded-full focus:outline-none" placeholder="Cari jasa, produk & seller">
                <img src="{{ asset('gambar/Search.png') }}" alt="Search" class="absolute left-3 top-1/2 transform -translate-y-1/2 h-5">
            </div>
            <div class="icons">
                <div>
                    <img src="{{ asset('gambar/Keranjang.png') }}" alt="Cart">
                    <div class="badge">3</div>
                </div>
                <div>
                    <img src="{{ asset('gambar/Notifikasi.png') }}" alt="Notifications">
                    <div class="badge">9+</div>
                </div>
            </div>
        </div>

        <!-- Menambahkan margin-top untuk banner -->
        <div class="relative mt-24">
            <img src="{{ asset('gambar/banner jastru/jasa 2/Web Banner Jasa DG.jpg') }}" alt="Banner" class="w-full h-50 object-cover">
            <div class="absolute inset-x-0 bottom-0 transform translate-y-1/2 flex justify-center">
            </div>
        </div>

        <!-- Tabs -->
        <div class="tabs bg-white shadow-md flex">
            <a href="#" class="text-gray-600" data-category="untuk-kamu">Untuk kamu</a>
            <a href="#" class="text-gray-600" data-category="banner">Banner</a>
            <a href="#" class="text-gray-600" data-category="poster">Poster</a>
            <a href="#" class="text-gray-600" data-category="coverbook">Coverbook</a>
        </div>

        <!-- Products Section -->
        <div class="content p-4">
            <h2 class="text-lg font-bold mb-2">Jasa Desain Grafis untuk kamu 🔥</h2>

            <!-- Product Carousel -->
            <div class="horizontal-scroll product-container" id="carousel-products">
                <!-- Produk carousel akan diisi oleh JavaScript -->
            </div>

            <!-- Special Offer Banner -->
            <div class="relative mb-5">
                <img src="{{ asset('gambar/banner jastru/deal/Banner jastru panjang.jpg') }}" alt="Special Offer" class="w-full h-24 object-cover">
            </div>
            <h2 class="text-lg font-bold mb-2">Jasa Desain Grafis untuk kamu 🔥</h2>

            <!-- More Products -->
            <div class="grid grid-cols-2 gap-4" id="more-products">
                <!-- Produk akan diisi oleh JavaScript -->
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            var tabs = document.querySelectorAll('.tabs a');
            var moreProductsContainer = document.getElementById('more-products');
            var carouselProductsContainer = document.getElementById('carousel-products');

            var products = {
                "untuk-kamu": [
                    { name: "Jasa Animasi Website Interaktif", price: "Rp 1.000.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.5 (75 ulasan)" },
                    { name: "Jasa Cyber Security Anti DDOS", price: "Rp 750.000", discount: "Rp 1.500.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.5 (75 ulasan)" },
                    { name: "Jasa Desain Cover Buku", price: "Rp 150.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.9 (85 ulasan)" },
                    { name: "Jasa Desain Cover Novel", price: "Rp 200.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.7 (55 ulasan)" },
                    { name: "Jasa Pembuatan Banner Promosi", price: "Rp 500.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.7 (50 ulasan)" },
                    { name: "Jasa Banner Digital Marketing", price: "Rp 450.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.6 (80 ulasan)" },
                    { name: "Jasa Desain Poster Event", price: "Rp 300.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.8 (65 ulasan)" },
                    { name: "Jasa Desain Poster Online", price: "Rp 250.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.5 (70 ulasan)" }
                ],
                "banner": [
                    { name: "Jasa Pembuatan Banner Promosi", price: "Rp 500.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.7 (50 ulasan)" },
                    { name: "Jasa Banner Digital Marketing", price: "Rp 450.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.6 (80 ulasan)" }
                ],
                "poster": [
                    { name: "Jasa Desain Poster Event", price: "Rp 300.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.8 (65 ulasan)" },
                    { name: "Jasa Desain Poster Online", price: "Rp 250.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.5 (70 ulasan)" }
                ],
                "coverbook": [
                    { name: "Jasa Desain Cover Buku", price: "Rp 150.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.9 (85 ulasan)" },
                    { name: "Jasa Desain Cover Novel", price: "Rp 200.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.7 (55 ulasan)" }
                ]
            };

            function loadProducts(category, container, isCarousel = false) {
                container.innerHTML = ''; // Kosongkan kontainer
                const productClass = isCarousel ? 'product-box-carousel' : 'product-box-more';

                products[category].forEach(function (product) {
                    var productHTML = `
                        <a href="{{ url('Post') }}" class="bg-white shadow-md rounded-md p-4 ${productClass}">
                            <div class="product-image">
                                <img src="${product.image}" alt="${product.name}">
                            </div>
                            <p class="mt-2 text-sm">${product.name}</p>
                            <p class="text-red-600 font-bold">${product.price} ${product.discount ? `<span class="line-through">${product.discount}</span>` : ''}</p>
                            <p class="text-gray-600 text-xs">${product.rating}</p>
                        </a>
                    `;
                container.insertAdjacentHTML('beforeend', productHTML);
            });
}

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Hapus kelas 'active' dari semua tab
                    tabs.forEach(function (t) {
                        t.classList.remove('active');
                    });

                    // Tambahkan kelas 'active' pada tab yang diklik
                    this.classList.add('active');

                    // Muat produk sesuai kategori
                    var category = this.getAttribute('data-category');
                    loadProducts(category, moreProductsContainer);
                    loadProducts(category, carouselProductsContainer, true);
                });
            });

            // Muat produk pertama kali (default: untuk-kamu)
            loadProducts('untuk-kamu', moreProductsContainer);
            loadProducts('untuk-kamu', carouselProductsContainer, true);
        });
    </script>
</body>

</html>
