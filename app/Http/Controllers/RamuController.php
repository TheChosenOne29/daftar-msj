<?php

namespace App\Http\Controllers;

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
        return view('msj1.baru');
    }

    public function ulang()
    {
        return view('msj1.ulang');
    }

    public function peserta()
    {
        return view('msj1.peserta', [
            'ramu' => Ramu::get(),
            'angkatan' => Angkatan::get()
        ]);
    }
}
