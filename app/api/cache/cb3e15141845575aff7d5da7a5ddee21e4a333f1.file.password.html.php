<?php /* Smarty version Smarty-3.0.6, created on 2015-06-19 10:51:12
         compiled from "/media/WWW/public/PrimerTalent/modules/forgot/password.html" */ ?>
<?php /*%%SmartyHeaderCode:8601935615583c9f0e69162-51678231%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb3e15141845575aff7d5da7a5ddee21e4a333f1' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/forgot/password.html',
      1 => 1434700265,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8601935615583c9f0e69162-51678231',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	
	<?php if (!$_smarty_tpl->getVariable('forgot')->value['change']){?>
	<div id="Content">
        <div id="header-image">
            <div class="header-image-wrapper">
                <div class="text-wrappers wrapper-left">
                    <h2>Change your password</h2>
                </div>
                <div class="text-wrappers wrapper-right">
                    <div class="bulet-point-1 bullet-points">
                        <i class="elements"></i>
                        <span>Type your new password</span>
                    </div>
                    <div class="bulet-point-1 bullet-points">
                        <i class="elements"></i>
                        <span>Retype your new password</span>
                    </div>
                    <div class="bulet-point-1 bullet-points">
                        <i class="elements"></i>
                        <span>Confirm your password</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="wrapper">
            <form onsubmit="changePassword(); return false;" id="submitPassword">
                <div id="show-select-type" class="head-section">
                    Please fill your new password below
                </div>
                <div class="row">
                    <input type="password" name="password" id="password" autocomplete="off" class="reg-field" placeholder="Type your password"/>
                </div>
                <div class="row">
                    <input type="password" name="repassword" id="repassword" autocomplete="off" class="reg-field" placeholder="Retype your password"/>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Submit" class="btn-submit btn-submit-style"/>
                </div>
            </form>
            <div id="submitMsg" class="dNone system-msg">You successfully changed your password!<br/>You can now login in the website!</div>
        </div>
	</div>
	<script>
		function changePassword(){
			var args = {};
			$('#password').removeClass('field-error');
			$('#repassword').removeClass('field-error');
			$('#oldPass').addClass('dNone');
			args['password']   = $('#password').val();
			args['repassword'] = $('#repassword').val();
			args['hash']       = '<?php echo $_smarty_tpl->getVariable('forgot')->value['hash'];?>
';
			args['key']        = '<?php echo $_smarty_tpl->getVariable('forgot')->value['key'];?>
';
			
			$.ajax({
				type: 'POST',
				url: prPath+'forgot/changePass.json',
				dataType: 'json',
				data: args,
				headers: {ajax:1},
				success: function(r)
				{
					if(r.error){
                        
						$.each( r.error, function( key, value ) {
                        
                            $('#'+value).addClass('field-error');
                            
                            if(value == 'empty'){
                                alertBox("error", "Please type your new password!");
                                return;
                            }
                            
                            if(value == 'short'){
                                alertBox("error", "Your password must be at least 6 symbols!");
                                return;
                            }
                            
                            if(value == 'missmatch'){
                                alertBox("error", "The passwords that you entered do not match.");
                                return;
                            }
                            
                            if(value == 'oldPass'){
                                alertBox("error", "You have written your old password!<br/>Please write a new one!");
                                return;
							}
							
						});
						
					}
					
					if(r.success)
					{
						$('#submitPassword').addClass('dNone');
						$('#submitMsg').removeClass('dNone');
                        windowResize();
					}
					
				}
			});
		}
	</script>
	<?php }else{ ?>
    <div id="Content">
        <div id="header-image">
            <div class="header-image-wrapper"></div>
        </div>
        
        <div class="wrapper">
            <div class="system-msg">You already changed your password.<br/> If you want a new one plese go to <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
forgot.html">Forgot pasword page</a>!</div>
        </div>
    </div>
	<?php }?>
	
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	