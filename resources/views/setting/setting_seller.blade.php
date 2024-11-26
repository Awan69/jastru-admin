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
                    <img src="asset/images/profile/profile.png" alt="Profile Picture">
                    <div class="setting-info">
                        <div class="setting-profile-name-medal">
                            <img src="asset/images/icon/icon_seller.png" alt="Medal Seller" class="setting-medal-icon">
                            <h4>Jeni Lutfi Fauzi</h4>
                        </div>
                        <span>Saldo: <span class="setting-balance">Rp. 150.000</span></span>
                    </div>
                    <div class="setting-actions-seller">
                        <button class="setting-seller">
                            <img src="asset/images/icon/toko.png" alt="Shop Icon" class="button-icon">
                            <span class="button-text">Toko Saya</span>
                            <span class="button-arrow">></span>
                        </button>
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
                            <a href="{{ route('informasi_alamat') }}">
                                <img src="asset/images/icon/proses_lamaran_produk.png" alt="akun">
                                <span>Proses Lamaran &Pesanan</span>
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
                                <img src="asset/images/icon/keamanan_privasi.png" alt="akun"><span>Keamanan &
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

            <div class="footer">
                <a href="{{ route('beranda') }}" class="footer-link">
                    <div>
                        <img src="asset/images/navigasi/beranda.png" alt="Beranda">
                        <span>Beranda</span>
                    </div>
                </a>
                <a href="{{ route('pesan') }}" class="footer-link">
                    <div>
                        <img src="asset/images/navigasi/chat_inbox.png" alt="Pesan">
                        <span>Pesan</span>
                    </div>
                </a>
                <div>
                    <img src="asset/images/profile/profile.png" alt="Profile" class="img-profil">
                    <span>Profile</span>
                </div>
                <div>
                    <img src="asset/images/navigasi/pekerjaan.png" alt="Pekerjaan">
                    <span>Pekerjaan</span>
                </div>
                <div>
                    <img src="asset/images/navigasi/setting.png" alt="Setting">
                    <span>Setting</span>
                </div>
            </div>

            <script>
                // js logout setting
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
