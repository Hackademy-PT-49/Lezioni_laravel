<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = ['name','cook_time'];

    public function ingredients(){
        return $this->belongsToMany(Ingredient::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
