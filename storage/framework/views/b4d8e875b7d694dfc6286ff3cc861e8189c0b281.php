<?php $__env->startSection('content'); ?>
    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">职位分类管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">添加分类</a></li>
    </ul>

    <div class="portlet-body">
        <form action="" method="post">
            <?php echo e(csrf_field()); ?>


            <?php if(count($errors) > 0): ?>
                <div class="mws-form-message error">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <table class="table table-hover table-striped table-bordered">
                <tbody>
                    <tr>
                        <th>分类名：</th>
                        <td>
                            <input type="text" name="name" class="small">
                        </td>
                    </tr>
                    <tr>
                        <th>分类列表</th>
                        <td>
                            <select class="small" name="pid">
                                <option value="0">顶级分类</option>
                                <?php $__currentLoopData = $res; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k=>$v): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                                    <option value="<?php echo e($v->id); ?>"><?php echo e($v->name); ?></option>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>

                            </select>
                        </td>
                    </tr>
                 

                    <tr>
                        <th></th>
                        <td >
                            <input type="submit" value="提交" class="btn btn-success">
                            <input type="reset" value="重置" class="btn btn-warning">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

<?php $__env->stopSection(); ?>



<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>