<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{url('home/head/js/jquery-3.0.0.js')}}"></script>
    <script src="{{url('home/head/js/bootstrap.min.js')}}"></script>

    <meta content="互联网招聘,找工作,招聘网,人才网" name="keywords">
    <meta content="拉勾网是最权威的互联网行业招聘网站,提供全国真实的互联网招聘信息,工资不面议当面谈,找工作,招聘网,寻人才就来拉勾网,互联网行业找工作首选拉勾网" name="description">
    <title>拉勾网-最专业的互联网招聘平台_找工作_招聘_人才网_求职</title>
    <link rel="Shortcut Icon" href="{{url('home/shou/css/favicon_faed927.ico')}}">

    <link href="{{url('home/head/css/style.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('home/head/css/external.css')}}" type="text/css" rel="stylesheet">
    <link href="{{url('home/head/css/popup.css')}}" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="{{url('home/head/js/jquery.js')}}"></script>
    <script src="{{url('home/head/js/jquery_002.js')}}" type="text/javascript"></script>
    <script type="text/javascript" src="{{url('home/head/js/ajaxfileupload.js')}}"></script>
    <script src="{{url('home/head/js/additional-methods.js')}}" type="text/javascript"></script>



</head>

<body>

<div id="body">
    <link href="{{url('home/head/css/header.css')}}" rel="stylesheet">
    <!-- 未登录用户头部 -->


    <!-- 企业用户头部 -->
    <div id="lg_tbar">
        <div class="inner">


            <div class="lg_tbar_l">
                <a style="text-decoration:none;" href="" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>

                <a style="text-decoration:none;" href="url{{'login'}}">进入企业版</a>
            </div>
            <ul class="lg_tbar_r reset">
                <li>
                    <a style="text-decoration:none;" href="/resume/pending" data-lg-tj-id="5700" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">收到的简历</a>
                </li>
                <li>
                    <a style="text-decoration:none;" href="nd/index.html" class="bl" id="deliveryLink" data-lg-tj-id="5800" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">发布的简历</a>
                    <em class="noticeDot dn" id="noticeDot_delivery"></em>
                </li>
                <li class="user_dpdown">
                    <span class="unick bl" style="width:96px;">FireWork</span>
                    <em class="noticeDot dn" id="noticeDot_name"></em>
                    <i></i>
                    <ul class="reset">
                        <li>
                            <a style="text-decoration:none;" href="ob/positions.html" data-lg-tj-id="5a00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">发布的职位</a>
                        </li>
                        <li>
                            <a style="text-decoration:none;" href="ndle/show.html" id="invitationLink" data-lg-tj-id="5b00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow" data-lg-gatj-msg="header_c,职位邀请,number">收到的简历</a>
                            <em class="noticeDot dn" id="noticeDot_invitation"></em>
                        </li>

                        <li>
                            <a style="text-decoration:none;" href="url{{'company'}}" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">公司的首页</a>
                        </li>
                        <li>
                            <a style="text-decoration:none;" href="url{{'personal'}}" data-lg-tj-id="5d00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">账号设置</a>
                        </li>
                        <li>
                            <a style="text-decoration:none;" href="/login/logout" id="logouta" data-lg-tj-id="5e00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">退出</a>
                            <script type="text/javascript">
                                $('#logouta').click(function(){
                                    $.post('/index.php/Home/Login/logout.html',{},function(data){
                                        window.location.reload();
                                    });
                                    return false;
                                });
                            </script>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div id="lg_tnav">
        <div class="inner">
            <div class="lg_tnav_l">
                <a style="text-decoration:none;" href="http://www.our.com/" class="lg_logo" data-lg-tj-id="5t00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">
                    <h1>拉勾网</h1>
                    <span>企业版</span>
                </a>
            </div>
            <ul class="lg_tnav_wrap reset">
                <li>
                    <a style="text-decoration:none;" href="home/index" data-lg-tj-id="5u00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">公司首页</a>
                </li>
                <li>
                    <a style="text-decoration:none;" href="/resume/pending" data-lg-tj-id="5v00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">简历管理</a>
                    <b class="unhandleNum" id="unhandleNum"></b>
                </li>
                <li>
                    <a style="text-decoration:none;" href="/resume/job" data-lg-tj-id="5w00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">职位管理</a>
                </li>

                <li>
                    <a style="text-decoration:none;" href="dex.html" data-lg-tj-id="5y00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">发布简历</a>
                </li>
            </ul>
        </div>
    </div>

@section('content')


@show
<!-- end #Member -->
</div>
</div>


<script src="{{url('home/head/js/company.js')}}" type="text/javascript"></script>


<div class="clear"></div>
<a style="text-decoration:none;" rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
</div>
<!-- end #container -->
</div>
<!-- end #body -->
<link rel="stylesheet" type="text/css" href="{{url('home/head/css/widgets_fec497b.css')}}">


