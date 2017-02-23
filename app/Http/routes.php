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

Route::get('orders', function() {
    return view('pages.orders'); 
});

Route::get('foods', function() {
    return view('pages.foods'); 
});

Route::get('statistics', function() {
    return view('pages.statistics'); 
});

Route::get('reports', function() {
    return view('pages.reports'); 
});

Route::get('changeLang/{lang}', function($lang) {
    App::setlocale($lang);
});


Route::resource('foodClasses', 'FoodClassController');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/', 'HomeController@index');