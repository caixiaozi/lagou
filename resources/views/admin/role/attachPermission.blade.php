@extends('layouts.master')
@section('content')

    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">角色管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">角色列表</a><i class="icon-angle-right"></i>
        </li>
        <li><a href="#">分配权限</a></li>
    </ul>

    <!--面包屑导航 结束-->
    <div class="result_wrap">
        <form action="" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th>分配权限：</th>
                    <td>
                        @foreach($permissions as $permission)
                        <label class="checkbox-inline"><input type="checkbox" name="permission_id[]" value="{{$permission->id}}">{{$permission->display_name}}</label>
                        @endforeach
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
@endsection