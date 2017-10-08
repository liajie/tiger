<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">UI Elements</a>
							</li>
							<li class="active">jQuery UI</li>
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
								jQuery UI
								<small>
									<i class="icon-double-angle-right"></i>
									Restyling jQuery UI Widgets and Elements
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-calendar-empty smaller-90"></i>
											Datepicker
										</h3>

										<div class="row">
											<div class="col-xs-6">
												<div class="input-group input-group-sm">
													<input type="text" class="form-control hasDatepicker" id="datepicker">
													<span class="input-group-addon">
														<i class="icon-calendar"></i>
													</span>
												</div>
											</div>
										</div>
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-list-alt smaller-90"></i>
											Dialogs
										</h3>
										<a class="btn btn-info btn-sm" id="id-btn-dialog2" href="#">Confirm Dialog</a>
										<a class="btn btn-purple btn-sm" id="id-btn-dialog1" href="#">Modal Dialog</a>

										<div class="hide" id="dialog-message">
											<p>
												This is the default dialog which is useful for displaying information. The dialog window can be moved, resized and closed with the 'x' icon.
											</p>

											<div class="hr hr-12 hr-double"></div>

											<p>
												Currently using
												<b>36% of your storage space</b>
												.
											</p>
										</div><!-- #dialog-message -->

										<div class="hide" id="dialog-confirm">
											<div class="alert alert-info bigger-110">
												These items will be permanently deleted and cannot be recovered.
											</div>

											<div class="space-6"></div>

											<p class="bigger-110 bolder center grey">
												<i class="icon-hand-right blue bigger-120"></i>
												Are you sure?
											</p>
										</div><!-- #dialog-confirm -->
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-terminal smaller-90"></i>
											Autocomplete
										</h3>

										<div class="row">
											<div class="col-sm-8 col-md-7">
												<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" class="form-control ui-autocomplete-input" id="tags" autocomplete="off">
												<div class="space-4"></div>

												<span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" placeholder="Type 'a' or 'h'" class="form-control ui-autocomplete-input" id="search" autocomplete="off">
											</div>
										</div>

										<div class="row">
											<div class="col-xs-12">
												<h3 class="header blue lighter smaller">
													<i class="icon-info smaller-90"></i>
													Tooltip
												</h3>

												<div class="bigger-110">
													<p>
														<a title="slide down on show" href="#" id="show-option" class="grey">
															<i class="icon-hand-right"></i>
															slide down on show
														</a>
													</p>

													<p>
														<a title="explode on hide" href="#" id="hide-option" class="blue">
															<i class="icon-hand-right"></i>
															explode on hide
														</a>
													</p>

													<p>
														<a title="move down on show" href="#" id="open-event" class="pink">
															<i class="icon-hand-right"></i>
															move down on show
														</a>
													</p>
												</div>
											</div>
										</div><!-- ./row-fluid -->
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-reorder smaller-90"></i>
											Menu
										</h3>

										<ul id="menu" class="ui-menu ui-widget ui-widget-content ui-corner-all" role="menu" tabindex="0">
											<li class="ui-state-disabled ui-menu-item" role="presentation" aria-disabled="true">
												<a href="#" id="ui-id-3" class="ui-corner-all" tabindex="-1" role="menuitem">Aberdeen</a>
											</li>

											<li class="ui-menu-item" role="presentation">
												<a href="#" id="ui-id-4" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a>
											</li>

											<li class="ui-menu-item" role="presentation">
												<a href="#" id="ui-id-5" class="ui-corner-all" tabindex="-1" role="menuitem">Adamsville</a>
											</li>

											<li class="ui-menu-item" role="presentation">
												<a href="#" id="ui-id-6" class="ui-corner-all" tabindex="-1" role="menuitem">Addyston</a>
											</li>

											<li class="ui-menu-item" role="presentation">
												<a href="#" aria-haspopup="true" id="ui-id-7" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Delphi</a>

												<ul class="ui-menu ui-widget ui-widget-content ui-corner-all" style="display: none;" role="menu" aria-hidden="true" aria-expanded="false">
													<li class="ui-state-disabled ui-menu-item" role="presentation" aria-disabled="true">
														<a href="#" id="ui-id-11" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a>
													</li>

													<li class="ui-menu-item" role="presentation">
														<a href="#" id="ui-id-12" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a>
													</li>

													<li class="ui-menu-item" role="presentation">
														<a href="#" id="ui-id-13" class="ui-corner-all" tabindex="-1" role="menuitem">Salzburg</a>
													</li>
												</ul>
											</li>

											<li class="ui-menu-item" role="presentation">
												<a href="#" id="ui-id-8" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a>
											</li>

											<li class="ui-menu-item" role="presentation">
												<a href="#" aria-haspopup="true" id="ui-id-9" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Salzburg</a>

												<ul class="ui-menu ui-widget ui-widget-content ui-corner-all" style="display: none;" role="menu" aria-hidden="true" aria-expanded="false">
													<li class="ui-menu-item" role="presentation">
														<a href="#" aria-haspopup="true" id="ui-id-14" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Delphi</a>

														<ul class="ui-menu ui-widget ui-widget-content ui-corner-all" style="display: none;" role="menu" aria-hidden="true" aria-expanded="false">
															<li class="ui-menu-item" role="presentation">
																<a href="#" id="ui-id-17" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a>
															</li>

															<li class="ui-menu-item" role="presentation">
																<a href="#" id="ui-id-18" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a>
															</li>

															<li class="ui-menu-item" role="presentation">
																<a href="#" id="ui-id-19" class="ui-corner-all" tabindex="-1" role="menuitem">Salzburg</a>
															</li>
														</ul>
													</li>

													<li class="ui-menu-item" role="presentation">
														<a href="#" aria-haspopup="true" id="ui-id-15" class="ui-corner-all" tabindex="-1" role="menuitem"><span class="ui-menu-icon ui-icon ui-icon-carat-1-e"></span>Delphi</a>

														<ul class="ui-menu ui-widget ui-widget-content ui-corner-all" style="display: none;" role="menu" aria-hidden="true" aria-expanded="false">
															<li class="ui-menu-item" role="presentation">
																<a href="#" id="ui-id-20" class="ui-corner-all" tabindex="-1" role="menuitem">Ada</a>
															</li>

															<li class="ui-menu-item" role="presentation">
																<a href="#" id="ui-id-21" class="ui-corner-all" tabindex="-1" role="menuitem">Saarland</a>
															</li>

															<li class="ui-menu-item" role="presentation">
																<a href="#" id="ui-id-22" class="ui-corner-all" tabindex="-1" role="menuitem">Salzburg</a>
															</li>
														</ul>
													</li>

													<li class="ui-menu-item" role="presentation">
														<a href="#" id="ui-id-16" class="ui-corner-all" tabindex="-1" role="menuitem">Perch</a>
													</li>
												</ul>
											</li>

											<li class="ui-state-disabled ui-menu-item" role="presentation" aria-disabled="true">
												<a href="#" id="ui-id-10" class="ui-corner-all" tabindex="-1" role="menuitem">Amesville</a>
											</li>
										</ul>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-retweet smaller-90"></i>
											Spinner
										</h3>

										<span class="ui-spinner ui-widget ui-widget-content ui-corner-all"><input type="text" name="value" id="spinner" class="ui-spinner-input" autocomplete="off" role="spinbutton"><a class="ui-spinner-button ui-spinner-up ui-corner-tr ui-button ui-widget ui-state-default ui-button-text-only btn btn-success" tabindex="-1" role="button" aria-disabled="false"><i class="icon-plus"></i></a><a class="ui-spinner-button ui-spinner-down ui-corner-br ui-button ui-widget ui-state-default ui-button-text-only btn btn-danger" tabindex="-1" role="button" aria-disabled="false"><i class="icon-minus"></i></a></span>
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-resize-horizontal smaller-90"></i>
											Slider
										</h3>

										<p>
											Please see
											<a href="form-elements.html">form elements page</a>
											for more slider examples.
										</p>

										<div class="space-4"></div>

										<div id="slider" class="ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" aria-disabled="false"><div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 15%; width: 45%;"></div><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 15%;"></a><a href="#" class="ui-slider-handle ui-state-default ui-corner-all" style="left: 60%;"></a></div>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-list smaller-90"></i>
											Sortable Accordion
										</h3>

										<div class="accordion-style2 ui-accordion ui-widget ui-helper-reset ui-sortable" id="accordion" role="tablist">
											<div class="group">
												<h3 class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-accordion-header-active ui-state-active ui-corner-top ui-accordion-icons" role="tab" id="ui-accordion-accordion-header-0" aria-controls="ui-accordion-accordion-panel-0" aria-selected="true" tabindex="0"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-s"></span>Section 1</h3>

												<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom ui-accordion-content-active" style="display: block;" id="ui-accordion-accordion-panel-0" aria-labelledby="ui-accordion-accordion-header-0" role="tabpanel" aria-expanded="true" aria-hidden="false">
													<p>
														Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
			ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
			amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
			odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
													</p>
												</div>
											</div>

											<div class="group">
												<h3 class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-accordion-accordion-header-1" aria-controls="ui-accordion-accordion-panel-1" aria-selected="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Section 2</h3>

												<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" id="ui-accordion-accordion-panel-1" aria-labelledby="ui-accordion-accordion-header-1" role="tabpanel" aria-expanded="false" aria-hidden="true">
													<p>
														Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
			purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
			velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
			suscipit faucibus urna.
													</p>
												</div>
											</div>

											<div class="group">
												<h3 class="accordion-header ui-accordion-header ui-helper-reset ui-state-default ui-corner-all ui-accordion-icons" role="tab" id="ui-accordion-accordion-header-2" aria-controls="ui-accordion-accordion-panel-2" aria-selected="false" tabindex="-1"><span class="ui-accordion-header-icon ui-icon ui-icon-triangle-1-e"></span>Section 3</h3>

												<div class="ui-accordion-content ui-helper-reset ui-widget-content ui-corner-bottom" style="display: none;" id="ui-accordion-accordion-panel-2" aria-labelledby="ui-accordion-accordion-header-2" role="tabpanel" aria-expanded="false" aria-hidden="true">
													<p>
														Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
			Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
			ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
			lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
													</p>

													<ul>
														<li>List item one</li>
														<li>List item two</li>
														<li>List item three</li>
													</ul>
												</div>
											</div>
										</div><!-- #accordion -->
									</div><!-- ./span -->

									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-folder-close-alt smaller-90"></i>
											Tabs
										</h3>

										<div id="tabs" class="ui-tabs ui-widget ui-widget-content ui-corner-all">
											<ul class="ui-tabs-nav ui-helper-reset ui-helper-clearfix ui-widget-header ui-corner-all" role="tablist">
												<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active" role="tab" tabindex="0" aria-controls="tabs-1" aria-labelledby="ui-id-23" aria-selected="true">
													<a href="#tabs-1" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-23">Nunc tincidunt</a>
												</li>

												<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-2" aria-labelledby="ui-id-24" aria-selected="false">
													<a href="#tabs-2" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-24">Proin dolor</a>
												</li>

												<li class="ui-state-default ui-corner-top" role="tab" tabindex="-1" aria-controls="tabs-3" aria-labelledby="ui-id-25" aria-selected="false">
													<a href="#tabs-3" class="ui-tabs-anchor" role="presentation" tabindex="-1" id="ui-id-25">Aenean lacinia</a>
												</li>
											</ul>

											<div id="tabs-1" aria-labelledby="ui-id-23" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" aria-expanded="true" aria-hidden="false">
												<p>Proin elit arcu, rutrum commodo, vehicula tempus, commodo a, risus. Curabitur nec arcu. Donec sollicitudin mi sit amet mauris. Nam elementum quam ullamcorper ante. Duis orci. Aliquam sodales tortor vitae ipsum. Ut et mauris vel pede varius sollicitudin.</p>
											</div>

											<div id="tabs-2" aria-labelledby="ui-id-24" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
												<p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla..</p>
											</div>

											<div id="tabs-3" aria-labelledby="ui-id-25" class="ui-tabs-panel ui-widget-content ui-corner-bottom" role="tabpanel" style="display: none;" aria-expanded="false" aria-hidden="true">
												<p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Praesent eu risus hendrerit ligula tempus pretium.</p>
											</div>
										</div>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<div class="space-12"></div>

								<div class="row">
									<div class="col-sm-6">
										<h3 class="header blue lighter smaller">
											<i class="icon-spinner"></i>
											Progressbar
										</h3>

										<div id="progressbar" class="ui-progressbar ui-widget ui-widget-content ui-corner-all progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="37"><div class="ui-progressbar-value ui-widget-header ui-corner-left progress-bar progress-bar-success" style="width: 37%;"></div></div>
									</div><!-- ./span -->
								</div><!-- ./row-fluid -->

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  name: 'jquery_ui',
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