@extends('role-permission.layout.role-permission')

@section('title', 'User')

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
                            <h4>Users
                                @can('create user')
                                    <a href="{{ url('users/create') }}" class="btn btn-primary float-end">Add User</a>
                                @endcan
                            </h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive"> <!-- Added responsive div -->
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="max-width: 50px;">Id</th> <!-- Added max-width -->
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th style="max-width: 100px;">Action</th> <!-- Added max-width -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>
                                                    @if (!empty($user->getRoleNames()))
                                                        @foreach ($user->getRoleNames() as $rolename)
                                                            <label class="badge bg-primary mx-1">{{ $rolename }}</label>
                                                        @endforeach
                                                    @endif
                                                </td>
                                                <td>
                                                    <div class="d-flex flex-column">
                                                        @can('update user')
                                                            <a href="{{ url('users/' . $user->id . '/edit') }}"
                                                                class="btn btn-success mb-1">Edit</a>
                                                        @endcan

                                                        @can('delete user')
                                                            <a href="{{ url('users/' . $user->id . '/delete') }}"
                                                                class="btn btn-danger">Delete</a>
                                                        @endcan
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div> <!-- End of table-responsive div -->

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
        <h1 class="h3 mb-2 text-gray-800">User Tables</h1>
        <p class="mb-4">Table ini berisi tentang user-user.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">User Tables
                    @can('create user')
                        <a href="{{ url('users/create') }}" class="btn btn-primary float-end">Add User</a>
                    @endcan
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="users-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Role</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery.js"></script>
        <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script>
            $(function() {
                $('#users-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{!! route('users.index') !!}',
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'role',
                            name: 'role'
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
            function deleteUser(id) {
                Swal.fire({
                    title: 'Are you sure?',
                    text: 'You want to delete this user?',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            type: 'DELETE',
                            url: "{{ url('users/') }}" + "/" + id,
                            data: {
                                "_token": "{{ csrf_token() }}"
                            },
                            success: function(data) {
                                window.location.href = "{{ url('users') }}";
                            }
                        });
                    }
                });
            }
        </script>

    </div>
    <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
@endsection
