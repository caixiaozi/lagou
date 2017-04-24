@extends('layouts.master')
@section('title','分类修改')
@section('content')

    <!--面包屑导航 开始-->

    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">修改分类信息</a>
            <i class="icon-angle-right"></i>
        </li>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

    </ul>
    <!--面包屑导航 结束-->
    <div class="portlet-body">
        <form action="" method="post">
            {{csrf_field()}}
            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th>分类名：</th>
                    <td>
                        <input value="{{$sort->name}}" type="text" name="name" class="small">
                    </td>
                </tr>
                <tr>
                    <th>分类列表：</th>
                    <td>
                        <select name="pid" class="small">
                            <option value="0">顶级分类</option>
                            @foreach($res as $k=>$v)
                                <option value="{{$v->id}}" @if($v->id == $sort->pid)
                                selected
                                        @endif
                                >{{$v->name}}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>


                <tr>
                    <th></th>
                    <td >
                        <input type="hidden" name="id" value="{{$sort->id}}">
                        <input type="submit" value="提交" class="btn btn-success">
                        <input type="reset" value="重置" class="btn btn-warning">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection


