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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', 'LoginController@showLogin');
Route::get('/clientes', 'ClienteController@index');
Route::get('/animais', 'AnimalController@index');
Route::get('/cliente/novo', 'ClienteController@novo');
