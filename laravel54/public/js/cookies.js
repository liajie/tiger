$(document).ready(function(){"use strict";var e={getCookie:function(e){if(null!=e&&null!=document.cookie&&document.cookie.length>0){var n=document.cookie.indexOf(e+"=");if(-1!=n){n=n+e.length+1;var i=document.cookie.indexOf(";",n);return-1==i&&(i=document.cookie.length),unescape(document.cookie.substring(n,i))}}return""},setCookie:function(e,n,i){var o=new Date;o.setDate(o.getDate()+i),document.cookie=e+"="+escape(n)+(null==i?"":";expires="+o.toGMTString())},checkCookie:function(){e.username=e.getCookie("first_username_flag");var n=e.getCookie("username");null!=e.username&&""!=e.username&&e.username==n+"_first_1"||($("#sign_li").append('<i class="new">new</i>'),e.setCookie("first_username_flag",n+"_first_1",365))},init:function(){this.getCookie(),this.setCookie(),this.checkCookie()}};e.init(),"undefined"==typeof window.main&&(window.main=e)});