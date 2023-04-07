<?php

namespace App\Http\Controllers;

use App\Models\Ramu;
use App\Models\Angkatan;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class AdminController extends Controller
{
    public function index()
    {
        $angkatan = Angkatan::all();
        $ramu = Ramu::all();
        
        return view('admin.dashboard', compact('angkatan', 'ramu'));
    }
}
