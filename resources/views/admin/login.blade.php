<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
    <meta charset="utf-8" />
    <title>登陆</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="../admin/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="../admin/css/bootstrap-responsive.min.css" rel="stylesheet" type="text/css"/>
    <link href="../admin/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="../admin/css/style-metro.css" rel="stylesheet" type="text/css"/>
    <link href="../admin/css/style.css" rel="stylesheet" type="text/css"/>
    <link href="../admin/css/style-responsive.css" rel="stylesheet" type="text/css"/>
    <link href="../admin/css/default.css" rel="stylesheet" type="text/css" id="style_color"/>
    <link href="../admin/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL STYLES -->

    <link href="../admin/css/login.css" rel="stylesheet" type="text/css"/>
    <!-- END PAGE LEVEL STYLES -->
    <link rel="shortcut icon" href="../admin/image/log.png" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="login">
<!-- BEGIN LOGO -->
<div class="logo">
    {{--<img src="../admin/image/favicon_faed927" alt="" />--}}
</div>

<!-- END LOGO -->

<!-- BEGIN LOGIN -->

<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form  action="../doLogin" method="post">
        {{csrf_field()}}
        <h3 class="form-title">欢迎登录</h3>
        <div class="control-group">
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
        @endif
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Username</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-user"></i>
                    <input class="m-wrap placeholder-no-fix" type="text" placeholder="Username" name="username"/>
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label visible-ie8 visible-ie9">Password</label>
            <div class="controls">
                <div class="input-icon left">
                    <i class="icon-lock"></i>
                    <input class="m-wrap placeholder-no-fix" type="password" placeholder="Password" name="password"/>
                </div>
            </div>
        </div>
        {{--<div class="form-group">--}}
            {{--<input type="text" class="form-control" name="code" placeholder="请输入验证码"/>--}}
            {{--{!! captcha_img()!!}--}}
        {{--</div>--}}
        <div class="form-actions">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"/> 记住我
            </label>
            <button type="submit" class="btn green pull-right">
                登录 <i class="m-icon-swapright m-icon-white"></i>
            </button>
        </div>
    </form>

    <!-- END LOGIN FORM -->
</div>

<!-- END LOGIN -->

<!-- BEGIN COPYRIGHT -->

<!-- END COPYRIGHT -->

<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

<!-- BEGIN CORE PLUGINS -->

<script src="../admin/js/jquery-1.10.1.min.js" type="text/javascript"></script>
<script src="../admin/js/jquery-migrate-1.2.1.min.js" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="../admin/js/jquery-ui-1.10.1.custom.min.js" type="text/javascript"></script>
<script src="../admin/js/bootstrap.min.js" type="text/javascript"></script>
<!--[if lt IE 9]>
<script src="../admin/js/excanvas.min.js"></script>
<script src="../admin/js/respond.min.js"></script>
<![endif]-->
<script src="../admin/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="../admin/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="../admin/js/jquery.cookie.min.js" type="text/javascript"></script>
<script src="../admin/js/jquery.uniform.min.js" type="text/javascript" ></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="../admin/js/jquery.validate.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="../admin/js/app.js" type="text/javascript"></script>
<script src="../admin/js/login.js" type="text/javascript"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
    jQuery(document).ready(function() {
        App.init();
        Login.init();
    });
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>