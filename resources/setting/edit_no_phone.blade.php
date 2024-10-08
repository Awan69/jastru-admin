@extends('setting.layout.setting')

@section('title', 'Edit Nomber Phone')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('informasi_akun') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Ubah Nomor Handphone</h2>
            </div>
            <div class="warning-card">
                <div class="warning-icon-number">
                    <img src="asset/images/icon/vector.png" alt="Photo" class="warning-icon-img">
                </div>
                <div>
                    Pastikan nomor handphone yang kamu ubah merupakan nomor aktif yang terdaftar whatsapp.
                </div>
            </div>
            <div class="form-group">
                <label for="first-name">Nomor kamu saat ini</label>
                <p>082938192042</p>
                <input type="text" id="first-name" placeholder="Nomor handphone baru">
            </div>
            <div class="card-buttons">
                <button class="ubah-button">
                    Verifikasi
                </button>
            </div>
        </div>
        </div>
    </body>

@endsection
