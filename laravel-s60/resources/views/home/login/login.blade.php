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
        window.X_Anti_Forge_Token = '0b90645c-032f-4004-a95e-aa04bee7b39f';
        window.X_Anti_Forge_Code = '46654917';
    </script>

    <!-- H5	 -->
    <!--[if lt IE 9]>
    <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <link rel="stylesheet" type="text/css" href="{{url('home/shou/login/main.html_aio_67593ba.css')}}">
    <script type="text/javascript" src="{{url('home/shou/login/register/jquery-1.11.3.min.js')}}"></script>
</head>
<body>

<!-- 页面主体START -->
<header class="sso_header">
    <a href="http://www.lagou.com" class="logo ">
    </a>
</header>
<section class="content_box cleafix">
    @if (session('error'))
        <div style="width: 500px;height: 100px;border:1px solid lawngreen">
            {{session('error')}}
        </div>
    @endif
    <div class="left_area fl">
        <form action="{{url('home/doLogin')}}" method="post" id="forup">
            <div class="form_body"  data-view="loginView">
                <div class="input_item clearfix" data-propertyname="username" data-controltype="Phone" style="display: block;">
                    <input type="email" class="input input_white" id="username" name="email" placeholder="请输入已验证手机/邮箱" data-required="required" autocomplete="off" autofocus >
                    <div id='userinfo' style="height:20px;line-height:20px;color:lightgreen"></div>
                </div>
                <div class="input_item clearfix" data-propertyname="password" data-controltype="Password" style="display: block;">
                    <input type="password" class="input input_white" id="password" name="password" placeholder="请输入密码" data-required="required" autocomplete="off" >
                    <div id='pwdinfo' style="height:20px;line-height:20px;color:lightgreen"></div>
                </div>

                <div class="input_item clearfix">
                    <a rel="nofollow" href="{{url('retrievepassword')}}" class="forgot_pwd">忘记密码？</a>
                </div>
                {{csrf_field()}}
                <div class="input_item clearfix" data-propertyname="submit" data-controltype="Botton">
                    <input type="submit" class="btn btn_green btn_active btn_block btn_lg" value="登&nbsp;录" data-lg-tj-id="1j90" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                </div>
                <script type="text/javascript">
                    var usernameres = false;
                    var pwdres = false;
                    var vcoderes = false;
                    $('#username').blur(function(){
                        var reg = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;

                        var telreg = /^1[0-9]{10}$/;

                        var v = $('#username').val();
                        var ere = reg.test(v);
                        var tre = telreg.test(v);
                        if(ere || tre){
                            $('#userinfo').html('');
                            usernameres = true;
                        }else{
                            $('#userinfo').html('请输入有效的手机/邮箱');
                            usernameres = false;
                        }
                    });
                    $('#password').blur(function(){
                        var z = /^[a-zA-Z0-9]\w{6,18}$/;
                        var v = $('#password').val().trim();
                        var h = z.test(v);
                        if(v || h){
                            $('#pwdinfo').html('');pwdres = true;
                        }else{
                            $('#pwdinfo').html('请输入6-16位密码，字母区分大小写');
                            pwdres = false;
                        }
                    });


                    $('#vcode').blur(function(){
                        var v = $('#vcode').val().trim();
                        if(v){
                            $('#vcodeinfo').html('');vcoderes = true;
                        }else{
                            $('#vcodeinfo').html('请输入验证码');
                            vcoderes = false;
                        }
                    });
                    $('#submitLogin').click(function(){
                        $('#username').blur();
                        $('#password').blur();
                        $('#vcode').blur();
                        if(usernameres && pwdres && vcoderes){
                            $('#forup').submit();
                        }
                    });
                </script>



                <div class="input_item clearfix">
                    <h5 class="reg_now">还没有拉勾帐号？<a rel="nofollow" href="{{url('/register')}}" data-lg-tj-id="1ja0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">立即注册</a></h5>
                </div>
                <input type="hidden" value = "" id = "isVisiable_request_form_verifyCode" />
            </div>
        </form>
    </div>

    <div class="divider fl">
        <img src="{{url('home/shou/css/divider_a3c3658.jpg')}}" alt="分割线">
    </div>
        <div class="right_area fl">

            <h5>使用以下帐号直接登录:</h5>
            <ul class="vender_login clearfix">
                <li><a rel="nofollow" href="/oauth20/auth_sinaWeiboProvider.html" title="使用新浪微博帐号登录" class="vender_icon icon_sina" target="_blank" data-lg-tj-id="1910" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
                <li><a rel="nofollow" href="/oauth20/auth_qqProvider.html" title="使用腾讯QQ帐号登录" class="vender_icon icon_tencent" target="_blank" data-lg-tj-id="1920" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
                <li class="last_child"><a rel="nofollow" href="/oauth20/auth_weixinProvider.html" class="vender_icon icon_wechat" title="使用微信帐号登录" target="_blank" data-lg-tj-id="1930" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></a></li>
            </ul>
            <div class="qrcode">
                <img src="{{url('home/shou/css/qrcode_0ec6bff.jpg')}}" alt="二维码">
                <p>[ 扫码下载拉勾APP ]</p>
            </div>
        </div>
</section>

<footer>
    <h4 class="slogan">— 专注互联网职业机会 —</h4>
</footer>
<!-- 页面主体END --><!-- jquery lib -->
<!--拉勾UI框架 -->
<!-- analytics js file --><!-- plat analytics js file --><input type="hidden" id="serverTime" value="1491741248859" />

<script type="text/javascript" src="{{url('home/shou/login/vendor_c7a7c93.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/main.html_aio_e995440.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/static_ab40326.js')}}"></script>
<script charset="utf-8" src="{{url('home/shou/login/register/vdaldklakdjj.js')}}"></script>
<script async="" src="{{url('home/shou/login/register/analytics.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/register/jquery.min_5885438.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/register/jquery-1.8.4.min.js')}}"></script>
<script type="text/javascript" src="{{url('home/shou/login/register/md5.js')}}"></script>
<script type="text/javascript">
    //login page

    var GLOBAL_DOMAIN=window.GLOBAL_DOMAIN||{ctx:"http://www.lagou.com",rctx:"http://hr.lagou.com",pctx:"http://passport.lagou.com",actx:"http://account.lagou.com",paictx:"http://pai.lagou.com",sctx:"http://suggest.lagou.com"};
    require(['pc/page/register/main']);
    $("input").placeholder();


    require(['pc/modules/event/happy-3rd-birthday/main']);
</script>
<script type="text/javascript" src="{{url('home/shou/login/oss.js')}}"></script>
</body>
</html>