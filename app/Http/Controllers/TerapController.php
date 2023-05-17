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
        return view('msj3.baru');
    }

    public function ulang()
    {
        $link = Ulang::find(2);

        return view('msj3.ulang')->with([
            'link' => $link
        ]);
    }

    public function peserta()
    {
        $terap = Terap::all();
        $angkatan = Angkatan::find(2);

        return view('msj3.peserta')->with([
            'terap' => $terap,
            'angkatan' => $angkatan
        ]);
    }
}