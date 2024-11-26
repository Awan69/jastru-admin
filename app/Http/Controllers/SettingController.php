<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ExcitingMissionTicket;
use App\Models\ExcitingMission;
use Carbon\Carbon;

class SettingController extends Controller
{
    public function index()
    {
        return view('setting.setting', [
            'title' => 'Setting',
        ]);
    }

    public function setting_seller()
    {
        return view('setting.setting_seller', [
            'title' => 'Setting Seller',
        ]);
    }

    public function myshop()
    {
        return view('setting.myshop.myshop', [
            'title' => 'My Shop',
        ]);
    }

    public function informasi_akun()
    {
        return view('setting.informasi_akun', [
            'title' => 'Informasi Akun',
        ]);
    }

    public function informasi_alamat()
    {
        return view('setting.informasi_alamat', [
            'title' => 'Informasi Akun',
        ]);
    }

    public function add_alamat()
    {
        return view('setting.add_alamat', [
            'title' => 'Add Akun',
        ]);
    }

    public function pinpoint()
    {
        return view('setting.pinpoint', [
            'title' => 'Add Akun',
        ]);
    }


    public function edit_name(Request $request)
    {
        return view('setting.edit_name', [
            'title' => 'Edit Name',
        ]);

        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
        ]);

        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    public function edit_username(Request $request)
    {
        return view('setting.edit_username', [
            'title' => 'Edit Name',
        ]);

        $request->validate([
            'username' => 'required',
        ]);

        $user = Auth::user();
        $user->username = $request->username;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }
    public function edit_bio(Request $request)
    {
        return view('setting.edit_bio', [
            'title' => 'Edit Bio',
        ]);

        $request->validate([
            'bio' => 'required',
        ]);

        $user = Auth::user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function linkwebsite()
    {
        return view('setting.linkwebsite', [
            'title' => 'Link Website',
        ]);
    }

    public function edit_email()
    {
        return view('setting.edit_email', [
            'title' => 'Edit Email',
        ]);
    }
    public function edit_no_phone()
    {
        return view('setting.edit_no_phone', [
            'title' => 'Edit Nomber Phone',
        ]);
    }

    public function verifikasi_nomor_telepon()
    {
        return view('setting.verifikasi_nomor_telepon', [
            'title' => 'Verifikasi Nomor Telepon',
        ]);
    }

    public function progressLamaranMisi()
    {
        $missions = ExcitingMission::with('partner')->get();

        $userId = auth()->id();
        $takenMissions = ExcitingMissionTicket::with('excitingMission.partner')
            ->where('user_id', $userId)
            ->get();

        if ($takenMissions->isEmpty()) {
            $takenMissions = collect();
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

                // Buat string untuk format waktu sisa
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
                // Jika tanggal telah lewat, set sisa waktu menjadi "Waktu telah habis"
                $remaining_time = "Waktu telah habis";
            }

            // Simpan sisa waktu ke properti misi
            $takenMission->remaining_days = $remaining_time;
        }

        // Kirim data ke view dengan tambahan sisa waktu
        return view('setting.progress_lamaran_misi', [
            'title' => 'Progress Lamaran & Misi',
            'takenMissions' => $takenMissions,
        ]);
    }
}
