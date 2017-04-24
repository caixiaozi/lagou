<?php $__env->startSection('title','首页轮播图管理'); ?>

<?php $__env->startSection('content'); ?>
    <div class="main-content">
 

    <div class="zhong">
        <table class="table">
            <thead class="theadtr">
            <tr>
                <th>编号</th>
                <th>图片</th>
                <th >标题</th>
                <th>网址</th>
                <th>是否显示</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody class="tbodytr">
            <?php $__currentLoopData = $result; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $arr): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <tr class="active">
                    <th scope="row" width="70" style="line-height:80px;"><?php echo e($loop->iteration); ?></th>
                    <td style="line-height:80px;"><img src="<?php echo e(asset('admin/image/carousel/'.$arr->pic)); ?>" height="70"></td>
                    <td><?php echo e($arr->title); ?></td>
                    <td style="width:300px"><?php echo e($arr->url); ?></td>
                    <td style="line-height:80px;"><?php if($arr->onsale=='0'): ?>"no"<?php else: ?>"yes"<?php endif; ?></td>
                    <td style="line-height:80px;"><a href="<?php echo e(asset('admin/carousel/edit/'.$arr->id)); ?>">修改</a>&nbsp;<a href="<?php echo e(asset('admin/carousel/del/'.$arr->id)); ?>">删除</a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </tbody>
        </table>
        <div class="links">
        <?php echo e($result->appends($where)->links()); ?>

        </div>
  
        <script>
            console.log($('img[name=img]'));
            for(i=0;i<$('img[name=img]').length;i++){
                (function(i){
                    $('img[name=img]')[i].onclick = function(){
                        var onsale = $(this).attr('src')=='<?php echo e(url('Admin/images/no.gif')); ?>'?'1':'0';
                        $(this).attr('src',$(this).attr('src')=='<?php echo e(url('Admin/images/no.gif')); ?>'?'<?php echo e(url('Admin/images/yes.gif')); ?>':'<?php echo e(url('Admin/images/no.gif')); ?>');
                             var id =  $(this).attr('id');
                            $.ajax({
                                url: "<?php echo e(asset('admin/carousel/onsale')); ?>",
                                data: {id: id, onsale: onsale},
                                type: 'get',
                                success: function (data, status, xhr) {
                                }
                            });
                    }
                })(i)
            }
        </script>
    </div>
    </div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('bottom'); ?>
<?php if(session('status')): ?>
            <script>alert('删除失败！ : (');</script>
        <?php endif; ?>
        <?php if(session('statuss')): ?>
            <script>alert('修改失败！ : (');</script>
        <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>