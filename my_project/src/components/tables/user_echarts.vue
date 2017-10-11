<template>
    <!--这里是html代码-->
    <div class="main-content">
        <div id="breadcrumbs" class="breadcrumbs">
            <ul class="breadcrumb">
                <li><i class="icon-home home-icon"></i> <a href="#">Home</a></li>
                <li><a href="#">信息统计</a></li>
                <li class="active">用户统计</li>
            </ul>
            <div id="nav-search" class="nav-search">
                <form class="form-search"><span class="input-icon"><input type="text" autocomplete="off"
                                                                          id="nav-search-input" placeholder="查询 ..."
                                                                          class="nav-search-input"> <i
                        class="icon-search nav-search-icon"></i></span></form>
            </div>
        </div>
        <div class="page-content">
            <div class="page-header">
                <h1>
                    统计图
                    <small><i class="icon-double-angle-right"></i>
                        用户统计
                    </small>
                </h1>
            </div>
            <div class="row">
                <select v-on:change="province_change" id="province_change">
                    <option value="">全部地区</option>
                    <option value="东北">东北地区</option>
                    <option value="华中">华中地区</option>
                    <option value="华北">华北地区</option>
                    <option value="华南">华南地区</option>
                    <option value="西北">西北地区</option>
                    <option value="西南">西南地区</option>
                </select>
                <input type="date" class="layui-input" id="date_where" v-on:change="province_change">
                <div id="main_echarts" style="width: 800px;height:400px;"></div>
            </div>
        </div>
    </div>
</template>

<script>

    export default {
        data () {
            return {
                message: '',
                title_province: '用户地区echarts统计',
                province_val: [],
                province_num: [],
                where: Object(),
                title_date: '用户时间echarts统计',
                date_val: [],
                date_num: [],
            }
        },
        created()
        {
            //读取用户数据
            user_echarts(this)
        },
        mounted()
        {

        },
        methods: {
            province_change()
            {
                this.where['home'] = $('#province_change').val()
                this.where['user_addTime'] = $('#date_where').val()
                //读取用户数据
                user_echarts(this)
            },
            drawLine(title){
                // 基于准备好的dom，初始化echarts实例
                let myChart = this.$echarts.init(document.getElementById('main_echarts'))
                // 绘制图表
                myChart.setOption({
                    title: {text: title},
                    tooltip: {},
                    xAxis: {
                        data: this.province_val
                    },
                    yAxis: {},
                    series: [{
                        name: '注册量',
                        type: 'bar',
                        data: this.province_num
                    }]
                });
            }
        },
        user_date()
        {
            //时间查询
        }
    }

    //统计用户注册信息
    function user_echarts(thi) {
        $.ajax({
            dataType: 'jsonp',
            url: host + '?r=user/user_echarts',
            data: thi.where,
            success: function (e) {
                if (e.error == '200') {
                    var val = []
                    var num = []
                    var i = 0
                    $.each(e.msg, function (a, s) {
                        num[i] = s.num
                        val[i] = s.home
                        i++
                    })
                    thi.province_val = val
                    thi.province_num = num
                    thi.drawLine(thi.title_province)
                } else {
                    alert(e.msg)
                }
            }
        })
    }

</script>

<style>
    /*引入css文件*/
    /*import '/static/css/easydialog.min.css';*/

</style>


<!--
 * 
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/11, 作者: 降省心(QQ:1348550820), 操作:创建
 -->