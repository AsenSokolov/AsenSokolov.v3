<?php /* Smarty version Smarty-3.0.6, created on 2014-10-21 09:45:25
         compiled from "/media/WWW/public/PrimerTalent/modules/index/successful.html" */ ?>
<?php /*%%SmartyHeaderCode:16334338695446637519a4d8-95139931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '653da13f59db003dd147347f64d1f4abd4d90ce3' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/index/successful.html',
      1 => 1413899123,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16334338695446637519a4d8-95139931',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
		<div class="wrapper">
			
			<?php if ($_smarty_tpl->getVariable('paid')->value){?>
			plashtaneto e uspeshno
			<?php }else{ ?>
			plashtaneto e uspeshno no moje da mine malko vreme dokato se obraboti
			<?php }?>
			
			
			
			
		</div>
	</div>
	
	<script>
		$(document).ready(function($) {
			$('.bxslider').bxSlider({
				pager:false,
				mode:"fade"
			});
		});
	</script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	