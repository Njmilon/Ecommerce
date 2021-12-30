<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
//use App\Http\Controllers\Frontend\IndexController;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\IndexImg;
use App\Models\Slider;

class IndexController extends Controller
{
    public function index(){

        $products=Product::where('recent',1)->get(); 
        $featured=Product::where('featured',1)->get(); 
        $categories=Category::all();
        $frontendSliders=Slider::all();       
        $upperImages=IndexImg::where('upperImg',1)->latest()->take(2)->get(); 
        $middleImages=IndexImg::where('middleImg',1)->latest()->take(8)->get();
        return view('frontend.index',compact('products','categories','featured','frontendSliders','upperImages','middleImages'));
        
    }

    public function checkout(){

        return view('frontend.all_bills.checkout'); 


    }

    public function ershopHome(){

        return view('frontend.index');


    }

    public function CategoriesProduct($cat_id){

        $catwiseProduct=Product::where('categories_id',$cat_id)->get();
        return view('frontend.products.cat_wise_product',compact('catwiseProduct'));
    }

   

     

  





}
