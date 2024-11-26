@push('script-profile')
  <script>
    // Fungsi untuk mengaktifkan navbar
    function setActiveNav(element, targetId) {
      document.querySelectorAll('.nav-item').forEach(item => item.classList.remove('active'));
      document.querySelectorAll('.content-section').forEach(section => section.classList.remove('active'));
      element.classList.add('active');
      document.getElementById(targetId).classList.add('active');
      // Menambahkan kelas active pada navbar yang diklik
      element.classList.add('active');
      // Menghilangkan tampilan semua konten
      document.querySelectorAll('.content-section').forEach(section => section.style.display = 'none');
      // Menampilkan konten yang sesuai dengan navbar yang diklik
      document.getElementById(targetId).style.display = 'block';
      // Mengatur posisi underline
      const underline = document.querySelector('.nav-underline');
      const navItem = document.querySelector('.nav-item.active');
    }

    // Mengatur event listener pada navbar
    document.querySelector('.nav-item:first-child').addEventListener('click', () => {
      setActiveNav(document.querySelector('.nav-item:first-child'), 'portofolio-content');
    });
    document.querySelector('.nav-item:nth-child(2)').addEventListener('click', () => {
      setActiveNav(document.querySelector('.nav-item:nth-child(2)'), 'produkJasa-content');
    });
    document.querySelector('.nav-item:nth-child(3)').addEventListener('click', () => {
      setActiveNav(document.querySelector('.nav-item:nth-child(3)'), 'sertifikat-content');
    });

    // Mengatur konten yang pertama kali ditampilkan
    document.getElementById('portofolio-content').style.display = 'block';
    document.querySelector('.nav-item:first-child').classList.add('active');
    // Mengatur posisi underline
    //const underline = document.querySelector('.nav-underline');
    //const navItem = document.querySelector('.nav-item.active');
    //underline.style.left = `${navItem.offsetLeft}px`;

    // Fungsi untuk menutup popup
    function closePopup(event) {
      if (event.target.classList.contains('close')) {
        event.target.parentElement.style.display = 'none';
      }
    }

    // Fungsi untuk membuka popup
    function openPopup(popupId) {
      document.getElementById(popupId).style.display = 'block';
    }

    // Menambahkan event listener pada tombol tutup popup
    document.querySelectorAll(".close").forEach(button => {
      button.addEventListener("click", closePopup);
    });

    // Menambahkan event listener pada setiap item sertifikat
    document.querySelectorAll('.sertifikat-item').forEach(item => {
      item.addEventListener("click", function() {
        openPopup(item.getAttribute('data-popup-content'));
      });
    });

    // Fungsi untuk mengaktifkan popup-pengalaman
    const popupPengalaman = document.getElementById("myPopup");
    const buttonPengalaman = document.querySelector(".button-pengalaman");
    buttonPengalaman.addEventListener("click", function() {
      popupPengalaman.style.display = popupPengalaman.style.display === "block" ? "none" : "block";
    });

    // Animasi untuk button ikuti pada profile
    const ikutiButton = document.getElementById('ikutiButton');
    let originalText = ikutiButton.textContent;
    let isFollowing = false;
    ikutiButton.addEventListener('click', function() {
      if (!isFollowing) {
        // 1. Tampilkan animasi dan nonaktifkan tombol
        const loading = document.createElement('div');
        loading.classList.add('loading');
        ikutiButton.appendChild(loading);
        ikutiButton.disabled = true;
        // Sembunyikan teks "Ikuti"
        ikutiButton.innerHTML = '<div class="loading"></div>';
        // 2. Simulasi proses (ganti dengan logika sebenarnya)
        setTimeout(function() {
          // 3. Hilangkan animasi dan aktifkan kembali tombol (jika perlu)
          loading.remove();
          ikutiButton.disabled = false;
          ikutiButton.textContent = 'Mengikuti';
          // Ganti teks jika perlu
          ikutiButton.classList.add('ikuti');
          // Tambahkan kelas ikuti untuk mengubah warna
          isFollowing = true;
        }, 1500); // Percepat waktu proses
      } else {
        // 1. Tampilkan animasi dan nonaktifkan tombol
        const loading = document.createElement('div');
        loading.classList.add('loading');
        ikutiButton.appendChild(loading);
        ikutiButton.disabled = true;
        // Sembunyikan teks "Mengikuti"
        ikutiButton.innerHTML = '<div class="loading"></div>';
        // 2. Simulasi proses (ganti dengan logika sebenarnya)
        setTimeout(function() {
          // 3. Hilangkan animasi dan aktifkan kembali tombol (jika per lu)
          loading.remove();
          ikutiButton.disabled = false;
          ikutiButton.textContent = originalText;
          // Kembalikan teks asli
          ikutiButton.classList.remove('ikuti');
          // Hapus kelas ikuti
          isFollowing = false;
        }, 1500); // Percepat waktu proses
      }
    });
  </script>
@endpush
