<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{ csrf_token() }}"/>
    <title>Exclusive You Web</title>
    <!-- global_domain FE_base... -->


    <script src="{{url('home/showJob/index/js/analytics.js')}}" async=""></script>
    <script src="{{url('home/showJob/index/js/a.js')}}" async=""></script>


    <!-- 公共样式 -->
    <!-- header样式 -->   <!-- footer样式 -->
    <!-- 页面样式 -->
    <!-- 动态token，防御伪造请求，重复提交 -->
    <script type="text/javascript">
        window.X_Anti_Forge_Token = 'f887644a-451b-4992-bd8f-08a8a1b0d70b';
        window.X_Anti_Forge_Code = '73153274';
    </script>



    <link rel="stylesheet" type="text/css" href="{{url('home/jobShow/index/css/mCustomScrollbar_ac2fb8b.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/jobShow/index/css/layout_75f191a.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/jobShow/index/css/main_002.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/jobShow/index/css/widgets_3990de9.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('home/jobShow/index/css/main.css')}}">


</head>
<body style="width: 100%;">

<!-- header -->
<!--C端头部通栏广告位-->


<!--验证注册邮箱-->
<!--
    @require "common/widgets/header_c/modules/emailvalid/main.less"
-->

@extends('home.Public.Bass')


<input id="serverTime" value="1469969156009" type="hidden">

@section('content')
    <!-- 页面主体START -->

        <div class="container clearfix" id="container">
            <div class="content_l fl">

                <dl class="job_detail" id="job_detail">
                    <dt class="clearfix join_tc_icon">
                    <h1 title="Java">
                        <em></em>
                        <div>{{$company -> name}}</div>
                        {{$job -> name}}
                    </h1>


                    <a class="jd_collection passport_login_pop {{$dn}}" id="login_position" rel="nofollow" data = {{$job -> id}}>
                        <span class="dn" id="collection_pos" >收藏职位</span>收藏
                    </a>
                 {{--   <a class="jd_collection passport_login_pop " id="login_position" rel="nofollow" href="javascript:;">
                        <i class="icon-glyph-hollow-star"> </i>收藏

                    </a>--}}
                    <script type="text/javascript">
                        $(function(){

                            var Y = true;
                            $('#login_position').click(function(){
                                // alert($);

                                if(Y){


                                    var data = $(this).attr('data');
                                    // alert(data);
                                    var X = $(this);
                                    $.ajax({
                                        type: 'POST',
                                        async:true,
                                        url: '/jobShow/canginsert',
                                        data: { 'job_id' : data},
                                        dataType: 'json',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        },
                                        success: function(data){
                                            //console.log(data.status);
                                            if(data.status == 1)
                                            {
                                                //return true;
                                                // X = true;
                                                X.find('span').html('查看收藏');
                                                X.attr('class','jd_collection collection_hover collected');
                                            }else if( data.status == 0)
                                            {
                                                alert('请先登录');
                                            }else{
                                                alert('收藏失败');
                                                // X = false;
                                            }
                                        },
                                        error: function(xhr, type){
                                            alert('收藏失败');
                                        }
                                    });
                                    //$(this).find('span').html('查看收藏');
                                    Y = false;

                                }else{

                                    var data = $(this).attr('data');
                                    // alert(data);
                                    var X = $(this);
                                    $.ajax({
                                        type: 'POST',
                                        async:true,
                                        url: '/jobShow/cangdelete',
                                        data: { 'job_id' : data},
                                        dataType: 'json',
                                        headers: {
                                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        },
                                        success: function(data){
                                            //console.log(data.status);
                                            if(data.status == 1)
                                            {
                                                //return true;
                                                // X = true;
                                                X.attr('class','jd_collection passport_login_pop');

                                                X.find('span').html('收藏已取消');
                                            }else if(data.status == 0)
                                            {
                                                alert('请先登录');
                                            }else{
                                                alert('请先登录');
                                                // X = false;
                                            }
                                        },
                                        error: function(xhr, type){
                                            alert('取消收藏失败');
                                        }
                                    });
                                    Y = true;
                                }


                            });
                            $('#login_position').mouseover(function(){
                                $(this).find('span').attr('class','');

                            });
                            $('#login_position').mouseout(function(){
                                $(this).find('span').attr('class','dn');
                            });

                        });
                    </script>
                    <!-- 举报按钮 -->
                    <a rel="nofollow" href="javascript:;" class="report_button passport_login_pop" data-lg-tj-id="9500" data-lg-tj-no="0002" data-lg-tj-cid="idnull">
                        <span class="dn" id="report_jd">举报职位</span>
                    </a>

                    <!-- 分享至微信 -->
                    <div class="jd_share" data-lg-tj-id="9500" data-lg-tj-no="0003" data-lg-tj-cid="idnull">
                        <span class="dn" id="share_jd">分享到微信</span>
                        <div class="jd_share_success"><div class="weixin_img" id="weixin_img_id"><canvas height="130" width="130"></canvas></div></div>
                    </div>
                    </dt>

                    <dd class="job_request">
                        <p>
                            <span class="red">15k-25k</span>
                            <span>{{$job -> city}}</span>
                            <span>经验{{$job -> work_year}}</span>
                            <span>{{$job -> edu}}及以上</span>
                            <span>{{$job -> nature }}</span>
                        </p>
                        <p>职位诱惑 : {{$job -> welfare}}</p>
                        <p class="publish_time">2天前&nbsp; 发布于拉勾网</p>
                    </dd>
                    <dd class="job_bt">
                        <h3 class="description">职位描述</h3>
                        {{htmlentities($job -> desc)}}
                        <p><br></p>
                    </dd>

                    <!-- 职位发布者 -->
                    <dd class="jd_publisher">
                        <h3>职位发布者</h3>
                        <div class="border clearfix">
                            <i class="initial_avatar c4">吴</i>
                            <!-- 没头像 C 1到4 随机数 -->
                            <div class="publisher_name">
                                <a title="吴女士">
                                    <span class="name">吴女士</span>
                                </a>
                                <span class="pos"> {{$company -> short_name}}  </span>
                            </div>
                            <div class="publisher_data">
                                <div>
                                    <span class="data">39%</span>
                                    <span class="tip">
                    简历及时处理率
                    <span class="tip_text">投递后7天内处理完成的简历所占比例</span>
                    </span>
                                </div>
                                <div>
                                    <span class="data">6天</span>
                                    <span class="tip">
                    简历处理用时
                    <span class="tip_text">完成简历处理的平均用时</span>
                    </span>
                                </div>
                            </div>
                        </div>
                    </dd>

                    <dd class="jd_resume clearfix">
                        <div class="resume_status fl">
                            <i class="jd-icon resume_status_none"></i>
                            <span>你在拉勾还没有简历呢，你可以</span><a href="#/resume/basic.html" target="_blank" title="完善在线简历">完善在线简历</a>，<span>也可</span><a class="passport_login_pop" rel="nofollow" href="javascript:;">上传附件简历</a><span>直接投递</span>
                        </div>
                    </dd>
                    <!-- 职位发布者 end -->

                    <dd class="jd_deliver clearfix">
                        <a rel="nofollow" href="/jobShow/resumesend?jobid={{$job -> id}}&comid={{$company -> id}}" title="登录" class="passport_login_pop btn fr btn_apply" onclick="return {{$cl}}">{{$send}}</a>

                    </dd>
                </dl>

                <dl class="interview_experience module-container">
                    <div id="review_anchor" class="module-title">
                        面试评价
                    </div>
                    <a href="#/gongsi/interviewExperiences.html?companyId=485" target="_blank" class="checkAll" style="display:none">查看该公司全部面试评价</a>
                    <div class="reviews-area"><!-- 面试评价列表-空 -->
                        <div class="list-empty">
                            <i></i>
                            <span>该职位尚未收到面试评价</span>
                            <span class="list_empty_tips" style=""> ,看看该公司<a href="#/gongsi/interviewExperiences.html?companyId=485" target="_blank" class="list_empty_link">其他职位的面试评价</a></span>
                        </div>
                    </div>
                </dl>

                <dl class="view_again module-container">
                    <div class="module-title">看了此职位的人还会看</div>
                    <a href="#/recommend/reView/1993280.html" target="_blank" class="checkAll">查看更多</a>
                    <div class="view_again_area"></div>
                    <!-- <ul>
                    </ul> -->
                </dl>


                <!-- 推荐 -->
            <!--
            @require "common/widgets/recommend/main.less"
