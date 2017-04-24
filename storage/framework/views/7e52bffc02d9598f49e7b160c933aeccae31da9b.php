<?php $__env->startSection('content'); ?>
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
    <form action="#" method="post">
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
                
                
                    
                    
                    
                    
                    
                    
                        
                        
                        
                        
                    
                
                

            </table>
        </div>
    </form>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>