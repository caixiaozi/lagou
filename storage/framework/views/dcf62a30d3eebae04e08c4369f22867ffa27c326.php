<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

    <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站" name="description">

    <title>找工作-互联网招聘求职网-拉勾网</title>

    <link rel="Shortcut Icon" href="<?php echo e(url('home/shou/css/favicon_faed927.ico')); ?>">


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
        window.X_Anti_Forge_Token = '18286b63-5a15-453b-a21f-1dc26eb1548b';
        window.X_Anti_Forge_Code = '95079314';
    </script>

    <!-- H5	 -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('home/shou/login/register/main.html_aio_52836d2.css')); ?>">
    <script type="text/javascript" src="<?php echo e(url('home/shou/login/register/jquery-1.11.3.min.js')); ?>"></script>
</head>
<body>

<!-- 页面主体START -->
<!-- 页面主体START -->
<header class="sso_header">
    <a href="#" class="logo"></a>
</header>
<input type="hidden" value="" id="isVisiable_request_form_verifyCode" />
<section class="content_box cleafix">
    <div class="left_area fl">
        <form action="<?php echo e(url('home/register')); ?>" method="post" id="forup">
            <ul class="form_head clearfix">
                <li> <i class="icon icon_mail"></i> 邮箱注册 </li>
                <span class="tab_active"></span>
            </ul>
            <div class="form_body" data-view="usernameRegister">
                <div class="input_item clearfix" style="display: block;">
                    <input type="type" class="input input_white" name="name" placeholder="请输入用户名" data-required="required" autocomplete="off" id="name" />

                </div>
                <div class="input_item clearfix" style="display: block;">
                    <input type="email" class="input input_white" name="email" placeholder="请输入常用邮箱地址" data-required="required" autocomplete="off" id="email" />
                    <div id="usernameinfo" style="height:20px;line-height:20px;color:limegreen"></div>
                </div>
                <div class="input_item clearfix" style="display: block;">
                    <input type="password" class="input input_white" name="password" placeholder="请输入密码" data-required="required" autocomplete="off" id="password" />
                    <div id="passinfo"></div>
                </div>
                <div class="input_item clearfix" style="display: block;">
                    <input type="button" class="btn btn_outline btn_lg" value="找工作" data-myvalue="1" love='ut'>
                    <input type="button" class="btn btn_outline btn_lg last_child" value="招人" data-myvalue="2" love='ut'>
                    <input type="hidden" name="type" id='type' value="">
                    <div id='typeinfo' style="height:20px;line-height:20px;color:limegreen"></div>
                </div>
                <div class="input_item clearfix" data-propertyname="protocol" data-controltype="CheckBox" style="display: block;">
                </div>
                <?php echo e(csrf_field()); ?>

                <div class="input_item clearfix">
                    <!-- <button type="button" class=" btn_green btn_active btn_block btn_lg" id='sub'>注 册</button> -->
                    <input type="submit" value="注册" class=" btn_green btn_active btn_block btn_lg" id='sub'>
                </div>
            </div>

            <script type="text/javascript">
                var usernameres = false;
                var Cpwd = false;
                var Ctype = false;
                $('#email').blur(function(){
                    var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                    var v = $('#email').val();
                    var ere = reg.test(v);
                    if(ere && v){
                        $('#usernameinfo').html('');
                        usernames = true;
                    }else{
                        $('#usernameinfo').html('邮箱格式不正确');
                        usernames = false;
                    }
                });

                $('#password').blur(function(){
                    var pwdv = $(this).val();
                    var pwdreg = /^\S{6,16}$/;
                    if(!pwdreg.test(pwdv)){
                        $('#passinfo').html('请输入6-16位密码,区分大小写');
                        Cpwd = false;
                    }else{
                        $('#passinfo').html('');
                        Cpwd = true;
                    }
                });
                $('input[love=ut]').click(function(){
                    var typev = $(this).attr('data-myvalue');
                    $('#type').val(typev);Ctype = true;
                    $('#typeinfo').html('');

                });

                $('#sub').click(function(){
                    if(Ctype == false){
                        $('#typeinfo').html('请选择使用拉钩的目的');
                    }
                    $('#eamil').blur();
                    $('#password').blur();
                    if(usernames && Cpwd && Ctype){
                        $('#forup').submit();
                    }else{

                        return false;

                    }

                });
         </script>
        </form>
    </div>
    <div class="divider fl">
        <img src="<?php echo e(url('home/shou/css/divider_a3c3658.jpg')); ?>" alt="分割线">
    </div>
    </div>
    <div class="right_area fl">
        <h5>已有拉勾帐号:</h5>
        <a href="<?php echo e(url("home/login")); ?>" class="login_now" data-lg-tj-id="18N0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">直接登录</a>
        <h5>使用以下帐号直接登录:</h5>
        <ul class="vender_login clearfix">
            <li><a rel="nofollow" href="/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank" data-lg-tj-id="1910" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
            <li><a rel="nofollow" href="/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank" data-lg-tj-id="1920" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
            <li class="last_child"><a rel="nofollow" href="/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank" data-lg-tj-id="1930" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
        </ul>
        <div class="qrcode">
            <img src="<?php echo e(url('home/shou/css/qrcode_0ec6bff.jpg')); ?>" alt="二维码">
            <p>[ 扫码下载拉勾APP ]</p>
        </div>
    </div>
</section>
<!-- 页面主体END -->
<footer>
    <h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer><!-- jquery lib -->
<!--拉勾UI框架 -->
<!-- analytics js file --><!-- plat analytics js file -->
<script type="text/javascript" src="<?php echo e(url('home/shou/login/register/vendor_c7a7c93.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('home/shou/login/register/main.html_aio_e995440.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('home/shou/login/register/static_ab40326.js')); ?>"></script>
<script charset="utf-8" src="<?php echo e(url('home/shou/login/register/vdaldklakdjj.js')); ?>"></script>
<script async="" src="<?php echo e(url('home/shou/login/register/analytics.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('home/shou/login/register/jquery.min_5885438.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('home/shou/login/register/jquery-1.8.4.min.js')); ?>"></script>
<script type="text/javascript" src="<?php echo e(url('home/shou/login/register/md5.js')); ?>"></script>
<script type="text/javascript">
    //login page
    var GLOBAL_DOMAIN=window.GLOBAL_DOMAIN||{ctx:"http://www.lagou.com",rctx:"http://hr.lagou.com",pctx:"http://passport.lagou.com",actx:"http://account.lagou.com",paictx:"http://pai.lagou.com",sctx:"http://suggest.lagou.com"};
    require(['pc/page/register/main']);
    $("input").placeholder();
</script>
<script type="text/javascript" src="<?php echo e(url('home/shou/login/register/oss.js')); ?>"></script>
</body>
</html>


