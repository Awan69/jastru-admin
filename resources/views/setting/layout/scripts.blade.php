@push('scripts')
    <script>
        // Fungsi untuk switch tabs
        document.querySelectorAll('.tab-button').forEach(button => {
            button.addEventListener('click', function() {
                const tabNumber = this.getAttribute('data-tab');

                // Update tab-button active state
                document.querySelectorAll('.tab-button').forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Show the correct tab content
                document.querySelectorAll('.tab-content').forEach(content => content.classList.remove(
                    'active'));
                document.getElementById('tab-' + tabNumber).classList.add('active');
            });
        });

        // Bookmark toggle function
        document.querySelectorAll('.bookmark-btn').forEach(bookmark => {
            bookmark.addEventListener('click', function() {
                if (bookmark.classList.contains('bi-bookmark-fill')) {
                    bookmark.classList.remove('bi-bookmark-fill');
                    bookmark.classList.add('bi-bookmark');
                } else {
                    bookmark.classList.remove('bi-bookmark');
                    bookmark.classList.add('bi-bookmark-fill');
                }
            });
        });


        // js logout setting
        document.getElementById("logoutButton").addEventListener("click", function(event) {
            // Cegah aksi default tombol, yaitu logout langsung
            event.preventDefault();

            // Tampilkan SweetAlert untuk konfirmasi
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Anda akan keluar dari akun!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, keluar!',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Jika pengguna mengkonfirmasi, submit form untuk logout
                    document.getElementById('logout-form').submit();
                }
                // Jika tidak mengkonfirmasi, tidak ada aksi yang dilakukan
            });
        });
    </script>
    <script>
        // ===================================================================================================================================================
        //                                                 VOUCHER
        // ===================================================================================================================================================
        const activeTab = document.getElementById('active-tab');
        const completedTab = document.getElementById('completed-tab');
        const voucherCards = document.querySelectorAll('.voucher-card');

        activeTab.addEventListener('click', () => {
            activeTab.classList.add('active');
            completedTab.classList.remove('active');
            voucherCards.forEach(card => {
                if (card.dataset.status === 'active') {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });

        completedTab.addEventListener('click', () => {
            completedTab.classList.add('active');
            activeTab.classList.remove('active');
            voucherCards.forEach(card => {
                if (card.dataset.status === 'completed') {
                    card.classList.remove('hidden');
                } else {
                    card.classList.add('hidden');
                }
            });
        });

        document.querySelectorAll('.end-now-btn').forEach(button => {
            button.addEventListener('click', (e) => {
                const voucherCard = e.target.closest('.voucher-card');
                const tag = voucherCard.querySelector('.voucher-tag');
                const actionsContainer = voucherCard.querySelector('.voucher-actions');

                // Ubah status tag menjadi "Selesai"
                tag.textContent = 'Selesai';
                tag.classList.remove('voucher-tag-active');
                tag.classList.add('voucher-tag-finished');

                // Pindahkan voucher ke status "completed"
                voucherCard.setAttribute('data-status', 'completed');

                // Hapus tombol aksi "Akhiri Sekarang" dan "Ubah"
                actionsContainer.innerHTML = `
                <button class="btn-secondary full-width">Lihat</button>
            `;

                // Hide voucher if Active tab is selected
                if (activeTab.classList.contains('active')) {
                    voucherCard.classList.add('hidden');
                }
            });
        });
    </script>
    <script>
        // Update karakter counter pada Nama Voucher
        function updateCharCount() {
            const input = document.getElementById('voucher-name');
            const counter = document.getElementById('char-count');
            counter.textContent = `${input.value.length}/255`;
        }

        // Tampilkan pop-up saat tombol diklik
        document.getElementById('selectButton').addEventListener('click', function() {
            document.getElementById('popup').style.display = 'flex'; // Ubah dari 'popup-tambah-voucher' ke 'popup'
        });

        // Fungsi untuk memilih produk/jasa
        document.querySelectorAll('.product-item').forEach(function(item) {
            item.addEventListener('click', function() {
                let selectedProduct = this.getAttribute('data-name');
                if (selectedProduct.length > 20) {
                    selectedProduct = selectedProduct.substring(0, 20) + '...';
                }
                document.getElementById('selectedText').textContent = "Pilih Produk atau Jasa";
                document.getElementById('selectedItem').textContent = selectedProduct + " >";
                document.getElementById('popup').style.display = 'none'; // Ubah dari 'popup-tambah-voucher' ke 'popup'
            });
        });

        // Fungsi pencarian produk/jasa
        document.getElementById('searchBox').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            document.querySelectorAll('.product-item').forEach(function(item) {
                const productName = item.getAttribute('data-name').toLowerCase();
                if (productName.includes(searchTerm)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });

        // Tutup pop-up jika mengklik di luar konten pop-up
        document.getElementById('popup').addEventListener('click', function(event) {
            if (event.target === this) {
                this.style.display = 'none';
            }
        });

        // Fungsi untuk format tanggal dan waktu
        function formatDate(date) {
            const day = String(date.getDate()).padStart(2, '0');
            const month = String(date.getMonth() + 1).padStart(2, '0');
            const year = date.getFullYear();
            const hours = String(date.getHours()).padStart(2, '0');
            const minutes = String(date.getMinutes()).padStart(2, '0');
            return `${day}-${month}-${year} ${hours}:${minutes}`;
        }

        // Set waktu awal ketika halaman terbuka
        document.addEventListener('DOMContentLoaded', function() {
            const now = new Date();
            document.getElementById('start-time').textContent = formatDate(now);
            document.getElementById('end-time').textContent = formatDate(now);
        });

        // Simpan ID elemen yang sedang diedit
        let currentEditingTime = null;

        // Fungsi untuk membuka modal saat elemen waktu diklik
        document.querySelectorAll('.time-picker').forEach(function(element) {
            element.addEventListener('click', function() {
                currentEditingTime = this.querySelector('span').id;
                document.getElementById('time-modal').style.display = 'flex';
            });
        });

        // Menambahkan event listener untuk mengklik area modal (overlay)
        document.getElementById('time-modal').addEventListener('click', function(event) {
            if (event.target === this) {
                this.style.display = 'none'; // Menutup modal jika mengklik area overlay
            }
        });

        // Fungsi untuk menyimpan tanggal dan jam yang dipilih
        document.getElementById('save-time').onclick = function() {
            const dateValue = document.getElementById('date-picker').value;
            const timeValue = document.getElementById('time-picker').value;

            if (dateValue && timeValue) {
                const selectedDate = new Date(`${dateValue}T${timeValue}`);
                document.getElementById(currentEditingTime).textContent = formatDate(selectedDate);
            }

            document.getElementById('time-modal').style.display = 'none';
        };
    </script>

    <script>
        // ===================================================================================================================================================
        //                                                 REKENING
        // ===================================================================================================================================================
        // Untuk membuka pop-up ketika tombol Lihat Detail diklik
        document.querySelectorAll('.lihat-detail').forEach(function(button) {
            button.addEventListener('click', function() {
                document.getElementById('rekening-popup').style.display = 'block';
            });
        });

        // Untuk menutup pop-up ketika tombol Tutup diklik
        document.getElementById('rekening-close-popup').addEventListener('click', function() {
            document.getElementById('rekening-popup').style.display = 'none';
        });

        document.querySelectorAll('.lihat-detail').forEach(button => {
            button.addEventListener('click', function() {
                const bankName = this.getAttribute('data-bank');
                let accountNumber = '';

                // Tentukan nomor rekening berdasarkan bank
                switch (bankName) {
                    case 'BRI':
                        accountNumber = '01928495829';
                        break;
                    case 'Mandiri':
                        accountNumber = '1234567890';
                        break;
                    case 'BCA':
                        accountNumber = '9876543210';
                        break;
                    case 'CIMB Niaga':
                        accountNumber = '1122334455';
                        break;
                }

                // Isi data bank dan nomor rekening di pop-up
                document.getElementById('bank-name').innerText = bankName;
                document.getElementById('account-number').innerText = accountNumber;

                // Tampilkan pop-up
                document.getElementById('rekening-popup').style.display = 'flex';
            });
        });

        // Tutup pop-up
        document.getElementById('rekening-close-popup').addEventListener('click', function() {
            document.getElementById('rekening-popup').style.display = 'none';
        });
    </script>
     <script>
        // Referensi elemen
        const selectButton = document.getElementById('selectBankButton');
        const popup = document.getElementById('bankPopup');
        const overlay = document.getElementById('overlay');
        const searchBox = document.querySelector('.search-box'); // Input pencarian
        const footer = document.querySelector('footer'); // Referensi footer
        const bankItems = document.querySelectorAll('.product-item'); // Seleksi item bank
        const checkIconTemplate = document.getElementById('checkIconTemplate'); // Template check icon

        let selectedBank = ''; // Variabel untuk menyimpan bank yang dipilih

        // Fungsi untuk membuka popup
        selectButton.addEventListener('click', function () {
            overlay.style.display = 'flex';  // Tampilkan overlay
            if (footer) {
                footer.style.zIndex = '0';  // Turunkan z-index footer jika ada
            }
            setTimeout(() => {
                popup.classList.add('active');  // Aktifkan animasi slide-up setelah overlay muncul
            }, 10); // Sedikit delay untuk memastikan animasi terlihat halus
        });

        // Fungsi untuk menutup popup ketika klik di luar area popup
        overlay.addEventListener('click', function (event) {
            if (event.target === overlay) {
                popup.classList.remove('active');  // Sembunyikan popup dengan slide-down
                setTimeout(() => {
                    overlay.style.display = 'none';  // Sembunyikan overlay setelah animasi selesai
                    searchBox.value = ''; // Kosongkan search box saat popup ditutup
                    if (footer) {
                        footer.style.zIndex = '10';  // Kembalikan z-index footer setelah popup ditutup
                    }
                }, 300); // Sesuaikan delay dengan durasi animasi
            }
        });

        // Fungsi untuk memilih bank dan menampilkan checkmark
        bankItems.forEach(item => {
            item.addEventListener('click', function () {
                // Hapus checkmark dari semua item sebelumnya
                bankItems.forEach(bank => {
                    const checkIcon = bank.querySelector('img');
                    if (checkIcon) {
                        checkIcon.remove();  // Hapus icon jika ada
                    }
                });

                // Simpan bank yang dipilih
                selectedBank = this.textContent.trim();

                // Tampilkan checkmark pada bank yang dipilih
                let checkIcon = this.querySelector('img');
                if (!checkIcon) {
                    checkIcon = checkIconTemplate.content.cloneNode(true);
                    this.appendChild(checkIcon);  // Append checkmark dari template
                }

                // Ubah teks di tombol "Pilih Bank"
                selectButton.querySelector('span').textContent = selectedBank + ' >';

                // Tutup popup
                popup.classList.remove('active');
                setTimeout(() => {
                    overlay.style.display = 'none';
                }, 300);
            });
        });

        // Fungsi pencarian bank berdasarkan input pengguna
        searchBox.addEventListener('input', function () {
            const searchText = searchBox.value.toLowerCase();  // Ambil teks input dan ubah ke lowercase
            bankItems.forEach(item => {
                const bankName = item.textContent.toLowerCase();  // Nama bank dalam lowercase
                if (bankName.includes(searchText)) {
                    item.style.display = '';  // Tampilkan jika cocok dengan pencarian
                } else {
                    item.style.display = 'none';  // Sembunyikan jika tidak cocok
                }
            });
        });
    </script>
    <script>
         // ===================================================================================================================================================
        //                                                 SELLER LEVEL
        // ===================================================================================================================================================
        let currentLevel = 0; // Menandai roadmap-step yang aktif saat ini
         const roadmapSteps = document.querySelectorAll('.roadmap-step');
         const sellerBadge = document.getElementById('seller-badge'); // Referensi untuk elemen badge
         const levelText = document.getElementById('level-text'); // Referensi untuk teks level
         const roadmapPopupLogo = document.getElementById('roadmap-popup-logo'); // Referensi untuk logo tier di pop-up

         // Event listener untuk roadmap-step aktif (hanya yang aktif yang bisa memunculkan pop-up)
         roadmapSteps.forEach((item, index) => {
             if (index === currentLevel) {
                 item.addEventListener('click', function () {
                     const popup = document.getElementById('roadmap-popup');

                     // Menampilkan pop-up
                     popup.classList.add('visible');
                     popup.classList.remove('hidden');

                     // Update konten pop-up berdasarkan data roadmap-step yang aktif
                     document.getElementById('roadmap-popup-tier').textContent = this.getAttribute('data-tier');
                     document.getElementById('roadmap-popup-seller').textContent = this.getAttribute('data-tier');
                     document.getElementById('roadmap-popup-rating').textContent = this.getAttribute('data-rating');
                     document.getElementById('roadmap-popup-response').textContent = this.getAttribute('data-response');
                     document.getElementById('roadmap-popup-income').textContent = this.getAttribute('data-income');
                     document.getElementById('roadmap-popup-order').textContent = this.getAttribute('data-order');

                     // Update logo tier di dalam pop-up sesuai dengan roadmap-step yang dipilih
                     roadmapPopupLogo.src = `{{ asset('gambar/sellertier${index + 1}.png') }}`; // Ganti logo sesuai index step
                 });
             }
         });

         // Event listener untuk tombol "Ajukan naik level"
         document.getElementById('level-up-btn').addEventListener('click', function () {
             if (currentLevel < roadmapSteps.length - 1) {
                 currentLevel++; // Naikkan level

                 // Update status roadmap-step menjadi aktif
                 roadmapSteps[currentLevel].classList.add('active');

                 // Ganti gambar roadmap-step yang sebelumnya non-aktif dengan yang aktif
                 roadmapSteps[currentLevel].src = `{{ asset('gambar/sellertier${currentLevel}.png') }}`;

                 // Ganti gambar dan teks sesuai dengan roadmap-step yang aktif
                 if (currentLevel === 1) {
                     sellerBadge.src = "{{ asset('gambar/sellertier1.png') }}";
                     levelText.textContent = 'Seller Level 1';
                 } else if (currentLevel === 2) {
                     sellerBadge.src = "{{ asset('gambar/sellertier2.png') }}";
                     levelText.textContent = 'Seller Level 2';
                 } else if (currentLevel === 3) {
                     sellerBadge.src = "{{ asset('gambar/sellertier3.png') }}";
                     levelText.textContent = 'Top Seller';
                 }

                 // Mengaktifkan event listener click pada roadmap-step yang baru aktif
                 roadmapSteps[currentLevel].addEventListener('click', function () {
                     const popup = document.getElementById('roadmap-popup');
                     popup.classList.add('visible');
                     popup.classList.remove('hidden');

                     document.getElementById('roadmap-popup-tier').textContent = this.getAttribute('data-tier');
                     document.getElementById('roadmap-popup-seller').textContent = this.getAttribute('data-tier');
                     document.getElementById('roadmap-popup-rating').textContent = this.getAttribute('data-rating');
                     document.getElementById('roadmap-popup-response').textContent = this.getAttribute('data-response');
                     document.getElementById('roadmap-popup-income').textContent = this.getAttribute('data-income');
                     document.getElementById('roadmap-popup-order').textContent = this.getAttribute('data-order');

                     // Update logo tier di dalam pop-up sesuai dengan roadmap-step yang dipilih
                     roadmapPopupLogo.src = `{{ asset('gambar/sellertier${currentLevel}.png') }}`;
                 });
             }
         });

         // Sembunyikan pop-up jika mengklik di luar pop-up
         document.addEventListener('click', function (e) {
             const popup = document.getElementById('roadmap-popup');
             const clickedInsidePopup = popup.contains(e.target);
             const clickedOnRoadmapStep = Array.from(roadmapSteps).some(step => step.contains(e.target));

             if (!clickedInsidePopup && !clickedOnRoadmapStep && popup.classList.contains('visible')) {
                 popup.classList.remove('visible');
                 popup.classList.add('hidden');
             }
         });


     </script>
@endpush
