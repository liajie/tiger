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
							<li class="active">Dropzone File Upload</li>
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
								Dropzone.js
								<small>
									<i class="icon-double-angle-right"></i>
									Drag &amp; drop file upload with image preview
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="alert alert-info">
									<i class="icon-hand-right"></i>

									Please note that demo server is not configured to save uploaded files, therefore you may get an error message.
									<button data-dismiss="alert" class="close">
										<i class="icon-remove"></i>
									</button>
								</div>

								<div id="dropzone">
									<form class="dropzone dz-clickable" action="//dummy.html">
										
									<div class="dz-default dz-message"><span><span class="bigger-150 bolder"><i class="icon-caret-right red"></i> Drop files</span> to upload 				<span class="smaller-80 grey">(or click)</span> <br> 				<i class="upload-icon icon-cloud-upload blue icon-3x"></i></span></div></form>
								</div><!-- PAGE CONTENT ENDS -->
							</div><!-- /.col -->
						</div><!-- /.row -->
					</div><!-- /.page-content -->
				</div>
</template>

<script>
export default {
  name: 'dropzone',
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