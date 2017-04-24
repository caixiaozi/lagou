<?php $__env->startSection('content'); ?>
    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">权限管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">添加权限</a></li>
    </ul>
    <!--面包屑导航 结束-->

    <div class="portlet-body">
        <form action="" method="post">
            <?php echo e(csrf_field()); ?>

            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th><i class="require">*</i>权限路由：</th>
                    <td>
                        <input type="text" class="mg" name="name">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>权限描述：</th>
                    <td>
                        <input type="text" class="mg" name="display_name">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <textarea name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>