<!DOCTYPE html>
<html lang="en">

<head>
    @push('styles')
        <style>
            .footer {
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: 10px 15px;
                border-top: 1px solid #ededed;
                background-color: #ffff;
                width: 100%;
                max-width: 480px;
                position: fixed;
                bottom: 0;
                z-index: 1000;
                height: 70px;
                box-sizing: border-box;
            }

            .footer img {
                width: 22px;
                height: 22px;
                margin-bottom: 3px;
                transition: filter 0.3s;
            }

            .footer a.active svg path,
            .footer a.active svg rect {
                fill: #10ABCF;
            }

            .footer a {
                position: relative;
                text-decoration: none;
                color: #a0a0a0;
                display: flex;
                flex-direction: column;
                align-items: center;
                font-size: 12px;
                width: 20%;
                transition: color 0.3s;
            }

            .footer a::before {
                content: "";
                position: absolute;
                top: -15px;
                left: 18%;
                right: 18%;
                height: 3px;
                background-color: transparent;
                transition: background-color 0.3s, box-shadow 0.3s;
            }

            .footer a.active {
                color: #10ABCF;
            }

            .footer a.active::before {
                background-color: #10ABCF;
                box-shadow: 0px 6px 16px rgb(16, 172, 207);
            }

            /* Special style for the Profile tab */
            .footer-link-profile.active::before {
                top: -13px;
                left: 18%;
                right: 18%;
                height: 2px;
                background-color: #10ABCF;
            }

            .img-profil {
                width: 22px;
                height: 22px;
                border-radius: 50%;
            }

            .footer img.foto-profil-img {
                position: relative;
                width: 45px;
                height: 45px;
                top: -20px;
                border-radius: 50%;
                margin-bottom: -15px;
                border: 1.9px solid #10ABCF;
                object-fit: cover;
                display: block;
            }
        </style>
    @endpush
</head>
