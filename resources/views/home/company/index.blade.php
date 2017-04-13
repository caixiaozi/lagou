<!DOCTYPE html>
<html lang="zh-CN">
<meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Fullscreen Login</title>

<link rel="stylesheet" href="{{url('home/company/jiaoben3721/css/style.css')}}">
<link rel="stylesheet" href="{{url('home/company/jiaoben3721/css/zy.css')}}">

<body>

<div class="login-container">
	<div id="msform">
    <form  method="post" action="/company/zhuce" enctype="multipart/form-data">
        <!-- progressbar -->
        <ul id="progressbar">
            <li class="active">基本注册</li>
            <li>信息注册</li>
            <li>logo注册</li>
            <li>规模注册</li>
            <li>发展阶段</li>
            <li>完成注册</li>
        </ul>
        <!-- fieldsets -->
        <fieldset>
            <h2 class="fs-title">企业信息注册</h2>
            <h3 class="fs-subtitle">基本注册</h3>
            <input required name="name" placeholder="企业名称" type="text">
            <input required name="short_name" placeholder="企业简称" type="text">
            <input required name="tel" placeholder="企业电话" type="text">
            <input class="next action-button" value="下一步" type="button">
        </fieldset>

        <fieldset>
            <h2 class="fs-title">企业信息注册</h2>
            <h3 class="fs-subtitle">信息注册</h3>
            <input required name="email" placeholder="企业邮箱" type="text">
            <input required name="city" placeholder="所在城市" type="text">
            <input required name="web" placeholder="企业网站" type="text">
            <input class="previous action-button" value="上一步" type="button">
            <input class="next action-button" value="下一步" type="button">
        </fieldset>

        <fieldset>
            <h2 class="fs-title">企业信息注册</h2>
            <h3 class="fs-subtitle">logo注册</h3>
            <input required name="logo" placeholder="企业logo" type="file">
            <input class="previous action-button" value="上一步" type="button">
            <input class="next action-button" value="下一步" type="button">
        </fieldset>
        <fieldset>
            <h2 class="fs-title">企业信息注册</h2>
            <h3 class="fs-subtitle">规模人数</h3>
            <select required name="scale" style="height:45px; width:200px;">
                <option value="0">少于15人</option>
                <option value="1">15-50人</option>
                <option value="2">50-150人</option>
                <option value="3">150-500人</option>
                <option value="4">500-2000人</option>
                <option value="5">2000人以上</option>
            </select>
            <br>

            <input  class="previous action-button" value="上一步" type="button">
            <input class="next action-button" value="下一步" type="button">
        </fieldset>
        <fieldset>
            <h2 class="fs-title">企业信息注册</h2>
            <h3 class="fs-subtitle">发展阶段</h3>
            <select required name="stage" style="height:45px; width:200px;">
                <option value="0">天使轮</option>
                <option value="1">A轮</option>
                <option value="2">B轮</option>
                <option value="3">C轮</option>
                <option value="4">D轮及以上</option>
                <option value="5">上市公司</option>
                <option value="6">不需要融资</option>
            </select>
            <br>

            <input  class="previous action-button" value="上一步" type="button">
            <input class="next action-button" value="下一步" type="button">
        </fieldset>
        <fieldset>
            <h2 class="fs-title">完成注册</h2>
            <h3 class="fs-subtitle">即将完成</h3>


            <select required name="trade" style="height:45px; width:260px;">

            </select>
            <br><br>
            <textarea required name="one_desc" placeholder="请用一句话介绍公司"></textarea>


            {{csrf_field()}}
            <input  class="previous action-button" value="上一步" type="button">
            <input  class="submit action-button" value="注册" type="submit">
        </fieldset>
</div>

</div>

<script src="{{url('home/company/jiaoben3721/js/jquery.min.js')}}"></script>
<script src="{{url('home/company/jiaoben3721/js/common.js')}}"></script>
<!--背景图片自动更换-->
<script src="{{url('home/company/jiaoben3721/js/supersized.3.2.7.min.js')}}"></script>
<script src="{{url('home/company/jiaoben3721/js/supersized-init.js')}}"></script>

<!--表单验证-->

<script src="{{url('home/company/jiaoben3721/js/jquery.validate.min.js')}}"></script>

<div style="text-align:center;margin:50px 0; font:normal 14px/24px 'MicroSoft YaHei';">

</div>
</body>
</html>