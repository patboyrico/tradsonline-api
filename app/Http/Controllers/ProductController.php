<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Http\Resources\ProductResource;
use App\Http\Resources\CategoryResource;
use App\Vendor;
use App\Http\Resources\VendorResource;


class ProductController extends Controller
{
    public function products() {
        $products = ProductResource::collection(Product::all());
        return $products;
    }

    public function discountProducts() {
        $discountedProduct = Product::orderBy('discount', 'DESC')->first();
        return response()->json($discountedProduct);
    }

    public function categories() {
        $categories = CategoryResource::collection(Category::all());
        return $categories;
    }

    public function categoriesWithProducts() {
        $categories = Category::all();
        $count = count($categories);
        $categoriesWithProducts = array();

        for($i = 0; $i <= $count - 1; $i++) {
            if($categories[$i]->products->count() > 0) {
                array_push($categoriesWithProducts, $categories[$i]);
            }
        }
        return response()->json($categoriesWithProducts);
    }

    public function showCategory(Category $category) {
        CategoryResource::withoutWrapping();
        return new CategoryResource($category);
    }

    public function showProduct(Product $product) {
        ProductResource::withoutWrapping();
        return new ProductResource($product);
    }

    
}
