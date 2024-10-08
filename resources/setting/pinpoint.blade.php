@extends('setting.layout.setting')

@section('title', 'Add Address')

@section('konten')

    <body>
        <div class="mobile-container">
            <div class="header">
                <a href="{{ route('add_alamat') }}">
                    <button class="back-button">
                        <img src="asset/images/icon/backarrow.png" alt="Back">
                    </button>
                </a>
                <h2>Pinpoint Map</h2>
            </div>

            <!-- Enlarged map with adjusted height -->
            <div id="Map" class="map-container"></div>

            <!-- New class for the address description and icon -->
            <div class="address-info-container">
                <img src="asset/images/icon/pinpoint.png" alt="Pin" class="pinpoint-icon">
                <div id="address-description" class="address-description">
                    Perumahan Buana Subang Kencana, Blk. C No.94, Karanganyar.
                </div>
            </div>

            <div class="form-group button-group">
                <a href="{{ route('informasi_alamat') }}">
                    <button class="confirm-button">Konfirmasi pin</button>
                </a>
            </div>
        </div>
        <script>
            var map = L.map('Map').setView([-6.575, 107.7636], 15);

            var bounds = [
                [-11.0, 94.0],
                [6.1, 141.0]
            ];
            map.setMaxBounds(bounds);
            map.on('drag', function() {
                map.panInsideBounds(bounds, {
                    animate: false
                });
            });

            // Add OpenStreetMap tiles
            var OpenStreetMap_DE = L.tileLayer('http://{s}.tile.openstreetmap.de/tiles/osmde/{z}/{x}/{y}.png', {
                maxZoom: 18,
                attribution: '&copy; <a href="http://www.openstreetmap.org/copyright">OpenStreetMap</a>'
            });

            OpenStreetMap_DE.addTo(map);

            // Initial marker
            var marker = L.marker([-6.575, 107.7636]).addTo(map);
            marker.bindPopup("<b>Perumahan Buana Subang Kencana</b><br>Blk. C No.94, Karanganyar.").openPopup();

            // Function to update address info using reverse geocoding
            function updateAddress(lat, lng) {
                // URL Nominatim untuk reverse geocoding
                var nominatimURL =
                    `https://nominatim.openstreetmap.org/reverse?format=json&lat=${lat}&lon=${lng}&zoom=18&addressdetails=1`;

                // Fetch request untuk mendapatkan nama tempat dan alamat lengkap berdasarkan koordinat
                fetch(nominatimURL)
                    .then(response => response.json())
                    .then(data => {
                        // Ambil nama tempat (misalnya, rumah, kantor, masjid), jika ada
                        var placeName = data.address.amenity || data.address.building || "";

                        // Ambil alamat lengkap
                        var fullAddress = data.display_name || "Tidak ditemukan alamat";

                        // Update teks pada halaman dengan alamat lengkap
                        document.getElementById('address-description').textContent = fullAddress;

                        // Update posisi marker
                        marker.setLatLng([lat, lng]);

                        // Display address and place name if available
                        var popupContent = `<span>${fullAddress}</span>`;

                        // Jika nama tempat ditemukan, tambahkan di atas alamat
                        if (placeName) {
                            popupContent = `<b>${placeName}</b><br>${fullAddress}`;
                        }

                        // Bind the popup with updated content
                        marker.bindPopup(popupContent).openPopup();
                    })
                    .catch(error => {
                        console.error("Error fetching reverse geocoding data:", error);
                    });
            }

            // Event listener untuk klik pada peta
            map.on('click', function(e) {
                var lat = e.latlng.lat;
                var lng = e.latlng.lng;
                updateAddress(lat, lng); // Panggil fungsi untuk update alamat berdasarkan klik
            });
        </script>

    </body>

@endsection
