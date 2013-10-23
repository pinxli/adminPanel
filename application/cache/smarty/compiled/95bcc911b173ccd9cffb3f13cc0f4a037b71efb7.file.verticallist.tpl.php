<?php /* Smarty version Smarty-3.1.7, created on 2013-10-23 06:35:46
         compiled from "application\modules\verticals\views\verticallist.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135485266513f24b874-91157550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95bcc911b173ccd9cffb3f13cc0f4a037b71efb7' => 
    array (
      0 => 'application\\modules\\verticals\\views\\verticallist.tpl',
      1 => 1382510089,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135485266513f24b874-91157550',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5266513f291d8',
  'variables' => 
  array (
    'msgClass' => 0,
    'msgInfo' => 0,
    'productList' => 0,
    'product' => 0,
    'productTypeId' => 0,
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5266513f291d8')) {function content_5266513f291d8($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Verticals</a>
					</li>
				</ul>
				<hr>
			</div>
            
             <div class="row-fluid">

                        <div class="circleStats">

                             <div class="span3 offset2" onTablet="span4" onDesktop="span2">
                                <div class="circleStatsItem blue">
                                    <i class="icon-globe"></i>
                                    <span class="plus">+</span>
                                    <span class="percent">%</span>
                                    <input type="text" value="50" class="blueCircle" />
                                </div>
                                <div class="box-small-title">Over All Product Rate</div>
                            </div>

                            <div class="noMargin span2 offset1" onTablet="span4" onDesktop="span2">
                              <div class="circleStatsItem yellow">
                                <div class="circleStatsItem yellow"> 
                                <i class="icon-th-large"></i> 
                                <!--<span class="plus">+</span>--> 
                                <span class="percent">%</span>
                                  <input type="text" value="30" class="yellowCircle" />
                                </div>
                              </div>
                              <div class="box-small-title">Top Selling Product Rate</div>
                            </div>


                            <div class="span2 offset1" onTablet="span4" onDesktop="span2">
                                <div class="circleStatsItem lightorange">
                                    <i class="icon-shopping-cart"></i>
                                    <!--<span class="plus" pull>+</span>-->
                                    <span class="percent">%</span>
                                    <input type="text" value="42" class="lightOrangeCircle" />
                                </div>
                                <div class="box-small-title">Revenue</div>
                            </div>

						
           
                  </div>
              </div>                 
            
			   <div class="row-fluid sortable">
				<div class="box span12">
                     <div class="<?php echo $_smarty_tpl->tpl_vars['msgClass']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['msgInfo']->value;?>
</strong></div>        
					<div class="box-header" data-original-title>
					<h2><i class="icon-sitemap"></i><span class="break"></span>All Categories</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
	                                  <th>Product Image</th>
									  <th>Product Name</th>
									  <th>Product Link</th>
									  <th>Status</th>
                                      <th>Action</th>  
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['productList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value->product_type_id==$_smarty_tpl->tpl_vars['productTypeId']->value){?>
							<tr>
								<td><img src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
<?php echo $_smarty_tpl->tpl_vars['product']->value->product_icon;?>
" width="30"></td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_name;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['product']->value->product_link;?>
</td>
								<td class="center">
									<span class="label label-success">Active</span>
								</td>
							
								 <td class="center">
									<a class="btn btn-success" href="#">
										<i class="icon-zoom-in icon-white"></i>  
									</a>
									<a class="btn btn-info" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
product/editproduct/<?php echo $_smarty_tpl->tpl_vars['product']->value->product_id;?>
">
										<i class="icon-edit icon-white"></i>  
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
									</a>
								</td> 
							</tr>
							<?php }?>
							<?php } ?>
						  </tbody>
					  </table> 
                          
					</div>
				</div><!--/span-->
			
			</div><!--/row-->
		<hr>
			<!-- end: Content -->
</div><!--/#content.span10--><?php }} ?>