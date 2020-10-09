<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keyword extends Model
{
    protected $table = 'keywords';

    protected $fillable = [
        'meta_title', 'meta_description', 'title','content','image','category','links','approved','employer_id'
    ];
}
