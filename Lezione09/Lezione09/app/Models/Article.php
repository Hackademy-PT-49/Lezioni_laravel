<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// in automatico laravel sa che questo modello fa riferimento alla tabella articles sul database

class Article extends Model
{
    protected $fillable = ['title','description','body','category'];
}
