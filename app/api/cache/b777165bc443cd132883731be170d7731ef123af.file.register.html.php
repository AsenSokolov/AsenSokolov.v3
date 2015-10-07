<?php /* Smarty version Smarty-3.0.6, created on 2014-10-22 05:08:44
         compiled from "/media/WWW/public/PrimerTalent/modules/index/register.html" */ ?>
<?php /*%%SmartyHeaderCode:7142044965447741cbc41f9-95850444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b777165bc443cd132883731be170d7731ef123af' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/index/register.html',
      1 => 1413968902,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7142044965447741cbc41f9-95850444',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
		<div class="wrapper">
			
			
			<div id="regType" class="">
				<a href="javascript:void(0);" id="cTalent" 	data-type="1">Talent</a>
				<a href="javascript:void(0);" id="cCompany" data-type="2">Company</a>
			</div>
			<div id="regForm" class="dNone">
				<form id="formReg">
					<label>name</label>			- <input type="text" value="" name="fName" id="fName" /><br />
					<label>name</label>			- <input type="text" value="" name="lName" id="lName" /><br />
					<label>email</label>		- <input type="email" value="" name="email" id="email" /><br />
					<div id="existEmail" class="dNone">This email already exist</div>
					<label>password</label>		- <input type="password" value="" name="password" id="password" /><br />
					<label>re password</label>	- <input type="password" value="" name="repassword" id="repassword" /><br />
					<input type="hidden" id="type" name="type" value=""/>
					
					<input type="button" value="prev" id="prevType" /> 
					<input type="button" value="next" id="nextForm"/>
				</form>
			</div>
			<div id="regPay" class="dNone">
				<form class="paypal" action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
payments/paypal.html" method="post" id="paypal_form">    
					<input type="hidden" name="cmd" value="_xclick" /> 
					<input type="hidden" name="no_note" value="1" />
					<input type="hidden" name="lc" value="US" />
					<input type="hidden" name="currency_code" value="USD" />
					<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
					<input type="hidden" name="first_name" 	id="first_name"  value=""  />
					<input type="hidden" name="last_name" 	id="last_name"   value=""  />
					<input type="hidden" name="payer_email" id="payer_email" value=""  />
					<input type="submit"  value="Submit Payment"/>
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