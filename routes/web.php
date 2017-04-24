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
<<<<<<< HEAD
=======


>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
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
    Route::any('admin/attach-role/{user_id}', 'Admin\UserController@attachRole');

     //显示所有公司
    Route::get('admin/company/index', 'Admin\CompanyController@allcompany');
    //修改公司审核
    Route::post('admin/company/auditedt', 'Admin\CompanyController@auditedt');
    //显示未审核公司
    Route::get('admin/company/refcompany', 'Admin\CompanyController@refcompany');
    //显示已审核公司
    Route::get('admin/company/passcompany', 'Admin\CompanyController@passcompany');
    //显示正在查看公司的所有岗位
    Route::get('admin/company/allstation/{id}', 'Admin\CompanyController@allstation');



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

    Route::get('admin/category/our','Admin\CategoryController@categoryOur');

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

<<<<<<< HEAD

//后台轮播图管理
    Route::get('admin/carousel ', 'Admin\CarouselController@carousel');
    Route::get('admin/firmcarousel ', 'Admin\CarouselController@firmcarousel');
    Route::get('admin/carousel/add', 'Admin\CarouselController@carousel_add');
    Route::post('admin/carousel/add2', 'Admin\CarouselController@carousel_add2');
    Route::get('admin/carousel/edit/{id} ', 'Admin\CarouselController@carousel_edit');
    Route::post('admin/carousel/edit2', 'Admin\CarouselController@carousel_edit2');
    Route::get('admin/carousel/del/{id} ', 'Admin\CarouselController@carousel_del');
    Route::get('admin/carousel/onsale', 'Admin\CarouselController@carousel_onsale');







=======


>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63

//前台首页
Route::get('/','Home\IndexController@index');


//前台注册
Route::get('home/register','Home\RegisterController@register');
Route::post('home/register','Home\RegisterController@doregister');
Route::get('mail','Home\RegisterController@sendMail');
Route::get('aa/{id}','Home\RegisterController@jihuo');
//前台登录
Route::get('home/login','Home\LoginController@login');
Route::post('home/doLogin','Home\LoginController@doLogin');
<<<<<<< HEAD
//前台退出登录
Route::get('getLogout','home\LoginController@getLogout');
=======

>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
//找回密码
// 发送密码重置链接路由
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// 密码重置路由
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

//我的简历
Route::get('myresume','Home\MyresumeController@myresume');
<<<<<<< HEAD
Route::get('add','Home\MyresumeController@addmyresume');
Route::post('myresume/hisajax','Home\MyresumeController@anyHisajax');
Route::post('myresume/userupdate','Home\MyresumeController@postUserupdate');
Route::post('myresume/resumeshow','Home\MyresumeController@postResumeshow');
Route::any('myresume/hisajax','Home\MyresumeController@anyHisajax');
Route::any('myresume/del/{id}','Home\MyresumeController@getDelhistoryajax');
Route::any('myresume/project','Home\MyresumeController@anyProject');
Route::any('myresume/delproject/{id}','Home\MyresumeController@getProdel');
Route::any('myresume/edu','Home\MyresumeController@anyEdu');
Route::any('myresume/intro','Home\MyresumeController@anyIntro');
Route::any('myresume/works','Home\MyresumeController@anyWorks');
Route::any('myresume/worksdel/{id}','Home\MyresumeController@getWorkdel');



=======
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63




<<<<<<< HEAD

//公司注册首页
Route::get('company','Home\CompanyController@company');
Route::get('company','Home\CompanyController@getIndex');
Route::post('company','Home\CompanyController@postZhuce');
Route::post('company','Home\CompanyController@getInsert');
=======
//跳转公司信息页面
Route::get('company', 'Home\CompanyController@company');

Route::get('company/company','Home\CompanyController@companys');
//上传公司信息
Route::post('company/uploadCom', 'Home\CompanyController@uploadCom');
//跳转修改公司信息页面
Route::get('company/companyEdt', 'Home\CompanyController@companyEdt');
//修改公司信息
Route::post('company/doEdt', 'Home\CompanyController@doEdt');

