<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Movie
Route::get('movie', 'MovieController@index');
Route::get('movie/create', 'MovieController@create');
Route::post('movie', 'MovieController@store');
Route::get('movie/{movie}', 'MovieController@show');
Route::get('movie/{movie}/edit', 'MovieController@edit');
Route::patch('movie/{movie}', 'MovieController@update')->name('movie.update');
Route::delete('movie/{movie}', 'MovieController@destroy')->name('movie.destroy');

//Actor
Route::get('actor', 'ActorController@index');
Route::get('actor/create', 'ActorController@create');
Route::post('actor', 'ActorController@store');
Route::get('actor/{actor}', 'ActorController@show');
Route::get('actor/{actor}/edit', 'ActorController@edit');
Route::patch('actor/{actor}', 'ActorController@update')->name('actor.update');
Route::delete('actor/{actor}', 'ActorController@destroy')->name('actor.destroy');



