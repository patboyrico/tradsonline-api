<?php

namespace App\Http\Controllers;
use App\Vendor;
use App\Product;
use App\Http\Resources\VendorResource;

use Illuminate\Http\Request;

class VendorController extends Controller
{
    public function vendors() {
        $vendors = VendorResource::collection(Product::all());
        return $vendors;
    }

    public function showVendor(Vendor $vendor)
    {
        VendorResource::withoutWrapping();
        return new VendorResource($vendor);
    }
}
