<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

//model class of Product Table
class News extends Model{
    protected $fillable = [
        'title',
        'banner',
        'thumbnail',
        'description',
        'thumbnail',
        'viewers'
    ];
// How to fix if the table name without 's' at the end?
// You can specify the table name in the model by adding a protected $table property with the name of the table. For example, if the table name is 'product' instead of 'products', you can add the following line to the model:
// protected $table = 'product';

    protected $table = 'news';
}