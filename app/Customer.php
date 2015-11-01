<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'customers';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['firstName', 'lastName', 'phone'];

    // Relations -----------------------------------------------------------------------

    public function orders(){
        return $this->hasMany('App\Order', 'customer_id', 'id')
    }

    public function userAccount() {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }

}
