@extends('role-permission.layout.role-permission')

@section('title', 'User')

@section('konten')

    <body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit User
                        <a href="{{ url('users') }}" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('users/' . $user->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                                style="width: 100%" />
                            @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Email</label>
                            <input type="text" name="email" readonly value="{{ $user->email }}" class="form-control"
                                style="width: 100%" />
                        </div>
                        <div class="mb-3">
                            <label for="">Password</label>
                            <input type="text" name="password" class="form-control" style="width: 100%" />
                            @error('password')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="">Roles</label>
                            <select name="roles" class="form-control" style="width: 100%">
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role }}" {{ in_array($role, $userRoles) ? 'selected' : '' }}>
                                        {{ $role }}
                                    </option>
                                @endforeach
                            </select>
                            @error('roles')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Update</button>
                        </div>
                    </form>
                </div>
            </div>

            @if ($errors->any())
                <ul class="alert alert-warning">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
        </div>

        <!-- CDN Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    </body>

@endsection
