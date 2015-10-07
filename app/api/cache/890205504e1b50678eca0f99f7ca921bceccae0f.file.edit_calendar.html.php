<?php /* Smarty version Smarty-3.0.6, created on 2015-06-08 16:20:03
         compiled from "/media/WWW/public/PrimerTalent/modules/profile/edit_calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:99288406557596835e14a9-38630973%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '890205504e1b50678eca0f99f7ca921bceccae0f' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/profile/edit_calendar.html',
      1 => 1433769487,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '99288406557596835e14a9-38630973',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/profile/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
				<div id="booking-list-cont">
					<div class="head-section align-left">Your Events</div>
                    <div id="booking-list">
                        <ul>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('events')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
                            <li <?php if ($_smarty_tpl->getVariable('event')->value['id']==$_smarty_tpl->tpl_vars['v']->value['id']){?>class="selected"<?php }?>>
                                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/edit_calendar/<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
.html" title="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</a>
                                <span class="arrow"></span>
                            </li>
                            <?php }} else { ?>
							<li>no events</li>
							<?php } ?>
                        </ul>
                    </div>
                    <a href="<?php if ($_smarty_tpl->getVariable('event')->value){?><?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
/profile/edit_calendar.html<?php }else{ ?>#<?php }?>" title="Add New Event" class="btn-add-event">
                        <i class="elements"></i>
                        <span>Add New Event</span>
                    </a>
				</div>
                <div class="edit-event-form"> 
                    <div class="head-section align-left"><?php if ($_smarty_tpl->getVariable('event')->value){?>Edit Event<?php }else{ ?>Add New Event<?php }?></div>
                    <form id="formReg" method="POST" class="form-edit" onsubmit="submitEvent(this); return false;">
                        <div class="row">
                            <label>Date:</label>
                            <div class="date-range">
                                <label for="from">from</label>
                                <input value="<?php echo $_smarty_tpl->getVariable('event')->value['date_from'];?>
" type="text" id="date_from" name="date_from" class="reg-field" readonly>
                                <label for="to">to</label>
                                <input value="<?php echo $_smarty_tpl->getVariable('event')->value['date_to'];?>
" type="text" id="date_to" name="date_to" class="reg-field" readonly>
                            </div>
                        </div>
                        <div class="row">
                            <label>Event Name:</label>
                            <input type="text" value="<?php echo $_smarty_tpl->getVariable('event')->value['name'];?>
" name="name" id="name" class="reg-field" autocomplete="off"/>
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

						<?php if ($_smarty_tpl->getVariable('event')->value['id']){?><input type="hidden" value="<?php echo $_smarty_tpl->getVariable('event')->value['id'];?>
" name="event_id" /><?php }?>
						
                        <div class="form-submit">
                            <label></label>
                            <input type="submit" value="Save" class="btn-submit btn-submit-style"/>
                        </div>
                    </form>
                </div>
                <div class="clear"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
            $("#booking-list").mCustomScrollbar({
                 theme:"minimal"
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
					return [ array.indexOf(string) == -1 ]
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
					return [ array.indexOf(string) == -1 ]
			  }
            });
		});
		
		function submitEvent(holder)
		{
			var args = {};
			
			$('.location_id.sl-box, .location_id.sl-box button ').removeClass('field-error');
			$(holder).find('textarea,input,select').each(function(){
				args[this.name] = this.value;
				$(this).removeClass('field-error');
			});
			
			$.ajax({
				type: 'POST',
				url: prPath+'profile/edit_calendar.html',
				dataType: 'json',
				data: args,
				headers: {ajax:1},
				success: function(r)
				{
					if(r.error){
						$.each( r.error, function( k, v ) {
							if(v == 'location_id')	$('.location_id.sl-box, .location_id.sl-box button ').addClass('field-error');
							
							if(v == 'date_exist'){
								alert('Already Booked');
							}
								
							$('#'+v).addClass('field-error');
						});
					}
					
					if(r.success){
						document.location.href=prPath+'profile/edit_calendar.html';
					}
				}
			});
		}
    </script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	