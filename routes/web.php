<?php

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::resource('fixtures','fixturesController');

/*
Route:resources
Route::get('/fixtures', 'fixturesController@index');
Route::get('/fixtures/create', 'fixturesController@create');
Route::post('/fixtures', 'fixturesController@store');
Route::get('/fixtures/{fixture}', 'fixturesController@show');
Route::get('/fixtures/{fixture}/edit', 'fixturesController@edit');
Route::patch('/fixtures/{fixture}', 'fixturesController@update');
Route::delete('/fixtures/{fixture}', 'fixturesController@destroy');
*/

Route::patch('/players/{player}', 'FixturePlayersController@update');

Route::post('fixtures/{fixture}/players', 'FixturePlayersController@store');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
