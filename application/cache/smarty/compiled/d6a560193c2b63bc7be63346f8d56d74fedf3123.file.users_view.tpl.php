<?php /* Smarty version Smarty-3.1.7, created on 2013-10-11 03:49:13
         compiled from "application\modules\settings\views\users_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1566352566210537993-72511892%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6a560193c2b63bc7be63346f8d56d74fedf3123' => 
    array (
      0 => 'application\\modules\\settings\\views\\users_view.tpl',
      1 => 1381462957,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1566352566210537993-72511892',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5256621054f09',
  'variables' => 
  array (
    'baseUrl' => 0,
    'userList' => 0,
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256621054f09')) {function content_5256621054f09($_smarty_tpl) {?>
<div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Users</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/add_user">Add New User</a>
                <hr>
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Users</h2>
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
								  <th width="26%">Name</th>
								  <th width="27%">E-mail Address</th>
								  <th width="26%">Roles</th>
                                  <th width="11%">Status</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php  $_smarty_tpl->tpl_vars['user'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['user']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['userList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['user']->key => $_smarty_tpl->tpl_vars['user']->value){
$_smarty_tpl->tpl_vars['user']->_loop = true;
?>
							
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['user']->value->fname;?>
 <?php echo $_smarty_tpl->tpl_vars['user']->value->lname;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['user']->value->email;?>
</td>
								<td class="center">admin</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/user_edit/<?php echo $_smarty_tpl->tpl_vars['user']->value->userid;?>
">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/user_delete/<?php echo $_smarty_tpl->tpl_vars['user']->value->userid;?>
">
										<i class="icon-trash icon-white"></i> 
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