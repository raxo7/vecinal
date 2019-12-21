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
    return view('home');
});

Route::group(['middleware' => 'auth:admin', 'prefix' => 'admin'], function () {
    Route::get('/', function () {
        return view('admin.index');
    });

    Route::group(['prefix' => 'vecinos'], function() {
        Route::get('/', 'NeighbourController@index');
        Route::get('/nuevo', 'NeighbourController@createForm');
        Route::post('/nuevo', 'NeighbourController@createNew');
        Route::get('/{id}/editar', 'NeighbourController@editForm');
        Route::post('/{id}/editar', 'NeighbourController@editNeighbour');
        Route::get('/{id}/eliminar', 'NeighbourController@deleteConfirm');
        Route::post('/{id}/eliminar', 'NeighbourController@deleteNeighbour');
    });

    Route::group(['prefix' => 'actividades'], function() {
        Route::get('/', 'ActivityController@index');
        Route::get('/nueva', 'ActivityController@createForm');
        Route::post('/nueva', 'ActivityController@createNew');
        Route::get('/{id}/editar', 'ActivityController@editForm');
        Route::post('/{id}/editar', 'ActivityController@editActivity');
        Route::get('/{id}/eliminar', 'ActivityController@deleteConfirm');
        Route::post('/{id}/eliminar', 'ActivityController@deleteActivity');
    });

    Route::group(['prefix' => 'boletas'], function() {
        Route::get('/', 'TicketController@index');
        Route::get('/nueva', 'TicketController@createForm');
        Route::post('/nueva', 'TicketController@createNew');
        Route::get('/{id}/editar', 'TicketController@editForm');
        Route::post('/{id}/editar', 'TicketController@editTicket');
        Route::get('/{id}/eliminar', 'TicketController@deleteConfirm');
        Route::post('/{id}/eliminar', 'TicketController@deleteTicket');
    });
});

Route::group(['middleware' => 'auth:user', 'prefix' => 'vecino'], function () {
    Route::get('/', function () {
        return view('neighbours.index');
    });

    Route::group(['prefix' => 'boletas'], function() {
        Route::get('/', 'TicketController@index');
        Route::get('/nueva', 'TicketController@createForm');
        Route::post('/nueva', 'TicketController@createNew');
        Route::get('/{id}/editar', 'TicketController@editForm');
        Route::post('/{id}/editar', 'TicketController@editTicket');
        Route::get('/{id}/eliminar', 'TicketController@deleteConfirm');
        Route::post('/{id}/eliminar', 'TicketController@deleteTicket');
    });
});

Route::get('/acerca-de', function () {
    return view('about');
});

Route::get('/noticias', 'PublicController@news');

Auth::routes();
Route::get('/logout' , 'Auth\LoginController@logout');
