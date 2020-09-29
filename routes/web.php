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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('school', 'SchoolController');

Route::get('contactus', 'SchoolController@contactus');
Route::get('medical', 'SchoolController@medical');
Route::get('school', 'SchoolController@index');
Route::get('notices', 'SchoolController@notices');
Route::get('admission', 'SchoolController@admission');


Route::resource('static', 'SchoolstaticController');
Route::get('aboutus', 'SchoolstaticController@aboutus');
Route::get('tsc', 'SchoolstaticController@tsc');
Route::get('library', 'SchoolstaticController@library');

Route::resource('department', 'SchooldepartmentController');
Route::get('department', 'SchooldepartmentController@department');
Route::get('cost', 'SchooldepartmentController@cost');


Route::resource('student', 'StudentController');
Route::get('result', 'StudentController@result');
Route::get('profile', 'StudentController@profile');

