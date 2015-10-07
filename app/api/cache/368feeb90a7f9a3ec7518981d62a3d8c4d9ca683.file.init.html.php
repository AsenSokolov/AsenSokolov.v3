<?php /* Smarty version Smarty-3.0.6, created on 2015-07-15 16:01:18
         compiled from "/media/WWW/public/PrimerTalent/modules/admin/init.html" */ ?>
<?php /*%%SmartyHeaderCode:151922991655a6599e7f3c85-78407392%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '368feeb90a7f9a3ec7518981d62a3d8c4d9ca683' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/admin/init.html',
      1 => 1436429515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '151922991655a6599e7f3c85-78407392',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("modules/admin/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>

	<!-- Content -->
    <div class="content">
    	<div class="title"><h5>Dashboard</h5></div>
		
		<!-- Statistics -->
        <div class="stats">
        	<ul>
                <li style="float:right;"><a href="#" class="count green" title=""><?php echo $_smarty_tpl->getVariable('count_talents')->value;?>
</a><span>Count of<br />talents</span></li>
				<li style="float:right;"><a href="#" class="count blue" title=""><?php echo $_smarty_tpl->getVariable('count_venue')->value;?>
</a><span>Count of<br />venue</span></li>                
				<li style="float:right;"><a href="#" class="count grey" title=""><?php echo $_smarty_tpl->getVariable('booking_all_time')->value;?>
</a><span>Bookings<br />to date</span></li>				
            </ul>
            <div class="fix"></div>
        </div>
        
		<!-- Calendar -->
        <div class="widget">
        	<div class="head"><h5 class="iDayCalendar">Schedule</h5></div>
            <div id="calendar_dash"></div>
        </div>
        
<script>	
	
	var event = new Array();
	<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('event')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
		var push = new Array();
		push['title'] = "Booked: <?php echo $_smarty_tpl->tpl_vars['row']->value['talent_name'];?>
\r\n by: <?php echo $_smarty_tpl->tpl_vars['row']->value['company_name'];?>
";
		push['start'] = new Date('<?php echo $_smarty_tpl->tpl_vars['row']->value['y'];?>
', ('<?php echo $_smarty_tpl->tpl_vars['row']->value['m'];?>
' - 1), '<?php echo $_smarty_tpl->tpl_vars['row']->value['d'];?>
');
		event.push( push );
	<?php }} ?>

	if(event)
	{
		$('#calendar_dash').fullCalendar({
			header: {
				left: 'prev,next',
				center: 'title',
				right:'',
			},
			height: 500,
			editable: true,
			events: event

		});
	}
</script>		
		
		
	</div>

<?php $_template = new Smarty_Internal_Template("modules/admin/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
