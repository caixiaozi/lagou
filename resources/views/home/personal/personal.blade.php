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


    <!-- global_domain FE_base... -->

    <script type="text/javascript">

        (function() {
            var protocol = window.location.protocol;
            var host = window.location.host;
            var baseUrl = protocol + '//' + host;

            window.GLOBAL_DOMAIN = window.GLOBAL_DOMAIN || {
                    ctx: 'https://www.lagou.com',
                    rctx: 'https://hr.lagou.com',
                    crctx: 'https://hr.lagou.com/company',
                    pctx: 'https://passport.lagou.com',
                    actx: 'https://account.lagou.com',
                    paictx: 'https://pai.lagou.com',
                    sctx: 'https://suggest.lagou.com',
                    zctx: 'https://yanzhi.lagou.com',
                    ectx: 'https://easy.lagou.com',
                    proctx: 'https://pro.lagou.com',
                    lgsctx: protocol + '//www.lgstatic.com',
                    FE_frontLogin: baseUrl + '/frontLogin.do',
                    FE_frontLogout: baseUrl + '/frontLogout.do',
                    FE_frontRegister: baseUrl + '/frontRegister.do'
                };

            window.GLOBAL_CDN_DOMAIN = 'www.lgstatic.com';
        })();
    </script>




    <!-- 公共样式 -->
    <!-- header样式 -->	<!-- footer样式 -->
    <!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">
        window.X_Anti_Forge_Token = '2383513e-fd41-489b-9c3f-a0d9d025b2b0';
        window.X_Anti_Forge_Code = '10228627';
    </script>

    <link rel="stylesheet" type="text/css" href="{{url('home/shou/myresume/css/layout_903ac4c.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/myself/css/mCustomScrollbar_ac2fb8b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/myself/css/layout_903ac4c.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/myself/css/widgets_d89a168.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/myself/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/myself/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/myself/css/loginpop_113e5e2.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('home/personal/binding/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/binding/css/mCustomScrollbar_ac2fb8b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/binding/css/layout_903ac4c.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/binding/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/binding/css/widgets_d89a168.css')}}">

    <link rel="stylesheet" type="text/css" href="{{url('home/personal/modify/css/mCustomScrollbar_ac2fb8b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/modify/css/layout_903ac4c.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/modify/css/main.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/personal/modify/css/widgets_d89a168.css')}}">

    <script src="{{url('home/personal/myself/js/userinfo_7f28f39.js')}}" type="text/javascript"></script>
    <script src="{{url('home/personal/myself/js/main.html_aio_2_e7624b3.js')}}" type="text/javascript"></script>
    <script src="{{url('home/personal/myself/js/jquery-1.js')}}" type="text/javascript"></script>
    <script charset="utf-8" class="lazyload" src="{{url('home/personal/myself/js/jquery.js')}}"></script>
    <script async="" src="{{url('home/personal/myself/js/msgPopup_9611cae.js')}}" data-require-id="common/widgets/common/msgPopup"></script>
    <script charset="utf-8" class="lazyload" src="{{url('home/personal/myself/js/lagou_5427c0e.js')}}"></script>
    <script async="" src="{{url('home/personal/myself/js/main_e08c2f2.js')}}" data-require-id="common/components/template-helper/main"></script>

<body>
<!--导航  -->
<div id="lg_header">
    <div id="lg_tbar">

        <div class="inner">

            <div class="lg_tbar_l">
                <a href="http://www.lagou.com/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a href="http://hr.lagou.com/dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
            </div>
            <ul class="lg_tbar_r">
                <!-- if has unread message, add class unreaded -->
                <li class="msg_dropdown">
                {{--@if(!empty(session('user')))--}}
                    <li> <a href="{{session('')}}"  class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a> </li>
                    <li> <a href="{{session('')}}"  class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a> </li>
                    <li> <a href="{{session('')}}"  class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的收藏</a> </li>
                    <li class="user_dpdown">
                        {{--<span class="unick bl">{{$data->userName}}</span>--}}
                        <em id="noticeDot_name" class="noticeDot dn"></em>
                        <i></i>
                        <ul class="reset">
                            <li><a rel="nofollow" data-lg-tj-cid="idnull" data-lg-tj-no="idnull" data-lg-tj-id="5a00" href="/home/subscribe">我的订阅</a></li>
                            <li><a id="invitationLink" data-lg-gatj-msg="header_c,职位邀请,number" rel="nofollow" data-lg-tj-cid="idnull" data-lg-tj-no="idnull" data-lg-tj-id="5b00" href="/index.php/Home/ResumeHandle/show.html">我要找工作</a>
                                <em id="noticeDot_invitation" class="noticeDot dn"></em></li>
                            <li><a rel="nofollow" data-lg-tj-cid="idnull" data-lg-tj-no="idnull" data-lg-tj-id="5c00" href="http://account.lagou.com/account/accountBind.html">帐号设置</a></li>
                            <li><a rel="nofollow" data-lg-tj-cid="idnull" data-lg-tj-no="idnull" data-lg-tj-id="5d00" href="/index.php/Home/companyJob/create.html">去企业版</a></li>
                            <li><a id="logouta" rel="nofollow" data-lg-tj-cid="idnull" data-lg-tj-no="idnull" data-lg-tj-id="5e00" href="/login/logout">退出</a>
                            </li>
                        </ul>
                        {{--@endif--}}
                        {{--@if(empty(session('user')))--}}
                            <ul class="lg_tbar_r" style ="margin-right:110px">
                                <li> <a href="/login"  data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a> </li>
                                <li> <a href="/register"  class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a> </li>
                            </ul>
                        {{--@endif--}}

                    </li>
            </ul>
        </div>
    </div>

    <!--C端头部白色导航-->
    <div id="lg_tnav">

        <div class="inner">
            <div class="lg_tnav_l">
                <a href="" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <h1 class="logo_birth_3rd">拉勾网</h1>
                </a>
            </div>
            <ul class="lg_tnav_wrap">
                <li>
                    <a href="" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
                </li>
                <li>
                    <a href="" data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
                </li>
                <li>
                    <a href="" data-lg-tj-id="5k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">一拍</a>
                </li>
            </ul>

        </div>

    </div>
