@extends('layouts.master')
@section('title','首页轮播图管理')

@section('content')
    <div class="main-content">
 {{--判断错误信息--}}

    <div class="zhong">
        <table class="table">
            <thead class="theadtr">
            <tr>
                <th>编号</th>
                <th>图片</th>
                <th >标题</th>
                <th>网址</th>
                <th>是否显示</th>
                <th>操作</th>
            </tr>
            </thead>
            <tbody class="tbodytr">
            @foreach($result as $arr)
                <tr class="active">
                    <th scope="row" width="70" style="line-height:80px;">{{$loop->iteration}}</th>
                    <td style="line-height:80px;"><img src="{{asset('admin/image/carousel/'.$arr->pic)}}" height="70"></td>
                    <td>{{$arr->title}}</td>
                    <td style="width:300px">{{$arr->url}}</td>
                    <td style="line-height:80px;">@if($arr->onsale=='0')"no"@else"yes"@endif</td>
                    <td style="line-height:80px;"><a href="{{asset('admin/carousel/edit/'.$arr->id)}}">修改</a>&nbsp;<a href="{{asset('admin/carousel/del/'.$arr->id)}}">删除</a></td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="links">
        {{$result->appends($where)->links()}}
        </div>
  {{--ajax静态页面操作--}}
        <script>
            console.log($('img[name=img]'));
            for(i=0;i<$('img[name=img]').length;i++){
                (function(i){
                    $('img[name=img]')[i].onclick = function(){
                        var onsale = $(this).attr('src')=='{{url('Admin/images/no.gif')}}'?'1':'0';
                        $(this).attr('src',$(this).attr('src')=='{{url('Admin/images/no.gif')}}'?'{{url('Admin/images/yes.gif')}}':'{{url('Admin/images/no.gif')}}');
                             var id =  $(this).attr('id');
                            $.ajax({
                                url: "{{asset('admin/carousel/onsale')}}",
                                data: {id: id, onsale: onsale},
                                type: 'get',
                                success: function (data, status, xhr) {
                                }
                            });
                    }
                })(i)
            }
        </script>
    </div>
    </div>
@endsection
@section('bottom')
@if (session('status'))
            <script>alert('删除失败！ : (');</script>
        @endif
        @if (session('statuss'))
            <script>alert('修改失败！ : (');</script>
        @endif
@endsection
