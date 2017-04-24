<?php $__env->startSection('title','管理员管理'); ?>
        <!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/plugins/colorpicker/colorpicker.css')); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/my.css')); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/custom-plugins/wizard/wizard.css')); ?>" media="screen">

    <!-- Required Stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/bootstrap/css/bootstrap.min.css')); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/fonts/ptsans/stylesheet.css')); ?>" media="screen">
    

    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/mws-style.css')); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/icons/icol16.css')); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/icons/icol32.css')); ?>" media="scree">

    <!-- Demo Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/demo.css')); ?>" media="screen">

    <!-- jQuery-UI Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/jui/css/jquery.ui.all.css')); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/jui/jquery-ui.custom.css')); ?>" media="screen">

    <!-- Theme Stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/mws-theme.css')); ?>" media="screen">
    <link rel="stylesheet" type="text/css" href="<?php echo e(url('admin/HTML_b/css/themer.css')); ?>" media="screen">
    <title><?php echo $__env->yieldContent('title', '后台首页'); ?></title>
    <link rel="shortcut icon" href="<?php echo e(url("admin/image/log.png")); ?>" />
</head>
<body>
<?php $__env->startSection('content'); ?>
    <div class="mws-panel grid_8">
        <div class="mws-panel-header">
            <span><i class="icon-list-ul"></i> 管理员管理</span>
        </div>
        <div class="mws-panel-body no-padding">
            <div role="grid" class="dataTables_wrapper" id="DataTables_Table_1_wrapper">
                <form action="" method="get">
                    <div id="DataTables_Table_1_length" class="dataTables_length">
                        <label>显示
                            <select name="num" size="1" aria-controls="DataTables_Table_1">
                                <option value="10" <?php if(!empty($request['num']) && $request['num'] == 10): ?>
                                selected
                                        <?php endif; ?>
                                >10</option>
                                <option value="25" <?php if(!empty($request['num']) && $request['num'] == 25): ?>
                                selected
                                        <?php endif; ?>>25</option>
                                <option value="50" <?php if(!empty($request['num']) && $request['num'] == 50): ?>
                                selected
                                        <?php endif; ?>>50</option>
                                <option value="100" <?php if(!empty($request['num']) && $request['num'] == 100): ?>
                                selected
                                        <?php endif; ?>>100</option>
                            </select> 条</label>
                    </div>
                    <div class="dataTables_filter" id="DataTables_Table_1_filter">
                        <label>关键字:
                            <input name="keywords" type="text" aria-controls="DataTables_Table_1" value="<?php echo e(isset($request['keywords']) ? $request['keywords'] : ''); ?>">
                            <button class="btn btn_default ">查询</button>
                        </label></div>
                </form>
                <table class="mws-datatable-fn mws-table dataTable" id="DataTables_Table_1" aria-describedby="DataTables_Table_1_info">
                    <thead>
                    <tr role="row">
                        <th   class="sorting_asc" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 10px;" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" >
                            ID</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 80px;" aria-label="Browser: activate to sort column ascending">用户名</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 25px;" aria-label="Engine version: activate to sort column ascending"> 邮箱</th>
                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 87px;" aria-label="CSS grade: activate to sort column ascending">角色名称</th>

                        <th class="sorting" role="columnheader" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" style="width: 75px;" aria-label="CSS grade: activate to sort column ascending">操作</th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                    <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                        <tr class="odd">
                            <td class="  sorting_1"><?php echo e($user->id); ?></td>
                            <td ><?php echo e($user->name); ?></td>
                            <td ><?php echo e($user->email); ?></td>
                            <td ><?php echo e($user->roles); ?></td>
                            <td >
                                <a class = 'rules' data= '30' href="<?php echo e(url('admin/attach-role'.'/'.$user->id)); ?>" style="color:blue;"><i class="icon-wrench"></i>分配角色</a>
                                <br>
                                <a class = 'rules' data= '31' href="<?php echo e(url('admin/user-delete'.'/'.$user->id)); ?>" style="color:RED;"><i class="icon-trash"></i>删除</a>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
                    </tbody>
                </table>
                <div class="dataTables_paginate paging_full_numbers" id="pages">
                    
                </div></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<script src="<?php echo e(url('admin/table/js/libs/jquery-1.8.3.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/table/js/libs/jquery.mousewheel.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/table/js/libs/jquery.placeholder.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/table/custom-plugins/fileinput.js')); ?>"></script>

<!-- jQuery-UI Dependent Scripts -->
<script src="<?php echo e(url('admin/table/jui/js/jquery-ui-1.9.2.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/table/jui/jquery-ui.custom.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/table/jui/js/jquery.ui.touch-punch.js')); ?>"></script>

<!-- Plugin Scripts -->
<script src="<?php echo e(url('admin/table/plugins/datatables/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/table/plugins/colorpicker/colorpicker-min.js')); ?>"></script>

<!-- Core Script -->
<script src="<?php echo e(url('admin/table/bootstrap/js/bootstrap.min.js')); ?>"></script>
<script src="<?php echo e(url('admin/table/js/core/mws.js')); ?>"></script>

<!-- Themer Script (Remove if not needed) -->
<script src="<?php echo e(url('admin/table/js/core/themer.js')); ?>"></script>
</body>
</html>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>