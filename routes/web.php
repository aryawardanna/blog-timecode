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
Auth::routes();

Route::get('/', 'BlogController@index');
// Route::get('/field_post', function() {
//     return view('blog.field_post');
// });

Route::get('/field_post/{slug}', 'BlogController@field_blog')->name('blog.field');
Route::get('/list_post', 'BlogController@list_post')->name('blog.list');
Route::get('/list_category/{category}', 'BlogController@list_category')->name('blog.category');
Route::get('/search', 'BlogController@search')->name('blog.search');
Route::get('/contact', 'BlogController@contact')->name('blog.contact');
Route::get('/about', 'BlogController@about')->name('blog.about');


Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
    Route::resource('/category','CategoryController');
    Route::resource('/tag','TagController');
    Route::get('/post/tampil_hapus', 'PostController@tampil_hapus')->name('post.tampil_hapus');
    Route::get('/post/restore/{id}', 'PostController@restore')->name('post.restore');
    Route::delete('post/kill/{id}', 'PostController@kill')->name('post.kill');
    Route::resource('/post', 'PostController');
    Route::resource('/user', 'UserController');
    
});






