<?php

namespace App\Http\Controllers;

use App\Models\Card;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class CardController extends Controller
{
    public function index()
    {
        return view('admin.cards', [
            'card' => Card::get(),
        ]);
    }

    public function update($id, Request $request)
    {
        $card = Card::find($id);
        $card->update([
            'show_card' => $request -> show_card
        ]);
        
        return redirect()->intended('/admin/cards')->with('success-update', 'Data Updated Successfully');
    }
}
