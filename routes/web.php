<?php

Route::get('/', function () {
	return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//index page
Route::get('movie', 'MovieController@index');
Route::get('actor', 'ActorController@index');
Route::get('show', 'ShowController@index');


Route::group(['middleware' => 'admin'], function(){
	Route::get('/admin', 'AdminController@index');

	//create page
	Route::get('actor/create', 'ActorController@create');
	Route::get('movie/create', 'MovieController@create');
	Route::get('show/create', 'ShowController@create');
	//store page
	Route::post('actor', 'ActorController@store');
	Route::post('movie', 'MovieController@store');
	Route::post('show', 'ShowController@store');
	//edit page
	Route::get('actor/{actor}/edit', 'ActorController@edit');
	Route::get('movie/{movie}/edit', 'MovieController@edit');
	Route::get('show/{show}/edit', 'ShowController@edit');
	//update page
	Route::patch('actor/{actor}', 'ActorController@update')->name('actor.update');
	Route::patch('movie/{movie}', 'MovieController@update')->name('movie.update');
	Route::patch('show/{show}', 'ShowController@update')->name('show.update');
	//destroy page
	Route::delete('actor/{actor}', 'ActorController@destroy')->name('actor.destroy');
	Route::delete('movie/{movie}', 'MovieController@destroy')->name('movie.destroy');
	Route::delete('show/{show}', 'ShowController@destroy')->name('show.destroy');
	Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');
});


//show page
Route::get('movie/{movie}', 'MovieController@show');
Route::get('actor/{actor}', 'ActorController@show');
Route::get('show/{show}', 'ShowController@show');
