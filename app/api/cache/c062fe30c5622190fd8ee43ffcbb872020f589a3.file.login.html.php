<?php /* Smarty version Smarty-3.0.6, created on 2015-07-15 16:01:13
         compiled from "/media/WWW/public/PrimerTalent/modules/admin/login.html" */ ?>
<?php /*%%SmartyHeaderCode:36022202255a6599965efc0-10624595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c062fe30c5622190fd8ee43ffcbb872020f589a3' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/admin/login.html',
      1 => 1436429515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '36022202255a6599965efc0-10624595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("modules/admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div class="loginWrapper">
		<div class="loginLogo">
			<img alt="" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/admin/loginLogo.png">
		</div>
		<div class="loginPanel">
			<div class="head">
				<h5 class="iUser">Login</h5>
			</div>
		    <form method="post" class="mainForm" action="">
		    	<fieldset>
	                <div class="loginRow noborder">
	                    <label for="req1">Username:</label>
	                    <div class="loginInput">
	                    	<input type="text" name="user" tabindex="1" value="<?php echo $_smarty_tpl->getVariable('user')->value;?>
" />
	                    </div>
	                    <div class="fix"></div>
	                </div>
	                
	                <div class="loginRow">
	                    <label for="req2">Password:</label>
	                    <div class="loginInput">
	                    	 <input type="password" tabindex="2" name="pass" value="" />
	                    </div>
	                    <div class="fix"></div>
	                </div>
	                
	                <div class="loginRow">
	                	<input type="submit" tabindex="3" class="greyishBtn submitForm" name="login" value="Log me in" />
	                    <div class="fix"></div>
	                </div>
	            </fieldset>
		    </form>
		 </div>
	</div>
<?php $_template = new Smarty_Internal_Template("modules/admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
