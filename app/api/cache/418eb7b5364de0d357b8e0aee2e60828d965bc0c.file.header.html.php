<?php /* Smarty version Smarty-3.0.6, created on 2015-07-15 16:01:13
         compiled from "/media/WWW/public/PrimerTalent/modules/admin/header.html" */ ?>
<?php /*%%SmartyHeaderCode:79223779855a6599973ef51-81703646%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '418eb7b5364de0d357b8e0aee2e60828d965bc0c' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/admin/header.html',
      1 => 1436429515,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79223779855a6599973ef51-81703646',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="https://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Administration Area</title>

<link href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/admin/main.css" rel="stylesheet" type="text/css" />

<link href="https://fonts.googleapis.com/css?family=Cuprum" rel="stylesheet" type="text/css" />

<script src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery-1.4.4.js" type="text/javascript"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/spinner/jquery.mousewheel.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/spinner/ui.spinner.js"></script>

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script> 

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/fileManager/elfinder.min.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/wysiwyg/jquery.wysiwyg.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/wysiwyg/wysiwyg.image.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/wysiwyg/wysiwyg.link.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/wysiwyg/wysiwyg.table.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/flot/jquery.flot.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/flot/jquery.flot.pie.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/flot/excanvas.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/flot/jquery.flot.resize.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/dataTables/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/dataTables/colResizable.min.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/forms/forms.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/forms/autogrowtextarea.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/forms/autotab.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/forms/jquery.validationEngine-en.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/forms/jquery.validationEngine.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/forms/jquery.dualListBox.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/forms/jquery.filestyle.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/colorPicker/colorpicker.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/uploader/plupload.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/uploader/plupload.html5.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/uploader/plupload.html4.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/uploader/jquery.plupload.queue.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/ui/progress.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/ui/jquery.jgrowl.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/ui/jquery.tipsy.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/ui/jquery.alerts.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jBreadCrumb.1.1.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/cal.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery.smartWizard.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery.collapsible.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery.ToTop.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery.listnav.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery.sourcerer.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery.timeentry.min.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/jquery.prettyPhoto.js"></script>

<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/custom.js"></script>
<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/admin/main.js"></script>

</head>



</head>

<script>
	function displayCalendar(show,args)
	{
		args = decodeURIComponent(args);
		args = $.parseJSON(args);
		var event = new Array();
		$.each(args, function() {
			var push = new Array();
			push['title'] = "Booked by: "+this.name;
			push['start'] = new Date(this.y, (this.m - 1), this.d);
			event.push( push );
		});
		
		
		$("#agenda").css("display",show);
		$("#calendar").html("");
		if(event)
		{
			$('#calendar').fullCalendar({
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
	}
</script>

<body>
	<?php if ($_smarty_tpl->getVariable('admin')->value){?>
	
	<!-- PopUp Agenda -->
	<div id="agenda">
		<div>
			<a href="javascript:void(0);" onClick='displayCalendar("none","{}");false;' class="btn-close">
				<img width="20" alt="close" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/admin/icons/color/cross.png">
			</a>
			<!-- Calendar -->        
			<div class="widget">
				<div class="head"><h5 class="iDayCalendar">Schedule</h5></div>
				<div id="calendar"></div>
			</div>
		</div>
	</div>
	
	<!-- Top navigation bar -->
	<div id="topNav">
		<div class="fixed">
			<div class="wrapper">
				<div class="welcome"><a href="#" title=""><img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/admin/userPic.png" alt="" /></a><span>Hello, <?php echo $_smarty_tpl->getVariable('admin')->value['name'];?>
!</span></div>
				<div class="userNav">
					<ul>
						<li><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/logout.html" title=""><img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/admin/icons/topnav/logout.png" alt="" /><span>Logout</span></a></li>
					</ul>
				</div>
				<div class="fix"></div>
			</div>
		</div>
	</div>
		
	<!-- Main wrapper -->
	<div class="wrapper">
	
		<!-- Left navigation -->
		<div class="leftNav">
			<!-- LOGO -->
			<div id="logo" class="wrapper">
				<div class="logo"><a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/" title=""><img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
img/admin/loginLogo.png" alt="" /></a></div>
				<div class="fix"></div>
			</div>
			<ul id="menu">
			
				<li class="dash"><a class="<?php if ($_smarty_tpl->getVariable('button')->value==''){?> active<?php }?>" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin" title="" title=""><span>Dashboard</span></a></li>
				<li class="contacts"><a class="<?php if ($_smarty_tpl->getVariable('button')->value=='talents'){?> active<?php }?>" 	href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/talents.html" title=""><span>Talents</span></a></li>
				<li class="organizers"><a class="<?php if ($_smarty_tpl->getVariable('button')->value=='venue'){?> active<?php }?>" 	href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
admin/venue.html" title=""><span>Venue Organizers</span></a></li>
				
			</ul>
		</div>
	
   <?php }?>
	