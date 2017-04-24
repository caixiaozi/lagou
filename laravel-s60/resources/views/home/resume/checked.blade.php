@extends('home.layout.firm')
@section('content')
    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em>
                </em>
                已通知面试简历
                <span>
            （共
            <i style="color:#fff;font-style:normal" id="positionNumber">
            5</i>
            个）
        </span>
            </h1>
            </dt>
            <dd>



                <ul class="reset my_jobs">



                        <li data-id="301">
                            <h3>
                                <a target="_blank" title="随便写" href="前台模板">
                                  PHP高级工程师</a>
                                <span>
                        [广州]
                    </span>
                            </h3>
                            <span class="receivedResumeNo">
                    <a href="javascript:;" style="cursor:default;color:#555;">
                      应聘人:  杜玉玲
                    </a>
                </span>
                            <div>
                               大专 / 21 / 15757300401</div>
                            <div class="c9">
                                面试时间：2017-04-13　地点: 上海 - 黄浦区 - 打浦桥 - 瑞金南路1号 海兴广场 19GH
                            </div>
                            <div class="links">
                                <a target="_blank" class="job_edit" href="->华">
                                    浏览简历
                                </a>
                                <a class="job_del" href="del" data-id="301">
                                    已面试
                                </a>
                            </div>
                        </li>



                </ul>
            </dd>
        </dl>
    </div>
@endsection