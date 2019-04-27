<?php

//use Symfony\Component\Routing\Annotation\Route;


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

Route::get('/', 'PostController@index');

Route::resource('tag', 'TagController');
Route::resource('admin/tag', 'TagController');

//Route::get('/test','PostController@index');
Auth::routes();
Route::resource('admin/post',"PostController");
Route::resource('post',"PostController");

Route::get('admin/post/{post}/approve',"PostController@approve");
Route::get('admin/post/{post}/hide',"PostController@hide");


/*route::get('createpost','postController@create');
route::post('createpost','postController@create');
*/
Route::resource('comments','CommentController');
Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/admin',function(){
        return view('admin.index');
    });
    Route::get('/admin/postedposts','PostController@postedPosts');
    Route::get('/admin/pendingposts','PostController@pendingPosts');
<<<<<<< HEAD
    Route::resource('/user','UsersController');
=======
    Route::get('/admin/myposts','PostController@myPosts');

>>>>>>> 659c39ed35750625c1b8ea75f169f7a21d2413eb

