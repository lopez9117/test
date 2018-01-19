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
    return view('auth.login');
});

Auth::routes();

Route::get('home', ['as' => 'home', 'uses' => 'SitesController@index']);
Route::get('sites', ['as' => 'sites', 'uses' => 'SitesController@index']);
Route::delete('sites/{id}', ['as' => 'sites.destroy', 'uses' => 'SitesController@destroy']);
Route::get('crearsite', ['as' => 'sites.create', 'uses' => 'SitesController@create']);
Route::get('versite', ['as' => 'sites.show', 'uses' => 'SitesController@show']);
Route::get('editarsite', ['as' => 'sites.edit', 'uses' => 'SitesController@edit']);
Route::post('guardarsite', ['as' => 'sites.store', 'uses' => 'SitesController@store']);


	
Route::post('/import-excel', 'SitesController@importUsers');