-->
                <!-- 公司详情页、职位详情页 推荐-->



                <div class="popular_recom hide-recom">
                    <a rel="nofollow" href="javascript:;" class="expansion">展开<i></i></a>
                    <dl class="popular_company clearfix">
                        <dt>推荐公司：</dt>
                        <dd>
                            <a href="#/gongsi/9251.html">美柚</a>
                            <a href="#/gongsi/1373.html">喜马拉雅fm</a>
                            <a href="#/gongsi/14229.html">微盟</a>
                            <a href="#/gongsi/49369.html">淘粉吧</a>
                            <a href="#/gongsi/80170.html">三目猴</a>
                            <a href="#/gongsi/37236.html">斗鱼tv</a>
                            <a href="#/gongsi/40738.html">小红唇</a>
                            <a href="#/gongsi/97631.html">汽车超人</a>
                            <a href="#/gongsi/32615.html">小奥</a>
                            <a href="#/gongsi/36996.html">三好网</a>
                            <a href="#/gongsi/94866.html">金卖网</a>
                            <a href="#/gongsi/68524.html">编程猫</a>
                            <a href="#/gongsi/23014.html">快法务</a>
                            <a href="#/gongsi/1575.html">百度招聘</a>
                            <a href="#/gongsi/81491.html">蚂蚁金服</a>
                            <a href="#/gongsi/62.html">今日头条</a>
                            <a href="#/gongsi/2474.html">滴滴</a>
                            <a href="#/gongsi/20909.html">AcFun</a>
                            <a href="#/gongsi/5858.html">安居客</a>
                            <a href="#/gongsi/59251.html">映客</a>
                            <a href="#/gongsi/3712.html">京东</a>
                        </dd>
                    </dl>
                    <dl class="popular_city clearfix">
                        <dt class="title">推荐城市：</dt>
                        <dd>
                            <a href="#/beijing/">北京找工作</a>
                            <a href="#/beijing-zhaopin/">北京招聘</a>
                            <a href="#/shanghai/">上海找工作</a>
                            <a href="#/shanghai-zhaopin/">上海招聘</a>
                            <a href="#/hangzhou/">杭州找工作</a>
                            <a href="#/hangzhou-zhaopin/">杭州招聘</a>
                            <a href="#/guangzhou/">广州找工作</a>
                            <a href="#/guangzhou-zhaopin/">广州招聘</a>
                            <a href="#/shenzhen/">深圳找工作</a>
                            <a href="#/shenzhen-zhaopin/">深圳招聘</a>
                            <a href="#/chengdu/">成都找工作</a>
                            <a href="#/chengdu-zhaopin/">成都招聘</a>
                        </dd>
                    </dl>
                </div>
                <!-- 公司详情页、职位详情页 推荐-->
            </div>
            <div class="content_r">
                <dl class="job_company">
                    <dt>
                        <a href="/company/inser?id={{$company -> id}}" target="_blank">
                            <img class="b2" src="{{$company -> logo}}" alt="北京慧聪互联信息技术有限公司" height="80" width="80">
                            <div>
                                <h2 class="fl">
                                    {{$company -> short_name}}
                                    <img src="{{$company -> logo}}" alt="拉勾认证企业" height="19" width="15">
                                    <span class="dn">拉勾认证企业</span>
                                </h2>
                            </div>
                        </a>
                    </dt>
                    <dd>
                        <ul class="c_feature">
                            <li>
                                <span>领域</span> {{$company -> trade}}
                            </li>
                            <li>
                                <span>规模</span> {{$company -> scale}}
                            </li>
                            <li>
                                <span>主页</span>
                                <a href="#/" target="_blank" title="#" rel="nofollow">{{$company -> web}}</a>
                            </li>
                        </ul>
                        <h4>发展阶段</h4>
                        <ul class="c_feature">
                            <li><span>目前阶段</span> {{$company -> stage}}</li>
                        </ul>

                        <h4>工作地址</h4>
                        <div class="work_addr">
                            <a href="#/jobs/list_?city=%E5%85%A8%E5%9B%BD#filterBox"></a>
                            - {{$job -> address}}
                        </div>
                        <div style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;" id="smallmap"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: grab;"><div style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; width: 280px; height: 200px;" class="BMap_mask"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"><span title="" class="BMap_Marker BMap_noprint" unselectable="on" "="" style="position: absolute; padding: 0px; margin: 0px; border: 0px none; -moz-user-select: none; cursor: pointer; background: transparent url(&quot;#.map.bdimg.com/images/blank.gif&quot;) repeat scroll 0% 0%; width: 19px; height: 25px; left: 130px; top: 75px; z-index: -7995450;"></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"><label style="position: absolute; -moz-user-select: none; display: none; cursor: inherit; background-color: rgb(190, 190, 190); border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font: 12px arial,simsun,sans-serif; z-index: -20000; color: rgb(190, 190, 190);" unselectable="on" class="BMapLabel">shadow</label></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"><span class="BMap_Marker" unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px none; width: 0px; height: 0px; -moz-user-select: none; left: 130px; top: 75px; z-index: -7995450;"><div style="position: absolute; margin: 0px; padding: 0px; width: 19px; height: 25px; overflow: hidden;">
                          <img src="{{url('home/jobShow/index/images/ditu.jpg')}}" style="display: block; border:none;margin-left:0px; margin-top:0px; "></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"><span unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px none; width: 20px; height: 11px; -moz-user-select: none; left: 134px; top: 89px;"><div style="position: absolute; margin: 0px; padding: 0px; width: 20px; height: 11px; overflow: hidden;">
                          <img src="{{url('home/jobShow/index/images/ditu.jpg')}}" style="display: block; border:none;margin-left:-19px; margin-top:-13px; "></div></span></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;"><div style="position: absolute; overflow: visible; z-index: -100; left: 140px; top: 100px; display: block;">
                                        <img src="{{url('home/jobShow/index/images/di1.png')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: -5px; top: -100px; max-width: none; opacity: 1;">
                                        <img src="{{url('home/jobShow/index/images/di2.png')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: -261px; top: -100px; max-width: none; opacity: 1;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: none;"><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: none;"></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 10; display: none;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div></div><div title="退出全景" style="z-index: 1201; display: none;" class="pano_close"></div><a title="退出室内景" style="z-index: 1201; display: none;" class="pano_pc_indoor_exit"><span style="float:right;margin-right:12px;">出口</span></a><div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:-moz-grab"><div class="BMap_zoomer" style="top:0;left:0;"></div><div class="BMap_zoomer" style="top:0;right:0;"></div><div class="BMap_zoomer" style="bottom:0;left:0;"></div><div class="BMap_zoomer" style="bottom:0;right:0;"></div></div><div class=" anchorBL" style="height: 32px; position: absolute; z-index: 30; -moz-user-select: none; bottom: 0px; right: auto; top: auto; left: 1px; display: none;"><a style="outline: medium none;" href="#.baidu.com/?sr=1" target="_blank" title="到百度地图查看此区域">
                                    <img style="border:none;width:77px;height:32px" src="{{url('home/jobShow/index/images/copyright_logo.png')}}"></a></div><div style="cursor: default; white-space: nowrap; -moz-user-select: none; color: black; background: transparent none repeat scroll 0% 0%; font: 11px/15px arial,simsun,sans-serif; bottom: 2px; right: auto; top: auto; left: 4px; position: absolute; z-index: 10;" class=" BMap_cpyCtrl BMap_noprint anchorBL" unselectable="on"><span style="display: inline;" _cid="1"><span style="font-size:11px">© 2016 Baidu&nbsp;- Data © <a target="_blank" href="#/" style="display:inline;">NavInfo</a> &amp; <a target="_blank" href="#.cn/" style="display:inline;">CenNavi</a> &amp; <a target="_blank" href="#/" style="display:inline;">道道通</a></span></span></div></div>
                        <a rel="nofollow" href="javascript:;" id="mapPreview">查看完整地图</a>
                    </dd>
                </dl>

                <div id="jobs_similar">
                    <h4 class="jobs_similar_header">
                        <span>相似职位</span>
                    </h4>
                    <input value="true" id="similarPosition" type="hidden">
                    <div class="jobs_similar_content" id="jobs_similar_content">
                        <div class="jobs_similar_detail" id="jobs_similar_detail">
                            <ul class="similar_list reset">
                                <!--source=rec-->
                                <li class="similar_list_item  clearfix" data-jobid="2136356">
                                    <a class="position_link clearfix" href="#/jobs/2136356.html" target="_blank" data-index="0" data-lg-tj-id="9600" data-lg-tj-no="0001" data-lg-tj-cid="idnull" data-lg-tj-abt="default|0">
                                        <div class="similar_list_item_logo">
                                            <img style="display: block;" src="{{url('home/jobShow/index/images/hpk.png')}}" class="lazy_img" data-original="//#/thumbnail_120x120/image1/M00/2E/E8/CgYXBlV_4paAOS3zAAAZrdlLsyw968.jpg" alt="海拍客" height="56" width="56">
                                        </div>
                                        <div class="similar_list_item_pos">
                                            <h2 title="Java">高级Java工程师</h2>
                                            <p>15k-25k</p>
                                            <p class="similar_company_name"><span class="similar_company_name_span">海拍客 </span>




                                                <span>[杭州 - 西湖区] </span>
                                            </p>
                                        </div>
                                    </a>
                                    <!-- 鼠标划过时展示的公司信息 -->
                                    <div class="similar_company_info dn">
                                        <div class="arr"><span></span></div>
                                        <p><span>领域：</span><span>电子商务</span></p>
                                        <p><span>创始人：</span><span>赵晨</span></p>
                                        <p><span>阶段：</span><span>B轮</span></p>
                                        <p><span>规模：</span><span>150-500人</span></p>
                                        <div class="similar_company_label">
                                        </div>
                                    </div>
                                </li>


                                <li class="similar_list_item  clearfix" data-jobId="2987469">
                                    <a class="position_link clearfix" href="#/jobs/2987469.html" target="_blank" data-index="1" data-lg-tj-id="9600" data-lg-tj-no="0002" data-lg-tj-cid="idnull" data-lg-tj-abt="default|0">
                                        <div class="similar_list_item_logo">
                                            <img style="display: block;" src="{{url('home/jobShow/index/images/weita.png')}}" class="lazy_img" data-original="//#/thumbnail_120x120/i/image/M00/8A/5F/Cgp3O1h1mc-AVtrwAAFcOVs6i84056.JPG" alt="唯它时代" width="56" height="56" />
                                        </div>
                                        <div class="similar_list_item_pos">
                                            <h2 title="Java架构">Java架构</h2>
                                            <p>25K-40K</p>


                                            <p class="similar_company_name" title="唯它时代 [杭州·西湖]">
                                                唯它时代 [杭州·西湖]
                                            </p>
                                        </div>
                                    </a>
                                    <!-- 鼠标划过时展示的公司信息 -->
                                    <div class="similar_company_info dn">
                                        <div class="arr"><span></span></div>
                                        <p><span>领域：</span><span>电子商务,移动互联网</span></p>
                                        <p><span>创始人：</span><span>Black Chen</span></p>
                                        <p><span>阶段：</span><span>天使轮</span></p>
                                        <p ><span>规模：</span><span>50-150人</span></p>
                                        <div class="similar_company_label">
                                            <span>年底双薪</span>
                                            <span>交通补助</span>
                                            <span>绩效奖金</span>
                                        </div>
                                    </div>
                                </li>


                                <li class="similar_list_item  clearfix" data-jobId="2883923">
                                    <a class="position_link clearfix" href="#/jobs/2883923.html" target="_blank" data-index="2" data-lg-tj-id="9600" data-lg-tj-no="0003" data-lg-tj-cid="idnull" data-lg-tj-abt="default|0">
                                        <div class="similar_list_item_logo">
                                            <img style="display: block;" src="{{url('home/jobShow/index/images/chwl.png')}}" class="lazy_img" data-original="//#/thumbnail_120x120/i/image/M00/99/DB/CgqKkVihIkCAF2F_AADC_XVDU-U678.jpg" alt="传化物流集团" width="56" height="56" />
                                        </div>
                                        <div class="similar_list_item_pos">
                                            <h2 title="JAVA架构/专家">JAVA架构/专家</h2>
                                            <p>18k-35k</p>


                                            <p class="similar_company_name" title="传化物流集团 [杭州·萧山区]">
                                                传化物流集团 [杭州·萧山区]
                                            </p>
                                        </div>
                                    </a>
                                    <!-- 鼠标划过时展示的公司信息 -->
                                    <div class="similar_company_info dn">
                                        <div class="arr"><span></span></div>
                                        <p><span>领域：</span><span>移动互联网,金融</span></p>
                                        <p><span>创始人：</span><span>徐冠巨</span></p>
                                        <p><span>阶段：</span><span>上市公司</span></p>
                                        <p ><span>规模：</span><span>2000人以上</span></p>
                                        <div class="similar_company_label">
                                            <span>行业爆炸</span>
                                            <span>扁平管理</span>
                                            <span>“家”文化</span>
                                        </div>
                                    </div>
                                </li>


                                <li class="similar_list_item  clearfix" data-jobId="2865560">
                                    <a class="position_link clearfix" href="#/jobs/2865560.html" target="_blank" data-index="3" data-lg-tj-id="9600" data-lg-tj-no="0004" data-lg-tj-cid="idnull" data-lg-tj-abt="default|0">
                                        <div class="similar_list_item_logo">
                                            <img style="display: block;" src="{{url('home/jobShow/index/images/watiao.png')}}" class="lazy_img" data-original="/#/thumbnail_120x120/i/image/M00/01/ED/Cgp3O1Z7gh-Aapg5AAAM8GB41B4988.jpg" alt="跳蛙科技" width="56" height="56" />
                                        </div>
                                        <div class="similar_list_item_pos">
                                            <h2 title="Java">Java</h2>
                                            <p>16k-28k</p>


                                            <p class="similar_company_name" title="跳蛙科技 [杭州·西湖区]">
                                                跳蛙科技 [杭州·西湖区]
                                            </p>
                                        </div>
                                    </a>
                                    <!-- 鼠标划过时展示的公司信息 -->
                                    <div class="similar_company_info dn">
                                        <div class="arr"><span></span></div>
                                        <p><span>领域：</span><span>移动互联网,金融</span></p>
                                        <p><span>创始人：</span><span></span></p>
                                        <p><span>阶段：</span><span>A轮</span></p>
                                        <p ><span>规模：</span><span>50-150人</span></p>
                                        <div class="similar_company_label">
                                        </div>
                                    </div>
                                </li>


                                <li class="similar_list_item  clearfix" data-jobId="2861634">
                                    <a class="position_link clearfix" href="#/jobs/2861634.html" target="_blank" data-index="4" data-lg-tj-id="9600" data-lg-tj-no="0005" data-lg-tj-cid="idnull" data-lg-tj-abt="default|0">
                                        <div class="similar_list_item_logo">
                                            <img style="display: block;" src="{{url('home/jobShow/index/images/dd.png')}}" class="lazy_img" data-original="//#/thumbnail_120x120/image1/M00/42/DC/Cgo8PFXNdImAA0hiAACBD0dX7Ds225.png?cc=0.6919486154416709" alt="滴滴出行（小桔科技）" width="56" height="56" />
                                        </div>
                                        <div class="similar_list_item_pos">
                                            <h2 title="高级Java工程师">高级Java工程师</h2>
                                            <p>15k-30k</p>


                                            <p class="similar_company_name" title="滴滴出行（小桔科技） [杭州·西湖区]">
                                                滴滴出行（小桔科技） [杭州·西湖区]
                                            </p>
                                        </div>
                                    </a>
                                    <!-- 鼠标划过时展示的公司信息 -->
                                    <div class="similar_company_info dn">
                                        <div class="arr"><span></span></div>
                                        <p><span>领域：</span><span>移动互联网,电子商务</span></p>
                                        <p><span>创始人：</span><span></span></p>
                                        <p><span>阶段：</span><span>D轮及以上</span></p>
                                        <p ><span>规模：</span><span>2000人以上</span></p>
                                        <div class="similar_company_label">
                                            <span>节日礼物</span>
                                            <span>绩效奖金</span>
                                            <span>年度旅游</span>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <a href="#/jobs/list_Java?kd=Java&amp;spc=1&amp;pl=&amp;gj=1-3%E5%B9%B4&amp;xl=&amp;yx=&amp;gx=&amp;st=&amp;labelWords=&amp;lc=&amp;workAddress=&amp;city=%E5%8C%97%E4%BA%AC" class="jobs_similar_footer" target="_blank" data-lg-tj-id="9700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">查看更多相似职位</a>
                        </div>
                    </div>
                </div>

                <!--广告位-->
                <div key="ZHIWEIYE_YOUCEERWEIMA" class="lgad_jsonp" style="margin-top: 20px;"><img style="width: 282px; height: 130px;" src="{{url('home/jobShow/index/images/ggw.png')}}"></div>
            </div>
        </div>
        <!-- 页面主体END -->
@endsection

<!-- footer -->
<a style="bottom: 140px; display: none;" id="backtop" title="回到顶部" rel="nofollow"></a>
<!-- feedback -->
<!--

-->



<div style="bottom: 80px;" id="feedback-con">
    <div class="pfb-pho-close">
        <div class="pfb-pho cust4"></div>
        <div class="pfb-close"></div>
    </div>
    <em class="error dn"><span>你还没填任何反馈呢</span><i></i></em>
    <form id="product-fb">
        <div class="pfb-txt">
            <textarea style="height: 0px;" id="pfbTextarea" placeholder="我是拉勾的产品经理Roc，把你遇到的问题，或是想要的功能告诉我吧（200字以内）"></textarea>
            <div class="pfb-input-tip" id="pfbInputTip">0/200</div>
        </div>
        <div class="pfb-email" style="height:38px;">
            <input name="email" placeholder="留下邮箱方便我们沟通（选填）" type="text">
            <span class="ensure">提交</span>
        </div>
        <div class="connect-gou-mei">
            <a id="popOnlineService" href="#.b.qq.com/cgi/wpa.php?ln=1&amp;key=XzgwMDA1NjM3OV80MTk5NzZfODAwMDU2Mzc5XzJf" target="_blank" rel="nofollow">与勾妹谈谈人生</a>
        </div>
    </form>
</div>



<!-- 公共html -->
<!-- 页面公用结构、velocity变量 --><input value="" name="userid" id="userid" type="hidden">
<input value="" name="useridMd5" id="useridMd5" type="hidden">
<input value="" name="type" id="resend_type" type="hidden">
<input value="" id="resubmitToken" type="hidden">
<input value="1993280" id="jobid" type="hidden">
<input value="485" id="companyid" type="hidden">
<input value="" id="positionLng" type="hidden">
<input value="" id="positionLat" type="hidden">
<!-- 底部登陆条 -->
<!--

-->



<!-- 弹窗 -->
<div class="popupBox" style="display:none;">

    <!-- 设置默认投递简历 -->
    <div id="setResume" class="popup popup_jd" style="height:280px;">
        <table width="100%">
            <tbody><tr>
                <td class="f18 c5">请选择你要投出去的简历：</td>
            </tr>
            <tr>
                <td>
                    <form novalidate="novalidate" id="resumeSetForm" class="resumeSetForm">
                        <label class="radio">
                            <input name="resumeName" class="resume1" value="1" type="radio">
                            在线简历：
                            <span class="red">在线简历还不完善，请完善后选择投递</span>                        </label>
                        <div class="setBtns">
                            <a rel="nofollow" href="#/resume/myresume.html" target="_blank">修改</a>
                        </div>
                        <div class="clear"></div>
                        <label class="radio">
                            <input name="resumeName" class="resume0" value="0" type="radio">
                            附件简历：
                            <span class="uploadedResume red">暂无附件简历</span>
                        </label>
                        <div class="setBtns">
                            <a rel="nofollow" href="#/nearBy/downloadResume" class="downloadResume dn">下载</a>
                            <span class="dn">|</span>
                            <a target="_blank" title="上传附件简历" class="reUpload">上传附件简历</a>
                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" name="newResume" id="reUploadResume1" type="file">
                        </div>
                        <div class="clear"></div>
                        <span class="error" style="display:none;">只支持word、pdf、ppt、txt、wps格式文件，请重新上传</span>
                        <label class="tipsInfo">默认使用此简历直接投递，下次不再提示</label>
                        <div class="clear"></div>
                        <span class="setTip error"></span>
                        <input class="btn_profile_save btn_s" value="保存设置" type="submit">
                    </form>
                </td>
            </tr>
            </tbody></table>
    </div>
    <!--/#setResume-->

    <!-- 投递简历时-设置默认投递简历 -->
    <div id="setResumeApply" class="popup popup_jd" style="height:280px;">
        <table width="100%">
            <tbody><tr>
                <td class="f18 c5">请选择你要投出去的简历：</td>
            </tr>
            <tr>
                <td>
                    <form novalidate="novalidate" id="resumeSendForm" class="resumeSetForm">
                        <label class="radio">
                            <input name="resumeName" class="resume1" value="1" type="radio">
                            在线简历：
                            <span class="red">在线简历还不完善，请完善后选择投递</span>
                        </label>
                        <div class="setBtns">
                            <a rel="nofollow" href="#/resume/myresume.html" target="_blank">修改</a>
                        </div>
                        <div class="clear"></div>
                        <label class="radio">
                            <input name="resumeName" class="resume0" value="0" type="radio">
                            附件简历：
                            <span class="uploadedResume red">暂无附件简历</span>
                        </label>
                        <div class="setBtns">
                            <a rel="nofollow" href="#/nearBy/downloadResume" class="downloadResume dn">下载</a>
                            <span class="dn">|</span>
                            <a target="_blank" title="上传附件简历" class="reUpload">上传附件简历</a>
                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" name="newResume" id="reUploadResume2" type="file">
                        </div>
                        <div class="clear"></div>
                        <span class="error" style="display:none;">只支持word、pdf、ppt、txt、wps格式文件，请重新上传</span>
                        <label class="tipsInfo">
                            <input checked="checked" type="checkbox">
                            默认使用此简历直接投递，下次不再提示
                        </label>
                        <div class="clear"></div>
                        <span class="setTip error"></span>
                        <input class="btn_profile_save btn_s" value="确认投递简历" type="submit">
                    </form>
                </td>
            </tr>
            </tbody></table>
    </div>
    <!--/#setResumeApply-->

    <!-- 上传简历 -->
    <div id="uploadFile" class="popup popup_jd">
        <table width="100%">
            <tbody><tr>
                <td align="center">
                    <form>
                        <a rel="nofollow" href="javascript:void(0);" class="btn_addPic">
                            <span>选择上传文件</span>
                            <input tabindex="3" title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume" id="resumeUpload" class="filePrew" type="file">
                        </a>
                    </form>
                </td>
            </tr>
            <tr>
                <td align="left">
                    支持word、pdf、ppt、txt、wps格式文件
                    <br>
                    文件大小需小于10M
                </td>
            </tr>
            <tr>
                <td style="color:#dd4a38; padding-top:10px;" align="left">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传</td>
            </tr>
            <tr>
                <td align="center">
                    <img src="{{url('home/jobShow/index/images/loading.gif')}}" id="loadingImg" style="visibility: hidden;" alt="loading" height="16" width="55">
                </td>
            </tr>
            </tbody></table>
    </div>
    <!--/#uploadFile-->

    <!-- 简历上传成功 -->
    <div id="uploadFileSuccess" class="popup popup_jd">
        <h4>简历上传成功！</h4>
        <table width="100%">
            <tbody><tr>
                <td align="center">
                    <p>你可以将简历投给你中意的公司了。</p>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a rel="nofollow" href="javascript:top.location.reload();" class="btn_s">确&nbsp;定</a>
                </td>
            </tr>
            </tbody></table>
    </div>
    <!--/#uploadFileSuccess-->

    <!-- 举报弹窗 -->
    <div id="reportbox" class="popup popup_jd" style="height:370px;width:455px;">
        <div class="report_detail">
            <h2>若你发现本职位存在违规现象，欢迎举报。</h2>
            <form novalidate="novalidate" id="report_submit" action="javascript:;">
                <table class="report_content">
                    <tbody>
                    <tr>
                        <td>举报原因：</td>
                        <td class="select_box">
                            <input name="report_reason" data-key="0" id="report_reason_hidden" value="" type="hidden">
                            <input id="report_reason" value="请选择举报原因" type="button">
                            <div class="reason_content">
                                <ul>
                                    <li value="1">薪资不真实</li>
                                    <li value="2">工作经验或学历要求不真实</li>
                                    <li value="3">公司信息不真实</li>
                                    <li value="4">其他</li>
                                </ul>
                            </div>
                            <a class="report_select"> <em></em> </a>
                        </td>
                    </tr>
                    <tr>
                        <td>详情描述：</td>
                        <td>
                            <textarea id="problem_txt" name="content" maxlength="1000" placeholder="请您描述问题详情，以便于拉勾网帮您核实情况。"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td class="report_last">
                            <label class="checkbox">
                                <input checked="checked" type="checkbox">
                                <i></i>
                            </label>
                            <span class="anonymous_submit">匿名提交</span>
                            <span class="report_txt">还可输入 <b>500</b> 字</span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="sure_submit" value="确认提交" type="submit">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
    <!-- /#reportbox -->

    <!-- 举报提交后的弹窗 -->
    <div id="receive_report" class="popup popup_jd" style="height:150px;">
        <h2>你的举报已经成功提交，拉勾网会尽快核实举报内容，对违规职位绝不姑息。</h2>
        <a rel="nofollow" href="javascript:;" title="关闭" class="report_cancel">关闭</a>
    </div>
    <!-- /#receive_report -->

    <!-- 重复举报的弹窗 -->
    <div id="has_report" class="popup popup_jd" style="height:110px;">
        <h2>你已经举报过该职位，不能重复举报。</h2>
        <a rel="nofollow" href="javascript:;" title="关闭" class="report_cancel">关闭</a>
        <input value="0" type="hidden">
    </div>
    <!-- /#has_report -->

    <!-- 不感兴趣弹窗 by honge-->
    <div id="no_interest" class="popup popup_jd" style="height:100px;">
        <h2>不想结识该职位的Leader吗？</h2>
        <div class="btn_wrap">
            <span class="little_interest">有点兴趣</span>
            <span class="no_interest_ensure" data-lg-tj-id="7800" data-lg-tj-no="idnull" data-lg-tj-cid="1993280" data-lg-gatj-msg="plus,拒绝,button">确认</span>
        </div>
    </div>
    <!-- /#no_interest -->

    <!-- 投简历成功前填写基本信息 -->
    <div id="infoBeforeDeliverResume" class="popup popup_jd" style="height:300px; overflow:visible;">
        <div class="f18">为方便所投递企业HR查阅，请确认个人信息，HR将通过此联系方式与你沟通</div>
        <form novalidate="novalidate" id="basicInfoForm" method="post">
            <table width="100%">
                <tbody><tr>
                    <td valign="middle">
                        <span class="redstar">*</span>
                    </td>
                    <td>
                        <input name="name" placeholder="姓名" type="text">
                    </td>
                    <td valign="middle">
                        <span class="redstar">*</span>
                    </td>
                    <td>
                        <input name="degree" value="" id="degree" type="hidden">
                        <input class="profile_select_190 profile_select_normal" id="select_degree" value="最高学历" type="button">
                        <div style="display: none;" id="box_degree" class="boxUpDown boxUpDown_190 dn"></div>
                    </td>
                </tr>
                <tr>
                    <td valign="middle">
                        <span class="redstar">*</span>
                    </td>
                    <td>
                        <input name="workyear" value="" id="workyear" type="hidden">
                        <input class="profile_select_190 profile_select_normal" id="select_workyear" value="工作年限" type="button">
                        <div style="display: none;" id="box_workyear" class="boxUpDown boxUpDown_190 dn"></div>
                    </td>
                    <td valign="middle">
                        <span class="redstar">*</span>
                    </td>
                    <td>
                        <input name="expectCity" value="" id="expectCity" type="hidden">
                        <input class="profile_select_190 profile_select_normal" id="select_expectCity" value="期望工作城市" type="button">
                        <div style="display: none;" id="box_expectCity" class="boxUpDown boxUpDown_596 dn"></div>
                    </td>
                </tr>
                <tr>
                    <td valign="middle">
                        <span class="redstar">*</span>
                    </td>
                    <td>
                        <input name="tel" placeholder="手机号码" type="text">
                    </td>
                    <td valign="middle">
                        <span class="redstar">*</span>
                    </td>
                    <td>
                        <input name="email" placeholder="邮箱地址" type="text">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="3">
                        <input name="type" value="" type="hidden">
                        <input class="btn" value="确认并投递" type="submit">
                    </td>
                </tr>
                </tbody></table>
        </form>
    </div>
    <!--/#infoBeforeDeliverResume-->

    <!-- 上传附件简历操作说明-重新上传 -->
    <div id="fileResumeUpload" class="popup popup_jd">
        <table width="100%">
            <tbody><tr>
                <td>
                    <div class="f18 mb10">请上传标准格式的word简历</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="f16">
                        操作说明：
                        <br>
                        打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a class="btn inline cboxElement" rel="nofollow" href="#uploadFile" title="上传附件简历">重新上传</a>
                </td>
            </tr>
            </tbody></table>
    </div>
    <!--/#fileResumeUpload-->

    <!-- 上传附件简历操作说明-重新上传 -->
    <div id="fileResumeUploadSize" class="popup popup_jd">
        <table width="100%">
            <tbody><tr>
                <td>
                    <div class="f18 mb10">上传文件大小超出限制</div>
                </td>
            </tr>
            <tr>
                <td>
                    <div class="f16">
                        提示：
                        <br>
                        单个附件不能超过10M，请重新选择附件简历！
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a class="btn inline cboxElement" rel="nofollow" href="#uploadFile" title="上传附件简历">重新上传</a>
                </td>
            </tr>
            </tbody></table>
    </div>
    <!--/#fileResumeUploadSize-->

    <!-- 投简历成功前二次确认 -->
    <div id="deliverResumeConfirm" class="popup popup_jd">
        <table width="100%">
            <tbody><tr>
                <td class="msg">
                    <div class="f18">你的简历中：</div>
                    <div class="f16 count">
                        <span class="f18 confirm_field">学历、工作年限、期望工作城市</span>
                        与该职位要求不匹配，确认要投递吗？
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <input name="type" value="" type="hidden">
                    <a rel="nofollow" href="javascript:;" class="btn" id="delayConfirmDeliver">确认投递</a>
                    <a rel="nofollow" href="javascript:;" class="btn_s">放弃投递</a>
                    <a rel="nofollow" href="javascript:;" class="f20 edit_field">修改信息</a>
                </td>
            </tr>
            </tbody></table>
    </div>
    <!--/#deliverResumeConfirm-->

    <!-- 投简历成功 -->
    <div id="deliverResumesSuccess" class="popup popup_jd" style="width:500px;padding-bottom:10px;">
        <!-- <table width="100%">
        <tr class="drawGGJ">
        <td align="center">
        <p class="f16 count">
        <span class="resume_delay_txt">简历已经成功投递出去了，请静候佳音！</span> <i class="delay_deliver"><a href="javascript:;" id="recall">撤回</a>（<span id="recall_time">10</span>）</i>
    </p>
    <p class="f16 share dn">
        邀请好友成功注册拉勾，可提升每日投递量&nbsp; &nbsp; <a href="//#/share/invite.html" target="_blank">邀请好友 &gt;&gt;</a>
        </p>
        </td>
        </tr>
        <tr class="drawQD">
        <td align="center">
        <a href="javascript:top.location.reload();" class="btn_s">确&nbsp;定</a>
    </td>
    </tr>
    <tr>
    <td>
    <span>投递了该职位的人还投递了</span>
    <span></span>
    </td>
    </tr>
    <tr class="jd_recommend"></tr>
        </table> -->
        <div class="jd_delivery">
            <!-- <span class="f16 count">简历已经成功投递出去了，请静候佳音！</span> <i class="delay_deliver"><a href="javascript:;" id="recall">撤回</a>（<span id="recall_time">10</span>）</i>     -->
            <p class="f16 count">
                <i class="delay_deliver">
                    <span class="resume_delay_txt">简历已经成功投递出去了，请静候佳音！</span><a rel="nofollow" href="javascript:;" id="recall">撤回</a>（<span id="recall_time">10</span>）
                </i>
            </p>
            <p class="know_wrapper"><span id="knowed">我知道了</span></p>
            <p class="f16 share dn">
                邀请好友成功注册拉勾，可提升每日投递量&nbsp; &nbsp; <a rel="nofollow" href="#/share/invite.html" target="_blank">邀请好友 &gt;&gt;</a>
            </p>
        </div>
        <!-- <div class="post_again post_container">
        <div class="post_title">投递该职位的人还投了</div>
        <a href="//#/recommend/reDeliver/1993280.html" target="_blank" class="post_checkAll">查看更多</a>
        <div class="post_again_area"></div>
        </div> -->
        <div class="jd_delivery_list clearfixs">
            <!--广告位-->
            <div key="JIANLITOUDIDANKUANG_JIANLITOUDIDANKUANG" class="lgad_jsonp" style="width: 430px; height: 156px; margin: 0 auto 35px auto;"><a href="#/app/download.html?source=search_app?labelWords=hot" target="_blank" rel="nofollow"><img style="width: 430px; height: 156px;" src="{{url('home/jobShow/index/images/ggw.png')}}"></a></div>
        </div>
    </div>
    <!--/#deliverResumesSuccess-->

    <!-- 投递时，一个简历都没有弹窗 --
    <div id="sendNoResume" class="popup popup_jd">
    <table width="100%">
    <tbody><tr>
    <td class="f18 c5" align="center">你还没有可以投递的简历呢</td>
    </tr>
    <tr>
    <td class="c5" align="center">请上传附件简历或填写在线简历后再投递吧~</td>
</tr>
<tr>
<td align="center">
    <form>
    <a rel="nofollow" href="javascript:void(0);" class="btn_addPic">
    <span>选择上传文件</span>
    <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume" id="resumeUpload2" class="filePrew" type="file">
    </a>
    </form>
    <a class="btn" href="#/resume/basic.html" target="_blank" rel="nofollow">完善在线简历</a>
    </td>
    </tr>
    </tbody></table>
    </div>
    <!--/#sendNoResume-->

    <!-- 投递时，一个简历都没有弹窗 -->
    <div id="upperLimit" class="popup popup_jd">
        <table width="100%">
            <tbody>
            <tr>
                <td align="center">
                    <h4 class="upper_msg">投递失败：今日你已投递 <i>10</i> 个职位，投递数达到上限。</h4>
                    <p class="upper_txt">邀请好友加入拉勾网，可快速提升投递数量。</p>
                </td>
            </tr>
            <tr>
                <td>
                    <a rel="nofollow" href="#/share/invite.html?utm_source=JDbutton" target="_blank" class="btn_upper" data-lg-tj-id="iE00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">邀请好友</a>
                    <a rel="nofollow" href="javascript:;" class="upper_close">关闭</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--/#upperLimit-->

    <!-- 没有简历请上传 -->
    <div id="deliverResumesNo" class="popup popup_jd">
        <table width="100%">
            <tbody><tr>
                <td align="center">
                    <p class="f16">你在拉勾还没有简历，请先上传一份</p>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <form>
                        <a rel="nofollow" href="javascript:void(0);" class="btn_addPic">
                            <span>选择上传文件</span>
                            <input title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" size="3" name="newResume" id="resumeUpload1" class="filePrew" type="file">
                        </a>
                    </form>
                </td>
            </tr>
            <tr>
                <td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
            </tr>
            </tbody></table>
    </div>
    <!--/#deliverResumesNo-->

    <!-- 激活邮箱-录邮箱未验证时，点击上传附件简历、申请职位、订阅职位、发布职位出现该弹窗 -->
    <div id="activePop" class="popup popup_jd" style="height:240px;">
        <h4>登录邮箱未验证</h4>
        <p>请验证你的登录邮箱以使用拉勾网的所有功能！</p>
        <p>我们已将验证邮件发送至：<a></a>，请点击邮件内的链接完成验证。</p>
        <p>
            <a rel="nofollow" href="javascript:void(0)" id="resend">重新发送验证邮件</a> | <a rel="nofollow" href="#/frontRegister.do" target="_blank">换个邮箱？</a>
        </p>
    </div>
    <!--/#activePop-->

    <!--激活邮箱-验证邮件发送成功弹窗 -->
    <div id="resend_success" class="popup popup_jd">
        <p>我们已将激活邮件发送至：<a></a>，请点击邮件内的链接完成验证。</p>
    </div>
    <!--/#resend_success-->

    <!--地图弹窗-->
    <div id="baiduMap" class="popup popup_jd">
        <div style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;" id="allmap"><div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: grab;"><div style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; width: 0px; height: 0px;" class="BMap_mask"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;"><label style="position: absolute; -moz-user-select: none; display: none; cursor: inherit; background-color: rgb(190, 190, 190); border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font: 12px arial,simsun,sans-serif; z-index: -20000; color: rgb(190, 190, 190);" unselectable="on" class="BMapLabel">shadow</label></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div><div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;"></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2;"></div><div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div></div><div title="退出全景" style="z-index: 1201; display: none;" class="pano_close"></div><a title="退出室内景" style="z-index: 1201; display: none;" class="pano_pc_indoor_exit"><span style="float:right;margin-right:12px;">出口</span></a><div id="zoomer" style="position:absolute;z-index:0;top:0px;left:0px;overflow:hidden;visibility:hidden;cursor:-moz-grab"><div class="BMap_zoomer" style="top:0;left:0;"></div><div class="BMap_zoomer" style="top:0;right:0;"></div><div class="BMap_zoomer" style="bottom:0;left:0;"></div><div class="BMap_zoomer" style="bottom:0;right:0;"></div></div><div style="width: 62px; height: 192px; bottom: auto; right: auto; top: 10px; left: 10px; position: absolute; z-index: 1100; -moz-user-select: none;" class=" BMap_stdMpCtrl BMap_stdMpType0 BMap_noprint anchorTL" unselectable="on"><div class="BMap_stdMpPan"><div class="BMap_button BMap_panN" title="向上平移"></div><div class="BMap_button BMap_panW" title="向左平移"></div><div class="BMap_button BMap_panE" title="向右平移"></div><div class="BMap_button BMap_panS" title="向下平移"></div><div class="BMap_stdMpPanBg BMap_smcbg"></div></div><div style="height: 147px; width: 62px;" class="BMap_stdMpZoom"><div class="BMap_button BMap_stdMpZoomIn" title="放大一级"><div class="BMap_smcbg"></div></div><div style="top: 126px;" class="BMap_button BMap_stdMpZoomOut" title="缩小一级"><div class="BMap_smcbg"></div></div><div style="height: 108px;" class="BMap_stdMpSlider"><div style="height: 108px;" class="BMap_stdMpSliderBgTop"><div class="BMap_smcbg"></div></div><div style="top: 97px; height: 15px;" class="BMap_stdMpSliderBgBot"></div><div class="BMap_stdMpSliderMask" title="放置到此级别"></div><div style="cursor: grab; top: 97px;" class="BMap_stdMpSliderBar" title="拖动缩放"><div class="BMap_smcbg"></div></div></div><div class="BMap_zlHolder"><div class="BMap_zlSt"><div class="BMap_smcbg"></div></div><div class="BMap_zlCity"><div class="BMap_smcbg"></div></div><div class="BMap_zlProv"><div class="BMap_smcbg"></div></div><div class="BMap_zlCountry"><div class="BMap_smcbg"></div></div></div></div><div class="BMap_stdMpGeolocation" style="position: initial; display: none; margin-top: 43px; margin-left: 10px;"><div class="BMap_geolocationContainer" style="position: initial; width: 24px; height: 24px; overflow: hidden; margin: 0px; box-sizing: border-box;"><div class="BMap_geolocationIconBackground" style="width: 24px; height: 24px; background-image: url(#.map.bdimg.com/images/navigation-control/geolocation-control/pc/bg-20x20.png); background-size: 20px 20px; background-position: 3px 3px; background-repeat: no-repeat;"><div class="BMap_geolocationIcon" style="position: initial; width: 24px; height: 24px; cursor: pointer; background-image: url('#.map.bdimg.com/images/navigation-control/geolocation-control/pc/success-10x10.png'); background-size: 10px 10px; background-repeat: no-repeat; background-position: center;"></div></div></div></div></div><div class=" BMap_noprint anchorTR" style="bottom: auto; right: 10px; top: 10px; left: auto; white-space: nowrap; cursor: pointer; position: absolute; z-index: 10; -moz-user-select: none;" unselectable="on"><div style="-moz-user-select: none; float: left;"><div title="显示普通地图" style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: rgb(142, 168, 224) none repeat scroll 0% 0%; padding: 2px 6px; font: bold 12px/1.3em arial,simsun,sans-serif; text-align: center; white-space: nowrap; border-radius: 3px 0px 0px 3px; color: rgb(255, 255, 255);">地图</div></div><div style="-moz-user-select: none; float: left;"><div title="显示卫星影像" style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-left: 1px solid rgb(139, 164, 220); border-top: 1px solid rgb(139, 164, 220); border-bottom: 1px solid rgb(139, 164, 220); background: rgb(255, 255, 255) none repeat scroll 0% 0%; padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; font-feature-settings: normal; font-language-override: normal; font-kerning: auto; font-synthesis: weight style; font-variant: normal; text-align: center; white-space: nowrap; color: rgb(0, 0, 0);">卫星</div><div style="-moz-user-select: none; position: absolute; top: 0px; left: 0px; z-index: -1; display: none;"><div title="显示带有街道的卫星影像" style="border-right:1px solid #8ba4dc;border-bottom:1px solid #8ba4dc;border-left:1px solid #8ba4dc;background:white;font:12px arial,simsun,sans-serif;padding:0 8px 0 6px;line-height:1.6em;box-shadow:2px 2px 3px rgba(0, 0, 0, 0.35)"><span checked="checked" "="" class="BMap_checkbox"></span><label style="vertical-align: middle; cursor: pointer;">混合</label></div></div></div><div style="-moz-user-select: none; float: left;"><div title="显示三维地图" style="-moz-user-select: none; box-shadow: 2px 2px 3px rgba(0, 0, 0, 0.35); border-width: 1px; border-style: solid; border-color: rgb(139, 164, 220); background: rgb(255, 255, 255) none repeat scroll 0% 0%; padding: 2px 6px; font-family: arial,simsun,sans-serif; font-style: normal; font-size: 12px; line-height: 1.3em; font-size-adjust: none; font-stretch: normal; font-feature-settings: normal; font-language-override: normal; font-kerning: auto; font-synthesis: weight style; font-variant: normal; text-align: center; white-space: nowrap; border-radius: 0px 3px 3px 0px; color: rgb(0, 0, 0);">三维</div></div></div><div style="width: 13px; height: 13px; bottom: 0px; right: 0px; top: auto; left: auto; position: absolute; z-index: 10; -moz-user-select: none;" class=" BMap_omCtrl BMap_ieundefined BMap_noprint anchorBR quad4" unselectable="on"><div style="width: 149px; height: 149px;" class="BMap_omOutFrame"><div style="bottom: auto; right: auto; top: 5px; left: 5px; width: 142px; height: 142px;" class="BMap_omInnFrame"><div class="BMap_omMapContainer"></div><div style="cursor: grab;" class="BMap_omViewMv"><div class="BMap_omViewInnFrame"><div></div></div></div></div></div><div style="bottom: 0px; right: 0px; top: auto; left: auto;" class="BMap_omBtn BMap_omBtnClosed"></div></div></div>
    </div>
    <!--/#baiduMap-->

    <!-- 3月活动立即收藏成功弹窗 -->
    <div id="collectSuccess" class="popup popup_jd">
        <table width="100%">
            <tbody>
            <tr>
                <td align="center">
                    <h4>你已成功收藏该职位</h4>
                    <p>3月9日当天可进入“<a rel="nofollow" href="#" target="_blank">我收藏的职位</a>”页快速投递简历</p>
                </td>
            </tr>
            <tr>
                <td align="center">
                    <a rel="nofollow" href="javascript:;" class="btn">关闭</a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
    <!--/#collectSuccess-->

</div>


<!-- jquery lib -->
<!--[if lte IE 8]><script src="#/#/static/dep/ExplorerCanvas/excanvas_329c23c.js"></script><![endif]-->
<!-- analytics js file -->  <!-- plat analytics js file - track log --> <!-- plat analytics js file - click log --> <!-- plat ipinyou tj -->
<!-- <script src="../../static/ipinyou.js"></script> -->

<!-- <noscript><img src="//stats.ipinyou.com/adv.gif?a=ga..n3f5DPSWZXFMcbQa2-GxjX&e=" style="display:none;" /></noscript> -->


<script type="text/javascript" src="{{url('home/jobShow/index/js/vendor_8eb7ff4.js')}}"></script>

<script type="text/javascript" src="{{url('home/jobShow/index/js/main.js')}}"></script>
<script type="text/javascript" src="{{url('home/jobShow/index/js/widgets_5bf44e4.js')}}"></script>
<script src="{{url('home/jobShow/index/js/h.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{url('home/jobShow/index/js/userinfo_7f282e9.js')}}"></script>
<script type="text/javascript" src="{{url('home/jobShow/index/js/layout_8f98554.js')}}"></script>
<script type="text/javascript" src="{{url('home/jobShow/index/js/main_002.js')}}"></script>
<script type="text/javascript">



    require(['common/widgets/passport/passport'], function() {


        /* 设置自动登录监听器 */
        PASSPORT.on('autologin:succ', function() {
            PASSPORT.util.tinfo('autologin:succ');
            window.location.reload();
        });
        PASSPORT.on('autologin:fail', function() {
            PASSPORT.util.tinfo('autologin:fail');
        });
        // 触发自动登录
        PASSPORT.auto();

        /* 设置弹窗登录监听器 */
        PASSPORT.on('popuplogin:succ', function() {
            PASSPORT.util.tinfo('popuplogin:succ');
            window.location.reload();
        });
        PASSPORT.on('popuplogin:fail', function() {
            PASSPORT.util.tinfo('popuplogin:fail');
        });
        // 触发弹窗登录
        //PASSPORT.popup();
        jQuery('.passport_login_pop').each(function() {
            jQuery(this).click(function() {
                PASSPORT.popup();
            });
        });


    });







    var positionAddress = '知春路大钟寺东路9号京仪科技大厦B座二层',
        workAddress = '北京';

    function initialize() {
        function(exports) {
            var mapInit = exports.mapInit;
            mapInit(positionAddress, workAddress);
        });
    }

    function loadScript() {
        var script = document.createElement("script");
        script.src = global.mapApiUri;
        document.body.appendChild(script);
    }

    window.onload = loadScript;



    $(window).one('scroll', function (e) { // 360安全浏览器8.1版本之后花屏bugfix
        $(document.body).css('width', '100%');

        if (window.location.hash) { // 针对anchor links修复
            setTimeout(function () {
                $(document.body).css('width', 'auto');
            });
        }
    });


    window.global = window.global || {};
    window.global.qrImgSrc = '//#/';
    window.global.positionId = '1993280';
    window.global.companyId = '485';
    window.global.experienceCount = '32';
    window.global.userId = '';









    //业务主模块

