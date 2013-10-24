<?php /* Smarty version Smarty-3.1.7, created on 2013-10-24 10:10:53
         compiled from "application\modules\settings\views\user_add_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:84815256632bf33290-96416127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e2a11c0f65b88f7f7f35bdff4785f62e7facf37' => 
    array (
      0 => 'application\\modules\\settings\\views\\user_add_view.tpl',
      1 => 1382609137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '84815256632bf33290-96416127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5256632c017fa',
  'variables' => 
  array (
    'form_open' => 0,
    'fname' => 0,
    'lastname' => 0,
    'email' => 0,
    'password' => 0,
    'cpassword' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256632c017fa')) {function content_5256632c017fa($_smarty_tpl) {?>
<div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Users</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add User</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
					
						<?php echo $_smarty_tpl->tpl_vars['form_open']->value;?>

							<fieldset>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">First Name:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['fname']->value;?>

								</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Last Name:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['lastname']->value;?>

								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Email:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['email']->value;?>

								</div>
							  </div>
                              
                              <div class="control-group">
    							<label class="control-label" for="inputPassword">Password:</label>
    							<div class="controls">
       							 <?php echo $_smarty_tpl->tpl_vars['password']->value;?>

       							 </div>
       						  </div>
                             
                               <div class="control-group">
								<label class="control-label" for="focusedInput">Confirm Password:</label>
								<div class="controls">
									<?php echo $_smarty_tpl->tpl_vars['cpassword']->value;?>

								</div>
							  </div>
                               <div class="control-group">
								<label class="control-label">Role</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="user_level_id" id="optionsRadios1" value="1" checked="">
									Admin
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="user_level_id" id="optionsRadios2" value="2">
									Member
								  </label>
								</div>
							  </div>
							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
						<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>