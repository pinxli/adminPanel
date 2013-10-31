<?php /* Smarty version Smarty-3.1.7, created on 2013-10-25 12:33:09
         compiled from "application\modules\verticals\views\productarea_add_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16079526a51a995cbd6-02618167%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '399b45dc068d2f80b537ce85a3dbe9f83c909b00' => 
    array (
      0 => 'application\\modules\\verticals\\views\\productarea_add_view.tpl',
      1 => 1382704213,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16079526a51a995cbd6-02618167',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_526a51a998b9e',
  'variables' => 
  array (
    'form_open' => 0,
    'countryList' => 0,
    'area_name' => 0,
    'area_description' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a51a998b9e')) {function content_526a51a998b9e($_smarty_tpl) {?><div id="content" class="span10">
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
						<a href="#">Add Product Area</a>
					</li>
				</ul>
				<hr>
			</div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add Product Area</h2>
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
								<label class="control-label" for="focusedInput"> Area Name:</label>
								<div class="controls">
								 <?php echo $_smarty_tpl->tpl_vars['area_name']->value;?>

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