<template>
    <!--这里是html代码-->
    <div class="main-content">
        <div id="breadcrumbs" class="breadcrumbs">

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="#">Home</a>
                </li>

                <li>
                    <a href="#">新闻列表</a>
                </li>
                <li class="active">新闻 &amp; 分类</li>
            </ul><!-- .breadcrumb -->

            <div id="nav-search" class="nav-search">
                <form class="form-search">
								<span class="input-icon">
									<input type="text" autocomplete="off" id="nav-search-input" class="nav-search-input"
                                           placeholder="Search ...">
									<i class="icon-search nav-search-icon"></i>
								</span>
                </form>
            </div><!-- #nav-search -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    新闻分类
                    <small>
                        <i class="icon-double-angle-right"></i>
                        新闻 &amp; 分类管理
                    </small>
                </h1>
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="sample-table-1">
                                    <thead>
                                    <tr>
                                        <th class="center">
                                            <label>
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </th>
                                        <th width="20%">ID</th>
                                        <th width="50%">名称</th>
                                        <th>操作</th>
                                    </tr>
                                    </thead>

                                    <tbody>

                                    <tr v-for="li in lis" v-bind:id="'class_'+li.newsClass_id">
                                        <td class="center">
                                            <label>
                                                <input type="checkbox" class="ace">
                                                <span class="lbl"></span>
                                            </label>
                                        </td>

                                        <td>
                                            <a href="#">{{li.newsClass_id}}</a>
                                        </td>
                                        <td v-bind:id="'class_nameUpd_'+li.newsClass_id">{{li.newsClass_name}}</td>
                                        <td>
                                            <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">

                                                <button class="btn btn-xs btn-info" v-on:click="class_upd(li.newsClass_id)">
                                                    <i class="icon-edit bigger-120"></i>
                                                </button>

                                                <button class="btn btn-xs btn-danger" v-on:click="class_del(li.newsClass_id)">
                                                    <i class="icon-trash bigger-120"></i>
                                                </button>
                                            </div>

                                            <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                <div class="inline position-relative">
                                                    <button data-toggle="dropdown"
                                                            class="btn btn-minier btn-primary dropdown-toggle">
                                                        <i class="icon-cog icon-only bigger-110"></i>
                                                    </button>

                                                    <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                        <li>
                                                            <a title="" data-rel="tooltip" class="tooltip-info" href="#"
                                                               data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a title="" data-rel="tooltip" class="tooltip-success"
                                                               href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
                                                            </a>
                                                        </li>

                                                        <li>
                                                            <a title="" data-rel="tooltip" class="tooltip-error"
                                                               href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /span -->
                    </div><!-- /row -->

                    <div class="hr hr-18 dotted hr-double"></div>

                    <h4 class="pink">
                        <i class="icon-hand-right icon-animated-hand-pointer blue"></i>
                        <a data-toggle="modal" class="green" role="button" href="#modal-table">
                            新闻列表&新闻内容 </a>
                    </h4>

                    <div class="hr hr-18 dotted hr-double"></div>

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="header smaller lighter blue">列表...</h3>
                            <div class="table-header">
                                这是新闻列表...
                            </div>

                            <div class="table-responsive">
                                <div role="grid" class="dataTables_wrapper" id="sample-table-2_wrapper">
                                    <div class="row">
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="dataTables_filter" id="sample-table-2_filter">
                                                <label>查询: <input type="text" aria-controls="sample-table-2"></label></div>
                                        </div>
                                    </div>
                                    <table class="table table-striped table-bordered table-hover dataTable"
                                           id="sample-table-2" aria-describedby="sample-table-2_info">
                                        <thead>
                                        <tr role="row">
                                            <th class="center sorting_disabled" role="columnheader" rowspan="1"
                                                colspan="1" style="width: 61px;" aria-label="




														">
                                                <label>
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0"
                                                aria-controls="sample-table-2" rowspan="1" colspan="1"
                                                style="width: 170px;"
                                                aria-label="Domain: activate to sort column ascending">新闻标题
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0"
                                                aria-controls="sample-table-2" rowspan="1" colspan="1"
                                                style="width: 116px;"
                                                aria-label="Price: activate to sort column ascending">新闻分类
                                            </th>
                                            <th class="hidden-480 sorting" role="columnheader" tabindex="0"
                                                aria-controls="sample-table-2" rowspan="1" colspan="1"
                                                style="width: 126px;"
                                                aria-label="Clicks: activate to sort column ascending">添加时间
                                            </th>
                                            <th class="sorting" role="columnheader" tabindex="0"
                                                aria-controls="sample-table-2" rowspan="1" colspan="1"
                                                style="width: 189px;" aria-label="

															Update
														: activate to sort column ascending">
                                                <i class="icon-time bigger-110 hidden-480"></i>
                                                路径
                                            </th>
                                            <th class="hidden-480 sorting" role="columnheader" tabindex="0"
                                                aria-controls="sample-table-2" rowspan="1" colspan="1"
                                                style="width: 163px;"
                                                aria-label="Status: activate to sort column ascending">状态
                                            </th>
                                            <th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1"
                                                style="width: 174px;" aria-label=""></th>
                                        </tr>
                                        </thead>


                                        <tbody role="alert" aria-live="polite" aria-relevant="all">
                                        <tr class="odd">
                                            <td class="center  sorting_1">
                                                <label>
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                            <td class=" ">
                                                <a href="#">app.com</a>
                                            </td>
                                            <td class=" ">$45</td>
                                            <td class="hidden-480 ">3,330</td>
                                            <td class=" ">Feb 12</td>

                                            <td class="hidden-480 ">
                                                <span class="label label-sm label-warning">Expiring</span>
                                            </td>

                                            <td class=" ">
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>

                                                    <a href="#" class="green">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="icon-trash bigger-130"></i>
                                                    </a>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button data-toggle="dropdown"
                                                                class="btn btn-minier btn-yellow dropdown-toggle">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a title="" data-rel="tooltip" class="tooltip-info"
                                                                   href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a title="" data-rel="tooltip" class="tooltip-success"
                                                                   href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a title="" data-rel="tooltip" class="tooltip-error"
                                                                   href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even">
                                            <td class="center  sorting_1">
                                                <label>
                                                    <input type="checkbox" class="ace">
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>

                                            <td class=" ">
                                                <a href="#">base.com</a>
                                            </td>
                                            <td class=" ">$35</td>
                                            <td class="hidden-480 ">2,595</td>
                                            <td class=" ">Feb 18</td>

                                            <td class="hidden-480 ">
                                                <span class="label label-sm label-success">Registered</span>
                                            </td>

                                            <td class=" ">
                                                <div class="visible-md visible-lg hidden-sm hidden-xs action-buttons">
                                                    <a href="#" class="blue">
                                                        <i class="icon-zoom-in bigger-130"></i>
                                                    </a>

                                                    <a href="#" class="green">
                                                        <i class="icon-pencil bigger-130"></i>
                                                    </a>

                                                    <a href="#" class="red">
                                                        <i class="icon-trash bigger-130"></i>
                                                    </a>
                                                </div>

                                                <div class="visible-xs visible-sm hidden-md hidden-lg">
                                                    <div class="inline position-relative">
                                                        <button data-toggle="dropdown"
                                                                class="btn btn-minier btn-yellow dropdown-toggle">
                                                            <i class="icon-caret-down icon-only bigger-120"></i>
                                                        </button>

                                                        <ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
                                                            <li>
                                                                <a title="" data-rel="tooltip" class="tooltip-info"
                                                                   href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a title="" data-rel="tooltip" class="tooltip-success"
                                                                   href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>

                                                            <li>
                                                                <a title="" data-rel="tooltip" class="tooltip-error"
                                                                   href="#" data-original-title="Delete">
																				<span class="red">
																					<i class="icon-trash bigger-120"></i>
																				</span>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="dataTables_info" id="sample-table-2_info">
                                                <!--Showing 1 to 10 of 23 entries-->
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="dataTables_paginate paging_bootstrap">
                                                <ul class="pagination">
                                                    <li class="prev disabled"><a href="#"><i
                                                            class="icon-double-angle-left"></i></a></li>
                                                    <li class="active"><a href="#">1</a></li>
                                                    <li class="next"><a href="#"><i class="icon-double-angle-right"></i></a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>
