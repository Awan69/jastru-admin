<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            background-color: #ffffff;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            /* Align items at the top */
            min-height: 100vh;
            overflow-x: hidden;
            /* Prevent horizontal scroll */
        }

        .mobile-container {
            width: 100%;
            max-width: 480px;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header-pekerjaan {
            position: fixed;
            display: flex;
            align-items: center;
            text-align: center;
            justify-content: space-between;
            width: 100%;
            /* Matches the provided width */
            min-width: 370px;
            max-width: 480px;
            height: 70px;
            /* Matches the provided height */
            padding: 15px 16px 10px 16px;
            /* Matches the provided padding */
            z-index: 10;
            background-color: white;
            gap: 10px;
            border-bottom: 1px solid #E0E0E0;
            /* Adds bottom border */
        }

        /* .back-button {
            background-color: transparent;
            border: none;
            padding: 0;
            margin-left: 10px;
        }

        .back-button img {
            width: 10px;
            height: 16px;
        } */

        .search-container {
            position: relative;
            flex-grow: 1;
            /* margin-left: 10px;
            margin-right: 10px; */
        }

        .search-container input {
            width: 100%;
            padding: 10px 40px;
            /* Adjust padding for the input */
            border: 1px solid #E0E0E0;
            border-radius: 10px;
            /* Rounded full */
            font-size: 14px;
            outline: none;
        }

        .search-container img {
            position: absolute;
            left: 15px;
            /* Position the search icon */
            top: 50%;
            transform: translateY(-50%);
            width: 18px;
            /* Adjust search icon size */
            height: 18px;
        }

        .icons {
            display: flex;
            margin-right: 3px;
        }

        .icons a {
            position: relative;
            display: inline-block;
        }

        .icons img {
            width: 24px;
            height: 24px;
        }

        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 5px;
            font-size: 10px;
        }

        /* Konten */
        .content {
            flex-grow: 1;
            padding-top: 20px;
            background-color: white;
            overflow: hidden;
        }

        /* Banner */
        .banner img {
            width: 100%;
            display: block;
            margin-top: 70px;
        }

        /* Ayo Misi Section */
        .ayo-misi {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* padding: 10px; */
            background-color: white;
            text-decoration: none;
            padding: 0 16px;
        }

        .ayo-misi-left {
            display: flex;
            align-items: flex-start;
            /* Menyelaraskan teks dan gambar di atas */
        }

        .money-icon {
            width: auto;
            height: 20px;
            margin-right: 7px;
            margin-left: -5px;
            /* Memberikan jarak antara gambar dan teks Ayo Misi */
        }

        .koper-icon {
            width: auto;
            height: 20px;
            margin-right: 7px;
            /* Memberikan jarak antara gambar dan teks Ayo Misi */
        }

        .ayomisi-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .ayomisi-container p {
            margin: 0;
        }

        .text-container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            margin-bottom: 3px;
        }

        .text-container p {
            margin: 0;
        }

        .ayo-misi-subtitle {
            font-size: 13px;
            color: #888;
            margin-top: 20px;
        }

        .ayo-misi-title {
            font-size: 14px;
            color: rgba(66, 66, 66, 1);
            font-weight: 500;
            /* Memberikan sedikit jarak di atas Peluang Cuan */
            margin: 0;

        }

        .ayo-misi-button {
            /* margin-left: auto; */
            width: 28px;
            height: 28px;
            padding: 5px;
            border-radius: 25px;
            background-color: rgba(245, 245, 245, 1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            margin: 0;
        }

        /* Misi Section */
        .misi-section {
            margin-top: 10px;
            margin-bottom: 10px;
            background-color: white;
        }

        .misi-list {
            display: flex;
            overflow-x: auto;
            padding: 0 16px 10px 16px;
            scrollbar-width: none;
            gap: 20px;
            /* Menghilangkan scrollbar di Firefox */
        }

        .misi-list::-webkit-scrollbar {
            height: 0px;
            /* Menghilangkan scrollbar di Webkit */
        }

        .misi-card {
            background-color: white;
            border-radius: 8px;
            border: 1px solid rgba(237, 237, 237, 1);
            /* margin-right: 20px; */
            padding: 15px 16px;
            width: 300px;
            height: 150px;
            text-decoration: none;
            /* min-width: 80%;
            max-width: 80%;
            min-height: 150px;
            max-height: 150px; */
        }


        .misi-card-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
            /* Kurangi margin ini jika ingin mengangkat title lebih tinggi */
            /* Kurangi padding ini jika ingin lebih dekat dengan atas */
        }

        .misi-logo {
            width: 43px;
            height: 43px;
            margin-right: 10px;
            border: 0.1px solid #ededed;
            border-radius: 10px;
        }

        .misi-card-title {
            flex: 1;
            font-size: 12px;
            font-weight: 500;
            color: #000;
            margin-bottom: 0px;
            white-space: normal;
            word-wrap: break-word;
            max-width: 150px;
            margin-left: -25px;
            /* Sesuaikan lebar untuk memaksa kata ke baris berikutnya */
            text-align: left;
            /* Pastikan teks rata kiri */
            line-height: 22px;
            /* Mengatur jarak antar baris */
        }

        .misi-card-title p {
            margin: 0;
        }

        .favorite-icon {
            margin-top: -20px;
            width: 20px;
            height: 20px;
        }


        .misi-highlight {
            color: #28a745;
            /* Warna hijau untuk highlight */
        }

        .misi-card-info {
            display: flex;
            flex-wrap: nowrap;
            gap: 20px;
            /* Jarak antara elemen */
            overflow-x: auto;
            /* Mengaktifkan scroll horizontal */
            margin-top: 5px;
            padding-bottom: 5px;
            scrollbar-width: none;
            /* Menghilangkan scrollbar di Firefox */
        }

        .misi-card-info::-webkit-scrollbar {
            height: 0;
            /* Menghilangkan scrollbar di Webkit browser seperti Chrome dan Safari */
        }

        .misi-card-info span {
            font-size: 11px;
            font-weight: 400;
            color: rgba(66, 66, 66, 1);
            padding: 5px 10px;
            border-radius: 10px;
            background-color: #f5f5f5;
            white-space: nowrap;
        }

        .misi-card-footer {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
            font-size: 12px;
            color: rgba(151, 151, 151, 1);
        }

        /* .misi-card-footer span {
            font-size: 12px;
            color: rgba(151, 151, 151, 1);
        } */


        /* Ayo Kerja Section */
        .ayo-kerja {
            display: flex;
            align-items: center;
            padding: 10px 16px 0 16px;
            background-color: white;
            border-bottom: 1px solid rgba(238, 238, 238, 1);
            margin-bottom: 20px;
            /* Garis bawah */
            text-decoration: none;
        }

        .ayo-kerja-left {
            display: flex;
            align-items: flex-start;
            /* Menyelaraskan teks dan gambar di atas */
        }

        .ayokerja-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
        }

        .ayo-kerja-subtitle {
            font-size: 12px;
            color: #888;
            margin-top: 9px;
        }

        .ayo-kerja-title {
            font-size: 14px;
            color: rgba(66, 66, 66, 1);
            font-weight: 500;
            margin-left: 5px;
            /* Memberikan sedikit jarak di atas Lowongan Pekerjaan */
        }


        /* Lowongan Kerja Section */
        .lowongan-kerja-section {
            padding: 10px 0 0 0;
            margin-bottom: 20px;
            border-bottom: 1px solid rgba(238, 238, 238, 1)
                /* Jarak antara judul dan daftar lowongan kerja */
        }

        .lowongan-kerja-list {
            /* Jarak antara judul dan daftar lowongan kerja */
            height: 100%;
            padding: 0 16px 0 16px;
        }

        .lowongan-card {
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            margin-bottom: 20px;
            display: flex;
            position: relative;
            /* For positioning the favorite icon */
            border: 1px solid #eaeaea;
            flex-direction: column;
            text-decoration: none;
        }

        .lowongan-card-content {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            width: 100%;
            height: 100%;
        }

        .lowongan-card-header-container {
            display: flex;
            flex-direction: row;
            justify-content: flex-start;
            align-items: center;
            align-content: center;
            margin-bottom: 10px;
            width: 100%;
        }

        .company-logo {
            width: 40px;
            height: 40px;
            margin-right: 15px;
            border-radius: 8px;
            align-self: flex-start;
            border: 1px solid rgba(241, 241, 241, 1)
        }

        .lowongan-card-info-container {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-content: center;
        }

        .lowongan-card-info {
            flex-grow: 1;
        }

        .lowongan-card-header {
            display: flex;
            justify-content: flex-start;
            width: 100%;
            position: relative;
            /* Positioning context for favorite icon */
        }

        .lowongan-card-title {
            display: flex;
            font-size: 13px;
            font-weight: 500;
            color: rgba(0, 0, 0, 1);
            margin: 0;
            /* margin-right: 185px;*/
            /* width: 100%; */
        }

        .favorite-icon-lowongan-kerja {
            width: 20px;
            height: 20px;
            position: absolute;
            top: 20px;
            right: 10px;
            /* Position the icon at the far right of the card */
            cursor: pointer;
        }

        .bookmark-path {
            fill: none;
            stroke: #424242;
            stroke-width: 1.5;
            stroke-linecap: round;
            stroke-linejoin: round;
        }

        .favorite-icon-lowongan-kerja.active .bookmark-path {
            fill: rgba(16, 171, 207, 1);
            /* Fill color when active */
            stroke: rgba(16, 171, 207, 1);
            /* Border color when active */
        }

        /* Change color when active */
        .favorite-icon.active .bookmark-path {
            fill: rgba(16, 171, 207, 1);
            /* Fill color when active */
            stroke: rgba(16, 171, 207, 1);
            /* Border color when active */
        }

        .lowongan-card-subtitle {
            font-size: 12px;
            color: #888;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
        }

        .company-name {
            font-size: 12px;
            font-weight: 500;
            color: rgba(66, 66, 66, 1);
            margin-right: 5px;
            display: flex;
            align-items: center;
        }

        .verified-icon {
            width: 17px;
            height: 17px;
            margin-right: 2px;
        }

        .lowongan-card-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
            margin: 0;
            padding: 0;
            justify-content: flex-start;
            align-items: center;
            width: 100%;
            /* Align tags vertically center */
        }

        .lowongan-card-tags span {
            font-size: 12px;
            color: #555;
            padding: 5px 10px;
            border-radius: 15px;
            background-color: #f5f5f5;
            margin-right: 5px;
            /* Space between tags */
        }

        .primary-tags {
            display: flex;
            gap: 10px;
            /* Sesuaikan gap jika diperlukan */
            justify-content: space-around;
            align-items: center;
            margin-left: 0;
            /* Hilangkan auto margin untuk memulai dari kiri */
            margin-top: 5px;
        }

        .primary-tags span {
            background-color: rgba(16, 171, 207, 1);
            color: white;
            padding: 5px 10px;
            border-radius: 22px;
            white-space: nowrap;
            font-size: 11px;
            font-weight: 400;
            margin-right: 5px;
            /* Space between primary tags */
        }

        .range-gaji-date {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-top: 20px;
        }

        .lowongan-date {
            font-size: 12px;
            font-weight: 400;
            color: rgba(151, 151, 151, 1);
        }

        .lowongan-gaji {
            font-size: 14px;
            font-weight: 500;
            color: rgba(9, 167, 72, 1);
        }

        .gaji-bulan {
            font-size: 12px;
            font-weight: 400;
            color: rgba(151, 151, 151, 1);
        }

        .space {
            height: 55px;
        }

        .separator {
            width: 100%;
            /* Full width */
            min-height: 15px;
            /* Minimum height to make sure it shows */
            background-color: #f5f5f5;
            /* Light gray color */
        }
    </style>
    <style>
        /* Reset box-sizing untuk menghindari overflow */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
        }

        header {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            height: 120px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px 16px;
            padding-bottom: 20px;
            padding-top: 60px;
            background-color: #ffffff;
            border-top: 1px solid #ccc;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            /* Reduced opacity and blur radius */
            z-index: 1000;
            border-bottom-left-radius: 12px;
            border-bottom-right-radius: 12px;
            text-align: center;
        }



        /* Mengatur tombol kembali */
        .back-button {
            position: absolute;
            left: 20px;
            cursor: pointer;
        }

        .back-button img {
            width: 10px;
            /* Sesuaikan ukuran gambar */
            height: 16px;
        }

        .title {
            font-size: 20px;
            /* font-weight: bold; */
            font-family: 'Arial', sans-serif;
        }

        .apply-button {
            flex: 1;
            background-color: #10ABCF;
            color: white;
            font-weight: bold;
            padding: 12px;
            border-radius: 5px;
            text-align: center;
            cursor: pointer;
            margin-left: 16px;
            height: 50px;
        }

        .apply-button:hover {
            background-color: #8ED5E7;
        }

        .apply-button:after {
            content: "";
            display: block;
            position: absolute;
            border-radius: 5px;
            left: 0;
            top: 0;
            width: 85%;
            height: 40%;
            opacity: 0;
            transition: all 1s;
            box-shadow: 0 0 10px 40px #8ED5E7;
            margin-left: 21px;
            margin-top: 21px;
        }

        .apply-button:active:after {
            box-shadow: 0 0 0 0 #8ED5E7;
            position: absolute;
            border-radius: 4em;
            left: 0;
            top: 0;
            opacity: 1;
            transition: 0s;
        }

        .apply-button:active {
            top: 1px;
        }


        .container {
            padding: 20px;
            flex: 1;
            overflow-y: auto;
            margin-bottom: 100px;
            margin-top: 130px;
        }

        .info-box {
            display: flex;
            align-items: center;
            background-color: #e9f6fd;
            border: 1px solid #cfe7f5;
            color: #2c7cd3;
            padding: 10px;
            margin-bottom: 40px;
            border-radius: 5px;
            font-size: 14px;
        }

        .info-box .info-icon {
            margin-right: 10px;
            font-size: 16px;
            margin-top: 7px;
        }

        .info-box a {
            text-decoration: underline;
            color: #1976d2;
        }

        .profile-section {
            display: flex;
            align-items: center;
            margin-bottom: 40px;
        }

        .profile-section img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 15px;
        }

        .profile-section .profile-info {
            font-size: 14px;
        }

        .profile-section .profile-info .name {
            font-weight: 550;
            font-size: 16px;
        }

        .profile-section .profile-info .job {
            color: gray;
        }

        .profile-section .job {
            display: flex;
            align-items: center;
        }

        .profile-section .verified-logo {
            width: 20px;
            /* Ukuran logo verified */
            height: 20px;
            margin-right: 2px;
            /* Jarak antara logo dan teks pekerjaan */
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 500;
        }

        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 10px;
        }

        .upload-box {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 40px;
            /* Ukuran awal upload box */
            border: 2px solid #ccc;
            border-radius: 10px;
            cursor: pointer;
            position: relative;
            width: 100%;
            max-width: 500px;
            text-align: center;
        }

        .upload-content {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .upload-box .upload-icon {
            font-size: 36px;
            color: #1976d2;
            margin-bottom: 10px;
        }

        .upload-box span {
            color: #1976d2;
            font-weight: bold;
        }

        .upload-box .uploaded-file {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* Tambahkan untuk mengatur spacing */
            width: 100%;
            /* Pastikan elemen memenuhi box */
        }

        .upload-box .uploaded-file i {
            font-size: 24px;
            color: #1976d2;
        }

        .upload-box .uploaded-file span {
            margin-left: 10px;
            color: #1976d2;
        }

        .upload-box .delete-icon {
            font-size: 20px;
            color: #1976d2;
            cursor: pointer;
        }

        .delete-file-popup {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .delete-popup-content {
            text-align: center;
        }

        .delete-popup-content button {
            margin: 10px;
            padding: 10px 20px;
            border: none;
            background-color: #1976d2;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        .delete-popup-content button:hover {
            background-color: #155a9c;
        }

        .experience-section,
        .certificate-section {
            margin-bottom: 20px;
        }

        .experience-title,
        .certificate-title {
            font-size: 16px;
            font-weight: 550;
            margin-bottom: 10px;
        }

        .experience-item,
        .certificate-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px;
            background-color: white;
            border-radius: 10px;
            margin-bottom: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #d3d3d3;
            /* Light gray border */
        }

        .experience-info,
        .certificate-info {
            flex: 1;
            margin-left: 10px;
        }

        .experience-info .title,
        .certificate-info .title {
            font-weight: 500;
            margin-bottom: 5px;
            font-size: 16px;
        }

        .experience-info .company,
        .certificate-info .issuer {
            font-size: 14px;
            color: gray;
            white-space: nowrap;
            /* Prevents text from wrapping */
            overflow: hidden;
            /* Hides overflow */
            text-overflow: ellipsis;
            /* Adds ellipsis (...) when the text is too long */
            max-width: 150px;
            /* Adjust this value as needed */
        }

        .experience-location,
        .certificate-download {
            font-size: 14px;
            color: gray;
        }

        /* Gray text for Ijazah and Opsional */
        .gray-text {
            color: #999999;
            /* Light gray color */
        }

        /* Align city name to the right */
        .experience-location {
            text-align: right;
            flex: 1;
            margin-right: 5px;
        }

        .experience-location .city,
        .certificate-download .city {
            font-weight: 400;
            font-size: 16px;
            color: black;
            margin-bottom: 5px;
        }

        .experience-logo,
        .certificate-logo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            object-fit: cover;
            margin-left: 5px;
            margin-right: 2px;
        }

        .experience-location .period {
            font-size: 14px;
            color: gray;
        }

        .certificate-download .download-icon {
            font-size: 20px;
            color: #1976d2;
        }

        .popup-overlay {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            z-index: 1001;
            justify-content: center;
            align-items: center;
        }

        .popup-content {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
            width: 80%;
            max-width: 400px;
        }

        .popup-actions {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .cancel-button,
        .confirm-button {
            flex: 1;
            margin: 0 5px;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        .cancel-button {
            background-color: #FF6B6B;
            color: white;
        }

        .cancel-button:hover {
            background-color: #FF8787;
        }

        .confirm-button {
            background-color: #10ABCF;
            color: white;
        }

        .confirm-button:hover {
            background-color: #8ED5E7;
        }
    </style>
</head>
