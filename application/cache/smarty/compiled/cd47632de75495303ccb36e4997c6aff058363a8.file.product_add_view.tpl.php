<?php /* Smarty version Smarty-3.1.7, created on 2013-10-23 09:22:37
         compiled from "application\modules\verticals\views\product_add_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2606252674ad104ab83-51593417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cd47632de75495303ccb36e4997c6aff058363a8' => 
    array (
      0 => 'application\\modules\\verticals\\views\\product_add_view.tpl',
      1 => 1382511182,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2606252674ad104ab83-51593417',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52674ad10cf8a',
  'variables' => 
  array (
    'form_open' => 0,
    'countryList' => 0,
    'companyList' => 0,
    'productTypeList' => 0,
    'areaList' => 0,
    'product_name' => 0,
    'product_link' => 0,
    'product_description' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52674ad10cf8a')) {function content_52674ad10cf8a($_smarty_tpl) {?><div id="content" class="span10">
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
						<h2><i class="icon-edit"></i><span class="break"></span>New Product</h2>
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
                            	<label class="control-label" for="selectError2">Select Country</label>
                                <div class="controls"><?php echo $_smarty_tpl->tpl_vars['countryList']->value;?>
</div>
                            </div>
                            
                            <div class="control-group">
                            	<label class="control-label" for="selectError4">Select Company Name</label>
                                <div class="controls"><?php echo $_smarty_tpl->tpl_vars['companyList']->value;?>
</div>
                            </div>
                            
                            <div class="control-group">
                            	<label class="control-label" for="selectError3">Select Category Type</label>
                                <div class="controls"><?php echo $_smarty_tpl->tpl_vars['productTypeList']->value;?>
</div>
                            </div>
                            
                            <div class="control-group">
                            	<label class="control-label" for="selectError1">Select Area</label>
                                <div class="controls"><?php echo $_smarty_tpl->tpl_vars['areaList']->value;?>
</div>
                            </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Name:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</div></div>
			  
									  
						 	 <div class="control-group">
								<label class="control-label" for="focusedInput">Product Link:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
</div>
							  </div>
							  
							<div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
							  <div class="controls">
								<input name="productImg" class="input-file uniform_on" id="fileInput" type="file">
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
							  
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_description']->value;?>
</div>
							</div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Create</button>
								<button type="reset" class="btn">Cancel</button>
							  </div>
							</fieldset>
							<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>