<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    public function photo(){
        return $this->belongsTo('App\Photo');
    }
}
