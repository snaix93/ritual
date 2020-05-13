<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioTag extends Model
{
    protected $fillable = ['portfolio_id', 'tag_id', 'name'];

    public function portfolio(){

        return $this->belongsTo('App\Portfolio');

    }

    public function tag(){

        return $this->belongsTo('App\Tag');

    }
}
