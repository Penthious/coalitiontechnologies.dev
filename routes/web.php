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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'product'], function (){
    Route::get('/', [
        'uses' => 'ProductsController@index',
        'as' => 'products_index',
    ]);
    Route::get('/create', [
        'uses' => 'ProductsController@create',
        'as'   => 'products_create',
    ]);
    Route::post('/store', [
        'uses' => 'ProductsController@store',
        'as'   => 'products_store',
    ]);
    Route::get('/edit/{id}', [
        'uses' => 'ProductsController@edit',
        'as'   => 'product_edit',
    ]);
    Route::post('/update/{id}', [
        'uses' => 'ProductsController@update',
        'as'   => 'products_update',
    ]);
    Route::delete('/destroy/{id}', [
        'uses' => 'ProductsController@delete',
        'as'   => 'products_delete',
    ]);
});