<div id="footer">
    <div class="wrapper">
        <i class="footer_lagou_icon"></i>
        <div class="inner_wrapper">
            <a style="text-decoration:none;" class="footer_app" href="http://www.lagou.com/app/download.html" rel="nofollow">拉勾APP<span></span><i></i></a>
            <a style="text-decoration:none;" href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
            <a style="text-decoration:none;" class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
            <a style="text-decoration:none;" href="http://www.lagou.com/topic/whatisnew.html" target="_blank" rel="nofollow">版本更新</a>
            <a style="text-decoration:none;" href="http://www.lagou.com/qa.html?t=1" target="_blank" rel="nofollow">帮助中心</a>
            <a style="text-decoration:none;" href="http://www.lagou.com/about.html" target="_blank" rel="nofollow">联系我们</a>
            <a style="text-decoration:none;" id="BizQQWPA" href="javascript:void(0);" rel="nofollow">在线交流</a>
            <span class="tel">服务热线：<em>400-605-9900 (9:00 -19:00)</em></span>
        </div>
        <div class="copy">
            <span><em>©</em>2017 Lagou </span>
            <a style="text-decoration:none;" target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" rel="nofollow">京ICP备14023790号-2</a>
            <span>京公网安备11010802017116号</span>
        </div>
    </div>
</div>
<script type="text/javascript">
    //BizQQWPA.addCustom({aty: '0', a: '0', nameAccount: 800056379, selector: 'BizQQWPA'});
</script>


