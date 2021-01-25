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

Route::get('/', 'CourseController@index')->name('first');
Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();
Route::get('/courses/{id}','CourseController@select');
Route::get('/detail/{id}','CourseController@detail');
Route::get('/register/{id}','CourseController@register');
Route::post('/course/add','AttendentController@save');