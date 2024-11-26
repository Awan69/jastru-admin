@extends('setting.layout.setting')

@section('title', 'Edit Services')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="/products_services">
                    <button class="back-button">
                        <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                    </button>
                </a>
                <h2>Ubah jasa</h2>
            </div>
            <div class="scrollable-form-products-services">
                <div class="warning-card">
                    <div class="warning-icon-number">
                        <img src="{{ asset('asset/images/icon/info.svg') }}" alt="Photo" class="warning-icon-img">
                    </div>
                    <div>
                        Jasa kamu akan diverifikasi sistem Jastru maks 4 jam setelah menambahkan jasa.
                    </div>
                </div>
                <form action="{{ route('update-service', ['id' => $service->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Image upload input -->
                    <div id="uploadContainer" class="upload-container">
                        @foreach ($service->images as $key => $image)
                            <div class="upload-products-services" data-index="{{ $key }}">
                                <img src="{{ asset('storage/service_images/' . $image->image) }}" alt="Uploaded Image"
                                    class="uploaded-image">
                                <input type="file" name="image[]" class="fileInput" accept="image/*"
                                    data-index="{{ $key }}" onchange="previewImage(this)">
                            </div>
                        @endforeach
                        @if (count($service->images) < 6)
                            <div class="upload-products-services" data-index="{{ count($service->images) }}">
                                <img src="{{ asset('asset/images/icon/cam.svg') }}" alt="Upload Icon" class="upload-icon">
                                <input type="file" name="image[]" class="fileInput" accept="image/*"
                                    data-index="{{ count($service->images) }}" onchange="previewImage(this)">
                            </div>
                        @endif
                    </div>

                    <div class="add-products-services-form-group">
                        <label for="nama-jasa">Nama Jasa <span style="color:red;">*</span></label>
                        <div class="char-count" id="char-count-nama">0/255</div>
                        <input type="text" id="nama-jasa" name="name_service" value="{{ $service->name_service }}"
                            placeholder="Masukkan Nama Jasamu..">
                    </div>

                    <div class="add-products-services-form-group">
                        <label for="deskripsi-jasa">Deskripsi Jasa <span style="color:red;">*</span></label>
                        <div class="char-count" id="char-count-deskripsi">0/3000</div>
                        <textarea id="deskripsi-jasa" name="service_description"
                            placeholder="Masukkan deskripsi selengkap mungkin agar pembelimu tidak bingung..">{{ $service->service_description }}</textarea>
                    </div>

                    <div class="add-products-services-form-group">
                        <div class="stok-price-container">
                            <div class="stok-group">
                                <label for="stok-produk">Durasi Pengerjaan <span style="color:red;">*</span></label>
                                <input type="text" id="stok-produk" name="service_time"
                                    value="{{ $service->service_time }}" placeholder="Durasi pengerjaan jasamu">
                            </div>
                            <div class="price-group">
                                <label for="harga-produk">Harga <span style="color:red;">*</span></label>
                                <input type="text" id="harga-produk" name="price" value="{{ $service->price }}"
                                    placeholder="Harga produkmu">
                            </div>
                        </div>
                    </div>

                    <div class="products-services-info kategori-trigger">
                        <p class="products-services-info-text">Kategori <span style="color:red;">*</span></p>
                        <p class="products-services-info-selected" id="category_display">{{ $service->category_service }}
                        </p> <!-- Menampilkan kategori yang dipilih -->
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="info-keterangan-pro-popup kategori-popup">
                        <div class="info-keterangan-pro-popup-content">
                            <div class="popup-header-info-keterangan-pro">
                                <h3>Pilih Kategori Jasa</h3>
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
                    <input type="hidden" name="category_service" id="categoryProductInput">

                    <div class="products-services-info merek-trigger">
                        <p class="products-services-info-text">Merek (Opsional)</p>
                        <!-- Menampilkan merek yang dipilih -->
                        <p class="products-services-info-selected" id="brand_display">{{ $service->brand }}</p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="info-keterangan-pro-popup merek-popup">
                        <div class="info-keterangan-pro-popup-content">
                            <div class="popup-header-info-keterangan-pro">
                                <h3>Pilih Merek Produk</h3>
                            </div>
                            <div class="search-card-products-services">
                                <img src="asset/images/icon/search.png" alt="Search Icon">
                                <input type="text" id="searchInput" placeholder="Cari Merek"
                                    onkeyup="filterBrands()">
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
                    <input type="hidden" id="brand_input" name="brand"> <!-- Menyimpan nilai merek untuk form -->

                    <div class="fixed-footer-add-product">
                        <button class="footer-button-primary-add-product" type="submit">Tambah jasa baru</button>
                    </div>
                </form>
            </div>
        </div>
        <script>
            function previewImage(input) {
                const file = input.files[0]; // File yang dipilih
                const parentDiv = input.parentElement; // Elemen parent dari input
                const isReplacingImage = parentDiv.querySelector('.uploaded-image'); // Cek apakah mengganti gambar

                if (file) {
                    const reader = new FileReader();

                    reader.onload = function(e) {
                        // Perbarui gambar jika sudah ada atau tambahkan jika belum ada
                        const existingImage = parentDiv.querySelector('.uploaded-image');
                        if (existingImage) {
                            existingImage.src = e.target.result; // Perbarui gambar
                        } else {
                            const imgElement = document.createElement('img');
                            imgElement.classList.add('uploaded-image');
                            imgElement.src = e.target.result;
                            parentDiv.prepend(imgElement); // Tambahkan gambar ke parent div
                        }

                        // Hapus ikon upload jika ada
                        const uploadIcon = parentDiv.querySelector('.upload-icon');
                        if (uploadIcon) {
                            uploadIcon.remove();
                        }
                    };

                    reader.readAsDataURL(file);

                    // Tambahkan upload box baru hanya jika ini adalah unggahan baru
                    if (!isReplacingImage) {
                        addNewUploadBox();
                    }
                }
            }

            function updateImageArray(index, file) {
                // Use FormData to handle images dynamically
                const formData = new FormData();

                // Find all file inputs in the container
                const fileInputs = document.querySelectorAll('#uploadContainer .fileInput');

                fileInputs.forEach((input, i) => {
                    if (input.files[0]) {
                        // Add the file to the FormData with the appropriate index
                        formData.append(`image[${i}]`, input.files[0]);
                    }
                });

                // Debugging: log FormData entries to verify
                for (const pair of formData.entries()) {
                    console.log(pair[0], pair[1]);
                }
            }

            function addNewUploadBox() {
                const existingInputs = document.querySelectorAll('#uploadContainer .fileInput');

                if (existingInputs.length >= 6) {
                    return;
                }

                const newIndex = existingInputs.length;
                const newUploadBox = document.createElement('div');
                newUploadBox.classList.add('upload-products-services');
                newUploadBox.setAttribute('data-index', newIndex);
                newUploadBox.innerHTML = `
                    <img src="{{ asset('asset/images/icon/cam.svg') }}" alt="Upload Icon" class="upload-icon">
                    <input type="file" name="image[]" class="fileInput" accept="image/*" data-index="${newIndex}" onchange="previewImage(this)">
                `;
                document.getElementById('uploadContainer').appendChild(newUploadBox);
            }

            // Function to handle char count
            function updateCharCount(inputId, countId, maxLength, textarea = false) {
                const inputElement = document.getElementById(inputId);
                const countElement = document.getElementById(countId);
                const warningPopup = document.getElementById('warning-popup');

                inputElement.addEventListener(textarea ? 'input' : 'keydown', function(event) {
                    // Check the current length of the input text
                    const currentLength = inputElement.value.length;

                    // Update the char count display
                    countElement.textContent = `${currentLength}/${maxLength}`;

                    // If the length exceeds the maxLength, prevent further typing
                    if (currentLength >= maxLength) {
                        // Prevent the default action if max length is exceeded
                        if (event.key !== "Backspace" && event.key !== "Delete") {
                            event.preventDefault();
                        }

                        // Show the warning popup
                        warningPopup.style.display = 'block';
                        setTimeout(() => {
                            warningPopup.style.display = 'none';
                        }, 3000); // Hide the warning after 3 seconds
                    }
                });
            }

            // Initialize char count for both fields
            updateCharCount('nama-jasa', 'char-count-nama', 255);
            updateCharCount('deskripsi-jasa', 'char-count-deskripsi', 3000, true);

            const kategoriPopup = document.querySelector('.kategori-popup');
            const kategoriTrigger = document.querySelector('.kategori-trigger');
            const selectedCategory = document.getElementById('selectedCategory');
            const categoryProductInput = document.getElementById('categoryProductInput');
            const categoryDisplay = document.getElementById('category_display');

            // Tampilkan pop-up kategori saat diklik
            kategoriTrigger.addEventListener('click', function() {
                kategoriPopup.style.display = 'block';
            });

            // Tutup pop-up jika klik di luar pop-up
            kategoriPopup.addEventListener('click', function(event) {
                if (event.target === kategoriPopup) {
                    kategoriPopup.style.display = 'none';
                }
            });

            // Menangani pemilihan kategori
            document.querySelectorAll('.kategori-list li').forEach(item => {
                item.addEventListener('click', function() {
                    // Set nilai kategori pada input tersembunyi
                    categoryProductInput.value = item.getAttribute('data-value');

                    // Menampilkan kategori yang dipilih di elemen display
                    categoryDisplay.textContent = item.getAttribute('data-value');

                    // Menutup pop-up setelah kategori dipilih
                    kategoriPopup.style.display = 'none';
                });
            });

            // Inisialisasi tampilan kategori saat halaman dimuat (jika diperlukan untuk JS dinamis)
            document.addEventListener('DOMContentLoaded', function() {
                categoryDisplay.textContent = categoryProductInput.value || "Pilih kategori";
            });

            const merekPopup = document.querySelector('.merek-popup');
            const merekTrigger = document.querySelector('.merek-trigger');
            const brandDisplay = document.getElementById('brand_display');
            const brandInput = document.getElementById('brand_input');

            // Tampilkan pop-up merek saat diklik
            merekTrigger.addEventListener('click', function() {
                merekPopup.style.display = 'block';
            });

            // Tutup pop-up jika klik di luar pop-up
            merekPopup.addEventListener('click', function(event) {
                if (event.target === merekPopup) {
                    merekPopup.style.display = 'none';
                }
            });

            // Menangani pemilihan merek
            document.querySelectorAll('.merek-list li').forEach(item => {
                item.addEventListener('click', function() {
                    const brandValue = item.getAttribute('data-value'); // Ambil nilai merek
                    brandDisplay.textContent = brandValue; // Tampilkan merek yang dipilih di sebelah tanda >
                    brandInput.value = brandValue; // Simpan nilai merek di input tersembunyi untuk form
                    merekPopup.style.display = 'none'; // Tutup pop-up setelah memilih
                });
            });

            // Inisialisasi tampilan merek saat halaman dimuat
            document.addEventListener('DOMContentLoaded', function() {
                brandDisplay.textContent = brandInput.value || "Pilih merek"; // Set nilai default atau "Pilih merek"
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
