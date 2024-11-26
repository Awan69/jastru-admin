@extends('setting.layout.setting')

@section('title', 'Update servicess')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="/products_services">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Update Jasa</h2>
            </div>
            <div class="scrollable-form-products-services">
                <form action="{{ route('services.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="warning-card">
                        <div class="warning-icon-number">
                            <img src="asset/images/icon/vector.png" alt="Photo" class="warning-icon-img">
                        </div>
                        <div>
                            Jasa kamu akan diverifikasi sistem Jastru maks 4 jam setelah menambahkan jasa.
                        </div>
                    </div>
                    <div class="form-group-foto">
                        <div class="label-row">
                            <label for="services_images">Foto Jasa <span style="color:red;">*</span></label>
                            <span class="aspect-ratio">1:1</span>
                        </div>
                        <div id="uploadContainer" class="upload-container">
                            <div class="upload-products-services">
                                <img src ="asset/images/icon/camera.png" alt="Upload Icon" class="upload-icon">
                                <input type="file" name="services_images" class="fileInput" accept="image/*"
                                    onchange="previewImage(this)">
                            </div>
                        </div>
                    </div>
                    <div class="add-products-services-form-group">
                        <label for="name_service">Nama Jasa <span style="color:red;">*</span></label>
                        <div class="char-count">0/255</div>
                        <input type="text" id="name_service" name="name_service" placeholder="Masukkan Nama Jasamu.."
                            required>
                    </div>
                    <div class="add-products-services-form-group">
                        <label for="service_description">Deskripsi Jasa <span style="color:red;">*</span></label>
                        <div class="char-count">0/3000</div>
                        <textarea id="service_description" name="service_description"
                            placeholder="Masukkan deskripsi selengkap mungkin agar pembelimu tidak bingung.." required></textarea>
                    </div>
                    <div class="add-products-services-form-group">
                        <div class="stok-price-container">
                            <div class="stok-group">
                                <label for="service_time">Durasi Pengerjaan <span style="color:red;">*</span></label>
                                <input type="text" id="service_time" name="service_time" placeholder="Durasi pengerjaan"
                                    required>
                            </div>
                            <div class="price-group">
                                <label for="price">Harga <span style="color:red;">*</span></label>
                                <input type="number" id="price" name="price" placeholder="Harga jasa" required>
                            </div>
                        </div>
                    </div>
                    <div class="products-services-info kategori-trigger">
                        <p class="products-services-info-text">Kategori <span style="color:red;">*</span></p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="products-services-info merek-trigger">
                        <p class="products-services-info-text">Merek (Opsional)</p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="fixed-footer">
                        <div class="button-group-products-services">
                            <button type="submit" class="footer-button-primary">Tambah Jasa</button>
                        </div>
                    </div>
                </form>
                <div class="info-keterangan-pro-popup kategori-popup">
                    <div class="info-keterangan-pro-popup-content">
                        <div class="popup-header-info-keterangan-pro">
                            <h3>Pilih Kategori Produk</h3>
                        </div>
                        <ul class="info-keterangan-pro-list kategori-list">
                            <li data-value="Desain Grafis"> Desain Grafis</li>
                            <li data-value="Jasa Tukang"> Jasa Tukang</li>
                            <li data-value="Video & Animasi"> Video & Animasi</li>
                            <li data-value="Service Elektronik"> Service Elektronik</li>
                            <li data-value="Cleaning Service"> Cleaning Service</li>
                            <li data-value="Reparasi Kendaraan"> Reparasi Kendaraan</li>
                            <li data-value="Jasa Antar"> Jasa Antar</li>
                            <li data-value="Lainnya"> Lainnya</li>
                        </ul>
                    </div>
                </div>
                <div class="info-keterangan-pro-popup merek-popup">
                    <div class="info-keterangan-pro-popup-content">
                        <div class="popup-header-info-keterangan-pro">
                            <h3>Pilih Merek Produk</h3>
                        </div>
                        <div class="search-card">
                            <img src="asset/images/icon/search.png" alt="Search Icon">
                            <input type="text" id="searchInput" placeholder="Cari Merek" onkeyup="filterBrands()">
                        </div>
                        <ul class="info-keterangan-pro-list merek-list">
                            <li data-value="Honda"> Honda</li>
                            <li data-value="Nestle"> Nestle</li>
                            <li data-value="Nice"> Nice</li>
                            <li data-value="Apple"> Apple</li>
                            <li data-value="Yamaha"> Yamaha</li>
                            <li data-value="Nissan"> Nissan</li>
                            <li data-value="Adobe"> Adobe</li>
                            <li data-value="Microsoft"> Microsoft</li>
                            <li data-value="Aqua"> Aqua</li>
                            <li data-value="Dua Kelinci"> Dua Kelinci</li>
                            <li data-value="Samsung"> Samsung</li>
                            <li data-value="Xiaomi"> Xiaomi</li>
                            <li data-value="Phillips"> Phillips</li>
                            <li data-value="Nabati"> Nabati</li>
                            <li data-value="Erigo"> Erigo</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function previewImage(input) {
                const file = input.files[0]; // Ambil file dari input
                if (file) {
                    const reader = new FileReader(); // Inisialisasi FileReader
                    reader.onload = function(e) {
                        // Temukan elemen induk (div) dari input file ini
                        const parentDiv = input.parentElement;

                        let imgElement = parentDiv.querySelector('img.uploaded-image');
                        if (!imgElement) {
                            imgElement = document.createElement('img');
                            imgElement.classList.add('uploaded-image');
                            parentDiv.appendChild(imgElement);
                        }

                        // Ganti sumber gambar dengan hasil dari pembacaan file
                        imgElement.src = e.target.result;

                        // Hapus ikon kamera dan tambahkan kelas untuk gambar yang diunggah
                        parentDiv.querySelector('.upload-icon').remove();
                        imgElement.classList.add('uploaded-image');

                        // Nonaktifkan input setelah gambar diunggah
                        input.disabled = true;

                        // Tambahkan kotak input baru setelah gambar diunggah
                        addNewUploadBox();
                    };
                    reader.readAsDataURL(file); // Baca file sebagai Data URL
                }
            }

            // Fungsi untuk menambahkan kotak input baru setelah unggahan
            function addNewUploadBox() {
                const newUploadBox = document.createElement('div');
                newUploadBox.classList.add('upload-products-services');
                newUploadBox.innerHTML = `
        <img src="asset/images/icon/camera.png" alt="Upload Icon" class="upload-icon">
        <input type="file" class="fileInput" accept="image/*" onchange="previewImage(this)">
    `;

                document.getElementById('uploadContainer').appendChild(newUploadBox);
            }


            //kategori popup
            const kategoriPopup = document.querySelector('.info-keterangan-pro-popup.kategori-popup');
            const kategoriTrigger = document.querySelector('.kategori-trigger');
            kategoriTrigger.addEventListener('click', function() {
                kategoriPopup.style.display = 'block';
            });
            kategoriPopup.addEventListener('click', function(event) {
                if (event.target === kategoriPopup) {
                    kategoriPopup.style.display = 'none';
                }
            });
            const kategoriItems = document.querySelectorAll('.info-keterangan-pro-list.kategori-list li');
            kategoriItems.forEach(item => {
                item.addEventListener('click', function() {
                    kategoriPopup.style.display = 'none';
                });
            });

            //merek popup
            const merekPopup = document.querySelector('.info-keterangan-pro-popup.merek-popup');
            const merekTrigger = document.querySelector('.merek-trigger');

            merekTrigger.addEventListener('click', function() {
                merekPopup.style.display = 'block';
            });
            merekPopup.addEventListener('click', function(event) {
                if (event.target === merekPopup) {
                    merekPopup.style.display = 'none';
                }
            });
            const merekItems = document.querySelectorAll('.info-keterangan-pro-list.merek-list li');
            merekItems.forEach(item => {
                item.addEventListener('click', function() {
                    merekPopup.style.display = 'none';
                });
            });


            // ceklis opsi
            document.querySelectorAll('.info-keterangan-pro-popup').forEach(popup => {
                popup.addEventListener('click', function(event) {
                    if (event.target === popup) {
                        popup.style.display = 'none';
                    }
                });

                const items = popup.querySelectorAll('.info-keterangan-pro-list li');

                items.forEach(item => {
                    item.addEventListener('click', function() {
                        if (this.classList.contains('selected')) {
                            this.classList.remove('selected');
                        } else {
                            items.forEach(i => i.classList.remove('selected'));
                            this.classList.add('selected');
                        }
                    });
                });
            });

            //filter menu
            function filterBrands() {
                const input = document.getElementById('searchInput').value.toLowerCase();
                const brandList = document.getElementById('brandList');

                // Ambil semua elemen li dalam brandList
                const brands = brandList.getElementsByTagName('li');

                for (let i = 0; i < brands.length; i++) {
                    const brandLabel = brands[i].textContent || brands[i].innerText;

                    // Tampilkan kembali item yang tersembunyi jika input dihapus
                    if (brandLabel.toLowerCase().indexOf(input) > -1 || input === '') {
                        brands[i].style.display = ""; // Kembali tampilkan
                    } else {
                        brands[i].style.display = "";
                    }
                }
            }
        </script>
    </body>

    </html>
