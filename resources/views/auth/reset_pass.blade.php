<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        background-color: #ffffff;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        overflow-x: hidden;
    }

    .mobile-container {
        width: 100%;
        max-width: 480px;
        background-color: #fff;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        height: 100vh;
        padding: 40px 20px;
        /* Tambahkan padding atas dan bawah */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .mobile-container .content {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
        /* Tambah jarak antar elemen */
    }

    .mobile-container h2 {
        font-weight: bold;
        text-align: center;
        margin-bottom: 8px;
    }

    .mobile-container h2 span {
        color: #2995f0;
    }

    .mobile-container h6 {
        text-align: center;
        color: #888;
        margin-bottom: 20px;
    }

    form {
        width: 100%;
        max-width: 400px;
        /* Lebarkan form */
    }

    .form-control {
        border-radius: 30px;
        padding: 10px 10px;
    }

    .btn-primary,
    .btn-secondary {
        background-color: #5bbcd7;
        border: none;
        border-radius: 30px;
        padding: 10px 0;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #4aaac7;
    }

    .btn-secondary {
        background-color: #fff;
        color: #888;
        border: 1px solid #888;
    }

    .btn-secondary:hover {
        background-color: #f5f5f5;
        color: #666;
    }

    a.btn {
        text-decoration: none;
        width: 100%;
        display: inline-block;
        text-align: center;
    }
</style>

<body>

    <div class="mobile-container">
        <div class="content">
            <h2>Reset Password <span>Akun Anda</span></h2>
            <h6>Masukan email yang terdaftar pada akun anda</h6>

            <form>
                <div class="mb-3">
                    <input type="email" class="form-control" placeholder="Masukan email anda">
                </div>
                <button type="submit" class="btn btn-primary">Kirim email</button>
            </form>

            <a href="/login" class="btn btn-secondary mt-3">Kembali ke login</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
