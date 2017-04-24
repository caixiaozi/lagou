@extends('layouts.master')
@section('title','添加轮播图')

@section('content')
    <div class="main-content">
            <!-- <div class="alert alert-success" id="boxx">
                {{ session('status') }}
            </div> -->
  {{--------------------------主内容---------------------------------------------}}
        <div class="zhong">
            <h1>添加轮播图</h1>
            <br/><br/>
            <form action="{{asset('admin/carousel/add2')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <label>跳转地址</label>
                <input type="text" name="url" value="" class="biaodan" placeholder="路由">
                <br/><br/>
                <label>图片标题</label>
                <input type="text" name="title" value="" class="biaodan" placeholder="标题">
                <br/><br/>
                <label>图片详情</label>
                <textarea name="descr" rows="7" cols="25" value="" placeholder="简单介绍"></textarea>
                <br/><br/>
                <label>上传分类</label>
                <select name="cate">
                    <option value="0">首页轮播图</option>
                    <option value="1">公司轮播图</option>
                </select>
                <br/><br/>
                <label>是否上架</label>
                <input type="radio" name="onsale" value="1" checked>上架
                <input type="radio" name="onsale" value="0">下架
                <br/><br/>
                <input type="file" name="pic">
                <br/>
                <button type="submit" class="btn btn-default">确定添加</button>
            </form>
        </div>
    </div>
@endsection
@section('bottom')
{{--判断错误信息--}}
        @if (session('status'))

            <script>$("#boxx").fadeOut(3000);</script>
        @endif

@endsection