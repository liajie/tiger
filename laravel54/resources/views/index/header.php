<?php
if (!empty($_COOKIE['users'])) {
    $users = unserialize($_COOKIE['users']);
}

?>

<div class="duya-header-wrap clearfix">
        <div class="duya-header-bd clearfix">
            <h1 id="duya-header-logo" title="虎牙直播-虎牙TV-中国领先的互动直播平台">
                <a href="/http://www.huya.com/" class="clickstat" eid="click/navi/logo" eid_desc="点击/导航/logo"><img
                            src="/images/logo.png" alt="虎牙直播" width="120" height="36"></a>
            </h1>
            <div class="duya-header-nav">
                <span class="hy-nav-link duya-header-on"><a href="/" class="hy-nav-title clickstat"
                                                            eid="click/navi/home" eid_desc="点击/导航/首页">首页</a></span>
                <span class="hy-nav-link"><a href="/index.php/live/live_list" class="hy-nav-title hiido_stat clickstat"
                                             hiido_code="10004221" eid="click/navi/zhibo"
                                             eid_desc="点击/导航/直播">直播</a></span>
                <div class="hy-nav-expand">
                    <div class="hy-nav-title nav-main" id="nav-main"><a href="/http://www.huya.com/g">分类</a><i
                                class="icon-arrow"></i></div>

                    <div class="nav-expand-list nav-expand-game">
                        <i class="arrow"></i>
                    </div>
                </div>
                <!-- <span class="hy-nav-link"><a href="/http://v.huya.com" class="hy-nav-title hiido_stat clickstat" hiido_code="10004227" target="_blank" eid="click/navi/video" eid_desc="点击/导航/视频">视频</a></span> -->
            </div>
            <div class="duya-header-search clearfix" id="J_duyaHdSearch">
                <form method="get" id="searchForm_id" name="navSearchForm" action="http://www.huya.com/search.php"
                      target="_blank">
                    <input type="text" name="hsk" value="主播、频道、游戏" autocomplete="off">
                    <button type="submit" class="btn-search clickstat" eid="click/search/searchbutton"
                            eid_desc="点击/搜索/搜索按钮"></button>
                </form>
            </div>
            <div class="duya-header-gg clickstat" id="J_duyaHdGg" eid="click/push/navipic"
                 eid_desc="点击/推荐/顶部导航图片"></div>
            <div class="duya-header-control clearfix">
                <div class="hy-nav-right hy-nav-kaibo">
                    <a class="hy-nav-title clickstat" href="/http://www.huya.com/e/zhubo" eid="click/navi/kaibo"
                       eid_desc="点击/导航/开播" target="_blank">
                        <i class="hy-nav-icon hy-nav-video-icon"></i>
                        <span class="title">开播</span>
                    </a>
                    <div class="nav-expand-list nav-expand-kaibo">
                        <i class="arrow"></i>
                        <div class="kaibo-nav">
                            <a target="_blank" href="/http://www.huya.com/e/zhubo"><i
                                        class="hy-nav-video-icon"></i><span>我要开播</span></a>
                            <a target="_blank" href="/#"><i class="hy-nav-home-icon"></i><span>公会入驻</span></a>
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right">
                    <a class="hy-nav-title clickstat" href="/http://www.huya.com/download/" eid="click/navi/download"
                       eid_desc="点击/导航/下载" target="_blank">
                        <i class="hy-nav-icon hy-nav-download-icon"></i>
                        <span class="title">下载</span>
                    </a>
                    <div class="nav-expand-list nav-expand-download">
                        <i class="arrow"></i>
                        <div class="download-nav">
                            <a target="_blank" href="/http://www.huya.com/download/"><i
                                        class="hy-nav-app-icon"></i><span>移动APP</span></a>
                            <a target="_blank" href="/http://www.huya.com/download/#players_pc"><i
                                        class="hy-nav-play-icon"></i><span>主播工具</span></a>
                            <!-- <a target="_blank" href="/http://www.huya.com/download/#tv"><i class="hy-nav-tv-icon"></i><span>虎牙TV版</span></a> -->
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right nav-subscribe success-login">
                    <a class="hy-nav-title new-clickstat" href="/http://i.huya.com/index.php?m=Subscribe"
                       target="_blank" report='{"eid":"click/position","position":"click/navi/dingyue"}'>
                        <i class="hy-nav-icon hy-nav-subscribe-icon"></i>
                        <span class="title">订阅</span>
                    </a>
                    <div class="nav-expand-list">
                        <i class="arrow"></i>
                        <div class="subscribe-hd clearfix" style="display:block;">
                            <h5>我订阅的有<em class="subscribe-key">0</em>个正在直播</h5>
                        </div>
                        <div class="subscribe-bd" style="display:block;">
                            <ul class="subscribe-list"></ul>
                            <a class="subscribe-all" href="/http://i.huya.com/index.php?m=Subscribe" target="_blank">全部订阅</a>
                        </div>
                        <div class="mod-list-more">
                            <div class="more-loading">
                                <i class="icon-loading"></i>
                                <em>正在加载您的订阅...</em>
                            </div>
                            <div class="more-empty">
                                <i class="icon-empty"></i>
                                <p>暂无订阅的直播。<br/><em>你可以在主播的播放页进行订阅喔！</em></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hy-nav-right hy-nav-history">
                    <a class="hy-nav-title nav-history new-clickstat" id="nav-history"
                       href="/http://i.huya.com/index.php?m=Subscribe&watch=1" target="_blank"
                       report='{"eid":"click/position","position":"click/navi/lishi"}'>
                        <i class="hy-nav-icon hy-nav-history-icon"></i>
                        <span class="title">历史</span>
                    </a>
                    <div class="nav-expand-list nav-expand-history">
                        <i class="arrow"></i>
                        <div class="load-history">
                            <div class="mod-list-more">
                                <div class="more-loading">
                                    <i class="icon-loading"></i>
                                    <em>正在加载您的历史...</em>
                                </div>
                            </div>
                        </div>
                        <a href="/http://i.huya.com/index.php?m=Subscribe&watch=1"
                           class="nav-expand-history-more J_gNavLogin" style="display:block" target="_blank">更多&gt;</a>
                    </div>
                </div>
                <div class="hy-nav-right un-login" id="login_un">
                    <div class="hy-nav-title">
                        <i class="hy-nav-icon hy-nav-login-icon"></i>
                        <div class="un-login-btn">
                            <a class="clickstat" id="login" href="#" eid_desc="点击/导航/登录">登录</a>
                            <i>|</i>
                            <a class="clickstat" id="add_login" href="#" eid="click/navi/login"
                               eid_desc="点击/导航/注册">注册</a>
                        </div>
                    </div>
                </div>

                <!-- 登录注册遮罩层 Start-->
                <div class="login-box">
                    <div class="login">
                        <div class="login-main">
                            <div class="login-hd">
                                <a class="tab-btn" id="btn_active">登录</a>
                                <a class="tab-btn" id="btn_zhuce">注册</a>
                                <a class="tab-btn" id="disanfang">第三方</a>
                                <i class="line J_line" style="left: 0px;"></i>
                            </div>
                            <div class="login-bd">
                                <div class="login-content">
                                    <div class="tab-unit" id="tab-unit">
                                        <div id="login-tab">
                                            <h3>帐号登录</h3>

                                            <div class="login-view" id="J_loginView">
                                                
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">用户名</label>
                                                        <input type="text" class="form-control"
                                                               placeholder="手机号/邮箱/手机号" style="width:300px"
                                                               id="username">
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputPassword1">密码</label>
                                                        <input type="password" class="form-control" placeholder="密码"
                                                               style="width:300px" id="pwd">
                                                        <input type="hidden" value="<?= csrf_token() ?>" id='_token'>
                                                    </div>
                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" value="1" id="check">记住密码
                                                        </label>
                                                    </div>
                                                    <button id="subm" type="button" class="btn btn-success">登录</button>
                                            </div>
                                           

                                        </div>
                                    </div>
                                    <div class="tab-unit" id="zhuce">
                                        <h3>注册</h3>

                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="用户名"
                                                   style="width:300px" id="zhuce_user">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="手机号"
                                                   style="width:300px" id="zhuce_tel">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="密码"
                                                   style="width:300px" id="zhuce_pwd">
                                            <input type="hidden" value="<?= csrf_token() ?>" id='zhuce_token'>
                                        </div>
                                        <button class="btn btn-default"
                                                id="zhuce_btn">注册
                                        </button>
                                    </div>
                                    <!-- 第三方 -->
                                    <div class="tab-unit" id="qq">
                                        <h3>第三方登录</h3>
                                        其他账号登陆：<span id="hzy_fast_login"></span>
                                    </div>
                                    <!-- end -->
                                </div>
                            </div>
                        </div>

                    </div>
                    <a class="login-close" id="js-login-close" title="关闭"></a>
                    <p class="login-wran-tip">使用即为同意</p>
                </div>
                <!-- 李超飞 -->
                <script type="text/javascript" src="http://open.51094.com/user/myscript/159c9c90857808.html"></script>
                <script>
                    <?php
                    if (!empty($_COOKIE['nickname'])) {?>
                    $("#login_un").hide();
                    $("#touxiang").show();

                    <?php
                    }else
                    {?>

                    <?php
                    }
                    ?>
                    //-------------登录ajax
                    $(function () {
                        $(document).on("click", "#subm", function () {
                            var username = $("#username").val();
                            var pwd = $("#pwd").val();
                            var check = $("#check").val();
                            var _token = $("#_token").val();
                            $.ajax({
                                headers: {
                                    'X-XSRF-TOKEN': _token
                                },
                                type: "POST",
                                url: "login/login",
                                data: {
                                    username: username,
                                    pwd: pwd,
                                    check: check,
                                    _token: _token
                                },
                                dataType:"json",
                                success: function (msg) {
                                    if (msg['error'] == 1) {
                                        alert('登录成功');
                                        $("#login_un").hide();
                                        $(".login-box").hide();
                                        $("#touxiang").show();
                                        $("#nickname").html(msg['nickname']);
                                        $("#sign").html(msg.sign)
                                        $("#J_huyaNavUserCardAssetsGb").empty();
                                        $("#J_huyaNavUserCardAssetsGb").html(msg.jin);
                                        $("#J_huyaNavUserCardAssetsSb").empty();
                                        $("#J_huyaNavUserCardAssetsSb").html(msg.yin);
                                        
                                    } else {
                                        alert("登录失败");
                                        $(".login-box").hide();
                                    }
                                }
                            });

                        })
                        //-------------------注册ajax
                        $(document).on("click", "#zhuce_btn", function () {
                            var zhuce_user = $("#zhuce_user").val();
                            var zhuce_pwd = $("#zhuce_pwd").val();
                            var zhuce_tel = $("#zhuce_tel").val();
                            var _token = $("#zhuce_token").val();
                            $.ajax({
                                headers: {
                                    'X-XSRF-TOKEN': _token
                                },
                                type: "POST",
                                url: "login/add",
                                data: {
                                    zhuce_user: zhuce_user,
                                    zhuce_pwd: zhuce_pwd,
                                    zhuce_tel: zhuce_tel,
                                    _token: _token
                                },
                                success: function (msg) {
                                    if (msg == 1) {
                                        alert('注册成功');
                                        $(".login-box").hide();
                                    }
                                    else {
                                        alert('注册失败');
                                    }
                                }
                            });

                        })
                        //--------------------------------------------------
                        $(document).on("click", "#login", function () {
                            $(".login-box").show();
                            $("#tab-unit").show();
                            $("#qq").hide();
                            $("#zhuce").hide();

                        })

                        $(document).on("click", "#add_login", function () {
                            $(".login-box").show();
                            $("#tab-unit").hide();
                            $("#qq").hide();
                            $("#zhuce").show();
                        })

                        $(document).on("click", ".login-close", function () {
                            $(".login-box").hide();
                        })
                        $(document).on("click", "#btn_active", function () {
                            $("#tab-unit").show();
                            $("#zhuce").hide();
                            $("#qq").hide();

                        })
                        $(document).on("click", "#btn_zhuce", function () {
                            $("#zhuce").show();
                            $("#tab-unit").hide();
                            $("#qq").hide();
                        })
                        $(document).on("click", "#disanfang", function () {
                            $("#zhuce").hide();
                            $("#tab-unit").hide();
                            $("#qq").show();
                        })
                    })


                </script>


                <!-- 遮罩层end -->

                <div class="hy-nav-right nav-user success-login" <?php
                if (empty($_COOKIE['nickname'])) {
                    echo "style='display:none;'";
                }
                ?> id="touxiang">
                    <a class="nav-user-title" href="/http://i.huya.com/" target="_blank">
                        <img id="login-userAvatar" src="/images/10001.jpg" alt="头像"/>
                        <span id="login-username"></span>
                        <i></i>
                    </a>
                    <div class="nav-expand-list">
                        <i class="arrow"></i>
                        <!-- 用户信息 -->
                        <div class="tt-user-card">
                            <a class="btn-exit" id="nav-loggout" href="#"><i class="hy-nav-exit-icon"></i><span><a
                                            href="login/loginout">退出</a></span></a>
                            <div class="u-info">
                                <a class="avatar" id="J_huyaNavUserCardAvatar" href="?r=User/getuser"
                                   target="_blank">
                                    <img src="//huyaimg.msstatic.com/avatar/1010/03/23cfa7994ed4856dd60e476a7bee09_180_135.jpg"
                                         id="J_huyaNavUserCardAvatarImg">
                                </a>
                                <p class="nick" id="J_huyaNavUserCardNick"><span id="nickname"><?php
                                        if (!empty($_COOKIE['nickname'])) {
                                            echo $_COOKIE['nickname'];
                                        } else {
                                            echo "未登录";
                                        }

                                        ?></span><i class="gender gender1"></i><i class="level-icon level-icon1"></i>
                                </p>
                                <p class="user-sign" id="J_huyaNavUserCardSign"><a href="#" target="_blank" class="edit_sign"><span id="sign">
                                    <?php if (!empty($_COOKIE['users'])): ?>
                                        <?php echo $users['sign'] ?>
                                        
                                    <?php endif ?>
                                </span></a>
                                </p>
                                <div class="exp clearfix">
                                    <div class="between">
                                        <span class="from" id="J_huyaNavUserCardExpFrom">LV1</span>
                                        <div class="bar-cnt">
                                            <p id="J_huyaNavUserCardBarInfo">今日获得<em>0</em>点经验值，升级还需<em>140</em>点</p>
                                            <p class="bar">
                                                <i id="J_huyaNavUserCardExpBar" style="width: 30%;"><b
                                                            class="J_huyaNavUserCardExpText">60/200</b></i>
                                                <span class="J_huyaNavUserCardExpText">60/200</span>
                                            </p>
                                        </div>
                                        <span class="to" id="J_huyaNavUserCardExpTo">LV2</span>
                                    </div>
                                </div>
                            </div>
                            <div class="u-assets">
                                <div class="bd">
                                    <span class="type-name">资产</span>
                                    <ul class="type">
                                        <li><i class="gold-bean"></i><em id="J_huyaNavUserCardAssetsGb">
                                            <?php if (!empty($_COOKIE['users'])): ?>
                                        <?php echo $users['jin'] ?>
                                        
                                    <?php endif ?>
                                        </em></li>
                                        <li class="type-ticket"><i class="gold-ticket"></i><em
                                                    id="J_huyaNavUserCardAssetsTk"> <?php if (!empty($_COOKIE['users'])): ?>
                                        <?php echo $users['yin'] ?>
                                        
                                    <?php endif ?></em></li>
                                        <li><i class="silver-bean"></i><em id="J_huyaNavUserCardAssetsSb"></em></li>
                                    </ul>
                                    <a class="topup new-clickstat" target="_blank"
                                       href="http://i.huya.com/?evt=recharge"
                                       report="{&quot;eid&quot;:&quot;click/position&quot;,&quot;position&quot;:&quot;header/usercard/recharge&quot;}">充值</a>
                                </div>
                            </div>
                            <div class="u-task" id="J_huyaNavUserCardTask">
                                <div class="task-mod task-novice">
                                    <div class="mod-hd">
                                        <p class="mod-tit">新手任务</p>
                                    </div>
                                    <div class="mod-bd">

                                        <ul class="tasks">

                                            <li>
                                                <span class="task-icon" title="上传头像"><img
                                                            src="//img.dwstatic.com/huya/questcenter/icon/xinshou_touxiang.png"
                                                            alt="icon"></span>
                                                <p class="task-name" title="上传头像">设置头像</p>

                                                <a class="task-btn done" href="#">完成</a>

                                            </li>

                                            <li>

                                                <span class="task-icon" title="对心爱的主播送出虎粮"><img
                                                            src="//img.dwstatic.com/huya/questcenter/icon/xinshou_songli.png"
                                                            alt="icon"></span>
                                                <p class="task-name" title="对心爱的主播送出虎粮">送出虎粮</p>

                                                <a class="task-btn ing" href="#">0/1</a>

                                            </li>

                                            <li>

                                                <span class="task-icon" title="前三项任务全部完成"><img
                                                            src="//img.dwstatic.com/huya/questcenter/icon/xinshou_ewai.png"
                                                            alt="icon"></span>
                                                <p class="task-name" title="前三项任务全部完成">额外奖励</p>

                                                <a class="task-btn ing" href="#">1/3</a>

                                            </li>

                                        </ul>

                                    </div>
                                </div>
                            </div>
                            <div class="u-links">
                                <ul>
                                    <li class="links-i">
                                        <a href="http://i.huya.com/" target="_blank" class="new-clickstat"
                                           report="{&quot;eid&quot;:&quot;click/position&quot;,&quot;position&quot;:&quot;header/usercard/entrance1&quot;}">
                                            <i></i>
                                            <p>个人中心</p>
                                        </a>
                                    </li>
                                    <li class="links-noble">
                                        <a href="http://i.huya.com/index.php?m=NobleSys" target="_blank"
                                           report="{&quot;eid&quot;:&quot;click/position&quot;,&quot;position&quot;:&quot;header/usercard/entrance2&quot;}">
                                            <i></i>
                                            <p>我的贵族</p>
                                        </a>
                                    </li>
                                    <li class="links-play">
                                        <a href="http://www.huya.com/e/zhubo" target="_blank"
                                           report="{&quot;eid&quot;:&quot;click/position&quot;,&quot;position&quot;:&quot;header/usercard/entrance4&quot;}">
                                            <i></i>
                                            <p>我要直播</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end -->
                    </div>
                </div>
            </div>
            <div class="duya-header-tips">
                <em class="close-tips">&times;</em>
                <p class="tips-top">有新的直播内容，<span class="refresh-current">刷新看看</span></p>
                <div id="refresh-wrap">
                    <h5>你订阅的主播信息</h5>
                    <div class="refresh-tips"></div>
                    <h6><input type="checkbox" id="checkTips"><label for="checkTips">今天内不提醒</label></h6>
                </div>
            </div>
        </div>
    </div>