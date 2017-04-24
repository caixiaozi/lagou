<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">
    <meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网" name="description">
    <title>拉勾网-最专业的互联网招聘平台_找工作_招聘_人才网_求职</title>
    <link rel="Shortcut Icon" href="{{url('home/shou/css/favicon_faed927.ico')}}">


    <!-- global_domain FE_base... -->
    <script charset="utf-8" src="{{url('home/hua/css/v.js')}}"></script>
    <script async="" src="{{url('home/hua/css/analytics.js')}}"></script>
    <script async="" src="{{url('home/hua/css/a.js')}}"></script>
    <script type="text/javascript">(function() {
            var protocol = window.location.protocol;
            var host = window.location.host;
            var baseUrl = protocol + '//' + host;


        })();</script>
    <!-- 公共样式 -->
    <!-- header样式 -->
    <!-- footer样式 -->
    <!-- 页面样式 -->
    <!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">window.X_Anti_Forge_Token = '';
        window.X_Anti_Forge_Code = '';</script>
    {{--<link rel="stylesheet" type="text/css" href="{{url('home/shou/myresume/css/mCustomScrollbar_ac2fb8b.css')}}" />--}}
    <link rel="stylesheet" type="text/css" href="{{url('home/shou/myresume/css/layout_903ac4c.css')}}" />

    <link rel="stylesheet" type="text/css" href="{{url('home/hua/css/mCustomScrollbar_ac2fb8b.css')}}">
{{--    <link rel="stylesheet" type="text/css" href="{{url('home/hua/css/layout_7503fdc.css')}}">--}}
    <link rel="stylesheet" type="text/css" href="{{url('home/hua/css/main.html_aio_673afd3.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/hua/css/widgets_3990de9.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/hua/css/main.html_aio_2_415b727.css')}}">
    <script src="{{url('home/hua/css/jquery.validate.min_68512c2.js')}}" class="lazyload" charset="utf-8"></script>
    <link href="{{url('home/hua/css/loginpop_113e5e2.css')}}" rel="stylesheet" class="lazyload" charset="utf-8">
    <script data-require-id="common/widgets/common/msgPopup" src="{{url('home/hua/css/msgPopup_9611cae.js')}}" async=""></script>
    <script src="{{url('home/hua/css/lagou_5427c0e.js')}}" class="lazyload" charset="utf-8"></script>
    <script data-require-id="common/components/template-helper/main" src="{{url('home/hua/css/main_e08c2f2.js')}}" async=""></script>
</head>

