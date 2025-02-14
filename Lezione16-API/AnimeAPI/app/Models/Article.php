<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $fillable = ['title','category','views'];

    protected $hidden = ['id','created_at'];
}
