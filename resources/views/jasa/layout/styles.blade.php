@push('styles')
    <style>

        /*----------------------------------------------------------------------------*/
        /*--------------------------------LISTING.BLADE.PHP---------------------------*/
        /*----------------------------------------------------------------------------*/

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
        }

        .mobile-container {
                width: 100%;
                max-width: 480px;
                background-color: #fff;
                display: flex;
                flex-direction: column;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                overflow: hidden;
                min-height: 100vh;
            }

            .mobile-container * {
                box-sizing: border-box;
            }

            @media (max-width: 480px) {
                .mobile-container {
                    width: 100vw;
                    max-width: 100vw;
                }
            }

            @media (min-width: 481px) {
                .mobile-container {
                    width: 480px;
                }
            }

        .top-bar-listing {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 16px 10px 16px;
            position: fixed;
            top: 0;
            width: 100%;
            max-width: 480px;
            height: 70px;
            z-index: 1000;
            background-color: #fff;
            box-sizing: border-box;
            border-bottom: 1px solid #F5F5F5;
            gap: 10px;
        }

        .back-button-listing {
            width: 12px;
            cursor: pointer;
        }

        .search-container {
            position: relative;
            flex: 1;
        }

        .search-container input {
            width: 100%;
            padding-left: 36px; /* Ensure padding leaves space for the search icon */
            padding-right: 10px;
            height: 40px;
            border-radius: 20px;
            border: 1px solid #E0E0E0;
            border-radius: 8px;
        }

        .search-container img {
            position: absolute;
            top: 50%;
            left: 10px;
            transform: translateY(-50%);
            height: 20px;
            width: 20px;
        }

        .top-bar img {
            height: 24px;
            width: 24px;
        }

        .relative {
            position: relative;
            margin-left: 5px;
        }

        .badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: red;
            color: white;
            border-radius: 50%;
            padding: 2px 6px;
            font-size: 10px;
            font-weight: bold;
            line-height: 1;
        }

        /* Style for the notification pop-up */
        .notification-popup {
            position: absolute;
            top: 50px;
            right: 0;
            width: 320px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            z-index: 1000;
            display: none; /* Hidden by default */
            border-radius: 8px;
            transition: opacity 0.3s ease;
            opacity: 0;
            visibility: hidden;
        }

        /* Arrow style for the bubble */
        .notification-popup::before {
            content: '';
            position: absolute;
            top: -10px;
            right: 15px;
            border-width: 0 10px 10px 10px;
            border-style: solid;
            border-color: transparent transparent #10ABCF transparent;
            display: block;
            width: 0;
        }

        /* Header style for the notification */
        .notification-popup .notification-header {
            background-color: #10ABCF; /* Light blue background */
            color: white; /* Blue text */
            padding: 10px 15px;
            border-bottom: 1px solid #ddd;
            border-radius: 8px 8px 0 0; /* Rounded corners for top only */
            text-align: center;
        }

        /* Style for the notification content */
        .notification-popup .notification-content {
            padding: 15px;
            max-height: 300px; /* Set max-height for the content */
            overflow-y: scroll; /* Allow vertical scrolling */
            scrollbar-width: none; /* Hide scrollbar in Firefox */
        }

        /* Hide scrollbar for Webkit browsers (Chrome, Safari) */
        .notification-popup .notification-content::-webkit-scrollbar {
            width: 0px; /* Hide scrollbar */
            background: transparent; /* Make scrollbar background transparent */
        }

        /* Style for the notification list items */
        .notification-popup .notification-list {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .notification-popup .notification-list li {
            padding: 10px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: flex-start;
        }

        .notif-item {
            padding: 15px;
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

        /* Class to show the popup */
        .show {
            opacity: 1 !important;
            visibility: visible !important;
        }

        /* Animation for notification popup */
        @keyframes fadeInSlide {
            0% {
                opacity: 0;
                transform: translateY(-20px) scale(0.9);
            }
            50% {
                opacity: 1;
                transform: translateY(10px) scale(1.05);
            }
            100% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
        }

        /* Glow effect for rounded notification icon */
        @keyframes glow {
            0% {
                box-shadow: 0 0 5px #10ABCF, 0 0 10px #10ABCF, 0 0 20px #10ABCF;
            }
            50% {
                box-shadow: 0 0 15px #10ABCF, 0 0 25px #10ABCF, 0 0 40px #10ABCF;
            }
            100% {
                box-shadow: 0 0 5px #10ABCF, 0 0 10px #10ABCF, 0 0 20px #10ABCF;
            }
        }

        #notification-icon.clicked {
            animation: glow 1.5s ease infinite;
            box-shadow: 0 0 10px #10ABCF, 0 0 20px #10ABCF, 0 0 30px #10ABCF;
            border-radius: 50%; /* Ensure the glow effect follows a round shape */
        }

        .notification-popup.show {
            animation: fadeInSlide 0.5s ease forwards;
        }

        /* Animated close effect */
        @keyframes fadeOutSlide {
            0% {
                opacity: 1;
                transform: translateY(0) scale(1);
            }
            100% {
                opacity: 0;
                transform: translateY(-20px) scale(0.9);
            }
        }

        .notification-popup.hide {
            animation: fadeOutSlide 0.5s ease forwards;
        }

        .tabs {
            display: flex;
            justify-content: space-between;
            /* overflow-x: auto; */
            /* margin: 0 16px; */
            background: white;
            scrollbar-width: none;
            height: auto;
            position: relative;
            border-bottom: 1px solid rgba(237, 237, 237, 1);
        }

        .tabs::-webkit-scrollbar {
            width: 0;
            height: 0;
        }

        .tabs a {
            width: 100%;
            height: auto;
            text-align: center;
            padding: 16px 10px;
            font-size: 12px;
            font-weight: 500;
        }

        /* .tabs-item {
            width: 100%;
            height: auto;
            text-align: center;
            padding: 16px 10px;
            font-size: 12px;
            font-weight: 500;
        } */

        .tabs a.active {
            color: rgba(16, 171, 207, 1); /* Warna biru */
            border-bottom: 2px solid rgba(16, 171, 207, 1); /* Garis bawah */
            font-weight: 500;
        }

        .product-container {
            display: flex;
            overflow-x: auto;
            gap: 1rem;
        }
        .product-box-carousel {
            width: 150px;
            min-width: 150px;
        }
        .product-box-more {
            width: 100%;
        }
        .product-image {
            width: 100%;
            padding-top: 100%; /* Rasio 1:1 */
            position: relative;
        }
        .product-image img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .product-name-listing {
            margin-top: 10px;
            font-size: 12px;
            font-weight: 500;
            letter-spacing: 2%;
            line-height: 13.31px;
            color: rgba(66, 66, 66, 1);
        }

        .product-price-listing {
            margin-top: 5px;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: 2%;
            line-height: 14.62px;
            color: rgba(151, 151, 151, 1);
        }

        .banner-listing {
            width: 100%;
            height: auto;
        }

        .truncate-text {
            white-space: nowrap;       /* Pastikan teks tidak memecah baris */
            overflow: hidden;          /* Sembunyikan teks yang melampaui batas */
            text-overflow: ellipsis;   /* Tambahkan "..." jika teks terpotong */
        }
        .text-bait {
            margin-bottom: 10px;
            font-size: 15px;
            font-weight: 500;
            color: rgba(66, 66, 66, 1);
        }
        /*----------------------------------------------------------------------------*/
        /*--------------------------------POST.BLADE.PHP------------------------------*/
        /*----------------------------------------------------------------------------*/
        #red-ball {
            position: fixed;
            top: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 50px;
            background-color: red;
            border-radius: 50%;
            z-index: 1000;
            animation: dropBall 2s forwards;
        }

        @keyframes dropBall {
            20% {
                top: 20%;
                transform: translateX(-50%) scale(1);
                animation: dropBall 0.8s forwards;
            }
            50% {
                top: 50%;
                transform: translate(-50%, -50%) scale(3);
            }
            80% {
                top: 80%;
                transform: translate(-50%, -50%) scale(5);
                animation: dropBall 0.8s forwards;
            }
            100% {
                top: 100%;
                transform: translate(-50%, -50%) scale(5);
                opacity: 0%;
            }
        }

        /* Produk Gambar Kecil di Tengah */
        #product-image {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 0;
            height: 0;
            opacity: 0;
            transition: opacity 0.5s, width 0.5s ease-out, height 0.5s ease-out;
            z-index: 1000;
        }

        /* Ketika bola menghilang, produk muncul */
        #product-image.show {
            width: 100px;
            height: 100px;
            opacity: 1;
        }

        /* Ketika animasi selesai, seluruh halaman muncul */
        .product-details-container {
            opacity: 0;
            transition: opacity 0.5s ease-out;
        }

        .product-details-container.show {
            opacity: 1;
        }

        .product-image-container {
            position: relative;
            width: 100%;
            padding-top: 100%; /* Ratio 1:1 */
            background-color: #2E8B57;
        }


        .product-image-container img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-item {
            position: relative;
            width: 100%;
            padding-top: 100%; /* Ratio 1:1 */
            background-color: #2E8B57;
        }
        .carousel-item img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .carousel-control-prev,
        .carousel-control-next {
            display: none;
        }

        .carousel:hover .carousel-control-prev,
        .carousel:hover .carousel-control-next {
            display: flex;
        }

        .carousel-control-prev.disabled,
        .carousel-control-next.disabled {
            display: none;
        }

        .content-button-post {
            position: fixed; /* Make the button fixed on the screen */
            display: flex;
            flex-direction: row;
            width: 100%;
            padding: 45px 16px 10px 16px;
            /* margin-top: 40px; */
            max-width: 480px;
            z-index: 10;
            align-items: center;
            justify-content: space-between;
            background: linear-gradient(0deg, rgba(0, 17, 51, 0) 0%, #001133 288.17%);
        }

        .back-button-post {
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 43px;
            color: white;
            border: none;
        }

        .cart-button-post {
            z-index: 10;
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 45px;
            height: 43px;
            color: white;
            border: none;
        }


        .back-button-post img {
            width: 22px;  /* Reduced icon size */
            height: 16px; /* Reduced icon size */
        }

        .cart-button-post img {
            width: 24px;  /* Reduced icon size */
            height: 25px; /* Reduced icon size */
        }

        /* .bookmark-button-post {
            top: 16px;
            right: 16px;
        } */

        .product-details {
            padding: 16px 16px 0 16px;
            width: 100%;
            max-width: 480px;
        }

        .product-details-2 {
            padding: 16px;
            width: 100%;
            max-width: 480px;
        }

        .product-name {
            font-size: 1.5rem;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .product-price {
            color: #10ABCF;
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 8px;
            line-height: 1.5rem;
        }

        .product-price-discount {
            text-decoration: line-through;
            color: #888;
            margin-left: 8px;
            font-size: 1rem;
            line-height: 1.5rem;
            margin-bottom: 3px;
        }

        .product-price-container {
            display: flex;
            align-items: flex-end;
            gap: 8px; /* Aligned prices with gap */
        }

        .bookmark-icon {
            width: 20px; /* Sesuaikan ukuran ikon */
            height: 20px;
            cursor: pointer; /* Supaya terlihat bisa diklik */
            transition: transform 0.3s ease, fill 0.3s ease; /* Smooth transitions */
            fill: #000; /* Default color, black */
        }

        .bookmark-icon.active {
            fill: #10ABCF; /* Fill color changes to blue when active */
            transform: scale(1.2); /* Bounce effect */
        }

        .bookmark-icon.active:hover {
            transform: scale(1.3); /* Extra bounce on hover */
        }

        .bookmark-icon:hover {
            transform: scale(1.1); /* Slight hover effect */
        }

        /* Sparkles effect */
        .sparkles {
            position: absolute;
            width: 100px;
            height: 100px;
            pointer-events: none;
            opacity: 0;
            top: -50px; /* Adjust based on bookmark position */
            left: -50px; /* Adjust based on bookmark position */
            background: radial-gradient(circle, rgba(255,255,255,1) 0%, rgba(0,212,255,0) 100%);
            animation: sparkle-animation 1s ease-out;
        }

        .show-sparkles {
            opacity: 1;
        }

        @keyframes sparkle-animation {
            0% {
                transform: scale(0.1);
                opacity: 1;
            }
            100% {
                transform: scale(1.5);
                opacity: 0;
            }
        }

        .tab-container {
            display: flex;
            margin-top: 16px;
        }

        .tab-container button {
            flex: 1;
            text-align: center;
            padding: 5px 10px;
            background-color: #e0f7fa;
            border-radius: 5px;
            text-decoration: none;
            color: #10ABCF;
            font-weight: 400;
            width: 100%;
        }

        .button-spesifikasi-rincian {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
        }

        .button-spesifikasi-rincian p {
            margin: 0;
        }


        /* Overlay untuk menggelapkan halaman belakang */
        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Warna hitam semi-transparan */
            z-index: 1000; /* Di bawah pop-up */
            display: none; /* Awalnya disembunyikan */
        }

        /*Pop Up*/
        /* CSS untuk Pop-up */
        .btn-spesifikasi {
            padding: 10px 20px;
            font-size: 16px;
            background-color: white;
            color: black;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 20px;
            text-align: center;
        }

        .popup {
            position: fixed;
            bottom: -100%;
            width: 100%;
            max-width: 480px;
            background-color: #fff;
            border-radius: 16px 16px 0 0;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            transition: bottom 0.3s ease-in-out;
            justify-content: center;
            z-index: 1100; /* Menempatkan pop-up di atas action-buttons */
            border: 2px solid transparent; /* Ini untuk efek warna biru di tepian pop-up */
        }

        .popup.show {
            bottom: 0;
            animation: bounceIn 0.6s ease-in-out forwards, blueGlow 0.6s ease-in-out forwards;
        }

        .popup.hide {
            animation: blueFadeOut 0.6s ease-in-out forwards;
        }

        .spec-row {
            display: flex;
            justify-content: space-between;
            padding: 10px 0;
            border-bottom: 1px solid #ddd;
        }

        .btn-ok {
            display: block;
            width: 100%;
            padding: 10px 0;
            margin-top: 20px;
            background-color: #10ABCF;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
        }

        /* Animasi Mantul-Mantul */
        @keyframes bounceIn {
            0% {
                transform: translateY(100%);
            }
            60% {
                transform: translateY(-15%);
            }
            80% {
                transform: translateY(10%);
            }
            100% {
                transform: translateY(0);
            }
        }

        /* Efek Warna Biru Saat Naik */
        @keyframes blueGlow {
            0% {
                box-shadow: 0 0 0 rgba(0, 191, 255, 0);
                border-color: rgba(0, 191, 255, 0);
            }
            50% {
                box-shadow: 0 0 20px rgba(0, 191, 255, 0.8);
                border-color: rgba(0, 191, 255, 0.8);
            }
            100% {
                box-shadow: 0 0 0 rgba(0, 191, 255, 0);
                border-color: rgba(0, 191, 255, 0);
            }
        }

        /* Efek Biru Saat Pop-up Menutup */
        @keyframes blueFadeOut {
            0% {
                border-color: rgba(0, 191, 255, 0.8);
                box-shadow: 0 0 20px rgba(0, 191, 255, 0.8);
                transform: translateY(0);
            }
            100% {
                border-color: rgba(0, 191, 255, 0);
                box-shadow: 0 0 0 rgba(0, 191, 255, 0);
                transform: translateY(100%);
            }
        }

        /*Pop Up*/

        .hidden {
            display: none;
        }


        .product-description {
            margin-top: 16px;
            margin-bottom: 10px;
        }

        .more-description {
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000000;
            cursor: pointer;
            margin-top: 8px;
            font-size: 0.875rem;
            border-top: 1px solid #ccc; /* Light gray line */
            height: 30px;
            padding-top: 15px;
        }

        .more-description-text {
            margin-right: 4px;
        }

        .more-description-arrow {
            font-size: 1rem;
            transition: transform 0.3s ease; /* Smooth transition for rotating */
        }

        .rotate-up {
            transform: rotate(180deg); /* Rotate the chevron up */
        }

        .more-description span {
            margin-left: 4px;
        }


        .action-buttons {
            position: fixed;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 100%;
            max-width: 480px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 16px;
            background-color: #ffffff;
            border-top: 1px solid rgba(242, 242, 242, 1);
            box-shadow: 0px -4px 10px 0px rgba(215, 215, 215, 0.25);
            z-index: 1000;
            height: 115px;
            padding-bottom: 40px;
        }

        .action-buttons img {
            height: 36px;
            cursor: pointer;
        }

        .order-now-button {
            flex: 1;
            background-color: #10ABCF;
            color: white;
            font-weight: bold;
            padding: 12px;
            border-radius: 12px;
            text-align: center;
            cursor: pointer;
            margin-left: 16px;
        }

        .order-now-button:hover {
            background-color: #8ED5E7;
        }

        .order-now-button:after {
            content: "";
            display: block;
            position: absolute;
            border-radius: 2em;
            left: 0;
            top:0;
            width: 70.5%;
            height: 52%;
            opacity: 0;
            transition: all 1s;
            box-shadow: 0 0 10px 40px #8ED5E7;
            margin-left: 125px;
            margin-top: 20px;
        }

        .order-now-button:active:after {
            box-shadow: 0 0 0 0 #8ED5E7;
            position: absolute;
            border-radius: 4em;
            left: 0;
            top:0;
            opacity: 1;
            transition: 0s;
        }

        .order-now-button:active {
            top: 1px;
        }

        .chat-button {
            margin-right: 16px;
        }

        /*Pop Up Cart*/
        .cart-popup {
            position: fixed;
            bottom: -100%;
            width: 100%;
            max-width: 480px;
            background-color: #fff;
            border-radius: 16px 16px 0 0;
            box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            box-sizing: border-box;
            transition: bottom 0.3s ease-in-out;
            z-index: 1100;
            text-align: center;
        }

        /* Animations for Cart Pop-up - same as 'Spesifikasi' pop-up */
        .cart-popup.show {
            bottom: 0;
            animation: bounceIn 0.6s ease-in-out forwards, blueGlow 0.6s ease-in-out forwards;
        }

        .cart-popup.hide {
            animation: blueFadeOut 0.6s ease-in-out forwards;
        }

        /* Enlarged Close Button */
        .close-button {
            position: absolute;
            top: 10px;
            right: 10px;
            font-size: 28px;  /* Enlarged */
            font-weight: bold;
            cursor: pointer;
        }

        /* Popup title */
        .popup-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 40px;
        }

        /* Popup content */
        .popup-content {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        /* Align 'Spesifikasi :' text and Spec Options to the left */
        .popup-content p {
            text-align: left;
            margin-bottom: 2px;
        }

        /* Enlarged Product Image */
        .product-image-pop-up {
            width: 150px;  /* Enlarged */
            height: 150px;
            margin-right: 20px;
            margin-top: -10px;
        }

        /* Product Details */
        .product-details {
            text-align: left;
            flex-grow: 1;
        }

        .product-name {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .product-price {
            font-size: 20px;
            color: #00AEEF;
            margin-bottom: 5px;
        }

        .old-price {
            text-decoration: line-through;
            color: #999;
            font-size: 16px;
        }

        .stock-info {
            font-size: 14px;
            color: #999;
        }

        /* Spec Options */
        .spec-options {
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 40px;
            padding-top: 10px;
            position: relative;
            overflow: hidden;
        }

        /* Spec Button Styling */
        .spec-button {
            background-color: #f1f1f1;
            padding: 10px 20px;
            border-radius: 20px;
            cursor: pointer;
            width: calc(33.33% - 10px);
            text-align: center;
            box-sizing: border-box;
            position: relative;
            z-index: 1;
            transition: color 200ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        /* Active Spec Button */
        .spec-button.active {
            background-color: #10ABCF;
            color: white;
        }

        .spec-options .bar-outer {
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            pointer-events: none;
            z-index: 0;
            clip-path: polygon(0 0, 0% 100%, 0 100%, 0% 0%);
            background-color: #10ABCF;
            transition: clip-path 0.3s ease-in-out;
        }

        .spec-button.active ~ .bar-outer {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }

        /* Modify the bar-outer for the specific position */
        .spec-button.active:nth-child(1) ~ .bar-outer {
            clip-path: polygon(0 0, 100% 0, 100% 100%, 0 100%);
        }
        .spec-button.active:nth-child(2) ~ .bar-outer {
            clip-path: polygon(33.33% 0, 66.66% 0, 66.66% 100%, 33.33% 100%);
        }
        .spec-button.active:nth-child(3) ~ .bar-outer {
            clip-path: polygon(66.66% 0, 100% 0, 100% 100%, 66.66% 100%);
        }


        /* Add to Cart Button */
        .btn-add-to-cart {
            width: 100%;
            padding: 15px 0;
            background-color: #10ABCF;
            color: white;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            margin-bottom: 30px;
        }

        .btn-add-to-cart:hover {
            background-color: #8ED5E7;
        }

        /* Use the same bounceIn, blueGlow, and blueFadeOut keyframes from the existing CSS */


        .review-section {
            margin-top: 6px;
        }

        .review-header {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            align-items: left;
        }

        .review-header-post {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            align-items: left;
        }

        .review-header h3 {
            font-size: 1.25rem;
            margin: 0;
        }

        .rating-summary {
            padding: 0px;
            border-bottom: 1px solid #ccc;
        }

        .rating-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 5px;
        }

        .customer-reviews-title {
            font-size: 1rem;
            font-weight: 500;
            color: black;
        }

        .review-link {
            color: #10ABCF;
            text-decoration: none;
            font-size: 0.875rem;
        }

        .rating-summary-content {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .rating-stars {
            font-size: 1.5rem; /* Increase the size of the star */
            color: #FFD700; /* Gold color for the star */
            margin-right: 8px;
        }

        .rating-details {
            display: flex;
            align-items: baseline;
        }

        .rating-value {
            font-size: 1.5rem; /* Make the rating number smaller */
            font-weight: 400; /* Make the rating number thinner */
            color: black;
            margin-right: 4px;
        }

        .rating-text {
            font-size: 0.875rem;
            color: #888;
        }

        .filter-capsules {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
            gap: 8px;
            padding: 8px 0;
            scrollbar-width: none; /* Firefox */
        }

        .filter-capsules::-webkit-scrollbar {
            display: none; /* Chrome, Safari */
        }

        .filter-capsule {
            background-color: #f0f0f0;
            border-radius: 12px;
            padding: 4px 8px;
            font-size: 0.875rem;
            cursor: pointer;
            display: inline-block;
        }


        .review-link {
            color: #10ABCF;
            text-decoration: none;
        }

        .review-photo {
            display: flex;
            gap: 8px;
        }

        .review-photo img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
        }

        .review-item-content {
            display: flex;
            flex-direction: column;
            gap: 8px;
            margin-top: 8px;
            margin-left: 53px
        }

        .review-item-content .review-photo {
            justify-content: start; /* Align photos to the start */
        }

        .review-item {
            padding: 10px 16px;
        }

        .review-item-header {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .review-item-mid{
            display: flex;
            align-items: flex-start;
            flex-direction: column;
        }

        .review-profile-photo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .review-content-post {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
        }

        .reviewer-name-post {
            font-size: 1rem;
            font-weight: 450;
        }

        .review-date-post {
            font-size: 0.75rem;
            color: #888;
        }

        .review-rating {
            display: flex;
            align-items: center;
            font-size: 1rem;
            margin-bottom: 8px;
        }

        .review-rating span {
            color: #FFD700; /* Gold color for stars */
            margin-right: 4px;
        }


        .review-info {
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        /* .review-capsules {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .review-capsule {
            background-color: #f0f0f0;
            border-radius: 12px;
            padding: 4px 8px;
            font-size: 11px;
            font-weight: 400;
        } */

        .review-photo {
            display: flex;
            gap: 8px; /* Jarak antar foto */
        }

        .review-photo img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
        }

        .review-text {
            margin: 0;
            font-size: 0.875rem;
            color: #333;
        }

        .see-all-reviews {
            text-align: center;
            height: 30px;
            color: #007BFF;
            cursor: pointer;
            padding-top: 15px;
        }

        /*Profile Section*/
        .profile-card {
            display: flex;
            flex-direction: column;
            padding: 16px;
            /* padding-right: 30px; */
            background-color: #fff;
            width: 100%;
        }

        .profile-header {
            display: flex;
            align-items: center;
            margin-bottom: 5px;
        }

        .container-profile-picture {
            display: flex;
            flex-direction: column;
            align-items: center; /* Center-aligns the badge with the profile picture */
        }

        .profile-picture {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
        }

        .profile-picture img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .verified-badge {
            margin-top: -15px; /* Adjust to move the badge closer to the profile picture */
            width: 50px; /* Adjust the size of the badge */
            height: 15px;
        }

        .profile-info {
            margin-left: 15px;
        }

        .profile-name {
            font-size: 16px;
            font-weight: 500;
            margin: 0;
        }

        .last-online,
        .profile-location {
            font-size: 12px;
            color: #888;
            margin: 2px 0;
        }

        .profile-location {
            display: flex;
            align-items: center;
            font-size: 12px;
            color: #888;
        }

        .location-icon {
            width: 12px;
            height: 12px;
            margin-right: 5px; /* Space between the icon and the text */
        }


        .profile-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 10px;
            /* padding-top: 10px; */
        }

        .profile-footer-column {
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .profile-rating {
            display: flex;
            align-items: center;
        }

        .rating-star {
            color: gold;
            font-size: 16px;
            margin-right: 5px;
        }

        .rating-number {
            font-size: 14px;
        }

        .order-processing {
            font-size: 12px;
            color: #555;
        }

        .follow-button {
            background-color: #10ABCF;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 10px 30px;
            cursor: pointer;
            width: 100%;
        }

        .follow-button:hover {
            background-color: #8ED5E7;
        }

        .content-carousel {
            width: 100%;
            height: auto;
            padding: 10px 16px;
            gap: 10px;
        }

        .content-carousel-post {
            width: 100%;
            height: auto;
            padding: 10px 16px;
            margin-bottom: 110px;
            gap: 10px;
        }

        /*Produk Section*/
        .product-container-post {
            display: flex;
            width: fit-content;
            gap: 15px;
            flex-wrap: nowrap;
            white-space: nowrap;
            padding: 10px;
        }

        .product-box {
            width: 150px;
            height: auto;
            flex-shrink: 0;
            position: relative;
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .product-image {
            width: 100%;
            height: 120px; /* Ukuran persegi */
            object-fit: cover;
        }

        .truncate-2-lines {
            display: -webkit-box;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 2;
            overflow: hidden;
            text-overflow: ellipsis;
            line-height: 1.2em;
            max-height: 2.4em; /* 1.2em line-height * 2 lines */
            white-space: normal; /* Ensure multiline truncation */
        }

        .horizontal-scroll {
            width: 100%;
            overflow-x: scroll;
            scrollbar-color: transparent transparent;
        }

        .horizontal-scroll::-webkit-scrollbar {
            display: none;
        }

        .product-box:hover {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            text-decoration: none;
        }

        /* .hover\:glow-blue:hover {
            box-shadow: 0px 0px 20px 5px #8ED5E7;
        } */

        .separator {
            width: 100%; /* Full width */
            min-height: 10px; /* Minimum height to make sure it shows */
            background-color: #f5f5f5; /* Light gray color */
        }

        /*----------------------------------------------------------------------------*/
        /*--------------------------------ULASAN.BLADE.PHP------------------------------*/
        /*----------------------------------------------------------------------------*/
        {{-- html, body {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden;
        }

        body {
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        } --}}

        .mobile-container {
            max-width: 480px;
            width: 100%;
            background-color: #fff;
            overflow: auto; /* Enable scrolling */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            display: flex;
            flex-direction: column;
            height: 100vh; /* Ensure it takes full height of viewport */
            scrollbar-width: none; /* Firefox */
        }

        .mobile-container::-webkit-scrollbar {
            display: none; /* Chrome, Safari */
        }

        .review-header {
            display: flex;
            align-items: center;
            border-bottom: 1px solid #ccc;
            padding: 16px;
            position: sticky;
            top: 0;
            background: #fff;
            z-index: 1;
        }

        .review-header h3 {
            margin: 0;
            font-size: 1rem;
            flex-grow: 1;
            text-align: left;
            margin-left: 10px; /* Reduced margin to keep space minimal */
        }

        .back-button {
            font-size: 1.25rem;
            cursor: pointer;
            color: #007BFF;
        }

        .rating-summary {
            padding: 16px;
            border-bottom: 1px solid #ccc;
        }

        .rating-summary-content {
            display: flex;
            align-items: center;
        }

        .rating-summary .rating-value {
            font-size: 1.5rem;
            font-weight: bold;
            color: black;
            margin-right: 4px;
        }

        .rating-summary .rating-text {
            font-size: 0.875rem;
            color: #888;
        }

        .rating-stars {
            color: #FFD700; /* Gold color for the star */
            margin-right: 8px;
        }

        .filter-capsules {
            display: flex;
            overflow-x: auto;
            white-space: nowrap;
            gap: 8px;
            padding: 8px 0;
            scrollbar-width: none; /* Firefox */
        }

        .filter-capsules::-webkit-scrollbar {
            display: none; /* Chrome, Safari */
        }

        .filter-capsule {
            background-color: #e0e0e0;
            border-radius: 12px;
            padding: 4px 8px;
            font-size: 0.875rem;
            cursor: pointer;
            display: inline-block;
        }

        .review-item {
            padding: 16px;
        }

        .review-item-header {
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .review-profile-photo {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        .review-content {
            flex-grow: 1;
        }

        .reviewer-name {
            font-size: 1rem;
            font-weight: bold;
        }

        .review-date {
            font-size: 0.875rem;
            color: #888;
        }

        .review-rating {
            display: flex;
            align-items: center;
            font-size: 1rem;
        }

        .review-rating span {
            color: #FFD700; /* Gold color for stars */
            margin-right: 4px;
        }

        .review-capsules {
            display: flex;
            gap: 8px;
        }

        .review-capsule {
            background-color: rgba(246, 246, 246, 1);
            border-radius: 12px;
            padding: 8px 15px;
            font-size: 13px;
            font-weight: 400;
        }

        .review-photo {
            display: flex;
            gap: 8px;
            margin-top: 8px;
        }

        .review-photo img {
            width: 80px;
            height: 80px;
            object-fit: cover;
            border-radius: 4px;
        }

        .see-all-reviews {
            text-align: center;
            color: #007BFF;
            cursor: pointer;
            padding: 16px;
        }
    </style>
@endpush
