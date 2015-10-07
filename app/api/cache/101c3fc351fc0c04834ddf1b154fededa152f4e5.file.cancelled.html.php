<?php /* Smarty version Smarty-3.0.6, created on 2015-05-16 01:01:44
         compiled from "/media/WWW/public/PrimerTalent/modules/payments/cancelled.html" */ ?>
<?php /*%%SmartyHeaderCode:12328459545556cf38ce09e4-70719896%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '101c3fc351fc0c04834ddf1b154fededa152f4e5' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/payments/cancelled.html',
      1 => 1423833127,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12328459545556cf38ce09e4-70719896',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
		<div class="wrapper">
			
			<div class="reg-form-title">Your subscription was successfully canceled!</div>
            <div class="form-submit">
                <a href="javascript:void(0);" class="btn-submit">Return to Home Page</a>
            </div>		
			
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