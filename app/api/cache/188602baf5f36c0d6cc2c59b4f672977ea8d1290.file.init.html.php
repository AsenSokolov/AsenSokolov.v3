<?php /* Smarty version Smarty-3.0.6, created on 2015-06-19 10:50:24
         compiled from "/media/WWW/public/PrimerTalent/modules/forgot/init.html" */ ?>
<?php /*%%SmartyHeaderCode:3536574945583c9c08f4176-29571133%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '188602baf5f36c0d6cc2c59b4f672977ea8d1290' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/forgot/init.html',
      1 => 1434700223,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3536574945583c9c08f4176-29571133',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    <div id="Content">
        <div id="header-image">
            <div class="header-image-wrapper">
                <div class="text-wrappers wrapper-left">
                    <h2>Forgot Your Password</h2>
                    <p>Create a new one!</p>
                </div>
                <div class="text-wrappers wrapper-right">
                    <div class="bulet-point-1 bullet-points">
                        <i class="elements"></i>
                        <span>Type your email</span>
                    </div>
                    <div class="bulet-point-1 bullet-points">
                        <i class="elements"></i>
                        <span>Check your email</span>
                    </div>
                    <div class="bulet-point-1 bullet-points">
                        <i class="elements"></i>
                        <span>Create your new password</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="wrapper">
            <form onsubmit="submitForgot(); return false;" id="submitForgot">
                <div id="show-select-type" class="head-section">
                    Please fill your email
                </div>
                <div class="row">
                    <input type="email" name="email" id="forgotEmail" class="reg-field" placeholder="talent@premieretalent.com"/>
                </div>
                <div class="form-submit">
                    <input type="submit" value="Submit" class="btn-submit btn-submit-style"/>
                </div>
            </form>
            <div class="dNone system-msg" id="msgForgot">
                Please check your email and follow the instructions.
            </div>
        </div>
    </div>
	<script>
		function submitForgot(){
			var email = $('#forgotEmail').val();
			$.ajax({
				type: 'POST',
				url: prPath+'forgot.json',
				dataType: 'json',
				data: {'email':email},
				headers: {ajax:1},
				success: function(r)
				{
				
					$.each(r.error, function( k, v ) {
						if(v == 'email'){
							alertBox("error", "Please fill your email!");
							return false;
						}						
						if(v == 'noExistEmail'){
							alertBox("error", "This email doesn't exist!");
						}
					});
					
					if(r.success){
						$('#submitForgot').addClass('dNone');
						$('#msgForgot').removeClass('dNone');
                        windowResize();
					}
				}
			});
		}
	</script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	