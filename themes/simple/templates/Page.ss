<!DOCTYPE html>
<!-- Template Name: Clip-One - Responsive Admin Template build with Twitter Bootstrap 3.x Version: 1.3 Author: ClipTheme -->
<!--[if IE 8]><html class="ie8 no-js" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9 no-js" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
	<!--<![endif]-->
	<!-- start: HEAD -->
	<head>
	    <% base_tag %>
		<title><% if $MetaTitle %>$MetaTitle<% else %>$Title<% end_if %> &raquo; $SiteConfig.Title</title>
		
		<!-- start: META -->
		<meta charset="utf-8" />
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    $MetaTags(false)
		<!--[if IE]><meta http-equiv='X-UA-Compatible' content="IE=edge,IE=9,IE=8,chrome=1" /><![endif]-->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta content="" name="description" />
		<meta content="" name="author" />
		<!-- end: META -->
		<!-- start: MAIN CSS -->
		<link rel="stylesheet" href="$ThemeDir/plugins/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="$ThemeDir/fonts/style.css">
		<link rel="stylesheet" href="$ThemeDir/css/main.css">
		<link rel="stylesheet" href="$ThemeDir/css/main-responsive.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/iCheck/skins/all.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/bootstrap-colorpalette/css/bootstrap-colorpalette.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/perfect-scrollbar/src/perfect-scrollbar.css">
		<link rel="stylesheet" href="$ThemeDir/css/theme_gateway.css" type="text/css" id="skin_color">
		<link rel="stylesheet" href="$ThemeDir/css/print.css" type="text/css" media="print"/>
		<!--[if IE 7]>
		<link rel="stylesheet" href="$ThemeDir/plugins/font-awesome/css/font-awesome-ie7.min.css">
		<![endif]-->
		<!-- end: MAIN CSS -->
		<!-- start: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="stylesheet" href="$ThemeDir/plugins/select2/select2.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/datepicker/css/datepicker.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/jQuery-Tags-Input/jquery.tagsinput.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/bootstrap-fileupload/bootstrap-fileupload.min.css">
		<link rel="stylesheet" href="$ThemeDir/plugins/summernote/build/summernote.css">
		
		<!-- end: CSS REQUIRED FOR THIS PAGE ONLY -->
		<link rel="shortcut icon" href="fav.ico" />
	</head>
	<!-- end: HEAD -->
	<!-- start: BODY -->
	<body>
	  
	  <% include Header %>

		
			<!-- start: MAIN CONTAINER -->
		<div class="main-container">
			  <% include SideBar %>
			<!-- start: PAGE -->
			<div class="main-content">
			  	<% include PanelConfigForm %>
			  		<div class="container">
			  		  <% include BreadCrumbSearch %>
					     $Layout
				    </div>
			</div>
			<!-- end: PAGE -->
		</div>
		 <!-- end: MAIN CONTAINER -->
		<% include Footer %> 

      

		
	<!-- start: MAIN JAVASCRIPTS -->
		<!--[if lt IE 9]>
		<script src="$ThemeDir/plugins/respond.min.js"></script>
		<script src="$ThemeDir/plugins/excanvas.min.js"></script>
		<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<![endif]-->
		<!--[if gte IE 9]><!-->
	
		<!--<![endif]-->
		<script src="$ThemeDir/javascript/jq.js"></script>
		<script src="$ThemeDir/plugins/jquery-ui/jquery-ui-1.10.2.custom.min.js"></script>
		<script src="$ThemeDir/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js"></script>
		<script src="$ThemeDir/plugins/blockUI/jquery.blockUI.js"></script>
		<script src="$ThemeDir/plugins/iCheck/jquery.icheck.min.js"></script>
		<script src="$ThemeDir/plugins/perfect-scrollbar/src/jquery.mousewheel.js"></script>
		<script src="$ThemeDir/plugins/perfect-scrollbar/src/perfect-scrollbar.js"></script>
		<script src="$ThemeDir/plugins/less/less-1.5.0.min.js"></script>
		<script src="$ThemeDir/plugins/jquery-cookie/jquery.cookie.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-colorpalette/js/bootstrap-colorpalette.js"></script>
		<script src="$ThemeDir/javascript/main.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="$ThemeDir/plugins/jquery-inputlimiter/jquery.inputlimiter.1.3.1.min.js"></script>
		<script src="$ThemeDir/plugins/autosize/jquery.autosize.min.js"></script>
		<script src="$ThemeDir/plugins/select2/select2.min.js"></script>
		<script src="$ThemeDir/plugins/jquery.maskedinput/src/jquery.maskedinput.js"></script>
		<script src="$ThemeDir/plugins/jquery-maskmoney/jquery.maskMoney.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-daterangepicker/moment.min.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-daterangepicker/daterangepicker.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-colorpicker/js/commits.js"></script>
		<script src="$ThemeDir/plugins/jQuery-Tags-Input/jquery.tagsinput.js"></script>
		<script src="$ThemeDir/plugins/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="$ThemeDir/plugins/summernote/build/summernote.min.js"></script>
		<script src="$ThemeDir/plugins/ckeditor/ckeditor.js"></script>
		<script src="$ThemeDir/plugins/ckeditor/adapters/jquery.js"></script>
		<script src="$ThemeDir/javascript/form-elements.js"></script>
		<!-- <script src="$ThemeDir/plugins/bootstrap-modal/js/bootstrap-modal.js"></script> -->
		<script src="$ThemeDir/plugins/bootstrap-modal/js/bootstrap-modalmanager.js"></script>
		<!-- <script src="$ThemeDir/javascript/ui-modals.js"></script> -->
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
	
	<script>
			jQuery(document).ready(function() {
			  
				Main.init();
				FormElements.init();
				
			});
		</script>


				</body>
	<!-- end: BODY -->
</html>
				