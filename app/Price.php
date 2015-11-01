<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'prices';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'currency', 'price', 'validFrom', 'validUntil'];

    // Relations -----------------------------------------------------------------------

    public function productItem() {
        return $this->belongsTo('App\ProductItem', 'product_item_id', 'id');
    }

    public function orderItems() {
        return $this->hasMany('App\OrderItem', 'price_id', 'id');
    }
    
}
