<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{	
	/**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'products';
    
    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'desc'];
    
    // Relations -----------------------------------------------------------------------

    public function productType() {
    	return $this->belongsTo('App\ProductType', 'product_type_id', 'id');
    }

    public function sizes() {
    	return $this->belongsToMany('App\Size', 'product_size', 'product_id', 'size_id');
    }

	public function colors() {
    	return $this->belongsToMany('App\Color', 'product_color', 'product_id', 'color_id');
    }

    public function productItems() {
    	return $this->hasMany('App\ProductItem', 'product_id', 'id');
    }    
}
