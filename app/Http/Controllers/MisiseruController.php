<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MisiseruController extends Controller
{
    public function index()
    {
        return view('misi_seru.misi_seru', [
            'title' => 'Misi Seru',
        ]);
    }

    public function bukti_pekerjaan()
    {
        return view('misi_seru.bukti_pekerjaan', [
            'title' => 'Misi Seru',
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
            'bukti_pekerjaan' => 'required|file|mimes:jpeg,jpg,png,pdf,doc|max:2048',
        ]);

        if ($request->file('bukti_pekerjaan')) {
            $file = $request->file('bukti_pekerjaan');
            $path = $file->storeAs('bukti_pekerjaan', $file->getClientOriginalName(), 'public');

            return back()->with('success', 'Bukti pekerjaan "' . $file->getClientOriginalName() . '" berhasil diupload!');
        }

        return back()->with('error', 'Gagal mengupload bukti pekerjaan.');
    }
}
