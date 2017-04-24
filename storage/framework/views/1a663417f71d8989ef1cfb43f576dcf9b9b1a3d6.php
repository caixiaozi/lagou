<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>邮件确认</title>
</head>
<body>
<h1>你好,请确认你的邮件</h1>
<a href="<?php echo e(url('home/jihuo'.'/'.$id.$_token)); ?>">点击激活</a>
</body>
</html>