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
    return view('index');
});

Route::get('/new', function () {
    return view('alumni/create');
});
Route::get('alumnis.edit', function () {
	return view('alumni.edit');
});
Route::resource('alumnis','AlumniController');

Auth::routes();
Route::group(['middleware' => ['web']], function () {

Route::get('/home', 'HomeController@index' );
Route::get('/search','HomeController@search');

Route::get('update', 'AlumniAuthController@login');
Route::get('graduateform','AlumniAuthController@gradlogin');

Route::post('update', ['as'=>'update','uses'=>'AlumniAuthController@dologin']);
Route::post('graduateform', ['as'=>'graduateform','uses'=>'AlumniAuthController@dologingrad']);
});
Route::get('/pdf', function () {
   return view  ('alumni.pdf');
});
