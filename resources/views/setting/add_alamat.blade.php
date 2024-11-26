@extends('setting.layout.setting')

@section('title', 'Add Address')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('informasi_alamat') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Alamat saya</h2>
            </div>
            <div class="address-scrollable-section">
                <div class="form-group form-group-two">
                    <label for="address-label">Pinpoint</label>
                    <div class="pinpoint-container">
                        <div class="pinpoint-left">
                            <i class="fas fa-map-marker-alt pin-icon"></i>
                            <span>Pin lokasimu di map</span>
                        </div>
                        <a href="/pinpoint" class="change-button">Ubah</a>
                    </div>

                    <label for="address-label">Nama Penerima</label>
                    <input type="text" id="address-label" class="address-input" value="Jeni" />

                    <label for="address-label">Nomor HP</label>
                    <input type="text" id="address-label" class="address-input" value="082749502812" />

                    <div class="section-divider-informasi-akun"></div>

                    <label for="address-label">Label alamat</label>
                    <input type="text" id="address-label" class="address-input" value="Rumah" />

                    <label for="address-label">Kota & Kecamatan</label>
                    <div class="input-container">
                        <input type="text" id="city-input" class="address-input trigger-slider" value="Subang"
                            readonly />
                    </div>
                </div>

                <div class="form-group form-group-two">
                    <label for="alamat-lengkap">Alamat lengkap</label>
                    <textarea id="alamat-lengkap" placeholder="Buana subang kencana blok c no 93"></textarea>
                </div>

                <div class="fixed-footer">
                    <div class="address-checkbox-container form-group">
                        <div class="warning-icon2">
                            <img src="asset/images/icon/vector.png" alt="Photo" class="warning-icon2-img">
                        </div>
                        <div class="terms-label">
                            Dengan klik tombol di bawah, kamu menyetujui <a href="#">Syarat & Ketentuan</a> serta <a
                                href="#">Kebijakan
                                Privasi</a>
                            pengaturan alamat di Jastru
                        </div>
                    </div>
                    <div class="button-group-products-services">
                        <a href="{{ route('informasi_alamat') }}">
                            <button class="footer-button-primary2">Komfirmasi Alamat</button>
                        </a>
                    </div>
                </div>
                <!-- Slider Overlay -->
                <div class="slider-overlay" id="sliderOverlay">
                    <div class="slider-content">
                        <div class="address-slider-header">Pilih Kota & Kecamatan</div>
                        <div class="search-card">
                            <img src="asset/images/icon/search.png" alt="Search Icon">
                            <input type="text" class="search-card-text" placeholder="Cari Kota">
                        </div>
                        <!-- Pilihan kota -->
                        <button class="city-option" data-city="Jakarta">Jakarta</button>
                        <button class="city-option" data-city="Bandung">Bandung</button>
                        <button class="city-option" data-city="Semarang">Semarang</button>
                        <button class="city-option" data-city="Bogor">Bogor</button>
                        <button class="city-option" data-city="Medan">Medan</button>
                        <button class="city-option" data-city="Malang">Malang</button>
                        <button class="city-option" data-city="Subang">Subang</button>
                        <button class="city-option" data-city="Surabaya">Surabaya</button>
                        <button class="city-option" data-city="Depok">Depok</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script>
        const cityInput = document.getElementById('city-input');
        const sliderOverlay = document.getElementById('sliderOverlay');
        const cityOptions = document.querySelectorAll('.city-option');
        const searchInput = document.querySelector('.search-card-text');

        function openSlider() {
            sliderOverlay.classList.add('active');
        }

        function closeSlider() {
            sliderOverlay.classList.remove('active');
        }

        cityInput.addEventListener('click', openSlider);

        cityOptions.forEach(option => {
            option.addEventListener('click', (event) => {
                const selectedCity = event.target.dataset.city;
                if (selectedCity) {
                    cityInput.value = selectedCity
                    closeSlider();
                }
            });
        });

        // Event listener untuk pencarian kota
        searchInput.addEventListener('input', () => {
            const searchTerm = searchInput.value.toLowerCase();
            cityOptions.forEach(option => {
                const cityName = option.textContent.toLowerCase();
                if (cityName.includes(searchTerm)) {
                    option.style.display = '';
                } else {
                    option.style.display = 'none';
                }
            });
        });
    </script>
@endsection