</div>

<!-- 新添加的内容 -->
<div class="all">

    <!-- 侧边栏 菜单-->
    <div class="c_cdan">
        <div class="x_cdan">
            <ul>
                <li><h3>帐号设置</h3></li>
                <li><a href="javascript:">个人信息</a></li>
                <li><a href="javascript:">账号绑定</a></li>
                <li><a href="javascript:">拉钩PLUS</a></li>
                <li><a href="javascript:">修改密码</a></li>
            </ul>
        </div>
    </div>
    <!-- 右边内容 -->
    <div class="y_nav" style="display:block">
        {{--<p>欢迎您,{{session('user') -> username}}</p>--}}
        <br>
        <img src="http://wanzao2.b0.upaiyun.com/xbimg/1007/noral/usercontent/2003/1/20/1043028035734394.png" alt="">
    </div>
    <!-- 个人信息 -->
    <div class="y_nav" style="display:none">
            <dl class="c_section">
                <dt id="autofiletitle">
                <h1>
                    <em></em>
                    个人信息
                </h1>
                </dt>
                <dd>
                    <div class="userinfo_tips">此信息用于站内的沟通、社区等功能，不会同步修改简历</div>
                    <div class="userinfo_edit" id="userinfoEdit">
                        <form id="userinfoEditForm" action="https://account.lagou.com/account/cuser/saveInfo.json" method="post">
                            <div class="avatar">
                                <img class="avatar_img" src="//www.lgstatic.com/images/myresume/default_headpic.png" width="80" height="80" alt="拉勾用户4230" />
                                <input type="hidden" name="portrait" value="images/myresume/default_headpic.png" />
                            </div>
                            <input type="file" class="avatar_upload" id="avatarUpload" name="headPic" defaultValue="https://www.lagou.com/images/myresume/default_headpic.png" title="支持jpg、jpeg、gif、png格式，文件小于10M" />
                            <div class="username input_box">
                                <label class="label_input_box" for="userinfoEditUserName">昵称</label>
                                <input type="text" id="userinfoEditUserName" name="userName" placeholder="昵称" value="拉勾用户4230" maxlength="15" data-maxlength="15" />
                            </div>
                            <div class="userinfo_sex input_box">
                                <span class="label_input_box">性别</span>
                                <input type="radio" class="magic-radio" id="userinfoEditSexMale" name="sex" value="MALE"  />
                                <label for="userinfoEditSexMale">男</label>
                                <input type="radio" class="magic-radio" id="userinfoEditSexFemale" name="sex" value="FEMALE"  checked="checked"  />
                                <label for="userinfoEditSexFemale">女</label>
                            </div>
                            <div class="toolbar">
                                <a class="btn userinfo_save" href="javascript:;" data-lg-tj-id="18k0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">保存</a><!-- <a class="btn btn_cancel userinfo_cancel" href="javascript:;">取消</a> -->
                            </div>
                        </form>
                    </div>
                </dd>
            </dl>
    </div>
    <!-- 账号绑定-->
    <div class="y_nav" style="display:none">
            <form action="" method="post">
                <dl class="c_section">
                    <dt id="autofiletitle">
                        <h1><em></em>帐号绑定
                        </h1>
                    </dt>
                    <dd>
                        <ul class="user_noModify">
                            <li>当前登录帐号：<span>1933224230@qq.com</span> </li>
                            <li>绑定后，你可以同时使用以下方式登录拉勾</li>
                        </ul>
                        <dl class="user_thirdLogin">
                            <dt><img src="//www.lgstatic.com/www/static/account-c/modules/common/img/user/mail-bding_3e4986b.png" alt="mail"></dt>
                            <dd>已绑定邮箱  <span>1933224230@qq.com </span></dd>
                        </dl>
                        <dl class="user_thirdLogin">
                            <dt><img src="//www.lgstatic.com/www/static/account-c/modules/common/img/user/tel-bding_8f995d5.png" alt="tel"></dt>
                            <dd><a href="javascript:;" id="bindindPhoneBtn">绑定手机帐号</a> </dd>
                        </dl>
                        <dl class="user_thirdLogin">
                            <dt><img src="//www.lgstatic.com/www/static/account-c/modules/common/img/user/qq-bding_9361c39.png" alt="qq"></dt>
                            <dd><a href="https://passport.lagou.com/oauth20/auth_qqProvider.html?state=bind">绑定QQ帐号</a> </dd>
                        </dl>
                        <dl class="user_thirdLogin">
                            <dt><img src="//www.lgstatic.com/www/static/account-c/modules/common/img/user/weibo-bding_206018d.png" alt="weibo"></dt>
                            <dd><a href="https://passport.lagou.com/oauth20/auth_sinaWeiboProvider.html?state=bind">绑定新浪微博帐号</a></dd>
                        </dl>
                        <dl class="user_thirdLogin">
                            <dt><img src="//www.lgstatic.com/www/static/account-c/modules/common/img/user/wechat-bding_a598bf4.png" alt="weixin"></dt>
                            <!-- 判断微信帐号 -->
                            <dd><a href="https://passport.lagou.com/oauth20/auth_weixinProvider.html?state=bind">绑定微信帐号</a></dd>
                        </dl>
                    </dd>
                </dl>
            </form>

    </div>

    </form>
    <!-- 拉钩PLUS -->
    <div class="y_nav" style="display:none">
        <p>拉钩Plus功能正在测试中...     </p>
    </div>
    <!--修改密码  -->
    <div class="y_nav" style="display:none"><dl class="c_section">
                <dt id="autofiletitle">
                <h1>
                    <em></em>
                    修改密码
                </h1>
                </dt>
                <dd>
                    <form id="updatePswForm">
                        <table class="savePassword">
                            <tr>
                                <td>登录帐号</td>
                                <td class="c7">
                                    1933224230@qq.com </td>
                            </tr>
                            <tr>
                                <td class="label">当前密码</td>
                                <td>
                                    <input type="password" name="oldpassword" id="oldpassword" maxlength="16" autocomplete="off"/>
                                    <span class="error" style="display:none;" id="updatePwd_beError"></span>
                                </td>
                            </tr>
                            <tr>
                                <td class="label">新密码</td>
                                <td><input type="password" name="newpassword" id="newpassword"  maxlength="16" autocomplete="off"/></td>
                            </tr>
                            <tr>
                                <td class="label">确认密码</td>
                                <td><input type="password" name="comfirmpassword" id="comfirmpassword"  maxlength="16" autocomplete="off"/></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><input type="submit" value="保 存" /></td>
                            </tr>
                        </table>
                    </form>
                </dd>
        </dl>
    </div>
