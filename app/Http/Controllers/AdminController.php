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
        return view('admin.dashboard', [
            'ramu' => Ramu::get(),
            'angkatan' => Angkatan::get(),
        ]);
    }

    public function angkatan()
    {
        return view('admin.angkatan', [
            'angkatan' => Angkatan::get(),
        ]);
    }

    public function ramu()
    {
        return view('admin.ramu', [
            'ramu' => Ramu::get(),
        ]);
    }

    public function rakit()
    {
        return view('admin.rakit', [
            'rakit' => Rakit::get(),
        ]);
    }

    public function terap()
    {
        return view('admin.terap', [
            'terap' => Terap::get(),
        ]);
    }

    public function ramuUpdate($id, Request $request)
    {
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
