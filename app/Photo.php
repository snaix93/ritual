<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Photo extends Model

{

    protected $uploads = '/images/';

    protected $fillable = ['file', 'portfolio_id', 'type'];



    public function getFileAttribute($photo){

        return $this->uploads . $photo;

    }

}

