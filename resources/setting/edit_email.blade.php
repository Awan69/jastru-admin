@extends('setting.layout.setting')

@section('title', 'Edit Email')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('informasi_akun') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Ubah email</h2>
            </div>
            <div class="warning-card">
                <div class="warning-icon">
                    <img src="asset/images/icon/vector.png" alt="Photo">
                </div>
                <div>
                    Kamu bisa mengubah kembali username 30 hari setelah terakhir kali mengubah usernamemu.<br>
                    Terakhir diubah 19 Agustus 2024
                </div>
            </div>
            <div class="form-group">
                <label for="first-name">Email kamu saat ini</label>
                <p>Jenil*********18@gmail.com</p>
                <input type="text" id="first-name" placeholder="Email baru">
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
