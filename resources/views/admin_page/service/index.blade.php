@extends('admin_page.layout.admin_page')

@section('title', 'Jasa')

@section('konten')

    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Daftar Jasa</h6>
                <a href="{{ route('service.create') }}" class="btn btn-primary float-end">Add Service</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="service-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Seller</th>
                                <th>Nama Service</th>
                                <th>SKU</th>
                                <th>Gambar</th>
                                <th>Waktu Service</th>
                                <th>Harga</th>
                                <th>Detail Service</th>
                                <th>Kategori Service</th>
                                <th>Brand</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal untuk menampilkan gambar besar -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="Gambar Besar" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $(document).ready(function() {
            var table = $('#service-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('service.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'seller_id',
                        name: 'seller_id'
                    },
                    {
                        data: 'service_name',
                        name: 'service_name'
                    },
                    {
                        data: 'sku',
                        name: 'sku'
                    },
                    {
                        data: 'img',
                        name: 'img',
                        orderable: false,
                        searchable: false,
                        render: function(data, type, row) {
                            var images = row.images;
                            var imageHtml = '';
                            var fileExtension = data.split('.').pop().toLowerCase();

                            if (images.length > 0) {
                                images.forEach(function(image) {
                                    var fileUrl = "{{ asset('images/services') }}/" + image
                                        .image; // Adjust the path if needed
                                    var fileExtension = image.image.split('.').pop()
                                        .toLowerCase();

                                    // Check if the file is an image
                                    if (['jpg', 'jpeg', 'png', 'gif'].includes(
                                            fileExtension)) {
                                        imageHtml += '<img src="' + fileUrl +
                                            '" alt="Product Image" style="width: 100px; height: auto; margin: 2px;" class="clickable-image" data-toggle="modal" data-target="#imageModal" data-image-url="' +
                                            fileUrl + '">';
                                    } else {
                                        // If not an image, create a download link
                                        imageHtml += '<a href="' + fileUrl +
                                            '" download style="color: blue; text-decoration: underline;">' +
                                            image.image + '</a>';
                                    }
                                });
                            } else {
                                imageHtml = 'No image';
                            }

                            return imageHtml;
                        }
                    },
                    {
                        data: 'service_time',
                        name: 'service_time'
                    },
                    {
                        data: 'price',
                        name: 'price',
                        render: function(data) {
                            return 'Rp. ' + formatRupiah(data);
                        }
                    },
                    {
                        data: 'detail_service',
                        name: 'detail_service'
                    },
                    {
                        data: 'category_service',
                        name: 'category_service'
                    },
                    {
                        data: 'brand',
                        name: 'brand'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            $(document).on('click', '.clickable-image', function() {
                var imageUrl = $(this).data('image-url');
                $('#modalImage').attr('src', imageUrl);
            });

            function formatRupiah(angka) {
                if (angka === null || angka === "") {
                    return '0';
                }
                var rupiah = '';
                var angkanya = angka.toString().split('');
                var panjang = angkanya.length;
                for (var i = 0; i < panjang; i++) {
                    if (i > 0 && (i % 3 === 0)) {
                        rupiah += '.';
                    }
                    rupiah += angkanya[panjang - i - 1];
                }
                return rupiah.split('').reverse().join('');
            }

            // Verify button click
            $('#service-table').on('click', '.verify-btn', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah Anda yakin ingin memverifikasi service ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, verifikasi!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('service/verify') }}/" + id,
                            type: 'POST',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                Swal.fire('Berhasil!', response.success, 'success');
                                table.ajax.reload();
                            },
                            error: function(response) {
                                Swal.fire('Gagal!', response.responseJSON.error,
                                    'error');
                            }
                        });
                    }
                });
            });

            // Delete button click
            $('#service-table').on('click', '.delete-btn', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah Anda yakin ingin menghapus service ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('service') }}/" + id,
                            type: 'DELETE',
                            data: {
                                _token: '{{ csrf_token() }}'
                            },
                            success: function(response) {
                                Swal.fire('Berhasil!', response.success, 'success');
                                table.ajax.reload();
                            },
                            error: function(response) {
                                Swal.fire('Gagal!', response.responseJSON.error,
                                    'error');
                            }
                        });
                    }
                });
            });
        });
    </script>

@endsection
