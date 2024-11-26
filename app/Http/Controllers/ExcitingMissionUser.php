<?php

namespace App\Http\Controllers;

use App\Models\ExcitingMission;
use App\Models\ExcitingMissionTicket;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ExcitingMissionUser extends Controller
{
    public function index()
    {
        $userId = auth()->id();

        $missions = ExcitingMission::with('partner')
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->where('amount_ticket', '>', 0)
            ->get();

        $takenMissions = ExcitingMissionTicket::with('excitingMission.partner')
            ->where('user_id', $userId)
            ->where('status', 'progres')
            ->whereHas('excitingMission', function ($query) {
                $query->where('start_date', '<=', Carbon::now())
                    ->where('end_date', '>=', Carbon::now())
                    ->where('amount_ticket', '>', 0);
            })
            ->get();

        if ($takenMissions->isEmpty()) {
            $takenMissions = collect();
        }

        foreach ($missions as $mission) {
            $endedDate = new Carbon($mission->end_date);
            $currentDate = Carbon::now();

            $formattedEndedDate = $endedDate->translatedFormat('j F Y');
            $mission->formatted_ended_date = $formattedEndedDate;

            if ($currentDate->lessThan($endedDate)) {
                $days = floor($currentDate->diffInDays($endedDate));
                $hours = floor($currentDate->diffInHours($endedDate) % 24);
                $minutes = floor($currentDate->diffInMinutes($endedDate) % 60);
                $seconds = floor($currentDate->diffInSeconds($endedDate) % 60);

                if ($days > 0) {
                    $remaining_time = "{$days} hari lagi";
                } elseif ($hours > 0) {
                    $remaining_time = "{$hours} jam lagi";
                } elseif ($minutes > 0) {
                    $remaining_time = "{$minutes} menit lagi";
                } else {
                    $remaining_time = "{$seconds} detik lagi";
                }
            } else {
                $remaining_time = "Waktu telah habis";
            }

            $mission->remaining_days = $remaining_time;
        }

        foreach ($takenMissions as $takenMission) {
            $endedDate = new Carbon($takenMission->excitingMission->end_date);
            $currentDate = Carbon::now();

            $formattedEndedDate = $endedDate->translatedFormat('j F Y');
            $takenMission->formatted_ended_date = $formattedEndedDate;

            if ($currentDate->lessThan($endedDate)) {
                $days = floor($currentDate->diffInDays($endedDate));
                $hours = floor($currentDate->diffInHours($endedDate) % 24);
                $minutes = floor($currentDate->diffInMinutes($endedDate) % 60);
                $seconds = floor($currentDate->diffInSeconds($endedDate) % 60);

                if ($days > 0) {
                    $remaining_time = "{$days} hari lagi";
                } elseif ($hours > 0) {
                    $remaining_time = "{$hours} jam lagi";
                } elseif ($minutes > 0) {
                    $remaining_time = "{$minutes} menit lagi";
                } else {
                    $remaining_time = "{$seconds} detik lagi";
                }
            } else {
                $remaining_time = "Waktu telah habis";
            }

            $takenMission->remaining_days = $remaining_time;
        }

        return view('misi_seru.misi_seru', [
            'title' => 'Misi Seru',
            'missions' => $missions,
            'takenMissions' => $takenMissions,
        ]);
    }

    public function checkFollowMission(Request $request)
    {
        // Periksa apakah data sudah ada di database
        $exists = ExcitingMissionTicket::where('user_id', $request->user_id)
            ->where('exciting_mission_id', $request->exciting_mission_id)
            ->exists();

        // Kembalikan hasilnya dalam format JSON
        return response()->json(['exists' => $exists]);
    }

    public function follow_mission(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'exciting_mission_id' => 'required|exists:exciting_mission,id',
        ]);

        $mission = ExcitingMission::find($request->exciting_mission_id);

        $exists = ExcitingMissionTicket::where('user_id', $request->user_id)
            ->where('exciting_mission_id', $request->exciting_mission_id)
            ->exists();

        if ($exists) {
            return response()->json(['already_followed' => true]);
        }

        ExcitingMissionTicket::create([
            'user_id' => $request->user_id,
            'exciting_mission_id' => $request->exciting_mission_id,
            'status' => 'progres',
        ]);

        if ((int) $mission->amount_ticket > 0) {
            $mission->amount_ticket = (int) $mission->amount_ticket - 1;
            $mission->save();
        }

        return response()->json(['success' => true, 'message' => 'Misi berhasil diambil.']);
    }


    public function bukti_pekerjaan($id)
    {
        $takenMission = ExcitingMission::find($id);

        if (!$takenMission) {
            return redirect()->route('misi_seru')->with('error', 'Misi tidak ditemukan.');
        }

        return view('misi_seru.bukti_pekerjaan', [
            'title' => 'Misi Seru',
            'takenMission' => $takenMission,
        ]);
    }

    public function misi_berhasil()
    {
        return view('misi_seru.misi_berhasil', [
            'title' => 'Misi Berhasil',
        ]);
    }

    public function upload_Bukti(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:exciting_mission_tickets,user_id',
            'exciting_mission_id' => 'required|exists:exciting_mission_tickets,exciting_mission_id',
            'bukti_pekerjaan' => 'required|file|mimes:jpg,jpeg,png,pdf,doc,docx|max:51200',
        ]);

        if ($request->hasFile('bukti_pekerjaan')) {
            $path = $request->file('bukti_pekerjaan')->store('bukti_pekerjaan', 'public');

            $updated = ExcitingMissionTicket::where('user_id', $request->user_id)
                ->where('exciting_mission_id', $request->exciting_mission_id)
                ->update(['files' => $path, 'status' => 'pending']);

            if ($updated) {
                return redirect()->route('misi_berhasil')->with('success', 'Bukti pekerjaan berhasil diupload.');
            } else {
                return redirect()->back()->with('error', 'Gagal menyimpan data ke database.');
            }
        }
    }
}
