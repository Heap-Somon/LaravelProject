<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class product extends Controller
{
    public function index($id){
        $product = \App\Models\Product::findOrFail($id);
        $product -> views = $product -> views + 1;
        $product -> save();
        return view('product-detail', compact('product'));
    }
}
