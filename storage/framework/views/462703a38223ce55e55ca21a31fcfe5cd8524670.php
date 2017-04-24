<?php $__env->startSection('content'); ?>
    <div class="y_nav" style="display:none"><dl class="c_section">
            <dt id="autofiletitle">
            <h1>
                <em></em>
                修改密码
            </h1>
            </dt>
            <dd>
                <form id="updatePswForm" method="post" action="/personal/update">
                    <table class="savePassword">
                        <tbody><tr>
                            <td>登录帐号</td>
                            <td class="c7">
                                <input name="username" id="oldpassword" maxlength="16" value="" autocomplete="off" type="text">                       </td>
                        </tr>
                        <tr>
                            <td class="label">当前密码</td>
                            <td>
                                <input name="password" id="oldpassword" maxlength="16" autocomplete="off" type="password">
                                <span class="error" style="display:none;" id="updatePwd_beError"></span>
                            </td>
                        </tr>
                        <tr>
                            <td class="label">新密码</td>
                            <td><input name="newpassword" id="newpassword" maxlength="16" autocomplete="off" type="password"></td>
                        </tr>

                        <tr>
                            <td>&nbsp;</td>
                            <?php echo e(csrf_field()); ?>

                            <td><input value="保 存" type="submit"></td>
                        </tr>
                        </tbody></table>
                </form>
            </dd>
        </dl></div>

    </div>
    <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.list', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>