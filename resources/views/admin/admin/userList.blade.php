@extends('layouts.master')
@section('content')
    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">管理员管理</a>
        </li>
    </ul>
    <!--面包屑导航 结束-->

    <!--搜索结果页面 列表 开始-->
    <form action="#" method="post">
        <div class="result_wrap">
            <!--快捷导航 开始-->
            <div class="result_content">
                <div class="short_wrap">
                    <a href="{{url("admin/user-add")}}"><i class="fa fa-plus"></i>新增管理员</a>

                </div>
            </div>
            <!--快捷导航 结束-->
        </div>

        <div class="table-responsive">
            <table class="table table-striped">
                    <tr>
                        <th>ID</th>
                        <th>用户名</th>
                        <th>邮箱</th>
                        <th>角色名称</th>
                        <th>操作</th>
                    </tr>
                    @foreach($users as $user)
                    <tr>
                        <td class="tc">{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->roles}}</td>
                        <td>
                            <a href="{{url('admin/attach-role'.'/'.$user->id)}}">分配角色</a>
                            <a href="{{url('admin/user-delete'.'/'.$user->id)}}">删除</a>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div>
    </form>
    <!--搜索结果页面 列表 结束-->
@endsection