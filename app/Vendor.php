<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'vendors';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'phone', 'email', 'note'];
    
    // Relations -----------------------------------------------------------------------

    public function inventoryItems(){
        return $this->hasMany('App\InventoryItem', 'vendor_id', 'id');
    }

    public function address() {
        return $this->belongsTo('App\Address', 'address_id', 'id');
    }
    
}
