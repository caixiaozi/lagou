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
//
//Route::get('/', function () {
//    return view('welcome');
//});
//Route::get('/','home\IndexController@index');
//前台首页
Route::get('/','Home\IndexController@index');
//前台注册
Route::get('register','Home\RegisterController@register');
//前台登录
Route::get('login','Home\LoginController@login');
//找回密码
Route::get('retrievepassword','Home\IndexController@retrievepassword');
//// 发送密码重置链接路由
//Route::get('password/email', 'Auth\PasswordController@getEmail');
//Route::post('password/email', 'Auth\PasswordController@postEmail');

//我的简历
Route::get('myresume','Home\MyresumeController@myresume');

//公司注册首页
Route::get('company','Home\CompanyController@company');

//公司主页
Route::get('CompanyShow','Home\CompanyShowController@CompanyShow');

//公司详情页
Route::get('firm','Home\FirmController@firm');

//公司首页
Route::get('head','Home\HeadController@head');

//公司简介
Route::get('jobShow','Home\JobShowController@jobShow');

//个人简介
Route::get('personal','Home\PersonalController@personal');