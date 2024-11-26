@push('scripts')
    <script>
        // Document Upload Script
        function triggerUpload() {
            document.getElementById('document-upload').click();
        }

        function handleFileUpload(input) {
            if (input.files && input.files[0]) {
                const fileName = input.files[0].name;
                const uploadBox = document.getElementById('upload-box');

                // Ganti tampilan upload box setelah file diupload
                uploadBox.innerHTML = `
                    <div class="uploaded-file">
                        <i class="fas fa-file-pdf"></i>
                        <span>${fileName}</span>
                        <i class="fas fa-ellipsis-h delete-icon" onclick="showDeletePopup()"></i>
                    </div>
                `;

                // Atur ulang ukuran upload box setelah file diupload
                uploadBox.style.padding = "10px 20px";
            }
        }

        function showDeletePopup() {
            document.getElementById('delete-file-popup').style.display = 'block';
        }

        function closeUploadPopup() {
            document.getElementById('delete-file-popup').style.display = 'none';
        }

        function deleteFile() {
            const uploadBox = document.getElementById('upload-box');

            // Reset tampilan upload box
            uploadBox.innerHTML = `
                <div class="upload-content" id="upload-content">
                    <div class="upload-icon">
                        <i class="fas fa-upload"></i>
                    </div>
                    <span id="upload-text">Upload file</span>
                </div>
            `;
            document.getElementById('document-upload').value = ''; // Reset input file

            // Kembalikan ukuran awal upload box
            uploadBox.style.padding = "40px";

            // Tutup pop-up
            closeUploadPopup();
        }

        // "Lamar Sekarang" Pop-up Script
        function showPopup() {
            document.getElementById('popup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        function submitApplication() {
            // Logic untuk submit aplikasi
            alert('Aplikasi kamu telah diajukan!');
            closePopup();
        }
        // Fungsi untuk memvalidasi form wajib
        function validateForm() {
                const fullName = document.getElementById('full_name').value.trim();
                const email = document.getElementById('email').value.trim();
                const documentUpload = document.getElementById('document-upload').value.trim();

                // Cek apakah semua form wajib sudah terisi
                if (!fullName || !email || !documentUpload) {
                    // Jika ada salah satu atau lebih yang belum diisi, munculkan pop-up peringatan
                    document.getElementById('popup').style.display = 'none'; // Tutup pop-up konfirmasi
                    document.getElementById('warning-popup').style.display = 'flex'; // Munculkan pop-up peringatan
                    return false; // Batalkan pengiriman form
                } else {
                    // Jika semua form wajib sudah diisi, arahkan ke halaman /success
                    submitForm();
                }
            }

        // Fungsi untuk menutup pop-up peringatan
        function closeWarningPopup() {
            document.getElementById('warning-popup').style.display = 'none';
        }

        function showPopup() {
            document.getElementById('popup').style.display = 'flex';
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
        }

        // Fungsi untuk mengarahkan ke halaman /success
        function submitForm() {
            console.log("Form lengkap, mengarahkan ke halaman success...");
            window.location.href = "/success"; // Redirect ke halaman success
        }

    </script>
@endpush
