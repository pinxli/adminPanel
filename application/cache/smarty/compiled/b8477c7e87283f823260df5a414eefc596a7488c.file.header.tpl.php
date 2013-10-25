<?php /* Smarty version Smarty-3.1.7, created on 2013-10-25 09:00:06
         compiled from "application\views\includes\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:93385257869c99f3c7-90349051%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b8477c7e87283f823260df5a414eefc596a7488c' => 
    array (
      0 => 'application\\views\\includes\\header.tpl',
      1 => 1382691605,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '93385257869c99f3c7-90349051',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5257869ca43cd',
  'variables' => 
  array (
    'title' => 0,
    'baseUrl' => 0,
    'verticalType' => 0,
    'producttype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5257869ca43cd')) {function content_5257869ca43cd($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
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
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link id="base-style-responsive" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/style-responsive.css" rel="stylesheet">
	<link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/css/custom.css" type="text/css" rel="stylesheet">
    <link href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery-1.9.1.min.js" type="text/javascript">
	
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
	
		
		
		
</head>
<body>

<div id="overlay">
		<ul>
		  <li class="li1"></li>
		  <li class="li2"></li>
		  <li class="li3"></li>
		  <li class="li4"></li>
		  <li class="li5"></li>
		  <li class="li6"></li>
		</ul>
</div>	



	<!-- start: Header -->
	<div class="navbar">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".top-nav.nav-collapse,.sidebar-nav.nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<a class="brand" href="home.html"><span class="hidden-phone"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/comphero-logo_04.png" style="max-width:25%" ></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-warning-sign icon-white"></i> <span class="label label-important hidden-phone">2</span> <span class="label label-success hidden-phone">11</span>
							</a>
							<ul class="dropdown-menu notifications">
								<li>
									<span class="dropdown-menu-title">You have 11 notifications</span>
								</li>	
                            	<li>
                                    <a href="#">
										+ <i class="icon-user"></i> <span class="message">New user registration</span> <span class="time">1 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										+ <i class="icon-comment"></i> <span class="message">New comment</span> <span class="time">7 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										+ <i class="icon-comment"></i> <span class="message">New comment</span> <span class="time">8 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										+ <i class="icon-comment"></i> <span class="message">New comment</span> <span class="time">16 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										+ <i class="icon-user"></i> <span class="message">New user registration</span> <span class="time">36 min</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										+ <i class="icon-shopping-cart"></i> <span class="message">2 items sold</span> <span class="time">1 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										- <i class="icon-user icon-red"></i> <span class="message">User deleted account</span> <span class="time">2 hour</span> 
                                    </a>
                                </li>
								<li class="warning">
                                    <a href="#">
										- <i class="icon-shopping-cart icon-red"></i> <span class="message">Transaction was canceled</span> <span class="time">6 hour</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										+ <i class="icon-comment"></i> <span class="message">New comment</span> <span class="time">yesterday</span> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										+ <i class="icon-user"></i> <span class="message">New user registration</span> <span class="time">yesterday</span> 
                                    </a>
                                </li>
                                <li>
                            		<a class="dropdown-menu-sub-footer">View all notifications</a>
								</li>	
							</ul>
						</li>
						<!-- start: Notifications Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-tasks icon-white"></i> <span class="label label-warning hidden-phone">17</span>
							</a>
							<ul class="dropdown-menu tasks">
								<li>
									<span class="dropdown-menu-title">You have 17 tasks in progress</span>
                            	</li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">iOS Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">80</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Android Development</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">47</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">Django Project For Google</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">32</div> 
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="header">
											<span class="title">SEO for new sites</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">63</div> 
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="header">
											<span class="title">New blog posts</span>
											<span class="percent"></span>
										</span>
                                        <div class="taskProgress progressSlim progressYellow">80</div> 
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all tasks</a>
								</li>	
							</ul>
						</li>
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope icon-white"></i> <span class="label label-success hidden-phone">9</span>
							</a>
							<ul class="dropdown-menu messages">
								<li>
									<span class="dropdown-menu-title">You have 9 messages</span>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Å�ukasz Holeczek
										     </span>
											<span class="time">
										    	6 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar2.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Megan Abott
										     </span>
											<span class="time">
										    	56 min
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar3.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Kate Ross
										     </span>
											<span class="time">
										    	3 hours
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar4.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Julie Blank
										     </span>
											<span class="time">
										    	yesterday
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
										<span class="avatar"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar5.jpg" alt="Avatar"></span>
										<span class="header">
											<span class="from">
										    	Jane Sanders
										     </span>
											<span class="time">
										    	Jul 25, 2012
										    </span>
										</span>
                                        <span class="message">
                                            Lorem ipsum dolor sit amet consectetur adipiscing elit, et al commore
                                        </span>  
                                    </a>
                                </li>
								<li>
                            		<a class="dropdown-menu-sub-footer">View all messages</a>
								</li>	
							</ul>
						</li>
						<!-- end: Message Dropdown -->
						<li>
							<a class="btn" href="#">
								<i class="icon-wrench icon-white"></i>
							</a>
						</li>
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-user icon-white"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
admin/logout"><i class="icon-off"></i> Logout</a></li>
							</ul>
						</li>
						<!-- end: User Dropdown -->
					</ul>
				</div>
				<!-- end: Header Menu -->
				
			</div>
		</div>
	</div>
	<!-- end: Header -->


<div class="container-fluid">
	<div class="row-fluid">
				
		<!-- start: Main Menu -->
			<div class="span2 main-menu-span">
				<div class="nav-collapse sidebar-nav">
					<ul class="nav nav-tabs nav-stacked main-menu">
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
dashboard/members_area"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Home</span></a></li>
                        <li><a class="dropmenu" href="#"><i class="fa fa-sort-asc icon-white"></i><span class="hidden-tablet"> Verticals</span></a>
							<ul>
								<?php  $_smarty_tpl->tpl_vars['producttype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producttype']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['verticalType']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producttype']->key => $_smarty_tpl->tpl_vars['producttype']->value){
$_smarty_tpl->tpl_vars['producttype']->_loop = true;
?>								
								<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/verticaltype/<?php echo $_smarty_tpl->tpl_vars['producttype']->value->product_type_id;?>
/<?php echo $_smarty_tpl->tpl_vars['producttype']->value->url_slug;?>
"><span class="hidden-tablet"> <?php echo $_smarty_tpl->tpl_vars['producttype']->value->product_type;?>
</span></a></li>
								<?php } ?>
								<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/productarea/"><span class="hidden-tablet"> Areas</span></a></li>
								<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/productlist/"><span class="hidden-tablet"> Products</span></a></li>
								<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/verticaltypes/"><span class="hidden-tablet"> Vertical Types</span></a></li>
								<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/csvupload"><span class="hidden-tablet"> Product CSV Upload</span></a></li>
							</ul>	
						</li>
											
                        <li><a class="dropmenu" href="#"><i class="fa fa-building icon-white"></i><span class="hidden-tablet"> Company</span></a>
                        <ul>
                           <li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/companymanagement"><span class="hidden-tablet"> Company Management</span></a></li>
								
							</ul>
                            
                         <li><a class="dropmenu" href="#"><i class="fa fa-gears icon-white"></i><span class="hidden-tablet">Settings</span></a>
                        	<ul>
                           		<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/user_management/"><span class="hidden-tablet">User Management</span></a></li>
								<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/accesslogs/"><span class="hidden-tablet">Access Logs</span></a></li>
								<li><a class="submenu" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/apilogs/"><span class="hidden-tablet">API Logs</span></a></li>
							</ul>
                            
                            	
						</li>
					</ul></div><!--/.well -->
			</div><!--/span-->
		<!-- end: Main Menu -->	
	
			
			<noscript>
				<div class="alert alert-block span10">
					<h4 class="alert-heading">Warning!</h4>
					<p>You need to have <a href="http://en.wikipedia.org/wiki/JavaScript" target="_blank">JavaScript</a> enabled to use this site.</p>
				</div>
			</noscript>	
	
<?php }} ?>