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
Route::get('index',[
    'as' => 'Hơme',
    'uses' => 'PageController@getIndex'
]);
Route::get('typeCourseware',[
    'as' => 'typeCourseware',
    'uses' => 'PageController@getTypeCourse'
]);
Route::get('detailCourse',[
    'as' => 'detailCourse',
    'uses' => 'PageController@getDetaiilCourse'
]);
Route::get('/login',[
    'as' => 'Đăng nhập',
    'uses' => 'AdminController@login'
]);

Route::get('/admin',[
    'as' => 'admin',
    'uses' => 'AdminController@getIndex'
]);