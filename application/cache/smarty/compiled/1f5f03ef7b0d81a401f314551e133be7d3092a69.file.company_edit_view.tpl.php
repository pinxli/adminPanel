<?php /* Smarty version Smarty-3.1.7, created on 2013-10-10 08:08:43
         compiled from "application\modules\company\views\company_edit_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3091452565fa4a69e72-70392206%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f5f03ef7b0d81a401f314551e133be7d3092a69' => 
    array (
      0 => 'application\\modules\\company\\views\\company_edit_view.tpl',
      1 => 1381392519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3091452565fa4a69e72-70392206',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52565fa4a94df',
  'variables' => 
  array (
    'company_name' => 0,
    'company_email' => 0,
    'company_phone' => 0,
    'company_fax' => 0,
    'company_address' => 0,
    'company_contact' => 0,
    'company_logo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52565fa4a94df')) {function content_52565fa4a94df($_smarty_tpl) {?>
<div id="content" class="span10">
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
						
					
						<<?php ?>?php echo $form_open;?<?php ?>>
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
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['company_phone']->value;?>

								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Fax:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['company_fax']->value;?>

								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Address:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['company_address']->value;?>

								</div>
							  </div>
							  
							   <div class="control-group">
								<label class="control-label" for="focusedInput">Company Contact:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['company_contact']->value;?>

								</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Company Logo:</label>
								<div class="controls">
								  <?php echo $_smarty_tpl->tpl_vars['company_logo']->value;?>

								</div>
							  </div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Add</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="company_id" value="<<?php ?>?php echo $company_info->data->companyinfo[0]->company_id;?<?php ?>>">
							<input type="hidden" name="editnow" value="editnow">
						<<?php ?>?php echo $form_close;?<?php ?>>
					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>