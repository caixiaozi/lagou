@extends('layouts.master')
@section('content')

    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">角色管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">修改角色</a></li>
    </ul>
    <!--面包屑导航 结束-->

    <div class="result_wrap">
        <form action="" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                <tr>
                    <th><i class="require">*</i>角色名称：</th>
                    <td>
                        <input type="text" class="mg" name="name" value="{{$role->name}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>角色描述：</th>
                    <td>
                        <input type="text" class="mg" name="display_name" value="{{$role->display_name}}">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <textarea name="description">{{$role->description}}</textarea>
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