<div id="cboxOverlay" style="display: none;"></div><div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;"><div id="cboxWrapper"><div><div id="cboxTopLeft" style="float: left;"></div><div id="cboxTopCenter" style="float: left;"></div><div id="cboxTopRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxMiddleLeft" style="float: left;"></div><div id="cboxContent" style="float: left;"><div id="cboxTitle" style="float: left;"></div><div id="cboxCurrent" style="float: left;"></div><button type="button" id="cboxPrevious"></button><button type="button" id="cboxNext"></button><button id="cboxSlideshow"></button><div id="cboxLoadingOverlay" style="float: left;"></div><div id="cboxLoadingGraphic" style="float: left;"></div></div><div id="cboxMiddleRight" style="float: left;"></div></div><div style="clear: left;"><div id="cboxBottomLeft" style="float: left;"></div><div id="cboxBottomCenter" style="float: left;"></div><div id="cboxBottomRight" style="float: left;"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div><ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0" style="display: none; left: 538.5px;"></ul><iframe src="/public/home/firm/head/login.htm" id="auto_login_iframe_0" style="display:none;"></iframe>
<script src="{{url('home/head/js/core.js')}}" type="text/javascript">
</script>
<script src="{{url('home/head/js/popup.js')}}" type="text/javascript">
</script>
<script type="text/javascript">

    /**
     * @param string 上传地址
     * @param string file表单id
     * @param string 要修改的dom节点
     */
    function uploadFile(url, file_id, class_id) {
        var url = url;
        var file_id = file_id;
        var file_obj = $('#'+file_id);
        var class_obj = $('.'+class_id);
        var n = $('#'+file_id).next();
        $.ajaxFileUpload({
            url : url,
            fileElementId : file_id,
            secureuri: false,
            dataType : 'eval',
            data : {fid:file_obj.attr('name'), id:file_obj.attr('id')},
            type : 'post',
            success : function(data) {
                eval("var data="+data);
                n.val(data.url);
                data.url = data.url + '?' + parseInt(Math.random()*10000);
                class_obj.attr('src', data.url);
            }
        })
    }

    jQuery(function($) {
        if ($('.hasProduct').length <= 0) {
            $('.no_product').removeClass('dn');
        }

        if ($('.hasTeam').length <= 0) {
            $('.noTeam').removeClass('dn');
        }

        $.extend({
            sub : function(obj) {
                obj = $(obj);
                $.ajax({
                    url : obj.attr('action'),
                    type : 'post',
                    data : obj.serialize(),
                    success : function(data) {
                        eval("var data="+data);
                        if (data.code == 0) {
                            $('.fullname').html(data.name);
                            $('.fullname').attr('title', data.name);
                            $('.oneword').children('span').html(data.one_desc);
                            obj.parents('#c_tags_edit').addClass('dn');
                            obj.parents('#c_tags_edit').prev().removeClass('dn');
                            obj.parents('#c_tags_edit').prev().find('.companyCity').html(data.city);
                            obj.parents('#c_tags_edit').prev().find('.companyTrade').html(data.trade);
                            obj.parents('#c_tags_edit').prev().find('.companyTrade').attr('title', data.trade);
                            obj.parents('#c_tags_edit').prev().find('.companyScale').html(data.scale);
                            obj.parents('#c_tags_edit').prev().find('.companyWeb').html(data.web);
                            obj.parents('#c_tags_edit').prev().find('.companyWeb').attr('title', data.web);
                            obj.parents('#c_tags_edit').prev().find('.companyWeb').attr('href', data.web);
                            obj.addClass('dn');
                            obj.prev().removeClass('dn');
                            obj.prev().find('.c5').html(data.stage);
                        } else if (data.code == 1) {
                            obj.parents('dl').addClass('dn');
                            obj.parents('dl').next().removeClass('dn');
                            obj.parents('dl').next().find('img').attr('alt', data.name);
                            obj.parents('dl').next().find('h3').children('a').attr('href', data.link).html(data.name);
                            data.image = data.image + '?' + parseInt(Math.random()*10000);
                            obj.parents('dl').next().find('img').attr('src', data.image);
                            obj.parents('dl').next().find('.proDesc').html(data.desc);
                        } else if (data.code == 2) {
                            obj.parents('dl').addClass('dn');
                            obj.parents('dl').next().removeClass('dn');
                            obj.parents('dl').next().find('.c_intro').html(data.desc);
                        } else if (data.code == -1) {
                            obj.parents('dl').addClass('dn');
                            obj.parents('dl').prev().removeClass('dn');
                        } else if (data.code == 3) {
                            obj.parents('.member_info').addClass('dn');
                            obj.parents('.member_info').next().removeClass('dn');
                            obj.parents('.member_info').next().find('img').attr('alt', data.name);
                            obj.parents('.member_info').next().find('img').attr('src', data.image);
                            obj.parents('.member_info').next().find('.m_name').html(data.name);
                            obj.parents('.member_info').next().find('.m_name').children('a').attr('href', data.weibo);
                            obj.parents('.member_info').next().find('.m_position').html(data.position);
                            obj.parents('.member_info').next().find('.m_intro').html(data.desc);
                        }
                    }
                })
                return false;
            }
        })

        $('#saveDetail').click(function() {
            $(this).parent().addClass('dn');
        })


        // $('.product_delete').click(function() {
        //     if (confirm('你确定删除此产品?')){
        //         $.ajax({
        //             url : "/index.php/Home/CompanyProduct/delete.html",
        //             data : $(this).parents('form').serialize(),
        //             type : 'post',
        //             sussecc : function(data) {
        //                 eval("var data="+data);
        //                 alert(data);
        //                 if (data.code == 1){
        //                     alert(data.msg);
        //                 }
        //             }
        //         })
        //         $(this).parents('.product_wrap').empty();
        //     } else {
        //         $(this).parents('dl').addClass('dn');
        //         $(this).parents('dl').next().removeClass('dn');
        //     }
        // })

        $('#editIntro').click(function() {
            $(this).parents('dl').addClass('dn');
            $(this).parents('dl').prev().removeClass('dn');
        })

        $('#addIntro').click(function() {
            $(this).parents('dl').addClass('dn');
            $(this).parents('dl').next().removeClass('dn');
        })

        $('#delProfile').click(function() {
            $(this).parents('dl').addClass('dn');
            $(this).parents('dl').next().removeClass('dn');
        })

        $('.stage_edit').click(function() {
            $(this).parents('dt').next().find('.stageshow').addClass('dn');
            $(this).parents('dt').next().find('form').removeClass('dn');
        })

        $('#cancelStages').click(function() {
            $(this).parents('form').addClass('dn');
            $(this).parents('form').prev().removeClass('dn');
        })

        $('.member_delete').click(function() {
            if (confirm('are you sur')){
                $.ajax({
                    url : "/index.php/Home/CompanyTeam/delete.html",
                    data : $(this).parents('form').serialize(),
                    type : 'post',
                    sussecc : function(data) {
                    }
                })
                $(this).parents('.member_wrap').empty();
            } else {
                $(this).parents('.member_info').addClass('dn');
                $(this).parents('.member_info').next().removeClass('dn');
            }
        })

    })
</script>


<div style="display: none;" id="cboxOverlay"></div><div style="display: none;" tabindex="-1" role="dialog" class="" id="colorbox"><div id="cboxWrapper"><div><div style="float: left;" id="cboxTopLeft"></div><div style="float: left;" id="cboxTopCenter"></div><div style="float: left;" id="cboxTopRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxMiddleLeft"></div><div style="float: left;" id="cboxContent"><div style="float: left;" id="cboxTitle"></div><div style="float: left;" id="cboxCurrent"></div><button id="cboxPrevious" type="button"></button><button id="cboxNext" type="button"></button><button id="cboxSlideshow"></button><div style="float: left;" id="cboxLoadingOverlay"></div><div style="float: left;" id="cboxLoadingGraphic"></div></div><div style="float: left;" id="cboxMiddleRight"></div></div><div style="clear: left;"><div style="float: left;" id="cboxBottomLeft"></div><div style="float: left;" id="cboxBottomCenter"></div><div style="float: left;" id="cboxBottomRight"></div></div></div><div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div></div>
</body>
</html>