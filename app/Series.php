<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    public function videos(){
        return $this->hasMany('App\Video')->orderBy('episode_number','asc');
    }
}
