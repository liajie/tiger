<template>
<div class="main-content">
					<div id="breadcrumbs" class="breadcrumbs">

						<ul class="breadcrumb">
							<li>
								<i class="icon-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Other Pages</a>
							</li>
							<li class="active">Grid</li>
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
								Grid
								<small>
									<i class="icon-double-angle-right"></i>
									bootstrap grid sizing
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="center">
									<div class="row">
										<div class="col-xs-12">
											<span>.col-xs-12</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-1">
											<span>.col-xs-1</span>
										</div>

										<div class="col-xs-11">
											<span>.col-xs-11</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6 col-sm-2">
											<span>.col-xs-6.col-sm-2</span>
										</div>

										<div class="col-xs-6 col-sm-10">
											<span>.col-xs-6.col-sm-10</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12 col-lg-6">
											<span>.col-xs-12.col-lg-6</span>
										</div>

										<div class="col-xs-12 col-lg-6">
											<span>.col-xs-12.col-lg-6</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-4">
											<span>.col-xs-4</span>
										</div>

										<div class="col-xs-8">
											<span>.col-xs-8</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-5">
											<span>.col-xs-5</span>
										</div>

										<div class="col-xs-7">
											<span>.col-xs-7</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-6">
											<span>.col-xs-6</span>
										</div>

										<div class="col-xs-6">
											<span>.col-xs-6</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-7">
											<span>.col-xs-7</span>
										</div>

										<div class="col-xs-5">
											<span>.col-xs-5</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-8">
											<span>.col-xs-8</span>
										</div>

										<div class="col-xs-4">
											<span>.col-xs-4</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-9">
											<span>.col-xs-9</span>
										</div>

										<div class="col-xs-3">
											<span>.col-xs-3</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-10">
											<span>.col-xs-10</span>
										</div>

										<div class="col-xs-2">
											<span>.col-xs-2</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-11">
											<span>.col-xs-11</span>
										</div>

										<div class="col-xs-1">
											<span>.col-xs-1</span>
										</div>
									</div>

									<div class="row">
										<div class="col-xs-12">
											<span>.col-xs-12</span>
										</div>
									</div>
								</div>

								<!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  name: 'grid',
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