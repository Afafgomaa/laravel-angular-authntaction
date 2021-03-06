<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
        'uses' => 'ProductController@index',
        'as'   => 'product.index',
    ]);
//Route::resource('products','ProductController');
Route::group(['prefix' => 'products'], function () {
    Route::get('/{id}', [
        'uses' => 'ProductController@show',
        'as'   => 'product.show',
    ]);

    Route::post('/', [
        'uses' => 'ProductController@store',
        'as'   => 'product.store',
    ]);

    Route::put('/{id}', [
        'uses' => 'ProductController@update',
        'as'   => 'product.update',
    ]);

    Route::delete('/{id}', [
        'uses' => 'ProductController@destroy',
        'as'   => 'product.destroy',
    ]);
});
