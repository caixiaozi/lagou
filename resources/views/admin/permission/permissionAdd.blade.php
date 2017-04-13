@extends('layouts.master')
@section('content')
    <!--面包屑导航 开始-->
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">权限管理</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">添加权限</a></li>
    </ul>
    <!--面包屑导航 结束-->



    <div class="result_wrap">
        <form action="" method="post">
            {{csrf_field()}}
            <table class="add_tab">
                <tbody>
                {{--<tr>--}}
                    {{--<th width="120"><i class="require">*</i>分类：</th>--}}
                    {{--<td>--}}
                        {{--<select name="">--}}
                            {{--<option value="">==请选择==</option>--}}
                            {{--<option value="19">精品界面</option>--}}
                            {{--<option value="20">推荐界面</option>--}}
                        {{--</select>--}}
                    {{--</td>--}}
                {{--</tr>--}}
                <tr>
                    <th><i class="require">*</i>权限路由：</th>
                    <td>
                        <input type="text" class="mg" name="name">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>权限描述：</th>
                    <td>
                        <input type="text" class="mg" name="display_name">
                    </td>
                </tr>
                <tr>
                    <th>描述：</th>
                    <td>
                        <textarea name="description"></textarea>
                    </td>
                </tr>
                <tr>
                    <th></th>
                    <td>
                        <input type="submit" value="提交">
                        <input type="button" class="back" onclick="history.go(-1)" value="返回">
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    </div>
@endsection