{{-- @push('styles')
    <!-- CSS untuk add alamat, edit nama, edit username, dan edit bio -->
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
            border-radius: 16px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            min-height: 100vh;
        }

        .header {
            display: flex;
            align-items: center;
            padding: 30px 20px;
            background-color: #fff;
            border-bottom: 1px solid #ddd;
        }

        .header h2 {
            flex: 1;
            text-align: center;
            font-size: 16px;
            font-weight: 600;
            margin-right: 30px;
        }

        .back-button {
            border: none;
            padding: 8px;
            cursor: pointer;
            margin-top: -10px;
            margin-right: 10px;
            margin-left: -10px;
            background: none;
        }

        .info-divider {
            height: 1px;
            background-color: #ddd;
            margin: 10px 0;
        }

        .warning-card {
            padding: 10px;
            background-color: #B2E3FF;
            border: 1px solid #d0e5f5;
            border-radius: 8px;
            color: #257AAA;
            font-size: 14px;
            display: flex;
            align-items: flex-start;
            margin-top: 20px;
            margin-bottom: 20px;
            width: calc(100% - 20px);
            margin-left: auto;
            margin-right: auto;
        }

        .warning-card p {
            margin: 0;
        }

        .warning-icon {
            width: 24px;
            height: 24px;
            margin-right: 10px;
            margin-top: 25px;
        }

        .card {
            padding: 20px;
        }

        .form-group {
            margin-bottom: 20px;
            margin-top: 20px;
            padding: 0 10px;
        }

        .form-group label {
            font-size: 14px;
            font-weight: 400;
            color: #888;
            margin-bottom: 10px;
            margin-left: 5px;
            display: block;
        }

        .form-group p {
            font-size: 16px;
            font-weight: 500;
            margin-left: 5px;
            margin-bottom: 20px;
        }

        /* Regular input style */
        .form-group input {
            width: calc(102% - 20px);
            padding: 15px;
            font-size: 16px;
            color: #333;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 5px;
            margin-left: 5px;
            border: 1px solid #ddd;
            background-color: #f5f5f5;
        }

        .form-group .address-input {
            width: 100%;
            padding: 15px 0;
            /* Hanya padding di atas dan bawah */
            font-size: 16px;
            color: #333;
            background-color: transparent;
            /* Membuat background transparan */
            border: none;
            /* Menghilangkan border */
            border-bottom: 1px solid #ddd;
            /* Menambahkan hanya garis bawah */
            box-sizing: border-box;
            margin-top: -10px;
            margin-bottom: 15px;
        }

        .form-group textarea.address-input {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            color: #333;
            border-radius: 8px;
            box-sizing: border-box;
            margin-top: 5px;
            border: 1px solid #ddd;
            background-color: #f5f5f5;
        }

        .form-group input[type="checkbox"] {
            margin-right: 10px;
            transform: scale(1.2);
            margin-top: 2px;
            /* Adjust the top margin for alignment */
            float: none;
            /* Remove float */
        }

        .form-group input[type="checkbox"]+label {
            display: inline-block;
            margin-left: 10px;
            font-size: 14px;
            font-weight: 400;
            line-height: 1.5;
            color: #333;
        }

        .ubah-button {
            width: calc(98% - 20px);
            padding: 12px;
            background-color: #10ABCF;
            color: #fff;
            font-weight: 600;
            border-radius: 8px;
            border: none;
            cursor: pointer;
            margin-top: 10px;
            margin-left: 16px;
        }

        .ubah-button:hover {
            background-color: #0c98b2;
        }

        .button-group .pin-button,
        .button-group .confirm-button {
            width: 100%;
            padding: 15px;
            font-size: 16px;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        .pin-button {
            background-color: #fff;
            color: #10ABCF;
            border: 90px solid #10ABCF;
            border-radius: 8px;
        }


        .pin-button:hover {
            background-color: #ffffff;
        }

        .confirm-button {
            background-color: #10ABCF;
            color: #fff;
        }

        .confirm-button:hover {
            background-color: #0c98b2;
        }
    </style>

    {{-- style setting --}}
{{-- <style>
    .tabs {
        display: flex;
        justify-content: space-around;
        background-color: #fff;
        border-bottom: 1px solid #ddd;
    }

    .tabs button {
        flex: 1;
        padding: 13px 0;
        font-size: 16px;
        border: none;
        background-color: transparent;
        cursor: pointer;
    }

    .tabs button.active {
        border-bottom: 3px solid #10ABCF;
        color: #10ABCF;
    }

    .content-container {
        display: flex;
        width: 100%;
    }

    /* Mengatur tab-content agar bisa di-scroll tanpa scrollbar */
    .tab-content {
        flex: 1;
        min-height: 83vh;
        background-color: #f5f5f5;
        display: none;
        overflow-y: auto;
        scrollbar-width: none;
        /* Untuk Firefox */
        -ms-overflow-style: none;
        /* Untuk Internet Explorer dan Edge */
    }

    .tab-content::-webkit-scrollbar {
        display: none;
        /* Untuk Chrome, Safari, dan Opera */
    }

    .tab-content.active {
        display: block;
        /* Show the active tab */
    }

    .favorite-item,
    .mission-item,
    .job-item {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        border-bottom: 1px solid #ddd;
        background-color: #ffffff;
        margin-bottom: 15px;
    }

    .favorite-item img,
    .mission-item img,
    .job-item img {
        width: 100px;
        height: 100px;
        object-fit: cover;
        margin-right: 15px;
    }

    .favorite-item-content,
    .favorite-mission,
    .favorite-jobs {
        flex: 1;
        /* Mengisi ruang yang tersisa */
    }

    .favorite-item h3,
    .mission-item h4,
    .job-item h4 {
        font-size: 16px;
        font-weight: 600;
    }

    .favorite-item p {
        font-size: 14px;
        color: #10ABCF;
    }

    .mission-item .reward p,
    .job-item .salary .salary {
        font-size: 14px;
        color: #0FBE20;
    }

    .bookmark-btn {
        cursor: pointer;
        font-size: 24px;
        color: #10ABCF;
    }

    .favorite-jobs {
        display: flex;
        justify-content: space-between;
        flex-direction: row;
        flex-grow: 1;
    }

    .company {
        display: flex;
        flex-direction: row;
        margin-right: 15px;
    }

    .company .company-name {
        font-size: 14px;
        margin: 0;
        margin-right: 4px;
    }

    .company .addres {
        font-size: 14px;
        color: #979797;
        margin: 0;
    }

    .salary {
        display: flex;
        flex-direction: row;
        font-size: 14px;
    }

    .salary .salary {
        font-size: 14px;
        color: #0FBE20;
    }

    .salary .per-month {
        font-size: 12px;
        /* Ukuran font lebih kecil untuk per-month */
        color: #979797;
        /* Warna abu-abu untuk per-month */
    }

    /* Memperbesar ukuran font untuk elemen dengan kelas avabile */
    .tiket .avabile {
        font-size: 14px;
        font-weight: bold;
    }

    /* Mengubah warna font untuk elemen dengan kelas kuota */
    .tiket .kuota {
        font-size: 14px;
        color: #979797;
    }
</style> --}}
@endpush
