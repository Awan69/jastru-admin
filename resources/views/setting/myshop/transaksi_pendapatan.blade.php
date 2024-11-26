@extends('setting.layout.setting')

@section('title', 'Edit Nomber Phone')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="/pendapatan">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Transaksi saya</h2>
            </div>

            <!-- New card section with buttons -->
            <div class="filter-card">
                <button class="filter-button">
                    Semua <img src="asset/images/icon/arrow_down.png" alt="Arrow Down" class="arrow-down">
                </button>
                <button class="filter-button">
                    Waktu <img src="asset/images/icon/arrow_down.png" alt="Arrow Down" class="arrow-down">
                </button>
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
                        <p class="payment-description-income">Penarikan saldo</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income-two">+350.000</p>
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
                        <p class="payment-description-income">Penarikan saldo</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income-two">+350.000</p>
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
                        <p class="payment-description-income">Penarikan saldo</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income-two">+350.000</p>
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
                        <p class="payment-description-income">Penarikan saldo</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income-two">+350.000</p>
                </button>
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Penarikan saldo</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income-two">+350.000</p>
                </button>
                <button class="transaction-item-income">
                    <img src="{{ asset('asset/images/icon/reepet.png') }}" alt="payment" class="transaction-icon-income">
                    <div class="transaction-detail-income">
                        <p class="payment-description-income">Penarikan saldo</p>
                        <p class="payment-date-income">12 Agustus 2024</p>
                    </div>
                    <p class="transaction-amount-income-two">+350.000</p>
                </button>
            </div>
        </div>
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                const filterButtons = document.querySelectorAll('.filter-button');

                // Dropdown options for "Semua"
                const semuaDropdown = document.createElement('div');
                semuaDropdown.classList.add('filter-dropdown');
                semuaDropdown.innerHTML = `
        <div class="dropdown-item" data-filter="pembayaran">Pembayaran</div>
        <div class="dropdown-item" data-filter="penarikan">Penarikan</div>
    `;

                // Dropdown options for "Waktu"
                const waktuDropdown = document.createElement('div');
                waktuDropdown.classList.add('filter-dropdown');
                waktuDropdown.innerHTML = `
        <div class="dropdown-item" data-filter="minggu-lalu">Minggu Lalu</div>
        <div class="dropdown-item" data-filter="bulan-lalu">Bulan Lalu</div>
        <div class="dropdown-item" data-filter="dua-bulan-lalu">Dua Bulan Lalu</div>
    `;

                // Attach dropdowns to buttons
                filterButtons[0].parentNode.appendChild(semuaDropdown);
                filterButtons[1].parentNode.appendChild(waktuDropdown);

                // Show/hide dropdowns when buttons are clicked
                filterButtons.forEach((button, index) => {
                    button.addEventListener('click', function() {
                        document.querySelectorAll('.filter-dropdown').forEach(dropdown => {
                            dropdown.style.display = 'none'; // Hide other dropdowns
                        });

                        const dropdown = index === 0 ? semuaDropdown : waktuDropdown;

                        // Position dropdown below the button
                        const buttonRect = button.getBoundingClientRect();
                        dropdown.style.top = `${buttonRect.bottom}px`;
                        dropdown.style.left = `${buttonRect.left}px`;
                        dropdown.style.width = `${buttonRect.width}px`;
                        dropdown.style.display = 'block'; // Show the corresponding dropdown
                    });
                });

                // Hide dropdown when clicking outside
                document.addEventListener('click', function(event) {
                    if (!event.target.closest('.filter-button')) {
                        document.querySelectorAll('.filter-dropdown').forEach(dropdown => {
                            dropdown.style.display = 'none'; // Hide all dropdowns
                        });
                    }
                });
            });
        </script>

    </body>

@endsection
