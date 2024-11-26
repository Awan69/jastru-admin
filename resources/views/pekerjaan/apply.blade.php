@extends('pekerjaan.layout.loker')

@section('title', 'Lamar Kerja')

@section('konten')

    <body>
        <div class="mobile-container">
            <header>
                <div class="back-button">
                    <img src="{{ asset('gambar/kembali.png') }}" alt="Back"> <!-- Ganti dengan URL gambar yang diinginkan -->
                </div>
                <div class="title">Form lamaran pekerjaan</div>
            </header>

            <div class="container">
                <div class="info-box">
                    <i class="fas fa-info-circle info-icon"></i>
                    <div>
                        Data anda aman, tidak akan digunakan untuk hal lain yang akan merugikan anda.
                        <a href="#">Pelajari selengkapnya</a>
                    </div>
                </div>

                <div class="profile-section">
                    <img src="{{ asset('gambar/profile.png') }}" alt="Profile Picture">
                    <div class="profile-info">
                        <div class="name">Jeni Lutfi Fauzi</div>
                        <div class="job">
                            <img src="{{ asset('gambar/Verified.png') }}" alt="Verified" class="verified-logo"> <!-- Logo verified di sini -->
                            Full-stack Developer
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="full_name">Nama Lengkap</label>
                    <input type="text" id="full_name" placeholder="Masukan Nama Lengkap">
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="example@gmail.com">
                </div>

                <div class="form-group-apply">
                    <label for="document">Dokumen <span class="gray-text">(Ijazah)</span></label>
                    <div class="upload-box" id="upload-box" onclick="triggerUpload()">
                        <div class="upload-content" id="upload-content">
                            <div class="upload-icon">
                                <i class="fas fa-upload"></i>
                            </div>
                            <span id="upload-text">Upload file</span>
                        </div>
                        <!-- Input file dengan validasi -->
                        <input type="file" id="document-upload" accept=".pdf" style="display: none;" onchange="handleFileUpload(this)" required>
                    </div>
                </div>

                <!-- Popup untuk konfirmasi penghapusan file -->
                <div id="delete-file-popup" class="delete-file-popup" style="display: none;">
                    <div class="delete-popup-content">
                        <p>Anda yakin ingin menghapus file?</p>
                        <button onclick="deleteFile()">Hapus</button>
                        <button onclick="closeUploadPopup()">Batal</button>
                    </div>
                </div>

                <div class="form-group">
                    <label for="document">Dokumen <span class="gray-text">(Optional)</span></label>
                    <input type="text" id="website" placeholder="https://">
                </div>

                <div class="experience-section">
                    <div class="experience-title">Pengalaman Kerja</div>
                    <div class="experience-item">
                        <img src="{{ asset('gambar/Misi.png') }}" alt="Profile Picture" class="experience-logo">
                        <div class="experience-info">
                            <div class="title">IT Implementator</div>
                            <div class="company">PT Indobuzz Republik Digital</div>
                        </div>
                        <div class="experience-location">
                            <div class="city">Subang, ID</div>
                            <div class="period">Feb 2023 - Jun 2024</div>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak item pengalaman jika diperlukan -->
                    <div class="experience-item">
                        <img src="{{ asset('gambar/Misi.png') }}" alt="Profile Picture" class="experience-logo">
                        <div class="experience-info">
                            <div class="title">QA Automation</div>
                            <div class="company">PT Benihbaik</div>
                        </div>
                        <div class="experience-location">
                            <div class="city">Jakarta, ID</div>
                            <div class="period">Feb 2023 - Jun 2024</div>
                        </div>
                    </div>
                </div>

                <div class="certificate-section">
                    <div class="certificate-title">Sertifikat</div>
                    <div class="certificate-item">
                        <img src="{{ asset('gambar/PT/Dicoding.png') }}" alt="Profile Picture" class="certificate-logo">
                        <div class="certificate-info">
                            <div class="title">QA Automation</div>
                            <div class="issuer">Penerbit</div>
                        </div>
                        <div class="certificate-download">
                            <div class="download-icon"><i class="fas fa-download"></i></div>
                        </div>
                    </div>
                    <!-- Tambahkan lebih banyak item sertifikat jika diperlukan -->
                    <div class="certificate-item">
                        <img src="https://via.placeholder.com/50" alt="Profile Picture" class="certificate-logo">
                        <div class="certificate-info">
                            <div class="title">Judul Sertifikat</div>
                            <div class="issuer">Penerbit</div>
                        </div>
                        <div class="certificate-download">
                            <div class="download-icon"><i class="fas fa-download"></i></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="footer">
                <div class="apply-button" onclick="showPopup()">Ajukan Lamaran</div>
            </div>
            <div id="popup" class="popup-overlay">
                <div class="popup-content">
                    <h3>Apa kamu yakin?</h3>
                    <p>Pastikan data yang kamu unggah adalah data asli dan sudah dipastikan kebenarannya.</p>
                    <div class="popup-actions">
                        <button class="cancel-button" onclick="closePopup()">Cek lagi</button>
                        <button class="confirm-button" onclick="submitApplication()">Ya, aku yakin</button>
                    </div>
                </div>
            </div>
            <div id="warning-popup" class="popup-overlay" style="display: none;">
                <div class="popup-content">
                    <h3>Form Belum Lengkap</h3>
                    <p>Silakan isi semua form yang wajib diisi sebelum melanjutkan.</p>
                    <div class="popup-actions">
                        <button class="confirm-button" onclick="closeWarningPopup()">Tutup</button>
                    </div>
                </div>
            </div>
        </div>

    </body>
@endsection
