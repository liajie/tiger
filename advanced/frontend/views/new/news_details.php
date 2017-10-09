<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="description" content="">
    <meta name="keywords" content="">
    <script type="text/javascript">
        !function(t){t.loadScript(["http://szhuodong.duowan.com/feq/m_huya/yy-f2e-header-m_huya.min"])}(function(){function t(t){var e=n(t);document.write(e)}function n(t){for(var n,r="",c=0;n=t[c];c++)r+=e(n);return r}function e(t){var n=[unescape("%3Cscript%20type%3D%22text/javascript%22%20src%3D%22"),"",unescape("%22%3E%3C/script%3E")],e=new Date;return e.setSeconds(0),e.setMilliseconds(0),e=e.getTime(),t+="?t_="+e,n[1]=t,n.join("")}return{loadScript:function(n){n&&n.length&&n instanceof Array&&t(n)}}}())
    </script>
    <title>虎牙10.02-10.08一周赛事推荐</title>
    <link href="/css/global.css?20170227v1" rel="stylesheet">
    <script type="text/javascript" src="/js/jquery.js"></script>

    <script>
        var _hotwords = [];    </script>
    <style>.hotwords{border-bottom:#000000 1px dashed;}</style>
</head>
<body >

<!-- 页头 -->
<script src="/js/header.js" charset="utf-8"></script>
<div style="height: 50px;"></div>
<!-- /页头 -->
<div class="small_header clearfix">
    <a href="http://blog.huya.com/news"  class="active"  >新闻</a>
    <a href="http://blog.huya.com/product"  >产品</a>
    <a href="http://blog.huya.com/policy"  >政策</a>
</div>
<!-- /页头 -->
<div class="wrap">
    <div class="header">
        <h2><a href="http://www.live.com/">网站首页</a></h2>
        <ul class="header-nav">
            <?php foreach ($class as $v){ ?>
                <?php if($v['newsClass_id']==$newsClass_id){ ?>
                    <i class="current">
                        <a href="http://www.live.com/?r=news/news_list&newsClass_id=<?= $v['newsClass_id'] ?>"><?= $v['newsClass_name'] ?></a>
                    </i>
                <?php }else{ ?>
                    <i>
                        <a href="http://www.live.com/?r=news/news_list&newsClass_id=<?= $v['newsClass_id'] ?>"><?= $v['newsClass_name'] ?></a>
                    </i>
                <?php } ?>
            <?php } ?>
        </ul>
    </div>
    <div class="main clearfix">
        <div class="col-main">
            <div class="news-block">
                <!-- 文章-->
                <div class="artcle">
                    <div class="artcle-hd">
                        <a href="http://www.live.com/?r=news/news_list" class="back">&lt;&lt;返回新闻列表</a>
                        <h1><?= $title ?></h1>
                        <span class="artcle-date"><i></i><?= date('Y-m-d H:i:s') ?></span>
                    </div>
                    <div class="artcle-bd">
                        <?= $news_text ?>
                        <div class="pages-prev-next">
                            <a href="javascript:alert('回列表去访问吧')" style="color:gray;">上一篇</a>&nbsp;&nbsp;&nbsp;&nbsp;
                            <a href="javascript:alert('没有更多了')">下一篇</a>
                        </div>
                    </div>
                </div>
                <!--/ 文章 -->
            </div>
        </div>
        <div class="col-side">
            <!-- 最近的新闻 -->
            <div class="box">
                <div class="box-hd">
                    <i class="icon"></i><h3 class="title">最近的新闻</h3>
                </div>
                <div class="box-bd">
                    <ul class="mod-art">
                        <?php foreach ($new_list as $v){ ?>
                            <li><span class="date"> <?= date('Y-m-d',$v['new_addTime']) ?></span><a href="http://admin.live.com/<?= $v['new_tmp'] ?>"><?= $v['news_name'] ?></a></li>
                        <?php } ?>

                    </ul>
                </div>
            </div>
            <!--/ 最近的新闻 -->
            <!-- 联系我们 -->
            <div class="box contact-box">
                <div class="box-hd">
                    <i class="icon"></i><h3 class="title">联系我们</h3>
                </div>
                <div class="box-bd">
                    <p class="p-txt">
                        生命如画，有浓墨泼洒，也有淡笔轻描；
                        生命如歌，有轻吟浅唱，也有黄钟大吕。
                        君不见李太白、杜工部之一生，浓墨泼洒，铸就生命之伟大；
                        裴多菲、雪莱之一生，淡笔轻描终写尽生命之真谛。
                        君不见轻音浅唱之陶渊明“采菊东篱下，悠然见南山”，
                        高歌猛进之谭嗣同“我自横刀向天笑，去留肝胆两昆仑”。
                        生命是山，我们无法预估它的长度，我们只好追求它的高度。
                        生命是路，它是由一块块不起眼的沙石组成的，而不是铺金布银，平平淡淡中尽显生命之完美。
                        生命是一叶扁舟，航行于茫茫沧海之中，只有经历暴风雨的洗礼，才会迎来明天海上初升的太阳。</p>
                    <ul class="sns-list clearfix">
                        <li><a href="http://kf.duowan.com/s/home/online-service.html?product=HUYA&source=YY"  target="_blank" ><img src="/images/sns05.png" alt=""><span>客服</span></a></li>
                        <li><a href="http://help.huya.com/"  target="_blank" ><img src="/images/sns02.png" alt=""><span>帮助</span></a></li>
                        <li><a href="http://weibo.com/90dwyy"  target="_blank" ><img src="/images/sns03.png" alt=""><span>新浪微博</span></a></li>
                    </ul>
                    <div class="qrcode">
                        <img src="/images/qr-code.jpg" alt="" class="pic">
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
<script src="/js/news.js?20170303v1"></script>
<!-- 页脚 -->
<script type="text/javascript" src="/js/ya-huya.min.js" data-fixed="true" pro="huya_web" noreport="" id="yaScript"></script>
<script type="text/javascript">
    function report(obj){
        var obj = obj || {};
        var source = {
            pro : "huya_web",//产品给的
            pas : YA.cookie.get('username') || '',
            yyuid : YA.cookie.get('yyuid') || '',
            pageType : "root",
            rso : "",
            rso_desc : "",
            eid : "",
            eid_desc : ""
        }
        for(var property in obj){
            source[property] =  obj[property];
        }
        window.ya = new YA(source.pro,source.pas,{
            pageType: source.pageType,
            yyuid : source.yyuid
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
    var str = location.href;
    var id = str.substring(str.lastIndexOf('/') + 1 );
    report({
        rso: '', //外部来源
        rso_desc:'',//外部来源
        eid: "pageview/blog/news/"+id,  //产品给的
        eid_desc:"pageview/博客/新闻/"+id,  //产品给的
        pro:"huya_web"
    });
</script>
<script src="/js/footer.js" charset="utf-8"></script>
<!--/ 页脚 -->
<!--[if gt IE 6]><!-->
<script type="text/javascript">
    window.onerror = function(a,b,c){ return true};!function(t){t.loadScript(["http://szhuodong.duowan.com/feq/m_huya/yy-f2e-m_huya.min"])}(function(){function t(e,a){var n=a[e];if(n){e++;var o=document.createElement("script");o.type="text/javascript",o.setAttribute("async","async"),o.onload=o.onreadystatechange=function(){return o.readyState&&"complete"!==o.readyState&&"loaded"!==o.readyState?!1:(o.onload=o.onreadystatechange=null,void t(e,a))};var c=new Date;c.setSeconds(0),c.setMilliseconds(0),c=c.getTime(),o.async=!0,o.src=n+"?_="+c,document.getElementsByTagName("head")[0].appendChild(o)}}return{loadScript:function(e){e&&e.length&&e instanceof Array&&t(0,e)}}}());
</script>
<!--<![endif]-->
</body>
</html>


<!--/**
 * news_details.php
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