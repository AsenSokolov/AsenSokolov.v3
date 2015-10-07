<?php /* Smarty version Smarty-3.0.6, created on 2015-06-23 15:42:23
         compiled from "/media/WWW/public/PrimerTalent/modules/support/faq.html" */ ?>
<?php /*%%SmartyHeaderCode:4615849755589542fb5acb9-94095396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7232919d475f20301983bdc58cc5e466657030ff' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/support/faq.html',
      1 => 1435063331,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4615849755589542fb5acb9-94095396',
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
                
            </div>
        </div>
		<div class="wrapper">
            <div class="static-pages">
                <div class="head-section align-left">
                    Help and FAQ
                </div>
                <div class="help-form">
                    <?php if (!$_smarty_tpl->getVariable('SESSION_USER')->value){?>
                    
                    <div class="login-to-use-contact-form">
                        <p>Please login to use contact form</p>
                        <a href="javascript:void(0);" class="btn-style" id="btn-go-to-login">Login</a>
                    </div>
                    
                    <?php }?>
                    <div class="contact-form <?php if (!$_smarty_tpl->getVariable('SESSION_USER')->value){?>not-active<?php }?>" >
                        <form id="formContact" method="post" action="" <?php if ($_smarty_tpl->getVariable('SESSION_USER')->value){?>onsubmit="sendContact(); return false;"<?php }?>>  
                            <div class="contact-field-cont">
                                <input type="text" name="topic" id="topic" class="reg-field" autocomplete="off" placeholder="Topic"/>
                            </div>
                            
                            <div class="contact-field-cont">
                                <textarea id="contact_msg" name="contact_msg" placeholder="Your Message" class="reg-field"></textarea>
                            </div>
                            
                            <div class="error-msg dNone">
                                Error Message
                            </div>
                            
                            <div class="form-submit">
                                <input type="submit" value="Send" class="btn-submit btn-submit-style"/>
                            </div>
                        </form>
                    </div> 
                </div>
                <div class="head-section align-left">
                    Frequently Asked Questions
                </div>
                
                <div class="faq-list">
                    <ul>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">What is Premiere Talent?</span>
                            </a>
                            <div class="faq-answer dNone">
                                Premiere Talent offers the future of Talent Booking for both Talent &amp; Booker, a simple &amp; powerful tool to allow time to be dedicated to the most important element the result. The platform provides specific filters to your inquiries but also provides a intelligent &amp; creative solution if you have no specific requirements &amp; are searching for ideas. 
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">How I can upload info, pictures or video?</span>
                            </a>
                            <div class="faq-answer dNone">
                                It`s very easy, press the button “Edit Media”from the Media section on your profile, then select videos or pictures and then upload or add.
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">How much does it cost?</span>
                            </a>
                            <div class="faq-answer dNone">
                                An year subscription for a Talent account is 150 Euro, for a company is 500 Euro.
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">How do I change my password?</span>
                            </a>
                            <div class="faq-answer dNone">
                                Go to “Account Settings ” and write your old and new password and save it.
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">Forgot your password?</span>
                            </a>
                            <div class="faq-answer dNone">
                                Press “forgot password” button and then fill your mail and submit it.
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">How I can get in touch with talent?</span>
                            </a>
                            <div class="faq-answer dNone">
                                You can do it after you have submited a booking request to a talent and then go to your bookings section of your profile, where after selecting the Bookings you will see all of your booking info and you can message the talent.
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">Is the booking talent free?</span>
                            </a>
                            <div class="faq-answer dNone">
                                Yes, there is no fee for the website.
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">How do I get confirmation for booking?</span>
                            </a>
                            <div class="faq-answer dNone">
                                You will receive it on your e-mail and as a notification in the Premiere Talent.eu
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">How I can edit my schedule?</span>
                            </a>
                            <div class="faq-answer dNone">
                                You can do this from the Calendar section in your profile.
                            </div>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="btn-faq">
                                <span class="faq-arrow"></span>
                                <span class="faq-question">How I can get rating?</span>
                            </a>
                            <div class="faq-answer dNone">
                                You can be rated only from a company which have booked you and only after the event.
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
	</div>

	<script>
		$(document).ready(function($) {
            $("#btn-go-to-login").click(function(){
                $('body, html').scrollTop(0);
                enterToWebsite();
            });
			$(".faq-list .btn-faq").click(function(){
                var selectedItem = $(this).parent().children(".faq-answer");
                
                if(selectedItem.hasClass( "dNone" )){
                    $(this).parent().addClass("faq-selected");
                    selectedItem.removeClass("dNone");
                }else{
                    $(this).parent().removeClass("faq-selected");
                    selectedItem.addClass("dNone");   
                }
            });
		});
		<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value){?>
		
			function sendContact(){
				var args = {};
				var holder = $('#formContact');
				
				holder.find('textarea,input').each(function(){
					args[this.name] = this.value;
					$(this).removeClass('field-error');
				});
				
				$.ajax({
					type: 'POST',
					url: prPath+'ajax/sendContact.json',
					dataType: 'json',
					data: args,
					headers: {ajax:1},
					success: function(r)
					{
						if(r.error){
							$.each( r.error, function( key, value ) {
								$('#'+value).addClass('field-error');
							});
							alertBox("error", "Please fill your topic and your message to contact us!");
						}
						if(r.success){
							alertBox("confirm-one-btn", "Your message is sent successfully!");
						}
					}
				});
			
				return false;
			}
		
		<?php }?>
	</script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	