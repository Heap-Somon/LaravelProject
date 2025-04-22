<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class news_detail extends Controller
{
    public function index($id){
        $detail = Product::orderBy('id','desc')->where('id',$id)->first();
        $relatedProducts = Product::orderBy('id','desc')->where('category_id',$detail->category_id)->where('id','!=',$id)->limit(4)->get();
        // dd($detail);
        $detail -> viewers = $detail -> viewers + 1;
        $detail -> save();
        return view('news-detail',compact('detail','relatedProducts'));
    }
}
