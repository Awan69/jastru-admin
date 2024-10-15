@extends('role-permission.layout.role-permission')

@section('title', 'Permission')

@section('konten')

    {{-- <div class="mobile-container">
        <div class="container mt-5">
            <div class="d-flex justify-content-between">
                <div class="btn-group">
                    <a href="{{ url('roles') }}" class="btn btn-primary">Roles</a>
                    <a href="{{ url('permissions') }}" class="btn btn-info">Permissions</a>
                    <a href="{{ url('users') }}" class="btn btn-warning">Users</a>
                </div>
                <a href="{{ url('dashboard-09') }}" class="btn btn-secondary">Back to Dashboard</a>
            </div>
        </div>

        <div class="container mt-2">
            <div class="row">
                <div class="col-md-12">

                    @if (session('status'))
                        <div class="alert alert-success">{{ session('status') }}</div>
                    @endif

                    <div class="card mt-3">
                        <div class="card-header">
                            <h4>Permissions
                                @can('create permission')
                                    <a href="{{ url('permissions/create') }}" class="btn btn-primary float-end">Add
                                        Permission</a>
                                @endcan
                            </h4>
                        </div>
                        <div class="card-body">

                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Name</th>
                                        <th width="30%">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    @can('update permission')
                                                        <a href="{{ url('permissions/' . $permission->id . '/edit') }}"
                                                            class="btn btn-success mb-1">Edit</a>
                                                    @endcan

                                                    @can('delete permission')
                                                        <a href="{{ url('permissions/' . $permission->id . '/delete') }}"
                                                            class="btn btn-danger">Delete</a>
                                                    @endcan
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- CDN Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"> --}}


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Permission Tables</h1>
        <p class="mb-4">Table ini berisi tentang permission permission.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Permission Tables
                    @can('create permission')
                        <a href="{{ url('permissions/create') }}" class="btn btn-primary float-end">Add
                            Permission</a>
                    @endcan
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="permission-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
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
            $('#permission-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('permissions.index') !!}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
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
        function deletePermission(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this permission?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Permmison has been deleted.",
                        icon: "success"
                    });
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ url('permissions/') }}" + "/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Deleted!",
                                text: data.status,
                                icon: "success"
                            });
                            $('#permission-table').DataTable().ajax.reload();
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

    {{-- <script>
        // Fungsi untuk menampilkan alert konfirmasi sebelum menghapus data
        function konfirmasiHapus(id) {
            var konfirmasi = confirm('Apakah Anda yakin ingin menghapus data ini?');
            if (konfirmasi) {
                window.location.href = '/permissions/' + id + '/delete';
            }
        }
    </script> --}}

@endsection
