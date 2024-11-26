<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Produk</title>
    <style>
        body {
            font-family: "Inter", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
        }


        .mobile-container {
            width: 100%;
            max-width: 480px;
            max-height: 480vh;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        

        /* Styling for pop-up modals */
        .info-keterangan-pro-popup {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .info-keterangan-pro-popup-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
        }

        .popup-header-info-keterangan-pro {
            text-align: center;
            margin-bottom: 20px;
        }

        .info-keterangan-pro-list {
            list-style: none;
            padding: 0;
        }

        .info-keterangan-pro-list li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <a href="/products_services">
                <button class="back-button">
                    <img src="asset/images/icon/backarrow.png" alt="Back">
                </button>
            </a>
            <h2>Tambah produk</h2>
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
            <form enctype="multipart/form-data">
                <div class="form-group-foto">
                    <div class="label-row">
                        <label for="fileInput">Foto Produk <span style="color:red;">*</span></label>
                        <span class="aspect-ratio">1:1</span>
                    </div>
                    <div id="uploadContainer" class="upload-container">
                        <div class="upload-products-services">
                            <img src="asset/images/icon/camera.png" alt="Upload Icon" class="upload-icon">
                            <input type="file" id="fileInput" class="fileInput" accept="image/*"
                                onchange="previewImage(this)">
                        </div>
                    </div>
                </div>
                <!-- Add other input fields for products -->
            </form>
            <div class="fixed-footer">
                <div class="button-group-products-services">
                    <a href="/add_services">
                        <button class="footer-button-primary">Tambah produk baru</button>
                    </a>
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

                    // Temukan atau buat elemen gambar (img) untuk menampilkan gambar
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
    </script>
</body>

</html>
