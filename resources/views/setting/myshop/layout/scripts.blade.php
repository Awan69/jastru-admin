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
    </script>
    <script>
        // ===================================================================================================================================================
        //                                                 VOUCHER
        // ===================================================================================================================================================

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
        // ===================================================================================================================================================
        //                                                 TAMBAH VOUCHER
        // ===================================================================================================================================================
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
                document.getElementById('popup').style.display =
                    'none'; // Ubah dari 'popup-tambah-voucher' ke 'popup'
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
        selectButton.addEventListener('click', function() {
            overlay.style.display = 'flex'; // Tampilkan overlay
            if (footer) {
                footer.style.zIndex = '0'; // Turunkan z-index footer jika ada
            }
            setTimeout(() => {
                popup.classList.add('active'); // Aktifkan animasi slide-up setelah overlay muncul
            }, 10); // Sedikit delay untuk memastikan animasi terlihat halus
        });

        // Fungsi untuk menutup popup ketika klik di luar area popup
        overlay.addEventListener('click', function(event) {
            if (event.target === overlay) {
                popup.classList.remove('active'); // Sembunyikan popup dengan slide-down
                setTimeout(() => {
                    overlay.style.display = 'none'; // Sembunyikan overlay setelah animasi selesai
                    searchBox.value = ''; // Kosongkan search box saat popup ditutup
                    if (footer) {
                        footer.style.zIndex = '10'; // Kembalikan z-index footer setelah popup ditutup
                    }
                }, 300); // Sesuaikan delay dengan durasi animasi
            }
        });

        // Fungsi untuk memilih bank dan menampilkan checkmark
        bankItems.forEach(item => {
            item.addEventListener('click', function() {
                // Hapus checkmark dari semua item sebelumnya
                bankItems.forEach(bank => {
                    const checkIcon = bank.querySelector('img');
                    if (checkIcon) {
                        checkIcon.remove(); // Hapus icon jika ada
                    }
                });

                // Simpan bank yang dipilih
                selectedBank = this.textContent.trim();

                // Tampilkan checkmark pada bank yang dipilih
                let checkIcon = this.querySelector('img');
                if (!checkIcon) {
                    checkIcon = checkIconTemplate.content.cloneNode(true);
                    this.appendChild(checkIcon); // Append checkmark dari template
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
        searchBox.addEventListener('input', function() {
            const searchText = searchBox.value.toLowerCase(); // Ambil teks input dan ubah ke lowercase
            bankItems.forEach(item => {
                const bankName = item.textContent.toLowerCase(); // Nama bank dalam lowercase
                if (bankName.includes(searchText)) {
                    item.style.display = ''; // Tampilkan jika cocok dengan pencarian
                } else {
                    item.style.display = 'none'; // Sembunyikan jika tidak cocok
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
                item.addEventListener('click', function() {
                    const popup = document.getElementById('roadmap-popup');

                    // Menampilkan pop-up
                    popup.classList.add('visible');
                    popup.classList.remove('hidden');

                    // Update konten pop-up berdasarkan data roadmap-step yang aktif
                    document.getElementById('roadmap-popup-tier').textContent = this.getAttribute(
                        'data-tier');
                    document.getElementById('roadmap-popup-seller').textContent = this.getAttribute(
                        'data-tier');
                    document.getElementById('roadmap-popup-rating').textContent = this.getAttribute(
                        'data-rating');
                    document.getElementById('roadmap-popup-response').textContent = this.getAttribute(
                        'data-response');
                    document.getElementById('roadmap-popup-income').textContent = this.getAttribute(
                        'data-income');
                    document.getElementById('roadmap-popup-order').textContent = this.getAttribute(
                        'data-order');

                    // Update logo tier di dalam pop-up sesuai dengan roadmap-step yang dipilih
                    roadmapPopupLogo.src =
                        `{{ asset('gambar/sellertier${index + 1}.png') }}`; // Ganti logo sesuai index step
                });
            }
        });

        // Event listener untuk tombol "Ajukan naik level"
        document.getElementById('level-up-btn').addEventListener('click', function() {
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
                roadmapSteps[currentLevel].addEventListener('click', function() {
                    const popup = document.getElementById('roadmap-popup');
                    popup.classList.add('visible');
                    popup.classList.remove('hidden');

                    document.getElementById('roadmap-popup-tier').textContent = this.getAttribute(
                        'data-tier');
                    document.getElementById('roadmap-popup-seller').textContent = this.getAttribute(
                        'data-tier');
                    document.getElementById('roadmap-popup-rating').textContent = this.getAttribute(
                        'data-rating');
                    document.getElementById('roadmap-popup-response').textContent = this.getAttribute(
                        'data-response');
                    document.getElementById('roadmap-popup-income').textContent = this.getAttribute(
                        'data-income');
                    document.getElementById('roadmap-popup-order').textContent = this.getAttribute(
                        'data-order');

                    // Update logo tier di dalam pop-up sesuai dengan roadmap-step yang dipilih
                    roadmapPopupLogo.src = `{{ asset('gambar/sellertier${currentLevel}.png') }}`;
                });
            }
        });

        // Sembunyikan pop-up jika mengklik di luar pop-up
        document.addEventListener('click', function(e) {
            const popup = document.getElementById('roadmap-popup');
            const clickedInsidePopup = popup.contains(e.target);
            const clickedOnRoadmapStep = Array.from(roadmapSteps).some(step => step.contains(e.target));

            if (!clickedInsidePopup && !clickedOnRoadmapStep && popup.classList.contains('visible')) {
                popup.classList.remove('visible');
                popup.classList.add('hidden');
            }
        });
    </script>
    <script>
        // ==========================================================================================================================
        //                                       DETAIL PESANAN PRODUK
        // ==========================================================================================================================
        // Fungsi untuk menampilkan atau menyembunyikan input catatan
        function toggleNoteInput() {
            var noteInputSection = document.getElementById('note-input-section');
            var savedNoteSection = document.getElementById('saved-note-section');
            var addNoteButton = document.getElementById('add-note-button');

            // Jika input catatan disembunyikan, tampilkan input dan sembunyikan tombol "Tambahkan Catatan"
            if (noteInputSection.style.display === 'none') {
                noteInputSection.style.display = 'block'; // Tampilkan input catatan
                savedNoteSection.style.display = 'none'; // Sembunyikan catatan yang tersimpan (jika ada)
                addNoteButton.style.display = 'none'; // Sembunyikan tombol "Tambahkan Catatan"
            } else {
                noteInputSection.style.display = 'none'; // Sembunyikan input catatan
                addNoteButton.style.display = 'block'; // Tampilkan kembali tombol "Tambahkan Catatan"
            }
        }

        // Fungsi untuk membatalkan catatan
        function cancelNote() {
            var noteInputSection = document.getElementById('note-input-section');
            var addNoteButton = document.getElementById('add-note-button');
            var savedNoteSection = document.getElementById('saved-note-section');
            var noteText = document.getElementById('saved-note-text').innerText.trim();

            noteInputSection.style.display = 'none'; // Sembunyikan input catatan

            // Jika catatan sudah disimpan sebelumnya, tampilkan kembali bagian catatan yang tersimpan
            if (noteText !== '') {
                savedNoteSection.style.display = 'block'; // Tampilkan catatan yang tersimpan
            } else {
                addNoteButton.style.display = 'block'; // Jika tidak ada catatan, tampilkan tombol "Tambahkan Catatan"
            }
        }

        // Fungsi untuk menyimpan catatan
        function saveNote() {
            var noteInput = document.getElementById('note-input');
            var noteText = noteInput.value.trim();
            var addNoteButton = document.getElementById('add-note-button');
            var savedNoteSection = document.getElementById('saved-note-section');

            // Jika input kosong, hapus catatan yang ada
            if (noteText === '') {
                // Kosongkan catatan yang tersimpan
                document.getElementById('saved-note-text').innerText = '';

                // Sembunyikan bagian catatan yang tersimpan dan tampilkan tombol "Tambahkan Catatan"
                savedNoteSection.style.display = 'none';
                addNoteButton.style.display = 'block';
            } else {
                // Simpan catatan dan tampilkan bagian catatan yang tersimpan
                document.getElementById('saved-note-text').innerText = noteText;

                // Tampilkan catatan yang sudah disimpan dan sembunyikan input
                savedNoteSection.style.display = 'block';
                addNoteButton.style.display = 'none';
            }

            // Sembunyikan input catatan setelah menyimpan
            document.getElementById('note-input-section').style.display = 'none';
        }

        // Fungsi untuk mengedit catatan
        function editNote() {
            var noteText = document.getElementById('saved-note-text').innerText;
            var noteInputSection = document.getElementById('note-input-section');
            var savedNoteSection = document.getElementById('saved-note-section');
            var noteInput = document.getElementById('note-input');

            // Isi input dengan catatan yang ada
            noteInput.value = noteText;

            // Tampilkan kembali input untuk mengedit catatan
            noteInputSection.style.display = 'block';
            savedNoteSection.style.display = 'none'; // Sembunyikan catatan yang tersimpan
        }
    </script>
    <script>
        // ==========================================================================================================================
        //                                       DETAIL PESANAN JASA
        // ==========================================================================================================================
        document.getElementById('image-upload-jasa').addEventListener('change', function(event) {
            var reader = new FileReader();
            var imageUploadBox = document.querySelector('.image-upload-box');

            reader.onload = function(e) {
                imageUploadBox.innerHTML = '';
                var img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '100%';
                img.style.height = '100%';
                img.style.objectFit = 'cover';
                imageUploadBox.appendChild(img);
            }
            reader.readAsDataURL(event.target.files[0]);
        });

        function saveNoteJasa() {
            var noteInput = document.getElementById('note-input-jasa');
            var noteText = noteInput.value.trim();
            var savedNoteSection = document.getElementById('saved-note-section-jasa');
            var noteButtons = document.querySelector('.note-buttons-jasa');

            if (noteText !== '') {
                document.getElementById('saved-note-text-jasa').innerText = noteText;
                savedNoteSection.style.display = 'block';
                noteInput.style.display = 'none';
                noteButtons.style.display = 'none';
            }
        }

        function editNoteJasa() {
            var noteInput = document.getElementById('note-input-jasa');
            var noteText = document.getElementById('saved-note-text-jasa').innerText;
            var savedNoteSection = document.getElementById('saved-note-section-jasa');
            var noteButtons = document.querySelector('.note-buttons-jasa');

            noteInput.value = noteText;
            noteInput.style.display = 'block';
            noteButtons.style.display = 'flex';
            savedNoteSection.style.display = 'none';
        }

        function cancelNoteJasa() {
            var noteInput = document.getElementById('note-input-jasa');
            var noteButtons = document.querySelector('.note-buttons-jasa');
            noteInput.value = '';
            noteButtons.style.display = 'none';
            noteInput.style.display = 'block';
        }

        document.getElementById('note-input-jasa').addEventListener('focus', function() {
            document.querySelector('.note-buttons-jasa').style.display = 'flex';
        });

        document.getElementById('note-input-jasa').addEventListener('input', function() {
            var noteText = this.value.trim();
            if (noteText === '') {
                document.querySelector('.note-buttons-jasa').style.display = 'none';
            }
        });
    </script>
    <script>
        // ==========================================================================================================================
        //                                       INFORMASI AKUN
        // ==========================================================================================================================
    </script>
    <script>
        // ==========================================================================================================================
        //                                       STATUS ORDER
        // ==========================================================================================================================

        $(document).ready(function() {
            // Tampilkan hanya produk dengan status "Belum Dibayar" saat halaman terbuka
            filterOrders("Belum Dibayar");

            // Fungsi ketika tombol filter diklik
            $('.filter-tab').on('click', function() {
                // Menghapus kelas 'active' dari semua tombol filter
                $('.filter-tab').removeClass('active');

                // Menambahkan kelas 'active' ke tombol yang diklik
                $(this).addClass('active');

                // Mendapatkan status filter yang dipilih dari data-filter
                var selectedStatus = $(this).attr('data-filter');

                // Memanggil fungsi filter berdasarkan status yang dipilih
                filterOrders(selectedStatus);
            });

            // Fungsi untuk memfilter pesanan berdasarkan status
            function filterOrders(status) {
                // Sembunyikan semua produk
                $('.order-status-card').hide();

                // Tampilkan produk yang sesuai dengan filter yang dipilih
                var visibleItems = 0;
                $('.order-status-card').each(function() {
                    var orderStatus = $(this).attr('data-status');
                    if (orderStatus === status) {
                        $(this).show(); // Tampilkan produk dengan status yang sesuai
                        visibleItems++;
                    }
                });

                // Jika tidak ada produk yang tampil, munculkan pesan "Belum ada order"
                if (visibleItems === 0) {
                    $('.no-order-message').show();
                } else {
                    $('.no-order-message').hide();
                }
            }
        });
    </script>

    <script>
        // Toggle switch functionality
        const switchElement = document.getElementById('face-id-switch');
        switchElement.addEventListener('click', function() {
            this.classList.toggle('active');
        });
    </script>

    <script>
        function filterTabs(status) {
            document.querySelectorAll('.tabs-buttons-lamaran-misi button').forEach(button => {
                button.classList.remove('active');
            });
            document.getElementById(`tab-${status}`).classList.add('active');

            filterContent();
        }

        function filterCategory(category) {
            document.querySelectorAll('.filter-buttons-lamaran-misi button').forEach(button => {
                button.classList.remove('active');
            });
            document.getElementById(`filter-${category}`).classList.add('active');

            filterContent();
        }

        function filterContent() {
            const activeTab = document.querySelector('.tabs-buttons-lamaran-misi button.active').id.split('-')[1];
            const activeFilter = document.querySelector('.filter-buttons-lamaran-misi button.active')?.id.split('-')[1] ||
                'semua';

            document.querySelectorAll('.card-lamaran-misi').forEach(card => {
                const cardStatus = card.getAttribute('data-status');
                const cardCategory = card.getAttribute('data-category');
                const statusElement = card.querySelector('.status-lamaran-misi'); // Mengambil elemen status

                // Filter berdasarkan status tab yang aktif
                if (activeTab === 'progress') {
                    // Show missions with status 'progres' or 'pending'
                    if ((cardStatus === 'Progres' || cardStatus === 'Pending') && (cardCategory === activeFilter ||
                            activeFilter === 'semua')) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                } else if (activeTab === 'selesai') {
                    // Show missions with status 'success' or 'expired'
                    if ((cardStatus === 'Berhasil' || cardStatus === 'Kadaluarsa') && (cardCategory ===
                            activeFilter || activeFilter === 'semua')) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                } else if (activeTab === 'semua') {
                    // Show all missions regardless of status
                    if (cardCategory === activeFilter || activeFilter === 'semua') {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                }

                // Pengaturan warna background berdasarkan status
                if (cardStatus === 'Berhasil') {
                    statusElement.style.backgroundColor = '#28a745'; // Hijau
                    statusElement.style.color = 'white'; // Warna teks putih
                } else if (cardStatus === 'Kadaluarsa') {
                    statusElement.style.backgroundColor = '#dc3545'; // Merah
                    statusElement.style.color = 'white'; // Warna teks putih
                } else if (cardStatus === 'Progres') {
                    statusElement.style.backgroundColor = '#ffc107'; // Kuning
                    statusElement.style.color = 'black'; // Warna teks hitam
                } else if (cardStatus === 'Pending') {
                    statusElement.style.backgroundColor = '#6f42c1'; // Ungu
                    statusElement.style.color = 'white';
                }
            });
        }

        // Initial load
        filterContent();

        $(document).ready(function() {
            $('.card-lamaran-misi').on('click', function() {
                // Ambil data dari card yang diklik
                var image = $(this).data('image');
                var nameMission = $(this).data('name-mission');
                var reward = $(this).data('reward');
                var endedDate = $(this).data('ended-date');
                var processingTime = $(this).data('processing-time');
                var amountTicket = $(this).data('amount-ticket');
                var remainingDays = $(this).data('remaining-days');
                var requirements = $(this).data('requirements');
                var missionType = $(this).data('mission-type');
                var statusMission = $(this).data('status');
                var missionId = $(this).data('id');
                var evidenceFile = $(this).data('evidence-file'); // Ambil bukti file jika ada

                // Tampilkan popup dan skeleton loader
                $('.popup-lamaran-misi').fadeIn();
                $('.skeleton-section').show();
                $('.popup-content-lamaran-misi').hide();

                // Timer untuk skeleton loader selama 2 detik
                setTimeout(function() {
                    // Update konten popup dengan data yang diambil
                    $('.popup-mission-image-lamaran-misi').attr('src', image);
                    $('.popup-mission-name').text(nameMission);
                    $('.popup-price-lamaran-misi').text(reward);
                    $('#popup-ended-date-lamaran-misi').text(endedDate);
                    $('.popup-processing-time').text(processingTime);
                    $('.popup-amount-ticket').text(amountTicket);
                    $('.popup-remaining-days').text(remainingDays);
                    $('.popup-persyaratan-lamaran-misi').html(requirements);
                    $('.action-button-lamaran-misi').text(missionType);

                    // Kondisi untuk tombol "Unggah Bukti Pekerjaan" pada status Progress
                    if (statusMission === 'Progres') {
                        $('.button-container-lamaran-misi').show();
                        $('#upload-link').attr('href', `/bukti_pekerjaan/${missionId}`);
                        $('.evidence-container-lamaran-misi')
                            .hide(); // Sembunyikan kontainer bukti untuk status 'Progress'
                    } else {
                        $('.button-container-lamaran-misi').hide();
                    }

                    // Menampilkan bukti pekerjaan untuk status Pending dan Berhasil
                    if (statusMission === 'Pending' || statusMission === 'Berhasil') {
                        if (evidenceFile) {
                            $('.evidence-container-lamaran-misi').show();
                            $('#evidence-image').attr('src', '/storage/' +
                                evidenceFile); // Tambahkan path ke gambar

                            // Menampilkan tombol "Ubah Bukti Pekerjaan" hanya jika status adalah 'Pending'
                            if (statusMission === 'Pending') {
                                $('.button-container-ubah-bukti').show();
                                $('#update-evidence-link').attr('href',
                                    `/bukti_pekerjaan/${missionId}`);
                            } else {
                                $('.button-container-ubah-bukti').hide();
                            }
                        } else {
                            $('.evidence-container-lamaran-misi')
                                .hide(); // Sembunyikan jika tidak ada bukti
                        }
                    } else {
                        $('.evidence-container-lamaran-misi').hide();
                    }

                    // Sembunyikan skeleton loader dan tampilkan konten asli
                    $('.skeleton-section').hide();
                    $('.popup-content-lamaran-misi').show();
                }, 2000);

                // Event listener untuk membuka pop-up gambar full-screen saat thumbnail diklik
                $('#evidence-image').on('click', function() {
                    var fullImageSrc = $(this).attr('src');
                    $('#full-evidence-image').attr('src', fullImageSrc);
                    $('.full-image-popup').fadeIn();
                });

                // Event listener untuk menutup pop-up full-screen saat tombol "X" diklik
                $('.close-button-lamaran-misi').on('click', function() {
                    $('.full-image-popup').fadeOut();
                });

                // Event listener untuk menutup pop-up ketika mengklik di luar gambar
                $('.popup-overlay').on('click', function() {
                    $('.full-image-popup').fadeOut();
                });
            });

            // Event listener untuk menutup popup ketika klik di luar area popup
            $(document).on('click', function(event) {
                if (!$(event.target).closest('.popup-content-lamaran-misi, .card-lamaran-misi').length) {
                    $('.popup-lamaran-misi').fadeOut();
                }
            });
        });
    </script>

    <script>
        // Pusat Seller
        const slides = document.querySelectorAll('.feature-slide-pusat-seller');
        let currentSlide = 0;

        function switchSlide() {
            // Remove the active class from the current slide and mark it as inactive
            slides[currentSlide].classList.remove('active-slide-pusat-seller');
            slides[currentSlide].classList.add('inactive-slide-pusat-seller');

            // Move to the next slide
            currentSlide = (currentSlide + 1) % slides.length;

            // Add the active class to the new current slide
            slides[currentSlide].classList.remove('inactive-slide-pusat-seller');
            slides[currentSlide].classList.add('active-slide-pusat-seller');
        }

        // Set interval to switch slides every 3 seconds
        setInterval(switchSlide, 3000);
    </script>
    <script>
        const otpInputs = document.querySelectorAll('.otp-box-verifikasi-otp');

        otpInputs.forEach((input, index) => {
            input.addEventListener('input', () => {
                if (input.value.length === 1 && index < otpInputs.length - 1) {
                    otpInputs[index + 1].focus(); // Pindah ke input berikutnya
                }
            });

            input.addEventListener('keydown', (event) => {
                if (event.key === "Backspace" && input.value === "" && index > 0) {
                    otpInputs[index - 1].focus(); // Pindah ke input sebelumnya jika dihapus
                }
            });
        });
    </script>
@endpush
