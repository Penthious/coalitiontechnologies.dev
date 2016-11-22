<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        return view('products.index');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $json = json_encode($data);
        $productsFile = fopen('productsInventory.txt', 'w');
        fwrite($productsFile, $json);
        fclose($productsFile);
    }
}
