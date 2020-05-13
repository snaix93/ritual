<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PortfolioPhoto extends Model
{
    protected $fillable = ['portfolio_id', 'filename'];

    public function portfolio()
    {
        return $this->belongsTo('App\Portfolio');
    }
}
