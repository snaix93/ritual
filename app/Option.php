<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['name', 'price', 'photo_id', 'product_id'];

    public function photo(){

        return $this->belongsTo('App\Photo');

    }
}
