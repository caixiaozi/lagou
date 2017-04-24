<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>运营管理平台 - 拉勾网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 必须的css -->
    <link href="{{url('admin/moban/Assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{url('admin/moban/Assets/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/font-awesome.min.css')}}" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="/public/admin/moban/Assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/ace-fonts.css')}}" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/jquery-ui-1.10.3.full.min.css')}}" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/ace.min.css')}}" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/ace-responsive.min.css')}}" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/ace-skins.min.css')}}" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/lagou.admin.css')}}" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/public/admin/moban/Assets/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/bootstrap-timepicker.css')}}" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/datepicker.css')}}" />
    <link rel="stylesheet" href="{{url('admin/moban/Assets/css/lagou.global.css')}}" />
    <!-- /必须的css -->


    <script src="{{url('admin/moban/Assets/js/ace-extra.min.js')}}"></script>
</head>

<body>
<!-- 头部 -->
<div class="navbar" id="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a href="#" class="brand">
                <small>
                    <i class="icon-info-sign"></i>
                    拉勾网 - 运营管理平台
                </small>
            </a><!--/.brand-->
            <a href="/" class="brand" target="_blank">
                <small>
                    <i class="icon-comments"></i>
                    拉勾网 - 前台首页
                </small>
            </a>
            <ul class="nav ace-nav pull-right">

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <!-- <img class="nav-user-photo" src="" alt="admin" /> -->
                        <span class="user-info" style="width:100px;text-align:center">
							<small>欢迎回来</small>
							admin						</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">

                        <li>
                            <a href="javascript:;" onclick="$.lagou.formShow('/index.php/Admin/Index/updatepwd.html');">
                                <i class="icon-lock"></i>
                                修改密码
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="/index.php/Admin/Login/logout.html">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!--/.ace-nav-->
        </div><!--/.container-fluid-->
    </div><!--/.navbar-inner-->
</div>
<!-- /头部 -->

