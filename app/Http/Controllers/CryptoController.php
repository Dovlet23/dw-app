<?php

namespace App\Http\Controllers;

use App\Models\Crypto;
use Illuminate\Http\Request;

class CryptoController extends Controller
{
    /**
     * list articles
     */
    public function index(Request $request)
    {
        $crypto = Crypto::all();//orderBy($request->input('sort'), 'DESC')->get();
        return view('crypro-article');
    }
    /**
     * form create article
     */
    public function create()
    {

        return view('create-artice');
    }
    /**
     * store request in table
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $crypto = Crypto::create([
            'name' => $request->input('name'),
            'code' => $request->input('code'),
            'price' => $request->input('price'),
            'is_active' => $request->input('is_active')

        ]);
        return redirect()->back();
    }

    /**
     * show the article
     * @param int $id
     *
     */
    public function show(int $id)
    {

    }
}
