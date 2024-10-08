@extends('setting.layout.setting')

@section('title', 'Edit Name')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('informasi_akunupdate') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Ubah Nama</h2>
            </div>
            <div class="form-group">
                <label for="first-name">Nama depan saat ini</label>
                <p>Jeni lutfi</p>
                <input type="text" id="first-name" placeholder="Nama depan baru">
            </div>

            <div class="form-group">
                <label for="last-name">Nama belakang saat ini</label>
                <p>fauzi</p>
                <input type="text" id="last-name" placeholder="Nama belakang baru">
            </div>
            <div class="card-buttons">
                <button class="ubah-button">
                    Ubah
                </button>
            </div>
        </div>
        </div>
    </body>

@endsection
