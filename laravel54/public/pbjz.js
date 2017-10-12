/**
 * Created by 降省新 on 2017/10/12.
 */
$(function () {
    //box元素内部追加
    var container = $("#box_father");
    //循环输出的元素
    var loading = $(".box_son");

    // 初始化loading状态
    var loading_start = false;
    //滚动条触发方法
    $(window).scroll(function () {
        if (loading_start) return false;
        // 计算所有瀑布流块中距离顶部最大，进而在滚动条滚动时，来进行ajax请求
        var itemNum=$('#box_father').find('.box_son').length;
        //计算要开始加载的位置
        var maxTop = loading.eq(-2).offset().top;
        //当前滚动条的位置
        var current_Top = $(window).height() + $(document).scrollTop()
        //开始调用ajax进行追加元素
        if (maxTop > current_Top) {
            //加载更多数据
            loading_start = true
            //当被追加元素大于30时,停止请求数据
            if (itemNum > 30) {
                alert("没有啦")
            } else {
                /*模拟ajax请求数据时延时800毫秒*/
                var time = setTimeout(function () {
                    $.ajax({
                        dataType:"json",
                        url:"/?r=search/search_find",
                        data:{pa:itemNum},
                        success:function (e) {
                            //判断响应,赋值
                            if(e.error=="200")
                            {
                                //拼接数据
                                $.each(e.msg,function (i,s) {
                                    var HTML = '<li class="game-live-item box_son" gid="2336"><a href="'+s.channel_id+'" class="video-info new-clickstat" target="_blank"><img class="pic ldjz" src="'+s.channel_images+'" data-src="'+s.channel_images+'" alt="'+s.username+'" title=""><em class="tag tag-recommend">白金推荐</em><div class="item-mask"></div><i class="btn-link__hover_i"></i></a><a href="/'+s.channel_id+'" class="title new-clickstat" report="{"eid":"click/position","position":"search/综合/推荐直播/1","game_id":"2336","ayyuid":"12837293"}" title="挑战8h青铜—王者，输送iphone8" target="_blank">'+s.sign+'</a><span class="txt"><span class="avatar fl"><img data-original="//huyaimg.msstatic.com/avatar/1035/7d/9c4ebef7e55c51562e08ef3424d62f_180_135.jpg" src="images/84x84.jpg" onerror="this.onerror=null; this.src="images/84x84.jpg";" alt="'+s.username+'" title="'+s.username+'"><i class="nick" title="'+s.username+'">'+s.username+'</i></span><span class="game-type fr"><a target="_blank" href="http://www.huya.com/g/wzry" title="'+s.username+'">'+s.channel_name+'</a></span> <span class="num"><i class="num-icon"></i><i class="js-num">48.7万</i></span> </span></li>'
                                    //内部追加
                                    container.append(HTML)
                                })
                            }
                        }
                    })
                    loading_start = false;
                    clearTimeout(time);
                }, 800)
            }
        }
    })

})