</script><div style="opacity: 0; cursor: pointer; visibility: visible; display: none;" id="cboxOverlay"></div><div style="display: none; visibility: visible; top: 2px; left: 304px; position: absolute; width: 656px; height: 370px; opacity: 0;" tabindex="-1" role="dialog" class="" id="colorbox"><div style="height: 370px; width: 656px;" id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left; width: 630px;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div>
        <div style="clear: left;">
            <div style="float: left; height: 344px;" id="cboxMiddleLeft"></div>
            <div style="float: left; width: 630px; height: 344px;" id="cboxContent">


                <div style="float: left; display: block;" id="cboxTitle">登录</div>
                <div style="float: left; display: none;" id="cboxCurrent">

                </div>
                <button style="display: none;" id="cboxPrevious" type="button"></button>
                <button style="display: none;" id="cboxNext" type="button"></button>
                <button style="display: none;" id="cboxSlideshow"></button><div style="float: left; display: none;" id="cboxLoadingOverlay"></div>
                <div style="float: left; display: none;" id="cboxLoadingGraphic"></div>
                <button id="cboxClose" type="button">close</button></div><div style="float: left; height: 344px;" id="cboxMiddleRight"></div></div>
        <div style="clear: left;">
            <div style="float: left;" id="cboxBottomLeft"></div>
            <div style="float: left; width: 630px;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div>
        </div></div>
    <div style="position: absolute; width: 9999px; visibility: hidden; max-width: none; display: none;"></div></div>


<script src="home/jobShow/index/js/static.js" type="text/javascript"></script>
<script type="text/javascript" src="home/jobShow/index/js/oss.js"></script>

<script src="home/jobShow/index/js/api.js"></script>
<script src="home/jobShow/index/js/getscript.js"></script>
</body>
</html>