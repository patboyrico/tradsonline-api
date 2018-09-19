<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductResource;

class VendorResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'country' => $this->country,
            'state' => $this->state, 
            'altnumber' => $this->altnumber,
            'email' => $this->email,
            'number' => $this->number,
            'address' => $this->address,
            'products' => ProductResource::collection($this->products),
        ];
    }
}
