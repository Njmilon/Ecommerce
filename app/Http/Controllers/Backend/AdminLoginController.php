<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminLoginController extends Controller
{
    public function login(){

        return view('backend.login');
    }

    
    public function loginPost(Request $request)
    {


        //dd($request->all());
        //return view('backend.login');
       $credentials=$request->except('_token', 'remember');
       //dd($credentials);

        if(Auth::attempt($credentials))
       {
           //dd("valid user");
            //user logged in
           //dd(auth()->user());
        return redirect()->route('dashboard');
        }
        

       return redirect()->back()->with('message','Invalid User Info.');
    }

   // public function logout()
    //{
        //Auth::logout();
        //return redirect()->route('admin.login');
    //}

    
}
