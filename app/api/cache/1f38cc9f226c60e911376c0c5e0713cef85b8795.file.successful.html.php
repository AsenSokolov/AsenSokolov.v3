<?php /* Smarty version Smarty-3.0.6, created on 2015-05-15 07:49:22
         compiled from "/media/WWW/public/PrimerTalent/modules/payments/successful.html" */ ?>
<?php /*%%SmartyHeaderCode:702769245555dd42cf4409-10006422%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f38cc9f226c60e911376c0c5e0713cef85b8795' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/payments/successful.html',
      1 => 1431440139,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '702769245555dd42cf4409-10006422',
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
                <div class="reg-form-title">Thank you for your order!</div>
                <div class="reg-form-sub-title">Please continue to finish your profile.</div>
                <div class="form-submit">
                    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/edit_info.html" class="btn-submit btn-style">Continue</a>
                </div>
			<?php }else{ ?>
                <div class="reg-form-title">Thank you for your order!</div>
                <div class="reg-form-sub-title">Please continue to finish your profile.</div>
                <div class="form-submit">
                    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/edit_info.html" class="btn-submit btn-style">Continue</a>
                </div>
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