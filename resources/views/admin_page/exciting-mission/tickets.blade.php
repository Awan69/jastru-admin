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

    <!-- Modal untuk menampilkan gambar besar -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Gambar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="Gambar Besar" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery .dataTables.min.js"></script>
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
                        name: 'files',
                        render: function(data, type, row) {
                            if (data) {
                                var fileUrl = "{{ asset('storage/bukti_pekerjaan') }}/" + data;
                                var fileExtension = data.split('.').pop().toLowerCase();

                                // Cek apakah file adalah gambar
                                if (['jpg', 'jpeg', 'png', 'gif'].includes(fileExtension)) {
                                    return '<img src="' + fileUrl +
                                        '" alt="File" style="width: 100px; height: auto;" class="clickable-image" data-toggle="modal" data-target="#imageModal" data-image-url="' +
                                        fileUrl + '">';
                                } else {
                                    // Jika bukan gambar, buat tautan unduh
                                    return '<a href="' + fileUrl +
                                        '" download style="color: blue; text-decoration: underline;">' +
                                        data + '</a>';
                                }
                            }
                            return 'No file';
                        }
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

        $(document).on('click', '.clickable-image', function() {
            var imageUrl = $(this).data('image-url');
            $('#modalImage').attr('src', imageUrl);
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
