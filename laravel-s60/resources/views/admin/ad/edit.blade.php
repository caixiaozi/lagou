@extends('layouts.master')
@section('title','修改广告信息')
@section('content')
    <!--面包屑导航 开始-->

    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">修改广告信息</a>
            <i class="icon-angle-right"></i>
        </li>

    </ul>
    <!--面包屑导航 结束-->


    <div class="portlet-body">
        <form action=""  method="post" enctype="multipart/form-data">
            {{csrf_field()}}
            <table class="table table-hover table-striped table-bordered">
                <tbody>
                <tr>
                    <th><i class="require">*</i>网站地址</th>
                    <td>
                        <input  value="{{$ad->url}}" type="text" name="url" class="small">
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>广告图片</th>
                    <td>
                        <input  value="{{$ad->pic}}" type="file" name="pic" class="small">
                    </td>
                </tr>

                <tr>
                    <th><i class="require">*</i>状态</th>
                    <td>

                        <select class="small" name="state">
                            <option value="{{$ad -> state}}">{{str_replace([0,1],['已出柜','正在显示'],$ad->state)}}</option>
                            @if($ad -> state == 0)
                                <option value="1">正在显示</option>

                            @endif
                            @if($ad -> state == 1)
                                <option value="0">已出柜</option>


                            @endif

                            <input type="hidden" name="id" value="{{$ad->id}}">

                    </td>
                </tr>

                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交" class="btn btn-success">
                        <input type="reset" value="重置" class="btn btn-warning">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection

