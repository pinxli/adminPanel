<?php /* Smarty version Smarty-3.1.7, created on 2013-10-23 10:12:10
         compiled from "application\modules\verticals\views\producttype_edit_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30099526651cddd54c0-89900755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53744e9ed079dcbe9ce7575ba197ff8ef5c523c0' => 
    array (
      0 => 'application\\modules\\verticals\\views\\producttype_edit_view.tpl',
      1 => 1382511182,
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
    'form_open' => 0,
    'product_type' => 0,
    'description' => 0,
    'url_slug' => 0,
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
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="#">Edit Vertical Types</a>
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
		

							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Edit</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<input type="hidden" name="product_type_id" value="<?php echo $_smarty_tpl->tpl_vars['product_type_id']->value;?>
">
							<input type="hidden" name="editnow" value="editnow">
						<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10--><?php }} ?>