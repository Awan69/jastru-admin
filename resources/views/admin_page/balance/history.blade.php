@extends('admin_page.layout.admin_page')

@section('title', 'User Transaction History')

@section('konten')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <a href="{{ route('balance.index') }}" class="btn btn-primary mb-3">Back to User Balance</a>

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">User Transaction History</h1>
        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Transaction History</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="transaction-history-table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>User ID</th>
                                <th>Username</th>
                                <th>Detail</th>
                                <th>Transaction Description</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdn.datatables.net/1.10.7/js/jquery.dataTables.min.js"></script>
    <script>
        $(function() {
            var user_id = "{{ $user_id }}";
            $('#transaction-history-table').DataTable({
                processing: true,
                serverSide: true,
                ajax: `{!! url('balance/history/${user_id}') !!}`,
                columns: [{
                        data: 'user_id',
                        name: 'user.id'
                    },
                    {
                        data: 'username',
                        name: 'user.name'
                    },
                    {
                        data: 'detail',
                        name: 'detail'
                    },
                    {
                        data: 'dec_transaction',
                        name: 'dec_transaction'
                    },
                    {
                        data: 'created_at',
                        name: 'created_at'
                    }
                ]
            });
        });
    </script>

@endsection