<body style="width: 100%;">
<!-- 公共html -->
<!-- 页面公用结构、velocity变量 -->
<input type="hidden" value="3787269" name="userid" id="userid">
<!-- 城市分站 -->
<!-- header -->
<!--C端头部通栏广告位-->
<!--验证注册邮箱-->
<!-- @require "common/widgets/header_c/modules/emailvalid/main.less" -->
<div id="lg_header">
<!--C端头部黑色导航-->
<div id="lg_tbar">
    <div class="inner">
        <div class="lg_tbar_l">
            <a href="#" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
            <a href="#hr.#dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a></div>
        @if(!empty(session('vip')))
            <ul class="lg_tbar_r">
                <!-- if has unread message, add class unreaded -->
                <li class="msg_dropdown">
                    <a class="msg_group" href="javascript: void 0;" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">消息
                        <em class="msg_amount" id="headMsgAmount" style="display: none;">6</em></a>
                    <div class="lg_msg_popup">
                        <div class="lg_msg_pu_body mCustomScrollbar _mCS_1" id="lgPopupMsgBody" style="overflow: hidden;">
                            <div class="mCustomScrollBox mCS-dark-2" id="mCSB_1" style="position: relative; height: 100%; overflow: hidden; max-width: 100%; max-height: 250px;">
                                <div class="mCSB_container" style="position: relative; top: 0px;">
                                    <ul class="lg_top_msg_list">
                                        <li class="lg_msg_item">
                                            <em>·</em>
                                            <div>
                                                <!-- 投递反馈 -->
                                                <a class="detail" target="_blank" href="#">你投递给
                                                    <span class="empha">广告门·PHP工程师</span>职位的简历，已经投递成功，请静候佳音</a></div>
                                        </li>
                                        <li class="lg_msg_item">
                                            <em>·</em>
                                            <div>
                                                <!-- 投递反馈 -->
                                                <a class="detail" target="_blank" href="#">你投递给
                                                    <span class="empha">中科聚网·PHP开发工程师</span>职位的简历，已经投递成功，请静候佳音</a></div>
                                        </li>
                                        <li class="lg_msg_item">
                                            <em>·</em>
                                            <div>
                                                <!-- 投递反馈 -->
                                                <a class="detail" target="_blank" href="#">你投递给
                                                    <span class="empha">五分旅游网·PHP</span>职位的简历，已经投递成功，请静候佳音</a></div>
                                        </li>
                                        <li class="lg_msg_item">
                                            <em>·</em>
                                            <div>
                                                <!-- 投递反馈 -->
                                                <a class="detail" target="_blank" href="#">你投递给
                                                    <span class="empha">优谱创新教育·PHP软件开发工程师</span>职位的简历，已经投递成功，请静候佳音</a></div>
                                        </li>
                                        <li class="lg_msg_item">
                                            <em>·</em>
                                            <div>
                                                <!-- 投递反馈 -->
                                                <a class="detail" target="_blank" href="#">你投递给
                                                    <span class="empha">经研八·PHP</span>职位的简历，已经投递成功，请静候佳音</a></div>
                                        </li>
                                        <li class="lg_msg_item">
                                            <em>·</em>
                                            <div>
                                                <!-- 投递反馈 -->
                                                <a class="detail" target="_blank" href="#businessDetail.html?type=DELIVER&amp;businessId=754297556275085312">你投递给
                                                    <span class="empha">中少总社·PHP程序员</span>职位的简历，已经投递成功，请静候佳音</a></div>
                                        </li>
                                        <li class="lg_msg_item">
                                            <div>
                                                <!-- 投递反馈 -->
                                                <a class="detail" target="_blank" href="#businessDetail.html?type=DELIVER&amp;businessId=754296559524536320">你投递给
                                                    <span class="empha">天奇健·PHP工程师</span>职位的简历，已经投递成功，请静候佳音</a></div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mCSB_scrollTools" style="position: absolute; display: block;">
                                    <div class="mCSB_draggerContainer">
                                        <div class="mCSB_dragger" style="position: absolute; height: 166px; top: 0px;" oncontextmenu="return false;">
                                            <div class="mCSB_dragger_bar" style="position: relative; line-height: 166px;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                    <a href="jobShow/collect" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收藏夹</a></li>
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




<!--end #lg_tbar-->
<!--C端头部白色导航-->
<div id="lg_tnav">
    <div class="inner">
        <div class="lg_tnav_l">
            <a href="#/topic/3years.html" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1 class="logo_birth_3rd">拉勾网</h1></a>
            <div class="suggestCity">
                <strong>上海站</strong>
                <em id="changeCity_btn">[切换城市]</em></div>
        </div>
        <ul class="lg_tnav_wrap">
            <li>
                <a href="#/" class="current" data-lg-tj-id="5i00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">首页</a>
            </li>
            <li>
                <a href="{{url('company')}}" data-lg-tj-id="5j00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司</a>
            </li>
            <li>
                <a href="/yipai" data-lg-tj-id="5k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">一拍</a>
            </li>
            <li>
                <a href="/yanzhi"  data-lg-tj-id="ic00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_yanzhi">言职</a>
            </li>
            <li>
                <a  href="/dajing"  target="_blank" data-lg-tj-id="1NI0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">大鲲</a>
            </li>
        </ul>
    </div>
</div>
<!--end #lg_tnav-->
<div class="slide_banner" style="display: none; height: 0px; background: url(&quot;##/www/static/index/modules/event/birth-3rd/img/slider-banner-0720_0d4a667.jpg&quot;) 50% 0% no-repeat rgb(3, 17, 40);">
    <a class="activity_link" href="#/topic/#" target="_blank" data-lg-tj-id="z900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
        <div class="slide_content">
            <h3>理想之上</h3>
            <span class="close"></span>
        </div>
    </a>
