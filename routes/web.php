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

Route::get('/','HomeController@showWelcomePage')->name('welcome');

Route::get('/catalogue','CatalogueController@showCataloguePage')->name('catalogue');
Route::get('/catalogue/get/categories','CatalogueController@getCategories')->name('get.categories');
Route::get('/catalogue/get/{category_name}/products','CatalogueController@getCategoryProducts')->name('get.category.products');

