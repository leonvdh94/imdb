<?php

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//movie
Route::get('movie', 'MovieController@index');
Route::get('movie/{movie}', 'MovieController@show');



//Actor
Route::get('actor', 'ActorController@index');
Route::get('actor/{actor}', 'ActorController@show');



//Show
Route::get('show', 'ShowController@index');
Route::get('show/{show}', 'ShowController@show');



Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin', 'AdminController@index');
	//actor
	Route::get('actor/create', 'ActorController@create')->name('actor.create');
	Route::post('actor', 'ActorController@store');
	Route::get('actor/{actor}/edit', 'ActorController@edit');
	Route::patch('actor/{actor}', 'ActorController@update')->name('actor.update');
	Route::delete('actor/{actor}', 'ActorController@destroy')->name('actor.destroy');
	//movie
	Route::get('movie/create', 'MovieController@create');
	Route::post('movie', 'MovieController@store');
	Route::get('movie/{movie}/edit', 'MovieController@edit');
	Route::patch('movie/{movie}', 'MovieController@update')->name('movie.update');
	Route::delete('movie/{movie}', 'MovieController@destroy')->name('movie.destroy');
	//show
	Route::get('show/create', 'ShowController@create');
	Route::post('show', 'ShowController@store');
	Route::get('show/{show}/edit', 'ShowController@edit');
	Route::patch('show/{show}', 'ShowController@update')->name('show.update');
	Route::delete('show/{show}', 'ShowController@destroy')->name('show.destroy');
});



