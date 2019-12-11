<?php

Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::resource('fixtures','fixturesController');

Route::resource('experience', 'ExperienceController');

/*

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

Route::get('/notification', 'NotificationsController@notification');
    


Route::get('session', function() {
    
    return view('session');
    
 });


Route::get('create', function() {

    return view('create');

});

function flash($message) {
       session()->flash('message', $message);
}

Route::post('session', function() {

    flash('Your session has been created!');
   
    return redirect('session');

});

Route::get('documents/{document}','DocumentsController@show');