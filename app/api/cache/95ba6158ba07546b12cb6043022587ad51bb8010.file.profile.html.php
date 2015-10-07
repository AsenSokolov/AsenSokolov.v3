<?php /* Smarty version Smarty-3.0.6, created on 2015-07-13 16:09:46
         compiled from "/media/WWW/public/PrimerTalent/modules/talent/profile.html" */ ?>
<?php /*%%SmartyHeaderCode:52367410555a3b89ad74c05-93736650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '95ba6158ba07546b12cb6043022587ad51bb8010' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/talent/profile.html',
      1 => 1436792974,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52367410555a3b89ad74c05-93736650',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include '/media/WWW/public/PrimerTalent/library/SMARTY/plugins/modifier.capitalize.php';
?><?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/talent/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
				<div class="pf-info">
                    <div class="pf-info-details">
                            <div class="left-block">
                                <div class="head-section align-left">Basic Info</div>   
                                
                                <div class="pf-info-el">
                                    Name: <span><?php if ($_smarty_tpl->getVariable('user')->value['name']){?><?php echo $_smarty_tpl->getVariable('user')->value['name'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                <div class="pf-info-el">
                                    Current Location: <span><?php if ($_smarty_tpl->getVariable('user')->value['location']){?><?php echo $_smarty_tpl->getVariable('user')->value['location'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                <div class="pf-info-el">
                                    Nationality: <span><?php if ($_smarty_tpl->getVariable('user')->value['nationality']){?><?php echo $_smarty_tpl->getVariable('user')->value['nationality'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                <div class="pf-info-el">
                                    Gender: <span><?php if ($_smarty_tpl->getVariable('user')->value['gender']){?><?php echo $_smarty_tpl->getVariable('user')->value['gender'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                <div class="pf-info-el">
                                    Age: <span><?php if ($_smarty_tpl->getVariable('user')->value['age']){?><?php echo $_smarty_tpl->getVariable('user')->value['age'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                
                                <div class="pf-info-title">About me:</div>
                                <div class="pf-info-descr"><?php if ($_smarty_tpl->getVariable('user')->value['about']){?><?php echo $_smarty_tpl->getVariable('user')->value['about'];?>
<?php }else{ ?>N/A<?php }?></div>
                            </div>
                            
                            <div class="right-block">
							
								<?php if ($_smarty_tpl->getVariable('user')->value['genre_preformance_act_value']){?>
								<div class="head-section align-left">Performance Types</div>   
                                <div class="performance-types-cont">
                                    <ul class="genre">
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('user')->value['genre_preformance_act_value']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
										<li> 
                                            <?php echo smarty_modifier_capitalize(((mb_detect_encoding($_smarty_tpl->tpl_vars['v']->value['name'], 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtolower($_smarty_tpl->tpl_vars['v']->value['name'],SMARTY_RESOURCE_CHAR_SET) : strtolower($_smarty_tpl->tpl_vars['v']->value['name'])));?>

											<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['performance_type']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
											<ul class="performance-type">
												<li>
													<?php echo $_smarty_tpl->tpl_vars['v2']->value['name'];?>

													<?php  $_smarty_tpl->tpl_vars['v3'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k3'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v2']->value['act']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v3']->key => $_smarty_tpl->tpl_vars['v3']->value){
 $_smarty_tpl->tpl_vars['k3']->value = $_smarty_tpl->tpl_vars['v3']->key;
?>
													<ul class="act-type">
                                                        <li>
                                                            <i class="elements"></i>
															<?php echo $_smarty_tpl->tpl_vars['v3']->value['name'];?>

                                                        </li>
                                                    </ul>
													<?php }} ?>
												</li>
											</ul>
											<?php }} ?>
										</li>
										<?php }} ?>
                                    </ul>
                                </div>
								<?php }?>
							
                                <div class="head-section align-left">Booking Info</div>   
                                
								<div class="pf-info-el">
                                    Act Name: <span><?php if ($_smarty_tpl->getVariable('user')->value['nameOfAct']){?><?php echo $_smarty_tpl->getVariable('user')->value['nameOfAct'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                <div class="pf-info-el">
                                    Group: <span><?php if ($_smarty_tpl->getVariable('user')->value['group_type']){?><?php echo $_smarty_tpl->getVariable('user')->value['group_type'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                <?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==2){?>
								<div class="pf-info-el">
                                    Website: <span class="no-capitalize"><?php if ($_smarty_tpl->getVariable('user')->value['website']){?><?php echo $_smarty_tpl->getVariable('user')->value['website'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                <?php }?>
                                <div class="pf-info-el">
                                    Booking Price: <span><?php if ($_smarty_tpl->getVariable('user')->value['price']){?><?php echo $_smarty_tpl->getVariable('user')->value['currency'];?>
 <?php echo $_smarty_tpl->getVariable('user')->value['price'];?>
 <?php if ($_smarty_tpl->getVariable('user')->value['charge_type']){?>/ <?php echo $_smarty_tpl->getVariable('user')->value['charge_type'];?>
<?php }?><?php }else{ ?>N/A<?php }?></span>
                                </div>
								
								<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==2){?>
                                <div class="pf-info-el">
                                    Phone Number: <span><?php if ($_smarty_tpl->getVariable('user')->value['phone']){?><?php echo $_smarty_tpl->getVariable('user')->value['phone'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
                                
                                <div class="pf-info-el">
                                    Email: <span class="no-capitalize"><?php if ($_smarty_tpl->getVariable('user')->value['email']){?><?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
<?php }else{ ?>N/A<?php }?></span>
                                </div>
								<?php }?>
                            </div>
                        <div class="clear"></div>
                    </div>
				</div>
			</div>
		</div>
	</div>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	