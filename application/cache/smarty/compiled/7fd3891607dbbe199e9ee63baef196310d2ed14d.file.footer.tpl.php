<?php /* Smarty version Smarty-3.1.7, created on 2013-10-31 09:34:35
         compiled from "application\views\includes\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:256435257869ca50b46-38921528%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fd3891607dbbe199e9ee63baef196310d2ed14d' => 
    array (
      0 => 'application\\views\\includes\\footer.tpl',
      1 => 1383210912,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '256435257869ca50b46-38921528',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5257869cad512',
  'variables' => 
  array (
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5257869cad512')) {function content_5257869cad512($_smarty_tpl) {?>	</div><!--/fluid-row-->
			
	<div class="modal hide fade" id="myModal">
		<div class="modal-header">
			<button type="button" class="close" data-dismiss="modal">Ã—</button>
			<h3>Settings</h3>
		</div>
		<div class="modal-body">
			<p>Here settings can be configured...</p>
		</div>
		<div class="modal-footer">
			<a href="#" class="btn" data-dismiss="modal">Close</a>
			<a href="#" class="btn btn-primary">Save changes</a>
		</div>
	</div>
	
	<div class="clearfix"></div>
	<footer>
		<p>
			<span style="text-align:left;float:left">&copy; <a href="http://clabs.co" target="_blank">creativeLabs</a> 2013</span>
			<span style="text-align:right;float:right">Powered by: <a href="#">CompareHero</a></span>
		</p>
	</footer>
				
	</div><!--/.fluid-container-->
<!-- start: JavaScript-->
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery-1.9.1.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery-migrate-1.0.0.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery-ui-1.10.0.custom.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.ui.touch-punch.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/bootstrap.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.cookie.js"></script>
	<script src='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/fullcalendar.min.js'></script>
	<script src='<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.dataTables.min.js'></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/excanvas.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.pie.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.stack.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.flot.resize.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.chosen.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.uniform.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.cleditor.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.noty.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.elfinder.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.raty.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.iphone.toggle.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.uploadify-3.1.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.gritter.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.imagesloaded.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.masonry.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.knob.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/jquery.sparkline.min.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/custom.js"></script>
	<script src="<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/js/autoNumeric-1.7.5.js"></script>
<!-- end: JavaScript-->

<script type="text/javascript">
	
	// FOR TWITTER BOOTSTRAP POPOVER
	$(".querytd[data-toggle=popover]")
	      .popover({ trigger: "hover" })
	      .hover(function(e) {
	        e.preventDefault()
    })

	function message_welcome1(){
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'Welcome on Compare Hero Dashboard',
			// (string | mandatory) the text inside the notification
			text: 'This is a sample mock up',
			// (string | optional) the image to display on the left
			image: '<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
	}
	
	function message_welcome2(){
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'Hi User',
			// (string | mandatory) the text inside the notification
			text: 'Compare Hero dashboard works on all devices, computers, tablets and smartphones. It has lots of great features. Try It!',
			// (string | optional) the image to display on the left
			image: '<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'my-sticky-class'
		});
	}
	
	function message_welcome3(){
		var unique_id = $.gritter.add({
			// (string | mandatory) the heading of the notification
			title: 'Test1234!',
			// (string | mandatory) the text inside the notification
			text: 'Test1234.',
			// (string | optional) the image to display on the left
			image: '<?php echo $_smarty_tpl->tpl_vars['baseUrl']->value;?>
assets/img/avatar.jpg',
			// (bool | optional) if you want it to fade out on its own or just sit there
			sticky: false,
			// (int | optional) the time you want it to be alive for before fading out
			time: '',
			// (string | optional) the class name you want to apply to that specific message
			class_name: 'gritter-light'
		});
	}
	
	$(document).ready(function(){
		
		$('.autonum').autoNumeric();
		
		/*setTimeout("message_welcome1()",5000);
		setTimeout("message_welcome2()",10000);	
		setTimeout("message_welcome3()",15000);*/
		
	});			
</script>

</body>
</html><?php }} ?>