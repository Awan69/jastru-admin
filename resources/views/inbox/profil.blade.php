<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXhW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <style>
        body {
            font-family: "Inter", system-ui;
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
            min-height: 100vh;
            height: 100%;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            position: relative;
        }

        .profile-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ddd;
            background-color: #fff;
            position: sticky;
            top: 0;
        }

        .profile-header a {
            font-size: 24px;
            color: #000;
            text-decoration: none;
        }

        .profile-header a:hover {
            color: #007bff;
        }

        .profile-picture {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-top: 20px;
            border: 4px solid #fff;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .text-center {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px;
        }

        .text-center h5 {
            margin-top: 10px;
            margin-bottom: 5px;
            cursor: pointer;
        }

        .text-center p {
            margin-top: 0px;
        }

        .profile-stats {
            display: flex;
            justify-content: space-around;
            text-align: center;
            margin-top: 10px;
            padding: 5px 0;
            position: relative;
        }

        .stat-item {
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 33%;
            position: relative;
        }

        .stat-item i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .stat-item p {
            margin: 0;
        }

        .stat-divider {
            position: absolute;
            top: 10%;
            bottom: 10%;
            width: 1px;
            background-color: #ddd;
        }

        .divider-left {
            left: 33.33%;
        }

        .divider-right {
            left: 66.66%;
        }

        .bio-section {
            margin-top: 5px;
            padding: 5px;
            border-bottom: 1px solid #ddd;
        }

        .bio-section h6 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 600;
        }

        .bio-section p {
            font-size: 16px;
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 5px;
        }

        .skills-section {
            margin-top: 10px;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .skills-section h6 {
            margin-bottom: 10px;
            font-size: 18px;
            font-weight: 600;
        }

        .skills-wrapper {
            padding-top: 5px;
            padding-bottom: 5px;
            margin: 5px;
            display: flex;
            flex-wrap: wrap;
            gap: 5px;
        }

        .skills-badge {
            margin: 5px;
            padding: 8px 12px;
            background-color: #e9ecef;
            border-radius: 12px;
            font-size: 14px;
            color: #495057;
        }

        .btn-profile {
            width: 90%;
            padding: 12px 0;
            border-radius: 10px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            border: none;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: auto;
            margin-bottom: 20px;
            align-self: center;
        }

        .btn-profile:hover {
            background-color: #0056b3;
            color: #fff;
        }

        /* Pop-up styles */
        .popup-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            visibility: hidden;
            opacity: 0;
            transition: visibility 0s, opacity 0.3s ease-in-out;
        }

        .popup {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px 15px 0 0;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }

        .popup h6 {
            margin-bottom: 10px;
            font-size: 18px;
        }

        .popup input {
            width: 90%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .popup button {
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            width: 100%;
        }

        .popup button:hover {
            background-color: #0056b3;
        }

        /* Show pop-up */
        .popup-container.show {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="profile-header">
            <a href="#" class="bi bi-arrow-left-short"></a>
            <div class="right-icon">
                <i class="bi bi-three-dots"></i>
            </div>
        </div>
        <div class="text-center">
            <img src="asset/images/pesan/profil.svg" alt="Profile Picture" class="profile-picture">
            <h5 class="mt-2" id="profile-name">Kepin design</h5>
            <p class="text-muted"><i class="bi bi-check-circle-fill text-primary"></i> Designer grafis</p>
        </div>
        <div class="profile-stats">
            <div class="stat-item">
                <i class="bi bi-people"></i>
                <p class="mb-1">10K</p>
                <p class="text-muted">Pengikut</p>
            </div>
            <div class="stat-divider divider-left"></div>
            <div class="stat-item">
                <i class="bi bi-heart"></i>
                <p class="mb-1">11,5K</p>
                <p class="text-muted">Portfolio disukai</p>
            </div>
            <div class="stat-divider divider-right"></div>
            <div class="stat-item">
                <i class="bi bi-star"></i>
                <p class="mb-1">4.5</p>
                <p class="text-muted">Review</p>
            </div>
        </div>

        <div class="bio-section">
            <h6>Bio:</h6>
            <p>Google developer course adalah pelatihan yang diadakan oleh perusahaan Google untuk menciptakan developer
                terbaik dari seluruh dunia.</p>
        </div>
        <div class="skills-section">
            <h6>Seller skills:</h6>
            <div class="skills-wrapper">
                <span class="skills-badge">Backend</span>
                <span class="skills-badge">Frontend</span>
                <span class="skills-badge">SEO</span>
                <span class="skills-badge">Python</span>
                <span class="skills-badge">Laravel</span>
                <span class="skills-badge">Wordpress</span>
                <span class="skills-badge">API</span>
            </div>
        </div>


        <!-- Tombol di bawah tengah -->
        <button class="btn btn-primary btn-profile">Kunjungi profil</button>

        <!-- Pop-up container -->
        <div class="popup-container" id="popup-container">
            <div class="popup">
                <h6>Edit Nama Profil</h6>
                <input type="text" value="Kepin design" class="form-control" />
                <button id="close-popup">Ganti nama</button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script>
        const profileName = document.getElementById('profile-name');
        const popupContainer = document.getElementById('popup-container');
        const closePopupBtn = document.getElementById('close-popup');

        profileName.addEventListener('click', () => {
            popupContainer.classList.add('show');
        });

        closePopupBtn.addEventListener('click', () => {
            popupContainer.classList.remove('show');
        });
    </script>
</body>

</html>
