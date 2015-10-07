<?php /* Smarty version Smarty-3.0.6, created on 2015-06-22 10:05:36
         compiled from "/media/WWW/public/PrimerTalent/modules/register/init.html" */ ?>
<?php /*%%SmartyHeaderCode:557062925587b3c0b89573-06616446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '42d66f344d34534841efa04428fa4bdc431d5370' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/register/init.html',
      1 => 1434956650,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '557062925587b3c0b89573-06616446',
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
                    <h2>Talent or Manager</h2>
                    <p>Choose your profile type</p>
                </div>
                <div class="text-wrappers wrapper-right">
                    <div class="bulet-point-1 bullet-points">
                        <i class="elements"></i>
                        <span>Book talents or get book as talent</span>
                    </div>
                    <div class="bulet-point-2 bullet-points">
                        <i class="elements"></i>
                        <span>Manage your calendar</span>
                    </div>
                    <div class="bulet-point-3 bullet-points">
                        <i class="elements"></i>
                        <span>Connect and chat with talents and managers</span>
                    </div>
                </div>
            </div>
        </div>
		<div class="wrapper">
            <div id="register">
                
                <div id="regType" class="filters-1">
                    <a href="javascript:void(0);" id="cTalent" data-type="1">Talent</a>
                    <a href="javascript:void(0);" id="cCompany" data-type="2">Company / Manager</a>
                </div>
                
                <div id="regForm">
                    <form id="formReg">
                        
                        <!-- REGISTRATION FORM -->
                        
                        <div id="mainRegForm">
                            <div class="reg-section reg-details">

                                <div id="show-select-type" class="head-section">
                                    Registrering as: <span>Select Type</span>
                                </div>
                                <div id="row-reg-1" class="row">
                                    <input type="text" value="" name="name" id="fName" class="reg-field" placeholder="Name"/>
                                </div>
                                <div id="row-reg-2" class="row">
                                    <input type="email" value="" name="email" id="email" class="reg-field" placeholder="Email"/>
                                </div>

                                <div id="row-reg-3" class="row">
                                    <input type="password" value="" name="password" id="password" class="reg-field" placeholder="Password"/>
                                    <input type="password" value="" name="repassword" id="repassword" class="reg-field" placeholder="Re-password"/>
                                </div>
                                <div class="clear"></div>
                                <div id="existEmail" class="dNone" title="This email already exist">This email already exist</div>
                            </div>
                        </div>
                        
                        <!-- REGISTRATION FORM END -->
                        
                        <input type="hidden" id="type" name="type" value="0"/>
                        
                        <div class="head-section">
                            Subscription Plan
                        </div>
                        
                        <div id="selected-play-price">
                            Select Type To See The Price
                        </div>
                        
                        <div class="form-submit">
                            <input type="button" value="Continue" id="nextForm" class="btn-submit btn-submit-style"/>
                        </div>
                        
                        <div class="paiment-option">
                            <p>Payment options via PayPal</p>
                            <i class="elements"></i>
                        </div>

                    </form>
                </div>
                
                <div id="regPay" class="dNone">
                    <form class="paypal" action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
payments/paypal.html" method="post" id="paypal_form"> 
                        
                        <div class="reg-form-title">Annual Subscription</div>
                        <div class="reg-form-sub-title">Please subscribe to complete your profile.</div>
                    
                        <input type="hidden" name="cmd" value="_xclick" /> 
                        <input type="hidden" name="no_note" value="1" />
                        <input type="hidden" name="lc" value="US" />
                        <input type="hidden" name="currency_code" value="EUR" />
                        <input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynow_LG.gif:NonHostedGuest" />
                        <input type="hidden" name="first_name" 	id="first_name"  value=""  />
                        <input type="hidden" name="payer_email" id="payer_email" value=""  />
                        
                        
                        <div class="form-submit">
                            <input type="submit" value="Subscribe" class="btn-submit"/>
                        </div>
                        
                    </form>
                </div>
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