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

Route::get('/',['as' => 'home', 'uses' => 'HomeController@index']);
Route::get('/tin-tuc',['as' => 'category', 'uses' => 'BlogController@index']);
Route::get('/b/{cat_slug}',['as' => 'category.cat', 'uses' => 'BlogController@category']);
Route::get('/b/{cat_slug}/{art_slug}',['as' => 'article', 'uses' => 'BlogController@article']);
