<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class moneyMaker extends Model
{
    public function moneyMakerProcess(){
        return $this->hasMany(moneyMakerProcess::class);
    }
}
