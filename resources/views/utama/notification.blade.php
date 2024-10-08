<!-- resources/views/notifikasi.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <style>
        .mobile-container {
            width: 100%;
            max-width: 480px;
            height: 100vh;
            margin: 0 auto;
            padding: 0;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            overflow-y: scroll;
        }

        .notif-header {
            display: flex;
            align-items: center;
            padding: 15px;
            background-color: #F8F9FA;
            border-bottom: 1px solid #E9ECEF;
        }

        .notif-header h2 {
            margin: 0;
            font-size: 1.25rem;
            flex-grow: 1;
            text-align: left;
        }

        .notif-header img {
            cursor: pointer;
        }

        .filter-button {
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            cursor: pointer;
            border: none;
            background-color: #f0f0f0;
            color: #333;
        }

        .filter-button img {
            width: 16px;
            height: 16px;
            margin-right: 5px;
        }

        .filter-button.active {
            background-color: #7FFD;
            color: white;
        }

        .notif-item {
            padding: 15px;
            border-bottom: 1px solid #E9ECEF;
            background-color: #fff;
            display: flex;
            align-items: flex-start;
        }

        .notif-item img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
        }

        .notif-item .notif-content {
            flex-grow: 1;
        }

        .notif-item .notif-label {
            display: inline-block;
            font-size: 0.75rem;
            border-radius: 20px;
            padding: 2px 10px;
            margin-bottom: 5px;
        }

        .notif-item .notif-title {
            font-size: 1rem;
            font-weight: bold;
            margin: 0;
        }

        .notif-item .notif-text {
            font-size: 0.875rem;
            margin: 5px 0 0;
        }

        .notif-item.promo .notif-label {
            background-color: #E3F2FD;
            color: #2196F3;
        }

        .notif-item.transaksi .notif-label {
            background-color: #FFEBEE;
            color: #F44336;
        }

        .notif-item.pengajuan .notif-label {
            background-color: #E8F5E9;
            color: #4CAF50;
        }

        .filter-bar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px 15px;
            background-color: #F8F9FA;
            border-bottom: 1px solid #E9ECEF;
        }

        .filter-bar button {
            margin-right: 5px;
        }

        .notif-list {
            padding: 15px;
        }
    </style>
    <script>
        function filterContent(category) {
            document.querySelectorAll('.filter-button').forEach(button => {
                button.classList.remove('active');
            });

            document.getElementById('filter-' + category).classList.add('active');

            document.querySelectorAll('.notif-item').forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        window.onload = function() {
            filterContent('all');
        }
    </script>
</head>

<body>
    <div class="mobile-container">
        <div class="notif-header">
            <a href="/">
                <img src="{{ asset('Asset/back.png') }}" alt="Back" height="24" width="24">
            </a>
            <h2>Notifikasi</h2>
            <button class="btn btn-primary">Tandai telah dibaca</button>
        </div>

        <!-- Filter Bar -->
        <div class="filter-bar">
            <button class="filter-button" id="filter-logo">
                <img src="{{ asset('Asset/filter.png') }}" alt="Filter"></button>
            <button class="filter-button" id="filter-all" onclick="filterContent('all')">All</button>
            <button class="filter-button" id="filter-transaksi" onclick="filterContent('transaksi')">Transaksi</button>
            <button class="filter-button" id="filter-promo" onclick="filterContent('promo')">Promo</button>
            <button class="filter-button" id="filter-pengajuan" onclick="filterContent('pengajuan')">Pengajuan</button>
        </div>

        <div class="notif-list">
            <div class="notif-item promo">
                <img src="https://via.placeholder.com/40" alt="Promo Icon">
                <div class="notif-content">
                    <span class="notif-label">Promo</span>
                    <p class="notif-title">Kumpulkan +1000 stamp jastru</p>
                    <p class="notif-text">Lakukan transaksi layanan di jastru dan kumpulkan jastru stamp hingga min 1000
                        dan tukarkan dengan saldo hingga 1 Juta.</p>
                </div>
            </div>

            <div class="notif-item transaksi">
                <img src="https://via.placeholder.com/40" alt="Transaksi Icon">
                <div class="notif-content">
                    <span class="notif-label">Transaksi</span>
                    <p class="notif-title">Anda baru saja menggunakan jasa vermak</p>
                    <p class="notif-text">Tetap terhubung dengan jastru untuk menjaga transaksi anda tetap aman.</p>
                </div>
            </div>

            <div class="notif-item pengajuan">
                <img src="https://via.placeholder.com/40" alt="Pengajuan Icon">
                <div class="notif-content">
                    <span class="notif-label">Pengajuan</span>
                    <p class="notif-title">Pengajuan lowongan kerja Graphic Design</p>
                    <p class="notif-text">Proses pengajuan sedang dilakukan, hubungi admin jika terdapat kendala.</p>
                </div>
            </div>

            <div class="notif-item promo">
                <img src="https://via.placeholder.com/40" alt="Promo Icon">
                <div class="notif-content">
                    <span class="notif-label">Promo</span>
                    <p class="notif-title">Dapatkan extra point keuntungan sampai 100%</p>
                    <p class="notif-text">Tingkatkan transaksi kamu sebagai seller jastru untuk dapatkan extra point
                        yang bisa kamu tukar untuk voucher umroh!</p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
