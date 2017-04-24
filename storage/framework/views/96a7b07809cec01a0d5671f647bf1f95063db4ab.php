<?php $__env->startSection('content'); ?>

    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">管理员管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">添加管理员</a></li>
    </ul>
    <!--面包屑导航 结束-->

    <!--结果集标题与导航组件 开始-->
    
        
            
                
                
                
            
        
    
    <!--结果集标题与导航组件 结束-->

    <div class="portlet-body">
        <form action="" method="post">
            <?php echo e(csrf_field()); ?>

            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th><i class="require">*</i>用户名：</th>
                    <td>
                        <input type="text" class="mg" name="name">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>邮箱：</th>
                    <td>
                        <input type="text" class="mg" name="email">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>密码：</th>
                    <td>
                        <input type="password" class="mg" name="password">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>确认密码：</th>
                    <td>
                        <input type="password" class="mg" name="password_confirmation">
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