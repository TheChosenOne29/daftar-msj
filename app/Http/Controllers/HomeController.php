<?php

namespace App\Http\Controllers;

use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $ramu = Angkatan::first();
        $rakit = Angkatan::find(2);
        $terap = Angkatan::find(3);

        return view('home')->with([
            'ramu' => $ramu,
            'rakit' => $rakit,
            'terap' => $terap
        ]);
    }
}