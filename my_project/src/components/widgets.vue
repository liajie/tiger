<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Widgets</li>
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
								Widgets
								<small>
									<i class="icon-double-angle-right"></i>
									Draggabble Widget Boxes &amp; Containers
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header">
												<h5>Default Widget Box</h5>

												<div class="widget-toolbar">
													<a data-action="settings" href="#">
														<i class="icon-cog"></i>
													</a>

													<a data-action="reload" href="#">
														<i class="icon-refresh"></i>
													</a>

													<a data-action="collapse" href="#">
														<i class="icon-chevron-up"></i>
													</a>

													<a data-action="close" href="#">
														<i class="icon-remove"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<p class="alert alert-info">
														Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur. Nulla fringilla eleifend consectetur.
													</p>
													<p class="alert alert-success">
														Raw denim you probably haven't heard of them jean shorts Austin.
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header header-color-blue">
												<h5 class="bigger lighter">
													<i class="icon-table"></i>
													Tables &amp; Colors
												</h5>

												<div class="widget-toolbar widget-toolbar-light no-border">
													<select class="hide" id="simple-colorpicker-1" style="display: none;">
														<option value="#307ECC" data-class="blue" selected="">#307ECC</option>
														<option value="#5090C1" data-class="blue2">#5090C1</option>
														<option value="#6379AA" data-class="blue3">#6379AA</option>
														<option value="#82AF6F" data-class="green">#82AF6F</option>
														<option value="#2E8965" data-class="green2">#2E8965</option>
														<option value="#5FBC47" data-class="green3">#5FBC47</option>
														<option value="#E2755F" data-class="red">#E2755F</option>
														<option value="#E04141" data-class="red2">#E04141</option>
														<option value="#D15B47" data-class="red3">#D15B47</option>
														<option value="#FFC657" data-class="orange">#FFC657</option>
														<option value="#7E6EB0" data-class="purple">#7E6EB0</option>
														<option value="#CE6F9E" data-class="pink">#CE6F9E</option>
														<option value="#404040" data-class="dark">#404040</option>
														<option value="#848484" data-class="grey">#848484</option>
														<option value="#EEE" data-class="default">#EEE</option>
													</select><div class="dropdown dropdown-colorpicker"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="background-color:#307ECC" class="btn-colorpicker"></span></a><ul class="dropdown-menu dropdown-caret pull-right"><li><a data-color="#307ECC" style="background-color:#307ECC;" href="#" class="colorpick-btn selected"></a></li><li><a data-color="#5090C1" style="background-color:#5090C1;" href="#" class="colorpick-btn"></a></li><li><a data-color="#6379AA" style="background-color:#6379AA;" href="#" class="colorpick-btn"></a></li><li><a data-color="#82AF6F" style="background-color:#82AF6F;" href="#" class="colorpick-btn"></a></li><li><a data-color="#2E8965" style="background-color:#2E8965;" href="#" class="colorpick-btn"></a></li><li><a data-color="#5FBC47" style="background-color:#5FBC47;" href="#" class="colorpick-btn"></a></li><li><a data-color="#E2755F" style="background-color:#E2755F;" href="#" class="colorpick-btn"></a></li><li><a data-color="#E04141" style="background-color:#E04141;" href="#" class="colorpick-btn"></a></li><li><a data-color="#D15B47" style="background-color:#D15B47;" href="#" class="colorpick-btn"></a></li><li><a data-color="#FFC657" style="background-color:#FFC657;" href="#" class="colorpick-btn"></a></li><li><a data-color="#7E6EB0" style="background-color:#7E6EB0;" href="#" class="colorpick-btn"></a></li><li><a data-color="#CE6F9E" style="background-color:#CE6F9E;" href="#" class="colorpick-btn"></a></li><li><a data-color="#404040" style="background-color:#404040;" href="#" class="colorpick-btn"></a></li><li><a data-color="#848484" style="background-color:#848484;" href="#" class="colorpick-btn"></a></li><li><a data-color="#EEE" style="background-color:#EEE;" href="#" class="colorpick-btn"></a></li></ul></div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<table class="table table-striped table-bordered table-hover">
														<thead class="thin-border-bottom">
															<tr>
																<th>
																	<i class="icon-user"></i>
																	User
																</th>

																<th>
																	<i>@</i>
																	Email
																</th>
																<th class="hidden-480">Status</th>
															</tr>
														</thead>

														<tbody>
															<tr>
																<td class="">Alex</td>

																<td>
																	<a href="#">alex@email.com</a>
																</td>

																<td class="hidden-480">
																	<span class="label label-warning">Pending</span>
																</td>
															</tr>

															<tr>
																<td class="">Fred</td>

																<td>
																	<a href="#">fred@email.com</a>
																</td>

																<td class="hidden-480">
																	<span class="label label-success arrowed-in arrowed-in-right">Approved</span>
																</td>
															</tr>

															<tr>
																<td class="">Jack</td>

																<td>
																	<a href="#">jack@email.com</a>
																</td>

																<td class="hidden-480">
																	<span class="label label-warning">Pending</span>
																</td>
															</tr>

															<tr>
																<td class="">John</td>

																<td>
																	<a href="#">john@email.com</a>
																</td>

																<td class="hidden-480">
																	<span class="label label-inverse arrowed">Blocked</span>
																</td>
															</tr>

															<tr>
																<td class="">James</td>

																<td>
																	<a href="#">james@email.com</a>
																</td>

																<td class="hidden-480">
																	<span class="label label-info arrowed-in arrowed-in-right">Online</span>
																</td>
															</tr>
														</tbody>
													</table>
												</div>
											</div>
										</div>
									</div><!-- /span -->
								</div><!-- /row -->

								<div class="space-24"></div>

								<div class="row">
									<div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box collapsed">
											<div class="widget-header widget-header-small header-color-orange">
												<h6>
													<i class="icon-sort"></i>
													Small Header &amp; Collapsed
												</h6>

												<div class="widget-toolbar">
													<a data-action="settings" href="#">
														<i class="icon-cog"></i>
													</a>

													<a data-action="reload" href="#">
														<i class="icon-refresh"></i>
													</a>

													<a data-action="collapse" href="#">
														<i class="icon-chevron-down"></i>
													</a>

													<a data-action="close" href="#">
														<i class="icon-remove"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<p class="alert alert-info">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
													</p>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header widget-header-large">
												<h4>Big Header</h4>

												<div class="widget-toolbar">
													<a data-action="settings" href="#">
														<i class="icon-cog"></i>
													</a>

													<a data-action="reload" href="#">
														<i class="icon-refresh"></i>
													</a>

													<a data-action="collapse" href="#">
														<i class="icon-chevron-up"></i>
													</a>

													<a data-action="close" href="#">
														<i class="icon-remove"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<p class="alert alert-info">
														Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis.
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space-24"></div>

								<div class="row">
									<div class="col-xs-12 col-sm-3 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header">
												<h5 class="smaller">With Label</h5>

												<div class="widget-toolbar">
													<span class="label label-success">
														16%
														<i class="icon-arrow-up"></i>
													</span>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-6">
													<div class="alert alert-info"> Hello World! </div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-3 widget-container-span ui-sortable">
										<div class="widget-box light-border">
											<div class="widget-header header-color-dark">
												<h5 class="smaller">With Badge</h5>

												<div class="widget-toolbar">
													<span class="badge badge-danger">Alert</span>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-6">
													<div class="alert alert-info"> Hello World! </div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header widget-header-small header-color-dark">
												<h6 class="smaller">With Labels &amp; Badges</h6>

												<div class="widget-toolbar no-border">
													<label>
														<input type="checkbox" class="ace ace-switch ace-switch-3">
														<span class="lbl"></span>
													</label>
												</div>

												<div class="widget-toolbar">
													<span class="label label-warning">
														1.2%
														<i class="icon-arrow-down"></i>
													</span>
													<span class="badge badge-info">info</span>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div class="alert alert-info">
														Lorem ipsum dolor sit amet, consectetur adipiscing.
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space"></div>

								<div class="row">
									<div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header header-color-dark">
												<h5 class="bigger lighter">Box with Toolbox</h5>

												<div class="widget-toolbar">
													<div data-percent="61%" style="width:100px;" class="progress progress-mini progress-striped active">
														<div style="width:61%" class="progress-bar progress-bar-danger"></div>
													</div>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-toolbox">
													<div class="btn-toolbar">
														<div class="btn-group">
															<button class="btn btn-sm btn-success">
																<i class="icon-ok bigger-110"></i>
																Approve
															</button>

															<button class="btn btn-sm btn-danger">
																<i class="icon-remove bigger-110"></i>
																Reject
															</button>
														</div>

														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-sm">
																<i class="icon-only icon-bold bigger-110"></i>

																<input type="checkbox" value="1">
															</label>

															<label class="btn btn-sm">
																<i class="icon-only icon-italic bigger-110"></i>

																<input type="checkbox" value="2">
															</label>
														</div>

														<div class="btn-group" data-toggle="buttons">
															<label class="btn btn-sm btn-primary">
																<i class="icon-only icon-align-left bigger-110"></i>

																<input type="radio" value="1">
															</label>

															<label class="btn btn-sm btn-primary">
																<i class="icon-only icon-align-center bigger-110"></i>

																<input type="radio" value="2">
															</label>

															<label class="btn btn-sm btn-primary">
																<i class="icon-only icon-align-right bigger-110"></i>

																<input type="radio" value="3">
															</label>
														</div>
													</div>
												</div>
												<div class="widget-main padding-16">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur. Nulla fringilla eleifend consectetur. Etiam justo nisl, gravida id egestas eu, eleifend vel metus. Pellentesque tellus ipsum, euismod in facilisis quis, aliquet quis sem.
												</div>
											</div>
										</div>
									</div>

									<div class="col-xs-12 col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header header-color-pink">
												<h5>Bottom Toolbox (Footer)</h5>

												<div class="widget-toolbar">
													<a data-action="collapse" href="#">
														<i class="1 icon-chevron-up bigger-125"></i>
													</a>
												</div>

												<div class="widget-toolbar no-border">
													<button class="btn btn-xs btn-light bigger">
														<i class="icon-arrow-left"></i>
														Prev
													</button>

													<button data-toggle="dropdown" class="btn btn-xs bigger btn-yellow dropdown-toggle">
														Next
														<i class="icon-chevron-down icon-on-right"></i>
													</button>

													<ul class="dropdown-menu dropdown-yellow pull-right dropdown-caret dropdown-close">
														<li>
															<a href="#">Action</a>
														</li>

														<li>
															<a href="#">Another action</a>
														</li>

														<li>
															<a href="#">Something else here</a>
														</li>

														<li class="divider"></li>

														<li>
															<a href="#">Separated link</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<p class="alert alert-info">
														Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur. Nulla fringilla eleifend consectetur.
													</p>
													<p class="alert alert-success">
														Raw denim you probably haven't heard of them jean shorts Austin.
													</p>
												</div>

												<div class="widget-toolbox padding-8 clearfix">
													<button class="btn btn-xs btn-danger pull-left">
														<i class="icon-remove"></i>
														<span class="bigger-110">I don't accept</span>
													</button>

													<button class="btn btn-xs btn-success pull-right">
														<span class="bigger-110">I accept</span>

														<i class="icon-arrow-right icon-on-right"></i>
													</button>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space"></div>

								<div class="row">
									<div class="col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header">
												<h5 class="smaller">Tabbed</h5>

												<div class="widget-toolbar no-border">
													<ul id="myTab" class="nav nav-tabs">
														<li class="active">
															<a href="#home" data-toggle="tab">Home</a>
														</li>

														<li>
															<a href="#profile" data-toggle="tab">Profile</a>
														</li>

														<li>
															<a href="#info" data-toggle="tab">Info</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-6">
													<div class="tab-content">
														<div class="tab-pane in active" id="home">
															<p>Raw denim you probably haven't heard of them jean shorts Austin.</p>
														</div>

														<div class="tab-pane" id="profile">
															<p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid.</p>
														</div>

														<div class="tab-pane" id="info">
															<p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade.</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box">
											<div class="widget-header widget-hea1der-small header-color-dark">
												<h6>Scroll Content</h6>

												<div class="widget-toolbar">
													<a data-action="settings" href="#">
														<i class="icon-cog"></i>
													</a>

													<a data-action="reload" href="#">
														<i class="icon-refresh"></i>
													</a>

													<a data-action="collapse" href="#">
														<i class="icon-chevron-up"></i>
													</a>

													<a data-action="close" href="#">
														<i class="icon-remove"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-4">
													<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 125px;"><div data-height="125" class="slim-scroll" style="overflow: hidden; width: auto; height: 125px;">
														<div class="content">
															<div class="alert alert-info">
																Lorem ipsum dolor sit amet, consectetur adipiscing.
															</div>
															<div class="alert alert-danger">
																Lorem ipsum dolor sit amet, consectetur adipiscing.
															</div>
															<div class="alert alert-success">
																Lorem ipsum dolor sit amet, consectetur adipiscing.
															</div>
															<div class="alert">
																Lorem ipsum dolor sit amet, consectetur adipiscing.
															</div>
														</div>
													</div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 57.4449px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="space-24"></div>

								<div class="row">
									<div class="col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box transparent">
											<div class="widget-header">
												<h4 class="lighter">Transparent Box</h4>

												<div class="widget-toolbar no-border">
													<a data-action="settings" href="#">
														<i class="icon-cog"></i>
													</a>

													<a data-action="reload" href="#">
														<i class="icon-refresh"></i>
													</a>

													<a data-action="collapse" href="#">
														<i class="icon-chevron-up"></i>
													</a>

													<a data-action="close" href="#">
														<i class="icon-remove"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-6 no-padding-left no-padding-right">
													Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6 widget-container-span ui-sortable">
										<div class="widget-box transparent">
											<div class="widget-header">
												<h4 class="lighter">Tabs With Scroll</h4>

												<div class="widget-toolbar no-border">
													<ul id="myTab2" class="nav nav-tabs">
														<li class="active">
															<a href="#home2" data-toggle="tab">Home</a>
														</li>

														<li>
															<a href="#profile2" data-toggle="tab">Profile</a>
														</li>

														<li>
															<a href="#info2" data-toggle="tab">Info</a>
														</li>
													</ul>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-12 no-padding-left no-padding-right">
													<div class="tab-content padding-4">
														<div class="tab-pane in active" id="home2">
															<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100px;"><div data-height="100" class="slim-scroll" style="overflow: hidden; width: auto; height: 100px;">
																<b>TAB # 1</b>
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
															</div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 42.735px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
														</div>

														<div class="tab-pane" id="profile2">
															<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100px;"><div data-height="100" class="slim-scroll" style="overflow: hidden; width: auto; height: 100px;">
																<b>TAB # 2</b>
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
															</div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
														</div>

														<div class="tab-pane" id="info2">
															<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 100px;"><div data-height="100" class="slim-scroll" style="overflow: hidden; width: auto; height: 100px;">
																<b>TAB # 3</b>
																Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque commodo massa sed ipsum porttitor facilisis. Nullam interdum massa vel nisl fringilla sed viverra erat tincidunt. Phasellus in ipsum velit. Maecenas id erat vel sem convallis blandit. Nunc aliquam enim ut arcu aliquet adipiscing. Fusce dignissim volutpat justo non consectetur.
															</div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  name: 'widgets',
  data () {
    return {
      message: ''
    }
  }
}

try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

<style>
</style>