<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


// POST ROUTES...

Route::get('/p/create', 'PostsController@create');

Route::get('/p/{post}', 'PostsController@show');

Route::post('/p', 'PostsController@store');

Route::post('follow/{user}', function () {
    return ['success'];
});


// PROFILE ROUTES...

Route::get('/profile/{user}', 'ProfilesController@index')->name('profile.show');

Route::get('/profile/{user}/edit', 'ProfilesController@edit')->name('profile.show');

Route::patch('/profile/{user}', 'ProfilesController@update')->name('profile.update');


