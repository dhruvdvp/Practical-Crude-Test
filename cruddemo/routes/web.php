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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::match(['get','post'],'/','CrudController@adddetails');
Route::get('/display','CrudController@display');
Route::match(['get','post'],'edit/{id}','CrudController@edit');
Route::match(['get','post'],'delete/{id}','CrudController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

