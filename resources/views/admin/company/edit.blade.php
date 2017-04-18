@extends('layouts.master')
@section('title','修改公司信息')
@section('content')
    <!--面包屑导航 开始-->

    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">修改公司信息</a>
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
                    <th><i class="require">*</i>公司名称</th>
                    <td>
                        <input type="text" name="name" class="small" value="{{$res->short_name}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>企业网站</th>
                    <td>
                        <input type="text" name="web" class="small" value="{{$res->web}}">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>状态</th>
                    <td>
                        <select class="small" name="state">
                            <option value="{{$res -> state}}">{{str_replace([-1,0,1,2,3],['未验证','禁用','已认证','未认证','正在申请'],$res->state)}}</option>
                            @if($res -> state == -1)
                                <option value="0">禁用</option>
                                <option value="1">已认证</option>
                                <option value="2">未认证</option>
                                <option value="3">正在申请</option>

                            @endif
                            @if($res -> state == 0)
                                <option value="-1">未验证</option>
                                <option value="1">已认证</option>
                                <option value="2">未认证</option>
                                <option value="3">正在申请</option>

                            @endif
                            @if($res -> state == 1)
                                <option value="-1">未验证</option>
                                <option value="0">禁用</option>
                                <option value="2">未认证</option>
                                <option value="3">正在申请</option>

                            @endif
                            @if($res -> state == 2)
                                <option value="-1">未验证</option>
                                <option value="0">禁用</option>
                                <option value="1">已认证</option>
                                <option value="3">正在申请</option>

                            @endif
                            @if($res -> state == 3)
                                <option value="-1">未验证</option>
                                <option value="0">禁用</option>
                                <option value="2">未认证</option>
                                <option value="1">已认证</option>

                            @endif
                            @if($res -> state == 4)
                                <option value="4">后台添加</option>


                            @endif


                        </select>
                        <input type="hidden" name="id" value="{{$res->id}}">

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


