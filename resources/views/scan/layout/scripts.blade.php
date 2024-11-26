@push('scripts')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            // Tab switching functionality
            const tabButtons = document.querySelectorAll('.tab-button');
            const tabContents = document.querySelectorAll('.tab-content');

            tabButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const tabNumber = this.getAttribute('data-tab');

                    // Update active state for tab buttons
                    tabButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');

                    // Show the correct tab content
                    tabContents.forEach(content => content.classList.remove('active'));
                    document.getElementById('tab-' + tabNumber).classList.add('active');
                });
            });

            // Bookmark toggle functionality
            const bookmarkButtons = document.querySelectorAll('.bookmark-btn');

            bookmarkButtons.forEach(bookmark => {
                bookmark.addEventListener('click', function() {
                    bookmark.classList.toggle('bi-bookmark');
                    bookmark.classList.toggle('bi-bookmark-fill');
                });
            });

            // Camera permission popup functionality
            const openCamButton = document.querySelector(".confirm-open-cam");
            const popupOverlay = document.querySelector(".confirm-cam");
            const closeButton = document.querySelector(".confirm-cam .close-popup");
            const popupButton = document.querySelector(".confirm-cam .popup-button");

            if (openCamButton && popupOverlay && closeButton && popupButton) {
                openCamButton.addEventListener("click", function() {
                    popupOverlay.style.display = "flex";
                });

                closeButton.addEventListener("click", function() {
                    popupOverlay.style.display = "none";
                });

                popupButton.addEventListener("click", function() {
                    popupOverlay.style.display = "none";
                    window.location.href = "/open_cam";
                });

                window.addEventListener("click", function(event) {
                    if (event.target === popupOverlay) {
                        popupOverlay.style.display = "none";
                    }
                });
            } else {
                console.error("One or more elements for the camera popup not found. Check the selectors.");
            }
        });

        document.addEventListener("DOMContentLoaded", function() {
            const confirmPopup = document.getElementById("confirmPopup");
            const confirmVerificationButton = document.getElementById("confirmVerification");
            const primaryButton = document.querySelector(".btn-primary");

            if (!confirmPopup || !confirmVerificationButton || !primaryButton) {
                console.error("Elemen yang dibutuhkan tidak ditemukan di DOM.");
                return;
            }

            // Show confirmation popup when primary button is clicked
            primaryButton.addEventListener("click", function(event) {
                event.preventDefault();

                // Ensure that only one popup is active
                if (confirmPopup.style.display === "flex") return;

                confirmPopup.style.display = "flex";
            });

            // Close the popup when clicking outside of the popup content
            window.addEventListener("click", function(event) {
                // Close popup if the click is outside of the content
                if (event.target === confirmPopup) {
                    confirmPopup.style.display = "none";
                }
            });

            // Confirm verification and send the request
            confirmVerificationButton.addEventListener("click", async function() {
                try {
                    const csrfToken = document.querySelector('meta[name="csrf-token"]');
                    if (!csrfToken) {
                        console.error("CSRF token tidak ditemukan.");
                        return;
                    }

                    // Send POST request to complete verification
                    const response = await fetch("/complete-verification", {
                        method: "POST",
                        headers: {
                            "Content-Type": "application/json",
                            "X-CSRF-TOKEN": csrfToken.getAttribute("content"),
                        },
                        body: JSON.stringify({
                            // Optional: Send any data here if needed
                        }),
                    });

                    const result = await response.json();

                    if (result.success) {
                        window.location.href = "/myshop";
                    } else {
                        console.error("Verification failed: ", result.message || "Unknown error");
                    }
                } catch (error) {
                    console.error("Error during verification:", error);
                } finally {
                    // Close the popup after completing the action
                    confirmPopup.style.display = "none";
                }
            });
        });

        function closePopup() {
            document.getElementById("confirmPopup").style.display = "none";
        }

        document.addEventListener('DOMContentLoaded', function() {
            const video = document.getElementById("cameraStream");
            const captureKTPButton = document.getElementById("captureKtp");
            const captureSelfieButton = document.getElementById("captureSelfie");

            // Ensure the buttons are visible and not overlapped
            if (captureKTPButton && captureSelfieButton) {
                captureKTPButton.style.zIndex = '10'; // Ensure the capture button is on top
                captureSelfieButton.style.zIndex = '10'; // Ensure the capture button is on top
            }

            // Function to start the camera
            async function startCamera() {
                if (!video) return;

                try {
                    const stream = await navigator.mediaDevices.getUserMedia({
                        video: true
                    });
                    video.srcObject = stream;
                } catch (error) {
                    console.error("Error accessing the camera:", error);
                }
            }

            async function capturePhoto() {
                try {
                    if (!video) return;

                    const canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

                    const base64Image = canvas.toDataURL('image/png').replace(/^data:image\/png;base64,/, '');

                    const response = await fetch("{{ route('save.ktp.image') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            ktp_image: base64Image
                        })
                    });

                    const result = await response.json();

                    if (result.success) {
                        window.location.href = "{{ route('cf_ktp') }}"; // Redirect after success
                    }
                } catch (error) {
                    console.error("Error capturing photo:", error);
                }
            }

            async function captureSelfie() {
                try {
                    if (!video) return;

                    const canvas = document.createElement('canvas');
                    canvas.width = video.videoWidth;
                    canvas.height = video.videoHeight;
                    canvas.getContext('2d').drawImage(video, 0, 0, canvas.width, canvas.height);

                    const base64Image = canvas.toDataURL('image/png').replace(/^data:image\/png;base64,/, '');

                    const response = await fetch("{{ route('save.selfie.image') }}", {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                        body: JSON.stringify({
                            selfie_image: base64Image
                        })
                    });

                    const result = await response.json();

                    if (result.success) {
                        window.location.href = "{{ route('cf_selfie') }}"; // Redirect after success
                    }
                } catch (error) {
                    console.error("Error capturing selfie:", error);
                }
            }

            // Start camera feed
            startCamera();

            // Event listeners for the capture buttons
            if (captureKTPButton) {
                captureKTPButton.addEventListener('click', capturePhoto);
            }
            if (captureSelfieButton) {
                captureSelfieButton.addEventListener('click', captureSelfie);
            }
        });
    </script>
@endpush
