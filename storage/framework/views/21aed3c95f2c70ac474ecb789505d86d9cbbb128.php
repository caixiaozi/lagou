<!DOCTYPE html>
<html>
<head>
    <!-- meta -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="renderer" content="webkit">
    <meta property="qc:admins" content="23635710066417756375" />
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />
    <meta charset="UTF-8">

    <meta content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招" name="keywords">

    <meta content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网" name="description">

    <title>我的简历-拉勾网-最专业的互联网招聘平台</title>

    <link rel="Shortcut Icon" href="<?php echo e(url('home/shou/css/favicon_faed927.ico')); ?>">



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
    <!-- 页面样式 -->
    <!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">
        window.X_Anti_Forge_Token = '8a28a321-5621-4b6a-8c07-8bce99ae81cc';
        window.X_Anti_Forge_Code = '12452583';
    </script>


    
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('home/shou/myresume/css/layout_903ac4c.css')); ?>" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('home/shou/myresume/css/widgets_d89a168.css')); ?>" />
    
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('home/shou/myresume/css/main.html_aio_4787e07.js')); ?>" />
    

    <script type="text/javascript" src="<?php echo e(url('home/shou/myresume/css/lg-analytics_da6a007.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(url('home/shou/myresume/css/oss.js')); ?>"></script>


    <link href="<?php echo e(url('home/shou/myresume/css/style.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(url('home/shou/myresume/css/external.min.css')); ?>" type="text/css" rel="stylesheet">
    <link href="<?php echo e(url('home/shou/myresume/css/popup.css')); ?>" type="text/css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('home/shou/myresume/css/myresume.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('home/shou/myresume/css/tailoring.css')); ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('home/shou/myresume/css/jquery-1.js')); ?>">

    <script type="text/javascript" src="<?php echo e(url('home/shou/myresume/css/jquery.1.10.1.min.js')); ?>"></script>
    <script src="<?php echo e(url('home/shou/myresume/css/jquery.lib.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(url('home/shou/myresume/css/core.min.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo e(url('home/shou/myresume/css/ajaxfileupload.js')); ?>"></script>
    <script src="<?php echo e(url('home/shou/myresume/css/Chart.min.js')); ?>" type="text/javascript"></script>
    <script src="<?php echo e(url('home/shou/myresume/css/profile.min.js')); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?php echo e(url('home/shou/myresume/css/vendor_e3ddeee.js')); ?>"></script>
    <style type="text/css">
        /*input[type="text"], input[type="password"] {height:46px;}*/
    </style>
    <link rel="stylesheet" href="<?php echo e(url('home/shou/myresume/css/header.css')); ?>">
</head>
<body>
<!-- header -->
<!--C端头部通栏广告位-->
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


<!--验证注册邮箱-->
<!--
    @require  "common/widgets/header_c/modules/emailvalid/main.less"
-->


<div id="lg_header">
    <!--C端头部黑色导航-->
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
                        <a href="<?php echo e(url('myresume')); ?>" class="bl" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">我的简历</a></li>
                    <li>
                        <a href="" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">投递箱</a>
                        <em class="noticeDot dn" id="noticeDot_delivery"></em>
                    </li>
                    <li>
                        <a href="" class="bl" data-lg-tj-id="5900" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收藏夹</a></li>
                    <li class="user_dropdown">
                        <span class="unick bl"><?php echo e(session('vip') -> name); ?></span>
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
                                <a href="<?php echo e(url('personal')); ?>" data-lg-tj-id="5c00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">帐号设置</a></li>
                            <li>
                                <a href="" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">去企业版</a></li>
                            <li>
                                <a href="" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!--end #lg_tbar-->
    </div>
</div>

<!--C端头部白色导航-->
<div id="lg_tnav">
    <div class="inner">
        <div class="lg_tnav_l">
            <a href="<?php echo e(url('home/two')); ?>" class="lg_logo" data-lg-tj-id="5h00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
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
                <a rel="nofollow" href=""  data-lg-tj-id="5k00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank" data-lg-tj-track-code="index_yipai">一拍</a>
            </li>
            <li>
                <a rel="nofollow" href=""  data-lg-tj-id="ic00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" data-lg-tj-track-code="index_yanzhi">言职</a>
            </li>
            <li>
                <a rel="nofollow" href=""  target="_blank" data-lg-tj-id="1NI0" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">大鲲</a>
            </li>
        </ul>
    </div>
</div>

<!--endC端头部白色导航-->