</div>
</div>
<!--end #header-->
<input type="hidden" id="serverTime" value="1468805525380">
<!-- 页面主体START -->
<div class="container clearfix" id="container" style="min-height: 841px;">
    <div id="sidebar" class="sidebar">

        <div class = 'mainNavs'>
            @foreach($data['category'] as $k => $v)
                <div class="menu_box">
                    <div class="menu_main job_hopping">
                        <h2>
                        {{$k}}
                        <!-- 跳槽月 -->
                            <span></span></h2>
                        @foreach($res[$k] as $thr)
                            <a data-lg-tj-cid="idnull" data-lg-tj-no="0011" data-lg-tj-id="4A00" href="/search?job={{$thr}}">{{$thr}}</a>
                        @endforeach
                    </div>
                    <div class="menu_sub dn" style="top: 0px;">
                        @foreach($v as $ke => $val)
                            <dl>
                                <dt>
                                    <a data-lg-tj-cid="idnull" data-lg-tj-no="0001" data-lg-tj-id="4H00" href="/search?job={{$ke}}">
                                        {{$ke}}
                                    </a></dt>
                                <dd>
                                    @foreach($val as $key => $value)
                                        <a class="" data-lg-tj-cid="idnull" data-lg-tj-no="0121" data-lg-tj-id="4O00" href="/search?job={{$value}}">
                                            {{$value}}
                                        </a>
                                    @endforeach
                                </dd>
                            </dl>

                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>
        <!-- <a class="subscribe" href="//www.#s/subscribe.html" target="_blank">订阅职位</a> -->
        <div class="subscribe">
            <a href="#/s/subscribe.html" target="_blank" rel="nofollow" data-lg-tj-id="4g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <span>订阅职位</span>
                <i id="n_rss" href="//www.#s/subscribe.html" target="_blank" rel="nofollow">&nbsp;</i></a>
        </div>
        <!-- <div class="suggestCity"><strong>北京站</strong><span id="changeCity_btn">[切换城市]</span></div> --></div>
    <div class="content">
        <div id="search_box" class="search_box">
            <form id="searchForm" class="searchForm" name="searchForm" action="/search" method="get">
                <span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>
                <input type="text" id="search_input" class="search_input ui-autocomplete-input" tabindex="1" maxlength="64" autocomplete="off" name = "search" value="" placeholder="搜索职位、公司或地点" style="color: rgb(153, 153, 153);">
                <input type="hidden" name="labelWords" id="labelWords" value="">
                <input type="hidden" name="fromSearch" id="fromSearch" value="true">
                <input type="hidden" name="suginput" id="suginput">
                <input type="submit" id="search_button" class="search_button" value="搜索" data-lg-tj-id="4V00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"></form>
            <input type="hidden" id="search_py" value="">
            <input type="hidden" id="isIndex" value="true"></div>
        <div class="guess_wrapper dn">
            <span>猜你要搜</span>
            <ul>
                <li>PHP工程师</li>
                <li>java</li>
                <li>打字员</li>
                <li>架构师</li>
                <li>UI</li>
                <li>前端</li>
                <li>测试</li>
                <li>php</li>
                <li>产品经理</li>
                <li>web前端</li>
            </ul>
        </div>
        <dl class="hotSearch">
            <dt>热门搜索：</dt>
            <dd>
                <a href="/search?search=PHP" class="highlight" target="_self">PHP</a>
            </dd>
            <dd>
                <a href="/search?search=UI" class="highlight" target="_self">UI</a>
            </dd>
            <dd>
                <a href="/search?search=java" class="highlight" target="_self">java</a>
            </dd>
            <dd>
                <a href="/search?search=市场规划" class="highlight" target="_self">市场策划</a>
            </dd>
            <dd>
                <a href="/search?search=数据运营" class="highlight" target="_self">数据运营</a>
            </dd>
            <dd>
                <a href="/search?search=架构师" class="highlight" target="_self">架构师</a>
            </dd>
            <dd>
                <a href="/search?search=新媒体运营" class="highlight">新媒体运营</a>
            </dd>
            <dd>
                <a href="/search?search=产品经理" class="highlight" target="_self">产品经理</a>
            </dd>
            <dd>
                <a href="/search?search=测试" class="highlight">测试</a>
            </dd>

        </dl>

        <div id="home_banner" class="home_banner" data-lg-tj-track-code="index_bannerad" data-lg-tj-track-type="1">
            <ul class="banner_bg">
                <li  class="banner_bg_1 current" >



                    <a class="tj_exposure" rel="nofollow" href="#/topic/#" target="_blank" data-lg-tj-id="et00" data-lg-tj-no="0001" data-lg-tj-cid="3355">
                        <img src="{{url('home/shou/css/CgpEMljeBseAK-o-AAXIu8vaOz8993.JPG')}}" width="612" height="160" alt="红星美凯龙" />
                    </a>
                </li>
                <li  class="banner_bg_2" >



                    <a class="tj_exposure" rel="nofollow" href="https://activity.lagou.com/activity/dist/dreamMarket/pc/" target="_blank" data-lg-tj-id="et00" data-lg-tj-no="0002" data-lg-tj-cid="3254">
                        <img src="{{url('home/shou/css/Cgp3O1jcgLSAbFpPAAOO8uXcack174.JPG')}}" width="612" height="160" alt="梦想者市集上海" />
                    </a>
                </li>
                <li  class="banner_bg_3" >



                    <a class="tj_exposure" rel="nofollow" href="https://activity.lagou.com/topic/lagouoffers2.html" target="_blank" data-lg-tj-id="et00" data-lg-tj-no="0003" data-lg-tj-cid="3330">
                        <img src="{{url('home/shou/css/CgqKkVjU236ABGWLAANFEisE6jM314.JPG')}}" width="612" height="160" alt="校园offer节" />
                    </a>
                </li>
            </ul>
            <div class="banner_control">
                <em></em>
                <ul class="thumbs">
                    <li  class="thumbs_1 current" >
                        <i></i>
                        <img src="{{url('home/shou/css/CgpFT1jeBsmAaGaMAABPBhhTiPA509.JPG')}}" width="113" height="42" />
                    </li>
                    <li  class="thumbs_2" >
                        <i></i>
                        <img src="{{url('home/shou/css/CgqKkVjbjCCAehv9AAAyyQv9awg887.JPG')}}" width="113" height="42" />
                    </li>
                    <li  class="thumbs_3" >
                        <i></i>
                        <img src="{{url('home/shou/css/Cgp3O1jU24OAI6QyAAA0xbK07k4629.JPG')}}" width="113" height="42" />
                    </li>
                </ul>
            </div>
        </div>
        <ul id="da-thumbs" class="da-thumbs">

            @foreach($ad as $v)
                <li>
                    <a class="" href="{{$v -> url}}" target="_blank" data-lg-tj-id="ey00" data-lg-tj-no="0001" data-lg-tj-cid="5307">
                        <img src="{{$v -> pic}}" width="111" height="113" alt="">
                        <div class="hot_info">
                            <h2 title=""></h2>
                            <em></em>
                            <p title="让你发现身边志同道合的人。">{{$v -> des}}</p></div>
                    </a>
                </li>
            @endforeach

        </ul>
        <ul class="job_tab" id="jobTab">
            <li class="current hotTab" data-lg-tj-id="4X00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">热门职位</li>
            <li class="newTab" data-lg-tj-id="gD00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">最新职位</li>
        </ul>
        <div class="job_list clearfix" id="jobList">

            <div  class="hot_posHotPosition position_list init_joblist"  data-lg-tj-track-code="index_hotjob" data-lg-tj-track-type="1">


                <ul class="clearfix">
                    @foreach($data['job'] as $v)
                        <li data-companyid="64001" data-positionname="PHP" data-company="微聚齐" data-salary="6k-10k" data-positionid="1841415" data-jobid="1841415" class="position_list_item">
                            <div class="pli_top">
                                <div class="fl pli_top_l">
                                    <div class="position_name">
                                        <!-- -->
                                        <h2 class="fl">
                                            <a data-="1841415" da-lg-tj-no="0001" data-j-id="rz00" dadex="0"
                                               class="positlink fl wordCut" target="_blank" href="/JobShow?job={{$v -> id}}">
                                                {{$v -> name}}
                                                <span>[{{$v -> city}}]</span></a>

                                        </h2>
                                        <!-- 此处需要和后台确认 -->
                                        <span class="fl">{{date('Y-m-d',$v-> modify_time)}}</span></div>
                                    <div>
                                        <span class="salary fl">{{$v -> salary_low}}k-{{$v -> salary_high}}k</span>
                                        <span>
                        <!-- <i class="experience"></i>&nbsp;  -->经验{{ $v -> work_year}}</span>/
                                        <span>{{ $v -> edu}}</span></div>
                                </div>
                                <div class="fr pli_top_r">
                                    <div class="company_name wordCut">
                                        <a data-lg-tj-cid="64001" data-lg-tj-no="0001" data-lg-tj-id="w100"
                                           target="_blank" href="/company/inser?id={{$v -> com_id}}">{{$v -> com_name}}</a></div>
                                    <div class="industry wordCut">
                                        <span>{{$v -> com_trade}}</span>/
                                        <span>{{str_replace([0,1,2,3,4,5],['不需要融资','A轮融资','B轮融资','C轮融资','D轮融资','天使轮'],$v -> com_stage)}}</span></div>
                                </div>
                            </div>
                            <div class="pli_btm">
                                <div class="pli_btm_l fl wordCut">“{{$v -> welfare}}”</div>
                                <div class="pli_btm_r fl">
                                    <span>专项奖金</span>
                                    <span>带薪年假</span>
                                    <span>岗位晋升</span></div>
                            </div>
                        </li>
                    @endforeach
                </ul>


                <a href="#jobs/mList.html" class="list_more fr" target="_blank" data-lg-tj-id="4s00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_checkmore" data-lg-tj-track-type="1">查看更多</a>
            </div>
        </div>

        <div id="linkbox" class="linkbox">
            <dl>
                <dt>友情链接</dt>
                <dd>
                    @foreach($data['links'] as $v)
                        <a href="{{$v -> url}}" target="_blank">{{$v ->name}}</a>
                        <span>|</span>
                    @endforeach
                </dd>


            </dl>
        </div>
    </div>
