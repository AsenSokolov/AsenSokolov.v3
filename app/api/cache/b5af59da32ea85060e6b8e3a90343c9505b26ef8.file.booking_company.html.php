<?php /* Smarty version Smarty-3.0.6, created on 2015-06-18 16:45:48
         compiled from "/media/WWW/public/PrimerTalent//modules/profile/booking_company.html" */ ?>
<?php /*%%SmartyHeaderCode:4680081955582cb8c5b8b65-83996325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5af59da32ea85060e6b8e3a90343c9505b26ef8' => 
    array (
      0 => '/media/WWW/public/PrimerTalent//modules/profile/booking_company.html',
      1 => 1434635146,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4680081955582cb8c5b8b65-83996325',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/profile/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
				<?php if ($_smarty_tpl->getVariable('events')->value){?>
				<div id="booking-list-cont">
					<div class="head-section align-left">Booking Communication</div>
                    <div id="booking-list" class="booking-list-conversation">
                        <ul>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <li <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('event_id')->value){?>class="selected"<?php }?>>
                                <span class="cyrcle"></span>
                                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/booking/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['v']->value['talent_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<span> / <?php echo $_smarty_tpl->tpl_vars['v']->value['talent_name'];?>
</span></a>
								<?php $_smarty_tpl->tpl_vars['status'] = new Smarty_variable($_smarty_tpl->tpl_vars['v']->value['status']+1, null, null);?>
                                <span class="booking-status-<?php echo $_smarty_tpl->getVariable('status')->value;?>
 booking-status"></span>
                                <span class="arrow"></span>
                            </li>
                           <?php }} ?>
                        </ul>
                    </div>
				</div>
                <div class="edit-event-form"> 
					<?php if ($_smarty_tpl->getVariable('event')->value){?>
                    <div class="selected-event-info">
						<?php $_smarty_tpl->tpl_vars['status_event'] = new Smarty_variable($_smarty_tpl->getVariable('event')->value['status']+1, null, null);?>
                        <div class="selected-booking-status booking-status-<?php echo $_smarty_tpl->getVariable('status_event')->value;?>
">
                            <span class="cyrcle"></span>
                            <span class="text">Status: 
								<?php if ($_smarty_tpl->getVariable('event')->value['status']==0){?>In progress<?php }?>
								<?php if ($_smarty_tpl->getVariable('event')->value['status']==1){?><?php if ($_smarty_tpl->getVariable('event')->value['completed']){?>Completed<?php }else{ ?>Approved<?php }?><?php }?>
								<?php if ($_smarty_tpl->getVariable('event')->value['status']==2){?>Canceled<?php }?>
							</span>
                        </div>
                        <div class="head-section align-left"><?php echo $_smarty_tpl->getVariable('event')->value['name'];?>
</div>
                        
                        <?php if ($_smarty_tpl->getVariable('event')->value['can_rate']||$_smarty_tpl->getVariable('event')->value['alreadyRate']){?>
                        <div id="rate-talent-msg">
                            <?php if (!$_smarty_tpl->getVariable('event')->value['alreadyRate']){?>
                            <p>Please rate how satisfied were <br/>you with the talent performance!</p>
							<div id="rrplaserbsdv">
                            
							 <a href="javascript:void(0);" class="btn-style" onclick="alertBox('rates', 'How satisfied were you with the<br/> talent performance?', 'rateThisTalent();')" id="btnRateTalent">Rate Talent</a>
                            </div>
							<?php }else{ ?>
							<p>You already rate this talent.</p>
							<?php }?>
							
                        </div>
                        <?php }?>
                        <div class="pf-info-el">
                            Booking: <span><?php echo $_smarty_tpl->getVariable('event')->value['talent_name'];?>
</span>
                        </div>
                        <div class="pf-info-el">
                            Talent: <span><?php echo $_smarty_tpl->getVariable('event')->value['act_name'];?>
</span> Group: <span><?php echo $_smarty_tpl->getVariable('event')->value['group_type'];?>
</span>
                        </div>
                        <div class="pf-info-el">
                            Nationality: <span><?php echo $_smarty_tpl->getVariable('event')->value['nationality'];?>
</span> Residence: <span><?php echo $_smarty_tpl->getVariable('event')->value['residence'];?>
</span>
                        </div>
                        <div class="pf-info-el">
                            Booking dates: from <span><?php echo $_smarty_tpl->getVariable('event')->value['date_from'];?>
</span> to <span><?php echo $_smarty_tpl->getVariable('event')->value['date_to'];?>
</span>
                        </div>
                        <div class="pf-info-el">
                            Event Location: <span><?php echo $_smarty_tpl->getVariable('event')->value['location'];?>
</span>
                        </div>
                        <div class="pf-info-el">
                            Budget: <span><?php echo $_smarty_tpl->getVariable('event')->value['budget'];?>
</span>
                        </div>
                        <div class="pf-info-el">
                            Included: <span>
							<?php $_smarty_tpl->tpl_vars['Included'] = new Smarty_variable('', null, null);?>
							<?php if ($_smarty_tpl->getVariable('event')->value['flights']){?>		<?php $_smarty_tpl->tpl_vars['Included'] = new Smarty_variable(($_smarty_tpl->getVariable('Included')->value)." Flights, ", null, null);?>		<?php }?> 
							<?php if ($_smarty_tpl->getVariable('event')->value['accomodation']){?>	<?php $_smarty_tpl->tpl_vars['Included'] = new Smarty_variable(($_smarty_tpl->getVariable('Included')->value)." Accomodation, ", null, null);?>	<?php }?> 
							<?php if ($_smarty_tpl->getVariable('event')->value['allowances']){?>		<?php $_smarty_tpl->tpl_vars['Included'] = new Smarty_variable(($_smarty_tpl->getVariable('Included')->value)." Allowances, ", null, null);?>		<?php }?>
							
							<?php echo substr($_smarty_tpl->getVariable('Included')->value,0,-2);?>

							</span>
                        </div>

                        <div class="pf-info-el">
                            Notes: <span><?php echo $_smarty_tpl->getVariable('event')->value['notes'];?>
</span>
                        </div>
                    </div>

					<?php if (strtotime($_smarty_tpl->getVariable('event')->value['date_to'])>time()){?>
						<?php if ($_smarty_tpl->getVariable('event')->value['status']!=2){?>
						<div class="event-options align-right">
							<a href="javascript:void(0);" title="Cancel Booking" class="btn-decline-booking btn-style" onclick="alertBox('error-two-btns','Please confirm you cancel the booking!', 'confirmAction(0);');">
								<i class="elements"></i>
								<span class="text">Cancel Booking</span>
							</a>
						</div>
						<?php }?>
					<?php }?>
					
					<?php if ($_smarty_tpl->getVariable('event')->value['status']!=2){?>
                    <div class="event-corresponding">
                        <div class="head-section align-left"><?php echo $_smarty_tpl->getVariable('event')->value['name'];?>
</div>
                        <div class="msg-list">
                            <ul>
							
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('msg')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                                <li>
                                    <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->tpl_vars['v']->value['pic']){?>uploads/icon/<?php echo $_smarty_tpl->tpl_vars['v']->value['pic'];?>
<?php }elseif($_smarty_tpl->tpl_vars['v']->value['user_type']==2){?>/img/default-company-thumb.png<?php }else{ ?>img/default-user-thumb.png<?php }?>"/>
                                    <div class="msg-cont">
                                        <div class="head-section align-left"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
 <span>- <?php echo $_smarty_tpl->tpl_vars['v']->value['date'];?>
</span></div>
                                        <div class="msg">
                                            <?php echo $_smarty_tpl->tpl_vars['v']->value['msg'];?>

                                        </div>
                                    </div>
                                </li>
								<?php }} else { ?>
								<li>
								You can start the conversation below!
                                </li>
                               <?php } ?>
                            </ul>
                        </div>
                        <div class="new-message" id="new-message">
                            <img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->getVariable('head_title')->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->getVariable('head_title')->value['pic'];?>
<?php }else{ ?>/img/user-default.png<?php }?>"/>
                            <div class="msg-cont">
                                <div class="head-section align-left"><?php echo $_smarty_tpl->getVariable('head_title')->value['name'];?>
</div>
                                <div class="msg">
                                    <form action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/booking/<?php echo $_smarty_tpl->getVariable('event_id')->value;?>
.html#new-message" onsubmit="newMsg(this); return false;" method="post">
                                        <textarea name="msg" placeholder="Write your message here…" class="reg-field" id="field-msg"></textarea>
                                        <input id="submitMSG" class="elements" type="submit" value=""></input>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
					<?php }?>
				<?php }else{ ?>
                    <div class="please-select-event-msg">
                        Please select event<br/>
                        from the list!    
                    </div>
				<?php }?>	
                </div>
				
				<?php }else{ ?>
                    <div class="empty-page">
                        There is no booking communication<br/> 
                        for the moment.
                    </div>
				<?php }?>
                <div class="clear"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var event_id = <?php echo $_smarty_tpl->getVariable('event_id')->value;?>
;
		
		$(document).ready(function() {
            $("#booking-list").mCustomScrollbar({
                 theme:"minimal"
            });
            
            $("#field-msg")
                .click(function() {
                    $("#field-msg").css("height", "150px");
                })
                .blur(function() {
                    $("#field-msg").css("height", "32px");
            }); 
            
		});
		
        function confirmAction(_actionType){
            $.ajax({
				type: 'POST',
				url: prPath+'profile/booking/'+event_id+'.json',
				dataType: 'json',
				data: {'action':2,'event_id':event_id},
				headers: {ajax:1},
				success: function(r)
				{
					if(r.success){
						document.location.href=prPath+'profile/booking/'+event_id+'.html';
					}
				}
            });
            closeAlert();
        }
        
		function rateThisTalent(){
			$('#errorRating').addClass('dNone');
			var score = $("input[name='score']").val();
			if(score>0)
			{
				$.ajax({
					type: 'POST',
					url: prPath+'profile/rateTalent/'+event_id+'.json',
					dataType: 'json',
					data: {'score':score,'event_id':event_id},
					headers: {ajax:1},
					success: function(r)
					{
						if(r.success){
							$('#rrplaserbsdv').empty().html('You already rate this talent.');
							closeAlert();
						}
					}
				});
			}else{
				$('#errorRating').removeClass('dNone');
			}
		}
        
    </script>