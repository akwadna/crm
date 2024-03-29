<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function brand(){
        return $this->belongsTo(Brand::class);
    }
    public function productType(){
        return $this->belongsTo(productType::class);
    }
}
