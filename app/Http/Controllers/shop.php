<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class shop extends Controller
{
    public function index(){
        $listCategories = Category::all();
        $listProducts = Product::paginate(6);
        return view('shop',compact('listCategories','listProducts'));
    }
    public function filter(Request $request){
        $category_id = $request-> category;
        $products = Product::orderBy('id','desc')->where('category_id','=',$category_id)->get();
        // Why column category_id is used in where clause?
        // The column category_id is used in the where clause to filter the products based on the selected category. The category_id column is a foreign key that references the id column of the categories table. By filtering the products based on the category_id, we can retrieve only the products that belong to the selected category. 
        
        return view('partials.product',compact('products'));
        // What is partials in the view?
        // Partial views are views that are included within other views. They are used to break down the view into smaller components that can be reused in multiple views.
        // In Laravel, partial views are stored in the resources/views/partials directory. They are included in other views using the @include directive.

    }
}
