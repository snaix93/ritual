<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flower extends Model
{
    protected $fillable = ['done'];

    public function portfolio(){

        return $this->hasOne('App\Portfolio', 'id', 'order_id');

    }
}
