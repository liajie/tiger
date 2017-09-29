<template>
	<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">首页</a>
							</li>
							<li class="active">控制台</li>
						</ul><!-- .breadcrumb -->

						<div id="nav-search" class="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" autocomplete="off" id="nav-search-input" class="nav-search-input" placeholder="Search ...">
									<i class="icon-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- #nav-search -->
					</div>

					<div class="page-content">
						<div class="page-header">
							<h1>
								控制台
								<small>
									<i class="icon-double-angle-right"></i>
									 查看
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="alert alert-block alert-success">
									<button data-dismiss="alert" class="close" type="button">
										<i class="icon-remove"></i>
									</button>

									<i class="icon-ok green"></i>

									欢迎使用
									<strong class="green">
										Ace后台管理系统
										<small>(v1.2)</small>
									</strong>
									,这四组的项目
								</div>

								<div class="row">
									<div class="space-6"></div>

									<div class="col-sm-7 infobox-container">
										<div class="infobox infobox-green  ">
											<div class="infobox-icon">
												<i class="icon-comments"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">{{news_count}}</span>
												<div class="infobox-content">{{news_news}}今日新闻</div>
											</div>
											<div class="stat stat-success">{{news_per}}%</div>
										</div>

										<div class="infobox infobox-blue  ">
											<div class="infobox-icon">
												<i class="icon-twitter"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">{{user_new}}</span>
												<div class="infobox-content">新粉丝</div>
											</div>

											<div class="badge badge-success">
												{{user_per}}%
												<i class="icon-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-pink  ">
											<div class="infobox-icon">
												<i class="icon-shopping-cart"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">{{noticeUser}}</span>
												<div class="infobox-content">直播预订量</div>
											</div>
											<div class="stat stat-important">4%</div>
										</div>

										<div class="infobox infobox-red  ">
											<div class="infobox-icon">
												<i class="icon-beaker"></i>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">{{live_notice}}</span>
												<div class="infobox-content">直播量统计</div>
											</div>
										</div>

										<div class="infobox infobox-orange2  ">
											<div class="infobox-chart">
												<span data-values="196,128,202,177,154,94,100,170,224" class="sparkline"><canvas style="display: inline-block; width: 44px; height: 34px; vertical-align: top;" width="44" height="34"></canvas></span>
											</div>

											<div class="infobox-data">
												<span class="infobox-data-number">{{log_new}}</span>
												<div class="infobox-content">访客统计</div>
											</div>

											<div class="badge badge-success">
												{{log_count}}%
												<i class="icon-arrow-up"></i>
											</div>
										</div>

										<div class="infobox infobox-blue2  ">
											<div class="infobox-progress">
												<div data-size="46" data-percent="42" class="easy-pie-chart percentage easyPieChart" style="width: 46px; height: 46px; line-height: 46px;">
													<span class="percent">{{a_money}}金</span>
												<canvas height="46" width="46"></canvas></div>
											</div>

											<div class="infobox-data">
												<span class="infobox-text">用户充值</span>

												<div class="infobox-content">
													<span class="bigger-110"></span>
													{{b_money}}银豆
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="infobox infobox-green infobox-small infobox-dark">
											<div class="infobox-progress">
												<div data-size="39" data-percent="61" class="easy-pie-chart percentage easyPieChart" style="width: 39px; height: 39px; line-height: 39px;">
													<span class="percent">61</span>%
												<canvas height="39" width="39"></canvas></div>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">任务</div>
												<div class="infobox-content">完成</div>
											</div>
										</div>

										<div class="infobox infobox-blue infobox-small infobox-dark">
											<div class="infobox-chart">
												<span data-values="3,4,2,3,4,4,2,2" class="sparkline"><canvas style="display: inline-block; width: 39px; height: 20px; vertical-align: top;" width="39" height="20"></canvas></span>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">获得</div>
												<div class="infobox-content">$32,000</div>
											</div>
										</div>

										<div class="infobox infobox-grey infobox-small infobox-dark">
											<div class="infobox-icon">
												<i class="icon-download-alt"></i>
											</div>

											<div class="infobox-data">
												<div class="infobox-content">下载次数</div>
												<div class="infobox-content">1,205</div>
											</div>
										</div>
									</div>

									<div class="vspace-sm"></div>

									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header widget-header-flat widget-header-small">
												<h5>
													<i class="icon-signal"></i>
													访问来源
												</h5>

												<div class="widget-toolbar no-border">
													<button data-toggle="dropdown" class="btn btn-minier btn-primary dropdown-toggle">
														本周
														<i class="icon-angle-down icon-on-right bigger-110"></i>
													</button>

													<ul class="dropdown-menu pull-right dropdown-125 dropdown-lighter dropdown-caret">
														<li class="active">
															<a class="blue" href="#">
																<i class="icon-caret-right bigger-110">&nbsp;</i>
																本周
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																上周
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																本月
															</a>
														</li>

														<li>
															<a href="#">
																<i class="icon-caret-right bigger-110 invisible">&nbsp;</i>
																上月
															</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div id="piechart-placeholder" style="width: 90%; min-height: 150px; padding: 0px; position: relative;"><canvas class="flot-base" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;" width="384" height="150"></canvas><canvas class="flot-overlay" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 384px; height: 150px;" width="384" height="150"></canvas><div class="legend"><div style="position: absolute; width: 92px; height: 110px; top: 15px; right: -30px; background-color: rgb(255, 255, 255); opacity: 0.85;"> </div><table style="position:absolute;top:15px;right:-30px;;font-size:smaller;color:#545454"><tbody><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #68BC31;overflow:hidden"></div></div></td><td class="legendLabel">social networks</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #2091CF;overflow:hidden"></div></div></td><td class="legendLabel">search engines</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #AF4E96;overflow:hidden"></div></div></td><td class="legendLabel">ad campaigns</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #DA5430;overflow:hidden"></div></div></td><td class="legendLabel">direct traffic</td></tr><tr><td class="legendColorBox"><div style="border:1px solid null;padding:1px"><div style="width:4px;height:0;border:5px solid #FEE074;overflow:hidden"></div></div></td><td class="legendLabel">other</td></tr></tbody></table></div></div>

													<div class="hr hr8 hr-double"></div>

													<div class="clearfix">
														<div class="grid3">
															<span class="grey">
																<i class="icon-facebook-sign icon-2x blue"></i>
																&nbsp; likes
															</span>
															<h4 class="bigger pull-right">1,255</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="icon-twitter-sign icon-2x purple"></i>
																&nbsp; tweets
															</span>
															<h4 class="bigger pull-right">941</h4>
														</div>

														<div class="grid3">
															<span class="grey">
																<i class="icon-pinterest-sign icon-2x red"></i>
																&nbsp; pins
															</span>
															<h4 class="bigger pull-right">1,050</h4>
														</div>
													</div>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div><!-- /widget-box -->
									</div><!-- /span -->
								</div><!-- /row -->

								<div class="hr hr32 hr-dotted"></div>

								<div class="row">
									<div class="col-sm-6">
										<div id="recent-box" class="widget-box transparent">
											<div class="widget-header">
												<h4 class="lighter smaller">
													<i class="icon-rss orange"></i>
													最近
												</h4>

												<div class="widget-toolbar no-border">
													<ul id="recent-tab" class="nav nav-tabs">
														<li class="active">
															<a href="#task-tab" data-toggle="tab">任务</a>
														</li>

														<li>
															<a href="#member-tab" data-toggle="tab">会员</a>
														</li>

														<li>
															<a href="#comment-tab" data-toggle="tab">评论</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-4">
													<div class="tab-content padding-8 overflow-visible">
														<div class="tab-pane active" id="task-tab">
															<h4 class="smaller lighter green">
																<i class="icon-list"></i>
																可拖拽排序列表
															</h4>

															<ul class="item-list ui-sortable" id="tasks">
																<li class="item-orange clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"> 问答</span>
																	</label>

																	<div data-percent="42" data-color="#ECCB71" data-size="30" class="pull-right easy-pie-chart percentage easyPieChart" style="width: 30px; height: 30px; line-height: 30px;">
																		<span class="percent">42</span>%
																	<canvas height="30" width="30"></canvas></div>
																</li>

																<li class="item-red clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"> BUG修复</span>
																	</label>

																	<div class="pull-right action-buttons">
																		<a class="blue" href="#">
																			<i class="icon-pencil bigger-130"></i>
																		</a>

																		<span class="vbar"></span>

																		<a class="red" href="#">
																			<i class="icon-trash bigger-130"></i>
																		</a>

																		<span class="vbar"></span>

																		<a class="green" href="#">
																			<i class="icon-flag bigger-130"></i>
																		</a>
																	</div>
																</li>

																<li class="item-default clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl">添加新的特征</span>
																	</label>

																	<div class="inline pull-right position-relative dropdown-hover">
																		<button class="btn btn-minier bigger btn-primary">
																			<i class="icon-cog icon-only bigger-120"></i>
																		</button>

																		<ul class="dropdown-menu dropdown-only-icon dropdown-yellow dropdown-caret dropdown-close pull-right">
																			<li>
																				<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Mark&nbsp;as&nbsp;done">
																					<span class="green">
																						<i class="icon-ok bigger-110"></i>
																					</span>
																				</a>
																			</li>

																			<li>
																				<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																					<span class="red">
																						<i class="icon-trash bigger-110"></i>
																					</span>
																				</a>
																			</li>
																		</ul>
																	</div>
																</li>

																<li class="item-blue clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"> 更新模版脚本</span>
																	</label>
																</li>

																<li class="item-grey clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"> 添加新皮肤</span>
																	</label>
																</li>

																<li class="item-green clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"> 升级服务端</span>
																	</label>
																</li>

																<li class="item-pink clearfix">
																	<label class="inline">
																		<input type="checkbox" class="ace">
																		<span class="lbl"> 清理垃圾</span>
																	</label>
																</li>
															</ul>
														</div>

														<div class="tab-pane" id="member-tab">
															<div class="clearfix">
																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/user.jpg" alt="Bob Doe's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Bob Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">20 min</span>
																		</div>

																		<div>
																			<span class="label label-warning label-sm">pending</span>

																			<div class="inline position-relative">
																				<button data-toggle="dropdown" class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle">
																					<i class="icon-angle-down icon-only bigger-120"></i>
																				</button>

																				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Approve">
																							<span class="green">
																								<i class="icon-ok bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-warning" href="#" data-original-title="Reject">
																							<span class="orange">
																								<i class="icon-remove bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																							<span class="red">
																								<i class="icon-trash bigger-110"></i>
																							</span>
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar2.png" alt="Joe Doe's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Joe Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">1 hour</span>
																		</div>

																		<div>
																			<span class="label label-warning label-sm">pending</span>

																			<div class="inline position-relative">
																				<button data-toggle="dropdown" class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle">
																					<i class="icon-angle-down icon-only bigger-120"></i>
																				</button>

																				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Approve">
																							<span class="green">
																								<i class="icon-ok bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-warning" href="#" data-original-title="Reject">
																							<span class="orange">
																								<i class="icon-remove bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																							<span class="red">
																								<i class="icon-trash bigger-110"></i>
																							</span>
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar.png" alt="Jim Doe's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Jim Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">2 hour</span>
																		</div>

																		<div>
																			<span class="label label-warning label-sm">pending</span>

																			<div class="inline position-relative">
																				<button data-toggle="dropdown" class="btn btn-minier bigger btn-yellow btn-no-border dropdown-toggle">
																					<i class="icon-angle-down icon-only bigger-120"></i>
																				</button>

																				<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Approve">
																							<span class="green">
																								<i class="icon-ok bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-warning" href="#" data-original-title="Reject">
																							<span class="orange">
																								<i class="icon-remove bigger-110"></i>
																							</span>
																						</a>
																					</li>

																					<li>
																						<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																							<span class="red">
																								<i class="icon-trash bigger-110"></i>
																							</span>
																						</a>
																					</li>
																				</ul>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar5.png" alt="Alex Doe's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Alex Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">3 hour</span>
																		</div>

																		<div>
																			<span class="label label-danger label-sm">blocked</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar2.png" alt="Bob Doe's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Bob Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">6 hour</span>
																		</div>

																		<div>
																			<span class="label label-success label-sm arrowed-in">approved</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar3.png" alt="Susan's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Susan</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">yesterday</span>
																		</div>

																		<div>
																			<span class="label label-success label-sm arrowed-in">approved</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar4.png" alt="Phil Doe's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Phil Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">2 days ago</span>
																		</div>

																		<div>
																			<span class="label label-info label-sm arrowed-in arrowed-in-right">online</span>
																		</div>
																	</div>
																</div>

																<div class="itemdiv memberdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar1.png" alt="Alexa Doe's avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Alexa Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">3天以前</span>
																		</div>

																		<div>
																			<span class="label label-success label-sm arrowed-in">approved</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="center">
																<i class="icon-group icon-2x green"></i>

																&nbsp;
																<a href="#">
																	查看所有会员 &nbsp;
																	<i class="icon-arrow-right"></i>
																</a>
															</div>

															<div class="hr hr-double hr8"></div>
														</div><!-- member-tab -->

														<div class="tab-pane" id="comment-tab">
															<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="comments" style="overflow: hidden; width: auto; height: 300px;">
																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar.png" alt="Bob Doe's Avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Bob Doe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="green">6 min</span>
																		</div>

																		<div class="text">
																			<i class="icon-quote-left"></i>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis …
																		</div>
																	</div>

																	<div class="tools">
																		<div class="inline position-relative">
																			<button data-toggle="dropdown" class="btn btn-minier bigger btn-yellow dropdown-toggle">
																				<i class="icon-angle-down icon-only bigger-120"></i>
																			</button>

																			<ul class="dropdown-menu dropdown-only-icon dropdown-yellow pull-right dropdown-caret dropdown-close">
																				<li>
																					<a title="" data-rel="tooltip" class="tooltip-success" href="#" data-original-title="Approve">
																						<span class="green">
																							<i class="icon-ok bigger-110"></i>
																						</span>
																					</a>
																				</li>

																				<li>
																					<a title="" data-rel="tooltip" class="tooltip-warning" href="#" data-original-title="Reject">
																						<span class="orange">
																							<i class="icon-remove bigger-110"></i>
																						</span>
																					</a>
																				</li>

																				<li>
																					<a title="" data-rel="tooltip" class="tooltip-error" href="#" data-original-title="Delete">
																						<span class="red">
																							<i class="icon-trash bigger-110"></i>
																						</span>
																					</a>
																				</li>
																			</ul>
																		</div>
																	</div>
																</div>

																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar1.png" alt="Jennifer's Avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Jennifer</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="blue">15 min</span>
																		</div>

																		<div class="text">
																			<i class="icon-quote-left"></i>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis …
																		</div>
																	</div>

																	<div class="tools">
																		<div class="action-buttons bigger-125">
																			<a href="#">
																				<i class="icon-pencil blue"></i>
																			</a>

																			<a href="#">
																				<i class="icon-trash red"></i>
																			</a>
																		</div>
																	</div>
																</div>

																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar2.png" alt="Joe's Avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Joe</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="orange">22 min</span>
																		</div>

																		<div class="text">
																			<i class="icon-quote-left"></i>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis …
																		</div>
																	</div>

																	<div class="tools">
																		<div class="action-buttons bigger-125">
																			<a href="#">
																				<i class="icon-pencil blue"></i>
																			</a>

																			<a href="#">
																				<i class="icon-trash red"></i>
																			</a>
																		</div>
																	</div>
																</div>

																<div class="itemdiv commentdiv">
																	<div class="user">
																		<img src="/static/assets/avatars/avatar3.png" alt="Rita's Avatar">
																	</div>

																	<div class="body">
																		<div class="name">
																			<a href="#">Rita</a>
																		</div>

																		<div class="time">
																			<i class="icon-time"></i>
																			<span class="red">50 min</span>
																		</div>

																		<div class="text">
																			<i class="icon-quote-left"></i>
																			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis …
																		</div>
																	</div>

																	<div class="tools">
																		<div class="action-buttons bigger-125">
																			<a href="#">
																				<i class="icon-pencil blue"></i>
																			</a>

																			<a href="#">
																				<i class="icon-trash red"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>

															<div class="hr hr8"></div>

															<div class="center">
																<i class="icon-comments-alt icon-2x green"></i>

																&nbsp;
																<a href="#">
																	See all comments &nbsp;
																	<i class="icon-arrow-right"></i>
																</a>
															</div>

															<div class="hr hr-double hr8"></div>
														</div>
													</div>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div><!-- /widget-box -->
									</div><!-- /span -->

									<div class="col-sm-6">
										<div class="widget-box ">
											<div class="widget-header">
												<h4 class="lighter smaller">
													<i class="icon-comment blue"></i>
													会话
												</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 300px;"><div class="dialogs" style="overflow: hidden; width: auto; height: 300px;">
														<div class="itemdiv dialogdiv">
															<div class="user">
																<img src="/static/assets/avatars/avatar1.png" alt="Alexa's Avatar">
															</div>

															<div class="body">
																<div class="time">
																	<i class="icon-time"></i>
																	<span class="green">4秒钟前</span>
																</div>

																<div class="name">
																	<a href="#">Alexa</a>
																</div>
																<div class="text">大家好啊</div>

																<div class="tools">
																	<a class="btn btn-minier btn-info" href="#">
																		<i class="icon-only icon-share-alt"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img src="/static/assets/avatars/avatar.png" alt="John's Avatar">
															</div>

															<div class="body">
																<div class="time">
																	<i class="icon-time"></i>
																	<span class="blue">38秒以前</span>
																</div>

																<div class="name">
																	<a href="#">John</a>
																</div>
																<div class="text">框架很好用嘛</div>

																<div class="tools">
																	<a class="btn btn-minier btn-info" href="#">
																		<i class="icon-only icon-share-alt"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img src="/static/assets/avatars/user.jpg" alt="Bob's Avatar">
															</div>

															<div class="body">
																<div class="time">
																	<i class="icon-time"></i>
																	<span class="orange">2分钟以前</span>
																</div>

																<div class="name">
																	<a href="#">Bob</a>
																	<span class="label label-info arrowed arrowed-in-right">admin</span>
																</div>
																<div class="text">欢迎大家使用ACE后台管理系统.</div>

																<div class="tools">
																	<a class="btn btn-minier btn-info" href="#">
																		<i class="icon-only icon-share-alt"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img src="/static/assets/avatars/avatar4.png" alt="Jim's Avatar">
															</div>

															<div class="body">
																<div class="time">
																	<i class="icon-time"></i>
																	<span class="grey">3分钟以前</span>
																</div>

																<div class="name">
																	<a href="#">Jim</a>
																</div>
																<div class="text">大家多提提BUG</div>

																<div class="tools">
																	<a class="btn btn-minier btn-info" href="#">
																		<i class="icon-only icon-share-alt"></i>
																	</a>
																</div>
															</div>
														</div>

														<div class="itemdiv dialogdiv">
															<div class="user">
																<img src="/static/assets/avatars/avatar1.png" alt="Alexa's Avatar">
															</div>

															<div class="body">
																<div class="time">
																	<i class="icon-time"></i>
																	<span class="green">4分钟以前</span>
																</div>

																<div class="name">
																	<a href="#">Alexa</a>
																</div>
																<div class="text">继续支持ACE后台系统</div>

																<div class="tools">
																	<a class="btn btn-minier btn-info" href="#">
																		<i class="icon-only icon-share-alt"></i>
																	</a>
																</div>
															</div>
														</div>
													</div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 250px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>

													<form>
														<div class="form-actions">
															<div class="input-group">
																<input type="text" name="message" class="form-control" placeholder="Type your message here ...">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-sm btn-info no-radius" v-on:click="button">
																		<i class="icon-share-alt"></i>
																		发送
																	</button>
																</span>
															</div>
														</div>
													</form>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div><!-- /widget-box -->
									</div><!-- /span -->
								</div><!-- /row -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>

