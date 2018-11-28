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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::group(['middleware'=> "auth"], function() {
    Route::get('/studentai', 'StudentsController@index')->name('studentai.index');
    Route::get('/studentai/create', 'StudentsController@create')->name('studentai.create');
    Route::post('/studentai/store', 'StudentsController@store')->name('studentai.store');
    Route::get('/studentai/{id}/edit', 'StudentsController@edit')->name('studentai.edit');
    Route::post('/studentai/{id}/update', 'StudentsController@update')->name('studentai.update');
    Route::post('/studentai/{id}/destroy', 'StudentsController@destroy')->name('studentai.destroy');
});

Route::group(['middleware'=> "auth"], function() {
    Route::get('/paskaitos', 'LecturesController@index')->name('paskaitos.index');
    Route::get('/paskaitos/create', 'LecturesController@create')->name('paskaitos.create');
    Route::post('/paskaitos/store', 'LecturesController@store')->name('paskaitos.store');
    Route::get('/paskaitos/{id}/edit', 'LecturesController@edit')->name('paskaitos.edit');
    Route::put('/paskaitos/{id}/update', 'LecturesController@update')->name('paskaitos.update');//buvo post
    Route::post('/paskaitos/{id}/destroy', 'LecturesController@destroy')->name('paskaitos.destroy');
});

Route::group(['middleware'=> "auth"], function() {
    Route::get('/pazymiai', 'GradesController@index')->name('pazymiai.index');
    Route::get('/pazymiai/create', 'GradesController@create')->name('pazymiai.create');
    Route::post('/pazymiai/store', 'GradesController@store')->name('pazymiai.store');
    Route::get('/pazymiai/{id}', 'GradesController@show')->name('pazymiai.show');
});
