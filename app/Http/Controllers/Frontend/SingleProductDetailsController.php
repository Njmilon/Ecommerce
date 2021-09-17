<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SingleProductDetailsController extends Controller
{
    public function singleProductDetails($id){

        $product=Product::find($id);
        $relatedProduct=Product::where('recent',1)->get(); 
        $rightRelatedProduct=Product::where('featured',1)->get();
        return view('frontend.products.single_product_details',compact('product','relatedProduct','rightRelatedProduct'));
    }
}
