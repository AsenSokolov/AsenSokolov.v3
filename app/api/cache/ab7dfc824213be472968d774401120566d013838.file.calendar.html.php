<?php /* Smarty version Smarty-3.0.6, created on 2015-05-14 07:20:45
         compiled from "/media/WWW/public/PrimerTalent/modules/company/calendar.html" */ ?>
<?php /*%%SmartyHeaderCode:9065942585554850d6958a8-68534342%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab7dfc824213be472968d774401120566d013838' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/company/calendar.html',
      1 => 1431602444,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9065942585554850d6958a8-68534342',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/company/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
				<div class="pf-booking">
					<div id="event-calendar"></div>
				</div>
                <div class="clear"></div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#event-calendar").eventCalendar({
				eventsjson: '<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
json/events.json',
                dayNamesShort: [ 'S','M','T','W','T', 'F','S'],
				jsonDateFormat: 'human'  // 'YYYY-MM-DD HH:MM:SS'
			});
            $( "#from" ).datepicker({
              defaultDate: "+1w",
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