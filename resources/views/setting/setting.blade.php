@extends('setting.layout.setting')

@section('title', 'Setting')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="setting-header">
                <div>
                    <h2>Setting</h2>
                </div>
                <div class="setting-profile">
                    <div class="setting-info-wrapper">
                        <img src="{{ asset('asset/images/profil/post/avatar.png') }}" alt="Profile Picture">
                        <div class="setting-info">
                            <h4>Jeni lutfi fauzi</h4>
                            <span>Saldo: <span class="setting-balance">Rp. 150.000</span></span>
                        </div>
                    </div>
                    <div class="setting-actions">
                        <a href="{{ route('start') }}">
                            <button class="setting-action-button">Daftar Seller</button>
                        </a>
                    </div>
                </div>

            </div>
            <div class="setting-scrollable-section">
                <div class="setting-section">
                    <h3>Akun</h3>
                    <ul>
                        <li>
                            <a href="{{ route('informasi_akun') }}">
                                <img src="asset/images/icon/akun.png" alt="akun">
                                <span>Informasi Akun</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('informasi_alamat') }}">
                                <img src="asset/images/icon/alamat.png" alt="akun">
                                <span>Alamat saya</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('progress_lamaran_misi') }}">
                                <div class="icon-container">
                                    <img src="asset/images/icon/proses_lamaran_produk.png" alt="akun">
                                    <span class="notification-dot"></span>
                                </div>
                                <span>Proses Lamaran & Pesanan</span>
                            </a>
                        </li>
                        <li>
                            <a href="/favorit">
                                <img src="asset/images/icon/favorit.png" alt="akun">
                                <span>Favorit kamu</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="setting-profile setting-border-thick"></div>
                <div class="setting-section">
                    <h3>Support</h3>
                    <ul>
                        <li>
                            <a href="{{ route('informasi_alamat') }}">
                                <img src="asset/images/icon/defender.png" alt="akun"><span>Keamanan &
                                    privasi</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('informasi_alamat') }}">
                                <img src="asset/images/icon/faq.png" alt="akun"><span>FAQ</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('informasi_alamat') }}">
                                <img src="asset/images/icon/chat_bantuan.png" alt="akun"><span>Chat Bantuan</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('informasi_alamat') }}">
                                <img src="asset/images/icon/kebijakan_jastru.png" alt="akun"><span>Kebijakan
                                    Jastru</span>
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('informasi_alamat') }}">
                                <img src="asset/images/icon/beri_feedback.png" alt="akun"><span>Beri Feedback</span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="setting-profile setting-border-thick"></div>
                <div class="logout-section">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <button class="logout-button" id="logoutButton">Keluar</button>
                </div>
            </div>
            <section>
                <div>
                    @include('navbar.layout.nav_bar')
                </div>
            </section>
        </div>
        <script>
            document.getElementById("logoutButton").addEventListener("click", function(event) {
                // Cegah aksi default tombol, yaitu logout langsung
                event.preventDefault();

                // Tampilkan SweetAlert untuk konfirmasi
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Anda akan keluar dari akun!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, keluar!',
                    cancelButtonText: 'Tidak'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Jika pengguna mengkonfirmasi, submit form untuk logout
                        document.getElementById('logout-form').submit();
                    }
                    // Jika tidak mengkonfirmasi, tidak ada aksi yang dilakukan
                });
            });
        </script>
    </body>

    </html>
@endsection
