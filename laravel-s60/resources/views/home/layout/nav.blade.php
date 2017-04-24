<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script id="allmobilize" charset="utf-8" src="{{ asset('home/company/style/js/allmobilize.min.js') }}"></script>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate" media="handheld"/>
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>@yield('title', '拉勾网-最专业的互联网招聘平台')</title>
    <meta property="qc:admins" content="23635710066417756375"/>
    <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">
    <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招"
          name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6"/>
    <div class="web_root"  style="display:none">http://www.lagou.com</div>
    <!-- <div class="web_root"  style="display:none">h</div> -->
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>
    {{--<link href="{{asset('Admin/css/bootstrap.min.css')}}" rel="stylesheet"/>--}}
    <link rel="stylesheet" type="text/css" href="{{asset('home/company/style/css/layout_903ac4c.css')}}"/>
    <link rel="Shortcut Icon" href="{{ asset('home/company/h/images/favicon.ico') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('home/company/style/css/style.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('home/company/style/css/external.min.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('home/company/style/css/popup.css') }}"/>
    <script src="{{ asset('home/company/style/js/jquery.1.10.1.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('home/company/style/js/jquery.lib.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/company/js/app.js') }}"></script>
    <script src="{{ asset('home/company/style/js/ajaxfileupload.js') }}" type="text/javascript"></script>
    <script type="text/javascript" src="{{ asset('company/company/style/js/additional-methods.js') }}"></script>

    <script type="text/javascript" src="{{ asset('home/company/style/js/excanvas.js') }}"></script>
    <script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>
    <style>
        #chat{
            position:fixed;
            right:0px;
            bottom:0px;
            width:300px;
            height:540px;
            background:white;
            z-index: 2000;
            display: none;
            border-radius:20px;
        }
        #chat_1{
            width:300px;
            height:40px;
            background:#00b38a;
        }
        #chat_2{
            width:300px;
            overflow:hidden;
            min-height:280px;
            background:white;
        }
        #chat_3{
            width:300px;
            height:200px;
            background:white;
            border-top:#4c718a;
        }
        #chat_4{
            width:300px;
            height:40px;
            background: white;
        }
    </style>
    @yield('css')
</head>
<body>
<div id="body">
    <link href="{{url('home/head/css/header.css')}}" rel="stylesheet">
    <!-- 未登录用户头部 -->


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



    @yield('middle')


    <div id="product-fk">
        <div id="feedback-icon">
            <div class="fb-icon"></div>
            <span>我要反馈</span>
        </div>
    </div>
    <div class="content feedback" id="chat">
        <div id="chat_1">
            <span style="position: relative;left:10px;top:10px;color: white;font-size:20px;">拉勾</span>
            <span style="position: relative;left: 210px;top:10px;color: white;"><a
                        href="">__&nbsp;&nbsp;&nbsp;</a><a id="xde">X</a></span>
        </div>
        <center>
            <span style="position:relative;top:15px;">请留言，我们将尽快联系您！</span><br>
            <textarea id="hers" name="" style="width:255px;height:200px;"
                      placeholder="尊敬的用户您好，请把您遇到的问题以及您的联系方式告诉我们，我们会尽快与您联系。">
            </textarea><br>
            <span>请留言，我们将尽快联系您！</span><br>
            <input type="text" id="ders" value="" style="width:255px;" name="tel" class="tel-text" placeholder="联系电话">
            <input type="text" id="bers" style="width:255px;" name="email" class="email-text" placeholder="邮箱"><br><br>
            <input type="button" name="submit" id="chat_5"
                   style="padding:10px 100px;background:#00b38a;border-radius:20px;" value="留言">
        </center>
    </div>
    <script>
        $("#product-fk").click(function () {
            $("#chat").css('display', 'block');
            $("#chat_5").click(function () {
                var hers = $("#hers").val();
                var ders = $("#ders").val();
                var bers = $("#bers").val();
                $.ajax({
                    url: '{{url('home/ajaxdata')}}',
                    type: 'get',
                    data: {her: hers, der: ders, ber: bers},
//                    dataType:'json',
                    success: function (data) {
                        $("#chat").css('display', 'none');
                    },
                    error: function (xml) {
                        alert(2);
                    }
                });
                $("#val").val("");
            });
        });
        $("#xde").click(function () {
            $("#chat").css('display', 'none');
        });
    </script>
    <div id="footer">
        <div class="wrapper">
            <i class="footer_lagou_icon"></i>
            <div class="inner_wrapper">
                <a style="text-decoration:none;" class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span></span><i></i></a>
                <a style="text-decoration:none;" href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
                <a style="text-decoration:none;" class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
                <a style="text-decoration:none;" href="http://www.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
                <a style="text-decoration:none;" href="http://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
                <a style="text-decoration:none;" href="http://www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
                <a style="text-decoration:none;" id="BizQQWPA" href="javascript:void(0);" rel="nofollow">在线交流</a>
                <span class="tel">服务热线：<em>400-605-9900 (9:00 -19:00)</em></span>
            </div>
            <div class="copy">
                <span><em>©</em>2017 Lagou </span>
                <a style="text-decoration:none;" target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
                <span>京公网安备11010802017116号</span>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('home/company/style/js/core.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('home/company/style/js/popup.min.js') }}"></script>
@yield('js')
<!-- <script src="style/js/wb.js" type="text/javascript" charset="utf-8"></script>
     -->
</div>
</body>
</html>