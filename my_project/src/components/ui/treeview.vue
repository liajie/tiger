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
							<li class="active">Treeview</li>
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
								Treeview
								<small>
									<i class="icon-double-angle-right"></i>
									with selectable items(single &amp; multiple) and custom icons
								</small>
							</h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<div class="row">
									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header header-color-blue2">
												<h4 class="lighter smaller">Choose Categories</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-8">
													<div class="tree tree-selectable" id="tree1"><div style="display:none;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-plus"></i>					<div class="tree-folder-name"></div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"></div>			</div>			<div style="display:none;" class="tree-item">				<i class="icon-remove"></i>				<div class="tree-item-name"></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-plus"></i>					<div class="tree-folder-name">For Sale</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-plus"></i>					<div class="tree-folder-name">Vehicles</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-plus"></i>					<div class="tree-folder-name">Rentals</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-plus"></i>					<div class="tree-folder-name">Real Estate</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-plus"></i>					<div class="tree-folder-name">Pets</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-item">				<i class="icon-remove"></i>				<div class="tree-item-name">Tickets</div>			</div><div style="display: block;" class="tree-item">				<i class="icon-remove"></i>				<div class="tree-item-name">Services</div>			</div><div style="display: block;" class="tree-item">				<i class="icon-remove"></i>				<div class="tree-item-name">Personals</div>			</div></div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<div class="widget-box">
											<div class="widget-header header-color-green2">
												<h4 class="lighter smaller">Browse Files</h4>
											</div>

											<div class="widget-body">
												<div class="widget-main padding-8">
													<div class="tree tree-unselectable" id="tree2"><div style="display:none;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-folder-close"></i>					<div class="tree-folder-name"></div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"></div>			</div>			<div style="display:none;" class="tree-item">								<div class="tree-item-name"></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-folder-close red"></i>					<div class="tree-folder-name">Pictures</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-folder-close orange"></i>					<div class="tree-folder-name">Music</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-folder-close blue"></i>					<div class="tree-folder-name">Video</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-folder-close green"></i>					<div class="tree-folder-name">Documents</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-folder">				<div class="tree-folder-header">					<i class="icon-folder-close"></i>					<div class="tree-folder-name">Backup</div>				</div>				<div class="tree-folder-content"></div>				<div style="display: none;" class="tree-loader"><div class="tree-loading"><i class="icon-refresh icon-spin blue"></i></div></div>			</div><div style="display: block;" class="tree-item">								<div class="tree-item-name"><i class="icon-file-text grey"></i> ReadMe.txt</div>			</div><div style="display: block;" class="tree-item">								<div class="tree-item-name"><i class="icon-book blue"></i> Manual.html</div>			</div></div>
												</div>
											</div>
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
  name: 'treeview',
  data () {
    return {
      message: ''
    }
  }
}
try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
var $assets = "assets";//this will be used in fuelux.tree-sampledata.js
</script>

<style>
</style>