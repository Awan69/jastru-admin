<?php

namespace App\Http\Controllers;

use App\Models\Balance;
use Illuminate\Http\Request;
use App\Models\TransactionDetail;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controllers\Middleware;
use Yajra\DataTables\DataTables;

class BalanceController extends Controller
{

    // public static function middleware(): array
    // {
    //     return [
    //         new Middleware('permission:view balance', only: ['index']),
    //         new Middleware('permission:create balance', only: ['create', 'store']),
    //         new Middleware('permission:update balance', only: ['update', 'edit']),
    //         new Middleware('permission:delete balance', only: ['destroy']),
    //     ];
    // }
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $balances = Balance::with('user')->get();
            return DataTables::of($balances)
                ->addColumn('user_id', function ($balance) {
                    return $balance->user ? $balance->user->id : 'N/A';
                })
                ->addColumn('user_name', function ($balance) {
                    return $balance->user ? $balance->user->name : 'N/A';
                })
                ->addColumn('balance_amount', function ($balance) {
                    return 'Rp ' . number_format($balance->balance_amount, 0, ',', '.');
                })
                ->addColumn('action', function ($balance) {
                    return $balance->user ? '<a href="' . route('balance.history', ['user_id' => $balance->user->id]) . '" class="btn btn-info btn-sm">Show</a>' : 'N/A';
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin_page.balance.index');
    }

    public function history(Request $request, $user_id)
    {
        if ($request->ajax()) {
            $transactionDetails = TransactionDetail::with('user')
                ->where('user_id', $user_id)
                ->get();

            return DataTables::of($transactionDetails)
                ->addColumn('user_id', function ($transactionDetail) {
                    return $transactionDetail->user->id;
                })
                ->addColumn('username', function ($transactionDetail) {
                    return $transactionDetail->user->name;
                })
                ->addColumn('detail', function ($transactionDetail) {
                    return $transactionDetail->detail;
                })
                ->addColumn('dec_transaction', function ($transactionDetail) {
                    return $transactionDetail->dec_transaction;
                })
                ->addColumn('created_at', function ($transactionDetail) {
                    return $transactionDetail->created_at->format('Y-m-d H:i:s');
                })
                ->make(true);
        }

        return view('admin_page.balance.history', compact('user_id'));
    }
}
