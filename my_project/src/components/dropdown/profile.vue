<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">More Pages</a>
							</li>
							<li class="active">User Profile</li>
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
								<span v-html='username_top' style='color:red'></span>
								<small>
									<i class="icon-double-angle-right"></i>
									3 styles with inline editable feature
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="clearfix">
									<div class="pull-left alert alert-success no-margin">
										<button data-dismiss="alert" class="close" type="button">
											<i class="icon-remove"></i>
										</button>

										<i class="icon-umbrella bigger-120 blue"></i>
										Click on the image below or on profile fields to edit them ...
									</div>

									<div class="pull-right">
										<span class="green middle bolder">Choose profile: &nbsp;</span>

										<div class="btn-toolbar inline middle no-margin">
											<div class="btn-group no-margin" data-toggle="buttons">
												<label class="btn btn-sm btn-yellow active">
													<span class="bigger-110">1</span>

													<input type="radio" value="1">
												</label>

												<label class="btn btn-sm btn-yellow">
													<span class="bigger-110">2</span>

													<input type="radio" value="2">
												</label>

												<label class="btn btn-sm btn-yellow">
													<span class="bigger-110">3</span>

													<input type="radio" value="3">
												</label>
											</div>
										</div>
									</div>
								</div>

								<div class="hr dotted"></div>

								<div>
									<div class="user-profile row" id="user-profile-1">
										<div class="col-xs-12 col-sm-3 center">
											<div>
												<span class="profile-picture" v-html='u_img'>
													
												</span>

												<div class="space-4"></div>

												<div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
													<div class="inline position-relative">
														<a data-toggle="dropdown" class="user-title-label dropdown-toggle" href="#">
															<i class="icon-circle light-green middle"></i>
															&nbsp;
															<span class="white" v-html='nickname'></span>
														</a>

														<ul class="align-left dropdown-menu dropdown-caret dropdown-lighter">
															<li class="dropdown-header"> Change Status </li>

															<li>
																<a href="#">
																	<i class="icon-circle green"></i>
																	&nbsp;
																	<span class="green">Available</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="icon-circle red"></i>
																	&nbsp;
																	<span class="red">Busy</span>
																</a>
															</li>

															<li>
																<a href="#">
																	<i class="icon-circle grey"></i>
																	&nbsp;
																	<span class="grey">Invisible</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>

											<div class="space-6"></div>

											<div class="profile-contact-info">
												<div class="profile-contact-links align-left">
													<a href="#" class="btn btn-link">
														<i class="icon-plus-sign bigger-120 green"></i>
														Add as a friend
													</a>

													<a href="#" class="btn btn-link">
														<i class="icon-envelope bigger-120 pink"></i>
														Send a message
													</a>

													<a href="#" class="btn btn-link">
														<i class="icon-globe bigger-125 blue"></i>
														www.alexdoe.com
													</a>
												</div>

												<div class="space-6"></div>

												<div class="profile-social-links center">
													<a data-original-title="Visit my Facebook" title="" class="tooltip-info" href="#">
														<i class="middle icon-facebook-sign icon-2x blue"></i>
													</a>

													<a data-original-title="Visit my Twitter" title="" class="tooltip-info" href="#">
														<i class="middle icon-twitter-sign icon-2x light-blue"></i>
													</a>

													<a data-original-title="Visit my Pinterest" title="" class="tooltip-error" href="#">
														<i class="middle icon-pinterest-sign icon-2x red"></i>
													</a>
												</div>
											</div>

											<div class="hr hr12 dotted"></div>

											<div class="clearfix">
												<div class="grid2">
													<span class="bigger-175 blue">25</span>

													<br>
													Followers
												</div>

												<div class="grid2">
													<span class="bigger-175 blue">12</span>

													<br>
													Following
												</div>
											</div>

											<div class="hr hr16 dotted"></div>
										</div>

										<div class="col-xs-12 col-sm-9">
											<div class="center">
												<span class="btn btn-app btn-sm btn-light no-hover">
													<span class="line-height-1 bigger-170 blue"> 1,411 </span>

													<br>
													<span class="line-height-1 smaller-90"> Views </span>
												</span>

												<span class="btn btn-app btn-sm btn-yellow no-hover">
													<span class="line-height-1 bigger-170"> 32 </span>

													<br>
													<span class="line-height-1 smaller-90"> Followers </span>
												</span>

												<span class="btn btn-app btn-sm btn-pink no-hover">
													<span class="line-height-1 bigger-170"> 4 </span>

													<br>
													<span class="line-height-1 smaller-90"> Projects </span>
												</span>

												<span class="btn btn-app btn-sm btn-grey no-hover">
													<span class="line-height-1 bigger-170"> 23 </span>

													<br>
													<span class="line-height-1 smaller-90"> Reviews </span>
												</span>

												<span class="btn btn-app btn-sm btn-success no-hover">
													<span class="line-height-1 bigger-170"> 7 </span>

													<br>
													<span class="line-height-1 smaller-90"> Albums </span>
												</span>

												<span class="btn btn-app btn-sm btn-primary no-hover">
													<span class="line-height-1 bigger-170"> 55 </span>

													<br>
													<span class="line-height-1 smaller-90"> Contacts </span>
												</span>
											</div>

											<div class="space-12"></div>

											<div class="profile-user-info profile-user-info-striped">
												<div class="profile-info-row">
													<div class="profile-info-name" >username </div>

													<div class="profile-info-value">
														<span id="username" class="editable editable-click" v-html='username'></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Location </div>

													<div class="profile-info-value">
														<i class="icon-map-marker light-orange bigger-110"></i>
														<span id="country" class="editable editable-click" v-html='home'></span>
														
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Num </div>

													<div class="profile-info-value">
														<span id="age" class="editable editable-click"v-html='mynum' ></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> Joined </div>

													<div class="profile-info-value">
														<span id="signup" class="editable editable-click" v-html='birthday'></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name" > TEL </div>

													<div class="profile-info-value">
														<span id="login" class="editable editable-click" v-html='tel'></span>
													</div>
												</div>

												<div class="profile-info-row">
													<div class="profile-info-name"> 个性签名： </div>

													<div class="profile-info-value">
														<span id="about" class="editable editable-click" v-html='sign'></span>
													</div>
												</div>
											</div>

											<div class="space-20"></div>

											<div class="widget-box transparent">
												<div class="widget-header widget-header-small">
													<h4 class="blue smaller">
														<i class="icon-rss orange"></i>
														Recent Activities
													</h4>

													<div class="widget-toolbar action-buttons">
														<a data-action="reload" href="#">
															<i class="icon-refresh blue"></i>
														</a>

														&nbsp;
														<a class="pink" href="#">
															<i class="icon-trash"></i>
														</a>
													</div>
												</div>

												<div class="widget-body">
													<div class="widget-main padding-8">
														<div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><div class="profile-feed" id="profile-feed-1" style="overflow: hidden; width: auto; height: 250px;">
															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar5.png" alt="Alex Doe's avatar" class="pull-left">
																	<a href="#" class="user"> Alex Doe </a>
																	changed his profile photo.
																	<a href="#">Take a look</a>

																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		an hour ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar1.png" alt="Susan Smith's avatar" class="pull-left">
																	<a href="#" class="user"> Susan Smith </a>

																	is now friends with Alex Doe.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		2 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-ok btn-success no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>
																	joined
																	<a href="#">Country Music</a>

																	group.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		5 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-picture btn-info no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>
																	uploaded a new photo.
																	<a href="#">Take a look</a>

																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		5 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar4.png" alt="David Palms's avatar" class="pull-left">
																	<a href="#" class="user"> David Palms </a>

																	left a comment on Alex's wall.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		8 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-edit btn-pink no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>
																	published a new blog post.
																	<a href="#">Read now</a>

																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		11 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar5.png" alt="Alex Doe's avatar" class="pull-left">
																	<a href="#" class="user"> Alex Doe </a>

																	upgraded his skills.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		12 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>

																	logged in.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		12 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-off btn-inverse no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>

																	logged out.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		16 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>

																	logged in.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		16 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>
														</div><div class="slimScrollBar ui-draggable" style="background: rgb(0, 0, 0) none repeat scroll 0% 0%; width: 7px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 97.5039px;"></div><div class="slimScrollRail" style="width: 7px; height: 100%; position: absolute; top: 0px; display: none; border-radius: 7px; background: rgb(51, 51, 51) none repeat scroll 0% 0%; opacity: 0.2; z-index: 90; right: 1px;"></div></div>
													</div>
												</div>
											</div>

											<div class="hr hr2 hr-double"></div>

											<div class="space-6"></div>

											<div class="center">
												<a class="btn btn-sm btn-primary" href="#">
													<i class="icon-rss bigger-150 middle"></i>
													<span class="bigger-110">View more activities</span>

													<i class="icon-on-right icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div>
								</div>

								<div class="hide">
									<div class="user-profile" id="user-profile-2">
										<div class="tabbable">
											<ul class="nav nav-tabs padding-18">
												<li class="active">
													<a href="#home" data-toggle="tab">
														<i class="green icon-user bigger-120"></i>
														Profile
													</a>
												</li>

												<li>
													<a href="#feed" data-toggle="tab">
														<i class="orange icon-rss bigger-120"></i>
														Activity Feed
													</a>
												</li>

												<li>
													<a href="#friends" data-toggle="tab">
														<i class="blue icon-group bigger-120"></i>
														Friends
													</a>
												</li>

												<li>
													<a href="#pictures" data-toggle="tab">
														<i class="pink icon-picture bigger-120"></i>
														Pictures
													</a>
												</li>
											</ul>

											<div class="tab-content no-border padding-24">
												<div class="tab-pane in active" id="home">
													<div class="row">
														<div class="col-xs-12 col-sm-3 center">
															<span class="profile-picture">
																<img src="/static/assets/avatars/profile-pic.jpg" id="avatar2" alt="Alex's Avatar" class="editable img-responsive">
															</span>

															<div class="space space-4"></div>

															<a class="btn btn-sm btn-block btn-success" href="#">
																<i class="icon-plus-sign bigger-120"></i>
																<span class="bigger-110">Add as a friend</span>
															</a>

															<a class="btn btn-sm btn-block btn-primary" href="#">
																<i class="icon-envelope-alt bigger-110"></i>
																<span class="bigger-110">Send a message</span>
															</a>
														</div><!-- /span -->

														<div class="col-xs-12 col-sm-9">
															<h4 class="blue">
																<span class="middle">Alex M. Doe</span>

																<span class="label label-purple arrowed-in-right">
																	<i class="icon-circle smaller-80 align-middle"></i>
																	online
																</span>
															</h4>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Username </div>

																	<div class="profile-info-value">
																		<span>alexdoe</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Location </div>

																	<div class="profile-info-value">
																		<i class="icon-map-marker light-orange bigger-110"></i>
																		<span>Netherlands</span>
																		<span>Amsterdam</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Age </div>

																	<div class="profile-info-value">
																		<span>38</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Joined </div>

																	<div class="profile-info-value">
																		<span>20/06/2010</span>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name"> Last Online </div>

																	<div class="profile-info-value">
																		<span>3 hours ago</span>
																	</div>
																</div>
															</div>

															<div class="hr hr-8 dotted"></div>

															<div class="profile-user-info">
																<div class="profile-info-row">
																	<div class="profile-info-name"> Website </div>

																	<div class="profile-info-value">
																		<a target="_blank" href="#">www.alexdoe.com</a>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle icon-facebook-sign bigger-150 blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<a href="#">Find me on Facebook</a>
																	</div>
																</div>

																<div class="profile-info-row">
																	<div class="profile-info-name">
																		<i class="middle icon-twitter-sign bigger-150 light-blue"></i>
																	</div>

																	<div class="profile-info-value">
																		<a href="#">Follow me on Twitter</a>
																	</div>
																</div>
															</div>
														</div><!-- /span -->
													</div><!-- /row-fluid -->

													<div class="space-20"></div>

													<div class="row">
														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small">
																	<h4 class="smaller">
																		<i class="icon-check bigger-110"></i>
																		Little About Me
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main">
																		<p>
																			My job is mostly lorem ipsuming and dolor sit ameting as long as consectetur adipiscing elit.
																		</p>
																		<p>
																			Sometimes quisque commodo massa gets in the way and sed ipsum porttitor facilisis.
																		</p>
																		<p>
																			The best thing about my job is that vestibulum id ligula porta felis euismod and nullam quis risus eget urna mollis ornare.
																		</p>
																		<p>
																			Thanks for visiting my profile.
																		</p>
																	</div>
																</div>
															</div>
														</div>

														<div class="col-xs-12 col-sm-6">
															<div class="widget-box transparent">
																<div class="widget-header widget-header-small header-color-blue2">
																	<h4 class="smaller">
																		<i class="icon-lightbulb bigger-120"></i>
																		My Skills
																	</h4>
																</div>

																<div class="widget-body">
																	<div class="widget-main padding-16">
																		<div class="clearfix">
																			<div class="grid3 center">
																				<div data-color="#CA5952" data-percent="45" class="easy-pie-chart percentage easyPieChart" style="width: 72px; height: 72px; line-height: 72px; color: rgb(202, 89, 82);">
																					<span class="percent">45</span>%
																				<canvas height="72" width="72"></canvas></div>

																				<div class="space-2"></div>
																				Graphic Design
																			</div>

																			<div class="grid3 center">
																				<div data-color="#59A84B" data-percent="90" class="center easy-pie-chart percentage easyPieChart" style="width: 72px; height: 72px; line-height: 72px; color: rgb(89, 168, 75);">
																					<span class="percent">90</span>%
																				<canvas height="72" width="72"></canvas></div>

																				<div class="space-2"></div>
																				HTML5 &amp; CSS3
																			</div>

																			<div class="grid3 center">
																				<div data-color="#9585BF" data-percent="80" class="center easy-pie-chart percentage easyPieChart" style="width: 72px; height: 72px; line-height: 72px; color: rgb(149, 133, 191);">
																					<span class="percent">80</span>%
																				<canvas height="72" width="72"></canvas></div>

																				<div class="space-2"></div>
																				Javascript/jQuery
																			</div>
																		</div>

																		<div class="hr hr-16"></div>

																		<div class="profile-skills">
																			<div class="progress">
																				<div style="width:80%" class="progress-bar">
																					<span class="pull-left">HTML5 &amp; CSS3</span>
																					<span class="pull-right">80%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div style="width:72%" class="progress-bar progress-bar-success">
																					<span class="pull-left">Javascript &amp; jQuery</span>

																					<span class="pull-right">72%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div style="width:70%" class="progress-bar progress-bar-purple">
																					<span class="pull-left">PHP &amp; MySQL</span>

																					<span class="pull-right">70%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div style="width:50%" class="progress-bar progress-bar-warning">
																					<span class="pull-left">Wordpress</span>

																					<span class="pull-right">50%</span>
																				</div>
																			</div>

																			<div class="progress">
																				<div style="width:35%" class="progress-bar progress-bar-danger">
																					<span class="pull-left">Photoshop</span>

																					<span class="pull-right">35%</span>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div><!-- #home -->

												<div class="tab-pane" id="feed">
													<div class="profile-feed row-fluid">
														<div class="span6">
															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar5.png" alt="Alex Doe's avatar" class="pull-left">
																	<a href="#" class="user"> Alex Doe </a>
																	changed his profile photo.
																	<a href="#">Take a look</a>

																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		an hour ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar1.png" alt="Susan Smith's avatar" class="pull-left">
																	<a href="#" class="user"> Susan Smith </a>

																	is now friends with Alex Doe.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		2 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-ok btn-success no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>
																	joined
																	<a href="#">Country Music</a>

																	group.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		5 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-picture btn-info no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>
																	uploaded a new photo.
																	<a href="#">Take a look</a>

																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		5 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar4.png" alt="David Palms's avatar" class="pull-left">
																	<a href="#" class="user"> David Palms </a>

																	left a comment on Alex's wall.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		8 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>
														</div><!-- /span -->

														<div class="span6">
															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-edit btn-pink no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>
																	published a new blog post.
																	<a href="#">Read now</a>

																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		11 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<img src="/static/assets/avatars/avatar5.png" alt="Alex Doe's avatar" class="pull-left">
																	<a href="#" class="user"> Alex Doe </a>

																	upgraded his skills.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		12 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>

																	logged in.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		12 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-off btn-inverse no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>

																	logged out.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		16 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>

															<div class="profile-activity clearfix">
																<div>
																	<i class="pull-left thumbicon icon-key btn-info no-hover"></i>
																	<a href="#" class="user"> Alex Doe </a>

																	logged in.
																	<div class="time">
																		<i class="icon-time bigger-110"></i>
																		16 hours ago
																	</div>
																</div>

																<div class="tools action-buttons">
																	<a class="blue" href="#">
																		<i class="icon-pencil bigger-125"></i>
																	</a>

																	<a class="red" href="#">
																		<i class="icon-remove bigger-125"></i>
																	</a>
																</div>
															</div>
														</div><!-- /span -->
													</div><!-- /row -->

													<div class="space-12"></div>

													<div class="center">
														<a class="btn btn-small btn-primary" href="#">
															<i class="icon-rss bigger-150 middle"></i>

															View more activities
															<i class="icon-on-right icon-arrow-right"></i>
														</a>
													</div>
												</div><!-- /#feed -->

												<div class="tab-pane" id="friends">
													<div class="profile-users clearfix">
														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Bob Doe's avatar" src="/static/assets/avatars/avatar4.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			Bob Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Content Editor</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 orange"></i>
																			<span class="green"> 20 mins ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Rose Doe's avatar" src="/static/assets/avatars/avatar1.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			Rose Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Graphic Designer</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 grey"></i>
																			<span class="grey"> 30 min ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Jim Doe's avatar" src="/static/assets/avatars/avatar.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-busy"></span>
																			Jim Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">SEO &amp; Advertising</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 red"></i>
																			<span class="grey"> 1 hour ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Alex Doe's avatar" src="/static/assets/avatars/avatar5.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-idle"></span>
																			Alex Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Marketing</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 orange"></i>
																			<span class=""> 40 minutes idle </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Phil Doe's avatar" src="/static/assets/avatars/avatar2.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			Phil Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Public Relations</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 orange"></i>
																			<span class="green"> 2 hours ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Susan Doe's avatar" src="/static/assets/avatars/avatar3.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-online"></span>
																			Susan Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">HR Management</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 orange"></i>
																			<span class="green"> 20 mins ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Jennifer Doe's avatar" src="/static/assets/avatars/avatar1.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			Jennifer Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Graphic Designer</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 grey"></i>
																			<span class="grey"> 2 hours ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>

														<div class="itemdiv memberdiv">
															<div class="inline position-relative">
																<div class="user">
																	<a href="#">
																		<img alt="Alexa Doe's avatar" src="/static/assets/avatars/avatar3.png">
																	</a>
																</div>

																<div class="body">
																	<div class="name">
																		<a href="#">
																			<span class="user-status status-offline"></span>
																			Alexa Doe
																		</a>
																	</div>
																</div>

																<div class="popover">
																	<div class="arrow"></div>

																	<div class="popover-content">
																		<div class="bolder">Accounting</div>

																		<div class="time">
																			<i class="icon-time middle bigger-120 grey"></i>
																			<span class="grey"> 4 hours ago </span>
																		</div>

																		<div class="hr dotted hr-8"></div>

																		<div class="tools action-buttons">
																			<a href="#">
																				<i class="icon-facebook-sign blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-twitter-sign light-blue bigger-150"></i>
																			</a>

																			<a href="#">
																				<i class="icon-google-plus-sign red bigger-150"></i>
																			</a>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>

													<div class="hr hr10 hr-double"></div>

													<ul class="pager pull-right">
														<li class="previous disabled">
															<a href="#">← Prev</a>
														</li>

														<li class="next">
															<a href="#">Next →</a>
														</li>
													</ul>
												</div><!-- /#friends -->

												<div class="tab-pane" id="pictures">
													<ul class="ace-thumbnails">
														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-1.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>

														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-2.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>

														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-3.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>

														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-4.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>

														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-5.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>

														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-6.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>

														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-1.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>

														<li>
															<a data-rel="colorbox" href="#">
																<img src="/static/assets/images/gallery/thumb-2.jpg" alt="150x150">
																<div class="text">
																	<div class="inner">Sample Caption on Hover</div>
																</div>
															</a>

															<div class="tools tools-bottom">
																<a href="#">
																	<i class="icon-link"></i>
																</a>

																<a href="#">
																	<i class="icon-paper-clip"></i>
																</a>

																<a href="#">
																	<i class="icon-pencil"></i>
																</a>

																<a href="#">
																	<i class="icon-remove red"></i>
																</a>
															</div>
														</li>
													</ul>
												</div><!-- /#pictures -->
											</div>
										</div>
									</div>
								</div>

								<div class="hide">
									<div class="user-profile row" id="user-profile-3">
										<div class="col-sm-offset-1 col-sm-10">
											<div class="well well-sm">
												<button data-dismiss="alert" class="close" type="button">×</button>
												&nbsp;
												<div class="inline middle blue bigger-110"> Your profile is 70% complete </div>

												&nbsp; &nbsp; &nbsp;
												<div class="inline middle no-margin progress progress-striped active" data-percent="70%" style="width:200px;">
													<div style="width:70%" class="progress-bar progress-bar-success"></div>
												</div>
											</div><!-- /well -->

											<div class="space"></div>

											<form class="form-horizontal">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a href="#edit-basic" data-toggle="tab">
																<i class="green icon-edit bigger-125"></i>
																Basic Info
															</a>
														</li>

														<li>
															<a href="#edit-settings" data-toggle="tab">
																<i class="purple icon-cog bigger-125"></i>
																Settings
															</a>
														</li>

														<li>
															<a href="#edit-password" data-toggle="tab">
																<i class="blue icon-key bigger-125"></i>
																Password
															</a>
														</li>
													</ul>

													<div class="tab-content profile-edit-tab-content">
														<div class="tab-pane in active" id="edit-basic">
															<h4 class="header blue bolder smaller">General</h4>

															<div class="row">
																<div class="col-xs-12 col-sm-4">
																	<div class="ace-file-input ace-file-multiple"><input type="file"><label data-title="Change avatar" class="file-label"><span data-title="No File ..." class="file-name"><i class="icon-picture"></i></span></label><a href="#" class="remove"><i class="icon-remove"></i></a></div>
																</div>

																<div class="vspace-xs"></div>

																<div class="col-xs-12 col-sm-8">
																	<div class="form-group">
																		<label for="form-field-username" class="col-sm-4 control-label no-padding-right">Username</label>

																		<div class="col-sm-8">
																			<input type="text" value="alexdoe" placeholder="Username" id="form-field-username" class="col-xs-12 col-sm-10">
																		</div>
																	</div>

																	<div class="space-4"></div>

																	<div class="form-group">
																		<label for="form-field-first" class="col-sm-4 control-label no-padding-right">Name</label>

																		<div class="col-sm-8">
																			<input type="text" value="Alex" placeholder="First Name" id="form-field-first" class="input-small">
																			<input type="text" value="Doe" placeholder="Last Name" id="form-field-last" class="input-small">
																		</div>
																	</div>
																</div>
															</div>

															<hr>
															<div class="form-group">
																<label for="form-field-date" class="col-sm-3 control-label no-padding-right">Birth Date</label>

																<div class="col-sm-9">
																	<div class="input-medium">
																		<div class="input-group">
																			<input type="text" placeholder="dd-mm-yyyy" data-date-format="dd-mm-yyyy" id="form-field-date" class="input-medium date-picker">
																			<span class="input-group-addon">
																				<i class="icon-calendar"></i>
																			</span>
																		</div>
																	</div>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label class="col-sm-3 control-label no-padding-right">Gender</label>

																<div class="col-sm-9">
																	<label class="inline">
																		<input type="radio" class="ace" name="form-field-radio">
																		<span class="lbl"> Male</span>
																	</label>

																	&nbsp; &nbsp; &nbsp;
																	<label class="inline">
																		<input type="radio" class="ace" name="form-field-radio">
																		<span class="lbl"> Female</span>
																	</label>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label for="form-field-comment" class="col-sm-3 control-label no-padding-right">Comment</label>

																<div class="col-sm-9">
																	<textarea id="form-field-comment"></textarea>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Contact</h4>

															<div class="form-group">
																<label for="form-field-email" class="col-sm-3 control-label no-padding-right">Email</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" value="alexdoe@gmail.com" id="form-field-email">
																		<i class="icon-envelope"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label for="form-field-website" class="col-sm-3 control-label no-padding-right">Website</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="url" value="http://www.alexdoe.com/" id="form-field-website">
																		<i class="icon-globe"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label for="form-field-phone" class="col-sm-3 control-label no-padding-right">Phone</label>

																<div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="text" id="form-field-phone" class="input-medium input-mask-phone">
																		<i class="icon-phone icon-flip-horizontal"></i>
																	</span>
																</div>
															</div>

															<div class="space"></div>
															<h4 class="header blue bolder smaller">Social</h4>

															<div class="form-group">
																<label for="form-field-facebook" class="col-sm-3 control-label no-padding-right">Facebook</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" id="form-field-facebook" value="facebook_alexdoe">
																		<i class="icon-facebook blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label for="form-field-twitter" class="col-sm-3 control-label no-padding-right">Twitter</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" id="form-field-twitter" value="twitter_alexdoe">
																		<i class="icon-twitter light-blue"></i>
																	</span>
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label for="form-field-gplus" class="col-sm-3 control-label no-padding-right">Google+</label>

																<div class="col-sm-9">
																	<span class="input-icon">
																		<input type="text" id="form-field-gplus" value="google_alexdoe">
																		<i class="icon-google-plus red"></i>
																	</span>
																</div>
															</div>
														</div>

														<div class="tab-pane" id="edit-settings">
															<div class="space-10"></div>

															<div>
																<label class="inline">
																	<input type="checkbox" class="ace" name="form-field-checkbox">
																	<span class="lbl"> Make my profile public</span>
																</label>
															</div>

															<div class="space-8"></div>

															<div>
																<label class="inline">
																	<input type="checkbox" class="ace" name="form-field-checkbox">
																	<span class="lbl"> Email me new updates</span>
																</label>
															</div>

															<div class="space-8"></div>

															<div>
																<label class="inline">
																	<input type="checkbox" class="ace" name="form-field-checkbox">
																	<span class="lbl"> Keep a history of my conversations</span>
																</label>

																<label class="inline">
																	<span class="space-2 block"></span>

																	for
																	<input type="text" maxlength="3" class="input-mini">
																	days
																</label>
															</div>
														</div>

														<div class="tab-pane" id="edit-password">
															<div class="space-10"></div>

															<div class="form-group">
																<label for="form-field-pass1" class="col-sm-3 control-label no-padding-right">New Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass1">
																</div>
															</div>

															<div class="space-4"></div>

															<div class="form-group">
																<label for="form-field-pass2" class="col-sm-3 control-label no-padding-right">Confirm Password</label>

																<div class="col-sm-9">
																	<input type="password" id="form-field-pass2">
																</div>
															</div>
														</div>
													</div>
												</div>

												<div class="clearfix form-actions">
													<div class="col-md-offset-3 col-md-9">
														<button type="button" class="btn btn-info">
															<i class="icon-ok bigger-110"></i>
															Save
														</button>

														&nbsp; &nbsp;
														<button type="reset" class="btn">
															<i class="icon-undo bigger-110"></i>
															Reset
														</button>
													</div>
												</div>
											</form>
										</div><!-- /span -->
									</div><!-- /user-profile -->
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  name: 'dropdown',
  data () {
    return {
      message: '',
      u_img:'<img src="/static/assets/avatars/profile-pic.jpg" alt="Alexs Avatar">未登录</img>',
      nickname:'未登录',
      username:'未登录',
      home:'未登录',
      mynum:'未登录',
      birthday:'未登录',
      tel:'未登录',
      sign:'未登录',
      username_top:'未登录'
    }
  },
  methods:{
  
  },
  created(){
  	var _this=this;
  	var profile='profile';
  	$.ajax({
  			url:host+'?r=profile/profile',
  			dataType:'jsonp',
  			data:{profile:profile},
  			success:function(msg)
  			{
  				//alert(msg)
  				//alert(http_img+msg.u_img)
  				_this.u_img='<img src="'+http_img+msg.u_img+'" alt="Alexs Avatar" style="width:200px;height:200px">'
  				_this.nickname=msg.nickname
  				_this.username=msg.username
  				_this.home=msg.home
  				_this.mynum=msg.mynum+'&nbsp&nbsp&nbsp(积分)'
  				_this.birthday=msg.birthday
  				_this.tel=msg.tel
  				_this.sign=msg.sign
  				_this.username_top=msg.username+'的主页'

  			}
  		})
  }
  
}

try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
</script>

<style>
</style>