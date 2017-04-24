<?php $__env->startSection('content'); ?>
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">用户管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">添加用户</a></li>
    </ul>
    <div class="portlet-body">
        <form action="" method="post">
            <?php echo e(csrf_field()); ?>

            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th>用户名</th>
                    <td>
                        <input type="text" class="form-control" name="name" >
                    </td>
                </tr>
                <tr>
                    <th>邮箱</th>
                    <td>
                        <input type="text" class="form-control" name="email" >
                    </td>
                </tr>
                <tr>
                    <th>密码</th>
                    <td>
                        <input type="password" class="form-control" name="password" >
                    </td>
                </tr>
                <tr>
                    <th>头像</th>
                    <td>
                        <input type="file" class="form-control" name="avatar" >
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <button type="submit" class="btn btn-default">添加</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>