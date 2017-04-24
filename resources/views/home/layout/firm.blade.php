<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">

    <meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网" name="description">

    <title>拉勾网-最专业的互联网招聘平台_找工作_招聘_人才网_求职</title>

    <link rel="Shortcut Icon" href="{{url('home/shou/css/favicon_faed927.ico')}}">

    <link href="{{url('home/firm/css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('home/firm/css/extern/al.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('home/firm/css/popup.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{url('home/firm/js/jquery.js')}}">
    </script>
    <script src="{{url('home/firm/js/jquery_002.js')}}" type="text/javascript">
    </script>
    <script type="text/javascript" src="{{url('home/firm/js/ajaxfileupload.js')}}">
    </script>
    <script src="{{url('home/firm/js/additional-methods.js')}}" type="text/javascript">
    </script>

    <link rel="stylesheet" href="{{url('home/firm/css/ui.css')}}">
    <link rel="stylesheet" href="{{url('home/firm/css/window.css')}}">
    <style type="text/css">a{text-decoration:none;}</style>
</head>

<body>
<div id="body">
    <link href="{{url('home/firm/css/header.css')}}" rel="stylesheet">
    <!-- 未登录用户头部 -->
    <!-- 企业用户头部 -->
    <!-- 企业用户头部 -->
    <div id="lg_tbar">
        <div class="inner">


            <div class="lg_tbar_l">
                <a style="text-decoration:none;" href="" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>

                <a style="text-decoration:none;" href="url{{'login'}}">进入企业版</a>
            </div>
            <ul class="lg_tbar_r reset">
                <li>
                    <a style="text-decoration:none;" href="/resume/pending" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收到的简历</a>
                </li>
                <li>
                    <a style="text-decoration:none;" href="nd/index.html" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">发布的简历</a>
                    <em class="noticeDot dn" id="noticeDot_delivery"></em>
                </li>
                <li class="user_dpdown">
                    <span class="unick bl" style="width:96px;">{{session('vip') -> name}}</span>
                    <em class="noticeDot dn" id="noticeDot_name"></em>
                    <i></i>
                    <ul class="reset">
                        <li>
                            <a style="text-decoration:none;" href="ob/positions.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">发布的职位</a>
                        </li>
                        <li>
                            <a style="text-decoration:none;" href="ndle/show.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">收到的简历</a>
                            <em class="noticeDot dn" id="noticeDot_invitation"></em>
                        </li>

                        <li>
                            <a style="text-decoration:none;" href="url{{'company'}}" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">公司的首页</a>
                        </li>
                        <li>
                            <a style="text-decoration:none;" href="url{{'personal'}}" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">账号设置</a>
                        </li>
                        <li>
                            <a style="text-decoration:none;" href="/login/logout" id="logouta" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                            <script type="text/javascript">
                                $('#logouta').click(function(){
                                    $.post('/index.php/Home/Login/logout.html',{},function(data){
                                        window.location.reload();
                                    });
                                    return false;
                                });
                            </script>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="lg_tnav">
        <div class="inner">
            <div class="lg_tnav_l">
                <a style="text-decoration:none;" href="http://www.our.com/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <h1>拉勾网</h1>
                    <span>企业版</span>
                </a>
            </div>
            <ul class="lg_tnav_wrap reset">
                <li>
                    <a style="text-decoration:none;" href="home/index" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司首页</a>
                </li>
                <li>
                    <a style="text-decoration:none;" href="/resume/pending" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">简历管理</a>
                    <b class="unhandleNum" id="unhandleNum"></b>
                </li>
                <li>
                    <a style="text-decoration:none;" href="/resume/job" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">职位管理</a>
                </li>

                <li>
                    <a style="text-decoration:none;" href="dex.html" data-lg-tj-id="5y00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">发布职位</a>
                </li>
            </ul>
        </div>
    </div>
    <div id="container">
        <div class="sidebar">
            <a style="text-decoration:none;" class="btn_create" href="/firm/recruit">
                发布新职位
            </a>
            <dl class="company_center_aside">
                <dt>
                    我收到的简历
                </dt>
                <!--光标默认选中 class="current" -->
                <dd>
                    <a style="text-decoration:none;" href="/resume/pending">
                        待处理简历
                    </a>
                </dd>
                <dd>
                    <a style="text-decoration:none;" href="/resume/checkdd">
                        已通知面试简历
                    </a>
                </dd>
                <dd>
                    <a style="text-decoration:none;" href="/resume/out">
                        不合适简历
                    </a>
                </dd>
            </dl>
            <dl class="company_center_aside">
                <dt>
                    我发布的职位
                </dt>
                <dd>
                    <a style="text-decoration:none;" href="/firm/job">
                        有效职位
                    </a>
                </dd>
                <dd>
                    <a style="text-decoration:none;" href="/firm/offline">
                        已下线职位
                    </a>
                </dd>
            </dl>
            <div class="subscribe_side mt20">
                <div class="f14">
                    想收到更多更好的简历？
                </div>
                <div class="f18 mb10">
                    就用拉勾招聘加速助手
                </div>
                <div>
                    咨询：
                    <a style="text-decoration:none;" class="f16" href="mailto:jessica@lagou.com">
                        FiveOver@lagou.com
                    </a>
                </div>
                <div class="f18 ti2em">
                    010-57286512
                </div>
            </div>
            <div class="subscribe_side mt20">
                <div class="f14">
                    加入互联网HR交流群
                </div>
                <div class="f18 mb10">
                    跟同行聊聊
                </div>
                <div class="f24">
                    338167634
                </div>
            </div>
        </div>

        @section('content')


        @show
        <script src="{{url('home/firm/js/jobs.js')}}" type="text/javascript">
        </script>
        <div class="clear">
        </div>
        <a style="text-decoration:none;" rel="nofollow" title="回到顶部" id="backtop" style="display: inline;">
        </a>
    </div>
