<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    public function offers(){
        return $this->hasMany(Offer::class);
    }
    public function salesOrders(){
        return $this->hasMany(salesOrder::class);
    }
    public function purchaseOrders(){
        return $this->hasMany(purchaseOrder::class);
    }
}
