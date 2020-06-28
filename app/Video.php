<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $appends = ['url'];

    public function series(){
        return $this->belongsTo('App\Series');
    }

    public function getUrlAttribute()
    {
        return route('series.episode',[$this->series,$this->episode_number]);
    }
}