</template>


<script>
export default {
  name: 'show',
  data () {
    return {
      message: '',
      //新闻
      news_count:'',
      news_news:'',
      news_per:'',
      //用户
      user_new:'',
      user_per:'',
      //节目预订
      noticeUser:'',
      //直播量统计
      live_notice:'',
      //访客统计
      log_new:'',
      log_count:'',
      //货币
      b_money:'',
      a_money:'',
    }
  },
  methods:
  {
      button:function () {
      	console.log(this.$route.name)
      	console.dir(this.$children)
      }
      /*button:function()({
      	console.log(this.$route.name)
      }*/
  },
  mounted(){
  	
  },
  created(){
  	load(this)
  }

}

//今日新闻
function load(obj)
{
	$.ajax({
		dataType:'jsonp',
		url:host+'?r=index/index',
		success:function (e) {
			common(e.error);
			if(e.error=='200')
			{
				//今日新闻
				obj.news_news = e.msg.news_news
				obj.news_count = e.msg.news_count
				obj.news_per = Math.round(e.msg.news_news/e.msg.news_count*10000/100)
				//新用户
				obj.user_new = e.msg.user_new
				obj.user_per = Math.round(e.msg.user_new/e.msg.user_count*10000/100)
				//节目预订
				obj.noticeUser = e.msg.noticeUser
				//直播量统计
				obj.live_notice = e.msg.live_notice
				//访客统计
				obj.log_new = e.msg.log_new
				obj.log_count = Math.round(e.msg.log_new/e.msg.log_count*10000/100)
				//货币
				obj.b_money = e.msg.b_money
				obj.a_money = e.msg.a_money
				//console.log(e.msg)
			}else
			{
			    alert(e.msg)
			}
        }
	})
}
try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}

</script>

<style>
</style>