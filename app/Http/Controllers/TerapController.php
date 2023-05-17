<?php

namespace App\Http\Controllers;

use App\Models\Terap;
use App\Models\Ulang;
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
        $link_baru = Ulang::find(3);

        return view('msj3.baru')->with([
            'link' => $link_baru
        ]);
    }

    public function ulang()
    {
        $link = Ulang::find(3);

        return view('msj3.ulang')->with([
            'link' => $link
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