<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
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
            min-height: 100vh;
            overflow-x: hidden;
        }

        .mobile-container {
            width: 100%;
            max-width: 480px;
            height: 100vh;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px 15px;
            border-bottom: 1px solid #eee;
            position: relative;
        }

        .header h5 {
            margin: 0;
            font-size: 18px;
            font-weight: bold;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }

        .user-info {
            display: flex;
            align-items: center;
            padding: 15px;
        }

        .user-info img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin-right: 10px;
        }

        .user-details {
            display: flex;
            flex-direction: column;
        }

        .user-details h6 {
            margin: 0;
            font-size: 16px;
            font-weight: bold;
        }

        .user-details span {
            font-size: 12px;
            color: gray;
        }

        .post-content {
            position: relative;
            overflow: hidden;
        }

        .post-image {
            width: 100%;
            height: auto;
        }

        .post-actions {
            display: flex;
            justify-content: flex-start;
            align-items: center;
            padding: 10px;
            gap: 15px;
        }

        .post-actions i {
            font-size: 24px;
            color: #000;
            cursor: pointer;
        }

        .post-caption {
            padding: 10px;
            border-bottom: none;
        }

        .upload-time {
            padding: 10px;
            font-size: 12px;
            color: gray;
            text-align: left;
        }

        .footer {
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 10px 15px;
            border-top: 1px solid #e0e0e0;
            background-color: #fff;
            width: 100%;
            max-width: 480px;
            position: fixed;
            bottom: 0;
            z-index: 1000;
            box-sizing: border-box;
            height: 60px;
        }

        .footer a {
            text-decoration: none;
            color: #000;
        }

        .footer div {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            cursor: pointer;
            font-size: 12px;
        }

        .footer div i {
            font-size: 24px;
            margin-bottom: 5px;
        }

        .img-profil {
            border-radius: 50%;
        }

        .footer img {
            width: 24px;
            height: 24px;
            margin-bottom: 5px;
        }

        .bi-heart {
            color: #000;
            /* Default color */
        }

        .bi-heart.fill {
            color: #ff0000;
            /* Red color when liked */
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <!-- Header -->
        <div class="header">
            <a href="{{ route('profile') }}" class="arrow-link"><i class="bi bi-arrow-left"></i></a>
            <h5>Posts</h5>
        </div>

        <!-- User Info -->
        <div class="user-info">
            <img src="asset/images/profil/post/avatar.png" alt="User Profile Picture">
            <div class="user-details">
                <h6>Jenlutstore</h6>
                <span>Indonesia</span>
            </div>
            <i class="bi bi-three-dots-vertical ml-auto"></i>
        </div>

        <!-- Post Image -->
        <div class="post-content">
            <img src="asset/images/profil/post/post.png" class="post-image" alt="Post Image">
        </div>

        <!-- Post Actions -->
        <div class="post-actions">
            <i class="bi bi-heart" id="like-btn"></i>
            <i class="bi bi-chat"></i>
            <i class="bi bi-send"></i>
        </div>

        <!-- Post Caption -->
        <div class="post-caption">
            <h6>Jenlutstore</h6>
            <p>Let's move to another projects! 🔥</p>
        </div>

        <!-- Upload Time -->
        <div class="upload-time">
            2 Mei 2024
        </div>

        <!-- Navigasi -->
        <section>
            <div class="footer">
                <a href="{{ route('beranda') }}" class="footer-link">
                    <div>
                        <img src="{{ asset('asset/images/navigasi/beranda.png') }}" alt="Beranda" class="img-beranda">
                        <span>Beranda</span>
                    </div>
                </a>
                <a href="{{ route('pesan') }}" class="footer-link">
                    <div>
                        <img src="{{ asset('asset/images/navigasi/chat_inbox.png') }}" alt="Pesan" class="img-pesan">
                        <span>Pesan</span>
                    </div>
                </a>
                <a href="{{ route('profile') }}" class="footer-link">
                    <div>
                        <img src="{{ asset('asset/images/profile/profile.png') }}" alt="Profile" class="img-profil">
                        <span class="profile">Profile</span>
                    </div>
                </a>
                <div>
                    <img src="{{ asset('asset/images/navigasi/pekerjaan.png') }}" alt="Profile" class="img-pekerjaan">
                    <span>Pekerjaan</span>
                </div>
                <a href="{{ route('setting') }}" class="footer-link">
                    <div>
                        <img src="{{ asset('asset/images/navigasi/setting.png') }}" alt="Setting" class="img-setting">
                        <span>Setting</span>
                    </div>
                </a>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <!-- Bootstrap Icons -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const likeButton = document.getElementById('like-btn');
            const likeKey = 'postLikeStatus';

            // Load like status from localStorage
            const isLiked = localStorage.getItem(likeKey) === 'true';
            updateLikeStatus(isLiked);

            // Add click event listener to the like button
            likeButton.addEventListener('click', function() {
                const isCurrentlyLiked = localStorage.getItem(likeKey) === 'true';
                const newLikeStatus = !isCurrentlyLiked;
                localStorage.setItem(likeKey, newLikeStatus);
                updateLikeStatus(newLikeStatus);
            });

            function updateLikeStatus(isLiked) {
                if (isLiked) {
                    likeButton.classList.add('fill');
                } else {
                    likeButton.classList.remove('fill');
                }
            }
        });
    </script>
</body>

</html>
