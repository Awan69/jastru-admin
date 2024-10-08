@extends('jasa.layout.jasa')

@section('tittle', 'Post Jasa')

@section('content')

<body>
    <div class="mobile-container">
        <!-- Review Header -->
        <div class="review-header">
            <a href="/post">
                <button>
                    <img src="{{ asset('gambar/Kembali.png') }}" alt="Back" class="h-5 mr-2">
                </button>
            </a>
            <h3>Ulasan Customer</h3>
        </div>

        <!-- Rating Summary -->
        <div class="rating-summary">
            <div class="rating-summary-content">
                <div class="rating-stars">&#9733;</div>
                <div class="rating-value">4.9</div>
                <div class="rating-text">/5.0 dari 30 ulasan</div>
            </div>

            <!-- Filter Capsules -->
            <div class="filter-capsules">
                <div class="filter-capsule" onclick="filterReviews('Semua')">Semua</div>
                <div class="filter-capsule" onclick="filterReviews('Kualitas')">Kualitas (21)</div>
                <div class="filter-capsule" onclick="filterReviews('Waktu')">Waktu (20)</div>
                <div class="filter-capsule" onclick="filterReviews('Ramah')">Ramah (15)</div>
                <div class="filter-capsule" onclick="filterReviews('Sesuai deskripsi')">Sesuai deskripsi</div>
                <div class="filter-capsule" onclick="filterReviews('Cepat')">Cepat</div>
            </div>
        </div>

        <!-- Review Items -->
        <div class="review-item" data-tags="Kualitas Ramah Sesuai deskripsi">
            <div class="review-item-header">
                <img src="{{ asset('gambar/Ulasan/pp1.png') }}" alt="Profile Photo" class="review-profile-photo">
                <div class="review-content">
                    <div class="reviewer-name">Maryono</div>
                    <div class="review-date">1 bulan yang lalu</div>
                    <div class="review-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <div class="review-capsules">
                        <div class="review-capsule">Kualitas</div>
                        <div class="review-capsule">Ramah</div>
                        <div class="review-capsule">Sesuai deskripsi</div>
                    </div>
                    <div class="review-photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan1.png') }}" alt="Product Photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan2.png') }}" alt="Product Photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan3.png') }}" alt="Product Photo">
                    </div>
                </div>
                <div class="more-options" onclick="reportReview()">...</div>
            </div>
        </div>

        <!-- Additional Reviews for Testing -->
        <div class="review-item" data-tags="Kualitas Cepat Sesuai deskripsi">
            <div class="review-item-header">
                <img src="{{ asset('gambar/Ulasan/pp3.jpeg') }}" alt="Profile Photo" class="review-profile-photo">
                <div class="review-content">
                    <div class="reviewer-name">King Rizz'a</div>
                    <div class="review-date">1 bulan yang lalu</div>
                    <div class="review-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <div class="review-capsules">
                        <div class="review-capsule">Cepat</div>
                        <div class="review-capsule">Sesuai deskripsi</div>
                        <div class="review-capsule">Kualitas</div>
                    </div>
                    <div class="review-photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan6.png') }}" alt="Product Photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan7.png') }}" alt="Product Photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan8.png') }}" alt="Product Photo">
                </div>
                <div class="more-options" onclick="reportReview()">...</div>
            </div>
        </div>

        <div class="review-item" data-tags="Cepat Ramah Kualitas">
            <div class="review-item-header">
                <img src="{{ asset('gambar/Ulasan/pp4.jpg') }}" alt="Profile Photo" class="review-profile-photo">
                <div class="review-content">
                    <div class="reviewer-name">Siti Aminah</div>
                    <div class="review-date">2 minggu yang lalu</div>
                    <div class="review-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <div class="review-capsules">
                        <div class="review-capsule">Cepat</div>
                        <div class="review-capsule">Ramah</div>
                        <div class="review-capsule">Kualitas</div>
                    </div>
                    <div class="review-photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan9.png') }}" alt="Product Photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan10.png') }}" alt="Product Photo">
                    </div>
                </div>
                <div class="more-options" onclick="reportReview()">...</div>
            </div>
        </div>

        <div class="review-item" data-tags="Waktu Ramah">
            <div class="review-item-header">
                <img src="{{ asset('gambar/Ulasan/pp2.png') }}" alt="Profile Photo" class="review-profile-photo">
                <div class="review-content">
                    <div class="reviewer-name">Dodi Sopandi</div>
                    <div class="review-date">3 hari yang lalu</div>
                    <div class="review-rating">
                        <span>&#9733;&#9733;&#9733;&#9733;</span>
                    </div>
                    <div class="review-capsules">
                        <div class="review-capsule">Waktu</div>
                        <div class="review-capsule">Ramah</div>
                    </div>
                    <div class="review-photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan4.png') }}" alt="Product Photo">
                        <img src="{{ asset('gambar/Ulasan/ulasan5.png') }}" alt="Product Photo">
                    </div>
                </div>
                <div class="more-options" onclick="reportReview()">...</div>
            </div>
        </div>
    </div>

</body>

</html>
@endsection
