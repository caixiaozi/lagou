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
<<<<<<< HEAD

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





=======
//Route::get('admin/index',function(){
//   return "11";
////    return view('admin.index');
//});


Route::group(['middleware'=>'check.login'],function() {
    //后台用户
    Route::get('admin/user','Admin\UserController@user');
    Route::get('admin/user-delete/{id}', 'Admin\UserController@userDelete');
    Route::get('admin/user-update/{id}', 'Admin\UserController@showUpdate');
    Route::post('admin/user-update/{id}', 'Admin\UserController@doUpdate');
    Route::post('admin/user-add','Admin\UserController@userAdd');
    Route::get('admin/user-add', 'Admin\UserController@showAdd');

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
    Route::get('admin/admin-list', 'Admin\AdminController@adminList')->middleware('rbac');
    Route::any('admin/admin-add', 'Admin\AdminController@adminAdd');
    Route::any('admin/attach-role/{user_id}', 'Admin\AdminController@attachRole');
});
//后台登录
Route::get('admin/login','Admin\IndexController@showLogin');
Route::post('doLogin','Admin\IndexController@doLogin');



//前台首页
Route::get('/','Home\IndexController@index');
//前台注册
Route::get('home/register','Home\RegisterController@register');
//前台登录
Route::get('home/login','Home\LoginController@login');
//找回密码
Route::get('retrievepassword','Home\IndexController@retrievepassword');
//// 发送密码重置链接路由
//Route::get('password/email', 'Auth\PasswordController@getEmail');
//Route::post('password/email', 'Auth\PasswordController@postEmail');

//我的简历
Route::get('myresume','Home\MyresumeController@myresume');
<<<<<<< HEAD

//公司注册首页
=======
>>>>>>> fd64f2ca690193169edc18b84418d2b9fc2cb7e1
Route::get('company','Home\CompanyController@company');
Route::get('CompanyShow','Home\CompanyShowController@CompanyShow');

<<<<<<< HEAD
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
=======



//Route::get('/', 'IndexController@index');
//Route::get('/register', 'UserController@register');
//Route::get('/login', 'UserController@login');
//Route::post('/singin', 'UserController@singin');
//Route::get('/logout', 'UserController@logout');
//Route::post('/store', 'UserController@store');
//Route::get('/verify/{confirmed_code}', 'UserController@emailConfirm');
//Route::get('/sendSMS', 'UserController@sendSMS');
//Route::get('admin/index', 'AdminController@index');

>>>>>>> fd64f2ca690193169edc18b84418d2b9fc2cb7e1
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
