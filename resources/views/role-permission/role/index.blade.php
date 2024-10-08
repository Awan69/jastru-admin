@extends('role-permission.layout.role-permission')

@section('title', 'Role')

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
                            <h4>
                                Roles
                                @can('create role')
                                    <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">Add Role</a>
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
                                    @foreach ($roles as $role)
                                        <tr>
                                            <td>{{ $role->id }}</td>
                                            <td>{{ $role->name }}</td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <a href="{{ url('roles/' . $role->id . '/give-permissions') }}"
                                                        class="btn btn-warning mb-1">
                                                        Add / Edit Role Permission
                                                    </a>

                                                    @can('update role')
                                                        <a href="{{ url('roles/' . $role->id . '/edit') }}"
                                                            class="btn btn-success mb-1">
                                                            Edit
                                                        </a>
                                                    @endcan

                                                    @can('delete role')
                                                        <a href="{{ url('roles/' . $role->id . '/delete') }}"
                                                            class="btn btn-danger">
                                                            Delete
                                                        </a>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script> --}}


    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Role Tables</h1>
        <p class="mb-4">Table ini berisi tentang role-role.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Role Tables
                    @can('create role')
                        <a href="{{ url('roles/create') }}" class="btn btn-primary float-end">Add Role</a>
                    @endcan
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="roles-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>
                                    ID
                                </th>
                                <th>
                                    Name
                                </th>
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
            $('#roles-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('roles.index') !!}',
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
        function deleteRole(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this role?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ url('roles/') }}" + "/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            window.location.href = "{{ url('roles') }}";
                        }
                    });
                }
            });
        }
    </script>

    {{-- <script>
        function konfirmasiHapus(id) {
            var konfirmasi = confirm('Apakah Anda yakin ingin menghapus role ini?');
            if (konfirmasi) {
                window.location.href = '/roles/' + id + '/delete';
            }
        }
    </script> --}}

@endsection
