<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title='Dashboard';
        $link='Dashboard / home';
        return view('backend.layouts.home',compact('title','link'));
    }

    public function contact()
    {
        return view('backend.layouts.contact');
    }

    
    public function userview()
    {
        return view('frontend.master');
    }
}