<div class="main-container container-fluid">
    <a class="menu-toggler" id="menu-toggler" href="#">
        <span class="menu-text"></span>
    </a>

    <!-- 左侧菜单 -->

    <div class="sidebar" id="sidebar">
        <ul class="nav nav-list">
            <li >
                <a href="/index.php/admin/index/index.html">
                    <i class="icon-home"></i>
                    <span class="menu-text"> 控制台 </span>
                </a>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-group"></i>
                    <span class="menu-text">用户管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li>
                        <a href=/index.php/Admin/User/index.html>
                            <i class="icon-double-angle-right"></i>
                            会员列表
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-envelope-alt"></i>
                    <span class="menu-text">公司信息管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li >
                        <a href="/index.php/Admin/Company/index.html">
                            <i class="icon-double-angle-right"></i>
                            公司信息列表
                        </a>
                    </li>
                    <li >
                        <a href="/index.php/Admin/Company/apply.html">
                            <i class="icon-double-angle-right"></i>
                            申请认证公司列表
                        </a>
                    </li>
                </ul>
            </li>

            <li class="active open">
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-film"></i>
                    <span class="menu-text">职位分类管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li >
                        <a href="/index.php/Admin/Cate/index.html">
                            <i class="icon-double-angle-right"></i>
                            全部分类列表
                        </a>
                    </li>
                </ul>
            </li>

            {{--<li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-camera"></i>
                    <span class="menu-text">一拍管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li>
                        <a href=/index.php/Admin/Pat/index.html>
                            <i class="icon-double-angle-right"></i>
                            一拍列表
                        </a>
                    </li>
                </ul>
            </li>--}}

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-google-plus"></i>
                    <span class="menu-text">广告管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li >
                        <a href="/index.php/Admin/Advert/index.html">
                            <i class="icon-double-angle-right"></i>
                            广告列表
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-heart"></i>
                    <span class="menu-text">友情连接管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li >
                        <a href="/index.php/Admin/Link/index.html">
                            <i class="icon-double-angle-right"></i>
                            友情链接列表
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-legal"></i>
                    <span class="menu-text">管理员管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li>
                        <a href=/index.php/Admin/Manager/index.html>
                            <i class="icon-double-angle-right"></i>
                            管理员列表
                        </a>
                    </li>
                </ul>
            </li>


            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-legal"></i>
                    <span class="menu-text">用户权限管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li>
                        <a href=/index.php/Admin/Auth/index.html>
                            <i class="icon-double-angle-right"></i>
                            权限管理
                        </a>
                    </li>
                    <li>
                        <a href=/index.php/Admin/Auth/give.html>
                            <i class="icon-double-angle-right"></i>
                            用户权限
                        </a>
                    </li>
                </ul>
            </li>


        </ul>

        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
        </div>

        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
    </div>

    <!-- /左侧菜单 -->

    <div class="main-content">
        <!-- 面包屑导航 -->
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="/index.php/Admin/index/index.html">首页</a>
                    <span class="divider">
							<i class="icon-angle-right arrow-icon"></i>
							</span>
                </li>

                <li class="active">职位分类列表</li>

            </ul>
        </div>
        <!-- /面包屑导航 -->

        <div class="page-content">

            <div class="row-fluid">
                <div class="span6">
                    <div id="nestable" class="dd">
                        <ol class="dd-list">
                            <li class="dd-item" data-id="">
                                <div class="dd-handle">
                                    技术
                                    <!-- 顶级分类更改 -->
                                    <div class="pull-right action-buttons">
                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/1/pid/0.html');" class="blue">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>

                                <ol class="dd-list">
                                    <li class="dd-item" data-id="7">
                                        <div class="dd-handle">
                                            前端开发
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/7/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    HTML5
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/231/pid/7.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/231/pid/7.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    CSS3
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/232/pid/7.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/232/pid/7.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="11">
                                        <div class="dd-handle">
                                            后端开发
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/11/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    PHP
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/12/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/12/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    JAVA
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/13/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/13/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    C++
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/15/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/15/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    .NET
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/77/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/77/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    Python
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/78/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/78/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    ASP
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/79/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/79/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    Ruby
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/80/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/80/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    C#
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/233/pid/11.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/233/pid/11.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="18">
                                        <div class="dd-handle">
                                            移动开发
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/18/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    HTML5
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/8/pid/18.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/8/pid/18.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    IOS
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/19/pid/18.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/19/pid/18.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    WP
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/20/pid/18.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/20/pid/18.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    Android
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/21/pid/18.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/21/pid/18.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="54">
                                        <div class="dd-handle">
                                            硬件开发
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/54/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    嵌入式
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/81/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/81/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    自动化
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/82/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/82/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    单片机
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/83/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/83/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    电路设计
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/84/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/84/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    驱动开发
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/85/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/85/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    系统集成
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/86/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/86/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    PCB工艺
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/87/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/87/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    模具设计
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/88/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/88/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    热传导
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/89/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/89/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    精益工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/90/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/90/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    ARM开发
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/91/pid/54.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/91/pid/54.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="55">
                                        <div class="dd-handle">
                                            测试
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/55/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    测试工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/92/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/92/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    自动化测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/93/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/93/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    功能测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/94/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/94/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    项目测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/95/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/95/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    游戏测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/97/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/97/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    白盒测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/98/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/98/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    灰盒测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/99/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/99/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    黑盒测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/100/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/100/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    手机测试
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/101/pid/55.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/101/pid/55.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="56">
                                        <div class="dd-handle">
                                            运维
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/56/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    运维工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/102/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/102/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    运维开发工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/103/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/103/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    网络工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/104/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/104/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    系统工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/105/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/105/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    IT支持
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/106/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/106/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    IDC
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/107/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/107/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    CDN
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/108/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/108/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    系统管理员
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/109/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/109/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    病毒分析
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/110/pid/56.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/110/pid/56.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="57">
                                        <div class="dd-handle">
                                            DBA
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/57/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    MySQL
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/111/pid/57.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/111/pid/57.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    SQLServer
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/112/pid/57.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/112/pid/57.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    Oracle
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/113/pid/57.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/113/pid/57.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    MongoDB
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/115/pid/57.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/115/pid/57.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    ETL
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/116/pid/57.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/116/pid/57.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    Hive
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/117/pid/57.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/117/pid/57.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    数据仓库
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/118/pid/57.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/118/pid/57.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="58">
                                        <div class="dd-handle">
                                            项目管理
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/58/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    项目经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/119/pid/58.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/119/pid/58.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    项目助理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/120/pid/58.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/120/pid/58.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="59">
                                        <div class="dd-handle">
                                            高端职位
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/59/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    技术经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/125/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/125/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    技术总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/126/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/126/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    测试经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/127/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/127/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    架构师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/128/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/128/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    CTO
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/129/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/129/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    运维总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/130/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/130/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    项目总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/131/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/131/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    测试总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/132/pid/59.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/132/pid/59.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="60">
                                        <div class="dd-handle">
                                            企业软件
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/60/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    实施工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/121/pid/60.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/121/pid/60.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    售前工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/122/pid/60.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/122/pid/60.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    售后工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/123/pid/60.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/123/pid/60.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    BI工程师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/124/pid/60.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/124/pid/60.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="234">
                                        <div class="dd-handle">
                                            zhang
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/234/pid/1.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    zhang
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/236/pid/234.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/236/pid/234.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li>					</ol>
                            </li><li class="dd-item" data-id="">
                                <div class="dd-handle">
                                    产品
                                    <!-- 顶级分类更改 -->
                                    <div class="pull-right action-buttons">
                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/2/pid/0.html');" class="blue">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>

                                <ol class="dd-list">
                                    <li class="dd-item" data-id="22">
                                        <div class="dd-handle">
                                            产品经理
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/22/pid/2.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    产品实习生
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/138/pid/22.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/138/pid/22.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="61">
                                        <div class="dd-handle">
                                            产品设计
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/61/pid/2.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    网页产品设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/140/pid/61.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/140/pid/61.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    无限产品设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/141/pid/61.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/141/pid/61.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="62">
                                        <div class="dd-handle">
                                            高端职位
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/62/pid/2.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    产品部经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/142/pid/62.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/142/pid/62.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    游戏制作人
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/144/pid/62.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/144/pid/62.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li>					</ol>
                            </li><li class="dd-item" data-id="">
                                <div class="dd-handle">
                                    设计
                                    <!-- 顶级分类更改 -->
                                    <div class="pull-right action-buttons">
                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/3/pid/0.html');" class="blue">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>

                                <ol class="dd-list">
                                    <li class="dd-item" data-id="24">
                                        <div class="dd-handle">
                                            视觉设计
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/24/pid/3.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    视觉设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/145/pid/24.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/145/pid/24.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    网页设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/146/pid/24.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/146/pid/24.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    Flash设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/147/pid/24.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/147/pid/24.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    APP设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/148/pid/24.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/148/pid/24.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    UI设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/149/pid/24.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/149/pid/24.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    平面设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/150/pid/24.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/150/pid/24.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    美术设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/151/pid/24.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/151/pid/24.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="26">
                                        <div class="dd-handle">
                                            交互设计
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/26/pid/3.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    交互设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/27/pid/26.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/27/pid/26.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    交互设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/152/pid/26.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/152/pid/26.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    无线交互设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/153/pid/26.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/153/pid/26.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    网页交互设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/154/pid/26.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/154/pid/26.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    硬件交互设计师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/155/pid/26.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/155/pid/26.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="63">
                                        <div class="dd-handle">
                                            用户研究
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/63/pid/3.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    数据分析师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/156/pid/63.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/156/pid/63.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    用户研究员
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/157/pid/63.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/157/pid/63.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    游戏数值策划
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/158/pid/63.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/158/pid/63.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="64">
                                        <div class="dd-handle">
                                            高端职位
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/64/pid/3.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    设计总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/159/pid/64.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/159/pid/64.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    视觉设计总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/160/pid/64.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/160/pid/64.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    交互设计总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/161/pid/64.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/161/pid/64.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li>					</ol>
                            </li><li class="dd-item" data-id="">
                                <div class="dd-handle">
                                    运营
                                    <!-- 顶级分类更改 -->
                                    <div class="pull-right action-buttons">
                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/4/pid/0.html');" class="blue">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>

                                <ol class="dd-list">
                                    <li class="dd-item" data-id="28">
                                        <div class="dd-handle">
                                            运营
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/28/pid/4.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    用户运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/29/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/29/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    产品运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/30/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/30/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    用户运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/162/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/162/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    产品运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/163/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/163/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    数据运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/164/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/164/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    内容运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/165/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/165/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    活动运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/166/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/166/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    商家运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/167/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/167/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    游戏运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/168/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/168/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    网店运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/169/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/169/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    海外运营
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/170/pid/28.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/170/pid/28.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="31">
                                        <div class="dd-handle">
                                            编辑
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/31/pid/4.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    副编辑
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/32/pid/31.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/32/pid/31.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    主编辑
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/33/pid/31.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/33/pid/31.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    副编辑
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/171/pid/31.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/171/pid/31.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    内容编辑
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/172/pid/31.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/172/pid/31.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    文案策划
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/173/pid/31.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/173/pid/31.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    记者
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/174/pid/31.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/174/pid/31.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="65">
                                        <div class="dd-handle">
                                            客服
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/65/pid/4.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    售前咨询
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/175/pid/65.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/175/pid/65.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    售后客服
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/176/pid/65.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/176/pid/65.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    淘宝客服
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/177/pid/65.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/177/pid/65.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    客服经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/178/pid/65.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/178/pid/65.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="66">
                                        <div class="dd-handle">
                                            高端职位
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/66/pid/4.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    主编
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/179/pid/66.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/179/pid/66.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    客服总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/181/pid/66.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/181/pid/66.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li>					</ol>
                            </li><li class="dd-item" data-id="">
                                <div class="dd-handle">
                                    市场与销售
                                    <!-- 顶级分类更改 -->
                                    <div class="pull-right action-buttons">
                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/5/pid/0.html');" class="blue">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>

                                <ol class="dd-list">
                                    <li class="dd-item" data-id="34">
                                        <div class="dd-handle">
                                            市场与营销
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/34/pid/5.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    市场营销
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/35/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/35/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    市场营销
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/182/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/182/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    市场策划
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/183/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/183/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    市场顾问
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/184/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/184/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    市场推广
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/185/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/185/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    SEO
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/186/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/186/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    SEM
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/187/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/187/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    商务渠道
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/188/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/188/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    商业数据分析
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/189/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/189/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    活动策划
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/190/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/190/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    海外市场
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/191/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/191/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    政府关系
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/192/pid/34.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/192/pid/34.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="36">
                                        <div class="dd-handle">
                                            公关
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/36/pid/5.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    媒介经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/37/pid/36.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/37/pid/36.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    媒介经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/193/pid/36.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/193/pid/36.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    广告协调
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/194/pid/36.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/194/pid/36.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    品牌公关
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/195/pid/36.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/195/pid/36.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="38">
                                        <div class="dd-handle">
                                            销售
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/38/pid/5.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    销售专员
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/39/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/39/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    销售经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/40/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/40/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    客户代表
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/196/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/196/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    BD经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/197/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/197/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    代理商销售
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/198/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/198/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    电话销售
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/199/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/199/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    销售顾问
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/200/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/200/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    商品经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/201/pid/38.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/201/pid/38.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="67">
                                        <div class="dd-handle">
                                            供应链
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/67/pid/5.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    物流
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/202/pid/67.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/202/pid/67.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    仓储
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/203/pid/67.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/203/pid/67.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="68">
                                        <div class="dd-handle">
                                            采购
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/68/pid/5.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    采购专员
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/204/pid/68.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/204/pid/68.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    采购经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/205/pid/68.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/205/pid/68.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    商品经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/206/pid/68.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/206/pid/68.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="69">
                                        <div class="dd-handle">
                                            投资
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/69/pid/5.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    分析师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/207/pid/69.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/207/pid/69.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    投资顾问
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/208/pid/69.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/208/pid/69.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    投资经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/209/pid/69.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/209/pid/69.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="70">
                                        <div class="dd-handle">
                                            高端职位
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/70/pid/5.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    市场总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/210/pid/70.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/210/pid/70.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    销售总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/211/pid/70.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/211/pid/70.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    商务总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/212/pid/70.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/212/pid/70.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    公关总监
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/213/pid/70.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/213/pid/70.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li>					</ol>
                            </li><li class="dd-item" data-id="">
                                <div class="dd-handle">
                                    职能
                                    <!-- 顶级分类更改 -->
                                    <div class="pull-right action-buttons">
                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/6/pid/0.html');" class="blue">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>

                                <ol class="dd-list">
                                    <li class="dd-item" data-id="41">
                                        <div class="dd-handle">
                                            人力资源
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/41/pid/6.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    人力资源
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/42/pid/41.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/42/pid/41.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    招聘
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/43/pid/41.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/43/pid/41.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    培训经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/214/pid/41.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/214/pid/41.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    薪资福利经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/215/pid/41.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/215/pid/41.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    绩效考核经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/216/pid/41.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/216/pid/41.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    员工关系
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/217/pid/41.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/217/pid/41.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="44">
                                        <div class="dd-handle">
                                            行政
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/44/pid/6.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    助力
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/45/pid/44.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/45/pid/44.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    前台
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/46/pid/44.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/46/pid/44.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    总助
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/218/pid/44.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/218/pid/44.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    文秘
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/219/pid/44.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/219/pid/44.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="47">
                                        <div class="dd-handle">
                                            财务
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/47/pid/6.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    会计
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/48/pid/47.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/48/pid/47.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    出纳
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/49/pid/47.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/49/pid/47.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    财务
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/220/pid/47.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/220/pid/47.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    结算
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/221/pid/47.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/221/pid/47.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    税务
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/222/pid/47.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/222/pid/47.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    审计
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/223/pid/47.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/223/pid/47.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    风控
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/224/pid/47.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/224/pid/47.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="50">
                                        <div class="dd-handle">
                                            法务
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/50/pid/6.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    律师
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/51/pid/50.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/51/pid/50.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    专利
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/225/pid/50.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/225/pid/50.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li><li class="dd-item" data-id="71">
                                        <div class="dd-handle">
                                            高端职位
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/71/pid/6.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    行政总监/经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/226/pid/71.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/226/pid/71.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    财务总监/经理
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/227/pid/71.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/227/pid/71.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    HRD/HRM
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/228/pid/71.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/228/pid/71.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    CFO
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/229/pid/71.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/229/pid/71.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li><li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    CEO
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/230/pid/71.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/230/pid/71.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li>					</ol>
                            </li><li class="dd-item" data-id="">
                                <div class="dd-handle">
                                    zhang
                                    <!-- 顶级分类更改 -->
                                    <div class="pull-right action-buttons">
                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/237/pid/0.html');" class="blue">
                                            <i class="icon-pencil bigger-130"></i>
                                        </a>
                                    </div>
                                </div>

                                <ol class="dd-list">
                                    <li class="dd-item" data-id="238">
                                        <div class="dd-handle">
                                            zhznag
                                            <!-- 二级分类更改 -->
                                            <div class="pull-right action-buttons">
                                                <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/238/pid/237.html');" class="blue">
                                                    <i class="icon-pencil bigger-130"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <ol class="dd-list">
                                            <li class="dd-item" data-id="">
                                                <div class="dd-handle">
                                                    zhang
                                                    <!-- 三级分类删除 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/delete/id/239/pid/238.html');" class="blue">
                                                            <i class="icon-trash bigger-130"></i>
                                                        </a>
                                                    </div>
                                                    <!-- 三级分类更改 -->
                                                    <div class="pull-right action-buttons">
                                                        <a href="javascript:$.lagou.formShow('/index.php/Admin/Cate/edit/id/239/pid/238.html');" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </li>							</ol>
                                    </li>					</ol>
                            </li>			</ol>
                    </div>
                </div>
                <div class="span1">
                    <a class="btn btn-app btn-success" href="javascript:$.lagou.formShow('/index.php/Admin/Cate/add.html');">
                        <i class="icon-refresh bigger-230"></i>添加分类
                    </a>
                </div>
            </div>

        </div><!--/.page-content-->

        <!-- 右侧悬浮的设置按钮,去掉好像会引起js报错 -->
        <div class="ace-settings-container hide" id="ace-settings-container">
            <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>
            </div>
        </div>
        <!-- /右侧悬浮的设置按钮,去掉好像会引起js报错 -->
    </div>
