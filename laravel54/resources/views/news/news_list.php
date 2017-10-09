<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no"/>
    <meta name="format-detection" content="telephone=no"/>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script type="text/javascript">
        !function (t) {
            t.loadScript(["http://szhuodong.duowan.com/feq/m_huya/yy-f2e-header-m_huya.min"])
        }(function () {
            function t(t) {
                var e = n(t);
                document.write(e)
            }

            function n(t) {
                for (var n, r = "", c = 0; n = t[c]; c++)r += e(n);
                return r
            }

            function e(t) {
                var n = [unescape("%3Cscript%20type%3D%22text/javascript%22%20src%3D%22"), "", unescape("%22%3E%3C/script%3E")],
                    e = new Date;
                return e.setSeconds(0), e.setMilliseconds(0), e = e.getTime(), t += "?t_=" + e, n[1] = t, n.join("")
            }

            return {
                loadScript: function (n) {
                    n && n.length && n instanceof Array && t(n)
                }
            }
        }())
    </script>
    <title>
        新闻资讯 - 虎牙直播 </title>
    <!--<link href="css/global.css" rel="stylesheet">-->
    <link href="css/list.css?2017027v3" rel="stylesheet">
    <script type="text/javascript" src="js/jquery.js"></script>
</head>

<body>


<!-- 统一登录头部 -->
<script src="js/header.js" charset="utf-8"></script>
<!--<div class="duya-header" id="duya-header"></div>

<script data-fixed="true">
    $.ajax({
        url: 'index.php?r=index/header',
        success: function (e) {
            $('#duya-header').html(e);
        }
    })
</script>-->
<!-- 统一登录头部 结束 -->

<div style="height: 50px;"></div>        <!-- /页头 -->
<div class="small_header clearfix">
    <a href="http://blog.huya.com/news" class="active">新闻</a>
    <a href="http://blog.huya.com/product">产品</a>
    <a href="http://blog.huya.com/policy">政策</a>
