<?php /* Smarty version Smarty-3.1.7, created on 2013-10-11 06:36:03
         compiled from "application\modules\product\views\producttype_list_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1903352566ba41c99b9-64791525%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '70810bf96676fe7e2cf5d80be78723dbf22db220' => 
    array (
      0 => 'application\\modules\\product\\views\\producttype_list_view.tpl',
      1 => 1381473347,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1903352566ba41c99b9-64791525',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52566ba422374',
  'variables' => 
  array (
    'baseUrl' => 0,
    'msgClass' => 0,
    'msgInfo' => 0,
    'productTypeList' => 0,
    'producttype' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52566ba422374')) {function content_52566ba422374($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Product Type</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
product/addproducttype">Add Product Type</a>
                <hr>
                    <div class="<?php echo $_smarty_tpl->tpl_vars['msgClass']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['msgInfo']->value;?>
</strong></div>   
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Product</h2>
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
								  <th width="26%">Product Name</th>
								  <th width="27%">Product Description</th>
                                  <th width="10%">Active</th>
                                  <th width="10%">Action</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php  $_smarty_tpl->tpl_vars['producttype'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['producttype']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productTypeList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['producttype']->key => $_smarty_tpl->tpl_vars['producttype']->value){
$_smarty_tpl->tpl_vars['producttype']->_loop = true;
?>
							
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['producttype']->value->product_type;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['producttype']->value->description;?>
</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
product/editproducttype/<?php echo $_smarty_tpl->tpl_vars['producttype']->value->product_type_id;?>
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