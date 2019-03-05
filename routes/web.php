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
Route::post('/catalogue/search','CatalogueController@search')->name('search.product');


// products routes for admin.
Route::get('/admin/get/products','ProductController@getProducts')->name('admin.get.products');
Route::post('/admin/add/product','ProductController@addProduct')->name('admin.add.product');
Route::post('/admin/delete/product','ProductController@addProduct')->name('admin.delete.product');




Auth::routes();

Route::get('/register',function (){
    return redirect('/login');
});

Route::get('/ukh-admin', 'HomeController@admin')->name('admin.home');
Route::get('/ukh-admin/products', 'HomeController@viewProducts')->name('admin.products');
