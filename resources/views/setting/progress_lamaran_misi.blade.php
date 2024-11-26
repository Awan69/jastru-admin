@extends('setting.layout.setting')

@section('title', 'Progress Lamaran & Misi')

@section('konten')

    <body>
        <div class="mobile-container-rekening">
            <!-- Header -->
            <div class="header-lamaran-misi">
                <img src="{{ asset('gambar/Kembali.png') }}" alt="Back">
                <h1>Progress lamaran & misi</h1>
            </div>

            <!-- Tabs -->
            <div class="tabs-buttons-lamaran-misi">
                <button id="tab-progress" class="active" onclick="filterTabs('progress')">Progress</button>
                <button id="tab-selesai" onclick="filterTabs('selesai')">Selesai</button>
            </div>

            <!-- Filter Buttons -->
            <div class="filter-buttons-lamaran-misi">
                <button id="filter-semua" class="active" onclick="filterCategory('semua')">Semua</button>
                <button id="filter-lamaran" onclick="filterCategory('lamaran')">Lamaran</button>
                <button id="filter-misi" onclick="filterCategory('misi')">Misi</button>
            </div>

            <!-- Progress List -->
            <div class="progress-list-lamaran-misi">
                <p class="progress-text-lamaran-misi">Progress kamu</p>
                @foreach ($takenMissions as $mission)
                    @php
                        // Pisahkan persyaratan berdasarkan baris baru
                        $requirementsArray = explode("\n", trim($mission->excitingMission->mission_requirements));

                        // Format menjadi daftar HTML
                        $formattedRequirements =
                            "<div class='persyaratan-title-diambil' style='font-size: 12px; font-weight: 500; color: rgba(60, 60, 60, 1); margin-bottom: 10px;'>Persyaratan & Langkah</div><ol>";
                        foreach ($requirementsArray as $requirement) {
                            $formattedRequirements .=
                                "<li style='font-size: 11px; font-weight: 400; color: rgba(60, 60, 60, 1);'>" .
                                trim(e($requirement)) .
                                '</li>';
                        }
                        $formattedRequirements .= '</ol>';
                    @endphp
                    <div class="card-lamaran-misi" data-status="{{ $mission->status }}" data-category="misi"
                        data-id="{{ $mission->excitingMission->id }}"
                        data-reward="Rp{{ number_format($mission->excitingMission->amount_reward, 0, ',', '.') }}"
                        data-ended-date="{{ $mission->formatted_ended_date }}"
                        data-processing-time="{{ $mission->excitingMission->processing_time }}"
                        data-amount-ticket="{{ $mission->excitingMission->amount_ticket }}"
                        data-remaining-days="{{ $mission->remaining_days }}"
                        data-image="{{ $mission->excitingMission->partner->logo }}"
                        data-requirements="{{ $formattedRequirements }}"
                        data-mission-type="{{ $mission->excitingMission->mission_type }}"
                        data-name-mission="{{ $mission->excitingMission->name_mission }}"
                        data-evidence-file="{{ $mission->files }}">
                        <!-- Card content -->
                        <img src="{{ $mission->excitingMission->partner->logo }}" alt="Job/Mission Image"
                            class="image-lamaran-misi">
                        <div class="content-lamaran-misi">
                            <p class="title-lamaran-misi">{{ $mission->excitingMission->name_mission }}</p>
                            <p class="status-label">Status:</p>
                            <div class="status-lamaran-misi">{{ $mission->status }}</div>
                        </div>
                        <div class="tag-lamaran-misi">Misi</div>
                    </div>
                @endforeach

                <!-- Popup (initially hidden) -->
                <div class="popup-lamaran-misi" style="display: none;">
                    <!-- Skeleton Loader Section (initially visible) -->
                    <div class="skeleton-section">
                        <!-- Header Skeleton -->
                        <div class="popup-header-lamaran-misi skeleton-container">
                            <div class="skeleton skeleton-image"></div>
                            <div class="popup-header-info-lamaran-misi">
                                <h2 class="skeleton skeleton-text skeleton-title"></h2>
                                <div class="skeleton skeleton-text skeleton-price"></div>
                            </div>
                            <button class="skeleton skeleton-button"></button>
                        </div>

                        <!-- Program Info Skeleton -->
                        <div class="popup-program-info-card-lamaran-misi skeleton-container">
                            <div class="skeleton skeleton-icon"></div>
                            <div class="skeleton skeleton-text skeleton-info-text"></div>
                        </div>

                        <!-- Body Skeleton -->
                        <div class="popup-body-lamaran-misi">
                            <div class="popup-info-lamaran-misi">
                                <div class="info-item-lamaran-misi skeleton-container">
                                    <div class="skeleton skeleton-icon"></div>
                                    <div class="skeleton skeleton-text"></div>
                                </div>
                                <div class="info-divider skeleton"></div>
                                <div class="info-item-lamaran-misi skeleton-container">
                                    <div class="skeleton skeleton-icon"></div>
                                    <div class="skeleton skeleton-text"></div>
                                </div>
                                <div class="info-divider skeleton"></div>
                                <div class="info-item-lamaran-misi skeleton-container">
                                    <div class="skeleton skeleton-icon"></div>
                                    <div class="skeleton skeleton-text"></div>
                                </div>
                            </div>
                        </div>

                        <!-- Skeleton Persyaratan & Resources -->
                        <div class="popup-resources-lamaran-misi">
                            <div class="skeleton skeleton-text"></div>
                            <div class="skeleton skeleton-link"></div>
                        </div>
                        <div class="popup-resources-lamaran-misi">
                            <div class="skeleton skeleton-text"></div>
                            <div class="skeleton skeleton-link"></div>
                        </div>
                    </div>

                    <!-- Popup Content Section (initially hidden) -->
                    <div class="popup-content-lamaran-misi" style="display: none;">
                        <!-- Actual content of the popup -->
                        <div class="popup-header-lamaran-misi">
                            <img src="" alt="Mission Image" class="popup-mission-image-lamaran-misi">
                            <div class="popup-header-info-lamaran-misi">
                                <h2 class="popup-mission-name"></h2>
                                <div class="price-section-lamaran-misi">
                                    <p class="popup-price-lamaran-misi"></p>
                                </div>
                            </div>
                            <button class="action-button-lamaran-misi"></button>
                        </div>
                        <div class="popup-program-info-card-lamaran-misi">
                            <div class="popup-program-info-icon-text-lamaran-misi">
                                <img src="asset/images/icon/vector.png" alt="Periode Icon"
                                    class="periode-icon-lamaran-misi">
                                <p class="popup-program-info-lamaran-misi">Program selesai pada <strong
                                        id="popup-ended-date-lamaran-misi"></strong>, hasil diperiksa pada hari kerja dan
                                    dikirim maks <strong>7 hari berikutnya</strong></p>
                            </div>
                        </div>
                        <div class="popup-body-lamaran-misi">
                            <div class="popup-info-lamaran-misi">
                                <div class="info-item-lamaran-misi">
                                    <img src="asset/images/icon/timer.png" alt="Icon 1" class="info-icon-lamaran-misi">
                                    <span class="popup-processing-time"></span> <span>Pengerjaan</span>
                                </div>
                                <div class="info-divider"></div>
                                <div class="info-item-lamaran-misi">
                                    <img src="asset/images/icon/tiket.png" alt="Icon 2" class="info-icon-lamaran-misi">
                                    <span class="popup-amount-ticket"></span> <span>Sisa tiket</span>
                                </div>
                                <div class="info-divider"></div>
                                <div class="info-item-lamaran-misi">
                                    <img src="asset/images/icon/jam_pasir.png" alt="Icon 3"
                                        class="info-icon-lamaran-misi">
                                    <span class="popup-remaining-days"></span> <span>Sisa waktu</span>
                                </div>
                            </div>
                            <div class="popup-persyaratan-lamaran-misi"></div>
                            <div class="popup-resources-lamaran-misi">
                                <h2>Bahan atau resource</h2>
                                <p>1. Link download (<a href="#">Klik di sini</a>)</p>
                            </div>
                            <!-- Button to upload work evidence -->
                            <div class="button-container-lamaran-misi" style="display: none;">
                                <!-- Awalnya disembunyikan -->
                                <a id="upload-link" class="upload-button-lamaran-misi" href="#">Unggah bukti
                                    pekerjaan</a>
                            </div>
                            <!-- Section for displaying uploaded evidence file and update button -->
                            <div class="evidence-container-lamaran-misi" style="display: none;">
                                <h2>Bukti Pekerjaan</h2>
                                <div class="evidence-image-wrapper">
                                    <img id="evidence-image" src="" alt="Bukti Pekerjaan"
                                        class="evidence-thumbnail" />
                                </div>
                                <!-- Button for updating evidence file (only for Pending status) -->
                                <div class="button-container-ubah-bukti" style="display: none;">
                                    <a id="update-evidence-link" class="upload-button-lamaran-misi" href="#">Ubah
                                        Bukti Pekerjaan</a>
                                </div>
                            </div>

                            <!-- Pop-up untuk gambar full-screen -->
                            <div class="full-image-popup" style="display: none;">
                                <div class="popup-overlay"></div>
                                <div class="popup-image-container">
                                    <span class="close-button-lamaran-misi">&times;</span>
                                    <img id="full-evidence-image" src="" alt="Bukti Pekerjaan Full"
                                        class="popup-full-image" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Example Job/Mission Card -->
                <div class="card-lamaran-misi" data-status="Berhasil" data-category="lamaran">
                    <img src="{{ asset('gambar/PT/Kredivo.png') }}" alt="Job/Mission Image" class="image-lamaran-misi">
                    <div class="content-lamaran-misi">
                        <p class="title-lamaran-misi">Registrasi Kredivo dan dapatkan promo menarik</p>
                        <p class="status-label">Status:</p>
                        <div class="status-lamaran-misi">Berhasil</div>
                    </div>
                    <div class="tag-lamaran-misi lamaran">Lamaran</div>
                </div>

                <div class="card-lamaran-misi" data-status="Progress" data-category="lamaran">
                    <img src="{{ asset('gambar/PT/Kredivo.png') }}" alt="Job/Mission Image" class="image-lamaran-misi">
                    <div class="content-lamaran-misi">
                        <p class="title-lamaran-misi">Lamaran kerja PT. ABC</p>
                        <p class="status-label">Status:</p>
                        <div class="status-lamaran-misi">Progress</div>
                    </div>
                    <div class="tag-lamaran-misi lamaran">Lamaran</div>
                </div>

                <div class="card-lamaran-misi" data-status="Pending" data-category="lamaran">
                    <img src="{{ asset('gambar/PT/Kredivo.png') }}" alt="Job/Mission Image" class="image-lamaran-misi">
                    <div class="content-lamaran-misi">
                        <p class="title-lamaran-misi">Lamaran kerja PT. ABC</p>
                        <p class="status-label">Status:</p>
                        <div class="status-lamaran-misi">Pending</div>
                    </div>
                    <div class="tag-lamaran-misi lamaran">Lamaran</div>
                </div>

                <div class="card-lamaran-misi" data-status="Kadaluarsa" data-category="lamaran">
                    <img src="{{ asset('gambar/PT/Kredivo.png') }}" alt="Job/Mission Image" class="image-lamaran-misi">
                    <div class="content-lamaran-misi">
                        <p class="title-lamaran-misi">Lamaran kerja PT. ABC</p>
                        <p class="status-label">Status:</p>
                        <div class="status-lamaran-misi">Kadaluarsa</div>
                    </div>
                    <div class="tag-lamaran-misi lamaran">Lamaran</div>
                </div>
            </div>
        </div>
    </body>
@endsection
