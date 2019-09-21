<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moneyMakerProcess extends Model
{
    public function moneyMaker(){
        return $this->belongsTo(moneyMaker::class);
    }
}
