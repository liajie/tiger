<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Forms</a>
							</li>
							<li class="active">Wizard &amp; Validation</li>
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
								Form Wizard
								<small>
									<i class="icon-double-angle-right"></i>
									and Validation
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<h4 class="lighter">
									<i class="icon-hand-right icon-animated-hand-pointer blue"></i>
									<a class="pink" data-toggle="modal" href="#modal-wizard"> Wizard Inside a Modal Box </a>
								</h4>

								<div class="hr hr-18 hr-double dotted"></div>

								<div class="row-fluid">
									<div class="span12">
										<div class="widget-box">
											<div class="widget-header widget-header-blue widget-header-flat">
												<h4 class="lighter">New Item Wizard</h4>

												<div class="widget-toolbar">
													<label>
														<small class="green">
															<b>Validation</b>
														</small>

														<input type="checkbox" class="ace ace-switch ace-switch-4" id="skip-validation">
														<span class="lbl"></span>
													</label>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<div data-target="#step-container" class="row-fluid" id="fuelux-wizard">
														<ul class="wizard-steps">
															<li class="active" data-target="#step1">
																<span class="step">1</span>
																<span class="title">Validation states</span>
															</li>

															<li data-target="#step2">
																<span class="step">2</span>
																<span class="title">Alerts</span>
															</li>

															<li data-target="#step3">
																<span class="step">3</span>
																<span class="title">Payment Info</span>
															</li>

															<li data-target="#step4">
																<span class="step">4</span>
																<span class="title">Other Info</span>
															</li>
														</ul>
													</div>

													<hr>
													<div id="step-container" class="step-content row-fluid position-relative">
														<div id="step1" class="step-pane active">
															<h3 class="lighter block green">Enter the following information</h3>

															<form id="sample-form" class="form-horizontal">
																<div class="form-group has-warning">
																	<label class="col-xs-12 col-sm-3 control-label no-padding-right" for="inputWarning">Input with warning</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right">
																			<input type="text" class="width-100" id="inputWarning">
																			<i class="icon-leaf"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Warning tip help!
																	</div>
																</div>

																<div class="form-group has-error">
																	<label class="col-xs-12 col-sm-3 col-md-3 control-label no-padding-right" for="inputError">Input with error</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right">
																			<input type="text" class="width-100" id="inputError">
																			<i class="icon-remove-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
																</div>

																<div class="form-group has-success">
																	<label class="col-xs-12 col-sm-3 control-label no-padding-right" for="inputSuccess">Input with success</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right">
																			<input type="text" class="width-100" id="inputSuccess">
																			<i class="icon-ok-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline">
																		Success tip help!
																	</div>
																</div>

																<div class="form-group has-info">
																	<label class="col-xs-12 col-sm-3 control-label no-padding-right" for="inputInfo">Input with info</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="block input-icon input-icon-right">
																			<input type="text" class="width-100" id="inputInfo">
																			<i class="icon-info-sign"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"> Info tip help! </div>
																</div>

																<div class="form-group">
																	<label class="col-xs-12 col-sm-3 control-label no-padding-right" for="inputError2">Input with error</label>

																	<div class="col-xs-12 col-sm-5">
																		<span class="input-icon block">
																			<input type="text" class="width-100" id="inputError2">
																			<i class="icon-remove-sign red"></i>
																		</span>
																	</div>
																	<div class="help-block col-xs-12 col-sm-reset inline"> Error tip help! </div>
																</div>
															</form>

															<form method="get" id="validation-form" class="form-horizontal hide" novalidate="novalidate">
																<div class="form-group">
																	<label for="email" class="control-label col-xs-12 col-sm-3 no-padding-right">Email Address:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="email" class="col-xs-12 col-sm-6" id="email" name="email">
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label for="password" class="control-label col-xs-12 col-sm-3 no-padding-right">Password:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="password" class="col-xs-12 col-sm-4" id="password" name="password">
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label for="password2" class="control-label col-xs-12 col-sm-3 no-padding-right">Confirm Password:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="password" class="col-xs-12 col-sm-4" id="password2" name="password2">
																		</div>
																	</div>
																</div>

																<div class="hr hr-dotted"></div>

																<div class="form-group">
																	<label for="name" class="control-label col-xs-12 col-sm-3 no-padding-right">Company Name:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="text" class="col-xs-12 col-sm-5" name="name" id="name">
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label for="phone" class="control-label col-xs-12 col-sm-3 no-padding-right">Phone Number:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="input-group">
																			<span class="input-group-addon">
																				<i class="icon-phone"></i>
																			</span>

																			<input type="tel" name="phone" id="phone">
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label for="url" class="control-label col-xs-12 col-sm-3 no-padding-right">Company URL:</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<input type="url" class="col-xs-12 col-sm-8" name="url" id="url">
																		</div>
																	</div>
																</div>

																<div class="hr hr-dotted"></div>

																<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right">Subscribe to</label>

																	<div class="col-xs-12 col-sm-9">
																		<div>
																			<label>
																				<input type="checkbox" class="ace" value="1" name="subscription">
																				<span class="lbl"> Latest news and announcements</span>
																			</label>
																		</div>

																		<div>
																			<label>
																				<input type="checkbox" class="ace" value="2" name="subscription">
																				<span class="lbl"> Product offers and discounts</span>
																			</label>
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label class="control-label col-xs-12 col-sm-3 no-padding-right">Gender</label>

																	<div class="col-xs-12 col-sm-9">
																		<div>
																			<label class="blue">
																				<input type="radio" class="ace" value="1" name="gender">
																				<span class="lbl"> Male</span>
																			</label>
																		</div>

																		<div>
																			<label class="blue">
																				<input type="radio" class="ace" value="2" name="gender">
																				<span class="lbl"> Female</span>
																			</label>
																		</div>
																	</div>
																</div>

																<div class="hr hr-dotted"></div>

																<div class="form-group">
																	<label for="s2id_autogen1" class="control-label col-xs-12 col-sm-3 no-padding-right">State</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="select2-container select2" id="s2id_state" style="width: 200px;"><a tabindex="-1" class="select2-choice" onclick="return false;" href="javascript:void(0)">   <span class="select2-chosen">&nbsp;</span><abbr class="select2-search-choice-close"></abbr>   <span class="select2-arrow"><b></b></span></a><input type="text" class="select2-focusser select2-offscreen" id="s2id_autogen1"><div class="select2-drop select2-display-none select2-with-searchbox">   <div class="select2-search">       <input type="text" class="select2-input" spellcheck="false" autocapitalize="off" autocorrect="off" autocomplete="off">   </div>   <ul class="select2-results">   </ul></div></div><select data-placeholder="Click to Choose..." class="select2 select2-offscreen" name="state" id="state" style="width: 200px;" tabindex="-1">
																			<option value="">&nbsp;</option>
																			<option value="AL">Alabama</option>
																			<option value="AK">Alaska</option>
																			<option value="AZ">Arizona</option>
																			<option value="AR">Arkansas</option>
																			<option value="CA">California</option>
																			<option value="CO">Colorado</option>
																			<option value="CT">Connecticut</option>
																			<option value="DE">Delaware</option>
																			<option value="FL">Florida</option>
																			<option value="GA">Georgia</option>
																			<option value="HI">Hawaii</option>
																			<option value="ID">Idaho</option>
																			<option value="IL">Illinois</option>
																			<option value="IN">Indiana</option>
																			<option value="IA">Iowa</option>
																			<option value="KS">Kansas</option>
																			<option value="KY">Kentucky</option>
																			<option value="LA">Louisiana</option>
																			<option value="ME">Maine</option>
																			<option value="MD">Maryland</option>
																			<option value="MA">Massachusetts</option>
																			<option value="MI">Michigan</option>
																			<option value="MN">Minnesota</option>
																			<option value="MS">Mississippi</option>
																			<option value="MO">Missouri</option>
																			<option value="MT">Montana</option>
																			<option value="NE">Nebraska</option>
																			<option value="NV">Nevada</option>
																			<option value="NH">New Hampshire</option>
																			<option value="NJ">New Jersey</option>
																			<option value="NM">New Mexico</option>
																			<option value="NY">New York</option>
																			<option value="NC">North Carolina</option>
																			<option value="ND">North Dakota</option>
																			<option value="OH">Ohio</option>
																			<option value="OK">Oklahoma</option>
																			<option value="OR">Oregon</option>
																			<option value="PA">Pennsylvania</option>
																			<option value="RI">Rhode Island</option>
																			<option value="SC">South Carolina</option>
																			<option value="SD">South Dakota</option>
																			<option value="TN">Tennessee</option>
																			<option value="TX">Texas</option>
																			<option value="UT">Utah</option>
																			<option value="VT">Vermont</option>
																			<option value="VA">Virginia</option>
																			<option value="WA">Washington</option>
																			<option value="WV">West Virginia</option>
																			<option value="WI">Wisconsin</option>
																			<option value="WY">Wyoming</option>
																		</select>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label for="platform" class="control-label col-xs-12 col-sm-3 no-padding-right">Platform</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<select name="platform" id="platform" class="input-medium">
																				<option value="">------------------</option>
																				<option value="linux">Linux</option>
																				<option value="windows">Windows</option>
																				<option value="mac">Mac OS</option>
																				<option value="ios">iOS</option>
																				<option value="android">Android</option>
																			</select>
																		</div>
																	</div>
																</div>

																<div class="space-2"></div>

																<div class="form-group">
																	<label for="comment" class="control-label col-xs-12 col-sm-3 no-padding-right">Comment</label>

																	<div class="col-xs-12 col-sm-9">
																		<div class="clearfix">
																			<textarea id="comment" name="comment" class="input-xlarge"></textarea>
																		</div>
																	</div>
																</div>

																<div class="space-8"></div>

																<div class="form-group">
																	<div class="col-xs-12 col-sm-4 col-sm-offset-3">
																		<label>
																			<input type="checkbox" class="ace" id="agree" name="agree">
																			<span class="lbl"> I accept the policy</span>
																		</label>
																	</div>
																</div>
															</form>
														</div>

														<div id="step2" class="step-pane">
															<div class="row-fluid">
																<div class="alert alert-success">
																	<button data-dismiss="alert" class="close" type="button">
																		<i class="icon-remove"></i>
																	</button>

																	<strong>
																		<i class="icon-ok"></i>
																		Well done!
																	</strong>

																	You successfully read this important alert message.
																	<br>
																</div>

																<div class="alert alert-danger">
																	<button data-dismiss="alert" class="close" type="button">
																		<i class="icon-remove"></i>
																	</button>

																	<strong>
																		<i class="icon-remove"></i>
																		Oh snap!
																	</strong>

																	Change a few things up and try submitting again.
																	<br>
																</div>

																<div class="alert alert-warning">
																	<button data-dismiss="alert" class="close" type="button">
																		<i class="icon-remove"></i>
																	</button>
																	<strong>Warning!</strong>

																	Best check yo self, you're not looking too good.
																	<br>
																</div>

																<div class="alert alert-info">
																	<button data-dismiss="alert" class="close" type="button">
																		<i class="icon-remove"></i>
																	</button>
																	<strong>Heads up!</strong>

																	This alert needs your attention, but it's not super important.
																	<br>
																</div>
															</div>
														</div>

														<div id="step3" class="step-pane">
															<div class="center">
																<h3 class="blue lighter">This is step 3</h3>
															</div>
														</div>

														<div id="step4" class="step-pane">
															<div class="center">
																<h3 class="green">Congrats!</h3>
																Your product is ready to ship! Click finish to continue!
															</div>
														</div>
													</div>

													<hr>
													<div class="row-fluid wizard-actions">
														<button class="btn btn-prev" disabled="disabled">
															<i class="icon-arrow-left"></i>
															Prev
														</button>

														<button data-last="Finish " class="btn btn-success btn-next">
															Next
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</div><!-- /widget-main -->
											</div><!-- /widget-body -->
										</div>
									</div>
								</div>

								<div class="modal" id="modal-wizard">
									<div class="modal-dialog">
										<div class="modal-content">
											<div data-target="#modal-step-contents" class="modal-header">
												<ul class="wizard-steps">
													<li class="active" data-target="#modal-step1">
														<span class="step">1</span>
														<span class="title">Validation states</span>
													</li>

													<li data-target="#modal-step2">
														<span class="step">2</span>
														<span class="title">Alerts</span>
													</li>

													<li data-target="#modal-step3">
														<span class="step">3</span>
														<span class="title">Payment Info</span>
													</li>

													<li data-target="#modal-step4">
														<span class="step">4</span>
														<span class="title">Other Info</span>
													</li>
												</ul>
											</div>

											<div id="modal-step-contents" class="modal-body step-content">
												<div id="modal-step1" class="step-pane active">
													<div class="center">
														<h4 class="blue">Step 1</h4>
													</div>
												</div>

												<div id="modal-step2" class="step-pane">
													<div class="center">
														<h4 class="blue">Step 2</h4>
													</div>
												</div>

												<div id="modal-step3" class="step-pane">
													<div class="center">
														<h4 class="blue">Step 3</h4>
													</div>
												</div>

												<div id="modal-step4" class="step-pane">
													<div class="center">
														<h4 class="blue">Step 4</h4>
													</div>
												</div>
											</div>

											<div class="modal-footer wizard-actions">
												<button class="btn btn-sm btn-prev" disabled="disabled">
													<i class="icon-arrow-left"></i>
													Prev
												</button>

												<button data-last="Finish " class="btn btn-success btn-sm btn-next">
													Next
													<i class="icon-arrow-right icon-on-right"></i>
												</button>

												<button data-dismiss="modal" class="btn btn-danger btn-sm pull-left">
													<i class="icon-remove"></i>
													Cancel
												</button>
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
  name: 'form_wizard',
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