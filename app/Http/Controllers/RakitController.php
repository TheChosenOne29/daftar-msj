<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RakitController extends Controller
{
    public function aktivasi()
    {
        return view("msj1.aktivasi");
    }

    public function baru()
    {
        return view("msj1.baru");
    }

    public function ulang()
    {
        return view("msj1.ulang");
    }

    public function peserta()
    {
        return view("msj1.peserta");
    }
}
