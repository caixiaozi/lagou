(function(){var h={},mt={},c={id:"4233e74dff0ae5bd0a3d81c6ccf756e6",dm:["lagou.com"],js:"tongji.baidu.com/hm-web/js/",etrk:[],icon:'',ctrk:true,align:1,nv:-1,vdur:1800000,age:31536000000,rec:0,rp:[],trust:1,vcard:4899764,qiao:0,lxb:0,conv:0,comm:0,apps:''};var q=!0,r=null,s=!1;mt.j={};mt.j.W=/msie (\d+\.\d+)/i.test(navigator.userAgent);mt.j.cookieEnabled=navigator.cookieEnabled;mt.j.javaEnabled=navigator.javaEnabled();mt.j.language=navigator.language||navigator.browserLanguage||navigator.systemLanguage||navigator.userLanguage||"";mt.j.Ka=(window.screen.width||0)+"x"+(window.screen.height||0);mt.j.colorDepth=window.screen.colorDepth||0;mt.cookie={};
mt.cookie.set=function(a,d,f){var e;f.I&&(e=new Date,e.setTime(e.getTime()+f.I));document.cookie=a+"="+d+(f.domain?"; domain="+f.domain:"")+(f.path?"; path="+f.path:"")+(e?"; expires="+e.toGMTString():"")+(f.$a?"; secure":"")};mt.cookie.get=function(a){return(a=RegExp("(^| )"+a+"=([^;]*)(;|$)").exec(document.cookie))?a[2]:r};mt.r={};mt.r.qa=function(a){return document.getElementById(a)};mt.r.ra=function(a){var d;for(d="A";(a=a.parentNode)&&1==a.nodeType;)if(a.tagName==d)return a;return r};
(mt.r.$=function(){function a(){if(!a.C){a.C=q;for(var b=0,d=e.length;b<d;b++)e[b]()}}function d(){try{document.documentElement.doScroll("left")}catch(e){setTimeout(d,1);return}a()}var f=s,e=[],b;document.addEventListener?b=function(){document.removeEventListener("DOMContentLoaded",b,s);a()}:document.attachEvent&&(b=function(){"complete"===document.readyState&&(document.detachEvent("onreadystatechange",b),a())});(function(){if(!f)if(f=q,"complete"===document.readyState)a.C=q;else if(document.addEventListener)document.addEventListener("DOMContentLoaded",
b,s),window.addEventListener("load",a,s);else if(document.attachEvent){document.attachEvent("onreadystatechange",b);window.attachEvent("onload",a);var e=s;try{e=window.frameElement==r}catch(n){}document.documentElement.doScroll&&e&&d()}})();return function(b){a.C?b():e.push(b)}}()).C=s;mt.event={};mt.event.c=function(a,d,f){a.attachEvent?a.attachEvent("on"+d,function(e){f.call(a,e)}):a.addEventListener&&a.addEventListener(d,f,s)};
mt.event.preventDefault=function(a){a.preventDefault?a.preventDefault():a.returnValue=s};mt.l={};mt.l.parse=function(){return(new Function('return (" + source + ")'))()};
mt.l.stringify=function(){function a(a){/["\\\x00-\x1f]/.test(a)&&(a=a.replace(/["\\\x00-\x1f]/g,function(a){var e=f[a];if(e)return e;e=a.charCodeAt();return"\\u00"+Math.floor(e/16).toString(16)+(e%16).toString(16)}));return'"'+a+'"'}function d(a){return 10>a?"0"+a:a}var f={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};return function(e){switch(typeof e){case "undefined":return"undefined";case "number":return isFinite(e)?String(e):"null";case "string":return a(e);case "boolean":return String(e);
default:if(e===r)return"null";if(e instanceof Array){var b=["["],f=e.length,n,g,k;for(g=0;g<f;g++)switch(k=e[g],typeof k){case "undefined":case "function":case "unknown":break;default:n&&b.push(","),b.push(mt.l.stringify(k)),n=1}b.push("]");return b.join("")}if(e instanceof Date)return'"'+e.getFullYear()+"-"+d(e.getMonth()+1)+"-"+d(e.getDate())+"T"+d(e.getHours())+":"+d(e.getMinutes())+":"+d(e.getSeconds())+'"';n=["{"];g=mt.l.stringify;for(f in e)if(Object.prototype.hasOwnProperty.call(e,f))switch(k=
e[f],typeof k){case "undefined":case "unknown":case "function":break;default:b&&n.push(","),b=1,n.push(g(f)+":"+g(k))}n.push("}");return n.join("")}}}();mt.lang={};mt.lang.e=function(a,d){return"[object "+d+"]"==={}.toString.call(a)};mt.lang.Xa=function(a){return mt.lang.e(a,"Number")&&isFinite(a)};mt.lang.Za=function(a){return mt.lang.e(a,"String")};mt.localStorage={};
mt.localStorage.G=function(){if(!mt.localStorage.g)try{mt.localStorage.g=document.createElement("input"),mt.localStorage.g.type="hidden",mt.localStorage.g.style.display="none",mt.localStorage.g.addBehavior("#default#userData"),document.getElementsByTagName("head")[0].appendChild(mt.localStorage.g)}catch(a){return s}return q};
mt.localStorage.set=function(a,d,f){var e=new Date;e.setTime(e.getTime()+f||31536E6);try{window.localStorage?(d=e.getTime()+"|"+d,window.localStorage.setItem(a,d)):mt.localStorage.G()&&(mt.localStorage.g.expires=e.toUTCString(),mt.localStorage.g.load(document.location.hostname),mt.localStorage.g.setAttribute(a,d),mt.localStorage.g.save(document.location.hostname))}catch(b){}};
mt.localStorage.get=function(a){if(window.localStorage){if(a=window.localStorage.getItem(a)){var d=a.indexOf("|"),f=a.substring(0,d)-0;if(f&&f>(new Date).getTime())return a.substring(d+1)}}else if(mt.localStorage.G())try{return mt.localStorage.g.load(document.location.hostname),mt.localStorage.g.getAttribute(a)}catch(e){}return r};
mt.localStorage.remove=function(a){if(window.localStorage)window.localStorage.removeItem(a);else if(mt.localStorage.G())try{mt.localStorage.g.load(document.location.hostname),mt.localStorage.g.removeAttribute(a),mt.localStorage.g.save(document.location.hostname)}catch(d){}};mt.sessionStorage={};mt.sessionStorage.set=function(a,d){if(window.sessionStorage)try{window.sessionStorage.setItem(a,d)}catch(f){}};
mt.sessionStorage.get=function(a){return window.sessionStorage?window.sessionStorage.getItem(a):r};mt.sessionStorage.remove=function(a){window.sessionStorage&&window.sessionStorage.removeItem(a)};mt.P={};mt.P.log=function(a,d){var f=new Image,e="mini_tangram_log_"+Math.floor(2147483648*Math.random()).toString(36);window[e]=f;f.onload=f.onerror=f.onabort=function(){f.onload=f.onerror=f.onabort=r;f=window[e]=r;d&&d(a)};f.src=a};mt.Q={};
mt.Q.za=function(){var a="";if(navigator.plugins&&navigator.mimeTypes.length){var d=navigator.plugins["Shockwave Flash"];d&&d.description&&(a=d.description.replace(/^.*\s+(\S+)\s+\S+$/,"$1"))}else if(window.ActiveXObject)try{if(d=new ActiveXObject("ShockwaveFlash.ShockwaveFlash"))(a=d.GetVariable("$version"))&&(a=a.replace(/^.*\s+(\d+),(\d+).*$/,"$1.$2"))}catch(f){}return a};
mt.Q.Sa=function(a,d,f,e,b){return'<object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="'+a+'" width="'+f+'" height="'+e+'"><param name="movie" value="'+d+'" /><param name="flashvars" value="'+(b||"")+'" /><param name="allowscriptaccess" value="always" /><embed type="application/x-shockwave-flash" name="'+a+'" width="'+f+'" height="'+e+'" src="'+d+'" flashvars="'+(b||"")+'" allowscriptaccess="always" /></object>'};mt.url={};
mt.url.k=function(a,d){var f=a.match(RegExp("(^|&|\\?|#)("+d+")=([^&#]*)(&|$|#)",""));return f?f[3]:r};mt.url.Va=function(a){return(a=a.match(/^(https?:)\/\//))?a[1]:r};mt.url.va=function(a){return(a=a.match(/^(https?:\/\/)?([^\/\?#]*)/))?a[2].replace(/.*@/,""):r};mt.url.U=function(a){return(a=mt.url.va(a))?a.replace(/:\d+$/,""):a};mt.url.Ua=function(a){return(a=a.match(/^(https?:\/\/)?[^\/]*(.*)/))?a[2].replace(/[\?#].*/,"").replace(/^$/,"/"):r};
h.o={Wa:"http://tongji.baidu.com/hm-web/welcome/ico",N:"hm.baidu.com/hm.gif",ea:"baidu.com",Da:"hmmd",Ea:"hmpl",Ca:"hmkw",Aa:"hmci",Fa:"hmsr",Ba:"hmcu",w:0,m:Math.round(+new Date/1E3),protocol:"https:"===document.location.protocol?"https:":"http:",Ya:0,ka:6E5,la:10,R:1024,ia:1,q:2147483647,ba:"cc cf ci ck cl cm cp cu cw ds ep et fl ja ln lo lt nv rnd si st su v cv lv api tt u".split(" ")};
(function(){var a={p:{},c:function(a,f){this.p[a]=this.p[a]||[];this.p[a].push(f)},A:function(a,f){this.p[a]=this.p[a]||[];for(var e=this.p[a].length,b=0;b<e;b++)this.p[a][b](f)}};return h.s=a})();
(function(){function a(a,e){var b=document.createElement("script");b.charset="utf-8";d.e(e,"Function")&&(b.readyState?b.onreadystatechange=function(){if("loaded"===b.readyState||"complete"===b.readyState)b.onreadystatechange=r,e()}:b.onload=function(){e()});b.src=a;var l=document.getElementsByTagName("script")[0];l.parentNode.insertBefore(b,l)}var d=mt.lang;return h.load=a})();
(function(){function a(){var a="";h.b.a.nv?(a=encodeURIComponent(document.referrer),window.sessionStorage?f.set("Hm_from_"+c.id,a):d.set("Hm_from_"+c.id,a,864E5)):a=(window.sessionStorage?f.get("Hm_from_"+c.id):d.get("Hm_from_"+c.id))||"";return a}var d=mt.localStorage,f=mt.sessionStorage;return h.S=a})();
(function(){var a=mt.r,d=mt.event,f=mt.j,e=h.o,b=[],l={ca:function(){c.ctrk&&(d.c(document,"mouseup",l.ha()),d.c(window,"unload",function(){l.D()}),setInterval(function(){l.D()},e.ka))},ha:function(){return function(a){a=l.sa(a);if(""!==a){var d=(e.protocol+"//"+e.N+"?"+h.b.aa().replace(/ep=[^&]*/,"ep="+encodeURIComponent("["+a+"]"))).length;d+(e.q+"").length>e.R||(d+encodeURIComponent(b.join(",")+(b.length?",":"")).length+(e.q+"").length>e.R&&l.D(),b.push(a),(b.length>=e.la||/t:a/.test(a))&&l.D())}}},
sa:function(b){if(0===e.ia){var d=b.target||b.srcElement,k=d.tagName.toLowerCase();if("embed"==k||"object"==k)return""}f.W?(d=Math.max(document.documentElement.scrollTop,document.body.scrollTop),k=Math.max(document.documentElement.scrollLeft,document.body.scrollLeft),k=b.clientX+k,d=b.clientY+d):(k=b.pageX,d=b.pageY);var m=window.innerWidth||document.documentElement.clientWidth||document.body.offsetWidth;switch(c.align){case 1:k-=m/2;break;case 2:k-=m}k="{x:"+k+",y:"+d+",";d=b.target||b.srcElement;
return k=(b="a"==d.tagName.toLowerCase()?d:a.ra(d))?k+("t:a,u:"+encodeURIComponent(b.href)+"}"):k+"t:b}"},D:function(){0!==b.length&&(h.b.a.et=2,h.b.a.ep="["+b.join(",")+"]",h.b.i(),b=[])}};h.s.c("pv-b",l.ca);return l})();
(function(){var a=mt.r,d=h.o,f=h.load,e=h.S;h.s.c("pv-b",function(){c.rec&&a.$(function(){for(var b=0,l=c.rp.length;b<l;b++){var n=c.rp[b][0],g=c.rp[b][1],k=a.qa("hm_t_"+n);if(g&&!(2==g&&!k||k&&""!==k.innerHTML))k="",k=Math.round(Math.random()*d.q),k=4==g?"http://crs.baidu.com/hl.js?"+["siteId="+c.id,"planId="+n,"rnd="+k].join("&"):"http://crs.baidu.com/t.js?"+["siteId="+c.id,"planId="+n,"from="+e(),"referer="+encodeURIComponent(document.referrer),"title="+encodeURIComponent(document.title),"rnd="+
k].join("&"),f(k)}})})})();(function(){var a=h.o,d=h.load,f=h.S;h.s.c("pv-b",function(){if(c.trust&&c.vcard){var e=a.protocol+"//trust.baidu.com/vcard/v.js?"+["siteid="+c.vcard,"url="+encodeURIComponent(document.location.href),"source="+f(),"rnd="+Math.round(Math.random()*a.q)].join("&");d(e)}})})();
(function(){function a(){return function(){h.b.a.nv=0;h.b.a.st=4;h.b.a.et=3;h.b.a.ep=h.H.xa()+","+h.H.ua();h.b.i()}}function d(){clearTimeout(x);var a;w&&(a="visible"==document[w]);y&&(a=!document[y]);g="undefined"==typeof a?q:a;if((!n||!k)&&g&&m)u=q,p=+new Date;else if(n&&k&&(!g||!m))u=s,t+=+new Date-p;n=g;k=m;x=setTimeout(d,100)}function f(a){var k=document,p="";if(a in k)p=a;else for(var t=["webkit","ms","moz","o"],b=0;b<t.length;b++){var e=t[b]+a.charAt(0).toUpperCase()+a.slice(1);if(e in k){p=
e;break}}return p}function e(a){if(!("focus"==a.type||"blur"==a.type)||!(a.target&&a.target!=window))m="focus"==a.type||"focusin"==a.type?q:s,d()}var b=mt.event,l=h.s,n=q,g=q,k=q,m=q,v=+new Date,p=v,t=0,u=q,w=f("visibilityState"),y=f("hidden"),x;d();(function(){var a=w.replace(/[vV]isibilityState/,"visibilitychange");b.c(document,a,d);b.c(window,"pageshow",d);b.c(window,"pagehide",d);"object"==typeof document.onfocusin?(b.c(document,"focusin",e),b.c(document,"focusout",e)):(b.c(window,"focus",e),
b.c(window,"blur",e))})();h.H={xa:function(){return+new Date-v},ua:function(){return u?+new Date-p+t:t}};l.c("pv-b",function(){b.c(window,"unload",a())});return h.H})();
(function(){var a=mt.lang,d=h.o,f=h.load,e={Ga:function(b){if((void 0===window._dxt||a.e(window._dxt,"Array"))&&"undefined"!==typeof h.b){var e=h.b.J();f([d.protocol,"//datax.baidu.com/x.js?si=",c.id,"&dm=",encodeURIComponent(e)].join(""),b)}},Qa:function(b){if(a.e(b,"String")||a.e(b,"Number"))window._dxt=window._dxt||[],window._dxt.push(["_setUserId",b])}};return h.ma=e})();
(function(){function a(k){for(var b in k)if({}.hasOwnProperty.call(k,b)){var e=k[b];f.e(e,"Object")||f.e(e,"Array")?a(e):k[b]=String(e)}}function d(a){return a.replace?a.replace(/'/g,"'0").replace(/\*/g,"'1").replace(/!/g,"'2"):a}var f=mt.lang,e=mt.l,b=h.o,l=h.s,n=h.ma,g={z:[],F:0,Y:s,init:function(){g.d=0;l.c("pv-b",function(){g.na();g.oa()});l.c("pv-d",g.pa);l.c("stag-b",function(){h.b.a.api=g.d||g.F?g.d+"_"+g.F:""});l.c("stag-d",function(){h.b.a.api=0;g.d=0;g.F=0})},na:function(){var a=window._hmt||
[];if(!a||f.e(a,"Array"))window._hmt={id:c.id,cmd:{},push:function(){for(var a=window._hmt,k=0;k<arguments.length;k++){var p=arguments[k];f.e(p,"Array")&&(a.cmd[a.id].push(p),"_setAccount"===p[0]&&(1<p.length&&/^[0-9a-f]{32}$/.test(p[1]))&&(p=p[1],a.id=p,a.cmd[p]=a.cmd[p]||[]))}}},window._hmt.cmd[c.id]=[],window._hmt.push.apply(window._hmt,a)},oa:function(){var a=window._hmt;if(a&&a.cmd&&a.cmd[c.id])for(var b=a.cmd[c.id],e=/^_track(Event|MobConv|Order|RTEvent)$/,p=0,t=b.length;p<t;p++){var d=b[p];
e.test(d[0])?g.z.push(d):g.M(d)}a.cmd[c.id]={push:g.M}},pa:function(){if(0<g.z.length)for(var a=0,b=g.z.length;a<b;a++)g.M(g.z[a]);g.z=r},M:function(a){var b=a[0];if(g.hasOwnProperty(b)&&f.e(g[b],"Function"))g[b](a)},_setAccount:function(a){1<a.length&&/^[0-9a-f]{32}$/.test(a[1])&&(g.d|=1)},_setAutoPageview:function(a){if(1<a.length&&(a=a[1],s===a||q===a))g.d|=2,h.b.V=a},_trackPageview:function(a){if(1<a.length&&a[1].charAt&&"/"===a[1].charAt(0)){g.d|=4;h.b.a.et=0;h.b.a.ep="";h.b.K?(h.b.a.nv=0,h.b.a.st=
4):h.b.K=q;var e=h.b.a.u,d=h.b.a.su;h.b.a.u=b.protocol+"//"+document.location.host+a[1];g.Y||(h.b.a.su=document.location.href);h.b.i();h.b.a.u=e;h.b.a.su=d}},_trackEvent:function(a){2<a.length&&(g.d|=8,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=4,h.b.a.ep=d(a[1])+"*"+d(a[2])+(a[3]?"*"+d(a[3]):"")+(a[4]?"*"+d(a[4]):""),h.b.i())},_setCustomVar:function(a){if(!(4>a.length)){var b=a[1],e=a[4]||3;if(0<b&&6>b&&0<e&&4>e){g.F++;for(var p=(h.b.a.cv||"*").split("!"),t=p.length;t<b-1;t++)p.push("*");p[b-1]=e+"*"+d(a[2])+
"*"+d(a[3]);h.b.a.cv=p.join("!");a=h.b.a.cv.replace(/[^1](\*[^!]*){2}/g,"*").replace(/((^|!)\*)+$/g,"");""!==a?h.b.setData("Hm_cv_"+c.id,encodeURIComponent(a),c.age):h.b.Ja("Hm_cv_"+c.id)}}},_setReferrerOverride:function(a){1<a.length&&(h.b.a.su=a[1].charAt&&"/"===a[1].charAt(0)?b.protocol+"//"+window.location.host+a[1]:a[1],g.Y=q)},_trackOrder:function(b){b=b[1];f.e(b,"Object")&&(a(b),g.d|=16,h.b.a.nv=0,h.b.a.st=4,h.b.a.et=94,h.b.a.ep=e.stringify(b),h.b.i())},_trackMobConv:function(a){if(a={webim:1,
tel:2,map:3,sms:4,callback:5,share:6}[a[1]])g.d|=32,h.b.a.et=93,h.b.a.ep=a,h.b.i()},_trackRTPageview:function(b){b=b[1];f.e(b,"Object")&&(a(b),b=e.stringify(b),512>=encodeURIComponent(b).length&&(g.d|=64,h.b.a.rt=b))},_trackRTEvent:function(d){d=d[1];if(f.e(d,"Object")){a(d);d=encodeURIComponent(e.stringify(d));var m=function(a){var b=h.b.a.rt;g.d|=128;h.b.a.et=90;h.b.a.rt=a;h.b.i();h.b.a.rt=b},l=d.length;if(900>=l)m.call(this,d);else for(var l=Math.ceil(l/900),p="block|"+Math.round(Math.random()*
b.q).toString(16)+"|"+l+"|",t=[],u=0;u<l;u++)t.push(u),t.push(d.substring(900*u,900*u+900)),m.call(this,p+t.join("|")),t=[]}},_setUserId:function(a){a=a[1];n.Ga();n.Qa(a)}};g.init();h.fa=g;return h.fa})();
(function(){function a(){"undefined"===typeof window["_bdhm_loaded_"+c.id]&&(window["_bdhm_loaded_"+c.id]=q,this.a={},this.V=q,this.K=s,this.init())}var d=mt.url,f=mt.P,e=mt.Q,b=mt.lang,l=mt.cookie,n=mt.j,g=mt.localStorage,k=mt.sessionStorage,m=h.o,v=h.s;a.prototype={L:function(a,b){a="."+a.replace(/:\d+/,"");b="."+b.replace(/:\d+/,"");var e=a.indexOf(b);return-1<e&&e+b.length===a.length},Z:function(a,b){a=a.replace(/^https?:\/\//,"");return 0===a.indexOf(b)},B:function(a){for(var b=0;b<c.dm.length;b++)if(-1<
c.dm[b].indexOf("/")){if(this.Z(a,c.dm[b]))return q}else{var e=d.U(a);if(e&&this.L(e,c.dm[b]))return q}return s},J:function(){for(var a=document.location.hostname,b=0,e=c.dm.length;b<e;b++)if(this.L(a,c.dm[b]))return c.dm[b].replace(/(:\d+)?[\/\?#].*/,"");return a},T:function(){for(var a=0,b=c.dm.length;a<b;a++){var e=c.dm[a];if(-1<e.indexOf("/")&&this.Z(document.location.href,e))return e.replace(/^[^\/]+(\/.*)/,"$1")+"/"}return"/"},ya:function(){if(!document.referrer)return m.m-m.w>c.vdur?1:4;var a=
s;this.B(document.referrer)&&this.B(document.location.href)?a=q:(a=d.U(document.referrer),a=this.L(a||"",document.location.hostname));return a?m.m-m.w>c.vdur?1:4:3},getData:function(a){try{return l.get(a)||k.get(a)||g.get(a)}catch(b){}},setData:function(a,b,e){try{l.set(a,b,{domain:this.J(),path:this.T(),I:e}),e?g.set(a,b,e):k.set(a,b)}catch(d){}},Ja:function(a){try{l.set(a,"",{domain:this.J(),path:this.T(),I:-1}),k.remove(a),g.remove(a)}catch(b){}},Oa:function(){var a,b,e,d,f;m.w=this.getData("Hm_lpvt_"+
c.id)||0;13===m.w.length&&(m.w=Math.round(m.w/1E3));b=this.ya();a=4!==b?1:0;if(e=this.getData("Hm_lvt_"+c.id)){d=e.split(",");for(f=d.length-1;0<=f;f--)13===d[f].length&&(d[f]=""+Math.round(d[f]/1E3));for(;2592E3<m.m-d[0];)d.shift();f=4>d.length?2:3;for(1===a&&d.push(m.m);4<d.length;)d.shift();e=d.join(",");d=d[d.length-1]}else e=m.m,d="",f=1;this.setData("Hm_lvt_"+c.id,e,c.age);this.setData("Hm_lpvt_"+c.id,m.m);e=m.m===this.getData("Hm_lpvt_"+c.id)?"1":"0";if(0===c.nv&&this.B(document.location.href)&&
(""===document.referrer||this.B(document.referrer)))a=0,b=4;this.a.nv=a;this.a.st=b;this.a.cc=e;this.a.lt=d;this.a.lv=f},aa:function(){for(var a=[],b=0,e=m.ba.length;b<e;b++){var d=m.ba[b],f=this.a[d];"undefined"!==typeof f&&""!==f&&a.push(d+"="+encodeURIComponent(f))}b=this.a.et;this.a.rt&&(0===b?a.push("rt="+encodeURIComponent(this.a.rt)):90===b&&a.push("rt="+this.a.rt));return a.join("&")},Pa:function(){this.Oa();this.a.si=c.id;this.a.su=document.referrer;this.a.ds=n.Ka;this.a.cl=n.colorDepth+
"-bit";this.a.ln=n.language;this.a.ja=n.javaEnabled?1:0;this.a.ck=n.cookieEnabled?1:0;this.a.lo="number"===typeof _bdhm_top?1:0;this.a.fl=e.za();this.a.v="1.1.11";this.a.cv=decodeURIComponent(this.getData("Hm_cv_"+c.id)||"");1===this.a.nv&&(this.a.tt=document.title||"");var a=document.location.href;this.a.cm=d.k(a,m.Da)||"";this.a.cp=d.k(a,m.Ea)||"";this.a.cw=d.k(a,m.Ca)||"";this.a.ci=d.k(a,m.Aa)||"";this.a.cf=d.k(a,m.Fa)||"";this.a.cu=d.k(a,m.Ba)||""},init:function(){try{this.Pa(),0===this.a.nv?
this.Ma():this.O(".*"),h.b=this,this.ga(),v.A("pv-b"),this.La()}catch(a){var b=[];b.push("si="+c.id);b.push("n="+encodeURIComponent(a.name));b.push("m="+encodeURIComponent(a.message));b.push("r="+encodeURIComponent(document.referrer));f.log(m.protocol+"//"+m.N+"?"+b.join("&"))}},La:function(){function a(){v.A("pv-d")}this.V?(this.K=q,this.a.et=0,this.a.ep="",this.i(a)):a()},i:function(a){var e=this;e.a.rnd=Math.round(Math.random()*m.q);v.A("stag-b");var d=m.protocol+"//"+m.N+"?"+e.aa();v.A("stag-d");
e.da(d);f.log(d,function(d){e.O(d);b.e(a,"Function")&&a.call(e)})},ga:function(){var a=document.location.hash.substring(1),b=RegExp(c.id),e=-1<document.referrer.indexOf(m.ea),f=d.k(a,"jn"),g=/^heatlink$|^select$/.test(f);a&&(b.test(a)&&e&&g)&&(this.a.rnd=Math.round(Math.random()*m.q),a=document.createElement("script"),a.setAttribute("type","text/javascript"),a.setAttribute("charset","utf-8"),a.setAttribute("src",m.protocol+"//"+c.js+f+".js?"+this.a.rnd),f=document.getElementsByTagName("script")[0],
f.parentNode.insertBefore(a,f))},da:function(a){var b=k.get("Hm_unsent_"+c.id)||"",e=this.a.u?"":"&u="+encodeURIComponent(document.location.href),b=encodeURIComponent(a.replace(/^https?:\/\//,"")+e)+(b?","+b:"");k.set("Hm_unsent_"+c.id,b)},O:function(a){var b=k.get("Hm_unsent_"+c.id)||"";b&&(a=encodeURIComponent(a.replace(/^https?:\/\//,"")),a=RegExp(a.replace(/([\*\(\)])/g,"\\$1")+"(%26u%3D[^,]*)?,?","g"),(b=b.replace(a,"").replace(/,$/,""))?k.set("Hm_unsent_"+c.id,b):k.remove("Hm_unsent_"+c.id))},
Ma:function(){var a=this,b=k.get("Hm_unsent_"+c.id);if(b)for(var b=b.split(","),e=function(b){f.log(m.protocol+"//"+decodeURIComponent(b),function(b){a.O(b)})},d=0,g=b.length;d<g;d++)e(b[d])}};return new a})();
(function(){var a=mt.r,d=mt.event,f=mt.url,e=mt.l;try{if(window.performance&&performance.timing&&"undefined"!==typeof h.b){var b=+new Date,l=function(a){var b=performance.timing,e=b[a+"Start"]?b[a+"Start"]:0;a=b[a+"End"]?b[a+"End"]:0;return{start:e,end:a,value:0<a-e?a-e:0}},n=r;a.$(function(){n=+new Date});var g=function(){var a,d,g;g=l("navigation");d=l("request");g={netAll:d.start-g.start,netDns:l("domainLookup").value,netTcp:l("connect").value,srv:l("response").start-d.start,dom:performance.timing.domInteractive-
performance.timing.fetchStart,loadEvent:l("loadEvent").end-g.start};a=document.referrer;var k=a.match(/^(http[s]?:\/\/)?([^\/]+)(.*)/)||[],u=r;d=r;if("www.baidu.com"===k[2]||"m.baidu.com"===k[2])u=f.k(a,"qid"),d=f.k(a,"click_t");a=u;g.qid=a!=r?a:"";d!=r?(g.bdDom=n?n-d:0,g.bdRun=b-d,g.bdDef=l("navigation").start-d):(g.bdDom=0,g.bdRun=0,g.bdDef=0);h.b.a.et=87;h.b.a.ep=e.stringify(g);h.b.i()};d.c(window,"load",function(){setTimeout(g,500)})}}catch(k){}})();
(function(){var a=h.o,d={init:function(){try{if("http:"===a.protocol){var e=document.createElement("IFRAME");e.setAttribute("src","http://boscdn.bpc.baidu.com/v1/holmes-moplus/mp-cdn.html");e.style.display="none";e.style.width="1";e.style.height="1";e.Ta="0";document.body.appendChild(e)}}catch(b){}}},f=navigator.userAgent.toLowerCase();-1<f.indexOf("android")&&-1===f.indexOf("micromessenger")&&d.init()})();
(function(){var a=mt.lang,d=mt.event,f=mt.l;if(c.comm&&"undefined"!==typeof h.b){var e=function(a){if(a.item){for(var b=a.length,e=Array(b);b--;)e[b]=a[b];return e}return[].slice.call(a)},b=/swt|zixun|call|chat|zoos|business|talk|kefu|openkf|online|\/LR\/Chatpre\.aspx/i,l={click:function(){for(var a=[],d=e(document.getElementsByTagName("a")),d=[].concat.apply(d,e(document.getElementsByTagName("area"))),d=[].concat.apply(d,e(document.getElementsByTagName("img"))),f=0,g=d.length;f<g;f++){var k=d[f],
l=k.getAttribute("onclick"),k=k.getAttribute("href");(b.test(l)||b.test(k))&&a.push(d[f])}return a}},n=function(a,b){for(var d in a)if(a.hasOwnProperty(d)&&b.call(a,d,a[d])===s)return s},g=function(d,e){var g={n:"swt",t:"clk"};g.v=d;if(e){var k=e.getAttribute("href"),l=e.getAttribute("onclick")?""+e.getAttribute("onclick"):r,m=e.getAttribute("id")||"";b.test(k)?(g.sn="mediate",g.snv=k):a.e(l,"String")&&b.test(l)&&(g.sn="wrap",g.snv=l);g.id=m}h.b.a.et=86;h.b.a.ep=f.stringify(g);h.b.i();for(g=+new Date;500>=
+new Date-g;);},k,m="/zoosnet"+(/\/$/.test("/zoosnet")?"":"/"),v=function(b,d){if(k===d)return g(m+b,d),s;if(a.e(d,"Array")||a.e(d,"NodeList"))for(var e=0,f=d.length;e<f;e++)if(k===d[e])return g(m+b+"/"+(e+1),d[e]),s};d.c(document,"click",function(b){b=b||window.event;k=b.target||b.srcElement;var d={};for(n(l,function(b,e){d[b]=a.e(e,"Function")?e():document.getElementById(e)});k&&k!==document&&n(d,v)!==s;)k=k.parentNode})}})();
(function(){var a=mt.event,d=mt.l;if(c.comm&&"undefined"!==typeof h.b){var f=+new Date,e={n:"anti",sb:0,kb:0,clk:0},b=function(){h.b.a.et=86;h.b.a.ep=d.stringify(e);h.b.i()};a.c(document,"click",function(){e.clk++});a.c(document,"keyup",function(){e.kb=1});a.c(window,"scroll",function(){e.sb++});a.c(window,"unload",function(){e.t=+new Date-f;b()});a.c(window,"load",function(){setTimeout(b,5E3)})}})();
(function(){function a(){this.f=r}var d=mt.P,f=mt.j;a.prototype={Ha:function(a){if(this.f)this.h(a,0);else if(this.isSupported()){try{this.f=new ActiveXObject("BDEXIE.BDExExtension.1"),this.X=q}catch(d){this.X=s}this.X?this.h(a,0):this.h(a,-1)}else this.h(a,-1)},Ra:function(){this.f&&delete this.f;this.f=r},Na:function(a,d,e){if(this.f&&"SetLocalCache"in this.f)try{void 0===this.f.SetLocalCache(a,d)&&this.h(e,0)}catch(f){this.h(e,-1)}else this.h(e,-1)},wa:function(a,d){if(this.f&&"GetLocalCache"in
this.f)try{this.h(d,this.f.GetLocalCache(a))}catch(e){this.h(d,"")}else this.h(d,"")},ta:function(a){if(this.f&&"GetCryptStr"in this.f)try{this.h(a,this.f.GetCryptStr("strEncryptID1"))}catch(d){this.h(a,"")}else this.h(a,"")},h:function(a,d){"function"===typeof a&&a(d,this)},isSupported:function(){if(window.ActiveXObject||"ActiveXObject"in window)try{return!!new ActiveXObject("BDEXIE.BDExExtension.1")}catch(a){}return s},Ia:function(){var a=this;this.ta(function(e){void 0!==e&&""!==e&&(d.log("//datax.baidu.com/x.gif?dm="+
encodeURIComponent("datax.baidu.com/webadapter/guid")+"&ac="+encodeURIComponent(e)+"&v=hm-webadapter-0.0.1&rnd="+Math.round(2147483647*Math.random())),a.Na("hmKey",+new Date,function(){a.Ra()}))})}};if(f.W&&/^http(s)?:$/.test(document.location.protocol)){var e=new a;e.Ha(function(a){0===a&&e.wa("hmKey",function(a){a=+a;(isNaN(a)||6048E5<+new Date-a)&&e.Ia()})})}})();})();
