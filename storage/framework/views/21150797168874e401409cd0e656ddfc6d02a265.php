<?php $__env->startSection('title','修改广告信息'); ?>
<?php $__env->startSection('content'); ?>
    <!--面包屑导航 开始-->

    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">修改广告信息</a>
            <i class="icon-angle-right"></i>
        </li>

    </ul>
    <!--面包屑导航 结束-->


    <div class="portlet-body">
        <form action=""  method="post" enctype="multipart/form-data">
            <?php echo e(csrf_field()); ?>

            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th><i class="require">*</i>网站地址</th>
                    <td>
                        <input  value="<?php echo e($ad->url); ?>" type="text" name="url" class="small">
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>广告图片</th>
                    <td>
                        <input  value="<?php echo e($ad->pic); ?>" type="file" name="pic" class="small">
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>状态</th>
                    <td>

                        <select class="small" name="state">
                            <option value="<?php echo e($ad -> state); ?>"><?php echo e(str_replace([0,1],['已出柜','正在显示'],$ad->state)); ?></option>
                            <?php if($ad -> state == 0): ?>
                                <option value="1">正在显示</option>

                            <?php endif; ?>
                            <?php if($ad -> state == 1): ?>
                                <option value="0">已出柜</option>


                            <?php endif; ?>

                            <input type="hidden" name="id" value="<?php echo e($ad->id); ?>">

                    </td>
                </tr>

                <tr>
                    <th></th>
                    <td>
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