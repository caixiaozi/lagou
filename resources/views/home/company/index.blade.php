@extends('home/layout/nav')



@section('css')
{{--    <script type="text/javascript">
        $(function () {
            $(".logo").change(function () {
//                alert(111);
                var $file = $(this);
//            console.log($file);
                var objUrl = $file[0].files[0];
                //获得一个http格式的url路径:mozilla(firefox)||webkit or chrome
                var windowURL = window.URL || window.webkitURL;
                //createObjectURL创建一个指向该参数对象(图片)的URL
                var dataURL;
                dataURL = windowURL.createObjectURL(objUrl);

                $("#img123").attr("src",dataURL);
                $("#logoNo").css('display', 'none');
                $("#logoShow").css('display', 'block')
            });

            $("#comForm").submit(function () {
//                console.log(new FormData($("#comForm")[0]));
                $.ajax({
                    url:"{{ url('home/uploadCom') }}",
                    data:new FormData($("#comForm")[0]),
                    type:'post',
                    processData: false,
                    contentType: false,
                    cache: false,
                    success:function (data) {
                        if(data == "公司信息添加失败") {
                            alert("系统繁忙");
                        } else {
                            alert(data);
                            location.href = "{{ url('home/company/company') }}";
                        }
//                        console.log(data);

                    },
                    error:function () {
                        alert("系统繁忙");
                    }
                });
                return false;
            });
        })

    </script>--}}
@endsection


@section('middle')


    <div id="container">

        <div style="" id="stepTip">
            <a></a>
            <img width="803" height="59" src="{{ asset('home/company/style/images/tiponce.jpg') }}">
        </div>
        <div class="content_mid">
            <dl class="c_section c_section_mid">
                <dt>
                <h2><em></em>填写公司信息</h2>
                </dt>
                <dd>
                    <form id="comForm" action="{{ url('company/uploadCom') }}" method="post" enctype="multipart/form-data">
                        <div class="c_text_1">基本信息为必填项，是求职者加速了解公司的窗口，认真填写吧！</div>
                        <img width="668" height="56" class="c_steps" alt="第一步" src="{{ asset('home/company/style/images/step1.png') }}">

                        <h3>公司名称</h3> <!--非必填-->
                        <input type="text" placeholder="请输入公司名称" value="" name="name" id="name" class="valid">
                        <h3>公司LOGO</h3> <!--非必填改必填-->
                        <div class="c_logo c_logo_pos">
                            {{--<a title="上传公司LOGO" class="inline cboxElement" href="#logoUploader">--}}
                            <input type="file" value="" name="logo" class="logo" >
                            <div id="logoNo">
                                <span>上传公司LOGO</span> <br>
                                尺寸：190*190px <br>
                                大小：小于5M
                            </div>
                            <div class="dn" id="logoShow">
                                <img id="img123" width="190" height="190" alt="公司logo" src="">

                            </div>
                            </a>
                        </div>

                        <h3>公司网址</h3>
                        <input type="text" placeholder="请输入公司网址" value="" name="website" id="website">
                        <h3>公司电话</h3>
                        <input type="text" placeholder="请输入公司电话" value="" name="phone" id="phone">
                        <h3>公司邮箱</h3>
                        <input type="text" placeholder="请输入公司邮箱" value="" name="email" id="email">

                        <h3>所在城市</h3>
                        <input type="text" placeholder="请输入工作城市，如：北京" name="city" id="city">

                        <h3>行业领域</h3>
                        <div>
                            <input type="hidden" value="" name="select_industry_hidden" id="select_industry_hidden">
                            <input type="button" value="请选择行业领域" name="select_industry" id="select_industry"
                                   class="select">
                            <div class="dn" id="box_industry" style="display: none;">
                                <ul class="reset">
                                    <li>移动互联网</li>
                                    <li>电子商务</li>
                                    <li>社交</li>
                                    <li>企业服务</li>
                                    <li>O2O</li>
                                    <li>教育</li>
                                    <li>文化艺术</li>
                                    <li>游戏</li>
                                    <li>在线旅游</li>
                                    <li>金融互联网</li>
                                    <li>健康医疗</li>
                                    <li>生活服务</li>
                                    <li>硬件</li>
                                    <li>搜索</li>
                                    <li>安全</li>
                                    <li>运动体育</li>
                                    <li>云计算\大数据</li>
                                    <li>移动广告</li>
                                    <li>社会化营销</li>
                                    <li>视频多媒体</li>
                                    <li>媒体</li>
                                    <li>智能家居</li>
                                    <li>智能电视</li>
                                    <li>分类信息</li>
                                    <li>招聘</li>
                                </ul>
                            </div>
                        </div>

                        <h3>公司规模</h3>
                        <div>
                            <input type="hidden" value="" name="select_scale_hidden" id="select_scale_hidden">
                            <input type="button" value="请选择公司规模" id="select_scale" class="select">
                            <div class="dn" id="box_scale" style="display: none;">
                                <ul class="reset">
                                    <li>少于15人</li>
                                    <li>15-50人</li>
                                    <li>50-150人</li>
                                    <li>150-500人</li>
                                    <li>500-2000人</li>
                                    <li>2000人以上</li>
                                </ul>
                            </div>
                        </div>
                        {{ csrf_field() }}

                        <h3>一句话介绍</h3>
                        <input type="text" placeholder="一句话概括公司亮点，如公司愿景、领导团队等，限50字" maxlength="50" name="temptation"
                               id="temptation">
                        <span style="display:none;" class="error" id="beError"></span>
                        <input type="submit" value="保存" id="stepBtn" class="btn_big fr">
                    </form>
                </dd>
            </dl>
        </div>

        <!------------------------------------- end ----------------------------------------->

        <script src="style/js/step1.min.js" type="text/javascript"></script>
        <script>
            var avatar = {};
            avatar.uploadComplate = function (data) {
                var result = eval('(' + data + ')');
                if (result.success) {
                    jQuery('#logoShow img').attr("src", ctx + '/' + result.content);
                    jQuery.colorbox.close();
                    jQuery('#logoNo').hide();
                    jQuery('#logoShow').show();
                }
            };
        </script>
        <div class="clear"></div>
        <input type="hidden" value="13ae35fedd9e45cdb66fb712318d7369" id="resubmitToken">
        <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
    </div><!-- end #container -->
    </div><!-- end #body -->
@endsection