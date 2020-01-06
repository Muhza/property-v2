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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/daftar-properti', 'HouseController@index')->name('property.list');
Route::get('/rincian/{id}', 'HouseController@show')->name('property.show');

Route::get('/artikel', 'ArticleController@index')->name('article.list');
Route::get('/artikel/detail/{slug}', 'ArticleController@show')->name('article.show');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
