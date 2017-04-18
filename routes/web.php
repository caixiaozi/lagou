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

Route::group(['middleware'=>'check.login'],function() {
    //后台用户
    Route::get('admin/vip','Admin\VipController@viplist');
    Route::post('admin/vip-add','Admin\VipController@vipadd');
    Route::get('admin/vip-add', 'Admin\VipController@showAdd');
    Route::get('admin/vip-update/{id}', 'Admin\VipController@showUpdate');
    Route::post('admin/vip-update/{id}', 'Admin\VipController@doUpdate');
    Route::get('admin/vip-delete/{id}', 'Admin\VipController@vipDelete');

    //后台首页
    Route::get('admin/index','Admin\IndexController@index');
    Route::get('admin/logout','Admin\IndexController@logout');

    //权限管理
    Route::get('admin/permission', 'Admin\PermissionController@permissionList');
    Route::any('admin/permission-add', 'Admin\PermissionController@permissionAdd');
    Route::any('admin/permission-update/{permission_id}', 'Admin\PermissionController@permissionUpdate')->middleware('rbac');
    Route::get('admin/permission-delete/{permission_id}', 'Admin\PermissionController@permissionDelete');

    //角色管理
    Route::get('admin/role-list', 'Admin\RoleController@roleList')->middleware('rbac');
    Route::any('admin/role-add', 'Admin\RoleController@roleAdd')->middleware('rbac');
    Route::any('admin/role-update/{role_id}', 'Admin\RoleController@roleUpdate')->middleware('rbac');
    Route::get('admin/role-delete/{role_id}', 'Admin\RoleController@doDelete')->middleware('rbac');
    Route::any('admin/attach-permission/{role_id}', 'Admin\RoleController@attachPermission')->middleware('rbac');

    //管理员管理
    Route::get('admin/user-list', 'Admin\UserController@userList')->middleware('rbac');
    Route::any('admin/user-add', 'Admin\UserController@userAdd');
    Route::any('admin/user-delete/{user_id}', 'Admin\UserController@userDelete');
    Route::any('admin/attach-role/{user_id}', 'Admin\UserController@attachRole');
});
//后台登录
Route::get('admin/login','Admin\IndexController@showLogin');
Route::post('doLogin','Admin\IndexController@doLogin');

//职位分类管理
Route::get('admin/category-list','Admin\CategoryController@category');
Route::get('admin/category-add','Admin\CategoryController@showAdd');
Route::post('admin/category-add','Admin\CategoryController@categoryAdd');
Route::get('admin/category-add/{id}','Admin\CategoryController@showAdd');
Route::post('admin/category-add/{id}','Admin\CategoryController@categoryAdd');
Route::get('admin/category-list/{id}/{path}','Admin\CategoryController@category');
Route::get('admin/category-update/{id}','Admin\CategoryController@update');
Route::post('admin/category-update/{id}','Admin\CategoryController@showupdate');
Route::get('admin/category-del/{id}','Admin\CategoryController@del');



//前台首页
Route::get('/','Home\IndexController@index');
Route::get('home/two',function(){
    return view('home.two');
});
//Route::get('home/index','Home\IndexController@index');
//前台注册
Route::get('home/register','Home\RegisterController@register');
Route::post('home/register','Home\RegisterController@doregister');
//Route::get('home/jihuo','RegisterController@sendMail');
Route::get('mail','Home\RegisterController@sendMail');
Route::get('aa/{id}','Home\RegisterController@jihuo');
//前台登录
Route::get('home/login','Home\LoginController@login');
Route::post('home/doLogin','Home\LoginController@doLogin');

//找回密码
Route::get('retrievepassword','Home\IndexController@retrievepassword');

//找回密码
// 发送密码重置链接路由
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置路由
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


//我的简历
Route::get('myresume','Home\MyresumeController@myresume');


//公司注册首页

Route::get('company','Home\CompanyController@company');
Route::get('CompanyShow','Home\CompanyShowController@CompanyShow');

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


//Route::get('/', 'IndexController@index');
//Route::get('/register', 'UserController@register');
//Route::get('/login', 'UserController@login');
//Route::post('/singin', 'UserController@singin');
//Route::get('/logout', 'UserController@logout');
//Route::post('/store', 'UserController@store');
//Route::get('/verify/{confirmed_code}', 'UserController@emailConfirm');
//Route::get('/sendSMS', 'UserController@sendSMS');
//Route::get('admin/index', 'AdminController@index');


