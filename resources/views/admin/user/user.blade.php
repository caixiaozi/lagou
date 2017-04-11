@extends('layouts.master')
@section('title', '用户列表')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">用户管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">用户列表</a></li>
    </ul>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>用户名</th>
                <th>密码</th>
                <th>类型</th>
                <th>注册时间</th>
                <th>登录时间</th>
                <th>状态</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
            {{--@foreach($users as $user)--}}
                {{--<tr>--}}
                    {{--<th scope="row">{{$user->id}}</th>--}}
                    {{--<td>{{$user->username}}</td>--}}
                    {{--<td>{{$user->password}}</td>--}}
                    {{--<td>{{$user->type}}</td>--}}
                    {{--<td>{{$user->create_time}}</td>--}}
                    {{--<td>{{$user->login_time}}</td>--}}
                    {{--<td>{{$user->state}}</td>--}}
                    {{--<td><a class="btn btn-success" href="">修改</a> <a class="btn btn-danger" href="">删除</a></td>--}}
                {{--</tr>--}}
            {{--@endforeach--}}

            </tbody>
        </table>
    </div>
@endsection