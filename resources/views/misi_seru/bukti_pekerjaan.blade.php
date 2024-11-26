@extends('misi_seru.layout.misi_seru')

@section('title', 'Form Lamar Pekerjaan')

@section('konten')x

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('misi_seru') }}" class="footer-link">
                    <button class="back-button">
                        <img src="{{ asset('asset/images/icon/backarrow.png') }}" alt="Back">
                    </button>
                </a>
                <h1 class="title">Form Lamar Pekerjaan</h1>
            </div>

            <div class="info">
                <img src="{{ asset('asset/images/icon/vector.png') }}" alt="Periode Icon" class="periode-icon">
                Data jawaban anda aman, tidak akan digunakan untuk merugikan anda.
                <a href="#">Pelajari selengkapnya</a>
            </div>

            <div class="upload-title">
                <h2>Upload Bukti Pekerjaan</h2>
                <div id="deleteButtonContainer" style="display: none; text-align: center; margin-top: 15px;">
                    <button type="button" id="deleteButton" class="delete-button">Hapus Gambar</button>
                </div>
            </div>
            <form id="uploadForm" action="{{ route('upload_bukti') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="exciting_mission_id" value="{{ $takenMission->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->id() }}">
                <div class="upload-container" id="uploadContainer">
                    <img src="{{ asset('asset/images/icon/uploadfile.png') }}" alt="Upload Icon" class="upload-icon">
                    <div class="upload-text" id="uploadText">Upload file</div>
                    <input type="file" name="bukti_pekerjaan" id="fileInput" required>

                    <div id="imagePreview" style="display: none;">
                        <img id="previewImage" src="" alt="Image Preview"
                            style="width: 100%; height: auto; object-fit: cover;">
                    </div>
                </div>

                {{-- <div id="deleteButtonContainer" style="display: none; text-align: center; margin-top: 15px;">
                    <button type="button" id="deleteButton" class="delete-button">Hapus Gambar</button>
                </div> --}}

                <div class="footer">
                    <button type="button" id="uploadButton" class="footer-button">Upload Bukti</button>
                </div>
            </form>
        </div>

        <script>
            // Show image preview and hide upload icon/text
            document.getElementById('fileInput').addEventListener('change', function() {
                const fileInput = document.getElementById('fileInput');
                const uploadIcon = document.getElementById('uploadIcon');
                const uploadText = document.getElementById('uploadText');
                const imagePreview = document.getElementById('imagePreview');
                const previewImage = document.getElementById('previewImage');

                if (fileInput.files.length > 0) {
                    const reader = new FileReader();
                    reader.onload = function(e) {
                        previewImage.src = e.target.result;
                        imagePreview.style.display = 'block';
                    };
                    reader.readAsDataURL(fileInput.files[0]);

                    uploadIcon.style.display = 'none';
                    uploadText.style.display = 'none';
                } else {
                    resetUploadContainer();
                }
            });

            // Function to reset the upload container
            function resetUploadContainer() {
                const fileInput = document.getElementById('fileInput');
                const uploadIcon = document.getElementById('uploadIcon');
                const uploadText = document.getElementById('uploadText');
                const imagePreview = document.getElementById('imagePreview');

                fileInput.value = '';
                uploadIcon.style.display = 'block';
                uploadText.style.display = 'block';
                imagePreview.style.display = 'none';
            }

            document.getElementById("uploadButton").addEventListener("click", function() {
                const fileInput = document.getElementById('fileInput');
                if (fileInput.files.length === 0) {
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
                    return;
                }

                Swal.fire({
                    title: "Apa kamu yakin?",
                    text: "Pastikan data yang kamu unggah adalah hasil pekerjaan yang telah kamu kerjakan.",
                    showCancelButton: true,
                    confirmButtonColor: "#00bcd4",
                    cancelButtonColor: "#f44336",
                    cancelButtonText: "Cek lagi",
                    confirmButtonText: "Ya, aku yakin",
                    reverseButtons: true,
                    customClass: {
                        popup: 'custom-swal-popup',
                        title: 'custom-swal-title',
                        content: 'custom-swal-content',
                        confirmButton: 'custom-swal-confirm-button',
                        cancelButton: 'custom-swal-cancel-button',
                    }
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Submit the form if confirmed
                        document.getElementById('uploadForm').submit();
                    }
                });
            });
        </script>
    </body>
@endsection
