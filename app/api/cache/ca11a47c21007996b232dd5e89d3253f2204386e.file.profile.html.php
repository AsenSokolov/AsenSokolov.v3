<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 13:30:50
         compiled from "/media/WWW/public/PrimerTalent/modules/company/profile.html" */ ?>
<?php /*%%SmartyHeaderCode:1924361032559e4d5a7befd5-97220839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca11a47c21007996b232dd5e89d3253f2204386e' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/company/profile.html',
      1 => 1436437849,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924361032559e4d5a7befd5-97220839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/company/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
				<div class="pf-info">
                    <div class="pf-info-details">
                        
                            <div class="left-block">
                                <div class="head-section align-left">Basic Info</div>
                                <div class="pf-info-el">
                                    Name: <span><?php echo $_smarty_tpl->getVariable('user')->value['name'];?>
</span>
                                </div>
                                <div class="pf-info-el">
                                    Location: <span><?php echo $_smarty_tpl->getVariable('user')->value['location'];?>
</span>
                                </div>
                                <div class="pf-info-title">About me:</div>
                                <div class="pf-info-descr"><?php echo $_smarty_tpl->getVariable('user')->value['about'];?>
</div>
                            </div>
                            <div class="right-block">
                                <div class="head-section align-left">Business Info</div> 
                                <div class="pf-info-el">
                                    Business Type: <span><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['business_type_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brv']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['brv']['last']){?>, <?php }?><?php }} ?></span>
                                </div>
                                <div class="pf-info-el">
                                    Business Regions: <span><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['business_regions_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['brv']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['brv']['last']){?>, <?php }?><?php }} ?></span>
                                </div>
                                <div class="pf-info-el">
                                    Booking Types: <span><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['booking_type_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btv']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['btv']['last']){?>, <?php }?><?php }} ?></span>
                                </div>
                                
                                <div class="pf-info-el">
                                    Website: <span class="no-capitalize"><?php echo $_smarty_tpl->getVariable('user')->value['website'];?>
</span>
                                </div>
                                <div class="pf-info-el">
                                    Phone Number: <span><?php echo $_smarty_tpl->getVariable('user')->value['phone'];?>
</span>
                                </div>
                                
                                <div class="pf-info-el">
                                    Email: <span class="no-capitalize"><?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
</span>
                                </div>
                            </div>
							
                        <div class="clear"></div>
                    </div>
				</div>
			</div>
		</div>
	</div>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	