</div>

<!-- 回到顶部 -->
<a href="###" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
<!-- /回到顶部 -->

<!-- 操作后提示框 -->
<div id="lg-alert" class="hide" style="margin-bottom:-1.5em;"></div>
<!--modal表单弹出框-->
<form id="lg-form" class="modal fade hide form-horizontal" method="post" tabindex="-1" enctype="multipart/form-data" onsubmit="return false;" >
    <div class="modal-header no-padding">
        <div class="table-header">
            <i class="icon-lock"></i>
            <button data-dismiss="modal" class="close" type="button">×</button>
            更新分类
        </div>
    </div>


    <div class="modal-body overflow-visible">

        <div class="control-group">
            <label for="name" class="control-label">分类名称</label>
            <div class="controls">
                <input type="text" value="设计" placeholder="" name="name" class="text">
                <input type="hidden" value="3" placeholder="" name="id" class="text">
            </div>
        </div>
    </div>



    <div class="modal-footer">
        <button class="btn btn-small" data-dismiss="modal">
            <i class="icon-remove"></i>
            取消
        </button>
        <button onclick="$.action('/index.php/Admin/Cate/update.html',this);" class="btn btn-small btn-primary" type="button">
            <i class="icon-ok"></i>更新
        </button>
    </div>
    <script type="text/javascript">
        var test = document.getElementById('lg-form');
        var v = document.getElementById('ppp');
        test.onmouseover = function(){
            v.style.display = "block";
        };

        test.onmouseout = function(){
            v.style.display = "none";
        }
    </script>
