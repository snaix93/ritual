<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Conversion extends Model
{
    protected $fillable = ['value', 'name', 'order_id', 'conversion', 'keyword', 'session_id', 'user_ip', 'campaign', 'product_id', 'link'];
}
