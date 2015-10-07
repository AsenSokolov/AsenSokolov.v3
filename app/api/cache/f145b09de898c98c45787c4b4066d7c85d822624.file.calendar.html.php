<?php /* Smarty version Smarty-3.0.6, created on 2015-06-08 16:19:56
         compiled from "/media/WWW/public/PrimerTalent/modules/profile/calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:3405589425575967c850761-37268417%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f145b09de898c98c45787c4b4066d7c85d822624' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/profile/calendar.html',
      1 => 1433769238,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3405589425575967c850761-37268417',
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
				<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['type']==1){?>
                <a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
profile/edit_calendar.html" class="btn-edit">
                    <span class="elements"></span>
                    <span class="text">Edit Schedule</span>
                </a>
				<?php }?>
				<div class="pf-booking">
					<div id="event-calendar"></div>
				</div>
                <div class="clear"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
            var dateToday = new Date(); 
			$("#event-calendar").eventCalendar({
				eventsjson: '<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
ajax/getProfileEvents.json',
                dayNamesShort: [ 'S','M','T','W','T', 'F','S' ],
				jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
			});
        
            
            $( "#from" ).datepicker({
                defaultDate: "+1w",
                minDate: 0,
                changeMonth: true,
                numberOfMonths: 1,
                dateFormat: 'dd/mm',
                onClose: function( selectedDate ) {
                    $( "#to" ).datepicker( "option", "minDate", selectedDate );
                }
            });
            $( "#to" ).datepicker({
                defaultDate: "+1w",
                changeMonth: true,
                numberOfMonths: 1,
                dateFormat: 'dd/mm',
                onClose: function( selectedDate ) {
                    $( "#from" ).datepicker( "option", "maxDate", selectedDate );
                }
            });
		});
    </script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	