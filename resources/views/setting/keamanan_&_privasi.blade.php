@extends('setting.layout.setting')

@section('title', 'Keamanan & Privasi')

@section('konten')

    <body>
        <div class="mobile-container-keamanan-privasi">
            <!-- Header -->
            <div class="header">
                <button class="back-button"> <!-- Add your back icon here -->
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                </button>
                <h2>Keamanan & Privasi</h2>
            </div>

            <!-- Ganti Email -->
            <div class="form-group-keamanan-privasi">
                <p>Ganti Email</p>
                <div class="right-content-keamanan-privasi">
                    <span>Je******18@gmail.com</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor"
                        color= "rgba(151, 151, 151, 1)" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671" />
                    </svg>
                </div>
            </div>


            <!-- Ganti Password -->
            <div class="form-group-keamanan-privasi">
                <p>Ganti Password</p>
                <div class="right-content-keamanan-privasi">
                    <span>************</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor"
                        color= "rgba(151, 151, 151, 1)" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671" />
                    </svg>
                </div>
            </div>

            <!-- Verifikasi Face ID -->
            <div class="switch-container-keamanan-privasi">
                <div>
                    <p style="margin-bottom: -1px;">Verifikasi Face ID</p>
                    <span class="info-text-keamanan-privasi">Jastru tidak menyimpan data Face ID karena data hanya tersimpan
                        di perangkatmu</span>
                </div>
                <div class="switch-keamanan-privasi" id="face-id-switch">
                    <div class="switch-circle-keamanan-privasi"></div>
                </div>
            </div>

            <!-- Riwayat Log In -->
            <div class="form-link-keamanan-privasi" id="login-history">
                <div class="left-content-keamanan-privasi">
                    <p>Riwayat Log In</p>
                    <span class="info-text-keamanan-privasi">Lihat perangkat yang pernah log in ke akun Jastru-mu</span>
                </div>
                <div class="right-content-keamanan-privasi">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="16" fill="currentColor"
                        color="rgba(151, 151, 151, 1)" class="bi bi-chevron-compact-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                            d="M6.776 1.553a.5.5 0 0 1 .671.223l3 6a.5.5 0 0 1 0 .448l-3 6a.5.5 0 1 1-.894-.448L9.44 8 6.553 2.224a.5.5 0 0 1 .223-.671" />
                    </svg>
                </div>
            </div>
        </div>
    </body>
@endsection
