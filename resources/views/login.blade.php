<!DOCTYPE html>
<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.1
Version: 3.6
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
	<meta charset="utf-8"/>
	<title>LKAI | TRAFO SISIPAN</title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8">
	<meta content="" name="description"/>
	<meta content="" name="author"/>
	<!-- BEGIN GLOBAL MANDATORY STYLES -->
	<link href="{{URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
	<link href="{{URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet">
	<link href="{{URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{URL::asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet">
	<!-- END GLOBAL MANDATORY STYLES -->
	<!-- BEGIN PAGE LEVEL STYLES -->
	<link href="{{URL::asset('assets/global/plugins/select2/select2.css') }}" rel="stylesheet">

	<link href="{{URL::asset('assets/admin/pages/css/login5.css')}}" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL SCRIPTS -->
	<!-- BEGIN THEME STYLES -->
	<link href="{{URL::asset('assets/global/css/components.css') }}" id="style_components" rel="stylesheet">
	<link href="{{URL::asset('assets/global/css/plugins.css') }}" rel="stylesheet">
	<link href="{{URL::asset('assets/admin/layout/css/layout.css') }}" rel="stylesheet">
	<link href="{{URL::asset('assets/admin/layout/css/themes/default.css') }}" rel="stylesheet" id="style_color"/>
	<link href="{{URL::asset('assets/admin/layout/css/custom.css') }}" rel="stylesheet">
	<!-- END THEME STYLES -->
	<link href="{{URL::asset('assets/img/favicon.ico') }}" rel="shortcut icon"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body style="background-image: url('./assets/img/bg/pln3.jpg');  background-repeat: no-repeat; background-size: cover; position: relative;" >
	<div class="login"> 
	
		<!-- BEGIN LOGO -->
		<div class="logo">
			<img src="{{URL::asset('assets/img/favicon.ico')}}" alt=""/> 
			
			<a style="text-decoration: none;" href="#">
				<h1 style=" font-family: Courier, monoscope;"><b><font color="red">SISTEM PENGELOLAAM LEMBAR KERJA ANGGARAN INVESTASI</font></b></h1>
				<h2 style=" font-family: Courier, monoscope;"><b><font color="red">PROGRAM RENCANA KERJA TRAFO SISIPAN DAN JARINGAN PENUNJANG</font></b></h2>
			</a>
		</div>
		<!-- END LOGO -->
		<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
		<div class="menu-toggler sidebar-toggler">
		</div>
		<!-- END SIDEBAR TOGGLER BUTTON -->

		<!-- BEGIN LOGIN -->
		<div class="content">
			<!-- BEGIN LOGIN FORM -->
			<form action="/login" method="post">
				{{ csrf_field() }}

				<h3 class="form-title">Login</h3>
				@if (session('status'))

					<div class='alert alert-danger alert-dismissable'>
						<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
						{{ session('status') }}
					</div>
				@endif
				<?php 
				// if( isset($_SESSION['log'])){
				// 	echo $log;
				// }
				?>
				<div class="form-group">
					<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
					<label class="control-label visible-ie8 visible-ie9">Username</label>
					<div class="input-icon">
						<i class="fa fa-user"></i>
						<input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Username" name="username" required/>
					</div>
				</div>

				<font color="#ef4423"><?php //echo form_error('username'); ?></font>
				<div class="form-group">
					<label class="control-label visible-ie8 visible-ie9">Password</label>
					<div class="input-icon">
						<i class="fa fa-lock"></i>
						<input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Password" name="password" required/>
					</div>
				</div>
				<font color="red"><?php //echo form_error('password'); ?></font>

				<div class="form-actions">
					<label class="checkbox">
						
					</label>
						<button type="submit" class="btn green-haze pull-right">
							Login <i class="m-icon-swapright m-icon-white"></i>
						</button>
				</div>

				<?php 
				// $_SESSION['log']="";
				// echo form_close(); 
				?>
			</form>
			<!-- END LOGIN FORM -->
			</div>
		</div>
		<!-- END LOGIN -->
		<div  class="copyright">
			<b>LKAI PRK Trafo Sisipan &copy; 2018 - TRI PURWANTI</b>
		</div>

	<!-- END COPYRIGHT -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->
<!--[if lt IE 9]>
<script src="<?php //echo base_url()?>assets/global/plugins/respond.min.js"></script>
<script src="<?php //echo base_url()?>assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery-migrate.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery.blockui.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery.cokie.min.js') }}"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery-validation/js/jquery.validate.min.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/global/plugins/select2/select2.min.js') }}"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script type="text/javascript" src="{{URL::asset('assets/global/scripts/metronic.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/admin/layout/scripts/layout.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/admin/layout/scripts/demo.js') }}"></script>
<script type="text/javascript" src="{{URL::asset('assets/admin/pages/scripts/login2.js') }}"></script>
<!-- END PAGE LEVEL SCRIPTS -->
<script>
	jQuery(document).ready(function() {     
  Metronic.init(); // init metronic core components
  Layout.init(); // init current layout
  Login.init();
  Demo.init();
});
</script>
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>