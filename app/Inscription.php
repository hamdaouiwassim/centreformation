<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inscription extends Model
{
    //
    public function mformation(){
        return $this->belongsTo('App\Formation','formation','id');
    }
}
