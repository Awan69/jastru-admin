@extends('setting.layout.setting')

@section('title', 'Informasi Alamat')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('setting') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Alamat kamu</h2>
            </div>
            <div class="card-informasi-alamat">
                <p>Rumah</p>
                <p>
                    Citra Nirwana Residence 2, Jalan Kalisari, Wonokoyo, Kedungkandang. blok A no 7
                </p>
                <div class="not-pinpoint-button-informasi-alamat">
                    <i class="fas fa-map-marker-alt"></i> Belum pinpoint
                </div>
                <div class="card-informasi-alamat-buttons">
                    <button class="ubah-button-informasi-alamat">
                        Ubah
                    </button>
                </div>
            </div>
            <div class="card-informasi-alamat">
                <p>Rumah</p>
                <p>
                    Citra Nirwana Residence 2, Jalan Kalisari, Wonokoyo, Kedungkandang. blok A no 7
                </p>
                <div class="pinpoint-button-informasi-alamat">
                    <i class="fas fa-map-marker-alt"></i> Sudah pinpoint
                </div>
                <div class="card-informasi-alamat-buttons">
                    <button class="ubah-button-informasi-alamat">
                        Ubah
                    </button>
                </div>
            </div>
            <div class="fixed-footer">
                <div class="button-group-products-services">
                    <a href="{{ route('add_alamat') }}">
                        <button class="footer-button-primary2">Tambah alamat</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
@endsection
