<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserBackController extends Controller
{
    public function customer_list(){

        $customers=User::where('role', '=', 'customer')->get();
        return view('backend.users.customerList',compact('customers'));

    }

    public function user_list(){


        $users=User::where('role', '!=', 'customer')->get();
        return view('backend.users.userList',compact('users'));

    }

    public function create_user_store(Request $request){

        User::create([

            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->phone,
            'password' => bcrypt($request->password),
            'role'=>'manager'
        ]);
        return redirect()->back()->with('success', 'User created Successfully');
    }


}
