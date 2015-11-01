<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'orders';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['isValid', 'shippingStatus', 'paymentStatus'];
    
    // Relations -----------------------------------------------------------------------

    public function orderItems(){
        return $this->hasMany('App\OrderItem', 'order_id', 'id');
    }

    public function payment(){
        return $this->hasOne('App\Payment', 'order_id', 'id');
    }

    public function customer(){
        return $this->belongsTo('App\Customer', 'customer_id', 'id');
    }

    public function shippingAddress(){
        return $this->belongsTo('App\Address', 'address_id', 'id');
    }

}
