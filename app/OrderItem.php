<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'order_items';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [];

    // Relations -----------------------------------------------------------------------

    public function order() {
        return $this->belongsTo('App\Order', 'order_id', 'id');
    }

    public function productItem() {
        return $this->belongsTo('App\ProductItem', 'product_item_id', 'id');
    }

    public function price() {
        return $this->belongsTo('App\Price', 'price_id', 'id');
    }
    
}
