<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 11:26:17
         compiled from "/media/WWW/public/PrimerTalent/templates/header.html" */ ?>
<?php /*%%SmartyHeaderCode:321448019559e302964d392-31625099%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c73dfdf8f9833eb47ad5a3a8d3cd080d9ad9bc68' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/templates/header.html',
      1 => 1436429520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '321448019559e302964d392-31625099',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!$_smarty_tpl->getVariable('AJAX')->value){?>
<!DOCTYPE html>
<html>
	<?php $_template = new Smarty_Internal_Template("templates/_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<body class="<?php echo $_smarty_tpl->getVariable('_BROWSER')->value['name'];?>
 <?php echo $_smarty_tpl->getVariable('_BROWSER')->value['name'];?>
<?php echo $_smarty_tpl->getVariable('_BROWSER')->value['version'];?>
 <?php echo $_smarty_tpl->getVariable('_BROWSER')->value['os'];?>
">
    	<div id="fb-root"></div>
		<script type="text/javascript">
			
			var lang 		= '<?php echo $_smarty_tpl->getVariable('language')->value;?>
';
			var prPath  	= '<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
';
			var prjUrl  	= '<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
';
			var fpath  		= '<?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
';			
			var PROTOCOL	= '<?php echo $_smarty_tpl->getVariable('PROTOCOL')->value;?>
';			
			var SESSION		= '<?php echo $_smarty_tpl->getVariable('SESSION')->value;?>
';			
			
            // Preload some heavy images if necessarilly 
            var preload = [
				
            ];
			
            var ploaded = [];
            
            $(preload).each(function(i, r){
                ploaded[i] 		= new Image();
                ploaded[i].src 	= '<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/'+r;
            });        
            
            $(document).ready(function() {
                $("#notification-list").mCustomScrollbar({
                     theme:"minimal"
                });
            });
            
		</script>
        
        <!-- HEADER -->
		<div id="Header">
			<div class="wrapper">
				 <ul id="website-nav">
                    <li>
                        <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
" id="logo" title="Premiere Talent">
                            <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/logo.png" height="40" width="auto" alt="Premiere Talent Logo"/>
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_talent.html" id="btn-nav-talent" class="btn-nav-style" title="Talents">
                            <i class="elements"></i>Talents
                        </a>
                    </li>
                    
                    <li>
                        <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_company.html" id="btn-nav-manager" class="btn-nav-style" title="Event Managers">
                            <i class="elements"></i>Event Managers
                        </a>
                    </li>
                    
                    
                </ul>
                

                <ul id="profile-nav">
                    <?php if ($_smarty_tpl->getVariable('SESSION_USER')->value){?>
                    <li>
                        <a href="javascript:void(0);" onclick="dropDownFunctionality('notification-list')" id="btn-nav-notifications" class="btn-nav-style" title="Notifications">
                            <i class="elements"></i>
                            <?php if ($_smarty_tpl->getVariable('notifications')->value['newNotifi']){?><span class="new-notification"></span><?php }?>
                        </a>
                        
                        <div id="notification-list" class="drop-down dNone">
                            <ul>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('notifications')->value['all']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <li <?php if (!$_smarty_tpl->tpl_vars['v']->value['read']){?>class="newNotification"<?php }?>>
                                    <a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['url'];?>
<?php if (!$_smarty_tpl->tpl_vars['v']->value['read']){?>?noti_r=<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
<?php }?>">
                                        <div class="notification-title"><?php echo $_smarty_tpl->tpl_vars['v']->value['msg'];?>
</div>
                                        <?php if ($_smarty_tpl->tpl_vars['v']->value['type']==1){?><div class="notification-descr"><?php echo $_smarty_tpl->tpl_vars['v']->value['description'];?>
</div><?php }?>
                                        <div class="notification-date"><?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</div>
                                    </a>
                                </li>
								<?php }} else { ?>
								<li>no new notifications</li>
								<?php } ?>
                            </ul>
                        </div>
                    </li>
					
					<li>
                        <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile" id="btn-nav-login" class="btn-nav-style" title="View Profile">
                            <span><?php echo $_smarty_tpl->getVariable('SESSION_USER')->value['name'];?>
</span>
                            <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['pic']){?>uploads/icon/<?php echo $_smarty_tpl->getVariable('SESSION_USER')->value['pic'];?>
<?php }elseif($_smarty_tpl->getVariable('SESSION_USER')->value['type']==2){?>img/default-company-thumb.png<?php }else{ ?>img/default-user-thumb.png<?php }?>" alt="User Profile Image"/>
                        </a>
                    </li>
                    
                    <?php }else{ ?>
                    <li>
                        <a href="javascript:void(0);" onclick="enterToWebsite();" id="btn-nav-login" class="btn-nav-style" title="Log In">
                            <span>Log In</span>
                            <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/default-user-thumb.png" alt="User Profile Image"/>
                        </a>
                    </li>
                    <?php }?>
                
                    <?php if ($_smarty_tpl->getVariable('SESSION_USER')->value){?>
                    <li>
                        <a href="javascript:void(0);" onclick="dropDownFunctionality('settings-list')" id="btn-nav-settings" class="btn-nav-style" title="Profile Options">
                            <i class="elements"></i>
                        </a>
                        
                        <ul id="settings-list" class="drop-down dNone">
                            <li>
                                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile" title="Booking">
                                    Profile
                                </a>
                            </li>
							<li>
                                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/booking.html" title="Booking">
                                    Bookings
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/settings.html" title="Account Settings">
                                    Account Settings
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
logout" title="Logout">
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </li>
                    <?php }?>
                    
                </ul>

				<div class="clear"></div>
			</div>
		</div>
		<?php if (!$_smarty_tpl->getVariable('SESSION_USER')->value){?>
        <div id="enter-forms">
			<div class="wrapper">
				<div id="register-cont">
                    <h2>For Talents and Talent Managers</h2>
                    <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
register" id="btn-registration" class="btn-style">Register</a>
				</div>
                <div class="enter-forms-separator">
                    <div></div>
                </div>
				<div id="login-cont">
					<form action="" name="login" method="post" id="loginForm">
						<input id="loginEmail" 	type="email" name="email" class="field-style" placeholder="email"/>
                        <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
forgot.html" class="forgot-btn">Forgot password?</a>
						<input id="loginPassword"	type="password" name="password" class="field-style" placeholder="password"/>
                        <input type="submit" id="loginButton" class="elements" value=""/>
					</form>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<?php }?>
<?php }?> 
        
        <!-- HEADER END -->
        <!-- ALERT BOX -->
        
        <div id="PopUps" class="dNone">
            
        </div>
        
        <!-- ALERT BOX END -->