<?php /* Smarty version Smarty-3.0.6, created on 2015-07-24 15:26:49
         compiled from "/media/WWW/public/PrimerTalent//modules/profile/booking_talant.html" */ ?>
<?php /*%%SmartyHeaderCode:86112267355b22f09e56116-46179931%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e20892bc700c38e7b4f94bcc358e27af3e39c86' => 
    array (
      0 => '/media/WWW/public/PrimerTalent//modules/profile/booking_talant.html',
      1 => 1436429518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '86112267355b22f09e56116-46179931',
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
 / <?php echo $_smarty_tpl->tpl_vars['v']->value['company_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<span> / <?php echo $_smarty_tpl->tpl_vars['v']->value['company_name'];?>
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
                        <div class="pf-info-el">
                            Booking by: <span><?php echo $_smarty_tpl->getVariable('event')->value['company_name'];?>
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
						<?php if ($_smarty_tpl->getVariable('event')->value['status']==0){?>
						<div class="event-options">
							<a href="javascript:void(0);" title="Add To Calendar" class="btn-approve-booking btn-style" 
                               onclick="alertBox('confirm', 'Add this event to your calendar', 'confirmAction(1);')">
								<i class="elements"></i>
								<span class="text">Add to Calendar</span>
							</a>
							<a href="javascript:void(0);" title="Decline Booking" class="btn-decline-booking btn-style" 
                               onclick="alertBox('error-two-btns', 'Please confirm you decline event booking!', 'confirmAction(0);')">
								<i class="elements"></i>
								<span class="text">Decline Booking</span>
							</a>
						</div>
						<?php }elseif($_smarty_tpl->getVariable('event')->value['status']==1){?>
						<div class="event-options align-right">
							<a href="javascript:void(0);" title="Decline Booking" class="btn-decline-booking btn-style" 
                               class="btn-decline-booking btn-style" 
                               onclick="alertBox('error-two-btns', 'Please confirm you decline event booking!', 'confirmAction(0);')">
								<i class="elements"></i>
								<span class="text">Decline Booking</span>
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
</div>
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
		
		function newMsg(holder){
			var fild = $('#field-msg');
			fild.removeClass('field-error');
			if(fild.val() == '')
			{
				fild.addClass('field-error');
				return false;
			}
			holder.submit();
			return true;
		}
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
        
        /*  
            _actionType = 0 Decline Event;
            _actionType = 1 Add Event To Calendar;
        */

        function confirmAction(_actionType){
			var action = 2;
            if(_actionType == 1){
				var action = 1;
            }
			
			$.ajax({
                type: 'POST',
                url: prPath+'profile/booking/'+event_id+'.json',
                dataType: 'json',
                data: {'action':action,'event_id':event_id},
                headers: {ajax:1},
                success: function(r)
                {
                    if(r.success){
                        document.location.href=prPath+'profile/booking/'+event_id+'.html';
                    }
                }
            });
        }
    </script>