<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\ProductResource;

class CategoryResource extends JsonResource
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
            'category_name' => $this->category_name,
            'slug' => $this->slug,
            'image_url' => $this->image_url,
            'products' => ProductResource::collection($this->products),
        ];
    }
}
