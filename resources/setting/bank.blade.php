@extends('setting.layout.setting')

@section('title', 'Bank Saya')

@section('konten')
    <div class="mobile-container">
        <div class="header-mybank">
            <a href="/setting">
                <button class="back-button">
                    <img src="{{ asset('asset/images/icon/backarrow.png') }}" alt="Back">
                </button>
            </a>
            <h2>Rekening Bank Saya</h2>
        </div>

        <div class="mybank-scroll">
            <div class="card-mybank">
                <div class="header-card-mybank">
                    <div class="bank-info">
                        <h4>BRI</h4>
                        <p class="number-mybank">01928495829</p>
                    </div>
                    <div class="badge-mybank">Utama</div>
                </div>
                <div class="bottom-card-mybank">
                    <!-- Trigger modal -->
                    <button class="detail-mybank" data-bs-toggle="modal" data-bs-target="#detailMybankModal">Lihat
                        detail</button>
                    <button class="delete-mybank">Hapus rekening</button>
                </div>
            </div>
        </div>

        <div class="mybank-footer">
            <button class="add-bank-button">Tambah rekening bank</button>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade mybank-modal" id="detailMybankModal" tabindex="-1" aria-labelledby="detailMybankModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-bottom">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailMybankModalLabel">Detail rekening</h5>
                </div>
                <div class="modal-body">
                    <div class="detail-mybank-rekening">
                        <div class="detail-item">
                            <span class="label">Nama bank:</span>
                            <span class="value">BRI</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Nama pemilik:</span>
                            <span class="value">J**i L***i F***i</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Nomor rekening:</span>
                            <span class="value">01928495829</span>
                        </div>
                        <div class="detail-item">
                            <span class="label">Cabang bank:</span>
                            <span class="value">-</span>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary mybank-close-btn" data-bs-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
@endsection
