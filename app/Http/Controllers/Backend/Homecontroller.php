<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Homecontroller extends Controller
{
    public function home(){

        return view('backend.layouts.home');
    }

    public function dashboard(){

        return view('backend.layouts.home');
    }

    public function ershop(){

        return view('backend.layouts.home');
    }

    public function logout(){

        Auth::logout();
        return redirect()->route('admin.login');
    }

}
