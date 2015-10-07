<?php /* Smarty version Smarty-3.0.6, created on 2015-07-09 13:31:36
         compiled from "/media/WWW/public/PrimerTalent/modules/company/media.html" */ ?>
<?php /*%%SmartyHeaderCode:1089192903559e4d88cdb1d7-99912805%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a17061c3d017b7bfbcf99b9c349e0dd1ff93f7' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/company/media.html',
      1 => 1436429516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1089192903559e4d88cdb1d7-99912805',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
<div class="clear"></div>
	<div id="Content">
        <?php $_template = new Smarty_Internal_Template("/modules/company/profile_head.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
		<div class="wrapper">
			<div class="profile">
				<div id="media-video" class="pf-media">
				    <div class="head-section align-left">Videos</div>	
                    <ul id="media-preview-video" class="pf-media-preview">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('media')->value[1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li data-src="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
							<a href="#">
								<span class="elements"></span>
								<img alt="" src="<?php echo $_smarty_tpl->tpl_vars['v']->value['thumb'];?>
">
							</a>
						</li>
                        <?php }} else { ?>
						<li>no video</li>
						<?php } ?>
					</ul>		
					<div class="clear"></div>
				</div>
                <div id="media-pictures" class="pf-media">
                    <div class="head-section align-left">Images</div>
                    <ul id="media-preview-pictures" class="pf-media-preview">
						<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('media')->value[2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<li data-src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
uploads/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
"> 
							<a href="#">
								<img alt="" src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
							</a> 
						</li>
						<?php }} else { ?>
						<li>no photo</li>
						<?php } ?>
					</ul>		
					<div class="clear"></div>
                </div>
                
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#media-preview-video").lightGallery();
			$("#media-preview-pictures").lightGallery();
		});
    </script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	