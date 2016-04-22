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

Route::get('/', function () {
    return view('home.home');
});

Route::get('/chow', function () {
    return view('chow.chow');
});

Route::get('/smoothies', function () {
    return view('smoothies.smoothies');
});

Route::get('/cocktails', function () {
    return view('cocktails.cocktails');
});

Route::get('/share', function () {
    return view('share.share');
});