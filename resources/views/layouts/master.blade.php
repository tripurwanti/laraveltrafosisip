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
		<title>LKAI | TRAFO SISIPAN <?php //echo $title;?></title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<meta content="" name="description"/>
		<meta content="" name="author"/>
		<!-- BEGIN GLOBAL MANDATORY STYLES -->

		<link href="{{URL::asset('assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
		<link href="{{URL::asset('assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/global/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/global/plugins/uniform/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css"/>
		<!-- END GLOBAL MANDATORY STYLES -->
		<!-- BEGIN PAGE LEVEL STYLES -->
		<link href="{{URL::asset('assets/global/plugins/select2/select2.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('assets/global/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
		<link href="{{URL::asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal-bs3patch.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/global/plugins/bootstrap-modal/css/bootstrap-modal.css') }}" rel="stylesheet" type="text/css"/>
		<!-- END PAGE LEVEL STYLES -->
		<!-- BEGIN THEME STYLES -->
		<link href="{{URL::asset('assets/global/css/components.css') }}" id="style_components" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/global/css/plugins.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/admin/layout/css/layout.css') }}" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/admin/layout/css/themes/default.css') }}" id="style_color" rel="stylesheet" type="text/css"/>
		<link href="{{URL::asset('assets/admin/layout/css/custom.css') }}" rel="stylesheet" type="text/css"/>
		<!-- END THEME STYLES -->
		<link href="{{URL::asset('assets/img/favicon.ico') }}" rel="shortcut icon"/>
	</head>
	<!-- END HEAD -->

	<!-- BEGIN BODY -->
	<!-- DOC: Apply "page-header-fixed-mobile" and "page-footer-fixed-mobile" class to body element to force fixed header or footer in mobile devices -->
	<!-- DOC: Apply "page-sidebar-closed" class to the body and "page-sidebar-menu-closed" class to the sidebar menu element to hide the sidebar by default -->
	<!-- DOC: Apply "page-sidebar-hide" class to the body to make the sidebar completely hidden on toggle -->
	<!-- DOC: Apply "page-sidebar-closed-hide-logo" class to the body element to make the logo hidden on sidebar toggle -->
	<!-- DOC: Apply "page-sidebar-hide" class to body element to completely hide the sidebar on sidebar toggle -->
	<!-- DOC: Apply "page-sidebar-fixed" class to have fixed sidebar -->
	<!-- DOC: Apply "page-footer-fixed" class to the body element to have fixed footer -->
	<!-- DOC: Apply "page-sidebar-reversed" class to put the sidebar on the right side -->
	<!-- DOC: Apply "page-full-width" class to the body element to have full width page without the sidebar menu -->
	<body class="page-header-fixed page-quick-sidebar-over-content " style="background-color: #3B5998">
		<!-- BEGIN HEADER -->

        @include('includes.header')

		<!-- <?php //echo $_header;?> -->
		<!-- END HEADER -->
		<div class="clearfix"></div>
		<!-- BEGIN CONTAINER -->
		<div class="page-container">
			<!-- BEGIN SIDEBAR -->
				<div class="page-sidebar-wrapper">
                @include('includes.sidebar')
				</div>
			<!-- END SIDEBAR -->
			<!-- BEGIN CONTENT -->
				<div class="page-content-wrapper">
                    @yield('content')
    			</div>
			<!-- END CONTENT -->

		</div>
		<!-- END CONTAINER -->
		<!-- BEGIN FOOTER -->
		<div class="page-footer">
			<div class="page-footer-inner">
				LKAI PRK Trafo Sisipan © 2018 -  
				<b id="popoverData" data-toggle="popover" title="Autor"  data-trigger="hover"><font color="#1CAF9A">TRI PURWANTI</font></b>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- END FOOTER -->

		<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
		<!-- BEGIN CORE PLUGINS -->
		<!--[if lt IE 9]>
		<![endif]-->
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery-migrate.min.js') }}"></script>
		<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery.blockui.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/jquery.cokie.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/uniform/jquery.uniform.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}"></script>
		<!-- END CORE PLUGINS -->
		<!-- BEGIN PAGE LEVEL PLUGINS -->
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/select2/select2.min.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/datatables/jquery.dataTables.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/datatables/dataTables.bootstrap.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modalmanager.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/global/plugins/bootstrap-modal/js/bootstrap-modal.js') }}"></script>
		<!-- END PAGE LEVEL PLUGINS -->
		<!-- BEGIN PAGE LEVEL SCRIPTS -->
		<script type="text/javascript" src="{{URL::asset('assets/global/scripts/metronic.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/admin/layout/scripts/layout.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/admin/layout/scripts/quick-sidebar.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/admin/layout/scripts/demo.js') }}"></script>
		<script type="text/javascript" src="{{URL::asset('assets/admin/pages/scripts/table-managed.js') }}"></script>
		<!-- MANUAL JS -->
		<script type="text/javascript" src="{{URL::asset('assets/admin/rekonfigjtm.js') }}"></script>

		<!-- END MANUAL JS -->

		<script>
			function tampilLog(idusulan){
				$.ajax({
					type:'POST',
					cache: false,
					success:function(html){
						$("#log_usulan").html(html);
					},
				});
			}
		</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$('#tombol').click(function(){
				$('#modal-kotak , #bg').fadeIn("slow");
			});
			$('#tombol-tutup').click(function(){
				$('#modal-kotak , #bg').fadeOut("slow");
			});
		});
	</script>



		<script>

		jQuery(document).ready(function() {       
		Metronic.init(); // init metronic core components
			Layout.init(); // init current layout
			QuickSidebar.init(); // init quick sidebar
			Demo.init(); // init demo features
		});
		</script>

		<script type="text/javascript">
				$(document).ready(function(){
					$('[data-toggle="popover"]').popover({
						placement : 'top'
					});
				});
				$('#popoverData').popover();
				$('#popoverOption').popover({ trigger: "hover" });
				
				// $(function() {
				$(document).ready( function () {
						$("#konstruksidatatable").DataTable(
							{
								"aLengthMenu": [10, 25, 50, 100],
								"iDisplayLength": 10
								// "pageLength": 25
							}
						);
						$("#usulandatatable").DataTable();
					});
		</script>
	</body>
<!-- END BODY -->
</html>