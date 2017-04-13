@extends('home.layout.firm')
@section('content')
    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em>
                </em>
                有效职位
                <span>
            （共
            <i style="color:#fff;font-style:normal" id="positionNumber">
            10</i>
            个）
        </span>
            </h1>
            </dt>
            <dd>

                <ul class="reset my_jobs">



                        <li data-id="301">
                            <h3>
                                <a target="_blank" title="随便写" href="browse">
                                    苗苗</a>
                                <span>
                       浙江
                    </span>
                            </h3>
                            <span class="receivedResumeNo">
                    <a href="javascript:;" style="cursor:default;color:#555;">

                    </a>
                </span>
                            <div>
                                PHP开发工程师 / 8000k-254678k / 5年工作经验  / 博士                                    </div>
                            <div class="c9">
                                发布时间： 2017-04-02                                      </div>
                            <div class="links">
                                <a target="_blank" class="job_edit" href="edit">
                                    编辑
                                </a>
                                <a class="job_offline" href="offline" data-id="301">
                                    下线
                                </a>
                                <a class="job_del" href="del" data-id="301">
                                    删除
                                </a>
                            </div>
                        </li>

                </ul>
            </dd>
        </dl>
    </div>
@endsection