<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminCheck;


//  Admin routes
Route::prefix('app')->middleware([AdminCheck::class])->group(function(){
    Route::post('/create_tag', 'AdminController@addTag');
    Route::get('/get_tags', 'AdminController@getTag');
    Route::post('/edit_tag', 'AdminController@editTag');
    Route::post('/delete_tag', 'AdminController@deleteTag');
    Route::get('/get_contacts', 'AdminController@getContact');
    Route::post('/delete_contact', 'AdminController@deleteContact');
    Route::post('/upload', 'AdminController@upload');
    Route::post('/delete_image', 'AdminController@deleteImage');
    Route::post('/create_category', 'AdminController@addCategory');
    Route::get('/get_category', 'AdminController@getCategory');
    Route::post('/edit_category', 'AdminController@editCategory');
    Route::post('/delete_category', 'AdminController@deleteCategory');
    Route::post('/create_user', 'AdminController@createUser');
    Route::get('/get_users', 'AdminController@getUsers');
    Route::post('/edit_user', 'AdminController@editUser');
    Route::post('delete_user','AdminController@deleteUser');
    Route::post('/admin_login','AdminController@adminLogin');


    // roles routes
    Route::post('/create_role','AdminController@addRole');
    Route::get('/get_roles', 'AdminController@getRoles');
    Route::post('/edit_role', 'AdminController@editRole');
    Route::post('/assign_roles', 'AdminController@assignRole');



    // blog
    Route::post('create_blog', 'AdminController@createBlog');
    Route::get('blogsdata', 'AdminController@blogdata'); // get the blogs item
    Route::post('delete_blog', 'AdminController@deleteBlog');
    Route::get('blog_single/{id}', 'AdminController@singleBlogItem');
    Route::post('update_blog/{id}', 'AdminController@updateBlog');

});



Route::post('/createBlog', 'AdminController@uploadEditorImage');
Route::get('/slug','AdminController@slug');
Route::get('/blogdata', 'AdminController@blogdata');



Route::get('/logout','AdminController@logout');
Route::get('/login','AdminController@index');
Route::any('/{slug}','AdminController@index');


// end  Admin routes //





// Blog pages routes

Route::get('/', 'BlogController@index')->name('general');
Route::post('/submit/msg', 'ContactFormController@submit');

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);

    if (request()->fullUrl() === redirect()->back()->getTargetUrl()) {
        return redirect('/');
    }

    return redirect()->back();
});



// Route::any('{slug}', function(){
//     return view('welcome');
// });
