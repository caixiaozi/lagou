$(function () {
    $('.footer_app, .footer_qr').hover(function () {
        $('i', this).stop().fadeIn(200);
    }, function () {
        $('i', this).stop().fadeOut(200);
    });
    $('body').on('click', 'a.btn_s', function () {
        $.colorbox.close();
        parent.jQuery.colorbox.close();
    });
    $('.inline').colorbox({ inline: true });
    $('.errorTips').click(function () {
        errorTips('\u4E0A\u4F20\u9644\u4EF6\u683C\u5F0F\u9519\u8BEF!');
    });
    $('#resend').click(function () {
        $.ajax({
            type: 'POST',
            url: ctx + '/user/resendActivatedMail'
        }).done(function (result) {
            if (result.success) {
                $.colorbox({
                    inline: true,
                    href: '#resend_success',
                    title: '\u9A8C\u8BC1\u90AE\u4EF6\u53D1\u9001\u6210\u529F'
                });
            } else {
                alert(result.msg);
            }
        });
    });
    $(window).scroll(function () {
        if ((document.documentElement.scrollTop || document.body.scrollTop) > 0) {
            $('#backtop').show();
        } else {
            $('#backtop').hide();
        }
    });
    $('#backtop').click(function () {
        pageScroll();
    });
    placeholderFn();
});
(function ($) {
    $.fn.hoverDelay = function (options) {
        var defaults = {
            hoverDuring: 200,
            outDuring: 200,
            hoverEvent: function () {
                $.noop();
            },
            outEvent: function () {
                $.noop();
            }
        };
        var sets = $.extend(defaults, options || {});
        var hoverTimer, outTimer, that = this;
        return $(this).each(function () {
            $(this).hover(function () {
                clearTimeout(outTimer);
                hoverTimer = setTimeout(function () {
                    sets.hoverEvent.apply(that);
                }, sets.hoverDuring);
            }, function () {
                clearTimeout(hoverTimer);
                outTimer = setTimeout(function () {
                    sets.outEvent.apply(that);
                }, sets.outDuring);
            });
        });
    };
}(jQuery));
function errorTips(msg, title) {
    $.colorbox({
        html: '<div id="uploadFile" class="popup">' + '<table width="100%">' + '<tr>' + '<td align="center"><h4 class="error_msg">' + msg + '</h4></td>' + '</tr>' + '<tr>' + '<td align="center"><a href="javascript:;" class="btn_s">\u786E&nbsp;\u5B9A</a></td>' + '</tr>' + '</table>' + '</div>',
        title: title ? title : '\u9519\u8BEF\u63D0\u793A'
    });
}
function textCounter(fieldId, countfieldId, maxlimit) {
    var field = $('textarea[name="' + fieldId + '"]');
    if ($.trim(field.val()).length > maxlimit) {
        field.val(field.val().substring(0, maxlimit));
    } else {
        field.next('.word_count').children('span').text(maxlimit - $.trim(field.val()).length);
    }
}
function pageScroll() {
    $('#backtop').css('background-position-x', '-28px');
    window.scrollBy(0, -20);
    if (document.documentElement.scrollTop == 0 && document.body.scrollTop == 0) {
        $('#backtop').css('background-position-x', '0');
        return;
    }
    scrolldelay = setTimeout('pageScroll()', 2);
}
function placeholderFn() {
    if (!placeholderSupport()) {
        $('[placeholder]').focus(function () {
            var input = $(this);
            if (input.val() == input.attr('placeholder')) {
                input.val('');
                input.removeClass('placeholder');
            }
        }).blur(function () {
            var input = $(this);
            if (input.val() == '' || input.val() == input.attr('placeholder')) {
                input.addClass('placeholder');
                input.val(input.attr('placeholder'));
            }
        }).blur();
    }
    if ($('[placeholder]').value === '') {
        $('[placeholder]').value = $('[placeholder]').attr('placeholder');
    }
}
function placeholderSupport() {
    return 'placeholder' in document.createElement('input');
}
function postoA(params) {
    if (!params)
        return;
    var arr = [];
    var img = new Image();
    for (var i in params) {
        arr.push(i + '=' + params[i]);
    }
    arr.push('time=' + Math.random());
    img.src = 'http://a.lagou.com/show?' + arr.join('&');
}