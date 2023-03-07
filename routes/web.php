<?php
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KuccpsPlacedStudents;
use App\Http\Controllers\SendMailController;
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
//Auth::routes(['register' => false]);
//Auth::Logout();
Auth::routes();
Route::resource('admission','AdmissionController');
Route::group(['middleware' => ['web']], function () {
Route::post('kuccpslounge', ['as'=>'kuccpslounge','uses'=>'AdmissionAuthController@login']);

Route::get('/admin',['as'=>'admin','uses'=>'HomeController@index']);
Route::post('contacted','HomeController@updateContacted');
Route::get('/search','HomeController@search');

Route::post('apply',['as'=>'apply','uses'=>'AdmissionController@create']);
});
Route::get('/new', function () {
    return view  ('admission.newapplicant');
 });
 Route::get('/settings', 'HomeController@settings');
 Route::post('/settings', 'HomeController@setsettings');
 Route::get('/import', 'HomeController@import');
 Route::post('/import', 'HomeController@importData');

 Route::get('send-mail', [SendMailController::class, 'sendmail']);
