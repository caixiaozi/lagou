@extends('layouts.master')
@section('content')
    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">角色管理</a>
        </li>
    </ul>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="">
                <div class="">
                    <a href="{{url("admin/role-add")}}"><i class="icon-plus-sign"></i>新增角色</a>
                    {{--<a href="#"><i class="icon-trash"></i>批量删除</a>--}}
                    {{--<a href="#"><i class="icon-refresh"></i>更新排序</a>--}}
                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="table-responsive">
            <table class="table table-striped">

                    <tr>
                        <th>ID</th>
                        <th>权限路由</th>
                        <th>权限名称</th>
                        <th>描述</th>
                        <th>角色权限</th>
                        <th>操作</th>
                    </tr>
                    @foreach($roles as $role)
                    <tr>
                        <td class="tc">{{$role->id}}</td>
                        <td>{{$role->name}}</td>
                        <td>{{$role->display_name}}</td>
                        <td>{{$role->description}}</td>
                        <td>{{$role->perms}}</td>
                        <td>
                            <a href="{{url('admin/attach-permission'.'/'.$role->id)}}">分配权限</a>
                            <a href="{{url('admin/role-update'.'/'.$role->id)}}">修改</a>
                            <a href="{{url('admin/role-delete'.'/'.$role->id)}}">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
        </div>
    </form>
    <!--搜索结果页面 列表 结束-->
@endsection