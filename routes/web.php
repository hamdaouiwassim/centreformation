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


Route::get('/evenements', 'EvenementController@index')->name('evenements');
Route::get('/evenement/delete/{id}', 'EvenementController@destroy');
Route::get('/evenement/edit/{id}', 'EvenementController@edit');
Route::post('/evenement/update', 'EvenementController@update');
Route::post('/evenement/store', 'EvenementController@store');
Route::get('/evenement/add', 'EvenementController@create');



Route::get('/formations', 'FormationController@index')->name('formations');
Route::get('/formation/delete/{id}', 'FormationController@destroy');
Route::get('/formation/edit/{id}', 'FormationController@edit');
Route::post('/formation/update', 'FormationController@update');
Route::post('/formation/store', 'FormationController@store');
Route::get('/formation/add', 'FormationController@create');

