@extends('jasa.layout.jasa')

@section('tittle', 'Post Produk')

@section('content')

    <body>

        <div class="mobile-container">

            {{-- <div id="red-ball"></div> --}}

            <!-- Gambar Produk Kecil -->
            {{-- <img id="product-image" src="{{ asset('gambar/Post/Post-produk2.png') }}" alt="Product Image"> --}}
            <div class="content-button-post">
                <!-- Back Button -->
                <button class="back-button-post" onclick="history.back()">
                    <img src="{{ asset('gambar/backwhite.png') }}" alt="Back">
                </button>
                <button class="cart-button-post"><a href="/cart">
                    <img src="{{ asset('gambar/cartwhite.png') }}" alt="Back"></a>
                </button>
            </div>

            <!-- Product Image -->
            <div id="carouselExampleIndicators" class="carousel slide" data-interval="false">
                <!-- Indikator -->
                <ol class="carousel-indicators">
                    @foreach ($product->images as $key => $image)
                        <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="{{ $key == 0 ? 'active' : '' }}"></li>
                    @endforeach
                </ol>

                <!-- Gambar Carousel -->
                <div class="carousel-inner">
                    @if ($product->images->isNotEmpty())
                        @foreach ($product->images as $key => $image)
                            <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                <img src="{{ asset('storage/product_images/' . $image->image) }}" class="d-block w-100" alt="Product Image">
                            </div>
                        @endforeach
                    @else
                        <div class="carousel-item active">
                            <img src="{{ asset('default_image.png') }}" class="d-block w-100" alt="Default Product Image">
                        </div>
                    @endif
                </div>

                <!-- Tombol Navigasi -->
                @if ($product->images->count() > 1)
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                @endif
            </div>

            <!-- Product Details -->
            <div class="product-details">
                <div class="product-price-container">
                    <div style="display: flex; align-items: center; justify-content: space-between; width: 100%;">
                        <div style="display: flex; align-items: center;">
                            <span class="product-price">Rp {{ number_format($product->price, 0, ',', '.') }}</span>
                            <span class="product-price-discount">Rp 1.245.000</span>
                        </div>
                        <!-- Bookmark icon from Bootstrap -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-bookmark bookmark-icon" viewBox="0 0 16 16" onclick="toggleBookmark(this)">
                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1z"/>
                        </svg>
                    </div>
                </div>

                <p>{{ $product->name_product }}</p>

                <!-- Tab Buttons -->
                <div class="tab-container">
                    <button id="btn-spesifikasi" class="button-spesifikasi-rincian" onclick="showPopup()">
                        <p>Spesifikasi</p>
                        <p> Rincian ></p>
                    </button>
                </div>

                <!-- Product Description -->
                <div class="product-description">
                    <h3 class="description" style="font-weight: 500; font-size: 14px; margin-bottom: 15px;">Deskripsi</h3>
                    <p class="short-description" style="color: #A9A9A9; font-weight: 300; margin: 0;">
                        {!! nl2br(e(\Str::limit($product->detail_product, 300))) !!}
                        {{-- @if(strlen($product->detail_product) > 300)
                            <a href="javascript:void(0);" onclick="toggleDescription()">Baca Selengkapnya</a>
                        @endif --}}
                    </p>

                    <div class="long-description" style="display:none; color: #A9A9A9; font-weight: 300; margin: 0;">
                        {!! nl2br(e($product->detail_product)) !!}
                    </div>

                    <div class="more-description" onclick="toggleDescription()">
                        <span class="more-description-text">Selengkapnya</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down more-description-arrow" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"/>
                        </svg>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <div class="product-details-2">
                <!-- Action Buttons -->
                <div class="action-buttons">
                    <img src="{{ asset('gambar/Chat.png') }}" alt="Chat" class="chat-button">
                    <a href="/Cart">
                        <img src="{{ asset('gambar/Cart.png') }}" alt="Troli" class="troli-button">
                    </a>
                    <div class="order-now-button">Pesan Sekarang</div>
                </div>

                <!-- Reviews -->
                <div class="review-section">
                    <!--Rattinf Summary-->
                    <div class="rating-summary">
                        <div class="rating-header">
                            <h3 class="customer-reviews-title">Ulasan Customer</h3>
                            <a href="/ulasan" class="review-link">Lihat semua</a>
                        </div>

                        <div class="rating-summary-content">
                            <div class="rating-stars">&#9733;</div>
                            <div class="rating-details">
                                <div class="rating-value">4.9</div>
                                <div class="rating-text">/5.0 dari 30 ulasan</div>
                            </div>
                        </div>

                        <!-- Filter Capsules -->
                        <div class="filter-capsules">
                            <div class="filter-capsule" onclick="filterReviews('Semua')">Semua</div>
                            <div class="filter-capsule" onclick="filterReviews('Kualitas')">Kualitas (21)</div>
                            <div class="filter-capsule" onclick="filterReviews('Waktu')">Waktu (20)</div>
                            <div class="filter-capsule" onclick="filterReviews('Ramah')">Ramah (15)</div>
                            <div class="filter-capsule" onclick="filterReviews('Sesuai deskripsi')">Sesuai deskripsi</div>
                            <div class="filter-capsule" onclick="filterReviews('Cepat')">Cepat</div>
                        </div>
                    </div>


                    <!-- Review -->
                    <div class="review-item">
                        <div class="review-item-header">
                            <img src="{{ asset('gambar/Ulasan/pp1.png') }}" alt="Profile Photo" class="review-profile-photo">
                            <div class="review-content-post">
                                <div class="review-header-post">
                                    <span class="reviewer-name">Dzikri</span>
                                    <span class="review-date-post">1 Bulan Lalu</span>
                                </div>
                                <div class="review-rating">
                                    <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span> <!-- Example star rating -->
                                </div>
                                <div class="review-capsules">
                                    <div class="review-capsule">Kualitas</div>
                                    <div class="review-capsule">Ramah</div>
                                    <div class="review-capsule">Cepat</div>
                                </div>
                            </div>
                        </div>
                        <div class="review-item-content">
                            <div class="review-photo">
                                <img src="{{ asset('gambar/Ulasan/ulasan1.png') }}" alt="Product Photo">
                                <img src="{{ asset('gambar/Ulasan/ulasan2.png') }}" alt="Product Photo">
                                <img src="{{ asset('gambar/Ulasan/ulasan3.png') }}" alt="Product Photo">
                            </div>
                        </div>
                    </div>

                    <!-- Additional Review -->
                    <div class="review-item">
                        <div class="review-item-header">
                            <img src="{{ asset('gambar/Ulasan/pp2.png') }}" alt="Profile Photo" class="review-profile-photo">
                            <div class="review-content-post">
                                <div class="review-header-post">
                                    <span class="reviewer-name-post">Sopandi</span>
                                    <span class="review-date-post">2 Bulan Lalu</span>
                                </div>
                                <div class="review-rating">
                                    <span>&#9733;&#9733;&#9733;&#9733;</span> <!-- Example star rating -->
                                </div>
                                <div class="review-capsules">
                                    <div class="review-capsule">Sesuai Deskripsi</div>
                                    <div class="review-capsule">Cepat</div>
                                    <div class="review-capsule">Kualitas</div>
                                </div>
                            </div>
                        </div>
                        <div class="review-item-content">
                            <div class="review-photo">
                                <img src="{{ asset('gambar/Ulasan/ulasan4.png') }}" alt="Product Photo">
                                <img src="{{ asset('gambar/Ulasan/ulasan5.png') }}" alt="Product Photo">
                                <img src="{{ asset('gambar/Ulasan/ulasan6.png') }}" alt="Product Photo">
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the review item block for additional reviews -->

                    <!-- See All Reviews -->
                    <div class="see-all-reviews">
                        <a href="/ulasan" class="review-link">Lihat Semua Ulasan</a>
                    </div>
                </div>
            </div>
            <div class="separator"></div>
            <!--Profile Section-->
            <div class="profile-card">
                <div class="profile-header">
                    <div class="container-profile-picture">
                        <div class="profile-picture">
                            <img src="{{ asset('gambar/profile2.png') }}" alt="Profile Picture">
                        </div>
                        <div class="verified-badge">
                            <img src="{{ asset('gambar/verifiedseller.svg') }}" alt="Verified Badge">
                        </div>
                    </div>
                    <div class="profile-info">
                        <h3 class="profile-name">Jeni Lutfi Fauzi</h3>
                        <p class="last-online">Online 1 jam yang lalu</p>
                        <p class="profile-location">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="#10ABCF" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A32 32 0 0 1 8 14.58a32 32 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4m0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                            KOTA BANDUNG
                        </p>
                    </div>
                </div>
                <div class="profile-footer">
                    <div class="profile-footer-column">
                        <div class="profile-rating">
                            <span class="rating-star">&#9733;</span>
                            <span class="rating-number">4.9 (1,2 rb ulasan)</span>
                        </div>
                        <div class="order-processing">
                            <p><span class="processing-time">+2 Jam</span> pesanan diproses</p>
                        </div>
                    </div>
                    <button class="follow-button">Ikuti</button>
                </div>
            </div>

            <div class="separator"></div>
            <!-- Products Section -->
            <div class="content-carousel-post">
                <h2 class="text-lg font-bold mb-2" style="font-weight: 500">Jasa & produk pilihan seller ini</h2>
                <!-- Product Carousel -->
                <div class="horizontal-scroll">
                    <div class="product-container-post">
                        <!-- Mulai produk -->
                        <a href="/post" class="product-box bg-white hover:scale-105 transform transition duration-300 ease-in-out hover:glow-blue">
                            <div class="product-image">
                                <img src="{{ asset('gambar/Post/Post-produk3.png') }}" alt="Product 1">
                            </div>
                            <p class="product-name-listing truncate-2-lines">CPU Gaming spek dewa murah</p>
                            <p class="product-price-listing truncate-2-lines">Rp 9.999.000</p>
                            <p class="text-gray-400 line-through text-xs">Rp 11.000.000</p>
                        </a>
                        <!-- Ulangi produk dengan perubahan sesuai kebutuhan -->
                        <a href="/post" class="product-box bg-white hover:scale-105 transform transition duration-300 ease-in-out hover:glow-blue">
                            <img src="{{ asset('gambar/Post/Post-produk2.png') }}" alt="Product 2">
                            <p class="product-name-listing truncate-2-lines">Jasa animasi interaktif murah</p>
                            <p class="product-price-listing truncate-2-lines">Rp 80.000</p>
                        </a>
                        <a href="/post" class="product-box bg-white hover:scale-105 transform transition duration-300 ease-in-out hover:glow-blue">
                            <img src="{{ asset('gambar/Post/Post-produk1.png') }}" alt="Product 3">
                            <p class="product-name-listing truncate-2-lines">Mouse wireless gaming logitech</p>
                            <p class="product-price-listing truncate-2-lines">Rp 280.000</p>
                        </a>
                        <a href="/post" class="product-box bg-white hover:scale-105 transform transition duration-300 ease-in-out hover:glow-blue">
                            <img src="{{ asset('gambar/Post/Post-produk3.png') }}" alt="Product 1">
                            <p class="product-name-listing truncate-2-lines">CPU Gaming spek dewa murah</p>
                            <p class="product-price-listing truncate-2-lines">Rp 9.999.000</p>
                            <p class="text-gray-400 line-through text-xs">Rp 11.000.000</p>
                        </a>
                        <!-- Ulangi produk dengan perubahan sesuai kebutuhan -->
                        <a href="/post" class="product-box bg-white hover:scale-105 transform transition duration-300 ease-in-out hover:glow-blue">
                            <img src="{{ asset('gambar/Post/Post-produk2.png') }}" alt="Product 2">
                            <p class="product-name-listing truncate-2-lines">Jasa animasi interaktif murah</p>
                            <p class="product-price-listing truncate-2-lines">Rp 80.000</p>
                        </a>
                        <a href="/post" class="product-box bg-white hover:scale-105 transform transition duration-300 ease-in-out hover:glow-blue">
                            <img src="{{ asset('gambar/Post/Post-produk1.png') }}" alt="Product 3">
                            <p class="product-name-listing truncate-2-lines">Mouse wireless gaming logitech</p>
                            <p class="product-price-listing truncate-2-lines">Rp 280.000</p>
                        </a>
                        <!-- Tambahkan produk lainnya sesuai kebutuhan -->
                    </div>
                </div>
            </div>
            {{-- <br>
            <br> --}}

            <div class="overlay" id="overlay"></div>
            <!-- Pop-up Spesifikasi -->
            <div class="popup" id="popup">
                <div class="btn-spesifikasi">
                    <h2>Spesifikasi</h2>
                </div>
                <div class="spec-row">
                    <span>Stok</span><span>3124</span>
                </div>
                <div class="spec-row">
                    <span>Merk</span><span>Rexus</span>
                </div>
                <div class="spec-row">
                    <span>Garansi</span><span>Garansi 1 bulan toko</span>
                </div>
                <div class="spec-row">
                    <span>Penyedia Layanan</span><span>Jenlutstore</span>
                </div>
                <div class="spec-row">
                    <span>Lokasi</span><span>Subang</span>
                </div>
                <button class="btn-ok">OK</button>
            </div>

            <!--Pop Up Cart-->
            <!-- Cart Pop-up -->
            <div class="cart-popup hide" id="cart-popup">
                <!-- Close Button -->
                <span class="close-button" id="close-popup">&times;</span>

                <!-- Popup Content -->
                <h3 class="popup-title">Spesifikasi</h3>
                <div class="popup-content">
                    <img src="{{ asset('gambar/Post/Post-produk2.png') }}" alt="Mekanikal Keyboard Gaming" class="product-image-pop-up">
                    <div class="product-details">
                        <p class="product-name">Mekanikal Keyboard Gaming..</p>
                        <p class="product-price">Rp 400.000 <span class="old-price">Rp 400.000</span></p>
                        <p class="stock-info">Stok: 34</p>
                    </div>
                </div>

                <!-- Spec Options -->
                <p style="text-align: left;">Spesifikasi :</p>
                <div class="spec-options">
                    <span class="spec-button">Pro</span>
                    <span class="spec-button">Seri Alpha</span>
                    <span class="spec-button">Seri Beta</span>
                    <span class="spec-button">Seri M</span>
                    <span class="spec-button">Seri V</span>
                </div>

                <!-- Add to Cart Button -->
                <button class="btn-add-to-cart">Masukan keranjang</button>
            </div>
        </div>

    </body>
@endsection
