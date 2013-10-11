<?php /* Smarty version Smarty-3.1.7, created on 2013-10-10 07:37:39
         compiled from "application\modules\company\views\company_add_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249525659431639b0-43006435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58c6b2073a0f440d897db464d6a19d4dcce32e97' => 
    array (
      0 => 'application\\modules\\company\\views\\company_add_view.tpl',
      1 => 1381390657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249525659431639b0-43006435',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form_open' => 0,
    'company_name' => 0,
    'company_email' => 0,
    'company_phone' => 0,
    'company_fax' => 0,
    'company_address' => 0,
    'company_contact' => 0,
    'company_logo' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5256594319663',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256594319663')) {function content_5256594319663($_smarty_tpl) {?><div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Company</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add Company</h2>
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
								<label class="control-label" for="focusedInput">Company Name:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['company_name']->value;?>

								</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Company Email:</label>
								<div class="controls">
									<?php echo $_smarty_tpl->tpl_vars['company_email']->value;?>

								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Phone:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['company_phone']->value;?>
</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Fax:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['company_fax']->value;?>
</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Address:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['company_address']->value;?>
</div>
							  </div>
							  
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Company Contact:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['company_contact']->value;?>
</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Logo:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['company_logo']->value;?>
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