<?php

namespace App\Http\Controllers;

use App\Models\Rakit;
use App\Models\Ulang;
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
        return view('msj2.baru');
    }

    public function ulang()
    {
        $link = Ulang::find(2);

        return view('msj2.ulang')->with([
            'link' => $link
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
