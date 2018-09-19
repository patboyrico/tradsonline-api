<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'star', 'review',
    ];

    public function product()
    {
    	return $this->belongsTo('App\Product');
    }
}
