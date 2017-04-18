<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

    <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">

    <title>找工作-互联网招聘求职网-拉勾网</title>

    <link rel="Shortcut Icon" href="{{url('home/shou/css/favicon_faed927.ico')}}">


    <!-- header/global_domain FE_base.. -->

    <script type="text/javascript">
        (function() {
            var protocol = window.location.protocol;
            var host = window.location.host;
            var baseUrl = protocol + '//' + host;

            window.GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
                    ctx: protocol + '//www.lagou.com',
                    rctx: protocol + '//hr.lagou.com',
                    crctx: protocol + '//hr.lagou.com/company',
                    pctx: protocol + '//passport.lagou.com',
                    actx: protocol + '//account.lagou.com',
                    paictx: protocol + '//pai.lagou.com',
                    sctx: protocol + '//suggest.lagou.com',
                    zctx: protocol + '//yanzhi.lagou.com',
                    proctx: 'https://pro.lagou.com',
                    lgsctx: protocol + '//img.lagou.com',
                    FE_frontLogin: baseUrl + '//www.lagou.com/frontLogin.do',
                    FE_frontLogout: baseUrl + '//www.lagou.com/frontLogout.do',
                    FE_frontRegister: baseUrl + '//www.lagou.com/frontRegister.do'
                };

            window.GLOBAL_CDN_DOMAIN = 'img.lagou.com';
        })();
    </script>

    <!-- 页面样式 --><!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">
        window.X_Anti_Forge_Token = '634e4dcb-ff8d-4a75-ad2e-2886bbfd9908';
        window.X_Anti_Forge_Code = '85342006';
    </script>

    <!-- H5	 -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="{{url('home/shou/login/zhpass/step1.html_aio_4f347d0.css')}}">

</head>
<body>
<input type="hidden" value = "false" id = "isVisiable_request_form_verifyCode" />
<input type="hidden" value = "true" id = "is_must_show_verify_code" />
<!-- 页面主体START -->
<header class="sso_header">
    <a href="#" class="logo"></a>
</header>

<section class="content_box" id="findPwd2">
    <!-- 通过邮箱来找回密码 -->
    <div class="findPwd">

        <form action="home/password/email" method="POST">
            <ul class="form_head clearfix">
                <li class="active" style="margin-right:42px;">
                    <span class="icon_step step1"></span>
                    输入邮箱地址
                </li>
                <li style="margin-right:53px;width:59px;">
                    <span class="icon_step step2"></span>
                    验证邮箱
                </li>
                <li style="width:59px">
                    <span class="icon_step step3"></span>
                    重置密码
                </li>
            </ul>
            <div class="form_body" data-view="emailFindStep1">
                <div style="display: block;" class="input_item clearfix" data-propertyname="email" data-controltype="Email">
                    <input class="input input_white"  name="email" placeholder="请输入注册时使用的邮箱地址" data-required="required" autocomplete="off" type="text" value="{{ old('email') }}">
                </div>

                <div style="display: block;" class="input_item clearfix" data-propertyname="submit" data-controltype="Botton">
                    <button type="submit">找回密码</button>
                </div>
            </div>
            <div class="form_body" style="display:none">
                <div class="input_item clearfix">
                    <h3 class="reset_mail">密码重置邮件已发送至你的邮箱：<span class="des_mail">clear@3wcoffee.com</span></h3>
                    <p class="reset_tips">请在24小时内登录你的邮箱接收邮件,链接激活后可重置密码。</p>
                </div>
                <div class="input_item clearfix" style="display:none;" id="gotoVerify">
                    <input class="btn btn_green btn_active btn_block" value="登录邮箱查看" id="step2" type="button">
                </div>
            </div>
            <div class="form_body" style="display:none">
                <div class="input_item clearfix">
                    <input class="input input_white" id="" name="" placeholder="请输入新密码" data-required="required" autocomplete="off" type="text">
                </div>
                <div class="input_item clearfix">
                    <input class="input input_white" id="" name="" placeholder="请再次输入新密码" data-required="required" autocomplete="off" type="text">
                </div>
                <div class="input_item clearfix">
                    <input type="button" class="btn btn_green btn_active btn_block" value="确定" id="step3" onclick="findByMail('step3')">
                </div>
            </div>
        </form>
    </div>
</section>

<footer>
    <h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- 页面主体END --><!-- jquery lib --><!--拉勾UI框架 -->
<!-- analytics js file --><!-- plat analytics js file -->
<script type="text/javascript" src="{{url('home/shou/login/zhpass/vendor_c7a7c93.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/zhpass/step1.html_aio_62622db.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/zhpass/static_ab40326.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/zhpass/zhaohui.js')}}"></script>
<script type="text/javascript">
    //login page
    require(['pc/page/findpassword/main']);
</script>
<script type="text/javascript" src="{{url('home/shou/login/zhpass/oss.js')}}"></script></body>
</html>
