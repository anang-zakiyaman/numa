<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InventoryItem extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'inventory_items';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = [ 'startCreationAt', 'finishCreationAt', 'currency', 'cost' ];


    // Relations -----------------------------------------------------------------------
    
    public function productItem() {
        return $this->belongsTo('App\ProductItem', 'product_item_id', 'id');
    }

    public function vendor() {
        return $this->belongsTo('App\Vendor', 'vendor_id', 'id');
    }

}
