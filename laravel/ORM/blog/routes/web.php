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

Route::get('/','BlogController@index')->name('blog');
Route::get('/create','BlogController@create')->name('create');
Route::post('/store','BlogController@store')->name('store');
Route::get('/list','BlogController@list')->name('list');
Route::get('/{id}/show','BlogController@show')->name('show');
Route::get('/{id}/edit','BlogController@edit')->name('edit');
Route::post('/{id}/update','BlogController@update')->name('update');
Route::get('/{id}/delete','BlogController@destroy')->name('delete');

/*category*/
Route::get('/catecreate','CategoryController@catecreate')->name('catecreate');
Route::post('/catestore','CategoryController@store')->name('catestore');
Route::get('/catelist','CategoryController@list')->name('catelist');
Route::get('/{id}/cateedit','CategoryController@edit')->name('cateedit');
Route::post('/{id}/cateupdate','CategoryController@update')->name('cateupdate');
Route::get('/{id}/catedel','CategoryController@destroy')->name('catedel');
