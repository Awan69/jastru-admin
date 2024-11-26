@extends('setting.layout.setting')

@section('title', 'Update Service')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="/products_services">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Update Service</h2>
            </div>
            <div class="scrollable-form-products-services">
                <div class="warning-card">
                    <div class="warning-icon-number">
                        <img src="asset/images/icon/vector.png" alt="Photo" class="warning-icon-img">
                    </div>
                    <div>
                        Produk kamu akan diverifikasi sistem Jastru maks 4 jam setelah menambahkan produk.
                    </div>
                </div>
                <form>
                    <div class="form-group-foto">
                        <div class="label-row">
                            <label for="fileInput">Foto Produk <span style="color:red;">*</span></label>
                            <span class="aspect-ratio">1:1</span>
                        </div>
                        <div id="uploadContainer" class="upload-container">
                            <div class="upload-products-services">
                                <img src="asset/images/dashboard/keyboard_gaming.png" alt="Upload Icon"
                                    class="upload-preview">
                                <input type="file" class="fileInput" accept="image/*" onchange="previewImage(this)">
                            </div>
                        </div>
                    </div>
                    <div class="add-products-services-form-group">
                        <label for="nama-jasa">Nama Produk <span style="color:red;">*</span></label>
                        <div class="char-count">0/255</div>
                        <input type="text" id="nama-jasa" name="nama-jasa"
                            placeholder="Mekanikal Keyboard Gaming dengan RGB Light Murah..">
                    </div>
                    <div class="add-products-services-form-group">
                        <label for="deskripsi-jasa">Deskripsi Produk <span style="color:red;">*</span></label>
                        <div class="char-count">0/3000</div>
                        <textarea id="deskripsi-jasa" name="deskripsi-jasa"
                            placeholder="🛒 HAPPY SHOPPING 🛒  Garansi: Jaminan kualitas, garansi satu tahun, dan Menyediakan bimbingan online.."></textarea>
                    </div>
                    <div class="add-products-services-form-group">
                        <div class="stok-price-container">
                            <div class="stok-group">
                                <label for="stok-produk">Stok <span style="color:red;">*</span></label>
                                <input type="text" id="stok-produk" name="stok-produk" placeholder="355">
                            </div>
                            <div class="price-group">
                                <label for="harga-produk">Harga <span style="color:red;">*</span></label>
                                <input type="text" id="harga-produk" name="harga-produk" placeholder="350.000">
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
                    <div class="products-services-info produk-berbahaya-trigger">
                        <p class="products-services-info-text">Produk Berbahaya <span style="color:red;">*</span></p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="products-services-info">
                        <p class="products-services-info-text">Tanggal Kadaluwarsa <span style="color:red;">*</span></p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="products-services-info kondisi-trigger">
                        <p class="products-services-info-text">Kondisi <span style="color:red;">*</span></p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="products-services-info">
                        <p class="products-services-info-text">Pre-order</p>
                        <label class="switch">
                            <input type="checkbox" id="preorder-switch">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="products-services-info" id="po-days" style="display: none;">
                        <p class="products-services-info-text-day">Hari</p>
                        <input type="number" placeholder="Masukkan total hari PO" class="input-po-days">
                    </div>
                    <div class="products-services-info">
                        <p class="products-services-info-text">Ongkos Kirim</p>
                        <label class="switch">
                            <input type="checkbox">
                            <span class="slider round"></span>
                        </label>
                    </div>

                </form>
                <div class="fixed-footer">
                    <div class="button-group-products-services">
                        <a href="/add_services">
                            <button class="footer-button-primary">Tambah produk baru</button>
                        </a>
                    </div>
                </div>
                <div class="info-keterangan-pro-popup kategori-popup">
                    <div class="info-keterangan-pro-popup-content">
                        <div class="popup-header-info-keterangan-pro">
                            <h3>Pilih Kategori Produk</h3>
                        </div>
                        <ul class="info-keterangan-pro-list kategori-list" id="categoryList">
                            <li data-value="Makanan & Minuman">Makanan & Minuman</li>
                            <li data-value="Bahan Bangunan">Bahan Bangunan</li>
                            <li data-value="Elektronik">Elektronik</li>
                            <li data-value="Pertanian & Peternakan">Pertanian & Peternakan</li>
                            <li data-value="Peralatan Rumah">Peralatan Rumah</li>
                            <li data-value="Tumbuhan">Tumbuhan</li>
                            <li data-value="Pakaian">Pakaian</li>
                            <li data-value="Lainnya">Lainnya</li>
                        </ul>
                    </div>
                </div>

                <div class="info-keterangan-pro-popup produk-berbahaya-popup">
                    <div class="info-keterangan-pro-opsi-popup-content">
                        <div class="popup-header-info-keterangan-pro">
                            <h3>Produk Berbahaya</h3>
                        </div>
                        <ul class="info-keterangan-pro-list opsi-produk">
                            <li data-value="Ya"> Ya</li>
                            <li data-value="Tidak"> Tidak</li>
                        </ul>
                    </div>
                </div>

                <div class="info-keterangan-pro-popup kondisi-popup">
                    <div class="info-keterangan-pro-opsi-popup-content">
                        <div class="popup-header-info-keterangan-pro">
                            <h3>Pilih Kondisi Produk</h3>
                        </div>
                        <ul class="info-keterangan-pro-list kondisi">
                            <li data-value="Baru"> Baru</li>
                            <li data-value="Bekas"> Bekas</li>
                        </ul>
                    </div>
                </div>

                <div class="info-keterangan-pro-popup merek-popup">
                    <div class="info-keterangan-pro-popup-content">
                        <div class="popup-header-info-keterangan-pro">
                            <h3>Pilih Merek Produk</h3>
                        </div>
                        <div class="search-card-products-services">
                            <img src="asset/images/icon/search.png" alt="Search Icon">
                            <input type="text" id="searchInput" placeholder="Cari Merek" onkeyup="filterBrands()">
                        </div>
                        <ul class="info-keterangan-pro-list merek-list" id="brandList">
                            <li data-value="Honda"> Honda</li>
                            <li data-value="Nestle"> Nestle</li>
                            <li data-value="Nice"> Nice</li>
                            <li data-value="Apple"> Apple</li>
                            <li data-value="Yamaha"> Yamaha</li>
                            <li data-value="Nissan"> Nissan</li>
                            <li data-value="Adobe"> Adobe</li>
                            <li data-value="Microsoft"> Microsoft</li>
                            <li data-value="Aqua"> Aqua</li>
                        </ul>
                    </div>
                </div>
            </div>

            <script>
                // input foto
                function previewImage(input) {
                    const file = input.files[0];
                    if (file) {
                        const reader = new FileReader();
                        reader.onload = function(e) {
                            // Temukan div orangtua (parent) dari input yang diunggah
                            const parentDiv = input.parentElement;

                            // Temukan elemen gambar yang ada atau buat elemen baru jika belum ada
                            let imgElement = parentDiv.querySelector('img.uploaded-image');
                            if (!imgElement) {
                                imgElement = document.createElement('img');
                                imgElement.classList.add('uploaded-image');
                                parentDiv.appendChild(imgElement);
                            }

                            // Ganti ikon kamera dengan gambar yang diunggah
                            imgElement.src = e.target.result;

                            // Pastikan hanya bisa unggah sekali per kotak
                            input.disabled = true;

                            // Tambahkan kotak baru untuk unggah foto berikutnya
                            addNewUploadBox();
                        };
                        reader.readAsDataURL(file);
                    }
                }

                function addNewUploadBox() {
                    // Buat kotak input baru untuk unggahan foto
                    const newUploadBox = document.createElement('div');
                    newUploadBox.classList.add('upload-products-services');
                    newUploadBox.innerHTML = `
        <img src="asset/images/icon/camera.png" alt="Upload Icon" class="upload-icon">
        <input type="file" class="fileInput" accept="image/*" onchange="previewImage(this)">
    `;

                    // Tambahkan kotak input baru ke dalam container
                    document.getElementById('uploadContainer').appendChild(newUploadBox);
                }



                // Handle popup for Kategori
                const kategoriPopup = document.querySelector('.kategori-popup');
                const kategoriTrigger = document.querySelector('.kategori-trigger');
                kategoriTrigger.addEventListener('click', function() {
                    kategoriPopup.style.display = 'block';
                });
                kategoriPopup.addEventListener('click', function(event) {
                    if (event.target === kategoriPopup) {
                        kategoriPopup.style.display = 'none';
                    }
                });
                const kategoriItems = document.querySelectorAll('.kategori-list li');
                kategoriItems.forEach(item => {
                    item.addEventListener('click', function() {
                        kategoriPopup.style.display = 'none';
                    });
                });

                // Handle popup for Merek
                const merekPopup = document.querySelector('.merek-popup');
                const merekTrigger = document.querySelector('.merek-trigger');
                merekTrigger.addEventListener('click', function() {
                    merekPopup.style.display = 'block';
                });
                merekPopup.addEventListener('click', function(event) {
                    if (event.target === merekPopup) {
                        merekPopup.style.display = 'none';
                    }
                });
                const merekItems = document.querySelectorAll('.merek-list li');
                merekItems.forEach(item => {
                    item.addEventListener('click', function() {
                        merekPopup.style.display = 'none';
                    });
                });

                // Handle popup for Produk Berbahaya
                const produkBerbahayaPopup = document.querySelector('.produk-berbahaya-popup');
                const produkBerbahayaTrigger = document.querySelector('.produk-berbahaya-trigger');
                produkBerbahayaTrigger.addEventListener('click', function() {
                    produkBerbahayaPopup.style.display = 'block';
                });
                produkBerbahayaPopup.addEventListener('click', function(event) {
                    if (event.target === produkBerbahayaPopup) {
                        produkBerbahayaPopup.style.display = 'none';
                    }
                });
                const produkBerbahayaItems = document.querySelectorAll('.opsi-produk li');
                produkBerbahayaItems.forEach(item => {
                    item.addEventListener('click', function() {
                        produkBerbahayaPopup.style.display = 'none';
                    });
                });

                // Handle popup for Kondisi
                const kondisiPopup = document.querySelector('.kondisi-popup');
                const kondisiTrigger = document.querySelector('.kondisi-trigger');
                kondisiTrigger.addEventListener('click', function() {
                    kondisiPopup.style.display = 'block';
                });
                kondisiPopup.addEventListener('click', function(event) {
                    if (event.target === kondisiPopup) {
                        kondisiPopup.style.display = 'none';
                    }
                });
                const kondisiItems = document.querySelectorAll('.kondisi li');
                kondisiItems.forEach(item => {
                    item.addEventListener('click', function() {
                        kondisiPopup.style.display = 'none';
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
                            brands[i].style.display = "none";
                        }
                    }
                }


                // piliha hari
                const preorderSwitch = document.getElementById('preorder-switch');
                const poDaysInput = document.getElementById('po-days');
                preorderSwitch.addEventListener('change', function() {
                    if (preorderSwitch.checked) {
                        poDaysInput.style.display = 'block';
                    } else {
                        poDaysInput.style.display = 'none';
                    }
                });
            </script>
    </body>

    </html>
