<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Accessory extends Model
{
    protected $fillable = ['name','price'];

    public function cars(){
        return $this->belongsToMany(Car::class);
    }
}
