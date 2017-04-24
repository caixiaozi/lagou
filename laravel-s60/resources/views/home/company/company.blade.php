@extends('home/layout/nav')

@section('css')
    <style>
        h1{
            font-size: 18px;
            color:black;
            margin-left:20px;
        }
    </style>
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
                <h2>公司信息</h2>
                </dt>
                <dd><h2 style="margin-left: 200px;"><a href="{{ url('company/companyEdt') }}">修改信息</a></h2>
                    <form id="comForm" action="{{ url('home/uploadCom') }}" method="post" enctype="multipart/form-data">

                        <h3>公司名称</h3> <!--非必填-->
                        <h1>{{ $info->name }}（ <span style="color:red;">{{ $info->audit == 0 ? '公司资格尚未通过审核，无法发布岗位' : '公司资格已通过审核，可以发布岗位'}}</span>）</h1>

                        <h3>公司LOGO</h3> <!--非必填改必填-->

                        <img src="{{ asset($info->logo) }}" alt="" width="190" height="190">

                        <h3>公司网址</h3>
                        <h1>{{ $info->web }}</h1>
                        <h3>公司电话</h3>
                        <h1>{{ $info->phone }}</h1>
                        <h3>公司邮箱</h3>
                        <h1>{{ $info->email }}</h1>

                        <h3>所在城市</h3>
                        <h1>{{ $info->address }}</h1>

                        <h3>行业领域</h3>
                        <h1>{{ $info->type }}</h1>

                        <h3>公司规模</h3>
                        <h1>{{ $info->scale }}</h1>
                        {{ csrf_field() }}

                        <h3>一句话介绍</h3>
                        <h1>{{ $info->desc }}</h1>
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