<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misi Selesai</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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

        .mobile-container {
            width: 100%;
            max-width: 480px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            height: 96vh;
            padding: 20px;
        }

        h1,
        p {
            position: relative;
            top: 50px;
        }

        h1 {
            font-size: 1.5rem;
            color: #10ABCF;
            text-align: center;
            margin: 5px 0;
        }

        p {
            font-size: 1rem;
            color: #666;
            text-align: center;
            margin: 10px 0 10px;
            padding: 0 20px;
        }

        .img-container {
            flex-grow: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 0px;
        }

        img {
            max-width: 200%;
            height: auto;
        }

        button {
            width: calc(100% - 40px);
            max-width: 320px;
            background-color: #10ABCF;
            color: #fff;
            border: none;
            padding: 12px 20px;
            font-size: 1rem;
            border-radius: 8px;
            cursor: pointer;
            margin: 10px 0;
        }

        button:last-of-type {
            background-color: #fff;
            color: #007bff;
            border: 2px solid #10ABCF;
        }

        button:hover {
            background-color: #0062cc;
        }

        button:last-of-type:hover {
            background-color: #e6f0ff;
            color: #0062cc;
            border-color: #10ABCF;
        }

        button a {
            text-decoration: none;
            color: inherit;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <h1>KAMU BERHASIL</h1>
        <h1>MENYELESAIKAN MISI</h1>
        <p>Tunggu proses validasi hasil pekerjaan yang telah anda selesaikan maks <span style="color: #10ABCF;">7 hari
                kerja</span></p>

        <div class="img-container">
            <img src="asset/images/misi_seru/hore_varian2.png" alt="Orang Berselebrasi">
        </div>
        <button> <a href="{{ route('misi_seru') }}">Kembali ke daftar misi</a></button>
        <button>Cek progress misi</button>
    </div>
</body>

</html>
