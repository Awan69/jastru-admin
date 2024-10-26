@extends('admin_page.layout.admin_page')

@section('title', 'Tiket Misi Seru')

@section('konten')

    <div class="container-fluid">

        <!-- Back Button -->
        <a href="{{ route('exciting-missions.index') }}" class="btn btn-primary mb-3">Back to Exciting Missions</a>

        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Tiket Misi Seru</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="exciting-mission-tickets-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Exciting Mission</th>
                                <th>User</th>
                                <th>Files</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <script>
        $(function() {
            var excitingMissionId = @json($excitingMissionId);

            $('#exciting-mission-tickets-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: {
                    url: "{{ route('exciting-mission-tickets.index') }}",
                    type: 'GET',
                    data: {
                        exciting_mission_id: excitingMissionId
                    }
                },
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'mission_name',
                        name: 'excitingMission.name_mission'
                    },
                    {
                        data: 'user_name',
                        name: 'user.name'
                    },
                    {
                        data: 'files',
                        name: 'files'
                    },
                    {
                        data: 'status',
                        name: 'status'
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

        function approveTicket(ticketId) {
            $.ajax({
                url: "{{ route('exciting-mission-tickets.update-status') }}",
                type: 'POST',
                data: {
                    ticket_id: ticketId,
                    status: 'success',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Ticket approved successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#exciting-mission-tickets-table').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to approve ticket: ' + xhr.responseJSON.message,
                    });
                }
            });
        }

        function rejectTicket(ticketId) {
            $.ajax({
                url: "{{ route('exciting-mission-tickets.update-status') }}",
                type: 'POST',
                data: {
                    ticket_id: ticketId,
                    status: 'failed',
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: 'Ticket rejected successfully!',
                        showConfirmButton: false,
                        timer: 1500
                    });
                    $('#exciting-mission-tickets-table').DataTable().ajax.reload();
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Error!',
                        text: 'Failed to reject ticket: ' + xhr.responseJSON.message,
                    });
                }
            });
        }
    </script>
@endsection
