<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function layanan()
    {
        return view('client.layanan');
    }

    public function profil()
    {
        return view('client.profil');
    }

    public function tentang()
    {
        return view('client.tentangkami');
    }


    public function testimoni()
    {
        return view('client.testimoni');
    }
}
