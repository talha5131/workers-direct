<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Candidate;

class JobController extends Controller
{
    public function create(Request $request)
    {
        
            return view('admin.addJob');
       
    }
    
}
