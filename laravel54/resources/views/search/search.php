<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="ie6" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 7]>
<html class="ie7" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 8]>
<html class="ie8" lang="zh-cmn-Hans"> <![endif]-->
<!--[if IE 9]>
<html class="ie9" lang="zh-cmn-Hans"> <![endif]-->
<!--[if gt IE 9]><!-->
<html lang="zh-cmn-Hans"><!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>搜索-专找直播-虎牙直播</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Keywords" content="热门游戏直播，高清游戏直播，电竞赛事直播，游戏直播，美食直播，娱乐直播，lol直播，dota2直播，美女直播，虎牙直播"/>
    <meta name="Description"
          content="虎牙直播-中国第一直播网站，提供高清、流畅的视频直播，包括lol直播、dota2直播、cf直播等游戏直播，还提供美食直播、娱乐直播、美女直播等多种直播内容，最全、最精彩的直播内容尽在虎牙直播。"/>

    <link type="text/css" rel="stylesheet" href="css/pages_modules_796de8d.css">
    <link type="text/css" rel="stylesheet" href="css/auto_combine_17c76_a847427.css">
    <script src="js/jquery.js"></script>
    <!--HEAD_END-->
    <script data-fixed="true">
        var APP_URL = "http://www.huya.com/";
        var cacheTime = 1507726800;
    </script>
</head>
<body>
<script data-fixed="true">var w = document.body.clientWidth;
    1480 > w && (document.body.className += " w-1000");</script>
<!-- S 通用头部 -->
<div class="duya-header" id="duya-header">

</div>
<script data-fixed="true">
    $.ajax({
        url: 'index.php?r=index/header',
        success: function (e) {
            $('#duya-header').html(e);
        }
    })
    var UDB_SDK_SWTICH = true;
</script>
<!-- E 通用头部 -->
<div class="mod-search-con">
    <div class="search-bar-wrap">
        <div class="search-bar clearfix">
            <form method="get" id="sId" target="_blank" name="sForm" action="http://www.huya.com/search.php">
                <input type="text" name="hsk" value="" maxlength="100" id="search-bar-input">
                <input type="hidden" value="<?= $name ?>" id="name_hidden">
                <button type="submit" class="btn-search clickstat" eid="click/search/searchbutton"
                        eid_desc="点击/搜索/搜索按钮"><i></i>搜索
                </button>
            </form>
        </div>
    </div>
</div>
<div class="search-result clearfix">

    <div class="search-header">
        <div class="search-nav clearfix" id="js-search-nav">
            <span data-type="all" class="current clickstat" eid="click/search/zhtab" eid_desc="点击/搜索/直播tab点击量">综合</span>
            <span data-type="live" class="clickstat" eid="click/search/livetab" eid_desc="点击/搜索/直播tab点击量">直播</span>
            <span data-type="host" class="clickstat" eid="click/search/anchortab" eid_desc="点击/搜索/主播tab点击量">主播</span>
            <span data-type="video" class="clickstat" eid="click/search/vediotab" eid_desc="点击/搜索/视频tab点击量">视频</span>
            <span data-type="advice" class="clickstat" eid="click/search/zixuntab" eid_desc="点击/搜索/资讯tab点击量">资讯</span>
        </div>
        <div class="find-result">找到，相关内容共-个</div>
    </div>

    <div class="search-main clearfix" id="js-search-main">

    </div>

    <div class="more-loading">
        <i class="icon-loading"></i>
        <em>加载中...</em>
    </div>
