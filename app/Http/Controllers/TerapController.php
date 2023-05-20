<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Terap;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TerapController extends Controller
{
    public function nij()
    {
        return view('msj3.nij');
    }

    public function baru()
    {
        $baru = Link::find(3);

        return view('msj3.baru')->with([
            'link' => $baru
        ]);
    }

    public function ulang()
    {
        $ulang = Link::find(3);

        return view('msj3.ulang')->with([
            'link' => $ulang
        ]);
    }

    public function peserta()
    {
        $terap = Terap::all();
        $angkatan = Angkatan::find(3);

        return view('msj3.peserta')->with([
            'terap' => $terap,
            'angkatan' => $angkatan
        ]);
    }
}