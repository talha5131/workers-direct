<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    protected $fillable = [
        
    'name','email','CC','phone' ,'address','location' ,'jobCategory','choice','desiredSalary', 'availability','image','cv' 
];
    //
}
