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
    <meta name="Description"
          content="虎牙直播-中国第一直播网站，提供高清、流畅的视频直播，包括lol直播、dota2直播、cf直播等游戏直播，还提供美食直播、娱乐直播、美女直播等多种直播内容，最全、最精彩的直播内容尽在虎牙直播。"/>

    <link type="text/css" rel="stylesheet" href="css/pages_modules_796de8d.css">
    <link type="text/css" rel="stylesheet" href="css/auto_combine_17c76_a847427.css">
    <script src="js/jquery.js"></script>
    <script src="js/Vue.js"></script>
    <!--瀑布流加载 begin-->
    <!--<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>-->
    <!--<script type="text/javascript" src="js/jQueryColor.js"></script>-->
    <!--这个插件是瀑布流主插件函数必须-->
    <!--<script type="text/javascript" src="js/jquery.masonry.min.js"></script>-->
    <!--这个插件只是为了扩展jquery的animate函数动态效果可有可无-->
    <!--<script type="text/javascript" src="js/jQeasing.js"></script>-->
    <!--瀑布流加载 out-->
    <!--HEAD_END-->
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
            <span data-type="all" class="current clickstat" eid="click/search/zhtab" eid_desc="点击/搜索/直播tab点击量" >综合</span>
            <span data-type="live" class="clickstat" eid="click/search/livetab" eid_desc="点击/搜索/直播tab点击量">直播</span>
            <span data-type="host" class="clickstat" eid="click/search/anchortab" eid_desc="点击/搜索/主播tab点击量">主播</span>
            <span data-type="video" class="clickstat" eid="click/search/vediotab" eid_desc="点击/搜索/视频tab点击量">视频</span>
            <span data-type="advice" class="clickstat" eid="click/search/zixuntab" eid_desc="点击/搜索/资讯tab点击量">资讯</span>
        </div>
        <div class="find-result">找到，相关内容共-个</div>
    </div>

    <!--<div class="search-main clearfix" id="js-search-main">
    </div>
    <i class="icon-loading"></i>
        <em>加载中...</em>-->

    <div class="more-loading">
        <div class="search-box">
            <div class="box-hd clearfix">
                <h3 class="title">推荐直播</h3>
            </div>
            <div class="box-bd" id="app">
                <ul class="search-empty-list clearfix searchbox-list" id="box_father">
                    <?php foreach ($live_list as $v){ ?>
                    <li class="game-live-item box_son" gid="2336">
                        <a href="<?= $v['channel_id']?>" class="video-info new-clickstat" target="_blank">
                            <img class="pic ldjz" src="images/338x190.jpg" data-src='<?= $v['channel_images'] ?>' alt="<?= $v['username'] ?>" title="">
                            <em class="tag tag-recommend">白金推荐</em>
                            <div class="item-mask"></div>
                            <i class="btn-link__hover_i"></i>
                        </a>
                        <a href="/<?= $v['channel_id']?> " class="title new-clickstat"
                           report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"12837293"}'
                           title="挑战8h青铜—王者，输送iphone8" target="_blank"><?= $v['sign']?> </a>
                        <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1035/7d/9c4ebef7e55c51562e08ef3424d62f_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="<?= $v['username'] ?>"
                 title="<?= $v['username'] ?>">
            <i class="nick" title="<?= $v['username'] ?>"><?= $v['username'] ?></i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/wzry"
                                              title="<?= $v['channel_name'] ?>"><?= $v['channel_name'] ?></a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">48.7万</i></span>
    </span>
                    </li>
                    <?php } ?>

                    <!--<li class="game-live-item" gid="2336" v-for="li in ul">
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
                        <a href=" " class="title new-clickstat"
                           report='{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"12837293"}'
                           title="挑战8h青铜—王者，输送iphone8" target="_blank">挑战8h青铜—王者，输送iphone8</a>
                        <span class="txt">
        <span class="avatar fl">
            <img data-original="//huyaimg.msstatic.com/avatar/1035/7d/9c4ebef7e55c51562e08ef3424d62f_180_135.jpg"
                 src="images/84x84.jpg" onerror="this.onerror=null; this.src='images/84x84.jpg';" alt="星辉-大锤哥"
                 title="星辉-大锤哥">
            <i class="nick" title="星辉-大锤哥">{{li.username}}</i>
        </span>
                <span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/wzry"
                                              title="王者荣耀">{{li.channel_name}}</a></span>
                <span class="num"><i class="num-icon"></i><i class="js-num">48.7万</i></span>
    </span>
                    </li>-->

                </ul>
            </div>
            <!--<span id="imloading">没有了</span>-->
        </div>
    </div>
</div>
<!--懒惰加载-->
<script src="/ldjz.js"></script>
<!--瀑布加载-->
<script src="/pbjz.js"></script>
<script>
    var pa = 1;
    new Vue({
        el:'#app',
        data:
        {
            ul:{},
        },
        created()
        {
            load(this)
        },
        methods:
        {
        }
    })



    //加载方法
    function load(thi) {
        pa = parseInt(pa)+1
        console.log(pa)
        $.ajax({
            dataType:'json',
            url:'/?r=search/search_find',
            data:{pa:pa,name:$('#name_hidden').val()},
            success:function (e) {
                if(e.error=='200') {
                    $.extend(thi.ul,e.msg);
                }
                console.log(thi.ul)
            }
        })
    }
</script>

<!--BODY_END-->
<!-- S 页面公用功能 -->

<!-- S 后台推送消息 -->
<!--[if lte IE 7]>
<![endif]-->
<!--[if lte IE 9]>
<![endif]--><!-- S 通用底部 -->
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