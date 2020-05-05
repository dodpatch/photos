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
Auth::routes(['verify'=>'true']);
Route::get('/', 'HomeController@welcome')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home')->middleware("verified");
Route::middleware('admin')->group(function(){
	Route::resource('category','CategoryController',['except'=>'show']);
});

Route::middleware('admin', 'verified')->group(function()
{
	Route::resource('image', 'ImageController', ['create', 'store', 'destroy', 'update']);
});

