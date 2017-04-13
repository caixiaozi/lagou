@extends('home.layout.head')
@section('content')
    <div id="container">
        <div class="content_mid">
            <dl class="c_section c_section_mid">
                <dt>
                <h2>
                    <em>
                    </em>
                    申请公司认证
                </h2>
                </dt>
                <dd class="c_certify">
                    <h4>
                        申请公司认证的标准
                    </h4>
                    <ul class="c_certify_list">
                        <li class="list1">
                            公司主页
                            <span>
                                        [ 网站处于正常运行状态，且必须具有备案号 ]
                                    </span>
                        </li>
                        <li class="list2">
                            公司名称
                            <span>
                                        [ 简称应为企业/产品简称，不可使用简易修饰性词语 ]
                                    </span>
                        </li>
                        <li class="list3">
                            公司logo
                            <span>
                                        [ 必须真实有效的体现公司形象 ]
                                    </span>
                        </li>
                        <li class="list4">
                            公司的营业执照
                            <div class="list4_child">
                                        <span>
                                            *
                                        </span>
                                <div>
                                    4.1请提供有效年检期内的《企业法人营业执照》副本
                                    <br>
                                    4.2为保证信息安全，审核执照不提供预览功能，请谅解
                                    <br>
                                    4.3该营业执照拉勾网只用作公司认证使用，请放心上传
                                </div>
                            </div>
                        </li>
                    </ul>

                    <form action="/head/shenqin" method="post" enctype="multipart/form-data">

                        <div class="business_license">
                            <div class="license_upload">
                                <div style="background-color: rgb(147, 183, 187);">
                                        <span>
                                            上传公司营业执照副本
                                        </span>
                                    <br>
                                    支持jpg、png、gif、pdf格式，文件不超过10M
                                </div>
                            </div>
                            <input name="licenes" id="businessLicenes"  type="file">
                        </div>

                        <input type="hidden" name="id" value="">
                        {{csrf_field()}}
                        <input type="submit" value="提交" class="fr">
                    </form>



                </dd>
            </dl>
        </div>
        <div class="clear"></div>
    </div>
@endsection