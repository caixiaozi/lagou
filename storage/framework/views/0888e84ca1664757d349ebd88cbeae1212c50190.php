<?php $__env->startSection('content'); ?>
    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">权限管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">修改权限</a></li>
    </ul>
    <!--面包屑导航 结束-->


    <div class="result_wrap">
        <form action="" method="post">
            <?php echo e(csrf_field()); ?>

            <table class="add_tab">
                <tbody>
                <tr>
                    <th><i class="require">*</i>权限路由：</th>
                    <td>
                        <input type="text" class="mg" name="name" value="<?php echo e($permission->name); ?>">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>权限描述：</th>
                    <td>
                        <input type="text" class="mg" name="display_name" value="<?php echo e($permission->display_name); ?>">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <textarea name="description"><?php echo e($permission->description); ?></textarea>
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