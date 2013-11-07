<!-- <pre>{$countryList|@print_r}</pre>-->


<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>Admin-Panel</title>
	<meta name="description" content="Perfectum Dashboard Bootstrap Admin Template.">
	<meta name="author" content="Å�ukasz Holeczek">
	<!-- end: Meta -->
	
	<!-- start: Mobile Specific -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- end: Mobile Specific -->
	
	<!-- start: CSS -->
	<link id="bootstrap-style" href="{$baseUrl}assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="{$baseUrl}assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="{$baseUrl}assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="{$baseUrl}assets/css/style-responsive.css" rel="stylesheet">
    <link href="{$baseUrl}assets/css/custom.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 7 ]>
	<link id="ie-style" href="{$baseUrl}assets/css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8 ]>
	<link id="ie-style" href="{$baseUrl}assets/css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9 ]>
	<![endif]-->
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="{$baseUrl}assets/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url({$baseUrl}assets/img/bg-login.jpg) !important; }
		</style>
		
		
		
</head>

<body>
<div class="container-fluid">
		<div class="row-fluid">
				
			<div class="row-fluid">
				<div class="login-box">
					<div class="icons">
						<a href="home.html"><i class="icon-home"></i></a>
						<a href="#"><i class="icon-cog"></i></a>
					</div>
                    <div class="login-logo" align="center" style="max-width:80%; padding: 0px 80px;"><img src="{$baseUrl}assets/img/comphero-logo_03.png"></div>					
                             
					<!-- for error/success info message -->
			        {if $msgInfo}
			        	<div class="{$msgClass}">
			            	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
			                <strong>{$msgInfo}</strong>
			            </div>
			        {/if}
			        
                    <h2>Login to your account</h2>
                    
						<!-- <form action="admin/validate_credentials" method="post" class="form-horizontal">-->
						{$formOpen}
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="icon-user"></i></span>
								{$username}
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="icon-lock"></i></span>
								{$password}
							</div>
							
							<div class="clearfix"></div>
							
							<div class="input-prepend" title="Password">
							
							<select id="selectError3" name="locale">
								{foreach from=$countryList item=country}
									{if $country->iso2 eq 'HK'}
										<option value="{$country->iso2}" selected>{$country->short_name}</option>
									{else}
										<option value="{$country->iso2}">{$country->short_name}</option>
									{/if}
								{/foreach}
								  </select>
							</div>
							
				
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary"><i class="icon-off icon-white"></i> Login</button>
							</div>
							<div class="clearfix"></div>
					</fieldset>
					<!-- </form>-->
					{$formClose}
					<hr>
					<h3>Forgot Password?</h3>
					<p>
						No problem, <a href="#">click here</a> to get a new password.
					</p>	
				</div><!--/span-->
			</div><!--/row-->
			
				</div><!--/fluid-row-->
				
</div><!--/.fluid-container-->

	<!-- start: JavaScript-->
	<script src="{$baseUrl}assets/js/jquery-1.9.1.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery-migrate-1.0.0.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.ui.touch-punch.js"></script>
	<script src="{$baseUrl}assets/js/bootstrap.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.cookie.js"></script>
	<script src='{$baseUrl}assets/js/fullcalendar.min.js'></script>
	<script src='{$baseUrl}assets/js/jquery.dataTables.min.js'></script>
	<script src="{$baseUrl}assets/js/excanvas.js"></script>
	<script src="{$baseUrl}assets/js/jquery.flot.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.flot.pie.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.flot.stack.js"></script>
	<script src="{$baseUrl}assets/js/jquery.flot.resize.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.chosen.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.uniform.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.cleditor.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.noty.js"></script>
	<script src="{$baseUrl}assets/js/jquery.elfinder.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.raty.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.iphone.toggle.js"></script>
	<script src="{$baseUrl}assets/js/jquery.uploadify-3.1.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.gritter.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.imagesloaded.js"></script>
	<script src="{$baseUrl}assets/js/jquery.masonry.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.knob.js"></script>
	<script src="{$baseUrl}assets/js/jquery.sparkline.min.js"></script>
	<script src="{$baseUrl}assets/js/custom.js"></script>
	<script src="{$baseUrl}assets/js/autoNumeric-1.7.5.js"></script>
		<!-- end: JavaScript-->
	
</body>
</html>