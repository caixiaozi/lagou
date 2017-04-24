<?php $__env->startSection('content'); ?>
    <form action="#" method="post">
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">职位分类管理</a>
        </li>
        <li>
            <i class="icon-angle-right"></i>
            <a href="">分类列表</a>
        </li>
    </ul>
    <!--搜索结果页面 列表 开始-->

        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>PID</th>
                    <th>职位类别</th>
                    <th>路径</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                <?php $__currentLoopData = $category; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $categorys): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr>
                    <td><?php echo e($categorys->id); ?></td>
                    <td><?php echo e($categorys->pid); ?></td>
                    <td><?php echo e($categorys->name); ?></td>
                    <td><?php echo e($categorys->path); ?></td>
                    <td> <?php echo e(str_replace([1,2],['显示','隐藏'],$categorys->display)); ?></td>
                    <td>
                        <a  href="<?php echo e(url("admin/category-list".'/'.$categorys->id)); ?>">查看子分类</a>
                        <a  href="<?php echo e(url("admin/category-add".'/'.$categorys->id.'&'.$categorys->path)); ?>">添加子分类</a>
                        <a  href="<?php echo e(url("admin/category-update".'/'.$categorys->id)); ?>">修改</a>
                        <a href="<?php echo e(url("admin/category-del".'/'.$categorys->id)); ?>" >删除</a>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </table>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>