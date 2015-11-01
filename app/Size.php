<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{

	/**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'sizes';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['code', 'desc'];
    
    // Relations -----------------------------------------------------------------------

    public function products(){
      return $this->belongsToMany('App/Product', 'product_size', 'size_id', 'product_id');
    }

	public function productItems() {
		return $this->hasMany('App\ProductItem', 'size_id', 'id');
	}    
}
