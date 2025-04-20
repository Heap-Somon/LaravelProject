<?php

use App\Http\Controllers\home;
use App\Http\Controllers\news;
use App\Http\Controllers\news_detail;
use App\Http\Controllers\news_detail2;
use App\Http\Controllers\product;
use App\Http\Controllers\search;
use App\Http\Controllers\shop;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[home::class,'index']);

Route::get('news_detail/{id}',[news_detail::class,'index']);

Route::get('news_detail2/{id}',[news_detail2::class,'index']);

Route::get('news/',[news::class,'index']);

Route::get('product/',[product::class,'index']);

Route::get('search/',[search::class,'index'])->name('search');

Route::get('/shop/',[shop::class,'index']);

Route::get('/product/filter/',[shop::class,'filter']);