<?php /* Smarty version Smarty-3.1.7, created on 2013-11-05 10:44:41
         compiled from "application\modules\verticals\views\productarea_list_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:184295269dfa7b01554-51739483%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'adeabbb901190f18ee5432774c395deb261f6b49' => 
    array (
      0 => 'application\\modules\\verticals\\views\\productarea_list_view.tpl',
      1 => 1383648162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '184295269dfa7b01554-51739483',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5269dfa7b3806',
  'variables' => 
  array (
    'baseUrl' => 0,
    'msgInfo' => 0,
    'msgClass' => 0,
    'productAreaList' => 0,
    'AreaList' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5269dfa7b3806')) {function content_5269dfa7b3806($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
dashboard/members_area">Home</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">Verticals</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">Product Area</a>
					</li>
				</ul>
				<hr>
			</div>
            
            
               
					<div class="box-content">
						
						<a class="quick-button span4" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/addproductarea">
							<i class="fa fa-plus-circle"></i>
							<p>ADD PRODUCT AREA</p>
						</a>
					
						<div class="clearfix"></div>
					</div>  
          
			<!-- for error/success info message -->
	        <?php if ($_smarty_tpl->tpl_vars['msgInfo']->value){?>
	        	<br />
	        	<div class="<?php echo $_smarty_tpl->tpl_vars['msgClass']->value;?>
">
	            	<button type="button" class="close" data-dismiss="alert"><i class="icon-remove"></i></button>
	                <strong><?php echo $_smarty_tpl->tpl_vars['msgInfo']->value;?>
</strong>
	            </div>
	        <?php }?>  
			
			   <div class="row-fluid sortable">
				<div class="box span12">   
					<div class="box-header" data-original-title>
						<h2><i class="icon-list"></i><span class="break"></span>Product Areas</h2>
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
								  <th width="27%">Country</th>
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
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['AreaList']->value->short_name;?>
</td>				
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
								
								<td class="center">
										<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/editproductarea/<?php echo $_smarty_tpl->tpl_vars['AreaList']->value->area_id;?>
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