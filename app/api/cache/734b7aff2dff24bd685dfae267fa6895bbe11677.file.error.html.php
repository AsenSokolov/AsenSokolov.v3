<?php /* Smarty version Smarty-3.0.6, created on 2015-07-15 16:01:22
         compiled from "/media/WWW/public/PrimerTalent/templates/error.html" */ ?>
<?php /*%%SmartyHeaderCode:188759282255a659a23917a3-32702663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '734b7aff2dff24bd685dfae267fa6895bbe11677' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/templates/error.html',
      1 => 1436429520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '188759282255a659a23917a3-32702663',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <div class="content">
        <table width="430" style="margin:50px auto 100px auto;" cellpadding="0" cellspacing="0" border="0">
            <tr>
                <td align="center">
                    <h1><?php echo $_smarty_tpl->getVariable('errorTitle')->value;?>
</h1>
                    <?php echo $_smarty_tpl->getVariable('errorMessage')->value;?>
 
                </td>
            </tr>
        </table>
        <div id="footerCap"></div>
    </div>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>      
