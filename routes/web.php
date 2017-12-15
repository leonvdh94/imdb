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

	//create pages
	Route::get('actor/create', 'ActorController@create');
	Route::get('movie/create', 'MovieController@create');
	Route::get('show/create', 'ShowController@create');
	//store pages
	Route::post('actor', 'ActorController@store');
	Route::post('movie', 'MovieController@store');
	Route::post('show', 'ShowController@store');
	Route::post('season', 'SeasonController@store');
	//edit pages
	Route::get('actor/{actor}/edit', 'ActorController@edit');
	Route::get('movie/{movie}/edit', 'MovieController@edit');
	Route::get('show/{show}/edit', 'ShowController@edit');
	//update pages
	Route::patch('actor/{actor}', 'ActorController@update')->name('actor.update');
	Route::patch('movie/{movie}', 'MovieController@update')->name('movie.update');
	Route::patch('show/{show}', 'ShowController@update')->name('show.update');
	//destroy pages
	Route::delete('actor/{actor}', 'ActorController@destroy')->name('actor.destroy');
	Route::delete('movie/{movie}', 'MovieController@destroy')->name('movie.destroy');
	Route::delete('show/{show}', 'ShowController@destroy')->name('show.destroy');
	Route::delete('user/{user}', 'UserController@destroy')->name('user.destroy');
});

//show pages
Route::get('movie/{movie}', 'MovieController@show');
Route::get('actor/{actor}', 'ActorController@show');
Route::get('show/{show}', 'ShowController@show');

//comment page
Route::post('comment', 'CommentController@store');
Route::delete('comment/{comment}', 'CommentController@destroy')->name('comment.destroy');

//search pages
Route::get('/search', 'SearchController@search');
Route::post('/search', 'SearchController@result');

