<?php /* Smarty version Smarty-3.0.6, created on 2015-06-18 17:12:52
         compiled from "/media/WWW/public/PrimerTalent/modules/talent/calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:7122630925582d1e4bdc2b7-27935236%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c3a2e4c0cdeab252c01ba7595ddc55a72ef15802' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/talent/calendar.html',
      1 => 1434636771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7122630925582d1e4bdc2b7-27935236',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<!--
    <div id="PopUps" class="dNone">
        <div class="confirm-plate popup-plate dNone">
            <div class="icon elements"></div>
            <p class="pop-info">The Booking is sent to the talent</p>
            <div class="popup-btns">
                <a href="javascript:void(0);" title="Confirm" class="btn-approve-booking btn-style" onclick="closePopUps();">
                    <span class="text">OK</span>
                </a>
            </div>
        </div>
        <div class="decline-plate popup-plate dNone">
            <div class="icon elements"></div>
            <p class="pop-info">This talent is already booked for this date!</p>
            <div class="popup-btns">
                <a href="javascript:void(0);" title="Confirm" class="btn-approve-booking btn-style" onclick="closePopUps();">
                    <span class="text">OK</span>
                </a>
            </div>
        </div>
    </div>
-->
	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/talent/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
				<div class="pf-booking">
					<div id="event-calendar"></div>
				</div>
				<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==2){?>
                <div class="booking-form"> 
                    <div class="head-section align-left">Book This Talent</div>
                    <form id="formReg" method="POST" class="form-edit" onsubmit="bookTalent(this); return false;">
                        <div class="row">
                            <label>Date:</label>
                            <div class="date-range">
                                <label for="date_from">from</label>
                                <input type="text" id="date_from" name="date_from" class="reg-field">
                                <label for="date_to">to</label>
                                <input type="text" id="date_to" name="date_to" class="reg-field">
                            </div>
                        </div>
                        <div class="row">
                            <label>Event Name:</label>
                            <input type="text" value="" name="name" id="name" class="reg-field" autocomplete="off"/>
                        </div>
						
						<div class="row">
							<label style="float:left;">Location:</label>
							<select class="location_id sl-box" name="location_id" id="location_id">
								<option value=""></option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('location')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('event')->value['location_id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['country'];?>
</option>
								<?php }} ?>
							</select>
                        </div>
                        
                        <div class="row">
                            <label>Budget:</label>
                            <input type="text" value="" name="budget" id="budget" class="reg-field" autocomplete="off"/>
                        </div>
                        
                        <div class="row">
                            <label>Included:</label>
                            <div class="included-options">
                                <div class="included-option-item">
                                    <input id="checkbox-input-1" type="checkbox" name="flights" value="1">
                                    <label for="checkbox-input-1">
                                        <span class="check-cyrcle">
                                            <i></i>
                                        </span>
                                        <span>Flights</span>
                                    </label>
                                </div>
                                
                                <div class="included-option-item">
                                    <input id="checkbox-input-2" type="checkbox" name="accomodation" value="1">
                                    <label for="checkbox-input-2">
                                        <span class="check-cyrcle">
                                            <i></i>
                                        </span>
                                        <span>Accomodation</span>
                                    </label>
                                </div>
                                
                                <div class="included-option-item">
                                    <input id="checkbox-input-3" type="checkbox" name="allowances" value="1">
                                    <label for="checkbox-input-3">
                                        <span class="check-cyrcle">
                                            <i></i>
                                        </span>
                                        <span>Allowances</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row textarea-cont">
                            <label>Notes:</label>
                            <textarea id="notes" name="notes" class="reg-field"></textarea>
                        </div>
                        
                        <div class="form-submit">
                            <label></label>
                            <input type="submit" value="Submit Booking" class="btn-submit btn-submit-style"/>
                        </div>
                        
                        <div class="error-msg dNone">
                            Error Message
                        </div>
                        
                        <p class="booking-form-descr">You will be notified with a message as soon as the talent responds to your request.</p>
                    </form>
                </div>
				<?php }?>
                <div class="clear"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		var user_id = <?php echo $_smarty_tpl->getVariable('user_id')->value;?>
;
		$(document).ready(function() {
			$("#event-calendar").eventCalendar({
				eventsjson: '<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
ajax/getEvents.json?pid='+user_id,
                dayNamesShort: [ 'S','M','T','W','T', 'F','S'],
				jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
			});
			
			var array = [<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('dates')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>'<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
',<?php }} ?>];
			
            $( "#date_from" ).datepicker({
				defaultDate: "+1w",
				changeMonth: true,
				numberOfMonths: 1,
				dateFormat: 'yy-mm-dd',
                minDate: 0,
				onClose: function( selectedDate ) {
				    $( "#date_to" ).datepicker( "option", "minDate", selectedDate );
				},
			  
				beforeShowDay: function(date){
					var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
					return [ array.indexOf(string) == -1 ];
				}
            });
			
            $( "#date_to" ).datepicker({
              defaultDate: "+1w",
              changeMonth: true,
              numberOfMonths: 1,
              dateFormat: 'yy-mm-dd',
              onClose: function( selectedDate ) {
                $( "#date_from" ).datepicker( "option", "maxDate", selectedDate );
              },
			  beforeShowDay: function(date){
					var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
					return [ array.indexOf(string) == -1 ];
			  }
            });
		});
        
		function bookTalent(holder)
		{
			var args = {};
				
			$('.location_id.sl-box, .location_id.sl-box button ').removeClass('field-error');
			$(holder).find('textarea,input,select').each(function(){
				args[this.name] = this.value;
				$(this).removeClass('field-error');
			});
			args['user_id'] = user_id;
			
			$.ajax({
				type: 'POST',
				url: prPath+'ajax/bookTalent.html',
				dataType: 'json',
				data: args,
				headers: {ajax:1},
				success: function(r)
				{
					if(r.error){
						$.each( r.error, function( k, v ) {
							if(v == 'location_id')	$('.location_id.sl-box, .location_id.sl-box button ').addClass('field-error');
							
							if(v == 'date_exist'){
                                alertBox('error', 'This talent is already booked for this date!');
							}
								
							$('#'+v).addClass('field-error');
						});
					}
					
					if(r.success){
                        alertBox('confirm-one-btn', 'The Booking is sent to the talent!');
                        document.getElementById("formReg").reset();
                        
						//document.location.href=prPath+'/talent/calendar/'+user_id+'.html';
					}
				}
			});
		}
    </script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	