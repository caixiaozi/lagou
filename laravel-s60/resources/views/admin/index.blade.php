@extends('layouts.master')
@section('title', '用户列表')
@section('content')
<div class="row-fluid">
    <div class="span12">
        <!-- BEGIN STYLE CUSTOMIZER -->
        <div class="color-panel hidden-phone">
            <div class="color-mode-icons icon-color"></div>
            <div class="color-mode-icons icon-color-close"></div>
            <div class="color-mode">
                <label>
                    <span>Layout</span>
                    <select class="layout-option m-wrap small">
                        <option value="fluid" selected>Fluid</option>
                        <option value="boxed">Boxed</option>
                    </select>
                </label>
                <label>
                    <span>Header</span>
                    <select class="header-option m-wrap small">
                        <option value="fixed" selected>Fixed</option>
                        <option value="default">Default</option>
                    </select>
                </label>
                <label>
                    <span>Sidebar</span>
                    <select class="sidebar-option m-wrap small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected>Default</option>
                    </select>
                </label>
                <label>
                    <span>Footer</span>
                    <select class="footer-option m-wrap small">
                        <option value="fixed">Fixed</option>
                        <option value="default" selected>Default</option>
                    </select>
                </label>
            </div>
        </div>
        <!-- END BEGIN STYLE CUSTOMIZER -->
        <!-- BEGIN PAGE TITLE & BREADCRUMB-->
        <h3 class="page-title">
            Dashboard <small>statistics and more</small>
        </h3>
        <ul class="breadcrumb">
            <li>
                <i class="icon-home"></i>
                <a href="">Home</a>
                <i class="icon-angle-right"></i>
            </li>
            <li><a href="#">Dashboard</a></li>
        </ul>
        <!-- END PAGE TITLE & BREADCRUMB-->
    </div>
</div>
<!-- END PAGE HEADER-->
<div id="dashboard">
    <div class="clearfix"></div>
    <div class="row-fluid">
        <div class="span6">
            <!-- BEGIN PORTLET-->
            <div class="portlet solid bordered light-grey">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-bar-chart"></i>Site Visits</div>
                    <div class="tools">
                        <div class="btn-group pull-right" data-toggle="buttons-radio">
                            <a href="" class="btn mini">Users</a>
                            <a href="" class="btn mini active">Feedbacks</a>
                        </div>
                    </div>
                </div>

                <div class="portlet-body">
                    <div id="site_statistics_loading">
                        <img src="../admin/image/loading.gif" alt="loading" />
                    </div>
                    <div id="site_statistics_content" class="hide">
                        <div id="site_statistics" class="chart"></div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>

        <div class="span6">
            <!-- BEGIN PORTLET-->
            <div class="portlet solid light-grey bordered">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-bullhorn"></i>Activities</div>
                    <div class="tools">
                        <div class="btn-group pull-right" data-toggle="buttons-radio">
                            <a href="" class="btn blue mini active">Users</a>
                            <a href="" class="btn blue mini">Orders</a>
                        </div>
                    </div>
                </div>
                <div class="portlet-body">
                    <div id="site_activities_loading">
                        <img src="../admin/image/loading.gif" alt="loading" />
                    </div>

                    <div id="site_activities_content" class="hide">
                        <div id="site_activities" style="height:100px;"></div>
                    </div>
                </div>
            </div>

            <!-- END PORTLET-->

            <!-- BEGIN PORTLET-->

            <div class="portlet solid bordered light-grey">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-signal"></i>Server Load</div>
                    <div class="tools">
                        <div class="btn-group pull-right" data-toggle="buttons-radio">
                            <a href="" class="btn red mini active">
                                <span class="hidden-phone">Database</span>
                                <span class="visible-phone">DB</span></a>
                            <a href="" class="btn red mini">Web</a>
                        </div>
                    </div>
                </div>

                <div class="portlet-body">
                    <div id="load_statistics_loading">
                        <img src="../admin/image/loading.gif" alt="loading" />
                    </div>

                    <div id="load_statistics_content" class="hide">
                        <div id="load_statistics" style="height:108px;"></div>
                    </div>
                </div>
            </div>
            <!-- END PORTLET-->
        </div>

    </div>
    <div class="clearfix"></div>
    <div class="row-fluid">
        <div class="span6">
            <div class="portlet box purple">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-calendar"></i>General Stats</div>
                    <div class="actions">
                        <a href="javascript:;" class="btn yellow easy-pie-chart-reload"><i class="icon-repeat"></i> Reload</a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="easy-pie-chart">
                                <div class="number transactions"  data-percent="55"><span>+55</span>%</div>
                                <a class="title" href="#">Transactions <i class="m-icon-swapright"></i></a>
                            </div>
                        </div>

                        <div class="margin-bottom-10 visible-phone"></div>
                        <div class="span4">
                            <div class="easy-pie-chart">
                                <div class="number visits"  data-percent="85"><span>+85</span>%</div>
                                <a class="title" href="#">New Visits <i class="m-icon-swapright"></i></a>
                            </div>
                        </div>

                        <div class="margin-bottom-10 visible-phone"></div>
                        <div class="span4">
                            <div class="easy-pie-chart">
                                <div class="number bounce"  data-percent="46"><span>-46</span>%</div>
                                <a class="title" href="#">Bounce <i class="m-icon-swapright"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="span6">
            <div class="portlet box blue">
                <div class="portlet-title">
                    <div class="caption"><i class="icon-calendar"></i>Server Stats</div>
                    <div class="tools">
                        <a href="" class="collapse"></a>
                        <a href="#portlet-config" data-toggle="modal" class="config"></a>
                        <a href="" class="reload"></a>
                        <a href="" class="remove"></a>
                    </div>
                </div>

                <div class="portlet-body">
                    <div class="row-fluid">
                        <div class="span4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar"></div>
                                <a class="title" href="#">Network <i class="m-icon-swapright"></i></a>
                            </div>
                        </div>

                        <div class="margin-bottom-10 visible-phone"></div>
                        <div class="span4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_bar2"></div>
                                <a class="title" href="#">CPU Load <i class="m-icon-swapright"></i></a>
                            </div>
                        </div>

                        <div class="margin-bottom-10 visible-phone"></div>
                        <div class="span4">
                            <div class="sparkline-chart">
                                <div class="number" id="sparkline_line"></div>
                                <a class="title" href="#">Load Rate <i class="m-icon-swapright"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
