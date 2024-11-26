@push('style')
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
            /* Align items at the top */
            min-height: 100vh;
            overflow-x: hidden;
            /* Prevent horizontal scroll */
        }


        .mobile-container {
            width: 100%;
            max-width: 480px;
            min-height: 140vh;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .inter-text {
            font-family: "Inter", sans-serif;
            font-optical-sizing: auto;
            font-weight: 100px;
            font-style: normal;
        }

        .search-bar {
            display: none;
            /* Hide search bar */
        }

        .profile-background {
            background-image: url(asset/images/profile/image.png);
            background-position: center;
            color: #888;
            height: 184px;
            width: 480px;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0px;
            z-index: 10;
        }

        .profile {
            background-color: #fff;
        }

        .profile-image {
            justify-content: center;
            align-items: center;
            position: sticky;
            top: 100px;
            z-index: 10;
        }

        .profile-image img {
            position: relative;
            top: -35px;
            left: 20px;
            bottom: -30px;
            width: 65px;
            height: 65px;
            border-radius: 50%;
            text-align: center;
            border: 3px solid #fff;
        }

        .profile-icon {
            justify-content: center;
            align-items: center;
            position: sticky;
            top: 100px;
            z-index: 10;
        }

        .profile-icon img {
            position: relative;
            top: 22px;
            left: -24px;
            width: 20px;
            height: 21px;
        }

        .profile-icon-menu {
            justify-content: center;
            align-items: center;
            position: sticky;
            top: 100px;
            z-index: 10;
        }

        .profile-icon-menu img {
            position: relative;
            top: 23px;
            left: 166px;
            width: 15px;
            height: 15px;
        }

        /* Nama */
        .name {
            position: relative;
            top: -10px;
            left: 0px;
            bottom: 0px;
            width: 480px;
            height: 37px;
        }

        .titik-tiga {
            cursor: pointer;
            position: relative;
            top: 18px;
            /* background-color: #000000; */
            margin-left: 440px;
            margin-right: 10px;
        }

        .check-icon-titiktiga {
            cursor: pointer;
            position: relative;
            top: -8px;
            left: 1px;
            width: 20px;
            height: 17px;
        }

        #titiktiga-link {}

        .profile-name {
            font-family: inter;
            background-color: #fff;
            position: fixed;
            height: 80px;
            width: 480px;
            top: 114px;
            text-align: center;
            padding-bottom: 10px;
        }

        .profile-name h3 {
            position: relative;
            top: 0px;
            left: 8px;
            padding-top: 15px;
            padding-bottom: 15px;
            font-size: 14px;
            color: #000;
        }

        .profile-name p {
            position: relative;
            top: -57px;
            left: 14px;
            font-size: 13px;
            color: #888;
        }

        .profile-aboutme {
            /*padding: 10px;*/
            background-color: transparent;
            /*height: 100px;*/
        }

        .profile-aboutme p {
            font-family: inter;
            margin: 5px 0;
            font-size: 12px;
            color: #434343;
        }

        .profile-aboutme p.pengalaman {
            font-family: inter;
            font-size: 12px;
            font-weight: bold;
            padding-top: 15px;
            padding-bottom: 5px;
            color: #000000;
        }

        .profile-aboutme p#bio {
            font-family: inter;
            padding-bottom: 8px;
            font-size: 12px;
            font-weight: bold;
            color: #000;
        }

        .profile-aboutme a {
            position: relative;
            top: 0px;
            /* padding-top: 15px; */
            font-size: 12px;
            color: #5D95EA;
            text-decoration: none;
        }

        .profile-aboutme-box {
            padding: 10px;
            background-color: #f8f8ff;
            border-radius: 5px;
            box-shadow: 0 2 10px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        .profile-aboutme-box p {
            margin: 5px 0;
        }

        .profile-aboutme-box a {
            color: #007bff;
            text-decoration: #007bff;
        }

        .profile-name .profile-info {
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: flex-start;
            margin-left: 10px;
        }

        /* .profile-name p {
                                                                                                                                                                                margin-bottom: 5px;
                                                                                                                                                                                margin-top: -33px;
                                                                                                                                                                            } */

        /* BAGIAN ICON */
        .icon {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            position: relative;
            top: -20px;
            padding: 15px;
            /* padding-top: 0px; */
            padding-bottom: 15px;
        }

        .icon p.pengikut {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #979797;
            position: relative;
            left: -23px;
            top: -3px;
            font-size: 13px;
            padding: 10px;
            padding-right: 25px;
            border-right: 1px #ddd;
            border-right-width: 1px;
            border-right-style: initial;
            border-right-color: #888;
        }

        .icon p.portofolio {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #979797;
            font-size: 13px;
            position: relative;
            left: 1px;
            top: -3px;
            /* padding: 10px; */
            padding-right: 18px;
            border-right: 1px #ddd;
            border-right-width: 1px;
            border-right-style: initial;
            border-right-color: rgb(221, 221, 221);
        }

        .icon p.review {
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: #979797;
            font-size: 13px;
            position: relative;
            left: 21px;
            top: -3px;
            padding: 10px;
            padding-right: 18px;
            border-right: 1px #ddd;
            border-right-width: 1px;
            border-right-style: initial;
            border-right-color: rgb(221, 221, 221);
        }

        .icon p.jumlah-pengikut {
            font-family: inter;
            font-size: 14px;
            font-weight: bold;
            position: relative;
            top: -25px;
            left: 20px;
            width: 10px;
            height: 10px;
        }

        .icon p.jumlah-like {
            font-family: inter;
            font-size: 14px;
            font-weight: bold;
            position: relative;
            top: -25px;
            left: 55px;
            width: 10px;
            height: 10px;
        }

        .icon p.jumlah-rate {
            font-family: inter;
            font-size: 14px;
            font-weight: bold;
            position: relative;
            top: -25px;
            left: 60px;
            width: 10px;
            height: 10px;
        }

        .check-icon {
            position: relative;
            top: -28px;
            left: -60px;
            width: 12px;
            height: 12px;
        }

        .follower-icon {
            position: relative;
            top: -22px;
            left: 18px;
            width: 14px;
            height: 14px;
        }

        .like-icon {
            position: relative;
            top: -22px;
            left: 50px;
            width: 14px;
            height: 14px;
        }

        .star-icon {
            position: relative;
            top: -23px;
            left: 55px;
            width: 14px;
            height: 14px;
        }

        .link-icon {
            /* padding-top: 10px; */
            position: relative;
            top: 0px;
            left: 0px;
            width: 10px;
            height: 10px;
        }

        /* Animasi Loading */
        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        /* Tambahkan CSS untuk animasi loading */
        .loading {
            display: inline-block;
            width: 15px;
            height: 15px;
            border: 2px solid #fff;
            border-top: 2px solid #15B6DB;
            border-radius: 50%;
            animation: spin s linear infinite;
            /* Percepat animasi loading */
            margin-right: 5px;
            position: absolute;
            top: 15px;
            left: 115px;
            transform: translate(-50%, -50%);
        }

        #ikutiButton {
            transition: background-color 0.01s;
            position: relative;
            background-color: #15B6DB;
            color: #fff;
        }

        #ikutiButton.loading {
            background-color: #fff;
            color: #15B6DB;
        }

        #ikutiButton.ikuti {
            background-color: #fff;
            border: 1px solid #dbdbdb4f;
            color: #000000;
        }

        .follchat-buttons {
            position: relative;
            top: -40px;
            left: -14px;
            display: flex;
            justify-content: space-between;
            padding: 0 20px;
            margin-bottom: 5px;
        }

        .follchat-buttons button {
            font-family: inter;
            left: 10px;
            padding: 5px;
            background-color: #15B6DB;
            color: #f4f4f4;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1;
            margin: 0 -7px;
        }

        .follchat-buttons button.chat-nav {
            position: relative;
            left: 30px;
            font-family: inter;
            padding: 8px 90px;
            background-color: #f4f4f4;
            color: #000000;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            flex: 1;
            margin: 0px 5px;
        }

        /* BUTTON PENGALAMAN */
        .rounded-border button.button-pengalaman {
            font-family: inter;
            padding: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 0 -2px;
            width: 465px;
        }

        .rounded-border p.infolain {
            font-family: inter;
            font-size: 12px;
            padding-right: 328px;
        }

        /* Navbar */
        .navbar {
            display: flex;
            justify-content: space-around;
            color: #f4f4f4;
            z-index: 5;
            position: sticky;
            top: 195px;
            border-bottom: 1px solid #ddd;
            background-color: #fff;
            margin-top: -26px;
        }

        .nav-item {
            font-family: inter;
            font-size: 12px;
            padding: 10px 0;
            border: none;
            background: none;
            cursor: pointer;
            flex-grow: 1;
            text-align: center;
        }

        .nav-item.active {
            display: flex;
            justify-content: space-around;
            /*position: relative;*/
            z-index: 10;
            position: sticky;
            top: 0;
            color: #15B6DB;
        }

        /* MENGATUR NAV-UNDERLINE */
        .nav-underline {
            position: absolute;
            bottom: 0;
            width: 100px;
            height: 2px;
            background-color: #15B6DB;
            transform: translateX(25%);
            transition: left 0.3s;
        }

        #portofolio-nav.active~.nav-underline {
            width: 120px;
            left: -10px;
        }

        #produkJasa-nav.active~.nav-underline {
            width: 120px;
            left: 153px;
        }

        #sertifikat-nav.active~.nav-underline {
            width: 120px;
            left: 317px;
        }

        .head-image {
            padding: 10px;
            flex-grow: 1;
            overflow: auto;
        }

        .body-image {
            display: grid;
            gap: 10px;
            grid-template-columns: repeat(3, 2fr);
            overflow-y: auto;
            max-height: 200px;
        }

        .body-image img {
            width: 100%;
            border-radius: 5px;
        }

        /* SERTIFIKAT */
        .sertifikat-container {
            gap: 10px;
            padding: 10px;
            max-width: 100%;
            height: 270px;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .sertifikat-item {
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 5px;
            margin-bottom: 10px;
            border: 1px solid #ddd;
            border-radius: 10px;
        }

        .google-container {
            align-content: center;
        }

        .sertifikat-item img.google {
            position: relative;
            top: 0px;
            width: 35px;
            height: 35px;
            border-radius: 17px;
            margin-right: 20px;
        }

        .sertifikat-item img.dicoding {
            position: relative;
            top: 0px;
            width: 35px;
            height: 35px;
            border-radius: 17px;
            margin-right: 20px;
        }

        .sertifikat-item img.apple {
            position: relative;
            top: 0px;
            width: 40px;
            height: 40px;
            border-radius: 17px;
            margin-right: 15px;
        }

        .sertifikat-item p.google1 {
            position: relative;
            top: 15px;
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .sertifikat-item p.google2 {
            position: relative;
            top: 15px;
            margin: 5px 0;
            font-size: 14px;
            color: #888;
        }

        .sertifikat-item p.google3 {
            position: relative;
            top: -20px;
            left: 315px;
            margin: 5px 0;
            font-size: 13px;
            color: #888;
        }

        .sertifikat-item p.dicoding1 {
            position: relative;
            top: 15px;
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .sertifikat-item p.dicoding2 {
            position: relative;
            top: 15px;
            margin: 5px 0;
            font-size: 14px;
            color: #888;
        }

        .sertifikat-item p.dicoding3 {
            position: relative;
            top: -20px;
            left: 315px;
            margin: 5px 0;
            font-size: 13px;
            color: #888;
        }

        .sertifikat-item p.apple1 {
            position: relative;
            top: 15px;
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .sertifikat-item p.apple2 {
            position: relative;
            top: 15px;
            margin: 5px 0;
            font-size: 14px;
            color: #888;
        }

        .sertifikat-item p.apple3 {
            position: relative;
            top: -20px;
            left: 315px;
            margin: 5px 0;
            font-size: 13px;
            color: #888;
        }

        /* BOTTOM NAV */
        .bottom-nav {
            display: flex;
            justify-content: space-around;
            padding: 10px 0;
            background-color: #fff;
            border-top: 1px solid #ddd;
            position: fixed;
            bottom: 0;
            width: 100%;
            max-width: 480px;
            z-index: 1000;
        }

        .nav-button {
            border: none;
            background: none;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
            position: relative;
        }

        .nav-button svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
        }

        .nav-button span {
            font-size: 12px;
            color: #333;
        }

        .nav-button .upperline {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 3px;
            background-color: transparent;
            transition: background-color 0.3s;
        }

        .nav-button.active .upperline {
            background-color: #007bff;
        }

        img.img-beranda {
            width: 26px;
            height: 26px;
            margin-bottom: 5px;
        }

        img.img-pesan {
            position: relative;
            top: -5px;
            width: 26px;
            height: 26px;
            margin-bottom: 5px;
            right: 0px;
        }

        img.img-pekerjaan {
            width: 26px;
            height: 26px;
            margin-bottom: 5px;
        }

        img.img-setting {
            width: 26px;
            height: 26px;
            margin-bottom: 5px;
        }

        .rounded-border {
            position: relative;
            top: -50px;
            padding-right: 10px;
            padding-left: 10px;
            background-color: #fff;
        }

        /* PORTOFOLIO */
        .portofolio-image {
            display: flex;
            flex-wrap: wrap;
            width: 100%;
            /* Allow images to wrap onto new lines */
            gap: 15px;
            /* Add space between images */
            justify-content: space-between;
        }

        /* Image Styling */
        .portofolio-image img {
            width: calc(33.33% - 10px);
            /* Make each image take up a third of the width with some space between */
            height: auto;
            aspect-ratio: 1 / 1;
            /* Maintain 1:1 aspect ratio */
            object-fit: cover;
            /* Ensure the image covers the space without stretching */
        }

        /* Responsive behavior */
        @media (max-width: 768px) {
            .portofolio-image img {
                width: calc(50% - 10px);
                /* Show 2 images per row on smaller screens */
            }
        }

        @media (max-width: 480px) {
            .portofolio-image img {
                width: 100%;
                /* Show 1 image per row on very small screens */
            }
        }

        .produkJasa-content {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            padding: 10px;
        }

        .produkJasa-page {
            height: 90vh;
            overflow-x: auto;
            scrollbar-width: none;
        }

        .produkJasa-page .produkJasa-content {
            /*display: grid;*/
            grid-template-columns: repeat(2, 1fr);
            /*overflow-x: auto;
                                                                                                                                                                                    scrollbar-width: none;*/
        }

        /* Produk & Jasa Rekomendasi */
        .produkJasa-terlaris {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            min-width: 150px;
        }

        .produkJasa-terlaris img.produkTerlaris {
            width: 160px;
            height: 180px;
            align-content: start;
        }

        .produkJasa-terlaris p.jasaProdukAnimasi {
            color: #666666;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .produkJasa-terlaris p.hargaProdukAnimasi {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: -15px;
            text-align: left;
            position: relative;
            left: -35px;
        }

        .produkJasa-terlaris p.jasaMobileApp {
            color: #666666;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .produkJasa-terlaris p.hargaMobileApp {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: -15px;
            text-align: left;
            position: relative;
            left: -35px;
        }

        .produkJasa-terlaris p.jasaSistemEComerce {
            color: #666666;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .produkJasa-terlaris p.hargaSistemEComerce {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: -15px;
            text-align: left;
            position: relative;
            left: -35px;
        }

        .produkJasa-terlaris p.starsTerlaris {
            margin-top: 13px;
            font-size: 11px;
            text-align: left;
            color: #8b8b8b;
            position: relative;
            left: -42px;
        }

        .produkJasa-content-header-terlaris {
            padding: 10px;
            margin-bottom: -25px;
        }

        .produkJasa-content-body-terlaris {
            display: flex;
            flex-wrap: nowrap;
            overflow-x: auto;
            scrollbar-width: none;
            /* padding: 10px; */
        }

        .produkJasa-content-header-terlaris p.terlaris {
            font-family: inter;
            font-weight: bold;
            position: relative;
            top: -10px;
        }

        /* Produk & Jasa Rekomendasi */
        .produkJasa-rekomendasi {
            align-items: center;
            padding: 10px;
            min-width: 150px;
            display: grid;
            grid-column: span 1;
        }

        .produkJasa-rekomendasi img.produkRekomendasi {
            width: 208px;
            height: 180px;
            align-content: center;
        }

        .produkJasa-rekomendasi p.jasaProdukAnimasi {
            color: #666666;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .produkJasa-rekomendasi p.hargaProdukAnimasi {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: -15px;
            text-align: left;
        }

        .produkJasa-rekomendasi p.jasaMobileApp {
            color: #666666;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .produkJasa-rekomendasi p.hargaMobileApp {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: -15px;
            text-align: left;
        }

        .produkJasa-rekomendasi p.jasaSistemEComerce {
            color: #666666;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .produkJasa-rekomendasi p.hargaSistemEComerce {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: -15px;
            text-align: left;
        }

        .produkJasa-rekomendasi p.jasaSecurityCyber {
            color: #666666;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .produkJasa-rekomendasi p.hargaSecurityCyber {
            font-weight: bold;
            font-size: 15px;
            margin-bottom: -15px;
            text-align: left;
        }

        .produkJasa-rekomendasi p.starsRekomendasi {
            margin-top: 20px;
            font-size: 11px;
            text-align: left;
            color: #8b8b8b;
        }

        .produkJasa-content-header-rekomendasi {
            padding: 10px;
            margin-bottom: -25px;
        }

        .produkJasa-content-body-rekomendasi {
            display: grid;
            overflow-x: auto;
            scrollbar-width: none;
            padding: 10px;
            grid-template-columns: repeat(2, 1fr);
            gap: 10px;
        }

        .produkJasa-content-header-rekomendasi p.rekomendasi {
            font-family: inter;
            font-weight: bold;
        }


        /* POPUP-SERTIFIKAT */
        #sertifikat-google.popup-sertifikat {
            display: none;
            position: fixed;
            top: 583px;
            left: 49.7%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0px -401px 0px rgba(0, 0, 0, 0.2);
            padding: 10px;
            padding-bottom: 85px;
            height: 350px;
            width: 100%;
            max-width: 460px;
            z-index: 10000;
        }

        #sertifikat-dicoding.popup-sertifikat {
            display: none;
            position: fixed;
            top: 583px;
            left: 49.7%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0px -401px 0px rgba(0, 0, 0, 0.2);
            padding: 10px;
            padding-bottom: 85px;
            height: 350px;
            width: 100%;
            max-width: 460px;
            z-index: 10000;
        }

        #sertifikat-apple.popup-sertifikat {
            display: none;
            position: fixed;
            top: 583px;
            left: 49.7%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0px -401px 0px rgba(0, 0, 0, 0.2);
            padding: 10px;
            padding-bottom: 85px;
            height: 350px;
            width: 100%;
            max-width: 460px;
            z-index: 10000;
        }

        .popup-sertifikat .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            color: #aaa;
            transition: color 0.3s;
        }

        .popup-sertifikat .close:hover {
            color: #333;
        }

        .popup-header {
            display: flex;
            align-items: center;
            padding: 10px;
        }

        p.header-deskripsi {
            font-family: Inter;
            font-size: 13px;
            position: relative;
            top: -35px;
        }

        p.related-skill {
            font-family: Inter;
            font-size: 13px;
            position: relative;
            top: 10px;
        }

        p.judul {
            font-family: Inter;
            position: relative;
            top: 25px;
            font-weight: bold;
        }

        p.lembaga {
            font-family: Inter;
            position: relative;
            top: 14px;
            color: #9B9B9B;
        }

        p.tanggal {
            font-family: Inter;
            position: relative;
            font-size: 13px;
            top: -30px;
            left: 325px;
            color: #9B9B9B;
        }

        .popup-header img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .popup-content {
            padding: 10px;
        }

        .popup-content .deskripsi {
            font-size: 14px;
            color: #5c5c5c;
            position: relative;
            top: -40px;
            margin-bottom: 10px;
        }

        .popup-content .skills {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 10px;
            position: relative;
            top: -30px;
        }

        .popup-content .skills span {
            background-color: #f5f5f5;
            padding: 5px 10px;
            border-radius: 5px;
            font-size: 12px;
            color: #191919;
        }

        .popup-content .lihat-sertifikat {
            background-color: #10ABCF;
            color: #ffffff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px;
            position: relative;
            /* left: 152px; */
            width: 440px;
        }

        /* POPUP-PENGALAMAN */
        .popup-pengalaman {
            display: none;
            position: fixed;
            top: 570px;
            left: 49.7%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            box-shadow: 0 -401px 0px rgba(0, 0, 0, 0.3);
            padding: 10px;
            height: 414px;
            width: 100%;
            max-width: 460px;
            z-index: 10000;
        }

        .content-pengalaman {
            height: 10px;
        }

        .social-media {
            display: flex;
            height: 34px;
            justify-content: center;
        }

        .social-media img {
            position: relative;
            /* left: 0px; */
            right: -23px;
            padding-right: 30px;
            /* padding-left: 5px; */
            /* padding-bottom: 20px; */
            /* padding-top: 20px; */
            width: 30px;
            height: 30px;
        }

        .popup-pengalaman p.infoLainnya {
            font-family: inter;
            font-size: 15px;
            text-align: center;
            padding-bottom: 10px;
            border-bottom: 0.1em solid #f4f4f4;
            margin-top: 0;
            color: #424242;
        }

        .popup-pengalaman p.websiteSosialMedia {
            font-size: 15px;
            font-family: inter;
            margin-top: 0;
            color: #424242;
        }

        .popup-pengalaman .close {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
            font-size: 20px;
            color: #aaa;
        }

        .popup-pengalaman .close:hover {
            color: #333;
        }

        .pengalaman-container {
            font-family: inter;
            padding: 10px;
            border: 1px solid #e0e0e0;
            border-radius: 5px;
            margin-bottom: -33px;
            max-width: 100%;
            height: 30px;
            position: relative;
            top: -50px;
        }

        .pengalaman-kerja {
            padding-top: 0px;
        }

        .pengalaman-kerja img.androidDev {
            position: relative;
            top: -2px;
            left: 5px;
            padding-top: 5px;
            width: 35px;
            height: 35px;
        }

        .pengalaman-kerja p.android-developer {
            font-family: inter;
            position: relative;
            left: 43px;
            top: -3px;
            margin: 0;
            font-size: 15px;
        }

        .pengalaman-kerja p.google-academy {
            font-family: inter;
            position: relative;
            left: 43px;
            top: -13px;
            font-size: 13px;
            color: #888;
        }

        .pengalaman-kerja p.purnawaktu {
            font-family: inter;
            position: relative;
            left: 370px;
            top: -60px;
            font-size: 12px;
            color: #888;
        }

        .pengalaman-kerja p.kontrak {
            font-family: inter;
            position: relative;
            left: 395px;
            top: -60px;
            font-size: 12px;
            color: #888;
        }

        .pengalaman-kerja p.freelance-remote {
            font-family: inter;
            position: relative;
            left: 337px;
            top: -60px;
            font-size: 12px;
            color: #888;
        }

        .pengalaman-kerja p.tgl {
            font-family: inter;
            position: relative;
            left: 320px;
            top: -66px;
            font-size: 12px;
            color: #888;
        }

        .number-1 {
            position: relative;
            bottom: 50px;
            left: 40%;
            z-index: 10000;
        }

        img.img-number {
            width: 15px;
            height: 15px;
            position: relative;
            top: 53px;
            left: -2px;
        }
    </style>
@endpush
