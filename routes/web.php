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

//    Route::get('admin/vip','Admin\UserController@user');
//    Route::get('admin/user-delete/{id}', 'Admin\UserController@userDelete');
//    Route::get('admin/user-update/{id}', 'Admin\UserController@showUpdate');
//    Route::post('admin/user-update/{id}', 'Admin\UserController@doUpdate');
//    Route::post('admin/user-add','Admin\UserController@userAdd');
//    Route::get('admin/user-add', 'Admin\UserController@showAdd');

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
    Route::any('admin/attach-role/{user_id}', 'Admin\UserController@attachRole');

    //公司模块
    Route::get('admin/company/index','Admin\CompanyController@company');
    //添加公司信息
    Route::get('admin/company/add','Admin\CompanyController@companyAdd');
    Route::post('admin/company/add','Admin\CompanyController@companyInsert');
    //修改公司信息
    Route::get('admin/company/edit/{id}','Admin\CompanyController@companyEdit');
    Route::post('admin/company/edit/{id}','Admin\CompanyController@companyUpdate');
   //删除公司信息
    Route::get('admin/company/delete/{id}','Admin\CompanyController@companyDelete');
    //申请公司信息
    Route::get('admin/company/apply','Admin\CompanyController@companyApply');
    Route::get('admin/company/apply/{id}','Admin\CompanyController@companyAgree');

    //友情链接管理
    Route::get('admin/links/index','Admin\LinksController@links');
    //添加友情链接
    Route::get('admin/links/add','Admin\LinksController@linksAdd');
    Route::post('admin/links/add','Admin\LinksController@linksInsert');
    //修改友情链接
    Route::get('admin/links/edit/{id}','Admin\LinksController@linksEdit');
    Route::post('admin/links/edit/{id}','Admin\LinksController@linksUpdate');
    //删除友情链接
    Route::get('admin/links/delete/{id}','Admin\LinksController@linksDelete');

    //职业分类管理

    Route::get('admin/category/index','Admin\CategoryController@category');
    Route::get('admin/category/index','Admin\CategoryController@categoryPid');
    Route::get('admin/category/index','Admin\CategoryController@categoryIndex');
    Route::get('admin/category/index','Admin\CateController@categorySearch');
    //添加一级分类
    Route::get('admin/category/add','Admin\CategoryController@categoryAdd');
    Route::post('admin/category/add','Admin\CategoryController@categoryInsert');
    //修改分类
    Route::get('admin/category/edit/{id}','Admin\CategoryController@categoryEdit');
    Route::post('admin/category/edit/{id}','Admin\CategoryController@categoryUpdate');
    //删除分类
    Route::get('admin/category/delete/{id}','Admin\CategoryController@categoryDelete');

    //广告管理
    Route::get('admin/ad/index','Admin\AdController@ad');
    //添加广告
    Route::get('admin/ad/add','Admin\AdController@adAdd');
    Route::post('admin/ad/add','Admin\AdController@adInsert');
    //修改广告
    Route::get('admin/ad/edit/{id}','Admin\AdController@adEdit');
    Route::post('admin/ad/edit/{id}','Admin\AdController@adUpdate');
    //删除广告
    Route::get('admin/ad/delete/{id}','Admin\AdController@adDelete');

});
//后台登录
Route::get('admin/login','Admin\IndexController@showLogin');
Route::post('doLogin','Admin\IndexController@doLogin');


Route::get('admin/vip',function(){
    return view('admin.vip.vip');
});
Route::get('admin/vip-add',function(){
    return view ('admin.vip.vipadd');
});



//职位分类管理
//Route::get('admin/category-list',function(){
//   return view('admin\category\category');
//});
//Route::get('admin/category-list','Admin\CategoryController@category');
//Route::get('admin/category-add','Admin\CategoryController@categoryAdd');

//Route::get('admin/category-add',function(){
//    return view('admin\category\categoryAdd');
//});

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

//处理简历
Route::get('resume','Home\ResumeController@resume');




//Route::get('/', 'IndexController@index');
//Route::get('/register', 'UserController@register');
//Route::get('/login', 'UserController@login');
//Route::post('/singin', 'UserController@singin');
//Route::get('/logout', 'UserController@logout');
//Route::post('/store', 'UserController@store');
//Route::get('/verify/{confirmed_code}', 'UserController@emailConfirm');
//Route::get('/sendSMS', 'UserController@sendSMS');
//Route::get('admin/index', 'AdminController@index');

