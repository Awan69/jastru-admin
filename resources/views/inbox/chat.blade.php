@extends('inbox.layout.inbox')

@section('title', 'Chat')

@section('konten')

    <body>
        <div class="mobile-container-chat">
            <div class="header-chat">
                <div class="chat-header">
                    <!-- Tanda Panah Kembali -->
                    <div class="back-arrow">
                        <a href="/pesan"><i class="bi bi-arrow-left"></i></a>
                    </div>
                    <img src="https://via.placeholder.com/40" class="profile-image" alt="Profile Image">
                    <div class="profile">
                        <span class="chat-name">Kepin design</span>
                        <p>
                            <span class="chat-time">Aktif 2 Jam yang lalu</span>
                        </p>
                    </div>
                </div>
                <div class="right-icon">
                    <i class="bi bi-three-dots"></i>
                </div>
            </div>
            <div class="chat-content">
                <!-- Banner Produk -->
                <div class="banner-product">
                    <img src="https://via.placeholder.com/200x100" alt="Image">
                    <div>
                        <p>Jasa pembuatan website murah profesional</p>
                        <p>Rp. 500.000</p>
                    </div>
                </div>
                <!-- Separator Tanggal -->
                <div class="date-separator">Hari ini</div>
                <!-- Pesan -->
                <div class="chat-message other">
                    <div class="talk-bubble round border tri-right left-top">
                        <p>Halo kak, apa produk masih ada?</p>
                        <span class="chat-time">09.50</span>
                    </div>
                </div>
                <div class="chat-message user">
                    <div class="talk-bubble round border tri-right right-top">
                        <p>Ada dong kak, kakaknya butuh website seperti apa kak?</p>
                        <span class="chat-time">10.09</span>
                    </div>
                </div>
                <div class="chat-message other">
                    <div class="talk-bubble round border tri-right left-top">
                        <p>Website jualan, pengerjaan berapa lama kak?</p>
                        <span class="chat-time">10.19</span>
                    </div>
                </div>
                <div class="chat-message user">
                    <div class="talk-bubble round border tri-right right-top">
                        <p>Estimasi 1-5 halaman 1 bulan kak</p>
                        <span class="chat-time">10.24</span>
                    </div>
                </div>
                <div class="chat-message other">
                    <div class="talk-bubble round border tri-right left-top">
                        <p>Harganya berapa kak website gitu?</p>
                        <span class="chat-time">10.19</span>
                    </div>
                </div>
                <div class="chat-message user">
                    <div class="talk-bubble round border tri-right right-top">
                        <p>1,5 Juta udah dapet domain kak.</p>
                        <span class="chat-time">10.24</span>
                    </div>
                </div>
                <div class="chat-message other">
                    <div class="talk-bubble round border tri-right left-top">
                        <p>Nego dikit jadi 900k bisa ya ka 😁</p>
                        <span class="chat-time">10.19</span>
                    </div>
                </div>
                <div class="chat-message user">
                    <div class="talk-bubble round border tri-right right-top">
                        <p>Turun 1,4 masih boleh kak</p>
                        <span class="chat-time">10.24</span>
                    </div>
                </div>
                <div class="chat-message other">
                    <div class="talk-bubble round border tri-right left-top">
                        <p>Jadi gak bisa ya kak 900k?</p>
                        <span class="chat-time">10.19</span>
                    </div>
                </div>
                <div class="chat-message user">
                    <div class="talk-bubble round border tri-right right-top">
                        <p>Waduh gakbisa kak kalo segitu maaf ya🥲</p>
                        <span class="chat-time">10.24</span>
                    </div>
                </div>
            </div>

            <!-- Pilihan Cepat -->
            <div class="quick-replies">
                <button>Ada yang bisa saya bantu?</button>
                <button>Terima Kasih!</button>
                <button>Mohon maaf</button>
            </div>

            <div class="input-message">
                <!-- Button Tambah di Samping Kiri -->
                <button class="add-button"><i class="bi bi-plus-circle"></i></button>
                <!-- Form Tulis Pesan -->
                <input type="text" id="chat-input" placeholder="Tulis pesan kamu..">

                <!-- Icon Kirim (tersembunyi jika tidak ada input) -->
                <button id="send-btn" style="display: none;">
                    <i class="fa right-icon">
                        <img src="{{ asset('asset/images/pesan/kirim.svg') }}" alt="">
                    </i>
                </button>

                <!-- Icon File Earmark (ditampilkan jika tidak ada input) -->
                <button class="file" id="file">
                    <i class="bi bi-file-earmark-text" style="color: black;"></i>
                </button>
            </div>


            <div class="popup-container" id="popup">
                <div class="popup-grid">
                    <div class="popup-item" id="nego">
                        <i class="bi bi-file-earmark-text"></i>
                        <span>Nego harga</span>
                    </div>
                    <div class="popup-item">
                        <i class="bi bi-pencil"></i>
                        <span>Kirim file</span>
                    </div>
                    <div class="popup-item">
                        <i class="bi bi-lightning"></i>
                        <span>Respon cepat</span>
                    </div>
                    <div class="popup-item">
                        <i class="bi bi-camera"></i>
                        <span>Buka kamera</span>
                    </div>
                </div>
            </div>

            <div id="negoPopup" class="nego-popup">
                <div class="nego-content">
                    <div class="popup-header">
                        <button class="back-button" onclick="closeNegoPopup()">
                            <i class="bi bi-arrow-left"></i>
                        </button>
                        <h4>Nego harga</h4>
                    </div>
                    <p class="info">Lakukan diskusi atau sepakati pada kolom chat terlebih dahulu dengan seller sebelum
                        membuat form nego harga.</p>
                    <h7>Produk / Jasa</h7>
                    <div class="product-info">
                        <img src="https://via.placeholder.com/100" alt="Produk/jasa" class="product-image">
                        <div class="product-details">
                            <h5>Jasa pembuatan website murah profesional</h5>
                            <span class="product-price">Rp. 500.000</span>
                        </div>
                        <a href="#" class="change-product">Pilih</a>
                    </div>
                    <div class="price-section">
                        <div class="price-field">
                            <label>Harga asli</label>
                            <input type="text" value="500.000" disabled>
                        </div>
                        <div class="price-field">
                            <label>Nego</label>
                            <input type="number" placeholder="0">
                        </div>
                    </div>
                    <div class="note-section">
                        <label>Masukan catatan (Opsional)</label>
                        <textarea placeholder="Masukan catatan atau request se detail mungkin seperti jenis, varian produk, durasi, dll."
                            maxlength="150"></textarea>
                        <small class="char-count">0/150</small>
                    </div>
                    <button class="submit-btn">Buat harga nego</button>
                </div>
            </div>

        </div>
    </body>

    </html>
@endsection