</div>
<script type="text/html" id="js-emptyDom">
    <div class="search-box">
        <div class="box-hd clearfix">
            <h3 class="title">推荐直播</h3>
        </div>
        <div class="box-bd">
            <ul class="search-empty-list clearfix searchbox-list">
                <li class="game-live-item" gid="2336">
                    <a href="http://www.huya.com/161748674" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"12837293"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/1710e8907ff9ae34ce9184af8e2d3a28af3a6b84f120?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="星辉-大锤哥的直播" title="星辉-大锤哥的直播">
                        <em class="tag tag-recommend">白金推荐</em>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                    </a>
                    <a href="http://www.huya.com/161748674" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"12837293"}'
                       title="挑战8h青铜—王者，输送iphone8" target="_blank">挑战8h青铜—王者，输送iphone8</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1035/7d/9c4ebef7e55c51562e08ef3424d62f_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="星辉-大锤哥"
                 title="星辉-大锤哥">
            <i class="nick" title="星辉-大锤哥">星辉-大锤哥</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/wzry"
                                              title="王者荣耀">王者荣耀</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">48.7万</i></span>
    </span>
                </li>


                <li class="game-live-item" gid="1964">
                    <a href="http://www.huya.com/chuhe" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1964","ayyuid":"294636272"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/17107c92a112ea96319e8b291e75ac963f516dd2cc20?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="Style丶楚河-90327的直播" title="Style丶楚河-90327的直播">
                        <em class="tag tag-recommend">超级明星</em>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <em class="tag tag-blue">蓝光</em> </a>
                    <a href="http://www.huya.com/chuhe" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1964","ayyuid":"294636272"}'
                       title="最精彩的游戏直播~" target="_blank">最精彩的游戏直播~</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1086/bf/fd6f69d69c0015eaface1f6024869e_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="Style丶楚河-90327"
                 title="Style丶楚河-90327">
            <i class="nick" title="Style丶楚河-90327">Style丶楚河-90327</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/ZJGAME" title="主机游戏">主机游戏</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">47.1万</i></span>
    </span>
                </li>


                <li class="game-live-item" gid="2793">
                    <a href="http://www.huya.com/miss" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2793","ayyuid":"1466346678"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/171029809d0a824af2d1711cc8be6aa090accd0844de?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="Miss大小姐的直播" title="Miss大小姐的直播">
                        <em class="tag tag-recommend">超级明星</em>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <em class="tag tag-blue">蓝光</em> </a>
                    <a href="http://www.huya.com/miss" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2793","ayyuid":"1466346678"}'
                       title="我miss，今天，杀5个，下注" target="_blank">我miss，今天，杀5个，下注</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1083/32/a922f67d41235e26b57daef0b043f5_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="Miss大小姐"
                 title="Miss大小姐">
            <i class="nick" title="Miss大小姐">Miss大小姐</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/2793"
                                              title="绝地求生">绝地求生</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">45.2万</i></span>
    </span>
                </li>


                <li class="game-live-item" gid="2336">
                    <a href="http://www.huya.com/guying" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"1757672727"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/17105c036eb4eb05a480b3048324a735b33cc22a308e?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="厌世小孤影的直播" title="厌世小孤影的直播">
                        <em class="tag tag-recommend">大神推荐</em>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                    </a>
                    <a href="http://www.huya.com/guying" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"1757672727"}'
                       title="空白空白空白" target="_blank">空白空白空白</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1063/27/69fb3230202bffd72a9052f340f1a9_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="厌世小孤影"
                 title="厌世小孤影">
            <i class="nick" title="厌世小孤影">厌世小孤影</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/wzry"
                                              title="王者荣耀">王者荣耀</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">39.7万</i></span>
    </span>
                </li>


                <li class="game-live-item" gid="1">
                    <a href="http://www.huya.com/s7" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1","ayyuid":"1346609715"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/1710ac6a61f08a1e8e0d3b698fe4e3b85e3b1091c36c?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="S7英雄联盟全球总决赛的直播" title="S7英雄联盟全球总决赛的直播">
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <em class="tag tag-blue">蓝光</em> </a>
                    <a href="http://www.huya.com/s7" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1","ayyuid":"1346609715"}'
                       title="S7全球总决赛10月8日重播" target="_blank">S7全球总决赛10月8日重播</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1042/6f/3626ef611e990cbbcefab8e1bbc561_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="S7英雄联盟全球总决赛"
                 title="S7英雄联盟全球总决赛">
            <i class="nick" title="S7英雄联盟全球总决赛">S7英雄联盟全球总决赛</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/lol"
                                              title="英雄联盟">英雄联盟</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">40.2万</i></span>
    </span>
                </li>


                <li class="game-live-item" gid="1">
                    <a href="http://www.huya.com/ximen" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1","ayyuid":"477393888"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/1710998093a80b28883e29f136ffa0c026822de65442?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="正恒丶西门的直播" title="正恒丶西门的直播">
                        <em class="tag tag-recommend">超级明星</em>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                    </a>
                    <a href="http://www.huya.com/ximen" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1","ayyuid":"477393888"}'
                       title="打不死的蒙多五日炎烧大龙！" target="_blank">打不死的蒙多五日炎烧大龙！</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1029/21/77aed1c053f4a4938ffaf9b618aa06_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="正恒丶西门"
                 title="正恒丶西门">
            <i class="nick" title="正恒丶西门">正恒丶西门</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/lol"
                                              title="英雄联盟">英雄联盟</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">39.4万</i></span>
    </span>
                </li>


                <li class="game-live-item" gid="1">
                    <a href="http://www.huya.com/90888dopa" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1","ayyuid":"1028671619"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/17108fe6bf6ff846246a8d07c8b1fdf941b705f47378?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="Dopa的直播" title="Dopa的直播">
                        <em class="tag tag-recommend">超级明星</em>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                        <em class="tag tag-blue">蓝光</em> </a>
                    <a href="http://www.huya.com/90888dopa" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"1","ayyuid":"1028671619"}'
                       title="Dopa 冲第一 （排行5）" target="_blank">Dopa 冲第一 （排行5）</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1044/ba/5c36cf488dca53f40e42f8263e35c8_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="Dopa"
                 title="Dopa">
            <i class="nick" title="Dopa">Dopa</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/lol"
                                              title="英雄联盟">英雄联盟</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">35.5万</i></span>
    </span>
                </li>


                <li class="game-live-item" gid="2336">
                    <a href="http://www.huya.com/1871590298" class="video-info new-clickstat" target="_blank"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"1648744803"}'>
                        <img class="pic"
                             data-original="//screenshot.msstatic.com/yysnapshot/17102d881b982f8e3ae2f37e21bd2e1bef183a94b64a?imageview/4/0/w/338/h/190/blur/1"
                             src="images/338x190.jpg" onerror="this.onerror=null; this.src='images/338x190.jpg';"
                             alt="渝万-童子的直播" title="渝万-童子的直播">
                        <em class="tag tag-recommend">大神推荐</em>
                        <div class="item-mask"></div>
                        <i class="btn-link__hover_i"></i>
                    </a>
                    <a href="http://www.huya.com/1871590298" class="title new-clickstat"
                       report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"1648744803"}'
                       title="第一赵云，目前115连胜！" target="_blank">第一赵云，目前115连胜！</a>
                    <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1085/35/39f2d1ae5b3dbb853dfe2f4ff79ebb_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="渝万-童子"
                 title="渝万-童子">
            <i class="nick" title="渝万-童子">渝万-童子</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/wzry"
                                              title="王者荣耀">王者荣耀</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">28.1万</i></span>
    </span>
                </li>


            </ul>
        </div>
    </div>
