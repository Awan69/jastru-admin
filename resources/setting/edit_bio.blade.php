@extends('setting.layout.setting')

@section('title', 'Edit Bio')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('informasi_akun') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Ubah Bio</h2>
            </div>
            <div class="form-group">
                <label for="bio">Bio kamu saat ini</label>
                <input type="text" id="bio"
                    placeholder="Programmer berpengalaman. Jual E-book roadmap to fullstack-developer Certified google developer">
                </input>
            </div>
            <div class="card-buttons">
                <button class="ubah-button">
                    Ubah
                </button>
            </div>
        </div>
        </div>
    </body>

    </html>
