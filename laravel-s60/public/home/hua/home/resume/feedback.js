$(function () {
    var feedback = $('#feedback-con');
    var closeBtn = $('.pfb-close');
    var showBtn = $('#feedback-icon');
    var fdForm = $('#product-fb');
    var ensureBtn = $('.ensure');
    var error = $('#feedback-icon .error');
    var config = {
        email: $('#login-email').val(),
        phone: $('#login-phone').val(),
        realUserId: $('#login-realUserId').val(),
        usertoken: $.cookie('user_trace_token'),
        hide: function (opt) {
            opt.fadeOut();
        },
        show: function (opt) {
            opt.fadeIn();
        },
        setCountdown: function (time, id) {
            var me = this;
            var count = setTimeout(function () {
                if (time == 0) {
                    clearTimeout(count);
                    id.addClass('dn');
                }
                me.setCountdown(time - 1, id);
            }, 1000);
        },
        valid: function (opt) {
            var me = this;
            var conVal = $.trim(opt.find('textarea').val());
            var len = conVal.length;
            var email = $.trim(opt.find('input').val());
            var feedbackPage = document.URL;
            var emailReg = /\w[-\w.+]*@([A-Za-z0-9][-A-Za-z0-9]+\.)+[A-Za-z]{2,14}/;
            var res = false;
            var error = $('#feedback-con .error');
            var eLen = email.length;
            var i = error.find('i');
            var flag = true;
            if (conVal == '' || len > 200) {
                error.removeClass('dn').find('span').text('\u4F60\u8FD8\u6CA1\u586B\u4EFB\u4F55\u53CD\u9988\u5462');
                i.addClass('txt');
                me.setCountdown(3, error);
                flag = false;
            }
            if (email != '') {
                res = emailReg.test(email);
            }
            if (!res && email != '') {
                error.removeClass('dn').find('span').text('\u8BF7\u8F93\u5165\u6709\u6548\u7684\u90AE\u7BB1\u5730\u5740');
                if (i.hasClass('txt')) {
                    i.removeClass('txt');
                }
                me.setCountdown(3, error);
                flag = false;
            }
            if (res && eLen > 100) {
                error.removeClass('dn').find('span').text('\u8BF7\u8F93\u5165100\u5B57\u4EE5\u5185\u7684\u90AE\u7BB1\u5730\u5740');
                if (i.hasClass('txt')) {
                    i.removeClass('txt');
                }
                me.setCountdown(3, error);
                flag = false;
            }
            if (flag) {
                $.ajax({
                    url: 'http://service.lagou.com/feedback',
                    type: 'POST',
                    data: {
                        userId: config.usertoken,
                        content: conVal,
                        loginEmail: config.email,
                        loginPhone: config.phone,
                        realUserId: config.realUserId,
                        feedbackEmail: email,
                        feedbackPage: feedbackPage
                    },
                    dataType: 'jsonp',
                    jsonp: 'callback'
                }).done(function (res) {
                    if (res.success) {
                        config.hide(feedback);
                        $('#product-fk .fk-suc').removeClass('dn');
                        me.setCountdown(3, $('#product-fk .fk-suc'));
                    } else {
                        alert(res.msg);
                    }
                });
            }
        }
    };
    showBtn.click(function () {
        fdForm.find('input').val('').end().find('textarea').val('');
        $.ajax({
            url: 'http://service.lagou.com/feedback/check',
            type: 'POST',
            data: {
                loginEmail: global.email,
                userId: global.usertoken
            },
            dataType: 'jsonp',
            jsonp: 'callback'
        }).done(function (res) {
            var errortips = $('#feedback-icon .fk-limit');
            if (res.success) {
                config.show(feedback);
            } else {
                errortips.removeClass('dn');
                config.setCountdown(3, errortips);
            }
        });
    });
    closeBtn.click(function () {
        config.hide(feedback);
    });
    ensureBtn.click(function () {
        config.valid(fdForm);
    });
});