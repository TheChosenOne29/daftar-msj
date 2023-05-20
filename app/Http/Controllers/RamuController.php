<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Ramu;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RamuController extends Controller
{
    public function aktivasi()
    {
        return view('msj1.aktivasi');
    }

    public function baru()
    {
        $baru = Link::first();

        return view('msj1.baru')->with([
            'link' => $baru
        ]);
    }

    public function ulang()
    {
        $ulang = Link::first();

        return view('msj1.ulang')->with([
            'link' => $ulang
        ]);
    }

    public function peserta()
    {
        $ramu = Ramu::all();
        $angkatan = Angkatan::first();

        return view('msj1.peserta')->with([
            'ramu' => $ramu,
            'angkatan' => $angkatan
        ]);
    }
}