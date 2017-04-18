@extends('layouts.master')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-user"></i>
            <a href="">用户管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">添加用户</a></li>
    </ul>
    <form action="" method="post">
        {{csrf_field()}}
        <div class="form-group">
            <label >用户名</label>
            <input type="text" class="form-control" name="name" >
        </div>
        <div class="form-group">
            <label >邮箱</label>
            <input type="text" class="form-control" name="email" >
        </div>
        {{--<div class="form-group">--}}
            {{--<label >状态</label>--}}
            {{--<div class="mws-form-item">--}}
                {{--<select class="small" name="status" >--}}
                    {{--<option value="-1">禁用</option>--}}
                    {{--<option value="1">正常</option>--}}
                {{--</select>--}}
            {{--</div>--}}
        {{--</div>--}}
        <div class="form-group">
            <label >密码</label>
            <input type="password" class="form-control" name="password" >
        </div>

        <div class="form-group">
            <label >头像</label>
            <input type="file" class="form-control" name="avatar" >
        </div>
        {{--<input type="hidden" value="date">--}}
        <button type="submit" class="btn btn-default">添加</button>
    </form>
@endsection