!function(){"use strict";function c(c){return'"'+c.replace(a,function(a){var c=b[a];return"string"==typeof c?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"'}function d(a){return 10>a?"0"+a:a}function e(a,b){var f,g,h,i,j=b[a],k=typeof j;switch(j&&"object"==typeof j&&"function"==typeof j.toJSON&&(j=j.toJSON(a),k=typeof j),k){case"string":return c(j);case"number":return isFinite(j)?String(j):"null";case"boolean":return String(j);case"object":if(!j)return"null";switch(Object.prototype.toString.call(j)){case"[object Date]":return isFinite(j.valueOf())?'"'+j.getUTCFullYear()+"-"+d(j.getUTCMonth()+1)+"-"+d(j.getUTCDate())+"T"+d(j.getUTCHours())+":"+d(j.getUTCMinutes())+":"+d(j.getUTCSeconds())+"Z"+'"':"null";case"[object Array]":for(h=j.length,i=[],f=0;h>f;f++)i.push(e(f,j)||"null");return"["+i.join(",")+"]";default:i=[];for(f in j)Object.prototype.hasOwnProperty.call(j,f)&&(g=e(f,j),g&&i.push(c(f)+":"+g));return"{"+i.join(",")+"}"}}}function f(a){return window.JSON&&window.JSON.stringify?window.JSON.stringify(a):e("",{"":a})}var a=/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,b={"\b":"\\b","	":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"};window.stringifyJSON=f}();