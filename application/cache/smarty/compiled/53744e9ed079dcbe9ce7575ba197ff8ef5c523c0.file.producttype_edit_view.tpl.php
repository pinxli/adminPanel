<?php /* Smarty version Smarty-3.1.7, created on 2013-10-25 03:15:37
         compiled from "application\modules\verticals\views\producttype_edit_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30099526651cddd54c0-89900755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53744e9ed079dcbe9ce7575ba197ff8ef5c523c0' => 
    array (
      0 => 'application\\modules\\verticals\\views\\producttype_edit_view.tpl',
      1 => 1382669294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30099526651cddd54c0-89900755',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_526651cde042d',
  'variables' => 
  array (
    'baseUrl' => 0,
    'form_open' => 0,
    'product_type' => 0,
    'description' => 0,
    'url_slug' => 0,
    'option_key' => 0,
    'option_description' => 0,
    'verticalOptions' => 0,
    'verticaloptions' => 0,
    'autoload' => 0,
    'product_type_id' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526651cde042d')) {function content_526651cde042d($_smarty_tpl) {?><div id="content" class="span10">
	<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="home.html">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/verticaltypes/">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/verticaltypes/">Vertical Types</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="#">Edit Vertical Type</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span> Edit Vertical Type</h2>
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
							  
							<hr><br />
								
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
								  <label class="radio">
									<input type="radio" name="option_autoload" id="optionsRadios1" value="1" checked="">
									Yes
								  </label>
								  <div style="clear:both"></div>
								  <label class="radio">
									<input type="radio" name="option_autoload" id="optionsRadios2" value="0">
									No
								  </label>
								</div>
							  </div>
								
							  <div class="control-group">
							  	<div class="controls">
									<span class="label label-success hidden-phone" id="btn_addverticals">Add Vertical Option</span>
								</div>
							  </div>

					<div class="box-content">
						<table id="myTable"
							class="table table-striped table-bordered bootstrap-datatable">
							<thead>
								<tr>
									<th width="26%">Option Key</th>
									<th width="27%">Option Description</th>
									<th width="10%">Autoload</th>

								</tr>
							</thead>
							<tbody>
								<?php if ($_smarty_tpl->tpl_vars['verticalOptions']->value==true){?>
								<?php  $_smarty_tpl->tpl_vars['verticaloptions'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['verticaloptions']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['verticalOptions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['verticaloptions']->key => $_smarty_tpl->tpl_vars['verticaloptions']->value){
$_smarty_tpl->tpl_vars['verticaloptions']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['verticaloptions']->value->option_autoload==1){?>
										<?php $_smarty_tpl->tpl_vars['autoload'] = new Smarty_variable('Yes', null, 0);?>
									<?php }else{ ?>
										<?php $_smarty_tpl->tpl_vars['autoload'] = new Smarty_variable('No', null, 0);?>
									<?php }?>
								<tr>
									<td><?php echo $_smarty_tpl->tpl_vars['verticaloptions']->value->option_key;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['verticaloptions']->value->option_description;?>
</td>
									<td><?php echo $_smarty_tpl->tpl_vars['autoload']->value;?>
</td>
								</tr>
								<?php } ?>
								<?php }?>
							</tbody>
						</table>
					</div>

					<div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="product_type_id" value="<?php echo $_smarty_tpl->tpl_vars['product_type_id']->value;?>
">
							<input type="hidden" name="editnow" value="editnow">
							
							<!-- handles added vertical options -->
							<input type="hidden" name="verticaloptions" id="verticaloptions" value="" />	
						<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>