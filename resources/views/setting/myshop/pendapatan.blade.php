@extends('setting.layout.setting')

@section('title', 'Edit Nomber Phone')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="/myshop">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Pendapatan saya</h2>
            </div>
            <div class="warning-card">
                <div class="warning-icon-number">
                    <img src="asset/images/icon/vector.png" alt="Photo" class="warning-icon-img">
                </div>
                <div>
                    Estimasi waktu penarikan maksimal 1-3 hari, saldo akan masuk setelah verifikasi selesai.
                </div>
            </div>
            <div class="saldo-section-income">
                <div class="saldo-header-income">
                    <p class="saldo-title-income">Saldo</p>
                    <button class="withdraw-button-income">Tarik saldo</button>
                </div>
                <h3 class="saldo-amount-income">Rp 900.000</h3>
                <div class="balance-info-income">
                    <p class="balance-name-income">Bank utama : BRI</p>
                    <p class="balance-number-income">712********</p>
                </div>
            </div>
            <div class="bank-info-income">
                <img src="asset/images/icon/dompet.png" alt="Bank Icon" class="bank-icon-income">
                <p class="bank-text-income">Transaksi</p>
                <p class="bank-arrow-income">></p>
            </div>

            <div class="transaction-header-income">
                <p>Transaksi terbaru</p>
            </div>
            <div class="transaction-list-income">
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Pembayaran oleh mfinnegan</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income">+350.000</p>
                </button>
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Pembayaran oleh jerry</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income">+350.000</p>
                </button>
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Pembayaran oleh jerry</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income">+350.000</p>
                </button>
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Pembayaran oleh jerry</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income">+350.000</p>
                </button>
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Pembayaran oleh irfan_m</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income">+350.000</p>
                </button>
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Pembayaran oleh Dony</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income">+350.000</p>
                </button>

            </div>
            <a href="/transaksi_pendapatan" class="see-more-link-income">Lihat lebih</a>
        </div>
    </body>

@endsection
