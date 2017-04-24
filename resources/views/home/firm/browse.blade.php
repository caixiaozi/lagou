@extends('home.layout.firm')
@section('content')
    <div id="container">
        <div class="clearfix">
            <div class="content_l">
                <dl class="job_detail">
                    <dt>

                    <h1 title="内容运营"> <em> </em>
                        <div>
                        </div> {{$user->name}} </h1>
                    <a class="jd_collection " href="/index.php/Home/JobShow/collection/job_id/766/uid/3.html"> </a>
                    </dt>
                    <dd class="job_request">
                        <span class="red">月薪{{$user->salary_low}}k-{{$user->salary_high}}k</span>
                        <span>{{$user->city}}</span>
                        <span>{{$user->work_year}}</span>
                        <span>{{$user->edu}}</span>
                        <span>{{$user->welfare}}</span>
                        <br />
                        <div>
                            发布时间:　{{date('Y-m-d H:i',$user->modify_time)}}
                        </div>
                    </dd>
                    <!--</foreach>-->
                    <dd class="job_bt">
                        <h3 class="description"> 职位描述 </h3>
                        <p> {{$user->desc}} </p>
                    </dd>
                    <div class="saoma saoma_btm">
                        <div class="dropdown_menu">
                            <div class="drop_l">
                                <img src="{{url('home/firm/images/job_qr_btm.png')}}" width="131" height="131" />
                            </div>

                        </div>
                    </div>
                    <dd>
                        <a href="edit?id={{$user->id}}" class="btn fr btn_apply"> 修改职位 </a>
                    </dd>
                </dl>
                <div id="weibolist">
                </div>

            </div>
        </div>
    </div>
@endsection

