<?php /* Smarty version Smarty-3.1.7, created on 2013-10-25 09:45:28
         compiled from "application\modules\verticals\views\product_edit_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135495269e7179a15f5-99774838%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ae81698d981dbe25febbe10bf45cb6c05d31a6a' => 
    array (
      0 => 'application\\modules\\verticals\\views\\product_edit_view.tpl',
      1 => 1382694326,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135495269e7179a15f5-99774838',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5269e7179e7b0',
  'variables' => 
  array (
    'form_open' => 0,
    'countryList' => 0,
    'companyList' => 0,
    'areaList' => 0,
    'productTypeList' => 0,
    'product_name' => 0,
    'product_link' => 0,
    'product_description' => 0,
    'productOptions' => 0,
    'options' => 0,
    'product_id' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269e7179e7b0')) {function content_5269e7179e7b0($_smarty_tpl) {?><div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="#">Edit Product</a>
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
                            	<label class="control-label" for="selectError1">Select Area</label>
                                <div class="controls"><?php echo $_smarty_tpl->tpl_vars['areaList']->value;?>
</div>
                            </div>
                            
                            <div class="control-group">
                            	<label class="control-label" for="selectError3">Select Category Type</label>
                                <div class="controls"><?php echo $_smarty_tpl->tpl_vars['productTypeList']->value;?>
</div>
                            </div>
							  
							  <div class="control-group">
								<label class="control-label" for="focusedInput">Product Name:</label>
								<div class="controls"><?php echo $_smarty_tpl->tpl_vars['product_name']->value;?>
</div></div>
			  
									  
						 	 <div class="control-group input-prepend">
								<label class="control-label" for="focusedInput">Product Link:</label>
								<div class="controls">
								<span class="add-on">www.</span>
								<?php echo $_smarty_tpl->tpl_vars['product_link']->value;?>
</div>
							  </div>
							  
							<div class="control-group">
							  <label class="control-label" for="fileInput">Change Image</label>
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
							
					<hr>Product Option<br />

					<div class="box-content">
						<table id="myTable"
							class="table table-striped table-bordered bootstrap-datatable">
							<thead>
								<tr>
									<th width="26%">Option</th>
									<th width="27%">Value</th>
									<th width="10%">Expiry Date</th>

								</tr>
							</thead>
							<tbody>
								<?php if ($_smarty_tpl->tpl_vars['productOptions']->value==true){?>
								<?php  $_smarty_tpl->tpl_vars['options'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['options']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productOptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['options']->key => $_smarty_tpl->tpl_vars['options']->value){
$_smarty_tpl->tpl_vars['options']->_loop = true;
?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['options']->value->option;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['options']->value->option_value;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['options']->value->expiry_date;?>
</td>
								</tr>
								<?php } ?>
								<?php }?>
							</tbody>
						</table>
					</div>

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button type="reset" class="btn">Cancel</button>
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