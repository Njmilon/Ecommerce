<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAccountDetailsController extends Controller
{
    public function accountDetails(){

        return view('frontend.for_users.user_account_details');
    }

    public function wishlist(){

        return view('frontend.for_users.wishlist');
    }
}
