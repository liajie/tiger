<template>
    <!--这里是html代码-->
    <div class="main-content">
        <div id="breadcrumbs" class="breadcrumbs">
            <ul class="breadcrumb">
                <li><i class="icon-home home-icon"></i> <a href="#">Home</a></li>
                <li><a href="#">添加管理</a></li>
                <li class="active">新闻 &amp; 添加页</li>
            </ul>
            <div id="nav-search" class="nav-search">
                <form class="form-search"><span class="input-icon"><input type="text" autocomplete="off"
                                                                          id="nav-search-input" placeholder="Search ..."
                                                                          class="nav-search-input"> <i
                        class="icon-search nav-search-icon"></i></span></form>
            </div>
        </div>
        <div class="page-content">
            <div class="page-header"><h1>在这里 &amp; 对新闻进行添加 </h1></div>
            <div class="row">
                <div class="col-xs-12">
                    <h4 class="header green clearfix">
                        文本编辑区
                        </h4>
                    <div id="editor" class="wysiwyg-editor">

                    </div>
                    <div class="widget-toolbox padding-4 clearfix">
                        <div class="btn-group pull-left">
                            <button v-on:click="clear_news" class="btn btn-sm btn-info"><i class="icon-remove bigger-125"></i>
                                清空
                            </button>
                        </div>
                        <div class="btn-group pull-right">
                            <button v-on:click="save_news" class="btn btn-sm btn-purple"><i class="icon-save bigger-125"></i>
                                保存
                            </button>
                            &nbsp;
                        </div>
                        <div class="btn-group pull-right">
                            <select id="form-field-select-1" class="form-control">
                                <option value="1">选择新闻分类</option>
                                <option v-for="li in lis" v-bind:value="li.newsClass_id">
                                    {{li.newsClass_name}}
                                </option>
                            </select>
                        </div>
                        <div class="btn-group pull-right">
                            <input type="text" placeholder="新闻标题" id="news_name"/>
                        </div>
                    </div>
                    <div class="hr hr-double dotted"></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: 'form_new_add',
        data () {
            return {
                lis: {},
            }
        },
        created()
        {
            //实例化编辑器
            //建议使用工厂方法getEditor创建和引用编辑器实例，如果在某个闭包下引用该编辑器，直接调用UE.getEditor('editor')就能拿到相关的实例
            var ue = UE.getEditor('editor');
            class_find(this)
        },
        methods:
        {
            //清空
            clear_news()
            {
                $('#editor').html('')
            },
            //保存新闻
            save_news()
            {
                var news_text = getContent()
                var news_classId = $('#form-field-select-1').val()
                var news_name = $('#news_name').val()
                $.ajax({
                    dataType:'jsonp',
                    url:host+'?r=new/new_add',
                    data:{news_text:news_text,news_classId:news_classId,news_name:news_name},
                    success:function(e)
                    {
                        common(e.error)
                        alert(e.msg)
                        if(e.error=='200')
                        {
                            $('#editor').html('')
                        }
                    }
                })
            }
        }
    }


    //获得编辑器的内容
    function getContent() {
        var arr = [];
        arr.push(UE.getEditor('editor').getContent());
        return arr.join("\n")
    }

    //获取新闻分类
    function class_find(thi) {
        $.ajax({
            dataType:'jsonp',
            url:host+'?r=new/class_find',
            success:function(e)
            {
                common(e.error)
                if(e.error=='200')
                {
                    thi.lis = e.msg
                }else
                {
                    alert(e.msg)
                }
                //console.log(e.msg)
            }
        })
    }

</script>

<style>
    /*引入css文件*/
    /*import '/static/css/easydialog.min.css';*/

</style>
<!--
 * form_new_add
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/4, 作者: 降省心(QQ:1348550820), 操作:创建
 -->