</div>
<link rel="stylesheet" type="text/css" href="{{url('home/firm/css/widgets_fec497b.css')}}">
<div id="footer">
    <div class="wrapper">
        <i class="footer_lagou_icon">
        </i>
        <div class="inner_wrapper">
            <a style="text-decoration:none;" class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">
                拉勾APP
                <span>
                            </span>
                <i>
                </i>
            </a>
            <a style="text-decoration:none;" href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">
                拉勾微博
            </a>
            <a style="text-decoration:none;" class="footer_qr" href="javascript:void(0)" rel="nofollow">
                拉勾微信
                <i>
                </i>
            </a>
            <a style="text-decoration:none;" href="http://www.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">
                版本更新
            </a>
            <a style="text-decoration:none;" href="http://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">
                帮助中心
            </a>
            <a style="text-decoration:none;" href="http://www.lagou.com/about.html" target="_blank" rel="nofollow">
                联系我们
            </a>
            <a style="text-decoration:none;" id="BizQQWPA" href="javascript:void(0);" rel="nofollow">
                在线交流
            </a>
            <span class="tel">
                            服务热线：
                            <em>
                                400-605-9900 (9:00 -19:00)
                            </em>
                        </span>
        </div>
        <div class="copy">
                        <span>
                            <em>
                                ©
                            </em>
                            2017 Lagou
                        </span>
            <a style="text-decoration:none;" target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">
                京ICP备14023790号-2
            </a>
            <span>
                            京公网安备11010802017116号
                        </span>
        </div>
    </div>
</div>

<div id="cboxOverlay" style="display: none;">
</div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
    <div id="cboxWrapper">
        <div>
            <div id="cboxTopLeft" style="float: left;">
            </div>
            <div id="cboxTopCenter" style="float: left;">
            </div>
            <div id="cboxTopRight" style="float: left;">
            </div>
        </div>
        <div style="clear: left;">
            <div id="cboxMiddleLeft" style="float: left;">
            </div>
            <div id="cboxContent" style="float: left;">
                <div id="cboxTitle" style="float: left;">
                </div>
                <div id="cboxCurrent" style="float: left;">
                </div>
                <button type="button" id="cboxPrevious">
                </button>
                <button type="button" id="cboxNext">
                </button>
                <button id="cboxSlideshow">
                </button>
                <div id="cboxLoadingOverlay" style="float: left;">
                </div>
                <div id="cboxLoadingGraphic" style="float: left;">
                </div>
            </div>
            <div id="cboxMiddleRight" style="float: left;">
            </div>
        </div>
        <div style="clear: left;">
            <div id="cboxBottomLeft" style="float: left;">
            </div>
            <div id="cboxBottomCenter" style="float: left;">
            </div>
            <div id="cboxBottomRight" style="float: left;">
            </div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;">
    </div>
</div>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;">
</ul>
<script src="{{url('home/firm/js/core.js')}}" type="text/javascript">
</script>
<script src="{{url('home/firm/js/popup.js')}}" type="text/javascript">
</script>

<div style="display: none;" id="cboxOverlay">
</div>
<div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox">
    <div id="cboxWrapper">
        <div>
            <div style="float: left;" id="cboxTopLeft">
            </div>
            <div style="float: left;" id="cboxTopCenter">
            </div>
            <div style="float: left;" id="cboxTopRight">
            </div>
        </div>
        <div style="clear: left;">
            <div style="float: left;" id="cboxMiddleLeft">
            </div>
            <div style="float: left;" id="cboxContent">
                <div style="float: left;" id="cboxTitle">
                </div>
                <div style="float: left;" id="cboxCurrent">
                </div>
                <button id="cboxPrevious" type="button">
                </button>
                <button id="cboxNext" type="button">
                </button>
                <button id="cboxSlideshow">
                </button>
                <div style="float: left;" id="cboxLoadingOverlay">
                </div>
                <div style="float: left;" id="cboxLoadingGraphic">
                </div>
            </div>
            <div style="float: left;" id="cboxMiddleRight">
            </div>
        </div>
        <div style="clear: left;">
            <div style="float: left;" id="cboxBottomLeft">
            </div>
            <div style="float: left;" id="cboxBottomCenter">
            </div>
            <div style="float: left;" id="cboxBottomRight">
            </div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;">
    </div>
</div><div style="display: none;" id="cboxOverlay"></div><div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><button id="cboxPrevious" type="button"></button><button id="cboxNext" type="button"></button><button id="cboxSlideshow"></button><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;">

    </div>
</div>
</body>
</html>