<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 13:31:25
         compiled from "/media/WWW/public/PrimerTalent//modules/company/profile_head.html" */ ?>
<?php /*%%SmartyHeaderCode:826921324559e4d7ddfbfb4-44026967%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '353675515cd75e64b60e2a1d9361e1efcfe1b58a' => 
    array (
      0 => '/media/WWW/public/PrimerTalent//modules/company/profile_head.html',
      1 => 1436437883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '826921324559e4d7ddfbfb4-44026967',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<div id="header-image" class="pf-header">
    <div class="header-image-wrapper">
        <div class="pf-image-cont">
            <div class="pf-img">
                <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->getVariable('head_title')->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->getVariable('head_title')->value['pic'];?>
<?php }else{ ?>img/company-default.png<?php }?>" alt="" id="profilePic"/>
            </div>
        </div>
        <div class="pf-nav">
            <h1><?php echo $_smarty_tpl->getVariable('head_title')->value['name'];?>
</h1>
            <h3><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('head_title')->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btv']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['btv']['last']){?>, <?php }?><?php }} ?></h3>
            <h4><?php echo $_smarty_tpl->getVariable('head_title')->value['location'];?>
</h4>
        </div>
    </div>
</div>

<div class="pf-filter filters-1">
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
company/profile/<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==1){?>class="filters-1-select"<?php }?>>Info</a>
    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
company/media/<?php echo $_smarty_tpl->getVariable('user_id')->value;?>
.html" <?php if ($_smarty_tpl->getVariable('profilButon')->value==2){?>class="filters-1-select"<?php }?>>Media</a>
</div>