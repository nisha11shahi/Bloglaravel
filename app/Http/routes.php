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

Route::auth();

Route::get('/home', 'HomeController@index');
Route::post('/content', 'PostController@store');
Route::get('/post ', 'PostController@showall');
Route::get('delete/{delete}','PostController@destroy')->name('posts.delete');
Route::get('view/{view}','PostController@viewPost')->name('posts.view');
Route::post('/addcomment', 'CommentController@addcomment');
Route::get('/comment', 'CommentController@viewcomment');