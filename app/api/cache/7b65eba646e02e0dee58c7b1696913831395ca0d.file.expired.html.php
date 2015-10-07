<?php /* Smarty version Smarty-3.0.6, created on 2015-06-10 10:07:09
         compiled from "/media/WWW/public/PrimerTalent/modules/payments/expired.html" */ ?>
<?php /*%%SmartyHeaderCode:1233523675577e21db91d27-49467534%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b65eba646e02e0dee58c7b1696913831395ca0d' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/payments/expired.html',
      1 => 1433920016,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1233523675577e21db91d27-49467534',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
		<div class="wrapper">
			<div class="padding100">
                <div class="reg-form-title">Please subscribe via PayPal</div>
                <div class="reg-form-sub-title">Your subscription has expired on 20/12/2014</div>
                <form class="paypal" action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
payments/paypal.html" method="post" id="paypal_form"> 

                    <input type="hidden" name="cmd" value="_xclick" /> 
                    <input type="hidden" name="no_note" value="1" />
                    <input type="hidden" name="lc" value="US" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                    <input type="hidden" name="first_name" 	id="first_name"  value=""  />
                    <input type="hidden" name="payer_email" id="payer_email" value=""  />

                    <div class="align-center">
                        <input type="submit" value="<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['expair']){?>Renew Subscription<?php }else{ ?>Subscribe<?php }?>" class="btn-style btn-renew-subscr"/>
                    </div>

                </form>		
			</div>
		</div>
	</div>
	
	<script>
		$(document).ready(function($) {
			$('.bxslider').bxSlider({
				pager:false,
				mode:"fade"
			});
		});
	</script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	