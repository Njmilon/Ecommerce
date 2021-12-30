<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(){
        $key=Product::where('name','LIKE',"%{key}%")->get();
        return view('frontend.products.search_product', compact('key'));
    }
}
