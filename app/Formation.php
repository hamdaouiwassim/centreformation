<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    //
    public function inscription(){
        return $this->hasMany('App\Inscription','formation','id');
    }
}
