<?php /* Smarty version Smarty-3.1.7, created on 2013-10-23 06:36:32
         compiled from "application\modules\verticals\views\producttype_add_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:250305267380857ab18-98056155%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2468309472f912cd5409b10ba5f3a77c8dda6c39' => 
    array (
      0 => 'application\\modules\\verticals\\views\\producttype_add_view.tpl',
      1 => 1382510089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '250305267380857ab18-98056155',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_526738085e42a',
  'variables' => 
  array (
    'form_open' => 0,
    'product_type' => 0,
    'description' => 0,
    'url_slug' => 0,
    'baseUrl' => 0,
    'option_key' => 0,
    'option_description' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526738085e42a')) {function content_526738085e42a($_smarty_tpl) {?><div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product Type</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add Product Type</h2>
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
								<label class="control-label" for="focusedInput"> Product Type:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_type']->value;?>
</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput"> Description:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['description']->value;?>
</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> URL Slug:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['url_slug']->value;?>
</div>
							  </div>
							  
							  <br /><hr>
								
							  <div class="control-group">
								<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/add.png">
							  </div>
								
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Option Key:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['option_key']->value;?>
</div>
							  </div>
								
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Option Description:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['option_description']->value;?>
</div>
							  </div>
								
							  <div class="control-group">
								<label class="control-label" for="focusedInput"> Option Autoload:</label>
								<div class="controls">
								<input type="radio" name="option_autoload" value="1" checked="checked">Yes &nbsp;
								<input type="radio" name="option_autoload" value="0">No
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