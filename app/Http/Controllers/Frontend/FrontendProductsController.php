<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class FrontendProductsController extends Controller
{
    public function products(){


        $allProducts=Product::get()->all();
        $allCategories=Category::get()->all();
        return view('frontend.products.products_list',compact('allProducts','allCategories'));
    }
}
