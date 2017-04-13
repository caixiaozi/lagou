<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->

<!--[if !IE]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>
    <meta charset="utf-8" />
    <title>拉勾网-最专业的互联网招聘平台</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="{{url("admin/css/bootstrap.min.css")}}" rel="stylesheet" type="text/css"/>
    {{--<link href="{{url("admin/css/add.css")}}" rel="stylesheet" type="text/css"/>--}}



    <link href="{{url("admin/css/bootstrap-responsive.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("admin/css/font-awesome.min.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("admin/css/style-metro.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("admin/css/style.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("admin/css/style-responsive.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("admin/css/default.css")}}" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="{{url("admin/css/uniform.default.css")}}" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->
    <link href="{{url("admin/css/jquery.gritter.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("admin/css/daterangepicker.css")}}" rel="stylesheet" type="text/css" />
    <link href="{{url("admin/css/fullcalendar.css")}}" rel="stylesheet" type="text/css"/>
    <link href="{{url("admin/css/jqvmap.css")}}" rel="stylesheet" type="text/css" media="screen"/>
    <link href="{{url("admin/css/jquery.easy-pie-chart.css")}}" rel="stylesheet" type="text/css" media="screen"/>

    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="{{url("admin/image/log.png")}}" />
    {{--<link rel="shortcut icon" href="../media/image/favicon.ico" />--}}
    {{--<link href="{{url("admin/css/bootstrap.css")}}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{url("admin/css/bootstrap-theme.css")}}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{url("admin/css/bootstrap-theme.min.css")}}" rel="stylesheet" type="text/css"/>--}}
    {{--<link href="{{url("admin/css/style.css")}}" rel="stylesheet" type="text/css"/>--}}
<style>
    h5{margin-top:0px;margin-left:20px;}
</style>
</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-inverse navbar-fixed-top">
    <!-- BEGIN TOP NAVIGATION BAR -->
    <div class="navbar-inner">
        <div class="container-fluid">
            <!-- BEGIN LOGO -->
            <a class="brand" href="">
                <h5>拉勾网后台管理</h5>
            </a>
            <!-- END LOGO -->
            <!-- BEGIN TOP NAVIGATION MENU -->
            <ul class="nav pull-right">
                <!-- BEGIN NOTIFICATION DROPDOWN -->
                <li class="dropdown user">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img alt="" src="../admin/image/avatar1_small.jpg" />
                        <span class="username">蔡蔡</span>
                        <i class="icon-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href=""><i class="icon-user"></i> 个人资料</a></li>
                        <li class="divider"></li>
                        {{--<li><a href=""><i class="icon-lock"></i> 锁屏</a></li>--}}
                        <li><a href="{{url("admin/logout")}}"><i class="icon-key"></i> 注销</a></li>
                    </ul>

                </li>
                <!-- END USER LOGIN DROPDOWN -->
            </ul>
            <!-- END TOP NAVIGATION MENU -->
        </div>
    </div>
    <!-- END TOP NAVIGATION BAR -->
</div>

<!-- END HEADER -->

<!-- BEGIN CONTAINER -->

