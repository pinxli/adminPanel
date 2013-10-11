<?php /* Smarty version Smarty-3.1.7, created on 2013-10-10 07:12:13
         compiled from "application\modules\company\views\companylist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2592525652dd3aecb8-98813037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ab7b4ad0befd26bf0bb9f0d2206d2df057ec45' => 
    array (
      0 => 'application\\modules\\company\\views\\companylist.tpl',
      1 => 1381389131,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2592525652dd3aecb8-98813037',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_525652dd3c253',
  'variables' => 
  array (
    'baseUrl' => 0,
    'companyList' => 0,
    'company' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525652dd3c253')) {function content_525652dd3c253($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Company</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/addcompany">Add Company</a>
                <hr>
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Company</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th width="26%">Company Name</th>
								  <th width="27%">E-mail Address</th>
								  <th width="26%">Roles</th>
                                  <th width="11%">Status</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companyList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['company']->value->company_email;?>
</td>
								<td class="center">admin</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
company/editcompany/<?php echo $_smarty_tpl->tpl_vars['company']->value->company_id;?>
">
										<i class="icon-edit icon-white"></i>  
									</a>
								</td>
							</tr>
							<?php } ?>
						  </tbody>
					  </table> 
                          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10--><?php }} ?>