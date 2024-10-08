<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
}
