<?php

Auth::routes();

Route::get('/', 'PagesController@index');
Route::get('/archives', 'PagesController@archives');
Route::get('/bpl-sign-in', 'PagesController@globalAuthPage');

Route::resource('posts', 'PostsController');

//Tags Routing
Route::get('/posts/tags/{tag}', 'TagsController@index');

Route::post('/posts/{answer}/comments', 'CommentsController@store');

Route::post('/posts/{post}/post-answers', 'PostAnswersController@store');

Route::get('/dashboard', 'DashboardController@index');


