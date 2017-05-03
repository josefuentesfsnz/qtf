<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar todas las rutas para una aplicación.
| Es una brisa. Simplemente diga a Laravel los URI que debe responder a
| Y darle el controlador para llamar cuando se solicita ese URI.
|
*/
//configuracion de la vista inicial
//eliminado provisoriamente 
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

Route::get('usuario/index', 'UsuarioController@index');


Route::group(['prefix' =>'admin'], function() {
    
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
        'uses'=>'UsersController@destroy',
        'as'=>'admin.users.destroy'
            ]);

    Route::resource('evento', 'EventoController');
    Route::get('evento/{id}/destroy', [
        'uses'=>'EventoController@destroy',
        'as'=>'admin.evento.destroy'
            ]);
    Route::resource('categorias', 'CategoriasController');
    Route::get('categorias/{id}/destroy', [
        'uses'=>'CategoriasController@destroy',
        'as'=>'admin.categorias.destroy'
            ]);


});

Route::get('/test/datepicker', function () {
    return view('datepicker');
});
Route::post('/test/save', ['as' => 'save-date',
                           'uses' => 'DateController@showDate', 
                            function () {
                                return '';
                            }]);