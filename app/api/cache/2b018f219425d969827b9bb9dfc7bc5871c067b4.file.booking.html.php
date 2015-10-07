<?php /* Smarty version Smarty-3.0.6, created on 2015-07-24 15:26:49
         compiled from "/media/WWW/public/PrimerTalent/modules/profile/booking.html" */ ?>
<?php /*%%SmartyHeaderCode:125367899455b22f09deb929-21228901%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b018f219425d969827b9bb9dfc7bc5871c067b4' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/profile/booking.html',
      1 => 1436429519,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '125367899455b22f09deb929-21228901',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==1){?>
	<?php $_template = new Smarty_Internal_Template("/modules/profile/booking_talant.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template("/modules/profile/booking_company.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
<?php }?>


<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	