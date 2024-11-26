@push('scripts')
    <script>
        document.querySelectorAll('.jasa-lainnya').forEach(item => {
            item.addEventListener('click', openOverlay);
        });

        function openOverlay() {
            const overlay = document.getElementById('overlay');
            overlay.style.display = 'flex';
        }

        function closeOverlay() {
            const overlay = document.getElementById('overlay');
            overlay.style.display = 'none';
        }

        document.getElementById('close-overlay').addEventListener('click', closeOverlay);

        const jasaTab = document.getElementById('jasa-tab');
        const produkTab = document.getElementById('produk-tab');

        const kontenJasa = document.getElementById('jasa');
        const kontenProduk = document.getElementById('produk');

        jasaTab.addEventListener('click', () => {
            kontenJasa.classList.add('show', 'active');
            kontenProduk.classList.remove('show', 'active');
            jasaTab.classList.add('active');
            produkTab.classList.remove('active');
        });

        produkTab.addEventListener('click', () => {
            kontenProduk.classList.add('show', 'active');
            kontenJasa.classList.remove('show', 'active');
            produkTab.classList.add('active');
            jasaTab.classList.remove('active');
        });

        const flashDealContainer = document.querySelector('.flash-deal-container');

        let isDown = false;
        let startX;
        let scrollLeft;

        flashDealContainer.addEventListener('mousedown', (e) => {
            isDown = true;
            startX = e.pageX - flashDealContainer.offsetLeft;
            scrollLeft = flashDealContainer.scrollLeft;
        });

        flashDealContainer.addEventListener('mouseleave', () => {
            isDown = false;
        });

        flashDealContainer.addEventListener('mouseup', () => {
            isDown = false;
        });

        flashDealContainer.addEventListener('mousemove', (e) => {
            if (!isDown) return;
            e.preventDefault();
            const x = e.pageX - flashDealContainer.offsetLeft;
            const walk = (x - startX) * 2; // Adjust scroll speed by multiplying
            flashDealContainer.scrollLeft = scrollLeft - walk;
        });
    </script>

    <script>
        function filterContent(category) {
            document.querySelectorAll('.notif-filter-button').forEach(button => {
                button.classList.remove('active');
            });

            document.getElementById('filter-' + category).classList.add('active');

            document.querySelectorAll('.notif-item').forEach(item => {
                if (category === 'all' || item.classList.contains(category)) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        window.onload = function() {
            filterContent('all');
        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Filter functionality
            $('.filter-button').on('click', function() {
                const filter = $(this).data('filter');
                $('.filter-button').removeClass('active');
                $(this).addClass('active');

                if (filter === 'all') {
                    $('tr[data-type]').show();
                } else {
                    $('tr[data-type]').hide();
                    $(tr[data - type = "${filter}"]).show();

                    // Hanya menampilkan toko yang memiliki produk atau jasa yang sesuai
                    $('tr.store-row').each(function() {
                        const storeId = $(this).data('store');
                        const hasItems = $(
                                tr[data - store = "${storeId}"][data - type = "${filter}"]: visible)
                            .length > 0;
                        if (hasItems) {
                            $(this).show();
                        } else {
                            $(this).hide();
                        }
                    });
                }
            });

            // Select all functionality
            $('#select-all').on('change', function() {
                const checked = $(this).is(':checked');
                $('input.product-checkbox').prop('checked', checked);
                updateTotal();
            });

            // Store select functionality
            $('.store-checkbox').on('change', function() {
                const store = $(this).data('store');
                const checked = $(this).is(':checked');
                $(input.product - checkbox[data - store = "${store}"]).prop('checked', checked);
                updateTotal();
            });

            // Update total price based on selected items
            $('input.product-checkbox').on('change', updateTotal);

            // Increase and decrease quantity functionality
            $('.btn-increase').on('click', function() {
                const input = $(this).siblings('input[type="number"]');
                let quantity = parseInt(input.val());
                quantity += 1;
                input.val(quantity);
                updateTotal();
            });

            $('.btn-decrease').on('click', function() {
                const input = $(this).siblings('input[type="number"]');
                let quantity = parseInt(input.val());
                if (quantity > 1) {
                    quantity -= 1;
                    input.val(quantity);
                    updateTotal();
                }
            });

            // Event listener for heart buttons
            document.addEventListener('DOMContentLoaded', function() {
                const heartButtons = document.querySelectorAll('.heart-button');

                heartButtons.forEach(button => {
                    button.addEventListener('click', function(event) {
                        event.preventDefault();
                        button.classList.toggle('active');
                    });
                });
            });

            // Event listener for trash buttons
            $('.delete-button').on('click', function() {
                $(this).closest('tr').remove();
                updateTotal(); // Update total setelah item dihapus
            });

            // Update total function
            function updateTotal() {
                let total = 0;
                $('input.product-checkbox:checked').each(function() {
                    const price = $(this).data('price');
                    const quantity = parseInt($(this).closest('tr').find('input[type="number"]').val());
                    total += price * quantity;
                });
                $('#total-price').text('Rp' + total.toLocaleString('id-ID'));
            }
        });
    </script>
@endpush
