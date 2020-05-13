<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'name_ru', 'slug', 'type', 'display_name', 'display_name_ru', 'description', 'description_ru', 'main_category'];
    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function portfolios(){

        return $this->hasMany('App\Portfolio', 'category_id', 'slug')->whereAvailable(1);
    }

    public function subCategories(){
        return $this->hasMany('App\Category', 'main_category', 'id');
    }

//    public function allPortfolios(){
//        $categories = Category::whereMainCategory($this->id)->pluck('id');
//        dd($categories);
//        return Portfolio::whereIn('category_id', $categories)->get();
//        dd($categories);
//        dd($this);
////        return Portfolio::where
//    }
}
