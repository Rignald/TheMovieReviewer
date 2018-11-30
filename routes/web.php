<?php


use Illuminate\Support\Facades\Route;
// home
Route::get('/', 'PostsController@index')->name('home');

// movies
Route::get('/movies', 'MoviesController@index');
Route::get('/movies/{movie}', 'MoviesController@show');

// posts
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');

// auth
Route::get('/register', 'RegistrationController@create');
Route::post('/register', 'RegistrationController@store');
Route::post('/login', 'SessionsController@store');
Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');

