@extends('layouts.master')
<<<<<<< HEAD
@section('title', '用户列表')
=======
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
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
<<<<<<< HEAD
                <th>用户名</th>
                <th>密码</th>
                <th>类型</th>
                <th>注册时间</th>
                <th>登录时间</th>
                <th>状态</th>
=======
                <th>头像</th>
                <th>用户名</th>
                <th>邮箱</th>
                <th>状态</th>
                <th>密码</th>
                <th>注册时间</th>
                <th>修改时间</th>
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
                <th>操作</th>
            </tr>
            </thead>
            <tbody>
<<<<<<< HEAD
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
=======
            @foreach($users as $user)
                <tr>
                    <th scope="row">{{$user->id}}</th>
                    <td>{{$user->avatar}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td> {{str_replace([-1,0,1,2],['禁用','未激活','激活','后台添加'],$user->status)}}</td>
                    <td>{{$user->password}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td><a class="btn btn-success" href="{{url('admin/user-update'.'/'.$user->id)}}">修改</a> <a class="btn btn-danger" href="{{url('admin/user-delete'.'/'.$user->id)}}">删除</a></td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{$users->links()}}
>>>>>>> 8b6225fb2776ae8486b67e766e73ca63cf4ec475
    </div>
@endsection