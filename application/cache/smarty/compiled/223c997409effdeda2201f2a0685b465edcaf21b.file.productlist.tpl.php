<?php /* Smarty version Smarty-3.1.7, created on 2013-11-05 10:44:51
         compiled from "application\modules\verticals\views\productlist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18815526650d9d7b9f2-24091906%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '223c997409effdeda2201f2a0685b465edcaf21b' => 
    array (
      0 => 'application\\modules\\verticals\\views\\productlist.tpl',
      1 => 1383648166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18815526650d9d7b9f2-24091906',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_526650d9dcda8',
  'variables' => 
  array (
    'baseUrl' => 0,
    'msgInfo' => 0,
    'msgClass' => 0,
    'productList' => 0,
    'product' => 0,
    'default_product_img' => 0,
    'product_icon' => 0,
    'promo' => 0,
    'status_ico' => 0,
    'status' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526650d9dcda8')) {function content_526650d9dcda8($_smarty_tpl) {?><div id="content" class="span10">
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
						<a href="#">Product List</a>
					</li>
				</ul>
				<hr>
			</div>   
                
             
			<div class="box-content">
				<a class="quick-button span4" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/addproduct/">
					<i class="fa fa-plus-circle"></i>
					<p>ADD PRODUCT</p>
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
					<h2><i class="icon-list"></i><span class="break"></span>All Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
					
						<!-- <button type="button" class="btn btn-danger" data-toggle="collapse" data-target="#advancedsearch">
						  Advance Search
						</button>
						<br /><br />
						<div id="advancedsearch" class="collapse out">
							<table class="table table-striped table-bordered">
								<tr>
									<td>Search By:
										<select>
											<option>Company</option>
											<option>Area</option>
											<option>Status</option>
											<option>Featured</option>
											<option>Vertical</option>
										</select>
										<input type="text" name="searchby" value="" placeholder="Type keyword.." />
									</td>
								</tr>
							</table>
						</div>-->
						<table class="table table-striped table-bordered">
								<tr>
									<td>Search By:
										<select id="searchby" name="searchby">
											<option value="2">Product Type</option>
											<option value="3">Company</option>
											<option value="4">Area</option>
											<option value="6">Promo</option>
											<option value="7">Status</option>
										</select>
										<input type="text" id="searchkeyword" name="searchkeyword" value="" placeholder="Type keyword.." />
										<!-- <button class="btn btn-primary" id="searchbtn" type="button" alt="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/productsearch">Search</button>-->
									</td>
								</tr>
							</table>
						<table class="table table-striped table-bordered bootstrap-datatable" id="datable-prodlist">
						  <thead>
							  <tr>
	                                  <th>Product Image</th>
									  <th>Product Name</th>
									  <th>Product Type</th>
									  <th>Company</th>
									  <th>Area</th>
									  <th>Product Link</th>
									  <th>Promo</th>
									  <th>Status</th>
                                      <th width="10%">Actions</th>  
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
								<?php if ($_smarty_tpl->tpl_vars['product']->value->status=='1'){?>
									<?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable('Active', null, 0);?>
									<?php $_smarty_tpl->tpl_vars['status_ico'] = new Smarty_variable('label-success', null, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable('Inactive', null, 0);?>
									<?php $_smarty_tpl->tpl_vars['status_ico'] = new Smarty_variable('label-failed', null, 0);?>
								<?php }?>
								
								<?php if ($_smarty_tpl->tpl_vars['product']->value->promo=='1'){?>
									<?php $_smarty_tpl->tpl_vars['promo'] = new Smarty_variable('Yes', null, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars['promo'] = new Smarty_variable('No', null, 0);?>
								<?php }?>
								
								<?php if (file_exists($_smarty_tpl->tpl_vars['product']->value->product_icon)){?>
									<?php $_smarty_tpl->tpl_vars['product_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['product']->value->product_icon, null, 0);?>
								<?php }else{ ?>
									<?php $_smarty_tpl->tpl_vars['product_icon'] = new Smarty_variable($_smarty_tpl->tpl_vars['default_product_img']->value, null, 0);?>
								<?php }?>
							<tr>
								<td><p class="text-center"><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product_icon']->value;?>
" width="30"></p></td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_type;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['product']->value->company_name;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['product']->value->area_name;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_link;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['promo']->value;?>
</td>
								<td class="center">
									<span class="label <?php echo $_smarty_tpl->tpl_vars['status_ico']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['status']->value;?>
</span>
								</td>
							
								 <td class="center">
									<a class="btn btn-success" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/viewproduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
">
										<i class="fa fa-list-alt icon-white" title="View"></i>  
									</a>
									<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/editproduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
">
										<i class="icon-edit icon-white" title="Edit"></i>  
									</a>
									<!-- <a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>-->
								</td> 
							</tr>
							<?php } ?>
						  </tbody>
					  </table> 
                      <input type="hidden" id="prodview_url" value="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/viewproduct/" />
                      <input type="hidden" id="prodedit_url" value="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/editproduct/" />
                      <input type="hidden" id="base_url" value="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
" />
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10--><?php }} ?>