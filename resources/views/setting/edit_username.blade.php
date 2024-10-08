@extends('setting.layout.setting')

@section('title', 'Edit Username')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('informasi_akun') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Ubah username</h2>
            </div>
            <div class="warning-card">
                <div class="warning-icon">
                    <img src="asset/images/icon/vector.png" alt="Photo" class="warning-icon-img">
                </div>
                <div>
                    Kamu bisa mengubah kembali username 30 hari setelah terakhir kali mengubah usernamemu.<br>
                    Terakhir diubah 19 Agustus 2024
                </div>
            </div>
            <div class="form-group">
                <label for="first-name">Username saat ini</label>
                <p>jenlutstore</p>
                <input type="text" id="first-name" placeholder="Username baru">
            </div>

            <div class="form-group">
                <label for="last-name">Preview link</label>
                <input type="text" id="last-name" placeholder="https://jastru.com/jenlutstore">
            </div>
            <div class="card-buttons">
                <button class="ubah-button">
                    Ubah
                </button>
            </div>
        </div>
    </body>

    </html>
