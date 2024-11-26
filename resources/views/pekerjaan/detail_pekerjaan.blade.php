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
            height: 100vh;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .header {
            position: sticky;
            top: 0;
            background-color: #fff;
            z-index: 1000;
            display: flex;
            align-items: center;
            padding: 10px;
            box-shadow: 0 0px 1px rgba(0, 0, 0, 0.1);
        }

        .header .back-button {
            font-size: 24px;
            color: #2995f0;
        }

        .header .three-dots {
            font-size: 24px;
            color: #2995f0;
            margin-left: auto;
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
            color: #10ABCF;
        }

        .footer .bookmark-btn:hover {
            background-color: #e0e0e0;
        }

        .footer .apply-btn {
            background-color: #10ABCF;
            color: white;
            border: none;
            border-radius: 13px;
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
            padding: 20px 25px;
            background: #FFFFFF;
        }

        .content::-webkit-scrollbar {
            display: none;
        }

        .job-header {
            display: flex;
            align-items: center;
            margin: 20px 0;
            padding-bottom: 15px;
        }

        .job-header img {
            width: 60px;
            height: 60px;
            border-radius: 10px;
            margin-right: 15px;
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
            font-weight: 600;
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
            margin-bottom: 20px;
            padding-bottom: 15px;
        }

        .badge {
            border-radius: 30px;
            padding: 8px 12px;
            font-size: 14px;
            font-weight: 200;
        }

        .title-container {
            overflow-x: auto;
            white-space: nowrap;
            margin-bottom: 20px;
            border-bottom: 1px solid #e0e0e0;
        }

        .title-container::-webkit-scrollbar {
            display: none;
        }

        .title {
            display: inline-block;
            font-size: 18px;
            font-weight: 200;
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

        .job-details,
        .benefit {
            margin-bottom: 30px;
        }

        .job-details h6,
        .benefit h6 {
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

        .hidden {
            display: none;
        }

        .popup,
        .popup-q1,
        .popup-q2 {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            z-index: 2000;
            overflow: hidden;
        }

        .popup.hidden {
            display: none;
        }

        .popup-content {
            background-color: #fff;
            height: 500px;
            padding: 20px;
            border-radius: 15px 15px 0px 0px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 480px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .popup-content h5 {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .popup-content p {
            font-size: 14px;
            color: #666;
            margin-bottom: 20px;
        }

        .popup-image {
            display: flex;
            justify-content: center;
            width: 70%;
            height: auto;
            margin-bottom: 20px;
        }

        .popup-button-container {
            display: flex;
            justify-content: center;
            margin-top: auto;
        }

        .popup-close-button {
            background-color: #10ABCF;
            color: #fff;
            border: none;
            border-radius: 8px;
            padding: 10px;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            justify-content: center;
            margin-top: auto;
        }

        .popup-q1 {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            justify-content: center;
            align-items: flex-end;
            z-index: 2000;
        }

        .popup-q1.hidden,
        .popup-q2.hidden {
            display: none;
        }

        .popup-q1-content,
        .popup-q2-content {
            background-color: #fff;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 480px;
            height: 850px;
        }

        .popup-q1-header,
        .popup-q2-header {
            display: flex;
            align-items: center;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .popup-q1-header h5,
        .popup-q2-header h5 {
            flex-grow: 1;
            text-align: center;
            font-size: 1.2em;
            margin: 0;
        }

        .popup-back-button {
            font-size: 24px;
            color: #10ABCF;
            cursor: pointer;
            margin-right: auto;
            text-decoration: none;
            display: flex;
            align-items: center;
            font-weight: 500;
        }

        .popup-back-button::before {
            content: "\2190";
            font-size: 24px;
            color: #10ABCF;
            cursor: pointer;
            margin-right: auto;
            text-decoration: none;
            display: flex;
            align-items: center;
        }

        .form-check {
            padding: 10px 0;
            margin: 0;
        }

        .form-check-group {
            border: 1px solid #eee;
            /* Border color */
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .form-check-group:last-child {
            margin-bottom: 0;
        }

        .form-check-input {
            margin-right: 10px;
        }

        .form-check-label {
            font-size: 1em;
        }


        .form-check-label {
            font-size: 1em;
        }

        .next-button {
            position: fixed;
            bottom: 20px;
            width: 100%;
            max-width: 441px;
            background-color: #10ABCF;
            border: none;
            padding: 10px;
            color: #fff;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="mobile-container">
        <div class="header">
            <a class="back-button" href="{{ route('pekerjaan') }}">
                <img src="asset/images/icon/backarrow.png" alt="Back Arrow">
            </a>
            <a href="/detail_pekerjaan2" class="three-dots">
                <i class="bi bi-three-dots" aria-label="Opsi Lainnya"></i>
            </a>
        </div>

        <div class="content">
            <div class="job-header">
                <img src="asset/images/perusahaan/Dicoding.png" alt="Company Logo">
                <div class="job-title">
                    <h5>Android Developer</h5>
                    <span>Dicoding</span>
                </div>
            </div>

            <div class="job-info">
                <div>
                    <h6>Rp 3-7 Jt</h6>
                    <span class="text" style="color: #979797; font-weight: 200;">Gaji perbulan</span>
                </div>
                <div class="divider" style="left: 33%;"></div>
                <div>
                    <h6>120</h6>
                    <span class="text" style="color: #979797; font-weight: 200;">Pelamar</span>
                </div>
                <div class="divider" style="left: 66%;"></div>
                <div>
                    <h6>On site</h6>
                    <span class="text" style="color: #979797; font-weight: 200;">Tipe Pekerjaan</span>
                </div>
            </div>

            <div class="badge-container">
                <span class="badge" style="background-color: #10ABCF;">Full-time</span>
                <span class="badge" style="background-color: #10ABCF;">Walk-in Interview</span>
                <span class="badge" style="background-color: #10ABCF;">1 Lowongan Tersisa</span>
            </div>

            <div class="title-container">
                <div class="title active" data-section="details">Deskripsi</div>
                <div class="title" data-section="benefit">Manfaat</div>
            </div>

            <section class="details">
                <div class="job-details">
                    <p style="font-weight: 200; color: #979797;">Sebagai Android Developer di Dicoding, Anda akan
                        bertanggung jawab untuk
                        merancang,
                        mengembangkan,
                        dan memelihara aplikasi Android yang inovatif. Anda akan bekerja dalam tim yang dinamis untuk
                        menerjemahkan kebutuhan pengguna menjadi aplikasi yang dapat digunakan secara luas. Posisi ini
                        menawarkan kesempatan untuk berinovasi dan mengembangkan solusi teknologi mutakhir.</p>

                    <h6>Kualifikasi</h6>
                    <ul style="font-weight: 200; color: #979797;">
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
                <ul style="font-weight: 200; color: #979797;">
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
            <button id="apply-now-button" class="apply-btn">Lamar Sekarang</button>
        </div>

        <div class="popup hidden">
            <div class="popup-content">
                <h5>Isi pertanyaan rekruter dengan jujur</h5>
                <p>Rekruter mau kenal kamu lebih dekat lagi nih, jawab pertanyaan berikut ya.</p>
                <div class="popup-button-container">
                    <img src="asset/images/pekerjaan/isi_pertanyaan.svg" alt="Illustration" class="popup-image">
                </div>
                <br>
                <div class="popup-button-container">
                    <button class="popup-close-button">Ayo mulai</button>
                </div>
            </div>
        </div>

        <div class="popup-q1 hidden">
            <div class="popup-q1-content">
                <div class="popup-q1-header">
                    <a href="#" class="popup-back-button">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <h5>Pertanyaan Rekruiter</h5>
                </div>
                <p style="font-weight: 100; color: #979797;">Pertanyaan 1/2</p>
                <p>Apabila kamu kami terima, dimanakah kamu akan tinggal untuk bekerja?</p>
                <form id="pertanyaan-form" style="font-weight: 200; color: #979797;">
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="rumahSendiri" name="tempatTinggal"
                            value="Rumah sendiri">
                        <label class="form-check-label" for="rumahSendiri">Rumah sendiri</label>
                    </div>
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="rumahSaudara" name="tempatTinggal"
                            value="Rumah saudara">
                        <label class="form-check-label" for="rumahSaudara">Rumah saudara</label>
                    </div>
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="bersamaOrangTua" name="tempatTinggal"
                            value="Bersama orang tua">
                        <label class="form-check-label" for="bersamaOrangTua">Bersama orang tua</label>
                    </div>
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="kos" name="tempatTinggal"
                            value="Kos">
                        <label class="form-check-label" for="kos">Kos</label>
                    </div>
                </form>
                <button class="next-button btn btn-primary mt-3">Selanjutnya</button>
            </div>
        </div>

        <div class="popup-q2 hidden">
            <div class="popup-q2-content">
                <div class="popup-q2-header">
                    <a href="#" class="popup-back-button">
                        <i class="fa fa-arrow-left"></i>
                    </a>
                    <h5>Pertanyaan Rekruiter</h5>
                </div>
                <p style="font-weight: 100; color: #979797;">Pertanyaan 2/2</p>
                <p>Berapa lama pengalam kamu dalam indutri yang berkaitan dengan posisi ini?</p>
                <form id="pertanyaan-form" style="font-weight: 200; color: #979797;">
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="BelumPernah" name="pengalaman"
                            value="Belum Pernah Sama Sekali">
                        <label class="form-check-label" for="BelumPernah">Belum Pernah Sama Sekali</label>
                    </div>
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="1tahun" name="pengalaman"
                            value="1 Tahun">
                        <label class="form-check-label" for="1tahun">Rumah saudara</label>
                    </div>
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="2tahun" name="pengalaman"
                            value="2 Tahun">
                        <label class="form-check-label" for="2tahun">2 Tahun</label>
                    </div>
                    <div class="form-check-group">
                        <input type="radio" class="form-check-input" id="+3tahun" name="pengalaman"
                            value="+3 Tahuns">
                        <label class="form-check-label" for="+3tahun">+ 3 Tahun</label>
                    </div>
                </form>
                <a href="/form_pekerjaan"><button class="next-button btn btn-primary mt-3">Selanjutnya</button></a>
            </div>
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

            // Handle popups
            const applyButton = document.getElementById('apply-now-button');
            const popup = document.querySelector('.popup');
            const popupQ1 = document.querySelector('.popup-q1');
            const popupQ2 = document.querySelector('.popup-q2');

            // Show the first popup when the "Lamar Sekarang" button is clicked
            applyButton.addEventListener('click', () => {
                popup.classList.remove('hidden');
                popup.classList.add('show');
            });

            // Switch to the second popup when the "Ayo mulai" button is clicked
            const popupStartButton = document.querySelector('.popup .popup-close-button'); // Tombol "Ayo mulai"
            popupStartButton.addEventListener('click', (event) => {
                event.preventDefault();
                event.stopPropagation();
                popup.classList.remove('show');
                popup.classList.add('hidden');

                setTimeout(() => {
                    popupQ1.classList.remove('hidden');
                    popupQ1.classList.add('show');
                }, 300); // Delay to allow slide-up animation to complete
            });

            // Handle "Selanjutnya" button in popup-q1 to switch to popup-q2
            const nextButtonQ1 = document.querySelector('.popup-q1 .next-button');
            nextButtonQ1.addEventListener('click', (event) => {
                event.preventDefault();
                event.stopPropagation();
                popupQ1.classList.remove('show');
                popupQ1.classList.add('hidden');

                setTimeout(() => {
                    popupQ2.classList.remove('hidden');
                    popupQ2.classList.add('show');
                }, 300); // Delay to allow slide-up animation to complete
            });

            // Handle "Back" button in popup-q1 to go back to the initial popup
            const backButtonQ1 = document.querySelector('.popup-q1 .popup-back-button');
            backButtonQ1.addEventListener('click', (event) => {
                event.preventDefault();
                event.stopPropagation();
                popupQ1.classList.remove('show');
                popupQ1.classList.add('hidden');

                setTimeout(() => {
                    popup.classList.remove('hidden');
                    popup.classList.add('show');
                }, 300); // Delay to allow slide-up animation to complete
            });

            // Handle "Back" button in popup-q2 to go back to popup-q1
            const backButtonQ2 = document.querySelector('.popup-q2 .popup-back-button');
            backButtonQ2.addEventListener('click', (event) => {
                event.preventDefault();
                event.stopPropagation();
                popupQ2.classList.remove('show');
                popupQ2.classList.add('hidden');

                setTimeout(() => {
                    popupQ1.classList.remove('hidden');
                    popupQ1.classList.add('show');
                }, 300); // Delay to allow slide-up animation to complete
            });

            // Close the initial popup when clicking outside the popup content, except on the "Ayo mulai" button
            function closePopupOnClickOutside(popupElement, popupContentElement, excludeButtonElement) {
                popupElement.addEventListener('click', (event) => {
                    if (event.target === popupElement && event.target !== excludeButtonElement) {
                        popupElement.classList.remove('show');
                        popupElement.classList.add('hidden');
                    }
                });
            }

            closePopupOnClickOutside(popup, document.querySelector('.popup-content'), popupStartButton);

            // Prevent click inside the popup content from closing the popup
            document.querySelector('.popup-content').addEventListener('click', (event) => {
                event.stopPropagation();
            });

            document.querySelector('.popup-q1-content').addEventListener('click', (event) => {
                event.stopPropagation();
            });

            document.querySelector('.popup-q2-content').addEventListener('click', (event) => {
                event.stopPropagation();
            });
        });
    </script>


</body>

</html>
