<?php /* Smarty version Smarty-3.0.6, created on 2015-07-14 13:28:50
         compiled from "/media/WWW/public/PrimerTalent/modules/list_company/init.html" */ ?>
<?php /*%%SmartyHeaderCode:35530191955a4e462964e30-40950399%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bee72c519a3e2cb2ca0820777531f757714ffcba' => 
    array (
      0 => '/media/WWW/public/PrimerTalent/modules/list_company/init.html',
      1 => 1436869729,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35530191955a4e462964e30-40950399',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php $_template = new Smarty_Internal_Template("templates/header.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>
	<div id="Content">
		<form method="GET" action="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_company.html" id="ltf">
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
list_talent.html">Discover Talents</a>
						<a href="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
list_company.html" class="filters-1-select">Event Manager</a>
					</div>
					
					<div class="search_form">
												
						<select class="performance sl-box sl-box1" name="business_type_id" id="business_type_id" onchange="list_company(1,$('#ltf'));">
							<option value="">Business type</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('business_type_id')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
							<?php }} ?>
						</select>
						
						<select class="business-type sl-box" name="business_regions_id" id="business_regions_id" onchange="list_company(1,$('#ltf'));">
							<option value="">Business Regions</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('business_regions')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('business_regions_id')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
							<?php }} ?>
						</select>
						
						<select class="business-type sl-box" name="booking_type_id" id="booking_type_id" onchange="list_company(1,$('#ltf'));">
							<option value="">Booking types</option>
							<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('booking_type')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['v']->value['id']==$_smarty_tpl->getVariable('booking_type_id')->value){?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
</option>
							<?php }} ?>
						</select>
						
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
<?php if ($_smarty_tpl->getVariable('SESSION_USER')->value['id']==$_smarty_tpl->tpl_vars['row']->value['id']){?>profile<?php }else{ ?>company/profile/<?php echo $_smarty_tpl->tpl_vars['row']->value['id'];?>
.html<?php }?>" class="artist-preview">
							<img src="<?php echo $_smarty_tpl->getVariable('PROJECT')->value;?>
<?php if ($_smarty_tpl->tpl_vars['row']->value['pic']){?>uploads/thumb/<?php echo $_smarty_tpl->tpl_vars['row']->value['pic'];?>
<?php }else{ ?>img/company-default.png<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
" width="150" height="150"/>
							<div class="item-info">
								<h6><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</h6>
								<p><?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['row']->value['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['btv']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?><?php echo $_smarty_tpl->tpl_vars['v']->value['name'];?>
<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['btv']['last']){?>, <?php }?><?php }} ?></p>
							</div>
						</a>
						<?php }} ?>
						<div class="clear"></div>
					</div>
						<div class="clear"></div>
					<?php if (count($_smarty_tpl->getVariable('pager')->value['pages'])>1){?>
					<div class="pagination">
						<?php if ($_smarty_tpl->getVariable('pager')->value['prev']){?><a href="javascript:void(0);" onclick="list_company(<?php echo $_smarty_tpl->getVariable('pager')->value['prev'];?>
,$('#ltf'))" class="btn-prev btn-paging elements"></a><?php }?>
						<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['cnt'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('pager')->value['pages']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
 $_smarty_tpl->tpl_vars['cnt']->value = $_smarty_tpl->tpl_vars['row']->key;
?>
						<a href="javascript:void(0);" onclick="list_company(<?php echo $_smarty_tpl->tpl_vars['row']->value;?>
,$('#ltf'))" class="btn-paging <?php if ($_smarty_tpl->tpl_vars['row']->value==$_smarty_tpl->getVariable('currentPage')->value){?>current-page<?php }?>"><?php echo $_smarty_tpl->tpl_vars['row']->value;?>
</a>
						<?php }} ?>
						<?php if ($_smarty_tpl->getVariable('pager')->value['next']){?><a href="javascript:void(0);" onclick="list_company(<?php echo $_smarty_tpl->getVariable('pager')->value['next'];?>
,$('#ltf'))" class="btn-next btn-paging elements"></a><?php }?>
					</div>
					<?php }?>
					<input type="hidden" value="" name="page" id="page"/>
				</div>
			</div>
		</form>
	</div>
	

	<script>
		function list_company(page,holder){
			
			$('#page').val(page);
			holder.submit();
			
		}
	</script>
<?php $_template = new Smarty_Internal_Template("templates/footer.html", $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate();?><?php $_template->updateParentVariables(0);?><?php unset($_template);?>	