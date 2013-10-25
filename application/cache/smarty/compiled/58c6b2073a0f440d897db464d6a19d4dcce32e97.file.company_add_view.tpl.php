<?php /* Smarty version Smarty-3.1.7, created on 2013-10-25 02:49:53
         compiled from "application\modules\company\views\company_add_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:249525659431639b0-43006435%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '58c6b2073a0f440d897db464d6a19d4dcce32e97' => 
    array (
      0 => 'application\\modules\\company\\views\\company_add_view.tpl',
      1 => 1382669294,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '249525659431639b0-43006435',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5256594319663',
  'variables' => 
  array (
    'baseUrl' => 0,
    'formOpen' => 0,
    'companyName' => 0,
    'companyWeblink' => 0,
    'companyEmail' => 0,
    'companyPhone' => 0,
    'companyFax' => 0,
    'companyAddress' => 0,
    'companyContract' => 0,
    'formClose' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256594319663')) {function content_5256594319663($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
            	<hr>
            
				<ul class="breadcrumb">
					<li>
						<a href="home.html">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/companymanagement">Company</a> <span class="divider">/</span>
					</li>
                    <li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/addcompany">Add Company</a>
					</li>
				</ul>
            
				<hr>
            	
                
                    
                <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-content">
						
						<a class="quick-button span4" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/addcompany">
							<i class="fa-icon-group"></i>
							<p>ADD COMPANY</p>
						</a>
						<!-- <a class="quick-button span4" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/editcompany">
							<i class="icon-pencil"></i>
							<p>EDIT COMPANY INFORMATION</p>	
						</a>
						<a class="quick-button span4" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/companymanagement">
							<i class="icon-eye-open"></i>
							<p>VIEW COMPANY LISTS</p>
						</a>-->
						
						<div class="clearfix"></div>
					</div>	
				</div>
				
			</div>
                
                
                <div class="row-fluid sortable">
				<div class="box span12">
					<div class="box-header" data-original-title>
						<h2><i class="icon-edit"></i><span class="break"></span>Add Company Here</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						
						<?php echo $_smarty_tpl->tpl_vars['formOpen']->value;?>

						  <fieldset>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Company Name</label>
							  <div class="controls">
								<?php echo $_smarty_tpl->tpl_vars['companyName']->value;?>

							  </div>
							</div>
							  
						   <div class="control-group input-prepend">
							<label class="control-label" for="focusedInput">Website Link</label>
							<div class="controls">
							  <span class="add-on">www.</span>
							  <?php echo $_smarty_tpl->tpl_vars['companyWeblink']->value;?>

							</div>
						  </div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Email</label>
							  <div class="controls">
								<?php echo $_smarty_tpl->tpl_vars['companyEmail']->value;?>

							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Phone</label>
							  <div class="controls">
								<?php echo $_smarty_tpl->tpl_vars['companyPhone']->value;?>

							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Fax</label>
							  <div class="controls">
								<?php echo $_smarty_tpl->tpl_vars['companyFax']->value;?>

							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Address</label>
							  <div class="controls">
								<?php echo $_smarty_tpl->tpl_vars['companyAddress']->value;?>

							  </div> 
							</div>
                            
                            <div class="control-group">
							  <label class="control-label" for="typeahead">Company Contract</label>
							  <div class="controls">
								<?php echo $_smarty_tpl->tpl_vars['companyContract']->value;?>

							  </div> 
							</div>

							<div class="control-group">
							  <label class="control-label" for="fileInput">Upload Image</label>
							  <div class="controls">
								<input class="input-file uniform_on" id="fileInput" type="file" name="upload_image">
							  </div>
							</div>          
							<div class="control-group hidden-phone">
							  <label class="control-label" for="textarea2">Description</label>
							  <div class="controls">
								<textarea class="input-xlarge" id="textarea2" rows="3" name="description"></textarea>
							  </div>
							</div>
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						<?php echo $_smarty_tpl->tpl_vars['formClose']->value;?>
 
					</div>
				</div><!--/span-->

			</div>

				<!--/row-->
    			
			<!-- end: Content -->
</div><!--/#content.span10--><?php }} ?>