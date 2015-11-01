<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductItem extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'product_items';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['stock'];

    // Relations -----------------------------------------------------------------------

    public function product() {
        return $this->belongsTo('App\Product', 'product_id', 'id');
    }

    public function color() {
        return $this->belongsTo('App\Color', 'color_id', 'id');
    }

    public function size() {
        return $this->belongsTo('App\Size', 'size_id', 'id');
    }

    public function prices() {
        return $this->hasMany('App\Price', 'product_item_id', 'id');
    }

    public function inventoryItems() {
        return $this->hasMany('App\InventoryItem', 'product_item_id', 'id');
    }

    public function orderItems() {
        return $this->hasMany('App\OrderItem', 'product_item_id', 'id');
    }

}
