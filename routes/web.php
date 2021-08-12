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

// Route::get('/', function () {
//     return view('welcome');
// });

//Load Home page
// Route::get('/','App\Http\Controllers\TodoController@home');
Route::get('/','App\Http\Controllers\TodoController@home')->name('home');

//For inserting data to Todo 
// Route::post('/store','App\Http\Controllers\TodoController@store');
Route::post('/store','App\Http\Controllers\TodoController@store')->name('store');

//Updating Todo
Route::get('/edit/{id}','App\Http\Controllers\TodoController@edit')->name('edit');
Route::post('/update/{id}','App\Http\Controllers\TodoController@update')->name('update');

//Deleting content

Route::post('/delete/{id}','App\Http\Controllers\TodoControllers@delete')->name('destroy');




// Route::get('/about',function(){
//     return view('about',['title'=>'About | Todu']);
// });
Route::get('/about','App\Http\Controllers\TodoController@about');