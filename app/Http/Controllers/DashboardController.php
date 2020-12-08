<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index(Request $request){
        if($request->session()->has('admin')) {
            return view('admin.index');
        }
        else
            return redirect('admin-login');
    }
}
