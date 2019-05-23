<?php

Route::get('/', function () {
    return view('welcome');
});


/* Page: index, cuts, dashboard, create/delete */
/* -method -Controller -SubRule
/* Page: index */
Route::get('/', 'PagesController@index');
/* Page: cuts */
Route::get('/cuts', 'PagesController@cuts');
/* Function Routes */
Route::resource('posts', 'PostsController');





/*Route::resource('cuts', 'PostsController');*/
Auth::routes();

Route::get('/dashboard', 'DashboardController@index');