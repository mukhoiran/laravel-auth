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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return 'Hello..';
});

Route::get('/home', function () {
    return view('blog/home');
});

//prefix
Route::group(['prefix' => 'blog'], function(){
  //multi method
  // Route::match(['get','post'], '/blog/testing', 'BlogController@testing');
  Route::match(['get','post'], '/testing', 'BlogController@testing')->name('test');

  // Call controller
  Route::get('/','BlogController@index');

  Route::get('/create','BlogController@create');
  Route::post('/','BlogController@store');
  Route::get('/{id}','BlogController@view');

  Route::get('/{id}/edit','BlogController@edit');
  Route::put('/{id}','BlogController@update');

  Route::delete('/{id}','BlogController@destroy');
});

// with parameter
Route::get('/user/{id}','BlogController@show');

// resource controller
Route::resource('users','UserController');

Auth::routes();

Route::get('/home', 'HomeController@index');
