@extends('role-permission.layout.role-permission')

@section('title', 'Permission')

@section('konten')

    <body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Permission
                        <a href="{{ url('permissions') }}" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('permissions/' . $permission->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="">Permission Name</label>
                            <input type="text" name="name" value="{{ $permission->name }}" class="form-control"
                                style="width: 100%" />
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
