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
//Route::get('/test','PostController@index');
Auth::routes();
Route::resource('post',"PostController");
/*route::get('createpost','postController@create');
route::post('createpost','postController@create');
*/
Route::resource('comments','CommentController');
Route::get('/home', 'HomeController@index')->name('home');
