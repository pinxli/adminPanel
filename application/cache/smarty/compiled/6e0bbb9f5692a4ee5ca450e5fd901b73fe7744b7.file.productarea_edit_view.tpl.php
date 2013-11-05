<?php /* Smarty version Smarty-3.1.7, created on 2013-11-05 09:23:05
         compiled from "application\modules\verticals\views\productarea_edit_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16177526a2ebb91c773-27946850%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e0bbb9f5692a4ee5ca450e5fd901b73fe7744b7' => 
    array (
      0 => 'application\\modules\\verticals\\views\\productarea_edit_view.tpl',
      1 => 1383210912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16177526a2ebb91c773-27946850',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_526a2ebb94b58',
  'variables' => 
  array (
    'form_open' => 0,
    'area_name' => 0,
    'area_description' => 0,
    'area_id' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a2ebb94b58')) {function content_526a2ebb94b58($_smarty_tpl) {?><div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product Area</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Edit Product Area</h2>
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
								<label class="control-label" for="focusedInput"> Area Name:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['area_name']->value;?>
</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput"> Area Description:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['area_description']->value;?>
</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label">Active</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="area_active" id="optionsRadios1" value="1" checked="">
									Yes
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="area_active" id="optionsRadios2" value="0">
									No
								  </label>
								</div>
							  </div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="area_id" value="<?php echo $_smarty_tpl->tpl_vars['area_id']->value;?>
">
							<input type="hidden" name="editnow" value="editnow">
						<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>