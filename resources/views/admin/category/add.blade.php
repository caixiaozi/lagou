@extends('layouts.master')
@section('content')
    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">职位分类管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">添加分类</a></li>
    </ul>

    <div class="portlet-body">
        <form action="" method="post">
            {{csrf_field()}}

            @if (count($errors) > 0)
                <div class="mws-form-message error">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <table class="table table-hover table-striped table-bordered">
                <tbody>
                    <tr>
                        <th>分类名：</th>
                        <td>
                            <input type="text" name="name" class="small">
                        </td>
                    </tr>
                    <tr>
                        <th>分类列表</th>
                        <td>
                            <select class="small" name="pid">
                                <option value="0">顶级分类</option>
                                @foreach($res as $k=>$v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                @endforeach

                            </select>
                        </td>
                    </tr>
                 {{--   <tr>
                        <th>分类路径：</th>
                        <td>
                            <input type="text"class="small" name="path" readonly>
                        </td>
                    </tr>--}}

                    <tr>
                        <th></th>
                        <td >
                            <input type="submit" value="提交" class="btn btn-success">
                            <input type="reset" value="重置" class="btn btn-warning">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>

@endsection


