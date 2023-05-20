<?php

namespace App\Http\Controllers;

use App\Models\Link;
use App\Models\Rakit;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RakitController extends Controller
{
    public function nij()
    {
        return view('msj2.nij');
    }

    public function baru()
    {
        $baru = Link::find(2);

        return view('msj2.baru')->with([
            'link' => $baru
        ]);
    }

    public function ulang()
    {
        $ulang = Link::find(2);

        return view('msj2.ulang')->with([
            'link' => $ulang
        ]);
    }

    public function peserta()
    {
        $rakit = Rakit::all();
        $angkatan = Angkatan::find(2);

        return view('msj2.peserta')->with([
            'rakit' => $rakit,
            'angkatan' => $angkatan
        ]);
    }
}
