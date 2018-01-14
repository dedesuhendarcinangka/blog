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
Route::get('hai', function(){
	return 'Hai ini route hai';
});

Route::get('hello', function(){
	return view('Hello');
});

Route::get('haihai', 'HelloController@test' );

Route::get('pengguna', function(){
	return App\User::all();
});

Route::resource('category', 'CategoryController');

Route::resource('post', 'PostController');

Route::resource('author', 'AuthorController');

Route::resource('publisher', 'PublisherController');

Route::resource('book', 'BookController');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function(){
	Route::resource('category', 'CategoryController');
	Route::resource('post', 'PostController');
	Route::resource('author', 'AuthorController');
	Route::resource('publisher', 'PublisherController');
	Route::resource('book', 'BookController');
	Route::get('/', function() {
		return view('welcome');
		});
	});

