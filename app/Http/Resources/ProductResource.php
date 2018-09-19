<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
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
            'productName' => $this->name,
            'description' => $this->description,
            'imageUrl' => $this->image_url,
            'price' => $this->price, 
            'discount' => $this->discount
        ];
    }
}
