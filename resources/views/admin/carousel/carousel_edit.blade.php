@extends('layouts.master')
@section('title','修改轮播图')

@section('content')
    <div class="main-content">
        @if (session('status'))
            <div class="alert alert-success" id="boxx">
                {{ session('status') }}
            </div>
            <script>$("#boxx").fadeOut(3000);</script>
        @endif
        <div class="zhong">
            <h1>修改轮播图</h1>
            <br/><br/>
            <form action="{{asset('admin/carousel/edit2')}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <label>跳转地址</label>
                <input type="hidden" name="id" value="{{$arr->id}}">
                <input type="text" name="url" value="{{$arr->url}}" class="biaodan" placeholder="路由">
                <br/><br/>
                <label>图片标题</label>
                <input type="text" name="title" value="{{$arr->title}}" class="biaodan" placeholder="标题">
                <br/><br/>
                <label>图片详情</label>
                <textarea name="descr" rows="7" cols="25" value="" placeholder="简单介绍">{{$arr->descr}}</textarea>
                <br/><br/>
                <label>上传分类</label>
                <select name="cate">
                    <option value="0" @if($arr->cate == '0')selected @endif>首页轮播图</option>
                    <option value="1" @if($arr->cate == '1')selected @endif>公司轮播图</option>
                </select>
                <br/><br/>
                <input type="file" name="pic">
                <br/>
                <button type="submit" class="btn btn-default">确定修改</button>
            </form>
        </div>
    </div>
@endsection