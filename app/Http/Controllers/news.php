<?php

namespace App\Http\Controllers;

use App\Models\News as ModelsNews;
// use App\Models\News;
use Illuminate\Http\Request;

class news extends Controller
{
    public function index(){
        $latestNews = ModelsNews::orderBy('id','desc')->limit(4)->get();
        // $promotionProducts = ModelsNews::orderBy('id','desc')->where('sale_price','>',0)->limit(4)->get();
        $mostViewedNews = ModelsNews::orderBy('viewers','desc')->limit(4)->get();
        return view('news',compact('latestNews','mostViewedNews'));
        // return view('news');
    }
}
