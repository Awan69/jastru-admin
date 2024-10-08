<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Akun</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    {{-- @push('styles') --}}
    <style>
        .profile-pic {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }

        .profile-pic img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            border: 2px solid #007bff;
        }

        h2 {
            text-align: left;
            margin-top: 20px;
            font-size: 18px;
            margin-bottom: 10px;
            margin-left: 10px;
            font-weight: 500;
            color: #191919;
            display: flex;
            align-items: center;
            padding-bottom: 10px;
        }

        .info-divider {
            height: 2px;
            background-color: #ddd;
            margin: 10px 0;
            width: 100%;
        }

        .back-button {
            background-color: #fff;
            border: none;
            padding: 8px;
            cursor: pointer;
            margin-right: 5px;
            margin-left: 5px;
        }

        .form-group {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 2px;
            padding: 10px 0;
            border-bottom: 1px solid #eee;
        }

        .label {
            flex: 1;
            font-weight: 400;
            font-size: 14px;
            color: #424242;
            margin-left: 10px;
        }

        .label-two {
            flex: 1;
            font-weight: 400;
            font-size: 14px;
            color: #000000;
            margin-left: 10px;
        }

        .form-control {
            flex: 2;
            text-align: right;
            font-size: 16px;
        }

        .form-control-arrow {
            flex: 0;
            color: #ccc;
            padding-left: 10px;
            font-size: 14px;
            margin-right: 10px;
        }

        .form-control textarea#link {
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
            resize: none;
            height: auto;
            line-height: 1.5em;
            padding-top: 0;
            padding-bottom: 0;
            border: none;
            font-size: 14px;
        }

        /* SweetAlert custom */
        .swal2-custom-popup {
            width: 80vw;
            max-width: 400px;
            padding: 15px;
            border-radius: 8px;
            border: 1px solid #ccc;
        }

        .swal2-custom-title {
            font-size: 24px;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .swal2-custom-content {
            font-size: 11px;
            color: #555;
        }

        .swal2-custom-confirm,
        .swal2-custom-cancel {
            padding: 8px 20px;
            font-size: 12px;
            border-radius: 6px;
            width: 110px;
        }

        .swal2-custom-confirm {
            background-color: #007bff;
            color: white;
        }

        .swal2-custom-cancel {
            background-color: #d33;
            color: white;
        }

        /* Menyesuaikan tata letak tombol */
        .swal2-actions {
            justify-content: space-between !important;
        }

        button.menu-button {
            width: 100%;
            background: none;
            border: none;
            text-align: left;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
        }

        button.menu-button:hover {
            background-color: #f0f0f0;
        }

        /* js slider posisi pekerjaan */
        .slider-overlay {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            background-color: rgb(255, 255, 255);
            display: none;
            justify-content: center;
            /* Centering content */
            z-index: 1000;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
        }

        .slider-overlay.active {
            display: block;
            bottom: 0;
        }

        .slider-content {
            width: 480px;
            max-width: 480px;
            background-color: #fff;
            padding: 1px;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            max-height: 85vh;
            height: 50vh;
            overflow-y: auto;
        }

        .slider-header {
            font-size: 18px;
            color: #191919;
            text-align: center;
            display: inline-block;
            width: 90%;
            /* Reduced width to shorten the line */
            border-bottom: 1px solid #e0e0e0;
            padding-bottom: 10px;
            margin-bottom: 20px;
            margin-left: 20px;
        }


        /* Search box layout */
        .search-card {
            display: flex;
            align-items: center;
            background-color: #f8f9fa;
            border-radius: 8px;
            padding: 10px 15px;
            cursor: pointer;
            margin-bottom: 10px;
            width: 90%;
            margin-left: auto;
            margin-right: auto;
        }

        .search-card img {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            margin-left: 5px;
        }

        .search-card-text {
            font-size: 16px;
            text-align: left;
            color: #979797;
            width: 100%;
        }


        .slider-content button {
            background-color: #ffffff;
            color: #191919;
            border: none;
            padding: 10px;
            margin: 10px 0;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-align: left;
            width: 100%;
        }

        .slider-content button:hover {
            background-color: #090b0d;
            color: white;
        }

        .slider-content::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 60%;
            /* Lebarkan lagi sisi kirinya menjadi 60% */
            height: 100%;
            background-color: #f0f0f0;
            border-radius: 20px 0 0 0;
            z-index: -1;
        }

        /* Slider gender */
        .slider-gender-conten {
            width: 100%;
            background-color: #fff;
            padding: 20px;
            border-radius: 20px 20px 0 0;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.1);
            max-height: 85vh;
            height: 80vh;
            overflow-y: auto;
        }

        .slider-gender-overlay {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            background-color: rgb(255, 255, 255);
            display: none;
            justify-content: center;
            /* Centering content */
            z-index: 1000;
            box-shadow: 0 -4px 6px rgba(0, 0, 0, 0.2);
            /* Adding shadow */
        }


        .slider-gender-conten h3 {
            margin-top: 0;
        }

        .slider-gender-conten ul {
            list-style: none;
            padding: 0;
        }

        .slider-gender-conten li {
            margin-bottom: 10px;
        }

        .gender-option {
            background-color: #10ABCF;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 10px;
            width: 100%;
            text-align: left;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .gender-option:hover {
            background-color: #009ABF;
        }


        a.menu-button {
            width: 100%;
            background: none;
            border: none;
            text-align: left;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            cursor: pointer;
            text-decoration: none;
            color: inherit;
        }

        a.menu-button:hover {
            background-color: #f0f0f0;
        }

        .highlighted {
            color: #000;
        }

        .regular {
            color: #aaa;
        }

        input[type="file"] {
            display: none;
        }

        .upload-icon {
            margin-right: 10px;
            font-size: 20px;
        }

        button[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
            width: 100%;
            margin-top: 20px;
        }

        button[type="submit"]:hover {
            background-color: #0056b3;
        }

        .spacer {
            height: 20px;
        }

        .section-divider {
            background-color: #f5f5f5;
            height: 20px;
            margin: 20px 0;
        }

        .gray-section {
            background-color: #f5f5f5;
            margin-top: 20px;
            border-radius: 0 0 16px 16px;
        }
    </style>
    {{-- @endpush --}}
</head>

<body>
    <div class="mobile-container">
        <div class="spacer"></div>
        <h2>
            <a href="{{ route('setting') }}">
                <button class="back-button">
                    <img src="asset/images/icon/backarrow.png" alt="Back">
                </button>
            </a>
            Informasi akun
        </h2>
        <div class="info-divider"></div>
        <div class="profile-pic">
            <img src="asset/images/navigasi/profil.png" alt="Foto Profil">
        </div>
        <form>
            <div class="form-group">
                <a href="{{ route('edit_name') }}" class="menu-button">
                    <label for="nama" class="label-two">Nama</label>
                    <div class="form-control">
                        <span class="highlighted">Jeni Lutfi Fauzi</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </a>
            </div>
            <div class="form-group">
                <button class="menu-button" id="changeUsernameButton">
                    <label for="username" class="label">Username</label>
                    <div class="form-control">
                        <span class="regular">Jenlutstore</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </button>
            </div>
            <div class="form-group">
                <button class="menu-button" id="changePositionButton">
                    <label for="posisi" class="label">Posisi Pekerjaan</label>
                    <div class="form-control">
                        <span class="regular" id="currentPosition">Fullstack Developer</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </button>
            </div>
            <div class="slider-overlay" id="sliderOverlay">
                <div class="slider-content">
                    <div class="slider-header">Pilih Pekerjaan</div>
                    <div class="search-card">
                        <img src="asset/images/icon/search.png" alt="Search Icon">
                        <div class="search-card-text">Cari Pekerjaan</div>
                    </div>

                    <!-- Job position buttons -->
                    <button class="position-option" data-position="Front-End Developer">Front-End Developer</button>
                    <button class="position-option" data-position="Back-End Developer">Back-End Developer</button>
                    <button class="position-option" data-position="Fullstack Developer">Fullstack Developer</button>
                    <button class="position-option" data-position="Mobile App Developer">Mobile App Developer</button>
                </div>
            </div>
            <div class="form-group">
                <a href="{{ route('edit_bio') }}" class="menu-button">
                    <label for="bio" class="label">Bio</label>
                    <div class="form-control">
                        <span class="highlighted">Programmer berpengalaman.</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </a>
            </div>
            <div class="form-group">
                <a href="{{ route('linkwebsite') }}" class="menu-button">
                    <label for="link" class="label">Website & Sosial media</label>
                    <div class="form-control">
                        <span class="regular">Linkedin.com/Jenlutfauzi</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </a>
            </div>
            <div class="section-divider"></div>
            <div class="form-group">
                <button class="menu-button" id="gender-button">
                    <label for="jenis-kelamin" class="label-two">Jenis kelamin</label>
                    <div class="form-control">
                        <span class="highlighted">Laki-laki</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </button>
            </div>
            <div class="slider-gender-overlay" id="gender-slider">
                <div class="slider-gender-conten">
                    <h3>Pilih Jenis Kelamin</h3>
                    <ul>
                        <li><button class="gender-option" data-value="Laki-laki">Laki-laki</button></li>
                        <li><button class="gender-option" data-value="Perempuan">Perempuan</button></li>
                        <li><button class="gender-option" data-value="Tidak ingin menyebutkan">Tidak ingin
                                menyebutkan</button></li>
                    </ul>
                </div>
            </div>
            <div class="form-group">
                <a href="{{ route('edit_email') }}" class="menu-button">
                    <label for="email" class="label-two">Email</label>
                    <div class="form-control">
                        <span class="highlighted">Jenilutfifauzi18@gmail.com</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </a>
            </div>
            <div class="form-group">
                <a href="{{ route('edit_no_phone') }}" class="menu-button">
                    <label for="no_phone" class="label">Nomor Telepon</label>
                    <div class="form-control">
                        <span class="regular">08123456789</span>
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </a>
            </div>
            <div class="form-group">
                <button class="menu-button">
                    <label for="cv">Unggah CV</label>
                    <div class="form-control">
                        <label for="cv">
                            <img src="asset/images/icon/uploadfile.png" class="upload-icon" alt="Upload CV">
                        </label>
                        <input type="file" id="cv" />
                    </div>
                    <div class="form-control-arrow">&gt;</div>
                </button>
            </div>
        </form>
        <div class="gray-section"></div>
    </div>
    <script>
        document.getElementById("changeUsernameButton").addEventListener("click", function(event) {
            // Cegah aksi default tombol
            event.preventDefault();

            // Tampilkan SweetAlert untuk konfirmasi
            Swal.fire({
                title: 'Username',
                text: 'Username hanya bisa diubah 1 (satu) kali setiap 30 hari. Link profilmu juga akan berubah mengikuti username barumu.',
                showCancelButton: true,
                confirmButtonText: 'Lanjut',
                cancelButtonText: 'Batal',
                customClass: {
                    popup: 'swal2-custom-popup',
                    title: 'swal2-custom-title',
                    content: 'swal2-custom-content',
                    confirmButton: 'swal2-custom-confirm',
                    cancelButton: 'swal2-custom-cancel'
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    // Arahkan pengguna ke halaman ubah username
                    window.location.href = "/edit_username";
                }
            });
        });


        const changePositionButton = document.getElementById('changePositionButton');
        const sliderOverlay = document.getElementById('sliderOverlay');
        const currentPosition = document.getElementById('currentPosition');
        const positionOptions = document.querySelectorAll('.position-option');

        // Toggle slider visibility
        changePositionButton.addEventListener('click', function(event) {
            event.preventDefault();
            sliderOverlay.classList.toggle('active');
        });

        // Update position and hide slider
        positionOptions.forEach(option => {
            option.addEventListener('click', function() {
                const newPosition = this.getAttribute('data-position');
                currentPosition.textContent = newPosition;
                sliderOverlay.classList.remove('active');
            });
        });

        // Close slider when clicking outside of it
        window.addEventListener('click', function(event) {
            if (!event.target.closest('.menu-button') && !event.target.closest('.slider-overlay')) {
                sliderOverlay.classList.remove('active');
            }
        });


        document.addEventListener('DOMContentLoaded', function() {
            var genderButton = document.getElementById('gender-button');
            var genderSlider = document.getElementById('gender-slider');
            var genderOptions = document.querySelectorAll('.gender-option');
            var highlightedSpan = document.querySelector('.highlighted');

            // Fungsi untuk menampilkan slider
            function showSlider() {
                genderSlider.style.display = 'flex';
            }

            // Fungsi untuk menyembunyikan slider
            function hideSlider() {
                genderSlider.style.display = 'none';
            }

            // Klik tombol untuk menampilkan slider
            genderButton.addEventListener('click', function(event) {
                event.stopPropagation(); // Mencegah event bubbling agar slider tidak menutup langsung
                showSlider();
            });

            // Jangan menutup slider saat klik di dalam slider
            genderSlider.addEventListener('click', function(event) {
                event.stopPropagation(); // Mencegah slider tertutup saat di-klik
            });

            // Pilih opsi jenis kelamin dan tutup slider
            genderOptions.forEach(function(option) {
                option.addEventListener('click', function(event) {
                    event.preventDefault(); // Mencegah tombol me-refresh halaman
                    var selectedGender = option.getAttribute('data-value');
                    highlightedSpan.textContent = selectedGender; // Update teks yang dipilih
                    hideSlider(); // Sembunyikan slider setelah opsi dipilih
                });
            });

            // Jangan tutup slider saat klik di dalam elemen slider
            document.addEventListener('click', function(event) {
                var isClickInside = genderSlider.contains(event.target) || genderButton.contains(event
                    .target);
                if (!isClickInside) {
                    hideSlider(); // Menutup slider hanya jika klik terjadi di luar slider dan tombol
                }
            });
        });
    </script>

</body>

</html>
