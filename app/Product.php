<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_name', 'description', 'image_url', 'price', 'discount'
    ];

    public function reviews() {
        $this->hasMany('App\Review');
    }

    public function category()
    {
    	return $this->belongsTo('App\Category');
    }

    public function vendor()
    {
    	return $this->belongsTo('App\Vendor');
    }
}
