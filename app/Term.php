<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Term extends Model
{
    protected $table = 'terms';
    
    protected $fillable = [
        'meta_title', 'meta_description', 'title','content','image','category','links','approved','employer_id'
    ];
}
