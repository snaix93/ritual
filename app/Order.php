<?php



namespace App;



use Illuminate\Database\Eloquent\Model;



class Order extends Model

{
    protected $fillable = ['done', 'profit', 'available', 'driver', 'options', 'delivery_date', 'delivery_range',  'flow_amount', 'r_address','r_number', 'message','b_email','b_number','price','paid',
       'done','profit', 'delivery_type','driver', 'available', 'description', 'size'];

    public function portfolio(){

        return $this->hasOne('App\Portfolio', 'id', 'order_id');

    }

    public function options(){
        return $this->hasMany('App\Option');
    }

}

