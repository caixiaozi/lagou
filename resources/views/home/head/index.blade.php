@extends('home.layout.head')
@section('content')
    <div id="container">
        <div class="clearfix">
            <div class="content_l">
                <div class="c_detail">


                    <div style="background-color:#fff;" class="c_logo">
                        <form action="/head/logo" method="post" enctype="multipart/form-data">
                            <a title="上传公司LOGO" id="logoShow">
                                <img id='imgg' alt="公司logo" src="{{url('home/head/images/CgqKkVcYgQqAITsCAAB8Y9K2ODM523.png')}}" height="190" width="190">
                                <span>
            更换公司图片
            <br>
            190px*190px 小于5M
        </span>
                                <input required title="支持jpg、jpeg、gif、png格式，文件小于5M"  name="logo" type="file">
                                <!-- 公司id session获取 -->
                                <input type="hidden" name="id" value="">
                                {{csrf_field()}}
                                <input type="submit" value="更换logo" style="position: absolute; left: 133px; top: 170px;">
                            </a>
                        </form>
                    </div>





                    <!-- ///////////////// -->
                    <!-- 修改公司名 -->

                    <div class="c_box companyName">
                        <h2 title="不知道叫啥">
                            叫啥重要吗 </h2>
                        <em class="unvalid"></em>
                        <span style="display: none;" class="va dn">
               '未验证','禁用','已认证','未认证','申请认证'
            </span>
                        <a style="text-decoration:none;" target="_blank" class="applyC" href="/head/shenqing">

                        </a><div class="clear"></div>
                        <h1 title="" class="fullname">
                          不知道叫啥&nbsp;&nbsp;&nbsp;&nbsp;
                            <a style="font-size:13px" id="firm_title">编辑</a></h1>
                        <!--  -->



                        <div class="clear oneword">
                            <img src="{{url('/home/head/images/yh1.png')}}" height="15" width="17">
                            &nbsp;
                            <span>
                            </span>
                            &nbsp;
                            <img src="/home/head/images/yh2.png" height="15" width="17">
                        </div>
                        <!-- 修改公司名 -->
                        <form id ='firm_titform'; style = "display:none" action="/head/edd" method="post"  class="" >
                            <input required style="width:390px;" placeholder="请输入公司名称" maxlength="15" value="" name="name"  type="text">
                        {{csrf_field()}}
                        <!-- 合项目时session获取 -->
                            <input type="hidden" name='id' value = "">
                            <input required style="width:390px;" placeholder="请输入公司简称" maxlength="15" value="" name="short_name"  type="text">
                            <input required style="width:390px;" placeholder="一句话描述公司优势，核心价值，限50字" maxlength="50" value="" name="one_desc"  type="text">
                            <input value="保存"  class="btn_small" type="submit">
                            <a  id="firm_tit" class="btn_cancel_s">
                                取消
                            </a>
                        </form>

                        <!-- js代码 -->
                        <script type="text/javascript">

                            $('#firm_title').click(function(){

                                var d = $('#firm_titform').css("display");
                                //console.log(d);

                                if(d == 'none'){

                                    $('#firm_titform').css('display','block');
                                }else{
                                    $('#firm_titform').css('display','none');
                                }

                            })

                            $('#firm_tit').click(function(){

                                $('#firm_titform').css('display','none')
                            })
                        </script>
                        <!-- /////////////////// -->







                        <h3 class="dn">
                            已选择标签
                        </h3>
                        <ul style="overflow:auto" id="hasLabels" class="reset clearfix">



                                <form action="/head/ttag" method="post" class="fl">
                                    <!-- 企业idsession获取 -->
                                    <input type="hidden" name="company_id" value="">
                                    {{csrf_field()}}
                                    <input type="hidden" name="tag_id" value="">
                                    <li><span><button>FireWork</button></span></li>
                                </form>


                            <li class="link">
                                编辑
                            </li>

                        </ul>
                        <div class="dn" id="addLabels">
                            <form action="/head/ggta" method="post">

                            {{csrf_field()}}
                            <!-- 企业idsession获取 -->
                                <input type="hidden" name="company_id" value="" >
                                <tr>
                                    <input value="贴上" class="fr"  type="submit" style="width:50px">
                                    <input placeholder="添加自定义标签" name="name" class=" fr" type="text" style="width:110px" required>
                                </tr>
                            </form>
                            <div class="clear"></div>

                            <ul>


                                    <form action="/head/tag" method="post" class='fr'>
                                        <!-- 企业idsession获取 -->
                                        <input type="hidden" name="company_id" value="">
                                        {{csrf_field()}}
                                        <input type="hidden" name="tag_id" value="">
                                        <li><button>Haha</button></li>
                                    </form>


                            </ul>



                            <a style="text-decoration:none;" id="cancelLabels" class="btn_cancel_s" href="javascript:void(0)">
                                关闭
                            </a>
                        </div>
                    </div>
                    <a style="text-decoration:none;" title="编辑基本信息" class="c_edit" id="editCompanyDetail" href="javascript:void(0);"></a>
                    <div class="clear"></div>
                </div>


                <!-- ////////////////////////////// -->
                <div class="c_breakline"></div>
                <div id="Product">
                    <div class="product_wrap no_product">



                        <!--有产品-->




                            <div class="qwq">
                                <dl class="c_section">
                                    <dt>
                                    <h2>
                                        <em></em>
                                        公司产品
                                    </h2>
                                    </dt>


                                    <dd style = "display:block" class="chpi">

                                        <div ><img alt="" src="{{url('home/head/images/yh1.png')}}" height="220" width="380">
                                            <div style="width: 220px; height: 220px; float: right;">

                                                <div style="height: 30px; overflow:hidden;" >产品名称:&nbsp;&nbsp;手机</div>
                                                <br>产品定位
                                                <div style="height: 100px; overflow: auto;">大众群体</div>
                                                <br>
                                                <a title="编辑公司产品" class="xiugai">编辑公司产品
                                                </a>&nbsp;&nbsp;
                                                <a title="删除公司产品" href="/head/dell">删除公司产品
                                                </a>

                                            </div></div>
                                    </dd>

                                    <!-- ////////////// -->

                                    <dd style = "display:none" class="prod">
                                        <form method="post"  action="/head/prod" enctype="multipart/form-data">
                                            <div >

                                                <img alt="" src="{{url('home/head/images/yh2.png')}}" height="220" width="380">

                                                <div style="width: 220px; height: 220px; float: right;">
                                                    <input type="hidden" name="id" value="{">
                                                    <input required type="file" name="image" value="">
                                                    <input type="hidden" name="company_id" value="">
                                                    <!-- 公司id以后获取session -->
                                                    产品名称:
                                                    <input required type="text" name="name" value="手提包" style="font-size:15px; width:130px; height:15px">
                                                    产品网址<input required type="text" name="link" value="www.taobao.com"  style="font-size:15px; width:130px; height:15px">
                                                    <br>产品定位
                                                    <input type="text" required name="desc" value="大众群体"  style="font-size:20px; width:130px; height:25px;">
                                                    <br>
                                                    <br>
                                                    {{csrf_field()}}

                                                    <input type="submit" value="保存">
                                                    &nbsp;&nbsp;
                                                    <a title="返回" class="tuichu">返回
                                                    </a>

                                                </div></div>

                                        </form>
                                    </dd></dl></div>



                    <!--无产品 -->
                        <dl id="chanpin" style = "display:block" class="c_section">
                            <dt>
                            <h2>
                                <em></em>
                                公司产品
                            </h2>
                            </dt>
                            <dd>
                                <div class="addnew">
                                    酒香不怕巷子深已经过时啦！
                                    <br>
                                    把自己优秀的产品展示出来吸引人才围观吧！
                                    <br>
                                    <a id="tianjia">
                                        +添加公司产品
                                    </a>
                                </div>
                            </dd>
                        </dl>


                        <!-- QQQQQQQQQQQQQQQQQQQQQQQQQQQQ -->

                        <!-- 编辑产品 -->
                        <dl id="bianji" style = "display:none" class="newProduct">
                            <dt>
                            <h2 style="background:#91cebe">
                                <em></em>
                                公司产品
                            </h2>
                            </dt>
                            <dd>
                                <form method="post" class="productForm"  action="/head/product" enctype="multipart/form-data">
                                    <div class="new_product">
                                        <div class="product_upload  productNo">
                                            <div>
                    <span>
                        上传产品图片
                    </span>
                                                <br>
                                                尺寸：380*220px 大小：小于5M
                                            </div>
                                        </div>
                                        <div class="product_upload productShow">
                                            <img src="{{url('home/head/images/product_default.png')}}" height="220" width="380">
                                            <span>
                    更换产品图片
                    <br>
                    380*220px 小于5M
                </span>
                                        </div>
                                        <input required title="支持jpg、jpeg、gif、png格式，文件小于5M" name="image" type="file">
                                    </div>
                                    <div class="cp_intro">
                                        <input required placeholder="请输入产品名称" name="name" type="text">
                                        <input required placeholder="请输入产品网址" name="link" type="text">
                                        <input type="hidden" name="company_id" value="">
                                        <!-- 公司id以后获取session -->
                                        <textarea required placeholder="请简短描述该产品定位、产品特色、用户群体等" maxlength="500" value="" class="s_textarea" name="desc"></textarea>
                                        <div class="word_count fr">
                                            你还可以输入
                                            <span>
                    500
                </span>
                                            字
                                        </div>
                                        <div class="clear">
                                        </div>
                                        {{csrf_field()}}
                                        <input value="保存" class="btn_small" type="submit">
                                        <a id="fanhui" class="btn_cancel_s product_delete">
                                            返回
                                        </a>
                                        <input value="" class="product_id" type="hidden">
                                    </div>
                                </form>
                            </dd>
                        </dl>


                    </div>
                </div>

                <!-- ///////////// -->
                <script type="text/javascript">

                    //显示编辑,隐藏无产品
                    $('#tianjia').click(function(){

                        $('#bianji').css('display','block');
                        $('#chanpin').css('display','none');

                    })


                    //返回
                    $('#fanhui').click(function(){

                        $('#chanpin').css('display','block');
                        $('#bianji').css('display','none');

                    })




                    ///////////


                    //显示修改,隐藏产品
                    // $('.xiugai').click(function(){

                    //     $('.prod').css('display','block');
                    //     $('.chpi').css('display','none');

                    // })
                    $('.xiugai').each(function(){
                        $(this).click(function(){
                            // $(this).css

                            $(this).parents('.chpi').css('display','none');
                            $(this).parents('.qwq').find('.prod').css('display','block');

                        })
                    })

                    //退出
                    $('.tuichu').each(function(){

                        $(this).click(function(){

                            $(this).parents('.prod').css('display','none');
                            $(this).parents('.qwq').find('.chpi').css('display','block');

                        })
                    })
                </script>
                <!-- //////////////// -->






                <!-- end #Product -->
                <div id="Profile">
                    <div class="profile_wrap">




                        <!-- 显示介绍 -->
                        <dl class="c_section" id="gsjs" style = "display:block">
                            <dt>
                            <h2>
                                <em></em>
                                公司介绍
                            </h2>
                            </dt>
                            <dd>
                                <div class="addnew" style="height:75px; overflow: auto;">
                                   大众群体
                                </div><br>
                                <div>
                                    <a style="color:#0d9572;" class="addnew" id="tjjs">
                                        + 公司介绍
                                    </a>
                                </div>
                            </dd>
                        </dl>

                        <!--编辑介绍-->
                        <dl class="c_section newIntro" id="jieshao" style = "display:none">
                            <dt>
                            <h2>
                                <em></em>
                                公司介绍
                            </h2>
                            </dt>
                            <dd>
                                <form id="companyDesForm" action="/head/desc" method="post">
                                    <textarea required placeholder="请分段详细描述公司简介、企业文化等" name="desc" id="companyProfile"></textarea>
                                    <div class="word_count fr">
                                        你还可以输入
                                        <span>
                    1000
                </span>
                                        字
                                    </div>
                                    <div class="clear"></div>
                                    {{csrf_field()}}
                                    <input type="hidden" name="id" value="">
                                    <input value="保存" id="submitProfile" class="btn_small" type="submit">
                                    <a  class="btn_cancel_s" id="quiao">
                                        取消
                                    </a>
                                </form>
                            </dd>
                        </dl>





                    </div>
                </div>


                <script type="text/javascript">

                    //显示编辑
                    $('#tjjs').click(function(){

                        $('#jieshao').css('display','block');
                        $('#gsjs').css('display','none');

                    })


                    //返回
                    $('#quiao').click(function(){

                        $('#gsjs').css('display','block');
                        $('#jieshao').css('display','none');

                    })


                </script>

                <dl class="c_section">
                    <dt>
                    <h2>
                        <em></em>
                        发展历程
                    </h2>
                    <dd>
                        <ul class="reset c_jobs" id="jobList">



                                <div class="viiv">
                                    <li class="lcfy" style = "display:block">
                                        <a style="text-decoration:none;" class="llvv">
                                            <h3>
                        <span class="pos" title="2017-04-11">
                           2017-08-22</span>
                                                <span>

                        </span>
                                            </h3>
                                            <div>
                                                家里有事                                          </div>
                                        </a>
                                    </li>

                                    <form action="/head/licheng" method="post" class="ixi" style = "display:none">
                                        <input required type="text" name='time' value="2017-04-11" placeholder="历程时间">
                                        <input required type="text" name='shijian' value="家中有事" placeholder="历程事件">
                                        <br><br>
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value=''>
                                        <input type="submit" value="&nbsp;&nbsp;添加&nbsp;&nbsp;" class="fr">
                                        <input type="submit" formaction="/head/lichen" value="&nbsp;&nbsp;修改&nbsp;&nbsp;" class="fr">
                                        <a href="/head/lich" class="fr">删除</a>
                                        <a class="ffh fr">返回</a><br><br><br>
                                    </form>

                                </div>


                            <a id="qil">+添加</a>

                            <form action="/head/licheng" method="post" id="ixi" style = "display:none">
                                <input required type="text" name='time' value="2017-04-11" placeholder="历程时间">
                                <input required type="text" name='shijian' placeholder="历程事件">
                                <br><br>
                                {{csrf_field()}}
                                <input type="submit" value="添加" class="fr">

                                <a class="fr" id="ffh">返回</a><br>
                            </form>

                            <script type="text/javascript">

                                $('.llvv').each(function(){
                                    $(this).click(function(){
                                        // $(this).css

                                        $(this).parents('.lcfy').css('display','none');
                                        $(this).parents('.viiv').find('.ixi').css('display','block');

                                    })
                                })

                                $('.ffh').each(function(){
                                    $(this).click(function(){
                                        // $(this).css

                                        $(this).parents('.ixi').css('display','none');
                                        $(this).parents('.viiv').find('.lcfy').css('display','block');

                                    })
                                })

                                $('#qil').click(function(){
                                    $('#ixi').css('display','block');
                                })

                                $('#ffh').click(function(){
                                    $('#ixi').css('display','none');
                                })

                            </script>

                        </ul>
                    </dd>
                </dl>


                <div id="flag">


                </div>
            </div>






            <!-- //////////////////// -->

            <!-- end .content_l -->
            <div class="content_r">
                <div id="Tags">
                    <div id="c_tags_show" class="c_tags solveWrap" style = "display:block">

                        <form action=""></form>
                        <table>
                            <tbody>
                            <tr>
                                <td width="60">
                                    地点
                                </td>
                                <td class="companyCity">
                                    江苏</td>
                            </tr>
                            <tr>
                                <td>
                                    领域
                                </td>
                                <!-- 支持多选 -->
                                <td title="贸易" class="companyTrade">
                                   软件</td>
                            </tr>
                            <tr>
                                <td>
                                    规模
                                </td>
                                <td class="companyScale">
                                   '少于十五人','十五~五十人','五十~二百','二百~五百','五百~两千','大于两千人'
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    主页
                                </td>
                                <td>
                                    <a style="text-decoration:none;" rel="nofollow" title="http://www.weimob.com" target="_blank" href="http://www.xiaoxiaozixun.com/" class="companyWeb">
                                        http://www.xiaoxiaozixun.com/</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    操作
                                </td>
                                <td>
                                    <a id="qweeq" style="text-decoration:none;" rel="nofollow" title="修改" class="companyWeb">
                                        修改</a>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                        <a style="text-decoration:none;" id="editTags" class="c_edit" href="javascript:void(0)">
                        </a>
                    </div>



                    <!-- /////////////////////// -->

                    <div id="c_tags_edit" class="c_tags editTags" style = "display:none">
                        <form id="tagForms" action="/head/jiben" method="post">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        地点
                                    </td>
                                    <td>
                                        <input required placeholder="请输入地点" value="北京" name="city" id="city" type="text">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        领域
                                    </td>
                                    <!-- 支持多选 -->
                                    <td>
                                        <input value="生活服务" id="industryField" name="trade" type="hidden">
                                        <input style="background:none;cursor:default;border:none !important;" disable="disable" value="生活服务" id="select_ind" class="select_tags" type="button">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        规模
                                    </td>
                                    <td>
                                        <select required name="scale" class="select_tags_short fl">
                                            <option value="0">少于15人</option>
                                            <option value="1">15-50人</option>
                                            <option value="2">50-150人</option>
                                            <option value="3">150-500人</option>
                                            <option value="4">500-2000人</option>
                                            <option value="5">2000人以上</option>
                                        </select>

                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        主页
                                    </td>
                                    <td>
                                        <input required placeholder="请输入网址" value="http://www.lagou.com" name="web" id="companyUrl" type="text">
                                    </td>
                                </tr>
                                </tbody>
                            </table>


                            {{csrf_field()}}
                            <input type="hidden" name="id" value="">
                            <input value="保存" id="submitFeatures" class="btn_small" type="submit">



                            <a style="text-decoration:none;" id="cancelFeatures" class="btn_cancel_s">
                                取消
                            </a>
                            <div class="clear">
                            </div>
                        </form>
                    </div>
                </div>


                <!-- ///////////////////// -->
                <script type="text/javascript">
                    $('#qweeq').click(function(){


                        $('#c_tags_edit').css('display','block');
                        $('#c_tags_show').css('display','none');

                    })

                    $('#cancelFeatures').click(function(){

                        $('#c_tags_show').css('display','block');
                        $('#c_tags_edit').css('display','none');

                    })

                </script>


                <!-- end #Tags -->
                <dl class="c_section c_stages">
                    <dt>
                    <h2>
                        <em></em>
                        融资阶段
                    </h2>

                    </dt>
                    <dd>
                        <ul class="reset stageshow" id="rongrzi" style = "display:block">
                            <li>
                                目前阶段：
                                <span class="c5">
                   '天使轮','A轮','B轮','C轮','D轮及以上','上市公司','不需要融资'</span>
                            </li>
                            <li>
                                <a class="qwert">
                                    修改
                                </a>
                            </li>
                        </ul>


                        <!-- //////// -->
                        <form id="stageform" action="/head/state" method="post" style = "display:none">
                            <div class="stageSelect">
                                <label>

                                </label>
                                <input type="hidden" name="id" value="">
                                <select required name="stage" class="select_tags_short fl" style="width:160px;">
                                    <option value="0">天使轮</option>
                                    <option value="1">A轮</option>
                                    <option value="2">B轮</option>
                                    <option value="3">C轮</option>
                                    <option value="4">D轮及以上</option>
                                    <option value="5">上市公司</option>
                                    <option value="6">不需要融资</option>
                                </select>
                            </div>
                            {{csrf_field()}}
                            <input value="保存" class="btn_small" type="submit">
                            <a style="text-decoration:none;" id="cancelStages" class="btn_cancel_s">
                                取消
                            </a>
                            <div class="clear"></div>
                        </form>




                    </dd>


                </dl>



                <script type="text/javascript">
                    $('.qwert').click(function(){


                        $('#stageform').css('display','block');
                        $('.qwert').css('display','none');

                    })

                    $('#cancelStages').click(function(){

                        $('.qwert').css('display','block');
                        $('#stageform').css('display','none');

                    })

                </script>


                <!-- .................... -->

                <div id="Member">
                    <!--有创始团队-->
                    <dl class="c_section c_member">
                        <dt>
                        <h2>
                            <em></em>
                            创始团队
                        </h2>
                        </dt>
                        <dd>
                            <div class="member_wrap noTeam">
                                <!-- ///////// -->

                                <!-- ////////////// -->


                                    <div class="member_info qaza" >
                                        <div class="vvvtt" style = "display:black">
                                            <div class="m_portrait">
                                                <div></div>
                                                <img alt="" src="{{url('home/head/images/yh1.png')}}" height="120" width="120">
                                            </div>
                                            <div class="m_name">
                                               蔡小净
                                            </div>

                                            <div class="m_position">
                                                董事长
                                            </div>
                                            <div class="m_intro">

                                                来自浙江温州
                                            </div>
                                            <br>
                                            <br>

                                            <a>操作</a>
                                            <a class="fr member_edit" href="/head/shan">
                                                +删除成员
                                            </a>
                                            <a  class="fr tuandui" id="">
                                                +修改成员
                                            </a>


                                            <hr><br>

                                        </div>



                                        <!-- 编辑创始人 -->
                                        <div class="member_info newMember shi" style = "display:none" >
                                            <form class="memberForm" id="wwwff" action="/head/tuandui" method="post" enctype="multipart/form-data">


                                                <div class="new_portrait">
                                                    <div class="portrait_upload dn portraitNo">
                                <span>
                                    上传创始人头像
                                </span>
                                                    </div>
                                                    <div class="portraitShow">
                                                        <img src="" height="120" width="120">
                                                        <span>
                                    更换头像
                                </span>
                                                    </div>
                                                    <input required value="" name="image" title="支持jpg、jpeg、gif、png格式，文件小于5M" type="file">
                                                    <em>
                                                        尺寸：120*120px
                                                        <br>
                                                        大小：小于5M
                                                    </em>
                                                </div>


                                                {{csrf_field()}}


                                                <input required placeholder="请输入创始人姓名" name="name" type="text">

                                                <input required placeholder="请输入创始人当前职位" name="position" type="text">
                                                <input placeholder="请输入创始人新浪微博地址" name="weibo" type="text">
                                                <textarea required placeholder="请输入创始人个人简介" maxlength="500" class="s_textarea" name="desc"></textarea>
                                                <div class="word_count fr">
                                                    你还可以输入
                                                    <span>
                                500
                            </span>
                                                    字
                                                </div>
                                                <div class="clear"></div>
                                                <input type="hidden" name="company_id" value="">
                                                <input value="保存" class="btn_small" type="submit">
                                                <a style="text-decoration:none;" class="btn_cancel_s tti">
                                                    返回
                                                </a>
                                            </form>
                                        </div>

                                    </div>


                                <a style="text-decoration:none;" class="fr member_edit" id="ceo">
                                    +添加成员
                                </a>
                            </div>


                            <!-- 编辑创始人 -->
                            <div class="member_info newMember" id="shiii" style = "display:none" >
                                <form class="memberForm" id="wwwff" action="/head/tuandui" method="post" enctype="multipart/form-data">


                                    <div class="new_portrait">
                                        <div class="portrait_upload dn portraitNo">
                                <span>
                                    上传创始人头像
                                </span>
                                        </div>
                                        <div class="portraitShow">
                                            <img src="" height="120" width="120">
                                            <span>
                                    更换头像
                                </span>
                                        </div>
                                        <input required value="" name="image" title="支持jpg、jpeg、gif、png格式，文件小于5M" type="file">
                                        <em>
                                            尺寸：120*120px
                                            <br>
                                            大小：小于5M
                                        </em>
                                    </div>


                                    {{csrf_field()}}


                                    <input required style="width:160px;" placeholder="请输入姓名" name="name" type="text">

                                    <input required style="width:160px;" placeholder="请输入当前职位" name="position" type="text">
                                    <input style="width:160px;" placeholder="请输入新浪微博地址" name="weibo" type="text">
                                    <br>
                                    <textarea required style="width:180px;" placeholder="请输入个人简介" maxlength="500" class="s_textarea" name="desc"></textarea>
                                    <div class="word_count fr">
                                        你还可以输入
                                        <span>
                                500
                            </span>
                                        字
                                    </div>
                                    <div class="clear"></div>
                                    <input type="hidden" name="company_id" value="">
                                    <input style="width:85px;" value="保存" class="btn_small" type="submit">
                                    <a style="text-decoration:none;" class="btn_cancel_s ttiii">
                                        返回
                                    </a>
                                </form>
                            </div>



                </div>

                <script type="text/javascript">



                    $('#ceo').click(function(){

                        $('.qaza').css('display','none');
                        $('#shiii').css('display','block');

                    })

                    $('.ttiii').click(function(){

                        $('.qaza').css('display','block');
                        $('#shiii').css('display','none');

                    })

                    $('.tuandui').each(function(){
                        $(this).click(function(){


                            classid = $(this).attr('id');

                            console.log(classid);

                            $(this).parents('.vvvtt').css('display','none');
                            $(this).parents('.qaza').children('.shi').css('display','block');

                        })

                        $('.btn_small').click(function(){
                            $('#wwwff').prepend("<input type='hidden' name='id' value='"+classid+"' />");
                        });
                    })

                    $('.tti').click(function(){

                        $('.vvvtt').css('display','block');
                        $('.shi').css('display','none');

                    })
                </script>
                <!-- end .member_wrap -->
                </dd>
                </dl>
            </div>
@endsection