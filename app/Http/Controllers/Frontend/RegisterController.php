<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
//namespace App\Http\Controllers\Frontend\Controller;
//use App\Http\Controllers\Frontend\RegisterController; 

use App\Models\User;
use Illuminate\Http\Request;


class RegisterController extends Controller
{
    public function login(){

        return view('frontend.register.signin');
    }

    public function signinstore(Request $request){

        //dd($request->all());
        $credentials=$request->except('_token');
        if(Auth::attempt($credentials)){

            return redirect()->route('home');
        }
        else{
            return redirect()->back()->with('message','invalid login info');
        }

    }

    public function signup(){

        return view('frontend.register.signup');
    }

    public function signupstore(Request $request){

        //dd($request->all()); 

        $request->validate([
            'name' => 'required|max:50',
            'email' => 'required|unique:users',
            //phone number should be unique
            'phonenumber' => 'required|size:11',
            'password' => 'required|min:6',
        ]);
        
     
        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'mobile' => $request->phonenumber,
            'role'=>'customer'
        ]);
        return redirect()->back()->with('success', 'User Registration Successful');
    }
   

    public function logout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
