<?php

namespace App\Http\Controllers;

use App\Models\Products;

use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeControllers
{
    public function index(Request $request)
    {
//        $makingDate = Carbon::create('2018')->timestamp;
//        $products = Products::create([
//            'title' => $request->input('name'),
//            'price' => $request->input('price'),
//            'is_active' => true
//
//        ]);
        $model = Products::all();
        return view('home', [
        'products' => $model
        ]);

    }
    public function getProducts()
    {
        $products = Products::all();
//        foreach ($products as $product) {
//            echo "<br>" . $product['name'];
//            echo "<br>" . $product['price'];
//            echo "<br>" . $product['is_active'];
//            echo "<br>" . $product['create_at'];
//            echo "<hr>";
//             }
        var_dump($products);
    }
}
