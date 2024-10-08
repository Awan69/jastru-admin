<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InboxController extends Controller
{
    public function index()
    {
        return view('inbox.pesan', [
            'title' => 'Pesan',
        ]);
    }

    public function chat()
    {
        return view('inbox.chat', [
            'title' => 'Chat',
        ]);
    }
}
