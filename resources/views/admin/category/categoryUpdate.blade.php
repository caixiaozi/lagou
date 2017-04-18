@extends('layouts.master')
@section('content')
    <div class="portlet-body">
        <form action="" method="post">
            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th>分类名：</th>
                    <td>
                        <input type="text" class="mg" name="name" value="{{$category->name}}">
                    </td>
                </tr>
                <tr>
                    <th>PID：</th>
                    <td>
                        <input type="text" class="mg" name="pid" readonly value="{{$category->pid}}">
                    </td>
                </tr>
                <tr>
                    <th>分类路径：</th>
                    <td>
                        <input type="text" class="mg" name="path" readonly value="{{$category->path}}">
                    </td>
                </tr>
                <tr>
                    <th>状态：</th>
                    <td>
                        <label for="y"> <input  type="radio" name='display' value=1 > 显示 </label>
                        <label for="n"> <input checked type="radio" name='display' value=2> 隐藏 </label>
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