@extends('setting.layout.setting')

@section('title', 'Buat Voucher')

@section('konten')

    <body>
        <div class="mobile-container-rekening">
            <!-- Header -->
            <div class="rekening-header">
                <img src="{{ asset('gambar/Kembali.png') }}" alt="back">
                <h1>Level saya</h1>
            </div>

            <!-- Seller Level Section -->
            <div class="seller-level">
                <div class="level-title">
                    <img id="seller-badge" src="{{ asset('gambar/sellertier.png') }}" alt="seller badge">
                </div>
                <div id="level-text" class="level-text">Seller Baru</div>
                <div class="level-roadmap">
                    <div class="roadmap-line"></div>
                    <img src="{{ asset('gambar/sellertier.png') }}" alt="roadmap step" class="roadmap-step active" data-tier="Seller Baru" data-rating="4.0" data-response="70%" data-income="500 Rb" data-order="3">
                    <img src="{{ asset('gambar/sellertier_nonaktif.png') }}" alt="roadmap step" class="roadmap-step" data-tier="Seller 1" data-rating="4.5" data-response="85%" data-income="1 Jt" data-order="10">
                    <img src="{{ asset('gambar/sellertier_nonaktif.png') }}" alt="roadmap step" class="roadmap-step" data-tier="Seller 2" data-rating="4.8" data-response="90%" data-income="5 Jt" data-order="50">
                    <img src="{{ asset('gambar/sellertier_nonaktif.png') }}" alt="roadmap step" class="roadmap-step" data-tier="Seller Top Seller" data-rating="5.0" data-response="95%" data-income="10 Jt" data-order="100">
                </div>

            </div>

            <!-- Seller Performance Section -->
            <div class="seller-performance">
                <div class="performance-title-main">Performa Seller</div>

                <div class="performance-card">
                    <div class="performance-title">
                        <h2>Rating</h2>
                        <span>4.7</span>
                    </div>
                    <div class="rating-container">
                        <div class="rating-bar">
                            <div class="rating-bar-fill"></div>
                            <div class="rating-bar-indicator-white">
                                <div class="rating-bar-indicator"></div>
                            </div>
                        </div>
                        <div class="rating-numbers">
                            <span>0.0</span>
                            <span class="middle-rating">4.0</span>
                            <span>5.0</span>
                        </div>
                    </div>

                    <div class="level-requirement">
                        <span>Syarat naik level</span>
                        <span class="level-requirement-value">4.0</span>
                    </div>
                    <div class="requirement-check">
                        <img src="{{ asset('gambar/level-reqiuriemen-check.png') }}" alt="Checklist Icon" class="checkmark-icon">
                        <span>Memenuhi syarat naik level I</span>
                    </div>
                </div>

                <div class="performance-card">
                    <div class="performance-title">
                        <h2>Response rate</h2>
                        <span>80%</span>
                    </div>
                    <div class="rating-bar">
                        <div class="rating-bar-fill"></div>
                        <div class="rating-bar-indicator-white">
                            <div class="rating-bar-indicator"></div>
                        </div>
                    </div>
                    <div class="rating-numbers">
                        <span>0%</span>
                        <span class="middle-rating">80%</span>
                        <span>100%</span>
                    </div>
                    <div class="level-requirement">
                        <span>Syarat naik level</span>
                        <span>80%</span>
                    </div>
                    <div class="requirement-check">
                        <img src="{{ asset('gambar/level-reqiuriemen-check.png') }}" alt="Checklist Icon" class="checkmark-icon">
                        <span>Memenuhi syarat naik level I</span>
                    </div>
                </div>

                <div class="performance-card">
                    <div class="performance-title">
                        <h2>Pendapatan</h2>
                        <span>800Rb</span>
                    </div>
                    <div class="rating-container">
                        <div class="rating-bar">
                            <div class="rating-bar-fill"></div>
                            <div class="rating-bar-indicator-white">
                                <div class="rating-bar-indicator"></div>
                            </div>
                        </div>
                        <div class="rating-numbers">
                            <span>0</span>
                            <span class="middle-rating">800Rb</span>
                            <span>1Jt</span>
                        </div>
                    </div>

                    <div class="level-requirement">
                        <span>Syarat naik level</span>
                        <span>800Rb</span>
                    </div>
                    <div class="requirement-check">
                        <img src="{{ asset('gambar/level-reqiuriemen-check.png') }}" alt="Checklist Icon" class="checkmark-icon">
                        <span>Memenuhi syarat naik level I</span>
                    </div>
                </div>

                <div class="order-card">
                    <div class="order-header">
                        <span class="order-title">Order</span>
                        <span class="order-count">3/3</span>
                    </div>

                    <div class="level-targets">
                        <div class="level-target">
                            <span class="target-title">Level new target</span>
                            <span class="target-value">3</span>
                        </div>
                        <div class="level-target">
                            <span class="target-title">Level I target</span>
                            <span class="target-value">25</span>
                        </div>
                        <div class="level-target">
                            <span class="target-title">Level II target</span>
                            <span class="target-value">50</span>
                        </div>
                        <div class="level-target">
                            <span class="target-title">Top seller target</span>
                            <span class="target-value">100</span>
                        </div>
                    </div>

                    <div class="level-requirement">
                        <span>Syarat naik level</span>
                        <span>3</span>
                    </div>
                    <div class="requirement-check">
                        <img src="{{ asset('gambar/level-reqiuriemen-check.png') }}" alt="Checklist Icon" class="checkmark-icon">
                        <span>Memenuhi syarat naik level I</span>
                    </div>
                </div>


            </div>

            <!-- Footer untuk tombol naik level -->
            <div class="voucher-footer">
                <button id="level-up-btn">Ajukan naik level</button>
            </div>
            <div class="overlay hidden"></div>
            <!-- Pop-up -->
            <div id="roadmap-popup" class="roadmap-popup hidden">
                <div class="roadmap-popup-content">
                    <div class="roadmap-popup-header">
                        <img src="{{ asset('gambar/sellertier.png') }}" alt="Tier Logo" id="roadmap-popup-logo">
                        <div>
                            <p id="roadmap-popup-tier">Tingkat</p>
                            <p id="roadmap-popup-seller">Seller Baru</p>
                        </div>
                    </div>
                    <div class="roadmap-popup-body">
                        <p>Performa Level</p>
                        <div class="roadmap-performance-item">
                            <p>Rating</p>
                            <p id="roadmap-popup-rating">4.0</p>
                        </div>
                        <div class="roadmap-performance-item">
                            <p>Response rate</p>
                            <p id="roadmap-popup-response">70%</p>
                        </div>
                        <div class="roadmap-performance-item">
                            <p>Pendapatan</p>
                            <p id="roadmap-popup-income">500 Rb</p>
                        </div>
                        <div class="roadmap-performance-item">
                            <p>Order</p>
                            <p id="roadmap-popup-order">3</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
