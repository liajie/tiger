<template>
	<div id="sidebar" class="sidebar">
					<div id="sidebar-shortcuts" class="sidebar-shortcuts">
						<div id="sidebar-shortcuts-large" class="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div id="sidebar-shortcuts-mini" class="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
						<li class="active" v-on:click="router_imeun">
							<router-link to="/" class="router-item">
								<i class="icon-dashboard"></i>
								<span class="menu-text"> 控制台 </span>
						</router-link>
						</li>

						<!--<li>
							<router-link to="/typography" class="router-item">
								<i class="icon-text-width"></i>
								<span class="menu-text"> 文字排版 </span>
							</router-link>
						</li>-->

						<!--<li>-->
							<!--<a class="dropdown-toggle" href="#">-->
								<!--<i class="icon-desktop"></i>-->
								<!--<span class="menu-text"> UI 组件 </span>-->

								<!--<b class="arrow icon-angle-down"></b>-->
							<!--</a>-->

							<!--<ul class="submenu">-->
								<!--<li>-->
									<!--<router-link to="/elements" class="router-item">-->
										<!--<i class="icon-double-angle-right"></i>-->
										<!--组件-->
									<!--</router-link>-->
								<!--</li>-->

								<!--<li>-->
									<!--<router-link to="/buttons" class="router-item">-->
										<!--<i class="icon-double-angle-right"></i>-->
										<!--按钮 &amp; 图表-->
									<!--</router-link>-->
								<!--</li>-->

								<!--<li>-->
									<!--<router-link to="/treeview" class="router-item">-->
										<!--<i class="icon-double-angle-right"></i>-->
										<!--树菜单-->
									<!--</router-link>-->
								<!--</li>-->

								<!--<li>-->
									<!--<router-link to="/jquery_ui" class="router-item">-->
										<!--<i class="icon-double-angle-right"></i>-->
										<!--jQuery UI-->
									<!--</router-link>-->
								<!--</li>-->

								<!--<li>-->
									<!--<router-link to="/nestable_list" class="router-item">-->
										<!--<i class="icon-double-angle-right"></i>-->
										<!--可拖拽列表-->
									<!--</router-link>-->
								<!--</li>-->

								<!--<li>-->
									<!--<a class="dropdown-toggle" href="#">-->
										<!--<i class="icon-double-angle-right"></i>-->

										<!--三级菜单-->
										<!--<b class="arrow icon-angle-down"></b>-->
									<!--</a>-->

									<!--<ul class="submenu">-->
										<!--<li>-->
											<!--<a href="#">-->
												<!--<i class="icon-leaf"></i>-->
												<!--第一级-->
											<!--</a>-->
										<!--</li>-->

										<!--<li>-->
											<!--<a class="dropdown-toggle" href="#">-->
												<!--<i class="icon-pencil"></i>-->

												<!--第四级-->
												<!--<b class="arrow icon-angle-down"></b>-->
											<!--</a>-->

											<!--<ul class="submenu">-->
												<!--<li>-->
													<!--<a href="#">-->
														<!--<i class="icon-plus"></i>-->
														<!--添加产品-->
													<!--</a>-->
												<!--</li>-->

												<!--<li>-->
													<!--<a href="#">-->
														<!--<i class="icon-eye-open"></i>-->
														<!--查看商品-->
													<!--</a>-->
												<!--</li>-->
											<!--</ul>-->
										<!--</li>-->
									<!--</ul>-->
								<!--</li>-->
							<!--</ul>-->
						<!--</li>-->

						<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-list"></i>
								<span class="menu-text"> 信息管理统计 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/tables" class="router-item">
										<i class="icon-double-angle-right"></i>
										直播频道 &amp; 分类
									</router-link>
								</li>

								<li>
									<router-link to="/news_list" class="router-item">
										<i class="icon-double-angle-right"></i>
										新闻列表管理
									</router-link>
								</li>

								<li>
									<router-link to="/jqgrid" class="router-item">
										<i class="icon-double-angle-right"></i>
										用户管理
									</router-link>
								</li>
								<li>
									<router-link to="/contribution" class="router-item">
										<i class="icon-double-angle-right"></i>
										频道贡献榜
									</router-link>
								</li>
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-edit"></i>
								<span class="menu-text"> 添加管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/form_class_add" class="router-item">
										<i class="icon-double-angle-right"></i>
										频道分类添加
									</router-link>
								</li>

								<li>
									<router-link to="/form_new_add" class="router-item">
										<i class="icon-double-angle-right"></i>
										直播新闻添加
									</router-link>
								</li>
								
								<li>
									<router-link to="/form_elements" class="router-item">
										<i class="icon-double-angle-right"></i>
										表单组件
									</router-link>
								</li>

								<li>
									<router-link to="/form_wizard" class="router-item">
										<i class="icon-double-angle-right"></i>
										向导提示 &amp; 验证
									</router-link>
								</li>

								<li>
									<router-link to="/wysiwyg" class="router-item">
										<i class="icon-double-angle-right"></i>
										编辑器
									</router-link>
								</li>

								<li>
									<router-link to="/dropzone" class="router-item">
										<i class="icon-double-angle-right"></i>
										文件上传
									</router-link>
								</li>
							</ul>
						</li>

						<li>
							<router-link to="/widgets" class="router-item">
								<i class="icon-list-alt"></i>
								<span class="menu-text"> 插件 </span>
							</router-link>
						</li>

						<li>
							<router-link to="/calendar" class="router-item">
								<i class="icon-calendar"></i>

								<span class="menu-text">
									日历
									<span title="" class="badge badge-transparent tooltip-error" data-original-title="2&nbsp;Important&nbsp;Events">
										<i class="icon-warning-sign red bigger-130"></i>
									</span>
								</span>
							</router-link>
						</li>

						<li>
							<router-link to="/gallery" class="router-item">
								<i class="icon-picture"></i>
								<span class="menu-text"> 相册 </span>
							</router-link>
						</li>

						<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-tag"></i>
								<span class="menu-text"> 更多页面 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/profile" class="router-item">
										<i class="icon-double-angle-right"></i>
										用户信息
									</router-link>
								</li>

								<li>
									<router-link to="/inbox" class="router-item">
										<i class="icon-double-angle-right"></i>
										收件箱
									</router-link>
								</li>

								<li>
									<router-link to="/pricing" class="router-item">
										<i class="icon-double-angle-right"></i>
										售价单
									</router-link>
								</li>

								<li>
									<router-link to="/invoice" class="router-item">
										<i class="icon-double-angle-right"></i>
										购物车
									</router-link>
								</li>

								<li>
									<router-link to="/timeline" class="router-item">
										<i class="icon-double-angle-right"></i>
										时间轴
									</router-link>
								</li>

								<li>
									<a href="javascript:" v-on:click="login_out">
										<i class="icon-double-angle-right"></i>
										登录 &amp; 注册
									</a>
								</li>
							</ul>
						</li>

						<li>
							<a class="dropdown-toggle" href="#">
								<i class="icon-file-alt"></i>

								<span class="menu-text">
									其他页面
									<span class="badge badge-primary ">5</span>
								</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<router-link to="/faq" class="router-item">
										<i class="icon-double-angle-right"></i>
										帮助
									</router-link>
								</li>

								<li>
									<router-link to="/error_s" class="router-item">
										<i class="icon-double-angle-right"></i>
										404错误页面
									</router-link>
								</li>

								<li>
									<router-link to="/error_w" class="router-item">
										<i class="icon-double-angle-right"></i>
										500错误页面
									</router-link>
								</li>

								<li>
									<router-link to="/grid" class="router-item">
										<i class="icon-double-angle-right"></i>
										网格
									</router-link>
								</li>

								<li>
									<router-link to="/blank" class="router-item">
										<i class="icon-double-angle-right"></i>
										空白页面
									</router-link>
								</li>
							</ul>
						</li>
					</ul><!-- /.nav-list -->

					<div id="sidebar-collapse" class="sidebar-collapse">
						<i data-icon2="icon-double-angle-right" data-icon1="icon-double-angle-left" class="icon-double-angle-left"></i>
					</div>
				</div>
</template>

<script>
export default {
  name: 'imeun',
  data () {
    return {
      message: ''
    }
  },
  methods:
  {
  	login_out:function()
  	{
  		$.ajax({
  			dataType:'jsonp',
  			url:host+'?r=login/login_out',
  			success:function(e)
  			{
  				switch (e.error)
  				{
  					case '200':
  					alert(e.msg);
  					$('#sidebar').hide();
  					$('#navbar').hide();
  					location.href='/#/login';
  					break;
  					default:
  					alert(e.msg);
  					break;
  				}
  			}
  		})
  	},
      router_imeun:function () {
		  //打印路由参数
		  console.log(this.$route)
      }
  }
}

try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
</script>

<style>
	
</style>