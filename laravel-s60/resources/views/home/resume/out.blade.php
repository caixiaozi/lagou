@extends('home.layout.firm')
@section('content')
    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em>
                </em>
                不合适职位
                <span>
            （共
            <i style="color:#fff;font-style:normal" id="positionNumber">
            2</i>
            个）
        </span>
            </h1>
            </dt>
            <dd>



                <ul class="reset my_jobs">


                        <li data-id="301">
                            <h3>
                                <a target="_blank" title="随便写" href="前台模板">
                                    Java高级工程师</a>
                                <span>
                        [上海]
                    </span>
                            </h3>
                            <span class="receivedResumeNo">
                    <a href="->华" style="cursor:default;color:#555;">
                      应聘人:  肖奈
                    </a>
                </span>
                            <div>
                                本科 / 24 / 15883848833</div>
                            <div class="c9">
                                审查时间：2017-04-23　类别:
                            </div>
                            <div class="links">
                                <a class="job_edit" href="editt">
                                    删除简历
                                </a>
                            </div>
                        </li>



                </ul>
            </dd>
        </dl>
    </div>
    @endsection