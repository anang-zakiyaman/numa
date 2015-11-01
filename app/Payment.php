<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    /**
     * The database table used by the model.
     * @var string
     */
    protected $table = 'payments';

    /**
     * The attributes that are mass assignable.
     * @var array
     */
    protected $fillable = ['paidAt', 'bank', 'accountName', 'accountNumber'];
    
    // Relations -----------------------------------------------------------------------

    public function order(){
        return $this->belongsTo('App\Order', 'order_id', 'id');
    }

}
