<?php /* Smarty version Smarty-3.1.7, created on 2013-10-24 10:55:16
         compiled from "application\modules\product\views\product_edit_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2303652568bcf0b12a6-20289649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8520140e0fcfcd16895def67d5d941d35a95ff66' => 
    array (
      0 => 'application\\modules\\product\\views\\product_edit_view.tpl',
      1 => 1382609137,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2303652568bcf0b12a6-20289649',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52568bcf1137b',
  'variables' => 
  array (
    'form_open' => 0,
    'product_name' => 0,
    'product_description' => 0,
    'productTypeList' => 0,
    'areaList' => 0,
    'countryList' => 0,
    'companyList' => 0,
    'product_icon' => 0,
    'product_link' => 0,
    'product_id' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52568bcf1137b')) {function content_52568bcf1137b($_smarty_tpl) {?><div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Edit Product</h2>
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
								<label class="control-label" for="focusedInput">Product Name:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</div></div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Description:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_description']->value;?>
</div>
							  </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Type:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['productTypeList']->value;?>
</div>
							  </div>
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Product Area:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['areaList']->value;?>
</div>
							 </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Country:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['countryList']->value;?>
</div>
							  </div> 
							  
							 <div class="control-group">
								<label class="control-label" for="focusedInput">Company:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['companyList']->value;?>
</div>
							  </div>
							  
						  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Icon:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_icon']->value;?>
</div>
							  </div>
							  
						 	 <div class="control-group">
								<label class="control-label" for="focusedInput">Product Link:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
</div>
							  </div>

							  <div class="control-group">
								<label class="control-label">Featured</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="featured" id="optionsRadios1" value="1" checked="">
									Yes
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="featured" id="optionsRadios2" value="0">
									No
								  </label>
								</div>
							  </div>
							  
							  
							   <div class="control-group">
								<label class="control-label">Status</label>
								<div class="controls">
								  <label class="radio">
									<input type="radio" name="status" id="optionsRadios1" value="1" checked="">
									Yes
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="status" id="optionsRadios2" value="0">
									No
								  </label>
								</div>
							  </div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="product_id" value="<?php echo $_smarty_tpl->tpl_vars['product_id']->value;?>
">
							<input type="hidden" name="editnow" value="editnow">
							<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>