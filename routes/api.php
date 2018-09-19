<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=>'products'], function(){
    Route::get('/discount', 'ProductController@discountProducts');
    Route::get('/{product}', 'ProductController@showProduct');
    Route::get('/', 'ProductController@products');
});

Route::group(['prefix'=>'vendors'], function(){
    Route::get('/', 'VendorController@vendors');
    Route::get('/{vendor}', 'ProductController@showVendor');
});

Route::group(['prefix'=>'categories'], function(){
    Route::get('/', 'ProductController@categories');
    Route::get('/categories-with-products', 'ProductController@categoriesWithProducts');
    Route::get('/{category}', 'ProductController@showCategory');
});

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});




