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


Route::get('/view/{id}', function($id){
    return redirect(\App\urls::find($id)->url);
});

Route::get('/', 'UrlsController@index');

Route::post('/post','UrlsController@store');
