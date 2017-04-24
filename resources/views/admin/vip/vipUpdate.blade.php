@extends('layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">用户管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">用户列表</a><i class="icon-angle-right"></i></li>
        <li><a href="#">修改用户</a></li>
    </ul>

    <form action="" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label >用户名</label>
            <input type="text" class="form-control" name="name" value="{{$vip->name}}">
        </div>
        <div class="form-group">
            <label >邮箱</label>
            <input type="text" class="form-control" name="email" value="{{$vip->email}}">
        </div>
        <div class="form-group">
            <label >状态</label>
            <div class="mws-form-item">
                <select class="small" name="status" >
                    <option value="{{$vip -> status}}">{{str_replace([-1,0,1],['禁用','未激活','正常'],$vip -> status)}}</option>
                    @if($vip -> status == -1)
                        <option value="0">未激活</option>
                        <option value="1">正常</option>
                    @endif
                    @if($vip -> status == 1)
                        <option value="0">未激活</option>
                        <option value="-1">禁用</option>
                    @endif
                    @if($vip -> status == 0)
                        <option value="-1">禁用</option>
                        <option value="1">正常</option>
                    @endif
                </select>
            </div>
        </div>
        <div class="form-group">
            <label >密码</label>
            <input type="password" class="form-control" name="password" value="{{$vip->password}}">
        </div>
        <button type="submit" class="btn btn-default">修改</button>
    </form>
@endsection