</template>

<script>
    export default {
        name: 'news_list',
        data () {
            return {
                message: '',
                lis:{},
            }
        },
        created()
        {
            class_find(this)
        },
        methods:
        {
            //修改
            class_upd(class_id)
            {
                var class_name = $('#class_nameUpd_'+class_id)
                if(!class_name.children('input').length)
                {
                    class_name.html('<input type="text" value="'+class_name.html()+'"/>')
                }else
                {
                    var class_nameVal = class_name.children(1).val()
                    $.ajax({
                        dataType:'jsonp',
                        url:host+'?r=new/class_upd',
                        data:{newsClass_id:class_id,newsClass_name:class_nameVal},
                        success:function (e) {
                            console.log(e)
                            common(e.error)
                            if(e.error=='200')
                            {
                                class_name.html(class_nameVal)
                            }
                            alert(e.msg)
                        }
                    })
                }
            },
            //删除
            class_del(class_id)
            {
                if(confirm('确认删除ID:'+class_id))
                {
                    $.ajax({
                        dataType:'jsonp',
                        url:host+'?r=new/class_del',
                        data:{newsClass_id:class_id},
                        success:function (e) {
                            common(e.error)
                            if(e.error=='200')
                            {
                                $('#class_'+class_id).remove()
                            }
                            alert(e.msg)
                        }
                    })
                }
            }
        }
    }

    //加载分类
    function class_find(thi) {
        $.ajax({
            dataType:'jsonp',
            url:host+'?r=new/class_find',
            success:function (e) {
                common(e.error)
                if(e.error=='200')
                {
                    thi.lis = e.msg
                }else
                {
                    alert(e.msg)
                }
            }
        })
    }

    try {
        ace.settings.check('breadcrumbs', 'fixed')
    } catch (e) {
    }
</script>

<style>
    /*引入css文件*/
    /*import '/static/css/easydialog.min.css';*/

</style>


<!--
 * news_list
 *
 * ...
 *
 * 2017 Copyright (c) http://note.hanfu8.top
 *
 * 修改历史
 * ----------------------------------------
 * 2017/10/5, 作者: 降省心(QQ:1348550820), 操作:创建
 -->