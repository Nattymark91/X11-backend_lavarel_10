<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cards;

class CardsController extends Controller
{
   
    public function index()
    {
        $cards=Cards::all();
        return response()->json($cards);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'num' => ['required', 'numeric', 'digits_between:16,16'],
            'mm' => ['required', 'numeric', 'max:12', 'min:1', 'digits_between:2,2'],
            'gg' => ['required', 'numeric', 'max:40', 'min:24', 'digits_between:2,2']
        ]);

        $card = Cards::create($request->all());
        return response()->json($card, 201);
    }
}