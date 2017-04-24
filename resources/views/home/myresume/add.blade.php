
<!DOCTYPE HTML>
<html lang="en"><head>
    <script type="text/javascript" async="" src="{{url('home/jianli/js/conversion.js')}}"></script>
    <script src="{{url('home/jianli/js/allmobilize.min.js')}}" charset="utf-8" id="allmobilize"></script>
    <style type="text/css"></style>
    <meta content="no-siteapp" http-equiv="X-UA-Compatible">
    <link  media="handheld" rel="alternate">
    <!-- end 云适配 -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>我的简历-拉勾网-最专业的互联网招聘平台</title>
    <meta content="23635710066417756375" property="qc:admins">
    <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
    <meta name="keywords" content="拉勾,拉勾网, 校招,社会招聘,社招">
    <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
    <link rel="Shortcut Icon" href="{{url('home/shou/css/favicon_faed927.ico')}}">
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>
    <link href="h/images/favicon.ico" rel="Shortcut Icon">
    <link rel="stylesheet" type="text/css" href="{{url('home/shou/myresume/css/layout_903ac4c.css')}}" />
    <link href="{{url('home/jianli/css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('home/jianli/css/external.min.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('home/jianli/css/popup.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{url('home/jianli/js/jquery.1.10.1.min.js')}}"></script>
    <script src="{{url('home/jianli/js/jquery.lib.min.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('home/jianli/js/ajaxfileupload.js')}}"></script>
    <script src="{{url('home/jianli/js/additional-methods.js')}}" type="text/javascript"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="{{url('home/jianli/js/excanvas.js')}}"></script>
    <![endif]-->
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script src="{{url('home/jianli/js/conv.js')}}" type="text/javascript"></script>
    <script src="{{url('home/jianli/js/ajaxCross.json')}}" charset="UTF-8"></script></head>


<link rel="stylesheet" type="text/css" href="{{url('home/shou/css/layout_903ac4c.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('home/shou/css/main.html_aio_2_f8a294e.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('home/shou/css/main.html_aio_39fa7a2.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('home/shou/css/mCustomScrollbar_ac2fb8b.css')}}">
<link rel="stylesheet" type="text/css" href="{{url('home/shou/css/widgets_d89a168.css')}}">
<link href="{{url('home/shou/css/loginpopup_113e5e2.css')}}" rel="stylesheet" class="lazyload" charset="utf-8">

<script src="{{url('home/shou/css/jquery.validate.min_68512c2.js')}}" class="lazyload" charset="utf-8"></script>
<script data-require-id="common/widgets/common/msgPopup" src="{{url('home/shou/css/msgPopup_9611cae.js')}}" async=""></script>
<script src="{{url('home/shou/css/lagou_5427c0e.js')}}" class="lazyload" charset="utf-8"></script>
<script data-require-id="common/components/template-helper/main" src="{{url('home/shou/css/main_e08c2f2.js')}}" async=""></script>


<body>
<script type="text/javascript">
    $(function () {
        //即时显示上传的头像
        $("input[name=headPic]").change(function () {
            var $file = $(this);
//            console.log($file);
            var objUrl = $file[0].files[0];
            //获得一个http格式的url路径:mozilla(firefox)||webkit or chrome
            var windowURL = window.URL || window.webkitURL;
            //createObjectURL创建一个指向该参数对象(图片)的URL
            var dataURL;
            dataURL = windowURL.createObjectURL(objUrl);
            $("#mypic").attr("src",dataURL);
            $("#portraitShow").css('display', 'block');
        });
    });
</script>
<!--C端头部黑色导航 开始-->
<div id="lg_header">
    <div id="lg_header">
        <!--C端头部黑色导航-->
        <div id="lg_tbar">
            <div class="inner">
                <div class="lg_tbar_l">
                    <a href="#" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                    <a href="#hr.#dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a></div>

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
                                                        <span class="empha">优谱创新教育·PHP软件开发工程师</span>职位的简历，已经投递成功，请静候佳音
                                                    </a>
                                                </div>
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
                                <a href="" target="_blank" class="lg_msg_setting fl">
                                    <i class="lg_msg_avatar setting_i"></i>&nbsp;</a>
                                <a href="" class="lg_msg_more fr">查看更多</a></div>
                        </div>
                    </li>
                    <li>
                        <a href="{{url('myresume')}}" class="bl" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a></li>
                    <li>
                        <a href="" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                        <em class="noticeDot dn" id="noticeDot_delivery"></em>
                    </li>
                    <li>
                        <a href="" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收藏夹</a></li>
                    <li class="user_dropdown">
                        <span class="unick bl">{{session('vip') -> name}}</span>
                        <em class="noticeDot dn" id="noticeDot_name"></em>
                        <i>
                        </i>
                        <ul>
                            <li>
                                <a href="" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的订阅</a></li>
                            <li>
                                <a href="" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">职位邀请</a>
                                <em class="noticeDot dn" id="noticeDot_invitation"></em>
                            </li>
                            <li>
                                <a href="{{url('personal')}}" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a></li>
                            <li>
                                <a href="" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a></li>
                            <li>
                                <a href="" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--C端头部黑色导航 结束-->

