@extends('admin_page.layout.admin_page')

@section('title', 'Create Exciting Mission')

@section('konten')

    <body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Create Exciting Mission
                        <a href="{{ url('exciting-missions') }}" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('exciting-missions') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label for="partner">Partner</label>
                            <select name="partner_id" class="form-control" style="width: 100%">
                                <option value="">Select Partner</option>
                                @foreach ($partners as $partner)
                                    <option value="{{ $partner->id }}">{{ $partner->partner_name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label for="name_mission">Mission Name</label>
                            <input type="text" name="name_mission" class="form-control" style="width: 100%" required />
                        </div>
                        <div class="mb-3">
                            <label for="amount_reward">Fee</label>
                            <input type="number" name="amount_reward" class="form-control" style="width: 100%" required />
                        </div>
                        <div class="mb-3">
                            <label for="amount_ticket">Amount Ticket</label>
                            <input type="number" name="amount_ticket" class="form-control" style="width: 100%" required />
                        </div>
                        <div class="mb-3">
                            <label for="processing_time">Processing Time</label>
                            <input type="text" name="processing_time" class="form-control" style="width: 100%" required
                                placeholder="Contoh: 1 bulan, 2 minggu, 3 hari, dll." />
                            <small>Format: nilai unit (contoh: 1 bulan, 2 minggu, 3 hari, dll.)</small>
                        </div>
                        <div class="mb-3">
                            <label for="mission_requirements">Mission Requirements</label>
                            <textarea name="mission_requirements" class="form-control" style="width: 100%" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="steps">Steps</label>
                            <textarea name="steps" class="form-control" style="width: 100%" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" style="width: 100%" required>
                                <option value="">Select Status</option>
                                <option value="active">Active</option>
                                <option value="hold">Hold</option>
                                <option value="kadaluarsa">Kadaluarsa</option>
                                <option value="progres">Progres</option>
                                <option value="pendding">Pendding</option>
                                <option value="berhasil">Berhasil</option>
                                <option value="parcial">Parcial</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" class="form-control" style="width: 100%" required />
                        </div>
                        <div class="mb-3">
                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" class="form-control" style="width: 100%" required />
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
