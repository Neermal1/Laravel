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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes(['register'=>false]);

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test/admin', function(){
	echo "admin dashboard here";
})->middleware('checkScope:Admin');

Route::get('/test/student', function(){
	echo "student dashboard here";
})->middleware('checkScope:Student');

Route::get('/test/teacher', function(){
	echo "teacher dashboard here";
})->middleware('checkScope:Teacher');
