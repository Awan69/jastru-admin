@extends('admin_page.layout.admin_page')

@section('title', 'Misi Seru')

@section('konten')

    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Misi Seru
                    @can('create exciting mission')
                        <a href="{{ url('exciting-missions/create') }}" class="btn btn-primary float-end">Add Misi Seru</a>
                    @endcan
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="exciting-mission-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Create By</th>
                                <th>Partner</th>
                                <th>Nama Misi</th>
                                <th>Fee</th>
                                <th>Price</th>
                                <th>Sisa Tiket</th>
                                <th>Total Tiket</th>
                                <th>Total Price</th>
                                <th>Waktu Proses</th>
                                <th>Langkah-Langkah</th>
                                <th>Status</th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Berakhir</th>
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
            $('#exciting-mission-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: '{!! route('exciting-missions.index') !!}',
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'create_by',
                        name: 'create_by'
                    },
                    {
                        data: 'partner.partner_name',
                        name: 'partner.partner_name'
                    },
                    {
                        data: 'name_mission',
                        name: 'name_mission'
                    },
                    {
                        data: 'amount_reward',
                        name: 'amount_reward',
                        render: function(data) {
                            return formatRupiah(data);
                        }
                    },
                    {
                        data: 'price',
                        name: 'price',
                        render: function(data) {
                            return formatRupiah(data);
                        }
                    },
                    {
                        data: 'remaining_ticket',
                        name: 'remaining_ticket'
                    },
                    {
                        data: 'amount_ticket',
                        name: 'amount_ticket'
                    },
                    {
                        data: 'total_price',
                        name: 'total_price',
                        render: function(data) {
                            return formatRupiah(data);
                        }
                    },
                    {
                        data: 'processing_time',
                        name: 'processing_time'
                    },
                    {
                        data: 'steps',
                        name: 'steps'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'start_date',
                        name: 'start_date'
                    },
                    {
                        data: 'end_date',
                        name: 'end_date'
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

        function formatRupiah(value) {
            return 'Rp ' + parseFloat(value).toLocaleString('id-ID');
        }
    </script>

    <script>
        function deleteExcitingMission(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to delete this exciting mission?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'DELETE',
                        url: "{{ url('exciting-missions') }}" + "/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}"
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Deleted!",
                                text: data.status,
                                icon: "success"
                            });
                            $('#exciting-mission-table').DataTable().ajax.reload();
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

    <script>
        function changeExcitingMissionStatus(id, status) {
            Swal.fire({
                title: 'Are you sure?',
                text: 'You want to change the status to ' + status + '?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, change it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        type: 'POST',
                        url: "{{ url('exciting-missions/update-status') }}",
                        data: {
                            "_token": "{{ csrf_token() }}",
                            "id": id,
                            "status": status
                        },
                        success: function(data) {
                            Swal.fire({
                                title: "Updated!",
                                text: 'Status changed to ' + status,
                                icon: "success"
                            });
                            $('#exciting-mission-table').DataTable().ajax.reload();
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

    <script>
        function showAddTicketModal(excitingMissionId) {
            Swal.fire({
                title: 'Tambah Tiket',
                html: `
                <div>
                    <label for="ticket_amount">Jumlah Tiket:</label>
                    <input type="number" id="ticket_amount" class="swal2-input" placeholder="Jumlah Tiket" required>
                </div>
            `,
                focusConfirm: false,
                preConfirm: () => {
                    const ticketAmount = document.getElementById('ticket_amount').value;
                    return {
                        ticketAmount,
                        excitingMissionId
                    };
                }
            }).then((result) => {
                if (result.isConfirmed) {
                    const {
                        ticketAmount,
                        excitingMissionId
                    } = result.value;
                    addTickets(excitingMissionId, ticketAmount);
                }
            });
        }

        function addTickets(excitingMissionId, ticketAmount) {
            $.ajax({
                type: 'POST',
                url: "{{ url('exciting-missions/add-tickets') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "exciting_mission_id": excitingMissionId,
                    "ticket_amount": ticketAmount
                },
                success: function(data) {
                    Swal.fire({
                        title: "Success!",
                        text: data.status,
                        icon: "success"
                    });
                    $('#exciting-mission-table').DataTable().ajax.reload();
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
    </script>

@endsection
