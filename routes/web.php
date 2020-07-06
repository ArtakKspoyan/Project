<?php

use Illuminate\Support\Facades\Route;



Route::post('app/create_tag', 'AdminController@addTag');
Route::get('app/get_tags', 'AdminController@getTag');
Route::post('app/edit_tag', 'AdminController@editTag');
Route::post('app/delete_tag', 'AdminController@deleteTag');
Route::post('app/upload', 'AdminController@upload');
Route::post('app/delete_image', 'AdminController@deleteImage');
Route::post('app/create_category', 'AdminController@addCategory');
Route::get('app/get_category', 'AdminController@getCategory');
Route::post('app/edit_category', 'AdminController@editCategory');

Route::get('/testpage', function () {
    return view('welcome');
});

Route::any('{slug}', function(){
    return view('welcome');
});

// Route::get('/new', 'TestController@conrollerMethod');