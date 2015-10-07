<?php /* Smarty version Smarty-3.0.6, created on 2015-07-14 14:28:51
         compiled from "/media/WWW/public/PrimerTalent/modules/list_talent/init.html" */ ?>
<?php /*%%SmartyHeaderCode:11734953755a4f273938586-44612148%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '938574328ae439ab34116011d5df1dbb4a19ee94' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/list_talent/init.html',
      1 => 1436873324,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11734953755a4f273938586-44612148',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_capitalize')) include '/media/WWW/public/PrimerTalent/library/SMARTY/plugins/modifier.capitalize.php';
?><?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
		<form method="GET" action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_talent.html" id="ltf">
			<div id="header-image">
				<div class="header-image-wrapper">
					<div id="search-field-form">
						<div class="fields-cont">
							<input type="text" name="search" class="search-field-style" placeholder="Search..." value="<?php echo $_smarty_tpl->getVariable('search')->value;?>
"/>
							<input type="submit" class="btn-search-submit elements" value=""/>
						</div>
					</div>
				</div>
			</div>
			<div class="wrapper">
				<div id="home-talents">
					<div class="filters-1">
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_talent.html" class="filters-1-select">Discover Talents</a>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_company.html">Event Manager</a>
					</div>
					
						
						<div class="search_form">
							<select class="genre sl-box" name="genre" id="genre" onchange="list_talent(1,$('#ltf')); getPerformance(this.value); ">
								<option value="">Genre</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('genre')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('genre_id')->value){?>selected<?php }?>><?php echo smarty_modifier_capitalize(((mb_detect_encoding($_smarty_tpl->tpl_vars['v']->value['name'], 'UTF-8, ISO-8859-1') === 'UTF-8') ? mb_strtolower($_smarty_tpl->tpl_vars['v']->value['name'],SMARTY_RESOURCE_CHAR_SET) : strtolower($_smarty_tpl->tpl_vars['v']->value['name'])));?>
</option>
								<?php }} ?>
							</select>
							
							<select class="performance sl-box sl-box1" name="performance" id="performance_type" onchange="list_talent(1,$('#ltf'));">
								<option value="">Performance type</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('performance_act')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
									<optgroup label="<?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
">
									<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k2'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value['act']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value){
 $_smarty_tpl->tpl_vars['k2']->value = $_smarty_tpl->tpl_vars['v2']->key;
?>
										<option value='<?php echo $_smarty_tpl->tpl_vars['v2']->value['id'];?>
' <?php if ($_smarty_tpl->getVariable('performance_act_id')->value==$_smarty_tpl->tpl_vars['v2']->value['id']){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v2']->value['name'];?>
</option>
									<?php }} ?>
									</optgroup>
								<?php }} ?>
							</select>
							
							<select class="business-type sl-box" name="location" id="location" onchange="list_talent(1,$('#ltf'));">
								<option value="">Residency</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('location')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('location_id')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['country'];?>
</option>
								<?php }} ?>
							</select>
							
							<select class="business-type sl-box" name="nationality" id="nationality" onchange="list_talent(1,$('#ltf'));">
								<option value="">Nationality</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('nationality')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('nationality_id')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['nationality'];?>
</option>
								<?php }} ?>
							</select>
							
							<select class="group sl-box" name="group" id="group" onchange="list_talent(1,$('#ltf'));">
								<option value="">group type</option>
								<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('group_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('group_id')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
								<?php }} ?>
							</select>
							
							<!--<input type="submit" name="submit" value="submit" class=/>-->
						</div>
						
					
					
					
					<div class="talent-results">
					
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('data')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['id']==$_smarty_tpl->tpl_vars['row']->value['id']){?>profile<?php }else{ ?>talent/profile/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
.html<?php }?>" class="artist-preview">
							<img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
<?php }else{ ?>img/artist.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" width="150" height="150"/>
							<div class="item-info">
								<h6><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</h6>
								<p><?php echo $_smarty_tpl->tpl_vars['row']->value['category'];?>
</p>
							</div>
						</a>
						<?php }} ?>
						<div class="clear"></div>
					</div>
						<div class="clear"></div>
					<?php if (count($_smarty_tpl->getVariable('pager')->value['pages'])>1){?>
					<div class="pagination">
						<?php if ($_smarty_tpl->getVariable('pager')->value['prev']){?><a href="javascript:void(0);" onclick="list_talent(<?php echo $_smarty_tpl->getVariable('pager')->value['prev'];?>
,$('#ltf'))" class="btn-prev btn-paging elements"></a><?php }?>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
						<a href="javascript:void(0);" onclick="list_talent(<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
,$('#ltf'))" class="btn-paging <?php if ($_smarty_tpl->tpl_vars['row']->value==$_smarty_tpl->getVariable('currentPage')->value){?>current-page<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
						<?php }} ?>
						<?php if ($_smarty_tpl->getVariable('pager')->value['next']){?><a href="javascript:void(0);" onclick="list_talent(<?php echo $_smarty_tpl->getVariable('pager')->value['next'];?>
,$('#ltf'))" class="btn-next btn-paging elements"></a><?php }?>
					</div>
					<?php }?>
					<input type="hidden" value="" name="page" id="page"/>
				</div>
			</div>
		</form>
	</div>
	

	<script>
		function list_talent(page,holder){
			
			$('#page').val(page);
			holder.submit();
			
		}
	</script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	