<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script id="allmobilize" charset="utf-8" src="{{url('home/company/style/js/allmobilize.min.js')}}"></script>
    <meta http-equiv="Cache-Control" content="no-siteapp"/>
    <link rel="alternate" media="handheld"/>
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>拉勾网-最专业的互联网招聘平台</title>
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

    <link rel="stylesheet" type="text/css" href="{{url('home/company/style/css/layout_903ac4c.css')}}"/>
    <link rel="Shortcut Icon" href="{{url('home/style/company/images/favicon.ico')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/company/style/css/style.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('home/company/style/css/external.min.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{url('home/company/style/css/popup.css')}}"/>
    <script src="{{url('home/company/style/js/jquery.1.10.1.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('home/company/style/js/jquery.lib.min.js')}}"></script>
    <script type="text/javascript" src="{{url('home/company/style/js/app.js')}}"></script>
    <script src="{{url('home/company/style/js/ajaxfileupload.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('home/company/style/js/additional-methods.js')}}"></script>

    <script type="text/javascript" src="{{url('home/company/style/js/excanvas.js')}}"></script>
    <script src="{{url('home/company/style/js/bootstrap.min.js')}}"></script>
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
    <style>
        h1{
            font-size: 18px;
            color:black;
            margin-left:20px;
        }
    </style>
</head>
<body>
<div id="body">
    <div id="header">
        <div class="wrapper">

            <a href=" class="logo">
                <img src="{{url('home/company/style/images/logo.png')}}" width="229" height="43" alt="拉勾招聘-专注互联网招聘"/>
            </a>
            <ul class="reset" id="navheader">

                <li><a href="{{url('/')}}">首页</a></li>
                <li><a href="{{url('company')}}">公司</a></li>
                <li><a href="lagouwang/public/home/yanzhi" target="_blank">论坛</a></li>
                <li><a href=lagouwang/public/home/publish" rel="nofollow">发布职位</a></li>
            </ul>
            <dl class="collapsible_menu">
                <dt>
                    <span>&nbsp;公司账号</span>
                    <span class="red dn" id="noticeDot-0"></span>
                    <i></i>
                </dt>
                <dd><a href=/lagouwang/public/home/publish">我要招人</a></dd>
                <dd><a href="lagouwang/public/home/allResume">收到的简历</a></dd>
                <dd class="logout"><a rel="nofollow" href="http://120.24.44.134/lagouwang/public/home/logout">退出</a></dd>
            </dl>
            </ul>
        </div>
    </div><!-- end #header -->



    <div id="container">

        <div style="" id="stepTip">
            <a></a>
            <img width="803" height="59" src="{{url('home/company/style/images/tiponce.jpg')}}">
        </div>
        <div class="content_mid">

            <dl class="c_section c_section_mid">
                <dt>
                <h2>公司信息</h2>
                </dt>
                <dd><h2 style="margin-left: 200px;"><a href="{{url('company/companyEdt')}}">修改信息</a></h2>
                    <form id="comForm" action="/lagouwang/public/home/uploadCom" method="post" enctype="multipart/form-data">

                        <h3>公司名称</h3> <!--非必填-->
                        <h1>微软科技有限公司（ <span style="color:red;">公司资格已通过审核，可以发布岗位</span>）</h1>

                        <h3>公司LOGO</h3> <!--非必填改必填-->

                        <img src="/lagouwang/public/comImage/14920513528748.jpg" alt="" width="190" height="190">

                        <h3>公司网址</h3>
                        <h1>www.framework.com</h1>
                        <h3>公司电话</h3>
                        <h1>18756176424</h1>
                        <h3>公司邮箱</h3>
                        <h1>1244971159@qq.com</h1>

                        <h3>所在城市</h3>
                        <h1>北京</h1>

                        <h3>行业领域</h3>
                        <h1></h1>

                        <h3>公司规模</h3>
                        <h1>2000人以上</h1>
                        <input type="hidden" name="_token" value="QHEzR4i9FPpRxlvCxw6xew4AfB0kZX6UHDUDwRmJ">

                        <h3>一句话介绍</h3>
                        <h1>公司选址在郑州市曼哈顿商业区内，开设“仲景膏滋”养生堂。养生堂对外营业，面向大众推出四季养生膏滋，针</h1>
                    </form>
                </dd>
            </dl>
        </div>

        <!------------------------------------- end ----------------------------------------->

        <script src="style/js/step1.min.js" type="text/javascript"></script>
        <script>
            var avatar = {};
            avatar.uploadComplate = function (data) {
                var result = eval('(' + data + ')');
                if (result.success) {
                    jQuery('#logoShow img').attr("src", ctx + '/' + result.content);
                    jQuery.colorbox.close();
                    jQuery('#logoNo').hide();
                    jQuery('#logoShow').show();
                }
            };
        </script>
        <div class="clear"></div>
        <input type="hidden" value="13ae35fedd9e45cdb66fb712318d7369" id="resubmitToken">
        <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
    </div><!-- end #container -->
</div><!-- end #body -->


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
                url: 'http://120.24.44.134/lagouwang/public/home/ajaxdata',
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
        <a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
        <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
        <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
        <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
        <div class="copyright">&copy;2013-2014 Lagou <a target="_blank"
                                                        href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a>
        </div>
    </div>
</div>

<script type="text/javascript" src="{{url('home/company/style/js/core.min.js')}}"></script>
<script type="text/javascript" src="{{url('home/company/style/js/popup.min.js')}}"></script>
<!-- <script src="style/js/wb.js" type="text/javascript" charset="utf-8"></script>
-->
</div>
</body>
</html>