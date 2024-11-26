<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>

    @push('styles')
        {{-- style buat Form Lamar Pekerjaan --}}
        <style>
            body {
                font-family: "Inter", sans-serif;
                margin: 0;
                padding: 0;
                box-sizing: border-box;
                background-color: #ffffff;
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
                border-radius: 16px;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                height: 100vh;
                position: relative;
            }

            .header {
                position: relative;
                padding: 16px;
                text-align: center;
                border-bottom: 8px solid #eee;
            }

            .back-button {
                position: absolute;
                top: 16px;
                left: 16px;
                border: none;
                padding: 8px;
                cursor: pointer;
                margin-right: 10px;
                background: none;
                margin-top: 20px;
            }

            .title {
                font-size: 14px;
                margin: 0;
                color: #424242;
                margin-top: 30px;
                margin-bottom: 20px;
            }

            .info {
                background-color: #E7F3FF;
                padding: 10px 20px;
                border-radius: 10px;
                margin: 20px;
                font-size: 14px;
                color: #257AAA;
                text-align: left;
            }

            .info a {
                color: #257AAA;
                text-decoration: none;
            }

            .upload-container {
                display: flex;
                flex-wrap: wrap;
                gap: 10px;
                border: 1px solid #ccc;
                padding: 20px;
                border-radius: 10px;
                margin: 20px;
                cursor: pointer;
                display: flex;
                /* Use flexbox */
                flex-direction: column;
                /* Stack items vertically */
                justify-content: center;
                /* Center items vertically */
                align-items: center;
                /* Center items horizontally */
                text-align: center;
                position: relative;
                /* Ensure position for file input works */
                transform: translateY(-20px);
            }

            .upload-container .upload-icon {
                width: 26px;
                height: 26px;
                margin-bottom: 10px;
                /* Add spacing between icon and title */
            }

            .upload-title {
                display: flex;
                flex-direction: row;
                justify-content: space-between;
                align-items: center;
                align-content: center;
                padding: 20px 20px 10px 20px;
            }

            .upload-title h2 {
                font-size: 14px;
                font-weight: 500;
                color: #000000;
            }

            .upload-text {
                font-size: 12px;
                font-weight: 400;
                color: #10ABCF;
            }

            .upload-icon,
            .upload-text {
                transition: opacity 0.3s ease;
            }

            /* Styling untuk tombol hapus */
            .delete-button {
                background-color: #f44336;
                color: white;
                border: none;
                padding: 5px 10px;
                font-size: 12px;
                border-radius: 20px;
                cursor: pointer;
                transition: background-color 0.3s ease;
            }

            .delete-button:hover {
                background-color: #d32f2f;
            }

            .upload-container input[type="file"] {
                opacity: 0;
                position: absolute;
                top: 10px;
                left: 0;
                width: 100%;
                height: 100%;
                cursor: pointer;
            }

            .custom-swal-popup {
                width: 400px;
                padding: 20px;
                border-radius: 16px;
            }

            .custom-swal-title {
                font-size: 18px;
                font-weight: bold;
            }


            .swal2-html_container {
                font-size: 140px;
                color: #979797;
            }

            .custom-swal-confirm-button {
                background-color: #00bcd4;
                color: #fff;
                border-radius: 12px;
                padding: 10px 20px;
                font-size: 14px;
            }

            .custom-swal-cancel-button {
                background-color: #f44336;
                color: #fff;
                border-radius: 12px;
                padding: 10px 20px;
                font-size: 14px;
            }

            .custom-swal-confirm-button:hover {
                background-color: #0097a7;
            }

            .custom-swal-cancel-button:hover {
                background-color: #d32f2f;
            }

            .footer {
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: -5px 15px;
                border-top: 1px solid #e0e0e0;
                background-color: #fff;
                width: 100%;
                max-width: 480px;
                position: fixed;
                bottom: 0;
                z-index: 1000;
                box-sizing: border-box;
                height: 100px;
            }

            .footer-button {
                background-color: #10ABCF;
                color: white;
                padding: 14px;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                width: calc(100% - 40px);
                font-size: 16px;
                text-align: center;
            }

            .footer-button:hover {
                background-color: #0b89b1;
            }
        </style>
    @endpush

    <!-- cdn leaflet -->
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.css" />
    <script src="http://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.3/leaflet.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
