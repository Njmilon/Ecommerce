<?php

namespace App\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeaturedProduct;

class FeatureProductController extends Controller
{
    public function FeatureProductView(){

        return view('backend.layouts.product.feature_product');
    
    }
}
