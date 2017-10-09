<template>
	<div class="main-content">
		<div id="breadcrumbs" class="breadcrumbs">

			<ul class="breadcrumb">
				<li>
					<i class="icon-home home-icon"></i>
					<a href="#">Home</a>
				</li>

				<li>
					<a href="#">信息统计</a>
				</li>
				<li class="active">用户管理</li>
			</ul>
			<!-- .breadcrumb -->

			<div id="nav-search" class="nav-search">
				<form class="form-search">
					<span class="input-icon" v-on:blur="search">
									<input type="text" autocomplete="off"					id="nav-search-input" class="nav-search-input" placeholder="查询 ...">
									<i class="icon-search nav-search-icon"></i>
								</span>
				</form>
			</div>
			<!-- #nav-search -->
		</div>

		<div class="page-content">
			<div class="page-header">
				<h1>
								用户列表
								<small>
									<i class="icon-double-angle-right"></i>
									用户管理
								</small>
							</h1>
			</div>
			<!-- /.page-header -->

			<div class="row">
				<div class="col-xs-12">
					<!-- PAGE CONTENT BEGINS -->

					<div class="alert alert-info">
						<i class="icon-hand-right"></i> 欢迎管理员
						<button data-dismiss="alert" class="close">
										<i class="icon-remove"></i>
									</button>
					</div>

					<div class="ui-jqgrid ui-widget ui-widget-content ui-corner-all" id="gbox_grid-table" dir="ltr" style="width: 1119px;">
						<div id="lui_grid-table" class="ui-widget-overlay jqgrid-overlay"></div>
						<div id="load_grid-table" class="loading ui-state-default ui-state-active" style="display: none;">
							Loading...
						</div>
						<div class="ui-jqgrid-view" id="gview_grid-table" style="width: 1119px;">
							<div class="ui-jqgrid-titlebar ui-widget-header ui-corner-top ui-helper-clearfix">
								<a href="javascript:void(0)" role="link" class="ui-jqgrid-titlebar-close HeaderButton" style="right: 0px;"><span class="ui-icon ui-icon-circle-triangle-n"></span></a>
								<span class="ui-jqgrid-title">用户列表管理</span></div>
							<div style="width: 1119px;" class="ui-state-default ui-jqgrid-hdiv">
								<div class="ui-jqgrid-hbox">
									<table cellspacing="0" cellpadding="0" border="0" aria-labelledby="gbox_grid-table" role="grid" style="width:1101px" class="ui-jqgrid-htable">
										<thead>
											<tr role="rowheader" class="ui-jqgrid-labels">
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_cb" style="width: 25px;">
													<div id="jqgh_grid-table_cb"><input type="checkbox" class="cbox" id="cb_grid-table" role="checkbox"><span style="display:none" class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span></span>
													</div>
												</th>
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_myac" style="width: 80px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
													<div id="jqgh_grid-table_myac" class="ui-jqgrid-sortable"> <span style="display:none" class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span></span>
													</div>
												</th>
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_id" style="width: 98px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
													<div id="jqgh_grid-table_id" class="ui-jqgrid-sortable">ID<span style="display:none" class="s-ico">
																	<span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc"></span>
														<span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span>
														</span>
													</div>
												</th>
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_sdate" style="width: 147px;">
													<span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
													<div id="jqgh_grid-table_sdate" class="ui-jqgrid-sortable">直播房间号<span style="display:none" class="s-ico">
																		<span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc">
																	</span>
														<span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span></span>
													</div>
												</th>
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_name" style="width: 245px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
													<div id="jqgh_grid-table_name" class="ui-jqgrid-sortable">直播间状态<span style="display:none" class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span></span>
													</div>
												</th>
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_stock" style="width: 114px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
													<div id="jqgh_grid-table_stock" class="ui-jqgrid-sortable">直播间贡献值<span style="display:none" class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span></span>
													</div>
												</th>
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_ship" style="width: 147px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
													<div id="jqgh_grid-table_ship" class="ui-jqgrid-sortable">送礼物用户<span style="display:none" class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span></span>
													</div>
												</th>
												<th class="ui-state-default ui-th-column ui-th-ltr" role="columnheader" id="grid-table_note" style="width: 245px;"><span class="ui-jqgrid-resize ui-jqgrid-resize-ltr" style="cursor: col-resize;">&nbsp;</span>
													<div id="jqgh_grid-table_note" class="ui-jqgrid-sortable">性别<span style="display:none" class="s-ico"><span class="ui-grid-ico-sort ui-icon-asc ui-state-disabled ui-icon ui-icon-triangle-1-n ui-sort-ltr" sort="asc"></span><span class="ui-grid-ico-sort ui-icon-desc ui-state-disabled ui-icon ui-icon-triangle-1-s ui-sort-ltr" sort="desc"></span></span>
													</div>
												</th>
											</tr>
										</thead>
									</table>
								</div>
							</div>
							<div class="ui-jqgrid-bdiv" style="height: 250px; width: 1119px;">
								<div style="position:relative;">
									<div></div>
									<table cellspacing="0" cellpadding="0" border="0" id="grid-table" tabindex="0" role="grid" aria-multiselectable="true" aria-labelledby="gbox_grid-table" class="ui-jqgrid-btable" style="width: 1101px;">
										<tbody>
											<tr style="height:auto" role="row" class="jqgfirstrow">
												<td style="height:0px;width:25px;" role="gridcell"></td>
												<td style="height:0px;width:80px;" role="gridcell"></td>
												<td style="height:0px;width:98px;" role="gridcell"></td>
												<td style="height:0px;width:147px;" role="gridcell"></td>
												<td style="height:0px;width:245px;" role="gridcell"></td>
												<td style="height:0px;width:114px;" role="gridcell"></td>
												<td style="height:0px;width:147px;" role="gridcell"></td>
												<td style="height:0px;width:245px;" role="gridcell"></td>
											</tr>
											<tr v-for="li in user_list" class="ui-widget-content jqgrow ui-row-ltr" tabindex="-1" id="1" role="row">
												<td aria-describedby="grid-table_cb" style="text-align:center;width: 25px;" role="gridcell"><input type="checkbox" name="jqg_grid-table_1" class="cbox" id="jqg_grid-table_1" role="checkbox"></td>
												<td aria-describedby="grid-table_myac" title="" style="" role="gridcell">
													<div style="margin-left:8px;">
														<div id="jDeleteButton_1" class="ui-pg-div ui-inline-del" style="float:left;margin-left:5px;" title="" data-original-title="Delete selected row">
														{{li.user_start}}
														<span class="ui-icon icon-refresh green" v-on:click="user_start(li,li.u_id,li.user_start)"></span></div>
													</div>
												</td>
												<td aria-describedby="grid-table_id" title="1" style="" role="gridcell">{{li.con_id}}</td>
												<td aria-describedby="grid-table_sdate" title="2007-12-03" style="" role="gridcell">{{li.channel_name}}</td>
												<td aria-describedby="grid-table_name" title="Desktop Computer" style="" role="gridcell">
												<span v-show="li.con_statu==1">正常</span>
												<span v-show="li.con_statu==0">待解封锁定</span>
												<span v-show="li.con_statu==2">警告</span>
												<span v-show="li.con_statu==3" style="color:red">永久封闭</span></td>
												<td aria-describedby="grid-table_stock" title="Yes" style="" role="gridcell">{{li.con_money}}</td>
												<td aria-describedby="grid-table_ship" title="FedEx" style="" role="gridcell">{{li.username}}</td>
												<td aria-describedby="grid-table_note" title="note" style="" role="gridcell" ><span v-show="li.sex==1">男</span><span v-show="li.sex==0">女</span></td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
						<div id="rs_mgrid-table" class="ui-jqgrid-resize-mark">&nbsp;</div>
						<div id="grid-pager" style="width: 1119px;" class="ui-state-default ui-jqgrid-pager ui-corner-bottom" dir="ltr">
							<div role="group" class="ui-pager-control" id="pg_grid-pager">
								<table cellspacing="0" cellpadding="0" border="0" role="row" style="width:100%;table-layout:fixed;height:100%;" class="ui-pg-table">
									<tbody>
										<tr>
											<td align="left" id="grid-pager_left">
												<table cellspacing="0" cellpadding="0" border="0" style="float:left;table-layout:auto;" class="ui-pg-table navtable">
													<tbody>
														<tr>
															<td class="ui-pg-button ui-corner-all" title="" id="add_grid-table" data-original-title="Add new row">
																<div class="ui-pg-div"><span class="ui-icon icon-plus-sign purple"></span></div>
															</td>
															<td class="ui-pg-button ui-corner-all" title="" id="edit_grid-table" data-original-title="Edit selected row">
																<div class="ui-pg-div"><span class="ui-icon icon-pencil blue"></span></div>
															</td>
															<td class="ui-pg-button ui-corner-all" title="" id="view_grid-table" data-original-title="View selected row">
																<div class="ui-pg-div"><span class="ui-icon icon-zoom-in grey"></span></div>
															</td>
															<td class="ui-pg-button ui-corner-all" title="" id="del_grid-table" data-original-title="Delete selected row">
																<div class="ui-pg-div"><span class="ui-icon icon-trash red"></span></div>
															</td>
															<td style="width:4px;" class="ui-pg-button ui-state-disabled" data-original-title="" title=""><span class="ui-separator"></span></td>
															<td class="ui-pg-button ui-corner-all" title="" id="search_grid-table" data-original-title="Find records">
																<div class="ui-pg-div"><span class="ui-icon icon-search orange"></span></div>
															</td>
															<td class="ui-pg-button ui-corner-all" title="" id="refresh_grid-table" data-original-title="Reload Grid">
																<div class="ui-pg-div"><span class="ui-icon icon-refresh green"></span></div>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td align="center" style="white-space: pre; width: 343px;" id="grid-pager_center">
												<table cellspacing="0" cellpadding="0" border="0" class="ui-pg-table" style="table-layout:auto;">
													<tbody>
														<tr>
															<td class="ui-pg-button ui-corner-all ui-state-disabled" id="first_grid-pager"><span class="ui-icon icon-double-angle-left bigger-140" v-on:click="user_list_pa('begin')"></span></td>
															<td class="ui-pg-button ui-corner-all ui-state-disabled" id="prev_grid-pager"><span class="ui-icon icon-angle-left bigger-140" v-on:click="user_list_pa('up')"></span></td>
															<td style="width:4px;" class="ui-pg-button ui-state-disabled"><span class="ui-separator"></span></td>
															<td dir="ltr">当前 <input type="text" role="textbox" v-bind:value="pa" maxlength="7" size="2" class="ui-pg-input"> 页 <span id="sp_1_grid-pager"></span></td>
															<td style="width:4px;" class="ui-pg-button ui-state-disabled"><span class="ui-separator"></span></td>
															<td class="ui-pg-button ui-corner-all" id="next_grid-pager"><span class="ui-icon icon-angle-right bigger-140" v-on:click="user_list_pa('next')"></span></td>
															<td class="ui-pg-button ui-corner-all" id="last_grid-pager"><span class="ui-icon icon-double-angle-right bigger-140"v-on:click="user_list_pa('end')"></span></td>
															<td dir="ltr">
																<select role="listbox" class="ui-pg-selbox">
																	<option selected="selected" value="10" role="option">6</option>
																</select>
															</td>
														</tr>
													</tbody>
												</table>
											</td>
											<td align="right" id="grid-pager_right">
												<div class="ui-paging-info" style="text-align:right" dir="ltr">共{{sum}}页</div>
											</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
					</div>

					<!-- PAGE CONTENT ENDS -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</div>
		<!-- /.page-content -->
	</div>
</template>

<script>
	export default {
		name: 'jqgrid',
		data() {
			return {
				message: '',
				pa:1,
				user_list:{},
				sum:0,
			
			}
		},
		created() {
			user_lsit(this)
		},
		methods: {
			//搜索
			search: function(){
			
				var ser = $("#nav-search-input").val();
				alert(ser)
			},
			user_start(li,u_id,user_statr)
			{
				user_start_d(li,u_id,user_statr)
			},
			user_list_pa(pa)
			{
				switch(pa)
				{
					case 'up':
						if(this.pa>1)
						{
							this.pa = this.pa-1
						}else
						{
							this.pa = 1
						}
					break;
					case 'begin':
						this.pa = 1
					break;
					case 'next':
						if(this.pa>=this.sum)
						{
							this.pa = this.sum
						}else
						{
							this.pa = this.pa+1
						}
					break;
					default:
						this.pa = this.sum
					break;
				}
				user_lsit(this)
			}
		}
	}
	
	
	//用户列表
	function user_lsit(thi) {
		$.ajax({
			dataType:'jsonp',
			url:host+'?r=con/con_list',
			data:{pa:thi.pa},
			success:function(e)
			{
				common(e.error)
				if(e.error=='200')
				{
					
					thi.user_list = e.msg
					thi.sum = e.sum
				}else
				{
					alert(e.msg)
				}
			}
		})
	}

	try {
		ace.settings.check('breadcrumbs', 'fixed')
	} catch(e) {}
	var $path_base = "/"; //this will be used in gritter alerts containing images
</script>

<style>

</style>