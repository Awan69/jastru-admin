@push('scripts')
    <script>
        //-------------------------------------------------------------------------------
        //--------------------------------LISTINF.BLADE.PHP------------------------------
        //-------------------------------------------------------------------------------
        document.addEventListener('DOMContentLoaded', function() {
            const notificationIcon = document.getElementById('notification-icon');
            const notificationPopup = document.getElementById('notification-popup');

            notificationIcon.addEventListener('click', function(event) {
                event.preventDefault();

                // Toggle animation and classes
                if (notificationPopup.classList.contains('show')) {
                    notificationPopup.classList.remove('show');
                    notificationPopup.classList.add('hide');
                    setTimeout(() => {
                        notificationPopup.style.display = 'none';
                        notificationIcon.classList.remove('clicked');
                    }, 500); // Match this with animation duration
                } else {
                    notificationPopup.style.display = 'block';
                    notificationPopup.classList.remove('hide');
                    notificationPopup.classList.add('show');
                    notificationIcon.classList.add('clicked');
                }
            });

            // Close the popup when clicking outside of it
            document.addEventListener('click', function(event) {
                if (!notificationPopup.contains(event.target) && !notificationIcon.contains(event.target)) {
                    if (notificationPopup.classList.contains('show')) {
                        notificationPopup.classList.remove('show');
                        notificationPopup.classList.add('hide');
                        setTimeout(() => {
                            notificationPopup.style.display = 'none';
                            notificationIcon.classList.remove('clicked');
                        }, 500); // Match this with animation duration
                    }
                }
            });
        });



        document.addEventListener("DOMContentLoaded", function () {
            var tabs = document.querySelectorAll('.tabs a');
            var moreProductsContainer = document.getElementById('more-products');
            var carouselProductsContainer = document.getElementById('carousel-products');

            var products = {
                "untuk-kamu": [
                    { name: "Jasa Animasi Website Interaktif", price: "Rp 1.000.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.5 (75 ulasan)" },
                    { name: "Jasa Cyber Security Anti DDOS", price: "Rp 750.000", discount: "Rp 1.500.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.5 (75 ulasan)" },
                    { name: "Jasa Desain Cover Buku", price: "Rp 150.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.9 (85 ulasan)" },
                    { name: "Jasa Desain Cover Novel", price: "Rp 200.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.7 (55 ulasan)" },
                    { name: "Jasa Pembuatan Banner Promosi", price: "Rp 500.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.7 (50 ulasan)" },
                    { name: "Jasa Banner Digital Marketing", price: "Rp 450.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.6 (80 ulasan)" },
                    { name: "Jasa Desain Poster Event", price: "Rp 300.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.8 (65 ulasan)" },
                    { name: "Jasa Desain Poster Online", price: "Rp 250.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.5 (70 ulasan)" }
                ],
                "banner": [
                    { name: "Jasa Pembuatan Banner Promosi", price: "Rp 500.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.7 (50 ulasan)" },
                    { name: "Jasa Banner Digital Marketing", price: "Rp 450.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.6 (80 ulasan)" }
                ],
                "poster": [
                    { name: "Jasa Desain Poster Event", price: "Rp 300.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.8 (65 ulasan)" },
                    { name: "Jasa Desain Poster Online", price: "Rp 250.000", image: "{{ asset('gambar/Post/Post-produk1.png') }}", rating: "★ 4.5 (70 ulasan)" }
                ],
                "coverbook": [
                    { name: "Jasa Desain Cover Buku", price: "Rp 150.000", image: "{{ asset('gambar/Post/Post-produk2.png') }}", rating: "★ 4.9 (85 ulasan)" },
                    { name: "Jasa Desain Cover Novel", price: "Rp 200.000", image: "{{ asset('gambar/Post/Post-produk3.png') }}", rating: "★ 4.7 (55 ulasan)" }
                ]
            };

            function loadProducts(category, container, isCarousel = false) {
                container.innerHTML = ''; // Kosongkan kontainer
                const productClass = isCarousel ? 'product-box-carousel' : 'product-box-more';

                products[category].forEach(function (product) {
                    var productHTML = `
                        <a href="{{ url('post') }}" class="bg-white shadow-md rounded-md p-4 ${productClass}">
                            <div class="product-image">
                                <img src="${product.image}" alt="${product.name}">
                            </div>
                            <p class="mt-2 text-sm">${product.name}</p>
                            <p class="text-red-600 font-bold">${product.price} ${product.discount ? `<span class="line-through">${product.discount}</span>` : ''}</p>
                            <p class="text-gray-600 text-xs">${product.rating}</p>
                        </a>
                    `;
                container.insertAdjacentHTML('beforeend', productHTML);
                });
            }

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function (e) {
                    e.preventDefault();

                    // Hapus kelas 'active' dari semua tab
                    tabs.forEach(function (t) {
                        t.classList.remove('active');
                    });

                    // Tambahkan kelas 'active' pada tab yang diklik
                    this.classList.add('active');

                    // Muat produk sesuai kategori
                    var category = this.getAttribute('data-category');
                    loadProducts(category, moreProductsContainer);
                    loadProducts(category, carouselProductsContainer, true);
                });
            });

            // Muat produk pertama kali (default: untuk-kamu)
            loadProducts('untuk-kamu', moreProductsContainer);
            loadProducts('untuk-kamu', carouselProductsContainer, true);
        });

        //-------------------------------------------------------------------------------
        //--------------------------------POST.BLADE.PHP------------------------------
        //-------------------------------------------------------------------------------
        // Ketika bola mencapai titik bawah, tampilkan gambar produk
        const redBall = document.getElementById('red-ball');
        const productImage = document.getElementById('product-image');
        const productDetails = document.getElementById('product-details');

        redBall.addEventListener('animationend', function () {
            redBall.style.display = 'none';
            productImage.classList.add('show');
            setTimeout(() => {
                productImage.classList.remove('show');
                productDetails.classList.add('show');
            }, 1000); // Waktu delay antara kemunculan gambar kecil dan halaman produk
        });

        function toggleBookmark(el) {
            // Toggle the "active" class to change the color and apply the bounce animation
            el.classList.toggle('active');

            // Show magic sparkles
            const sparkles = document.getElementById('sparkles');
            sparkles.classList.add('show-sparkles');

            // Remove the sparkles after animation ends
            setTimeout(() => {
                sparkles.classList.remove('show-sparkles');
            }, 1000); // Adjust time as per the animation duration
        }

        // Pop Up Spesifikasi
        document.addEventListener('DOMContentLoaded', function() {
            const btnSpesifikasi = document.getElementById('btn-spesifikasi');
            const popup = document.getElementById('popup');
            const btnOk = document.querySelector('.btn-ok');
            const overlay = document.getElementById('overlay');

            btnSpesifikasi.addEventListener('click', function() {
                overlay.style.display = 'block'; // Menampilkan overlay
                popup.classList.remove('hide');
                popup.classList.add('show');
            });

            btnOk.addEventListener('click', function() {
                popup.classList.remove('show');
                popup.classList.add('hide');
                setTimeout(() => {
                    overlay.style.display = 'none'; // Menyembunyikan overlay setelah animasi selesai
                }, 600); // Sesuaikan dengan durasi animasi hide
            });
        });

        document.addEventListener('DOMContentLoaded', function() {
            const cartButton = document.querySelector('.troli-button');
            const cartPopup = document.getElementById('cart-popup');
            const closeButton = document.getElementById('close-popup');
            const specButtons = document.querySelectorAll('.spec-button');
            const overlay = document.getElementById('overlay');

            // Show pop-up
            cartButton.addEventListener('click', function(event) {
                event.preventDefault();
                overlay.style.display = 'block';
                cartPopup.classList.remove('hide');
                cartPopup.classList.add('show');
            });

            // Close pop-up with "X" button
            closeButton.addEventListener('click', function() {
                cartPopup.classList.remove('show');
                cartPopup.classList.add('hide');
                setTimeout(() => {
                    overlay.style.display = 'none';
                }, 300);  // Match the duration of the hide animation
            });

            // Close pop-up with overlay click
            overlay.addEventListener('click', function() {
                cartPopup.classList.remove('show');
                cartPopup.classList.add('hide');
                setTimeout(() => {
                    overlay.style.display = 'none';
                }, 300);  // Match the duration of the hide animation
            });

            // Spec button active state toggle
            specButtons.forEach(button => {
                button.addEventListener('click', function() {
                    specButtons.forEach(btn => btn.classList.remove('active'));
                    this.classList.add('active');
                });
            });
        });


        // Fungsi untuk menampilkan deskripsi panjang
        function toggleDescription() {
            const shortDescription = document.querySelector('.short-description');
            const longDescription = document.querySelector('.long-description');
            const moreDescriptionText = document.querySelector('.more-description-text');
            const moreDescriptionArrow = document.querySelector('.more-description-arrow');

            if (longDescription.style.display === 'none' || longDescription.style.display === '') {
                longDescription.style.display = 'block';
                shortDescription.style.display = 'none';
                moreDescriptionText.textContent = 'Sembunyikan'; // Change text
                moreDescriptionArrow.classList.add('rotate-up'); // Rotate chevron up
            } else {
                longDescription.style.display = 'none';
                shortDescription.style.display = 'block';
                moreDescriptionText.textContent = 'Selengkapnya'; // Change text
                moreDescriptionArrow.classList.remove('rotate-up'); // Rotate chevron down
            }
        }

        //-------------------------------------------------------------------------------
        //--------------------------------POST.BLADE.PHP---------------------------------
        //-------------------------------------------------------------------------------
        function filterReviews(tag) {
            const reviewItems = document.querySelectorAll('.review-item');
            if (tag === 'Semua') {
                reviewItems.forEach(item => {
                    item.style.display = 'block';
                });
            } else {
                reviewItems.forEach(item => {
                    if (item.dataset.tags.includes(tag)) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            }
        }

        function reportReview() {
            alert('Laporan Anda telah diterima.');
        }
    </script>
@endpush
