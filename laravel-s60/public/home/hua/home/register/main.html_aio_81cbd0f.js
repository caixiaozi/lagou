/*!pc/modules/common/js/config.js*/
;define("pc/modules/common/js/config",["require","exports","module"],function(require,exports,module){module.exports={url:{toPhoneReset:GLOBAL_DOMAIN.pctx+"/accountPwd/toPhoneReset.html",sendRestpasswordVerifyCode:GLOBAL_DOMAIN.pctx+"/accountPwd/sendRestpasswordVerifyCode.json",resetPhone:GLOBAL_DOMAIN.pctx+"/accountPwd/resetPhone.json",toVerifyResetPhone:GLOBAL_DOMAIN.pctx+"/accountPwd/toVerifyResetPhone.html",resetPhonePassword:GLOBAL_DOMAIN.pctx+"/accountPwd/resetPhonePassword.json",verfiyBindEmail:GLOBAL_DOMAIN.pctx+"/account/verfiyBindEmail.html",register:GLOBAL_DOMAIN.pctx+"/register/register.json",verifyemail:GLOBAL_DOMAIN.pctx+"/register/verifyemail.json",getPhoneVerificationCode:GLOBAL_DOMAIN.pctx+"/register/getPhoneVerificationCode.json",resetPhone:GLOBAL_DOMAIN.pctx+"/vcode/create",resetPhone:GLOBAL_DOMAIN.pctx+"/accountPwd/resetPhone.json",resetPhone:GLOBAL_DOMAIN.pctx+"/accountPwd/resetPhone.json",resetPhone:GLOBAL_DOMAIN.pctx+"/accountPwd/resetPhone.json",resetPhone:GLOBAL_DOMAIN.pctx+"/accountPwd/resetPhone.json"}}});
/*!pc/page/register/main.js*/
;define("pc/page/register/main",["require","exports","module","pc/modules/common/js/config"],function(require){function a(e){var a=e,F=a.parent.CollectData(),c="veenike";F.isValidate&&(F.password=md5(F.password),F.password=md5(c+F.password+c),$.ajax({url:a.control._option.url,data:F,type:"post",dataType:"json",cache:!1}).done(function(F){var c={1:{message:"成功",linkFor:"phoneVerificationCode",level:"info"},220:{message:"请输入有效的邮箱地址",linkFor:"email",level:"error"},211:{message:"请输入6-16位密码，字母区分大小写",linkFor:"password",level:"error"},222:{message:"请输入11位大陆地区手机号码",linkFor:"phoneVerificationCode",level:"error"},240:{message:"请输入常用邮箱地址或者手机号码",linkFor:"phoneVerificationCode",level:"error"},241:{message:"请输入密码",linkFor:"password",level:"error"},243:{message:"请选择使用拉勾的目的",linkFor:"type",level:"error"},244:{message:"请输入6位数字验证码",linkFor:"phoneVerificationCode",level:"error"},245:{message:"请输入6位数字验证码",linkFor:"phoneVerificationCode",level:"error"},299:{message:"你的操作太过频繁，请稍后再试",linkFor:"phoneVerificationCode",level:"error"},400:{message:"该邮箱已被注册，请重新输入或直接登录",linkFor:"email",level:"error"},401:{message:"验证码不正确",linkFor:"phoneVerificationCode",level:"error"},402:{message:"验证码不正确",linkFor:"phoneVerificationCode",level:"error"},403:{message:"系统错误",linkFor:"phoneVerificationCode",level:"error"},405:{message:"该手机已被注册，请重新输入或直接登录",linkFor:"phone",level:"error"},498:{message:"系统错误",linkFor:"protocol",level:"error"},499:{message:"系统错误",linkFor:"protocol",level:"error"},501:{message:"系统错误",linkFor:"phoneVerificationCode",level:"error"},502:{message:"系统错误",linkFor:"protocol",level:"error"},10010:{message:"验证码不正确",linkFor:"request_form_verifyCode",level:"error"},10011:{message:"系统错误",linkFor:"protocol",level:"error"},10012:{message:"系统错误",linkFor:"protocol",level:"error"}};if(c[F.state]&&1!=F.state&&a.parent.field[c[F.state].linkFor].showMessage({message:c[F.state].message}),10010!=F.state||a.parent.field.request_form_verifyCode.getIsVisible()||(a.parent.field.request_form_verifyCode.getVerifyCode(),a.parent.field.request_form_verifyCode.setVisible(!0)),1==F.state){var g="/grantServiceTicket/grant.html";window.location.href=g}else a.parent.field.request_form_verifyCode.getIsVisible()&&a.parent.field.request_form_verifyCode.getVerifyCode()}))}var F=(require("pc/modules/common/js/config"),$(".form_head > li")),c=$(".form_body");F.parent().append('<span class="tab_active"></span>'),F.each(function(i){$(this).click(function(){$(this).not(":visible")?($(this).addClass("active").siblings().removeClass("active"),$(this).siblings(".tab_active").stop().animate({left:$(this).offsetParent().context.offsetLeft},400),c.eq(i).show().siblings(".form_body").hide(),g.setClear(),v.setClear()):($(this).addClass("active").siblings().removeClass("active"),c.eq(i).show().siblings(".form_body").hide())})}),$(".input_item > .btn_outline").each(function(){$(this).click(function(){$(this).addClass("btn_active").siblings().removeClass("btn_active")})});var g=new lg.Views.BaseView({name:"phoneRegister",fields:[{name:"phone",validRules:[{mode:"require",data:"",message:"请输入手机号码",trigger:"blur"},{mode:"pattern",isUse:!0,status:!1,data:{phone:/^(0|86|17951)?(13[0-9]|15[012356789]|17[678]|18[0-9]|14[57])[0-9]{8}$/},message:"请输入11位大陆地区手机号码"}],controlType:"Phone"},{name:"phoneVerificationCode",linkFor:"phone",totalTips:"该手机获取验证码已达上限，请明天再试",validRules:[{mode:"require",data:"",message:"请输入6位数字验证码"},{mode:"pattern",isUse:!0,status:!1,data:"/^[0-9]{6,6}$/",message:"请输入6位数字验证码"}],url:"/register/getPhoneVerificationCode.json",controlType:"PhoneVerificationCode",click:function(e){var a=e;console.log(a.control.totalTimeTemp),(-1==a.control.totalTimeTemp||a.control.totalTimeTemp==a.control.getTopTime())&&$.ajax({url:a.control._option.url,data:{phone:a.linkFor.getValue()},dataType:"json",cache:!1}).done(function(F){var c={1:{message:"验证码已发送，请查收短信",linkFor:"phoneVerificationCode",level:"info"},220:{message:"请输入11位大陆地区手机号码",linkFor:"phone",level:"error"},221:{message:"系统错误",linkFor:"phoneVerificationCode",level:"error"},222:{message:"该手机已被注册，请重新输入或直接登录",linkFor:"phone",level:"error"},310:{message:"该手机获取验证码已达上限，请明天再试",linkFor:"phoneVerificationCode",level:"error"},311:{message:"用户获取验证码频率过高，请稍后再试",linkFor:"phoneVerificationCode",level:"error"},240:{message:"请输入手机号码",linkFor:"phone",level:"error"},500:{message:"系统错误",linkFor:"phoneVerificationCode",level:"error"},10011:{message:"系统错误",linkFor:"phoneVerificationCode",level:"error"},10012:{message:"系统错误",linkFor:"phoneVerificationCode",level:"error"}};c[F.state]&&a.parent.field[c[F.state].linkFor].showMessage({message:c[F.state].message}),1==F.state?e.control.starttime(e.control):e.control.init(),e.control.setDisable(!1)})}},{name:"password",validRules:[{mode:"require",data:"",message:"请输入密码"},{mode:"pattern",data:"/^[\\S\\s]{6,16}$/",message:"请输入6-16位密码，字母区分大小写"}],controlType:"Password"},{name:"type",validRules:[{mode:"require",data:"",message:"请选择使用拉勾的目的"}],controlType:"Switch"},{name:"protocol",validRules:[{mode:"require",data:"",message:"请接受拉勾用户协议"}],controlType:"CheckBox"},{name:"request_form_verifyCode",isVisible:!1,validRules:[{mode:"require",data:"",message:"请输入验证码"},{mode:"pattern",data:"/^[a-zA-Z0-9]{4,4}$/",message:"请输入正确的验证码"}],from:"register",url:"http://passport.lagou.com/vcode/create",controlType:"VerifyCode"},{name:"submit",validRules:[],controlType:"Button",url:"/register/register.json",click:a}]}),v=new lg.Views.BaseView({name:"emailRegister",fields:[{name:"email",validRules:[{mode:"require",data:"",message:"请输入常用邮箱地址"},{mode:"pattern",isUse:!0,status:!1,data:{email:/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i},message:"请输入有效的邮箱地址"}],controlType:"Email"},{name:"password",validRules:[{mode:"require",data:"",message:"请输入密码"},{mode:"pattern",data:"/^[\\S\\s]{6,16}$/",message:"请输入6-16位密码，字母区分大小写"}],controlType:"Password"},{name:"request_form_verifyCode",isVisible:!1,validRules:[{mode:"require",data:"",message:"请输入验证码"},{mode:"pattern",data:"/^[a-zA-Z0-9]{4,4}$/",message:"请输入正确的验证码"}],from:"register",url:"http://passport.lagou.com/vcode/create",controlType:"VerifyCode"},{name:"type",validRules:[{mode:"require",data:"",message:"请选择使用拉勾的目的"}],controlType:"Switch"},{name:"protocol",validRules:[{mode:"require",data:"",message:"请接受拉勾用户协议"}],controlType:"CheckBox"},{name:"submit",validRules:[],controlType:"Button",url:"/register/register.json",click:a}],callback:lg.submit_func}),h=$("#isVisiable_request_form_verifyCode").val();if(h){g.field.request_form_verifyCode.getVerifyCode(),g.field.request_form_verifyCode.setVisible(!0),v.field.request_form_verifyCode.setVisible(!0);{$(".content_box")}$(".content_box").css("height",$("#content_box").css("height")+30)}});