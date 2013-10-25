<?php /* Smarty version Smarty-3.1.7, created on 2013-10-25 04:17:33
         compiled from "application\modules\settings\views\log_view.tpl" */ ?>
<?php /*%%SmartyHeaderCode:438752577eddc13a43-67891465%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0edb88252e2d5908cb8fdc4d31afe5b572739b97' => 
    array (
      0 => 'application\\modules\\settings\\views\\log_view.tpl',
      1 => 1382670786,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '438752577eddc13a43-67891465',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_52577eddc4a55',
  'variables' => 
  array (
    'baseUrl' => 0,
    'logList' => 0,
    'loglist' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52577eddc4a55')) {function content_52577eddc4a55($_smarty_tpl) {?><div id="content" class="span10">
			<!-- start: Content -->
			

			<div>
				<hr>
				<ul class="breadcrumb">
					<li>
						<a href="#">Home</a> <span class="divider">/</span>
					</li>
					<li>
						<a href="#">Access Logs</a>
					</li>
				</ul>
				<hr>
			</div>
			   
			   <div class="row-fluid sortable">
				<div class="box span12">
                
                <a class="btn" href="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
settings/excelexport/logList">Extract To Excel</a>
                <hr>
                            
					<div class="box-header" data-original-title>
						<h2><i class="icon-group"></i><span class="break"></span>Access Logs</h2>
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
								  <th width="10%">LogId</th>
								  <th width="10%">UserId</th>
								  <th width="26%">Access Time</th>
                                  <th width="26%">IP</th>
                                  <th width="26%">Exit Time</th>
								  
							  </tr>
						  </thead>   
						  <tbody>
							
							<?php  $_smarty_tpl->tpl_vars['loglist'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['loglist']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['logList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['loglist']->key => $_smarty_tpl->tpl_vars['loglist']->value){
$_smarty_tpl->tpl_vars['loglist']->_loop = true;
?>
							
							<tr>
								<td><?php echo $_smarty_tpl->tpl_vars['loglist']->value->log_id;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['loglist']->value->userid;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['loglist']->value->access_time;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['loglist']->value->access_ip;?>
</td>
								<td class="center"><?php echo $_smarty_tpl->tpl_vars['loglist']->value->exit_time;?>
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