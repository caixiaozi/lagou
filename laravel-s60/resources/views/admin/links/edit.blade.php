@extends('layouts.master')
@section('title','友情链接修改')
@section('content')
    <!--面包屑导航 开始-->

    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">友情链接修改</a>
            <i class="icon-angle-right"></i>
        </li>

    </ul>
    <!--面包屑导航 结束-->


    <div class="portlet-body">
        <form action=""  method="post">
            {{csrf_field()}}
            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th><i class="require">*</i>网站名称</th>
                    <td>
                        <input type="text" name="name" class="small" value="{{$links->name}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>网站地址</th>
                    <td>
                        <input  value="{{$links->url}}" type="text" name="url" class="small">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>状态</th>
                    <td>

                        <select class="small" name="state">
                            <option value="{{$links -> state}}">{{str_replace([0,1,-1],['申请中','前台显示','下架'],$links->state)}}</option>
                            @if($links -> state == 0)
                                <option value="1">通过审核</option>
                                <option value="-1">下架</option>

                            @endif
                            @if($links -> state == 1)
                                <option value="0">申请中</option>
                                <option value="-1">下架</option>

                            @endif
                            @if($links -> state == -1)
                                <option value="0">申请中</option>
                                <option value="1">申请通过</option>

                            @endif
                        <input type="hidden" name="id" value="{{$links->id}}">

                    </td>
                </tr>

                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交" class="btn btn-success">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection

