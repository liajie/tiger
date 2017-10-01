<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>

							<li>
								<a href="#">频道</a>
							</li>
							<li class="active">分类 &amp; 频道</li>
						</ul><!-- .breadcrumb -->

						<div id="nav-search" class="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" autocomplete="off" id="nav-search-input" class="nav-search-input" placeholder="查询频道:名称">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								频道分类
								<small>
									<i class="icon-double-angle-right"></i>
									热门分类 &amp; 玩家推荐
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
																<input type="checkbox" class="ace" v-on:click="ace_a">
																<span class="lbl"></span>
															</label>
														</th>
														<th>id</th>
														<th>频道名称</th>
														<th class="hidden-480">等级</th>

														<th>
															<i class="icon-time bigger-110 hidden-480"></i>
															修改时间
														</th>

														<th>操作</th>
													</tr>
												</thead>

												<tbody>
													<tr v-for="li in lis" v-bind:class_id="li.class_id" v-bind:id="'live_class'+li.class_id">
														<td class="center">
															<label>
																<input type="checkbox" class="ace ace_a">
																<span class="lbl"></span>
															</label>
														</td>

														<td>
															<a href="#">{{li.class_id}}</a>
														</td>
														<td v-on:click='class_upd(li)' v-html="li.class_name">{{li.class_name}}</td>
														<td class="hidden-480">{{li.class_parent}}</td>
														<td>{{li.class_addTime}}</td>
														<td>
															<div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
																<!--<button class="btn btn-xs btn-success">
																	<i class="icon-ok bigger-120"></i>
																</button>-->

																<button class="btn btn-xs btn-info" @click="class_upd_d(li)">
																	<i class="icon-edit bigger-120">修改</i>
																</button>

																<button class="btn btn-xs btn-danger" v-on:click="class_del(li.class_id)">
																	<i class="icon-trash bigger-120">删除</i>
																</button>

																<!--<button class="btn btn-xs btn-warning">
																	<i class="icon-flag bigger-120"></i>
																</button>-->
															</div>

															<div class="visible-xs visible-sm hidden-md hidden-lg">
																<div class="inline position-relative">
																	<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
																		<i class="icon-cog icon-only bigger-110"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
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

								<!--<h4 class="pink">
									<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
									<a data-toggle="modal" class="green" role="button" href="#modal-table"> Table Inside a Modal Box </a>
								</h4>-->

								<!--<div class="hr hr-18 dotted hr-double"></div>-->

								<div class="row">
									<div class="col-xs-12">
										<h3 class="header smaller lighter blue">这是主播频道列表</h3>
										<div class="table-header">
											列表排序按照最新注册倒序显示
										</div>

										<div class="table-responsive">
											<div role="grid" class="dataTables_wrapper" id="sample-table-2_wrapper"><div class="row"><div class="col-sm-6"><div id="sample-table-2_length" class="dataTables_length">
												<label>每页 
													<select name="sample-table-2_length" v-model="num" v-on:change="select_sample" size="1" aria-controls="sample-table-2" id="select_num">
														<option value="10" selected="selected">10</option>
														<option value="25">25</option>
														<option value="50">50</option>
														<option value="100">100</option>
													</select> 条记录</label></div></div>
													<div class="col-sm-6"><div class="dataTables_filter" id="sample-table-2_filter">
														<label>查寻: <input type="text" id='live_channel_find' aria-controls="sample-table-2"></label></div></div></div><table class="table table-striped table-bordered table-hover dataTable" id="sample-table-2" aria-describedby="sample-table-2_info">
												<thead>
													<tr role="row">
														<th class="center sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 61px;" aria-label="">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</th>
														<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 170px;" aria-label="Domain: activate to sort column ascending">ID</th>
														<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 116px;" aria-label="Price: activate to sort column ascending">图像</th>
														<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 126px;" aria-label="Clicks: activate to sort column ascending">频道名称</th>
														<th class="sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 189px;" aria-label="Update: activate to sort column ascending">
															<i class="icon-time bigger-110 hidden-480"></i>
															主播
														</th>
														<th class="hidden-480 sorting" role="columnheader" tabindex="0" aria-controls="sample-table-2" rowspan="1" colspan="1" style="width: 163px;" aria-label="Status: activate to sort column ascending">频道类型</th>
														<th class="sorting_disabled" role="columnheader" rowspan="1" colspan="1" style="width: 174px;" aria-label="">操作</th>
													</tr>
												</thead>

												
											<tbody role="alert" aria-live="polite" aria-relevant="all">
												
												<tr class="odd" v-for="lib in liDs">
														<td class="center  sorting_1">
															<label>
																<input type="checkbox" class="ace">
																<span class="lbl"></span>
															</label>
														</td>

														<td class=" ">
															<a href="#">{{lib.channel_id}}</a>
														</td>
														<td class=" "><a v-bind:href="lib.channel_images" target="_blank">{{lib.channel_images}}</a></td>
														<td class="hidden-480 ">{{lib.channel_name}}</td>
														<td class=" ">{{lib.username}}</td>

														<td class="hidden-480 ">
															<span class="label label-sm label-success">{{lib.class_name}}</span>
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
																	<button data-toggle="dropdown" class="btn btn-minier btn-yellow dropdown-toggle">
																		<i class="icon-caret-down icon-only bigger-120"></i>
																	</button>

																	<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-info" href="#" data-original-title="View">
																				<span class="blue">
																					<i class="icon-zoom-in bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Edit">
																				<span class="green">
																					<i class="icon-edit bigger-120"></i>
																				</span>
																			</a>
																		</li>

																		<li>
																			<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
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
													
											</tbody></table><div class="row"><div class="col-sm-6">
												<div class="dataTables_info" id="sample-table-2_info">每页显示{{num}}共{{sum}}条</div>
											</div><div class="col-sm-6"><div class="dataTables_paginate paging_bootstrap">
												<ul class="pagination">
													<li v-bind:class="[prevClass,disabledClass]" v-on:click="page_end"><a href="javascript:"><i class="icon-double-angle-left"></i></a></li>
													<li class="active"><a href="javascript:">{{pa}}</a></li>
													<!--<li><a href="javascript:">2</a></li>
													<li><a href="javascript:">3</a></li>-->
													<li v-bind:class="[nextClass]" v-on:click="page_out"><a href="javascript:"><i class="icon-double-angle-right"></i></a></li>
												</ul></div></div></div></div>
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
  name: 'tables',
  data () {
    return {
      message: '',
      lis:{},
      liDs:{},
      num:10,
      sum:0,
      pa:1,
      disabledClass:'disabled',
      prevClass:'prev',
      nextClass:'next',
      
    }
  },
  created()
  {
  	live_class(this)
  	live_channel(this,1)
  },
  methods:
  {
  	//删除频道分类
  	class_del:function(val)
  	{
  		if(confirm('确认删除ID: '+val+'?'))
  		{
  			$.ajax({
  			dataType:'jsonp',
  			url:host+'?r=live/live_class_del',
  			data:{class_id:val},
  			success:function(e)
  			{
  				common(e.error);
  				if(e.error=='200')
  				{
  					console.log(e)
  					alert(e.msg)
  					$('#live_class'+val).remove()
  				}else
  				{
  					alert(e.msg)
  				}
  			}
  		})
  		}
  		//内置jsonp 需要装扩展
/*  		this.$http.jsonp(
  			host+'?r=live/live_classDel',{class_id:val}
  			).then(
  				function(e)
  				{
  					console.log(e)
  				}
  			)*/
  	},	
  	//修改频道分类
  	class_upd(val)
  	{
  		if(!val.start)
  		{
  			console.dir(val)
  			val.start = 1
  			val.class_name = '<input type="tel" value="'+val.class_name+'" id="class_upd_d" />'
  		}
  	},
  	//修改处理
  	class_upd_d(val)
  	{
  		var name = $('#class_upd_d').val()
  		//提交更改
  		$.ajax({
  			dataType:'jsonp',
  			data:{class_name:name,class_id:val.class_id},
  			url:host+'?r=live/live_class_upd',
  			success:function(e)
  			{
  				common(e.error)
  				if(e.error=='200')
  				{
  					val.start = 0
  					val.class_name = name
  					alert(e.msg)
  				}else
  				{
  					alert(e.msg)
  				}
  			}
  		})
  	},
  	ace_a()
  	{
  		//频道分类反选
		var ace_a = $('.ace_a')
		$.each(ace_a,function(i,s){
			s.checked = !s.checked
		})
	},
	select_sample()
	{
		live_channel(this,this.pa)
	},
	page_end()
	{
		this.pa = this.pa-1
		if(this.pa<2)
		{
			this.disabledClass = 'disabled'
		}
		if(this.pa>0)
		{
			live_channel(this,this.pa)
		}
	},
	page_out()
	{
		this.pa = this.pa+1
		if(this.pa>1)
		{
			this.disabledClass = ''
			live_channel(this,this.pa)
		}
		//console.log(this.pa)
	}
  }
}

//获取频道分类
function live_class(obj)
{
	$.ajax({
		url:host+'?r=index/live_class',
		dataType:'jsonp',
		success:function(e)
		{
			common(e.error);
			if(e.error=='200')
			{
				obj.lis = e.msg
			}else
			{
				alert(e.msg)
			}
			//console.dir(e)
		}
	})
}

/*//条件查询
$('#live_channel_find').blue(function(){
	console.log('1')
})
*/
//获取频道信息
function live_channel(obj,pa)
{
	var num = $('#select_num').val()
	if(!num){ num=10 }
	$.ajax({
		dataType:'jsonp',
		url:host+'?r=index/live_channel',
		data:{pa:pa,num:num},
		success:function(e)
		{
			common(e.error);
			obj.liDs = e.msg
			obj.sum = e.sum
			//console.log(e.msg);
		}
	})
}

try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

<style>
</style>