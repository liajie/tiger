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
                        <span class="block pull-right"><small class="grey middle">Choose style: &nbsp;</small> <span
                                class="btn-toolbar inline middle no-margin"><span data-toggle="buttons"
                                                                                  class="btn-group no-margin"><label
                                class="btn btn-sm btn-yellow">
													1
													<input type="radio" value="1"></label> <label
                                class="btn btn-sm btn-yellow active">
													2
													<input type="radio" value="2"></label> <label
                                class="btn btn-sm btn-yellow">
													3
													<input type="radio" value="3"></label></span></span></span></h4>
                    <div class="wysiwyg-toolbar btn-toolbar center wysiwyg-style2">
                        <div class="btn-group"><a title="" data-toggle="dropdown" data-original-title="Font"
                                                  class="btn btn-sm  dropdown-toggle"><i class="icon-font"></i><i
                                class="icon-angle-down icon-on-right"></i></a>
                            <ul class="dropdown-menu dropdown-light">
                                <li><a data-edit="fontName Arial" style="font-family: &quot;Arial&quot;;">Arial</a></li>
                                <li><a data-edit="fontName Courier"
                                       style="font-family: &quot;Courier&quot;;">Courier</a></li>
                                <li><a data-edit="fontName Comic Sans MS"
                                       style="font-family: &quot;Comic Sans MS&quot;;">Comic Sans MS</a></li>
                                <li><a data-edit="fontName Helvetica" style="font-family: &quot;Helvetica&quot;;">Helvetica</a>
                                </li>
                                <li><a data-edit="fontName Open Sans" style="font-family: &quot;Open Sans&quot;;">Open Sans</a>
                                </li>
                                <li><a data-edit="fontName Tahoma" style="font-family: &quot;Tahoma&quot;;">Tahoma</a>
                                </li>
                                <li><a data-edit="fontName Verdana"
                                       style="font-family: &quot;Verdana&quot;;">Verdana</a></li>
                            </ul>
                        </div>
                        <div class="btn-group"><a title="" data-toggle="dropdown" data-original-title="Font Size"
                                                  class="btn btn-sm  dropdown-toggle"><i class="icon-text-height"></i>&nbsp;<i
                                class="icon-angle-down icon-on-right"></i></a>
                            <ul class="dropdown-menu dropdown-light">
                                <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>
                                <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>
                                <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>
                            </ul>
                        </div>
                        <div class="btn-group"><a title="" data-edit="bold" data-original-title="Bold (Ctrl/Cmd+B)"
                                                  class="btn btn-sm btn-info"><i class="icon-bold"></i></a> <a title=""
                                                                                                               data-edit="italic"
                                                                                                               data-original-title="Italic (Ctrl/Cmd+I)"
                                                                                                               class="btn btn-sm btn-info"><i
                                class="icon-italic"></i></a> <a title="" data-edit="strikethrough"
                                                                data-original-title="Strikethrough"
                                                                class="btn btn-sm btn-info"><i
                                class="icon-strikethrough"></i></a> <a title="" data-edit="underline"
                                                                       data-original-title="Underline"
                                                                       class="btn btn-sm btn-info"><i
                                class="icon-underline"></i></a></div>
                        <div class="btn-group"><a title="" data-edit="insertunorderedlist"
                                                  data-original-title="Bullet list" class="btn btn-sm btn-success"><i
                                class="icon-list-ul"></i></a> <a title="" data-edit="insertorderedlist"
                                                                 data-original-title="Number list"
                                                                 class="btn btn-sm btn-success"><i
                                class="icon-list-ol"></i></a> <a title="" data-edit="outdent"
                                                                 data-original-title="Reduce indent (Shift+Tab)"
                                                                 class="btn btn-sm btn-purple"><i
                                class="icon-indent-left"></i></a> <a title="" data-edit="indent"
                                                                     data-original-title="Indent (Tab)"
                                                                     class="btn btn-sm btn-purple"><i
                                class="icon-indent-right"></i></a></div>
                        <div class="btn-group"><a title="" data-edit="justifyleft"
                                                  data-original-title="Align Left (Ctrl/Cmd+L)"
                                                  class="btn btn-sm btn-primary active"><i class="icon-align-left"></i></a>
                            <a title="" data-edit="justifycenter" data-original-title="Center (Ctrl/Cmd+E)"
                               class="btn btn-sm btn-primary"><i class="icon-align-center"></i></a> <a title=""
                                                                                                       data-edit="justifyright"
                                                                                                       data-original-title="Align Right (Ctrl/Cmd+R)"
                                                                                                       class="btn btn-sm btn-primary"><i
                                    class="icon-align-right"></i></a> <a title="" data-edit="justifyfull"
                                                                         data-original-title="Justify (Ctrl/Cmd+J)"
                                                                         class="btn btn-sm btn-inverse"><i
                                    class="icon-align-justify"></i></a></div>
                        <div class="btn-group">
                            <div class="inline position-relative"><a title="" data-toggle="dropdown"
                                                                     data-original-title="Hyperlink"
                                                                     class="btn btn-sm btn-pink dropdown-toggle"><i
                                    class="icon-link"></i></a>
                                <div class="dropdown-menu dropdown-caret pull-right">
                                    <div class="input-group"><input type="text" data-edit="createLink" placeholder="URL"
                                                                    class="form-control"> <span class="input-group-btn"><button
                                            type="button" class="btn btn-sm btn-primary">Add</button></span></div>
                                </div>
                            </div>
                            <a title="" data-edit="unlink" data-original-title="Remove Hyperlink"
                               class="btn btn-sm btn-pink"><i class="icon-unlink"></i></a></div>
                        <div class="btn-group">
                            <div class="inline position-relative"><a title="" data-toggle="dropdown"
                                                                     data-original-title="Insert picture"
                                                                     class="btn btn-sm btn-success dropdown-toggle"><i
                                    class="icon-picture"></i></a>
                                <div class="dropdown-menu dropdown-caret pull-right">
                                    <div class="input-group"><input type="text" data-edit="insertImage"
                                                                    placeholder="Image URL" class="form-control"> <span
                                            class="input-group-btn"><button type="button"
                                                                            class="btn btn-sm btn-primary">Insert</button></span>
                                    </div>
                                    <div class="space-2"></div>
                                    <div class="center">
                                        <button type="button" class="btn btn-sm btn-success wysiwyg-choose-file"><i
                                                class="icon-file"></i> Choose Image …
                                        </button>
                                        <input type="file" data-edit="insertImage"></div>
                                </div>
                            </div>
                        </div>
                        <div class="btn-group"><select title="Change Color" class="hide wysiwyg_colorpicker"
                                                       style="display: none;">
                            <option value="#ac725e">#ac725e</option>
                            <option value="#d06b64">#d06b64</option>
                            <option value="#f83a22">#f83a22</option>
                            <option value="#fa573c">#fa573c</option>
                            <option value="#ff7537">#ff7537</option>
                            <option value="#ffad46">#ffad46</option>
                            <option value="#42d692">#42d692</option>
                            <option value="#16a765">#16a765</option>
                            <option value="#7bd148">#7bd148</option>
                            <option value="#b3dc6c">#b3dc6c</option>
                            <option value="#fbe983">#fbe983</option>
                            <option value="#fad165">#fad165</option>
                            <option value="#92e1c0">#92e1c0</option>
                            <option value="#9fe1e7">#9fe1e7</option>
                            <option value="#9fc6e7">#9fc6e7</option>
                            <option value="#4986e7">#4986e7</option>
                            <option value="#9a9cff">#9a9cff</option>
                            <option value="#b99aff">#b99aff</option>
                            <option value="#c2c2c2">#c2c2c2</option>
                            <option value="#cabdbf">#cabdbf</option>
                            <option value="#cca6ac">#cca6ac</option>
                            <option value="#f691b2">#f691b2</option>
                            <option value="#cd74e6">#cd74e6</option>
                            <option value="#a47ae2">#a47ae2</option>
                            <option value="#444444">#444444</option>
                        </select>
                            <div class="dropdown dropdown-colorpicker"><a href="#" data-toggle="dropdown"
                                                                          class="dropdown-toggle"><span
                                    data-original-title="" title="" class="btn-colorpicker"
                                    style="background-color: rgb(172, 114, 94);"></span></a>
                                <ul class="dropdown-menu dropdown-caret pull-right">
                                    <li><a data-color="#ac725e" href="#" class="colorpick-btn selected"
                                           style="background-color: rgb(172, 114, 94);"></a></li>
                                    <li><a data-color="#d06b64" href="#" class="colorpick-btn"
                                           style="background-color: rgb(208, 107, 100);"></a></li>
                                    <li><a data-color="#f83a22" href="#" class="colorpick-btn"
                                           style="background-color: rgb(248, 58, 34);"></a></li>
                                    <li><a data-color="#fa573c" href="#" class="colorpick-btn"
                                           style="background-color: rgb(250, 87, 60);"></a></li>
                                    <li><a data-color="#ff7537" href="#" class="colorpick-btn"
                                           style="background-color: rgb(255, 117, 55);"></a></li>
                                    <li><a data-color="#ffad46" href="#" class="colorpick-btn"
                                           style="background-color: rgb(255, 173, 70);"></a></li>
                                    <li><a data-color="#42d692" href="#" class="colorpick-btn"
                                           style="background-color: rgb(66, 214, 146);"></a></li>
                                    <li><a data-color="#16a765" href="#" class="colorpick-btn"
                                           style="background-color: rgb(22, 167, 101);"></a></li>
                                    <li><a data-color="#7bd148" href="#" class="colorpick-btn"
                                           style="background-color: rgb(123, 209, 72);"></a></li>
                                    <li><a data-color="#b3dc6c" href="#" class="colorpick-btn"
                                           style="background-color: rgb(179, 220, 108);"></a></li>
                                    <li><a data-color="#fbe983" href="#" class="colorpick-btn"
                                           style="background-color: rgb(251, 233, 131);"></a></li>
                                    <li><a data-color="#fad165" href="#" class="colorpick-btn"
                                           style="background-color: rgb(250, 209, 101);"></a></li>
                                    <li><a data-color="#92e1c0" href="#" class="colorpick-btn"
                                           style="background-color: rgb(146, 225, 192);"></a></li>
                                    <li><a data-color="#9fe1e7" href="#" class="colorpick-btn"
                                           style="background-color: rgb(159, 225, 231);"></a></li>
                                    <li><a data-color="#9fc6e7" href="#" class="colorpick-btn"
                                           style="background-color: rgb(159, 198, 231);"></a></li>
                                    <li><a data-color="#4986e7" href="#" class="colorpick-btn"
                                           style="background-color: rgb(73, 134, 231);"></a></li>
                                    <li><a data-color="#9a9cff" href="#" class="colorpick-btn"
                                           style="background-color: rgb(154, 156, 255);"></a></li>
                                    <li><a data-color="#b99aff" href="#" class="colorpick-btn"
                                           style="background-color: rgb(185, 154, 255);"></a></li>
                                    <li><a data-color="#c2c2c2" href="#" class="colorpick-btn"
                                           style="background-color: rgb(194, 194, 194);"></a></li>
                                    <li><a data-color="#cabdbf" href="#" class="colorpick-btn"
                                           style="background-color: rgb(202, 189, 191);"></a></li>
                                    <li><a data-color="#cca6ac" href="#" class="colorpick-btn"
                                           style="background-color: rgb(204, 166, 172);"></a></li>
                                    <li><a data-color="#f691b2" href="#" class="colorpick-btn"
                                           style="background-color: rgb(246, 145, 178);"></a></li>
                                    <li><a data-color="#cd74e6" href="#" class="colorpick-btn"
                                           style="background-color: rgb(205, 116, 230);"></a></li>
                                    <li><a data-color="#a47ae2" href="#" class="colorpick-btn"
                                           style="background-color: rgb(164, 122, 226);"></a></li>
                                    <li><a data-color="#444444" href="#" class="colorpick-btn"
                                           style="background-color: rgb(68, 68, 68);"></a></li>
                                </ul>
                            </div>
                            <input type="text" data-edit="foreColor" disabled="disabled" class="hide"
                                   style="display: none;"></div>
                        <div class="btn-group"><a title="" data-edit="undo" data-original-title="Undo (Ctrl/Cmd+Z)"
                                                  class="btn btn-sm btn-grey"><i class="icon-undo"></i></a> <a title=""
                                                                                                               data-edit="redo"
                                                                                                               data-original-title="Redo (Ctrl/Cmd+Y)"
                                                                                                               class="btn btn-sm btn-grey"><i
                                class="icon-repeat"></i></a></div>
                    </div>
                    <div contenteditable="true" id="editor1" class="wysiwyg-editor">
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
            class_find(this)
        },
        methods:
        {
            //清空
            clear_news()
            {
                $('#editor1').html('')
            },
            //保存新闻
            save_news()
            {
                var news_text = $('#editor1').html()
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
                            $('#editor1').html('')
                        }
                    }
                })
            }
        }
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
                console.log(e.msg)
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