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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('index');
    });

    Route::get('/acerca-de', function () {
        return view('about');
    });

    Route::group(['prefix' => 'vecinos'], function() {
        Route::get('/nuevo', 'NeighbourController@createForm');
        Route::post('/nuevo', 'NeighbourController@createNew');
    });

    /*
    Route::get('/miruta', function () {
        return view('mivista');
    });
    */
});

Auth::routes();
