<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 16:40:39
         compiled from "/media/WWW/public/PrimerTalent/modules/profile/settings.html" */ ?>
<?php /*%%SmartyHeaderCode:2101484315559e79d7653337-44320171%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '699cbafeabffa945b65434ecddd00bcf802faf88' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/profile/settings.html',
      1 => 1436429518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2101484315559e79d7653337-44320171',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>


<div id="Content">
    <div class="profile pf-edit">
        <?php $_template = new Smarty_Internal_Template("/modules/profile/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
    </div>
    <div class="wrapper">
        <div class="head-section align-left">Account Settings</div>
        
        <div id="change-password">
            <div class="head-section align-left head-section-white">Change Password</div>
            <form id="formReg" method="POST" class="form-edit" onsubmit="chngPass(this); return false;">

                <div class="row old-password-cont">
                    <label>Old Password</label>
                    <input type="password" value="" name="password" id="password" class="reg-field" autocomplete="off"/>
                </div>

                <div class="row">
                    <label>New Password</label>
                    <input type="password" value="" name="npassword" id="npassword" class="reg-field" autocomplete="off"/>
                </div>
                
                <div class="row">
                    <label>Repeat Password</label>
                    <input type="password" value="" name="renpassword" id="renpassword" class="reg-field" autocomplete="off"/>
                </div>
                <div class="error-msg dNone">
                    Error Message
                </div>
                <div class="form-submit">
                    <label></label>
                    <input type="submit" value="Save" class="btn-submit btn-submit-style"/>
                </div>
            </form>
        </div>
        
        <div id="account-info">
            <div class="head-section align-left head-section-white">Account Info</div>
            <div class="pf-info-el">
                Accout Type: <span><?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==1){?>Talent<?php }else{ ?>Company / Event Manager<?php }?></span>
            </div>
            <div class="pf-info-el">
                Valid till: <span><?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['expair']){?> <?php echo $_smarty_tpl->getVariable('SESSION_USER')->value['expair'];?>
 <?php }elseif($_smarty_tpl->getVariable('SESSION_USER')->value['payment_in_process']){?> You'r payment in process <?php }else{ ?> you have not yet paid <?php }?></span>
            </div>
            <?php if ($_smarty_tpl->getVariable('remaining_time')->value&&$_smarty_tpl->getVariable('remaining_time')->value<=15){?>
            <div class="reminder-notice">
                <i class="elements"></i>
                <span>
                    Your subscription will expire in <?php echo $_smarty_tpl->getVariable('remaining_time')->value;?>
 days. 
                    Please renew your annual subscription to continue using our services.
                </span>
            </div>
            <?php }?>
			
			<?php if ($_smarty_tpl->getVariable('remaining_time')->value<=15||!$_smarty_tpl->getVariable('remaining_time')->value){?>
			<form class="paypal" action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
payments/paypal.html" method="post" id="paypal_form"> 
            
				<input type="hidden" name="cmd" value="_xclick" /> 
				<input type="hidden" name="no_note" value="1" />
				<input type="hidden" name="lc" value="US" />
				<input type="hidden" name="currency_code" value="EUR" />
				<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
				<input type="hidden" name="first_name" 	id="first_name"  value=""  />
				<input type="hidden" name="payer_email" id="payer_email" value=""  />
				
				<input type="submit" value="<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['expair']){?>Renew Subscription<?php }else{ ?>Subscribe<?php }?>" class="btn-style btn-renew-subscr"/>
				
			</form>
			<?php }?>
        </div>
        
        <div class="clear"></div>
    </div>
</div>


<script>
	function chngPass(holder){
		var args = {};
		
		$(holder).find('input').each(function(){
			args[this.name] = this.value;
			$(this).removeClass('field-error');
		});
		
		$.ajax({
			type: 'POST',
			url: prPath+'profile/updatePassword.json',
			dataType: 'json',
			data: args,
			headers: {ajax:1},
			success: function(r)
			{
				if(r.error){
					$.each( r.error, function( k, v ) {
						$('#'+v).addClass('field-error');
					});
				
				}
				if(r.change){
					document.location.href=prPath;
				}
			}
		});
		
		return false;
	}
</script>

<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	
