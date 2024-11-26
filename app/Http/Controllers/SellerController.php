<?php

namespace App\Http\Controllers;

use App\Models\Seller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class SellerController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $data = Seller::all();
            return DataTables::of($data)
                ->addIndexColumn()
                ->addColumn('action', function ($row) {
                    $btn = '<div class="d-flex flex-row align-items-start">';

                    if ($row->status == 'pending') {
                        $btn .= '<button class="btn btn-outline-success btn-sm mb-1 verify-btn" data-id="' . $row->id . '">
                            <i class="fas fa-check"></i> Verifikasi
                          </button>';
                    }

                    if ($row->status == 'verif') {
                        $btn .= '<button class="btn btn-outline-danger btn-sm mb-1 ban-btn" data-id="' . $row->id . '">
                            <i class="fas fa-ban"></i> Ban
                          </button>';
                    }

                    if ($row->status == 'banned') {
                        $btn .= '<button class="btn btn-outline-warning btn-sm mb-1 unban-btn" data-id="' . $row->id . '">
                            <i class="fas fa-undo"></i> Unban
                          </button>';
                    }

                    $btn .= '<button class="btn btn-outline-danger btn-sm delete-btn" data-id="' . $row->id . '">
                        <i class="fas fa-trash"></i> Hapus
                      </button>';
                    $btn .= '</div>';
                    return $btn;
                })
                ->make(true);
        }

        return view('partner.seller.index');
    }

    public function verify($id)
    {
        $seller = Seller::find($id);
        if ($seller) {
            $seller->status = 'verif';
            $seller->save();
            return response()->json(['success' => 'Seller status updated to verified']);
        }
        return response()->json(['error' => 'Seller not found'], 404);
    }

    public function ban($id)
    {
        $seller = Seller::find($id);
        if ($seller) {
            $seller->status = 'banned';
            $seller->save();
            return response()->json(['success' => 'Seller has been banned']);
        }
        return response()->json(['error' => 'Seller not found'], 404);
    }

    public function unban($id)
    {
        $seller = Seller::find($id);
        if ($seller) {
            $seller->status = 'verif';
            $seller->save();
            return response()->json(['success' => 'Seller has been unbanned']);
        }
        return response()->json(['error' => 'Seller not found'], 404);
    }

    public function destroy($id)
    {
        $seller = Seller::find($id);
        if ($seller) {
            $seller->delete();
            return response()->json(['success' => 'Seller deleted successfully']);
        }
        return response()->json(['error' => 'Seller not found'], 404);
    }
}
