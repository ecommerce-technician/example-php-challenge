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

//Route::group(['middleware' => 'github'], function () {
//    Route::get('/', function () {
//        Route::get('/', 'GithubController@joyent');
//    });
//});


Route::get('/run', 'GithubController@insertCommits');

Route::get('/about', 'GithubController@stats');

Route::get('/install', function()
{
    return view('pages.install');
});

Route::get('/', function()
{
    return view('pages.home');
});