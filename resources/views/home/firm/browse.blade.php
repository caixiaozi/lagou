@extends('home.layout.firm')
@section('content')
    <div id="container">
        <div class="clearfix">
            <div class="content_l">
                <dl class="job_detail">
                    <dt>
                    <h1 title="内容运营"> <em> </em>
                        <div>
                        </div>
                    </h1>
                    <a class="jd_collection " href="/index.php/Home/JobShow/collection/job_id/766/uid/3.html"> </a>
                    </dt>
                    <dd class="job_request">
                        <span class="red">月薪6k-10k</span>
                        <span>成都</span>
                        <span>1年以上</span>
                        <span>本科以上学历</span>
                        <span>五险一金 员工旅游 带薪年假 技术好”</span>
                        <br />
                        <div>
                            发布时间:　2017-3-24
                        </div>
                    </dd>
                    <!--</foreach>-->
                    <dd class="job_bt">
                        <h3 class="description"> 职位描述 </h3>
                        <p> “发展前景好” </p>
                    </dd>
                    <div class="saoma saoma_btm">
                        <div class="dropdown_menu">
                            <div class="drop_l">
                                <img src="/html/job_qr_btm.png" width="131" height="131" />
                            </div>

                        </div>
                    </div>
                    <dd>
                        <a href="edit" class="btn fr btn_apply"> 修改职位 </a>
                    </dd>
                </dl>
                <div id="weibolist">
                </div>
            </div>
        </div>
    </div>
@endsection