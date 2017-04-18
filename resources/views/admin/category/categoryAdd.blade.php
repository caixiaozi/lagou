@extends('layouts.master')
@section('content')
   <?php
    $pid =  empty($_GET['id'])? 0: $_GET['id'];
   $path = empty($_GET['path'])? '0,': $_GET['path'].$pid.',';
    ?>
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
            {{csrf_field()}}
            <table class="table table-hover table-striped table-bordered">
                <tbody>
                    <tr>
                        <th>分类名：</th>
                        <td>
                            <input type="text" class="mg" name="name">
                        </td>
                    </tr>
                    <tr>
                        <th>PID：</th>
                        <td>
                            <input type="text" class="mg" name="pid" value='<?= $pid ?>' readonly >
                        </td>
                    </tr>
                    <tr>
                        <th>分类路径：</th>
                        <td>
                            <input type="text" class="mg" name="path"  value='<?= $path?>' readonly>
                        </td>
                    </tr>
                    <tr>
                        <th>状态：</th>
                        <td>
                            <label for="y"> <input  id='y' type="radio" name='display' value=1 > 显示 </label>
                            <label for="n"> <input checked id='n' type="radio" name='display' value=2> 隐藏 </label>
                        </td>
                    </tr>
                    <tr>
                        <th></th>
                        <td >
                            <input type="submit" value="添加">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

@endsection