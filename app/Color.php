<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'colors';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'color_code', 'desc'];

    // Relations -----------------------------------------------------------------------

    public function products() {
        return $this->belongsToMany('App\Product', 'product_color', 'color_id', 'product_id');
    }

    public function productItems() {
        return $this->hasMany('App\ProductItem', 'color_id', 'id'); 
    }

}
