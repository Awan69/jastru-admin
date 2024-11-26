@extends('setting.layout.setting')

@section('title', 'Edit Products')

@section('konten')

    <body>
        <div class="mobile-container" style="overflow-x: hidden;">
            <div class="header">
                <a href="/products_services">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Ubah produk</h2>
            </div>
            <div class="scrollable-form-products-services">
                <div class="warning-card">
                    <div class="warning-icon-number">
                        <img src="{{ asset('asset/images/icon/info.svg') }}" alt="Photo" class="warning-icon-img">
                    </div>
                    <div>
                        Produk kamu akan diverifikasi sistem Jastru maks 4 jam setelah menambahkan produk.
                    </div>
                </div>
                <form action="{{ route('update-product', ['id' => $products->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <!-- Image upload input -->
                    <div id="uploadContainer" class="upload-container">
                        @foreach ($product->images as $key => $image)
                            <div class="upload-products-services" data-index="{{ $key }}">
                                <img src="{{ asset('storage/product_images/' . $image->image) }}" alt="Uploaded Image"
                                    class="uploaded-image">
                                <input type="file" name="image[]" class="fileInput" accept="image/*"
                                    data-index="{{ $key }}" onchange="previewImage(this)">
                            </div>
                        @endforeach
                        @if (count($product->images) < 6)
                            <div class="upload-products-services" data-index="{{ count($product->images) }}">
                                <img src="{{ asset('asset/images/icon/cam.svg') }}" alt="Upload Icon" class="upload-icon">
                                <input type="file" name="image[]" class="fileInput" accept="image/*"
                                    data-index="{{ count($product->images) }}" onchange="previewImage(this)">
                            </div>
                        @endif
                    </div>

                    <div class="add-products-services-form-group">
                        <label for="nama-jasa">Nama Produk <span style="color:red;">*</span></label>
                        <div class="char-count" id="char-count-nama">0/255</div>
                        <input type="text" id="nama-jasa" name="name_product" value="{{ $product->name_product }}"
                            placeholder="Masukkan Nama Produkmu..">
                    </div>

                    <div class="add-products-services-form-group">
                        <label for="deskripsi-jasa">Deskripsi Produk <span style="color:red;">*</span></label>
                        <div class="char-count" id="char-count-deskripsi">0/3000</div>
                        <textarea id="deskripsi-jasa" name="detail_product"
                            placeholder="Masukkan deskripsi selengkap mungkin agar pembelimu tidak bingung..">{{ $product->detail_product }}</textarea>
                    </div>

                    <!-- Pop-up warning -->
                    <div id="warning-popup" style="display:none;">
                        <div
                            style="background: #f00; color: #fff; padding: 10px; border-radius: 5px; width: 200px; text-align: center;">
                            Batas karakter tercapai!
                        </div>
                    </div>
                    <div class="add-products-services-form-group">
                        <div class="stok-price-container">
                            <div class="stok-group">
                                <label for="stok-produk">Stok <span style="color:red;">*</span></label>
                                <input type="number" id="stok-produk" name="stock_product"
                                    value="{{ $product->stock_product }}" placeholder="Stok produkmu">
                            </div>
                            <div class="price-group">
                                <label for="harga-produk">Harga <span style="color:red;">*</span></label>
                                <input type="number" id="harga-produk" name="price" value="{{ $product->price }}"
                                    placeholder="Harga produkmu">
                            </div>
                        </div>
                    </div>
                    <div class="products-services-info kategori-trigger">
                        <p class="products-services-info-text">Kategori <span style="color:red;">*</span></p>
                        <!-- Menampilkan kategori yang dipilih -->
                        <p class="products-services-info-selected" id="category_display">{{ $product->category_product }}
                        </p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="info-keterangan-pro-popup kategori-popup">
                        <div class="info-keterangan-pro-popup-content">
                            <div class="popup-header-info-keterangan-pro">
                                <h3>Pilih Kategori Produk</h3>
                            </div>
                            <ul class="info-keterangan-pro-list kategori-list" id="selectedCategory">
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
                    <!-- Menyimpan kategori yang dipilih -->
                    <input type="hidden" name="category_product" id="categoryProductInput"
                        value="{{ $product->category_product }}">

                    <div class="products-services-info merek-trigger">
                        <p class="products-services-info-text">Merek (Opsional)</p>
                        <!-- Menampilkan merek yang dipilih -->
                        <p class="products-services-info-selected" id="brand_display">{{ $product->brand }}</p>
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
                            <ul class="info-keterangan-pro-list merek-list" id="selectedBrand">
                                <li data-value="Honda">Honda</li>
                                <li data-value="Nestle">Nestle</li>
                                <li data-value="Nice">Nice</li>
                                <li data-value="Apple">Apple</li>
                                <li data-value="Yamaha">Yamaha</li>
                                <li data-value="Nissan">Nissan</li>
                                <li data-value="Adobe">Adobe</li>
                                <li data-value="Microsoft">Microsoft</li>
                                <li data-value="Aqua">Aqua</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Menyimpan merek yang dipilih -->
                    <input type="hidden" id="brand_input" name="brand" value="{{ $product->brand }}">


                    <div class="products-services-info produk-berbahaya-trigger">
                        <p class="products-services-info-text">Produk Berbahaya <span style="color:red;">*</span></p>
                        <!-- Menampilkan pilihan yang dipilih -->
                        <p class="products-services-info-selected" id="dangerous_product_display">
                            {{ $product->dangerous_product }}</p>
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="info-keterangan-pro-popup produk-berbahaya-popup">
                        <div class="info-keterangan-pro-opsi-popup-content">
                            <div class="popup-header-info-keterangan-pro">
                                <h3>Pilih Kondisi Produk</h3>
                            </div>
                            <ul class="info-keterangan-pro-list opsi-produk" id="selectedDangerousProduct">
                                <li data-value="iya">Iya</li>
                                <li data-value="tidak">Tidak</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Menyimpan nilai kondisi produk untuk form -->
                    <input type="hidden" id="dangerous_product_input" name="dangerous_product"
                        value="{{ $product->dangerous_product }}">


                    <div class="products-services-info tanggal-trigger">
                        <p class="products-services-info-text">Tanggal Kadaluwarsa <span style="color:red;">*</span></p>
                        <p class="products-services-info-selected" id="expired_date_display">
                            {{ old('expired_date', $product->expired_date) }}</p>
                        <!-- Menampilkan tanggal yang sudah ada -->
                        <p class="products-services-info-arrow">></p>
                    </div>

                    <div class="info-keterangan-pro-popup tanggal-popup">
                        <div class="info-keterangan-pro-popup-content">
                            <h3>Pilih Tanggal Kadaluwarsa</h3>
                            <input type="date" id="expired_date_input"
                                value="{{ old('expired_date', $product->expired_date) }}">
                            <!-- Set value dari tanggal yang sudah ada -->
                        </div>
                    </div>
                    <input type="hidden" name="expired_date" id="expired_date"> <!-- Menyimpan tanggal yang dipilih -->
                    <!-- Input tersembunyi untuk menyimpan tanggal kadaluwarsa -->

                    <div class="products-services-info kondisi-trigger">
                        <p class="products-services-info-text">Kondisi <span style="color:red;">*</span></p>
                        <p class="products-services-info-selected" id="selectedCondition">
                            {{ $product->condition_product }}</p> <!-- Tampilkan nilai awal -->
                        <p class="products-services-info-arrow">></p>
                    </div>
                    <div class="info-keterangan-pro-popup kondisi-popup">
                        <div class="info-keterangan-pro-opsi-popup-content">
                            <div class="popup-header-info-keterangan-pro">
                                <h3>Pilih Kondisi Produk</h3>
                            </div>
                            <ul class="info-keterangan-pro-list kondisi" name="condition_product">
                                <li data-value="Baru">Baru</li>
                                <li data-value="Bekas">Bekas</li>
                            </ul>
                        </div>
                    </div>
                    <input type="hidden" name="condition_product" id="condition_product"
                        value="{{ $product->condition_product }}">
                    <!-- Input tersembunyi untuk menyimpan nilai kondisi -->


                    <div class="products-services-info">
                        <p class="products-services-info-text">Pre-order</p>
                        <label class="switch">
                            <input type="checkbox" id="preorder-switch">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <div class="products-services-info" id="po-days"
                        style="display: none; justify-content: space-between; flex-direction: row;">
                        <p class="products-services-info-text-day">Hari</p>
                        <input type="number" name="pre_order_day" id="po_days_input"
                            placeholder="Masukkan total hari PO" class="input-po-days">
                    </div>

                    <div class="products-services-info">
                        <p class="products-services-info-text">Ongkos Kirim</p>
                        <label class="switch">
                            <input type="checkbox" id="shippingSwitch">
                            <span class="slider round"></span>
                        </label>
                    </div>
                    <!-- Hidden input untuk menyimpan status shipping_cost -->
                    <input type="hidden" id="shippingCostStatus" name="shipping_cost"
                        value="{{ $product->shipping_cost ?? 'tidak aktif' }}">


                    <div class="fixed-footer-add-product">
                        <button class="footer-button-primary-add-product" type="submit">Ubah produk</button>
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


            // const kategoriItems = document.querySelectorAll('.kategori-list li');
            // kategoriItems.forEach(item => {
            //     item.addEventListener('click', function() {
            //         kategoriPopup.style.display = 'none';
            //     });
            // });

            // Menangani pop-up untuk Merek
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


            const produkBerbahayaPopup = document.querySelector('.produk-berbahaya-popup');
            const produkBerbahayaTrigger = document.querySelector('.produk-berbahaya-trigger');
            const dangerousProductDisplay = document.getElementById('dangerous_product_display');
            const dangerousProductInput = document.getElementById('dangerous_product_input');

            // Tampilkan pop-up saat diklik
            produkBerbahayaTrigger.addEventListener('click', function() {
                produkBerbahayaPopup.style.display = 'block';
            });

            // Tutup pop-up jika klik di luar area pop-up
            produkBerbahayaPopup.addEventListener('click', function(event) {
                if (event.target === produkBerbahayaPopup) {
                    produkBerbahayaPopup.style.display = 'none';
                }
            });

            // Menangani pemilihan kondisi produk berbahaya
            document.querySelectorAll('.opsi-produk li').forEach(item => {
                item.addEventListener('click', function() {
                    const value = item.getAttribute('data-value'); // Ambil nilai produk berbahaya
                    dangerousProductDisplay.textContent = value; // Tampilkan nilai yang dipilih
                    dangerousProductInput.value = value; // Simpan nilai di input tersembunyi
                    produkBerbahayaPopup.style.display = 'none'; // Tutup pop-up setelah memilih
                });
            });

            // Inisialisasi tampilan kondisi produk saat halaman dimuat
            document.addEventListener('DOMContentLoaded', function() {
                dangerousProductDisplay.textContent = dangerousProductInput.value === 'iya' ? 'Iya' : 'Tidak';
            });


            // Menangani pop-up untuk Tanggal Kadaluwarsa
            const tanggalPopup = document.querySelector('.tanggal-popup');
            const tanggalTrigger = document.querySelector(
                '.tanggal-trigger'); // Pastikan Anda memiliki elemen untuk memicu pop-up
            const expiredDateDisplay = document.getElementById('expired_date_display');
            const expiredDateInput = document.getElementById('expired_date_input');
            const expiredDateHiddenInput = document.getElementById('expired_date');

            // Tampilkan pop-up saat diklik
            tanggalTrigger.addEventListener('click', function() {
                tanggalPopup.style.display = 'block';
            });

            // Fungsi untuk menutup pop-up dan menyimpan tanggal yang dipilih
            expiredDateInput.addEventListener('change', function() {
                const selectedDate = expiredDateInput.value;
                if (selectedDate) {
                    expiredDateDisplay.textContent = selectedDate; // Tampilkan tanggal yang dipilih di display
                    expiredDateHiddenInput.value = selectedDate; // Simpan tanggal di input tersembunyi untuk form
                }
                tanggalPopup.style.display = 'none'; // Tutup pop-up setelah tanggal dipilih
            });

            // Tutup pop-up jika klik di luar area pop-up
            tanggalPopup.addEventListener('click', function(event) {
                if (event.target === tanggalPopup) {
                    tanggalPopup.style.display = 'none';
                }
            });


            const kondisiPopup = document.querySelector('.kondisi-popup');
            const kondisiTrigger = document.querySelector('.kondisi-trigger');
            const selectedCondition = document.getElementById('selectedCondition');
            const kondisiItems = document.querySelectorAll('.kondisi li');
            const conditionInput = document.getElementById('condition_product'); // Input tersembunyi

            // Buka popup kondisi
            kondisiTrigger.addEventListener('click', function() {
                kondisiPopup.style.display = 'block';
            });

            // Tutup popup jika klik di luar konten popup
            kondisiPopup.addEventListener('click', function(event) {
                if (event.target === kondisiPopup) {
                    kondisiPopup.style.display = 'none';
                }
            });

            // Pilih kondisi
            kondisiItems.forEach(item => {
                item.addEventListener('click', function() {
                    const selectedValue = item.getAttribute('data-value');
                    selectedCondition.textContent = selectedValue; // Tampilkan nilai yang dipilih
                    conditionInput.value =
                        selectedValue; // Simpan nilai yang dipilih ke dalam input tersembunyi
                    kondisiPopup.style.display = 'none'; // Tutup pop-up setelah pemilihan
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

            // Variabel untuk nilai awal pre_order_day (misalnya dari server-side melalui templating)
            const initialPreOrderDay = {{ $product->pre_order_day ?? 'null' }}; // Nilai awal atau null jika tidak ada
            const preorderSwitch = document.getElementById('preorder-switch');
            const poDaysContainer = document.getElementById('po-days');
            const poDaysInput = document.getElementById('po_days_input');

            // Pengecekan awal, tampilkan jika pre_order_day ada nilainya
            if (initialPreOrderDay) {
                preorderSwitch.checked = true;
                poDaysContainer.style.display = 'block';
                poDaysInput.value = initialPreOrderDay;
                poDaysInput.required = true;
            }

            // Event listener untuk switch
            preorderSwitch.addEventListener('change', function() {
                if (preorderSwitch.checked) {
                    poDaysContainer.style.display = 'block';
                    poDaysInput.required = true; // Membuat field wajib diisi
                } else {
                    poDaysContainer.style.display = 'none';
                    poDaysInput.value = ''; // Menghapus nilai input saat dinonaktifkan
                    poDaysInput.required = false; // Membuat field tidak wajib diisi
                }
            });

            const shippingSwitch = document.getElementById('shippingSwitch');
            const shippingCostStatus = document.getElementById('shippingCostStatus');

            // Setel status awal berdasarkan nilai awal shipping_cost
            if (shippingCostStatus.value === "aktif") {
                shippingSwitch.checked = true; // Aktifkan switch
            } else {
                shippingSwitch.checked = false; // Nonaktifkan switch
            }

            // Event listener untuk mengubah status shipping_cost ketika switch diubah
            shippingSwitch.addEventListener('change', function() {
                if (shippingSwitch.checked) {
                    shippingCostStatus.value = "aktif"; // Set nilai ke "aktif" jika switch diaktifkan
                } else {
                    shippingCostStatus.value = "tidak aktif"; // Set nilai ke "tidak aktif" jika switch dimatikan
                }
            });
        </script>
    </body>
@endsection
