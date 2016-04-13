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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/home', function () {
//    return view('welcome');
//});
//
# Secure page
//Route::get('/', ['as' => 'home', 'uses' => 'PagesController@home']);

// Home and public pages
Route::get('/', ['as' => 'public',  'uses' => 'PagesController@home']);
Route::get('/page/{id}', ['as' => 'public',  'uses' => 'PagesController@pagegroup']);
Route::get('/pagework/{id}', ['as' => 'public',  'uses' => 'PagesController@pagework']);
Route::get('/pagetexts', ['as' => 'pagetexts',  'uses' => 'PagesController@pagetexts']);
Route::get('/pagetext/{id}', ['as' => 'pagetext',  'uses' => 'PagesController@pagetext']);

    // Authentication routes...
    Route::get('auth/login', 'Auth\AuthController@getLogin');
    Route::post('auth/login', 'Auth\AuthController@postLogin');
    Route::get('auth/logout', 'Auth\AuthController@getLogout');

    // Registration routes...
    Route::get('auth/register', 'Auth\AuthController@getRegister');
    Route::post('auth/register', 'Auth\AuthController@postRegister');


    Route::post('foo/bar', function () {
            return 'Hello World';
    });

    Route::put('foo/bar', function () {
            //
        //});
        //
        //Route::delete('foo/bar', function () {
        //    //
    });
