@extends('inbox.layout.inbox')

@section('title', 'Pesan')

@section('konten')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pesan</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    </head>

    <body>
        <div class="mobile-container">
            <div class="header-with-icons">
                <a href="{{ route('dashboard_user') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h1 class="header-title">Pesan</h1>
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
                        <button id="btn-unread" class="active">Semua</button>
                        <button id="btn-starred">Sudah dibaca</button>
                        <button id="btn-all">Belum dibaca</button>
                        <button id="btn-sub">Langganan</button>
                    </div>
                </div>
                <div class="your-chat">Chat Kamu</div>
                <div class="chat-container">
                    <a href="{{ route('chat') }}" class="chat-item">
                        <div class="hover-bg"></div>
                        <div class="chat-info">
                            <img src="asset/images/inbox_chat/pchat1.jpg" alt="User ">
                            <div>
                                <div class="chat-name">Asep koding</div>
                                <div class="chat-message">Baik kak saya tunggu yaa 😊</div>
                            </div>
                            <div class="status online"></div>
                        </div>
                        <div class="chat-time">12 Aug</div>
                    </a>
                    <a href="{{ route('chat') }}" class="chat-item">
                        <div class="hover-bg"></div>
                        <div class="chat-info">
                            <img src="asset/images/inbox_chat/pchat2.jpg" alt="User ">
                            <div>
                                <div class="chat-name">Kepin design</div>
                                <div class="chat-message">Waduh gabisa kak kalo segitu maaf yaaa 😢</div>
                            </div>
                            <div class="status offline"></div>
                            <div class="chat-new">1</div>
                        </div>
                    </a>
                </div>
            </div>
            <section>
                <div>
                    @include('navbar.layout.nav_bar')
                </div>
            </section>
        </div>
    </body>

    </html>
@endsection
