<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/actualites', 'ActualiteController@index')->name('actualites');
Route::get('/actualite/delete/{id}', 'ActualiteController@destroy');
Route::get('/actualite/edit/{id}', 'ActualiteController@edit');
Route::post('/actualite/update', 'ActualiteController@update');
Route::post('/actualite/store', 'ActualiteController@store');
Route::get('/actualite/add', 'ActualiteController@create');


