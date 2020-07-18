<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['header', 'name', 'description', 'header_ru', 'name_ru', 'description_ru' ];
}
