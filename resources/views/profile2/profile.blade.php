@extends('profile2.layout.profile')
@section('tittle', )
@section('content')

<body>
    <div class="mobile-container">
        <div class="profile">
          <div class="profile-background">
            <div class="profile-image">
              <img src="{{ asset('asset/images/profile/profile.png') }}">
            </div>
            <div class="profile-icon">
              <img src="{{ asset('asset/images/profile/badge.png') }}">
            </div>
            <div class="profile-name">
              <div class="titik-tiga">
                <a href="{{ route('informasi_akun') }}" id="titiktiga-link"><img src="{{ asset('asset/images/profile/titiktiga.png') }} " class="check-icon-titiktiga"></a>
              </div>
              <div class="name">
                <h3> {{ Auth::user()->name }} </h3>
                <img src="{{ asset('asset/images/profile/check.png') }} " class="check-icon">
                <p>Full-stack Developer</p>
              </div>
            </div>
          </div>
        </div>
        <div class="icon">
          <img src="{{ asset('asset/images/profile/user.png') }} " class="follower-icon">
          <p class="jumlah-pengikut">10K</p><br>
          <p class="pengikut">Pengikut</p>
          <img src="{{ asset('asset/images/profile/like.png') }} " class="like-icon">
          <p class="jumlah-like">11,5K</p><br>
          <p class="portofolio">Portofolio disukai</p>
          <img src="{{ asset('asset/images/profile/star.png') }} " class="star-icon">
          <p class="jumlah-rate">4.5</p><br>
          <p class="review">Review</p>
        </div>
        <div class="profile-aboutme">
          <div class="rounded-border">
            <p id="bio">Bio</p>
            <p>Programmer berpengalaman.</p>
            <p>Jual E-Book roadmap to fullstack-developer.</p>
            <p>Certified google developer</p>
            <img src="{{ asset('asset/images/profile/link.png') }} " class="link-icon">
            <a href="https://linkedin.com/Jenlutfauzi">Linkedin.com/Jenlutfauzi</a>
            <p class="pengalaman">Pengalaman</p>
            <button class="button-pengalaman" onclick="setActive()">
              <p class="infolain"> Informasi lainnya ></p>
            </button>
          </div>
        </div>
        <div class="follchat-buttons">
            <button id="ikutiButton" class="follow-nav active">Ikuti</button>
            <a href="{{ route('chat') }}" class="footer-link"><button class="chat-nav" onclick="setActive(this, 'chat')">Pesan</button></a>
        </div>
        <nav class="navbar" id="nav-id">
          <button class="nav-item" id="portofolio-nav" onclick="setActiveNav(this, 'portofolio')">Portofolio</button>
          <button class="nav-item" id="produkJasa-nav" onclick="setActiveNav(this, 'produkJasa-content')">Produk & Jasa</button>
          <button class="nav-item" id="sertifikat-nav" onclick="setActiveNav(this, 'sertifikat')">Sertifikat</button>
          <div class="nav-underline"></div>
        </nav>
        <!-- PORTOFOLIO -->
        <div id="portofolio-content" class="portofolio-image content-section" style="display: none;">
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images1.jpg') }}" alt="This Image"></a>
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images2.jpg') }}" alt="This Image"></a>
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images3.jpg') }}" alt="This Image"></a>
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images4.jpg') }}" alt="This Image"></a>
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images5.jpg') }}" alt="This Image"></a>
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images6.jpg') }}" alt="This Image"></a>
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images7.jpg') }}" alt="This Image"></a>
          <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/images8.jpg') }}" alt="This Image"></a>
        </div>
        <!-- PRODUK & JASA -->
        <div id="produkJasa-content" class="produkJasa-page content-section" style="display: none;">
          <div class="produkJasa-content-header-terlaris">
            <p class="terlaris">Jasa & Produk Terlaris 🔥</p>
          </div>
          <div class="produkJasa-content-body-terlaris">
            <div class="produkJasa-terlaris">
              <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/jasaanimasiwebsite.png') }}" class="produkTerlaris" alt="Java & Pemrograman Web"></a>
              <p class="jasaProdukAnimasi">Jasa animasi website interaktif javascript</p>
              <p class="hargaProdukAnimasi">Rp20.000</p>
              <p class="starsTerlaris">⭐ 4.5 (120)</p>
            </div>
            <div class="produkJasa-terlaris">
              <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/jasapembuatanmobileapp.png') }}" class="produkTerlaris" alt="Produk & Website"></a>
              <p class="jasaMobileApp">Jasa pembuatan mobile app responsive</p>
              <p class="hargaMobileApp">Rp20.000</p>
              <p class="starsTerlaris">⭐ 4.5 (120)</p>
            </div>
            <div class="produkJasa-terlaris">
              <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/jasapembuatansistemecomerce.png') }}" class="produkTerlaris" alt="Kursus Online"></a>
              <p class="jasaSistemEComerce">Jasa pembuatan sistem e-comerce</p>
              <p class="hargaSistemEComerce">Rp20.000</p>
              <p class="starsTerlaris">⭐ 4.5 (120)</p>
            </div>
          </div>
          <div class="produkJasa-content-header-rekomendasi">
            <p class="rekomendasi">Rekomendasi</p>
          </div>
          <div class="produkJasa-content-body-rekomendasi">
            <div class="produkJasa-rekomendasi">
              <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/jasaanimasiwebsite.png') }}" class="produkRekomendasi" alt="Java & Pemrograman Web"></a>
              <p class="jasaProdukAnimasi">Jasa animasi website interaktif javascript</p>
              <p class="hargaProdukAnimasi">Rp20.000</p>
              <p class="starsRekomendasi">⭐ 4.5 (120)</p>
            </div>
            <div class="produkJasa-rekomendasi">
              <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/jasapembuatanmobileapp.png') }}" class="produkRekomendasi" alt="Produk & Website"></a>
              <p class="jasaMobileApp">Jasa pembuatan mobile app responsive</p>
              <p class="hargaMobileApp">Rp20.000</p>
              <p class="starsRekomendasi">⭐ 4.5 (120)</p>
            </div>
            <div class="produkJasa-rekomendasi">
              <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/jasapembuatansistemecomerce.png') }}" class="produkRekomendasi" alt="Kursus Online"></a>
              <p class="jasaSistemEComerce">Jasa pembuatan sistem e-comerce</p>
              <p class="hargaSistemEComerce">Rp20.000</p>
              <p class="starsRekomendasi">⭐ 4.5 (120)</p>
            </div>
            <div class="produkJasa-rekomendasi">
              <a href="{{ route('post2') }}"><img src="{{ asset('asset/images/profile/jasacyber.png') }}" class="produkRekomendasi" alt="Jasa Pembuatan Website"></a>
              <p class="jasaSecurityCyber">Jasa security cyber anti ddos</p>
              <p class="hargaSecurityCyber">Rp20.000</p>
              <p class="starsRekomendasi">⭐ 4.5 (120)</p>
            </div>
          </div>
        </div>
        <!-- SERTIFIKAT -->
        <div id="sertifikat-content" class="sertifikat-container content-section" style="display: none;">
          <div class="sertifikat-item" data-popup-content="sertifikat-google">
            <img src="{{ asset('asset/images/profile/google.png') }}" class="google" alt="Sertifikat Image 1">
            <div class="google-container">
              <p class="google1">Google Developer Course</p>
              <p class="google2">Google Academy</p>
              <p class="google3">1 Jan 2020</p>
            </div>
          </div>
          <div class="sertifikat-item" data-popup-content="sertifikat-dicoding">
            <img src="{{ asset('asset/images/profile/dicoding.png') }}" class="dicoding" alt="Sertifikat Image 2">
            <div class="dicoding-container">
              <p class="dicoding1">Flutter Master</p>
              <p class="dicoding2">Dicoding</p>
              <p class="dicoding3">12 Aug 2019</p>
            </div>
          </div>
          <div class="sertifikat-item" data-popup-content="sertifikat-apple">
            <img src="{{ asset('asset/images/profile/apple.png') }}" class="apple" alt="Sertifikat Image 3">
            <div class="apple-container">
              <p class="apple1">Apple fullstack academy</p>
              <p class="apple2">Apple Academy</p>
              <p class="apple3">12 Aug 2019</p>
            </div>
          </div>
        </div>
        <!-- POPUP-SERTIFIKAT 1 -->
        <div class="popup-sertifikat" id="sertifikat-google" style="display: none;">
          <span class="close" onclick="closePopup()">&times;</span>
          <div class="popup-header">
            <img src="{{ asset('asset/images/profile/google.png') }}" alt="Sertifikat Google Developer">
            <div class="header-text">
              <p class="judul">Google Developer Course</p>
              <p class="lembaga">Google Academy</p>
              <p class="tanggal">1 Jan 2020</p>
            </div>
          </div>
          <div class="data-popup-content">
            <!-- Konten untuk sertifikat Google -->
            <p class="header-deskripsi">Deskripsi :</p>
            <p class="deskripsi">Google developer course adalah pelatihan yang diadakan oleh perusahaan Google untuk menciptakan developer terbaik dari seluruh dunia.</p>
            <p class="related-skill">Related skills :</p>
            <div class="skills">
              <span>Backend</span>
              <span>CSS</span>
              <span>PHP</span>
              <span>Server</span>
              <span>SEO</span>
              <span>Python</span>
              <span>Laravel</span>
              <span>Wordpress</span>
              <span>API</span>
            </div>
            <button class="lihat-sertifikat">Lihat Sertifikat</button>
          </div>
        </div>
        <!-- POPUP-SERTIFIKAT 2 -->
        <div class="popup-sertifikat" id="sertifikat-dicoding" style="display: none;">
          <span class="close" onclick="closePopup()">&times;</span>
          <div class="popup-header"> 
            <img src="{{ asset('asset/images/profile/dicoding.png') }}" alt="Sertifikat Flutter Master">
            <div class="header-text">
              <p class="judul">Flutter Master</p>
              <p class="lembaga">Dicoding</p>
              <p class="tanggal">12 Aug 2019</p>
            </div>
          </div>
          <div class="data-popup-content">
            <!-- Konten untuk sertifikat Dicoding -->
            <p class="header-deskripsi">Deskripsi :</p>
            <p class="deskripsi">Google developer course adalah pelatihan yang diadakan oleh perusahaan Google untuk menciptakan developer terbaik dari seluruh dunia.</p>
            <div class="skills">
              <span>Backend</span>
              <span>CSS</span>
              <span>PHP</span>
              <span>Server</span>
              <span>SEO</span>
              <span>Python</span>
              <span>Laravel</span>
              <span>Wordpress</span>
              <span>API</span>
            </div>
            <button class="lihat-sertifikat">Lihat Sertifikat</button>
          </div>
        </div>
        <!-- POPUP-SERTIFIKAT 3 -->
        <div class="popup-sertifikat" id="sertifikat-apple" style="display: none;">
          <span class="close" onclick="closePopup()">&times;</span>
          <div class="popup-header">
            <img src="{{ asset('asset/images/profile/apple.png') }}" alt="Sertifikat Apple Fullstack">
            <div class="header-text">
              <p class="judul">Apple fullstack academy</p>
              <p class="lembaga">Apple Academy</p>
              <p class="tanggal">12 Aug 2019</p>
            </div>
          </div>
          <div class="data-popup-content">
            <!-- Konten untuk sertifikat Apple -->
            <p class="header-deskripsi">Deskripsi :</p>
            <p class="deskripsi">Google developer course adalah pelatihan yang diadakan oleh perusahaan Google untuk menciptakan developer terbaik dari seluruh dunia.</p>
            <div class="skills">
              <span>Backend</span>
              <span>CSS</span>
              <span>PHP</span>
              <span>Server</span>
              <span>SEO</span>
              <span>Python</span>
              <span>Laravel</span>
              <span>Wordpress</span>
              <span>API</span>
            </div>
            <button class="lihat-sertifikat">Lihat Sertifikat</button>
          </div>
        </div>
        <!-- POPUP-PENGALAMAN -->
        <div class="popup-pengalaman" id="myPopup">
          <span class="close" onclick="closePopup()">&times;</span>
          <p class="infoLainnya">Informasi Lainnya</p>
          <div class="content-infoLainnya">
            <p class="websiteSosialMedia">Website & Sosial Media</p>
            <div class="social-media">
              <a href="https://www.instagram.com"><img src="{{ asset('asset/images/profile/Instagram.png') }}" alt="This Image"></a>
              <a href="https://www.tiktok.com"><img src="{{ asset('asset/images/profile/Tiktok.png') }}" alt="This Image"></a>
              <a href="https://www.twitter.com"><img src="{{ asset('asset/images/profile/Twiter.png') }}" alt="This Image"></a>
              <a href="https://id.linkedin.com/Jenlutfauzi"><img src="{{ asset('asset/images/profile/LinkedIn.png') }}" alt="This Image"></a>
              <a href="https://www.google.com"><img src="{{ asset('asset/images/profile/Internet.png') }}" alt="This Image"></a>
            </div>
            <p class="kerjaSeller">Pengalaman kerja seller</p>
            <div class="pengalaman-kerja">
              <img src="{{ asset('asset/images/profile/google.png') }}" class="androidDev" alt="Sertifikat Image 1">
              <div class="pengalaman-container">
                  <p class="android-developer">Android Developer</p>
                  <p class="google-academy">Google Academy</p>
                  <p class="purnawaktu">Purnawaktu</p>
                  <p class="tgl"> Jan 2023 - Feb 2024</p>
              </div>
              <img src="{{ asset('asset/images/profile/google.png') }}" class="androidDev" alt="Sertifikat Image 1">
              <div class="pengalaman-container">
                  <p class="android-developer">IT Implementor</p>
                  <p class="google-academy">Google Academy</p>
                  <p class="kontrak">Kontrak</p>
                  <p class="tgl"> Jan 2023 - Feb 2024</p>
              </div>
              <img src="{{ asset('asset/images/profile/google.png') }}" class="androidDev" alt="Sertifikat Image 1">
              <div class="pengalaman-container">
                  <p class="android-developer">QA Analyst</p>
                  <p class="google-academy">Google Academy</p>
                  <p class="freelance-remote">Freelance Remote</p>
                  <p class="tgl"> Jan 2023 - Feb 2024</p>
              </div>
            </div>
          </div>
        </div>
        <!-- Navigasi -->
        <section>
            <div class="footer">
              @include('navbar.layout.nav_bar')
            </div>
        </section>
    </div>
</body>
@endsection