</div>

<div id="footer">
    <div class="wrapper">
        <i class="footer_lagou_icon"></i>
        <div class="inner_wrapper">
            <a class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span>new</span><img src="%E6%89%BE%E5%B7%A5%E4%BD%9C-%E4%BA%92%E8%81%94%E7%BD%91%E6%8B%9B%E8%81%98%E6%B1%82%E8%81%8C%E7%BD%91-%E6%8B%89%E5%8B%BE%E7%BD%91_files/CgqLKVaLdtWAKVC3AAEEpK9-Koc598.JPG" data-delay-src="http://www.lagou.com/image2/M00/24/1D/CgqLKVaLdtWAKVC3AAEEpK9-Koc598.JPG" height="256" width="256"></a>
            <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
            <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<img src="%E6%89%BE%E5%B7%A5%E4%BD%9C-%E4%BA%92%E8%81%94%E7%BD%91%E6%8B%9B%E8%81%98%E6%B1%82%E8%81%8C%E7%BD%91-%E6%8B%89%E5%8B%BE%E7%BD%91_files/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" data-delay-src="http://www.lagou.com/image2/M00/18/45/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" height="242" width="242"></a>
            <a href="whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
            <a href="http://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
            <a href="about.html" target="_blank" rel="nofollow">联系我们</a>
            <a id="onlineService" href="javascript:void(0);" rel="nofollow">在线交流</a>
            <span class="tel">服务热线：<em>400-605-9900 (9:00 -18:00)</em></span>
        </div>
        <div class="copyright">
            <span><em>©</em>2016 Lagou </span>
            <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
            <span>京公网安备11010802017116号</span>
        </div>
    </div>
</div>
</body>

<script>
    $(document).ready(function(){
        $(function() {
            $('.x_cdan ul li').click(function() {
                $(this).addClass("txt").siblings().removeClass("txt");
                // alert($(this).index());
                $(".y_nav").eq($(this).index()).show().siblings(".y_nav").hide();
            });
        })
    })
</script>
</html>