</div>
<!-- 页面主体END -->
<!-- footer <-->
<a id="backtop" title="回到顶部" rel="nofollow" style="display: none;"></a>
<!-- feedback -->
<!-- @require "common/widgets/footer_c/modules/feedback/feedback.less" -->
<!--我要反馈按钮-->
<div id="product-fk">
    <div id="feedback-icon">
        <div class="fb-icon"></div>
        <span>我要反馈</span>
        <em class="error dn fk-limit">今天已经反馈足够多了，给产品经理点时间消化下吧~
            <i></i>
        </em>
        <em class="error dn fk-suc">&nbsp;&nbsp;反馈提交成功！</em></div>
</div>
<div id="feedback-con">
    <div class="pfb-pho-close">
        <div class="pfb-pho cust3"></div>
        <div class="pfb-close"></div>
    </div>
    <em class="error dn">
        <span>你还没填任何反馈呢</span>
        <i>
        </i>
    </em>
    <form id="product-fb">
        <div class="pfb-txt">
            <textarea id="pfbTextarea" placeholder="我是拉勾的产品经理Philip，把你遇到的问题，或是想要的功能告诉我吧（200字以内）" style="height: 0px;"></textarea>
            <div class="pfb-input-tip" id="pfbInputTip">0/200</div></div>
        <div class="pfb-email" style="height:38px;">
            <input type="text" name="email" placeholder="留下邮箱方便我们沟通（选填）">
            <span class="ensure">提交</span></div>
        <div class="connect-gou-mei">
            <a id="popOnlineService" href="#wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA1NjM3OV80MTk5NzZfODAwMDU2Mzc5XzJf" target="_blank" rel="nofollow">与勾妹谈谈人生</a></div>
    </form>
