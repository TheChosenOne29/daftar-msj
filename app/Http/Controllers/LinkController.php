<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class LinkController extends Controller
{
    public function index()
    {
        $msj1 = Link::first();
        $msj2 = Link::find(2);
        $msj3 = Link::find(3);

        return view('admin.link')->with([
            'msj1' => $msj1,
            'msj2' => $msj2,
            'msj3' => $msj3,
        ]);
    }

    public function update($id, Request $request)
    {
        $msj1 = Link::find($id);
        $msj1->update([
            'baru' => $request -> baru,
            'ulang' => $request -> ulang,
            'whatsapp' => $request -> whatsapp
        ]);
        
        return redirect()->intended('/admin/link')->with('success-update', 'Data Updated Successfully');
    }
}
