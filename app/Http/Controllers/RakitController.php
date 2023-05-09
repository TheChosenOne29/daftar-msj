<?php

namespace App\Http\Controllers;

use App\Models\Rakit;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RakitController extends Controller
{
    public function nij()
    {
        $rakit = Rakit::all();
        $angkatan = Angkatan::find(2);

        return view('msj2.nij')->with([
            'rakit' => $rakit,
            'angkatan' => $angkatan
        ]);
    }
}
