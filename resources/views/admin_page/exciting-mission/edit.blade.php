@extends('admin_page.layout.admin_page')

@section('title', 'Edit Exciting Mission')

@section('konten')

    <body>
        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Edit Exciting Mission
                        <a href="{{ url('exciting-missions') }}" class="btn btn-danger float-end">Back</a>
                    </h6>
                </div>
                <div class="card-body">
                    <form action="{{ url('exciting-missions/' . $excitingMission->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label for="partner">Partner</label>
                            <select name="partner_id" class="form-control" style="width: 100%">
                                <option value="">Select Partner</option>
                                @foreach ($partners as $partner)
                                    <option value="{{ $partner->id }}"
                                        {{ $excitingMission->partner_id == $partner->id ? 'selected' : '' }}>
                                        {{ $partner->partner_name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('partner_id')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="name_mission">Mission Name</label>
                            <input type="text" name="name_mission" value="{{ $excitingMission->name_mission }}"
                                class="form-control" style="width: 100%" required />
                            @error('name_mission')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="amount_reward">Fee</label>
                            <input type="number" name="amount_reward" value="{{ $excitingMission->amount_reward }}"
                                class="form-control" style="width: 100%" required />
                            @error('amount_reward')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="amount_ticket">Amount Ticket</label>
                            <input type="number" name="amount_ticket" value="{{ $excitingMission->amount_ticket }}"
                                class="form-control" style="width: 100%" required />
                            @error('amount_ticket')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="processing_time">Processing Time</label>
                            <input type="text" name="processing_time" class="form-control" style="width: 100%" required
                                placeholder="Contoh: 1 bulan, 2 minggu, 3 hari, dll."
                                value="{{ $excitingMission->processing_time }} {{ $excitingMission->processing_time_unit }}" />
                            @error('processing_time')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="mission_requirements">Mission Requirements</label>
                            <textarea name="mission_requirements" class="form-control" style="width: 100%">{{ $excitingMission->mission_requirements }}</textarea>
                            @error('mission_requirements')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="steps">Steps</label>
                            <textarea name="steps" class="form-control" style="width: 100%">{{ $excitingMission->steps }}</textarea>
                            @error('steps')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status">Status</label>
                            <select name="status" class="form-control" style="width: 100%" required>
                                <option value="">Select Status</option>
                                <option value="active" {{ $excitingMission->status == 'active' ? 'selected' : '' }}>Active
                                </option>
                                <option value="hold" {{ $excitingMission->status == 'hold' ? 'selected' : '' }}>Hold
                                </option>
                                <option value="kadaluarsa"
                                    {{ $excitingMission->status == 'kadaluarsa' ? 'selected' : '' }}>Kadaluarsa</option>
                                <option value="progres" {{ $excitingMission->status == 'progres' ? 'selected' : '' }}>
                                    Progres</option>
                                <option value="pendding" {{ $excitingMission->status == 'pendding' ? 'selected' : '' }}>
                                    Pendding</option>
                                <option value="berhasil" {{ $excitingMission->status == 'berhasil' ? 'selected' : '' }}>
                                    Berhasil</option>
                                <option value="parcial" {{ $excitingMission->status == 'parcial' ? 'selected' : '' }}>
                                    Parcial</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="start_date">Start Date</label>
                            <input type="date" name="start_date" value="{{ $excitingMission->start_date }}"
                                class="form-control" style="width: 100%" required />
                            @error('start_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="end_date">End Date</label>
                            <input type="date" name="end_date" value="{{ $excitingMission->end_date }}"
                                class="form-control" style="width: 100%" required />
                            @error('end_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class=" btn btn-primary" style="width: 100%">Update</button>
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
