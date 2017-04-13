@extends('home.layout.firm')
@section('content')
    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em>
                </em>
                发布新职位
            </h1>
            </dt>
            <dd>
                <div class="publish_tip">
                    <h2>
                        恭喜你，职位发布成功!
                    </h2>
                    <a target="_blank" href="browse">
                        预览职位
                    </a>
                    <br>
                    <a class="greylink" href="recruit">
                        继续发布新职位
                    </a>
                    <br>
                    <a class="greylink" href="/head/index">
                        进入我的公司主页
                    </a>
                    <br>
                </div>
                <div class="weixin weixinSuc">
                    <div class="qr">
                        <img width="110" height="110" src="{{url('home/firm/images/d1f91afa15eb451eaef4d14dcb3b54ec_318969.jpg')}}">
                        <div>
                            [仅限本人使用]
                        </div>
                    </div>
                    <div class="qr_text">
                        <h3>
                            关注微信服务号，可随时获取接收简历的通知
                        </h3>
                        关注方式：
                        <br>
                        <span>
                        打开微信
                    </span>
                        <img width="30" height="30" src="{{url('home/firm/images/wechat1.png')}}">
                        <span>
                        →发现
                    </span>
                        <img width="31" height="30" src="{{url('home/firm/images/wechat2.png')}}">
                        <span>
                        →扫一扫左侧二维码
                    </span>
                        <img width="78" height="29" src="{{url('home/firm/images/wechat3.png')}}">
                    </div>
                </div>
            </dd>
        </dl>
    </div>
@endsection