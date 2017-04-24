{{--
@extends('home.layout.gong')
@section('content')
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
    <!--end #header-->
    <input id="serverTime" value="1470048968301" type="hidden" />


    <!-- /////////////////// -->

    <div class="top_info">
        <div class="top_info_wrap">

            <img src="{{$comp->logo}}"
                 alt="Logo" heihgt="164" width="164" />
            <div class="company_info">
                <div class="company_main">
                    <h1> <a href="http://www.sogukj.com/#/home/" class="hovertips" target="_blank"
                            rel="nofollow" title="{{$comp->name}}">{{$comp->short_name}}</a> </h1>
                    <a href="http://www.sogukj.com/#/home" class="icon-wrap"
                       target="_blank" rel="nofollow" title="{{$comp->web}}"> <i></i> </a>
                    <a class="identification" title=""> <i></i> <span>{{str_replace([-1,0,1,2,3],['未验证','禁用','已认证','未认证','申请认证'],$comp->state)}}</span> </a>
                    <div class="company_word">
                        {{$comp->one_desc}}
                    </div>
                </div>
                <div class="company_data">
                    <ul>

                        <li> <strong> {{count($use)}}个 </strong> <br /> <span class="tipsys" original-title="该公司的在招职位数量">
        <span>招聘职位</span>
        <span class="tip"></span>
         </span>
                        </li>

                        <li> <strong> 76% </strong>
                            <span class="tipsys" original-title="该公司所有职位收到的简历中，在投递后7天内处理完成的简历所占比例">
        <span>简历及时处理率</span>
        <span class="tip"></span> </span>
                        </li>

                        <li> <strong> 2天 </strong> <br /> <span class="tipsys" original-title="该公司的所有职位管理者完成简历处理的平均用时"> <span>简历处理用时</span><span class="tip"></span> </span> </li>
                        <li id="mspj" style="cursor:pointer;"> <strong> 5个 </strong> <br /> <span class="tipsys" original-title="该公司收到的面试评价数量"> <span>面试评价</span><span class="tip"></span> </span> </li>
                        <li> <strong>今天</strong><br /> <span class="tipsys"> <span>企业最近登录</span> </span> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--


  -->
    <div id="company_navs" class="company_navs">
        <div class="company_navs_wrap">
            <ul data-pjax="">
                <li class="current"> <a href="" data-lg-tj-id="9100"
                                        data-lg-tj-no="0001" data-lg-tj-cid="idnull">公司主页</a> </li>
                <li> <a href="" data-lg-tj-id="9100"
                        data-lg-tj-no="0002" data-lg-tj-cid="idnull">招聘职位（10）</a> </li>
            </ul>
            <div class="company_share">
                <span>分享</span>
                <a href="javascript:;" class="share_weibo"
                   rel="nofollow" title="分享到微博"></a>
                <a href="javascript:;" class="share_weixin"
                   rel="nofollow" title="分享到微信"></a>
                <div class="share_weixin_success">
                    <img alt="移动端公司主页二维码" />
                </div>
            </div>
        </div>
    </div>
    <div style="display: none;"
         class="company_navs_shadow"></div>
    <div id="main_container">
        <div id="container_left">
            <div id="containerCompanyDetails">

                <div class="item_container" id="company_products">
                    <div class="item_ltitle">
                        公司产品
                    </div>


<<<<<<< HEAD


                    <div class="item_content">
                        <div class="product_content product_item clearfix"
                             data-id="13933" data-index="0">

                            <img src="{{url('home/head/images/kuaizang.jpg')}}"
                                 alt="产品图片" height="180" width="300" />
=======
                    @foreach ($prod as $pro)
                        <div class="item_content">
                            <div class="product_content product_item clearfix"
                                 data-id="13933" data-index="0">

                                <img src="{{$pro->image}}"
                                     alt="产品图片" height="180" width="300" />
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63

                            <div class="product_details">

                                <h4 class="product_url_all">

                                    <div class="product_url">

<<<<<<< HEAD
                                        <a href="http://www.kongkonghu.com/" class="url_valid"
                                           target="_blank" rel="nofollow" title="">
                                            股票卫士
                                        </a>

                                        <a href="http://www.kongkonghu.com/"
                                           target="_blank" rel="nofollow" title="">
                                            <i></i> </a>
=======
                                            <a href="http://www.sogukj.com/#/home" class="url_valid"
                                               target="_blank" rel="nofollow" title="{{$pro->link}}">
                                                {{$pro->name}}
                                            </a>

                                            <a href="http://www.sogukj.com/#/home"
                                               target="_blank" rel="nofollow"  title="{{$pro->link}}">
                                                <i></i> </a>
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63

                                    </div> </h4>

                                <ul class="clearfix">
                                    <li>客户端</li>
                                    <li>移动app</li>
                                </ul>

                                <div class="product_profile mCustomScrollbar _mCS_1">
                                    <div class="mCustomScrollBox mCS-dark-2" id="mCSB_1"
                                         style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                                        <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">

<<<<<<< HEAD
                                            <p>不限于微博，微信，股吧，贴吧，论坛，新闻等全渠道财经资讯的『异动监测』。在满足股民看盘、选股、交易的同时、围绕头条舆情监控、题材消息追踪、预警三方面特色内容，打造股市机构内参、股票异动情报。</p>
=======
                                                <p>{{$pro->desc}}</p>
                                            </div>
                                            <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                                <div class="mCSB_draggerContainer">
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63

                                        </div>
                                        <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                            <div class="mCSB_draggerContainer">

                                                <div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;">
                                                    <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                                </div>

                                                <div class="mCSB_draggerRail"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br><br>



                    <!-- ///// -->
                </div>
                <!--
           -->
                <div class="item_container" id="company_intro">
                    <div class="item_ltitle">
                        公司介绍
                    </div>
                    <div class="item_content">
                        <div style="display: block;" class="company_intro_text">
                            <span class="company_content"><p>&nbsp; &nbsp; &nbsp;{{$comp->desc}}</p></span>
                            <span style="background-position: right top;" class="text_over"></span>
                        </div>
                        <div class="company_image_gallery">
                        </div>
                    </div>
                </div>
                <!--
           -->

                <div class="item_container" id="history_container">
                    <div class="item_ltitle">
                        发展历程
                    </div>
                    <div class="item_content">
                        <ul class="history_ul">

<<<<<<< HEAD


                            <li class="history_li clearfix " data-id="78445">
                                <div class="li_date">
                                    <p class="date_year">2015-08</p>
                                </div>
                                <div class="li_type_icon li_type_icon2"></div>
                                <div class="li_desc">
                                    <p class="desc_title desc_hover clearfix" data-href="">
          <span class="desc_real_title  desc_real_title_hover ">
          <a  rel="nofollow"> 获得融资金额N千万天使轮融资 </a>
           <a rel="nofollow"> <i class="desc_link"></i> </a> </span> </p>
                                    <div class="desc_intro">
                                    </div>
                                </div> <span class="history_ul_vspilt"></span> </li>
=======
                            @foreach ($ser as $ser)
                                <li class="history_li clearfix " data-id="78445">
                                    <div class="li_date">
                                        <p class="date_year">{{$ser->time}}</p>
                                    </div>
                                    <div class="li_type_icon li_type_icon2"></div>
                                    <div class="li_desc">
                                        <p class="desc_title desc_hover clearfix" data-href="">
                                          <span class="desc_real_title  desc_real_title_hover ">
                                          <a  rel="nofollow"> {{$ser->develop}} </a>
                                           <a rel="nofollow"> <i class="desc_link"></i> </a> </span> </p>
                                        <div class="desc_intro">
                                        </div>
                                    </div> <span class="history_ul_vspilt"></span> </li>
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63

                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ///////////////////// -->

                <div class="item_container" id="company_intro">
                    <div class="item_ltitle">
                        招聘职位
                    </div>

<<<<<<< HEAD

                    <a rel="nofollow" title="浏览职位" href="/JobShow">
                        <div class="item_content">
                            <div style="display: block;" class="company_intro_text">
                                <span class="company_content"><p>&nbsp; &nbsp; &nbsp;</p>大客户销售经理 </span>
                                <span class="company_content"><p>&nbsp; &nbsp; &nbsp;</p><p class="fr">经验1-3年</p></span>
                                <span class="company_content"><p>&nbsp; &nbsp; &nbsp;</p>5000K~100000K
        　&nbsp; &nbsp;大专&nbsp; &nbsp;带薪年假</span>
                                <span style="background-position: right top;" class="text_over"></span>
                            </div>
                            <div class="company_image_gallery">
                            </div>
                        </div></a><hr>

=======
                    @foreach ($use as $use)
                        <a rel="nofollow" title="浏览职位" href="/JobShow">
                            <div class="item_content">
                                <div style="display: block;" class="company_intro_text">
                                    <span class="company_content"><p>&nbsp; &nbsp; &nbsp;</p>{{$use->name}}</span>
                                    <span class="company_content"><p>&nbsp; &nbsp; &nbsp;</p><p class="fr">{{date('Y-m-d H:i',$use->modify_time)}}</p></span>
                                    <span class="company_content"><p>&nbsp; &nbsp; &nbsp;</p>{{$use->salary_low}}K~{{$use->salary_high}}K
        　{{$use->work_year}}&nbsp; &nbsp;{{$use->edu}}&nbsp; &nbsp;{{$use->welfare}}</span>
                                    <span style="background-position: right top;" class="text_over"></span>
                                </div>
                                <div class="company_image_gallery">
                                </div>
                            </div></a><hr>
                    @endforeach
>>>>>>> 74db6e8c4451b10a0dee1e97229ce58ff8b78a63


                </div>

                <!-- ////////////////// -->
                <div class="interview_container item_container" id="interview_container">
                    <div id="interview_anchor"></div>
                    <div class="item_ltitle">
                        面试评价
                    </div>
                    <div class="reviews-area">
                        <div class="reviews-top">
                            <div class="comprehensive-review clearfix">
                                <span class="text">综合评分：</span>
                                <div class="stars">
                                    <div class="stars-static">
                                        <span style="width: 92.65px; background-position: -1px -48px;" class="star_rank"></span>
                                    </div>
                                </div>
                                <span class="score">3.7</span>
                                <span class="count">（&nbsp;来自&nbsp;5&nbsp;份评价&nbsp;）</span>
                            </div>
                            <ul class="classification-review clearfix">
                                <li class="clearfix"> <span class="text">描述相符</span>
                                    <div class="stars">
                                        <div class="stars-static_s">
                                            <span style="width: 110px; background-position: -1px -40px;" class="star_rank_ms"></span>
                                        </div>
                                        <div class="score-detail">
                                            <div class="triangleOut"></div>
                                            <div class="triangleIn"></div>
                                            <ul>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:100px;"></div> 100% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-3"></i>
                                                        <i class="star star-3"></i>
                                                        <i class="star star-3"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-2"></i>
                                                        <i class="star star-2"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-1"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                            </ul>
                                        </div>
                                    </div> <span class="score">5.0</span>
                                    <div class="separate"></div> </li>
                                <li> <span class="text">面试官</span>
                                    <div class="stars">
                                        <div class="stars-static_s">
                                            <span style="width: 110px; background-position: -1px -40px;" class="star_rank_msg"></span>
                                        </div>
                                        <div class="score-detail">
                                            <div class="triangleOut"></div>
                                            <div class="triangleIn"></div>
                                            <ul>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:100px;"></div> 100% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-3"></i>
                                                        <i class="star star-3"></i>
                                                        <i class="star star-3"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-2"></i>
                                                        <i class="star star-2"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-1"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                            </ul>
                                        </div>
                                    </div> <span class="score">5.0</span>
                                    <div class="separate"></div> </li>
                                <li> <span class="text">公司环境</span>
                                    <div class="stars">
                                        <div class="stars-static_s">
                                            <span style="width: 99px; background-position: -1px -40px;" class="star_rank_hj"></span>
                                        </div>
                                        <div class="score-detail">
                                            <div class="triangleOut"></div>
                                            <div class="triangleIn"></div>
                                            <ul>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                        <i class="star star-5"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:50px;"></div> 50% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star star-4"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:50px;"></div> 50% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-3"></i>
                                                        <i class="star star-3"></i>
                                                        <i class="star star-3"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-2"></i>
                                                        <i class="star star-2"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                                <li class="clearfix">
                                                    <div class="tip-stars">
                                                        <i class="star star-1"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                        <i class="star"></i>
                                                    </div>
                                                    <div class="persent-bar" style="width:0px;"></div> 0% </li>
                                            </ul>
                                        </div>
                                    </div> <span class="score">4.5</span> </li>
                            </ul>
                        </div>
                        <div class="list-container">
                            <ul class="list-content">
                                <li class="review-area clearfix">
                                    <div class="review-avater">
                                        <img style="display: inline-block;" src="{{url('home/head/images/jd_portrait.png')}}" class="lazy_img" data-original="//www.lgstatic.com/images/jd_portrait.png" alt="评价人头像" rel="nofollow" height="50" width="50" />
                                    </div>
                                    <div class="review-right">
                                        <div class="review-stars clearfix">
                                            <span class="review-name">匿名</span>
                                            <span class="title">综合评分&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                                            <div class="stars">
                                                <div class="stars-static_s">
                                                    <span style="background-position: -1px -40px; width: 110px;" class="star_rank_zhpf"></span>
                                                </div>
                                                <div class="score-detail">
                                                    <div class="triangleOut"></div>
                                                    <div class="triangleIn"></div>
                                                    <ul>
                                                        <li class="clearfix"> <span class="title">描述相符</span> <span>&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                                                            <div class="tip-stars">
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                            </div> <span class="score">5.0</span> </li>
                                                        <li class="clearfix"> <span class="title">面试官</span> <span>&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                                                            <div class="tip-stars">
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                            </div> <span class="score">5.0</span> </li>
                                                        <li class="clearfix"> <span class="title">公司环境</span> <span>&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                                                            <div class="tip-stars">
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                                <i class="star star-5"></i>
                                                            </div> <span class="score">5.0</span> </li>
                                                    </ul>


                                                    <!-- //////////////// -->




                                <li class="review-area clearfix">
                                    <div class="review-avater">
                                        <img style="display: inline-block;" src="{{url('home/head/images/jd_portrait.png')}}" class="lazy_img" data-original="//www.lgstatic.com/images/jd_portrait.png" alt="评价人头像" rel="nofollow" height="50" width="50" />
                                    </div>
                                    <div class="review-right">
                                        <div class="review-stars clearfix">
                                            <span class="review-name">匿名</span>
                                            <span class="title">综合评分&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                                            <div class="stars">
                                                <div class="stars-static_s">
                                                    <span style="background-position: -1px 0px; width: 22px;" class="star_rank_zhpf"></span>
                                                </div>
                                            </div>
                                            <span class="title">面试职位&nbsp;&nbsp;:&nbsp;&nbsp;</span>
                                            <a target="_blank" class="job-name" href="http://www.lagou.com/jobs/819208.html" title="行政专员" data-index="3">行政专员</a>
                                            <span class="job-status">（&nbsp;已下线&nbsp;）</span>
                                            <span class="review-date">2015-07-01</span>
                                        </div>
                                        <div class="review-tags clearfix">
                                            <div class="tag">
                                                完全hold住场面
                                            </div>
                                        </div>
                                        <div class="review-content">
                                            <div>
                                                <span class="review-type">[面试过程]</span>
                                                <div class="interview-process">
                                                    公司是一群90后的人，公司的产品还是ok 的，但是面试官的水平比较一般~~ 不专业~~很口水话的提问~~面试到一半的时候 就已经放弃，没有兴趣了~但还是坚持到最后，顺利被pass了~~
                                                </div>
                                            </div>
                                        </div>
                                        <div class="review-action">
                                            <span class="replied">企业回复</span>
                                            <a rel="nofollow" href="javascript:;" class="useful no_select" style="padding-left: 10px;" data-id="38919">有用&nbsp;(&nbsp;<span>14</span>&nbsp;)<i></i></a>
                                        </div>
                                        <div class="review-reply" data-index="3">
                                            <div class="triangleOut"></div>
                                            <div class="triangleIn"></div>

                                        </div>
                                    </div>
                                </li>


                                <!-- ////////////////  -->
                            </ul>
                        </div>
                    </div>
                </div>
            <!--
    @require "company-c/modules/common/main.less"
    @require "company-c/modules/address/main.less"
-->
                <div class="address_container item_container" id="location_container">
                    <div class="item_ltitle">
                        公司位置
                    </div>
                    <div class="item_content">
                        <div style="overflow: hidden; position: relative; z-index: 0; background-color: rgb(243, 241, 236); color: rgb(0, 0, 0); text-align: left;" class="item_con_map" id="addr_map">
                            <div style="overflow: visible; position: absolute; z-index: 0; left: 0px; top: 0px; cursor: grab;">
                                <div style="position: absolute; left: 0px; top: 0px; z-index: 9; overflow: hidden; width: 430px; height: 290px;" class="BMap_mask">
                                </div>
                                <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;">
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 800;"></div>
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 700;">
                                        <span title="" class="BMap_Marker BMap_noprint" unselectable="on" "=" style=" position:="" absolute;="" padding:="" 0px;="" margin:="" border:="" 0px="" none;="" -moz-user-select:="" cursor:="" pointer;="" background:="" transparent="" url(&quot;http:="" api0.map.bdimg.com="" mages="" lank.gif&quot;)="" repeat="" scroll="" 0%="" 0%;="" width:="" 19px;="" height:="" 25px;="" left:="" 394px;="" top:="" 134px;="" z-index:="" -7997858;"=""></span>
                                    </div>
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 600;"></div>
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 500;">
                                        <label style="position: absolute; -moz-user-select: none; display: none; cursor: inherit; background-color: rgb(190, 190, 190); border: 1px solid rgb(190, 190, 190); padding: 1px; white-space: nowrap; font: 12px arial,simsun,sans-serif; z-index: -20000; color: rgb(190, 190, 190);" unselectable="on" class="BMapLabel">shadow</label>
                                    </div>
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 400;">
           <span class="BMap_Marker" unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px none; width: 0px; height: 0px; -moz-user-select: none; left: 394px; top: 134px; z-index: -7997858;">
            <div style="position: absolute; margin: 0px; padding: 0px; width: 19px; height: 25px; overflow: hidden;">
             <img src="{{url('home/head/images/ditu.jpg')}}" style="display: block; border:none;margin-left:0px; margin-top:0px; " />
            </div></span>
                                    </div>
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 300;">
           <span unselectable="on" style="position: absolute; padding: 0px; margin: 0px; border: 0px none; width: 20px; height: 11px; -moz-user-select: none; left: 398px; top: 148px;">
            <div style="position: absolute; margin: 0px; padding: 0px; width: 20px; height: 11px; overflow: hidden;">
             <img src="{{url('home/head/images/ditu.jpg')}}" style="display: block; border:none;margin-left:-19px; margin-top:-13px; " />
            </div></span>
                                    </div>
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 201;"></div>
                                    <div style="position: absolute; height: 0px; width: 0px; left: 0px; top: 0px; z-index: 200;"></div>
                                </div>
                                <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 1;">
                                    <div style="position: absolute; overflow: visible; z-index: -100; left: 215px; top: 145px; display: block; transform: translate3d(0px, 0px, 0px);">
                                        <img src="{{url('home/head/images/a.jpg')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: -109px; top: -87px; max-width: none; opacity: 1;" />
                                        <img src="{{url('home/head/images/a2.jpg')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: -365px; top: -343px; max-width: none; opacity: 1;" />
                                        <img src="{{url('home/head/images/a3.jpg')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: -365px; top: -87px; max-width: none; opacity: 1;" />
                                        <img src="{{url('home/head/images/a4.jpg')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: -109px; top: -343px; max-width: none; opacity: 1;" />
                                        <img src="{{url('home/head/images/a5.jpg')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: 147px; top: -343px; max-width: none; opacity: 1;" />
                                        <img src="{{url('home/head/images/a6.jpg')}}" style="-moz-user-select: none; position: absolute; border: medium none; width: 256px; height: 256px; left: 147px; top: -87px; max-width: none; opacity: 1;" />
                                    </div>
                                </div>
                                <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 2; display: none; visibility: hidden;">
                                    <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 0; display: none;"></div>
                                    <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 10; display: none;"></div>
                                </div>
                                <div style="position: absolute; overflow: visible; top: 0px; left: 0px; z-index: 3;"></div>
                            </div>
                            <div title="退出全景" style="z-index: 1201; display: none;" class="pano_close"></div>
                            <a title="退出室内景" style="z-index: 1201; display: none;" class="pano_pc_indoor_exit"><span style="float:right;margin-right:12px;">出口</span></a>
                            <div class=" anchorBL" style="height: 32px; position: absolute; z-index: 30; -moz-user-select: none; bottom: 0px; right: auto; top: auto; left: 1px;">
                                <a style="outline: medium none;" href="http://map.baidu.com/?sr=1" target="_blank" title="到百度地图查看此区域"><img style="border:none;width:77px;height:32px" src="{{url('home/head/images/copyright_logo.png')}}" /></a>
                            </div>
                            <div id="zoomer" style="position: absolute; z-index: 0; top: 137px; left: 387px; overflow: hidden; visibility: hidden; cursor: grab; width: 60px; height: 46px;">
                                <div class="BMap_zoomer" style="top: 0px; left: 0px; background-position: -7px -7px;"></div>
                                <div class="BMap_zoomer" style="top: 0px; right: 0px; background-position: 0px -7px;"></div>
                                <div class="BMap_zoomer" style="bottom: 0px; left: 0px; background-position: -7px 0px;"></div>
                                <div class="BMap_zoomer" style="bottom: 0px; right: 0px; background-position: 0px 0px;"></div>
                            </div>
                            <div style="cursor: default; white-space: nowrap; -moz-user-select: none; color: black; background: transparent none repeat scroll 0% 0%; font: 11px/15px arial,simsun,sans-serif; bottom: 2px; right: auto; top: auto; left: 81px; position: absolute; z-index: 10;" class=" BMap_cpyCtrl BMap_noprint anchorBL" unselectable="on">
                                <span style="display: inline;" _cid="1"><span style="font-size:11px">&copy; 2016 Baidu&nbsp;- Data &copy; <a target="_blank" href="http://www.navinfo.com/" style="display:inline;">NavInfo</a> &amp; <a target="_blank" href="http://www.cennavi.com.cn/" style="display:inline;">CenNavi</a> &amp; <a target="_blank" href="http://www.365ditu.com/" style="display:inline;">道道通</a></span></span>
                            </div>
                        </div>
                        <div class="item_con_mlist mCustomScrollbar _mCS_4">
                            <div class="mCustomScrollBox mCS-dark-2" id="mCSB_4" style="position:relative; height:100%; overflow:hidden; max-width:100%;">
                                <div class="mCSB_container mCS_no_scrollbar" style="position:relative; top:0;">
                                    <ul class="con_mlist_ul">
                                        <li class="mlist_ul_li mlist_li_open" data-locationi="" d="6182"> <p class="mlist_li_title"> <em class="li_title_iconinx">1</em>
                                                <span class="li_title_text ellipsis">{{$comp->city}}</span> <em class="li_title_corner"></em> </p>
                                            <p class="mlist_li_desc"> {{$comp->city}}市浦东新区金科路2889弄长泰广场C座804室 </p> </li>
                                    </ul>
                                    <div class="mlist_total_desc">
                                        该公司共有
                                        <span class="mlist_total">1</span> 个地址
                                    </div>
                                </div>
                                <div class="mCSB_scrollTools" style="position: absolute; display: none;">
                                    <div class="mCSB_draggerContainer">
                                        <div class="mCSB_dragger" style="position: absolute; top: 0px;" oncontextmenu="return false;">
                                            <div class="mCSB_dragger_bar" style="position:relative;"></div>
                                        </div>
                                        <div class="mCSB_draggerRail"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
                <!-- 推荐 -->
@endsection
--}}
