<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'vendor_name', 'country', 'state', 'altnumber', 'email', 'number', 'address', 'password', 
    ];

    public function categories() {
        $this->hasManyThrough('App\Product', 'App\Category');
    }
}
