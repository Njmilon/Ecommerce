<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewProductController extends Controller
{
     //step 3:
     public function new_product(){

        return view('backend.product.new_product');

     }
}
