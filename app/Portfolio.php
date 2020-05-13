<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Portfolio extends Model

{

    protected $fillable = ['name', 'slug', 'description', 'photo_id', 'ppi', 'price2', 'price3','min', 'net', 'discount', 'price', 'views', 'ranking', 'rotating_image', 'category_id'];
    public function getRouteKeyName()

    {

        return 'slug';

    }



    public function photo(){

        return $this->belongsTo('App\Photo');

    }

    public function photos(){

        return $this->hasMany('App\Photo');

    }

    public function sizes(){

        return $this->hasMany('App\Size');

    }

    public function flower(){

        return $this->belongsTo('App\Flower', 'flower_type', 'id');

    }



    public function category(){

        return $this->belongsTo('App\Category', 'category_id', 'slug');

    }

    public function tags(){

        return $this->hasMany('App\PortfolioTag', 'portfolio_id', 'id');

    }

}

