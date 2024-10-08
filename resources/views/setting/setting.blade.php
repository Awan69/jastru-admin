<!DOCTYPE html>
<html>

<head>
    <title>Setting</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <style>
        .header {
            text-align: center;
            margin: 20px 0;
            position: sticky;

        }

        .header h2 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: -2px;
            margin-top: 10px;
        }

        .profile {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 15px 20px;
            border-bottom: 18px solid #f5f5f5;
        }

        .profile img {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .profile .info {
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .profile .profile-name-medal {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .profile .medal-icon {
            width: 20px;
            height: 20px;
            margin-right: 5px;
            vertical-align: middle;
        }

        .profile .info h4 {
            margin: 0;
            font-size: 16px;
            font-weight: 700;
        }

        .profile .info span {
            color: #000000;
            font-size: 14px;
            font-weight: 400;
            margin-right: 25%;
        }

        .profile .info .balance {
            color: #10ABCF;
            font-weight: 500;
        }

        .actions {
            display: flex;
            align-items: center;
        }

        .action-button {
            padding: 15px 20px;
            background-color: #20C2E7;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        .scrollable-section {
            padding: 15px;
            overflow-y: auto;
            flex: 1;
            scrollbar-width: none;
            -ms-overflow-style: none;
            max-height: 70vh;
        }

        .scrollable-section::-webkit-scrollbar {
            display: none;
        }

        .section {
            margin-top: -20px;
            padding-left: 15px;
        }

        .section h3 {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
            font-family: "Inter", sans-serif;
            font-weight: 600;
        }

        .section ul {
            padding: 0;
            list-style: none;
            margin: 0;
        }

        .section ul li {
            display: flex;
            align-items: center;
            padding: 10px 0;
        }

        .section ul li img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .section ul li span {
            font-size: 15px;
            font-family: "Inter", sans-serif;
            font-weight: 400;
        }

        .section ul li a {
            text-decoration: none;
            color: #000;
            display: flex;
            align-items: center;
            width: 100%;
            padding: 10px 0;
        }

        .section ul li a:hover {
            color: #007bff;
        }

        .section ul li a img {
            width: 24px;
            height: 24px;
            margin-right: 10px;
        }

        .section ul li a span {
            font-size: 15px;
            font-family: "Inter", sans-serif;
            font-weight: 400;
        }

        .section ul li {
            position: relative;
        }

        .section ul li::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 0;
            width: calc(100% - 15px);
            height: 1px;
            background-color: #e0e0e0;
        }

        .border-thick {
            border-bottom: 18px solid #f5f5f5;
            margin-left: -20px;
            /* Menambah lebar ke kiri */
            margin-right: -20px;
            margin-bottom: 30px;
            /* Menambah lebar ke kanan */
        }

        .logout-section {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin-top: 20px;
        }

        .logout-button {
            padding: 10px 35%;
            background-color: #10ABCF;
            color: #fff;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            font-weight: 500;
        }

        .footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 15px;
            border-top: 1px solid #e0e0e0;
            background-color: #fff;
            width: 100%;
            max-width: 480px;
            position: fixed;
            bottom: 0;
            z-index: 1000;
            box-sizing: border-box;
            height: 60px;
        }

        .footer a {
            text-decoration: none;
            color: #000;
        }

        .footer div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            font-size: 12px;
            font-family: "Inter", sans-serif;
            font-weight: 400;
        }

        .footer div i {
            font-size: 24px;
            margin-bottom: 5px;
            font-family: "Inter", sans-serif;
            font-weight: 400;
        }

        .img-profil {
            border-radius: 50%;
        }

        .footer img {
            width: 24px;
            height: 24px;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <div>
                <h2>Setting</h2>
            </div>
            <div class="profile">
                <img src="asset/images/navigasi/profil.png" alt="Profile Picture">
                <div class="info">
                    <div class="profile-name-medal">
                        <img src="asset/images/icon/seller_level.png" alt="Medal Icon" class="medal-icon">
                        <h4>Jeni lutfi fauzi</h4>
                    </div>
                    <span>Saldo: <span class="balance">Rp. 150.000</span></span>
                </div>
                <div class="actions">
                    <button class="action-button">Verifikasi seller</button>
                </div>
            </div>
        </div>
        <div class="scrollable-section">
            <div class="section">
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
                        <a href="{{ route('informasi_alamat') }}">
                            <img src="asset/images/icon/jasa_produk.png" alt="akun">
                            <span>Jasa & produk kamu</span>
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
            <div class="profile border-thick"></div>
            <div class="section">
                <h3>Support</h3>
                <ul>
                    <li><img src="asset/images/icon/faq.png" alt="akun"><span>FAQ</span></li>
                    <li><img src="asset/images/icon/chat_bantuan.png" alt="akun"><span>Chat Bantuan</span></li>
                    <li><img src="asset/images/icon/kebijakan_jastru.png" alt="akun"><span>Kebijakan
                            Jastru</span>
                    </li>
                    <li><img src="asset/images/icon/beri_feedback.png" alt="akun"><span>Beri Feedback</span></li>
                </ul>
            </div>
            <div class="profile border-thick"></div>
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
                <img src="asset/images/navigasi/profil.png" alt="Profile" class="img-profil">
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
