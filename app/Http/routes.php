<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


## AUTHENTICATION ##


Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');

Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

Route::get('/logout', 'Auth\AuthController@logout');

###############################################################


## PROTECTED ROUTES ##

Route::group(['middleware' => 'auth'], function() {

	Route::get('/share/add', function () {
	    return view('share.add');
	});

	Route::post('/share/add', 'RecipeShareController@postAdd');

	Route::get('/share/edit/{id?}', 'RecipeShareController@getEdit');
	Route::post('/share/edit/', 'RecipeShareController@postEdit');


	Route::get('/share/confirm-delete/{id?}', 'RecipeShareController@getConfirmDelete');
	Route::get('/share/delete/{id?}', 'RecipeShareController@getDelete');

});

################################################################


## OPEN TO PUBLIC ROUTES ##

Route::get('/', function () {
    return view('home.home');
});

Route::get('/share', 'RecipeShareController@getShare');

Route::get('/share/view/{id?}', 'RecipeShareController@getView');

#################################################################