<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+5hb5g5/2pbD9Po8zV+UilXEAn1WZb9A4eaHdi1" crossorigin="anonymous">
</head>

<style>
    body {
        font-family: "Inter", sans-serif;
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
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .mobile-container .content {
        width: 100%;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        gap: 20px;
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
    }

    .form-control {
        border-radius: 30px;
        padding: 10px 20px;
    }

    .input-group .form-control {
        border-top-right-radius: 0;
        border-bottom-right-radius: 0;
    }

    .input-group .input-group-text {
        background-color: #fff;
        border-left: none;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
        cursor: pointer;
    }

    .btn-primary {
        background-color: #5bbcd7;
        border: none;
        border-radius: 30px;
        padding: 10px 0;
        width: 100%;
    }

    .btn-primary:hover {
        background-color: #4aaac7;
    }

    .social-login {
        display: flex;
        justify-content: space-between;
        width: 100%;
        margin-top: 20px;
        max-width: 400px;
    }

    .social-login .btn {
        border-radius: 30px;
        width: 48%;
        padding: 10px 0;
        font-size: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .text-muted {
        font-size: 12px;
        text-align: left;
        margin-top: 20px;
        color: #888;
    }

    .text-muted a {
        color: #f0a500;
    }
</style>

</head>
