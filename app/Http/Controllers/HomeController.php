<?php

namespace App\Http\Controllers;

use App\Models\Card;
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

        $show1 = Card::first();
        $show2 = Card::find(2);
        $show3 = Card::find(3);

        return view('home')->with([
            'ramu' => $ramu,
            'rakit' => $rakit,
            'terap' => $terap,
            'show1' => $show1,
            'show2' => $show2,
            'show3' => $show3,
        ]);
    }
}