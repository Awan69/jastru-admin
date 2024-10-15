@extends('partner.layout.partner')

@section('title', 'Partner')

@section('konten')

    <body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Create Partner
                        <a href="{{ url('partners') }}" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('partners') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="partner_name" class="form-control" style="width: 100%" />
                        </div>
                        <div class="mb-3">
                            <label for="">Address</label>
                            <input type="text" name="partner_address" class="form-control" style="width: 100%" />
                        </div>
                        {{-- <div class="mb-3">
                            <label for="">Amount Mission</label>
                            <input type="number" name="amount_mission" class="form-control" style="width: 100%" />
                        </div> --}}
                        <div class="mb-3">
                            <label for="">Logo</label>
                            <input type="file" name="logo" class="form-control" style="width: 100%" />
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" style="width: 100%">Save</button>
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
