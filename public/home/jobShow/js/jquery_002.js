define("common/components/jquery-pager/jquery.pager",["require","exports","module"],function(require,exports,module){!function($){function init(param,obj){function getCurrPage(){if(options.info&&options.info.cookie_currPageKey&&options.info.cookie_currPage){var a=$.cookie(options.info.cookie_currPageKey+"_currPage");if(""!=a&&null!=a)return a}return options.currPage?options.currPage:defaults.currPage}function getPageNOName(){return options.pageNOName?options.pageNOName:defaults.pageNOName}function getForm(){return options.form?options.form:defaults.form}function getPageCount(){return options.pageCount?options.pageCount:0==options.pageCount?1:defaults.pageCount}function getPageSize(){return options.pageSize?options.pageSize:defaults.pageSize}function getCssStyle(){return options.cssStyle?options.cssStyle:defaults.cssStyle}function getAjax(){return options.ajax&&options.ajax.on?options.ajax:defaults.ajax}function getParam(){return options.ajax.param&&options.ajax.param.on?(options.ajax.param.page=currPage,options.ajax.param):(defaults.ajax.param.page=currPage,defaults.ajax.param)}function getFirst(){if(options.info&&0==options.info.first_on)return"";if(options.info&&options.info.first_on&&options.info.first){var a="<a href='"+getLink()+"' title='1'>"+options.info.first+"</a>";return a}var a="<a href='"+getLink()+"' title='1'>"+defaults.info.first+"</a>";return a}function getLast(a){if(options.info&&0==options.info.last_on)return"";if(options.info&&options.info.last_on&&options.info.last){var g="<a href='"+getLink()+"' title='"+a+"'>"+options.info.last+"</a>";return g}var g="<a href='"+getLink()+"' title='"+a+"'>"+defaults.info.last+"</a>";return g}function getPrev(){return options.info&&0==options.info.prev_on?"":options.info&&options.info.prev?options.info.prev:defaults.info.prev}function getNext(){return options.info&&0==options.info.next_on?"":options.info&&options.info.next?options.info.next:defaults.info.next}function getLink(){return options.info&&options.info.link?options.info.link:defaults.info.link}function getMsg(){var a="<input type='text' value='"+currPage+"' >";if(options.info&&0==options.info.msg_on)return!1;if(options.info&&options.info.msg){var g=options.info.msg;return g=g.replace("{currText}",a),g=g.replace("{currPage}",currPage),g=g.replace("{sumPage}",pageCount)}var g=defaults.info.msg;return g=g.replace("{currText}",a),g=g.replace("{currPage}",currPage),g=g.replace("{sumPage}",pageCount)}function getText(){var msg=getMsg();if(!msg)return"";msg=$(msg);var input=msg.children(":text");if(options.info&&options.info.text){var css=options.info.text;for(temp in css){var val=eval("css."+temp);input.css(temp,val)}return msg.html()}var css=defaults.info.text;for(temp in css){var val=eval("css."+temp);input.css(temp,val)}return msg.html()}function getPageCountId(){return options.ajax&&options.ajax.pageCountId?options.ajax.pageCountId:defaults.ajax.pageCountId}function getAjaxStart(){options.ajax&&options.ajax.ajaxStart?options.ajax.ajaxStart():defaults.ajax.ajaxStart}function saveCurrPage(a){if(options.info&&options.info.cookie_currPageKey&&options.info.cookie_currPage){var g=options.info.cookie_currPageKey+"_currPage";$.cookie(g,a)}}function getInt(a){return parseInt(a)}function isCode(a){if(1>a)return alert("输入值不能小于1。"),!1;var g=/^[0-9]{1,8}$/;return g.exec(a)?a>pageCount?(alert("输入值不能大于总页数。"),!1):!0:(alert("请输入正确的数字。"),!1)}function updateView(){currPage=getInt(currPage),pageCount=getInt(pageCount);var a=getLink(),g=lastPage=1;g=currPage-tempPage>0?currPage-tempPage:1,g+pageSize>pageCount?(lastPage=pageCount+1,g=lastPage-pageSize):lastPage=g+pageSize;var c="";for(c+=getFirst(),c+=1==currPage?'<span class="disabled" title="'+getPrev()+'">'+getPrev()+" </span>":"<a href='"+a+"' title='"+(currPage-1)+"'>"+getPrev()+" </a>",0>=g&&(g=1),g;lastPage>g;g++)c+=g==currPage?'<span class="current" title="'+g+'">'+g+"</span>":"<a href='"+a+"' title='"+g+"'>"+g+"</a>";c+=currPage==pageCount?'<span class="disabled" title="'+getNext()+'">'+getNext()+" </span>":"<a href='"+a+"' title='"+(currPage+1)+"'>"+getNext()+" </a>",c+=getLast(pageCount),c+=getText(),obj.html(c),obj.children(":text").keypress(function(a){var g=a.which;if(13==g){var c=$(this).val();if(c>pageCount&&(c=pageCount),getAjax().on)isCode(c)&&(obj.children("a").unbind("click"),obj.children("a").each(function(){$(this).click(function(){return!1})}),createView(c));else{if(!isCode(c))return!1;var P=$("#"+getForm());P.append("<input type='hidden' name='"+getPageNOName()+"' value='"+c+"'>"),P.submit()}}}),obj.children("a").each(function(){var a=this.title;$(this).click(function(){if(obj.children("a").unbind("click"),obj.children("a").each(function(){$(this).click(function(){return!1})}),getAjax().on)createView(a),$(this).focus();else{var g=$("#"+getForm());g.append("<input type='hidden' name='"+getPageNOName()+"' value='"+a+"'>"),g.submit()}return!1})})}function createView(a){currPage=a,saveCurrPage(a);var g=getAjax();if(g.on){getAjaxStart();var c=g.url,P=getParam();$.ajax({url:c,type:"GET",data:P,contentType:"application/x-www-form-urlencoded;utf-8",async:!0,cache:!1,timeout:6e4,error:function(){alert("访问服务器超时，请重试，谢谢！")},success:function(a){loadPageCount({dataType:g.dataType,callback:g.callback,data:a}),updateView()}})}else updateView()}function checkParam(){return 1>currPage?(alert("配置参数错误\n错误代码:-1"),!1):currPage>pageCount?(alert("配置参数错误\n错误代码:-2"),!1):2>pageSize?(alert("配置参数错误\n错误代码:-3"),!1):!0}function loadPageCount(options){if(options.dataType){var data=options.data,resultPageCount=!1,isB=!0,pageCountId=getPageCountId();switch(options.dataType){case"json":data=eval("("+data+")"),resultPageCount=eval("data."+pageCountId);break;case"xml":resultPageCount=$(data).find(pageCountId).text();break;default:isB=!1;var callback=options.callback+"(data)";eval(callback),resultPageCount=$("#"+pageCountId).val()}if(resultPageCount&&(pageCount=resultPageCount),isB){var callback=options.callback+"(data)";eval(callback)}}}if(param&&param instanceof Object){var options,currPage,form,pageCount,pageSize,tempPage,defaults=new Object({currPage:1,pageCount:10,pageSize:5,pageNOName:"pageNo",form:"searchForm",cssStyle:"myself",ajax:{on:!1,pageCountId:"pageCount",param:{on:!1,page:1},ajaxStart:function(){return!1}},info:{first:"首页",last:"尾页",next:"下一页",prev:"上一页",first_on:!0,last_on:!0,next_on:!0,prev_on:!0,msg_on:!0,link:"#",msg:"",text:{width:"22px"}}});options=param,currPage=getCurrPage(),pageCount=getPageCount(),pageSize=getPageSize(),tempPage=getInt(pageSize/2);var cssStyle=getCssStyle();obj.addClass(cssStyle),checkParam()&&(updateView(),createView(currPage))}}$.fn.pager=function(a){return init(a,$(this)),$(this)}}(jQuery)});