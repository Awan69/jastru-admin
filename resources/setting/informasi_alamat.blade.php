<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informasi Alamat</title>

    <!-- Link Google Fonts Inter -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/styles.css">
    <style>
        /* body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            min-height: 100vh;
            overflow-x: hidden;
        }

        @media screen and (max-width:500px) {
            .mobile-container {
                width: 100%;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                height: 988px;
                padding-bottom: 20px;
            }
        }

        .mobile-container {
            width: 100%;
            max-width: 480px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height: 988px;
            padding-bottom: 20px;
        } */

        h2 {
            text-align: left;
            margin-top: 20px;
            margin-bottom: 0;
            margin-left: 10px;
            display: flex;
            align-items: center;
            font-size: 18px;
        }

        .info-divider {
            height: 2px;
            background-color: #ddd;
            margin: 10px 0;
            width: 100%;
        }

        .back-button {
            background-color: #fff;
            border: none;
            padding: 8px;
            border-radius: 50%;
            cursor: pointer;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-right: 10px;
        }

        .card {
            margin: 10px;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            text-align: left;
        }

        .card p {
            margin: 0;
            font-size: 16px;
            line-height: 1.5;
            color: #333;
        }

        .card-buttons {
            margin-top: 20px;
        }

        .card-buttons button {
            color: #fff;
            padding: 10px 140px;
            width: 100%;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 5px;
            font-size: 16px;
        }

        .card-buttons .ubah-button {
            background-color: #fff;
            color: #10ABCF;
            border: 1px solid #10ABCF;
        }

        .card-buttons button:hover {
            opacity: 0.9;
        }

        .card-buttons .ubah-button:hover {
            background-color: #f0f0f0;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            margin-top: 50px;
        }

        .header h2 {
            margin: 0;
        }

        .header .tambah-alamat {
            background-color: transparent;
            color: #10ABCF;
            border: none;
            cursor: pointer;
            font-size: 16px;
            padding: 0;
            margin-left: 10px;
            text-decoration: none;
        }

        .pinpoint-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #c4e9f1;
            color: #0FB4DA;
            border: none;
            padding: 8px 5px;
            border-radius: 60px;
            margin-top: 10px;
            width: 140px;
        }

        .pinpoint-button i {
            margin-right: 5px;
        }

        .ubah-button {
            background-color: #fff;
            color: #10ABCF;
            border: 1px solid #10ABCF;
            padding: 8px 12px;
            border-radius: 5px;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="spacer"></div>
        <div class="header">
            <a href="{{ route('setting') }}">
                <button class="back-button">
                    <img src="asset/images/icon/backarrow.png" alt="Back">
                </button>
            </a>
            <h2>Alamat kamu</h2>
            <a href="{{ route('add_alamat') }}">
                <button class="tambah-alamat">Tambah alamat</button>
            </a>
        </div>
        <div class="info-divider"></div>
        <div class="card">
            <p>Rumah</p>
            <p>
                Citra Nirwana Residence 2, Jalan Kalisari, Wonokoyo, Kedungkandang. blok A no 7
            </p>
            <div class="pinpoint-button">
                <i class="fas fa-map-marker-alt"></i> Sudah pinpoint
            </div>
            <div class="card-buttons">
                <button class="ubah-button">
                    Ubah
                </button>
            </div>
        </div>
    </div>
</body>

</html>
