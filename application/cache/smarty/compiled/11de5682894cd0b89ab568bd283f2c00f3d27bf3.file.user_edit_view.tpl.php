<?php /* Smarty version Smarty-3.1.7, created on 2013-10-10 08:36:50
         compiled from "application\modules\settings\views\user_edit_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22384525667228b3383-94546075%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '11de5682894cd0b89ab568bd283f2c00f3d27bf3' => 
    array (
      0 => 'application\\modules\\settings\\views\\user_edit_view.tpl',
      1 => 1381394104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22384525667228b3383-94546075',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_open' => 0,
    'fname' => 0,
    'lastname' => 0,
    'email' => 0,
    'password' => 0,
    'cpassword' => 0,
    'userid' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_525667228e600',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525667228e600')) {function content_525667228e600($_smarty_tpl) {?>
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
						<h2><i class="icon-edit"></i><span class="break"></span>Edit User</h2>
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
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="userid" value="<?php echo $_smarty_tpl->tpl_vars['userid']->value;?>
">
							<input type="hidden" name="editnow" value="editnow">
						<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>