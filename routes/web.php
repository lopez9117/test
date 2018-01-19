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



Route::resource('sites',  'SitesController');

Route::get('upload',  'SitesController@upload');
Route::post('ImportSites',  'SitesController@ImportSites');





	
Route::post('/import-excel', 'SitesController@importUsers');