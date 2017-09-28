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
							<li class="active">Nestable Lists</li>
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
								Nestable lists
								<small>
									<i class="icon-double-angle-right"></i>
									Drag &amp; drop hierarchical list
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-6">
										<div id="nestable" class="dd">
											<ol class="dd-list">
												<li data-id="1" class="dd-item">
													<div class="dd-handle">
														Item 1
														<i class="pull-right bigger-130 icon-warning-sign orange2"></i>
													</div>
												</li>

												<li data-id="2" class="dd-item"><button type="button" data-action="collapse">Collapse</button><button type="button" data-action="expand" style="display: none;">Expand</button>
													<div class="dd-handle">Item 2</div>

													<ol class="dd-list">
														<li data-id="3" class="dd-item">
															<div class="dd-handle">
																Item 3
																<a class="badge badge-primary radius-5 tooltip-info pull-right white no-hover-underline" href="#" title="" data-placement="left" data-rel="tooltip" data-original-title="Change Event Date">
																	<i class="bigger-120 icon-calendar"></i>
																</a>
															</div>
														</li>

														<li data-id="4" class="dd-item">
															<div class="dd-handle">
																<span class="orange">Item 4</span>
																<span class="lighter grey">
																	&nbsp; with some description
																</span>
															</div>
														</li>

														<li data-id="5" class="dd-item"><button type="button" data-action="collapse">Collapse</button><button type="button" data-action="expand" style="display: none;">Expand</button>
															<div class="dd-handle">
																Item 5
																<div class="pull-right action-buttons">
																	<a href="#" class="blue">
																		<i class="icon-pencil bigger-130"></i>
																	</a>

																	<a href="#" class="red">
																		<i class="icon-trash bigger-130"></i>
																	</a>
																</div>
															</div>

															<ol class="dd-list">
																<li data-id="6" class="dd-item item-orange">
																	<div class="dd-handle"> Item 6 </div>
																</li>

																<li data-id="7" class="dd-item item-red">
																	<div class="dd-handle">Item 7</div>
																</li>

																<li data-id="8" class="dd-item item-blue2">
																	<div class="dd-handle">Item 8</div>
																</li>
															</ol>
														</li>

														<li data-id="9" class="dd-item">
															<div class="dd-handle btn-yellow no-hover">Item 9</div>
														</li>

														<li data-id="10" class="dd-item">
															<div class="dd-handle">Item 10</div>
														</li>
													</ol>
												</li>

												<li data-id="11" class="dd-item">
													<div class="dd-handle">
														Item 11
														<span class="sticker">
															<span class="label label-success arrowed-in">
																<i class="icon-ok bigger-110"></i>
															</span>
														</span>
													</div>
												</li>

												<li data-id="12" class="dd-item">
													<div class="dd-handle">Item 12</div>
												</li>
											</ol>
										</div>
									</div>

									<div class="vspace-sm-16"></div>

									<div class="col-sm-6">
										<div class="dd dd-draghandle">
											<ol class="dd-list">
												<li data-id="13" class="dd-item dd2-item">
													<div class="dd-handle dd2-handle">
														<i class="normal-icon icon-comments blue bigger-130"></i>

														<i class="drag-icon icon-move bigger-125"></i>
													</div>
													<div class="dd2-content">Click on an icon to start dragging</div>
												</li>

												<li data-id="14" class="dd-item dd2-item">
													<div class="dd-handle dd2-handle">
														<i class="normal-icon icon-time pink bigger-130"></i>

														<i class="drag-icon icon-move bigger-125"></i>
													</div>
													<div class="dd2-content">Recent Posts</div>
												</li>

												<li data-id="15" class="dd-item dd2-item"><button type="button" data-action="collapse">Collapse</button><button type="button" data-action="expand" style="display: none;">Expand</button>
													<div class="dd-handle dd2-handle">
														<i class="normal-icon icon-signal orange bigger-130"></i>

														<i class="drag-icon icon-move bigger-125"></i>
													</div>
													<div class="dd2-content">Statistics</div>

													<ol class="dd-list">
														<li data-id="16" class="dd-item dd2-item">
															<div class="dd-handle dd2-handle">
																<i class="normal-icon icon-user red bigger-130"></i>

																<i class="drag-icon icon-move bigger-125"></i>
															</div>
															<div class="dd2-content">Active Users</div>
														</li>

														<li data-id="17" class="dd-item dd2-item dd-colored">
															<div class="dd-handle dd2-handle btn-info">
																<i class="normal-icon icon-edit bigger-130"></i>

																<i class="drag-icon icon-move bigger-125"></i>
															</div>
															<div class="dd2-content btn-info no-hover">Published Articles</div>
														</li>

														<li data-id="18" class="dd-item dd2-item">
															<div class="dd-handle dd2-handle">
																<i class="normal-icon icon-eye-open green bigger-130"></i>

																<i class="drag-icon icon-move bigger-125"></i>
															</div>
															<div class="dd2-content">Visitors</div>
														</li>
													</ol>
												</li>

												<li data-id="19" class="dd-item dd2-item">
													<div class="dd-handle dd2-handle">
														<i class="normal-icon icon-reorder blue bigger-130"></i>

														<i class="drag-icon icon-move bigger-125"></i>
													</div>
													<div class="dd2-content">Menu</div>
												</li>
											</ol>
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
  name: 'nestable_list',
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