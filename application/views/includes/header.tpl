<!DOCTYPE html>
<html lang="en">
<head>
	
	<!-- start: Meta -->
	<meta charset="utf-8">
	<title>{$title}</title>
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
    <link href="{$baseUrl}assets/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link id="base-style-responsive" href="{$baseUrl}assets/css/style-responsive.css" rel="stylesheet">
	<!-- <link href="{$baseUrl}assets/css/custom.css" type="text/css" rel="stylesheet">-->
    <!-- <link href="{$baseUrl}assets/js/jquery-1.9.1.min.js" type="text/javascript">-->
	<!-- <script src="{$baseUrl}assets/js/jquery-1.9.1.min.js"></script>
	<script src="{$baseUrl}assets/js/jquery.numeric.js"></script>
	<script src="{$baseUrl}assets/js/main.js"></script>-->
	
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
				<a class="brand" href="{$baseUrl}dashboard/members_area"><span class="hidden-phone"><img src="{$baseUrl}assets/img/comphero-logo_04.png" style="max-width:25%" ></span></a>
								
				<!-- start: Header Menu -->
				<div class="nav-no-collapse header-nav">
					<ul class="nav pull-right">
						<li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle notif-dropdown" data-toggle="dropdown" href="#">
								<i class="icon-globe icon-white"></i>
								<!-- <span class="label label-important hidden-phone">2</span>
								<span class="label label-success hidden-phone">11</span> -->
							</a>
							<!-- <div class="dropdown-menu notifications">
								<span class="dropdown-menu-title dropdown-menu-title-1">Notifications</span>
								<ul id="notif_container">
									<li class="notif noti_item">
	                                    <p class="pull-left">New Notification!</p>
	                                    <i class="fa fa-bell pull-right fa-notifs fa-notif-green"></i>
	                                </li>
									<li class="alertnotif noti_item">
	                                    <p class="pull-left">Transaction was cancelled!</p>
	                                    <i class="fa fa-exclamation-circle pull-right fa-notifs fa-notif-orange"></i>
	                                </li>
									<li class="critical noti_item">
	                                    <p class="pull-left">Critical Alert!</p>
	                                    <i class="fa fa-warning pull-right fa-notifs fa-notif-red"></i>
	                                </li>
									<li class="notif noti_item">
	                                    <p class="pull-left">New Notification!</p>
	                                    <i class="fa fa-bell pull-right fa-notifs fa-notif-green"></i>
	                                </li>
									<li class="alertnotif noti_item">
	                                    <p class="pull-left">Transaction was cancelled!</p>
	                                    <i class="fa fa-exclamation-circle pull-right fa-notifs fa-notif-orange"></i>
	                                </li>
									<li class="critical noti_item">
	                                    <p class="pull-left">Critical Alert!</p>
	                                    <i class="fa fa-warning pull-right fa-notifs fa-notif-red"></i>
	                                </li>
									<li class="notif noti_item">
	                                    <p class="pull-left">New Notification!</p>
	                                    <i class="fa fa-bell pull-right fa-notifs fa-notif-green"></i>
	                                </li>
									<li class="alertnotif noti_item">
	                                    <p class="pull-left">Transaction was cancelled!</p>
	                                    <i class="fa fa-exclamation-circle pull-right fa-notifs fa-notif-orange"></i>
	                                </li>
									<li class="critical noti_item">
	                                    <p class="pull-left">Critical Alert!</p>
	                                    <i class="fa fa-warning pull-right fa-notifs fa-notif-red"></i>
	                                </li>
								</ul>
								<div id="notif_full">
										testsdsdfsdfasd
								</div>
							</div> -->
							<!-- wrapper is the notification box -->
							<div id="wrapper" class="dropdown-menu">
								<!-- div1 will hold the notification list -->
								<div class="full" id="div1">
									<div id='box_header'>
										<div id='noti_text'>Notifications</div>
										<!-- ajax loader was shown when a notification item was clicked -->
										<div id='loader'><img src='{$baseUrl}assets/img/ajax-loader.gif' /></div>
									</div>
									<div id='noti_list'>
										<ul id="notif_container">
											<li class="notif noti_item">
			                                    <p class="pull-left">New Notification!</p>
			                                    <i class="fa fa-bell pull-right fa-notifs fa-notif-green"></i>
			                                </li>
											<li class="alertnotif noti_item">
			                                    <p class="pull-left">Transaction was cancelled!</p>
			                                    <i class="fa fa-exclamation-circle pull-right fa-notifs fa-notif-orange"></i>
			                                </li>
											<li class="critical noti_item">
			                                    <p class="pull-left">Critical Alert!</p>
			                                    <i class="fa fa-warning pull-right fa-notifs fa-notif-red"></i>
			                                </li>
											<li class="notif noti_item">
			                                    <p class="pull-left">New Notification!</p>
			                                    <i class="fa fa-bell pull-right fa-notifs fa-notif-green"></i>
			                                </li>
											<li class="alertnotif noti_item">
			                                    <p class="pull-left">Transaction was cancelled!</p>
			                                    <i class="fa fa-exclamation-circle pull-right fa-notifs fa-notif-orange"></i>
			                                </li>
											<li class="critical noti_item">
			                                    <p class="pull-left">Critical Alert!</p>
			                                    <i class="fa fa-warning pull-right fa-notifs fa-notif-red"></i>
			                                </li>
											<li class="notif noti_item">
			                                    <p class="pull-left">New Notification!</p>
			                                    <i class="fa fa-bell pull-right fa-notifs fa-notif-green"></i>
			                                </li>
											<li class="alertnotif noti_item">
			                                    <p class="pull-left">Transaction was cancelled!</p>
			                                    <i class="fa fa-exclamation-circle pull-right fa-notifs fa-notif-orange"></i>
			                                </li>
											<li class="critical noti_item">
			                                    <p class="pull-left">Critical Alert!</p>
			                                    <i class="fa fa-warning pull-right fa-notifs fa-notif-red"></i>
			                                </li>
										</ul>								
									</div>
								</div>
								
								<!-- div2 will hold the actual notification -->
								<div class="full" id="div2">
									<div id='box_header'>
										<div id='noti_text'> <a href='#'>&#9668; <span id='back_to_noti'>Back to Notifications</span></a></div>
										<!-- <div id='site_link'>
											<a href='http://www.codeofaninja.com/'>+Code of a Ninja</a> &#9658;
										</div> -->
									</div>

									<div id='actual_notification'>
										<!-- Here is where the actual notification will be loaded -->
										testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>testsdsds<br/>
									</div>
									
								</div>
								

							</div>
						</li>
						<!-- start: Notifications Dropdown -->
						<!-- <li class="dropdown hidden-phone">
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
						</li> -->
						<!-- end: Notifications Dropdown -->
						<!-- start: Message Dropdown -->
						<!-- <li class="dropdown hidden-phone">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
								<i class="icon-envelope icon-white"></i> <span class="label label-success hidden-phone">9</span>
							</a>
							<ul class="dropdown-menu messages">
								<li>
									<span class="dropdown-menu-title">You have 9 messages</span>
								</li>	
                            	<li>
                                    <a href="#">
										<span class="avatar"><img src="{$baseUrl}assets/img/avatar.jpg" alt="Avatar"></span>
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
										<span class="avatar"><img src="{$baseUrl}assets/img/avatar2.jpg" alt="Avatar"></span>
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
										<span class="avatar"><img src="{$baseUrl}assets/img/avatar3.jpg" alt="Avatar"></span>
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
										<span class="avatar"><img src="{$baseUrl}assets/img/avatar4.jpg" alt="Avatar"></span>
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
										<span class="avatar"><img src="{$baseUrl}assets/img/avatar5.jpg" alt="Avatar"></span>
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
						</li> -->
						<!-- end: Message Dropdown -->
						<!-- <li>
							<a class="btn" href="#">
								<i class="icon-wrench icon-white"></i>
							</a>
						</li> -->
						<!-- start: User Dropdown -->
						<li class="dropdown">
							<a class="btn dropdown-toggle user-dropdown" data-toggle="dropdown" href="#">
								<i class="icon-user icon-white"></i>
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#"><i class="icon-user"></i> Profile</a></li>
								<li><a href="{$baseUrl}admin/logout"><i class="icon-off"></i> Logout</a></li>
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
						<li><a href="{$baseUrl}dashboard/members_area"><i class="icon-home icon-white"></i><span class="hidden-tablet"> Home</span></a></li>
                        <li><a class="dropmenu" href="#"><i class="fa fa-sort-asc icon-white"></i><span class="hidden-tablet"> Verticals</span></a>
							<ul>
								{foreach from=$verticalType item=producttype}								
								<li><a class="submenu" href="{$baseUrl}verticals/verticaltype/{$producttype->product_type_id}/{$producttype->url_slug}"><span class="hidden-tablet"> {$producttype->product_type}</span></a></li>
								{/foreach}
								<li><a class="submenu" href="{$baseUrl}verticals/productarea/"><span class="hidden-tablet"> Areas</span></a></li>
								<li><a class="submenu" href="{$baseUrl}verticals/productlist/"><span class="hidden-tablet"> Products</span></a></li>
								<li><a class="submenu" href="{$baseUrl}verticals/verticaltypes/"><span class="hidden-tablet"> Vertical Types</span></a></li>
								<li><a class="submenu" href="{$baseUrl}verticals/csvupload"><span class="hidden-tablet"> Product CSV Upload</span></a></li>
							</ul>	
						</li>
											
                        <li><a class="dropmenu" href="#"><i class="fa fa-building icon-white"></i><span class="hidden-tablet"> Company</span></a>
                        <ul>
                           <li><a class="submenu" href="{$baseUrl}company/companymanagement"><span class="hidden-tablet"> Company Management</span></a></li>
								
							</ul>
                            
                         <li><a class="dropmenu" href="#"><i class="fa fa-gears icon-white"></i><span class="hidden-tablet">Settings</span></a>
                        	<ul>
                           		<li><a class="submenu" href="{$baseUrl}settings/user_management/"><span class="hidden-tablet">User Management</span></a></li>
								<li><a class="submenu" href="{$baseUrl}settings/accesslogs/"><span class="hidden-tablet">Access Logs</span></a></li>
								<li><a class="submenu" href="{$baseUrl}settings/apilogs/"><span class="hidden-tablet">API Logs</span></a></li>
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
	