</script>
<script src="js/jq_ud_mod_4de7709.js" data-fixed="true"></script>
<script src="js/huyahiidoweb_err_monitor-min.js" id="huyahiido_err_monitor" act="webhuyaerror" pageview="search"
        data-fixed="true"></script>
<script src="js/headerFunction_e5e7632.js" data-fixed="true"></script>
<script src="js/jquery.lazyload_769f44a.js" data-fixed="true"></script>
<script type="text/javascript" charset="utf-8" src="js/auto_combine_88b83_2ac8873.js"></script>
<script>
    require("app/search");
</script>
<!--BODY_END-->
<!-- S 页面公用功能 -->

<!-- S 后台推送消息 -->
<!--[if lte IE 7]>
<script type='text/javascript' src='//www.huya.com/base/js/push/json3.min.js'></script>
<![endif]-->
<!--[if lte IE 9]>
<script type='text/javascript' src='//www.huya.com/base/js/push/jquery.xdomainrequest.min.js'></script>
<![endif]-->
<script data-fixed="true">
    var PUSH_PROXY_URL = "//channelproxy.huya.com/";
    var WEB_PUSH_URL = "webpush.huya.com";
    var PUSH_ENABLE = true;//推送开关
    var WEB_PUSH_TLS_ENABLE = true;//是否使用TLS
    var matchNoticeData = [];//赛事直播间预告数据
</script>
<script type='text/javascript' src='js/push-min.js?t=20170818'></script>
<script type='text/javascript' src='js/push.func-min.js?t=20161207'></script><!-- E 后台推送消息 -->    <!-- E 页面公用功能 -->
<script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport=""
        id="yaScript"></script>
<script data-fixed="true">
    zhReport({
        rso: parseQueryString(location.href)['rso'] || parseQueryString(location.href)['from'] || "",
        rso_desc: parseQueryString(location.href)['rso_desc'] || "",
        eid: "pageview/search",
        eid_desc: "pageview/搜索页"
    });
