<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $fillable = [
        'meta_title', 'meta_description', 'title','content','image','category','links','approved','employer_id'
    ];
    //
}
