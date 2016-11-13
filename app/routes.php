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
	return View::make('home');
});

Route::get('/register', function()
{
    return View::make('register');
});
Route::get('/login', function()
{
    return View::make('login');
});

Route::get('/trips', function()
{
    return View::make('trips');
});

Route::get('/speakers', function()
{
    return View::make('speakers');
});

//Route::get('/', 'HomeController@showWelcome');
Route::get('/login', 'AuthController@getLogin');
Route::get('/register', 'AuthController@getRegister');
Route::get('/logout', 'AuthController@getLogout');
Route::post('/auth/login', 'AuthController@userAuth');
Route::post('/auth/register', 'AuthController@userRegister');
//>>>>>>> origin/master
