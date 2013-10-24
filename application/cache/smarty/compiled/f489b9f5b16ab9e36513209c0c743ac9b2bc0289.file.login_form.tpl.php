<?php /* Smarty version Smarty-3.1.7, created on 2013-10-24 08:28:35
         compiled from "application\modules\admin\views\login_form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1610652561f8c9eee99-96918773%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f489b9f5b16ab9e36513209c0c743ac9b2bc0289' => 
    array (
      0 => 'application\\modules\\admin\\views\\login_form.tpl',
      1 => 1382600130,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1610652561f8c9eee99-96918773',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52561f8cad17c',
  'variables' => 
  array (
    'countryList' => 0,
    'baseUrl' => 0,
    'msgClass' => 0,
    'msgInfo' => 0,
    'country' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52561f8cad17c')) {function content_52561f8cad17c($_smarty_tpl) {?><!-- <pre><?php echo print_r($_smarty_tpl->tpl_vars['countryList']->value);?>
</pre>-->


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
	<link id="bootstrap-style" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/bootstrap-responsive.min.css" rel="stylesheet">
	<link id="base-style" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/style.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/style-responsive.css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/custom.css" rel="stylesheet" type="text/css">
	<!--[if lt IE 7 ]>
	<link id="ie-style" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 8 ]>
	<link id="ie-style" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/style-ie.css" rel="stylesheet">
	<![endif]-->
	<!--[if IE 9 ]>
	<![endif]-->
	
	<!-- end: CSS -->
	

	<!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
	<!--[if lt IE 9]>
	  <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- start: Favicon -->
	<link rel="shortcut icon" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/favicon.ico">
	<!-- end: Favicon -->
	
			<style type="text/css">
			body { background: url(<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/bg-login.jpg) !important; }
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
                    <div class="login-logo" align="center" style="max-width:80%; padding: 0px 80px;"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/comphero-logo_03.png"></div>					
                   
                    <h2>Login to your account</h2>
                    <div class="<?php echo $_smarty_tpl->tpl_vars['msgClass']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['msgInfo']->value;?>
</strong></div>  
						<form action="admin/validate_credentials" method="post" class="form-horizontal">
						<fieldset>
							
							<div class="input-prepend" title="Username">
								<span class="add-on"><i class="icon-user"></i></span>
								<input class="input-large span10" name="username" id="username" type="text" placeholder="type email"/>
							</div>
							<div class="clearfix"></div>

							<div class="input-prepend" title="Password">
								<span class="add-on"><i class="icon-lock"></i></span>
								<input class="input-large span10" name="password" id="password" type="password" placeholder="type password"/>
							</div>
							
							<div class="clearfix"></div>
							
							<div class="input-prepend" title="Password">
							
							<select id="selectError3" name="locale">
								<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['countryList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['country']->value->iso2=='HK'){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->iso2;?>
" selected><?php echo $_smarty_tpl->tpl_vars['country']->value->short_name;?>
</option>
									<?php }else{ ?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value->iso2;?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value->short_name;?>
</option>
									<?php }?>
								<?php } ?>
								  </select>
							</div>
							
				
							<div class="clearfix"></div>
							
							<label class="remember" for="remember"><input type="checkbox" id="remember" />Remember me</label>

							<div class="button-login">	
								<button type="submit" class="btn btn-primary"><i class="icon-off icon-white"></i> Login</button>
							</div>
							<div class="clearfix"></div>
					</fieldset>
					</form>
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
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery-migrate-1.0.0.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.ui.touch-punch.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/bootstrap.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.cookie.js"></script>
	<script src='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/fullcalendar.min.js'></script>
	<script src='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.dataTables.min.js'></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/excanvas.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.resize.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.chosen.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.uniform.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.cleditor.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.noty.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.elfinder.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.raty.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.iphone.toggle.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.uploadify-3.1.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.gritter.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.imagesloaded.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.masonry.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.knob.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/custom.js"></script>
		<!-- end: JavaScript-->
	
</body>
</html><?php }} ?>