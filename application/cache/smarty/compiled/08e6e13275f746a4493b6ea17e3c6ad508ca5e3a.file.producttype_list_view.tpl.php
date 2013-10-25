<?php /* Smarty version Smarty-3.1.7, created on 2013-10-25 07:30:03
         compiled from "application\modules\verticals\views\producttype_list_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7742526651c1182189-42106615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '08e6e13275f746a4493b6ea17e3c6ad508ca5e3a' => 
    array (
      0 => 'application\\modules\\verticals\\views\\producttype_list_view.tpl',
      1 => 1382686170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7742526651c1182189-42106615',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_526651c11b8c8',
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
<?php if ($_valid && !is_callable('content_526651c11b8c8')) {function content_526651c11b8c8($_smarty_tpl) {?><div id="content" class="span10">
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
						<a href="#">Vertical Types</a>
					</li>
				</ul>
            
				<hr>
                
                <div class="row-fluid">

                        <div class="circleStats">

                            <div class="span3 offset2" onTablet="span4" onDesktop="span2">
                                <div class="circleStatsItem blue">
                                    <i class="icon-globe"></i>
                                    <span class="plus">+</span>
                                    <span class="percent">%</span>
                                    <input type="text" value="12" class="blueCircle" />
                                </div>
                                <div class="box-small-title">Over All Categories Score</div>
                            </div>

                            <div class="noMargin span2 offset1" onTablet="span4" onDesktop="span2">

                                <div class="circleStatsItem yellow">
                                    <i class="icon-th-large"></i>
                                    <span class="plus">+</span>
                                    <span class="percent">%</span>
                                    <input type="text" value="30" class="yellowCircle" />
                                </div>
                                <div class="box-small-title">Top Category Score</div>
                            </div>


                            <div class="span2 offset1" onTablet="span4" onDesktop="span2">
                                <div class="circleStatsItem lightorange">
                                    <i class="icon-shopping-cart"></i>
                                    <span class="plus" pull>+</span>
                                    <span class="percent">%</span>
                                    <input type="text" value="42" class="lightOrangeCircle" />
                                </div>
                                <div class="box-small-title">Revenue</div>
                            </div>

           
                        </div>
                    </div>
                    
               <hr>     
                
                <div class="row-fluid sortable">	
				<div class="box span12">
					<div class="box-header">
						<h2><i class="icon-list"></i><span class="break"></span>Vertical Types Settings</h2>
					</div>
					<div class="box-content">
						
						<a class="quick-button span4" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
verticals/addverticaltype">
							<i class="icon-folder-open"></i>
							<p>ADD CATEGORY</p>
						</a>
				
						<div class="clearfix"></div>
					</div>	
				</div><!--/span-->
				
			</div>
    	
            
			   <div class="row-fluid sortable">
				<div class="box span12">
               
                <hr>
                    <div class="<?php echo $_smarty_tpl->tpl_vars['msgClass']->value;?>
"><strong><?php echo $_smarty_tpl->tpl_vars['msgInfo']->value;?>
</strong></div>   
					<div class="box-header" data-original-title>
						<h2><i class="icon-list"></i><span class="break"></span>Vertical Types</h2>
						<div class="box-icon">
							<a href="#" class="btn-setting"><i class="icon-wrench"></i></a>
							<a href="#" class="btn-minimize"><i class="icon-chevron-up"></i></a>
							<a href="#" class="btn-close"><i class="icon-remove"></i></a>
						</div>
					</div>
					<div class="box-content">
						<table class="table table-striped table-bordered bootstrap-datatable datatable" id="mytable">
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
verticals/editverticaltype/<?php echo $_smarty_tpl->tpl_vars['producttype']->value->product_type_id;?>
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