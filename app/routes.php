<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('hello_world/{name?}', function($name = 'John')
{
    echo "Hello World, $name";
})->where('name', '[A-Za-z]+');

Route::resource('welcome', 'WelcomeController');

Route::resource('demo1', 'DemoController');

Route::get('user/{id}', 'userController@showProfile');