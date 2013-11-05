<?php /* Smarty version Smarty-3.1.7, created on 2013-11-05 09:58:51
         compiled from "application\modules\verticals\views\csv_upload_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:139955269f725a97c97-06502050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1fd18d28ce46a9465c9de5d7c28d955b6b4f862' => 
    array (
      0 => 'application\\modules\\verticals\\views\\csv_upload_view.tpl',
      1 => 1383210912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '139955269f725a97c97-06502050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5269f725ac6a9',
  'variables' => 
  array (
    'msgClass' => 0,
    'msgInfo' => 0,
    'form_open' => 0,
    'form_close' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269f725ac6a9')) {function content_5269f725ac6a9($_smarty_tpl) {?><div id="content" class="span10">
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
						<a href="#">Product CSV Upload</a>
					</li>
				</ul>
				<hr>
			</div>
          
          
                     
          <div class="<?php echo $_smarty_tpl->tpl_vars['msgClass']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['msgInfo']->value;?>
</strong></div>
          
			<div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Product CSV Upload</h2>
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
							  <label class="control-label" for="fileInput">CSV file</label>
							  <div class="controls">
								<div class="uploader" id="uniform-fileInput">
								<input name="productcsv" class="input-file uniform_on" id="fileInput" type="file">
								<span class="filename" style="-webkit-user-select: none;">No file selected</span>
								<span class="action" style="-webkit-user-select: none;">Choose File</span>
								</div>
							  </div>
							  </div>
							 						  






















							   <div class="form-actions">
								<button type="submit" class="btn btn-primary">Upload</button>
								<button class="btn">Cancel</button>
							  </div>
							</fieldset>
							<?php echo $_smarty_tpl->tpl_vars['form_close']->value;?>

					
			
			</div>
				</div><!--/span-->

			</div><!--/row-->
    
				
			<!-- end: Content -->
			</div><!--/#content.span10-->	





















<?php }} ?>