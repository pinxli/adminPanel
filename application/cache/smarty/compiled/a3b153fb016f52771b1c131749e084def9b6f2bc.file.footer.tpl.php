<?php /* Smarty version Smarty-3.1.7, created on 2013-10-10 08:47:05
         compiled from "application\modules\product\views\includes\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:568452566989076698-05964041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3b153fb016f52771b1c131749e084def9b6f2bc' => 
    array (
      0 => 'application\\modules\\product\\views\\includes\\footer.tpl',
      1 => 1381387537,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '568452566989076698-05964041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'baseUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_525669890a931',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_525669890a931')) {function content_525669890a931($_smarty_tpl) {?><!-- start: JavaScript-->
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
<!-- end: JavaScript-->

<script type="text/javascript">
	
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
		
		setTimeout("message_welcome1()",5000);
		setTimeout("message_welcome2()",10000);	
		setTimeout("message_welcome3()",15000);
		
	});			
</script>

</body>
</html><?php }} ?>