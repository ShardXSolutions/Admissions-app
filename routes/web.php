<?php
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\KuccpsPlacedStudents;
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
//Route::get('/home', 'HomeController@index' );
Route::get('/admin',['as'=>'admin','uses'=>'HomeController@index']);

Route::get('/search','HomeController@search');

Route::post('apply',['as'=>'apply','uses'=>'AdmissionController@create']);
});
Route::get('/new', function () {
    return view  ('admission.newapplicant');
 });
 
 Route::get('/import', function () {
    
   return view('import',[
        'admission' => App\Models\Admission::all()
   ]);
 });

Route::post('import', function () {
    Excel::import(new KuccpsPlacedStudents, request()->file('file'));
    return redirect()->back()->with('success','Data Imported Successfully');
});