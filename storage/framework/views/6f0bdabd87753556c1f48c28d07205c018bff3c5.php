<?php $__env->startSection('content'); ?>

    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">角色管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">修改角色</a></li>
    </ul>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    
        
            
                
                
                
            
        
    
    <!--结果集标题与导航组件 结束-->

    <div class="result_wrap">
        <form action="" method="post">
            <?php echo e(csrf_field()); ?>

            <table class="add_tab">
                <tbody>
                <tr>
                    <th><i class="require">*</i>角色名称：</th>
                    <td>
                        <input type="text" class="mg" name="name" value="<?php echo e($role->name); ?>">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>角色描述：</th>
                    <td>
                        <input type="text" class="mg" name="display_name" value="<?php echo e($role->display_name); ?>">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <textarea name="description"><?php echo e($role->description); ?></textarea>
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