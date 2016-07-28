<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',  'Auth\AuthController@getLogin');
Route::get('home', ['as' => 'home','uses' => 'HomeController@index']);
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('auth/logout', ['as' => 'auth/logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
Route::get('invitaciones',['middleware'=>'auth', 'as'=>'invitaciones','uses'=>'InvitacionController@index']);

Route::group(['prefix' =>'admin'], function() {
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
        'uses'=>'UsersController@destroy',
        'as'=>'admin.users.destroy'
            ]);
});

Route::group(['prefix'=>'admin'], function(){
    Route::resource('evento', 'EventoController');
    Route::get('evento/{id}/destroy', [
        'uses'=>'EventoController@destroy',
        'as'=>'admin.evento.destroy'
            ]);
});

Route::group(['prefix'=>'admin'], function(){
    Route::resource('categorias', 'CategoriasController');
    Route::get('categorias/{id}/destroy', [
        'uses'=>'CategoriasController@destroy',
        'as'=>'admin.categorias.destroy'
            ]);
});