</div>
<div class="wrap">
    <div class="header">
        <h2><a href="/">网站首页</a></h2>
        <ul class="header-nav">
            <?php foreach ($class as $v){ ?>
                <?php if($v->newsClass_id==$newsClass_id){ ?>
                    <i class="current">
                        <a href="/?r=news/news_list&newsClass_id=<?= $v->newsClass_id ?>"><?= $v->newsClass_name ?></a>
                    </i>
                <?php }else{ ?>
                    <i>
                        <a href="/?r=news/news_list&newsClass_id=<?= $v->newsClass_id ?>"><?= $v->newsClass_name ?></a>
                    </i>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
    <div class="main clearfix">
        <div class="col-main">
            <div class="news-block">
                <!-- 文章列表 -->
                <ul class="mod-art ">
                    <?php foreach ($reg as $v){ ?>
                    <li>
                        <span class="date"><?= date('Y-m-d H:i:s',$v->new_addTime)?></span>
                        <a href="http://admin.live.com/<?= $v->new_tmp ?>" class="title"><?=$v->news_name?></a>
                    </li>
                    <?php } ?>
                </ul>
                <!--/ 文章列表 -->

                <!--/ 分页 -->
                <!--<link rel="stylesheet" type="text/css" href="http://blog.huya.com//base/css/page.css" />-->
                <script type="text/javascript">

                    var indexUrl = '';
                    var totalPage = 176;
                    page_util = {
                        gotopage: function (currentPage) {

                            var form = document.getElementById('pageForm');
                            form.action = indexUrl;
                            document.getElementById('pageForm_page').value = currentPage;
                            form.submit();
                        },
                        blur: function () {
                            var page = document.getElementById('pageForm_page').value;
                            if (page > totalPage) {
                                document.getElementById('pageForm_page').value = totalPage;
                            }
                        }
                    };

                </script>

                <div class="page-nav">
                    <div class="mod-page">
                        <?php for($i=1;$i<=$page;$i++){ ?>
                        <?php if($i<6){ ?>
                            <?php if($i==$pa){ ?>
                                <a href="javascript:alert('已经是当前页')" title="已经是当前页" class="current"><?= $i ?></a>
                            <?php }else{ ?>
                                <a href="/?r=news/news_list&newsClass_id=<?= $newsClass_id ?>&pa=<?= $i ?>" title="第<?= $i ?>页"><?= $i ?></a>
                            <?php } ?>
                        <?php }elseif ($i==$page&&$i>=6){ ?>
                                <span>...</span>
                                <a href="/?r=news/news_list&newsClass_id=<?= $newsClass_id ?>&pa=<?= $i ?>" title="第176页" ><?= $i ?></a>
                        <?php }} ?>
                        <ins>
                            <form action="/" method="get" name="pageForm" id="pageForm">
                                <span>跳转到</span>
                                <input type="hidden" value="news/news_list" name="r">
                                <input type="hidden" value="<?= $newsClass_id ?>" name="newsClass_id">
                                <input type="text" id="pageForm_page" name="pa" value="<?= $pa ?>"/>
                                <span>页</span>
                                <button type="submit">确定</button>
                            </form>
                        </ins>
                    </div>
                </div>
                <!--/ 分页 -->
            </div>
        </div>
        <div class="col-side">
            <!-- 联系我们 -->
            <div class="box contact-box">
                <div class="box-hd">
                    <i class="icon"></i>
                    <h3 class="title">联系我们</h3>
                </div>
                <div class="box-bd">
                    <p class="p-txt">
                        虎牙直播是国内领先的互动直播平台，每月超过4000万的观众通过虎牙直播观看游戏直播。我们希望通过游戏连接来自各地的游戏玩家，他们可以直播游戏、观看游戏、一起聊天。希望通过虎牙直播拉近你我，带来一丝欢乐。</p>
                    <ul class="sns-list clearfix">
                        <li><a href="http://kf.duowan.com/s/home/online-service.html?product=HUYA&source=YY"
                               target="_blank"><img src="images/sns05.png" alt=""><span>客服</span></a></li>
                        <li><a href="http://help.huya.com/" target="_blank"><img src="images/sns02.png"
                                                                                 alt=""><span>帮助</span></a></li>
                        <li><a href="http://weibo.com/90dwyy" target="_blank"><img src="images/sns03.png" alt=""><span>新浪微博</span></a>
                        </li>
                    </ul>
                    <div class="qrcode">
                        <img src="images/qr-code.jpg" alt="" class="pic">
                        <div class="panel">
                            <em class="title">微信公众号：<span>HUYAZHIBO</span></em>
                            <span class="txt">手机扫描二维码或输入虎牙直播微信账号来添加关注。</span>
                        </div>
                    </div>
                </div>
            </div>
            <!--/ 联系我们 -->
        </div>
    </div>
</div>

<!-- 页脚 -->
<script type="text/javascript" src="js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport=""
        id="yaScript"></script>
<script src="js/list.js?20170303v1"></script>
<script type="text/javascript">
    function report(obj) {
        var obj = obj || {};
        var source = {
            pro: "huya_web",//产品给的
            pas: YA.cookie.get('username') || '',
            yyuid: YA.cookie.get('yyuid') || '',
            pageType: "root",
            rso: "",
            rso_desc: "",
            eid: "",
            eid_desc: ""
        }

        for (var property in obj) {
            source[property] = obj[property];
        }


        window.ya = new YA(source.pro, source.pas, {
            pageType: source.pageType,
            yyuid: source.yyuid
        });

        ya.reportProductStartUp({
            pro: source.pro,
            rso: source.rso,
            rso_desc: source.rso_desc
        });

        ya.startProductHeartbeat({
            pro: source.pro,
            rso: source.rso,
            rso_desc: source.rso_desc
        });

        ya.reportProductEvent({
            eid: source.eid,
            eid_desc: source.eid_desc
        })

    }

    report({
        rso: '', //外部来源
        rso_desc: '',//外部来源
        eid: "pageview/blog",  //产品给的
        eid_desc: "pageview/博客",  //产品给的
        pro: "huya_web"
    });
</script>
<!-- 页脚 -->
<script src="js/footer.js" charset="utf-8"></script>
<!--/ 页脚 -->
<!--[if gt IE 6]><!-->
<script type="text/javascript">
    window.onerror = function (a, b, c) {
        return true
    };
    !function (t) {
        t.loadScript(["http://szhuodong.duowan.com/feq/m_huya/yy-f2e-m_huya.min"])
    }(function () {
        function t(e, a) {
            var n = a[e];
            if (n) {
                e++;
                var o = document.createElement("script");
                o.type = "text/javascript", o.setAttribute("async", "async"), o.onload = o.onreadystatechange = function () {
                    return o.readyState && "complete" !== o.readyState && "loaded" !== o.readyState ? !1 : (o.onload = o.onreadystatechange = null, void t(e, a))
                };
                var c = new Date;
                c.setSeconds(0), c.setMilliseconds(0), c = c.getTime(), o.async = !0, o.src = n + "?_=" + c, document.getElementsByTagName("head")[0].appendChild(o)
            }
        }

        return {
            loadScript: function (e) {
                e && e.length && e instanceof Array && t(0, e)
            }
        }
    }());
</script>
<!--<![endif]-->
<!--/ 页脚 -->
</body>
</html>


<!--
/**
 * news_list.php
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/8, 作者: 降省心(QQ:1348550820), 操作:创建
 **/
-->