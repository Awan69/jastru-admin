@extends('setting.layout.setting')

@section('title', 'Informasi Akun')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('setting') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back" class="back-icon">
                    </button>
                </a>
                <h2>Informasi akun</h2>
            </div>
            <div class="setting-scrollable-section">
                <div class="profile-picture-informasi-akun">
                    <div class="profile-picture-container">
                        <img src="asset/images/profile/profile.png" alt="Foto Profil">
                        <img src="asset/images/icon/camera2.png" alt="Camera Icon" class="camera-icon">
                    </div>
                </div>
                <form>
                    <div class="form-group-informasi-akun">
                        <a href="{{ route('edit_name') }}" class="menu-button-informasi-akun">
                            <label-informasi-akun for="nama"
                                class="label-informasi-akun-two">Nama</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="highlighted">Jeni Lutfi Fauzi</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </a>
                    </div>
                    <div class="form-group-informasi-akun">
                        <button class="menu-button-informasi-akun" id="changeUsernameButton">
                            <label-informasi-akun for="username"
                                class="label-informasi-akun">Username</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="regular">Jenlutstore</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </button>
                    </div>
                    <div class="form-group-informasi-akun">
                        <button class="menu-button-informasi-akun" id="changePositionButton">
                            <label-informasi-akun for="posisi" class="label-informasi-akun">Posisi
                                Pekerjaan</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="regular" id="currentPosition">Fullstack Developer</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </button>
                    </div>
                    <div class="slider-overlay-informasi-akun" id="sliderOverlay" style="display: none;">
                        <div class="slider-content-informasi-akun">
                            <div class="silder-header-informasi-akun">Pilih Pekerjaan</div>
                            <div class="search-card-products-services">
                                <img src="asset/images/icon/search.png" alt="Search Icon">
                                <input type="text" id="searchInput" placeholder="Cari Pekerjaan"
                                    onkeyup="filterBrands()">
                            </div>
                            <ul class="info-keterangan-pro-list merek-list" id="jobList">
                                <li data-value="Ibu Rumah Tangga">Ibu Rumah Tangga</li>
                                <li data-value="Buruh/Pekerja non Formal">Buruh/Pekerja non Formal</li>
                                <li data-value="Eksekutif & Manajemen Senior">Eksekutif & Manajemen Senior</li>
                                <li data-value="Freelancer">Freelancer</li>
                                <li data-value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</li>
                                <li data-value="Profesional">Profesional</li>
                                <li data-value="Fullstack Developer">Fullstack Developer</li>
                                <li data-value="UI/UX Designer">UI/UX Designer</li>
                                <li data-value="IT Consultant">IT Consultant</li>
                                <li data-value="Tenaga Kesehatan">Tenaga Kesehatan</li>
                                <li data-value="Petani">Petani</li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-group-informasi-akun">
                        <a href="{{ route('edit_bio') }}" class="menu-button-informasi-akun">
                            <label-informasi-akun for="bio" class="label-informasi-akun">Bio</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="highlighted">Programmer berpengalaman.</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </a>
                    </div>
                    <div class="form-group-informasi-akun">
                        <a href="{{ route('linkwebsite') }}" class="menu-button-informasi-akun">
                            <label-informasi-akun for="link" class="label-informasi-akun">Website & Sosial
                                media</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="regular">Linkedin.com/Jenlutfauzi</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </a>
                    </div>
                    <div class="section-divider-informasi-akun"></div>
                    <div class="form-group-informasi-akun">
                        <button class="menu-button-informasi-akun" id="gender-button">
                            <label-informasi-akun for="jenis-kelamin" class="label-informasi-akun-two">Jenis
                                Kelamin</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="highlighted">Laki-laki</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </button>
                    </div>
                    <div class="slider-overlay-informasi-akun" id="gender-slider" style="display: none;">
                        <div class="slider-content-informasi-akun">
                            <div class="silder-header-informasi-akun">Pilih Jenis Kelamin</div>

                            <ul class="info-keterangan-pro-list merek-list" id="genderList">
                                <li data-value="Laki-laki">Laki-laki</li>
                                <li data-value="Perempuan">Perempuan</li>
                                <li data-value="Tidak ingin menyebutkan">Tidak ingin menyebutkan</li>
                            </ul>
                        </div>
                    </div>

                    <div class="form-group-informasi-akun">
                        <a href="{{ route('edit_email') }}" class="menu-button-informasi-akun">
                            <label-informasi-akun for="email"
                                class="label-informasi-akun-two">Email</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="highlighted">Jenilutfifauzi18@gmail.com</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </a>
                    </div>
                    <div class="form-group-informasi-akun">
                        <a href="{{ route('edit_no_phone') }}" class="menu-button-informasi-akun">
                            <label-informasi-akun for="no_phone" class="label-informasi-akun">Nomor
                                Telepon</label-informasi-akun>
                            <div class="form-control-informasi-akun">
                                <span class="regular">08123456789</span>
                            </div>
                            <div class="form-control-informasi-akun-arrow">&gt;</div>
                        </a>
                    </div>
                    <div class="form-group-informasi-akun">
                        <label for="cv" class="label-informasi-akun">Unggah CV</label>
                        <div class="form-control-informasi-akun">
                            <img src="asset/images/icon/uploadfile.png" class="upload-icon-informasi-akun"
                                alt="Upload CV" id="uploadIcon">
                            <input type="file" id="fileInput" class="fileInput-informasi-akun"
                                accept=".pdf,.doc,.docx" onchange="previewFile(this)">
                        </div>
                        <div class="form-control-informasi-akun-arrow">&gt;</div>
                    </div>
                </form>
                <div class="section-divider2-informasi-akun"></div>
            </div>
        </div>
        <script>
            // Handle SweetAlert for username change
            document.getElementById("changeUsernameButton").addEventListener("click", function(event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Username',
                    text: 'Username hanya bisa diubah 1 (satu) kali setiap 30 hari. Link profilmu juga akan berubah mengikuti username barumu.',
                    showCancelButton: true,
                    confirmButtonText: 'Lanjut',
                    cancelButtonText: 'Batal',
                    scrollbarPadding: false,
                    customClass: {
                        popup: 'swal2-custom-informasi-akun-popup',
                        title: 'swal2-custom-informasi-akun-title',
                        content: 'swal2-custom-informasi-akun-content',
                        confirmButton: 'swal2-custom-informasi-akun-confirm',
                        cancelButton: 'swal2-custom-informasi-akun-cancel'
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = "/edit_username";
                    }
                });
            });


            // File upload preview
            const uploadIcon = document.getElementById('uploadIcon');
            const fileInput = document.querySelector('.fileInput-informasi-akun');
            uploadIcon.addEventListener('click', function() {
                fileInput.click();
            });

            function previewFile(input) {
                const file = input.files[0];
                if (file) {
                    console.log(`File uploaded: ${file.name}`);
                }
            }

            // Filter job list (search function)
            function filterBrands() {
                const input = document.getElementById('searchInput');
                const filter = input.value.toLowerCase().trim();
                const ul = document.getElementById('brandList');
                const li = ul.getElementsByTagName('li');

                for (let item of li) {
                    let txtValue = item.textContent.toLowerCase();
                    if (txtValue.indexOf(filter) > -1) {
                        item.style.display = '';
                    } else {
                        item.style.display = 'none';
                    }
                }
            }

            // Handle "Kategori Pekerjaan" popup
            const changePositionButton = document.getElementById('changePositionButton');
            const sliderOverlay = document.getElementById('sliderOverlay');

            changePositionButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Close gender popup if it's open
                const genderSlider = document.getElementById('gender-slider');
                genderSlider.style.display = 'none';
                sliderOverlay.style.display = 'block';
            });

            sliderOverlay.addEventListener('click', function(event) {
                if (event.target === sliderOverlay) {
                    sliderOverlay.style.display = 'none';
                }
            });

            const jobItems = document.querySelectorAll('#jobList li');
            jobItems.forEach(item => {
                item.addEventListener('click', function() {
                    const selectedJob = item.getAttribute('data-value');
                    document.getElementById('currentPosition').textContent = selectedJob;
                    sliderOverlay.style.display = 'none'; // Close the popup
                });
            });

            // Handle "Jenis Kelamin" popup
            const genderButton = document.getElementById('gender-button');
            const genderSlider = document.getElementById('gender-slider');

            genderButton.addEventListener('click', function(event) {
                event.preventDefault();
                // Close job category popup if it's open
                sliderOverlay.style.display = 'none';
                genderSlider.style.display = 'block';
            });

            genderSlider.addEventListener('click', function(event) {
                if (event.target === genderSlider) {
                    genderSlider.style.display = 'none';
                }
            });

            const genderItems = document.querySelectorAll('#genderList li');
            genderItems.forEach(item => {
                item.addEventListener('click', function() {
                    const selectedGender = item.getAttribute('data-value');
                    document.querySelector('#gender-button .highlighted').textContent = selectedGender;
                    genderSlider.style.display = 'none'; // Close the popup
                });
            });
        </script>
    </body>
@endsection
