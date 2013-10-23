<?php /* Smarty version Smarty-3.1.7, created on 2013-10-22 07:47:54
         compiled from "application\modules\company\views\companylist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2592525652dd3aecb8-98813037%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3ab7b4ad0befd26bf0bb9f0d2206d2df057ec45' => 
    array (
      0 => 'application\\modules\\company\\views\\companylist.tpl',
      1 => 1382428061,
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
    'msgClass' => 0,
    'msgInfo' => 0,
    'companyList' => 0,
    'company' => 0,
    'default_icon' => 0,
    'icon' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525652dd3c253')) {function content_525652dd3c253($_smarty_tpl) {?><div id="content" class="span10">
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
company/companymanagement">Company</a>
					</li>
				</ul>
            
				<hr>
                
               <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Company Settings</h2>
					</div>
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
                <div class="<?php echo $_smarty_tpl->tpl_vars['msgClass']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['msgInfo']->value;?>
</strong></div>  
                
                
                <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Company Lists</h2>
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
                                  	  <th>Logo</th>
									  <th>Company Name</th>
									  <th>E-mail Address</th>
									  <th>Status</th>
                                      <th>Edit</th>                                        
								  </tr>
							  </thead>   
							  <tbody>
								<?php  $_smarty_tpl->tpl_vars['company'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['company']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['companyList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['company']->key => $_smarty_tpl->tpl_vars['company']->value){
$_smarty_tpl->tpl_vars['company']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['company']->value->company_logo==''){?>
										<?php $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable($_smarty_tpl->tpl_vars['default_icon']->value, null, 0);?>
									<?php }else{ ?>
										<?php $_smarty_tpl->tpl_vars["icon"] = new Smarty_variable($_smarty_tpl->tpl_vars['company']->value->company_logo, null, 0);?>
									<?php }?>
								
								<tr>
                                	<td><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['icon']->value;?>
" width="30"></td>
									<td><?php echo $_smarty_tpl->tpl_vars['company']->value->company_name;?>
</td>
									<td class="center"><?php echo $_smarty_tpl->tpl_vars['company']->value->company_email;?>
</td>
									<td class="center"><span class="label label-success">Active</span></td>
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
			</div>

				<!--/row-->
    			
			<!-- end: Content -->
</div><!--/#content.span10--><?php }} ?>