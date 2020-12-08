<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{ 

    public function login(Request $request)
    {
        if($request->session()->has('admin'))
            return redirect()->route('dashboard');
        else                                     
            return view('admin.login');
    }


    public function check(Request $request)
    {   
       
        $name = $request->username;
        $pass = $request->pass;
       

        if($name == 'admin' && $pass == 'admin2233' )
        {
            $request->session()->put('admin',$name);
            return redirect()->route('dashboard');
        }
        else
            return back()->with('flash_message_error', 'Please Give Correct Credentials');
    }

    public function logout(Request $request)
    {
        $request->session()->forget('admin');
        return redirect('admin-login')->with('flash_message_success', 'You are Logout Out');
    }
}