>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63

//公司主页
Route::get('CompanyShow','Home\CompanyShowController@CompanyShow');

//公司详情页
//Route::get('firm','Home\FirmController@firm');
//Route::get('firm','Home\FirmController@getRecruit');
Route::get('firm/job','Home\FirmController@getJob');
Route::get('firm/offline','Home\FirmController@getLine');
Route::get('firm/success','Home\FirmController@getSuccess');
Route::get('firm/recruit','Home\FirmController@getRecruit');
Route::post('firm','Home\FirmController@postInest');
Route::get('firm/browse','Home\FirmController@getBrowse');
Route::get('firm/edit','Home\FirmController@getEdit');
Route::post('alter','Home\FirmController@postAlter');
Route::get('firm','Home\FirmController@getOffline');
Route::get('firm','Home\FirmController@getDel');




//公司首页
<<<<<<< HEAD
Route::get('head','Home\HeadController@head');
Route::get('head','Home\HeadController@getIndex');
Route::get('head','Home\HeadController@getApply');
Route::post('head','Home\HeadController@postApply');
Route::post('head','Home\HeadController@postLogo');
Route::post('head','Home\HeadController@postEdd');
Route::post('head','Home\HeadController@postTag');
Route::post('head','Home\HeadController@postTtag');
Route::post('head','Home\HeadController@postGgta');
Route::post('head','Home\HeadController@postProduct');
Route::post('head','Home\HeadController@postProd');
Route::post('head','Home\HeadController@getDell');
Route::post('head','Home\HeadController@postState');
Route::post('head','Home\HeadController@postDesc');
Route::post('head','Home\HeadController@postInfor');
Route::post('head','Home\HeadController@postTeams');
Route::get('head','Home\HeadController@getRemove');
Route::post('head','Home\HeadController@postDevelop');
Route::post('head','Home\HeadController@postDevelo');
Route::get('head','Home\HeadController@getDevel');
=======
/*Route::get('head','Home\HeadController@head');*/
Route::get('head','Home\HeadController@getIndex');
Route::get('head/apply','Home\HeadController@getApply');
Route::post('head/Apply','Home\HeadController@postApply');
//Route::post('head','Home\HeadController@postLogo');
//Route::post('head','Home\HeadController@postEdd');
//Route::post('head','Home\HeadController@postTag');
//Route::post('head','Home\HeadController@postTtag');
//Route::post('head','Home\HeadController@postGgta');
//Route::post('head','Home\HeadController@postProduct');
//Route::post('head','Home\HeadController@postProd');
//Route::get('head','Home\HeadController@getDell');
//Route::post('head','Home\HeadController@postState');
//Route::post('head','Home\HeadController@postDesc');
//Route::post('head','Home\HeadController@postInfor');
//Route::post('head','Home\HeadController@postTeams');
//Route::get('head','Home\HeadController@getRemove');
//Route::post('head','Home\HeadController@postDevelop');
//Route::post('head','Home\HeadController@postDevelo');
//Route::get('head','Home\HeadController@getDevel');
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63


//公司简介
Route::get('jobShow','Home\JobShowController@jobShow');
Route::get('jobShow/index','Home\JobShowController@getResumesend');
Route::post('jobShow','Home\JobShowController@postCanginsert');
Route::post('jobShow','Home\JobShowController@postCangdelete');
Route::get('jobShow/collect','Home\JobShowController@getCang');
Route::get('jobShow','Home\JobShowController@getIndexs');


//个人中心
Route::get('personal','Home\PersonalController@personal');
Route::post('postMessage','Home\PersonalController@postMessage');
Route::post('postUpdate','Home\PersonalController@postUpdate');

//处理简历
Route::get('resume','Home\ResumeController@resume');
Route::get('resume/pending','Home\ResumeController@getPending');

Route::get('search','Home\SearchController@getIndex');


<<<<<<< HEAD


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

>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63
