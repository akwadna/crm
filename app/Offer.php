<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    public function client(){
        return $this->belongsTo(moneyMaker::class);
    }
    public function company(){
        return $this->belongsTo(moneyMaker::class);
    }
    public function vendor(){
        return $this->belongsTo(moneyMaker::class);
    }
    public function service(){
        return $this->belongsTo(moneyMaker::class);
    }
    public function product(){
        return $this->belongsTo(moneyMaker::class);
    }
}
