<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;

class BerandaController extends Controller
{

    public static function middleware(): array
    {
        return [
            new Middleware('permission:view dashboard', only: ['index']),
        ];
    }
    public function index()
    {
        return view('utama.beranda', [
            'title' => 'dashboard',
        ]);
    }

    public function jasa()
    {
        return view('utama.jasa', [
            'title' => 'Jasa',
        ]);
    }
}
