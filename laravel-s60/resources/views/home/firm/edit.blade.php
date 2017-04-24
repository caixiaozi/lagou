@extends('home.layout.firm')
@section('content')
    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em>
                </em>
                发布新职位
            </h1>
            </dt>
            <dd>
                <form action="{{url('alter')}}" method="post" id="jobForm" name="jobForm" onsubmit="">
                    <input name="id" value="" type="hidden">
                    <table class="btm">
                        <tbody>
                        <tr>
                            <td width="25">
                            <span class="redstar">
                                *
                            </span>
                            </td>
                            <td width="85">
                                职位类别
                            </td>
                            <td>
                                <input style="font-size:15px" id="positionType" value="" name="cate_id" type="hidden">
                                <input style="font-size:15px" placeholder="请选择职位类别" id="select_category" class="selectr selectr_380" value="" type="button">
                                <div class="dn" id="box_job" style="display:none">
                                    <dl>
                                        @foreach($data['cate'] as $k => $v)
                                            <dt>{{$k}}</dt>
                                            <dd>
                                                @foreach($v as $ke => $val)

                                                    <ul class="reset job_main">
                                                        <li>
                                                            <span>{{$ke}}</span>
                                                            <ul class="reset job_sub dn">
                                                                @foreach($val as $key => $value)
                                                                    <li>{{$value}}</li>
                                                                @endforeach

                                                            </ul>
                                                        </li>



                                                    </ul>
                                                @endforeach
                                            </dd>
                                        @endforeach
                                    </dl>
                                </div>
                            </td></tr><tr>
                            <td>
                <span class="redstar">
                    *
                </span>
                            </td>
                            <td>
                                职位名称
                            </td>
                            <td>
                                <input required placeholder="请输入职位名称，如：产品经理" name="name" value="项目经理" id="positionName" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                            </td>
                            <td>
                                所属部门
                            </td>
                            <td>
                                <input required placeholder="请输入所属部门" name="branch" value="技术部" id="department" type="text">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="btm">
                        <tbody>
                        <tr>
                            <td width="25">
                    <span class="redstar">
                        *
                    </span>
                            </td>
                            <td width="85">
                                工作性质
                            </td>
                            <td>
                                <ul class="profile_radio clearfix reset">
                                    <li class="current">
                                        全职
                                        <em>
                                        </em>
                                        <input checked="checked" class="valid" name="nature" value="全职" type="radio">
                                    </li>
                                    <li class="">
                                        兼职
                                        <em>
                                        </em>
                                        <input class="valid" name="nature" value="兼职" type="radio">
                                    </li>
                                    <li class="">
                                        实习
                                        <em>
                                        </em>
                                        <input  class="valid" name="nature" value="实习" type="radio">
                                    </li>
                                </ul>
                            </td>
                        </tr>
                        <tr>
                            <td>
                    <span class="redstar">
                        *
                    </span>
                            </td>
                            <td>
                                月薪范围
                            </td>
                            <td>
                                <div class="salary_range">
                                    <div>
                                        <input required placeholder="最低月薪" id="salary_low" name="salary_low" value="8000" type="number">
                                        <span>
                                k
                            </span>
                                    </div>
                                    <div>
                                        <input required placeholder="最高月薪" id="salary_high" name="salary_high" value="20000000" type="number">
                                        <span>
                                k
                            </span>
                                    </div>
                                    <span>
                            只能输入整数，如：9
                        </span>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                    <span class="redstar">
                        *
                    </span>
                            </td>
                            <td>
                                工作城市
                            </td>
                            <td>
                                <input required placeholder="请输入工作城市，如：北京" name="city" value="重庆" id="workAddress" type="text">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="btm">
                        <tbody>
                        <tr>
                            <td width="25">
                        <span class="redstar">
                            *
                        </span>
                            </td>
                            <td width="85">
                                工作经验
                            </td>
                            <td>
                                <input id="experience" value="7年" name="work_year" type="hidden">
                                <input required placeholder="请选择工作经验" id="select_experience" class="selectr selectr_380" value="7年" type="button">
                                <div class="boxUpDown boxUpDown_380 dn" id="box_experience" style="display:none">
                                    <ul>
                                        <li>
                                            不限
                                        </li>
                                        <li>
                                            应届毕业生
                                        </li>
                                        <li>
                                            1年以下
                                        </li>
                                        <li>
                                            1-3年
                                        </li>
                                        <li>
                                            3-5年
                                        </li>
                                        <li>
                                            5-10年
                                        </li>
                                        <li>
                                            10年以上
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
        <span class="redstar">
            *
        </span>
                            </td>
                            <td>
                                学历要求
                            </td>
                            <td>
                                <input id="education" value="大专以上" name="edu" type="hidden">
                                <input required placeholder="请选择学历要求" id="select_education" class="selectr selectr_380" value="不限" type="button">
                                <div class="boxUpDown boxUpDown_380 dn" id="box_education" style="display:none">
                                    <ul>
                                        <li>
                                            不限
                                        </li>
                                        <li>
                                            大专
                                        </li>
                                        <li>
                                            本科
                                        </li>
                                        <li>
                                            硕士
                                        </li>
                                        <li>
                                            博士
                                        </li>
                                    </ul>
                                </div>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table class="btm">
                        <tbody>
                        <tr>
                            <td width="25">
                    <span class="redstar">
                        *
                    </span>
                            </td>
                            <td width="85">
                                职位诱惑
                            </td>
                            <td>
                                <input required placeholder="20字描述该职位的吸引力，如：福利待遇、发展前景等" name="welfare" value="高手如云" class="input_520" id="positionAdvantage" type="text">
                            </td>
                        </tr>
                        <tr>
                            <td>
                    <span class="redstar">
                        *
                    </span>
                            </td>
                            <td>
                                职位描述
                            </td>
                            <td>
                    <span class="c9 f14">
                        (建议分条描述工作职责等。请勿输入公司邮箱、联系电话等外链，否则将自动删除)
                    </span>
                                <textarea required name="desc" id="positionDetail" class="tinymce">JAVA开发工程师</textarea>
                                <span role="application" aria-labelledby="positionDetail_voice" id="positionDetail_parent" class="mceEditor defaultSkin">
                        <span class="mceVoiceLabel" style="display:none" id="positionDetail_voice">
                            富文本域
                        </span>
                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                    <span class="redstar">
                        *
                    </span>
                            </td>
                            <td>
                                工作地址
                            </td>
                            <td>
                                <input required placeholder="请输入详细的工作地址" name="address" value="上海 - 徐汇区 - 漕宝路 - 宜山路1388号民润商务大厦" class="input_520" id="positionAddress" type="text">

                            </td>
                        </tr>
                        </tbody>
                    </table>
                    <table>
                        <tbody>
                        <tr>
                            <td width="25">
                    <span class="redstar">
                        *
                    </span>
                            </td>
                            <td colspan="2">
                                接收简历邮箱：
                                <span id="receiveEmailVal">
                        <input required type="text" name="email" value="824828dyl@163.com">
                    </span>
                            </td>
                        </tr>
                        <tr>
                            <td width="25">
                            </td>
                            <td colspan="2">
                                {{csrf_field()}}
                                <input value="重新发布" id="formSubmit" class="btn_32" type="submit">
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </form>
            </dd>
        </dl>
    </div>
@endsection