</div>
<div id="footer">
    <div class="wrapper">
        <i class="footer_lagou_icon"></i>
        <div class="inner_wrapper">
            <a class="footer_app" href="#/app/download.html" rel="nofollow">拉勾APP
                <span>new</span>
                <img data-delay-src="#/image2/M00/24/1D/CgqLKVaLdtWAKVC3AAEEpK9-Koc598.JPG" width="256" height="256" src="{{url('home/shou/css/Cgp3O1h0u3yAHBOLAAEEpK9-Koc621.jpg')}}"></a>
            <a href="#e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
            <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信
                <img data-delay-src="#/image2/M00/18/45/CgpzWlZNl0qAZitPAABXEpAOJx0071.JPG" width="242" height="242" src="{{url('home/shou/css/CgpzWlZNl0qAZitPAABXEpAOJx0071.jpg')}}"></a>
            <a href="#/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
            <a href="#/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
            <a href="#/about.html" target="_blank" rel="nofollow">联系我们</a>
            <a id="onlineService" href="#wpa.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA1NjM3OV80MTk5NzZfODAwMDU2Mzc5XzJf" target="_blank" rel="nofollow">在线交流</a>
            <span class="tel">服务热线：
            <em>400-605-9900 (9:00 -18:00)</em></span>
        </div>
        <div class="copyright">
          <span>
            <em>©</em>2017 Lagou</span>
            <a target="_blank" href="#www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
            <span>京公网安备11010802017116号</span></div>
    </div>
