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
							<li class="active">Wysiwyg &amp; Markdown</li>
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
							<h1>Wysiwyg &amp; Markdown Editor </h1>
						</div><!-- /.page-header -->

						<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->

								<h4 class="header green clearfix">
									Bootstrap Lightweight Editor
									<span class="block pull-right">
										<small class="grey middle">Choose style: &nbsp;</small>

										<span class="btn-toolbar inline middle no-margin">
											<span class="btn-group no-margin" data-toggle="buttons">
												<label class="btn btn-sm btn-yellow">
													1
													<input type="radio" value="1">
												</label>

												<label class="btn btn-sm btn-yellow active">
													2
													<input type="radio" value="2">
												</label>

												<label class="btn btn-sm btn-yellow">
													3
													<input type="radio" value="3">
												</label>
											</span>
										</span>
									</span>
								</h4>

								 <div class="wysiwyg-toolbar btn-toolbar center wysiwyg-style2"> <div class="btn-group">  <a title="" data-toggle="dropdown" class="btn btn-sm  dropdown-toggle" data-original-title="Font"><i class="icon-font"></i><i class="icon-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light"> <li><a style="font-family:'Arial'" data-edit="fontName Arial">Arial</a></li>  <li><a style="font-family:'Courier'" data-edit="fontName Courier">Courier</a></li>  <li><a style="font-family:'Comic Sans MS'" data-edit="fontName Comic Sans MS">Comic Sans MS</a></li>  <li><a style="font-family:'Helvetica'" data-edit="fontName Helvetica">Helvetica</a></li>  <li><a style="font-family:'Open Sans'" data-edit="fontName Open Sans">Open Sans</a></li>  <li><a style="font-family:'Tahoma'" data-edit="fontName Tahoma">Tahoma</a></li>  <li><a style="font-family:'Verdana'" data-edit="fontName Verdana">Verdana</a></li>  </ul> </div> <div class="btn-group">  <a title="" data-toggle="dropdown" class="btn btn-sm  dropdown-toggle" data-original-title="Font Size"><i class="icon-text-height"></i>&nbsp;<i class="icon-angle-down icon-on-right"></i></a>  <ul class="dropdown-menu dropdown-light">  <li><a data-edit="fontSize 1"><font size="1">Small</font></a></li>  <li><a data-edit="fontSize 3"><font size="3">Normal</font></a></li>  <li><a data-edit="fontSize 5"><font size="5">Huge</font></a></li>  </ul>  </div> <div class="btn-group">  <a title="" data-edit="bold" class="btn btn-sm btn-info" data-original-title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>  <a title="" data-edit="italic" class="btn btn-sm btn-info" data-original-title="Italic (Ctrl/Cmd+I)"><i class="icon-italic"></i></a>  <a title="" data-edit="strikethrough" class="btn btn-sm btn-info" data-original-title="Strikethrough"><i class="icon-strikethrough"></i></a>  <a title="" data-edit="underline" class="btn btn-sm btn-info" data-original-title="Underline"><i class="icon-underline"></i></a>  </div> <div class="btn-group">  <a title="" data-edit="insertunorderedlist" class="btn btn-sm btn-success" data-original-title="Bullet list"><i class="icon-list-ul"></i></a>  <a title="" data-edit="insertorderedlist" class="btn btn-sm btn-success" data-original-title="Number list"><i class="icon-list-ol"></i></a>  <a title="" data-edit="outdent" class="btn btn-sm btn-purple" data-original-title="Reduce indent (Shift+Tab)"><i class="icon-indent-left"></i></a>  <a title="" data-edit="indent" class="btn btn-sm btn-purple" data-original-title="Indent (Tab)"><i class="icon-indent-right"></i></a>  </div> <div class="btn-group">  <a title="" data-edit="justifyleft" class="btn btn-sm btn-primary active" data-original-title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>  <a title="" data-edit="justifycenter" class="btn btn-sm btn-primary" data-original-title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>  <a title="" data-edit="justifyright" class="btn btn-sm btn-primary" data-original-title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>  <a title="" data-edit="justifyfull" class="btn btn-sm btn-inverse" data-original-title="Justify (Ctrl/Cmd+J)"><i class="icon-align-justify"></i></a>  </div> <div class="btn-group">  <div class="inline position-relative"> <a title="" data-toggle="dropdown" class="btn btn-sm btn-pink dropdown-toggle" data-original-title="Hyperlink"><i class="icon-link"></i></a>  <div class="dropdown-menu dropdown-caret pull-right">							<div class="input-group">								<input type="text" data-edit="createLink" placeholder="URL" class="form-control">								<span class="input-group-btn">									<button type="button" class="btn btn-sm btn-primary">Add</button>								</span>							</div>						</div> </div> <a title="" data-edit="unlink" class="btn btn-sm btn-pink" data-original-title="Remove Hyperlink"><i class="icon-unlink"></i></a>  </div> <div class="btn-group">  <div class="inline position-relative"> <a title="" data-toggle="dropdown" class="btn btn-sm btn-success dropdown-toggle" data-original-title="Insert picture"><i class="icon-picture"></i></a>  <div class="dropdown-menu dropdown-caret pull-right">							<div class="input-group">								<input type="text" data-edit="insertImage" placeholder="Image URL" class="form-control">								<span class="input-group-btn">									<button type="button" class="btn btn-sm btn-primary">Insert</button>								</span>							</div><div class="space-2"></div>							 <div class="center">								<button type="button" class="btn btn-sm btn-success wysiwyg-choose-file"><i class="icon-file"></i> Choose Image …</button>								<input type="file" data-edit="insertImage">							  </div> </div> </div> </div> <div class="btn-group">  <select title="Change Color" class="hide wysiwyg_colorpicker" style="display: none;">  <option value="#ac725e">#ac725e</option>  <option value="#d06b64">#d06b64</option>  <option value="#f83a22">#f83a22</option>  <option value="#fa573c">#fa573c</option>  <option value="#ff7537">#ff7537</option>  <option value="#ffad46">#ffad46</option>  <option value="#42d692">#42d692</option>  <option value="#16a765">#16a765</option>  <option value="#7bd148">#7bd148</option>  <option value="#b3dc6c">#b3dc6c</option>  <option value="#fbe983">#fbe983</option>  <option value="#fad165">#fad165</option>  <option value="#92e1c0">#92e1c0</option>  <option value="#9fe1e7">#9fe1e7</option>  <option value="#9fc6e7">#9fc6e7</option>  <option value="#4986e7">#4986e7</option>  <option value="#9a9cff">#9a9cff</option>  <option value="#b99aff">#b99aff</option>  <option value="#c2c2c2">#c2c2c2</option>  <option value="#cabdbf">#cabdbf</option>  <option value="#cca6ac">#cca6ac</option>  <option value="#f691b2">#f691b2</option>  <option value="#cd74e6">#cd74e6</option>  <option value="#a47ae2">#a47ae2</option>  <option value="#444444">#444444</option>  </select><div class="dropdown dropdown-colorpicker"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><span style="background-color:#ac725e" class="btn-colorpicker" data-original-title="" title=""></span></a><ul class="dropdown-menu dropdown-caret pull-right"><li><a data-color="#ac725e" style="background-color:#ac725e;" href="#" class="colorpick-btn selected"></a></li><li><a data-color="#d06b64" style="background-color:#d06b64;" href="#" class="colorpick-btn"></a></li><li><a data-color="#f83a22" style="background-color:#f83a22;" href="#" class="colorpick-btn"></a></li><li><a data-color="#fa573c" style="background-color:#fa573c;" href="#" class="colorpick-btn"></a></li><li><a data-color="#ff7537" style="background-color:#ff7537;" href="#" class="colorpick-btn"></a></li><li><a data-color="#ffad46" style="background-color:#ffad46;" href="#" class="colorpick-btn"></a></li><li><a data-color="#42d692" style="background-color:#42d692;" href="#" class="colorpick-btn"></a></li><li><a data-color="#16a765" style="background-color:#16a765;" href="#" class="colorpick-btn"></a></li><li><a data-color="#7bd148" style="background-color:#7bd148;" href="#" class="colorpick-btn"></a></li><li><a data-color="#b3dc6c" style="background-color:#b3dc6c;" href="#" class="colorpick-btn"></a></li><li><a data-color="#fbe983" style="background-color:#fbe983;" href="#" class="colorpick-btn"></a></li><li><a data-color="#fad165" style="background-color:#fad165;" href="#" class="colorpick-btn"></a></li><li><a data-color="#92e1c0" style="background-color:#92e1c0;" href="#" class="colorpick-btn"></a></li><li><a data-color="#9fe1e7" style="background-color:#9fe1e7;" href="#" class="colorpick-btn"></a></li><li><a data-color="#9fc6e7" style="background-color:#9fc6e7;" href="#" class="colorpick-btn"></a></li><li><a data-color="#4986e7" style="background-color:#4986e7;" href="#" class="colorpick-btn"></a></li><li><a data-color="#9a9cff" style="background-color:#9a9cff;" href="#" class="colorpick-btn"></a></li><li><a data-color="#b99aff" style="background-color:#b99aff;" href="#" class="colorpick-btn"></a></li><li><a data-color="#c2c2c2" style="background-color:#c2c2c2;" href="#" class="colorpick-btn"></a></li><li><a data-color="#cabdbf" style="background-color:#cabdbf;" href="#" class="colorpick-btn"></a></li><li><a data-color="#cca6ac" style="background-color:#cca6ac;" href="#" class="colorpick-btn"></a></li><li><a data-color="#f691b2" style="background-color:#f691b2;" href="#" class="colorpick-btn"></a></li><li><a data-color="#cd74e6" style="background-color:#cd74e6;" href="#" class="colorpick-btn"></a></li><li><a data-color="#a47ae2" style="background-color:#a47ae2;" href="#" class="colorpick-btn"></a></li><li><a data-color="#444444" style="background-color:#444444;" href="#" class="colorpick-btn"></a></li></ul></div>  <input type="text" data-edit="foreColor" class="hide" disabled="" style="display:none;">  </div> <div class="btn-group">  <a title="" data-edit="undo" class="btn btn-sm btn-grey" data-original-title="Undo (Ctrl/Cmd+Z)"><i class="icon-undo"></i></a>  <a title="" data-edit="redo" class="btn btn-sm btn-grey" data-original-title="Redo (Ctrl/Cmd+Y)"><i class="icon-repeat"></i></a>  </div> </div> <div contenteditable="true" id="editor1" class="wysiwyg-editor"></div>

								<div class="hr hr-double dotted"></div>

								<div class="row">
									<div class="col-sm-6">
										<h4 class="header blue">Inside Widget</h4>

										<div class="widget-box">
											<div class="widget-header widget-header-small  header-color-green"> <div class="wysiwyg-toolbar btn-toolbar center inline"> <div class="btn-group">  <a title="" data-edit="bold" class="btn btn-sm " data-original-title="Bold (Ctrl/Cmd+B)"><i class="icon-bold"></i></a>  <a title="" data-edit="italic" class="btn btn-sm " data-original-title="Change Title!"><i class="icon-leaf"></i></a>  <a title="" data-edit="strikethrough" class="btn btn-sm " data-original-title="Strikethrough"><i class="icon-strikethrough"></i></a>  </div> <div class="btn-group">  <a title="" data-edit="insertunorderedlist" class="btn btn-sm " data-original-title="Bullet list"><i class="icon-list-ul"></i></a>  <a title="" data-edit="insertorderedlist" class="btn btn-sm " data-original-title="Number list"><i class="icon-list-ol"></i></a>  </div> <div class="btn-group">  <a title="" data-edit="justifyleft" class="btn btn-sm " data-original-title="Align Left (Ctrl/Cmd+L)"><i class="icon-align-left"></i></a>  <a title="" data-edit="justifycenter" class="btn btn-sm " data-original-title="Center (Ctrl/Cmd+E)"><i class="icon-align-center"></i></a>  <a title="" data-edit="justifyright" class="btn btn-sm " data-original-title="Align Right (Ctrl/Cmd+R)"><i class="icon-align-right"></i></a>  </div> </div> 
												<div class="widget-toolbar inline">
													<a data-action="collapse" href="#">
														<i class="icon-chevron-up"></i>
													</a>
												</div>
											</div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div contenteditable="true" id="editor2" class="wysiwyg-editor" style="height: 200px;"></div>
												</div>

												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-left">
														<button class="btn btn-sm btn-grey">
															<i class="icon-remove bigger-125"></i>
															Cancel
														</button>
													</div>

													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-danger">
															<i class="icon-save bigger-125"></i>
															Save
														</button>

														<button class="btn btn-sm btn-success">
															<i class="icon-globe bigger-125"></i>

															Publish
															<i class="icon-arrow-right icon-on-right bigger-125"></i>
														</button>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-sm-6">
										<h4 class="header green">Markdown Editor</h4>

										<div class="widget-box">
											<div class="widget-header widget-header-small header-color-blue">  </div>

											<div class="widget-body">
												<div class="widget-main no-padding">
													<div class="md-editor" id="1506524941401"><div class="md-header"><div class="btn-group"><button data-handler="bootstrap-markdown-cmdBold" data-provider="bootstrap-markdown" tabindex="-1" title="Bold" class="btn btn-small"><i class="icon icon-bold"></i> </button><button data-handler="bootstrap-markdown-cmdItalic" data-provider="bootstrap-markdown" tabindex="-1" title="Italic" class="btn btn-small"><i class="icon icon-italic"></i> </button><button data-handler="bootstrap-markdown-cmdHeading" data-provider="bootstrap-markdown" tabindex="-1" title="Heading" class="btn btn-small"><i class="icon icon-font"></i> </button></div><div class="btn-group"><button data-handler="bootstrap-markdown-cmdUrl" data-provider="bootstrap-markdown" tabindex="-1" title="URL/Link" class="btn btn-small"><i class="icon icon-globe"></i> </button><button data-handler="bootstrap-markdown-cmdImage" data-provider="bootstrap-markdown" tabindex="-1" title="Image" class="btn btn-small"><i class="icon icon-picture"></i> </button></div><div class="btn-group"><button data-handler="bootstrap-markdown-cmdList" data-provider="bootstrap-markdown" tabindex="-1" title="List" class="btn btn-small"><i class="icon icon-list"></i> </button></div><div class="btn-group"><button data-toggle="button" data-handler="bootstrap-markdown-cmdPreview" data-provider="bootstrap-markdown" tabindex="-1" title="Preview" class="btn btn-inverse btn-small"><i class="icon icon-white icon-search"></i> Preview</button></div></div><textarea rows="10" data-provide="markdown" name="content" class="span12 md-input" style="resize: none;">**Markdown Editor** inside a *widget box*

- list item 1
- list item 2
- list item 3</textarea></div>
												</div>

												<div class="widget-toolbox padding-4 clearfix">
													<div class="btn-group pull-left">
														<button class="btn btn-sm btn-info">
															<i class="icon-remove bigger-125"></i>
															Cancel
														</button>
													</div>

													<div class="btn-group pull-right">
														<button class="btn btn-sm btn-purple">
															<i class="icon-save bigger-125"></i>
															Save
														</button>
													</div>
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
  name: 'wysiwyg',
  data () {
    return {
      message: ''
    }
  }
}

try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
var $path_assets = "assets";//this will be used in loading jQuery UI if needed!
</script>

<style>
</style>