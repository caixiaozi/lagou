define("common/components/jquery-ajaxfileupload/ajaxfileupload",["require","exports","module"],function(){jQuery.extend({handleError:function(s,a,c,e){s.error&&s.error.call(s.context||s,a,c,e),s.global&&(s.context?jQuery(s.context):jQuery.event).trigger("ajaxError",[a,s,e])},createUploadIframe:function(a,c){var y="jUploadFrame"+a,j='<iframe id="'+y+'" name="'+y+'" style="position:absolute; top:-9999px; left:-9999px"';return window.ActiveXObject&&("boolean"==typeof c?j+=' src="javascript:false"':"string"==typeof c&&(j+=' src="'+c+'"')),j+=" />",jQuery(j).appendTo(document.body),jQuery("#"+y).get(0)},createUploadForm:function(a,c,y){var j="jUploadForm"+a,Q="jUploadFile"+a,v=jQuery('<form  action="" method="POST" name="'+j+'" id="'+j+'" enctype="multipart/form-data"></form>');if(y)for(var i in y)jQuery('<input type="hidden" name="'+i+'" value="'+y[i]+'" />').appendTo(v);var g=jQuery("#"+c),b=jQuery(g).clone();return jQuery(g).attr("id",Q),jQuery(g).before(b),jQuery(g).appendTo(v),jQuery(v).css("position","absolute"),jQuery(v).css("top","-1200px"),jQuery(v).css("left","-1200px"),jQuery(v).appendTo("body"),v},ajaxFileUpload:function(s){s=jQuery.extend({},jQuery.ajaxSettings,s);var a=(new Date).getTime(),c=jQuery.createUploadForm(a,s.fileElementId,"undefined"==typeof s.data?!1:s.data),y=(jQuery.createUploadIframe(a,s.secureuri),"jUploadFrame"+a),j="jUploadForm"+a;s.global&&!jQuery.active++&&jQuery.event.trigger("ajaxStart");var Q=!1,v={};s.global&&jQuery.event.trigger("ajaxSend",[v,s]);var g=function(a){var j=document.getElementById(y);try{j.contentWindow?(v.responseText=j.contentWindow.document.body?j.contentWindow.document.body.innerHTML:null,v.responseXML=j.contentWindow.document.XMLDocument?j.contentWindow.document.XMLDocument:j.contentWindow.document):j.contentDocument&&(v.responseText=j.contentDocument.document.body?j.contentDocument.document.body.innerHTML:null,v.responseXML=j.contentDocument.document.XMLDocument?j.contentDocument.document.XMLDocument:j.contentDocument.document)}catch(e){jQuery.handleError(s,v,null,e)}if(v||"timeout"==a){Q=!0;var g;try{if(g="timeout"!=a?"success":"error","error"!=g){var b=jQuery.uploadHttpData(v,s.dataType);s.success&&s.success(b,g),s.global&&jQuery.event.trigger("ajaxSuccess",[v,s])}else jQuery.handleError(s,v,g)}catch(e){g="error",jQuery.handleError(s,v,g,e)}s.global&&jQuery.event.trigger("ajaxComplete",[v,s]),s.global&&!--jQuery.active&&jQuery.event.trigger("ajaxStop"),s.complete&&s.complete(v,g),jQuery(j).unbind(),setTimeout(function(){try{jQuery(j).remove(),jQuery(c).remove()}catch(e){jQuery.handleError(s,v,null,e)}},100),v=null}};s.timeout>0&&setTimeout(function(){Q||g("timeout")},s.timeout);try{var c=jQuery("#"+j);jQuery(c).attr("action",s.url),jQuery(c).attr("method","POST"),jQuery(c).attr("target",y),c.encoding?jQuery(c).attr("encoding","multipart/form-data"):jQuery(c).attr("enctype","multipart/form-data"),jQuery(c).submit()}catch(e){jQuery.handleError(s,v,null,e)}return jQuery("#"+y).load(g),{abort:function(){}}},uploadHttpData:function(r,a){var c=!a;return c="xml"==a||c?r.responseXML:r.responseText,"script"==a&&jQuery.globalEval(c),"json"==a&&(c=jQuery.parseJSON(jQuery(c).text())),"html"==a&&jQuery("<div>").html(c).evalScripts(),c}})});