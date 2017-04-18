@extends('layouts.master')
@section('title','添加友情链接')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-list-ul"></i>
            <a href="">添加友情链接</a>
            <i class="icon-angle-right"></i>
        </li>

    </ul>
    <!--面包屑导航 结束-->


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
                    <th><i class="require">*</i>链接网站</th>
                    <td>
                        <input type="text" name="name" class="small">
                    </td>
                </tr>
                <tr>
                    <th><i class="require">*</i>URL</th>
                    <td>
                        <input type="text" name="url" class="small">
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


