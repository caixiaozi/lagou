/*!dep/js-md5/src/md5.js*/
;!function(a){"use strict";var c="undefined"!=typeof module;c&&(a=global,a.JS_MD5_TEST&&(a.navigator={userAgent:"Firefox"}));var h,A=(a.JS_MD5_TEST||!c)&&-1!=navigator.userAgent.indexOf("Firefox"),g=!a.JS_MD5_TEST&&"undefined"!=typeof ArrayBuffer,y="0123456789abcdef".split(""),v=[128,32768,8388608,-2147483648],S=[0,8,16,24],T=[];if(g){var _=new ArrayBuffer(68);h=new Uint8Array(_),T=new Uint32Array(_)}var w=function(a){var c="string"!=typeof a;c&&a.constructor==ArrayBuffer&&(a=new Uint8Array(a));var _,w,B,C,D,E,J,d,M,U,b,i,F=!0,H=!1,O=0,j=0,k=0,z=a.length;T[16]=0;do{if(T[0]=T[16],T[16]=T[1]=T[2]=T[3]=T[4]=T[5]=T[6]=T[7]=T[8]=T[9]=T[10]=T[11]=T[12]=T[13]=T[14]=T[15]=0,c)if(g)for(i=j;z>O&&64>i;++O)h[i++]=a[O];else for(i=j;z>O&&64>i;++O)T[i>>2]|=a[O]<<S[3&i++];else if(g)for(i=j;z>O&&64>i;++O)b=a.charCodeAt(O),128>b?h[i++]=b:2048>b?(h[i++]=192|b>>6,h[i++]=128|63&b):55296>b||b>=57344?(h[i++]=224|b>>12,h[i++]=128|b>>6&63,h[i++]=128|63&b):(b=65536+((1023&b)<<10|1023&a.charCodeAt(++O)),h[i++]=240|b>>18,h[i++]=128|b>>12&63,h[i++]=128|b>>6&63,h[i++]=128|63&b);else for(i=j;z>O&&64>i;++O)b=a.charCodeAt(O),128>b?T[i>>2]|=b<<S[3&i++]:2048>b?(T[i>>2]|=(192|b>>6)<<S[3&i++],T[i>>2]|=(128|63&b)<<S[3&i++]):55296>b||b>=57344?(T[i>>2]|=(224|b>>12)<<S[3&i++],T[i>>2]|=(128|b>>6&63)<<S[3&i++],T[i>>2]|=(128|63&b)<<S[3&i++]):(b=65536+((1023&b)<<10|1023&a.charCodeAt(++O)),T[i>>2]|=(240|b>>18)<<S[3&i++],T[i>>2]|=(128|b>>12&63)<<S[3&i++],T[i>>2]|=(128|b>>6&63)<<S[3&i++],T[i>>2]|=(128|63&b)<<S[3&i++]);k+=i-j,j=i-64,O==z&&(T[i>>2]|=v[3&i],++O),O>z&&56>i&&(T[14]=k<<3,H=!0),F?(D=T[0]-680876937,D=(D<<7|D>>>25)-271733879<<0,d=(-1732584194^2004318071&D)+T[1]-117830708,d=(d<<12|d>>>20)+D<<0,J=(-271733879^d&(-271733879^D))+T[2]-1126478375,J=(J<<17|J>>>15)+d<<0,E=(D^J&(d^D))+T[3]-1316259209,E=(E<<22|E>>>10)+J<<0):(D=_,E=w,J=B,d=C,D+=(d^E&(J^d))+T[0]-680876936,D=(D<<7|D>>>25)+E<<0,d+=(J^D&(E^J))+T[1]-389564586,d=(d<<12|d>>>20)+D<<0,J+=(E^d&(D^E))+T[2]+606105819,J=(J<<17|J>>>15)+d<<0,E+=(D^J&(d^D))+T[3]-1044525330,E=(E<<22|E>>>10)+J<<0),D+=(d^E&(J^d))+T[4]-176418897,D=(D<<7|D>>>25)+E<<0,d+=(J^D&(E^J))+T[5]+1200080426,d=(d<<12|d>>>20)+D<<0,J+=(E^d&(D^E))+T[6]-1473231341,J=(J<<17|J>>>15)+d<<0,E+=(D^J&(d^D))+T[7]-45705983,E=(E<<22|E>>>10)+J<<0,D+=(d^E&(J^d))+T[8]+1770035416,D=(D<<7|D>>>25)+E<<0,d+=(J^D&(E^J))+T[9]-1958414417,d=(d<<12|d>>>20)+D<<0,J+=(E^d&(D^E))+T[10]-42063,J=(J<<17|J>>>15)+d<<0,E+=(D^J&(d^D))+T[11]-1990404162,E=(E<<22|E>>>10)+J<<0,D+=(d^E&(J^d))+T[12]+1804603682,D=(D<<7|D>>>25)+E<<0,d+=(J^D&(E^J))+T[13]-40341101,d=(d<<12|d>>>20)+D<<0,J+=(E^d&(D^E))+T[14]-1502002290,J=(J<<17|J>>>15)+d<<0,E+=(D^J&(d^D))+T[15]+1236535329,E=(E<<22|E>>>10)+J<<0,D+=(J^d&(E^J))+T[1]-165796510,D=(D<<5|D>>>27)+E<<0,d+=(E^J&(D^E))+T[6]-1069501632,d=(d<<9|d>>>23)+D<<0,J+=(D^E&(d^D))+T[11]+643717713,J=(J<<14|J>>>18)+d<<0,E+=(d^D&(J^d))+T[0]-373897302,E=(E<<20|E>>>12)+J<<0,D+=(J^d&(E^J))+T[5]-701558691,D=(D<<5|D>>>27)+E<<0,d+=(E^J&(D^E))+T[10]+38016083,d=(d<<9|d>>>23)+D<<0,J+=(D^E&(d^D))+T[15]-660478335,J=(J<<14|J>>>18)+d<<0,E+=(d^D&(J^d))+T[4]-405537848,E=(E<<20|E>>>12)+J<<0,D+=(J^d&(E^J))+T[9]+568446438,D=(D<<5|D>>>27)+E<<0,d+=(E^J&(D^E))+T[14]-1019803690,d=(d<<9|d>>>23)+D<<0,J+=(D^E&(d^D))+T[3]-187363961,J=(J<<14|J>>>18)+d<<0,E+=(d^D&(J^d))+T[8]+1163531501,E=(E<<20|E>>>12)+J<<0,D+=(J^d&(E^J))+T[13]-1444681467,D=(D<<5|D>>>27)+E<<0,d+=(E^J&(D^E))+T[2]-51403784,d=(d<<9|d>>>23)+D<<0,J+=(D^E&(d^D))+T[7]+1735328473,J=(J<<14|J>>>18)+d<<0,E+=(d^D&(J^d))+T[12]-1926607734,E=(E<<20|E>>>12)+J<<0,M=E^J,D+=(M^d)+T[5]-378558,D=(D<<4|D>>>28)+E<<0,d+=(M^D)+T[8]-2022574463,d=(d<<11|d>>>21)+D<<0,U=d^D,J+=(U^E)+T[11]+1839030562,J=(J<<16|J>>>16)+d<<0,E+=(U^J)+T[14]-35309556,E=(E<<23|E>>>9)+J<<0,M=E^J,D+=(M^d)+T[1]-1530992060,D=(D<<4|D>>>28)+E<<0,d+=(M^D)+T[4]+1272893353,d=(d<<11|d>>>21)+D<<0,U=d^D,J+=(U^E)+T[7]-155497632,J=(J<<16|J>>>16)+d<<0,E+=(U^J)+T[10]-1094730640,E=(E<<23|E>>>9)+J<<0,M=E^J,D+=(M^d)+T[13]+681279174,D=(D<<4|D>>>28)+E<<0,d+=(M^D)+T[0]-358537222,d=(d<<11|d>>>21)+D<<0,U=d^D,J+=(U^E)+T[3]-722521979,J=(J<<16|J>>>16)+d<<0,E+=(U^J)+T[6]+76029189,E=(E<<23|E>>>9)+J<<0,M=E^J,D+=(M^d)+T[9]-640364487,D=(D<<4|D>>>28)+E<<0,d+=(M^D)+T[12]-421815835,d=(d<<11|d>>>21)+D<<0,U=d^D,J+=(U^E)+T[15]+530742520,J=(J<<16|J>>>16)+d<<0,E+=(U^J)+T[2]-995338651,E=(E<<23|E>>>9)+J<<0,D+=(J^(E|~d))+T[0]-198630844,D=(D<<6|D>>>26)+E<<0,d+=(E^(D|~J))+T[7]+1126891415,d=(d<<10|d>>>22)+D<<0,J+=(D^(d|~E))+T[14]-1416354905,J=(J<<15|J>>>17)+d<<0,E+=(d^(J|~D))+T[5]-57434055,E=(E<<21|E>>>11)+J<<0,D+=(J^(E|~d))+T[12]+1700485571,D=(D<<6|D>>>26)+E<<0,d+=(E^(D|~J))+T[3]-1894986606,d=(d<<10|d>>>22)+D<<0,J+=(D^(d|~E))+T[10]-1051523,J=(J<<15|J>>>17)+d<<0,E+=(d^(J|~D))+T[1]-2054922799,E=(E<<21|E>>>11)+J<<0,D+=(J^(E|~d))+T[8]+1873313359,D=(D<<6|D>>>26)+E<<0,d+=(E^(D|~J))+T[15]-30611744,d=(d<<10|d>>>22)+D<<0,J+=(D^(d|~E))+T[6]-1560198380,J=(J<<15|J>>>17)+d<<0,E+=(d^(J|~D))+T[13]+1309151649,E=(E<<21|E>>>11)+J<<0,D+=(J^(E|~d))+T[4]-145523070,D=(D<<6|D>>>26)+E<<0,d+=(E^(D|~J))+T[11]-1120210379,d=(d<<10|d>>>22)+D<<0,J+=(D^(d|~E))+T[2]+718787259,J=(J<<15|J>>>17)+d<<0,E+=(d^(J|~D))+T[9]-343485551,E=(E<<21|E>>>11)+J<<0,F?(_=D+1732584193<<0,w=E-271733879<<0,B=J-1732584194<<0,C=d+271733878<<0,F=!1):(_=_+D<<0,w=w+E<<0,B=B+J<<0,C=C+d<<0)}while(!H);if(A){var G=y[_>>4&15]+y[15&_];return G+=y[_>>12&15]+y[_>>8&15],G+=y[_>>20&15]+y[_>>16&15],G+=y[_>>28&15]+y[_>>24&15],G+=y[w>>4&15]+y[15&w],G+=y[w>>12&15]+y[w>>8&15],G+=y[w>>20&15]+y[w>>16&15],G+=y[w>>28&15]+y[w>>24&15],G+=y[B>>4&15]+y[15&B],G+=y[B>>12&15]+y[B>>8&15],G+=y[B>>20&15]+y[B>>16&15],G+=y[B>>28&15]+y[B>>24&15],G+=y[C>>4&15]+y[15&C],G+=y[C>>12&15]+y[C>>8&15],G+=y[C>>20&15]+y[C>>16&15],G+=y[C>>28&15]+y[C>>24&15]}return y[_>>4&15]+y[15&_]+y[_>>12&15]+y[_>>8&15]+y[_>>20&15]+y[_>>16&15]+y[_>>28&15]+y[_>>24&15]+y[w>>4&15]+y[15&w]+y[w>>12&15]+y[w>>8&15]+y[w>>20&15]+y[w>>16&15]+y[w>>28&15]+y[w>>24&15]+y[B>>4&15]+y[15&B]+y[B>>12&15]+y[B>>8&15]+y[B>>20&15]+y[B>>16&15]+y[B>>28&15]+y[B>>24&15]+y[C>>4&15]+y[15&C]+y[C>>12&15]+y[C>>8&15]+y[C>>20&15]+y[C>>16&15]+y[C>>28&15]+y[C>>24&15]};if(!a.JS_MD5_TEST&&c){var B=require("crypto"),C=require("buffer").Buffer;module.exports=function(a){return"string"==typeof a?a.length<=80?w(a):a.length<=183&&!/[^\x00-\x7F]/.test(a)?w(a):B.createHash("md5").update(a,"utf8").digest("hex"):(a.constructor==ArrayBuffer&&(a=new Uint8Array(a)),a.length<=370?w(a):B.createHash("md5").update(new C(a)).digest("hex"))}}else a&&(a.md5=w)}(this);
/*!dep/jquery-placeholder/jquery.placeholder.js*/
;!function(a){"function"==typeof define&&define.amd?define("dep/jquery-placeholder/jquery.placeholder",["jquery"],a):a("object"==typeof module&&module.exports?require("jquery"):jQuery)}(function(a){function c(c){var h={},v=/^jQuery\d+$/;return a.each(c.attributes,function(i,a){a.specified&&!v.test(a.name)&&(h[a.name]=a.value)}),h}function h(c,h){var v=this,b=a(this);if(v.value===b.attr(w?"placeholder-x":"placeholder")&&b.hasClass(H.customClass))if(v.value="",b.removeClass(H.customClass),b.data("placeholder-password")){if(b=b.hide().nextAll('input[type="password"]:first').show().attr("id",b.removeAttr("id").data("placeholder-id")),c===!0)return b[0].value=h,h;b.focus()}else v==y()&&v.select()}function v(v){var y,b=this,C=a(this),j=b.id;if(!v||"blur"!==v.type||!C.hasClass(H.customClass))if(""===b.value){if("password"===b.type){if(!C.data("placeholder-textinput")){try{y=C.clone().prop({type:"text"})}catch(e){y=a("<input>").attr(a.extend(c(this),{type:"text"}))}y.removeAttr("name").data({"placeholder-enabled":!0,"placeholder-password":C,"placeholder-id":j}).bind("focus.placeholder",h),C.data({"placeholder-textinput":y,"placeholder-id":j}).before(y)}b.value="",C=C.removeAttr("id").hide().prevAll('input[type="text"]:first').attr("id",C.data("placeholder-id")).show()}else{var A=C.data("placeholder-password");A&&(A[0].value="",C.attr("id",C.data("placeholder-id")).show().nextAll('input[type="password"]:last').hide().removeAttr("id"))}C.addClass(H.customClass),C[0].value=C.attr(w?"placeholder-x":"placeholder")}else C.removeClass(H.customClass)}function y(){try{return document.activeElement}catch(a){}}var b,C,w=!1,j="[object OperaMini]"===Object.prototype.toString.call(window.operamini),A="placeholder"in document.createElement("input")&&!j&&!w,g="placeholder"in document.createElement("textarea")&&!j&&!w,E=a.valHooks,k=a.propHooks,H={};A&&g?(C=a.fn.placeholder=function(){return this},C.input=!0,C.textarea=!0):(C=a.fn.placeholder=function(c){var y={customClass:"placeholder"};return H=a.extend({},y,c),this.filter((A?"textarea":":input")+"["+(w?"placeholder-x":"placeholder")+"]").not("."+H.customClass).not(":radio, :checkbox, [type=hidden]").bind({"focus.placeholder":h,"blur.placeholder":v}).data("placeholder-enabled",!0).trigger("blur.placeholder")},C.input=A,C.textarea=g,b={get:function(c){var h=a(c),v=h.data("placeholder-password");return v?v[0].value:h.data("placeholder-enabled")&&h.hasClass(H.customClass)?"":c.value},set:function(c,b){var C,w,j=a(c);return""!==b&&(C=j.data("placeholder-textinput"),w=j.data("placeholder-password"),C?(h.call(C[0],!0,b)||(c.value=b),C[0].value=b):w&&(h.call(c,!0,b)||(w[0].value=b),c.value=b)),j.data("placeholder-enabled")?(""===b?(c.value=b,c!=y()&&v.call(c)):(j.hasClass(H.customClass)&&h.call(c),c.value=b),j):(c.value=b,j)}},A||(E.input=b,k.value=b),g||(E.textarea=b,k.value=b),a(function(){a(document).delegate("form","submit.placeholder",function(){var c=a("."+H.customClass,this).each(function(){h.call(this,!0,"")});setTimeout(function(){c.each(v)},10)})}),a(window).bind("beforeunload.placeholder",function(){var c=!0;try{"javascript:void(0)"===document.activeElement.toString()&&(c=!1)}catch(h){}c&&a("."+H.customClass).each(function(){this.value=""})}))});
/*!pc/page/findpassword/main.js*/
;function findByMail(a){"step1"==a?(content2.first().hide(),content2.eq(1).show(),nav2.eq(1).addClass("active")):"step2"==a?(content2.eq(1).hide(),content2.eq(2).show(),nav2.eq(2).addClass("active")):alert("鎻愪氦鏁版嵁")}jQuery.browser={},function(){jQuery.browser.msie=!1,jQuery.browser.version=0,navigator.userAgent.match(/MSIE ([0-9]+)\./)&&(jQuery.browser.msie=!0,jQuery.browser.version=RegExp.$1)}(),define("pc/page/findpassword/main",["require","exports","module","dep/jquery-placeholder/jquery.placeholder"],function(require){function a(e){var a=e,F=a.parent.CollectData();F.isValidate&&$.ajax({url:a.control._option.url,data:F,dataType:"json",cache:!1}).done(function(F){var w={1:{message:"鎴愬姛",linkFor:"verifyCode",level:"info"},201:{message:"璇疯緭鍏ユ墜鏈哄彿鐮�",linkFor:"phone",level:"error"},202:{message:"璇疯緭鍏�11浣嶅ぇ闄嗗湴鍖烘墜鏈哄彿鐮�",linkFor:"phone",level:"error"},203:{message:"璇疯緭鍏�11浣嶅ぇ闄嗗湴鍖烘墜鏈哄彿鐮�",linkFor:"phone",level:"error"},204:{message:"楠岃瘉鐮佷笉姝ｇ‘",linkFor:"verifyCode",level:"error"},205:{message:"楠岃瘉鐮佷笉姝ｇ‘",linkFor:"verifyCode",level:"error"},206:{message:"璇ュ笎鍙蜂笉瀛樺湪",linkFor:"phone",level:"error"},207:{message:"绯荤粺閿欒",linkFor:"verifyCode",level:"error"},402:{message:"楠岃瘉鐮佷笉姝ｇ‘",linkFor:"verifyCode",level:"error"},10010:{message:"楠岃瘉鐮佷笉姝ｇ‘",linkFor:"request_form_verifyCode",level:"error"},10011:{message:"绯荤粺閿欒",linkFor:"verifyCode",level:"error"},10012:{message:"绯荤粺閿欒",linkFor:"verifyCode",level:"error"}};if(w[F.state]&&1!=F.state&&a.parent.field[w[F.state].linkFor].showMessage({message:w[F.state].message}),1==F.state){c=F.content.data.code;var v=$("#findPwd1 .form_body"),g=$("#findPwd1 .form_head li");v.first().hide(),v.eq(1).show(),g.eq(1).addClass("active")}else a.parent.field.request_form_verifyCode.getIsVisible()&&a.parent.field.request_form_verifyCode.getVerifyCode()})}function F(e){var a=e,F=a.parent.CollectData();F.code=c;var w="veenike";F.isValidate&&(F.newpwd=md5(F.newpwd),F.newpwd=md5(w+F.newpwd+w),F.newrepwd=md5(F.newrepwd),F.newrepwd=md5(w+F.newrepwd+w),$.ajax({url:a.control._option.url,data:F,dataType:"json",cache:!1,type:"post"}).done(function(F){var w={1:{message:"鎴愬姛",linkFor:"newrepwd",level:"info"},201:{message:"璇疯緭鍏ュ瘑鐮�",linkFor:"newpwd",level:"error"},202:{message:"涓ゆ杈撳叆鐨勫瘑鐮佷笉涓€鑷�,璇烽噸鏂拌緭鍏�",linkFor:"newrepwd",level:"error"},203:{message:"绯荤粺閿欒",linkFor:"newrepwd",level:"error"},204:{message:"绯荤粺閿欒",linkFor:"newrepwd",level:"error"}};if(w[F.state]&&1!=F.state&&a.parent.field[w[F.state].linkFor].showMessage({message:w[F.state].message}),1==F.state){var v="/grantServiceTicket/grant.html";window.location.href=v}}))}function w(e){var a=e,F=a.parent.CollectData();F.code=c,F.isValidate&&$.ajax({url:a.control._option.url,data:F,dataType:"json",cache:!1}).done(function(w){var v={1:{message:"鎴愬姛",linkFor:"email",level:"info"},210:{message:"璇疯緭鍏ユ湁鏁堢殑閭鍦板潃",linkFor:"email",level:"error"},220:{message:"璇疯緭鍏ユ湁鏁堢殑閭鍦板潃",linkFor:"email",level:"error"},240:{message:"璇疯緭鍏ユ湁鏁堢殑閭鍦板潃",linkFor:"email",level:"error"},401:{message:"璇ュ笎鍙蜂笉瀛樺湪",linkFor:"email",level:"error"},402:{message:"绯荤粺閿欒",linkFor:"email",level:"error"},10010:{message:"楠岃瘉鐮佷笉姝ｇ‘",linkFor:"request_form_verifyCode",level:"error"},10011:{message:"绯荤粺閿欒",linkFor:"email",level:"error"},10012:{message:"绯荤粺閿欒",linkFor:"email",level:"error"}};if(v[w.state]&&1!=w.state&&a.parent.field[v[w.state].linkFor].showMessage({message:v[w.state].message}),10010!=w.state||a.parent.field.request_form_verifyCode.getIsVisible()||(a.parent.field.request_form_verifyCode.getVerifyCode(),a.parent.field.request_form_verifyCode.setVisible(!0)),1==w.state){var c=$("#findPwd2 .form_body"),g=$("#findPwd2 .form_head li");c.first().hide(),c.eq(1).show(),g.eq(1).addClass("active"),$(".des_mail").text(F.email),w.content&&w.content.data&&w.content.data.quick&&(C=w.content.data.url,$("#gotoVerify").show())}else a.parent.field.request_form_verifyCode.getIsVisible()&&a.parent.field.request_form_verifyCode.getVerifyCode()})}function v(e){var a=e,F=a.parent.CollectData();F.code=c;var w="veenike";F.isValidate&&(F.newpwd=md5(F.newpwd),F.newpwd=md5(w+F.newpwd+w),F.newrepwd=md5(F.newrepwd),F.newrepwd=md5(w+F.newrepwd+w),F.code=window.location.href.substr(window.location.href.indexOf("code")+5),$.ajax({url:a.control._option.url,data:F,dataType:"json",cache:!1,type:"post"}).done(function(F){var w={1:{message:"鎴愬姛",linkFor:"newrepwd",level:"info"},201:{message:"璇ュ笎鍙蜂笉瀛樺湪",linkFor:"newrepwd",level:"error"},202:{message:"the token is Experied or incorrect",linkFor:"newrepwd",level:"error"},203:{message:"涓ゆ杈撳叆鐨勫瘑鐮佷笉涓€鑷�,璇烽噸鏂拌緭鍏�",linkFor:"newrepwd",level:"error"},500:{message:"绯荤粺閿欒",linkFor:"newrepwd",level:"error"}};if(w[F.state]&&1!=F.state&&a.parent.field[w[F.state].linkFor].showMessage({message:w[F.state].message}),1==F.state){var v="/grantServiceTicket/grant.html";window.location.href=v}}))}require("dep/jquery-placeholder/jquery.placeholder"),$("input").placeholder();var c=null,g=new lg.Views.BaseView({name:"phoneFindStep1",fields:[{name:"phone",validRules:[{mode:"require",data:"",message:"璇疯緭鍏ユ墜鏈哄彿鐮�",trigger:"blur"},{mode:"pattern",isUse:!0,status:!1,data:{phone:/^(0|86|17951)?((13[0-9]|15[012356789]|17[0135678]|18[0-9]|14[57])[0-9]{8})$/},message:"璇疯緭鍏�11浣嶅ぇ闄嗗湴鍖烘墜鏈哄彿鐮�"}],controlType:"Phone"},{name:"verifyCode",linkFor:"phone",verifyCode:"request_form_verifyCode",totalTips:"璇ユ墜鏈鸿幏鍙栭獙璇佺爜宸茶揪涓婇檺锛岃鏄庡ぉ鍐嶈瘯",validRules:[{mode:"require",data:"",message:"璇疯緭鍏�6浣嶆暟瀛楅獙璇佺爜"},{mode:"pattern",isUse:!0,status:!1,data:"/^[0-9]{6,6}$/",message:"璇疯緭鍏�6浣嶆暟瀛楅獙璇佺爜"}],url:"/accountPwd/sendRestpasswordVerifyCode.json",totalCount:5,controlType:"PhoneVerificationCode",click:function(e){var a=e;(-1==a.control.totalTimeTemp||a.control.totalTimeTemp==a.control.getTopTime())&&$.ajax({url:a.control._option.url,data:{phone:a.linkFor.getValue(),request_form_verifyCode:lg.Cache.Views[a.control._option.parentName].field.request_form_verifyCode.getValue()},dataType:"json",cache:!1}).done(function(F){var w={1:{message:"楠岃瘉鐮佸凡鍙戦€侊紝璇锋煡鏀剁煭淇�",linkFor:"verifyCode",level:"info"},201:{message:"璇疯緭鍏ユ墜鏈哄彿鐮�",linkFor:"phone",level:"error"},202:{message:"璇疯緭鍏�11浣嶅ぇ闄嗗湴鍖烘墜鏈哄彿鐮�",linkFor:"phone",level:"error"},203:{message:"璇疯緭鍏�11浣嶅ぇ闄嗗湴鍖烘墜鏈哄彿鐮�",linkFor:"phone",level:"error"},204:{message:"绯荤粺閿欒",linkFor:"verifyCode",level:"error"},205:{message:"璇疯緭鍏�11浣嶅ぇ闄嗗湴鍖烘墜鏈哄彿鐮�",linkFor:"phone",level:"error"},206:{message:"绯荤粺閿欒",linkFor:"phone",level:"error"},207:{message:"璇ユ墜鏈鸿幏鍙栭獙璇佺爜宸茶揪涓婇檺锛岃鏄庡ぉ鍐嶈瘯",linkFor:"phone",level:"error"},208:{message:"楠岃瘉鐮佸彂閫佸お杩囬绻侊紝璇风◢鍚庡啀璇�",linkFor:"verifyCode",level:"error"},209:{message:"璇ュ笎鍙蜂笉瀛樺湪",linkFor:"phone",level:"error"},10010:{message:"楠岃瘉鐮佷笉姝ｇ‘",linkFor:"request_form_verifyCode",level:"error"},10011:{message:"绯荤粺閿欒",linkFor:"request_form_verifyCode",level:"error"},10012:{message:"绯荤粺閿欒",linkFor:"verifyCode",level:"error"}};w[F.state]&&a.parent.field[w[F.state].linkFor].showMessage({message:w[F.state].message}),10010!=F.state||a.parent.field.request_form_verifyCode.getIsVisible()||(a.parent.field.request_form_verifyCode.getVerifyCode(),a.parent.field.request_form_verifyCode.setVisible(!0)),"info"==w[F.state].level&&1==F.state?e.control.starttime(e.control):(e.control.init(),a.parent.field.request_form_verifyCode.getIsVisible()&&a.parent.field.request_form_verifyCode.getVerifyCode()),0==F.state&&a.parent.field.request_form_verifyCode.getIsVisible()&&a.parent.field.request_form_verifyCode.getVerifyCode(),e.control.setDisable(!1)})}},{name:"request_form_verifyCode",isVisible:!1,validRules:[{mode:"require",data:"",message:"璇疯緭鍏ラ獙璇佺爜"},{mode:"pattern",data:"/^[a-zA-Z0-9涓€-榫{4,4}$/",message:"璇疯緭鍏ユ纭殑楠岃瘉鐮�"}],from:"register",url:"https://passport.lagou.com/vcode/create",controlType:"VerifyCode"},{name:"submit",validRules:[],controlType:"Button",url:"/accountPwd/resetPhone.json",click:a}]}),y=(new lg.Views.BaseView({name:"phoneFindStep2",fields:[{name:"newpwd",validRules:[{mode:"require",data:"",message:"璇疯緭鍏ユ柊瀵嗙爜 "},{mode:"pattern",data:"/^[\\S\\s]{6,16}$/",message:"璇疯緭鍏�6-16浣嶆柊瀵嗙爜锛屽瓧姣嶅尯鍒嗗ぇ灏忓啓"}],controlType:"Password"},{name:"newrepwd",validRules:[{mode:"require",data:"",message:"璇峰啀娆¤緭鍏ユ柊瀵嗙爜",trigger:"blur"},{mode:"repeat-password",data:"",message:"涓ゆ杈撳叆鐨勫瘑鐮佷笉涓€鑷�,璇烽噸鏂拌緭鍏�",trigger:"blur"},{mode:"pattern",data:"/^[\\S\\s]{6,16}$/",message:"璇疯緭鍏�6-16浣嶆柊瀵嗙爜锛屽瓧姣嶅尯鍒嗗ぇ灏忓啓",trigger:"blur"}],linkFor:"newpwd",controlType:"RepeatPassword"},{name:"submit",validRules:[],controlType:"Button",url:"/accountPwd/resetPhonePassword.json",click:F}]}),new lg.Views.BaseView({name:"emailFindStep1",fields:[{name:"email",validRules:[{mode:"require",data:"",message:"璇疯緭鍏ユ敞鍐屾椂浣跨敤鐨勯偖绠卞湴鍧€"},{mode:"pattern",isUse:!0,status:!1,data:{email:/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))$/i},message:"璇疯緭鍏ユ湁鏁堢殑閭鍦板潃"}],controlType:"Email"},{name:"request_form_verifyCode",isVisible:!1,validRules:[{mode:"require",data:"",message:"璇疯緭鍏ラ獙璇佺爜"},{mode:"pattern",data:"/^[a-zA-Z0-9涓€-榫{4,4}$/",message:"璇疯緭鍏ユ纭殑楠岃瘉鐮�"}],from:"register",url:"https://passport.lagou.com/vcode/create",controlType:"VerifyCode"},{name:"submit",validRules:[],controlType:"Button",url:"/accountPwd/resetEmail.json",click:w}]})),C="#";$("#gotoVerify").find("input").on("click",function(){window.location.href=C});var h=(new lg.Views.BaseView({name:"emailFindStep3",fields:[{name:"newpwd",validRules:[{mode:"require",data:"",message:"璇疯緭鍏ユ柊瀵嗙爜"},{mode:"pattern",data:"/^[\\S\\s]{6,16}$/",message:"璇疯緭鍏�6-16浣嶆柊瀵嗙爜锛屽瓧姣嶅尯鍒嗗ぇ灏忓啓"}],controlType:"Password"},{name:"newrepwd",validRules:[{mode:"require",data:"",message:"璇峰啀娆¤緭鍏ユ柊瀵嗙爜",trigger:"blur"},{mode:"repeat-password",data:"",message:"涓ゆ杈撳叆鐨勫瘑鐮佷笉涓€鑷�,璇烽噸鏂拌緭鍏� ",trigger:"blur"},{mode:"pattern",data:"/^[\\S\\s]{6,16}$/",message:"璇疯緭鍏�6-16浣嶆柊瀵嗙爜锛屽瓧姣嶅尯鍒嗗ぇ灏忓啓",trigger:"blur"}],linkFor:"newpwd",controlType:"RepeatPassword"},{name:"submit",validRules:[],controlType:"Button",url:"/accountPwd/resetPassword.json",click:v}]}),$("#isVisiable_request_form_verifyCode").val()),_=$("#is_must_show_verify_code").val();("true"==h||"true"==_)&&(g.field.request_form_verifyCode.getVerifyCode(),g.field.request_form_verifyCode.setVisible(!0)),"true"==h&&y.field.request_form_verifyCode.setVisible(!0),$("#go-mail").on("click",function(){y.setClear(),$.browser.msie&&$.browser.version<10?($("#findPwd1").hide(),$("#findPwd2").show()):($("#findPwd1").removeClass("flipInY").addClass("flipOutY").on("webkitAnimationEnd mozAnimationEnd animationend",function(){$(this).hide().removeClass("flipOutY")}),$("#findPwd2").show().addClass("animation-delay flipInY").on("webkitAnimationEnd mozAnimationEnd animationend",function(){$(this).show().removeClass("animation-delay flipInY")}))}),$("#go-phone").on("click",function(){g.setClear(),$.browser.msie&&$.browser.version<10?($("#findPwd2").hide(),$("#findPwd1").show()):($("#findPwd2").removeClass("flipInY").addClass("flipOutY").on("webkitAnimationEnd mozAnimationEnd animationend",function(){$(this).hide().removeClass("flipOutY")}),$("#findPwd1").show().addClass("animation-delay flipInY").on("webkitAnimationEnd mozAnimationEnd animationend",function(){$(this).show().removeClass("animation-delay flipInY")}))})});var content2=$("#findPwd2 .form_body"),nav2=$("#findPwd2 .form_head li");