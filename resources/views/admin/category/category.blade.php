@extends('layouts.master')
@section('content')
    <form action="#" method="post">
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">职位分类管理</a>
        </li>
        <li>
            <i class="icon-angle-right"></i>
            <a href="">分类列表</a>
        </li>
    </ul>
    <!--搜索结果页面 列表 开始-->

        <div class="table-responsive">
            <table class="table table-striped">
                <tr>
                    <th>ID</th>
                    <th>PID</th>
                    <th>职位类别</th>
                    <th>路径</th>
                    <th>状态</th>
                    <th>操作</th>
                </tr>
                @foreach($category as $categorys)
                <tr>
                    <td>{{$categorys->id}}</td>
                    <td>{{$categorys->pid}}</td>
                    <td>{{$categorys->name}}</td>
                    <td>{{$categorys->path}}</td>
                    <td> {{str_replace([1,2],['显示','隐藏'],$categorys->display)}}</td>
                    <td>
                        <a  href="{{url("admin/category-list".'/'.$categorys->id)}}">查看子分类</a>
                        <a  href="{{url("admin/category-add".'/'.$categorys->id.'&'.$categorys->path)}}">添加子分类</a>
                        <a  href="{{url("admin/category-update".'/'.$categorys->id)}}">修改</a>
                        <a href="{{url("admin/category-del".'/'.$categorys->id)}}" >删除</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </form>
@endsection