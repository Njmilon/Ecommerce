<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function coupon(){

        return view('backend.coupon.coupon');
    }

    public function create(){

        return view('backend.coupon.create');
    }
}
