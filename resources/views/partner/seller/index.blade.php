@extends('partner.layout.partner')

@section('title', 'Seller')

@section('konten')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Seller</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Seller</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="seller-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Daftar Produk</th>
                                <th>Akun Bank</th>
                                <th>Jumlah Order</th>
                                <th>Nama Toko</th>
                                <th>Status</th>
                                <th>Level</th>
                                <th>Penghasilan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#seller-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('seller.index') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'user_id',
                        name: 'user_id'
                    },
                    {
                        data: 'product_id',
                        name: 'product_id'
                    },
                    {
                        data: 'bank_account',
                        name: 'bank_account'
                    },
                    {
                        data: 'order_id',
                        name: 'order_id'
                    },
                    {
                        data: 'shop_name',
                        name: 'shop_name'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'level',
                        name: 'level'
                    },
                    {
                        data: 'income',
                        name: 'income',
                        render: function(data) {
                            return 'Rp. ' + formatRupiah(data);
                        }
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });

            // Verify button click
            $('#seller-table').on('click', '.verify-btn', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah Anda yakin ingin memverifikasi seller ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, verifikasi!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('seller/verify') }}/" + id,
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

            // Ban button click
            $('#seller-table').on('click', '.ban-btn', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah Anda yakin ingin mem-ban seller ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, ban!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('seller/ban') }}/" + id,
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
            $('#seller-table').on('click', '.delete-btn', function() {
                var id = $(this).data('id');
                Swal.fire({
                    title: 'Konfirmasi',
                    text: "Apakah Anda yakin ingin menghapus seller ini?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            url: "{{ url('seller') }}/" + id,
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

            // Unban button click event
            $(document).on('click', '.unban-btn', function() {
                var sellerId = $(this).data('id');
                $.ajax({
                    url: '/seller/unban/' + sellerId,
                    type: 'POST',
                    data: {
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        alert(response.success);
                        table.ajax.reload(); // Reload the DataTable
                    },
                    error: function(xhr) {
                        alert(xhr.responseJSON.error);
                    }
                });
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
        });
    </script>

@endsection