<!-- 页面主体START -->
<div id="container">
    <div class="clearfix">
        <div class="content_l">
            <div class="fl" id="resume_name">
                <div class="nameShow fl">
                    <h1 title="jason的简历"><?php echo e(session('name')); ?></h1>

                    <a target="_blank" href="">预览</a>|
                    <a target="_blank" href="<?php echo e(url('add')); ?>">编辑</a>
                </div>
                <form class="fl dn" id="resumeNameForm">
                    <input type="text" value="<?php echo e(session('name')); ?>" name="resumeName" class="nameEdit c9">
                    <input type="submit" value="保存">|
                    <a target="_blank" href="h/resume/preview.html">预览</a></form>
            </div>
            <!--end #resume_name-->

            <!--end #lastChangedTime-->

            <div id="resumeScore">
                <div class="mr_top_bg" id="baseinfo">

                    <img src="<?php echo e(url('home/shou/myresume/resume/tou_42952f6.png')); ?>" height="170" width="702" class="opa" />
                </div>
            </div>
            
                
                
            

            <!--end #resumeScore-->
            <div class="profile_box" id="basicInfo">
                <!-- <span class="c_edit"></span> -->
                <div class="mr_moudle_head clearfixs mr_w604" style='height:50px;'>
                    <div class="mr_head_l">
                        <div class="mr_title">
                            <span class="mr_title_l"></span>
                            <span class="mr_title_c">基本信息</span>
                            <span class="mr_title_r"></span>
                        </div>
                    </div>
                    <div class="mr_head_r c_edit" style="">
                        <i class='jbxx'></i>
                    </div>
                    <div class="basicShow">
                        <table>
                            <tr>
                                <td>姓名:<?php echo e($data['username']); ?></td>
                                <td>性别:<?php echo e(str_replace([0,1],['女','男'],$data['sex'])); ?></td>
                            </tr>
                            <tr>
                                <td>学历:<?php echo e($data['education']); ?></td>
                                <td>工作经验:<?php echo e($data['work_year']); ?></td>
                            </tr>
                            <tr>
                                <td>电话:<?php echo e($data['phone']); ?></td>
                                <td>Email:<?php echo e($data['email']); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