</form>

<!-- 基础js部分 -->
<script src='{{url('admin/moban/Assets/js/jquery-1.10.2.min.js')}}'></script>
<script src='{{url('admin/moban/Assets/js/jquery.mobile.custom.min.js')}}'></script>

<script src="{{url('admin/moban/Assets/js/jquery-ui-1.10.3.full.min.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/jquery.ui.touch-punch.min.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/bootstrap.min.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/ace-elements.min.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/ace.min.js')}}"></script>

<script src="{{url('admin/moban/Assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/jquery.dataTables.bootstrap.js')}}"></script>
<script src="{{url('admin/moban/Assets/lagou/lagou.global.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/jquery.inputlimiter.1.3.1.min.js')}}"></script>

<!-- /基础js部分 -->
<script type="text/javascript">
    jQuery(function($){
        try{
            ace.settings.navbar_fixed(true);
            ace.settings.sidebar_fixed(true);
            ace.settings.breadcrumbs_fixed(true);
        }catch(e){}

        $('[data-rel=tooltip]').tooltip();
        $('[data-rel=popover]').popover({html:true});

    });
</script>




<script src="{{url('admin/moban/Assets/js/jquery.dataTables.min.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/jquery.dataTables.bootstrap.js')}}"></script>
<script src="{{url('admin/moban/Assets/js/jquery.nestable.min.js')}}"></script>
<script type="text/javascript">
    jQuery(function($) {

        $('.dd').nestable();

        $('.dd-handle a').on('mousedown', function(e){
            e.stopPropagation();
        });


        $.extend({

            action : function(url, obj)
            {
                var obj = $(obj).parents('form');

                $.ajax({
                    url : url,
                    type : 'post',
                    data : obj.serialize(),
                    success : function(res)
                    {
                        $.lagou.alert(res.msg, res.code, 2);
                        $.lagou.formHide();
                        location.reload();
                    }
                });
            }
        });
    })
</script>

</body>
</html>