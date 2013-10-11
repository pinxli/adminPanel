<?php /* Smarty version Smarty-3.1.7, created on 2013-10-10 12:01:17
         compiled from "application\modules\product\views\productarea_list_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:15174525695883de1c6-59984711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e5a213999c02cddc273d9ad8eb14a5fcc77796b2' => 
    array (
      0 => 'application\\modules\\product\\views\\productarea_list_view.tpl',
      1 => 1381406474,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15174525695883de1c6-59984711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5256958844867',
  'variables' => 
  array (
    'baseUrl' => 0,
    'productAreaList' => 0,
    'AreaList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5256958844867')) {function content_5256958844867($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product Area</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
product/addproductarea">Add Product Area</a>
                <hr>
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Product Areas</h2>
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
								  <th width="26%">Area Name</th>
								  <th width="27%">Area Description</th>
                                  <th width="10%">Active</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php  $_smarty_tpl->tpl_vars['AreaList'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['AreaList']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productAreaList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['AreaList']->key => $_smarty_tpl->tpl_vars['AreaList']->value){
$_smarty_tpl->tpl_vars['AreaList']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['AreaList']->value->area_name;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['AreaList']->value->area_description;?>
</td>
				
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
product/editproductarea/<?php echo $_smarty_tpl->tpl_vars['AreaList']->value->area_id;?>
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