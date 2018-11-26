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



Route::group(['prefix' => 'drivers'], function () {

    # drivers index
    Route::get('/', [
        'uses' => 'API\DriversController@index',
        'as' => 'drivers',
    ]);



    # drivers post add
    Route::post('post-drivers', [
        'uses' => 'API\DriversController@store',
        'as' => 'post-driver',
    ]);


    # drivers post update
    Route::post('postupdate/{id}', [
        'uses' => 'API\DriversController@update',
        'as' => 'post-update-driver',
    ]);

    # drivers delete
    Route::get('/delete/{id}', [
        'uses' => 'API\DriversController@destroy',
        'as' => 'destroy-driver',
        'title' => '  ',
    ]);

});


Route::group(['prefix' => 'children'], function () {

    # children index
    Route::get('/', [
        'uses' => 'API\ChildrenController@index',
        'as' => 'children',
    ]);



    # children post add
    Route::post('post-children', [
        'uses' => 'API\ChildrenController@store',
        'as' => 'post-children',
    ]);


    # children post update
    Route::post('postupdate/{id}', [
        'uses' => 'API\ChildrenController@update',
        'as' => 'post-update-children',
    ]);

    # children delete
    Route::get('/delete/{id}', [
        'uses' => 'API\ChildrenController@destroy',
        'as' => 'destroy-children',
        'title' => '  ',
    ]);

});



Route::group(['prefix' => 'bus'], function () {

    # bus index
    Route::get('/', [
        'uses' => 'API\BusesController@index',
        'as' => 'bus',
    ]);



    # bus post add
    Route::post('post-bus', [
        'uses' => 'API\BusesController@store',
        'as' => 'post-bus',
    ]);


    # bus post update
    Route::post('postupdate/{id}', [
        'uses' => 'API\BusesController@update',
        'as' => 'post-update-bus',
    ]);

    # bus delete
    Route::get('/delete/{id}', [
        'uses' => 'API\BusesController@destroy',
        'as' => 'destroy-bus',
    ]);

});
