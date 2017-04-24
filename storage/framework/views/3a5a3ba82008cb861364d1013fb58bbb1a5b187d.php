<?php $__env->startSection('content'); ?>
    <link rel="stylesheet" href="<?php echo e(url('home/resume/css/index.css')); ?>"/>

    <script type="text/javascript">
        var w,h,className;
        function getSrceenWH(){
            w = $(window).width();
            h = $(window).height();
            $('#dialogBg').width(w).height(h);
        }

        window.onresize = function(){
            getSrceenWH();
        }
        $(window).resize();

        $(function(){
            getSrceenWH();
            var classid = 0;
            //显示弹框
            $('.tz').click(function(){
                classid = $(this).attr('id');
                className = $(this).attr('class');
                $('.dialogBg').fadeIn(300);
                $('#dialog').removeAttr('class').addClass('animated '+className+'').fadeIn();
            });
            //tongzhi
            $('#send').click(function(){
                $('.editInfos').prepend("<input type='hidden' name='id' value='"+classid+"' />");
            });
            //关闭弹窗
            $('.claseDialogBtn').click(function(){
                $('#dialogBg').fadeOut(300,function(){
                    $('#dialog').addClass('bounceOutUp').fadeOut();
                });
            });
        });
    </script>

    <div class="content">
        <dl class="company_center_content">
            <dt>
            <h1>
                <em>
                </em>
                待处理简历
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
                                   Ben</a>
                                <span>
                        ['男']
                    </span>
                            </h3>
                            <span class="receivedResumeNo">
                    <a href="javascript:;" style="cursor:default;color:#555;">
                        <!-- 简历状态[待做] -->
                        未处理
                    </a>
                </span>
                            <div>
                               硕士 / 25 / 2年</div>
                            <div class="c9">
                                接收时间： 2017-04-12                                       </div>

                            <!-- //////////////////////// -->

                            <div class="box">

                                <div id="dialogBg"></div>
                                <div id="dialog" class="animated">
                                    <img class="dialogIco" width="50" height="50" src="images/ico.png" alt="" />
                                    <div class="dialogTop">
                                        <a href="javascript:;" class="claseDialogBtn">关闭</a>
                                    </div>
                                    <form action="/resume/email" method="post" id="editForm">
                                        <ul class="editInfos">

                                            <input type="hidden" name="state4" value="1">
                                            <li><label><font color="#ff0000">* </font>主题
                                                    <input style="font-size:13px; width:360px;" type="text" name="audition_time" required value="面试通知" class="ipt" /></label></li>

                                            <li><label><font color="#ff0000">* </font>面试时间
                                                    <input style="font-size:13px; width:360px" type="text" name="audition_time" required value="<?php echo e(date('Y-m-d H:i',time())); ?>" class="ipt" /></label></li>

                                            <li><label><font color="#ff0000">* </font>面试地点
                                                    <input style="font-size:13px; width:360px" type="text" name="audition_address" required value="" class="ipt" /></label></li>
                                            <li><label><font color="#ff0000">* </font>联系电话
                                                    <input style="font-size:13px; width:360px" type="text" name="audition_linkphone" required value="" class="ipt" /></label></li>
                                            <li><label><font color="#ff0000">* </font>面试联系人
                                                    <input style="font-size:13px; width:360px;" type="text" name="audition_linkman"  value="" class="ipt" /></label></li>
                                            <?php echo e(csrf_field()); ?>

                                            <li><input type="submit" value="发送面试通知" class="submitBtn" id='send' /></li>
                                        </ul>
                                    </form>
                                </div>
                            </div>

                            <!-- /////////////////////////// -->
                            <div class="links">
                                <a class="job_del" href="->华" data-id="301">
                                    查看简历
                                </a>
                                <a href="javascript:;" class="tz job_edit rollIn" id="">
                                    通知面试
                                </a>
                                <a class="job_offline" href="/resume/check?id=" data-id="301">
                                    不合适
                                </a>
                            </div>
                        </li>


                </ul>
            </dd>
        </dl>
    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('home.layout.firm', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>