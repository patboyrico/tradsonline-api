<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'basket', 'address'
    ];

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
