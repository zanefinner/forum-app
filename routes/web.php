<?php

use Illuminate\Support\Facades\Route;

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


##COMMON
Route::get('/', function(){
    return redirect('/welcome');
});
Route::get('welcome', function (){
    $message="The only thing that stands between you and success is your will to thrive";
    return view('welcome', ['message'=>$message]);
});

##POSTS
Route::get('/posts/singular/{id}/', 'PostsController@view_singular');
Route::get('/posts/all/', 'PostsController@view_all');
Route::get('/posts/new/', 'PostsController@show_post_view');
Route::post('/posts/new/', 'PostsController@process_new_post');
Route::get('/posts/new/success/{id}','PostsController@new_post_successful');
Route::get('/posts/tag/{tag}/', 'PostsController@view_by_tag');
Route::get('/posts/update/{id}', 'PostsController@show_update_view');
Route::post('/posts/update/{id}', 'PostsController@update_post');
Route::get('/posts/delete/{id}', 'PostsController@delete_post');

##ACCOUNTS
Route::get('/users/show/{id}', 'UserController@show_profile');
Route::get('/users/login', 'UserController@login');
Route::get('/users/signup', 'UserController@signup');
Route::post('/users/login', 'UserController@login');
Route::post('/users/signup', 'UserController@signup');