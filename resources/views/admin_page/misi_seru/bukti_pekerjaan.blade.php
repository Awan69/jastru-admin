@extends('misi_seru.layout.misi_seru')

@section('title', 'Form Lamar Pekerjaan')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('misi_seru') }}" class="footer-link">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h1 class="title">Form Lamar Pekerjaan</h1>
            </div>

            <div class="info">
                <img src="asset/images/icon/vector.png" alt="Periode Icon" class="periode-icon">
                Data jawaban anda aman, tidak akan digunakan untuk merugikan anda.
                <a href="#">Pelajari selengkapnya</a>
            </div>

            <!-- New Text Above the Upload Section -->
            <div class="upload-title">
                <h2>Upload Bukti Pekerjaan</h2>
            </div>
            <div class="upload-container">
                <img src="asset/images/icon/uploadfile.png" alt="Upload Icon" class="upload-icon">
                <div class="upload-text">Upload file</div>
                <input type="file" id="fileInput">
            </div>
            <div class="footer">
                <button class="footer-button" id="uploadButton">Upload Bukti</button>
            </div>
        </div>

        <script>
            document.getElementById("uploadButton").addEventListener("click", function() {
                Swal.fire({
                    title: "Apa kamu yakin?",
                    text: "Pastikan data yang kamu unggah adalah hasil pekerjaan yang telah kamu kerjakan.",
                    showCancelButton: true,
                    confirmButtonColor: "#00bcd4",
                    cancelButtonColor: "#f44336",
                    cancelButtonText: "Cek lagi",
                    confirmButtonText: "Ya, aku yakin",
                    reverseButtons: true, // Menukar posisi tombol konfirmasi dan batal
                    customClass: {
                        popup: 'custom-swal-popup',
                        title: 'custom-swal-title',
                        content: 'custom-swal-content',
                        confirmButton: 'custom-swal-confirm-button',
                        cancelButton: 'custom-swal-cancel-button',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        const fileInput = document.getElementById('fileInput');
                        if (fileInput.files.length > 0) {
                            // Simulasi upload berhasil
                            setTimeout(() => {
                                Swal.fire({
                                    title: "Berhasil!",
                                    text: "File \"" + fileInput.files[0].name +
                                        "\" berhasil diupload.",
                                    icon: "success",
                                    customClass: {
                                        popup: 'custom-swal-popup',
                                        title: 'custom-swal-title',
                                        content: 'custom-swal-content',
                                        confirmButton: 'custom-swal-confirm-button',
                                    }
                                }).then(() => {
                                    // Redirect ke halaman misi_berhasil setelah alert sukses ditutup
                                    window.location.href = "{{ route('misi_berhasil') }}";
                                });
                            }, 500); // Simulasi delay untuk upload
                        } else {
                            Swal.fire({
                                title: "Tidak ada file yang dipilih!",
                                text: "Silakan pilih file sebelum mengupload.",
                                icon: "error",
                                customClass: {
                                    popup: 'custom-swal-popup',
                                    title: 'custom-swal-title',
                                    content: 'custom-swal-content',
                                    confirmButton: 'custom-swal-confirm-button',
                                }
                            });
                        }
                    }
                });
            });
        </script>

    @endsection
