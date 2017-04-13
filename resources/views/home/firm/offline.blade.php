@extends('home.layout.firm')
@section('content')
    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em>
                </em>
                已下线职位
                <span>
            （共
            <i style="color:#fff;font-style:normal" id="positionNumber">
           3</i>
            个）
        </span>
            </h1>
            </dt>
            <dd>

                <ul class="reset my_jobs">



                        <li data-id="301">
                            <h3>
                                <a target="_blank" title="随便写" href="前台模板">
                                    海通创新 海量集团</a>
                                <span>
                        上海
                    </span>
                            </h3>
                            <span class="receivedResumeNo">
                    <a href="javascript:;" style="cursor:default;color:#555;">
                    </a>
                </span>
                            <div>
                                PHP开发工程师 / 2000k-5000k / 1年工作经验  / 不限                                    </div>
                            <div class="c9">
                                发布时间： 2017-02-09                                     </div>
                            <div class="links">
                                <a target="_blank" class="job_edit" href="edit">
                                    再发布
                                </a>
                                <a class="job_del" href="del?id=" data-id="301">
                                    删除
                                </a>
                            </div>
                        </li>

                </ul>
            </dd>
        </dl>
    </div>
@endsection