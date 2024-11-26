<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Pekerjaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
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
            position: relative;
        }

        .header {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 10px;
            box-shadow: 0 1px 4px rgba(0, 0, 0, 0.1);
            border-bottom: 1px solid #e0e0e0;
            transition: background-color 0.3s ease;
        }

        .header.scrolled {
            background-color: rgba(255, 255, 255, 0.9);
            /* Semi-transparent white */
        }

        .header .back-button {
            font-size: 24px;
            color: #2995f0;
            margin-right: auto;
        }

        .header .three-dots {
            font-size: 24px;
            color: #2995f0;
        }

        .footer {
            position: sticky;
            bottom: 0;
            background-color: #fff;
            z-index: 1000;
            display: flex;
            align-items: center;
            padding: 10px;
            box-shadow: 0 -1px 4px rgba(0, 0, 0, 0.1);
            border-top: 1px solid #e0e0e0;
            justify-content: center;
        }

        .footer .bookmark-btn {
            background-color: #F5F5F5;
            font-size: 16px;
            color: #424242;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            cursor: pointer;
            margin-right: 20px;
        }

        .footer .bookmark-btn.active {
            color: #4aaac7;
        }

        .footer .bookmark-btn:hover {
            background-color: #e0e0e0;
        }

        .footer .apply-btn {
            background-color: #5bbcd7;
            color: white;
            border: none;
            border-radius: 8px;
            padding: 10px 20px;
            font-size: 16px;
            width: 80%;
        }

        .footer .apply-btn:hover {
            background-color: #4aaac7;
        }

        .content {
            flex: 1;
            overflow-y: auto;
            padding: 10px 15px;
        }

        .content::-webkit-scrollbar {
            display: none;
        }

        .job-header {
            display: flex;
            flex-direction: column;
            align-items: center;
            margin: 20px 0;
        }

        .job-header img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .job-title h5 {
            margin: 0;
            font-weight: bold;
        }

        .job-title span {
            color: #888;
            font-size: 14px;
        }

        .job-info {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            position: relative;
        }

        .job-info div {
            text-align: center;
            flex: 1;
        }

        .job-info h6 {
            margin-bottom: 5px;
            font-size: 16px;
        }

        .job-info .divider {
            position: absolute;
            top: 0;
            bottom: 0;
            width: 1px;
            background-color: #e0e0e0;
        }

        .badge-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 15px;
        }

        .badge {
            border-radius: 30px;
            padding: 8px 12px;
            font-size: 14px;
        }

        .title-container {
            overflow-x: auto;
            white-space: nowrap;
            margin-bottom: 15px;
            border-bottom: 2px solid #e0e0e0;
        }

        .title-container::-webkit-scrollbar {
            display: none;
        }

        .title {
            display: inline-block;
            font-size: 18px;
            font-weight: bold;
            margin: 0;
            padding: 10px 15px;
            background-color: #fff;
            border-bottom: none;
            margin-right: 15px;
            cursor: pointer;
        }

        .title.active {
            border-bottom: 2px solid #5bbcd7;
        }

        .job-details {
            margin-bottom: 30px;
        }

        .job-details h6 {
            font-size: 16px;
            margin-bottom: 10px;
            font-weight: bold;
        }

        .skills {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-top: 10px;
        }

        .skills .badge {
            color: #424242;
            padding: 6px 12px;
            font-size: 12px;
            background-color: #f0f0f0;
            border-radius: 30px;
        }

        .card-custom {
            border: 1px solid #e0e0e0;
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        .hidden {
            display: none;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <a href="/detail_pekerjaan" class="back-button">
                <i class="bi bi-arrow-left back-button" aria-label="Kembali"></i>
            </a>
            <i class="bi bi-three-dots three-dots" aria-label="Opsi Lainnya"></i>
        </div>
        <div class="content">
            <div class="job-header text-center">
                <img src="asset/images/perusahaan/Dicoding.png" alt="Company Logo" class="mx-auto">
                <div class="job-title mt-2">
                    <h5>Android Developer</h5>
                    <span>Dicoding</span>
                </div>
            </div>

            <div class="job-info">
                <div>
                    <h6>Rp 3-7 Jt</h6>
                    <span class="text-muted">Gaji perbulan</span>
                </div>
                <div class="divider" style="left: 33%;"></div>
                <div>
                    <h6>120</h6>
                    <span class="text-muted">Pelamar</span>
                </div>
                <div class="divider" style="left: 66%;"></div>
                <div>
                    <h6>On site</h6>
                    <span class="text-muted">Tipe Pekerjaan</span>
                </div>
            </div>

            <div class="badge-container">
                <span class="badge bg-primary">Full-time</span>
                <span class="badge bg-primary">Walk-in Interview</span>
                <span class="badge bg-primary">1 Lowongan Tersisa</span>
            </div>

            <div class="title-container">
                <div class="title active" data-section="details">Detail pekerjaan</div>
                <div class="title" data-section="benefit">Manfaat</div>
            </div>

            <section class="details">
                <div class="job-details">
                    <p>Sebagai Android Developer di Dicoding, Anda akan bertanggung jawab untuk merancang,
                        mengembangkan,
                        dan memelihara aplikasi Android yang inovatif. Anda akan bekerja dalam tim yang dinamis untuk
                        menerjemahkan kebutuhan pengguna menjadi aplikasi yang dapat digunakan secara luas. Posisi ini
                        menawarkan kesempatan untuk berinovasi dan mengembangkan solusi teknologi mutakhir.</p>

                    <h6>Kualifikasi</h6>
                    <ul>
                        <li>Pengalaman +10 tahun kerja</li>
                        <li>Berpenampilan bebas</li>
                        <li>Memiliki laptop MacBook terbaru</li>
                        <li>Memahami bahasa pemrograman JAKSEL Programming Language</li>
                        <li>Tinggi badan minimal 250cm</li>
                        <li>Bisa ngoding sambil merem</li>
                        <li>Jago pake Python Django</li>
                        <li>Pernah tipes minimal sekali</li>
                    </ul>

                    <h6>Skill yang harus dimiliki</h6>
                    <div class="skills">
                        <span class="badge">Flutter</span>
                        <span class="badge">Skill komunikasi</span>
                        <span class="badge">Teamwork</span>
                        <span class="badge">Server</span>
                        <span class="badge">API</span>
                        <span class="badge">Kemampuan analisis</span>
                    </div>
                </div>
            </section>

            <section class="benefit hidden">
                <h6>Manfaat yang kau dapat</h6>
                <ul>
                    <li>Ansuransi BPJS Kesehatan</li>
                    <li>Ansuransi BPJS Ketenagakerjaan</li>
                    <li>Kamar tidur</li>
                    <li>Laptop Macbook Pro M3</li>
                    <li>Handphone Iphone 13</li>
                    <li>Motor stylo</li>
                    <li>Saham 1% prusahaan</li>
                    <li>Liburan tahunan ke luar negeri</li>
                    <li>Tunjangan tahunan</li>
                    <li>THR</li>
                    <li>Beasiswa kuliah</li>
                </ul>
            </section>
        </div>

        <div class="footer">
            <button id="bookmark-btn" class="bookmark-btn" aria-label="Simpan ke Bookmark">
                <i class="bi bi-bookmark"></i>
            </button>
            <button class="apply-btn">Lamar sekarang</button>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const bookmarkBtn = document.getElementById('bookmark-btn');
            const bookmarkKey = 'jobBookmarkStatus';

            // Load bookmark status from localStorage
            const isBookmarked = localStorage.getItem(bookmarkKey) === 'true';
            updateBookmarkStatus(isBookmarked);

            // Add click event listener to bookmark button
            bookmarkBtn.addEventListener('click', () => {
                const isCurrentlyBookmarked = localStorage.getItem(bookmarkKey) === 'true';
                const newBookmarkStatus = !isCurrentlyBookmarked;

                // Save new bookmark status to localStorage
                localStorage.setItem(bookmarkKey, newBookmarkStatus);

                // Update bookmark button appearance
                updateBookmarkStatus(newBookmarkStatus);
            });

            function updateBookmarkStatus(isBookmarked) {
                if (isBookmarked) {
                    bookmarkBtn.classList.add('active');
                    bookmarkBtn.innerHTML = '<i class="bi bi-bookmark-fill"></i>'; // Filled bookmark icon
                } else {
                    bookmarkBtn.classList.remove('active');
                    bookmarkBtn.innerHTML = '<i class="bi bi-bookmark"></i>'; // Outline bookmark icon
                }
            }

            // Handle title clicks
            const titles = document.querySelectorAll('.title');
            const detailsSection = document.querySelector('.details');
            const benefitSection = document.querySelector('.benefit');

            titles.forEach(title => {
                title.addEventListener('click', () => {
                    const sectionToShow = title.getAttribute('data-section');

                    // Hide all sections
                    detailsSection.classList.add('hidden');
                    benefitSection.classList.add('hidden');

                    // Remove active class from all titles
                    titles.forEach(t => t.classList.remove('active'));

                    // Show the clicked section and set active class
                    if (sectionToShow === 'details') {
                        detailsSection.classList.remove('hidden');
                    } else if (sectionToShow === 'benefit') {
                        benefitSection.classList.remove('hidden');
                    }

                    title.classList.add('active');
                });
            });
        });
    </script>
</body>

</html>
