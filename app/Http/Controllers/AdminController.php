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

    public function angkatan()
    {
        $angkatan = Angkatan::all();
        
        return view('admin.angkatan', compact('angkatan'));
    }

    public function ramu()
    {
        $ramu = Ramu::all();
        
        return view('admin.ramu', compact('ramu'));
    }

    public function rakit()
    {
        $rakit = Rakit::all();
        
        return view('admin.rakit', compact('rakit'));
    }

    public function terap()
    {
        $Terap = Terap::all();
        
        return view('admin.terap', compact('terap'));
    }

    public function ramuUpdate(Request $request)
    {
        // $ramu
        // Ramu::whereIn('id', $ids)
        // ->update([
        //     'tanggal' => $request -> tanggal,
        //     'jam' => $request -> jam,
        //     'judul' => $request -> judul
        // ]);

        $ramu = Ramu::find($id);
        $ramu->update([
            'tanggal' => $request -> tanggal,
            'jam' => $request -> jam,
            'judul' => $request -> judul
        ]);
        
        return redirect()->intended('/admin/msj1')->with('success-update', 'Data Updated Successfully');
    }

    public function rakitUpdate()
    {
        $rakit = Rakit::all();
        
        return view('admin.rakit', compact('rakit'));
    }

    public function terapUpdate()
    {
        $Terap = Terap::all();
        
        return view('admin.terap', compact('terap'));
    }
}
