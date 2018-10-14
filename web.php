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



Route::group(['middleware'=>['web']],function(){
	Route::resource('port','PortController');
});

Route::get('/','PortController@get_port');
Route::post('delete','PortController@delete');
Route::POST('editPort','PortController@editPort');
Route::resource('invoice','InvoiceController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/packinglist','PackingController@index');

Route::get('/index','InvoiceController@index');