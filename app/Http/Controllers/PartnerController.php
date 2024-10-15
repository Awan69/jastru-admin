<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Models\ExcitingMission;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controllers\Middleware;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function middleware(): array
    {
        return [
            new Middleware('permission:view partner', only: ['index']),
            new Middleware('permission:create partner', only: ['create', 'store']),
            new Middleware('permission:update partner', only: ['update', 'edit']),
            new Middleware('permission:delete partner', only: ['destroy']),
        ];
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $partners = Partner::withCount('excitingMissions')->get();
            return DataTables::of($partners)
                ->addColumn('action', function ($partner) {
                    $editUrl = route('partners.edit', $partner->id);
                    $deleteUrl = route('partners.destroy', $partner->id);
                    return '<a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a>
                <button type="button" id="deletePartner' . $partner->id . '" class="btn btn-sm btn-danger" onclick="deletePartner (' . $partner->id . ')">Hapus</button>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('partner.partner.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partner.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'partner_name' => 'required|string|max:255',
            'partner_address' => 'required|string',
            // 'amount_mission' => 'required|integer',
            'logo' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:5048',
        ]);

        $partner = new Partner();
        $partner->partner_name = $request->input('partner_name');
        $partner->partner_address = $request->input('partner_address');
        // $partner->amount_mission = $request->input('amount_mission');

        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images/partners'), $logoName);
            $partner->logo = $logoName;
        }

        $partner->save();

        return redirect('/partners')->with('status', 'Partner created successfully');
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('partner.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'partner_name' => 'required|string|max:255',
            'partner_address' => 'required|string',
            // 'amount_mission' => 'required|integer',
            'logo' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
        ]);

        $partner = Partner::findOrFail($id);
        $partner->partner_name = $request->input('partner_name');
        $partner->partner_address = $request->input('partner_address');
        // $partner->amount_mission = $request->input('amount_mission');

        if ($request->hasFile('logo')) {
            // Delete old logo file
            if ($partner->logo) {
                unlink(public_path('images/partners/' . $partner->logo));
            }

            // Upload new logo file
            $logo = $request->file('logo');
            $logoName = time() . '.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('images/partners'), $logoName);
            $partner->logo = $logoName;
        }

        $partner->save();

        return redirect('/partners')->with('status', 'Partner updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $partner = Partner::findOrFail($id);
        $partner->delete();

        return response()->json(['status' => 'Partner deleted successfully'], 200);
    }
}
