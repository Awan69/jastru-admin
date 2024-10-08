@extends('inbox.layout.inbox')

@section('title', 'Pesan')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header-with-icons">
                <a href="/beranda" class="back-button">
                    <i class="fa fa-arrow-left"></i>
                </a>
                <i class="right-icon">
                    <img src="{{ asset('asset/images/pesan/tandatanya.png') }}" alt="Help">
                </i>
            </div>
            <header class="top-bar">
                <div class="search-bar-container">
                    <div class="icon-with-border">
                        <i class="bi bi-sliders"></i>
                    </div>
                    <div class="search-bar">
                        <i class="bi bi-search"></i>
                        <input type="text" placeholder="Cari pesan">
                    </div>
                </div>
            </header>

            <div class="chat-list hide-scrollbar">
                <div class="search-filter-container">
                    <div class="filter-container">
                        <button id="btn-unread">All</button>
                        <button id="btn-starred">Sudah dibaca</button>
                        <button id="btn-all">Belum dibaca</button>
                        <button id="btn-sub">Langganan</button>
                    </div>
                </div>
                <h6 class="fw-bolder">Chat Kamu</h6>
                <div class="chat-item">
                    <div class="chat-info">
                        <img src="https://via.placeholder.com/50" alt="User">
                        <div>
                            <div class="chat-name">Asep koding</div>
                            <div class="chat-message">Baik kak saya tunggu yaa 😊</div>
                        </div>
                    </div>
                    <div class="chat-time">12 Aug</div>
                </div>
                <a href="{{ route('chat') }}" class="chat-item">
                    <div class="chat-info">
                        <img src="https://via.placeholder.com/50" alt="User">
                        <div>
                            <div class="chat-name">Kepin design</div>
                            <div class="chat-message">Waduh gabisa kak kalo segitu maaf yaaa 😢</div>
                        </div>
                    </div>
                    <div class="chat-time">1</div>
                </a>
            </div>
            <section>
                <div class="footer">
                    <a href="{{ route('beranda') }}" class="footer-link">
                        <div>
                            <img src="asset/images/navigasi/beranda.png" alt="Beranda">
                            <span>Beranda</span>
                        </div>
                    </a>
                    <a href="{{ route('pesan') }}" class="footer-link">
                        <div>
                            <img src="asset/images/navigasi/chat_inbox.png" alt="Pesan">
                            <span>Pesan</span>
                        </div>
                    </a>
                    <div>
                        <img src="asset/images/navigasi/profil.png" alt="Profile" class="img-profil">
                        <span>Profile</span>
                    </div>
                    <a href="/pekerjaan2">
                        <div>
                            <img src="asset/images/navigasi/pekerjaan.png" alt="Pekerjaan">
                            <span>Pekerjaan</span>
                        </div>
                    </a>
                    <a href="{{ route('setting') }}" class="footer-link">
                        <div>
                            <img src="asset/images/navigasi/setting.png" alt="Setting">
                            <span>Setting</span>
                        </div>
                    </a>
                </div>
            </section>
        </div>
    </body>

    </html>
@endsection
