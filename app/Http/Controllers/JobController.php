<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Candidate;

class JobController extends Controller
{
    public function Postajob(){
        return view('submit-a-job');
    }

    public function PostJob(Request $request){
     
        $title= $request->title; 
        $desc= $request->desc; 
        $name= $request->name; 
        $email= $request->email; 
        $CC= $request->CC; 
        $phone= $request->phone; 
        $jobCategory= $request->jobCategory; 
        $submit_button= $request->submit_button; 
        
        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => '12345',
        ]);
        
        $Job = Job::create([
            'meta_title'=> '',
            'meta_description'=>'',
            'title' => $title,
            'content' => $desc,
            'image' => '',
            'category' => $jobCategory,
            'links' => '',
            'approved' => '',
            'employer_id' => '',
        ]);
        if ($user && $Job){
            return 1;
        }
    }
    public function Seekajob(){
        return view('job-seeker');
    }

    public function SeekJob(Request $request){
        //session()->flash('success', 'It works!');
        //return view('request');
     //return redirect()->with('message', 'The success message!');
     //return $request;
        $name= $request->name; 
        $email= $request->email; 
        $CC= $request->CC; 
        $phone= $request->phone; 
        $address= $request->address; 
        $location= $request->location; 
        $jobCategory= $request->jobCategory; 
        $choice= $request->choice; 
        $desiredSalary= $request->desiredSalary; 
        $availability= $request->availability;
        $image= $request->image; 
        $cv= $request->cv; 
        $submit_button= $request->submit_button; 
        

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => '12345',
        ]);
    

        $candidate = Candidate::create([
            'name'=>$name,
            'email'=>$email,
            'CC'=>$CC,
            'phone'=>$phone,
            'address'=>$address,
            'location'=>$location ,
            'jobCategory'=>$jobCategory,
            'choice'=>$choice,
            'desiredSalary'=>$desiredSalary,
            'availability'=>$availability,
            'image'=>'',
            'cv' =>'',
        ]);
        if ($user && $candidate){
            return 1;
        }
        //return redirect()->back()->with('success','successfully submitted');
        
    }
    
}
