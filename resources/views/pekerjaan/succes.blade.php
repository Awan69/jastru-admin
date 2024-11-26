<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lamaran Berhasil</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <style>
        /* Style tambahan */
        .success-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            height: 100%;
        }

        .success-content h1 {
            font-size: 20px;
            font-weight: 700;
            color: #10ABCF;
            margin-bottom: 10px;
            line-height: 30px;
            letter-spacing: 3%;
            margin-top: 100px;
            width: 271px;
            height: 60px;
        }

        .success-content p {
            color: #666;
            font-size: 12px;
            margin-bottom: 20px;
            width: 296px;
            height: 36px;
            font-weight: 500;
            line-height: 18px;
            margin-top: 5px;

        }

        .success-image {
            width: 229.54px;
            height: 232.54px;
            margin-bottom: 20px;
            margin-top: 96px;
        }

        .success-buttons {
            display: flex;
            flex-direction: column;
            gap: 15px;
            padding: 20px;
            width: 100%;
            margin-top: 133px;
            height: 155px;
            border: 1px 0 0 0;
            border-top: 1px solid white; /* Border hanya di bagian atas */
            padding: 20px 16px 40px 16px;
        }

        .success-buttons .back-btn, .success-buttons .progress-btn {
            padding: 15px;
            border-radius: 8px;
            border: none;
            font-size: 14px;
            cursor: pointer;
            width: 100%;
        }

        .success-buttons .back-btn {
            background-color: #10ABCF;
            color: white;
        }

        .success-buttons .progress-btn {
            background-color: transparent;
            border: 2px solid #10ABCF;
            color: #10ABCF;
        }
    </style>
</head>
<body>

    <div class="mobile-container">
        <div class="success-content">
            <h1>KAMU BERHASIL MENGAJUKAN LAMARAN</h1>
            <p>Ajukan lamaran sebanyak mungkin untuk meningkatkan potensi kamu mendapat pekerjaan.</p>
            <img src="{{ asset('gambar/success.png') }}" alt="Success Image" class="success-image">
        </div>
        <div class="success-buttons">
            <a href="/pekerjaan">
                <button class="back-btn">Kembali ke daftar lowongan</button>
            </a>
            <a href="/setting">
                <button class="progress-btn">Cek progress lamaran</button>
            </a>
        </div>
    </div>

</body>
</html>
