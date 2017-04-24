var projectTitle = $(".mr_jobe_list .l2 .projectTitle");
projectTitle.each(function() {
    var a = $(this);
    var b = a.width();
    a.find("span").css("left", b + 5)
});
var amountScore = parseInt($.trim($(".mr_bfb").text()));
var oMoudle = {
    workId: "",
    eduId: ""
};
var oMoudleScore = {
    expectJobsScore: "",
    projectExpScore: "",
    workShowScore: "",
    skillScore: "",
    myRemarkScore: ""
};
var oDelMoudle;
var oMdScore = {
    expectJobsScore: globals.expectJobsScore,
    skillScore: globals.skillScore,
    projectExpScore: globals.projectExperienceScore,
    workShowScore: globals.workShowScore,
    myRemarkScore: globals.myRemarkScore
};
function handleFrames() {
    try {
        $.each(Array.prototype.slice.call(window.frames),
        function(b, c) {
            c.document.body.onclick = function() {
                c.top.document.body.click()
            }
        })
    } catch(a) {}
}
$(function() {
    var J = $("#customTitleName");
    if (J.val() == "") {
        $("#customBlock .cust_title span").text("自定义标题")
    } else {
        $("#customBlock .cust_title span").text(J.val())
    }
    if ($(".md_flag").length == 9) {
        $(".mr_module_add").addClass("dn")
    } else {
        $(".mr_module_add").removeClass("dn")
    }
    initTitlePosition();
    initMceMr();
    var aq = globals.initRatio;
    updateRatioRM(aq, aq);
    var K = $(".mr_myresume_r .scroll_fix").offset();
    $(window).scroll(function() {
        var e = $(window).scrollTop();
        if (K && K.top <= e) {
            $(".mr_myresume_r .scroll_fix").addClass("mr_myresume_r_fix")
        } else {
            $(".mr_myresume_r .scroll_fix").removeClass("mr_myresume_r_fix")
        }
    });
    if ($(".m_hide").hasClass("dn").length == 0) {
        $(".mr_module_add").hide()
    }
    var M = "";
    var y = "";
    var C = true;
    window.onbeforeunload = function() {
        if (C) {
            return
        } else {
            return "内容还未保存，确认离开该页面吗？ "
        }
    };
    U();
    function U() {
        var av = $(".mr_job_des .mr_expjob_content");
        var au = /&nbsp/g;
        var e = $.trim(av.text()).replace(au, "");
        if (e != "") {
            $(".mr_job_des").removeClass("dn")
        }
    }
    function f() {
        $.validator.addMethod("uptextInMce",
        function e(az, ay) {
            var au = tinyMCE.get("upjobContent").getContent().replace(/<.*?>/g, "");
            var ax = getStrLen(au);
            var av = 0;
            for (var aw = 0; aw < ax; aw++) {
                if (az.charCodeAt(aw) < 27 || az.charCodeAt(aw) > 126) {
                    av += 2
                } else {
                    av++
                }
            }
            if (av <= 1600 || av == 0) {
                return true
            } else {
                return false
            }
        },
        "请输入1600字以内的工作内容");
        $.validator.classRuleSettings.uptextInMce = {
            uptextInMce: true
        }
    }
    var an = function() {
        $(".companyName").autocomplete({
            source: function(av, e) {
                var au = new Array();
                $.ajax({
                    type: "POST",
                    async: false,
                    url: sctx + "/suggestion",
                    dataType: "jsonp",
                    jsonp: "suggestCompanyback",
                    data: {
                        input: av.term,
                        type: 2,
                        num: 6
                    }
                }).done(function(aw) {
                    if (aw != null && aw != undefined) {
                        for (var ax in aw) {
                            var az = aw[ax];
                            if (az != null && az != undefined && az.length > 0) {
                                for (var ay in az) {
                                    au.push(az[ay].cont)
                                }
                            }
                        }
                    }
                    e(au)
                })
            },
            minLength: 1
        })
    };
    $(".mr_created").delegate(".companyName", "keyup",
    function() {
        myresumeCommon.utils.throttle(an, [], this, 300)
    });
    var V = function() {
        $(".autoPosition").autocomplete({
            source: function(av, e) {
                var au = new Array();
                $.ajax({
                    type: "POST",
                    async: false,
                    url: sctx + "/suggestion",
                    dataType: "jsonp",
                    jsonp: "suggestPositionback",
                    data: {
                        input: av.term,
                        type: 5,
                        num: 6
                    }
                }).done(function(aw) {
                    if (aw != null && aw != undefined) {
                        for (var ax in aw) {
                            var az = aw[ax];
                            if (az != null && az != undefined && az.length > 0) {
                                for (var ay in az) {
                                    au.push(az[ay].cont)
                                }
                            }
                        }
                    }
                    e(au)
                })
            },
            minLength: 1
        })
    };
    $(".mr_created").delegate(".autoPosition", "keyup",
    function() {
        myresumeCommon.utils.throttle(V, [], this, 300)
    });
    $(".mr_name_edit .ed_name,.mr_intro_edit .ed_name").bind("click",
    function(au) {
        au.stopPropagation();
        $(".select_color").removeClass("select_color");
        $(this).addClass("select_color")
    });
    $(".mr_r_nav ul li:first").bind("click",
    function(au) {
        au.stopPropagation();
        var av = $(this).find("em");
        if (!av.is(":hidden")) {
            av.addClass("dn")
        }
    });
    if ($(".mr_sns") && $(".mr_sns a").length > 0) {
        af()
    }
    function af() {
        var e = $(".mr_sns a");
        e.eq(e.length - 1).addClass();
        e.each(function(ax) {
            var aw = $(this).data("sns");
            var az = $(this);
            var av = az.find("span");
            var ay = av.find("em");
            switch (parseInt(aw)) {
            case 1:
                var au = document.createTextNode("Twitter");
                az.addClass("sns1");
                break;
            case 2:
                var au = document.createTextNode("Dribbble");
                az.addClass("sns2");
                break;
            case 3:
                var au = document.createTextNode("Behance");
                az.addClass("sns3");
                break;
            case 4:
                var au = document.createTextNode("LinkedIn");
                az.addClass("sns4");
                break;
            case 5:
                var au = document.createTextNode("Quora");
                az.addClass("sns5");
                break;
            case 6:
                var au = document.createTextNode("Github");
                az.addClass("sns6");
                break;
            case 7:
                var au = document.createTextNode("知乎");
                az.addClass("sns7");
                break;
            case 8:
                var au = document.createTextNode("LOFTER");
                az.addClass("sns8");
                break;
            case 9:
                var au = document.createTextNode("UI中国");
                az.addClass("sns9");
                break;
            case 10:
                var au = document.createTextNode("新浪微博");
                az.addClass("sns10");
                break;
            case 11:
                var au = document.createTextNode("SegmentFault");
                az.addClass("sns11");
                break;
            case 12:
                var au = document.createTextNode("StackoverFlow");
                az.addClass("sns12");
                break
            }
            av.prepend($(au)).css("marginLeft", -(av.width() + 20) / 2 + "px")
        })
    }
    $(".mr_sns").delegate("a", "hover",
    function() {
        $(this).find("span").toggle()
    });
    $(".mr_headfile").hover(function() {
        $(".shadow").show()
    },
    function() {
        $(".shadow").hide()
    });
    $(".mr_p_name,.mr_p_info,.mr_p_introduce").hover(function() {
        $(this).addClass("mr_active").find(".mr_edit").removeClass("dn")
    },
    function() {
        $(this).removeClass("mr_active").find(".mr_edit").addClass("dn")
    });
    $(".mr_p_name .mr_edit").bind("click",
    function() {
        $(".mr_p_name").hide();
        $("#mr_name").val($(".mr_p_name .mr_name").text());
        $(".mr_name_edit").removeClass("dn");
        $("#nameForm").find("input#mr_name")[0].focus();
        C = false
    });
    var q = $("input#mr_name");
    q.on("keyup",
    function() {
        var e = $.trim(q.val()).length;
        if (e == 0) {
            $(this).attr("placeholder", "姓名")
        }
    });
    $(".mr_name_edit .cancel").bind("click",
    function() {
        $(".mr_p_name").show();
        $(".mr_name_edit").addClass("dn");
        C = true
    });
    $(".mr_p_introduce .mr_edit").bind("click",
    function() {
        $(".mr_p_introduce").hide();
        if ($(this).attr("data-type") == "0") {
            $("#mr_intro").val($(".mr_p_introduce .mr_intro").text())
        }
        $(".mr_intro_edit").removeClass("dn");
        $("#mr_intro").focus();
        $("#introduceForm .mroneError").hide();
        C = false
    });
    $(".mr_intro_edit .cancel").bind("click",
    function() {
        $(".mr_p_introduce").show();
        $(".mr_intro_edit").addClass("dn");
        C = true
    });
    $(".a").hover(function() {
        var av = $(".birth_span");
        var au = $.trim(av.text());
        var e = $(".a");
        if (au != "" && au != "出生") {
            av.removeClass("dn");
            e.css("cursor", "pointer")
        } else {
            e.css("cursor", "default")
        }
    },
    function() {
        setTimeout(function() {
            var e = $(".birth_span");
            e.addClass("dn")
        },
        90)
    });
    jQuery.validator.addMethod("truename",
    function(av, e) {
        var au = /^([a-zA-Z ]+|[\u4e00-\u9fa5]+)$/;
        return this.optional(e) || au.test(av)
    },
    "请输入有效的公司简称");
    jQuery.validator.addMethod("truename2",
    function(av, e) {
        var au = /([·`~!@#$^&':;,?~！……&；：。，、？=])/;
        return this.optional(e) || !au.test(av)
    },
    "请输入有效的名字");
    $("#nameForm").validate({
        rules: {
            mr_name: {
                required: true,
                truename2: true,
                rangeLenStr: [1, 15]
            }
        },
        messages: {
            mr_name: {
                required: "必填",
                truename2: "格式错误",
                rangeLenStr: "请输入真实姓名"
            }
        },
        errorPlacement: function(e, au) {
            e.appendTo($(au).parent());
            $(".c_section span.error").css("margin", "5px 0 10px 138px")
        },
        submitHandler: function(aw) {
            var av = globals.token;
            var au = $('input[name="mr_name"]', aw).val();
            var e = globals.resumeId;
            au = $.trim(au);
            $(aw).find(":submit").val("保存中...").attr("disabled", true);
            $.ajax({
                url: ctx + "/index.php/Home/Resume/updateUserName",
                type: "POST",
                data: {
                    name: au,
                    id: e,
                    resubmitToken: av
                },
                dataType: "json"
            }).done(function(ax) {
                if (ax.success) {
                    C = true;
                    globals.token = ax.resubmitToken;
                    $(".mr_name").html(au).parent().show();
                    $("#nowrap").html(au + "&nbsp;");
                    // var aA = ax.content.resume;
                    // var az = aA.name;
                    $(".mr_name_edit").addClass("dn");
                    // $(".mr_name").html(au).parent().show();
                    // var ay = ax.content.url;
                    // $("#body").append("<iframe id='ifr' style='display:none;' src='" + ay + "'></iframe>")
                } else {
                    alert(ax.msg)
                }
                $(aw).find(":submit").val("保 存").attr("disabled", false)
            })
        }
    });
    function W(av) {
        var e = 0;
        for (var au = 0; au < av.length; au++) {
            var aw = av.charCodeAt(au);
            if ((aw >= 1 && aw <= 126) || (65376 <= aw && aw <= 65439)) {
                e++
            } else {
                e += 2
            }
        }
        return e
    }
    $("#introduceForm").on("keyup", 'input[name="mr_intro"]',
    function() {
        var au = $(this);
        var av = $.trim(au.val());
        var e = W(av);
        if (e == 0) {
            C = true;
            au.siblings("span.mroneError").text("必填").show()
        } else {
            if (e < 4) {
                C = true;
                au.siblings("span.mroneError").text("太短了").show()
            } else {
                if (e >= 4 && e <= 58) {
                    au.siblings("span.mroneError").hide()
                } else {
                    if (e > 58) {
                        au.siblings("span.mroneError").text("请输入4-58个字的介绍").show()
                    }
                }
            }
        }
    });
    $("#introduceForm .save").click(function() {
        var ax = $(this);
        var az = $.trim($("#introduceForm #mr_intro").val());
        var e = W(az);
        if (e == 0) {
            C = true;
            ax.siblings("span.mroneError").text("必填").show()
        } else {
            if (e < 4) {
                C = true;
                ax.siblings("span.mroneError").text("太短了").show()
            } else {
                if (e >= 4 && e <= 58) {
                    var aw = $("#introduceForm");
                    var au = globals.resumeId;
                    var ay = $('input[name="mr_intro"]', aw).val();
                    $(aw).find(":submit").val("保存中...").attr("disabled", true);
                    var av = globals.token;
                    $.ajax({
                        url: ctx + "/index.php/Home/Resume/oneWord",
                        type: "POST",
                        data: {
                            oneWord: ay,
                            resubmitToken: av,
                            id: au
                        },
                        dataType: "json"
                    }).done(function(aC) {
                        if (aC.success) {
                            globals.token = aC.resubmitToken;
                            $(".mr_intro_edit").addClass("dn");
                            var aB = $(".mr_intro");
                            if (aB.hasClass("mr_intro_grey")) {
                                aB.removeClass("mr_intro_grey").addClass("mr_intro_normal")
                            }
                            aB.text(ay).attr("title", ay).parent().show();
                            var aE = aC.content.infoCompleteStatus.score;
                            var aA = parseInt($.trim($(".mr_bfb").text()));
                            var aD = amountScore - aA + aE;
                            updateRatioRM(aE, aD)
                        } else {
                            alert(aC.msg)
                        }
                        $(aw).find(":submit").val("保 存").attr("disabled", false);
                        C = true
                    })
                } else {
                    if (e > 58) {
                        ax.siblings("span.mroneError").text("请输入4-58个字的介绍").show()
                    }
                }
            }
        }
    });
    $(".mr_created,.mr_uncreate").delegate(".normal_s", "click",
    function(av) {
        av.stopPropagation();
        var aw = $(this).find(".xl_list");
        var au = aw.is(":hidden");
        $(".xl_list").hide();
        $(".select_color").removeClass("select_color");
        if (au) {
            $(this).addClass("select_color");
            aw.show()
        } else {
            aw.hide()
        }
        if (m) {
            m.hide()
        }
        if (x) {
            x.hide()
        }
        if (u) {
            u.hide()
        }
    });
    $(".mr_created,.mr_uncreate").delegate(".email_s,.mobile_s", "focus",
    function(av) {
        av.stopPropagation();
        var aw = $(this).find(".xl_list");
        var au = aw.is(":hidden");
        $(".xl_list").hide();
        $(".select_color").removeClass("select_color");
        if (au) {
            $(this).addClass("select_color");
            aw.show()
        } else {
            aw.hide()
        }
        if (m) {
            m.hide()
        }
        if (x) {
            x.hide()
        }
        if (u) {
            u.hide()
        }
    });
    $(".mr_self_state .mr_self_s").bind("click",
    function(au) {
        au.stopPropagation();
        $(".form_wrap").removeClass("select_color");
        var av = $(this).find(".xl_list");
        if (av.is(":hidden")) {
            $(this).addClass("select_color")
        }
        av.toggle()
    });
    $(".mr_self_state .mr_self_s").hover(function() {
        if ($(this).hasClass("active")) {
            $(this).removeClass("active")
        }
    },
    function() {
        var e = $(this).find(".xl_list");
        if (e.is(":hidden")) {
            $(this).addClass("active")
        }
    });
    $("#mr_mobile,#mr_email").click(function(au) {
        au.stopPropagation();
        $(".select_color").removeClass("select_color");
        $(this).parent().addClass("select_color");
        x.hide()
    });
    $(".xl_list").bind("click",
    function(au) {
        au.stopPropagation()
    });
    $(".mr_my_qr").hover(function() {
        $(this).addClass("open")
    },
    function() {
        $(this).removeClass("open")
    });
    $(document).click(function() {
        var au = $(".mr_years");
        if (au.find(".xl_list").is(":visible") && $("#mr_year").val() == "") {
            $("<span class='error'>").text("必选").appendTo(au)
        }
        var aw = $(".mr_months");
        if (aw.find(".xl_list").is(":visible") && $("#mr_month").val() == "") {
            $("<span class='error'>").text("必选").appendTo(aw)
        }
        $(".xl_list").hide();
        $(".select_color").removeClass("select_color");
        var e = $(".mr_down_tip");
        if (!e.is(":hidden")) {
            e.addClass("dn")
        }
        if (m) {
            m.hide()
        }
        if (x) {
            x.hide()
        }
        if (u) {
            u.hide()
        }
        if (aa) {
            aa.hide()
        }
        if (G) {
            G.hide()
        }
        if (ac) {
            ac.hide()
        }
        if (Z) {
            Z.hide()
        }
        if (s) {
            s.hide()
        }
        if (P) {
            P.hide()
        }
        if (t) {
            t.hide()
        }
        if (r) {
            r.hide()
        }
        if (aa) {
            aa.hide()
        }
        if (G) {
            G.hide()
        }
        var av = $(".mr_self_state .mr_self_s");
        if (!av.hasClass("active")) {
            av.addClass("active")
        }
        var ax = $(".set_default_wrap");
        if (ax.hasClass("active")) {
            ax.trigger("click")
        }
    });
    $(".ul_xl").delegate("li", "click",
    function() {
        $("#xl").val($(this).text());
        $(this).parent().parent().hide();
        $(".select_color").removeClass("select_color")
    });
    $(".ul_gznx").delegate("li", "click",
    function() {
        var e = $(this).text();
        $("#gznx").val(e);
        if ($.trim(e) == "应届毕业生") {
            var au = $(".ul_shenfen li[data-id = '1']");
            if (au.length != 0) {
                $("#shenfen").val(au.text());
                globals.personIdFlag = "1"
            }
        } else {
            var av = $(".ul_shenfen li[data-id = '2']");
            if (av.length != 0) {
                $("#shenfen").val(av.text());
                globals.personIdFlag = "2"
            }
        }
        $(this).parent().parent().hide();
        $(".select_color").removeClass("select_color")
    });
    $(".mr_years .normal_s, .mr_months .normal_s").click(function() {
        $(this).parent().find("span.error").remove()
    });
    $(".ul_year").delegate("li", "click",
    function() {
        $("#mr_year").val($(this).text());
        $(this).parent().parent().hide();
        $(".select_color").removeClass("select_color")
    });
    $(".ul_month").delegate("li", "click",
    function() {
        $("#mr_month").val($(this).text());
        $(this).parent().parent().hide();
        $(".select_color").removeClass("select_color")
    });
    $(".ul_shenfen").delegate("li", "click",
    function() {
        $("#shenfen").val($(this).text());
        globals.personIdFlag = $(this).attr("data-id");
        $(this).parent().parent().hide();
        $(".select_color").removeClass("select_color")
    });
    $(".ul_self_state").delegate("li", "click",
    function() {
        var au = globals.token;
        var e = $(this).text();
        var av = $(this);
        $.ajax({
            url: ctx + "/resume/updateUserStatus.json",
            type: "post",
            data: {
                status: e,
                resumeId: globals.resumeId,
                resubmitToken: au
            },
            dataType: "json"
        }).done(function(aw) {
            if (aw.success) {
                globals.resubmitToken = aw.resubmitToken;
                updateResumeTime(aw.content.refreshTime);
                $("#self_state").val(e);
                av.parent().parent().hide();
                $(".select_color").removeClass("select_color")
            } else {
                alert(aw.msg)
            }
        })
    });
    $(".mr_sex .mr_man").bind("click",
    function() {
        $(this).addClass("active").find("i").addClass("active");
        $(".mr_sex .mr_women").removeClass("active").find("i").removeClass("active")
    });
    $(".mr_sex .mr_women").bind("click",
    function() {
        $(this).addClass("active").find("i").addClass("active");
        $(".mr_sex .mr_man").removeClass("active").find("i").removeClass("active")
    });
    $(".sns_area").delegate('input[id^="sns"]', "click",
    function(au) {
        au.stopPropagation();
        $(".select_color").removeClass("select_color");
        $(this).parent().addClass("select_color")
    });
    $(".sns_area").delegate(".sns_del", "click",
    function() {
        var au = $(this).parent().find("i").attr("class");
        au = "." + au;
        $(this).parent().remove();
        $(".mr_add_m ul .active").removeClass("active");
        $(".mr_add_m " + au + "").show();
        var e = $(".sns_area .mr_sns_m");
        if (e.length == 0) {
            $(".mr_add_sns").hide();
            $(".sns_empty").show()
        }
        return false
    });
    $(".mr_add_m li").hover(function() {
        $(this).find("span").show()
    },
    function() {
        $(this).find("span").hide()
    });
    $(".mr_locks").hover(function() {
        $(this).find("em").show()
    },
    function() {
        $(this).find("em").hide()
    });
    $(".mr_add_m ul").delegate("li", "click",
    function(au) {
        au.stopPropagation();
        if ($(this).hasClass("active")) {
            $(this).removeClass("active")
        } else {
            $(this).addClass("active")
        }
    });
    $(".mr_add_op .sns_save").bind("click",
    function(av) {
        av.stopPropagation();
        var au = "";
        $(".mr_add_m ul .active").each(function(aw) {
            var e = $(this).data("flag");
            var ax = "sns" + e;
            au += '<div class="form_wrap mr_sns_m">';
            au += '	<i class="' + ax + '"></i>';
            au += '	<em class=""></em>';
            au += '	<a href="javascript:;" class="sns_del"></a>';
            au += '	<input type="text" id="' + ax + '" name="' + ax + '" data-sns="' + e + '" class="mr_button" />';
            au += "</div>"
        });
        $(".mr_add_m ul .active").removeClass("active");
        $(".sns_area").append(au);
        $(".mr_add_m").slideUp("dn");
        return false
    });
    $(".mr_add_m").click(function(au) {
        au.stopPropagation()
    });
    $(".mr_add_op .sns_cancel").bind("click",
    function(au) {
        au.stopPropagation();
        $(".mr_add_m li").removeClass("active");
        $(".mr_add_m").slideUp("dn");
        return false
    });
    $(".sns_add").bind("click",
    function() {
        if ($(".sns_area .mr_sns_m").length != 12) {
            $(".mr_add_m li").show();
            $(".sns_area i").each(function(e) {
                var au = $(this).attr("class");
                au = "." + au;
                $(".mr_add_m " + au + "").hide()
            });
            $(".mr_add_m").slideToggle(300)
        }
    });
    $(".sns_add_empty").bind("click",
    function() {
        if ($(".sns_area .mr_sns_m").length != 12) {
            $(".mr_add_m li").show();
            $(".sns_area i").each(function(e) {
                var au = $(this).attr("class");
                au = "." + au;
                $(".mr_add_m " + au + "").hide()
            });
            $(".mr_add_m").slideToggle(300)
        }
    });
    $(".sns_area").delegate("input[id^='sns']", "keyup",
    function() {
        if ($.trim($(this).val())) {
            $(this).parent().find("em").removeClass("mr_no").removeClass("mr_ok").addClass("mr_ok")
        }
    });
    var at = {
        required: true,
        checkUrlNot: true,
        maxlength: 100
    };
    $("#olinfoForm").validate({
        rules: {
            mr_year: {
                required: true
            },
            mr_month: {
                required: true
            },
            mr_mobile: {
                required: true,
                isMobile: true,
                maxlength: 11
            },
            mr_email: {
                required: true,
                email: true,
                maxlength: 100
            },
            sns1: at,
            sns2: at,
            sns3: at,
            sns4: at,
            sns5: at,
            sns6: at,
            sns7: at,
            sns8: at,
            sns9: at,
            sns10: at,
            sns11: at,
            sns12: at
        },
        messages: {
            mr_year: {
                required: "必选"
            },
            mr_month: {
                required: "必选"
            },
            mr_mobile: {
                required: "必填",
                isMobile: "目前仅支持11位有效中国大陆号码",
                maxlength: "目前仅支持11位有效中国大陆号码"
            },
            mr_email: {
                required: "必填",
                email: "请输入正确的邮箱",
                maxlength: "输入100个字符以内的邮箱地址"
            }
        },
        errorPlacement: function(e, au) {
            if ($(au).data("sns")) {
                $(au).parent().find("em").addClass("mr_no")
            } else {
                e.insertAfter($(au).parent());
                $(".c_section span.error").css("margin", "5px 0 10px 138px")
            }
        },
        submitHandler: function(e) {
            $(e).find(":submit").val("保存中...").attr("disabled", true);
            $("#sess_submit").one("click",
            function() {
                var aG = $('input[name="shenfen"]', e).val();
                // var az = $('input[name="mr_year"]', e).val();
                // var aF = $('input[name="mr_month"]', e).val();
                var aA = $('input[name="xl"]', e).val();
                var aw = $('input[name="gznx"]', e).val();
                var av = $('input[name="szcs"]', e).val();
                var ay = $('input[name="mr_mobile"]', e).val();
                var aH = $('input[name="mr_email"]', e).val();
                var aC = $(".sns_area input");
                var aB = $(".mr_sex span.active em").text();
                var au = {};
                var aE = [];
                var aD = "";
                var ax = globals.token;
                aC.each(function(aK) {
                    var aJ = $(this).val();
                    var aI = $(this).data("sns");
                    au[aI] = aJ;
                    var aL = {};
                    aL.accountId = aI;
                    aL.accountUrl = aJ;
                    aE.push(aL);
                    var aM = "sns" + aI;
                    if ($.trim(aJ).indexOf("http://") == 0 || $.trim(aJ).indexOf("https://") == 0) {
                        aJ = aJ
                    } else {
                        aJ = "http://" + aJ
                    }
                    aD += "<a href='" + aJ + "' target='_blank' data-sns='" + aI + "' data-site='" + aJ + "' class='" + aM + "'><span><em></em></span></a>"
                });
                aE = JSON.stringify(aE);
                $.ajax({
                    url: ctx + "/index.php/Home/Resume/basic",
                    type: "post",
                    data: {
                        highestEducation: aA,
                        workYear: aw,
                        phone: ay,
                        email: aH,
                        liveCity: av,
                        // workYear: aw,
                        sex: aB,
                        type: 1,
                        resubmitToken: ax,
                        // socialAccountJson: aE,
                        userIdentity: globals.personIdFlag
                    },
                    dataType: "json"
                }).done(function(aU) {
                    globals.token = aU.resubmitToken;
                    if (aU.success) {
                        $("#sess_submit").hide().siblings("input").show();
                        $(".w_tips").hide();
                        // window.location.href=window.location.href;
                        z();
                        M = "";
                        C = true;
                        // updateResumeTime(aU.content.refreshTime);
                        // var aK = aU.content.infoCompleteStatus.score;
                        // var aM = parseInt($.trim($(".mr_bfb").text()));
                        // var aL = amountScore - aM + aK;
                        // updateRatioRM(aK, aL);
                        $("#olinfoForm .mr_info_edit").addClass("dn");
                        $(".mr_infoed .shenfen em").text(aG).attr("title", aG);
                        aw = $('input[name="gznx"]', e).val();
                        var aI = aw;
                        var aQ = aI;
                        $("#userbase").show();
                        if ($.trim(aw) != "应届毕业生") {
                            $(".mr_infoed .base_info .job_span").text(aw += "工作经验");
                            aI += "工作经验"
                        } else {
                            $(".mr_infoed .base_info .job_span").text(aw)
                        }
                        $(".mr_infoed .base_info .s").text(aB);
                        // if (aU.content.resume.ageNum) {
                        //     var aJ = $(".mr_infoed .base_info .a").show();
                        //     aJ.children(".age").text(aU.content.resume.ageNum + "岁");
                        //     aJ.children(".birth_span").html(az + "年" + aF + "月出生<em></em>")
                        // } else {
                        //     $(".mr_infoed .base_info .a").hide()
                        // }
                        $(".mr_infoed .base_info .x").text(aA);
                        $(".mr_infoed .base_info .d").text(av);
                        $(".mr_infoed .mobile em").text(ay).attr("title", ay);
                        $(".mr_infoed .email em").text(aH).attr("title", aH);
                        if (aC.length > 0) {
                            $(".mr_infoed .mr_sns").removeClass("dn")
                        } else {
                            $(".mr_infoed .mr_sns").addClass("dn")
                        }
                        $(".mr_infoed .mr_sns").html(aD);
                        var aT = $(".mr_module .flag_work");
                        var aR = $("#workExperience");
                        var aS = aU.content.isOpenMyResume;
                        var aN = aU.content.firstOpen;
                        if (aw == "应届毕业生") {
                            aR.find(".mr_title_c").text("实习经历");
                            aR.find(".mr_empty_add span").text("添加实习经历");
                            $(".mr_module li[data-md = 'workExperience'] .mr_m_name").text("实习经历");
                            if (!aT.is(":hidden")) {
                                aT.addClass("dn")
                            }
                            ai(false, aS, aN)
                        } else {
                            aR.find(".mr_title_c").text("工作经历");
                            aR.find(".mr_empty_add span").text("添加工作经历");
                            $(".mr_module li[data-md = 'workExperience'] .mr_m_name").text("工作经历");
                            if ($("#workExperience .mr_jobe_list").length == 0) {
                                var aT = $(".mr_module .flag_work");
                                if (aT.is(":hidden")) {
                                    aT.removeClass("dn")
                                }
                            }
                            ai(true, aS, aN)
                        }

                        var aP = $(".mr_infoed .mr_edit_on");
                        aP.attr("data-sf", $.trim(aG.split("·")[0]));
                        aP.attr("data-shenfen", aG);
                        aP.attr("data-sex", aB);
                        aP.attr("data-xl", aA);
                        aP.attr("data-gzjy", aQ);
                        aP.attr("data-city", av);
                        aP.attr("data-mobile", ay);
                        aP.attr("data-email", aH);
                        aP.attr("data-birthYear", az);
                        aP.attr("data-birthMonth", aF);
                        $(".mr_p_info").show();

                        var aO = $(".mr_ope .mr_cancel");
                        aO.attr("data-sf", $.trim(aG.split("·")[0]));
                        aO.attr("data-shenfen", aG);
                        aO.attr("data-sex", aB);
                        aO.attr("data-xl", aA);
                        aO.attr("data-gzjy", aQ);
                        aO.attr("data-city", av);
                        aO.attr("data-mobile", ay);
                        aO.attr("data-email", aH);
                        aO.attr("data-birthYear", az);
                        aO.attr("data-birthMonth", aF);
                        af()
                    } else {
                        alert(aU.msg)
                    }
                    $(e).find(":submit").val("保 存").attr("disabled", false)
                })
            });
            if (($("#mr_mobile").val() != $("#sess_phone").val() && $("#sess_phone").val().length > 0) && ($("#mr_email").val() != $("#sess_email").val() && $("#sess_email").val().length > 0)) {
                $("#mr_mobile").parent().nextAll("p.w_tips:eq(0)").show();
                $("#sess_submit").show().siblings("input").hide();
                return
            } else {
                if ($("#mr_mobile").val() != $("#sess_phone").val() && $("#mr_mobile").val().length > 0 && $("#sess_phone").val().length > 0) {
                    $("#mr_mobile").parent().nextAll("p.w_tips:eq(1)").show();
                    $("#sess_submit").show().siblings("input").hide();
                    return
                } else {
                    $("#mr_mobile").parent().nextAll("p.w_tips:eq(1)").hide();
                    if ($("#mr_email").val() != $("#sess_email").val() && $("#mr_email").val().length > 0 && $("#sess_email").val().length > 0) {
                        $("#mr_email").parent().nextAll("p.w_tips:eq(2)").show();
                        $("#sess_submit").show().siblings("input").hide();
                        return
                    } else {
                        $("#mr_email").parent().nextAll("p.w_tips:eq(2)").hide()
                    }
                }
            }
            $("#sess_submit").trigger("click")
        }
    });
    function ai(ay, az, e) {
        var aw = $("#workExperience .list_show .mr_jobe_list");
        var au = $("#educationalBackground .list_show .mr_jobe_list");
        var ax = $(".toggle");
        var av;
        if (ay) {
            if (aw.length == 0 || au.length == 0) {
                av = "2";
                w(ax, e, av)
            } else {
                n(e)
            }
        } else {
            if (au.length == 0) {
                av = "2";
                w(ax, e, av)
            } else {
                $(".openresume_tip").hide();
                n(e)
            }
        }
    }
    function n(e) {
        if (e) {
            globals.isOpenResume = "3"
        } else {
            globals.isOpenResume = "0"
        }
    }
    function w(aw, e, av) {
        $(".openresume_tip").hide();
        aw.addClass("toggle-off");
        $(".openresume_tip").hide();
        globals.isOpenResume = av;
        switch (av) {
        case "2":
            $(".unopen").show();
            break;
        case "3":
            $(".firstset").show();
            break
        }
        globals.isFirstOpen = e;
        var au = aw.find("input");
        au.eq(0).attr("checked", "checked")
    }
    $("#infoForm").validate({
        rules: {
            mr_mobile: {
                required: true,
                isMobile: true,
                maxlength: 11
            },
            mr_email: {
                required: true,
                email: true,
                maxlength: 100
            }
        },
        messages: {
            mr_mobile: {
                required: "必填",
                isMobile: "目前仅支持11位有效中国大陆号码",
                maxlength: "目前仅支持11位有效中国大陆号码"
            },
            mr_email: {
                required: "必填",
                email: "请输入正确的邮箱",
                maxlength: "请输入正确的邮箱"
            }
        },
        errorPlacement: function(e, au) {
            $(au).parent().after(e);
            $(".c_section span.error").css("margin", "5px 0 10px 138px")
        },
        submitHandler: function(e) {
            $(e).find(":submit").val("保存中...").attr("disabled", true);
            $("#sess_submit").one("click",
            function() {
                var az = $('input[name="xl"]', e).val();
                var ax = $('input[name="gznx"]', e).val();
                var au = $('input[name="mr_mobile"]', e).val();
                var av = $('input[name="mr_email"]', e).val();
                var ay = $('input[name="szcs"]', e).val();
                var aw = globals.token;
                $.ajax({
                    url: ctx + "/index.php/Home/Resume/basic",
                    type: "POST",
                    data: {
                        highestEducation: az,
                        workYear: ax,
                        phone: au,
                        email: av,
                        liveCity: ay,
                        type: 1,
                        resubmitToken: aw,
                        userIdentity: globals.personIdFlag
                    },
                    dataType: "json"
                }).done(function(aA) {
                    globals.token = aA.resubmitToken;
                    if (aA.success) {
                        $("#sess_submit").hide().siblings("input").show();
                        $(".w_tips").hide();
                        // $("#olinfoForm").hide();
                        z();
                        M = "";
                        C = true;
                        $(".mr_p_info .xl em").text(az);
                        var aB = ax;
                        if ($.trim(ax) != "应届毕业生") {
                            $(".mr_p_info .gzjy em").text(ax += "工作经验")
                        } else {
                            $(".mr_p_info .gzjy em").text(ax)
                        }
                        $(".mr_p_info .city em").text(ay);
                        $(".mr_p_info .mobile em").text(au);
                        $(".mr_p_info .email em").text(av).attr("title", av);
                        $("#infoForm .mr_info_edit").addClass("dn");
                        var aC = $(".mr_p_info .mr_edit_unon");
                        aC.attr("data-xl", az);
                        aC.attr("data-gzjy", aB);
                        aC.attr("data-city", ay);
                        aC.attr("data-mobile", au);
                        aC.attr("data-email", av);
                        $("#userbase").show()
                    } else {
                        alert(aA.msg)
                    }
                    $(e).find(":submit").val("保 存").attr("disabled", false)
                })
            });
            if (($("#mr_mobile").val() != $("#sess_phone").val() && $("#sess_phone").val().length > 0) && ($("#mr_email").val() != $("#sess_email").val() && $("#sess_email").val().length > 0)) {
                $("#mr_mobile").parent().nextAll("p.w_tips:eq(0)").show();
                $("#sess_submit").show().siblings("input").hide();
                return
            } else {
                if ($("#mr_mobile").val() != $("#sess_phone").val() && $("#mr_mobile").val().length > 0 && $("#sess_phone").val().length > 0) {
                    $("#mr_mobile").parent().nextAll("p.w_tips:eq(1)").show();
                    $("#sess_submit").show().siblings("input").hide();
                    return
                } else {
                    $("#mr_mobile").parent().nextAll("p.w_tips:eq(1)").hide();
                    if ($("#mr_email").val() != $("#sess_email").val() && $("#mr_email").val().length > 0 && $("#sess_email").val().length > 0) {
                        $("#mr_email").parent().nextAll("p.w_tips:eq(2)").show();
                        $("#sess_submit").show().siblings("input").hide();
                        return
                    } else {
                        $("#mr_email").parent().nextAll("p.w_tips:eq(2)").hide()
                    }
                }
            }
            $("#sess_submit").trigger("click")
        }
    });
    $("#infoForm .mr_info_edit .mr_cancel").bind("click",
    function() {
        $(".mr_info_edit").addClass("dn");
        $("#xl").val($(this).attr("data-xl"));
        $("#gznx").val($(this).attr("data-gzjy"));
        $("#mr_mobile").val($(this).attr("data-mobile"));
        $("#mr_email").val($(this).attr("data-email"));
        $("#szcs").val($(this).attr("data-city"));
        $("#sess_submit").hide().siblings("input").show();
        $(".w_tips").hide();
        $(".mr_p_info").show();
        C = true
    });
    $("#olinfoForm .mr_info_edit .mr_cancel").bind("click",
    function() {
        $(".mr_info_edit").addClass("dn");
        var av = $("#olinfoForm");
        av.find("span.error").hide();
        av.find("input.error").removeClass("error");
        $("#mr_year").val($(this).attr("data-birthYear"));
        $("#mr_month").val($(this).attr("data-birthMonth"));
        var au = $(this).attr("data-sex");
        $(".mr_sex span,.mr_sex i").removeClass("active");
        if (au == "男" || au == "") {
            $(".mr_sex .mr_man").addClass("active");
            $(".mr_sex .mr_man i").addClass("active")
        } else {
            $(".mr_sex .mr_women").addClass("active");
            $(".mr_sex .mr_women i").addClass("active")
        }
        var e = $(".info_t .shenfen em");
        globals.personIdFlag = e.attr("data-id");
        $("#shenfen").val(e.text());
        $("#xl").val($(this).attr("data-xl"));
        $("#gznx").val($(this).attr("data-gzjy"));
        $("#mr_mobile").val($(this).attr("data-mobile"));
        $("#mr_email").val($(this).attr("data-email"));
        $("#szcs").val($(this).attr("data-city"));
        $("#sess_submit").hide().siblings("input").show();
        $(".w_tips").hide();
        $(".mr_p_info").show();
        C = true;
        M = "";
        z()
    });
    $(".mr_p_info .mr_edit_unon").bind("click",
    function() {
        $(".mr_p_info").hide();
        $("#xl").val($(this).attr("data-xl"));
        $("#gznx").val($(this).attr("data-gzjy"));
        $("#mr_mobile").val($(this).attr("data-mobile"));
        $("#mr_email").val($(this).attr("data-email"));
        $("#szcs").val($(this).attr("data-city"));
        $("#infoForm .mr_info_edit").removeClass("dn");
        $("#infoForm").find(":submit").val("保存").attr("disabled", false);
        C = false
    });
    $(".mr_p_info .mr_edit_on").bind("click",
    function() {
        if (M == "") {
            $("#olinfoForm").find(":submit").val("保存").attr("disabled", false);
            p();
            M = "olinfoForm";
            C = false;
            $(".mr_p_info").hide();
            var ay = $(this).attr("data-sex");
            $(".mr_sex span,.mr_sex i").removeClass("active");
            if (ay == "男") {
                $(".mr_sex .mr_man").addClass("active");
                $(".mr_sex .mr_man i").addClass("active")
            } else {
                if (ay == "女") {
                    $(".mr_sex .mr_women").addClass("active");
                    $(".mr_sex .mr_women i").addClass("active")
                }
            }
            var av = $(".info_t .shenfen em");
            globals.personIdFlag = av.attr("data-id");
            if (!av.parent().hasClass("dn")) {
                if ($.trim(av.text()) == "·") {
                    $("#shenfen").val("")
                } else {
                    $("#shenfen").val(av.text()).attr("title", av.text())
                }
            } else {
                $("#shenfen").val("")
            }
            if ($.trim($(".ul_shenfen").text()) == "") {
                $(".mr_showidentity_div").bind("click", j)
            } else {
                $(".mr_showidentity_div").unbind("click", j)
            }
            $("#xl").val($(this).attr("data-xl"));
            $("#gznx").val($(this).attr("data-gzjy"));
            var e = $("#gznx").val();
            if ($.trim(e) == "应届毕业生") {
                var au = $(".ul_shenfen li[data-id = '1']");
                if (au.length != 0) {
                    globals.personIdFlag = "1"
                }
            } else {
                var ax = $(".ul_shenfen li[data-id = '2']");
                if (ax.length != 0) {
                    globals.personIdFlag = "2"
                }
            }
            $("#mr_mobile").val($(this).attr("data-mobile"));
            $("#mr_email").val($(this).attr("data-email"));
            $("#szcs").val($(this).attr("data-city"));
            if ($(".mr_sns a").length > 0) {
                $(".mr_add_sns").show();
                $(".sns_empty").hide();
                var aw = "";
                $(".mr_sns a").each(function(aB) {
                    var az = $(this).data("sns");
                    var aA = $(this).data("site");
                    var aC = "sns" + az;
                    aw += '<div class="form_wrap mr_sns_m">';
                    aw += '	<i class="' + aC + '"></i>';
                    aw += '	<em class="mr_ok"></em>';
                    aw += '	<a href="javascript:;" class="sns_del"></a>';
                    aw += '	<input type="text" id="' + aC + '" name="' + aC + '" data-sns="' + az + '" class="mr_button" value="' + aA + '"/>';
                    aw += "</div>"
                });
                $(".mr_info_edit .sns_area").html(aw)
            }
            if ($(".sns_area .mr_sns_m").length == 0) {
                $(".mr_add_sns").hide();
                $(".sns_empty").show()
            }
            $("#olinfoForm .mr_info_edit").removeClass("dn")
        }
    });
    function j(au) {
        au.stopPropagation();
        return false
    }
    var ab = (function() {
        var ax = $("#uploadImages");
        var az = ax.find("#cropzoom_container");
        var av = ax.find("#crop");
        var au = ax.find("#restore");
        var e;
        av.bind("click",
        function() {
            e.send(ctx + "/resume/cutPic.json", "POST", {
                resubmitToken: globals.token
            },
            function(aD) {
                e.showImage.attr("src", ctx + "/" + aD.content.uploadPath + "?cc=" + Math.random());
                $.colorbox.close();
                e.showImage = null;
                if (null != aD.resubmitToken && "" != aD.resubmitToken) {
                    globals.token = aD.resubmitToken
                }
                updateResumeTime(aD.content.refreshTime);
                var aC = aD.content.infoCompleteStatus.score;
                var aA = parseInt($.trim($(".mr_bfb").text()));
                var aB = amountScore - aA + aC;
                updateRatioRM(aC, aB);
                $(".shadow").hide();
                $(".mr_headfile").hover(function() {
                    $(".shadow").show()
                },
                function() {
                    $(".shadow").hide()
                });
                e.restore()
            })
        });
        au.bind("click",
        function() {
            e.restore();
            $(".shadow").hide();
            $(".mr_headfile").hover(function() {
                $(".shadow").show()
            },
            function() {
                $(".shadow").hide()
            });
            $.colorbox.close()
        });
        var aw = function(aA, aB) {
            var aD = $(".mr_headimg");
            var aC = ctx + "/" + aA.uploadPath;
            $.colorbox({
                inline: true,
                href: ax,
                title: "选择裁剪区域"
            });
            myresumeCommon.config.cutImage.image.source = aC;
            myresumeCommon.config.cutImage.image.width = aA.srcImageW;
            myresumeCommon.config.cutImage.image.height = aA.srcImageH;
            myresumeCommon.config.cutImage.selector.w = myresumeCommon.config.userPhotoSelector.width;
            myresumeCommon.config.cutImage.selector.h = myresumeCommon.config.userPhotoSelector.height;
            e = az.cropzoom(myresumeCommon.config.cutImage);
            e.showImage = null;
            e.showImage = aD
        };
        var ay = function() {};
        return {
            upSucc: aw,
            upFail: ay
        }
    })();
    window.uploadPhoto = ab;
    $("#colorbox").on("click", "#cboxClose",
    function() {
        if ($(this).siblings("#cboxLoadedContent").children("div").attr("id") == "uploadImages") {
            $(".shadow").hide();
            $(".mr_headfile").hover(function() {
                $(".shadow").show()
            },
            function() {
                $(".shadow").hide()
            })
        }
    });
    var O = (function() {
        var ax = $("#uploadLogos");
        var az = ax.find("#cropzoom_container");
        var av = ax.find("#crop");
        var au = ax.find("#restore");
        var e;
        var aw = function(aA, aB) {
            var aD = $("#" + aB).next(".logo_u");
            var aC = ctx + "/" + aA.uploadPath;
            $.colorbox({
                inline: true,
                href: ax,
                title: "选择裁剪区域"
            });
            myresumeCommon.config.cutImage.image.source = aC;
            myresumeCommon.config.cutImage.image.width = aA.srcImageW;
            myresumeCommon.config.cutImage.image.height = aA.srcImageH;
            myresumeCommon.config.cutImage.selector.w = myresumeCommon.config.userPhotoSelector.width;
            myresumeCommon.config.cutImage.selector.h = myresumeCommon.config.userPhotoSelector.height;
            e = az.cropzoom(myresumeCommon.config.cutImage);
            e.showImage = null;
            e.showImage = aD
        };
        var ay = function() {};
        av.bind("click",
        function() {
            $(".jobExpForm").find(":submit").val("上传中").attr("disabled", true);
            e.send(ctx + "/workExperience/cutLogo.json", "POST", {
                resubmitToken: globals.token
            },
            function(aA) {
                oMoudle.workId = "";
                e.showImage.css({
                    width: 120,
                    height: 120
                }).attr("src", ctx + "/" + aA.content + "?cc=" + Math.random());
                e.showImage.prev().prev().removeClass("active").addClass("up");
                $.colorbox.close();
                e.showImage = null;
                if (null != aA.resubmitToken && "" != aA.resubmitToken) {
                    globals.token = aA.resubmitToken
                }
                $(".jobExpForm").find(":submit").val("保存").attr("disabled", false);
                e.restore()
            })
        });
        au.bind("click",
        function() {
            e.restore();
            $.colorbox.close()
        });
        return {
            upSucc: aw,
            upFail: ay
        }
    })();
    window.uploadCompanyLogo = O;
    $(".mr_uploaded").on("click", "a.mr_del",
    function() {
        if (confirm("你确定要删除该附件吗？删除后你设置的默认投递简历也将失效")) {
            $.ajax({
                url: ctx + "/nearBy/delNearBy.json",
                type: "GET"
            }).done(function(e) {
                if (e.success) {
                    $(".mr_uploaded").hide();
                    $(".mr_upload").show()
                } else {
                    alert(e.msg)
                }
            })
        }
    });
    $(".mr_module ul").delegate(".md_flag a", "click",
    function(av) {
        av.stopPropagation();
        $(".mr_module li").removeClass("active");
        $(this).parent().addClass("active");
        var au = $(this).parent().data("md");
        al(au, 0)
    });
    $(".mr_module").unbind("click");
    $(".mr_module").delegate(".hide_md", "click",
    function() {
        $(this).addClass("dn").addClass("mr_hide");
        var e = $(this).data("md");
        $("#" + e).removeClass("dn");
        if (e == "customBlock") {
            initTitlePosition()
        }
        $(".m_hide").each(function() {
            var au = $(this).data("md");
            if (au == e) {
                $(this).removeClass("dn").addClass("md_flag");
                N(e, 0);
                al(e, 1);
                $(".mr_module li").removeClass("active");
                $(this).addClass("active");
                var av = $(this).attr("data-md");
                if ($.trim(av) == "customBlock") {
                    $("#customBlock .cust_title span").text("自定义标题")
                }
                initTitlePosition()
            }
        });
        if ($(".mr_module ul .md_flag").length == 9) {
            $(".mr_module_add").addClass("dn")
        } else {
            $(".mr_module_add").removeClass("dn")
        }
    });
    $(".mr_module_add").mouseover(function() {
        $(this).addClass("dn");
        $(".hide_md").removeClass("dn");
        $(".hide_md").mouseover(function() {
            $(".mr_module_add").addClass("dn");
            $(".hide_md").removeClass("dn")
        })
    });
    $(".hide_md").mouseout(function() {
        $(".mr_module .hide_md").addClass("dn");
        var e = 0;
        $(".mr_module .m_hide").each(function(au) {
            if ($(this).hasClass("dn")) {
                au++
            }
        });
        if ($(".md_flag").length == 9) {
            $(".mr_module_add").addClass("dn")
        } else {
            $(".mr_module_add").removeClass("dn")
        }
    });
    $(".mr_created").on("click", ".mr_md_del",
    function(au) {
        au.stopPropagation()
    });
    $(".mr_hide_del").bind("click",
    function(au) {
        au.stopPropagation();
        $(".mr_module .mr_md_del").remove();
        $(this).parent().after($("#del_hide_tip").html());
        oDelMoudle = $(this)
    });
    $(".mr_created").on("click", ".mr_md_del .mr_del_cel",
    function(au) {
        au.stopPropagation();
        $(this).parents(".mr_md_del").remove()
    });
    var I = true;
    $(".mr_created").on("click", ".mr_md_del .mr_del_btn",
    function(aB) {
        if (I) {
            aB.stopPropagation();
            $(this).text("删除中");
            I = false;
            var aA = $(this);
            $(this).unbind();
            var ax = "";
            var aC = oDelMoudle.parent().parent().data("md");
            var aw = globals.token;
            var av = globals.resumeId;
            var aD = "false";
            var au;
            var az;
            switch (aC) {
            case "expectJob":
                ax = "/expectJobs/delExpectJobs.json";
                aD = globals.hasExpectJobs;
                az = $("#expHideId").val();
                au = {
                    resumeId: av,
                    type: 1,
                    resubmitToken: aw,
                    id: az
                };
                F.clear();
                break;
            case "projectExperience":
                ax = "/projectExperience/delAllProject.json";
                aD = globals.hasProjectExperiences;
                au = {
                    resumeId: av,
                    type: 1,
                    resubmitToken: aw
                };
                R.clear();
                break;
            case "selfDescription":
                ax = "/index.php/Resume/selfDes";
                aD = globals.hasSelf;
                au = {
                    resumeId: av,
                    type: 1,
                    resubmitToken: aw
                };
                ar.clear();
                break;
            case "worksShow":
                ax = "/workShow/delAllWorkShow.json";
                aD = globals.hasWorkShows;
                au = {
                    resumeId: av,
                    type: 1,
                    resubmitToken: aw
                };
                i.clear();
                break;
            case "customBlock":
                ax = "/userDefine/delUserDefine.json";
                aD = globals.hasUserDefines;
                az = $("#customId").val();
                au = {
                    resumeId: av,
                    type: 1,
                    resubmitToken: aw,
                    id: az
                };
                var ay = $("#customBlock");
                ay.find(".cust_title span").text("自定义标题");
                ay.find(".custom_list").html("");
                break;
            case "skillsAssess":
                ax = "/skillEvaluate/delAllSkill.json";
                aD = globals.hasSkillEvaluates;
                au = {
                    resumeId: av,
                    type: 1,
                    resubmitToken: aw
                };
                D.clear();
                break;
            default:
                return
            }
            if (aD) {
                $.ajax({
                    url:
                    ctx + ax,
                    type: "POST",
                    data: au,
                    dataType: "json"
                }).done(function(e) {
                    if (aC == "expectJob") {
                        $("#expHideId").val("")
                    }
                    globals.token = e.resubmitToken;
                    if (e.success) {
                        o(aA, aC, 0, e)
                    } else {
                        alert(e.msg)
                    }
                    I = true
                })
            } else {
                o(aA, aC, 1, 0);
                I = true
            }
        }
    });
    function o(az, ax, av, au) {
        l();
        oDelMoudle.parent().parent().removeClass("md_flag").addClass("dn");
        $("#" + ax).addClass("dn");
        if (ax != "customBlock") {
            switch (ax) {
            case "expectJob":
                globals.hasExpectJobs = false;
                break;
            case "skillsAssess":
                globals.hasSkillEvaluates = false;
                break;
            case "selfDescription":
                globals.hasSelf = false;
                break;
            case "worksShow":
                globals.hasWorkShows = false;
                break
            }
            if (av == 0) {
                var ay = parseInt($.trim($(".mr_bfb").text()));
                var e = amountScore - ay;
                var aw = parseInt(au.content.infoCompleteStatus.score);
                $(".mr_top .mr_bfb").text(aw + "%");
                amountScore = e + aw;
                N(ax, 1)
            } else {
                N(ax, 1)
            }
        } else {
            $("#customTitleName").val("")
        }
        $(".hide_md").each(function(aA) {
            var aB = $(this).data("md");
            if (aB == ax) {
                $(this).addClass("dn").removeClass("mr_hide")
            }
        });
        if ($(".md_flag").length == 9) {
            $(".mr_module_add").addClass("dn")
        } else {
            $(".mr_module_add").removeClass("dn")
        }
        az.parents(".mr_md_del").remove()
    }
    function l() {
        switch (M) {
        case "olinfoForm":
            $(".mr_p_info").show();
            $("#olinfoForm .mr_info_edit").addClass("dn");
            break;
        case "addJobForm":
            $("#addJobForm .mr_cancel").trigger("click");
            break;
        case "upJobForm":
            $("#upJobForm .mr_cancel").trigger("click");
            break;
        case "addEduForm":
            $("#addEduForm .mr_cancel").trigger("click");
            break;
        case "upEduForm":
            $("#upEduForm .mr_cancel").trigger("click");
            break;
        case "addProForm":
            $("#addProForm .mr_cancel").trigger("click");
            break;
        case "upProForm":
            $("#upProForm .mr_cancel").trigger("click");
            break;
        case "addWorksShowUploadForm":
            $("#addWorksShowUploadForm .mr_cancel").trigger("click");
            break;
        case "upWorksShowUploadForm":
            $("#upWorksShowUploadForm .mr_cancel").trigger("click");
            break;
        case "upSelfForm":
            $("#upSelfForm .mr_cancel").trigger("click");
            break;
        case "upExpJobForm":
            $("#upExpJobForm .mr_cancel").trigger("click");
            break;
        case "upCustomForm":
            $("#upCustomForm .mr_cancel").trigger("click");
            break;
        case "updateSkill":
            $("#skillsAssess .mr_moudle_content .mr_cancel").trigger("click");
            break;
        default:
            return
        }
        z();
        M = "";
        C = false
    }
    function al(av, au) {
        if (au == 1) {
            l()
        }
        var e = $("#" + av).offset();
        switch (av) {
        case "expectJob":
            if (au == 1) {
                $("#expectJob .mr_head_r").trigger("click")
            }
            break;
        case "workExperience":
            if (au == 1) {
                $("#workExperience .mr_head_r").trigger("click")
            }
            break;
        case "projectExperience":
            if (au == 1) {
                $("#projectExperience .mr_head_r").trigger("click")
            }
            break;
        case "educationalBackground":
            if (au == 1) {
                $("#educationalBackground .mr_head_r").trigger("click")
            }
        case "selfDescription":
            if (au == 1) {
                $("#selfDescription .mr_head_r").trigger("click")
            }
            break;
        case "worksShow":
            if (au == 1) {
                $("#worksShow .mr_head_r").trigger("click")
            }
            break;
        case "customBlock":
            if (au == 1) {
                $("#customBlock .mr_head_r").trigger("click")
            }
            break;
        case "skillsAssess":
            if (au == 1) {
                $("#skillsAssess .mr_head_r").trigger("click")
            }
            break;
        case "baseinfo":
            if (au == 1) {
                $("#baseinfo .mr_head_r").trigger("click")
            }
            break;
        default:
            return
        }
        $("body,html").animate({
            scrollTop:
            e.top
        },
        400,
        function() {
            $("#" + av).animate({
                borderColor: "#e46a4a"
            },
            300,
            function() {
                $(this).animate({
                    borderColor: "transparent"
                })
            })
        })
    }
    $(".mr_bottom_l").bind("click",
    function(av) {
        av.stopPropagation();
        var au = $(".mr_down_tip");
        if (au.is(":hidden")) {
            au.removeClass("dn")
        } else {
            au.addClass("dn")
        }
    });
    $(".mr_down_tip li").bind("click",
    function(au) {
        au.stopPropagation();
        $(".mr_down_tip").addClass("dn")
    });
    $(".mr_down_tip li").hover(function() {
        $(".mr_down_tip li.active").removeClass("active");
        $(this).addClass("active")
    },
    function() {
        $(".mr_down_tip li.active").removeClass("active");
        $(this).removeClass("active")
    });
    $(".mr_created").delegate(".mr_delete span", "click",
    function(au) {
        $(this).prev(".mr_delete_pop").removeClass("dn")
    });
    $(".mr_created").delegate(".mr_del_cancel", "click",
    function(au) {
        if (y == "") {
            $(this).parent().parent().addClass("dn")
        }
    });
    $(".mr_created").delegate(".mr_del_ok", "click",
    function() {
        y = "1";
        var aw = $(this).parents(".mr_moudle_content");
        var av = $(this).parents("form");
        var au = $(".mr_del_ok", av).data("id");
        var e = "";
        switch (M) {
        case "upJobForm":
            e = "/workExperience/delExp.json";
            break;
        case "upEduForm":
            e = "/educationExperience/delEdu.json";
            break;
        case "upExpJobForm":
            $("#upExpJobForm .mr_cancel").trigger("click");
            break;
        case "upProForm":
            e = myresumeCommon.requestTargets.projectExpDel;
            break;
        default:
            return
        }
        $(this).text("删除中...").attr("disabled", true);
        var ax = $(this);
        $.ajax({
            url: ctx + e,
            type: "POST",
            data: {
                id: au,
                resubmitToken: globals.token
            },
            dataType: "json"
        }).done(function(aL) {
            if (aL.success) {
                if (null != aL.resubmitToken && "" != aL.resubmitToken) {
                    globals.token = aL.resubmitToken
                }
                updateResumeTime(aL.content.refreshTime);
                var az = aL.content.infoCompleteStatus.score;
                var aB = parseInt($.trim($(".mr_bfb").text()));
                var aA = amountScore - aB + az;
                amountScore = aA;
                updateRatioRM(az, aA);
                switch (M) {
                case "upJobForm":
                    var aH = aL.content.isOpenMyResume;
                    var aD = aL.content.firstOpen;
                    d(aH, aD);
                    if (aw.find(".mr_jobe_list").length == 1) {
                        aw.find(".mr_empty_add").show();
                        var aK = $.trim($(".base_info .j").text());
                        if (($(".shenfen em").attr("data-id") == "2" || $(".shenfen em").attr("data-id") == "0")) {
                            $(".mr_infoed .info_t .shenfen").addClass("dn");
                            $(".mr_p_info .mr_edit_on").attr("data-sf", "")
                        }
                        var aI = $(".ul_shenfen li[data-id = '2']");
                        if (aI) {
                            aI.remove()
                        }
                        var aJ = $(".mr_module .flag_work");
                        if ($.trim($("#workExperience .mr_title_c").text()) != "实习经历" && aJ.is(":hidden")) {
                            aJ.removeClass("dn")
                        }
                    }
                    E(aL);
                    break;
                case "upEduForm":
                    var aH = aL.content.isOpenMyResume;
                    var aD = aL.content.firstOpen;
                    d(aH, aD);
                    if (aw.find(".mr_jobe_list").length == 1) {
                        aw.find(".mr_empty_add").show();
                        var aK = $.trim($(".base_info .j").text());
                        if (($(".shenfen em").attr("data-id") == "1" || $(".shenfen em").attr("data-id") == "0")) {
                            $(".mr_infoed .info_t .shenfen").addClass("dn");
                            $(".mr_p_info .mr_edit_on").attr("data-sf", "")
                        }
                        var aC = $(".ul_shenfen li[data-id = '1']");
                        if (aC) {
                            aC.remove()
                        }
                        var aJ = $(".mr_module .flag_edu");
                        if (aJ.is(":hidden")) {
                            aJ.removeClass("dn")
                        }
                    }
                    E(aL);
                    break;
                case "upExpJobForm":
                    $("#upExpJobForm .mr_cancel").trigger("click");
                    break;
                case "upProForm":
                    $("#upProForm .mr_cancel").trigger("click");
                    var aG = aL && aL.content && aL.content.projectExperiences || [];
                    var aE = B(aG);
                    R.obj.find(".list_show").html(aE);
                    var aF = $(".mr_jobe_list .l2 .projectTitle");
                    aF.each(function() {
                        var aM = $(this);
                        var aN = aM.width();
                        aM.find("span").css("left", aN + 5)
                    });
                    var ay = R.obj.find(".mr_empty_add");
                    if (aG.length) {
                        globals.hasProjectExperiences = true;
                        ay.hide()
                    } else {
                        globals.hasProjectExperiences = false;
                        ay.show()
                    }
                    break;
                default:
                    return
                }
                z();
                M = "";
                C = true;
                av.prev().remove();
                av.remove()
            } else {
                alert(aL.msg)
            }
            y = "";
            ax.text("删除").attr("disabled", false)
        })
    });
    function d(av, e) {
        if (!av) {
            $(".openresume_tip").hide();
            $(".unopen").show();
            $(".toggle").addClass("toggle-off");
            globals.isOpenResume = "2";
            globals.isFirstOpen = e;
            var au = $(".toggle").find("input");
            au.eq(0).attr("checked", "checked")
        }
    }
    var L = {
        obj: $("#workExperience"),
        clearError: function(e) {
            this.obj.find("span.error").hide();
            this.obj.find("input.error").removeClass("error")
        },
        rules: {
            companyName: {
                required: true,
                maxlenStr: 40
            },
            positionName: {
                required: true,
                maxlenStr: 30
            },
            startTime: {
                required: true
            },
            endTime: {
                required: true
            },
            jobContent: {
                required: false,
                tinymceLength: [0, 800]
            }
        },
        messages: {
            companyName: {
                required: "必填",
                maxlenStr: "请输入80字以内的公司名称"
            },
            positionName: {
                required: "必填",
                maxlenStr: "请输入60字以内的职位名称"
            },
            startTime: {
                required: "必填"
            },
            endTime: {
                required: "必填"
            },
            jobContent: {
                tinymceLength: "请输入1600字以内的工作内容"
            }
        },
        AddCancel: function() {
            $("#addJobForm").addClass("dn");
            if (this.obj.find(".mr_jobe_list").length == 0) {
                this.obj.find(".mr_empty_add").show()
            }
            z();
            this.obj.find(".mr_head_r").removeClass("mr_add_grey").removeClass("mr_up_grey").removeClass("mr_addup_cel").children("em").text("添加");
            M = "";
            C = true
        },
        UpCancel: function() {
            z();
            $("#upJobForm").prev().show();
            $("#upJobForm").remove();
            M = "";
            C = true
        }
    };
    try {
        var m = new components.CityWrapper({
            container: $("#olinfoForm .city_s"),
            onchange: function(au, e) {
                e.find(".error").hide()
            },
            beforeShown: function(au, e) {
                $(document).trigger("click");
                $(".select_color").removeClass("select_color");
                au.addClass("select_color")
            },
            afterHide: function(au, e) {
                au.removeClass("select_color")
            }
        });
        var u = new components.CityWrapper({
            container: $("#upExpJobForm .city_s"),
            onchange: function(au, e) {
                e.find(".error").hide()
            },
            beforeShown: function(au, e) {
                $(document).trigger("click");
                $(".select_color").removeClass("select_color");
                au.addClass("select_color")
            },
            afterHide: function(au, e) {
                au.removeClass("select_color")
            }
        });
        var x = new components.CityWrapper({
            container: $("#infoForm .city_s"),
            onchange: function(au, e) {
                e.find(".error").hide()
            },
            beforeShown: function(au, e) {
                $(document).trigger("click");
                $(".select_color").removeClass("select_color");
                au.addClass("select_color")
            },
            afterHide: function(au, e) {
                au.removeClass("select_color")
            }
        })
    } catch(am) {}
    try {
        var s = new components.CalendarWrapper({
            container: $("#addJobForm").find(".mr_timed_div:first"),
            onchange: function(au, e) {
                P.setLeftBoundary(au);
                e.find(".error").hide()
            },
            beforeShown: function(au, e) {
                P.hide();
                $(".select_color").removeClass("select_color");
                au.addClass("select_color");
                au.css("zIndex", "2");
                au.siblings("div:last").css("zIndex", "1")
            },
            afterHide: function(au, e) {
                au.removeClass("select_color");
                au.css("zIndex", "auto");
                au.siblings("div:last").css("zIndex", "auto")
            }
        });
        var P = new components.CalendarWrapper({
            container: $("#addJobForm").find(".mr_timed_div:last"),
            onchange: function(au, e) {
                s.setRightBoundary(au);
                e.find(".error").hide()
            },
            beforeShown: function(au, e) {
                s.hide();
                $(".select_color").removeClass("select_color");
                au.addClass("select_color")
            },
            afterHide: function(au, e) {
                au.removeClass("select_color")
            },
            has2Today: true
        });
        var t, r
    } catch(am) {}
    L.obj.delegate(".mr_head_r", "click",
    function(av) {
        L.clearError();
        S();
        var au = L.obj.find(".mr_empty_add");
        if ($(this).children("em").text() == "添加") {
            if (M == "") {
                M = "addJobForm";
                C = false;
                $("#addJobForm").removeClass("dn");
                p();
                $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").addClass("mr_addup_cel").children("em").text("取消");
                if (au.not(":hidden")) {
                    au.hide()
                }
            }
        } else {
            C = true;
            $("#addJobForm").addClass("dn");
            z();
            $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").removeClass("mr_addup_cel").children("em").text("添加");
            M = "";
            if (L.obj.find(".mr_jobe_list").length == 0) {
                au.show()
            }
        }
        ao($("#addJobForm"))
    });
    L.obj.delegate(".mr_empty_add", "click",
    function(au) {
        $(this).hide();
        $("#workExperience .mr_head_r").trigger("click")
    });
    L.obj.delegate(".mr_edit", "click",
    function(aw) {
        if (M == "") {
            p();
            M = "upJobForm";
            C = false;
            var av = "";
            av = $("#job_update_hide").html();
            av = av.replace(/mce_jason/g, "upjobContent");
            av = av.replace(/tinymce_replace/g, "tinymce1");
            $(this).parents(".mr_jobe_list").hide().after(av);
            $(this).parents(".mr_jobe_list").next().attr("id", "upJobForm");
            var ax = $("#upJobForm");
            $("#mr_expid", ax).val($(this).data("expid"));
            $(".mr_del_ok", ax).attr("data-id", $(this).data("expid"));
            oMoudle.workId = $(this).data("expid");
            $("img.logo_u", ax).prev().prev().addClass("up");
            var au = $(this).data("logo");
            if (au != "") {
                au = ctx + "/" + au;
                $("img.logo_u", ax).css({
                    width: 120,
                    height: 120
                }).attr("src", au);
                $("input[name='companyLogoHide']", ax).val(au)
            } else {
                au = "";
                $(".mr_upload_logo div", ax).removeClass("up");
                $("img.logo_u", ax).css({
                    width: 0,
                    height: 0
                }).attr("src", au);
                $("input[name='companyLogoHide']", ax).val("")
            }
            $('input[name="companyName"]', ax).val($(this).data("comname"));
            $('input[name="positionName"]', ax).val($(this).data("posname"));
            $('input[name="startTime"]', ax).val($(this).data("startime"));
            $(".mr_sta_time .mr_btn", ax).val($(this).data("startime"));
            $('input[name="endTime"]', ax).val($(this).data("endtime"));
            $(".mr_end_time .mr_btn", ax).val($(this).data("endtime"));
            $("#upjobContent", ax).val($(this).data("content"));
            initMceMr1();
            f();
            X();
            ao($("#upJobForm"));
            t = new components.CalendarWrapper({
                container: ax.find(".mr_timed_div:first"),
                onchange: function(ay, e) {
                    r.setLeftBoundary(ay);
                    e.find(".error").hide()
                },
                beforeShown: function(ay, e) {
                    r.hide();
                    $(".select_color").removeClass("select_color");
                    ay.addClass("select_color")
                },
                afterHide: function(ay, e) {
                    ay.removeClass("select_color")
                }
            });
            r = new components.CalendarWrapper({
                container: ax.find(".mr_timed_div:last"),
                onchange: function(ay, e) {
                    t.setRightBoundary(ay);
                    e.find(".error").hide()
                },
                beforeShown: function(ay, e) {
                    t.hide();
                    $(".select_color").removeClass("select_color");
                    ay.addClass("select_color")
                },
                afterHide: function(ay, e) {
                    ay.removeClass("select_color")
                },
                has2Today: true
            });
            t.set($(this).data("startime"), true);
            r.set($(this).data("endtime"), true);
            handleFrames()
        }
    });
    L.obj.delegate(".mr_upload_logo", "mouseover",
    function() {
        var e = $(this).find("div");
        if (!e.hasClass("up")) {
            e.addClass("active")
        }
    });
    L.obj.delegate(".mr_upload_logo", "mouseout",
    function() {
        var e = $(this).find("div");
        if (!e.hasClass("up")) {
            e.removeClass("active")
        }
    });
    L.obj.delegate("#upJobForm .mr_cancel", "click",
    function(au) {
        L.UpCancel()
    });
    $("#addJobForm .mr_cancel").bind("click",
    function(au) {
        L.AddCancel()
    });
    function ao(e) {
        e.find("table.mceToolbarRow1 td:nth-child(2)").addClass("ulolBorder");
        e.find("table.mceToolbarRow1 td:nth-child(3)").addClass("ulolBorder")
    }
    $(".mr_created").delegate("a.mce_fullscreen", "click",
    function() {
        var e = $("#mce_fullscreen_container .mceToolbarRow1");
        var ax = $("#mce_fullscreen_container #mce_fullscreen_toolbargroup");
        var au = '<a href="javascript:;" class="writeBtn">写好了</a>';
        var ay = $(this).attr("id");
        var av = ay.split("_");
        ay = av[0];
        ax.append(au);
        $(window).resize(function() {
            $("table#mce_fullscreen_tbl").css("width", "100%")
        });
        $("#mce_fullscreen_container .writeBtn").bind("click",
        function(az) {
            ff.fullscreenEditor.execCommand("mceFullScreen")
        });
        e.find("td:nth-child(3)").addClass("borderLNone");
        var aw = $("#mce_fullscreen_ifr")[0].contentDocument.body;
        $(aw).css({
            backgroundColor: "#f9f9f9",
            color: "#555",
            fontSize: "16px"
        });
        aw.focus()
    });
    function S() {
        L.rules.jobContent = {
            required: false,
            tinymceLength: [0, 800]
        };
        L.messages.jobContent = {
            tinymceLength: "请输入1600字以内的工作内容"
        };
        $("#addJobForm").submit(function() {
            tinyMCE.triggerSave(true)
        }).validate({
            rules: L.rules,
            messages: L.messages,
            errorPlacement: function(e, au) {
                if (au.attr("type") == "hidden") {
                    $(au).parent().css("margin-bottom", "20px");
                    e.appendTo($(au).parent())
                } else {
                    if (au.attr("id") == "jobContent") {
                        $(au).parent().after(e)
                    } else {
                        e.insertAfter($(au).parent())
                    }
                }
            },
            submitHandler: function(au) {
                var e = globals.resumeId;
                var av = $("img.logo_u", au).attr("src");
                var aC = $('input[name="companyName"]', au).val();
                var aB = $('input[name="positionName"]', au).val();
                var aw = $('input[name="startTime"]', au).val();
                var ay = $('input[name="endTime"]', au).val();
                var aA = $("#jobContent", au).val();
                var ax = globals.token;
                var az = false;
                if ($.trim(av) != "") {
                    az = true
                }
                $(au).find(":submit").val("保存中...").attr("disabled", true);
                var rid = $('.mr_jobe_list').attr("rid");
                $.ajax({
                    url: ctx + "/index.php/Home/Resume/workSave",
                    type: "post",
                    data: {
                        id: e,
                        rid:rid,
                        companyLogo: av,
                        companyName: aC,
                        positionName: aB,
                        startDate: aw,
                        endDate: ay,
                        workContent: aA,
                        resubmitToken: ax,
                        isUploadLogo: az
                    },
                    dataType: "json"
                }).done(function(aM) {
                    globals.token = aM.resubmitToken;
                    if (aM.success) {
                        var aE = aM.content.isOpenMyResume;
                        var aK = $(".toggle");
                        var aI = aM.content.firstOpen;
                        // window.location.href=window.location.href;
                        globals.isFirstOpen = aI;
                        if (aE) {
                            $(".openresume_tip").hide();
                            if (globals.isFirstOpen) {
                                globals.isOpenResume = "3";
                                $(".firstset").show()
                            } else {
                                if (aK.hasClass("toggle-off")) {
                                    globals.isOpenResume = "0"
                                } else {
                                    globals.isOpenResume = "1"
                                }
                            }
                        }

                        E(aM);
                        ak();
                        $("img.logo_u", au).css({
                            width: 0,
                            height: 0
                        });
                        $("div.up", au).removeClass("up");
                        updateResumeTime(aM.content.refreshTime);
                        var aF = aM.content.infoCompleteStatus.score;
                        var aH = parseInt($.trim($(".mr_bfb").text()));
                        var aG = amountScore - aH + aF;
                        updateRatioRM(aF, aG);
                        L.obj.find(".mr_head_r").trigger("click");
                        var aJ = aM.content.workExperiences;
                        A(aJ);
                        var aD = L.obj.find(".mr_empty_add");
                        if (aD.not(":hidden")) {
                            aD.hide()
                        }
                        var aL = $(".mr_module .flag_work");
                        if (!aL.is(":hidden")) {
                            aL.addClass("dn")
                        }
                    } else {
                        alert(aM.msg)
                    }
                    $(au).find(":submit").val("保 存").attr("disabled", false);
                    s.reset();
                    P.reset()
                })
            }
        })
    }
    function ak() {
        var e = $("#addJobForm");
        $("#companyLogo", e).val("");
        $("img.logo_u", e).attr("src", "");
        $("#companyName", e).val("");
        $("#positionName", e).val("");
        $("#startTime", e).val("");
        $(".mr_btn", e).val("");
        $("#endTime", e).val("");
        $("#jobContent", e).val("")
    }
    function X() {
        L.rules.jobContent = {
            tinymceLength: [0, 800]
        };
        L.messages.jobContent = {
            tinymceLength: "请输入1600字以内的工作内容"
        };
        $("#upJobForm").submit(function() {
            tinyMCE.triggerSave(true)
        }).validate({
            rules: L.rules,
            messages: L.messages,
            errorPlacement: function(e, au) {
                if (au.attr("type") == "hidden") {
                    $(au).parent().css("margin-bottom", "20px");
                    e.appendTo($(au).parent())
                } else {
                    if (au.attr("id") == "upjobContent") {
                        $(au).parent().after(e)
                    } else {
                        e.insertAfter($(au).parent())
                    }
                }
            },
            submitHandler: function(au) {
                var ay = globals.token;
                var e = globals.resumeId;
                var az = $("#mr_expid").val();
                var ax = $("img.logo_u", au).attr("src");
                var aE = $('input[name="companyName"]', au).val();
                var aD = $('input[name="positionName"]', au).val();
                var aw = $('input[name="startTime"]', au).val();
                var aB = $('input[name="endTime"]', au).val();
                var av = tinyMCE.get("upjobContent").getContent();
                var aA = $("input[name='companyLogoHide']", au).val();
                var aC = false;
                if (aA != ax) {
                    aC = true
                }
                $(au).find(":submit").val("保存中...").attr("disabled", true);
                 var rid = $('.mr_jobe_list').attr("rid");
                $.ajax({
                    url: ctx + "/index.php/Home/Resume/workSave",
                    type: "post",
                    data: {
                        id: e,
                        rid:rid,
                        companyLogo: ax,
                        companyName: aE,
                        positionName: aD,
                        startDate: aw,
                        endDate: aB,
                        workContent: av,
                        resubmitToken: ay,
                        expid: az,
                        isUploadLogo: aC
                    },
                    dataType: "json"
                }).done(function(aG) {
                    globals.token = aG.resubmitToken;
                    if (aG.success) {
                        // E(aG);
                        // updateResumeTime(aG.content.refreshTime);
                        // var aI = aG.content.infoCompleteStatus.score;
                        // var aF = parseInt($.trim($(".mr_bfb").text()));
                        // var aH = amountScore - aF + aI;
                        // updateRatioRM(aI, aH);
                        // $(".mr_cancel").click();
                        $(".mr_cancel", au).trigger("click");

                        // var aJ = aG.content.workExperiences;
                        // A(aJ)
                        window.location.href=window.location.href;
                    } else {
                        alert(aG.msg)
                    }
                    $(au).find(":submit").val("保 存").attr("disabled", false)
                })
            }
        })
    }
    function A(av) {
        var au = "";
        for (var e = 0; e < av.length; e++) {
            au += '<div class="mr_jobe_list">';
            au += '	<div class="clearfixs">';
            au += '		<div class="mr_content_l">';
            if (av[e].companyLogo) {
                au += '			<div class="l1">';
                au += '				<img src="' + ctx + "/" + av[e].companyLogo + '" alt="公司logo"/>';
                au += "			</div>"
            }
            au += '			<div class="l2">';
            au += "				<h4>" + av[e].companyName + "</h4>";
            au += "				<span>" + av[e].positionName + "</span>";
            au += "			</div>";
            au += "		</div>";
            au += '<div class="mr_content_r">';
            au += '<div class="mr_edit mr_c_r_t" data-expid="' + av[e].id + '" data-logo="' + av[e].companyLogo + '" data-comname="' + av[e].companyName + '" data-posname="' + av[e].positionName + '" data-startime="' + av[e].startDate + '" data-endtime="' + av[e].endDate + '" data-content="' + av[e].workContent + '">';
            au += "<i></i><em>编辑</em>";
            au += "</div>";
            au += "<span>" + av[e].startDate + "</span><span> — </span><span>" + av[e].endDate + "</span>";
            au += "</div>";
            au += "</div>";
            au += '<div class="mr_content_m">' + (av[e].workContent || "") + "</div>";
            au += "</div>"
        }
        L.obj.find(".list_show").html(au)
    }
    var ad = {
        obj: $("#educationalBackground"),
        rules: {
            schoolName: {
                required: true,
                checkNum: true,
                maxlenStr: 50,
                truename2: true
            },
            positionName: {
                required: true,
                checkNum: true,
                maxlenStr: 50,
                newSpecialChar: true
            },
            degree_text: {
                required: true
            },
            graduate_text: {
                required: true
            }
        },
        messages: {
            schoolName: {
                required: "必填",
                checkNum: "请输入有效的学校名称",
                maxlenStr: "请输入有效的学校名称",
                truename2: "请输入有效的学校名称"
            },
            positionName: {
                required: "必填",
                checkNum: "请输入有效的专业名称",
                maxlenStr: "请输入有效的专业名称",
                newSpecialChar: "请输入有效的专业名称"
            },
            degree_text: {
                required: "必填"
            },
            graduate_text: {
                required: "必填"
            }
        },
        errorPlacement: function(e, au) {
            if (au.attr("type") == "hidden") {
                $(au).parent().css("margin-bottom", "20px");
                e.appendTo($(au).parent())
            } else {
                if (au.attr("type") == "button") {
                    e.appendTo($(au).parent())
                } else {
                    e.insertAfter($(au).parent())
                }
            }
        },
        clearError: function(e) {
            this.obj.find("span.error").hide();
            this.obj.find("input.error").removeClass("error")
        },
        AddCancel: function() {
            $("#addEduForm").addClass("dn");
            if (this.obj.find(".mr_jobe_list").length == 0) {
                this.obj.find(".mr_empty_add").show()
            }
            z();
            this.obj.find(".mr_head_r").removeClass("mr_add_grey").removeClass("mr_up_grey").removeClass("mr_addup_cel").children("em").text("添加");
            M = "";
            C = true
        },
        UpCancel: function() {
            z();
            $("#upEduForm").prev().show();
            $("#upEduForm").remove();
            M = "";
            C = true
        }
    };
    ad.obj.delegate(".mr_head_r", "click",
    function(av) {
        ad.clearError();
        ag();
        if ($(this).children("em").text() == "添加") {
            var au = ad.obj.find(".mr_empty_add");
            if (M == "") {
                if (au.not(":hidden")) {
                    au.hide()
                }
                M = "addEduForm";
                C = false;
                $("#addEduForm").removeClass("dn");
                p();
                $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").addClass("mr_addup_cel").children("em").text("取消")
            }
        } else {
            if ($("#educationalBackground .mr_jobe_list").length == 0) {
                $("#educationalBackground .mr_empty_add").show()
            }
            $("#addEduForm").addClass("dn");
            z();
            $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").removeClass("mr_addup_cel").children("em").text("添加");
            M = ""
        }
    });
    ad.obj.delegate(".mr_empty_add", "click",
    function(au) {
        $(this).hide();
        $("#educationalBackground .mr_head_r").trigger("click")
    });
    ad.obj.delegate(".mr_edit", "click",
    function(av) {
        if (M == "") {
            p();
            M = "upEduForm";
            C = false;
            var au = "";
            au = $("#edu_update_hide").html();
            $(this).parents(".mr_jobe_list").hide().after(au);
            ap();
            c();
            $(this).parents(".mr_jobe_list").next().attr("id", "upEduForm");
            var aw = $("#upEduForm");
            $("#eduId", aw).val($(this).data("eduid"));
            $(".mr_del_ok", aw).attr("data-id", $(this).data("eduid"));
            oMoudle.eduId = $(this).data("eduid");
            $('input[name="schoolName"]', aw).val($(this).data("schoolname"));
            $('input[name="positionName"]', aw).val($(this).data("pro"));
            $('input[name="degree_text"]', aw).val($(this).data("edu"));
            $('input[name="degree_val"]', aw).val($(this).data("edu"));
            $('input[name="graduate_text"]', aw).val($(this).data("date"));
            $('input[name="graduate"]', aw).val($(this).data("date"));
            aj()
        }
    });
    ad.obj.delegate("#upEduForm .mr_cancel", "click",
    function(au) {
        ad.UpCancel()
    });
    $("#addEduForm .mr_cancel").bind("click",
    function(au) {
        ad.AddCancel()
    });
    ap();
    function ap() {
        ad.obj.find(".ul_edubg").on("click", "li",
        function(aw) {
            aw.stopPropagation();
            var av = $(this).parent().parent();
            av.prev().val($(this).text());
            av.prev().prev().val($(this).text());
            av.hide();
            $(".select_color").removeClass("select_color");
            var au = $(this).parents("form").validate().element(av.prev().prev());
            if (au) {
                av.next().hide();
                $(this).parents(".mr_timed_div").css("margin-bottom", "0")
            }
        })
    }
    c();
    function c() {
        ad.obj.find(".ul_eduy").on("click", "li",
        function(aw) {
            aw.stopPropagation();
            var av = $(this).parent().parent();
            av.prev().val($(this).text());
            av.prev().prev().val($(this).text());
            av.hide();
            $(".select_color").removeClass("select_color");
            var au = $(this).parents("form").validate().element(av.prev().prev());
            if (au) {
                av.next().hide();
                $(this).parents(".mr_timed_div").css("margin-bottom", "0")
            }
        })
    }
    function b(e) {
        var au = e;
        $('input[name="schoolName"]', au).val("");
        $('input[name="positionName"]', au).val("");
        $('input[name="degree_val"]', au).val("");
        $('input[name="degree_text"]', au).val("");
        $('input[name="graduate"]', au).val("");
        $('input[name="graduate_text"]', au).val("")
    }
    function ag() {
        $("#addEduForm").validate({
            rules: ad.rules,
            messages: ad.messages,
            errorPlacement: function(e, au) {
                ad.errorPlacement(e, au)
            },
            submitHandler: function(aw) {
                var az = globals.resumeId;
                var e = $('input[name="schoolName"]', aw).val();
                var ax = $('input[name="positionName"]', aw).val();
                var ay = $('input[name="degree_val"]', aw).val();
                var av = $('input[name="graduate"]', aw).val();
                var au = globals.token;
                $(aw).find(":submit").val("保存中...").attr("disabled", true);
                $.ajax({
                    url: ctx + "/index.php/Home/Resume/eduSave",
                    type: "post",
                    data: {
                        id: az,
                        schoolName: e,
                        professional: ax,
                        education: ay,
                        endYear: av,
                        resubmitToken: au
                    },
                    dataType: "json"
                }).done(function(aJ) {
                    if (aJ.success) {
                        var aB = aJ.content.isOpenMyResume;
                        var aH = $(".toggle");
                        var aF = aJ.content.firstOpen;
                        globals.isFirstOpen = aF;
                        if (aB) {
                            $(".openresume_tip").hide();
                            if (globals.isFirstOpen) {
                                globals.isOpenResume = "3";
                                $(".firstset").show()
                            } else {
                                if (aH.hasClass("toggle-off")) {
                                    globals.isOpenResume = "0"
                                } else {
                                    globals.isOpenResume = "1"
                                }
                            }
                        }
                        E(aJ);
                        globals.token = aJ.resubmitToken;
                        b(aw);
                        updateResumeTime(aJ.content.refreshTime);
                        var aC = aJ.content.infoCompleteStatus.score;
                        var aE = parseInt($.trim($(".mr_bfb").text()));
                        var aD = amountScore - aE + aC;
                        updateRatioRM(aC, aD);
                        ad.obj.find(".mr_head_r").trigger("click");
                        var aG = aJ.content.educationExperiences;
                        H(aG);
                        var aA = ad.obj.find(".mr_empty_add");
                        if (aA.not(":hidden")) {
                            aA.hide()
                        }
                        var aI = $(".mr_module .flag_edu");
                        if (!aI.is(":hidden")) {
                            aI.addClass("dn")
                        }
                    } else {
                        alert(aJ.msg)
                    }
                    $(aw).find(":submit").val("保 存").attr("disabled", false)
                })
            }
        })
    }
    function aj() {
        $("#upEduForm").validate({
            rules: ad.rules,
            messages: ad.messages,
            errorPlacement: function(e, au) {
                ad.errorPlacement(e, au)
            },
            submitHandler: function(aw) {
                var az = globals.resumeId;
                var e = $('input[name="schoolName"]', aw).val();
                var ax = $('input[name="positionName"]', aw).val();
                var ay = $('input[name="degree_val"]', aw).val();
                var av = $('input[name="graduate"]', aw).val();
                var au = globals.token;
                $(aw).find(":submit").val("保存中...").attr("disabled", true);
                $.ajax({
                    url: ctx + "/index.php/Home/Resume/eduSave",
                    type: "POST",
                    data: {
                        id: az,
                        schoolName: e,
                        professional: ax,
                        education: ay,
                        endYear: av,
                        resubmitToken: au,
                        eduid: oMoudle.eduId
                    },
                    dataType: "json"
                }).done(function(aB) {
                    if (aB.success) {
                        // E(aB);
                        // globals.token = aB.resubmitToken;
                        // b(aw);
                        // updateResumeTime(aB.content.refreshTime);
                        // var aD = aB.content.infoCompleteStatus.score;
                        // var aA = parseInt($.trim($(".mr_bfb").text()));
                        // var aC = amountScore - aA + aD;
                        // updateRatioRM(aD, aC);
                        $(".mr_cancel", aw).trigger("click");
                        window.location.href=window.location.href;
                        // var aE = aB.content.educationExperiences;
                        // H(aE)
                    } else {
                        alert(aB.msg)
                    }
                })
            }
        })
    }
    function H(av) {
        var au = "";
        for (var e = 0; e < av.length; e++) {
            au += '<div class="clearfixs mb46 mr_jobe_list">';
            au += '<div class="mr_content_l">';
            if (av[e].schoolBadge != "") {
                au += '<div class="l1">';
                au += '<img src="' + ctx + "/" + av[e].schoolBadge + '" alt="学校Logo"/>';
                au += "</div>"
            }
            au += '<div class="l2">';
            au += "<h4>" + av[e].schoolName + "</h4>";
            au += "<span>" + av[e].education + " · " + av[e].professional + "</span>";
            au += "</div>";
            au += "</div>";
            au += '<div class="mr_content_r">';
            au += '<div class="mr_edit mr_c_r_t" data-eduid = "' + av[e].id + '" data-schoolname = "' + av[e].schoolName + '" data-edu = "' + av[e].education + '" data-pro = "' + av[e].professional + '" data-date = "' + av[e].endDate + '">';
            au += "<i></i><em>编辑</em>";
            au += "</div>";
            if (av[e].whetherGraduate == true) {
                au += "<span>" + av[e].endDate + "年毕业</span>"
            } else {
                au += "<span>" + av[e].endDate + "年毕业( 预计 )</span>"
            }
            au += "</div>";
            au += "</div>"
        }
        ad.obj.find(".list_show").html(au)
    }
    function E(ay) {
        var aD = $.trim($(".base_info .j").text());
        var aG = $(".ul_shenfen");
        var aI = ay.content.resume;
        var e = ay.content.latestWorkExperience;
        var aF = ay.content.latestEducationExperience;
        var au = aI.userIdentity;
        var aL = aI.workYear;
        if (e) {
            var aw = e.positionName + " · " + e.companyName
        } else {
            var aw = "·"
        }
        if (aF) {
            var aK = aF.professional + " · " + aF.schoolName
        } else {
            var aK = "·"
        }
        var ax = $.trim(aK);
        var aB = $.trim(aw);
        var aA, av, aE;
        aA = $("span.shenfen");
        if (aA.length == 0) {
            aA = $("<span></span>").addClass("shenfen");
            $(".info_t").prepend(aA)
        }
        av = $("<i></i>");
        switch (au) {
        case 0:
            if ($.trim(aL) == "应届毕业生") {
                if (ax != "·") {
                    aE = $("<em data-id='0' title='" + aK + "'>" + aK + "</em>")
                } else {
                    aE = $("<em data-id='0' title='" + aw + "'>" + aw + "</em>")
                }
                aA.removeClass("dn").empty();
                aA.append(av).append(aE)
            } else {
                if (aB != "·") {
                    aE = $("<em data-id='0' title='" + aw + "'>" + aw + "</em>")
                } else {
                    aE = $("<em data-id='0' title='" + aK + "'>" + aK + "</em>")
                }
                aA.removeClass("dn").empty();
                aA.append(av).append(aE)
            }
            if ($.trim(aA.text()) == "·") {
                aA.addClass("dn")
            }
            break;
        case 1:
            if (ax != "·") {
                aE = $("<em data-id='1' title='" + aK + "'>" + aK + "</em>")
            } else {
                aE = $("<em data-id='2' title='" + aw + "'>" + aw + "</em>")
            }
            aA.removeClass("dn").empty();
            aA.append(av).append(aE);
            if ($.trim(aA.text()) == "·") {
                aA.addClass("dn")
            }
            break;
        case 2:
            if (aB != "·") {
                aE = $("<em data-id='2' title='" + aw + "'>" + aw + "</em>")
            } else {
                aE = $("<em data-id='1' title='" + aK + "'>" + aK + "</em>")
            }
            aA.removeClass("dn").empty();
            aA.append(av).append(aE);
            if ($.trim(aA.text()) == "·") {
                aA.addClass("dn")
            }
            break
        }
        var az = aG.find("li[data-id='2']");
        var aH = aG.find("li[data-id='1']");
        if (aB != "·") {
            if (az.length > 0) {
                az.text(aw)
            } else {
                var aJ = $("<li></li>").attr({
                    "data-id": "2",
                    title: aw
                }).text(aw);
                aG.append(aJ)
            }
        } else {
            az.remove()
        }
        if (ax != "·") {
            if (aH.length > 0) {
                aH.text(aK)
            } else {
                var aC = $("<li></li>").attr({
                    "data-id": "1",
                    title: aK
                }).text(aK);
                aG.append(aC)
            }
        } else {
            aH.remove()
        }
    }
    function v(aF) {
        var aE = $.trim($(".base_info .j").text());
        if (aE == "应届毕业生") {
            var au = $(".ul_shenfen");
            var aC = aF.content.resume;
            var az = aF.content.latestEducationExperience;
            var aA = aC.userIdentity;
            var ay = aC.workYear;
            var aD = az.professional + " · " + az.schoolName;
            var ax, e, av;
            ax = $("span.shenfen");
            e = $("<i></i>");
            switch (aA) {
            case "0":
                av = $("<em data-id='0' title='" + aD + "'>" + aD + "</em>");
                ax.removeClass("dn").empty();
                ax.append(e).append(av);
                break;
            case "1":
                av = $("<em data-id='1' title='" + aD + "'>" + aD + "</em>");
                ax.removeClass("dn").empty();
                ax.append(e).append(av);
                break
            }
            var aB = au.find("li[data-id='1']");
            if (aB) {
                aB.text(aD)
            } else {
                var aw = $("</li>").attr({
                    "data-id": "1",
                    title: aD
                }).text(aD);
                au.append(aw)
            }
        }
    }
    var R = {
        obj: $("#projectExperience"),
        clearError: function(e) {
            this.obj.find("span.error").hide();
            this.obj.find("input.error").removeClass("error")
        },
        AddCancel: function() {
            var e = $("#addProForm");
            e.addClass("dn");
            e.find('input[name="projectName"]').val("");
            e.find('input[name="thePost"]').val("");
            e.find('input[name="startTime"]').val("");
            e.find('input[name="endTime"]').val("");
            e.find('textarea[name="proDescript"]').val("");
            e.find('input[name="pro_link"]').val("");
            e.find('input[type="button"]').val("");
            if (this.obj.find(".mr_jobe_list").length == 0) {
                this.obj.find(".mr_empty_add").show();
                globals.hasProjectExperiences = false
            }
            z();
            this.obj.find(".mr_head_r").removeClass("mr_add_grey").removeClass("mr_up_grey").removeClass("mr_addup_cel").children("em").text("添加");
            M = "";
            C = true;
            this.checkState();
            aa.reset();
            G.reset()
        },
        UpCancel: function() {
            z();
            $("#upProForm").prev().show();
            $("#upProForm").remove();
            M = "";
            C = true;
            this.checkState()
        },
        checkState: function() {
            if (this.obj.find(".mr_jobe_list").length == 0) {
                this.obj.find(".mr_empty_add").show();
                globals.hasProjectExperiences = false
            } else {
                this.obj.find(".mr_empty_add").hide();
                globals.hasProjectExperiences = true
            }
        },
        clear: function() {
            var au = $("#addProForm");
            au.find('input[name="projectName"]').val("");
            au.find('input[name="thePost"]').val("");
            au.find('input[name="startTime"]').val("");
            au.find('input[name="endTime"]').val("");
            au.find('textarea[name="proDescript"]').val("");
            au.find('input[name="pro_link"]').val("");
            au.find('input[type="button"]').val("");
            var e = this.obj;
            e.find(".list_show").html("");
            e.find(".mr_empty_add").show();
            this.clearError();
            this.checkState()
        }
    };
    var aa = new components.CalendarWrapper({
        container: $("#addProForm").find(".mr_timed_div:first"),
        onchange: function(au, e) {
            G.setLeftBoundary(au);
            e.find(".error").hide()
        },
        beforeShown: function(au, e) {
            G.hide();
            $(".select_color").removeClass("select_color");
            au.addClass("select_color")
        },
        afterHide: function(au, e) {
            au.removeClass("select_color")
        }
    });
    var G = new components.CalendarWrapper({
        container: $("#addProForm").find(".mr_timed_div:last"),
        onchange: function(au, e) {
            aa.setRightBoundary(au);
            e.find(".error").hide()
        },
        beforeShown: function(au, e) {
            aa.hide();
            $(".select_color").removeClass("select_color");
            au.addClass("select_color")
        },
        afterHide: function(au, e) {
            au.removeClass("select_color")
        },
        has2Today: true
    });
    var ac, Z;
    R.obj.delegate(".mr_head_r", "click",
    function(au) {
        R.clearError();
        Q();
        if ($(this).children("em").text() == "添加") {
            if (M == "") {
                M = "addProForm";
                C = false;
                $("#addProForm").removeClass("dn");
                p();
                $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").addClass("mr_addup_cel").children("em").text("取消");
                R.checkState();
                R.obj.find(".mr_empty_add").hide()
            }
        } else {
            $("#addProForm").addClass("dn");
            z();
            $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").removeClass("mr_addup_cel").children("em").text("添加");
            M = "";
            R.checkState()
        }
        ao($("#addProForm"))
    });
    R.obj.delegate(".mr_empty_add", "click",
    function(au) {
        $(this).hide();
        $("#projectExperience .mr_head_r").trigger("click")
    });
    R.obj.delegate(".mr_edit", "click",
    function(ax) {
        if (M == "") {
            p();
            M = "upProForm";
            C = false;
            var au = "";
            au = $("#pro_update_hide").html();
            au = au.replace(/mce_jason/g, "upproContent");
            au = au.replace(/tinymce_replace/g, "tinymce1");
            $(this).parents(".mr_jobe_list").hide().after(au);
            $(this).parents(".mr_jobe_list").next().attr("id", "upProForm");
            var av = $("#upProForm");
            var aw = $(this).parents(".mr_jobe_list");
            initMceMr1();
            f();
            Y(aw.attr("data-id"));
            av.find(".mr_del_ok").data("id", aw.data("id"));
            av.find('input[name="projectName"]').val($.trim(aw.find(".projectTitle").text()));
            av.find('input[name="thePost"]').val($.trim(aw.find(".l2 p").text()));
            var ay = $.trim(aw.find(".mr_content_r span").text()).split(" - ");
            av.find('input[name="startTime"]').val(ay[0]).prev().val(ay[0]);
            av.find('input[name="endTime"]').val(ay[1]).prev().val(ay[1]);
            av.find('textarea[name="upproContent"]').val($.trim(aw.find(".mr_content_m").html()));
            av.find('input[name="pro_link"]').val($.trim(aw.find(".projectTitle").attr("href")));
            ao($("#upProForm"));
            R.checkState();
            ac = new components.CalendarWrapper({
                container: av.find(".mr_timed_div:first"),
                onchange: function(az, e) {
                    Z.setLeftBoundary(az);
                    e.find(".error").hide()
                },
                beforeShown: function(az, e) {
                    Z.hide();
                    $(".select_color").removeClass("select_color");
                    az.addClass("select_color")
                },
                afterHide: function(az, e) {
                    az.removeClass("select_color")
                }
            });
            Z = new components.CalendarWrapper({
                container: av.find(".mr_timed_div:last"),
                onchange: function(az, e) {
                    ac.setRightBoundary(az);
                    e.find(".error").hide()
                },
                beforeShown: function(az, e) {
                    ac.hide();
                    $(".select_color").removeClass("select_color");
                    az.addClass("select_color")
                },
                afterHide: function(az, e) {
                    az.removeClass("select_color")
                },
                has2Today: true
            });
            ac.set(ay[0], true);
            Z.set(ay[1], true);
            handleFrames()
        }
    });
    R.obj.delegate("#upProForm .mr_cancel", "click",
    function(au) {
        R.UpCancel()
    });
    $("#addProForm .mr_cancel").bind("click",
    function(au) {
        R.AddCancel()
    });
    function Q() {
        $("#addProForm").validate({
            rules: {
                projectName: {
                    required: true,
                    maxlenStr: 50
                },
                thePost: {
                    required: true,
                    maxlenStr: 30
                },
                startTime: {
                    required: true
                },
                endTime: {
                    required: true
                },
                proDescript: {
                    required: false,
                    tinymceLength: [5, 800]
                },
                pro_link: {
                    maxlenStr: 60,
                    checkUrl: true
                }
            },
            messages: {
                projectName: {
                    required: "必填",
                    maxlenStr: "请输入100字符以内的项目名称"
                },
                thePost: {
                    required: "必填",
                    maxlenStr: "哇，你的职责这么厉害，你的公司知道吗？60个字符以内哦"
                },
                startTime: {
                    required: "必填"
                },
                endTime: {
                    required: "必填"
                },
                proDescript: {
                    tinymceLength: "请输入10-1600字符的项目描述"
                },
                pro_link: {
                    maxlenStr: "链接太长，目前只支持120字符以内哦",
                    checkUrl: "请输入有效的项目链接"
                }
            },
            errorPlacement: function(e, au) {
                if (au.attr("type") == "hidden") {
                    $(au).parent().css("margin-bottom", "25px");
                    e.appendTo($(au).parent())
                } else {
                    e.insertAfter($(au).parent())
                }
            },
            submitHandler: function(ay) {
                var av = $('input[name="projectName"]', ay).val();
                var az = $('input[name="thePost"]', ay).val();
                var ax = $('input[name="startTime"]', ay).val();
                var au = $('input[name="endTime"]', ay).val();
                var e = $('textarea[name="proDescript"]', ay).val();
                var aw = $('input[name="pro_link"]', ay).val();
                $(ay).find(":submit").val("保存中...").attr("disabled", true);
                myresumeCommon.utils.addHttpPrefix("http://|https://", aw,
                function(aA) {
                    aw = (aw == "" ? "": aA)
                });
                $.ajax({
                    url: ctx + "/" + myresumeCommon.requestTargets.projectExpSave,
                    type: "POST",
                    data: {
                        id: globals.resumeId,
                        projectid: "",
                        projectName: $.trim(av),
                        positionName: $.trim(az),
                        startDate: $.trim(ax),
                        endDate: $.trim(au),
                        projectRemark: $.trim(e),
                        dutyRemark: "",
                        projectUrl: $.trim(aw)
                    },
                    dataType: "json"
                }).done(function(aC) {
                    if (aC.success) {
                        M = "";
                        C = true;
                        z();
                        $("#addProForm").addClass("dn");
                        var aH = aC && aC.content && aC.content.projectExperiences || [];
                        var aG = B(aH);
                        R.obj.find(".list_show").html(aG);
                        var aF = $(".mr_jobe_list .l2 .projectTitle");
                        aF.each(function() {
                            var aI = $(this);
                            var aJ = aI.width();
                            aI.find("span").css("left", aJ + 5)
                        });
                        R.AddCancel();
                        var aB = R.obj.find(".mr_empty_add");
                        if (aH.length) {
                            aB.hide()
                        } else {
                            aB.show()
                        }
                        updateResumeTime(aC.content.refreshTime);
                        if (oMoudleScore.projectExpScore != "") {
                            amountScore = amountScore - oMoudleScore.projectExpScore
                        }
                        oMoudleScore.projectExpScore = "";
                        var aE = aC.content.infoCompleteStatus.score;
                        var aA = parseInt($.trim($(".mr_bfb").text()));
                        var aD = amountScore - aA + aE;
                        updateRatioRM(aE, aD);
                        R.checkState()
                    } else {
                        alert(aC.msg)
                    }
                    $(ay).find(":submit").val("保 存").attr("disabled", false);
                    aa.reset();
                    G.reset()
                })
            }
        })
    }
    function Y(e) {
        $("#upProForm").validate({
            rules: {
                projectName: {
                    required: true,
                    maxlenStr: 50
                },
                thePost: {
                    required: true,
                    maxlenStr: 30
                },
                startTime: {
                    required: true
                },
                endTime: {
                    required: true
                },
                upproContent: {
                    required: false,
                    tinymceLength: [5, 800]
                },
                pro_link: {
                    maxlenStr: 60,
                    checkUrl: true
                }
            },
            messages: {
                projectName: {
                    required: "必填",
                    maxlenStr: "请输入100字符以内的项目名称"
                },
                thePost: {
                    required: "必填",
                    maxlenStr: "哇，你的职责这么厉害，你的公司知道吗？60个字符以内哦"
                },
                startTime: {
                    required: "必填"
                },
                endTime: {
                    required: "必填"
                },
                upproContent: {
                    tinymceLength: "请输入10-1600字符的项目描述"
                },
                pro_link: {
                    maxlenStr: "链接太长，目前只支持120字符以内哦",
                    checkUrl: "请输入有效的项目链接"
                }
            },
            errorPlacement: function(au, av) {
                if (av.attr("type") == "hidden") {
                    $(av).parent().css("margin-bottom", "25px");
                    au.appendTo($(av).parent())
                } else {
                    au.insertAfter($(av).parent())
                }
            },
            submitHandler: function(az) {
                var aw = $('input[name="projectName"]', az).val();
                var aA = $('input[name="thePost"]', az).val();
                var ay = $('input[name="startTime"]', az).val();
                var av = $('input[name="endTime"]', az).val();
                var au = $('textarea[name="upproContent"]', az).val();
                var ax = $('input[name="pro_link"]', az).val();
                $(az).find(":submit").val("保存中...").attr("disabled", true);
                myresumeCommon.utils.addHttpPrefix("http://|https://", ax,
                function(aB) {
                    ax = (ax == "" ? "": aB)
                });
                $.ajax({
                    url: ctx + "/" + myresumeCommon.requestTargets.projectExpSave,
                    type: "POST",
                    data: {
                        id: globals.resumeId,
                        projectid: e,
                        projectName: $.trim(aw),
                        positionName: $.trim(aA),
                        startDate: $.trim(ay),
                        endDate: $.trim(av),
                        projectRemark: $.trim(au),
                        dutyRemark: "",
                        projectUrl: $.trim(ax)
                    },
                    dataType: "json"
                }).done(function(aD) {
                    if (aD.success) {
                        M = "";
                        C = true;
                        z();
                        $("#upProForm").remove();
                        var aI = aD && aD.content && aD.content.projectExperiences || [];
                        var aH = B(aI);
                        R.obj.find(".list_show").html(aH);
                        var aG = $(".mr_jobe_list .l2 .projectTitle");
                        aG.each(function() {
                            var aJ = $(this);
                            var aK = aJ.width();
                            aJ.find("span").css("left", aK + 5)
                        });
                        R.UpCancel();
                        var aC = R.obj.find(".mr_empty_add");
                        if (aI.length) {
                            aC.hide()
                        } else {
                            aC.show()
                        }
                        updateResumeTime(aD.content.refreshTime);
                        if (oMoudleScore.projectExpScore != "") {
                            amountScore = amountScore - oMoudleScore.projectExpScore
                        }
                        oMoudleScore.projectExpScore = "";
                        var aF = aD.content.infoCompleteStatus.score;
                        var aB = parseInt($.trim($(".mr_bfb").text()));
                        var aE = amountScore - aB + aF;
                        updateRatioRM(aF, aE);
                        R.checkState()
                    } else {
                        alert(aD.msg)
                    }
                })
            }
        })
    }
    function B(av) {
        var au = "";
        for (var e = 0; e < av.length; e++) {
            au += '<div class="mr_jobe_list" data-id="' + av[e].id + '" >';
            au += '<div class="clearfixs">';
            au += '<div class="mr_content_l">';
            au += '<div class="l2">';
            au += av[e].projectUrl ? '<a class="projectTitle" href="' + av[e].projectUrl + '" target="_blank"><span></span>' + av[e].projectName + "</a>": '<a class="projectTitle nourl">' + av[e].projectName + "</a>";
            au += "<p>" + av[e].positionName + "</p>";
            au += "</div>";
            au += "</div>";
            au += '<div class="mr_content_r">';
            au += '<div class="mr_edit mr_c_r_t">';
            au += "<i></i><em>编辑</em>";
            au += "</div>";
            au += "<span>" + av[e].startDate + " - " + av[e].endDate + "</span>";
            au += "</div>";
            au += "</div>";
            au += '<div class="mr_content_m">' + av[e].projectRemark + "</div>";
            au += "</div>"
        }
        return au
    }
    var ar = {
        obj: $("#selfDescription"),
        clearError: function(e) {
            this.obj.find("span.error").hide();
            this.obj.find("input.error").removeClass("error")
        },
        UpCancel: function() {
            $("#upSelfForm").addClass("dn");
            z();
            M = "";
            C = true;
            this.obj.find(".mr_head_r").removeClass("mr_up_grey").removeClass("mr_add_grey").removeClass("mr_addup_cel").children("em").text("编辑");
            this.obj.find(".self_des_list").removeClass("dn");
            this.checkState()
        },
        clear: function() {
            $("#self").val("");
            ar.obj.find(".mr_self_r").html("");
            this.checkState();
            this.clearError()
        },
        checkState: function() {
            if ($.trim($(".mr_self_r").html()) == "") {
                ar.obj.find(".mr_empty_add").show();
                ar.obj.find(".self_des_list").addClass("dn")
            } else {
                ar.obj.find(".mr_empty_add").hide();
                ar.obj.find(".self_des_list").removeClass("dn")
            }
        }
    };
    ar.obj.delegate(".mr_head_r", "click",
    function(aw) {
        ar.clearError();
        if ($(this).children("em").text() == "编辑") {
            if (M == "") {
                M = "upSelfForm";
                C = false;
                $("#upSelfForm").removeClass("dn");
                p();
                ar.obj.find(".self_des_list").addClass("dn");
                $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").addClass("mr_addup_cel").children("em").text("取消");
                var au = $("#upSelfForm");
                var av = ar.obj.find(".mr_self_r");
                au.find("#self").val($.trim(av.html()));
                ar.obj.find(".mr_empty_add").hide()
            }
        } else {
            $("#upSelfForm").addClass("dn");
            z();
            $(this).removeClass("mr_up_grey").removeClass("mr_add_grey").removeClass("mr_addup_cel").children("em").text("编辑");
            M = "";
            ar.obj.find(".self_des_list").removeClass("dn");
            C = true;
            if ($.trim($("#self").val()) == "") {
                ar.obj.find(".mr_empty_add").show()
            }
            ar.checkState()
        }
        ao($("#upSelfForm"))
    });
    $("#upSelfForm .mr_cancel").bind("click",
    function(au) {
        ar.UpCancel()
    });
    ar.obj.find(".mr_empty_add").bind("click",
    function(au) {
        ar.obj.find(".mr_head_r").trigger("click")
    });
    $("#upSelfForm").validate({
        rules: {
            self_des: {
                required: true,
                tinymceLength: [5, 800]
            }
        },
        messages: {
            self_des: {
                required: "必填",
                tinymceLength: "请输入10-1600字符的自我描述"
            }
        },
        errorPlacement: function(e, au) {
            if (au.attr("type") == "text" || au.attr("type") == "button") {
                $(au).parent().css("margin-bottom", "20px");
                e.appendTo($(au).parent())
            } else {
                if (au.attr("id") == "expJobDes") {
                    $(au).parent().after(e)
                } else {
                    e.insertAfter($(au).parent())
                }
            }
        },
        submitHandler: function(au) {
            $(au).find(":submit").val("保存中...").attr("disabled", true);
            var e = $.trim($("#self").val());
            myresumeCommon.utils.requester({
                url: myresumeCommon.requestTargets.myRemark,
                data: {
                    resumeId: globals.resumeId,
                    myRemark: e
                }
            },
            function(az) {
                var ay = $("#upSelfForm");
                ay.find("#self").val("");
                ar.clearError();
                ar.UpCancel();
                ar.obj.find(".mr_self_r").html(e);
                $(au).find(":submit").val("保 存").attr("disabled", false);
                updateResumeTime(az.content.refreshTime);
                globals.hasSelf = true;
                if (oMoudleScore.myRemarkScore != "") {
                    amountScore = amountScore - oMoudleScore.myRemarkScore
                }
                oMoudleScore.myRemarkScore = "";
                if ($.trim(ar.obj.find(".mr_self_r").html()) != "") {
                    ar.obj.find(".mr_empty_add").hide();
                    ar.obj.find(".self_des_list").removeClass("dn")
                }
                var ax = az.content.infoCompleteStatus.score;
                var av = parseInt($.trim($(".mr_bfb").text()));
                var aw = amountScore - av + ax;
                updateRatioRM(ax, aw)
            })
        }
    });
    var F = {
        obj: $("#expectJob"),
        clearError: function(e) {
            this.obj.find("span.error").hide();
            this.obj.find("input.error").removeClass("error")
        },
        UpCancel: function() {
            $("#upExpJobForm").addClass("dn");
            z();
            M = "";
            C = true;
            this.obj.find(".mr_head_r").removeClass("mr_up_grey").removeClass("mr_add_grey").removeClass("mr_addup_cel").children("em").text("编辑");
            this.obj.find(".expectjob_list").removeClass("dn");
            this.checkState()
        },
        clear: function() {
            var aw = $("#expectJob .expectjob_list");
            var ay = aw.find(".mr_job_name").html("");
            var ax = aw.find(".mr_job_type").html("");
            var e = aw.find(".mr_job_adr").html("");
            var av = aw.find(".mr_job_range").html("");
            var au = aw.find(".mr_job_des").html("");
            this.checkState();
            this.clearError()
        },
        checkState: function() {
            if ($.trim($(".expectjob_list").text()).replace(/\s/g, "") == "") {
                F.obj.find(".expectjob_list").addClass("dn");
                F.obj.find(".mr_empty_add").show()
            } else {
                F.obj.find(".mr_empty_add").hide();
                F.obj.find(".expectjob_list").removeClass("dn");
                globals.hasExpectJobs = true
            }
        },
        clearCityError: function() {
            F.obj.find(".mr_job_city").find("span.error").hide()
        },
        clearPayError: function() {
            F.obj.find(".mr_pay_div").find("span.error").hide()
        },
        clearPayLayer: function() {
            F.obj.find(".xl_list:first, .xl_list:last").hide()
        }
    };
    F.obj.delegate(".mr_head_r", "click",
    function(ay) {
        F.clearError();
        if ($(this).children("em").text() == "编辑") {
            if (M == "") {
                M = "upExpJobForm";
                C = false;
                $("#upExpJobForm").removeClass("dn");
                p();
                ar.obj.find(".expectjob_list").addClass("dn");
                $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").addClass("mr_addup_cel").children("em").text("取消");
                var aw = $("#expectJob .expectjob_list");
                var az = aw.find(".mr_job_name").text();
                var aA = aw.find(".mr_job_type").text();
                var aB = $(this).attr("data-city") || aw.find(".mr_job_adr").text() || $("#mr_mr_head").find(".mr_p_info .base_info em:last").text() || "";
                var ax = aw.find(".mr_job_range").text();
                var aC = aw.find(".mr_expjob_content").html();
                var au = $("#upExpJobForm");
                $('input[name="expjobName"]', au).val($.trim(az));
                var av = $.trim(aA);
                if (av == "") {
                    $('input[name="exp_job_type"]', au).val("全职")
                } else {
                    $('input[name="exp_job_type"]', au).val(av)
                }
                $('input[name="jobCity"]', au).val($.trim(aB));
                $('input[name="monthpay"]', au).val($.trim(ax));
                $("#expJobDes").val($.trim(aC));
                F.checkState();
                F.obj.find(".mr_empty_add").hide();
                F.obj.find(".expectjob_list").addClass("dn")
            }
        } else {
            $("#upExpJobForm").addClass("dn");
            z();
            $(this).removeClass("mr_up_grey").removeClass("mr_add_grey").removeClass("mr_addup_cel").children("em").text("编辑");
            M = "";
            ar.obj.find(".expectjob_list").removeClass("dn");
            C = true;
            F.checkState()
        }
        ao($("#upExpJobForm"))
    });
    $("#upExpJobForm .mr_cancel").bind("click",
    function(au) {
        F.UpCancel()
    });
    F.obj.find(".mr_empty_add").bind("click",
    function(au) {
        F.obj.find(".mr_head_r").trigger("click")
    });
    F.obj.find(".ul_exptype").on("click", "li",
    function(au) {
        au.stopPropagation();
        $(this).parent().parent().prev().val($(this).text());
        $(this).parent().parent().hide();
        $(".select_color").removeClass("select_color")
    });
    F.obj.find(".ul_pay").on("click", "li",
    function(au) {
        au.stopPropagation();
        $(this).parent().parent().prev().val($(this).text());
        $(this).parent().parent().hide();
        $(".select_color").removeClass("select_color");
        F.clearPayError()
    });
    $("#upExpJobForm").submit(function() {
        tinyMCE.triggerSave(true)
    }).validate({
        rules: {
            expjobName: {
                required: false,
                maxlenStr: 30,
                positionspecialchar: true
            },
            expJobDes: {
                tinymceLength: [0, 400]
            },
            monthpay: {
                required: false
            },
            jobCity: {
                required: false
            }
        },
        messages: {
            expjobName: {
                maxlenStr: "请输入有效的期望职位",
                positionspecialchar: "格式错误"
            },
            expJobDes: {
                tinymceLength: $.validator.format("请输入400字符以内的补充说明")
            }
        },
        errorPlacement: function(e, au) {
            if (au.attr("type") == "text" || au.attr("type") == "button") {
                $(au).parent().css("margin-bottom", "20px");
                e.appendTo($(au).parent())
            } else {
                if (au.attr("id") == "expJobDes") {
                    $(au).parent().after(e)
                } else {
                    e.insertAfter($(au).parent())
                }
            }
        },
        submitHandler: function(av) {
            $(av).find(":submit").val("保存中...").attr("disabled", true);
            var aA = $('input[name="expjobName"]', av).val();
            var az = $('input[name="exp_job_type"]', av).val();
            var au = $('input[name="jobCity"]', av).val();
            var ax = $('input[name="monthpay"]', av).val();
            var aw = $("#expJobDes").val();
            var e = $("#expJobDes").text().replace("&nbsp;", "");
            var ay = $.trim($("#expectJob .mr_job_info").attr("data-id"));
            $.ajax({
                url: ctx + myresumeCommon.requestTargets.expectJobSave,
                type: "POST",
                data: {
                    id: globals.resumeId,
                    expectId: ay || "",
                    city: au,
                    positionType: az,
                    positionName: aA,
                    addExplain: aw,
                    salarys: ax,
                    resubmitToken: globals.token
                },
                dataType: "json"
            }).done(function(aC) {
                if ($.trim(au) == "") {
                    $("#expectJob .mr_head_r").attr("data-city", "")
                }
                if (null != aC.resubmitToken && "" != aC.resubmitToken) {
                    globals.token = aC.resubmitToken
                }
                $(av).find(":submit").val("保 存").attr("disabled", false);
                updateResumeTime(aC.content.refreshTime);
                if (oMoudleScore.expectJobsScore != "") {
                    amountScore = amountScore - oMoudleScore.expectJobsScore
                }
                oMoudleScore.expectJobsScore = "";
                var aE = aC.content.infoCompleteStatus.score;
                var aB = parseInt($.trim($(".mr_bfb").text()));
                var aD = amountScore - aB + aE;
                updateRatioRM(aE, aD);
                globals.hasExpectJobs = true;
                var aF = $("#expectJob .expectjob_list");
                $("#expHideId").val(aC.content.expectJobs.id);
                aF.find(".mr_job_name").text(aA);
                aF.find(".mr_job_name").attr("title", aA);
                aF.find(".mr_job_type").text(az);
                aF.find(".mr_job_adr").text(au);
                aF.find(".mr_job_adr").attr("title", au);
                aF.find(".mr_job_range").text(ax);
                aF.find(".mr_expjob_content").html(aw);
                $("#expectJob .mr_job_info").attr("data-id", aC.content.expectJobs.id);
                if ($.trim(aA) == "") {
                    $(".mr_name_li").addClass("dn")
                } else {
                    $(".mr_name_li").removeClass("dn")
                }
                if ($.trim(az) == "") {
                    $(".mr_jobtype_li").addClass("dn")
                } else {
                    $(".mr_jobtype_li").removeClass("dn")
                }
                if ($.trim(au) == "") {
                    $(".mr_city_li").addClass("dn")
                } else {
                    $(".mr_city_li").removeClass("dn")
                }
                if ($.trim(ax) == "") {
                    $(".mr_jobrange_li").addClass("dn")
                } else {
                    $(".mr_jobrange_li").removeClass("dn")
                }
                if ($.trim(e) == "") {
                    $(".mr_job_des").addClass("dn")
                } else {
                    $(".mr_job_des").removeClass("dn")
                }
                F.UpCancel();
                $(".expectjob_list").removeClass("dn");
                $("#upExpJobForm").addClass("dn");
                z();
                M = "";
                C = true;
                F.checkState()
            })
        }
    });
    var k = {
        obj: $("#customBlock"),
        clearError: function(e) {
            this.obj.find("span.error").hide();
            this.obj.find("input.error").removeClass("error")
        },
        UpCancel: function() {
            initTitlePosition();
            $("#upCustomForm").addClass("dn");
            z();
            M = "";
            C = true;
            this.obj.find(".mr_head_r").removeClass("mr_up_grey").removeClass("mr_add_grey").removeClass("mr_addup_cel").children("em").text("编辑");
            this.obj.find(".custom_list").removeClass("dn");
            var e = $(".mr_content_cus").text();
            if ($.trim(e) == "") {
                $("#customBlock .mr_empty_add").show()
            }
        },
        SetTitle: function() {
            var e = $("#customTitleName");
            if (e.val() == "" || !e.val()) {
                $("#customBlock .cust_title span").text("自定义标题")
            } else {
                $("#customBlock .cust_title span").text(e.val())
            }
        }
    };
    k.obj.delegate(".mr_empty_add", "click",
    function(au) {
        $(this).addClass("dn");
        $("#customBlock .mr_head_r").trigger("click")
    });
    $("#customCon").bind("full2restore",
    function(av, au) {
        $("#customCon").valid()
    });
    k.obj.delegate(".mr_head_r", "click",
    function(ay) {
        $("#customBlock .mr_empty_add").hide();
        k.clearError();
        k.obj.find(".mr_add_work img").attr("src", $("#userpic").attr("src"));
        var ax = $("#customBlock .cust_title").text();
        var aw = $("#customBlock .custom_list").html();
        var au = $.trim(ax);
        if (au == "自定义标题") {
            $("#upCustomForm input[name='titleName']").val("")
        } else {
            $("#upCustomForm input[name='titleName']").val(au)
        }
        $("#customCon").html(aw);
        if ($(this).children("em").text() == "编辑") {
            if (M == "") {
                M = "upCustomForm";
                C = false;
                $("#upCustomForm").removeClass("dn");
                p();
                k.obj.find(".custom_list").addClass("dn");
                $(this).removeClass("mr_add_grey").removeClass("mr_up_grey").addClass("mr_addup_cel").children("em").text("取消")
            }
        } else {
            k.SetTitle();
            initTitlePosition();
            $("#upCustomForm").addClass("dn");
            z();
            $(this).removeClass("mr_up_grey").removeClass("mr_add_grey").removeClass("mr_addup_cel").children("em").text("编辑");
            M = "";
            k.obj.find(".custom_list").removeClass("dn");
            C = true;
            var av = $(".mr_content_cus").text();
            if ($.trim(av) == "") {
                $("#customBlock .mr_empty_add").show()
            }
        }
        ao($("#upCustomForm"))
    });
    $("#upCustomForm .mr_cancel").bind("click",
    function(au) {
        k.SetTitle();
        k.UpCancel()
    });
    $("#upCustomForm").submit(function() {
        tinyMCE.triggerSave(true)
    }).validate({
        rules: {
            titleName: {
                required: true,
                rangeLenStr: [0, 10]
            },
            customCon: {
                required: true,
                tinymceLength: [1, 800]
            }
        },
        messages: {
            titleName: {
                required: "必填",
                rangeLenStr: "请输入20个字符以内的标题"
            },
            customCon: {
                required: "必填",
                tinymceLength: "请输入2-1600字符的有效内容"
            }
        },
        errorPlacement: function(e, au) {
            if (au.attr("id") == "customCon") {
                $(au).parent().after(e)
            } else {
                e.insertAfter($(au).parent())
            }
        },
        submitHandler: function(av) {
            var e = globals.token;
            var ay = globals.resumeId;
            var ax = $("#customId").val();
            var au = $('input[name="titleName"]', av).val();
            var aw = tinyMCE.get("customCon").getContent();
            $(av).find(":submit").val("保存中...").attr("disabled", true);
            $.ajax({
                url: ctx + "/userDefine/titleSave.json",
                type: "post",
                data: {
                    id: ay,
                    defineId: ax,
                    titleName: au,
                    titleContent: aw,
                    resubmitToken: e
                },
                dataType: "json"
            }).done(function(az) {
                if (az.success) {
                    globals.hasUserDefines = true;
                    globals.token = az.resubmitToken;
                    updateResumeTime(az.content.refreshTime);
                    $(".mr_cancel", av).trigger("click");
                    $("#customBlock .mr_moudle_content .mr_empty_add").hide();
                    z();
                    M = "";
                    C = true;
                    k.obj.find(".mr_head_r").removeClass("mr_up_grey").removeClass("mr_add_grey").removeClass("mr_addup_cel").children("em").text("编辑");
                    var aC = $('input[name="titleName"]', av).val();
                    var aB = $("#customCon").val();
                    $("#customBlock .cust_title span").text(aC);
                    $("#upCustomForm").addClass("dn");
                    var aD = az.content.userDefine;
                    var aA = "";
                    aA += '<input id="customTitleName" type="hidden" value="' + aD.titleName + '" />';
                    aA += '<input id="customId" type="hidden" value="' + aD.id + '" />';
                    aA += '<div class="custom_list" data-id="' + aD.id + '">' + aD.titleContent + "</div>";
                    $(".mr_content_cus").html(aA);
                    initTitlePosition()
                } else {
                    alert(az.msg)
                }
                $(av).find(":submit").val("保 存").attr("disabled", false)
            })
        }
    });
    $("#upCustomForm input[name='titleName']").keyup(function(au) {});
    try {
        myresumeCommon.utils.inputerListener($("#upCustomForm input[name='titleName']"),
        function(au) {
            var e = au.length;
            var av = 0;
            var ay = au;
            for (var aw = 0; aw < e; aw++) {
                if (au.charCodeAt(aw) < 27 || au.charCodeAt(aw) > 126) {
                    av += 2
                } else {
                    av++
                }
                var az = $("#titleName");
                if (av > 20) {
                    ay = au.substring(0, aw);
                    az.val(ay);
                    break
                }
            }
            if (ay == "") {
                $("#customBlock .cust_title span").text("自定义标题")
            } else {
                $("#customBlock .cust_title span").text(ay)
            }
            var ax = parseInt($("#customBlock .cust_title").width()) / 2;
            $("#customBlock .cust_title").css("margin-left", -ax * 0.7)
        })
    } catch(am) {}
    var i = (function() {
        var bf = {
            upload: 0,
            online: 1
        };
        var bj = bf.upload;
        var a7 = {
            edit: "添加",
            cancel: "取消"
        };
        var a9 = {
            normal: 0,
            edit: 1
        };
        var bk = a9.normal;
        var a2 = {
            editcancel: "mr_addup_cel"
        };
        var aY = {
            url: "www.example.com",
            previewText: "<p>这里是你的作品描述</p>"
        };
        var aZ = $("#worksShow");
        var aA = aZ.find(".mr_head_r");
        var be = aA.find("em");
        var az = aZ.find(".mr_moudle_content");
        var ax = az.find(".mr_worksshow_forms");
        var aG = az.find("#addWorksShowUploadForm");
        var aK = az.find("#addWorksShowOnlineForm");
        var aN = az.find(".mr_work_online");
        var bg = az.find(".mr_work_upload");
        var ay = az.find(".mr_cancel");
        var aS = az.find(".mr_save");
        var a1 = az.find(".mr_empty_add");
        var aR = aK.find("#workOnlineUrl");
        var av = aK.find("#workOnlineDescContent");
        var aL = aK.find(".mr_self_sitelink");
        var a5 = aK.find(".mr_wo_preview");
        var aM = aG.find("#worksshowUp");
        aM.click(function() {
            $(this).blur()
        });
        var bb = aG.find("#worksshowUpShow");
        var e = aG.find("#workUploadTitle");
        var bh = aG.find("#workImagesDescContent");
        var aD = function() {
            return aN.find(".mr_wo_show").length + bg.find(".mr_wu_show").length
        };
        var aU = function() {
            az.find(".mr_worksshow_tab span").bind("click",
            function() {
                var bl = $(this);
                if (bl.hasClass("selected")) {
                    return
                }
                ax.find("span.error").hide();
                if (bl.hasClass("mr_wst_uponline")) {
                    aG.hide();
                    aK.show();
                    bj = bf.online
                } else {
                    aG.show();
                    aK.hide();
                    bj = bf.upload
                }
            })
        };
        var a4 = function() {
            if (M != "") {
                return
            }
            a5.html(aY.previewText);
            aL.html(aY.url);
            be.text(a7.cancel);
            aA.addClass(a2.editcancel);
            bb.css({
                width: "0",
                height: "0"
            });
            a1.hide();
            ax.find(".up").removeClass("up");
            ax.show();
            bk = a9.edit;
            M = bj == bf.upload ? "addWorksShowUploadForm": "addWorksShowOnlineForm";
            C = false;
            p()
        };
        var au = function() {
            be.text(a7.edit);
            aA.removeClass(a2.editcancel);
            ax.hide(); ! aD() && a1.show();
            bk = a9.normal;
            M = "";
            C = true;
            z()
        };
        var aF = function() {
            aT();
            bk == a9.normal ? a4() : au()
        };
        var a6 = function() {
            return {
                id: globals.resumeId,
                wsid: "",
                url: "",
                workName: "",
                imageUrl: "",
                workTitle: "",
                workDescribe: ""
            }
        };
        var bi = function(bp) {
            var br = bp && bp.content && bp.content.workShows || [];
            var bq = {
                online: "",
                upload: ""
            };
            $.each(br,
            function(bs, bt) {
                bt.url && (bq.online += myresumeCommon.utils.strFormat(myresumeCommon.templates.workShowOnline, {
                    type: "online",
                    id: bt.id,
                    href: bt.url,
                    desc: bt.workName,
                    ahref: ~bt.url.indexOf("http://") || ~bt.url.indexOf("https://") ? bt.url: ("http://" + bt.url)
                }));
                bt.imageUrl && (bq.upload += myresumeCommon.utils.strFormat(myresumeCommon.templates.workShowUpload, {
                    type: "upload",
                    id: bt.id,
                    imgsrc: bt.cutImageUrl,
                    imageUrl: bt.imageUrl,
                    desc: bt.workDescribe,
                    title: bt.workTitle,
                    hasTitle: bt.workTitle != "" ? "": "dn"
                }))
            });
            aN.html(bq.online);
            bg.html(bq.upload);
            var bo = $(".mr_wu_con .mr_content_l");
            bo.each(function() {
                var bs = $(this);
                if (bs.hasClass("dn") && $.trim(bs.parent().next(".mr_wu_con_m").text()) != "") {
                    bs.parent().addClass("step_aside");
                    bs.parent().next(".mr_wu_con_m").addClass("step_content")
                }
            });
            br.length ? a1.hide() : a1.show();
            if (br.length) {
                globals.hasWorkShows = true
            } else {
                globals.hasWorkShows = false
            }
            updateResumeTime(bp.content.refreshTime);
            if (oMoudleScore.workShowScore != "") {
                amountScore = amountScore - oMoudleScore.workShowScore
            }
            oMoudleScore.workShowScore = "";
            var bn = bp.content.infoCompleteStatus.score;
            var bl = parseInt($.trim($(".mr_bfb").text()));
            var bm = amountScore - bl + bn;
            updateRatioRM(bn, bm)
        };
        var aB = function(bl) {
            aZ.find(":submit").val("保存中...").attr("disabled", true);
            var bn = a6();
            if (bj == bf.online) {
                var bm = aR.val();
                myresumeCommon.utils.addHttpPrefix("", bm,
                function(bo) {
                    bm = (bm == "" ? "": bo)
                });
                bn.url = $.trim(bm);
                bn.workName = $.trim(av.val())
            } else {
                if (bj == bf.upload) {
                    bn.workTitle = $.trim(e.val());
                    bn.workDescribe = $.trim(bh.val());
                    bn.imageUrl = $.trim(bb.attr("data-origin-src"));
                    bn.cutImageUrl = $.trim(bb.attr("src"))
                }
            }
            myresumeCommon.utils.requester({
                url: myresumeCommon.requestTargets.workShowSave,
                data: bn
            },
            function(bo) {
                bi(bo);
                aA.trigger("click");
                aZ.find(":submit").val("保 存").attr("disabled", false);
                var bp = $("#worksshowUpShow");
                bp.attr("src", "").attr("data-origin-src", "").css({
                    width: 0,
                    height: 0
                });
                bp.prev().prev().removeClass("up");
                $("#workUploadTitle").val("");
                $("#workImagesDescContent").val("");
                if (bl == aK) {
                    $("#workOnlineUrl").val("");
                    $("#workOnlineDescContent").val("")
                }
                bp.parent().find(".work-pic-hidden").val("")
            })
        };
        var aT = function() {
            ax.find("span.error").hide()
        };
        var ba = function() {
            var bl = bj == bf.upload ? aG: aK;
            if (bl.valid()) {
                aB(bl)
            }
            return false
        };
        var aE = {
            rules: {
                workPicHidden: {
                    required: true
                },
                workTitle: {
                    required: false,
                    maxlenStr: 50
                },
                workDescribe: {
                    required: false,
                    tinymceLength: [0, 500]
                },
                url: {
                    required: true,
                    maxlenStr: 60,
                    checkUrl: true
                },
                workDescribeOnline: {
                    required: false,
                    tinymceLength: [0, 100]
                }
            },
            messages: {
                workPicHidden: {
                    required: "请选择要上传的图片"
                },
                workTitle: {
                    required: "请输入作品标题",
                    maxlenStr: "请输入有效的作品标题（100字符以内）"
                },
                workDescribe: {
                    required: "请描述你的作品",
                    tinymceLength: "请输入1000字符以内的描述"
                },
                url: {
                    required: "请输入在线地址",
                    maxlenStr: "请输入120字符以内的网址",
                    checkUrl: "请输入有效的在线地址"
                },
                workDescribeOnline: {
                    required: "请描述你的作品",
                    tinymceLength: "请输入200字符以内的描述"
                }
            },
            errorPlacement: function(bl, bm) {
                if (bm.attr("type") == "button") {
                    bl.appendTo($(bm).parent())
                } else {
                    bl.insertAfter($(bm).parent())
                }
            }
        };
        var aJ = function(bl) {
            return bl.replace(/id="([\w-\d\S]+)"/g, 'id="$1-Temp"')
        };
        var aV = function(bl, bo, bn) {
            var bm = function() {
                var bp = $.trim(bl.val());
                bn && myresumeCommon.utils.addHttpPrefix("", bp,
                function(br) {
                    bp = (bp == "" ? "": br)
                });
                var bq = bo[0].tagName.toLowerCase();
                if (bq == "a") {
                    if (bp.length == 0) {}
                    bo.attr("href", bp);
                    bo.html(bp)
                } else {
                    if (bp.length == 0) {
                        bp = aY.url
                    }
                    bo.html(bp)
                }
            };
            bl.bind("keyup", bm).bind("blur", bm)
        };
        var aQ = function(bp, bo) {
            var bn = function() {
                var bq = $.trim(bp.val()) || aY.previewText;
                bo.html(bq)
            };
            var bm = bp.parent().find("iframe")[0];
            if (bm) {
                var bl = bm.contentDocument.body;
                bl.onkeyup = bn;
                bl.onblur = bn;
                bl.onfocus = bn
            }
        };
        var aC = function(bu) {
            if (M != "") {
                return
            }
            M = "addWorksShowOnlineFormUpdate";
            C = false;
            p();
            var br = $("#addWorksShowOnlineFormUpdate")[0].outerHTML;
            bu.after(br);
            var bt = aZ.find("#addWorksShowOnlineFormUpdate");
            var bo = bt.find("#workOnlineDescContentUpdate");
            bo.tinymce(myresumeCommon.config.tinymce);
            var bp = bt.find("#workOnlineUrlUpdate");
            var bm = bu.attr("data-id");
            var bl = $.trim(bu.find(".mr_self_sitelink").text());
            var bs = $.trim(bu.find(".mr_wo_preview").html());
            var bq = bt.find(".mr_self_sitelink");
            var bv = bt.find(".mr_wo_preview");
            bq.html(bl);
            bv.html(bs);
            bp.val(bl);
            bo.val(bs);
            bu.hide();
            bt.show();
            aV(bp, bq, true);
            aQ(bo, bv);
            bo.bind("full2restore",
            function(bz, by) {
                bv.html(by)
            });
            bt.validate(aE);
            var bw = bt.find(".mr_save");
            var bx = bt.find(".mr_cancel");
            var bn = bt.find(".mr_del_ok");
            bw.bind("click",
            function() {
                if (bt.valid()) {
                    bw.val("保存中...").attr("disabled", true);
                    var by = a6();
                    by.url = $.trim(bp.val());
                    by.workName = $.trim(bo.val());
                    by.wsid = bm;
                    myresumeCommon.utils.requester({
                        url: myresumeCommon.requestTargets.workShowSave,
                        data: by
                    },
                    function(bz) {
                        bi(bz);
                        bx.trigger("click");
                        bw.val("保 存").attr("disabled", false);
                        z();
                        bo.remove();
                        M = "";
                        C = true
                    })
                }
                return false
            });
            bx.bind("click",
            function() {
                bu.show();
                bt.remove();
                myresumeCommon.utils.unset([bt, bo, bp, bq, bv, bw, bx, bn]);
                M = "";
                C = true;
                z()
            });
            bn.bind("click",
            function() {
                bn.text("删除中...").attr("disabled", true);
                var by = a6();
                by.id = bm;
                myresumeCommon.utils.requester({
                    url: myresumeCommon.requestTargets.workShowDel,
                    data: by
                },
                function(bC) {
                    bi(bC);
                    bx.trigger("click");
                    bn.text("删 除").attr("disabled", false);
                    if (oMoudleScore.workShowScore != "") {
                        amountScore = amountScore - oMoudleScore.workShowScore
                    }
                    oMoudleScore.workShowScore = "";
                    var bB = bC.content.infoCompleteStatus.score;
                    var bz = parseInt($.trim($(".mr_bfb").text()));
                    var bA = amountScore - bz + bB;
                    amountScore = bA;
                    updateRatioRM(bB, bA);
                    bo.remove();
                    z();
                    M = "";
                    C = true
                });
                return false
            });
            ao(bt)
        };
        var aH = function(bt) {
            if (M != "") {
                return
            }
            M = "addWorksShowUploadFormUpdate";
            C = false;
            p();
            var bq = $("#addWorksShowUploadFormUpdate")[0].outerHTML;
            bt.after(bq);
            var bs = aZ.find("#addWorksShowUploadFormUpdate");
            var bn = bs.find("#workImagesDescContentUpdate");
            bn.tinymce(myresumeCommon.config.tinymce);
            var bp = bs.find("#workUploadTitleUpdate");
            var bl = bt.attr("data-id");
            var bz = $.trim(bt.find(".mr_wu_t img").attr("src"));
            var bo = $.trim(bt.find(".mr_wu_t img").attr("data-origin-src"));
            var bv = $.trim(bt.find(".mr_work_title").text());
            bv = bv.substring(2, bv.length - 2);
            var br = $.trim(bt.find(".mr_wu_con_m").html());
            var bx = bs.find(".worksshow_img");
            bx.attr("data-origin-src", bo);
            var bu = bx.prev().prev();
            bu.addClass("up");
            if (bz != "") {
                bx.css({
                    width: "100%",
                    height: "100%"
                }).attr("src", bz)
            } else {
                logoSrc = "";
                bu.removeClass("up");
                bx.css({
                    width: 0,
                    height: 0
                }).attr("src", bz)
            }
            bp.val(bv);
            bn.val(br);
            bt.hide();
            bs.show();
            bs.validate(aE);
            var bw = bs.find(".mr_save");
            var by = bs.find(".mr_cancel");
            var bm = bs.find(".mr_del_ok");
            bw.bind("click",
            function() {
                if (bs.valid()) {
                    bw.val("保存中...").attr("disabled", true);
                    var bA = a6();
                    bA.wsid = bl;
                    bA.workTitle = $.trim(bp.val());
                    bA.workDescribe = $.trim(bn.val());
                    bA.imageUrl = $.trim(bx.attr("data-origin-src"));
                    bA.cutImageUrl = $.trim(bx.attr("src"));
                    myresumeCommon.utils.requester({
                        url: myresumeCommon.requestTargets.workShowSave,
                        data: bA
                    },
                    function(bB) {
                        bi(bB);
                        bn.remove();
                        by.trigger("click");
                        bw.val("保 存").attr("disabled", false);
                        bn.remove();
                        z();
                        M = "";
                        C = true
                    })
                }
                return false
            });
            by.bind("click",
            function() {
                bt.show();
                bs.remove();
                myresumeCommon.utils.unset([bs, bn, bp, bw, by, bm]);
                M = "";
                C = true;
                z()
            });
            bm.bind("click",
            function() {
                bm.text("删除中...").attr("disabled", true);
                var bA = a6();
                bA.id = bl;
                myresumeCommon.utils.requester({
                    url: myresumeCommon.requestTargets.workShowDel,
                    data: bA
                },
                function(bB) {
                    bi(bB);
                    bn.remove();
                    by.trigger("click");
                    bm.text("删 除").attr("disabled", false);
                    z();
                    M = "";
                    C = true
                });
                return false
            });
            ao(bs)
        };
        var aw = function() {
            var bm = $(this);
            var bl = bm.attr("data-type");
            bl == "online" ? aC(bm.parents(".mr_wo_show")) : aH(bm.parents(".mr_wu_show"))
        };
        var a3 = function() {
            myresumeCommon.utils.imageUpload("#worksshowUp", ctx + myresumeCommon.requestTargets.workUpload, null, aP)
        };
        var a0 = function() {
            aN.html("");
            bg.html("");
            aD() ? a1.hide() : a1.show()
        };
        var bc = function() {
            aA.bind("click", aF);
            ay.bind("click", aF);
            aS.bind("click", ba);
            aU();
            aG.validate(aE);
            aK.validate(aE);
            a1.click(function() {
                aA.trigger("click")
            });
            az.delegate(".mr_wo_show .mr_edit_text, .mr_wu_show .mr_edit_text", "click", aw);
            window.setTimeout(function() {
                aV(aR, aL, true);
                aQ(av, a5);
                ao(aG);
                ao(aK);
                av.bind("full2restore",
                function(bm, bl) {
                    a5.html(bl)
                })
            },
            3000)
        };
        var aX = $("#cropimageContainer");
        var aW = aX.find("#cropzoom_container");
        var bd = aX.find("#cropimageEnsure");
        var a8 = aX.find("#cropimageRestore");
        var aO;
        bd.bind("click",
        function() {
            $(".add_worksshow_form").find(":submit").val("上传中").attr("disabled", true);
            aO.send(ctx + myresumeCommon.requestTargets.workCut, "POST", {
                resubmitToken: globals.token
            },
            function(bl) {
                aO.showImage.prev().prev().prev().removeClass("active").addClass("up");
                aO.showImage.parent().find(".work-pic-hidden").val(bl.content);
                aO.showImage.attr("src", ctx + "/" + bl.content).css({
                    width: "100%",
                    height: "100%"
                });
                $.colorbox.close();
                aO.showImage = null;
                if (null != bl.resubmitToken && "" != bl.resubmitToken) {
                    globals.token = bl.resubmitToken
                }
                $(".add_worksshow_form").find(":submit").val("保存").attr("disabled", false);
                aO.restore()
            })
        });
        a8.bind("click",
        function() {
            $("#worksShow input[name='workPicHidden']").val("");
            aO.restore();
            $.colorbox.close()
        });
        var aP = function(bl, bm) {
            var bo = $("#" + bm + "Show");
            var bn = ctx + "/" + bl.uploadPath;
            bo.parent().parent().find(".error").hide();
            bo.attr("data-origin-src", bn);
            $.colorbox({
                inline: true,
                href: aX,
                title: "选择裁剪区域"
            });
            myresumeCommon.config.cutImage.image.source = bn;
            myresumeCommon.config.cutImage.image.width = bl.srcImageW;
            myresumeCommon.config.cutImage.image.height = bl.srcImageH;
            myresumeCommon.config.cutImage.selector.w = myresumeCommon.config.workShowSelector.width;
            myresumeCommon.config.cutImage.selector.h = myresumeCommon.config.workShowSelector.height;
            aO = aW.cropzoom(myresumeCommon.config.cutImage);
            aO.showImage = bo
        };
        var aI = function(bl) {};
        return {
            init: bc,
            addUploadSucc: aP,
            addUploadFail: aI,
            clear: a0
        }
    })();
    window.worksShowOperator = i;
    i.init();
    $("#worksShow").delegate(".mr_worksshow_upimage", "mouseover",
    function() {
        var e = $(this).find("div");
        if (!e.hasClass("up")) {
            e.addClass("active")
        }
    });
    $("#worksShow").delegate(".mr_worksshow_upimage", "mouseout",
    function() {
        var e = $(this).find("div");
        if (!e.hasClass("up")) {
            e.removeClass("active")
        }
    });
    var D = (function() {
        var aY = {
            edit: "编辑",
            cancel: "取消"
        };
        var aZ = {
            normal: 0,
            edit: 1
        };
        var a0 = {
            skillplanstart: 10,
            skillplanend: 420,
            skillcirclestart: 122,
            skillcircleend: 532,
            allwidth: 410
        };
        var ba = aZ.normal;
        var aV = {
            editcancel: "mr_addup_cel"
        };
        var aN = {
            inbk: "inline-block"
        };
        var aA = {
            defaultText: "了解",
            hashDefine: {
                "了解": {
                    min: 0,
                    max: 84
                },
                "熟悉": {
                    min: 84,
                    max: 168
                },
                "掌握": {
                    min: 168,
                    max: 252
                },
                "精通": {
                    min: 252,
                    max: 336
                },
                "专家": {
                    min: 336,
                    max: 450
                }
            }
        };
        var aW = {
            skillTitle: "输入技能名称"
        };
        var aH = 5;
        var a6 = function() {
            return ba
        };
        var aF = function(bc) {
            var be = aA.defaultText;
            for (var bd in aA.hashDefine) {
                if ((aA.hashDefine[bd].min < bc) && (bc <= aA.hashDefine[bd].max)) {
                    be = bd;
                    break
                }
            }
            return be
        };
        var aQ = $("#skillsAssess");
        var ay = aQ.find(".mr_moudle_content");
        var aw = ay.find(".mr_skill_con");
        var aO = ay.find(".me_skill_list");
        var a7 = aQ.find(".mr_head_r");
        var bb = a7.find("em");
        var aU = aQ.find(".mr_skill_delete");
        var aJ = aQ.find(".mr_skill_circle");
        var ax = aQ.find(".mr_skill_level");
        var aT = aQ.find(".mr_empty_add");
        var aC = aQ.find(".mr_skill_add");
        var az = aQ.find(".mr_skill_add_button");
        var aB = aQ.find(".mr_skill_opera");
        var aK = aB.find(".mr_save");
        var aX = aB.find(".mr_cancel");
        var aG = true;
        var aD = function() {
            if (M != "") {
                return
            }
            bb.text(aY.cancel);
            a7.addClass(aV.editcancel);
            a9(true);
            aU = aO.find(".mr_skill_delete");
            aJ = aO.find(".mr_skill_circle");
            ax = aO.find(".mr_skill_level");
            aU.css("display", aN.inbk);
            aJ.css("display", aN.inbk);
            ax.hide();
            aC.show();
            a3();
            ba = aZ.edit;
            var bc = $(".mr_skill_name");
            if ($.trim(bc.text()) == "输入技能名称") {
                bc.css("font-style", "italic")
            }
            M = "updateSkill";
            C = false;
            p();
            ay.addClass("mr_skilledit_background")
        };
        var au = function() {
            bb.text(aY.edit);
            a7.removeClass(aV.editcancel);
            a9();
            aU = aO.find(".mr_skill_delete");
            aJ = aO.find(".mr_skill_circle");
            ax = aO.find(".mr_skill_level");
            aU.hide();
            aJ.hide();
            ax.show();
            aC.hide();
            ba = aZ.normal;
            M = "";
            C = true;
            z();
            ay.removeClass("mr_skilledit_background")
        };
        var a9 = function(bc) {
            if (!aO.children('.mr_skill_con[data-del-flag!="1"]').length) {
                if (bc) {
                    aT.hide();
                    aO.html(myresumeCommon.utils.strFormat(myresumeCommon.templates.skillItem, {
                        skillPercent: "10",
                        id: "",
                        skillName: aW.skillTitle,
                        masterLevel: "了解"
                    }));
                    aO.children("div").attr("data-add-flag", "1")
                } else {
                    aT.show();
                    aB.hide()
                }
            }
        };
        var aE = function() {
            aM();
            ba == aZ.normal ? aD() : au()
        };
        var aM = function() {
            ay.find("div[data-add-flag=1]").remove();
            aO.children("div[data-del-flag=1]").show().removeAttr("data-del-flag");
            aS(ay.find("div[data-grade-edit=1]"));
            ay.find(".mr_skill_con").each(function() {
                var bc = $(this).find(".mr_skill_name");
                bc.text(bc.attr("title"))
            })
        };
        var aL = function() {
            var bc = [];
            aO.children("div[data-del-flag=1][data-add-flag!=1]").each(function(bd, be) {
                bc.push(be.getAttribute("data-skill-id"))
            });
            return bc
        };
        var e = function() {
            var bc = 40;
            var bg = aQ.find(".mr_skill_con");
            var bf = false;
            var be = 0;
            var bd;
            $.each(bg,
            function(bh) {
                var bj = $(this);
                if (bj.attr("data-del-flag") == 1) {
                    return
                }
                var bk = $.trim(bj.find(".mr_skill_name").text());
                if (bk == "" || ~bk.indexOf(aW.skillTitle)) {
                    bd = bh;
                    bf = true;
                    return false
                }
                var bi = getStrLen(bk);
                if (bi > be) {
                    be = bi;
                    bd = bh
                }
            });
            if (bf) {
                if (undefined != bd) {
                    $(bg[bd]).find(".mr_skill_name").trigger("click")
                }
                myresumeCommon.utils.errorTips(aQ.find(".error"), "必填");
                return false
            }
            if (be > bc) {
                if (undefined != bd) {
                    $(bg[bd]).find(".mr_skill_name").trigger("click")
                }
                myresumeCommon.utils.errorTips(aQ.find(".error"), "请输入20个字以内的技能名称");
                return false
            }
            return true
        };
        var a4 = function() {
            if (!e()) {
                return
            }
            var bd = aL();
            var bc = a1();
            aQ.find(":submit").val("保存中...").attr("disabled", true);
            if (bd.length) {
                myresumeCommon.utils.requester({
                    url: myresumeCommon.requestTargets.skillDel,
                    data: {
                        skillId: bd.join(",")
                    }
                },
                function(be) {
                    aP(bc)
                });
                return
            }
            aP(bc)
        };
        var aP = function(bc) {
            var bd = {
                skillJson: JSON.stringify(bc),
                resumeId: globals.resumeId
            };
            myresumeCommon.utils.requester({
                url: myresumeCommon.requestTargets.skillSave,
                data: bd
            },
            function(be) {
                a8(be);
                aE();
                aQ.find(":submit").val("保 存").attr("disabled", false)
            })
        };
        var a8 = function(bf) {
            var bh = bf && bf.content && bf.content.skillEvaluates || [];
            var bg = "";
            $.each(bh,
            function(bi, bj) {
                bg += myresumeCommon.utils.strFormat(myresumeCommon.templates.skillItem, bj)
            });
            aO.html(bg);
            bh.length ? aT.hide() : aT.show();
            aS(aO.children());
            if (bh.length) {
                globals.hasSkillEvaluates = true
            } else {
                globals.hasSkillEvaluates = false
            }
            updateResumeTime(bf.content.refreshTime);
            if (oMoudleScore.skillScore != "") {
                amountScore = amountScore - oMoudleScore.skillScore
            }
            oMoudleScore.skillScore = "";
            var be = bf.content.infoCompleteStatus.score;
            var bc = parseInt($.trim($(".mr_bfb").text()));
            var bd = amountScore - bc + be;
            updateRatioRM(be, bd)
        };
        var a1 = function() {
            var bd = aO.find(".mr_skill_con");
            var bc = av(bd);
            return bc
        };
        var a3 = function() {
            aO.children('.mr_skill_con[data-del-flag!="1"]').length >= aH ? az.hide() : az.show()
        };
        var aI = function(bc) {
            bc.attr("data-add-flag", "1");
            bc.removeAttr("data-del-flag");
            bc.find(".mr_skill_plan em").width(a0.skillplanstart);
            bc.find(".mr_skill_circle").css("left", a0.skillcirclestart).find("em").text(aA.defaultText);
            bc.removeAttr("data-grade").removeAttr("data-grade-edit").removeAttr("data-skill-id");
            bc.find(".mr_skill_name").attr("title", "").css("font-style", "italic");
            bc.show();
            a3()
        };
        var aS = function(bc) {
            bc = bc || aw;
            bc.each(function(be, bf) {
                var bd = a0.allwidth * (bf.getAttribute("data-grade") / 100);
                var bg = $(bf);
                var bh = aF(bd);
                bg.find(".mr_skill_plan em").width(a0.skillplanstart + bd);
                bg.find(".mr_skill_circle").css("left", a0.skillcirclestart + bd + "px").find("em").text(bh);
                bg.find(".mr_skill_level").text(bh)
            })
        };
        var av = function(bd) {
            var bc = [];
            bd = bd || aw;
            bd.each(function(bf, bi) {
                var bj = $(bi);
                if (~ ($.trim(bj.find(".mr_skill_name").text()).indexOf(aW.skillTitle)) || bj.attr("data-del-flag")) {
                    return
                }
                var be = {};
                var bg = bj.find(".mr_skill_plan em").width() - a0.skillplanstart;
                var bh = parseInt((bg / a0.allwidth) * 100);
                be.id = bj.attr("data-skill-id") || "";
                be.skillName = $.trim(bj.find(".mr_skill_name").text());
                be.masterLevel = $.trim(bj.find(".mr_skill_circle").text());
                be.skillPercent = ( + bh) < 0 ? 0 : bh;
                bc.push(be)
            });
            return bc
        };
        var a2 = function(bc) {
            $(this).parent(".mr_skill_con").attr("data-del-flag", 1).hide();
            a3();
            bc.stopPropagation()
        };
        var aR = function() {
            aO.html("");
            aT.show()
        };
        var a5 = function() {
            aS();
            a7.bind("click", aE);
            aX.bind("click", aE);
            aT.bind("click", aE);
            aK.bind("click", a4);
            aQ.delegate(".mr_skill_delete", "click", a2)
        };
        return {
            init: a5,
            clear: aR,
            initWidths: a0,
            rangeDefine: aA,
            onAddSkill: aI,
            defaultsText: aW,
            getState: a6,
            toggleOpenOnclick: aE
        }
    })();
    D.init();
    function p() {
        var e = $(".mr_empty_add");
        e.not("hidden").addClass("addgrey");
        e.bind("click", a);
        $(".mr_head_r").each(function(av) {
            $(this).css("cursor", "default");
            var au = $(this).children("em").text();
            if (au == "添加") {
                $(this).addClass("mr_add_grey")
            } else {
                if (au == "编辑") {
                    $(this).addClass("mr_up_grey")
                }
            }
        });
        $(".mr_c_r_t").each(function(av) {
            $(this).css("cursor", "default");
            var au = $(this).children("em").text();
            if (au == "添加") {
                $(this).addClass("mr_add_grey")
            } else {
                if (au == "编辑") {
                    $(this).addClass("mr_up_grey")
                }
            }
        })
    }
    function a() {
        return false
    }
    function z() {
        var e = $(".mr_empty_add");
        e.not("hidden").removeClass("addgrey");
        e.unbind("click", a);
        $(".mr_head_r").each(function(av) {
            $(this).css("cursor", "pointer");
            var au = $(this).children("em");
            if ($(this).hasClass("mr_add_grey")) {
                au.text("添加");
                $(this).removeClass("mr_add_grey")
            } else {
                if ($(this).hasClass("mr_up_grey")) {
                    au.text("编辑");
                    $(this).removeClass("mr_up_grey")
                }
            }
        });
        $(".mr_c_r_t").each(function(av) {
            $(this).css("cursor", "pointer");
            var au = $(this).children("em");
            if ($(this).hasClass("mr_add_grey")) {
                au.text("添加");
                $(this).removeClass("mr_add_grey")
            } else {
                if ($(this).hasClass("mr_up_grey")) {
                    au.text("编辑");
                    $(this).removeClass("mr_up_grey")
                }
            }
        });
        C = true;
        M = ""
    }
    $(".mr_created").delegate(".mr_click_flag", "click",
    function(au) {
        au.stopPropagation();
        $(".xl_list").hide();
        $(".select_color").removeClass("select_color");
        $(this).addClass("select_color");
        if (m) {
            m.hide()
        }
        if (x) {
            x.hide()
        }
        if (u) {
            u.hide()
        }
        if (aa) {
            aa.hide()
        }
        if (G) {
            G.hide()
        }
        if (ac) {
            ac.hide()
        }
        if (Z) {
            Z.hide()
        }
        if (s) {
            s.hide()
        }
        if (P) {
            P.hide()
        }
        if (t) {
            t.hide()
        }
        if (r) {
            r.hide()
        }
        if (aa) {
            aa.hide()
        }
        if (G) {
            G.hide()
        }
    });
    $("#skillsAssess").delegate(".mr_skill_circle", "mousedown",
    function() {
        var e = $(this);
        var aw = e.siblings(".mr_skill_plan").find("em");
        var av = e.parent(".mr_skill_con");
        var au = e.siblings(".mr_skill_plan");
        e.parent().attr("data-grade-edit", "1");
        $(document).on("mousemove",
        function(ay) {
            var az = ay || event;
            var ax = az.clientX - av.offset().left - 122 - e.width() / 2;
            if (ax < 0) {
                ax = 0
            } else {
                if (ax > au.width() - e.width() / 2) {
                    ax = au.width() - e.width() / 2
                }
            }
            e.css({
                left: 122 + ax + "px"
            });
            aw.width(ax + e.width() / 2);
            if (aw.width() <= 84) {
                e.find("em").text("了解")
            } else {
                if (aw.width() > 84 && aw.width() <= 168) {
                    e.find("em").text("熟悉")
                } else {
                    if (aw.width() > 168 && aw.width() <= 252) {
                        e.find("em").text("掌握")
                    } else {
                        if (aw.width() > 252 && aw.width() <= 336) {
                            e.find("em").text("精通")
                        } else {
                            if (aw.width() > 336) {
                                e.find("em").text("专家")
                            }
                        }
                    }
                }
            }
        });
        $(document).on("mouseup",
        function() {
            $(this).off("mousemove");
            $(this).off("mouseup")
        });
        return false
    });
    $("#skillsAssess").delegate(".mr_skill_name", "click",
    function(e) {
        if (!D.getState()) {
            return
        }
        $text = $(this).text();
        var au = $('<input type="text" name="skillname" />');
        $(this).empty();
        au.appendTo($(this));
        au.val($text);
        au.css({
            width: "90px",
            height: "22px",
            "font-size": "14px",
            border: "none",
            outline: "none",
            margin: "0px",
            padding: "0 5px",
            border: "1px solid #00b88d",
            "line-height": "22px"
        });
        au.on("click",
        function(av) {
            av.stopPropagation()
        });
        au.on("focus",
        function() {
            var av = $.trim(au.val());
            if (av == "" || av == D.defaultsText.skillTitle) {
                au.css("color", "silver")
            } else {
                au.css("color", "#000")
            }
            au.select()
        });
        au.on("blur",
        function() {
            var aw = $.trim(au.val()) || D.defaultsText.skillTitle;
            var av = au.closest(".mr_skill_name");
            av.text(aw);
            if (aw == D.defaultsText.skillTitle) {
                av.css("font-style", "italic")
            } else {
                av.css("font-style", "normal")
            }
            au.remove()
        });
        au.on("keyup",
        function(av) {
            var aw = $.trim(au.val());
            au.css("color", "#000")
        });
        au.focus();
        e.stopPropagation()
    });
    var h = navigator.appName;
    var g = navigator.appVersion;
    var ah = g.split(";");
    var T;
    if (ah.length > 1) {
        T = ah[1].replace(/[ ]/g, "")
    }
    if (h == "Microsoft Internet Explorer" && T == "MSIE7.0") {}
    function ae(e) {
        if (e.nodeType == 1) {
            e.setAttribute("unselectable", "on")
        }
        var au = e.firstChild;
        while (au) {
            ae(au);
            au = au.nextSibling
        }
    }
    $(".mr_skill_add_button span").on("click",
    function(av) {
        var au = $(".mr_skill_con");
        var e = $(".mr_skill_con").eq(au.length - 1);
        var aw = e.clone(true);
        aw.find(".mr_skill_name").text(D.defaultsText.skillTitle);
        e.after(aw);
        D.onAddSkill(aw);
        av.stopPropagation()
    });
    function N(aw, av) {
        var e = parseInt($.trim($(".mr_bfb").text()));
        var au = 0;
        switch (aw) {
        case "expectJob":
            au = parseInt(oMdScore.expectJobsScore);
            oMoudleScore.expectJobsScore = au;
            break;
        case "projectExperience":
            au = parseInt(oMdScore.projectExpScore);
            oMoudleScore.projectExpScore = au;
            break;
        case "worksShow":
            au = parseInt(oMdScore.workShowScore);
            oMoudleScore.workShowScore = au;
            break;
        case "skillsAssess":
            au = parseInt(oMdScore.skillScore);
            oMoudleScore.skillScore = au;
            break;
        case "selfDescription":
            au = parseInt(oMdScore.myRemarkScore);
            oMoudleScore.myRemarkScore = au;
            break;
        default:
            return
        }
        if (av == 0) {
            amountScore = amountScore + au
        } else {
            amountScore = amountScore - au
        }
        if (amountScore >= 100) {
            amountScore = 100
        }
        if (amountScore < e) {
            amountScore = e
        }
        updateRatioRM(e, amountScore)
    }
    $(".mr_set_default").bind("click",
    function(aw) {
        aw.stopPropagation();
        var ax = $(this);
        var av = ax.find(".set_default_wrap");
        var au = ax.find(".xl_list");
        if (av.hasClass("active")) {
            av.removeClass("active");
            au.hide()
        } else {
            av.addClass("active");
            au.show()
        }
    });
    $(".ul_resume_type li").bind("click",
    function(av) {
        av.stopPropagation();
        var aw = $(this);
        var au = aw.parent().parent();
        $.ajax({
            url: ctx + "/mycenter/resume/setDefaultResume.json",
            type: "POST",
            data: {
                type: aw.attr("data-type")
            }
        }).done(function(e) {
            if (e.success) {
                au.hide();
                $("#default_resume").val(aw.text());
                $(".set_default_wrap").removeClass("active")
            } else {
                alert(e.msg)
            }
        })
    })
});
function initMceMr() {
    if ($("textarea.tinymce")) {
        $("textarea.tinymce").tinymce({
            script_url: ctx + "/js/tinymce/jscripts/tiny_mce/tiny_mce.js",
            theme: "advanced",
            language: "zh-cn",
            plugins: "paste,autolink,lists,style,layer,save,advhr,advimage,advlink,iespell,inlinepopups,preview,media,searchreplace,contextmenu,fullscreen,noneditable,visualchars,nonbreaking",
            theme_advanced_buttons1: "bullist,numlist",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "none",
            theme_advanced_resizing: false,
            paste_auto_cleanup_on_paste: true,
            paste_as_text: true,
            auto_cleanup_word: true,
            paste_remove_styles: true,
            contextmenu: "copy cut paste",
            force_br_newlines: true,
            force_p_newlines: false,
            apply_source_formatting: false,
            remove_linebreaks: false,
            convert_newlines_to_brs: true,
            content_css: ctx + "/js/tinymce/examples/css/content.css",
            template_external_list_url: "lists/template_list.js",
            external_link_list_url: "lists/link_list.js",
            template_replace_values: {
                username: "Some User",
                staffid: "991234"
            },
            onchange_callback: function(b) {
                tinyMCE.triggerSave();
                var a = tinyMCE.get(b.id).getContent();
                if (a.length > 0) {
                    try {
                        $("#" + b.id).valid()
                    } catch(c) {}
                }
            }
        })
    }
}
function initMceMr1() {
    if ($("textarea.tinymce1")) {
        $("textarea.tinymce1").tinymce({
            script_url: ctx + "/js/tinymce/jscripts/tiny_mce/tiny_mce.js",
            theme: "advanced",
            language: "zh-cn",
            plugins: "paste,autolink,lists,style,layer,save,advhr,advimage,advlink,iespell,inlinepopups,preview,media,searchreplace,contextmenu,fullscreen,noneditable,visualchars,nonbreaking",
            theme_advanced_buttons1: "bullist,numlist",
            theme_advanced_toolbar_location: "top",
            theme_advanced_toolbar_align: "left",
            theme_advanced_statusbar_location: "none",
            theme_advanced_resizing: false,
            paste_auto_cleanup_on_paste: true,
            paste_as_text: true,
            auto_cleanup_word: true,
            paste_remove_styles: true,
            contextmenu: "copy cut paste",
            force_br_newlines: true,
            force_p_newlines: false,
            apply_source_formatting: false,
            remove_linebreaks: false,
            convert_newlines_to_brs: true,
            content_css: ctx + "/js/tinymce/examples/css/content.css",
            template_external_list_url: "lists/template_list.js",
            external_link_list_url: "lists/link_list.js",
            template_replace_values: {
                username: "Some User",
                staffid: "991234"
            },
            onchange_callback: function(b) {
                tinyMCE.triggerSave();
                var a = tinyMCE.get(b.id).getContent();
                if (a.length > 0) {
                    try {
                        $("#" + b.id).valid()
                    } catch(c) {}
                }
            }
        })
    }
}
function validateChange(c) {
    var b = $(c);
    var a = b.parents("form").validate().element(b);
    if (a) {
        b.parent().css("margin-bottom", "0")
    }
}
function img_check(o, action_url, id) {
    var _obj = $(o);
    var obj = $("#" + id);
    var oNext = obj.next();
    var oPrev = obj.prev();
    this.AllowExt = ".jpg,.gif,.jpeg,.png,.pjpeg";
    this.FileExt = obj.val().substr(obj.val().lastIndexOf(".")).toLowerCase();
    if (this.AllowExt != 0 && this.AllowExt.indexOf(this.FileExt) == -1) {
        errorTips("请上传jpg、gif、png格式头像，大小不超过2M")
    } else {
        $("#" + id + "_error").text("").hide();
        $.ajaxFileUpload({
            url: action_url,
            secureuri: false,
            fileElementId: id,
            data: {
                companyLogo: obj.val(),
                workId: oMoudle.workId
            },
            dataType: "text",
            success: function(rs) {
                oMoudle.workId = "";
                var data = eval("(" + rs + ")");
                if (data.success) {
                    var imgSrc = ctx + "/" + data.content;
                    oPrev.removeClass("active").addClass("up");
                    oNext.css({
                        width: 120,
                        height: 120
                    }).attr("src", imgSrc);
                    $("#selfDescription").find(".mr_headimg").attr("src", imgSrc)
                } else {
                    errorTips("上传失败，请重新上传", "上传头像")
                }
            },
            error: function(data) {
                errorTips("上传失败，请重新上传", "上传头像")
            }
        })
    }
}
var uploadFlag = 1;
function file_check(obj, action_url, id) {
    if (uploadFlag == 2) {
        return false
    }
    uploadFlag = 2;
    $("#loadingImg").css("visibility", "visible");
    var obj = $("#" + id);
    var userId = $("#userid").val();
    this.AllowExt = ".doc,.docx,.pdf,.ppt,.pptx,.txt,.wps";
    this.FileExt = obj.val().substr(obj.val().lastIndexOf(".")).toLowerCase();
    if (obj.val() == "") {
        $("#loadingImg").css("visibility", "hidden");
        return false
    } else {
        if (this.AllowExt != 0 && this.AllowExt.indexOf(this.FileExt) == -1) {
            errorTips("只支持word、pdf、ppt、txt、wps格式文件，请重新上传");
            $("#resumeUpload").val("");
            $("#loadingImg").css("visibility", "hidden");
            uploadFlag = 1
        } else {
            $.ajaxFileUpload({
                type: "POST",
                url: action_url,
                secureuri: false,
                fileElementId: id,
                data: {
                    userId: userId
                },
                dataType: "text",
                success: function(jsonStr) {
                    uploadFlag = 1;
                    var json = eval("(" + jsonStr + ")");
                    $("#loadingImg").css("visibility", "hidden");
                    if (json.success) {
                        $.ajax({
                            url: ctx + "/mycenter/resume/setDefaultResume.json",
                            type: "POST",
                            data: {
                                type: "0"
                            }
                        }).done(function(result) {
                            if (result.success) {
                                $("#default_resume").val("默认投递：附件简历")
                            } else {
                                alert(result.msg)
                            }
                        });
                        $(".mr_upload").hide();
                        $(".mr_uploaded .mr_up_main a").text(json.content.nearbyName).attr("title", "下载" + json.content.nearbyName);
                        $(".mr_uploaded .mr_up_main p").text(json.content.time);
                        var isShowDefault = $("#isShowDefault");
                        if (isShowDefault.val() == "0") {
                            $(".mr_uploaded .mr_set_default").hide()
                        } else {
                            $(".mr_uploaded .mr_set_default").show()
                        }
                        $(".mr_uploaded").show();
                        $.colorbox({
                            inline: true,
                            href: $("div#uploadFileSuccess"),
                            title: "上传附件简历"
                        })
                    } else {
                        if (json.code == -1) {
                            $.colorbox({
                                inline: true,
                                href: $("div#fileResumeUpload"),
                                title: "附件简历上传失败"
                            })
                        } else {
                            if (json.code == -2) {
                                $.colorbox({
                                    inline: true,
                                    href: $("div#fileResumeUploadSize"),
                                    title: "附件简历上传失败"
                                })
                            } else {
                                uploadFlag = 1;
                                errorTips("简历上传失败，请重新上传");
                                $("#loadingImg").css("visibility", "hidden")
                            }
                        }
                    }
                },
                error: function(err) {
                    errorTips("简历上传失败，请重新上传");
                    $("#loadingImg").css("visibility", "hidden");
                    uploadFlag = 1;
                    $(".btn_s").click(function() {
                        window.location.reload()
                    });
                    $("#colorbox").on("click", "#cboxClose",
                    function() {
                        if ($(this).siblings("#cboxLoadedContent").children("div").attr("id") == "uploadFile") {
                            window.location.reload()
                        }
                    })
                }
            })
        }
    }
}
function getStrLen(d) {
    var a = 0;
    var b;
    var e;
    for (var b = 0; b < d.length; b++) {
        e = d.charCodeAt(b);
        if (isDbcCase(e)) {
            a = a + 1
        } else {
            a = a + 2
        }
    }
    return a
}
function isDbcCase(a) {
    if (a >= 32 && a <= 127) {
        return true
    } else {
        if (a >= 65377 && a <= 65439) {
            return true
        }
    }
    return false
}
function popQR() {
    $.ajax({
        url: ctx + "/qr/qrcode.jpg",
        type: "GET"
    }).done(function(a) {
        if (a && a.success) {
            $(".dropdown_menu img").attr("src", a.content)
        }
    })
}
function updateRatioRM(b, c) {
    var d = b / 100 * 250;
    if (c >= 100) {
        c == 100
    }
    var a = c / 100 * 250;
    $(".mr_solid").animate({
        width: d
    });
    $(".mr_dashed").animate({
        width: a
    });
    $(".mr_top .mr_bfb").text(b + "%")
}
function updateResumeTime(a) {
    $(".upResumeTime").text(a)
}
function initTitlePosition() {
    var a = parseInt($("#customBlock .cust_title").width()) / 2;
    $("#customBlock .cust_title").css("margin-left", -parseInt(a * 0.65))
}
window.setTimeout(function() {
    handleFrames()
},
7000);
var openFlag = true;
var toggleHandler = function(a) {
    var a = a;
    var b = $(a).find("input");
    b.click(function() {
        if (openFlag) {
            openFlag = false;
            if (globals.isOpenResume != "3" && globals.isOpenResume != "2") {
                if (b.eq(1).is(":checked")) {
                    switchResumeStatus(0, a, b)
                } else {
                    $.colorbox({
                        inline: true,
                        href: $("div#closeplus"),
                        title: "提示"
                    });
                    openFlag = true
                }
            }
        }
    });
    $(a).hover(function() {
        $(".openresume_tip").toggleClass("dn")
    },
    function() {
        $(".openresume_tip").toggleClass("dn")
    });
    $("#openResumeStatus .btn").click(function() {
        switchResumeStatus(0, a, b)
    });
    $("#closeplus a").click(function(c) {
        switchResumeStatus(1, a, b)
    })
};
function switchResumeStatus(c, a, b) {
    $.colorbox.close();
    $.ajax({
        url: ctx + "/mycenter/openMyResume.json",
        type: "POST",
        async: false,
        data: {
            openStatus: c
        },
        dataType: "json"
    }).done(function(e) {
        clearTimeout(g);
        var d = $(".openresume_tip");
        if (e.state == 1) {
            d.hide();
            var f = $(".succ-fail");
            if (e.content.data.openStatus == 1) {
                b.eq(0).attr("checked", "checked");
                $(a).removeClass("toggle-off");
                f.find("p").text("已开启PLUS");
                globals.isOpenResume = 1;
                f.show()
            } else {
                b.eq(1).attr("checked", "checked");
                $(a).addClass("toggle-off");
                f.find("p").text("已关闭PLUS");
                globals.isOpenResume = 0;
                f.show()
            }
            var g = setTimeout(function() {
                f.stop().hide();
                openFlag = true
            },
            3000)
        } else {
            if (e.state == 405) {
                $(".open_resume_notice").show();
                return false
            } else {
                alert(e.message)
            }
        }
    })
}
$(document).ready(function() {
    var a = $(".openresume_tip");
    if (globals.isOpenResume == "3") {
        a.hide();
        $(".firstset").show()
    }
    $(".toggle").each(function(c, b) {
        toggleHandler(b)
    });
    $(".openresume_tip i").bind("click",
    function(b) {
        b.stopPropagation;
        $(this).parent().hide()
    });
    $(".toggle").mouseover(function() {
        switch (globals.isOpenResume) {
        case "0":
            $(".firstset").show();
            break;
        case "2":
            $(".unopen").show();
            break;
        case "3":
            $(".firstset").show();
            $(".unopen").hide();
            break
        }
    })
});
$(".firstset a").on("click",
function() {
    $.ajax({
        url: ctx + "/mycenter/openMyResume.json",
        type: "POST",
        data: {
            openStatus: 0
        },
        dataType: "json"
    }).done(function() {
        window.location.href = "http://www.lagou.com/user/resumePrivacy.html"
    })
});