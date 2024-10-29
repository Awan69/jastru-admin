@extends('partner.layout.partner')

@section('title', 'Partners')

@section('konten')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Partners</h1>
        <p class="mb-4">Table ini berisi tentang data Partners.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Partners
                    @can('create partner')
                        <a href="{{ url('partners/create') }}" class="btn btn-primary float-end">Add Partners</a>
                    @endcan
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="partner-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Logo</th>
                                <th>Nama Partner</th>
                                <th>Alamat</th>
                                <th>Jumlah Misi</th>
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
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        $(function() {
            $('#partner-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('partners.index') !!}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'logo',
                        name: 'logo',
                        render: function(data, type, row) {
                            return '<img src="{{ asset('images/partners/') }}/' + data +
                                '" width="50px" height="50px">';
                        }
                    },
                    {
                        data: 'partner_name',
                        name: 'partner_name'
                    },
                    {
                        data: 'partner_address',
                        name: 'partner_address'
                    },
                    {
                        data: 'exciting_missions_count',
                        name: 'exciting_missions_count'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    }
                ]
            });
        });
    </script>

    <script>
        function deletePartner(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this partner?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Partner has been deleted.",
                        icon: "success"
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ url('partners/') }}" + "/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Deleted!",
                                text: data.status,
                                icon: "success"
                            });
                            $('#partner-table').DataTable().ajax.reload();
                        },
                        error: function(xhr) {
                            Swal.fire({
                                title: "Error!",
                                text: "Something went wrong.",
                                icon: "error"
                            });
                        }
                    });
                }
            });
        }
    </script>

@endsection
