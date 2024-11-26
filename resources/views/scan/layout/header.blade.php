<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb5g5/2pbD9Po8zV+UilXEAn1WZb9A4eaHdi1" crossorigin="anonymous">

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
            min-height: 120vh;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .mobile-container-start {
            width: 100%;
            max-width: 480px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 100vh;
            background: linear-gradient(to bottom, #ffffff 30%, #10ABCF80 100%);
        }

        /* Header */
        .header {
            padding: 16px;
            margin-top: 40px;
            display: flex;
            align-items: center;
            background-color: #fff;
        }

        .header .title {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin: 0 auto;
            /* Centers the title between the icon and any content on the right */
        }

        .header a {
            font-size: 24px;
            color: #10ABCF;
            display: flex;
            align-items: center;
            /* Aligns icon vertically with the title */
        }

        .back-arrow-icon {
            width: 24px;
            height: 24px;
        }

        .content h3 {
            font-size: 24px;
            font-weight: bold;
            margin-top: 5px;
        }

        .content p {
            color: #6c757d;
            margin-bottom: 10px;
        }

        .peluang {
            color: #10ABCF;
        }

        .action button {
            background-color: #10ABCF;
            border: none;
            color: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            transition: background-color 0.3s ease;
        }

        .action button:hover,
        .action button:active {
            background-color: #10a2c3;
        }


        .learn-more small {
            color: #6c757d;
        }

        .text-link {
            color: #10ABCF;
            text-decoration: none;
        }

        .promo-image {
            margin-top: 40px;
        }

        .shop-image {
            width: 80%;
            max-width: 450px;
            margin-top: 150px;
            margin-bottom: 20px;
        }

        .cf_ktp-image {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 20px auto;
            border-radius: 15px;
            overflow: hidden;
            border: 3px solid #00bfff;
            width: fit-content;
        }

        .cf_ktp-image img {
            display: block;
            width: 400px;
            height: 250px;
            object-fit: cover;
            border-radius: 0;
        }

        .scan1-image {
            width: 70%;
            max-width: 250px;
            margin-bottom: 20px;
            border-radius: 8px;
        }

        .confirm-open-cam {
            width: 100%;
            max-width: 400px;
            height: 50px;
            background-color: #10ABCF;
            color: white;
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: 500;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        .confirm-cam {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 1000;
        }

        .confirm-popup {
            display: flex;
            align-items: center;
            justify-content: center;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1000;
        }

        .popup-content {
            background-color: white;
            border-radius: 12px;
            padding: 20px;
            width: 90%;
            max-width: 360px;
            text-align: center;
            position: relative;
        }

        .popup-title {
            font-size: 14px;
            font-weight: 500;
            color: #191919;
            margin-bottom: 8px;
            /* Reduced gap slightly */
        }

        .popup-text {
            font-size: 12px;
            font-weight: 400;
            color: #979797;
            margin-bottom: 24px;
        }

        .popup-button,
        .popup-button-cancel {
            padding: 10px 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 12px;
            font-weight: 500;
            color: white;
            flex: 1;
            text-align: center;
        }

        .popup-button {
            background-color: #10ABCF;
        }

        .popup-button-cancel {
            background-color: #FF5A5A;
        }

        .button-container {
            display: flex;
            gap: 15px;
            justify-content: center;
        }

        .close-popup {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 24px;
            color: #666;
            cursor: pointer;
        }

        .camera-background {
            position: relative;
            width: 100%;
            height: 80vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .back-arrow {
            position: absolute;
            top: 20px;
            left: 20px;
            width: 20px;
            height: 20px;
            z-index: 3;
        }

        .back-arrow img {
            width: 100%;
            height: 100%;
        }

        .back-arrow-open {
            position: absolute;
            top: 20px;
            left: 25px;
            width: 40px;
            height: 40px;
            background-color: #0000000A;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
        }

        .back-arrow-open img {
            width: 50%;
            height: 50%;
        }

        .back-arrow-selfie {
            position: absolute;
            top: 20px;
            left: 25px;
            width: 40px;
            height: 40px;
            background-color: #FFFFFF;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 3;
        }

        .back-arrow-selfie img {
            width: 50%;
            height: 50%;
        }

        #cameraStream {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .camera-instructions {
            font-size: 14px;
            text-align: center;
            position: absolute;
            top: 120px;
            color: #ffffff;
            margin-top: -20px;
            padding: 0 8px;
            z-index: 2;
        }

        .ktp-align-box {
            width: 90%;
            max-width: 400px;
            height: 220px;
            border: 2px solid #10ABCF;
            border-radius: 8px;
            background-color: transparent;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 3;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .capture-button-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
            z-index: 3;
            margin-top: 20px;
        }

        .capture-button {
            background-color: #10ABCF;
            border: 2px solid #ffffff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            position: relative;
        }

        .capture-button::before {
            content: "";
            position: absolute;
            width: 72px;
            height: 72px;
            border: 2px solid #10ABCF;
            border-radius: 50%;
            z-index: 0;
        }

        .capture-button img {
            width: 100%;
            position: relative;
            z-index: 1;
        }

        .powered-by {
            font-size: 12px;
            color: #606060;
            opacity: 0.8;
            font-weight: 500;
            text-align: center;
            margin-top: 10px;
            z-index: 3;
        }

        .ktp-scan-image img {
            max-width: 60%;
            height: 30%;
            display: block;
            margin: 0 auto;
        }

        .bottom-scan1,
        .ktp-scan-image {
            padding: 0;
        }

        .info-box.text-left.p-3 {
            margin-bottom: 90px;
        }

        .info-box {
            background-color: #EAF7FF;
            border-radius: 8px;
            color: #10ABCF;
            margin: 0px 16px 10px 16px;
            font-size: 14px;
            display: flex;
            align-items: center;
            padding: 10px;
        }

        .info-box i {
            margin-right: 10px;
            font-size: 20px;
        }

        .info-box p {
            margin: 0;
            font-size: 14px;
        }

        .bottom-scan1 {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 10px;
            border-top: 1px solid #ededed;
            background-color: #ffff;
            width: 100%;
            max-width: 480px;
            position: flex;
            bottom: 20px;
            z-index: 1000;
            height: 80px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .bottom-scan1 a {
            text-decoration: none;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .bottom-scan1 button {
            background-color: #10ABCF;
            border: none;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px;
            font-size: 16px;
            width: 95%;
            max-width: 480px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }

        .bottom-scan1 button:hover {
            background-color: #0f96b3;
        }

        .bottom-scan1 .btn-secondary {
            background-color: #DCEEF3;
            color: #10ABCF;
        }

        .bottom-scan2 {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 20px 10px;
            border-top: 1px solid #ededed;
            background-color: #ffff;
            width: 100%;
            max-width: 480px;
            position: fixed;
            bottom: 20px;
            z-index: 1000;
            height: 80px;
            box-sizing: border-box;
            margin-bottom: 20px;
        }

        .bottom-scan2 a {
            text-decoration: none;
            width: 100%;
            display: flex;
            justify-content: center;
        }

        .bottom-scan2 button {
            background-color: #10ABCF;
            border: none;
            color: #fff;
            padding: 10px 0;
            border-radius: 8px;
            font-size: 16px;
            width: 95%;
            max-width: 480px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s ease;
        }
    </style>
</head>
