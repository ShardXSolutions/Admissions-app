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
Auth::routes();
Route::resource('admission','AdmissionController');
Route::group(['middleware' => ['web']], function () {
Route::post('kuccpslounge', ['as'=>'kuccpslounge','uses'=>'AdmissionAuthController@login']);
Route::get('/home', 'HomeController@index' );
//Route::get('/search','HomeController@search');
Route::post('apply',['as'=>'apply','uses'=>'AdmissionController@create']);
});
Route::get('/new', function () {
    return view  ('admission.newapplicant');
 });
 /* 
 */