<div class="page-container">
    <!-- 开始 工具栏 -->
    <div class="page-sidebar nav-collapse collapse">
        <!--开始 侧边栏菜单 -->

        <ul class="page-sidebar-menu">
            <li>
                <!-- 开始 侧边栏显示开关按钮-->
                <div class="sidebar-toggler hidden-phone"></div>
                <!-- 结束 侧边栏显示开关按钮-->
            </li>


            <li class="start active ">
                <a href="{{url('admin/index')}}">
                    <i class="icon-home"></i>
                    <span class="title">首页</span>
                    <span class="selected"></span>
                </a>
            </li>

            <!-- 开始 工具条菜单 -->
            <li class="">
                <a href="javascript:;">
                    <i class="icon-user"></i>
                    <span class="title">用户管理</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li >
                        <a href="{{url('admin/user')}}">用户列表</a>
                    </li>
                    <li >
                        <a href="{{url('admin/user-add')}}">添加用户</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="javascript:;">
                    <i class="icon-info-sign"></i>
                    <span class="title">公司信息管理</span>
                    <span class="arrow "></span>
                </a>

                <ul class="sub-menu">
                    <li >
                        <a href="">公司信息列表</a>
                    </li>
                    <li >
                        <a href="">后台添加公司</a>
                    </li>
                    <li >
                        <a href="">申请认证列表</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="javascript:;">
                    <i class="icon-table"></i>
                    <span class="title">职位分类管理</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li >
                        <a href="">分类列表</a>
                    </li>
                    <li >
                        <a href="">添加职位</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="javascript:;">
                    <i class="icon-briefcase"></i>
                    <span class="title">管理员管理</span>
                    <span class="arrow "></span>
                </a>

                <ul class="sub-menu">
                    <li >
                        <a href="{{url("admin/admin-list")}}">
                            <i class="icon-time"></i>管理员列表</a>
                    </li>
                    <li >
                        <a href="">
                            <i class="icon-cogs"></i>添加管理员</a>
                    </li>
                </ul>
            </li>

            <li class="">
                <a href="javascript:;">
                    <i class="icon-adn"></i>
                    <span class="title">广告管理</span>
                    <span class="arrow "></span>
                </a>

                <ul class="sub-menu">
                    <li ><a href="">广告列表</a></li>
                    <li ><a href="">添加广告</a></li>
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="icon-list-ul"></i>
                    <span class="title">权限管理</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li ><a href="{{url("admin/permission")}}">权限列表</a></li>
                    {{--<li ><a href="">添加广告</a></li>--}}
                </ul>
            </li>
            <li class="">
                <a href="javascript:;">
                    <i class="icon-user"></i>
                    <span class="title">角色管理</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li ><a href="{{url("admin/role-list")}}">角色列表</a></li>
                </ul>
            </li>
        </ul>
        <!-- 结束 工具条菜单 -->
    </div>
    <!-- END SIDEBAR -->

    <!-- BEGIN PAGE -->
    <div class="page-content">

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">

                @yield('content')
                </div>
             </div>
        </div>
    </div>
</div>

<script src="{{url("admin/js/jquery-1.10.1.min.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery-migrate-1.2.1.min.js")}}" type="text/javascript"></script>

<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->

<script src="{{url("admin/js/jquery-ui-1.10.1.custom.min.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/bootstrap.min.js")}}" type="text/javascript"></script>

<!--[if lt IE 9]>

<script src="{{url("admin/js/excanvas.min.js")}}"></script>

<script src="{{url("admin/js/respond.min.js")}}"></script>

<![endif]-->

<script src="{{url("admin/js/jquery.slimscroll.min.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.blockui.min.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.cookie.min.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.uniform.min.js")}}" type="text/javascript" ></script>

<!-- END CORE PLUGINS -->

<!-- BEGIN PAGE LEVEL PLUGINS -->

<script src="{{url("admin/js/jquery.vmap.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.vmap.russia.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.vmap.world.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.vmap.europe.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.vmap.germany.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.vmap.usa.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.vmap.sampledata.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.flot.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.flot.resize.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.pulsate.min.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/date.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/daterangepicker.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.gritter.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/fullcalendar.min.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.easy-pie-chart.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/jquery.sparkline.min.js")}}" type="text/javascript"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->

<script src="{{url("admin/js/app.js")}}" type="text/javascript"></script>

<script src="{{url("admin/js/index.js")}}" type="text/javascript"></script>

<!-- END PAGE LEVEL SCRIPTS -->

<script>

    jQuery(document).ready(function() {

        App.init(); // initlayout and core plugins

        Index.init();

        Index.initJQVMAP(); // init index page's custom scripts

        Index.initCalendar(); // init index page's custom scripts

        Index.initCharts(); // init index page's custom scripts

        Index.initChat();

        Index.initMiniCharts();

        Index.initDashboardDaterange();

        Index.initIntro();

    });

</script>

<!-- END JAVASCRIPTS -->
</body>

<!-- END BODY -->

</html>