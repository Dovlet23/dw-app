<?php

namespace App\Http\Controllers;

use App\Models\Currency;
use Illuminate\Http\Request;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        $currency = Currency::orderBy($request->input('sort'), 'DESC')->get();

    }

    public function create ()
    {
        return view('create-artice');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> ['required', 'min:3', 'max:6'],//валидация мин и мах значений
            'price' => 'required'
        ]);
        $currency = Currency::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'price' => $request->input('price'),
            'is_active' => $request->input('is_active')

        ]);
        return redirect()->back();
    }
}
