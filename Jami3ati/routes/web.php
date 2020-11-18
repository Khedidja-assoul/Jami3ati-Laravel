<?php

/*
 *
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::post('/login', 'front-end.module')->name('module');*/
/*Route::get('/cours',function (){
    return view('front-end.cours');
});

Route::get('/forum', 'HomeController@forum');
Route::get('/module', 'HomeController@module');

Route::view('/','welcome');
Route::view('Forum','forum');
Route::view('Module','module');
Route::get('/data','HomeController@data');
*/



//Route::resource('topics','TpoicController');
/*Route::get('/',function (){
    return view('welcome');
});*/
Route::get('/','TpoicController@index')->name('topics.index');
Route::resource('topics','TpoicController');

Route::post('/comments/{topic}','CommentController@store')->name('comments.store');

Auth::routes();
Route::get('/home','HomeController@index')->name('home');

Route::post('/commentReply/{comment}','commentController@storeCommentReply')->name('comments.storeReply');
