<?php

namespace App\Http\Controllers;

use App\Models\Ramu;
use App\Models\Ulang;
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
        $link_baru = Ulang::first();

        return view('msj1.baru')->with([
            'link' => $link_baru
        ]);
    }

    public function ulang()
    {
        $link = Ulang::first();

        return view('msj1.ulang')->with([
            'link' => $link
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