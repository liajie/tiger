<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>
							<li class="active">Gallery</li>
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
								Gallery
								<small>
									<i class="icon-double-angle-right"></i>
									responsive photo gallery using colorbox
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row-fluid">
									<ul class="ace-thumbnails">
										<li>
											<a data-rel="colorbox" title="Photo Title" href="assets/images/gallery/image-1.jpg" class="cboxElement">
												<img src="/static/assets/images/gallery/thumb-1.jpg" alt="150x150">
												<div class="tags">
													<span class="label-holder">
														<span class="label label-info">breakfast</span>
													</span>

													<span class="label-holder">
														<span class="label label-danger">fruits</span>
													</span>

													<span class="label-holder">
														<span class="label label-success">toast</span>
													</span>

													<span class="label-holder">
														<span class="label label-warning arrowed-in">diet</span>
													</span>
												</div>
											</a>

											<div class="tools">
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
											<a data-rel="colorbox" href="assets/images/gallery/image-2.jpg" class="cboxElement">
												<img src="/static/assets/images/gallery/thumb-2.jpg" alt="150x150">
												<div class="text">
													<div class="inner">Sample Caption on Hover</div>
												</div>
											</a>
										</li>

										<li>
											<a data-rel="colorbox" href="assets/images/gallery/image-3.jpg" class="cboxElement">
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
											<a data-rel="colorbox" href="assets/images/gallery/image-4.jpg" class="cboxElement">
												<img src="/static/assets/images/gallery/thumb-4.jpg" alt="150x150">
												<div class="tags">
													<span class="label-holder">
														<span class="label label-info arrowed">fountain</span>
													</span>

													<span class="label-holder">
														<span class="label label-danger">recreation</span>
													</span>
												</div>
											</a>

											<div class="tools tools-top">
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
											<div>
												<img src="/static/assets/images/gallery/thumb-5.jpg" alt="150x150">
												<div class="text">
													<div class="inner">
														<span>Some Title!</span>

														<br>
														<a data-rel="colorbox" href="assets/images/gallery/image-5.jpg" class="cboxElement">
															<i class="icon-zoom-in"></i>
														</a>

														<a href="#">
															<i class="icon-user"></i>
														</a>

														<a href="#">
															<i class="icon-share-alt"></i>
														</a>
													</div>
												</div>
											</div>
										</li>

										<li>
											<a data-rel="colorbox" href="assets/images/gallery/image-6.jpg" class="cboxElement">
												<img src="/static/assets/images/gallery/thumb-6.jpg" alt="150x150">
											</a>

											<div class="tools tools-right">
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
											<a data-rel="colorbox" href="assets/images/gallery/image-1.jpg" class="cboxElement">
												<img src="/static/assets/images/gallery/thumb-1.jpg" alt="150x150">
											</a>

											<div class="tools">
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
											<a data-rel="colorbox" href="assets/images/gallery/image-2.jpg" class="cboxElement">
												<img src="/static/assets/images/gallery/thumb-2.jpg" alt="150x150">
											</a>

											<div class="tools tools-top">
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
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  name: 'gallery',
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