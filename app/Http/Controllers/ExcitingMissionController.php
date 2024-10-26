<?php

namespace App\Http\Controllers;

use App\Models\ExcitingMission;
use App\Models\ExcitingMissionTicket;
use App\Models\ExcitingMisionTransaction;
use App\Models\TransactionDetail;
use App\Models\Balance;
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
            new Middleware('permission:view exciting mission', only: ['index', 'tickets']),
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
                    $ticketsUrl = route('exciting-mission-tickets.index', ['exciting_mission_id' => $excitingMission->id]);

                    return '<div class="btn-group" role="group">
                    <a href="' . $ticketsUrl . '" class="btn btn-sm btn-info">Detail</a>
                    <a href="' . $editUrl . '" class="btn btn-sm btn-primary">Edit</a>
                    <button type="button" id="deleteExcitingMission' . $excitingMission->id . '" class="btn btn-sm btn-danger" onclick="deleteExcitingMission(' . $excitingMission->id . ')">Hapus</button>
                </div>';
                })
                ->rawColumns(['action'])
                ->toJson();
        }

        return view('admin_page.exciting-mission.index');
    }

    public function tickets(Request $request)
    {
        $excitingMissionId = $request->get('exciting_mission_id');
        $exciting_mission_tickets = ExcitingMissionTicket::with(['excitingMission', 'user'])
            ->where('exciting_mission_id', $excitingMissionId)
            ->get();

        if ($request->ajax()) {
            return DataTables::of($exciting_mission_tickets)
                ->addColumn('user_name', function ($ticket) {
                    return $ticket->user ? $ticket->user->name : 'N/A';
                })
                ->addColumn('mission_name', function ($ticket) {
                    return $ticket->excitingMission ? $ticket->excitingMission->name_mission : 'N/A';
                })
                ->addColumn('action', function ($ticket) {
                    if ($ticket->status === null) {
                        return '
                        <button class="btn btn-success btn-sm text-white" onclick="approveTicket(' . $ticket->id . ')"><i class="bi bi-check-lg"></i></button>
                        <button class="btn btn-danger btn-sm text-white" onclick="rejectTicket(' . $ticket->id . ')"><i class="bi bi-x-lg"></i></button>
                    ';
                    }
                    return '';
                })
                ->make(true);
        }

        // Pass the excitingMissionId to the view
        return view('admin_page.exciting-mission.tickets', compact('excitingMissionId'));
    }

    public function updateStatus(Request $request)
    {
        $request->validate([
            'ticket_id' => 'required|exists:exciting_mission_tickets,id',
            'status' => 'required|string|in:success,failed',
        ]);

        $ticket = ExcitingMissionTicket::find($request->ticket_id);
        $ticket->status = $request->status;

        if ($ticket->status === 'success') {
            $user = $ticket->user;
            $excitingMission = $ticket->excitingMission;

            // Assuming 'amount_reward' is the fee to be added to the user's balance
            $amountReward = $excitingMission->amount_reward;

            // Get the user's current balance before adding the reward
            $balance = Balance::firstOrCreate(
                ['user_id' => $user->id],
                ['balance_amount' => 0] // Initialize balance to 0 if not exists
            );

            // Store the current balance before the reward
            $currentBalance = $balance->balance_amount;

            // Increment the user's balance with the reward
            $balance->increment('balance_amount', $amountReward);

            // Calculate the new total balance after adding the reward
            $newBalance = $currentBalance + $amountReward;

            // Create an exciting mission transaction record
            $excitingMissionTransaction = new ExcitingMisionTransaction();
            $excitingMissionTransaction->balace_id = $balance->id;
            $excitingMissionTransaction->exciting_mission_tickets_id = $ticket->id;
            $excitingMissionTransaction->detail = 'Transaction for ticket approval';
            $excitingMissionTransaction->balace_in = $amountReward;
            $excitingMissionTransaction->balace_out = 0;
            $excitingMissionTransaction->user_id = $user->id;
            $excitingMissionTransaction->save();

            // Format the balances in Rupiah
            $formattedCurrentBalance = 'Rp. ' . number_format($currentBalance, 0, ',', '.');
            $formattedAmountReward = 'Rp. ' . number_format($amountReward, 0, ',', '.');
            $formattedNewBalance = 'Rp. ' . number_format($newBalance, 0, ',', '.');

            // Create a transaction detail record
            $transactionDetail = new TransactionDetail();
            $transactionDetail->user_id = $user->id;
            $transactionDetail->balace_id = $balance->id;
            $transactionDetail->mision_transaction_id = $excitingMissionTransaction->id;
            $transactionDetail->product_transaction_id = null;
            $transactionDetail->service_transaction_id = null;
            $transactionDetail->detail = 'Reward for ticket approval';
            $transactionDetail->dec_transaction = 'Current Balance: ' . $formattedCurrentBalance . ', Fee Awarded: ' . $formattedAmountReward . ', New Balance: ' . $formattedNewBalance; // Set the dec_transaction
            $transactionDetail->category = 'Exciting Mission';
            $transactionDetail->save();
        }

        $ticket->save();

        return response()->json(['status' => 'Ticket status updated successfully'], 200);
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
        $excitingMission->name_mission = ucwords(strtolower($request->input('name_mission')));
        $excitingMission->amount_reward = $request->input('amount_reward');
        $excitingMission->amount_ticket = $request->input('amount_ticket');
        $excitingMission->remaining_ticket = $request->input('amount_ticket');
        $excitingMission->processing_time = ucwords(strtolower($request->input('processing_time')));
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
        $excitingMission->name_mission = ucwords(strtolower($request->input('name_mission')));
        $excitingMission->amount_reward = $request->input('amount_reward');
        $excitingMission->amount_ticket = $request->input('amount_ticket');
        $excitingMission->remaining_ticket = $request->input('amount_ticket');
        $excitingMission->processing_time = ucwords(strtolower($request->input('processing_time')));
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
