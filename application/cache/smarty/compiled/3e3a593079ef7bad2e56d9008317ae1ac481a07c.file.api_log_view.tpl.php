<?php /* Smarty version Smarty-3.1.7, created on 2013-10-31 02:50:05
         compiled from "application\modules\settings\views\api_log_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28369526a2d5c177078-13796815%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e3a593079ef7bad2e56d9008317ae1ac481a07c' => 
    array (
      0 => 'application\\modules\\settings\\views\\api_log_view.tpl',
      1 => 1383187703,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28369526a2d5c177078-13796815',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_526a2d5c1b19f',
  'variables' => 
  array (
    'baseUrl' => 0,
    'logList' => 0,
    'loglist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_526a2d5c1b19f')) {function content_526a2d5c1b19f($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">Settings</a> <span class="divider">/</span>
					</li>
					
					<li>
						<a href="#">API Logs</a>
					</li>
				</ul>
				<hr>
			</div>
			   
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/excelexport/apilogList">Extract To Excel</a>
                <hr>
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>API Logs</h2>
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
								  <th>Client</th>
								  <th>Method</th>
								  <th>URL</th>
                                  <th>Access Time</th>
                                  <th id="logquery">Query</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							<?php  $_smarty_tpl->tpl_vars['loglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loglist']->key => $_smarty_tpl->tpl_vars['loglist']->value){
$_smarty_tpl->tpl_vars['loglist']->_loop = true;
?>
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['loglist']->value->clientID;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['loglist']->value->log_method;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['loglist']->value->log_url;?>
</td>
								<td class="center"><?php echo date("d M, Y H:i",strtotime($_smarty_tpl->tpl_vars['loglist']->value->log_access_time));?>
</td>
								<?php if (!empty($_smarty_tpl->tpl_vars['loglist']->value->log_query)){?>
									<td class="center querytd" data-toggle="popover" data-placement="left" data-content="<?php echo $_smarty_tpl->tpl_vars['loglist']->value->log_query;?>
"  data-trigger="hover">
										<?php echo rtrim(substr($_smarty_tpl->tpl_vars['loglist']->value->log_query,0,60));?>
...
									</td>
								<?php }?>
								<?php if (empty($_smarty_tpl->tpl_vars['loglist']->value->log_query)){?>
									<td class="center">
										N/A
									</td>
								<?php }?>
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