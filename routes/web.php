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
    return view('welcome');
});
//Route::get('admin/user', function () {
//    return view('admin.user.user');
//});

Route::get('admin/login','Admin\IndexController@showLogin');
Route::post('doLogin','Admin\IndexController@doLogin');
Route::get('admin/user','Admin\UserController@user');
Route::get('admin/index','Admin\IndexController@index');





