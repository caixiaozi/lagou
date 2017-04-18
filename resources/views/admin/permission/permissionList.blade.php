@extends('layouts.master')
@section('content')
    <!--面包屑导航 开始-->

    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">权限管理</a>
        </li>
    </ul>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="">
                <div class="">
                    <a href="{{url("admin/permission-add")}}"><i class="icon-plus-sign"></i>新增权限</a>
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
                        <th>权限描述</th>
                        <th>操作</th>
                    </tr>
                    @foreach($permissions as $permission)
                <tr>
                <td class="tc">{{$permission->id}}</td>
                <td>{{$permission->name}}</td>
                <td>{{$permission->display_name}}</td>
                <td>{{$permission->description}}</td>
                <td>
                <a href="{{url('admin/permission-update'.'/'.$permission->id)}}">修改</a>
                <a href="{{url('admin/permission-delete'.'/'.$permission->id)}}">删除</a>
                </td>
                </tr>
                @endforeach
                </table>

            </div>

    </form>
    <!--搜索结果页面 列表 结束-->
@endsection