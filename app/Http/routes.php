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
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});


Route::auth();

Route::get('/', 'guestController@viewG');
Route::get('/userProfile', 'UserController@index');
Route::get('add', 'manage@AddArticle');
Route::post('add', 'manage@AddArticle');
Route::get('view', 'manage@view');
Route::get('/readg/{id}', 'guestController@readG');
Route::get('/read/{id}', 'manage@read');
Route::post('/read/{id}', 'manage@read');
Route::get('/delete/{id}', 'UserController@delete');
Route::get('/edit/{id}', 'UserController@edit');
Route::post('/edit/{id}', 'UserController@edit');
Route::get('/admin', 'AdminController@control');
Route::get('/user','AdminController@showuser');
Route::get('/block/{id}', 'AdminController@blockuser');
Route::post('/search','UserController@search');
Route::post('/contact','ContactMessageController@Addfeedback');
Route::get('/feedback','ContactMessageController@showfeedback');
Route::get('/statistics','AdminController@statistics');
Route::get('/category/{name}','UserController@categoryy');


//Route::get('/deletee/{id}', 'UserController@deletee');