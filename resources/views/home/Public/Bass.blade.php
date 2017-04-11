@section('header')
    <!--C端头部黑色导航-->
    <div id="lg_tbar">

        <div class="inner">

            <div class="lg_tbar_l">
                <a href="#/app/download.html" class="lg_app" data-lg-tj-id="5500" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" target="_blank">拉勾APP</a>
                <a rel="nofollow" href="#.#/dashboard/" class="lg_os" data-lg-tj-id="5600" data-lg-tj-no="idnull" data-lg-tj-cid="idnull">进入企业版</a>
            </div>

            @if(empty(session('user') -> id))
                <ul class="lg_tbar_r">
                    <li>
                        <a href="/login" data-lg-tj-id="5f00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">登录</a>
                    </li>
                    <li>
                        <a href="/register" class="bl" data-lg-tj-id="5g00" data-lg-tj-no="idnull" data-lg-tj-cid="idnull" rel="nofollow">注册</a>
                    </li>
                </ul>
            @endif
@endsection