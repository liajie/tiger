<template>
<html lang="en"><head>
		<meta charset="utf-8">
		<title>虎牙直播后台管理系统</title>
		<meta content="Bootstrapģ��,Bootstrapģ������,Bootstrap�̳�,Bootstrap����" name="keywords">
		<meta content="վ���ز��ṩBootstrapģ��,Bootstrap�̳�,Bootstrap���ķ�������Bootstrap�������" name="description">
		<meta content="width=device-width, initial-scale=1.0" name="viewport">

		<!-- basic styles -->
		
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->

		<!-- fonts -->

	
		<!-- ace styles -->

		

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
	</head>

	<body class="login-layout">
		<div class="main-container" id="login_page">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							<div class="center">
								<h1>
									<i class="icon-leaf green"></i>
									<span class="red">Ace</span>
									<span class="white">Application</span>
								</h1>
								<h4 class="blue">&copy; Company Name</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div class="login-box visible widget-box no-border" id="login-box">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" placeholder="Username" v-model="username" class="form-control">
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" placeholder="Password" v-model="password" class="form-control">
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace">
															<span class="lbl"> Remember Me</span>
														</label>

														<button class="width-35 pull-right btn btn-sm btn-primary" v-on:click="login" type="button">
															<i class="icon-key"></i>
															Login
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">Or Login Using</span>
											</div>

											<div class="social-login center">
												<a class="btn btn-primary">
													<i class="icon-facebook"></i>
												</a>

												<a class="btn btn-info">
													<i class="icon-twitter"></i>
												</a>

												<a class="btn btn-danger">
													<i class="icon-google-plus"></i>
												</a>
											</div>
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											<div>
												<a class="forgot-password-link" onclick="show_box('forgot-box'); return false;" href="#">
													<i class="icon-arrow-left"></i>
													I forgot my password
												</a>
											</div>

											<div>
												<a class="user-signup-link" onclick="show_box('signup-box'); return false;" href="#">
													I want to register
													<i class="icon-arrow-right"></i>
												</a>
											</div>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->

								<div class="forgot-box widget-box no-border" id="forgot-box">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header red lighter bigger">
												<i class="icon-key"></i>
												Retrieve Password
											</h4>

											<div class="space-6"></div>
											<p>
												Enter your email and to receive instructions
											</p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" placeholder="Email" class="form-control">
															<i class="icon-envelope"></i>
														</span>
													</label>

													<div class="clearfix">
														<button class="width-35 pull-right btn btn-sm btn-danger" type="button">
															<i class="icon-lightbulb"></i>
															Send Me!
														</button>
													</div>
												</fieldset>
											</form>
										</div><!-- /widget-main -->

										<div class="toolbar center">
											<a class="back-to-login-link" onclick="show_box('login-box'); return false;" href="#">
												Back to login
												<i class="icon-arrow-right"></i>
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /forgot-box -->

								<div class="signup-box widget-box no-border" id="signup-box">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header green lighter bigger">
												<i class="icon-group blue"></i>
												New User Registration
											</h4>

											<div class="space-6"></div>
											<p> Enter your details to begin: </p>

											<form>
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="email" placeholder="Email" class="form-control">
															<i class="icon-envelope"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" placeholder="Username" class="form-control">
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" placeholder="Password" class="form-control">
															<i class="icon-lock"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" placeholder="Repeat password" class="form-control">
															<i class="icon-retweet"></i>
														</span>
													</label>

													<label class="block">
														<input type="checkbox" class="ace">
														<span class="lbl">
															I accept the
															<a href="#">User Agreement</a>
														</span>
													</label>

													<div class="space-24"></div>

													<div class="clearfix">
														<button class="width-30 pull-left btn btn-sm" type="reset">
															<i class="icon-refresh"></i>
															Reset
														</button>

														<button class="width-65 pull-right btn btn-sm btn-success" type="button">
															Register
															<i class="icon-arrow-right icon-on-right"></i>
														</button>
													</div>
												</fieldset>
											</form>
										</div>

										<div class="toolbar center">
											<a class="back-to-login-link" onclick="show_box('login-box'); return false;" href="#">
												<i class="icon-arrow-left"></i>
												Back to login
											</a>
										</div>
									</div><!-- /widget-body -->
								</div><!-- /signup-box -->
							</div><!-- /position-relative -->
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>-->

		<!-- <![endif]-->

		<!--[if IE]>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<!--<script type="text/javascript">
			window.jQuery || document.write("&lt;script src='/static/assets/js/jquery-2.0.3.min.js'&gt;"+"&lt;"+"/script&gt;");
		</script>-->

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/static/assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
</script>
<![endif]-->

<!--		<script type="text/javascript">
			if("ontouchend" in document) document.write("&lt;script src='/static/assets/js/jquery.mobile.custom.min.js'&gt;"+"&lt;"+"/script&gt;");
		</script>-->

		<!-- inline scripts related to this page -->

		<!--<script type="text/javascript">
			function show_box(id) {
			 jQuery('.widget-box.visible').removeClass('visible');
			 jQuery('#'+id).addClass('visible');
			}
		</script>-->
	<div style="display:none">
		<a title="站长统计" target="_blank" href="http://www.cnzz.com/stat/website.php?web_id=155540">站长统计</a></div>


</body></html>
</template>

<script charset="gb2312" language="JavaScript" src="http://v7.cnzz.com/stat.php?id=155540&amp;web_id=155540"></script>
<script type="text/javascript" charset="utf-8" src="http://c.cnzz.com/core.php?web_id=155540&amp;t=z"></script>
<script>
export default {
  name: 'login',
  data () 
  {
    return {
      username:'',
      password:''
    }
  },
  methods:
  {
  	login:function(val)
  	{
  		$.ajax({
  			url:host+'?r=login/login',
  			dataType:'jsonp',
  			data:{username:this.username,password:this.password},
  			success:function(e)
  			{
  				switch (e.error)
  				{
  					case '200':
  					alert(e.msg);
  					location.href='/';
  					break;
  					default:
  					alert(e.msg);
  					break;
  				}
  			}
  		})
  	}
  }
}

</script>

	
		
<style>
	#sidebar,#navbar
	{
		display: none;
	}
</style>