</script>
<!-- S 通用底部 -->
<div class="huya-footer">
    <div class="huya-footer__hd">
        <dl class="huya-footer_friend">
            <dt>友情链接</dt>
            <dd><a href="http://www.duowan.com/" target="_blank">多玩游戏</a></dd>
            <dd><a href="http://wan.yy.com/" target="_blank">YY游戏</a></dd>
            <dd><a href="http://games.qq.com/" target="_blank">腾讯游戏频道</a></dd>
            <dd><a href="http://www.kuaikanmanhua.com/" target="_blank">快看漫画</a></dd>
            <dd><a href="http://www.ooqiu.com/" target="_blank">全球电竞网</a></dd>
            <dd><a href="http://games.ifeng.com/esports/" target="_blank">凤凰游戏电竞</a></dd>
            <dd><a href="http://www.aipai.com/" target="_blank">爱拍</a></dd>
            <dd><a href="http://www.56.com/game" target="_blank">搜狐56视频</a></dd>
            <dd><a href="http://games.iqiyi.com/" target="_blank">爱奇艺游戏</a></dd>
            <dd><a href="http://video.duowan.com/" target="_blank">多玩视频</a></dd>
            <dd><a href="http://www.hiyd.com/" target="_blank">Hi运动健身</a></dd>
            <dd><a href="http://www.yy.com" target="_blank">视频直播</a></dd>
        </dl>
        <dl class="huya-footer_help">
            <dt>主播帮助</dt>
            <dd><a href="http://www.huya.com/e/zhubo" target="_blank">新人主播指引</a></dd>
            <dd><a href="http://www.huya.com/download/#players_pc" target="_blank">开播工具下载</a></dd>
            <dd><a href="http://help.huya.com/276" target="_blank">开播教程引导</a></dd>
        </dl>
        <div class="huya-footer_prod">
            <h2>虎牙产品下载</h2>
            <div class="huya-app_qrcode">
                <div class="app_qrcode_img"></div>
                <p>扫描下载虎牙APP</p>
            </div>
            <ul class="huya-footer_prod_list">
                <li><i class="huya-footer_iphone"></i><a href="http://www.huya.com/download/#iphone" target="_blank">iPhone版</a>
                </li>
                <li><i class="huya-footer_ipad"></i><a href="http://www.huya.com/download/#ipad"
                                                       target="_blank">iPad版</a></li>
                <li><i class="huya-footer_andriod"></i><a href="http://www.huya.com/download/#android" target="_blank">Andriod版</a>
                </li>
                <li><i class="huya-footer_pad"></i><a href="http://www.huya.com/download/#pad" target="_blank">Andriod
                        Pad</a></li>
                <!-- <li><i class="huya-footer_tv"></i><a href="http://www.huya.com/download/#tv" target="_blank">TV版</a></li> -->
                <li><i class="huya-footer_pc"></i><a href="http://www.huya.com/download/#pc" target="_blank">PC版</a>
                </li>
                <li><i class="huya-footer_wp"></i><a href="http://www.huya.com/download/#wp"
                                                     target="_blank">Win10版/WP版</a></li>
            </ul>
        </div>
        <div class="huya-footer_other">
            <h2>关注我们</h2>
            <div class="huya-pub_number">
                <div class="pub_number_img"></div>
                <p>扫描关注微信公众号</p>
            </div>
            <ul class="footer_other_list">
                <li><i class="huya-footer_sina"></i><a href="http://weibo.com/90dwyy" target="_blank">虎牙官方微博</a></li>
                <li><i class="huya-footer_qieba"></i><a
                            href="http://tieba.baidu.com/f?ie=utf-8&kw=%E8%99%8E%E7%89%99%E7%9B%B4%E6%92%AD&fr=search"
                            target="_blank">贴吧交流</a></li>
                <li><a target="_blank" href="http://blog.huya.com/index.php?m=Announcement&do=show&type=notice&id=67">不良信息投诉与举报</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="huya-footer__bd">
        <div class="huya-footer__nav">
            <p>
                <a target="_blank" href="http://www.huya.com/zt/usc/#about" class="clickstat"
                   eid="click/home/yejiao/guanyu" eid_desc="点击/首页/页脚/关于虎牙">关于虎牙</a>|
                <a target="_blank" href="http://hr.huya.com/" class="clickstat" eid="click/home/yejiao/joinus"
                   eid_desc="点击/首页/页脚/加入我们">加入我们</a>|
                <a target="_blank" href="http://www.huya.com/zt/usc/#contact" class="clickstat"
                   eid="click/home/yejiao/lianxi" eid_desc="点击/首页/页脚/合作联系">合作联系</a>|
                <a target="_blank" href="http://www.huya.com/zt/usc/#sites" class="clickstat"
                   eid="click/home/yejiao/youlian" eid_desc="点击/首页/页脚/友链">友情链接</a>|
                <a target="_blank" href="http://www.huanju.cn/s/contact.html">广告热线：020-82120508</a>|
                <a target="_blank" href="http://gm.duowan.com/user/center/centerOpen.do?product=HUYA&source=YY"
                   class="clickstat" eid="click/home/yejiao/kefu" eid_desc="点击/首页/页脚/客服">在线客服</a>|
                <a target="_blank" href="http://blog.huya.com/regulation/index.html">平台规则</a>|
                <a target="_blank" href="http://www.huanju.cn/1207/m_205349693256.html">隐私权保护政策</a>|
                <a target="_blank" href="http://blog.huya.com/regulation/369689023226.html">版权保护投诉指引</a>
            </p>
            <p>
                <a target="_blank" href="http://a.msstatic.com/huya/main/assets/img/icp.jpg">增值电信业务经营许可证
                    粤B2-20170312</a>
                <a target="_blank" href="http://a.msstatic.com/huya/main/img/huya_wlwh_xkz.png">粤网文[2015]1712-302号</a>
            </p>
            <p>
                <a target="_blank" href="http://www.miitbeian.gov.cn">粤ICP备16120983号-1</a>|
                <span><img src="images/j.gif" alt="">粤公网安备44011302000242号 </span>|
                <a target="_blank" href="http://assets.dwstatic.com/common/docs/4401060100548.jpg">穗公网监备案证第4401060100548号</a>|
                <a target="_blank" href="http://www.gdca.gov.cn/">广东省通信管理局</a>|
                <a target="_blank" href="http://a.msstatic.com/huya/main/img/huya_wl_xkz.png">网络出版服务许可证</a>|
                <a target="_blank" href="http://a.msstatic.com/huya/main/assets/img/tv_license.jpg">节目制作经营许可证</a>
            </p>
        </div>
        <div class="huya-footer__copyright">
            <p>
                <span>广州虎牙信息科技有限公司</span>
                <span>&nbsp;版权所有&nbsp;©&nbsp;2016-2017&nbsp;</span>
                <a target="_blank" href="http://www.huya.com/">huya.com</a>
                <a target="_blank" href="http://jb.ccm.gov.cn/" class="clickstat" eid="click/home/yejiao/jubao"
                   eid_desc="点击/首页/页脚/举报">12318全国文化市场举报网站</a>
                <a target="_blank" href="http://www.12377.cn/" class="clickstat" eid="click/home/yejiao/jubao2"
                   eid_desc="点击/首页/页脚/举报2">中国互联网不良信息举报中心</a>
                <span>客服&举报电话：020-82120010</span>
            </p>
        </div>
        <div class="huya-footer__hy-logo">
            <img src="images/hy-logo.png" width="322" height="46"/>
            <a target="_blank" id="_pingansec_bottomimagesmall_brand"
               href="http://si.trustutn.org/info?sn=950170109026610628628&certType=1"><img
                        src="images/brand_bottom_small.jpg"/></a>
            <a href="https://credit.szfw.org/CX20170721035218030329.html" target="_blank"><img src="images/sf.png"/></a>
            <a href="https://credit.szfw.org/CX20170721035218020978.html" target="_blank"><img src="images/silver.jpg"/></a>
        </div>
    </div>
</div>
<!-- S 通用底部 -->
<script data-fixed="true">
    var _hmt = _hmt || [];
    (function () {
        var hm = document.createElement("script");
        hm.src = "//hm.baidu.com/hm.js?51700b6c722f5bb4cf39906a596ea41f";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(hm, s);
    })();
    $('#search-bar-input').val($('#name_hidden').val())
</script>


<!-- E 通用底部 -->
</body>
</html>


<!--
/**
 * search.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/11, 作者: 降省心(QQ:1348550820), 操作:创建
 **/
-->