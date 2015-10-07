<?php /* Smarty version Smarty-3.0.6, created on 2015-07-10 14:29:11
         compiled from "/media/WWW/public/PrimerTalent/modules/profile/edit_info.html" */ ?>
<?php /*%%SmartyHeaderCode:1703143360559fac87735276-36117927%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '90be925442c83a43c916095c37580c3fd2a2e0b5' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/profile/edit_info.html',
      1 => 1436527738,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1703143360559fac87735276-36117927',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==1){?>
	<?php $_template = new Smarty_Internal_Template("/modules/profile/edit_info_talant.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
<?php }else{ ?>
	<?php $_template = new Smarty_Internal_Template("/modules/profile/edit_info_company.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
<?php }?>

<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>