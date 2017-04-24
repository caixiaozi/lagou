@extends('home.layout.firm')
@section('content')
    <dl class="company_center_content">
        <dt>
        <h1>
            <em>
            </em>
            有效职位
            <span>
            （共
            <i style="color:#fff;font-style:normal" id="positionNumber">
            {{count($user)}}</i>
            个）
        </span>
        </h1>
        </dt>
        <dd>

            <ul class="reset my_jobs">

                @foreach ($user as $user)

                    <li data-id="301">
                        <h3>
                            <a target="_blank" title="随便写" href="browse?id={{$user->id}}">
                                {{$user->name}}</a>
                            <span>
                        [{{$user->city}}]
                    </span>
                        </h3>
                        <span class="receivedResumeNo">
                    <a href="javascript:;" style="cursor:default;color:#555;">

                    </a>
                </span>
                        <div>
                            {{$user->nature}} / {{$user->salary_low}}k-{{$user->salary_high}}k / {{$user->work_year}}  / {{$user->edu}}                                     </div>
                        <div class="c9">
                            发布时间： {{date('Y-m-d H:i',$user->modify_time)}}                                       </div>
                        <div class="links">
                            <a target="_blank" class="job_edit" href="edit?id={{$user->id}}">
                                编辑
                            </a>
                            <a class="job_offline" href="offline?id={{$user->id}}" data-id="301">
                                下线
                            </a>
                            <a class="job_del" href="del?id={{$user->id}}" data-id="301">
                                删除
                            </a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </dd>
    </dl>
    </div>
@endsection