<br><br><br>
            <!-- 期望工作 -->
            <div class="profile_box" id="basicInfo">
                <!-- <span class="c_edit"></span> -->
                <div class="mr_moudle_head clearfixs mr_w604" style='height:50px;'>
                    <div class="mr_head_l">
                        <div class="mr_title">
                            <span class="mr_title_l"></span>
                            <span class="mr_title_c">期望工作</span>
                            <span class="mr_title_r"></span>
                        </div>
                    </div>
                    <div class="mr_head_r c_edit" style="">
                        <i class='jbxx'></i>
                    </div>
                    <div class="basicShow">
                        <table>
                            <tr>
                                <td>期望城市:<?php echo e($data['hope']->city); ?></td>
                                <td>  <?php echo e($data['hope']->nature); ?></td>

                            </tr>
                            <tr>
                                <td>工作:<?php echo e($data['hope'] -> job); ?></td>
                                <td>期望月薪:<?php echo e($data['hope'] -> salary); ?></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>

            <br>
            <!-- 工作经历 -->
            <div class="profile_box" id="basicInfo">
                <!-- <span class="c_edit"></span> -->
                <div class="mr_moudle_head clearfixs mr_w604" style='height:50px;'>
                    <div class="mr_head_l">
                        <div class="mr_title">
                            <span class="mr_title_l"></span>
                            <span class="mr_title_c">工作经历</span>

                            <span class="mr_title_r"></span>
                        </div>
                    </div>
                    <div class="mr_head_r c_edit" style="">
                        <i class='jbxx'></i>
                    </div>
                    <div class="basicShow">
                        <?php $__currentLoopData = $data['res_his']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                <p>公司：<?php echo e($v-> company); ?>

                                职位： <?php echo e($v-> job); ?>

                                工作时间：<?php echo e($v-> begin_yeartime); ?>.<?php echo e($v-> begin_monthtime); ?> -<?php echo e($v-> end_yeartime); ?>.<?php echo e($v-> end_monthtime); ?>

                                    <button><a href="<?php echo e(url('myresume/del'.'/'.$v -> id)); ?>">删除</a></button></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>
                </div>
            </div>

            <br>
            <!-- 项目经验 -->
            <div class="profile_box" id="basicInfo">
                <!-- <span class="c_edit"></span> -->
                <div class="mr_moudle_head clearfixs mr_w604" style='height:50px;'>
                    <div class="mr_head_l">
                        <div class="mr_title">
                            <span class="mr_title_l"></span>
                            <span class="mr_title_c">项目经验</span>
                            <span class="mr_title_r"></span>
                        </div>
                    </div>
                    <div class="mr_head_r c_edit" style="">
                        <i class='jbxx'></i>
                    </div>
                    <div class="basicShow">
                        <?php $__currentLoopData = $data['pro']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                      <p> 时间：<?php echo e($v->begin_yeartime); ?>.<?php echo e($v -> begin_monthtime); ?>-<?php echo e($v -> end_yeartime); ?>.<?php echo e($v -> end_monthtime); ?>

                               项目名称：<?php echo e($v -> name); ?>

                                 职务：<?php echo e($v->job); ?>

                          <button><a href="<?php echo e(url('myresume/delproject'.'/'.$v -> id)); ?>">删除</a></button>
                      </p>
                            </tr>

                        </table>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>
                </div>
            </div>

            <br>
            <!-- 教育背景 -->
            <div class="profile_box" id="basicInfo">
                <!-- <span class="c_edit"></span> -->
                <div class="mr_moudle_head clearfixs mr_w604" style='height:50px;'>
                    <div class="mr_head_l">
                        <div class="mr_title">
                            <span class="mr_title_l"></span>
                            <span class="mr_title_c">教育背景</span>
                            <span class="mr_title_r"></span>
                        </div>
                    </div>
                    <div class="mr_head_r c_edit" style="">
                        <i class='jbxx'></i>
                    </div>
                    <div class="basicShow">
                        <?php $__currentLoopData = $data['edu']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <table>
                                <tr>
                                    <td>学校：<?php echo e($v->school); ?></td>
                                    <td>时间：<?php echo e($v->begin_time); ?>-<?php echo e($v->end_time); ?></td>
                                </tr>
                                <tr>
                                    <td>  学历：<?php echo e($v->education); ?></td>
                                    <td> 专业：<?php echo e($v->professional); ?></td>
                                </tr>
                            </table>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>
                </div>
            </div>

            <br>
            <!-- 自我描述 -->
            <div class="profile_box" id="basicInfo">
                <!-- <span class="c_edit"></span> -->
                <div class="mr_moudle_head clearfixs mr_w604" style='height:50px;'>
                    <div class="mr_head_l">
                        <div class="mr_title">
                            <span class="mr_title_l"></span>
                            <span class="mr_title_c">自我描述</span>
                            <span class="mr_title_r"></span>
                        </div>
                    </div>
                    <div class="mr_head_r c_edit" style="">
                        <i class='jbxx'></i>
                    </div>
                    <div class="basicShow">
                            <table>
                                <tr>
                                    <td>描述:<?php echo e($data['introduction']); ?></td>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>

            <br>
            <!-- 作品展示 -->
            <div class="profile_box" id="basicInfo">
                <!-- <span class="c_edit"></span> -->
                <div class="mr_moudle_head clearfixs mr_w604" style='height:50px;'>
                    <div class="mr_head_l">
                        <div class="mr_title">
                            <span class="mr_title_l"></span>
                            <span class="mr_title_c">作品展示</span>
                            <span class="mr_title_r"></span>
                        </div>
                    </div>
                    <div class="mr_head_r c_edit" style="">
                        <i class='jbxx'></i>
                    </div>
                    <div class="basicShow">
                        <?php $__currentLoopData = $data['show_works_value']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $v): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                           <p> 网址：<?php echo e($v->link); ?>

                              说明：<?php echo e($v->desc); ?>

                               <button><a href="<?php echo e(url('myresume/worksdel'.'/'.$v -> id)); ?>">删除</a></button></p>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </div>
                </div>
            </div>
<a href="">把这份简历下载到本地</a>
        </div>


<div class="content_r">
    <div class="mycenterR" id="myInfo">
        <h2>我的信息</h2>
        <a target="_blank" href="">我收藏的职位</a>
        <br>
        <a target="_blank" href="">我订阅的职位</a>
    </div><!--end #myInfo-->


    <div class="mr_uploaded clearfixs">
        <div class="mr_set_default">
            <div class="set_default_wrap">
                <a class="inline cboxElement" href="#uploadFile" title="上传附件简历">我要上传附件简历</a>
                <div class="xl_list dn">
                    <ul class="ul_resume_type">
                        <li data-type="1">默认投递：在线简历</li>
                        <li data-type="0">默认投递：附件简历</li></ul>
                </div>
            </div>
        </div>
    </div><!--end #resumeSet-->

    <div class="mycenterR" id="myShare">
        <h2>当前每日投递量：10个</h2>
        <a target="_blank" href="">邀请好友，提升投递量</a>
    </div><!--end #myShare-->


    <div class="greybg qrcode mt20">
        <img width="242" height="242" alt="拉勾微信公众号二维码" src="<?php echo e(url('home/jianli/images/qr_resume.png')); ?>">
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

<script src="<?php echo e(url('home/jianli/js/Chart.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('home/jianli/js/profile.min.js')); ?>" type="text/javascript"></script>
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

<script src="<?php echo e(url('home/jianli/js/core.min.js')); ?>" type="text/javascript"></script>
<script src="<?php echo e(url('home/jianli/js/popup.min.js')); ?>" type="text/javascript"></script>

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
</div>
</div>
</body>
</html>