</div>
<!-- 底部登陆条 -->
<!-- @require "common/widgets/login_toolbar/main.less" -->
<div id="loginToolBar" class="loginToolBar">
    <div>
        <em></em>
        <img src="//www.lgstatic.com/www/static/common/widgets/login_toolbar/img/footbar_logo_cccc78d.png" width="138" height="45" />
        <span class="companycount"></span>
        <span class="positioncount"></span>
        <a class="bar_login passport_login_pop" href="javascript:;"><i></i></a>
        <div class="right">
            <a rel="nofollow" href="/frontRegister.do?from=index_footerbar" onclick="_hmt.push(['_trackEvent', 'button', 'click', 'register'])" class="bar_register" id="bar_register" target="_blank" data-lg-tj-id="4t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull"><i></i></a>
        </div>
        <input type="hidden" id="cc" value="180953" />
        <input type="hidden" id="cp" value="2936879" />
    </div>
</div>
<!-- jquery lib -->
<!-- analytics js file -->
<!-- plat analytics js file -->
<!-- plat ipinyou tj -->
<!-- <script src="../../static/ipinyou.js"></script> -->
<!-- <noscript><img src="//stats.ipinyou.com/adv.gif?a=ga..n3f5DPSWZXFMcbQa2-GxjX&e=" style="display:none;" /></noscript> -->
<script type="text/javascript" src="{{url('home/hua/css/vendor_8eb7ff4.js')}}"></script>
<script type="text/javascript">/*resourcemap*/
    require.config({
        paths: {
            "common/components/template-helper/main": "##/www/static/common/components/template-helper/main_e08c2f2",
            "common/widgets/common/msgPopup": "##/www/static/common/widgets/common/msgPopup_9611cae"
        }
    });</script>
<script type="text/javascript" src="{{url('home/hua/css/main.html_aio_44fc3d9.js')}}"></script>
<script type="text/javascript" src="{{url('home/hua/css/widgets_eb7c7db.js')}}"></script>
<script src="{{url('home/hua/css/h.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('home/hua/css/userinfo_7f282e9.js')}}"></script>
<script type="text/javascript" src="{{url('home/hua/css/layout_8f98554.js')}}"></script>
<script type="text/javascript" src="{{url('home/hua/css/main.html_aio_2_d9035e3.js')}}"></script>
<script type="text/javascript">window.global = window.global || {};
    global.userCtx = 'com.lagou.entity.User@79134abd';

    window.global = window.global || {};
    global.isLogin = true;
    global.isFirst = false;
    global.subSite = '北京';
    global.subSites = '全国,上海,杭州,广州,深圳,成都'.split(',');

    require(['common/widgets/header_c/modules/emailvalid/main']);

    require(['common/widgets/passport/passport'],
        function() {

            require(['common/widgets/common/msgPopup']);
            // require('notice');

        });

    require(['common/widgets/header_c/layout/main']);

    require(['common/widgets/footer_c/modules/feedback/feedback']);

    require(['common/widgets/footer_c/layout/main']);

    $(window).one('scroll',
        function(e) { // 360安全浏览器8.1版本之后花屏bugfix
            $(document.body).css('width', '100%');

            if (window.location.hash) { // 针对anchor links修复
                setTimeout(function() {
                    $(document.body).css('width', 'auto');
                });
            }
        });

    require(['common/widgets/login_toolbar/main'])

    //业务主模块入口
    require(['index/page/index/main']);</script>
<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none;"></ul>
<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
    <div id="cboxWrapper">
        <div>
            <div id="cboxTopLeft" style="float: left;"></div>
            <div id="cboxTopCenter" style="float: left;"></div>
            <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxMiddleLeft" style="float: left;"></div>
            <div id="cboxContent" style="float: left;">
                <div id="cboxTitle" style="float: left;"></div>
                <div id="cboxCurrent" style="float: left;"></div>
                <button type="button" id="cboxPrevious"></button>
                <button type="button" id="cboxNext"></button>
                <button id="cboxSlideshow"></button>
                <div id="cboxLoadingOverlay" style="float: left;"></div>
                <div id="cboxLoadingGraphic" style="float: left;"></div>
            </div>
            <div id="cboxMiddleRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxBottomLeft" style="float: left;"></div>
            <div id="cboxBottomCenter" style="float: left;"></div>
            <div id="cboxBottomRight" style="float: left;"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none; max-width: none;"></div>
</div>

</body>

</html>