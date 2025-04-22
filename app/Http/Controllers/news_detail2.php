<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class news_detail2 extends Controller
{
    public function index($id){
        $detail = News::orderBy('id','desc')->where('id',$id)->first();
        // $relatedProducts = News::orderBy('id','desc')->where('category_id',$detail->category_id)->where('id','!=',$id)->limit(4)->get();
        // dd($detail);
        $detail -> viewers = $detail -> viewers + 1;
        $detail -> save();
        return view('news-details2',compact('detail'));
    }
}
