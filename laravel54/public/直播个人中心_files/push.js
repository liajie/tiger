window.pushReponseFunctions.liveNotify=function(b){var a=DUYA_PUSH.mapSubscribeList(b,DUYA_PUSH.userSubscribeList);DUYA_PUSH.refreshPush(a)};PushService.pushOpen=function(a){if(window.currentUid!=""&&typeof window.currentUid!="undefined"&&window.currentUid>0){DUYA_INS.userId=window.currentUid;a.sendMessage('{"event":"login","pushData":{"uid":'+window.currentUid+"}}")}};$(window).on("load",function(){PushService.init()});
