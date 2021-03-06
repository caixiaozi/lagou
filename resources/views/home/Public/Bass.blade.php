<link rel="stylesheet" type="text/css" href="{{url('home/shou/myresume/css/layout_903ac4c.css')}}" />
@section('header')
    <div id="lg_header">

        <!--C端头部黑色导航-->
        <div id="lg_tbar">

            <div class="inner">

                <div class="lg_tbar_l">
                    <a href="#/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                    <a rel="nofollow" href="#.#/dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
                </div>

                @if(empty(session('vip') -> id))
                    <ul class="lg_tbar_r">
                        <li>
                            <a href="/home/login" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
                        </li>
                        <li>
                            <a href="/home/register" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
                        </li>
                    </ul>
                @endif
                @if(!empty(session('vip') -> id))


                    <ul class="lg_tbar_r">
                        <!-- if has unread message, add class unreaded -->
                        <li class="msg_dropdown" id = "message">
                            <a rel="nofollow" data-lg-tj-cid="idnull" data-lg-tj-no="idnull" data-lg-tj-id="5h00" href="javascript: void 0;" class="msg_group">
                                消息
                                <em id="headMsgAmount" class="msg_amount hide"></em>
                            </a>
                            <script type="text/javascript">
                                //alert($);
                                $(function(){
                                    var X = false;

                                    $('#message').click(function(){
                                        // alert('send');
                                        if(X)
                                        {

                                            $(this).attr('class','msg_dropdown ');
                                            X = false;

                                        }else{

                                            $(this).attr('class','msg_dropdown open');
                                            X = true;
                                        }


                                    });


                                });

                            </script>
                            <div class="lg_msg_popup" id = 'mes'>
                                <div id="lgPopupMsgBody" class="lg_msg_pu_body mCustomScrollbar _mCS_1" style="overflow: hidden;"><div style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 250px;" id="mCSB_1" class="mCustomScrollBox mCS-dark-2"><div style="position:relative; top:0;" class="mCSB_container">
                                            <ul class="lg_top_msg_list">


                                                <li class="lg_msg_item "><div>
                                                        <!-- 投递反馈 -->
                                                        <a href="#" target="_blank" class="detail">






                                                            你投递给<span class="empha">匙悟科技·PHP工程师</span>职位的简历被招聘方标记为不合适，不要气馁，相信更好的机会一定还在等着你！

                                                        </a>
                                                    </div></li>




                                           </ul>

                                        </div><div style="position: absolute; display: block;" class="mCSB_scrollTools"><div class="mCSB_draggerContainer"><div oncontextmenu="return false;" style="position: absolute; height: 68px; top: 0px;" class="mCSB_dragger"><div style="position: relative; line-height: 68px;" class="mCSB_dragger_bar"></div></div><div class="mCSB_draggerRail"></div></div></div></div></div>
                                <div class="lg_msg_pu_footer">
                                    <a href="#settingsdetail.html" target="_blank" class="lg_msg_setting fl">
                                        <i class="lg_msg_avatar setting_i"></i>&nbsp;</a>
                                    <a href="#msgdetail.html" class="lg_msg_more fr">查看更多</a></div>
                            </div>
                        </li>
                        <li>
                            <a href="{{url('myresume')}}" class="bl" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a></li>
                        <li>
                            <a href="" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                            <em class="noticeDot dn" id="noticeDot_delivery"></em>
                        </li>
                        <li>
                            <a href="jobShow/cang" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收藏夹</a></li>
                        <li class="user_dropdown">
                            <span class="unick bl">{{session('vip') -> name}}</span>
                            <em class="noticeDot dn" id="noticeDot_name"></em>
                            <i>
                            </i>
                            <ul>
                                <li>
                                    <a href="#/s/subscribe.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a></li>
                                <li>
                                    <a href="#/mycenter/invitation.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
                                    <em class="noticeDot dn" id="noticeDot_invitation"></em>
                                </li>
                                <li>
                                    <a href="{{url('personal')}}" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a></li>
                                <li>
                                    <a href="#hr.#dashboard/" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a></li>
                                <li>
                                    <a href="/login/logout" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a></li>
                            </ul>
                        </li>
                    </ul>
                @endif
                @if(empty(session('vip')))
                    <ul class="lg_tbar_r" style ="margin-right:110px">
                        <li> <a href="home/login"  data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a> </li>
                        <li> <a href="home/register"  class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a> </li>
                    </ul>
                @endif
            </div>
        </div>



        <!--C端头部白色导航-->
        <div id="lg_tnav">

            <div class="inner">
                <div class="lg_tnav_l">
                    <a href="#/topic/3years.html" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                        <h1 class="logo_birth_3rd">拉勾网</h1>
                    </a>

                </div>
                <ul class="lg_tnav_wrap">
                    <li>
                        <a href="#/" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
                    </li>
                    <li>
                        <a href="#/googsi"  data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_company">公司</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="yipai"  data-lg-tj-id="5k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank" data-lg-tj-track-code="index_yipai">一拍</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="yanzhi"  data-lg-tj-id="ic00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_yanzhi">言职</a>
                    </li>
                    <li>
                        <a rel="nofollow" href="dajing"  target="_blank" data-lg-tj-id="1NI0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">大鲲</a>
                    </li>
                </ul>

            </div>

        </div><!--end #lg_tnav-->


    </div><!--end #header-->
@show
@section('content')
@show
@section('footer')
    <div id="footer">
        <div class="wrapper">
            <i class="footer_lagou_icon"></i>
            <div class="inner_wrapper">
                <a class="footer_app" href="#/app/download.html" rel="nofollow">拉勾APP
                    <span>new</span>
                    <img data-delay-src="#/image/M00/8A/35/Cgp3O1h0u3yAHBOLAAEEpK9-Koc621.JPG" width="256" height="256" src="{{url('home/shou/css/Cgp3O1h0u3yAHBOLAAEEpK9-Koc621.JPG')}}">
                </a>
                <a href="#e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
                <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信
                    <img data-delay-src="#/image2/M00/18/45/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" width="242" height="242" src="{{url('home/shou/css/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG')}}"></a>
                <a href="#/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
                <a href="#/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
                <a href="#/about.html" target="_blank" rel="nofollow">联系我们</a>
                <a href="#/activity/dist/business/index.html" target="_blank" rel="nofollow">招聘解决方案</a>
                <span class="tel">服务热线：<em>4006-2828-35 (9:00 -18:00)</em></span>
            </div>
            <div class="copyright  has_logo">
                <a rel="nofollow" href="#/authenticate/cert/?site=www.lagou.com&at=official"><img class="secu-img" src="{{url('home/shou/css/security_association_da335dd.png')}}" alt="安全联盟"></a>&nbsp; <span><em>&copy;</em>2017 Lagou </span>
                <a target="_blank" href="#www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
                <span>京公网安备11010802017116号</span>
            </div>
        </div>
    </div>
@show
