<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = ['model','color','price','brand_id'];

    public function brand(){
        return $this->belongsTo(Brand::class);
    }

    public function accessories(){
        return $this->belongsToMany(Accessory::class);
    }
}
