@extends('layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">会员管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">会员列表</a></li>
    </ul>
    <form action="#" method="post">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>头像</th>
                <th>用户名</th>
                <th>邮箱</th>
                <th>状态</th>
                <th>密码</th>
                <th>注册时间</th>
                <th>修改时间</th>
                <th>操作</th>
            </tr>
            </thead>

            @foreach($vip as $vvip)
                <tr>
                    <th scope="row">{{$vvip->id}}</th>
                    <td>{{$vvip->avatar}}</td>
                    <td>{{$vvip->name}}</td>
                    <td>{{$vvip->email}}</td>
                    <td> {{str_replace([-1,0,1,2],['禁用','未激活','激活','后台添加'],$vvip->status)}}</td>
                    <td>{{$vvip->password}}</td>
                    <td>{{$vvip->created_at}}</td>
                    <td>{{$vvip->updated_at}}</td>
                    <td><a class="btn btn-success" href="{{url('admin/vip-update'.'/'.$vvip->id)}}">修改</a> <a class="btn btn-danger" href="{{url('admin/vip-delete'.'/'.$vvip->id)}}">删除</a></td>
                </tr>
                @endforeach


        </table>
    </div>
    </form>
@endsection