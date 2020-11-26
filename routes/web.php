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

// Admin Routes

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/actualites', 'ActualiteController@index')->name('actualites');
Route::get('/admin/actualite/delete/{id}', 'ActualiteController@destroy')->name('deleteActualite');
Route::get('/admin/actualite/edit/{id}', 'ActualiteController@edit')->name('editActualite');
Route::post('/admin/actualite/update', 'ActualiteController@update')->name('updateActualite');
Route::post('/admin/actualite/store', 'ActualiteController@store')->name('addActualite');
Route::get('/admin/actualite/add', 'ActualiteController@create')->name('createActualite');


Route::get('/admin/evenements', 'EvenementController@index')->name('evenements');
Route::get('/admin/evenement/delete/{id}', 'EvenementController@destroy')->name('deleteEvent');
Route::get('/admin/evenement/edit/{id}', 'EvenementController@edit')->name('editEvent');
Route::post('/admin/evenement/update', 'EvenementController@update')->name('updateEvent');
Route::post('/admin/evenement/store', 'EvenementController@store')->name('addEvent');
Route::get('/admin/evenement/add', 'EvenementController@create')->name('createEvent');

Route::get('/admin/inscriptions', 'InscriptionController@list');
Route::get('/admin/validate/inscription/{id}', 'InscriptionController@valider')->name('validateInscription');
Route::get('/admin/delete/inscription/{id}', 'InscriptionController@supprimer')->name('deleteInscription');

Route::get('/admin/formations', 'FormationController@index')->name('formations');
Route::get('/admin/formation/delete/{id}', 'FormationController@destroy')->name('deleteFormation');
Route::get('/admin/formation/edit/{id}', 'FormationController@edit')->name('editFormation');
Route::post('/admin/formation/update', 'FormationController@update')->name('updateFormation');
Route::post('/admin/formation/store', 'FormationController@store')->name('addFormation');
Route::get('/admin/formation/add', 'FormationController@create')->name('createFormation');

// User Routes

Route::get('/formations', 'FormationController@list');
Route::get('/formation/{id}', 'FormationController@show');



Route::post('/formation/inscription', 'InscriptionController@store')->name('addInscription');

