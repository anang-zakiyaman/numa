<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductType extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'product_types';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['name', 'desc'];

    // Relations -----------------------------------------------------------------------

    public function products(){
    	return $this->hasMany('App\Product', 'product_type_id', 'id');
    }
    
}
