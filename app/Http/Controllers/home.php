<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class home extends Controller
{
    public function index(){
        $latestProducts = Product::orderBy('id','desc')->limit(4)->get();
        $promotionProducts = Product::orderBy('id','desc')->where('sale_price','>',0)->limit(4)->get();
        $mostViewedProducts = Product::orderBy('viewers','desc')->limit(4)->get();
        return view('home',compact('latestProducts','promotionProducts','mostViewedProducts'));
    }
}