<!--C端头部白色导航 开始-->
<div id="lg_tnav">
    <div class="inner">
        <div class="lg_tnav_l">
            <a href="{{url('home/two')}}" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                <h1 class="logo_birth_3rd">拉勾网</h1>
            </a>
            <div class="suggestCity"><strong>上海站</strong><em id="changeCity_btn">[切换城市]</em></div>
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
</div>
<!--C端头部白色导航 结束-->

<!--主体部分 开始 -->
<div id="container">
    <div class="clearfix">
        <div class="content_l">
            <div class="fl" id="resume_name">
                <div class="nameShow fl">
                    <h1 >{{session('vip') -> name}}的简历</h1>
                </div>
                <form class="fl dn" id="resumeNameForm">
                    <input type="text" value="{{session('vip') -> name}}的简历" name="resumeName" class="nameEdit c9">
                </form>
            </div>
            <div class="fr c5" id="lastChangedTime">最后一次更新：<span> </span></div>

        <!-- 基本信息 开始-->
            <div class="profile_box" id="basicInfo">
                <h2>基本信息</h2>
                <span class="c_edit"></span>
                <div class="basicShow">
                     <span></span>
                    <div class="m_portrait">
                        <div></div>
                        <img width="120" height="120" alt="jason" src="{{url('home/jianli/images/default_headpic.png')}}">
                    </div>
                </div>

                <div class="basicEdit dn">
                    <form   action="{{url('myresume/userupdate')}}" method="post">
                        {{csrf_field()}}
                        <table>
                            <tbody>
                                <tr>
                                    <input type="hidden" name="id"  >
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="姓名" value="" name="name"  >
                                    </td></tr>
                                <tr>
                                    <td valign="top"></td>
                                    <td>
                                        <ul class="profile_radio clearfix reset">
                                            <li class="current">男
                                                <em></em>
                                                <input type="radio" checked="checked" name="sex" value="1"></li>
                                            <li>女
                                                <em></em>
                                                <input type="radio" name="sex" value="0"></li>
                                        </ul>

                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" id="topDegree" value=""  name="education">
                                        <input type="button" value="" name="education" id="select_topDegree" class="profile_select_190 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_190 dn" id="box_topDegree" style="display: none;" >
                                            <ul >
                                                <li>大专</li>
                                                <li>本科</li>
                                                <li>硕士</li>
                                                <li>博士</li>
                                                <li>其他</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" id="workyear" value="" name="work_year">
                                        <input type="button" value="" id="select_workyear" class="profile_select_190 profile_select_normal" name="work_year">
                                        <div class="boxUpDown boxUpDown_190 dn" id="box_workyear" style="display: none;">
                                            <ul>
                                                <li>应届毕业生</li>
                                                <li>1年</li>
                                                <li>2年</li>
                                                <li>3年</li>
                                                <li>4年</li>
                                                <li>5年</li>
                                                <li>6年</li>
                                                <li>7年</li>
                                                <li>8年</li>
                                                <li>9年</li>
                                                <li>10年</li>
                                                <li>10年以上</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" placeholder="手机号码" value="" name="phone" id="tel">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" placeholder="接收面试通知的邮箱" value="" name="email" id="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"> </td>
                                    <td colspan="3">
                                        <input type="hidden" id="currentState" value="" name="now_state">
                                        <input type="button" value="目前状态" id="select_currentState" class="profile_select_410 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_410 dn" id="box_currentState" style="display: none;">
                                            <ul>
                                                <li>我目前已离职，可快速到岗</li>
                                                <li>我目前正在职，正考虑换个新环境</li>
                                                <li>我暂时不想找工作</li>
                                                <li>我是应届毕业生</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                   <!--end #profileForm-->

                    <div class="new_portrait">
                        <div class="portrait_upload" id="portraitNo">
                            <span>上传自己的头像</span>
                        </div>
                        <div class="portraitShow dn" id="portraitShow">
                            <img width="120" height="120" src="">
                            <span>更换头像</span>
                        </div>
                        <input type="file" value="" title="支持jpg、jpeg、gif、png格式，文件小于5M"  name="image"  class="myfiles">
                        <!-- <input type="hidden" id="headPicHidden" /> -->
                        <em>
                            尺寸：120*120px <br>
                            大小：小于5M
                        </em>
                        <span style="display:none;" id="headPic_error" class="error"></span>
                    </div>
                    </form></div>
            </div>
        <!--基本信息 结束-->

        <!-- 期望工作 开始-->
            <div class="profile_box" id="expectJob">
                <h2>期望工作</h2>
                <span class="c_edit dn"></span>
                <div class="expectShow  {{session('hope_out')}}">
                    <span></span>
                </div>
                <div class="expectEdit dn">
                    <form  action="{{url('myresume/resumeshow')}}" method="post" >
                        {{csrf_field()}}
                        <table>
                            <tbody>
                            <tr>
                                <td>
                                    <input type="hidden" id="expectCity" value="" name="city">
                                    <input type="button" value="" id="select_expectCity" class="profile_select_287 profile_select_normal">
                                    <div class="boxUpDown boxUpDown_596 dn" id="box_expectCity" style="display: none;">
                                        <dl>
                                            <dt>热门城市</dt>
                                            <dd>
                                                <span>北京</span>
                                                <span>上海</span>
                                                <span>广州</span>
                                                <span>深圳</span>
                                                <span>成都</span>
                                                <span>杭州</span>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>ABCDEF</dt>
                                            <dd>
                                                <span>北京</span>
                                                <span>长春</span>
                                                <span>成都</span>
                                                <span>重庆</span>
                                                <span>长沙</span>
                                                <span>常州</span>
                                                <span>东莞</span>
                                                <span>大连</span>
                                                <span>佛山</span>
                                                <span>福州</span>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>GHIJ</dt>
                                            <dd>
                                                <span>贵阳</span>
                                                <span>广州</span>
                                                <span>哈尔滨</span>
                                                <span>合肥</span>
                                                <span>海口</span>
                                                <span>杭州</span>
                                                <span>惠州</span>
                                                <span>金华</span>
                                                <span>济南</span>
                                                <span>嘉兴</span>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>KLMN</dt>
                                            <dd>
                                                <span>昆明</span>
                                                <span>廊坊</span>
                                                <span>宁波</span>
                                                <span>南昌</span>
                                                <span>南京</span>
                                                <span>南宁</span>
                                                <span>南通</span>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>OPQR</dt>
                                            <dd>
                                                <span>青岛</span>
                                                <span>泉州</span>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>STUV</dt>
                                            <dd>
                                                <span>上海</span>
                                                <span>石家庄</span>
                                                <span>绍兴</span>
                                                <span>沈阳</span>
                                                <span>深圳</span>
                                                <span>苏州</span>
                                                <span>天津</span>
                                                <span>太原</span>
                                                <span>台州</span>
                                            </dd>
                                        </dl>
                                        <dl>
                                            <dt>WXYZ</dt>
                                            <dd>
                                                <span>武汉</span>
                                                <span>无锡</span>
                                                <span>温州</span>
                                                <span>西安</span>
                                                <span>厦门</span>
                                                <span>烟台</span>
                                                <span>珠海</span>
                                                <span>中山</span>
                                                <span>郑州</span>
                                            </dd>
                                        </dl>
                                    </div>
                                </td>
                                <td>
                                    <ul class="profile_radio clearfix reset" id='fo2_1'>
                                        <input type="hidden" name="nature" value="12">

                                        <li>全职</li>
                                        <li>兼职</li>
                                        <li>实习</li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <script type="text/javascript">
                                        $(function(){
                                            var li = $('#fo2_1').find('li');
                                            li.click(function(){
                                                li.css('border','2px solid #c8e6de');
                                                $(this).css('border', '2px solid #91cebe');
                                                $(this).parents('ul').find('input').val($(this).html());
                                            });
                                        })
                                    </script>
                                    <input type="text" placeholder="期望职位，如：产品经理" value="" name="job" id="expectPosition">
                                </td>
                                <td>
                                    <input type="hidden" id="expectSalary" value="" name="salary">
                                    <input type="button" value="" id="select_expectSalary" class="profile_select_287 profile_select_normal">
                                    <div class="boxUpDown boxUpDown_287 dn" id="box_expectSalary" style="display: none;">
                                        <ul>
                                            <li>2k以下</li>
                                            <li>2k-5k</li>
                                            <li>5k-10k</li>
                                            <li>10k-15k</li>
                                            <li>15k-25k</li>
                                            <li>25k-50k</li>
                                            <li>50k以上</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="保 存" id="fo2" class="btn_profile_save">
                                    <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                </td>
                            </tr>
                            </tbody></table>
                        <input type="hidden" name="history_id" class="expId" value="">
                    </form><!--end #expectForm-->
                </div>
                <div class="expectAdd pAdd">
                    填写准确的期望工作能大大提高求职成功率哦…<br>
                    快来添加期望工作吧！
                    <span>添加期望工作</span>
                </div>
            </div>
        <!--期望工作 结束-->

        <!-- 工作经历 开始-->
            <div class="profile_box" id="workExperience">
                <h2>工作经历  <span> （投递简历时必填）</span></h2>
                <span class="c_add dn"></span>
                <div class="experienceEdit dn">
                    <form action="{{url('myresume/hisajax')}}" method="post">
                        {{csrf_field()}}
                        <table>
                            <tbody><tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <input type="text" placeholder="公司名称" name="companyName" class="companyName" value="">
                                </td></tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <input type="text" placeholder="职位名称，如：产品经理" name="positionName" class="positionName" value="">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <div class="fl">
                                        <input type="hidden" class="companyYearStart" value="" name="companyYearStart">
                                        <input type="button" value="" class="profile_select_139 profile_select_normal select_companyYearStart">
                                        <div class="box_companyYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                            <ul>
                                                <li>2014</li>
                                                <li>2013</li>
                                                <li>2012</li>
                                                <li>2011</li>
                                                <li>2010</li>
                                                <li>2009</li>
                                                <li>2008</li>
                                                <li>2007</li>
                                                <li>2006</li>
                                                <li>2005</li>
                                                <li>2004</li>
                                                <li>2003</li>
                                                <li>2002</li>
                                                <li>2001</li>
                                                <li>2000</li>
                                                <li>1999</li>
                                                <li>1998</li>
                                                <li>1997</li>
                                                <li>1996</li>
                                                <li>1995</li>
                                                <li>1994</li>
                                                <li>1993</li>
                                                <li>1992</li>
                                                <li>1991</li>
                                                <li>1990</li>
                                                <li>1989</li>
                                                <li>1988</li>
                                                <li>1987</li>
                                                <li>1986</li>
                                                <li>1985</li>
                                                <li>1984</li>
                                                <li>1983</li>
                                                <li>1982</li>
                                                <li>1981</li>
                                                <li>1980</li>
                                                <li>1979</li>
                                                <li>1978</li>
                                                <li>1977</li>
                                                <li>1976</li>
                                                <li>1975</li>
                                                <li>1974</li>
                                                <li>1973</li>
                                                <li>1972</li>
                                                <li>1971</li>
                                                <li>1970</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fl">
                                        <input type="hidden" class="companyMonthStart" value="" name="companyMonthStart">
                                        <input type="button" value="" class="profile_select_139 profile_select_normal select_companyMonthStart">
                                        <div style="display: none;" class="box_companyMonthStart boxUpDown boxUpDown_139 dn">
                                            <ul>
                                                <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <div class="fl">
                                        <input type="hidden" class="companyYearEnd" value="" name="companyYearEnd">
                                        <input type="button" value="" class="profile_select_139 profile_select_normal select_companyYearEnd">
                                        <div class="box_companyYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                            <ul>
                                                <li>至今</li>
                                                <li>2014</li>
                                                <li>2013</li>
                                                <li>2012</li>
                                                <li>2011</li>
                                                <li>2010</li>
                                                <li>2009</li>
                                                <li>2008</li>
                                                <li>2007</li>
                                                <li>2006</li>
                                                <li>2005</li>
                                                <li>2004</li>
                                                <li>2003</li>
                                                <li>2002</li>
                                                <li>2001</li>
                                                <li>2000</li>
                                                <li>1999</li>
                                                <li>1998</li>
                                                <li>1997</li>
                                                <li>1996</li>
                                                <li>1995</li>
                                                <li>1994</li>
                                                <li>1993</li>
                                                <li>1992</li>
                                                <li>1991</li>
                                                <li>1990</li>
                                                <li>1989</li>
                                                <li>1988</li>
                                                <li>1987</li>
                                                <li>1986</li>
                                                <li>1985</li>
                                                <li>1984</li>
                                                <li>1983</li>
                                                <li>1982</li>
                                                <li>1981</li>
                                                <li>1980</li>
                                                <li>1979</li>
                                                <li>1978</li>
                                                <li>1977</li>
                                                <li>1976</li>
                                                <li>1975</li>
                                                <li>1974</li>
                                                <li>1973</li>
                                                <li>1972</li>
                                                <li>1971</li>
                                                <li>1970</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fl">
                                        <input type="hidden" class="companyMonthEnd" value="" name="companyMonthEnd">
                                        <input type="button" value="" class="profile_select_139 profile_select_normal select_companyMonthEnd">
                                        <div style="display: none;" class="box_companyMonthEnd boxUpDown boxUpDown_139 dn">
                                            <ul>
                                                <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3">
                                    <input type="submit" value="保 存" class="btn_profile_save">
                                    <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                </td>
                            </tr>
                            </tbody></table>
                        <input type="hidden" name="history_id" class="expId" value="">
                    </form>
                    <!--end .experienceForm-->
                </div>

                <div class="experienceAdd pAdd">
                    工作经历最能体现自己的工作能力，<br>
                    且完善后才可投递简历哦！
                    <span>添加工作经历</span>
                </div>
            </div>
        <!--工作经历 结束-->

        <!-- 项目经验 开始-->
            <div class="profile_box" id="projectExperience">
                <h2>项目经验</h2>
                <span class="c_add dn"></span>
                <div class="projectShow dn">
                    <ul class="plist clearfix">
                    </ul>
                </div>
                <div class="projectEdit dn">
                    <form action="{{url('myresume/project')}}" method="post" >
                        {{csrf_field()}}
                        <table>
                            <tbody><tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <input type="text" placeholder="项目名称" name="name" class="projectName">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <input type="text" placeholder="担任职务，如：产品负责人" name="job" class="thePost">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <div class="fl">
                                        <input type="hidden" class="projectYearStart" value="" name="begin_yeartime">
                                        <input type="button" value="开始年份" class="profile_select_139 profile_select_normal select_projectYearStart">
                                        <div class="box_projectYearStart  boxUpDown boxUpDown_139 dn" style="display: none;">
                                            <ul>
                                                <li>2014</li>
                                                <li>2013</li>
                                                <li>2012</li>
                                                <li>2011</li>
                                                <li>2010</li>
                                                <li>2009</li>
                                                <li>2008</li>
                                                <li>2007</li>
                                                <li>2006</li>
                                                <li>2005</li>
                                                <li>2004</li>
                                                <li>2003</li>
                                                <li>2002</li>
                                                <li>2001</li>
                                                <li>2000</li>
                                                <li>1999</li>
                                                <li>1998</li>
                                                <li>1997</li>
                                                <li>1996</li>
                                                <li>1995</li>
                                                <li>1994</li>
                                                <li>1993</li>
                                                <li>1992</li>
                                                <li>1991</li>
                                                <li>1990</li>
                                                <li>1989</li>
                                                <li>1988</li>
                                                <li>1987</li>
                                                <li>1986</li>
                                                <li>1985</li>
                                                <li>1984</li>
                                                <li>1983</li>
                                                <li>1982</li>
                                                <li>1981</li>
                                                <li>1980</li>
                                                <li>1979</li>
                                                <li>1978</li>
                                                <li>1977</li>
                                                <li>1976</li>
                                                <li>1975</li>
                                                <li>1974</li>
                                                <li>1973</li>
                                                <li>1972</li>
                                                <li>1971</li>
                                                <li>1970</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fl">
                                        <input type="hidden" class="projectMonthStart" value="" name="begin_monthtime">
                                        <input type="button" value="开始月份" class="profile_select_139 profile_select_normal select_projectMonthStart">
                                        <div style="display: none;" class="box_projectMonthStart boxUpDown boxUpDown_139 dn">
                                            <ul>
                                                <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <div class="fl">
                                        <input type="hidden" class="projectYearEnd" value="" name="end_yeartime">
                                        <input type="button" value="结束年份" class="profile_select_139 profile_select_normal select_projectYearEnd">
                                        <div class="box_projectYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                            <ul>
                                                <li>至今</li>
                                                <li>2014</li>
                                                <li>2013</li>
                                                <li>2012</li>
                                                <li>2011</li>
                                                <li>2010</li>
                                                <li>2009</li>
                                                <li>2008</li>
                                                <li>2007</li>
                                                <li>2006</li>
                                                <li>2005</li>
                                                <li>2004</li>
                                                <li>2003</li>
                                                <li>2002</li>
                                                <li>2001</li>
                                                <li>2000</li>
                                                <li>1999</li>
                                                <li>1998</li>
                                                <li>1997</li>
                                                <li>1996</li>
                                                <li>1995</li>
                                                <li>1994</li>
                                                <li>1993</li>
                                                <li>1992</li>
                                                <li>1991</li>
                                                <li>1990</li>
                                                <li>1989</li>
                                                <li>1988</li>
                                                <li>1987</li>
                                                <li>1986</li>
                                                <li>1985</li>
                                                <li>1984</li>
                                                <li>1983</li>
                                                <li>1982</li>
                                                <li>1981</li>
                                                <li>1980</li>
                                                <li>1979</li>
                                                <li>1978</li>
                                                <li>1977</li>
                                                <li>1976</li>
                                                <li>1975</li>
                                                <li>1974</li>
                                                <li>1973</li>
                                                <li>1972</li>
                                                <li>1971</li>
                                                <li>1970</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fl">
                                        <input type="hidden" class="projectMonthEnd" value="" name="end_monthtime">
                                        <input type="button" value="结束月份" class="profile_select_139 profile_select_normal select_projectMonthEnd">
                                        <div style="display: none;" class="box_projectMonthEnd boxUpDown boxUpDown_139 dn">
                                            <ul>
                                                <li>01</li><li>02</li><li>03</li><li>04</li><li>05</li><li>06</li><li>07</li><li>08</li><li>09</li><li>10</li><li>11</li><li>12</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top"></td>
                                <td colspan="3">
                                    <textarea class="projectDescription s_textarea" name="desc" placeholder="项目描述"></textarea>
                                    <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                </td>
                            </tr>

                            <tr>
                                <td valign="top"></td>
                                <td colspan="3">
                                    <input type="submit" value="保 存" class="btn_profile_save">
                                    <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                </td>
                            </tr>
                            </tbody></table>
                        <input type="hidden" value="" name="project_id" class="projectId">
                    </form><!--end .projectForm-->
                </div>
                <div class="projectAdd pAdd">
                    项目经验是用人单位衡量人才能力的重要指标哦！<br>
                    来说说让你难忘的项目吧！
                    <span>添加项目经验</span>
                </div>
            </div>
        <!--项目经验 结束-->

        <!--教育背景 开始-->
            <div class="profile_box" id="educationalBackground">
                <h2>教育背景<span>（投递简历时必填）</span></h2>
                <span class="c_add dn"></span>
                <div class="educationalEdit borderBtm dn" >
                    <form  action="{{url('myresume/edu')}}" method="post">
                        {{csrf_field()}}
                        <table>
                            <tbody><tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <input type="text" placeholder="学校名称" name="school" class="schoolName">
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <input type="hidden" class="degree" value="" name="education">
                                    <input type="button" value="学历"  name="education" class="profile_select_287 profile_select_normal select_degree">
                                    <div class="box_degree boxUpDown boxUpDown_287 dn" style="display: none;">
                                        <ul>
                                            <li>大专</li>
                                            <li>本科</li>
                                            <li>硕士</li>
                                            <li>博士</li>
                                            <li>其他</li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <input type="text" placeholder="专业名称" name="professional" class="professionalName">
                                </td></tr><tr>
                                <td valign="top">
                                    <span class="redstar">*</span>
                                </td>
                                <td>
                                    <div class="fl">
                                        <input type="hidden" class="schoolYearStart" value="" name="begin_time">
                                        <input type="button" value="开始年份" name="begin_time" class="profile_select_139 profile_select_normal select_schoolYearStart">
                                        <div class="box_schoolYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                            <ul>
                                                <li>2014</li>
                                                <li>2013</li>
                                                <li>2012</li>
                                                <li>2011</li>
                                                <li>2010</li>
                                                <li>2009</li>
                                                <li>2008</li>
                                                <li>2007</li>
                                                <li>2006</li>
                                                <li>2005</li>
                                                <li>2004</li>
                                                <li>2003</li>
                                                <li>2002</li>
                                                <li>2001</li>
                                                <li>2000</li>
                                                <li>1999</li>
                                                <li>1998</li>
                                                <li>1997</li>
                                                <li>1996</li>
                                                <li>1995</li>
                                                <li>1994</li>
                                                <li>1993</li>
                                                <li>1992</li>
                                                <li>1991</li>
                                                <li>1990</li>
                                                <li>1989</li>
                                                <li>1988</li>
                                                <li>1987</li>
                                                <li>1986</li>
                                                <li>1985</li>
                                                <li>1984</li>
                                                <li>1983</li>
                                                <li>1982</li>
                                                <li>1981</li>
                                                <li>1980</li>
                                                <li>1979</li>
                                                <li>1978</li>
                                                <li>1977</li>
                                                <li>1976</li>
                                                <li>1975</li>
                                                <li>1974</li>
                                                <li>1973</li>
                                                <li>1972</li>
                                                <li>1971</li>
                                                <li>1970</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="fl">
                                        <input type="hidden" class="schoolYearEnd" value="" name="end_time">
                                        <input type="button" value="结束年份" name="end_time" class="profile_select_139 profile_select_normal select_schoolYearEnd">
                                        <div class="box_schoolYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                            <ul>
                                                <li>2014</li>
                                                <li>2013</li>
                                                <li>2012</li>
                                                <li>2011</li>
                                                <li>2010</li>
                                                <li>2009</li>
                                                <li>2008</li>
                                                <li>2007</li>
                                                <li>2006</li>
                                                <li>2005</li>
                                                <li>2004</li>
                                                <li>2003</li>
                                                <li>2002</li>
                                                <li>2001</li>
                                                <li>2000</li>
                                                <li>1999</li>
                                                <li>1998</li>
                                                <li>1997</li>
                                                <li>1996</li>
                                                <li>1995</li>
                                                <li>1994</li>
                                                <li>1993</li>
                                                <li>1992</li>
                                                <li>1991</li>
                                                <li>1990</li>
                                                <li>1989</li>
                                                <li>1988</li>
                                                <li>1987</li>
                                                <li>1986</li>
                                                <li>1985</li>
                                                <li>1984</li>
                                                <li>1983</li>
                                                <li>1982</li>
                                                <li>1981</li>
                                                <li>1980</li>
                                                <li>1979</li>
                                                <li>1978</li>
                                                <li>1977</li>
                                                <li>1976</li>
                                                <li>1975</li>
                                                <li>1974</li>
                                                <li>1973</li>
                                                <li>1972</li>
                                                <li>1971</li>
                                                <li>1970</li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="clear"></div>
                                </td>
                            </tr>
                            <tr>
                                <td></td>
                                <td colspan="3">
                                    <input type="submit" value="保 存" class="btn_profile_save">
                                    <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                </td>
                            </tr>
                            </tbody></table>
                        <input type="hidden" name="edu_id" class="eduId">
                    </form><!--end .educationalForm-->
                </div>
                <div class="educationalAdd pAdd">
                    教育背景可以充分体现你的学习和专业能力，<br>
                    且完善后才可投递简历哦！
                    <span>添加教育经历</span>
                </div>
            </div>
        <!--教育背景 结束-->

        <!--自我描述 开始-->
            <div class="profile_box" id="selfDescription">
                <h2>自我描述</h2>
                <span class="c_edit dn"></span>
                <div class="descriptionShow dn">
                </div>
                <div class="descriptionEdit dn">
                    <form  action="{{url('myresume/intro')}}" method="post" >
                        {{csrf_field()}}
                        <table>
                            <tbody><tr>
                                <td colspan="2">
                                    <textarea class="selfDescription s_textarea" name="introduction"placeholder=""></textarea>
                                    <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                </td>
                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="submit" value="保 存" class="btn_profile_save">
                                    <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                </td>
                            </tr>
                            </tbody></table>
                    </form><!--end .descriptionForm-->
                </div>
                <div class="descriptionAdd pAdd">
                    描述你的性格、爱好以及吸引人的经历等，<br>
                    让企业了解多元化的你！
                    <span>添加自我描述</span>
                </div>
            </div>
        <!--自我描述 结束-->

        <!--作品展示 开始-->
            <div class="profile_box" id="worksShow">
                <h2>作品展示</h2>
                <span class="c_add dn"></span>
                <div class="workShow dn">
                    <ul class="slist clearfix">
                    </ul>
                </div>
                <div class="workEdit dn">
                    <form  action="{{url('myresume/works')}}" method="post" >
                        {{csrf_field()}}
                        <table>
                            <tbody><tr>
                                <td>
                                    <input type="text" placeholder="请输入作品链接" name="link" class="workLink">
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <textarea maxlength="100" class="workDescription s_textarea" name="desc" placeholder="请输入说明文字"></textarea>
                                    <div class="word_count">你还可以输入 <span>100</span> 字</div>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <input type="submit" value="保 存" class="btn_profile_save">
                                    <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                </td>
                            </tr>
                            </tbody></table>
                        <input type="hidden" name="show_id" class="showId">
                    </form><!--end .workForm-->
                </div>
                <div class="workAdd pAdd">
                    好作品会说话！<br>
                    快来秀出你的作品打动企业吧！
                    <span>添加作品展示</span>
                </div>
            </div>

        </div>
        <!--作品展示 结束-->

        <div class="content_r">
            <div class="mycenterR" id="myInfo">
                <h2>我的信息</h2>
                <a target="_blank" href="">我收藏的职位</a>
                <br>
                <a target="_blank" href="">我订阅的职位</a>
            </div><!--end #myInfo-->

            <div class="mycenterR" id="myResume">
                <h2>我的附件简历
                    <a title="上传附件简历" href="#uploadFile" class="inline cboxElement">上传简历</a>
                </h2>
                <div class="resumeUploadDiv">
                    暂无附件简历
                </div>
            </div><!--end #myResume-->

            <div class="mycenterR" id="resumeSet">
                <h2>投递简历设置  <span>修改设置</span></h2>
                <!-- -1 (0=附件， 1=在线， 其他=未设置) -->
                <div class="noSet set0 dn">默认使用<span>附件简历</span>进行投递</div>
                <div class="noSet set1 dn">默认使用<span>在线简历</span>进行投递</div>
                <div class="noSet">暂未设置默认投递简历</div>
                <input type="hidden" class="defaultResume" value="-1">
                <form class="dn" id="resumeSetForm">
                    <label><input type="radio" value="1" class="resume1" name="resume">默认使用<span>在线简历</span>进行投递</label>
                    <label><input type="radio" value="0" class="resume0" name="resume">默认使用<span>附件简历</span>进行投递</label>
                    <span class="setTip error"></span>
                    <div class="resumeTip">设置后投递简历时将不再提醒</div>
                    <input type="submit" value="保 存" class="btn_profile_save">
                    <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                </form>
            </div><!--end #resumeSet-->

            <div class="mycenterR" id="myShare">
                <h2>当前每日投递量：10个</h2>
                <a target="_blank" href="">邀请好友，提升投递量</a>
            </div><!--end #myShare-->


            <div class="greybg qrcode mt20">
                <img width="242" height="242" alt="拉勾微信公众号二维码" src="{{url('home/jianli/images/qr_resume.png')}}">
                <span class="c7">微信扫一扫，轻松找工作</span>
            </div>
        </div><!--end .content_r-->
    </div>

    <input type="hidden" id="userid" name="userid" value="314873">

    <!-------------------------------------弹窗lightbox ----------------------------------------->
    <div style="display:none;">
        <!-- 上传简历 -->
        <div class="popup" id="uploadFile">
            <table width="100%">
                <tbody><tr>
                    <td align="center">
                        <form>
                            <a class="btn_addPic" href="javascript:void(0);">
                                <span>选择上传文件</span>
                                <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')" class="filePrew" id="resumeUpload" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" tabindex="3">
                            </a>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td align="left">支持word、pdf、ppt、txt、wps格式文件<br>文件大小需小于10M</td>
                </tr>
                <tr>
                    <td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>
                </tr>
                <tr>
                    <td align="center"><img width="55" height="16" alt="loading" style="visibility: hidden;" id="loadingImg" src="style/images/loading.gif"></td>
                </tr>
                </tbody></table>
        </div><!--/#uploadFile-->

        <!-- 简历上传成功 -->
        <div class="popup" id="uploadFileSuccess">
            <h4>简历上传成功！</h4>
            <table width="100%">
                <tbody><tr>
                    <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
                </tr>
                <tr>
                    <td align="center"><a class="btn_s" href="javascript:;">确&nbsp;定</a></td>
                </tr>
                </tbody></table>
        </div><!--/#uploadFileSuccess-->

        <!-- 没有简历请上传 -->
        <div class="popup" id="deliverResumesNo">
            <table width="100%">
                <tbody><tr>
                    <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
                </tr>
                <tr>
                    <td align="center">
                        <form>
                            <a class="btn_addPic" href="javascript:void(0);">
                                <span>选择上传文件</span>
                                <input type="file" onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')" class="filePrew" id="resumeUpload1" name="newResume" size="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
                            </a>
                        </form>
                    </td>
                </tr>
                <tr>
                    <td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
                </tr>
                </tbody></table>
        </div><!--/#deliverResumesNo-->

        <!-- 上传附件简历操作说明-重新上传 -->
        <div class="popup" id="fileResumeUpload">
            <table width="100%">
                <tbody><tr>
                    <td>
                        <div class="f18 mb10">请上传标准格式的word简历</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="f16">
                            操作说明：<br>
                            打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
                    </td>
                </tr>
                </tbody></table>
        </div><!--/#fileResumeUpload-->

        <!-- 上传附件简历操作说明-重新上传 -->
        <div class="popup" id="fileResumeUploadSize">
            <table width="100%">
                <tbody><tr>
                    <td>
                        <div class="f18 mb10">上传文件大小超出限制</div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="f16">
                            提示：<br>
                            单个附件不能超过10M，请重新选择附件简历！
                        </div>
                    </td>
                </tr>
                <tr>
                    <td align="center">
                        <a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
                    </td>
                </tr>
                </tbody></table>
        </div><!--/#deliverResumeConfirm-->

    </div>
    <!------------------------------------- end ----------------------------------------->

    <script src="{{url('home/jianli/js/Chart.min.js')}}" type="text/javascript"></script>
    <script src="{{url('home/jianli/js/profile.min.js')}}" type="text/javascript"></script>
    <!-- <div id="profileOverlay"></div> -->
    <div class="" id="qr_cloud_resume" style="display: none;">
        <div class="cloud">
            <img width="134" height="134" src="">
            <a class="close" href="javascript:;"></a>
        </div>
    </div>
    <script>
        $(function(){
            $.ajax({
                url:ctx+"/mycenter/showQRCode",
                type:"GET",
                async:false
            }).done(function(data){
                if(data.success){
                    $('#qr_cloud_resume img').attr("src",data.content);
                }
            });
            var sessionId = "resumeQR"+314873;
            if(!$.cookie(sessionId)){
                $.cookie(sessionId, 0, {expires: 1});
            }
            if($.cookie(sessionId) &amp;&amp; $.cookie(sessionId) != 5){
                $('#qr_cloud_resume').removeClass('dn');
            }
            $('#qr_cloud_resume .close').click(function(){
                $('#qr_cloud_resume').fadeOut(200);
                resumeQR = parseInt($.cookie(sessionId)) + 1;
                $.cookie(sessionId, resumeQR, {expires: 1});
            });
        });


      </script>

    <div class="clear"></div>
    <input type="hidden" value="97fd449bcb294153a671f8fe6f4ba655" id="resubmitToken">
    <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
