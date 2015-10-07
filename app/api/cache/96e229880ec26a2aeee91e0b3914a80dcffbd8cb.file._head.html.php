<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 11:26:17
         compiled from "/media/WWW/public/PrimerTalent/templates/_head.html" */ ?>
<?php /*%%SmartyHeaderCode:1557569135559e30297974b2-96564680%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96e229880ec26a2aeee91e0b3914a80dcffbd8cb' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/templates/_head.html',
      1 => 1436429520,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1557569135559e30297974b2-96564680',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<head>
	<title><?php echo (($tmp = @$_smarty_tpl->getVariable('og')->value['title'])===null||$tmp==='' ? $_smarty_tpl->getVariable('api')->value['title'] : $tmp);?>
</title>
	<meta name="description" content="<?php echo (($tmp = @$_smarty_tpl->getVariable('og')->value['description'])===null||$tmp==='' ? $_smarty_tpl->getVariable('api')->value['description'] : $tmp);?>
"/>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta property="og:title" content="<?php echo (($tmp = @$_smarty_tpl->getVariable('og')->value['title'])===null||$tmp==='' ? $_smarty_tpl->getVariable('api')->value['title'] : $tmp);?>
" /> 
    <meta property="og:type" content="<?php echo (($tmp = @$_smarty_tpl->getVariable('og')->value['type'])===null||$tmp==='' ? 'website' : $tmp);?>
" />
    <meta property="og:url" content="<?php echo (($tmp = @$_smarty_tpl->getVariable('og')->value['url'])===null||$tmp==='' ? $_smarty_tpl->getVariable('api')->value['local'] : $tmp);?>
" />
    <?php if ($_smarty_tpl->getVariable('api')->value['logo']||$_smarty_tpl->getVariable('og')->value['image']){?><meta property="og:image" content="<?php if ($_smarty_tpl->getVariable('og')->value['image']){?><?php echo $_smarty_tpl->getVariable('og')->value['image'];?>
<?php }else{ ?><?php echo $_smarty_tpl->getVariable('api')->value['local'];?>
<?php echo $_smarty_tpl->getVariable('api')->value['logo'];?>
<?php }?>" /><?php }?>
    
    <!--<?php if ($_smarty_tpl->getVariable('_BROWSER')->value['name']=='ie'&&$_smarty_tpl->getVariable('_BROWSER')->value['version']<=8){?><meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" /><?php }?>-->
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/bootstrap.min.css?v=1.0"> 
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/jquery-ui.css?v=1.0"> 
    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/jquery.raty.css?v=1.0"> 
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/jquery.bxslider.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/lightGallery.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/eventCalendar.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/eventCalendar_theme_responsive.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/bootstrap-select.css?v=1.0">
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/jquery.fileupload-ui.css" />    
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/jquery.mCustomScrollbar.css" />    
	<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
css/style.css?t=<?php echo time();?>
">
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/jquery.bxslider.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/lightGallery.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/jquery.eventCalendar.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/bootstrap-select.min.js?t=<?php echo time();?>
"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/jquery.raty.js"></script>
	
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/upload_js/jquery.ui.widget.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/upload_js/jquery.iframe-transport.js"></script>
	<script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/upload_js/jquery.fileupload.js"></script>
	
    <script type="text/javascript" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
js/project.js?t=<?php echo time();?>
"></script>
</head>