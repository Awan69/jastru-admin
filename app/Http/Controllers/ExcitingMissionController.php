<?php

namespace App\Http\Controllers;

use App\Models\ExcitingMission;
use App\Models\Partner;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Support\Facades\Auth;
use Termwind\Components\Dd;

class ExcitingMissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public static function middleware(): array
    {
        return [
            new Middleware('permission:view exciting mission', only: ['index']),
            new Middleware('permission:create exciting mission', only: ['create', 'store']),
            new Middleware('permission:update exciting mission', only: ['update', 'edit']),
            new Middleware('permission:delete exciting mission', only: ['destroy']),
        ];
    }

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $excitingMissions = ExcitingMission::with('partner')->get();
            return DataTables::of($excitingMissions)
                ->addColumn('action', function ($excitingMission) {
                    $editUrl = route('exciting-missions.edit', $excitingMission->id);
                    $deleteUrl = route('exciting-missions.destroy', $excitingMission->id);
                    return '<a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a>
                <button type="button" id="deleteExcitingMission' . $excitingMission->id . '" class="btn btn-sm btn-danger" onclick="deleteExcitingMission (' . $excitingMission->id . ')">Hapus</button>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin_page.exciting-mission.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $partners = Partner::all();
        return view('admin_page.exciting-mission.create', compact('partners'));
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
            'partner_id' => 'required|exists:partners,id',
            'name_mission' => 'required|string|max:250',
            'amount_reward' => 'required|string',
            'amount_ticket' => 'required|string',
            'processing_time' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'mission_requirements' => 'nullable|string|max:250',
            'steps' => 'nullable|string|max:250',
            'status' => 'required|string|max:250',
        ]);
        $excitingMission = new ExcitingMission();
        $excitingMission->partner_id = $request->input('partner_id');
        $excitingMission->name_mission = $request->input('name_mission');
        $excitingMission->amount_reward = $request->input('amount_reward');
        $excitingMission->amount_ticket = $request->input('amount_ticket');
        $excitingMission->remaining_ticket = $request->input('amount_ticket');
        $excitingMission->processing_time = $request->input('processing_time');
        $excitingMission->start_date = $request->input('start_date');
        $excitingMission->end_date = $request->input('end_date');
        $excitingMission->mission_requirements = $request->input('mission_requirements');
        $excitingMission->steps = $request->input('steps');
        $excitingMission->status = $request->input('status');
        $excitingMission->create_by = Auth::user()->id;
        $excitingMission->save();

        return redirect('/exciting-missions')->with('status', 'Exciting Mission created successfully');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partners = Partner::all();
        $excitingMission = ExcitingMission::find($id);
        return view('admin_page.exciting-mission.edit', compact('excitingMission', 'partners'));
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
            'partner_id' => 'required|exists:partners,id',
            'name_mission' => 'required|string|max:250',
            'amount_reward' => 'required|string',
            'amount_ticket' => 'required|string',
            'processing_time' => 'required|string',
            'start_date' => 'required|string',
            'end_date' => 'required|string',
            'mission_requirements' => 'nullable|string|max:250',
            'steps' => 'nullable|string|max:250',
            'status' => 'required|string|max:250',
        ]);

        $excitingMission = ExcitingMission::find($id);
        $excitingMission->partner_id = $request->input('partner_id');
        $excitingMission->name_mission = $request->input('name_mission');
        $excitingMission->amount_reward = $request->input('amount_reward');
        $excitingMission->amount_ticket = $request->input('amount_ticket');
        $excitingMission->remaining_ticket = $request->input('amount_ticket');
        $excitingMission->processing_time = $request->input('processing_time');
        $excitingMission->start_date = $request->input('start_date');
        $excitingMission->end_date = $request->input('end_date');
        $excitingMission->mission_requirements = $request->input('mission_requirements');
        $excitingMission->steps = $request->input('steps');
        $excitingMission->status = $request->input('status');
        $excitingMission->save();

        return redirect('/exciting-missions')->with('status', 'Exciting Mission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $excitingMission = ExcitingMission::findOrFail($id);
        $excitingMission->delete();

        return response()->json(['status' => 'Exciting Mission deleted successfully'], 200);
    }
}