</div><!-- end #container -->
</div>
<!-- 主体部分 结束-->

<!-- 结尾部分 开始-->
<div id="footer">
    <div class="wrapper">
        <a rel="nofollow" target="_blank" href="">联系我们</a>
        <a target="_blank" href="">互联网公司导航</a>
        <a rel="nofollow" target="_blank" href="">拉勾微博</a>
        <a rel="nofollow" href="" class="footer_qr">拉勾微信<i></i></a>
        <div class="copyright">&copy;2013-2014 Lagou <a href="" target="_blank">京ICP备14023790号-2</a></div>
    </div>
</div>
<!-- 结尾部分 结束-->

<script src="{{url('home/jianli/js/core.min.js')}}" type="text/javascript"></script>
<script src="{{url('home/jianli/js/popup.min.js')}}" type="text/javascript"></script>

<!--  -->

<script type="text/javascript">
    $(function(){
        $('#noticeDot-1').hide();
        $('#noticeTip a.closeNT').click(function(){
            $(this).parent().hide();
        });
    });
    var index = Math.floor(Math.random() * 2);
    var ipArray = new Array('42.62.79.226','42.62.79.227');
    var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
    var CallCenter = {
        init:function(url){
            var _websocket = new WebSocket(url);
            _websocket.onopen = function(evt) {
                console.log("Connected to WebSocket server.");
            };
            _websocket.onclose = function(evt) {
                console.log("Disconnected");
            };
            _websocket.onmessage = function(evt) {
                //alert(evt.data);
                var notice = jQuery.parseJSON(evt.data);
                if(notice.status[0] == 0){
                    $('#noticeDot-0').hide();
                    $('#noticeTip').hide();
                    $('#noticeNo').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                    $('#noticeNoPage').text('').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                }else{
                    $('#noticeDot-0').show();
                    $('#noticeTip strong').text(notice.status[0]);
                    $('#noticeTip').show();
                    $('#noticeNo').text('('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                    $('#noticeNoPage').text(' ('+notice.status[0]+')').show().parent('a').attr('href',ctx+'/mycenter/delivery.html');
                }
                $('#noticeDot-1').hide();
            };
            _websocket.onerror = function(evt) {
                console.log('Error occured: ' + evt);
            };
        }
    };
    CallCenter.init(url);

  </script>
<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
    <div id="cboxWrapper"><div>
            <div id="cboxTopLeft" style="float: left;"></div>
            <div id="cboxTopCenter" style="float: left;"></div>
            <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div>
            <div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div>
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
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
</body>
</html>