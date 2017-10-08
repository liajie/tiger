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
							<li class="active">Form Elements</li>
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
								Form Elements
								<small>
									<i class="icon-double-angle-right"></i>
									Common form elements and layouts
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<form role="form" class="form-horizontal">
									<div class="form-group">
										<label for="form-field-1" class="col-sm-3 control-label no-padding-right"> Text Field </label>

										<div class="col-sm-9">
											<input type="text" class="col-xs-10 col-sm-5" placeholder="Username" id="form-field-1">
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label for="form-field-2" class="col-sm-3 control-label no-padding-right"> Password Field </label>

										<div class="col-sm-9">
											<input type="password" class="col-xs-10 col-sm-5" placeholder="Password" id="form-field-2">
											<span class="help-inline col-xs-12 col-sm-7">
												<span class="middle">Inline help text</span>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label for="form-input-readonly" class="col-sm-3 control-label no-padding-right"> Readonly field </label>

										<div class="col-sm-9">
											<input type="text" value="This text field is readonly!" id="form-input-readonly" class="col-xs-10 col-sm-5" readonly="">
											<span class="help-inline col-xs-12 col-sm-7">
												<label class="middle">
													<input type="checkbox" id="id-disable-check" class="ace">
													<span class="lbl"> Disable it!</span>
												</label>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label for="form-field-4" class="col-sm-3 control-label no-padding-right">Relative Sizing</label>

										<div class="col-sm-9">
											<input type="text" placeholder=".input-sm" id="form-field-4" class="input-sm">
											<div class="space-2"></div>

											<div id="input-size-slider" class="help-block ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 200px;" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
										</div>
									</div>

									<div class="form-group">
										<label for="form-field-5" class="col-sm-3 control-label no-padding-right">Grid Sizing</label>

										<div class="col-sm-9">
											<div class="clearfix">
												<input type="text" placeholder=".col-xs-1" id="form-field-5" class="col-xs-1">
											</div>

											<div class="space-2"></div>

											<div id="input-span-slider" class="help-block ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 0%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 0%;"></a></div>
										</div>
									</div>

									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right">Input with Icon</label>

										<div class="col-sm-9">
											<span class="input-icon">
												<input type="text" id="form-field-icon-1">
												<i class="icon-leaf blue"></i>
											</span>

											<span class="input-icon input-icon-right">
												<input type="text" id="form-field-icon-2">
												<i class="icon-leaf green"></i>
											</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label for="form-field-6" class="col-sm-3 control-label no-padding-right">Tooltip and help button</label>

										<div class="col-sm-9">
											<input type="text" data-placement="bottom" title="" placeholder="Tooltip on hover" id="form-field-6" data-rel="tooltip" data-original-title="Hello Tooltip!">
											<span title="" data-content="More details." data-placement="left" data-trigger="hover" data-rel="popover" class="help-button" data-original-title="Popover on hover">?</span>
										</div>
									</div>

									<div class="space-4"></div>

									<div class="form-group">
										<label for="form-field-tags" class="col-sm-3 control-label no-padding-right">Tag input</label>

										<div class="col-sm-9"><div class="tags"><span class="tag">Tag Input Control<button class="close" type="button">×</button></span><input type="text" placeholder="Enter tags ..." value="Tag Input Control" id="form-field-tags" name="tags" style="display: none;"><input type="text" placeholder="Enter tags ..."></div>
											
										</div>
									</div>

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button type="button" class="btn btn-info">
												<i class="icon-ok bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button type="reset" class="btn">
												<i class="icon-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>

									<div class="hr hr-24"></div>

									<div class="row">
										<div class="col-xs-12 col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Text Area</h4>

													<div class="widget-toolbar">
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
														<div>
															<label for="form-field-8">Default</label>

															<textarea placeholder="Default Text" id="form-field-8" class="form-control"></textarea>
														</div>

														<hr>
														<div>
															<label for="form-field-9">With Character Limit</label>

															<textarea maxlength="50" id="form-field-9" class="form-control limited"></textarea>
														</div>

														<hr>
														<div>
															<label for="form-field-11">Autosize</label>

															<textarea class="autosize-transition form-control" id="form-field-11" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 69px;"></textarea>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->

										<div class="col-xs-12 col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Masked Input</h4>

													<span class="widget-toolbar">
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
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															<label for="form-field-mask-1">
																Date
																<small class="text-success">99/99/9999</small>
															</label>

															<div class="input-group">
																<input type="text" id="form-field-mask-1" class="form-control input-mask-date">
																<span class="input-group-btn">
																	<button type="button" class="btn btn-sm btn-default">
																		<i class="icon-calendar bigger-110"></i>
																		Go!
																	</button>
																</span>
															</div>
														</div>

														<hr>
														<div>
															<label for="form-field-mask-2">
																Phone
																<small class="text-warning">(999) 999-9999</small>
															</label>

															<div class="input-group">
																<span class="input-group-addon">
																	<i class="icon-phone"></i>
																</span>

																<input type="text" id="form-field-mask-2" class="form-control input-mask-phone">
															</div>
														</div>

														<hr>
														<div>
															<label for="form-field-mask-3">
																Product Key
																<small class="text-error">a*-999-a999</small>
															</label>

															<div class="input-group">
																<input type="text" id="form-field-mask-3" class="form-control input-mask-product">
																<span class="input-group-addon">
																	<i class="icon-key"></i>
																</span>
															</div>
														</div>

														<hr>
														<div>
															<label for="form-field-mask-4">
																Eye Script
																<small class="text-info">~9.99 ~9.99 999</small>
															</label>

															<div>
																<input type="text" id="form-field-mask-4" class="input-medium input-mask-eyescript">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->

										<div class="col-xs-12 col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Select Box</h4>

													<span class="widget-toolbar">
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
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div>
															<label for="form-field-select-1">Default</label>

															<select id="form-field-select-1" class="form-control">
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

														<hr>
														<div>
															<label for="form-field-select-2">Multiple</label>

															<select multiple="multiple" id="form-field-select-2" class="form-control">
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

														<hr>
														<div>
															<label for="form-field-select-3">Chosen</label>

															<br>
															<select data-placeholder="Choose a Country..." id="form-field-select-3" class="width-80 chosen-select" style="display: none;">
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
															</select><div class="chosen-container chosen-container-single" style="width: 305px;" title="" id="form_field_select_3_chosen"><a tabindex="-1" class="chosen-single"><span>&nbsp;</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
														</div>

														<hr>
														<div>
															<div class="row">
																<div class="col-sm-6">
																	<span class="bigger-110">Multiple</span>
																</div><!-- /span -->

																<div class="col-sm-6">
																	<span class="pull-right inline">
																		<span class="grey">style:</span>

																		<span class="btn-toolbar inline middle no-margin">
																			<span class="btn-group no-margin" data-toggle="buttons" id="chosen-multiple-style">
																				<label class="btn btn-xs btn-yellow active">
																					1
																					<input type="radio" value="1">
																				</label>

																				<label class="btn btn-xs btn-yellow">
																					2
																					<input type="radio" value="2">
																				</label>
																			</span>
																		</span>
																	</span>
																</div><!-- /span -->
															</div>

															<div class="space-2"></div>

															<select data-placeholder="Choose a Country..." id="form-field-select-4" class="width-80 chosen-select" multiple="" style="display: none;">
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
															</select><div class="chosen-container chosen-container-multi" style="width: 305px;" title="" id="form_field_select_4_chosen"><ul class="chosen-choices"><li class="search-field"><input type="text" style="width: 140px;" autocomplete="off" class="default" value="Choose a Country..."></li></ul><div class="chosen-drop"><ul class="chosen-results"></ul></div></div>
														</div>
													</div>
												</div>
											</div>
										</div><!-- /span -->
									</div><!-- /row -->

									<div class="space-24"></div>

									<h3 class="header smaller lighter blue">
										Checkboxes &amp; Radio
										<small>All Checkboxes, Radios and Switch Buttons Are Pure CSS</small>
									</h3>

									<div class="row">
										<div class="col-xs-12 col-sm-5">
											<div class="control-group">
												<label class="control-label bolder blue">Checkbox</label>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="ace" name="form-field-checkbox">
														<span class="lbl"> choice 1</span>
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="ace" name="form-field-checkbox">
														<span class="lbl"> choice 2</span>
													</label>
												</div>

												<div class="checkbox">
													<label>
														<input type="checkbox" class="ace ace-checkbox-2" name="form-field-checkbox">
														<span class="lbl"> choice 3</span>
													</label>
												</div>

												<div class="checkbox">
													<label class="block">
														<input type="checkbox" class="ace" disabled="" name="form-field-checkbox">
														<span class="lbl"> disabled</span>
													</label>
												</div>
											</div>
										</div>

										<div class="col-xs-12 col-sm-6">
											<div class="control-group">
												<label class="control-label bolder blue">Radio</label>

												<div class="radio">
													<label>
														<input type="radio" class="ace" name="form-field-radio">
														<span class="lbl"> radio option 1</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" class="ace" name="form-field-radio">
														<span class="lbl"> radio option 2</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" class="ace" name="form-field-radio">
														<span class="lbl"> radio option 3</span>
													</label>
												</div>

												<div class="radio">
													<label>
														<input type="radio" class="ace" name="form-field-radio" disabled="">
														<span class="lbl"> disabled</span>
													</label>
												</div>
											</div>
										</div>
									</div><!-- /row -->

									<hr>
									<div class="form-group">
										<label class="control-label col-xs-12 col-sm-3">On/Off Switches</label>

										<div class="controls col-xs-12 col-sm-9">
											<div class="row">
												<div class="col-xs-3">
													<label>
														<input type="checkbox" class="ace ace-switch" name="switch-field-1">
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input type="checkbox" class="ace ace-switch ace-switch-2" name="switch-field-1">
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input type="checkbox" class="ace ace-switch ace-switch-3" name="switch-field-1">
														<span class="lbl"></span>
													</label>
												</div>
											</div>

											<div class="row">
												<div class="col-xs-3">
													<label>
														<input type="checkbox" class="ace ace-switch ace-switch-4" name="switch-field-1">
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input type="checkbox" class="ace ace-switch ace-switch-5" name="switch-field-1">
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input type="checkbox" class="ace ace-switch ace-switch-6" name="switch-field-1">
														<span class="lbl"></span>
													</label>
												</div>

												<div class="col-xs-3">
													<label>
														<input type="checkbox" class="ace ace-switch ace-switch-7" name="switch-field-1">
														<span class="lbl"></span>
													</label>
												</div>
											</div>
										</div>
									</div>

									<hr>
									<div class="row">
										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Custom File Input</h4>

													<span class="widget-toolbar">
														<a data-action="collapse" href="#">
															<i class="icon-chevron-up"></i>
														</a>

														<a data-action="close" href="#">
															<i class="icon-remove"></i>
														</a>
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="ace-file-input"><input type="file" id="id-input-file-2"><label data-title="Choose" class="file-label"><span data-title="No File ..." class="file-name"><i class="icon-upload-alt"></i></span></label><a href="#" class="remove"><i class="icon-remove"></i></a></div>
														<div class="ace-file-input ace-file-multiple"><input type="file" id="id-input-file-3" multiple=""><label data-title="Drop files here or click to choose" class="file-label"><span data-title="No File ..." class="file-name"><i class="icon-cloud-upload"></i></span></label><a href="#" class="remove"><i class="icon-remove"></i></a></div>
														<label>
															<input type="checkbox" class="ace" id="id-file-format" name="file-format">
															<span class="lbl"> Allow only images</span>
														</label>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>jQuery UI Sliders</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="row">
															<div class="col-xs-3 col-md-2">
																<div id="slider-range" style="height: 200px;" class="ui-slider ui-slider-vertical ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="bottom: 17%; height: 50%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="bottom: 17%;"></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="bottom: 67%;"></a></div>
															</div>

															<div class="col-xs-9 col-md-10">
																<div id="eq">
																	<span class="ui-slider-green ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 77%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 77%;"></a></span>
																	<span class="ui-slider-red ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 55%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 55%;"></a></span>
																	<span class="ui-slider-purple ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 33%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 33%;"></a></span>
																	<span class="ui-slider-orange ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 40%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 40%;"></a></span>
																	<span class="ui-slider-dark ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="width: 90%; float: left; margin: 15px;" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all ui-slider-range-min" style="width: 88%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 88%;"></a></span>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Spinners</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="ace-spinner" style="width: 70px;"><div class="input-group"><input type="text" id="spinner1" class="input-mini spinner-input form-control" maxlength="3"><div class="spinner-buttons input-group-btn btn-group-vertical">							<button class="btn spinner-up btn-xs btn-info" type="button">								<i class="icon-chevron-up"></i>							</button>							<button class="btn spinner-down btn-xs btn-info" type="button">								<i class="icon-chevron-down"></i>							</button>						</div></div></div>
														<div class="space-6"></div>

														<div class="ace-spinner touch-spinner" style="width: 140px;"><div class="input-group"><input type="text" id="spinner2" class="input-mini spinner-input form-control" maxlength="5"><div class="spinner-buttons input-group-btn">							<button class="btn spinner-up btn-xs " type="button">								<i class="icon-caret-up"></i>							</button>							<button class="btn spinner-down btn-xs " type="button">								<i class="icon-caret-down"></i>							</button>						</div></div></div>
														<div class="space-6"></div>

														<div class="ace-spinner touch-spinner" style="width: 100px;"><div class="input-group"><div class="spinner-buttons input-group-btn">							<button class="btn spinner-down btn-xs btn-danger" type="button">								<i class="icon-minus smaller-75"></i>							</button>						</div><input type="text" id="spinner3" class="input-mini spinner-input form-control" maxlength="3"><div class="spinner-buttons input-group-btn">							<button class="btn spinner-up btn-xs btn-success" type="button">								<i class="icon-plus smaller-75"></i>							</button>						</div></div></div>
													</div>
												</div>
											</div>
										</div>
									</div>

									<hr>
									<div class="row">
										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>Date Picker</h4>

													<span class="widget-toolbar">
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
													</span>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<label for="id-date-picker-1">Date Picker</label>

														<div class="row">
															<div class="col-xs-8 col-sm-11">
																<div class="input-group">
																	<input type="text" data-date-format="dd-mm-yyyy" id="id-date-picker-1" class="form-control date-picker">
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>
																</div>
															</div>
														</div>

														<hr>
														<label for="id-date-range-picker-1">Date Range Picker</label>

														<div class="row">
															<div class="col-xs-8 col-sm-11">
																<div class="input-group">
																	<span class="input-group-addon">
																		<i class="icon-calendar bigger-110"></i>
																	</span>

																	<input type="text" id="id-date-range-picker-1" name="date-range-picker" class="form-control">
																</div>
															</div>
														</div>

														<hr>
														<label for="timepicker1">Time Picker</label>

														<div class="input-group bootstrap-timepicker"><div class="bootstrap-timepicker-widget dropdown-menu"><table><tbody><tr><td><a data-action="incrementHour" href="#"><i class="icon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="incrementMinute" href="#"><i class="icon-chevron-up"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="incrementSecond" href="#"><i class="icon-chevron-up"></i></a></td></tr><tr><td><input type="text" maxlength="2" class="bootstrap-timepicker-hour" name="hour"></td> <td class="separator">:</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-minute" name="minute"></td> <td class="separator">:</td><td><input type="text" maxlength="2" class="bootstrap-timepicker-second" name="second"></td></tr><tr><td><a data-action="decrementHour" href="#"><i class="icon-chevron-down"></i></a></td><td class="separator"></td><td><a data-action="decrementMinute" href="#"><i class="icon-chevron-down"></i></a></td><td class="separator">&nbsp;</td><td><a data-action="decrementSecond" href="#"><i class="icon-chevron-down"></i></a></td></tr></tbody></table></div>
															<input type="text" class="form-control" id="timepicker1">
															<span class="input-group-addon">
																<i class="icon-time bigger-110"></i>
															</span>
														</div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>
														<i class="icon-tint"></i>
														Color Picker
													</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="row-fluid">
															<label for="colorpicker1">Color Picker</label>
														</div>

														<div class="control-group">
															<div class="bootstrap-colorpicker">
																<input type="text" class="input-small" id="colorpicker1">
															</div>
														</div>

														<hr>
														<label for="simple-colorpicker-1">Custom Color Picker</label>

														<select class="hide" id="simple-colorpicker-1" style="display: none;">
															<option value="#ac725e">#ac725e</option>
															<option value="#d06b64">#d06b64</option>
															<option value="#f83a22">#f83a22</option>
															<option value="#fa573c">#fa573c</option>
															<option value="#ff7537">#ff7537</option>
															<option selected="" value="#ffad46">#ffad46</option>
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
															<option value="#555">#555</option>
														</select><div class="dropdown dropdown-colorpicker"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="background-color:#ffad46" class="btn-colorpicker"></span></a><ul class="dropdown-menu dropdown-caret"><li><a data-color="#ac725e" style="background-color:#ac725e;" href="#" class="colorpick-btn"></a></li><li><a data-color="#d06b64" style="background-color:#d06b64;" href="#" class="colorpick-btn"></a></li><li><a data-color="#f83a22" style="background-color:#f83a22;" href="#" class="colorpick-btn"></a></li><li><a data-color="#fa573c" style="background-color:#fa573c;" href="#" class="colorpick-btn"></a></li><li><a data-color="#ff7537" style="background-color:#ff7537;" href="#" class="colorpick-btn"></a></li><li><a data-color="#ffad46" style="background-color:#ffad46;" href="#" class="colorpick-btn selected"></a></li><li><a data-color="#42d692" style="background-color:#42d692;" href="#" class="colorpick-btn"></a></li><li><a data-color="#16a765" style="background-color:#16a765;" href="#" class="colorpick-btn"></a></li><li><a data-color="#7bd148" style="background-color:#7bd148;" href="#" class="colorpick-btn"></a></li><li><a data-color="#b3dc6c" style="background-color:#b3dc6c;" href="#" class="colorpick-btn"></a></li><li><a data-color="#fbe983" style="background-color:#fbe983;" href="#" class="colorpick-btn"></a></li><li><a data-color="#fad165" style="background-color:#fad165;" href="#" class="colorpick-btn"></a></li><li><a data-color="#92e1c0" style="background-color:#92e1c0;" href="#" class="colorpick-btn"></a></li><li><a data-color="#9fe1e7" style="background-color:#9fe1e7;" href="#" class="colorpick-btn"></a></li><li><a data-color="#9fc6e7" style="background-color:#9fc6e7;" href="#" class="colorpick-btn"></a></li><li><a data-color="#4986e7" style="background-color:#4986e7;" href="#" class="colorpick-btn"></a></li><li><a data-color="#9a9cff" style="background-color:#9a9cff;" href="#" class="colorpick-btn"></a></li><li><a data-color="#b99aff" style="background-color:#b99aff;" href="#" class="colorpick-btn"></a></li><li><a data-color="#c2c2c2" style="background-color:#c2c2c2;" href="#" class="colorpick-btn"></a></li><li><a data-color="#cabdbf" style="background-color:#cabdbf;" href="#" class="colorpick-btn"></a></li><li><a data-color="#cca6ac" style="background-color:#cca6ac;" href="#" class="colorpick-btn"></a></li><li><a data-color="#f691b2" style="background-color:#f691b2;" href="#" class="colorpick-btn"></a></li><li><a data-color="#cd74e6" style="background-color:#cd74e6;" href="#" class="colorpick-btn"></a></li><li><a data-color="#a47ae2" style="background-color:#a47ae2;" href="#" class="colorpick-btn"></a></li><li><a data-color="#555" style="background-color:#555;" href="#" class="colorpick-btn"></a></li></ul></div>
													</div>
												</div>
											</div>
										</div>

										<div class="col-sm-4">
											<div class="widget-box">
												<div class="widget-header">
													<h4>
														<i class="icon-dashboard"></i>
														Knob Input
													</h4>
												</div>

												<div class="widget-body">
													<div class="widget-main">
														<div class="control-group">
															<div class="row">
																<div class="col-xs-6 center">
																	<div class="knob-container inline">
																		<div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input type="text" data-thickness=".2" data-height="80" data-width="80" data-step="10" data-max="100" data-min="0" value="15" class="input-small knob" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px none; background: transparent none repeat scroll 0% 0%; font: bold 16px Arial; text-align: center; color: rgb(135, 206, 235); padding: 0px;"></div>
																	</div>
																</div>

																<div class="col-xs-6  center">
																	<div class="knob-container inline">
																		<div style="display:inline;width:80px;height:80px;"><canvas width="80" height="80"></canvas><input type="text" data-angleoffset="-125" data-anglearc="250" data-displayprevious="true" data-fgcolor="#87B87F" data-thickness=".2" data-height="80" data-width="80" data-max="100" data-min="0" value="41" class="input-small knob" style="width: 44px; height: 26px; position: absolute; vertical-align: middle; margin-top: 26px; margin-left: -62px; border: 0px none; background: transparent none repeat scroll 0% 0%; font: bold 16px Arial; text-align: center; color: rgb(135, 184, 127); padding: 0px;"></div>
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-xs-12 center">
																	<div class="knob-container inline">
																		<div style="display:inline;width:150px;height:150px;"><canvas width="150" height="150"></canvas><input type="text" data-cursor="true" data-angleoffset="90" data-fgcolor="#B8877F" data-thickness=".2" data-height="150" data-width="150" data-max="10" data-min="0" class="input-small knob" style="width: 79px; height: 50px; position: absolute; vertical-align: middle; margin-top: 50px; margin-left: -114px; border: 0px none; background: transparent none repeat scroll 0% 0%; font: bold 37px Arial; text-align: center; color: rgb(184, 135, 127); padding: 0px;"></div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>

								<div class="hr hr-18 dotted hr-double"></div>

								<h4 class="pink">
									<i class="icon-hand-right green"></i>
									<a data-toggle="modal" class="blue" role="button" href="#modal-form"> Form Inside a Modal Box </a>
								</h4>

								<div class="hr hr-18 dotted hr-double"></div>
								<h4 class="header green">Form Layouts</h4>

								<div class="row">
									<div class="col-sm-5">
										<div class="widget-box">
											<div class="widget-header">
												<h4>Default</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<form>
														<!-- <legend>Form</legend> -->

														<fieldset>
															<label>Label name</label>

															<input type="text" placeholder="Type something…">
															<span class="help-block">Example block-level help text here.</span>

															<label class="pull-right">
																<input type="checkbox" class="ace">
																<span class="lbl"> check me out</span>
															</label>
														</fieldset>

														<div class="form-actions center">
															<button class="btn btn-sm btn-success" type="button">
																Submit
																<i class="icon-arrow-right icon-on-right bigger-110"></i>
															</button>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-7">
										<div class="widget-box">
											<div class="widget-header">
												<h4>Inline Forms</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<form class="form-inline">
														<input type="text" placeholder="Username" class="input-small">
														<input type="password" placeholder="Password" class="input-small">
														<label class="inline">
															<input type="checkbox" class="ace">
															<span class="lbl"> remember me</span>
														</label>

														<button class="btn btn-info btn-sm" type="button">
															<i class="icon-key bigger-110"></i>
															Login
														</button>
													</form>
												</div>
											</div>
										</div>

										<div class="space-6"></div>

										<div class="widget-box">
											<div class="widget-header widget-header-small">
												<h5 class="lighter">Search Form</h5>
											</div>

											<div class="widget-body">
												<div class="widget-main">
													<form class="form-search">
														<div class="row">
															<div class="col-xs-12 col-sm-8">
																<div class="input-group">
																	<input type="text" placeholder="Type your query" class="form-control search-query">
																	<span class="input-group-btn">
																		<button class="btn btn-purple btn-sm" type="button">
																			Search
																			<i class="icon-search icon-on-right bigger-110"></i>
																		</button>
																	</span>
																</div>
															</div>
														</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div tabindex="-1" class="modal" id="modal-form">
									<div class="modal-dialog">
										<div class="modal-content">
											<div class="modal-header">
												<button data-dismiss="modal" class="close" type="button">×</button>
												<h4 class="blue bigger">Please fill the following form fields</h4>
											</div>

											<div class="modal-body overflow-visible">
												<div class="row">
													<div class="col-xs-12 col-sm-5">
														<div class="space"></div>

														<div class="ace-file-input ace-file-multiple"><input type="file"><label data-title="Drop files here or click to choose" class="file-label"><span data-title="No File ..." class="file-name"><i class="icon-cloud-upload"></i></span></label><a href="#" class="remove"><i class="icon-remove"></i></a></div>
													</div>

													<div class="col-xs-12 col-sm-7">
														<div class="form-group">
															<label for="form-field-select-3">Location</label>

															<div>
																<select data-placeholder="Choose a Country..." class="chosen-select" style="display: none;">
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
																</select><div class="chosen-container chosen-container-single" style="width: 0px;" title=""><a tabindex="-1" class="chosen-single"><span>&nbsp;</span><div><b></b></div></a><div class="chosen-drop"><div class="chosen-search"><input type="text" autocomplete="off"></div><ul class="chosen-results"></ul></div></div>
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-username">Username</label>

															<div>
																<input type="text" value="alexdoe" placeholder="Username" id="form-field-username" class="input-large">
															</div>
														</div>

														<div class="space-4"></div>

														<div class="form-group">
															<label for="form-field-first">Name</label>

															<div>
																<input type="text" value="Alex" placeholder="First Name" id="form-field-first" class="input-medium">
																<input type="text" value="Doe" placeholder="Last Name" id="form-field-last" class="input-medium">
															</div>
														</div>
													</div>
												</div>
											</div>

											<div class="modal-footer">
												<button data-dismiss="modal" class="btn btn-sm">
													<i class="icon-remove"></i>
													Cancel
												</button>

												<button class="btn btn-sm btn-primary">
													<i class="icon-ok"></i>
													Save
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
  name: 'form_elements',
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