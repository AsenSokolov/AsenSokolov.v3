<?php /* Smarty version Smarty-3.0.6, created on 2015-07-15 13:54:16
         compiled from "/media/WWW/public/PrimerTalent/modules/profile/init.html" */ ?>
<?php /*%%SmartyHeaderCode:64923407555a63bd873d563-47042801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd2299e92650e5d863e7c4a403bffade0e00a6714' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/profile/init.html',
      1 => 1436792984,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '64923407555a63bd873d563-47042801',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include '/media/WWW/public/PrimerTalent/library/SMARTY/plugins/modifier.capitalize.php';
?><?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/profile/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/edit_info.html" class="btn-edit">
                    <span class="elements"></span>
                    <span class="text">Edit Info</span>
                </a>

				<div class="pf-info">
                    <div class="pf-info-details">
                        
                        <?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==1){?>
						
                            <div class="left-block">
                                <div class="head-section align-left">Basic Info</div>   
                                
                                <div class="pf-info-el">
                                    Name: <span><?php echo $_smarty_tpl->getVariable('user')->value['name'];?>
</span>
                                </div>
								
                                <div class="pf-info-el">
                                    Current Location: <span><?php if ($_smarty_tpl->getVariable('user')->value['location']){?><?php echo $_smarty_tpl->getVariable('user')->value['location'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-el">
                                    Nationality: <span><?php if ($_smarty_tpl->getVariable('user')->value['nationality']){?><?php echo $_smarty_tpl->getVariable('user')->value['nationality'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-el">
                                    Gender: <span><?php if ($_smarty_tpl->getVariable('user')->value['gender']){?><?php echo $_smarty_tpl->getVariable('user')->value['gender'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-el">
                                    Age: <span><?php if ($_smarty_tpl->getVariable('user')->value['age']){?><?php echo $_smarty_tpl->getVariable('user')->value['age'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
                                
                                <div class="pf-info-title">About me:</div>
                                <div class="pf-info-descr"><?php if ($_smarty_tpl->getVariable('user')->value['about']){?><?php echo $_smarty_tpl->getVariable('user')->value['about'];?>
<?php }else{ ?>Please fill your info<?php }?></div>
								
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
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-el">
                                    Group: <span><?php if ($_smarty_tpl->getVariable('user')->value['group_type']){?><?php echo $_smarty_tpl->getVariable('user')->value['group_type'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-el">
                                    Website: <span class="no-capitalize"><?php if ($_smarty_tpl->getVariable('user')->value['website']){?><?php echo $_smarty_tpl->getVariable('user')->value['website'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
                                
                                <div class="pf-info-el">
                                    Booking Price: <span><?php if ($_smarty_tpl->getVariable('user')->value['price']){?><?php echo $_smarty_tpl->getVariable('user')->value['currency'];?>
 <?php echo $_smarty_tpl->getVariable('user')->value['price'];?>
 <?php if ($_smarty_tpl->getVariable('user')->value['charge_type']){?>/ <?php echo $_smarty_tpl->getVariable('user')->value['charge_type'];?>
<?php }?><?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-el">
                                    Phone Number: <span><?php if ($_smarty_tpl->getVariable('user')->value['phone']){?><?php echo $_smarty_tpl->getVariable('user')->value['phone'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
                               
                                <div class="pf-info-el">
                                    Email: <span class="no-capitalize"><?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
</span>
                                </div>
                            </div>
							
                        <?php }else{ ?>
						
                            <div class="left-block">
                                <div class="head-section align-left">Basic Info</div>
								
                                <div class="pf-info-el">
                                    Name: <span><?php echo $_smarty_tpl->getVariable('user')->value['name'];?>
</span>
                                </div>
								
                                <div class="pf-info-el">
                                    Location: <span><?php if ($_smarty_tpl->getVariable('user')->value['location']){?><?php echo $_smarty_tpl->getVariable('user')->value['location'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-title">About the company:</div>
                                <div class="pf-info-descr"><?php if ($_smarty_tpl->getVariable('user')->value['about']){?><?php echo $_smarty_tpl->getVariable('user')->value['about'];?>
<?php }else{ ?>Please fill your info<?php }?></div>

                            </div>
							
                            <div class="right-block">
                                <div class="head-section align-left">Business Info</div>

                                <div class="pf-info-el">
                                    Business Type: <span><?php if ($_smarty_tpl->getVariable('user')->value['business_type']){?>
										<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
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
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['brv']['last']){?>, <?php }?><?php }} ?>
									<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>

                                <div class="pf-info-el">
                                    Business Regions: <span><?php if ($_smarty_tpl->getVariable('user')->value['business_regions_value']){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
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
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['brv']['last']){?>, <?php }?><?php }} ?><?php }else{ ?>Please fill your info<?php }?></span>
                                </div>

                                <div class="pf-info-el">
                                    Booking Types: <span><?php if ($_smarty_tpl->getVariable('user')->value['booking_type_value']){?><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
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
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['btv']['last']){?>, <?php }?><?php }} ?><?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
                                
                                <div class="pf-info-el">
                                    Website: <span class="no-capitalize"><?php if ($_smarty_tpl->getVariable('user')->value['website']){?><?php echo $_smarty_tpl->getVariable('user')->value['website'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
								
                                <div class="pf-info-el">
                                    Phone Number: <span><?php if ($_smarty_tpl->getVariable('user')->value['phone']){?><?php echo $_smarty_tpl->getVariable('user')->value['phone'];?>
<?php }else{ ?>Please fill your info<?php }?></span>
                                </div>
                                
                                <div class="pf-info-el">
                                    Email: <span class="no-capitalize"><?php echo $_smarty_tpl->getVariable('user')->value['email'];?>
</span>
                                </div>
								
                            </div>
							
                        <?php }?>
                        <div class="clear"></div>
                    </div>
				</div>
			</div>
		</div>
	</div>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	