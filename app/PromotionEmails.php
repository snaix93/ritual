<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PromotionEmails extends Model
{
    protected $fillable = ['email', 'value', 'message'];
}
