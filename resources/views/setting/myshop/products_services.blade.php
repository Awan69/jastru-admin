@extends('setting.layout.setting')

@section('title', 'Product & Services')
@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="/myshop">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Produk & Jasa saya</h2>
            </div>
            <div class="products-services-button-container">
                <button class="products-services-button active" id="services-button"> Jasa</button>
                <button class="products-services-button" id="products-button"> Produk</button>
            </div>

            <section id="services-section" class="products-services-card-container">
                @foreach ($services as $service)
                    <div class="products-services-card">
                        <img src="{{ $service->image_to_show }}" alt="{{ $service->service_name }}">
                        <div class="products-services-card-body">
                            <h5 class="products-services-card-title">{{ $service->service_name }}</h5>
                            <span class="products-services-price">Rp.
                                {{ number_format($service->price, 0, ',', '.') }}</span>
                            <div class="products-services-card-stats">
                                <div class="stat-group">
                                    <div>
                                        <img src="{{ asset('asset/images/icon/doc.png') }}" alt="Durasi">
                                        <span>{{ $service->service_time ?? '0' }} Jam</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('asset/images/icon/like.png') }}" alt="Favorit">
                                        <span>{{ $service->favorites ?? '0' }} Favorit</span>
                                    </div>
                                </div>
                                <div class="stat-group">
                                    <div>
                                        <img src="{{ asset('asset/images/icon/eye.png') }}" alt="Dilihat">
                                        <span>{{ $service->views ?? '0' }} Dilihat</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('asset/images/icon/sell.png') }}" alt="Terjual">
                                        <span>{{ $service->sold ?? '0' }} Terjual</span>
                                    </div>
                                </div>
                            </div>
                            <div class="products-services-card-button">
                                <a href="/update_services/{{ $service->id }}" class="btn-primary">Ubah</a>
                                <button class="btn-secondary">Pasang voucher</button>
                                <div class="btn-options">...</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="products-services-card">
                    <img src="asset/images/dashboard/jasacyber.png" alt="Jasa Cyber">
                    <div class="products-services-card-body">
                        <h5 class="products-services-card-title">Jasa protect server dari hacker & DDOS full maintenance..
                        </h5>
                        <span class="products-services-price">Rp. 500.000</span>
                        <div class="products-services-card-stats">
                            <div class="stat-group">
                                <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                                <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                            </div>
                            <div class="stat-group">
                                <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                                <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                            </div>
                        </div>
                        <div class="products-services-card-button">
                            <button class="btn-primary">Ubah</button>
                            <button class="btn-secondary-off" id="voucherButton">Voucher terpasang</button>
                            <div class="btn-options">...</div>
                        </div>
                    </div>
                </div>
                <div class="products-services-card">
                    <img src="asset/images/dashboard/jasapembuatanmobileapp.png" alt="Jasa Pembuatan Mobile App">
                    <div class="products-services-card-body">
                        <h5 class="products-services-card-title">Jasa pembuatan mobile app responsive profesional full..
                        </h5>
                        <span class="products-services-price">Rp. 500.000</span>
                        <div class="products-services-card-stats">
                            <div class="stat-group">
                                <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                                <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                            </div>
                            <div class="stat-group">
                                <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                                <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                            </div>
                        </div>
                        <div class="products-services-card-button">
                            <button class="btn-primary">Ubah</button>
                            <button class="btn-secondary">Pasang voucher</button>
                            <div class="btn-options">...</div>
                        </div>
                    </div>
                </div>
                <div class="products-services-card">
                    <img src="asset/images/dashboard/jasapembuatansistemecomerce.png" alt="Jasa Pembuatan Mobile App">
                    <div class="products-services-card-body">
                        <h5 class="products-services-card-title">Jasa pembuatan website e-commerce murah cepat..
                        </h5>
                        <span class="products-services-price">Rp. 500.000</span>
                        <div class="products-services-card-stats">
                            <div class="stat-group">
                                <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                                <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                            </div>
                            <div class="stat-group">
                                <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                                <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                            </div>
                        </div>
                        <div class="products-services-card-button">
                            <button class="btn-primary">Ubah</button>
                            <button class="btn-secondary-off" id="voucherButton">Voucher terpasang</button>
                            <div class="btn-options">...</div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="products-section" class="products-services-card-container">
                @foreach ($products as $product)
                    <div class="products-services-card">
                        <img src="{{ asset($product->image_to_show) }}" alt="{{ $product->name_product }}">
                        <div class="products-services-card-body">
                            <h5 class="products-services-card-title">{{ $product->name_product }}</h5>
                            <span class="products-services-price">Rp.
                                {{ number_format($product->price, 0, ',', '.') }}</span>
                            <div class="products-services-card-stats">
                                <div class="stat-group">
                                    <div>
                                        <img src="{{ asset('asset/images/icon/doc.png') }}" alt="Stok">
                                        <span>{{ $product->stock_product }} Stok</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('asset/images/icon/like.png') }}" alt="Favorit">
                                        <span>219 Favorit</span>
                                    </div>
                                </div>
                                <div class="stat-group">
                                    <div>
                                        <img src="{{ asset('asset/images/icon/eye.png') }}" alt="Dilihat">
                                        <span>219 Dilihat</span>
                                    </div>
                                    <div>
                                        <img src="{{ asset('asset/images/icon/sell.png') }}" alt="Terjual">
                                        <span>219 Terjual</span>
                                    </div>
                                </div>
                            </div>
                            <div class="products-services-card-button">
                                <a href="/update_products/{{ $product->id }}" class="btn-primary">Ubah</a>
                                <button class="btn-secondary">Pasang voucher</button>
                                <div class="btn-options">...</div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="products-services-card">
                    <img src="asset/images/dashboard/mousemurah.png" alt="Produk Animasi">
                    <div class="products-services-card-body">
                        <h5 class="products-services-card-title">Mouse Wireless anti lemot bluetooth + batre garansi..</h5>
                        <span class="products-services-price">Rp. 500.000</span>
                        <div class="products-services-card-stats">
                            <div class="stat-group">
                                <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                                <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                            </div>
                            <div class="stat-group">
                                <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                                <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                            </div>
                        </div>
                        <div class="products-services-card-button">
                            <button class="btn-primary">Ubah</button>
                            <button class="btn-secondary-off" id="voucherButton">Voucher terpasang</button>
                            <div class="btn-options">...</div>
                        </div>
                    </div>
                </div>
                <div class="products-services-card">
                    <img src="asset/images/dashboard/cpugamingmurah.png" alt="Produk Animasi">
                    <div class="products-services-card-body">
                        <h5 class="products-services-card-title">CPU Gaming murah jual cepat stok terbatas RGB ligth
                            garansi..</h5>
                        <span class="products-services-price">Rp. 500.000</span>
                        <div class="products-services-card-stats">
                            <div class="stat-group">
                                <div><img src="asset/images/icon/doc.png" alt="Stok"> <span>219 Stok</span></div>
                                <div><img src="asset/images/icon/like.png" alt="Favorit"> <span>219 Favorit</span></div>
                            </div>
                            <div class="stat-group">
                                <div><img src="asset/images/icon/eye.png" alt="Dilihat"> <span>219 Dilihat</span></div>
                                <div><img src="asset/images/icon/sell.png" alt="Terjual"> <span>219 Terjual</span></div>
                            </div>
                        </div>
                        <div class="products-services-card-button">
                            <button class="btn-primary">Ubah</button>
                            <button class="btn-secondary">Pasang voucher</button>
                            <div class="btn-options">...</div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="fixed-footer">
            <div class="button-group-products-services">
                <a href="/add_services">
                    <button class="footer-button-primary">
                        <img src="asset/images/icon/add_services.png" class="icon" alt="Tambah Jasa">
                        Tambah Jasa
                    </button>
                </a>
                <a href="/add_products">
                    <button class="footer-button-secondary">
                        <img src="asset/images/icon/add_products.png" class="icon" alt="Tambah Produk">
                        Tambah Produk
                    </button>
                </a>
            </div>
        </div>

        <div id="voucher-popup" class="popup-overlay-voucher">
            <div class="popup-content-voucher">
                <div class="popup-header-voucher">
                    <h3>Pilih Voucher</h3>
                </div>
                <div class="popup-body">
                    <div class="voucher-option-voucher">
                        <div class="voucher-image">
                            <img src="asset/images/myshop/voucher.png" alt="Voucher Image">
                        </div>
                        <div class="voucher-info">
                            <p class="voucher-title">Voucher Hari Raya</p>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p>Potongan: <span class="bold-text">Rp 10k</span> Min belanja: <span class="bold-text">Rp
                                    250k</span></p>
                        </div>
                        <div class="voucher-status berjalan">Berjalan</div>
                        <button class="btn-pasang">Pasang</button>
                    </div>
                    <div class="voucher-option-voucher">
                        <div class="voucher-image">
                            <img src="asset/images/myshop/voucher.png" alt="Voucher Image">
                        </div>
                        <div class="voucher-info">
                            <p class="voucher-title">Voucher Hari Raya</p>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p>Potongan: <span class="bold-text">Rp 10k</span> Min belanja: <span class="bold-text">Rp
                                    250k</span></p>
                        </div>
                        <div class="voucher-status selesai">Selesai</div>
                        <button class="btn-berakhir">Berakhir</button>
                    </div>
                    <div class="voucher-option-voucher">
                        <div class="voucher-image">
                            <img src="asset/images/myshop/voucher.png" alt="Voucher Image">
                        </div>
                        <div class="voucher-info">
                            <p class="voucher-title">Voucher Hari Raya</p>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p>Potongan: <span class="bold-text">Rp 10k</span> Min belanja: <span class="bold-text">Rp
                                    250k</span></p>
                        </div>
                        <div class="voucher-status berjalan">Berjalan</div>
                        <button class="btn-pasang">Pasang</button>
                    </div>
                    <div class="voucher-option-voucher">
                        <div class="voucher-image">
                            <img src="asset/images/myshop/voucher.png" alt="Voucher Image">
                        </div>
                        <div class="voucher-info">
                            <p class="voucher-title">Voucher Hari Raya</p>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p>Potongan: <span class="bold-text">Rp 10k</span> Min belanja: <span class="bold-text">Rp
                                    250k</span></p>
                        </div>
                        <div class="voucher-status selesai">Selesai</div>
                        <button class="btn-berakhir">Berakhir</button>
                    </div>
                    <div class="voucher-option-voucher">
                        <div class="voucher-image">
                            <img src="asset/images/myshop/voucher.png" alt="Voucher Image">
                        </div>
                        <div class="voucher-info">
                            <p class="voucher-title">Voucher Hari Raya</p>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p>Potongan: <span class="bold-text">Rp 10k</span> Min belanja: <span class="bold-text">Rp
                                    250k</span></p>
                        </div>
                        <div class="voucher-status berjalan">Berjalan</div>
                        <button class="btn-pasang">Pasang</button>
                    </div>
                    <div class="voucher-option-voucher">
                        <div class="voucher-image">
                            <img src="asset/images/myshop/voucher.png" alt="Voucher Image">
                        </div>
                        <div class="voucher-info">
                            <p class="voucher-title">Voucher Hari Raya</p>
                            <p>5 Sep 2024 - 8 Sep 2024</p>
                            <p>Potongan: <span class="bold-text">Rp 10k</span> Min belanja: <span class="bold-text">Rp
                                    250k</span></p>
                        </div>
                        <div class="voucher-status berakhir">Selesai</div>
                        <button class="btn-berakhir">Berakhir</button>
                    </div>
                </div>
            </div>
        </div>
        <script>
            // Function to switch between services and products sections
            function switchSection(sectionToShow, sectionToHide, buttonActive, buttonInactive) {
                document.getElementById(sectionToShow).style.display = 'block'; // Show selected section
                document.getElementById(sectionToHide).style.display = 'none'; // Hide the other section

                // Update button active state
                document.getElementById(buttonActive).classList.add('active');
                document.getElementById(buttonInactive).classList.remove('active');
            }

            // Event listeners for the buttons
            document.getElementById('services-button').addEventListener('click', function() {
                switchSection('services-section', 'products-section', 'services-button', 'products-button');
            });

            document.getElementById('products-button').addEventListener('click', function() {
                switchSection('products-section', 'services-section', 'products-button', 'services-button');
            });

            // Function to open the pop-up
            function openVoucherPopup() {
                const popup = document.getElementById('voucher-popup');
                popup.style.display = 'block';
            }

            // Function to close the pop-up when clicking outside of it
            window.onclick = function(event) {
                const popup = document.getElementById('voucher-popup');
                if (event.target === popup) {
                    popup.style.display = 'none';
                }
            }

            // Add event listeners to all "Pasang voucher" buttons
            document.querySelectorAll('.btn-secondary').forEach(button => {
                button.addEventListener('click', openVoucherPopup);
            });


            document.getElementById('voucherButton').addEventListener('click', function() {
                Swal.fire({
                    title: 'Batalkan Voucher?',
                    text: 'Kamu tidak dapat memasang voucher kembali ke produk yang sama setelah membatalkannya.',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#00bcd4',
                    confirmButtonText: 'Ya, batalkan',
                    cancelButtonText: 'Kembali',
                    reverseButtons: true,
                    customClass: {
                        popup: 'voucher-sweetalert', // Ensure this matches your CSS
                        confirmButton: 'swal2-confirm',
                        cancelButton: 'swal2-cancel'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        Swal.fire(
                            'Dibatalkan!',
                            'Voucher telah dibatalkan.',
                            'success'
                        );
                    }
                });
            });
        </script>
    </body>

@endsection
